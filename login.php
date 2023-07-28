<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="account.css">
    <title>Login</title>
</head>
<body>
        <form action="" method="POST" autocomplete="off">  
            
            <div class="container">   
                <center><h1>LOGIN FORM</h1><br></center>
                <!-- Names:<br> <input type="text" name="Username" required placeholder="Your username"><br><br>   -->

                 Username:
            <input type="text" name="username" required placeholder="Your username"><br> 
            <!-- <div class="user" id="user"></div><br>
             -->
                 Password:  
            <input type="password" name="password" required placeholder="Enter your password"><br> 
            <!-- <div class="password" id="password"></div> -->

             <input type="submit" name="btn">

            </div>
        
</form> 

<?php
include"connect.php";
if(!$conn){
   die("Connection failed!" .mysqli_connect_error());
}
if(isset($_POST['btn'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $query=mysqli_query($conn,"select * from reg where username='$username'&&password='$password'");
    if(mysqli_num_rows($query)){
        echo"<script>alert('WELCOME!')</script>";
        // header("location:checkup.html")

    }
    else{
        echo "<script>alert('user not found')</script>";
    }
}

?>
</body>
</html>     




