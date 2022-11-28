<?php
    /* Connection */
    $conn = mysqli_connect("210.90.136.10", "pino", "qwer1595", "php");

    if ($conn == false)
        echo "\n result: false"; 

    /* SELECT */
    /*$sql = "SELECT * FROM tbl_sujin ORDER BY sujin DESC";
    echo "$sql<br/>";
    $result = mysqli_query($conn, $sql);
    var_dump($result->num_rows);

    while($row = mysqli_fetch_array($result)){
        echo $row['userId'].':'.$row['userName'].'<br/>';
    }*/

    /* INSERT */
    /*$sql  = "INSERT INTO tb_sujin (userId, userName) VALUES ('$id','$name')";
    $result = mysqli_query($conn, $sql);

    if($result === false){
        echo mysqli_error($conn);
    }else{
     echo "입력성공<br/>";
    }*/

?>