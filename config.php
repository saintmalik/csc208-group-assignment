<?php
session_start();
$host = "l";
$user = "";
$password = "";
$db = "";

$con = mysqli_connect($host, $user, $password, $db);
// Check connection
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}
