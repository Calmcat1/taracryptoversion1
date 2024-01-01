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
      <h1><a href='../../HTML/cryptoLandingPage.html'>&#8962; Home</a></h1>
    </div>

  <!--here is where the headings from the databases are echoed-->
    <div class="content">

    <?php
      include_once("../databaseConnection.php");


      # TODO: bind the sql statements when you add params
      $sql = "SELECT * FROM `blogtable`";

      #sends sql to db b4hand
      $stmt = $conn -> prepare($sql);

      #excecutes the statement
      $stmt -> execute();

      # gets the result of the statements
      $result = $stmt -> get_result();

      # fetching results for the row

      #headings
      if ($result -> num_rows > 0){
        while($row = $result->fetch_assoc()){ 
            $heading = $row['blogHeading'];
            $ID = $row['contentID'];
            $imgPath = $row['blogimageUrls'];
            echo '<div class="headline_container">';
            echo "<img src='$imgPath'>";
            echo "<a href='cryptoBlogContent.php?link=$ID'><p>".$heading."</a></p>"; 
            echo '</div>';
            
          
        }

        
      }
    ?>

    </div>

  </div>
  
</body>
</html>