<?php
include 'include/connect.php'

$sql = <<<SQL
    SELECT *
    FROM `RegisteredUser`
SQL;


if(!$result = $db->query($sql)){
    die('There was an error running the query [' . $db->error . ']');
}

while($row = $result->fetch_assoc()){
    echo $row['Email'] . '<br />';
}

?> 