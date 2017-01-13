<?php
  //Local Server Information
  $server = "127.0.0.1";
  $username = "root";
  $password = "";
  $db = "db";

  //Check if database connection is successful
  try {
    $handle = new PDO("mysql:host={$server};dbname={$db}", "{$username}", "{$password}");
    $handle->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch(PDOException $e) {
      die("Oops. Something went wrong with the database. Please try again later.");
    }
?>
