<?php

$server = "us-cdbr-east-06.cleardb.net";
$user = "b28accc346bf18";
$password = "ca29549d";
$db = "heroku_7be31bde873a04e";

$conn = mysqli_connect($server,$user,$password,$db);

if(!$conn) {
    die("Connection Failed:".mysqli_connect_error());
}

?>
