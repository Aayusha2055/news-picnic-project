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

<?php
$query = "SELECT category FROM register_user";
$result = mysqli_query($con,$query);
?>
<?php
if (mysqli_fetch_row($result) > 0) {
    mysqli_data_seek($result,0);
    while ($row = mysqli_fetch_assoc($result)) {
        $name = $row['user_name'];
        $category = $row['category'];

        if ($category=='Vegetarian'){
            header('location:vegmenu.php');
        }
        elseif ($category=='Non Vegetarian'){
            header('location:nonvegmenu.php');
        }
    }
}
?>



</body>
</html>