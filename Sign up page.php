<?php
     include 'conn.php';
    if(isset($_POST['done']))
    {
       $username=$_POST['username'];
       $email=$_POST['email'];
       $password=$_POST['password'];
       $pno=$_POST['pno'];
       $gender=$_POST['gender'];
       $Country=$_POST['Country'];

       $q= " INSERT INTO `signup`(`username`, `email`, `password`, `contactnumber`, `sex`, `country`) 
             VALUES ('$username','$email','$password','$pno','$gender',' $Country')";
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
        <form method="post" onsubmit=" return validation()" value="Reset form">
            <h1>Welcome To Sign up Page</h1>
            <img src="Assets/User-Signup-blue-icon.png" width="200px" height="200px"><br>
            <div class="nme">
                <label> Name</label>
                <input id="un" type="text" name="username" placeholder="Name..."><br>
                 <label id='ul' style="visibility: hidden;color: red;">Username cannot be empty</label><br>
                <label id='ull' style="visibility: hidden;color: red;padding-left: 20px;">Please Enter Valid User Name</label>
            </div>
            <div class="mail">
                <label>Email</label>
                <input id="email" type="text" name="email" placeholder="Email Address..."><br><br>
                <label id="eml" style="visibility: hidden;color: red">Email cannot be empty</label><br>
                <label id="emll" style="visibility: hidden;color: red">Please Enter Valid Email Id</label>
            </div>
            <label class="password">Password</label>
             <input id="pw" class="label" type="password" name="password" placeholder="********************..."><br><br>
           <label id="ps" style="visibility: hidden;color: red;padding-left: 90px;">Password cannot be empty</label><br>
            <label id="pss" style="visibility: hidden;color: red">Please Enter Valid Password With One Special Character</label>
            <div>
                Contact Number: <input id="cn" type="tel" name="pno"><br>
                 <label id="pno" style="visibility: hidden;color: red;padding-left: 100px;">Phone number cannot be empty</label><br>
                <label id="pnoo" style="visibility: hidden;color: red;padding-left: 100px;">Please Enter Valid Phone Number</label>
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
            <button type="buttton" name="done">Signup</button><br>
        </form>
    </div>
<script>
        function validation()
         {
            //validating the user name
            var username = document.getElementById('un');
            var usercheck = /^[A-Za-z ]{5,20}$/; //username
            if (!username.value.trim() == "") 
            {
                document.getElementById('ul').innerHTML = "";
            } else 
            {
                alert("User name cannot be empty");
                username.style.border = "5px solid red";
                document.getElementById('ul').style.visibility = "visible";
                return false;
            }
            if (usercheck.test(username.value)) 
            {
                document.getElementById('ull').innerHTML = "";
            } else
             {
                alert("User Name must be atleast 5 characters long");
                username.style.border = "5px solid blue";
                document.getElementById('ull').style.visibility = "visible";
                return false;
            }
            //validate user Email Id 
            var email = document.getElementById('email');
            var emailcheck = /^([a-zA-Z0-9\.-]+)@([a-zA-Z0-9]+).([a-z]{2,10})(.[a-z]{2,10})?$/;

            if (!email.value.trim() == "")
            {
                document.getElementById('eml').innerHTML = "";
            } else 
            {
                alert("Email cannot be empty");
                email.style.border = "5px solid red";
                document.getElementById('eml').style.visibility = "visible";
                return false;
            }
            if (emailcheck.test(email.value))
             {
                document.getElementById('emll').innerHTML = "";
            } else {
                alert("please enter valid email id");
                email.style.border = "5px solid blue";
                document.getElementById('emll').style.visibility = "visible";
                return false;
            }
            //valiadte user Password
            var password = document.getElementById('pw');
            var psswordcheck = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{8,16}$/;

            if (!password.value.trim() == "") {
                document.getElementById('ps').innerHTML = "";
            } else {
                alert("Password cannnot be empty");
                password.style.border = "5px solid red";
                document.getElementById('ps').style.visibility = "visible";
                return false;
            }
            if (psswordcheck.test(password.value)) {
                document.getElementById('pss').innerHTML = "";
            } else {
                alert("Password  must be atleast 8 characters long");
                password.style.border = "5px solid blue";
                document.getElementById('pss').style.visibility = "visible";
                return false;
            }
            //valiadte user Phone number
            var phone = document.getElementById('cn');
            var x = /^[7-9]{1}[0-9]{9}$/; //phone number

            if (!phone.value.trim() == "") {
                document.getElementById('pno').innerHTML = "";
            } else {
                alert("Phone number cannot be empty");
                phone.style.border = "5px solid red";
                document.getElementById('pno').style.visibility = "visible";
                return false;
            }
            if (x.test(phone.value)) {
                document.getElementById('pnoo').innerHTML = "";
            } else {
                alert("Phone number must be 10 digits");
                phone.style.border = "5px solid blue";
                document.getElementById('pnoo').style.visibility = "visible";
                return false;

            }
            //validating the gender 
            var x1 = document.getElementsByName('gender');
            if ((x1[0].checked == false) && (x1[1].checked == false) && (x1[2].checked == false)) {
                alert("please select the gender");
                return false;
            }
            //validating the drop down list
            var x2 = document.getElementById("sel");
            var y = x2.options[x2.selectedIndex].value;
            if (y == "") {
                alert("please select option for country");
                return false;
            } else {
                alert("Signup Successfully")
                document.getElementById("myForm").reset();
                return true;
            }
        }
</script>
</body>
</html>
