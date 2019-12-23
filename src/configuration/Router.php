<?php
namespace src\configuration;
class Router extends \src\controllers\StaticController {

	private static $path;
	private static $uri;

	public function __construct() {}
	private function __clone() {}

	static function run() {
			//---	Prepare uri and path
		self::$path = require_once(ROOT.DIRCONF.'page-path.php');
		if(preg_match('/(\W)+-/', $u = trim($_SERVER['REQUEST_URI'], '/')) == false) self::$uri = & $u;
		else { header('HTTP/1.1 404 Not Found'); exit(); }

			//---	Target page
		foreach (self::$path as $key => $val) {
			if(self::$uri == $key) {
				require_once(ROOT.DIRVIEWS.'menu.php'); parent::$val();
				require_once(ROOT.DIRVIEWS.'footer.php');
				exit();
			}
		}
			//---	Target not page
		header('HTTP/1.1 404 Not Found');
	}
}
?>