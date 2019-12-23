<?php
namespace src\controllers;
class StaticController {#extends \src\configuration\Router {
	function __construct() {
		
	}
	
	protected static function headpage() {
		require_once(ROOT.DIRVIEWS.'head.php');
	}

	protected static function about() {
		require_once(ROOT.DIRVIEWS.'about.php');
	}

	protected static function equipments() {
		require_once(ROOT.DIRVIEWS.'equipments.php');
	}

	protected static function technologies() {
		require_once(ROOT.DIRVIEWS.'technologies.php');
	}

	protected static function communications() {
		require_once(ROOT.DIRVIEWS.'communications.php');
	}

}


?>