<?php
namespace src\configuration;
class Router extends \src\controllers\StaticController {
	private $path;
	private $uri;
	function __construct() {
			$this->path = include(DIRROOT.DIRCONF.'page-path.php');
			$uuri = trim($_SERVER['REQUEST_URI'], '/');
			if(preg_match('/(\W)/', $uuri) == 0) {
				$this->uri = $uuri;
			} else {
				header('HTTP/1.1 404 Not Found');
				exit();
			}
	}

	public function getUri() {
		var_dump($this->uri);
	}

	public function run() {
			//head page
		if($this->uri == "") {
			parent::__construct();
			self::headpage();
			exit();
		}
			//target page
		$chekpoint = true;
		foreach ($this->path as $key) {
			if($this->uri == $key) {
				$chekpoint = false;
				parent::__construct();
				self::$key();
				require_once(DIRROOT.DIRVIEWS.'footer.php');
				exit();
			}
		}
		if($chekpoint == true) {
				header('HTTP/1.1 404 Not Found');
			}
	}
}


?>