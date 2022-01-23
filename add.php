<?php
require 'config.php';
if($_POST){
  $title = $_POST['title'];
  $desc = $_POST['description'];

  $sql = "INSERT INTO todo(title,description) VALUES (:title,:description)";
  $pdostatement = $pdo->prepare($sql);
  $result = $pdostatement->execute(
    array(
        ':title'=>$title,
        ':description'=>$desc
    )
  );
  if($result){
    echo "<script>alert('NEW ToDo is added');window.location.href='index.php'</script>";
  }
}


?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Create New</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  </head>
  <body>
    <div class="card">
       <div class="card-body">
         <h2>Create New ToDo</h2>
         <form class="" action="add.php" method="post">
           <div class="form-group">
             <label for="">Title</label>
             <input type="text" class = "form-control" name="title" value="" required>
           </div>
           <div class="form-group">
             <label for="">Description</label>
             <textarea name="description" class = "form-control" rows="8" cols="80"></textarea>
           </div></br>
           <div class="form-group">
             <input type="submit" class = "btn btn-primary" name="" value="SUBMIT">
             <a href="index.php" type = "button" class = "btn btn-warning" name = "">Back</a>
           </div>
         </form>
       </div>
    </div>
  </body>
</html>
