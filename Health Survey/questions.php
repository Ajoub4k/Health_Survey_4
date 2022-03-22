<?php
  session_start();

  if(isset($_POST['name']) && !empty($_POST['name'])) {
    $_SESSION['howHealthy'] =  $_POST["howHealthy"];
    $_SESSION['name'] =  $_POST["name"];
    $_SESSION['gender'] =  $_POST["gender"];
    $_SESSION['email'] =  $_POST["email"];
    $_SESSION['age'] =  $_POST["age"];
    $_SESSION['weight'] =  $_POST["weight"];
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>HEALTH SURVEY</title>
  <link rel="icon" type="image/x-icon" href="assets/images/logo_n.ico">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel='stylesheet' type='text/css' media='screen' href='assets/css/main.css'>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <script src="/assets/js/onload.js"></script>
  
</head>

<body>
  
  <?php include 'Inc/header.php' ?>

  <div class="container" id="main-container">
    
    <?php if(isset($_POST['name']) && !empty($_POST['name'])) { ?>
      <div class="title-index my-5">
        <p id="titleh">PLEASE ANSWER ALL THE FOLLOWING QUESTIONS</p>
      </div>
  
      <?php include 'Inc/questionsList.php' ?>

    <?php } else { ?>
      <div class="title-index my-5">
        <p id="titleh">Please fill the form starting from the Home page</p>
      </div>
      
    <?php } ?>

  </div>
  
  <?php include 'Inc/footer.php' ?>
</body>
  

</html>