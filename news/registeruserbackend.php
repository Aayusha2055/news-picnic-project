<?php
session_start();

include "connection.php";
echo "hello";

if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $batch = mysqli_real_escape_string($con, $_POST['batch']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $number = mysqli_real_escape_string($con, $_POST['number']);
    $pref = mysqli_real_escape_string($con, $_POST['pref']);


    $query = "INSERT INTO register_user(name, batch, email,phone_number,category) VALUES ('$name','$batch','$email','$number','$pref')";
    $result = mysqli_query($con, $query);

    if ($result) {
        $_SESSION['name'] = $name;
        $_SESSION['success'] = "register completed";
        header('location: index.php');
    }

}






