<?php
session_start();

include "connection.php";
echo "hello";

if (isset($_POST['submit'])) {
    $name = $_SESSION['name'];
    $breakfast = mysqli_real_escape_string($con,$_POST['breakfast']);
    $lunch = mysqli_real_escape_string($con,$_POST['lunch']);
    $snacks = mysqli_real_escape_string($con,$_POST['snacks']);


    $query = "INSERT INTO non_veg(name, breakfast, lunch, snacks) values ('$name','$breakfast','$lunch','$snacks')";
    $result = mysqli_query($con, $query);

    if ($result) {
        $_SESSION['name'] = $name;
        $_SESSION['success'] = "register completed";
        header('location: nonvegreport.php');
    }
}

if (isset($_POST['submit'])) {
    $name = $_SESSION['name'];
    $breakfast = mysqli_real_escape_string($con,$_POST['breakfast']);
    $lunch = mysqli_real_escape_string($con,$_POST['lunch']);
    $snacks = mysqli_real_escape_string($con,$_POST['snacks']);


    $query = "INSERT INTO veg(name, breakfast, lunch, snacks) values ('$name','$breakfast','$lunch','$snacks')";
    $result = mysqli_query($con, $query);

    if ($result) {
        $_SESSION['name'] = $name;
        $_SESSION['success'] = "register completed";
        header('location: vegreport.php');
    }
}



