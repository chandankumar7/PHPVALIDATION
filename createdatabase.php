<?php 

     $conn=mysqli_connect("localhost","root","");

  if($conn)
      echo "connection successful"."<br>";
  else
    echo "could not connect to server"."<br>";


    $q1="CREATE DATABASE crudoperation";
    $r1=mysqli_query($conn,$q1);
    
    if($r1)
    {
    	echo "Database created successfully"."<br>";
    }
    else
    {
    	echo "Error in creating Database"."<br>";
    }
    mysqli_close($conn);
 ?> 