<?php

include_once('../databaseConnection.php');


if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])){
  $subscriberEmail = $_POST['subscriberEmail'];
  $subscriberUsername = $_POST['subscriberUsername'];


  
  $stmt = $conn->prepare("INSERT INTO newslettersubscription (subscriberEmail, subscriberUsername) VALUES (?,?)");

  $stmt -> bind_param('ss', $subscriberEmail, $subscriberUsername);
  if($stmt -> execute() === TRUE){
      header('Location: /crypto site(blog and everything)/HTML/successful.html') or die("failed");
  }

}


?>