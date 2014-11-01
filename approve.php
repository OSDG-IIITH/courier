<?php

require( dirname( __FILE__ ) . DIRECTORY_SEPARATOR . "config_sql.php" );

$user=$_POST['emailid'];
$roll=$_POST['addroll'];


$query="update Student set username='$user' where roll_no='$roll'";
echo $query;
$result=mysql_query($query) or die("cannot add user");
//echo $roll;
//$_SESSION['useris']=$user;
header("Location:index.php?logout");
mysql_close();

?>
