<?php 

	$dsn = "mysql:host=localhost;dbname=projecttwo";

	try {
		$pdo = new PDO($dsn, 'root', '1245');
	} catch (PDOException $e) {
		echo $e->getMessage();
	}

?>