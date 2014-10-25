<?php
$mysqli = new mysqli("104.131.13.110", "root", "bigguccisosa", "chatstorm");
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
echo $mysqli->host_info . "\n";

?>
