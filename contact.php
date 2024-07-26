<?php

$con = mysqli_connect('localhost','root');

if($con){
    echo "Thanks for visiting our page and contacting us, Our Team will Reply you as soon as possible";
} else{
    echo "No connection";
}

mysqli_select_db($con, 'project_1');

$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$message = $_POST['message'];

$query = " insert into details (name, email, mobile, message) 
values ('$name', '$email', '$mobile', '$message') ";

// echo "$query";

mysqli_query($con, $query);

?>