<?php
    
       include 'conn.php';

       $id=$_GET['id'];

       $q= " DELETE FROM `signup` WHERE id=$id";
       mysqli_query($con,$q);
       header('location:signupDisplay.php');
?>