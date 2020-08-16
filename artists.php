<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <nav>
        <a href="index.php" class="menu">home</a>
        <a href="artists.php" class="menu">artists</a>
    </nav>
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "engine";

        $conn = mysqli_connect($servername, $username, $password, $dbname);
        if (!$conn) {
          die("Connection failed: " . mysqli_connect_error());
        }

        $sql = "SELECT * FROM search_engine ORDER BY id";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
          while($row = mysqli_fetch_assoc($result)) {
        ?>

                <div class="card-deck">
                <div class="card">
                <img src="<?php  echo "" . $row["img"]. "";  ?>" class="card-img-top">
                <div class="card-body">
                <h5 class="card-title"><?php  echo "" . $row["artist"]. "<br>";  ?></h5>
                <p class="card-text"><?php  echo "style: " . $row["style"]. "<br>";  ?></p>
                <p class="card-text"><?php  echo "yo: " . $row["yo"]. "<br>";  ?></p>
                </div>
                </div>
                <div class="card">
                <img src="<?php  echo "" . $row["img"]. "";  ?>" class="card-img-top">
                <div class="card-body">
                <h5 class="card-title"><?php  echo "" . $row["artist"]. "<br>";  ?></h5>
                <p class="card-text"><?php  echo "style: " . $row["style"]. "<br>";  ?></p>
                <p class="card-text"><?php  echo "yo: " . $row["yo"]. "<br>";  ?></p>
                </div>
                </div>
                <div class="card">
                <img src="<?php  echo "" . $row["img"]. "";  ?>" class="card-img-top">
                <div class="card-body">
                <h5 class="card-title"><?php  echo "" . $row["artist"]. "<br>";  ?></h5>
                <p class="card-text"><?php  echo "style: " . $row["style"]. "<br>";  ?></p>
                <p class="card-text"><?php  echo "yo: " . $row["yo"]. "<br>";  ?></p>
                </div>
                </div>
                </div>

        <?php 
                }
            } else {
                echo "0 results";
            }
        ?>



</body>
</html>