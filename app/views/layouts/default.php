<!DOCTYPE html>
<html lang="en">
  <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>DEFAULT</title>


        <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300, 400,700|Inconsolata:400,700" rel="stylesheet">

        <link rel="stylesheet" href="/public/assets/public/css/bootstrap.css">
        <link rel="stylesheet" href="/public/assets/public/css/animate.css">
        <link rel="stylesheet" href="/public/assets/public/css/owl.carousel.min.css">

        <link rel="stylesheet" href="/public/assets/public/css/ionicons.min.css">
        <link rel="stylesheet" href="/public/assets/public/css/font-awesome.min.css">
        <link rel="stylesheet" href="/public/assets/public/fonts/flaticon/font/flaticon.css">

        <!-- Theme Style -->
        <link rel="stylesheet" href="/public/assets/public/css/style.css">
  </head>
  <body>
    <?if (isset($_SESSION["error"])):?>
       <div class="error">
          <?=$_SESSION["error"]; unset($_SESSION["error"]);?>
       </div>
    <?endif;?>

    <?if (isset($_SESSION["success"])):?>
       <div class="success">
          <?=$_SESSION["success"]; unset($_SESSION["success"]);?>
       </div>
       <?echo '<pre>' .print_r($_SESSION,1). '</pre>';?>
    <?endif;?>

  <?=$content?>


  <script src="/public/assets/public/js/jquery-3.2.1.min.js"></script>
    <script src="/public/assets/public/js/jquery-migrate-3.0.0.js"></script>
    <script src="/public/assets/public/js/popper.min.js"></script>
    <script src="/public/assets/public/js/bootstrap.min.js"></script>
    <script src="/public/assets/public/js/owl.carousel.min.js"></script>
    <script src="/public/assets/public/js/jquery.waypoints.min.js"></script>
    <script src="/public/assets/public/js/jquery.stellar.min.js"></script>

    
    <script src="/public/assets/public/js/main.js"></script>
  </body>
</html>