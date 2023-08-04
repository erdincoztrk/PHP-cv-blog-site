<?php 

try {
	$db=new PDO("mysql:host=localhost;dbname=cvsite;charset=utf8",'root','yalova771907');
	
} catch (PDOException $e) {
	echo $e -> getMessage();
}


 ?>