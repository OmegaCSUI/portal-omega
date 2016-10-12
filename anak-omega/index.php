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

    <title>Anak Omega - Portal</title>

    <!-- Bootstrap Core CSS -->
    <link href="../scrolling-nav/css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../scrolling-nav/css/scrolling-nav.css" rel="stylesheet">
    <link href="../scrolling-nav/css/grid.css" rel="stylesheet">
    <link href="../scrolling-nav/css/button-custom.css" rel="stylesheet">
    <link href="../scrolling-nav/css/arrow-bounce.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body id="page-top">

    <!-- Intro Section -->
    <section id="intro" class="intro-section">
        <img src="../scrolling-nav/assets/omega-logo-midres.png" width="450px" height="450px"></br></br>
        <?php
            $logged_in = portal_is_logged_in();
            if($logged_in){
                $user = portal_get_sso_info();
                echo 'logged in as '.$user->name.' ('.$user->npm.')</br>';
                //echo 'is_authorized() = '.portal_is_authorized($user).'</br>';
                echo '</br>';
                echo '<a href="logout.php" class="btn btn-primary btn-lg outline">logout</a></br></br>';
            }else{
                echo '<a href="auth.php" class="btn btn-primary btn-lg outline">login sso</a></br></br>';
            }
            //echo '<a href="register.php">register wiki account here</a></br>';
            //echo '<a href="'.$GLOBALS['mediawiki_url'].'">wiki here</a></br>';
        ?>
        <div class="bounce">
            <a class="page-scroll" href="#about"><img src="../scrolling-nav/assets/arrow.png" width="120px" height="50px"></a>
        </div>
    </section>
    <!-- About Section -->
    <section id="about" class="about-section">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <?php
                        if($logged_in){
                            echo '<a href="ceritanyawiki.php"><img src="../scrolling-nav/assets/imgimg.jpg">';
                            echo '<h3>Wiki</h3></a>';
                        }else{
                            echo '<a data-toggle="modal" href="#myModal" ><img src="../scrolling-nav/assets/imgimg.jpg">';
                            echo '<h3>Wiki</h3></a>';
                        }
                    ?>
                </div>
                <div class="col-md-4">
                    <img src="../scrolling-nav/assets/imgimg.jpg">
                    <h3>Blog</h3>
                </div>
                <div class="col-md-4">
                    <?php
                        if($logged_in){
                            echo '<a href="ceritanyagames.php"><img src="../scrolling-nav/assets/imgimg.jpg">';
                            echo '<h3>Games</h3></a>';
                        }else{
                            echo '<a data-toggle="modal" href="#myModal" ><img src="../scrolling-nav/assets/imgimg.jpg">';
                            echo '<h3>Games</h3></a>';
                        }
                    ?>
                </div>
            </div>
        </div>
        <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Ini rahasia angkatan</h4>
                    </div>
                    <div class="modal-body">
                        <p>Kalo mau liat login dulu cuy.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
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