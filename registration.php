<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="registration.css">
    <title>Register</title>
  </head>
<body>

  <div class="container">
    <form action="" method="POST" autocomplete="off">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="email"><b>Names</b></label>
    <input type="text" placeholder="Enter Names" name="names" required>

    <label for="email"><b>Email</b></label>
    <input type="email" placeholder="Enter Email" name="email" required>

    <label for="Phone"><b>Phone</b></label>
    <input type="tel" id="phone" name="telephone" required>

    <label for="Username"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
    
    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label>
    

    <div class="clearfix">
      <button type="reset" class="cancelbtn">Cancel</button>
      <button type="submit" class="signupbtn" name="btn">Sign Up</button>
    </div>
    </form>
</div>
<?php
include"connect.php";
if(!$conn){
   die("Connection failed!" .mysqli_connect_error());
}
if(isset($_POST['btn'])){
  $name=$_POST['names'];
  $email=$_POST['email'];
  $phone=$_POST['telephone'];
  $username=$_POST['username'];
  $password=$_POST['password'];
  $query=mysqli_query($conn,"insert into reg(names,email,telephone,username,password)values('$name','$email','$phone','$username','$password')");
  if($query){
    echo "<script>alert('Thank u!')</script>";
    // header("location:checkup.html");
}
else{
    echo "<script>alert('oops!There is a problem')</script>";
}

}
?>

</body>
</html>
