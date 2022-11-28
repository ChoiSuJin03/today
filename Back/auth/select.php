<?php
require "conn.php";

session_start();

$id = $_POST['id'];
$pw = $_POST['pw'];

$sql = "SELECT * FROM sujin where id = '$id'";

$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_array($result);

$db_id = $row['id'];
$db_pw = $row['pw'];

$_SESSION["id"] = $row["id"];
$_SESSION["name"] = $row["name"];
$_SESSION["birth"] = $row["birth"];

echo '
    <script>
    location.href = "Login.php"
    </script>
    '

?>
