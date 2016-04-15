<?php

include ('../../connect/hosts_connect.php');
mysql_select_db('doliver_hosts') or die(mysql_error());
$q = $_REQUEST["q"];

$result = mysql_query("select * from hostinfo where hostinfo.hostname like 'login%'");

while ($row = mysql_fetch_array($result)) {

	echo '<br>';
echo 'Hostname:' . $row['hostname'] . '<br>';
echo 'Location:' . $row['location'] . '<br>';
echo 'SerialNo:' . $row['serialno'] . '<br>';
echo 'OS:' . $row['OS'] . '<br>';
echo 'PurchaseYear:' . $row['purchase_year'] . '<br>';
echo 'HardwareCategory:' . $row['Hardware_category'] . '<br>';
}

mysql_close($con);

?>
