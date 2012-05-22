class HelloWorldController extends AppController {

	public $name = 'HelloWorld';
	public $uses = null;  // $uses = array(); でも同じ動作
	public $autoRender = false;
	
	function index()
	{
		echo "hello world!";
	}
}