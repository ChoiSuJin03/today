<?php
require "conn.php";

$id = $_POST['id'];
$pw = $_POST['pw'];
$name = $_POST['name'];
$sex = $_POST['sex'];
$birth = $_POST['birth'];
$agree = $_POST['agree'];

$sql  = "INSERT INTO sujin(Id, pw, Name, sex, birth, agree) VALUES ('$id', '$pw', '$name', '$sex', '$birth', '$agree')";
$result = mysqli_query($conn, $sql);

if($result === false){
    echo mysqli_error($conn);
}else{
 echo "입력성공<br/>";
}
?>