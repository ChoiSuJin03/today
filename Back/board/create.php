<?php
require "../auth/conn.php";

$title = $_POST["title"];
$memo = $_POST["memo"];

$sql  = "INSERT INTO sujin_board_dev(title, memo) VALUES('$title', '$memo')";
$result = mysqli_query($conn, $sql);

echo $result;

