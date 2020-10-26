<?php
require('config.php');
if ($_POST)
{
  $title = $_POST['title'];
  $description = $_POST['description'];

$sql="INSERT INTO todo(title,description) VALUES (:title,:description)";
$pdostatement = $pdo->prepare($sql);
$result = $pdostatement->execute(
  array(
    ':title'=>$title,
    ':description'=>$description
  )
);
if($result){
  echo "<script>alert('New Todo is added.');window.location.href='index.php';</script>";
}
}
 ?>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Create New</title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   </head>
   <body>
     <div class="card">
       <div class="card-body">
         <h2>Create New ToDo</h2>
         <form class="" action="add.php" method="post">
           <div class="form-group">
             <label for="">Title</label>
             <input type="text" class="form-control" name="title" value="" required>
           </div>
           <div class="form-group">
             <label for="">Description</label>
             <textarea name="description" class="form-control" rows="8" cols="80"></textarea>
           </div>
           <div class="form-group">
             <input type="submit" class="btn btn-primary" name="" value="SUBMIT">
             <a href="index.php" type="button" class="btn btn-warning" name="" >Back</a>
             </div>

         </form>
       </div>
     </div>
   </body>
 </html>
