<?php

require( dirname( __FILE__ ) . DIRECTORY_SEPARATOR . "config_sql.php" );

$query="select * from Student where roll_no='200802026'";
$res=mysql_query($query);

while($row=mysql_fetch_array($res)){
	echo $row['name'];
}
?>
