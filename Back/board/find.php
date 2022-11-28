<?php
require "../auth/conn.php";

$sql  = "select * from sujin_board_dev";
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_all($result);





?>