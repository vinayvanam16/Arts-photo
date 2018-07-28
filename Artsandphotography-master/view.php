<?php

 
require('db.php');
include("auth.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>View Records</title>
<link rel="stylesheet" href="css/admin.css" />
</head>
<body>
<div class="form">
<center>
<p>Welcome <?php echo $_SESSION['username']; ?>!</p>
<p>This is secure area.</p>
<p><a href="products.php">Upload PHotos</a></p>
<p><a href="view.php">Delete the PHotos</a></p>
<a href="logout.php">Logout</a>
</center>
</div>


<table width="100%" border="1" style="border-collapse:collapse;">
<thead>
<tr><th><strong>file</strong></th>
	

	<th><strong>Product Category</strong></th></th>

	<th><strong>Delete</strong></th></tr>
</thead>
<tbody>
<?php
$count=1;
$sel_query="Select * from products ORDER BY id desc;";
$result = mysqli_query($conn,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr><td align="center">
	<?php echo $count; ?>
</td><td align="center"><?php echo $row["file"]; ?>


<td align="center"><?php echo $row["products"]; ?></td></td>

<td align="center"><a href="delete.php?id=<?php echo $row["id"]; ?>">Delete</a></td></tr>




<?php $count++; } ?>
</tbody>
</table>


</div>
</body>
</html>
