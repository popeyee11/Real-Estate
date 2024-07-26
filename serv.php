<?php

$con = mysqli_connect('localhost','root');

if($con){
    echo "Thanks for visiting our page and contacting us, Our Team will Reply you as soon as possible";
} else{
    echo "No connection";
}

mysqli_select_db($con, 'project_2');

$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$select = $_POST['select'];
$location = $_POST['location'];
$details = $_POST['details'];

$query = " insert into data (name, email, mobile, select, location, details) 
values ('$name', '$email', '$mobile', '$select', '$location', '$details') ";

// echo "$query";

mysqli_query($con, $query);

?>