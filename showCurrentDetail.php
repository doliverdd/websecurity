<?php

include ('../../connect/hosts_connect.php');
mysql_select_db('doliver_hosts') or die(mysql_error());
$q = $_REQUEST["q"];

$result = mysql_query("select updates.id as id, hostinfo.hostname as host, count(*)as count from updates left join hostinfo on updates.id = hostinfo.id where updates.lastupdate like '2016-02%' group by updates.id order by hostinfo.hostname;");
echo '<table class="table table-bordered table-hover table-striped">';
echo '<thead><tr><th>ID</th><th>Host</th><th># Updates</th></tr></thead><tbody>';
while ($row = mysql_fetch_array($result)) {

	
echo '<tr><td onclick="showHostUpdates(this);">'; 
//echo '<a href=';
echo $row['id'] . '</a></td><td>' . $row['host'] . '</td><td>' . $row['count'] . '</td></tr>';

}
echo '</tbody></table>';
mysql_close($con);

?>

