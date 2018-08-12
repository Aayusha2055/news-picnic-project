<?php

$db_user = "picnic";

$db_pass = "picnic";

$db_host = "localhost";

$db_name ="picnic_db";

$con = mysqli_connect("$db_host", "$db_user", "$db_pass", $db_name);
if (!$con) {
    echo "Not Connected to MySQL<br>";
}
//else{
//    echo "connected";
//}