<?php 

	try {
		$db = new PDO('mysql:dbname=pokemon;host=127.0.0.1', 'root', 'root');
	} catch (PDOException $e) {
		die('AHHHHHHH, LA HONTE !');
	}