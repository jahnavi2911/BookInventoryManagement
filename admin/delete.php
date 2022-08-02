<?php

include "../connect.php";
if (isset($_GET['deleteBookId'])) {
    $id = $_GET['deleteBookId'];
    $sql = "DELETE FROM storeone WHERE id=$id";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        // echo "deleted";
        header("location: store1.php");
    } else {
        die(mysqli_error($conn));
    }
}
