<!DOCTYPE html>
<html lang="en">

<?php
	require_once "environment.php";
	require_once "portal.php";

	portal_init();
?>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Scrolling Nav - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="../scrolling-nav/css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../scrolling-nav/css/scrolling-nav.css" rel="stylesheet">
    <link href="../scrolling-nav/css/grid.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<!-- The #page-top ID is part of the scrolling feature - the data-spy and data-target are part of the built-in Bootstrap scrollspy function -->

<body id="page-top">

    <!-- Intro Section -->
    <section id="intro" class="intro-section">
        <img src="../scrolling-nav/assets/omega-logo-midres.png" width="450px" height="450px"><p>&nbsp</p>
        <?php
            if(portal_is_logged_in()){
                header("Location: ".$GLOBALS['base_url']."/anak-omega/ceritanyawiki.php");
            }else{
                echo 'Kamu harus login SSO kalo mau liat halaman ini. Kuy login dulu</a></br>';
                echo '<a href="auth.php" class="btn btn-primary">login sso</a></br>';
            }
            //echo '<a href="register.php">register wiki account here</a></br>';
            //echo '<a href="'.$GLOBALS['mediawiki_url'].'">wiki here</a></br>';
        ?>
    </section>
    
    <!-- jQuery -->
    <script src="../scrolling-nav/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../scrolling-nav/js/bootstrap.min.js"></script>

    <!-- Scrolling Nav JavaScript -->
    <script src="../scrolling-nav/js/jquery.easing.min.js"></script>
    <script src="../scrolling-nav/js/scrolling-nav.js"></script>

</body>

</html>