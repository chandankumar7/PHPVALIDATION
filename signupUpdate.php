<?php
    
     include 'conn.php';
    if(isset($_POST['submit']))
    {
       $id=$_GET['id'];
       $username=$_POST['username'];
       $email=$_POST['email'];
       $password=$_POST['password'];
       $pno=$_POST['pno'];
       $gender=$_POST['gender'];
       $Country=$_POST['Country'];

       $q=" UPDATE `signup` SET `id`= $id,`username`= $username,`email`=$email,`password`=$password,
                   `contactnumber`= $pno,`sex`=$gender,`country`=$Country WHERE id=$id";

       $query=mysqli_query($con,$q);
       header('location:signupDisplay.php');
      
    }
?>







<!DOCTYPE>
<html>
<head>
    <meta charset="utf-8">
    <title>Sign up page</title>
    <style>
        body {
            background-color: #4493e3;
            /*Background property*/
            text-align: center;
            background-image: url(Assets/bg-01.jpg) no repeat;
            /*Background property*/
        }

        h1 {
            color: whitesmoke;
            /*CSS Color Property*/
            font-family: sans-serif;
        }

        input {
            border-radius: 2em;
            border-style: none;
            height: 25px;
            padding: 12px;
        }

        select {
            border-radius: 1em;
        }

        button {
            color: #8C55AA;
            font-weight: bold;
            font-size: 17px;
            border-style: none;
            border-radius: 2em;
            text-decoration: none;
        }

        #droplist {
            padding-right: 100px;
        }

        .password {
            margin-left: 50px;
        }

        .label {
            margin-right: 50px;
            /*CSS margin Property*/
        }

        a:link {
            /*Anchor Pseudo-classes*/
            color: red;
        }

        a:visited {
            /* visited link */
            color: green;
        }

        a:hover {
            /* mouse over link */
            color: hotpink;
        }

        a:active {
            /* selected link */
            color: blue;
        }

        .mail {
            margin-top: 10px;
        }

        .nme {
            margin-bottom: -10px;
        }

        #eml {
            text-align: center;
            padding-left: 40px;
        }

        #emll {
            text-align: center;
            padding-left: 50px;
        }

        #ul {
            padding-left: 30px;
        }
    </style>
</head>

<body>
    <!------------------------- <form> Element------------------------------------------->
    <div>
        <form method="post">
            <h1>Welcome To Sign up Page</h1>
            <img src="Assets/User-Signup-blue-icon.png" width="200px" height="200px"><br>
            <div class="nme">
                <label> Name</label>
                <input id="un" type="text" name="username" placeholder="Name..."><br>
                <br>
            </div>
            <div class="mail">
                <label>Email</label>
                <input id="email" type="text" name="email" placeholder="Email Address..."><br><br>
            </div>
            <label class="password">Password</label>
            <input id="pw" class="label" type="password" name="password" placeholder="********************..."><br><br>
            <div>
                Contact Number: <input id="cn" type="tel" name="pno"><br>
            </div>
            <div>Gender
                <input type="radio" name="gender" value="male"> Male
                <input type="radio" name="gender" value="female"> Female        
                <input type="radio" name="gender" value="other"> Other<br><br>
            </div>
            <div id="droplist">Select your country
                <select id="sel" name="Country">
                    <option></option>
                    <option id="v1" value="India">India</option>
                    <option id="v2" value="Australia">Australia</option>
                    <option id="v3" value="Usa">Usa</option>
                </select>
            </div><br>
            <!----------------------------checkbox--------------------------------------------------->
             <button  type="submit" value="submit" name="submit">Signup</button><br><br>
        </form>
    </div>
</body>
</html>
