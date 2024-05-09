<?php
//include('ldap_connect2.php');
error_reporting(0); 
include ('database_connect.php');
$sql="SELECT * FROM pers_admin_staff";

//$result = pg_query($sql);
$result = $conn->query($sql);
//$nrows = pg_numrows($result);
if ($result->num_rows > 0) {
    

//echo $_SERVER["REMOTE_USER"];
//echo "<p>STOP HERE";
//exit;
////
 ////
  while($row = $result->fetch_assoc()) {
   $fan =($row['admin_fan']);


    
if ($_SERVER["REMOTE_USER"]==$fan)  {

 
return ("ok");



    
    
    
if (!$result) {
  echo "An error occured.\n";
  exit;
}

} else {
  
}
/////

  }
}
//echo "stopped";
//exit;

$denied='admin_denied.php';
    header('Location: '. $denied, false);
    exit;
   
 ?>