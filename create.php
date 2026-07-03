<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Add new Book</title>
</head>
<body>
    
    <div class="container">
        <header class="d-flex justify-content-between align-items-center my-3">
            <!-- addbutton -->
             <div class="heading">
                <h1>Add New Book</h1>
             </div>
             <div class="btn">
                <a href="index.php" class="btn btn-primary">Back</a>
             </div>

        </header>
   
        <form action="process.php" method="post">
            <div class="form-element mb-3">
                <input type="text" placeholder="Book Name" name="title" class="form-control">
            </div>
            <div class="form-element mb-3">
                <input type="text" placeholder="Author Name" name="author" class="form-control">
            </div>
            <div class="form-element mb-3">
               <select name="type" class="form-control">
                  <option value="">Select Book Type</option>
                <option value="Python">Python</option>
                <option value="Javascript">Javascript</option>
                <option value="Java">Java</option>
                <option value="PHP">PHP</option>
               </select>
            </div>
              <div class="form-element mb-3">
                <input type="text" placeholder="type Description" name="description" class="form-control">
            </div>
            <!-- submitbutton -->
               <div class="form-element">
                <input type="submit" value="Add Book" name="create" class="btn btn-success">
            </div>


        </form>
    </div>
</body>
</html>