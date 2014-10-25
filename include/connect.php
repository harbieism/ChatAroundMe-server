<?php
$mysqli = new mysqli("localhost", "root", "bigguccisosa", "chatstorm", 3306);
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
echo $mysqli->host_info . "\n";

?>
