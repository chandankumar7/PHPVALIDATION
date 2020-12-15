
<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		.tab{
			text-align: center;
			background-color: #FF00FF;

		}
.cen{
	align-items: center;
	justify-content: center;
	display: flex;
	/*font-family: 'Rock Salt', cursive;
*/

}
h1{
	align-items: center;
	justify-content: center;
	display: flex;
}
.bt1{
	background-color: #DC143C;
}
.bt2{
	background-color:#7FFF00;
}
a{
	color: white;
}
.st,th{
	background-color: yellow;
	color: blue;
	
}
</style>

</head>
<body>

	
  <h1>Signup Table Data</h1>
  <div class="cen">
    <table  width = "50%" border = "4" cellspacing = "2" cellpadding = "3" >

  	 <tr>
  	 	<div class="st">
  	 	<th>Id</th>
  	 	<th>Username</th>
  	 	<th>Email</th>
  	 	<th>Password</th>
  	 	<th>Contactnumber</th>
  	 	<th>Gender</th>
  	 	<th>Country</th>
  	 	<th>Delete</th>
  	 	<th>Update</th>
  	 </div>
  	 </tr>

<?php

	  include 'conn.php';
	  $q="SELECT * FROM `signup`";
	  $query=mysqli_query($con,$q);
   
	   while($res=mysqli_fetch_array($query)){
?>



<tr class="tab">
 
     <td><?php echo $res['id']; ?></td></div>
     <td><?php echo $res['username']; ?></td></div>
     <td><?php echo $res['email']; ?></td></div>
     <td><?php echo $res['password']; ?></td></div>
     <td><?php echo $res['contactnumber']; ?></td></div>
     <td><?php echo $res['sex']; ?></td></div>
     <td><?php echo $res['country']; ?></td></div>

     <td><button class="bt1"> <a href="signupdelet.php?id=<?php echo $res['id']; ?>">Delete</a></button></td></div>
     <td><button class="bt2"> <a href="signupUpdate.php?id=<?php echo $res['id']; ?>">Update</a></button></td></div>
</tr>

<?php

}

?>
   </table>
   </div>
  </body>
</html>


