<?php
class TestController extends AppController {

	var $viewClass = 'Smarty';
	function index() {
		$this -> set('name', 'yossy');
	}
}

?>
