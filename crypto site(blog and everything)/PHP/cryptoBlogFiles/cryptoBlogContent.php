<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../../CSS/blog.css">
</head>
<body>
  <div class="maincontainer">

    <div class="nav">
      <h1><a href="cryptoHeadlines.php">&#x2190</a></h1>
    </div>


  <!--here is where the headings from the databases are echoed-->
    <div class="content">

    <div class="hver_div">
      <a href="#footer">&#8595;</a>
    </div>

    <?php
      include_once("../databaseConnection.php");


      # TODO: bind the sql statements
      $sql = "SELECT * FROM `blogtable` WHERE contentID = ?";
      $stmt = $conn -> prepare($sql);

      
      $stmt -> bind_param('s',$_GET['link']);


      $stmt -> execute();

      $result = $stmt -> get_result();
      $row = $result -> fetch_assoc();

      echo "<h1>".$row['blogHeading']."</h1>";
      echo "<p>".$row['blogContent']."</p>";
      echo "<h1>".$row['blogSubHeading1']."</h1>";
      echo "<p>".$row['blogSubContent1']."</p>";
      echo "<h1>".$row['blogSubHeading2']."</h1>";
      echo "<p>".$row['blogSubContent2']."</p>";
      echo "<h1>".$row['blogSubHeading3']."</h1>";
      echo "<p id='footer'>".$row['blogSubContent3']."</p>";
       

    ?>

    </div>

   

  </div>
  
</body>
</html>