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
if (isset($_POST['logout'])) {
    unset($_SESSION['name']);
    session_unset();
    session_destroy();
    $_SESSION = [];
    header('location: landing.php');
}
?>
<?php
include "connection.php";
?>

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
<div class="logout">
    <form method="post" action="vegreport.php">
        <input type="submit" name="logout" value="SIGN OUT"
               style="float: right; padding-top: 10px; margin-right: 15px; background-color: #28a745">
    </form>
</div>
<?php
$table1 = 'register_user';
$table2 = 'veg';

$query2 = "SELECT *FROM $table1 JOIN $table2 ON $table2.name = $table1.name AND $table2.id = $table1.id";
$result = mysqli_query($con, $query2);


?>
<div class="container">
    <h2>USER DETAILS</h2><br>
    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
            <tr>
                <th>NAME</th>
                <th>BATCH</th>
                <th>EMAIL</th>
                <th>PHONE NUMBER</th>
                <th>CATEGORY</th>
                <th>BREAKFAST</th>
                <th>LUNCH</th>
                <th>SNACKS</th>

            </tr>
            </thead>
            <tbody>
            <?php
            if (mysqli_num_rows($result)>0){

                while ($row = mysqli_fetch_assoc($result)){

                    $name = $row['name'];

                    if ($name==$_SESSION['name']){

                        echo '<tr>
               
               <td>' . $row['name'] . '</td>
               <td>' . $row['batch'] . '</td>
               <td>' . $row['email'] . '</td>
               <td>' . $row['phone_number'] . '</td>
               <td>' . $row['category'] . '</td>
               <td>' . $row['breakfast'] . '</td>
               <td>' . $row['lunch'] . '</td>
               <td>' . $row['snacks'] . '</td>
                    
            </tr>';


                    }
                }

            }
            ?>
            </tbody>
        </table>
    </div>
</div>

</body>
</html>

