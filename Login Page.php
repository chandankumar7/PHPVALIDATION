<?php
     include 'conn.php';
    if(isset($_POST['done']))
    {
       $username=$_POST['username'];
       $password=$_POST['password'];
       $q= "INSERT INTO `login`(`username`, `password`) VALUES ('$username','$password')";

       $query=mysqli_query($con,$q);
         header('location:display.php');

    }

?>

<!DOCTYPE>
<html>

<head>
    <meta charset="utf-8">
    <title>Login Page</title>
    <!--------------------------------------External CSS---------------------------------------------------->
    <link rel="stylesheet" type="text/css" href="CSS/LoginStyle.css">
</head>

<body>
    <div class="main">
        <h1>Welcome To Login Page</h1>
        <img src="Assets/Users-Login-icon.png" width="200px" height="200px">
        <form method="post" onsubmit="return validation()"  value="Reset form">
            <div>
                <label>Username:</label>
                <input class="label1" id="user" type="text" name="username"><br><br>
                 <span id="username" style="color: red"></span>
            </div>
            <div>
                <label>Password:</label>
                <input class="label1" id="pass" type="password" name="password"><br><br>
                <span id="password" style="color:red"></span>
            </div>
            <button class="sign" type="submit" value="submit" name="done">Login</button><br><br>

            <label>Don't have an account?<a href="Sign%20up%20page.html">Signup</a></label>
        </form>
    </div>

<script>
        function validation() {
            var user = document.getElementById('user').value;
            var pass = document.getElementById('pass').value.trim();

            if (!user == "") {
                document.getElementById('username').innerHTML = "";
            } else {
                document.getElementById('username').innerHTML = "**Please fill the username field";
                return false;
            }
            if ((user.length <= 2) || (user.length > 20)) {
                document.getElementById('username').innerHTML = "**user length must be between 2 and 20";
                return false;
            }
            if (!isNaN(user)) {
                document.getElementById('username').innerHTML = "**only characters are allowed";
                return false;
            }
            if (!pass == "") {
                document.getElementById('username').innerHTML = "";

            } else {
                document.getElementById('password').innerHTML = "**Please fill the password field";
                return false;
            }

            if ((pass.length <= 5) || (pass.length > 20)) {
                document.getElementById('password').innerHTML = "**password  length must be between 5 and 20";
                return false;
            } else {
                alert("Login Successfully")
            }
        }
    </script>
    
</body></html>
