<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="blog">

    <link rel="icon" href="../../favicon.ico">
    <title>Relou.com</title>
    <!-- CSS -->
    <link href="/assets/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/css/module.css" rel="stylesheet">
    <!-- JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="/assets/js/module.js"> </script>
    <script src="/assets/js/search.js"> </script>


</head>

<body class="container">
<div class="row">
    <div class="col-lg-12">
        <?php
            include_once("include/header.php");
        ?>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        Gauche
    </div>
    <div class="col-md-6">
        <?php
            include_once("include/search.php")
        ?>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        FOOTER
    </div>
</div>


</body>



</html>