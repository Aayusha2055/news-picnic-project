<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LANDING</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
<?php
include "nav.php";
?>
<center>
    <h2>REGISTRATION</h2></center>
<br>
<div class="container">

    <form method="post" action="registeruserbackend.php">
        <div class="form-group">
            <label>Name:</label>
            <input type="text" class="form-control" placeholder="Enter Name" name="name" required="required"  >
        </div>
        <div class="form-group">
            <label>Batch</label><br>
            <input type="radio" name="batch" value="2018" checked required="required"> 2018<br>
            <input type="radio" name="batch" value="2019">2019<br>
            <input type="radio" name="batch" value="2020">2020<br>
            <input type="radio" name="batch" value="2021">2021
        </div>
        <div class="form-group">
            <label>Email:</label>
            <input type="email" class="form-control"  placeholder="Enter email" name="email" required="required">
        </div>
        <div class="form-group">
            <label>Phone Number:</label>
            <input type="number" class="form-control" placeholder="Enter Phone Number" name="number" required="required">
        </div>
        <div class="form-group">
            <label>Preference</label><br>
            <input type="radio" name="pref" value="Vegetarian" checked required="required">Vegetarian<br>
            <input type="radio" name="pref" value="Non Vegetarian">Non Vegetarian<br><br>
        <div class="form-group">
        <input type="submit" class="btn btn-default" name="submit" value="Submit">
        </div>
    </form>
</div>

</body>
</html>