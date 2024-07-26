<?php

    $server = "localhost";
    $username = "root";
    $password = "";
    $database = " userinfo    ";

    $con = mysqli_connect($server,$username,$password,$database);

    if($_SERVER['REQUEST_METHOD']=='POST')
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $message = $_POST['message'];
    }

    if($name == '' || $email == '' || $course == '' || $mobile == '' || $message == '' ){

            echo("Please fill all the fields");
    }
    else{
        $sql = "INSERT INTO `contactinfo` (`id`, `name`, `email`, `mobile`, `message`) VALUES (NULL, '$name', '$email', '$mobile', '$message')";
        $result = mysqli_query($con,$sql);
        if($result)
        {
            echo "Your Response Recorded";
        }
        else
        {
            mysqli_error($con);
        }
    }
  
?>