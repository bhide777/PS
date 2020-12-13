<?php
session_start();
$mysqli = new mysqli("localhost","root","","Proctor_system");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
?>