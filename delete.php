<?php

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    include 'connect.php';

    $sql = "DELETE FROM books WHERE id = $id";
    if (mysqli_query($connect, $sql)) {
        header("Location: index.php");
        exit();
    } else {
        echo "Error deleting record: " . mysqli_error($connect);
    }

    mysqli_close($connect);
} else {
    echo "Invalid request.";
}



?>