<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book List</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
     <div class="container">
        <header class="d-flex justify-content-between align-items-center my-3">
            <!-- addbutton -->
             <div class="heading">
                <h1>List of Book</h1>
             </div>
             <div class="btn">
                <a href="create.php" class="btn btn-success">Create a book</a>
             </div>

        </header>
             <?php
        session_start();
        if(isset($_SESSION['create'])){
            echo "<div class='alert alert-success'>".$_SESSION['create']."</div>";
            unset($_SESSION['create']);
        }
         if(isset($_SESSION['update'])){
            echo "<div class='alert alert-success'>".$_SESSION['update']."</div>";
            unset($_SESSION['update']);
        }
        if(isset($_SESSION['delete'])){
            echo "<div class='alert alert-success'>".$_SESSION['delete']."</div>";
            unset($_SESSION['delete']);
        }

        ?>
       <!-- table -->
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Book Name</th>
                    <th>Author Name</th>
                    <th>Book Type</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'connect.php';
                $sql = "SELECT * FROM books";
                $result = mysqli_query($connect, $sql);
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $row['title'] . "</td>";
                        echo "<td>" . $row['author'] . "</td>";
                        echo "<td>" . $row['type'] . "</td>";
                        echo "<td>" . $row['description'] . "</td>";
                        echo "<td><a href='edit.php?id=" . $row['id'] . "' class='btn btn-primary'>Edit</a> 
                                  <a href='delete.php?id=" . $row['id'] . "' class='btn btn-danger'>Delete</a></td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='5'>No books found.</td></tr>";
                }
                ?>
            </tbody>

        </table>
    </div>
    
</body>
</html>