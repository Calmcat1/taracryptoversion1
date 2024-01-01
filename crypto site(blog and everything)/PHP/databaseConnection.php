<?php
  $server = "localhost";
  $username = "root";
  $pwrd = "";
  $database = "cryptodatabase";

  // conn creation
  $conn = new mysqli($server, $username, $pwrd, $database);

  //Check connection
  if ($conn->connect_error){
    die("connection failed" . $conn->connect_error);
  }


  ?>