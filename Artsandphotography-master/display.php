<form action="display.php" align="center" method="POST" enctype="multipart/form-data">
             
                <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
<input type="button" value='Birthdays' name ="Birthdays" class="btn btn-primary btn-xs" onclick="location.href = 'display.php';" />
<input type="button" class="btn btn-success btn-xs " value="Marriages" onclick="location.href = 'display.php';">
 <input type="button" class="btn btn-info btn-xs " value="Events" onclick="location.href = 'display.php';">



                </p>


                
               
        </form>





<?php



include ("db1.php");
if(isset($_POST['Birthdays']))      { 

$check = mysqli_query($conn," select *from products where products='Birthdays'");
while($row = mysqli_fetch_array($check)) {
	#echo $row['products'];
	 echo "<img src='uploads/".$row['file']."' height=\"200px\" width=\"320px\">";
}
}
 

mysqli_close($conn);

                                      ?>
