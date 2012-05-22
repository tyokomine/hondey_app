<?php
class HondeyController extends AppController {
	var $uses = array('Member');
	//var $viewClass = 'Smarty';

	function index() {
		$this -> layout = "Hondey/login";
	}

	function bookRegister($sid) {
		$this -> layout = "Hondey/book_register";
		$this -> Session -> id($sid);
		$id = $this -> Session -> read('hondey_id');
		$member = $this -> Member -> find("first", array("conditions" => array("member_id" => $id)));
		$this -> set('user', $member["Member"]);
		$this -> set('friends', $this -> Session -> read('friends'));
		$this -> set('sid', $sid);
	}

	function bookConversation($sid) {
		$this -> layout = "Hondey/book_conversation";
		$this -> Session -> id($sid);
		$id = $this -> Session -> read('hondey_id');
		$member = $this -> Member -> find("first", array("conditions" => array("member_id" => $id)));
		$this -> set('user', $member["Member"]);
		$this -> set('friends', $this -> Session -> read('friends'));
		$this -> set('sid', $sid);
	}

	function amazonSuggest() {
		$this -> layout = 'ajax';
		require_once '/usr/share/pear/Services/Amazon.php';
		$query = $_GET["q_word"];

		//Amazonのリクエストするための準備
		$amazon = new Services_Amazon('AKIAJDLD7CN7L4A65UFA', 'k+JqqCO0+W/ExOEDM3vYxHcllHlW5F3UDX0BHms1', 'tyokomine-22');
		//$options = array(1 => true, 2 => true, 3 => true);
		//$amazon -> setBaseUrl('http://ecs.amazonaws.jp/onca/xml');
		$amazon -> setLocale('JP');
		$options['ResponseGroup'] = 'Small,Images';
		$options['Keywords'] = $query;
		$options['Sort'] = 'salesrank';
		//リクエスト送信
		$result = $amazon -> ItemSearch('Books', $options);
		//var_dump($result);
		//ビューに送る
		$this -> set('lists', json_encode($result["Item"]));
	}

	function ajaxSuggest($sid) {
		$this -> layout = 'ajax';
		$this -> Session -> id($sid);
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

	function facebookAouth() {
		require_once '/usr/share/pear/facebook-php-sdk/src/facebook.php';
		//Facebookアプリの情報
		define("HondeyURL", "http://wishalist.com/Hondey/facebookAouth");
		define("homeURL", "http://wishalist.com/Hondey/bookRegister");
		$config = array();
		$config['appId'] = '158794500914681';
		$config['secret'] = '90e103874d5fba4f6fd5b6e8f1c52d14';
		//インスタンス生成
		$facebook = new Facebook($config);
		$uid = $facebook -> getUser();
		//ログイン認証
		$code = $_REQUEST["code"];
		if ($uid && !(empty($code))) {
			//if ($uid) {
			//セッションスタート
			$access_token = $facebook -> getAccessToken();
			$sid = $this -> Session -> id();
			if (empty($sid)) {
				CakeSession::start();
			}
			//友達の情報をセッションに追加
			$friends = $facebook -> api('/me/friends');
			$this -> Session -> write('friends', $friends["data"]);
			//DBですでに登録されてるか判定（fb_idで判定）
			$fb_data = $facebook -> api('/me');
			$member = $this -> Member -> find("first", array("conditions" => array("member_fb_id" => $fb_data["id"])));
			//登録されてなかったらDBにユーザ追加
			if (!$member) {
				$user_profile = $facebook -> api('/me');
				$data = array("member_name" => $user_profile["first_name"], "member_fb_id" => $user_profile["id"], "member_is_valid" => 1, "member_regi_date" => date('Y-m-d'), "member_access_date" => date('Y-m-d'), "member_access_token" => $access_token, );
				$this -> Member -> save($data);
				$member = $this -> Member -> find("first", array("conditions" => array("member_fb_id" => $fb_data["id"])));
			}
			$this -> Session -> write('hondey_id', $member["Member"]["member_id"]);
			$url = homeURL . "/" . $sid;
			$this -> redirect($url);
		} else {
			$params = array('scope' => 'read_stream, friends_likes', 'redirect_uri' => HondeyURL);
			$loginUrl = $facebook -> getLoginUrl($params);
			$this -> redirect($loginUrl);
			// var_dump($uid);
			// var_dump($code);
		}
	}

	function home($sid) {
		$this -> layout = "Hondey/default";
		$this -> Session -> id($sid);
		$id = $this -> Session -> read('hondey_id');
		$member = $this -> Member -> find("first", array("conditions" => array("member_id" => $id)));
		$this -> set('user', $member["Member"]);
		$this -> set('friends', $this -> Session -> read('friends'));
		$this -> set('sid', $sid);
	}

}
