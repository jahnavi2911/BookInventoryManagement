<?php

include "../connect.php";
if (isset($_GET['deleteBookId'])) {
    $id = $_GET['deleteBookId'];
    $sql = "DELETE FROM storethree WHERE id=$id";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        // echo "deleted";
        header("location: store3.php");
    } else {
        die(mysqli_error($conn));
    }
}
