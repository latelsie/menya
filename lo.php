<?php
include"connect.php";
if(!$conn){
   die("Connection failed!" .mysqli_connect_error());
}
if(isset($_POST['btn'])){
    $username=$_POST['user'];
    $password=$_POST['password'];
    $query=mysqli_query($conn,"select all from reg where username='$username'&&password='$password'");
    if(mysqli_num_rows($query)){
        echo"<script>alert('WELCOME!')</script>"
        // header("location:checkup.html")

    }
    else{
        echo "<script>alert('user not found')</script>";
    }
}

?>