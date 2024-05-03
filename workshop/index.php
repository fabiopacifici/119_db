<?php

require_once __DIR__ . '/helpers/functions.php';
require_once __DIR__ . '/helpers/DB.php';
require_once __DIR__ . '/Models/Course.php';
require_once __DIR__ . '/Models/Department.php';


try {
  $mysqli = DB::connect();
} catch (Exception $error) {
  dd($error->getMessage());
}


$result = Department::all($mysqli);

//dd($mysqli, $result);

DB::disconnect($mysqli);

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