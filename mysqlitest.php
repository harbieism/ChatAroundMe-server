<?php
include 'include/connect.php';

$sql='SELECT Email FROM RegisteredUser';
 
$rs=$conn->query($sql);
 
if($rs === false) {
  trigger_error('Wrong SQL: ' . $sql . ' Error: ' . $conn->error, E_USER_ERROR);
} else {
  $rows_returned = $rs->num_rows;
}

$rs->data_seek(0);
while($row = $rs->fetch_assoc()){
    echo $row['col1'] . '<br>';
}

?> 