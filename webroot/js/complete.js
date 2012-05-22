function createXmlHttpRequest() {
    var xmlhttp = false;
  if( window.XMLHttpRequest) {
    xmlhttp = new XMLHttpRequest();
  } else if(window.ActiveXObject) {
    try {
      xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
    } catch(e) {
      xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
  }
  return xmlhttp;
}

var oldquery = "";
var xmlhttp = 0;
var input = 0;

function peekQuery (type,vid,nid,src) {

  if (! xmlhttp) xmlhttp = createXmlHttpRequest();

  if (! xmlhttp || xmlhttp.readyState == 1 || 
      xmlhttp.readyState == 2 || xmlhttp.readyState == 3){
    return; 
  }

  var textbox = document.getElementById(vid);
  var textbox2 = document.getElementById(nid);
  var query   = EscapeUTF8(textbox.value);

  if (query == "") {
    textbox.clearCompletionItems();
    textbox2.value = "";
  } else if (oldquery != query) {
    xmlhttp.open("GET", src + "?TYPE=" + type + "&KEY=" + query, true);
    xmlhttp.onreadystatechange = function() {
      if (xmlhttp.readyState == 4 && xmlhttp.status == 200
      && xmlhttp.responseText != "") {
        var ary = xmlhttp.responseText.split(/\n/);
        textbox.showCompletionItems(
          ary,
          function(n) {
            ary[n] = ary[n].replace(/<font color=red>/g,"");
            ary[n] = ary[n].replace(/<\/font>/g,"");
            var new_ary = ary[n].split(":");
            if (type == 1) {
              textbox2.value = new_ary[0];
              textbox.value = new_ary[1];
            } else {
               textbox2.value = new_ary[1];
               textbox.value = new_ary[0];
            }
            textbox.clearCompletionItems();
        oldquery = EscapeUTF8(textbox.value); } );
      }
    }
    xmlhttp.send(null)
  }

  oldquery = query;
}

function suggestOn(t,iid,oid,src) {
  var textbox = document.getElementById(iid);
  initCompletion(textbox);
  TimerID = setInterval(
    function () { peekQuery(t,iid,oid,src); },
  500);
}

function suggestOff(iid) {
  clearInterval(TimerID);
  DTimerID = setInterval(
    function () {
      var textbox = document.getElementById(iid);
      textbox.clearCompletionItems();
      clearInterval(DTimerID); },
  200);
}