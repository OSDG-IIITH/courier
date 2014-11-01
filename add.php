<?

require( dirname( __FILE__ ) . DIRECTORY_SEPARATOR . "config_sql.php" );

$name=$_POST['name'];
$roll=$_POST['roll'];
$room=$_POST['room_no'];
$email=$_POST['id'];

$query="insert into Student values('$roll','$name','$email','$room','','')";
$result=mysql_query($query) or die("cannot add user");
header( "Location: admin.php?err=1");
mysql_close();
?>
