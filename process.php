<?php
include 'connect.php';
//if the button is clicked then we collect the data
// we set name='create' in submit button in create.php file
// here conn is the connection variable from connect.php file
if(isset($_POST['create'])){
    $title = mysqli_real_escape_string($connect, $_POST['title']);
    $author = mysqli_real_escape_string($connect, $_POST['author']);
    $type = mysqli_real_escape_string($connect, $_POST['type']);
    $description = mysqli_real_escape_string($connect, $_POST['description']);

    $sql = "INSERT INTO books(title, author, type, description) VALUES('$title', '$author', '$type', '$description')";
    $result = mysqli_query($connect, $sql);
    if($result){
        echo "Book added successfully.";
        // header("Location: index.php");
    }else{
        die("Error: ".mysqli_error($connect));
    }
}



?>