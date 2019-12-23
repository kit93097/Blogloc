<?php
namespace src\configuration;
class Database {
	private static $objInstance;
	function __construct() {}
	private function __clone() {}
	protected static function getInstance() {
           
        if(!self::$objInstance){
    		$host = '127.0.0.1';
    		$db   = 'first';
    		$user = 'root';
    		$pass = '';
    		$charset = 'utf8';

    		$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
    		$opt = [
        		\PDO::ATTR_ERRMODE            => \PDO::ERRMODE_EXCEPTION,
        		\PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
        		\PDO::ATTR_EMULATE_PREPARES   => false,
    		];
    		self::$objInstance = new \PDO($dsn, $user, $pass, $opt);
    		return self::$objInstance;
        } else return self::$objInstance;
    }
    public static function showtab() {

    	$PDO = self::getInstance();
    	$res = $PDO->prepare('select name from data where id = ?');
    	$res->execute(array(1));
    	foreach ($res as $row){
    		echo $row['name'] . "</br>";
    	}
    }
}



?>