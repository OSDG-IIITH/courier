<?
session_start();  

require( dirname( __FILE__ ) . DIRECTORY_SEPARATOR . "config_sql.php" );

$name=$_POST['user'];

$query="select * from Student where username='$name'";
$result=mysql_query($query) or die("cannot find password");
$row = mysql_fetch_array($result);
$roll=$row['roll_no'];
$_SESSION['student']=$roll;
header( "Location:index.php?prof=1&auth=1" ) ;
mysql_close();
?>
