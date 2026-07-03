<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Edit Book</title>
</head>
<body>
    
    <div class="container">
        <header class="d-flex justify-content-between align-items-center my-3">
            <!-- addbutton -->
             <div class="heading">
                <h1>Edit book</h1>
             </div>
             <div class="btn">
                <a href="index.php" class="btn btn-primary">Back</a>
             </div>

        </header>
        <?php

        include 'connect.php';
        if (isset($_GET['id'])) {
               $id = $_GET['id'];
        $sql = "SELECT * FROM books WHERE id = $id";
        $result = mysqli_query($connect, $sql);
       $row= mysqli_fetch_assoc($result);
           
        }
        ?>
          <form action="process.php" method="post">
            <div class="form-element mb-3">
                <input type="text" value="<?php echo $row['title']; ?>" placeholder="Book Name" name="title" class="form-control">
            </div>
            <div class="form-element mb-3">
                <input type="text" value="<?php echo $row['author']; ?>" placeholder="Author Name" name="author" class="form-control">
            </div>
            <div class="form-element mb-3">
               <select name="type" class="form-control">
                  <option value="">Select Book Type</option>
                <option value="Python" <?php echo ($row['type'] == 'Python') ? 'selected' : ''; ?>>Python</option>
                <option value="Javascript" <?php echo ($row['type'] == 'Javascript') ? 'selected' : ''; ?>>Javascript</option>
                <option value="Java" <?php echo ($row['type'] == 'Java') ? 'selected' : ''; ?>>Java</option>
                <option value="PHP" <?php echo ($row['type'] == 'PHP') ? 'selected' : ''; ?>>PHP</option>
               </select>
            </div>
              <div class="form-element mb-3">
                <input type="text" value="<?php echo $row['description']; ?>" placeholder="type Description" name="description" class="form-control">
            </div>
            <!-- hidden input field for id -->
            <input type="hidden" value="<?php echo $row['id']; ?>" name="id">
            <!-- submitbutton -->
               <div class="form-element">
                <input type="submit" value="Update Book" name="update" class="btn btn-success">
            </div>


        </form>


<?php
     
       


     


?>
      
    </div>
</body>
</html>