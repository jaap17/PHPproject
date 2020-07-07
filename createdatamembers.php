<?php

try{
	$dbhandler = new PDO('mysql:host=127.0.0.1;dbname=phpproject','root','');
	$dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION); 
        $sql = "create table DeptMembers( MemberId INT(6) AUTO_INCREMENT PRIMARY KEY, Username varchar(10) NOT NULL , Password varchar(10) , MemberName varchar(40)  )";
        $query = $dbhandler->query($sql);
        echo "Table created succesfully";
}
catch(PDOException $e){
	echo $e->getMessage();
	die();
}

echo "The rest of our page..."

?>