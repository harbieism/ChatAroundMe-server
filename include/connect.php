<?php
$conn = new conn("localhost", "root", "bigguccisosa", "chatstorm", 3306);
if ($conn->connect_errno) {
    echo "Failed to connect to MySQL: (" . $conn->connect_errno . ") " . $conn->connect_error;
}
echo $conn->host_info . "\n";

?>
