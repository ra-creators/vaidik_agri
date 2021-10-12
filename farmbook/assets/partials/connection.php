<?php


$servername = "localhost";
$username ="root";
$password="";
$database ="vaidik";

$conn=mysqli_connect($servername,$username,$password,$database);

if(!$conn){

    echo"Connection  not Succesful";
}
