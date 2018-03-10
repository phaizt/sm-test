<?php
use Controllers\SmTest;

/**
* 	Main Class
*/
class Main
{
	public static function autoloader($className)
	{
	    $path = __DIR__."/";
	    include $path.str_replace('\\', '/', $className).'.php';	    
	}
	public function init()
	{
		if ($_POST) {
			$sm = new SmTest();
			extract($_POST);
			$result = "";
			if ($type == 1) {
				$result = $sm->stringReverse($input);
			}else if ($type == 2) {
				$result = $sm->primeNumber($input);
			}else if ($type == 3) {
				$result = $sm->avgNumber($input);
			}
		}
		ob_start();
		include 'Views/main.php';
		ob_flush();
	}
	public function url($url = "")
	{
		$actual_link = "";
		if ($url == "") {
			$actual_link = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
		}
		echo $actual_link;
	}
	public function no1()
	{
		
	}
}

spl_autoload_register('Main::autoloader');
$sm = new Main();
$sm->init();