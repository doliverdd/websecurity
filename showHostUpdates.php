<?php

include ('../../connect/hosts_connect.php');
mysql_select_db('doliver_hosts') or die(mysql_error());
$q = $_REQUEST["q"];

$result = mysql_query("select updates.id as id, lastupdate as lupdate, updatedBy, command from updates where updates.id = $q order by lastupdate desc;");
echo '<table class="table table-bordered table-hover table-striped">';
echo '<thead><tr><th>ID</th><th>Last Update</th><th>Updated By</th><th>Command</th></tr></thead><tbody>';
while ($row = mysql_fetch_array($result)) {

echo '<tr><td>' . $row['id'] . '</td><td>' . $row['lupdate'] . '</td><td>' . $row['updatedBy'] . '</td><td>' . $row['command'] . '</td></tr>';

}
echo '</tbody></table>';
mysql_close($con);

?>



