<?php
require "../auth/conn.php";

$sql  = "select * from sujin_board_dev";
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_all($result);

echo "<br/>";

// print_r($row[0]);
// print_r($row[0][0]);
// print_r($row[0][1]);

for($i = 0; $i < count($row); $i++){
    $idx = 0;
    echo "<a href='/today/back/board/find/<?=$row[$i][$idx]?>' >";
    echo "제목 : ";
    print_r($row[$i][1]);
    echo "    ";
    echo "내용1: ";
    print_r($row[$i][2]);
    echo "<br/>";
    echo "</a>";
    echo "</a>";
}

?>