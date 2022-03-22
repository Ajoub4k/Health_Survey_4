<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>HEALTH SURVEY</title>
  <link rel="icon" type="image/x-icon" href="assets/images/logo_n.ico">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel='stylesheet' type='text/css' media='screen' href='assets/css/main.css'>
  <script src="/assets/js/onload.js"></script>

</head>

<body>

  <?php include 'Inc/header.php' ?>

  <div class="container" id="main-container">

    <h3 class="mt-5">Welcome to EMR RME</h3>

    <div class="title-index my-5">
      <p id="titleh">SURVEY ON NUTRITION, FITNESS AND SPORT </p>
    </div>
    
    <?php 
      include 'Inc/user.php'
    ?>

    <?php
      // include 'Inc/intro.php'
    ?>  

</div>

  <?php include 'Inc/footer.php' ?>
</body>

</html>