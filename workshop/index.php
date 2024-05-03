<?php

define('DB_SERVERNAME', 'localhost:5506');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'root');
define('DB_NAME', '119_university');


$mysqli = new mysqli(DB_SERVERNAME, DB_USERNAME, DB_PASSWORD, DB_NAME);

if ($mysqli && $mysqli->connect_error) {
  echo 'Database mysqli Failed';
  die;
}



var_dump($mysqli);

$sql = "SELECT * FROM `courses`";
$result = $mysqli->query($sql);

/* var_dump($result);
die; */

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3' crossorigin='anonymous'>
</head>

<body>
  <div class="container">
    <div class="row row-cols-1 row-cols-md-3 g-4">

      <?php if ($result && $result->num_rows > 0) :
        while ($row = $result->fetch_assoc()) : ?>

          <div class="col">
            <div class="card">
              <div class="card-body">
                <h4><?= $row['name'] ?></h4>
                <p><?= $row['description'] ?></p>
              </div>
            </div>
          </div>

      <?php
        endwhile;
      endif;
      ?>

    </div>
  </div>



</body>

</html>