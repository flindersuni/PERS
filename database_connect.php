<?php 

//$servername = "127.0.0.1"; //local
//$servername = "webmysql-db01d"; //DEV
//$servername = "webmysql-db01p"; //PROD
$servername = "elearn-db01p.it.ad.flinders.edu.au"; //CURRENT Db
//$username = "ehltadmin"; 
//$password = "P@ssw0rd";
//$username = "root"; //local
//$username = "fili0008";
//$username = "Test";
$username = "persadmin"; //CURRENT Db
//$password = "";//local
//$password = "*rpRhGE7CrxEOUHv";//DEV
//$password = "*CnIFgg7ok3LXaSl";//PROD
//$password = "!2345University";//PROD
$password = "Ferg452!fwf";//CURRENT Db
//$dbname = "EHLTWEB";
//$dbname = "pers"; //local
$dbname = "PERS"; //CURRENT Db
// Create connection
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
//$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
//if ($conn->connect_error) {
 // die("Connection failed: " . $conn->connect_error);
//}
//echo "Connected successfully to webmysql-db01d !!";



 ?>