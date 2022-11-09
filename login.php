<?php
include('config.php');
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "photography";
session_start();
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
 ///function login($username,$password)
    $username=$_POST["username"];
    $password=$_POST["password"];
    if($username!="" && $password!="")
    {
       $sql="SELECT username,password1 FROM registration WHERE username='$username' AND password1='$password'";
       //echo $sql;
       $result = mysqli_query($conn, $sql);
       $data = mysqli_fetch_assoc($result);
       if($data['username']!="")
       {

        echo"<script>window.location='index.php?username=" . $data['username'] . "'</script>";
       }
       else
       {
        echo "<script>window.location='index2.html'</script>";
       }
       
    }
?>