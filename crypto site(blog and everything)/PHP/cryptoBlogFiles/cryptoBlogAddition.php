<?php

include_once('../databaseConnection.php');


  $blogHeading = $_POST["blogHeading"];
  $blogContent = $_POST["blogContent"];
  $blogSubHeading1 = $_POST["blogSubHeading1"];
  $blogSubContent1 = $_POST["blogSubContent1"];
  $blogSubHeading2 = $_POST["blogSubHeading2"];
  $blogSubContent2 = $_POST["blogSubContent2"];
  $blogSubHeading3 = $_POST["blogSubHeading3"];
  $blogSubContent3 = $_POST["blogSubContent3"];
  $blogImages = $_FILES["blogImages"]['name'];
  $TempblogImages = $_FILES['blogImages']['tmp_name'];

 
  $loctionVar = '../../images/LocalImages/'.$blogImages;

  $folder = "../../images/imagesToBeUploaded/";
  move_uploaded_file($TempblogImages,$folder.$blogImages);

  
  $stmt = $conn->prepare("INSERT INTO blogtable (blogHeading, blogContent, blogSubHeading1, blogSubContent1, blogSubHeading2, blogSubContent2, blogSubHeading3, blogSubContent3, blogImageUrls) VALUES (?,?,?,?,?,?,?,?,?)");

  $stmt -> bind_param('sssssssss', $blogHeading, $blogContent, $blogSubHeading1, $blogSubContent1, $blogSubHeading2, $blogSubContent2, $blogSubHeading3, $blogSubContent3, $loctionVar);

  $stmt -> execute();





?>