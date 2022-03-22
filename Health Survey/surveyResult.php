<?php
    session_start();

    if(isset($_POST['q2']) && !empty($_POST['q2'])) {

        $howHealthy =  $_SESSION["howHealthy"];
        $name =  $_SESSION["name"];
        $gender =  $_SESSION["gender"];
        $email =  $_SESSION["email"];
        $age =  $_SESSION["age"];
        $weight =  $_SESSION["weight"];
        $q2 = $_POST["q2"];
        $q3 = $_POST["q3"];
        $q4 = $_POST["q4"];
        $q5 = $_POST["q5"];
        $q6 = $_POST["q6"];
        $q7 = $_POST["q7"];
        $q8 = $_POST["q8"];
        $q9 = $_POST["q9"];
        $q10 = $_POST["q10"];   
    }
?>
<!DOCTYPE html>
<html>

<head>
    <title>Health Survey</title>
    
    <link rel="icon" type="image/x-icon" href="assets/images/logo_n.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel='stylesheet' type='text/css' media='screen' href='assets/css/main.css'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="/assets/js/onload.js"></script>
</head>

<body>

    <?php include 'Inc/header.php' ?>

    <div class="container" id="main-container">


        <?php if(isset($_POST['q2']) && !empty($_POST['q2'])) { ?>

            <h3 class="mb-5 mt-5"><?php echo $name; ?>, your Health Survey results is .. </h3>

            <?php
                // How HEALTHY
                $extraPhysPoint = ((int)$howHealthy >= 3 && ($q2 = "Yes" || $q4 != "No additional physical activity")) ? true : false;

                // Physical activity
                $q3Result = (int)$q3 >= 3 ? true : false;
                
                // Carbohydrates
                $q6Result = (int)$q6 >= 2 ? true : false;
                
                // Protein
                $q7Result = (int)$q7 >= 2 ? true : false;

                // Vegetables
                $q8Result = (int)$q8 >= 1 ? true : false;
                
                // Fruit
                $q9Result = (int)$q9 >= 1 ? true : false;

                if ($extraPhysPoint && $q3Result &&
                    $q6Result && $q7Result &&
                    $q8Result && $q9Result )
                {
                    echo "<h1>Great! You live healthy.</h1>";
                    echo "<div class='great-container'><img src='assets/images/great.gif' atl='angry girl' style='max-width: 390px; width:100%'></div>";
                } else {
                    echo "<h1>Ouch! You could do more for your health.</h1>";
                    echo "<img src='assets/images/Angry_Stomp.gif' atl='angry girl'>";
                }
            ?>


        <?php } else { ?>
            <div class="title-index my-5">
                <p id="titleh">What the hell are you doing here <img src="assets/images/icon-evil.svg" alt="smile" width="26"/> , go to the home page and start over <img src="assets/images/icon-happy.svg" alt="smile" width="26"/></p>
            </div>
        
        <?php } ?>        
    </div>
    <?php include 'Inc/footer.php' ?>

</body>

</html>