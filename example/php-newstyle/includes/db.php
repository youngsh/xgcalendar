<?php 
	include('conf.inc');
	
	function db_connect()
	{
		
		global $dsn, $user,$password;
		try {
			$db = new PDO($dsn, $user, $password);
		} 
		catch (PDOException $e) {
			echo 'Connection failed: ' . $e->getMessage();
		}

		//$db->query("set names 'utf8'");
		
		return $db;
	}
?>
