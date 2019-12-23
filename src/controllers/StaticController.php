<?php
namespace src\controllers;
class StaticController {#extends \src\configuration\Router {
	function __construct() {
		require_once(DIRROOT.DIRVIEWS.'menu.php');
	}
	
	protected static function headpage() {
		require_once(DIRROOT.DIRVIEWS.'head.php');
		require_once(DIRROOT.DIRVIEWS.'footer.php');
	}

	protected static function about() {
		require_once(DIRROOT.DIRVIEWS.'about.php');
	}

	protected static function equipments() {
		require_once(DIRROOT.DIRVIEWS.'equipments.php');
	}

	protected static function technologies() {
		require_once(DIRROOT.DIRVIEWS.'technologies.php');
	}

	protected static function communications() {
		require_once(DIRROOT.DIRVIEWS.'communications.php');
	}

}


?>