<?php

include ('../../connect/hosts_connect.php');
mysql_select_db('doliver_hosts') or die(mysql_error());
$q = $_REQUEST["q"];

$result = mysql_query("select distinct count(hostname) as count from hostinfo;");

while ($row = mysql_fetch_array($result)) {

	echo '<br>';
echo $row['count'] . '<br>';
}

mysql_close($con);

?>
