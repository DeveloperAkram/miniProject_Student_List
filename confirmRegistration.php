<?php 
session_start();
$name = $_POST['name'];
$email = $_POST['email'];
$pass = $_POST['password'];
$con_pass = $_POST['confirm_password'];

if($pass != $con_pass){
   
    $_SESSION['error_msg'] = "Password and Confirm Password didn't match";
    header("Location: registration.php");
}

$conn = mysqli_connect('localhost','root','20104030','stucrud');

$sql1 = "SELECT *FROM users WHERE email='$email' ";
$result = mysqli_query($conn, $sql1);
$rowcount = mysqli_num_rows($result);

if($rowcount == 1){
    
    
    $_SESSION['error_msg'] = "Account already exists please login";
    header("Location: registration.php");
} else{
    
    $sql = "INSERT INTO users VALUES(null, '$name', '$email','$pass')";
    if(mysqli_query($conn, $sql)) {
    
   
    $_SESSION['reg_msg'] = "Registration Successfully. Please login.";
    header("Location: login.php");
    }
    
}


?>
