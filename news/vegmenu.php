<?php
session_start();

if (!isset($_SESSION['name'])) {
    echo "done";
    $_SESSION['msg'] = "You must be registered first";
    echo "done";
    header('Location: register.php');
//    header('location: index.php');
} else {
    echo "Welcome " . $_SESSION['name'];
}
?>
<?php
include "connection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Landing</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
<?php
include "nav.php";
?>

<div class="container">

    <form method="post" class="form-group" action="foodbackend.php">
        <h2>Vegetarian</h2>
        <div class="form-group">
            <h4>Breakfast</h4>
            <div class="checkbox">
                <label><input type="checkbox" value="bread" name="breakfast">Bread</label><br>
                <label><input type="checkbox" value="tofu" name="breakfast">Tofu</label><br>
                <label><input type="checkbox" value="panner" name="breakfast">Paneer</label><br>
                <label><input type="checkbox" value="chickpeas" name="breakfast">Cheakpeas</label>
            </div>

        </div>
        <div class="form-group">
            <h4>Lunch</h4>
            <div class="checkbox">
                <label><input type="checkbox" value="momo" name="lunch">MoMo</label><br>
                <label><input type="checkbox" value="chowmein" name="lunch">Chowmein</label><br>
                <label><input type="checkbox" value="roti" name="lunch">Roti</label><br>
                <label><input type="checkbox" value="tarkari" name="lunch">Tarkari</label>
            </div>
        </div>
        <div class="form-group">
            <h4>Snacks</h4>
            <div class="checkbox">
                <label><input type="checkbox" value="fries" name="snacks">Fries</label><br>
                <label><input type="checkbox" value="nutella chilly" name="snacks">Nutella Chilly</label><br>
                <label><input type="checkbox" value="waiwai" name="snacks">Wai Wai Sadheko</label><br>
            </div>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-default" name="submit">SUBMIT</button>
        </div>
    </form>

</div>


</body>
</html>