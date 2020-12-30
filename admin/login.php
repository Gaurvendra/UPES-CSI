<?php
if(isset($_POST['email'])===true && empty($_POST['email'])===false)
{
    $email=$_POST['email'];
    $pass=$_POST['pass'];

    require 'config.php';
    $query=mysql_query("SELECT * FROM `user` WHERE `email`='".$email."'");
    if(mysql_num_rows($query)==0){
        
        echo "<script>alert('User Not Allowed');script>";
        
    }
    else{
        $row=mysql_fetch_array($query);
        if($pass===$row['password']){
            session_start();
            $_SESSION['email']=$email;
            $_SESSION['name']=$row['name'];
            header('location:dashboard.php');
        }
        else
        echo "<script>alert('Wrong Password');script>";

    }


}

?>