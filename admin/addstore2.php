<?php
include '../connect.php';

$insert = false;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $bookid = $_POST['bookid'];
    $bookname = $_POST['bookname'];
    $count = $_POST['count'];

    $sql = "INSERT INTO storetwo (bookid,bookname,inventory) VALUES ('$bookid','$bookname',$count)";
    $result = mysqli_query($conn, $sql);

    if ($result) {

        $insert = true;
    } else {
        echo "There is some error!!" . mysqli_error($conn);
    }
} else {
    echo "";
}


header("location: store2.php");
exit;
