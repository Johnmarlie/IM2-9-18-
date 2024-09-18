<?php


$host = "localhost";
$user = "root";
$password ="";
$dbname = "alinodb";
//data source name
$db = "mysql:host=$host;dbname=$dbname";

$connection = new PDO ($db,$user,$password);
$connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);

$first_name = "Kylle";
$last_name = "Aliño";
$age = 20;
$gender = "Male";

$sql = "INSERT INTO new_table(`first_name`,`last_name`,`age`,`gender`) VALUES (?,?,?,?)";
$statement = $connection->prepare($sql);
$statement->execute([$first_name,$last_name,$age,$gender]);

$statement = $connection->query("SELECT * FROM new_table");
while($row = $statement->fetch()){
   echo $row['id']."-".$row['first_name']." ".$row['last_name']."<br>";
}


