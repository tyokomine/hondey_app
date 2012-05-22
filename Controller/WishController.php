<?php
class WishController extends AppController {
	var $uses = array('Member');
	var $viewClass = 'Smarty';
	var $friends;

	function index() {

	}

	function ajaxSuggest() {
		//require_once '/usr/share/pear/facebook-php-sdk/src/facebook.php';

		$this -> layout = 'ajax';

		$query = $_GET["q_word"];
		$friends = $this -> Session -> read('friends');
		$num = 0;
		foreach ($friends as $value) {
			if (stripos($value["name"], $query)) {
				$result[] = $value;
				$num++;
			}
			if ($num >= 5)
				break;
		}
		$this -> set('friends', json_encode($result));
	}
	function amazonSuggest() {
		require_once '/usr/share/pear/HTTP/Request.php';
		$this -> layout = 'ajax';

		$query = $_GET["q_word"];
		$url="http://completion.amazon.co.jp/search/complete?method=completion&search-alias=stripbooks&mkt=6&q=a".$query;
		
		$req = new HTTP_Request();
		$req -> setURL($url);
		$req -> setMethod(HTTP_REQUEST_METHOD_POST);
		$req -> sendRequest();
		$res = $req -> getResponseBody();
		$result=json_decode($res);
		var_dump($result[1]);
		
		$this -> set('lists', $result[1]);
	}

	function facebookAouth() {
		require_once '/usr/share/pear/facebook-php-sdk/src/facebook.php';

		define("WISHURL", "http://wishalist.com/cake/Wish/facebookAouth");

		//セッションスタート
		$sid = $this -> Session -> id();
		if (empty($sid)) {
			CakeSession::start();
		}
		$config = array();
		$config['appId'] = '158794500914681';
		$config['secret'] = '90e103874d5fba4f6fd5b6e8f1c52d14';
		//$config['cookie'] = true;
		// optional

		$facebook = new Facebook($config);
		//var_dump($facebook);

		$this -> Session -> write();

		$uid = $facebook -> getUser();
		//ログイン認証
		$code = $_REQUEST["code"];
		//var_dump($uid);
		if ($uid || !(empty($code))) {
			$access_token = $facebook -> getAccessToken();
			$user_profile = $facebook -> api('/me');
			$friends = $facebook -> api('/me/friends');
			$this -> Session -> write('friends', $friends["data"]);
			//$this -> set('user_profile', $user_profile);
			$this -> set('friends', $friends["data"]);

			$data = array("member_name" => $user_profile["name"],
			//"member_mail"=>$user_profile["mail"],
			"member_fb_id" => $user_profile["id"], "member_is_valid" => 1, "member_regi_date" => date('Y-m-d'), "member_access_date" => date('Y-m-d'), "member_access_token" => $access_token, );
			//$this->Member->save($data);
			$name = $this -> Member -> find();
			//var_dump($name);
			$this -> set('user_name', $name["Member"]["member_name"]);
		} else {
			$params = array('scope' => 'read_stream, friends_likes', 'redirect_uri' => WISHURL);
			$loginUrl = $facebook -> getLoginUrl($params);
			//echo $loginUrl . "<hr>";
			$this -> redirect($loginUrl);
			//header("Location:" . $loginUrl);
		}
	}

	function amazonList() {
		//require_once '/usr/share/pear/facebook-php-sdk/src/facebook.php';
		require_once '/usr/share/pear/Services/Amazon.php';
		require_once '/usr/share/pear/HTTP/Request.php';

		//AmazonのwishListURL
		$url = "http://www.amazon.co.jp/registry/wishlist/1KTS0E3107GW9/";
		//オブジェクト生成
		$req = new HTTP_Request();
		//リクエストを送るURL
		$req -> setURL($url);
		//POSTするデータ
		$req -> setMethod(HTTP_REQUEST_METHOD_POST);
		//リクエスト送信
		$req -> sendRequest();
		//レスポンス取得
		$res = $req -> getResponseBody();
		//var_dump($res);
		//特定の語で分割
		$res = explode('"asinReviewsSummary"', $res);
		//var_dump($res);
		//amazonのASINコードを取得
		$i = 0;
		foreach ($res as $value) {
			$pos = strpos($value, 'name');
			$asin[$i] = substr($value, $pos + 6, 10);
			$i++;
		}
		array_shift($asin);

		//クエリ作成
		$i = 0;
		$str = array();
		foreach ($asin as $value) {
			$a = intval($i / 10);
			//$str[$a] .= $value . ",";
			if ($i < 10) {
				$str[0] .= $value . ",";
			}
			$i++;
		}
		//var_dump($str[0]);

		//Amazonのリクエストするための準備
		$amazon = new Services_Amazon('AKIAJDLD7CN7L4A65UFA', 'k+JqqCO0+W/ExOEDM3vYxHcllHlW5F3UDX0BHms1', 'tyokomine-22');
		//$options = array(1 => true, 2 => true, 3 => true);
		//$amazon -> setBaseUrl('http://ecs.amazonaws.jp/onca/xml');
		$amazon -> setLocale('JP');
		$options['ResponseGroup'] = 'Small,Images';
		//リクエスト送信
		$result = $amazon -> ItemLookup($str[0], $options);
		//var_dump($result);
		//ビューに送る
		$this -> set('lists', $result["Item"]);
	}

}
?>
