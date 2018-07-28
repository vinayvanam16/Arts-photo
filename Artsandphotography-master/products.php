<?php

 
require('db.php');
include("auth.php");
?>




<html>
 <title>Manoj-Admin</title>
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="stylesheet" type="text/css" href="css/bootstrapmin.css">
          <link rel="icon" type="image/png" href="img/reunion.png"/>
          <script src="js/style.js"></script>
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
           <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<body>
<div class="form">
<center>
<p>Welcome <?php echo $_SESSION['username']; ?>!</p>
<p>This is secure area.</p>
<p><a href="products.php">Upload Photos</a></p>
<p><a href="view.php">Delete the PHotos</a></p>
<a href="logout.php">Logout</a>
</center>
</div>











<div class="container">
<form class="form-horizontal" role="form" method="post" action="" enctype="multipart/form-data">
    
    
<div class="form-group">
  <label for="products">Select Category:</label>
  <select class="form-control" name="products" id="products">
  
   <option value="Marriages">Marriages</option>
<option value="Birthdays">Birthdays</option>
<option value="Events">Events</option>
<option value="Technology">Technology</option>
<option value="Travels">Travels</option>


    
  </select>
</div>



    <div class="form-group">
        <label for="message" class="col-sm-2 control-label">Upload pic</label>
        <br>
        <br>
        <div class="col-sm-10">
           <input type="file" name="file" id="file" value="" required/>
        </div>
    </div>



     
    <div class="form-group">
        <div class="col-sm-4 col-sm-offset-2">
            <input id="submit" name="submit" type="submit" value="Send" class="btn btn-success">
        </div>
        
    </div>
    
</form>
 </div>  
</body>
</html>


<?php
$conn=mysqli_connect("localhost","root","","Manoj");
    if (mysqli_connect_errno($conn))
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }


if(isset($_POST['submit'])) {
           
           $products = mysqli_real_escape_string($conn,$_POST['products']);



            $file= rand(1000,100000)."-".$_FILES['file']['name'];
             $file_loc = $_FILES['file']['tmp_name'];
             $file_size = $_FILES['file']['size'];
             $file_type = $_FILES['file']['type'];
             $folder="uploads/";
            move_uploaded_file($file_loc,$folder.$file);
 


$check = "INSERT INTO products ( file, type, size,  products) VALUES 
  ('$file' , '$file_type' , '$file_size', '$products')";
 $result = mysqli_query($conn, $check) or trigger_error("Query Failed! SQL: $check - Error: ".mysqli_error(), E_USER_ERROR);
}
mysqli_close($conn);

                                      ?>