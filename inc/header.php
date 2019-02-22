<?php include 'config/config.php'; ?>
<?php include 'lib/Database.php'; ?>
<?php include 'helpers/Format.php'; ?>
<?php 
	$db = new Database();
	$fm = new Format();
?>

<!DOCTYPE html>
<html>
<head>
	
	 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">


    <title>ASEAN</title>

    <!-- Bootstrap core CSS -->


    <!-- Custom styles for this template -->

    <link href="MDB/css/bootstrap.css" rel="stylesheet">
    <link href="MDB/css/mdb.css" rel="stylesheet">
    <link href="MDB/css/mdb.lite.css" rel="stylesheet">
    <link href="MDB/css/style.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style type="text/css">
        body {
            font-family: 'Roboto', sans-serif;
            padding: 0;
            margin: 0;
        }

        small {
            font-size: 12px;
            color: rgba(0, 0, 0, 0.4);
        }

        h1 {
            text-align: center;
            padding: 50px 0;
            font-weight: 800;
            margin: 0;
            letter-spacing: -1px;
            color: inherit;
            font-size: 40px;
        }

        h2 {
            text-align: center;
            font-size: 30px;
            margin: 0;
            font-weight: 300;
            color: inherit;
            padding: 50px;
        }

        .center {
            text-align: center;
        }

        section {
            height: 100vh;
        }

        /* NAVIGATION */
        nav {
            width: 100%;
            margin: 0 auto;
            background: #fff;
            padding: 50px 0;
            box-shadow: 0px 5px 0px #dedede;
        }
        nav ul {
            list-style: none;
            text-align: center;
        }
        nav ul li {
            display: inline-block;
        }
        nav ul li a {
            display: block;
            padding: 15px;
            text-decoration: none;
            color: #aaa;
            font-weight: 800;
            text-transform: uppercase;
            margin: 0 10px;
        }
        nav ul li a,
        nav ul li a:after,
        nav ul li a:before {
            transition: all .5s;
        }
        nav ul li a:hover {
            color: #000000;
        }

        /* Circle */
        nav.circle ul li a {
            position: relative;
            overflow: hidden;
            z-index: 1;
        }
        nav.circle ul li a:after {
            display: block;
            position: absolute;
            margin: 0;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            content: '.';
            color: transparent;
            width: 1px;
            height: 1px;
            border-radius: 50%;
            background: transparent;
        }
        nav.circle ul li a:hover:after {
            -webkit-animation: circle 1.5s ease-in forwards;
        }




        /* Keyframes */
        @-webkit-keyframes circle {
            0% {
                width: 1px;
                top: 0;
                left: 0;
                bottom: 0;
                right: 0;
                margin: auto;
                height: 1px;
                z-index: -1;
                background: #eee;
                border-radius: 100%;
            }
            100% {
                background: #aaa;
                height: 5000%;
                width: 5000%;
                z-index: -1;
                top: 0;
                bottom: 0;
                left: 0;
                right: 0;
                margin: auto;
                border-radius: 0;
            }
        }
        .fa {
            padding: 11px;
            font-size: 30px;
            width: 50px;
            height: 50px;
            text-align: center;
            text-decoration: none;
            margin: 5px 2px;

        }

        .fa:hover {
            opacity: 0.9;
        }

        .fa-facebook {
            background: #3B5998;
            color: white;
        }

        .fa-twitter {
            background: #55ACEE;
            color: white;
        }

        .fa-google {
            background: #dd4b39;
            color: white;
        }

        .fa-linkedin {
            background: #007bb5;
            color: white;
        }

        .fa-youtube {
            background: #bb0000;
            color: white;
        }

        .fa-instagram {
            background: #125688;
            color: white;
        }

        .fa-pinterest {
            background: #cb2027;
            color: white;
        }

        .fa-snapchat-ghost {
            background: #fffc00;
            color: white;
            text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
        }

        .fa-skype {
            background: #00aff0;
            color: white;
        }

        .fa-android {
            background: #a4c639;
            color: white;
        }

        .fa-dribbble {
            background: #ea4c89;
            color: white;
        }

        .fa-vimeo {
            background: #45bbff;
            color: white;
        }

        .fa-tumblr {
            background: #2c4762;
            color: white;
        }

        .fa-vine {
            background: #00b489;
            color: white;
        }

        .fa-foursquare {
            background: #45bbff;
            color: white;
        }

        .fa-stumbleupon {
            background: #eb4924;
            color: white;
        }

        .fa-flickr {
            background: #f40083;
            color: white;
        }

        .fa-yahoo {
            background: #430297;
            color: white;
        }

        .fa-soundcloud {
            background: #ff5500;
            color: white;
        }

        .fa-reddit {
            background: #ff5700;
            color: white;
        }

        .fa-rss {
            background: #ff6600;
            color: white;
        }
    </style>


</head>

<body>
	<div class="top-bar_sub_w3layouts container-fluid">
    <div class="row">
        <div class="col-md-4 logo text-left ">
            <a class="navbar-brand" href="index.php" style="color: black;">
                <img src="vendor/img/asean.png" style="width: 80px; height: 80px;" > ASEAN</a>
        </div>
        <div class="col-md-4 top-forms text-center mt-lg-3 mt-md-1 my-4">
            <span>Welcome Back!</span>
            <span class="mx-lg-4 mx-md-2  mx-1">
            <a href="blogadmin/index.php">
              <i class="fas fa-lock"></i> <strong>Sign In</strong></a>
          </span>
            <span>
            <a href="blogadmin/membership_signup.php">
              <i class="far fa-user"></i> <strong>Register</strong></a>
          </span>
        </div>
        <div class="col-md-4 log-icons text-right mt-3">
            <!--social-->
            <a href="#" class="fa fa-facebook" style="border-radius: 100%;"></a>
            <a href="#" class="fa fa-twitter" style="border-radius: 100%;"></a>
            <a href="#" class="fa fa-google" style="border-radius: 100%;"></a>
            <a href="#" class="fa fa-linkedin" style="border-radius: 100%;"></a>
            <a href="#" class="fa fa-instagram" style="border-radius: 100%;"></a>
        </div>
    </div>
</div>
<nav class="navbar navbar-expand-lg navbar-dark circle" style="background-color: #e8ebef;">
    <div class="container">

        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto" >
                <li class="nav-item active">
                    <a class="nav-link" href="index.php" style="color: black;">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php" style="color: black;">About</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: black;">
                        Portfolio
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                        <a class="dropdown-item" href="portfolio-1-col.html" style="color: black;">1 Column Portfolio</a>
                        <a class="dropdown-item" href="portfolio-2-col.html" style="color: black;">2 Column Portfolio</a>
                        <a class="dropdown-item" href="portfolio-3-col.html" style="color: black;">3 Column Portfolio</a>
                        <a class="dropdown-item" href="portfolio-4-col.html" style="color: black;">4 Column Portfolio</a>
                        <a class="dropdown-item" href="portfolio-item.html" style="color: black;">Single Portfolio Item</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.html" style="color: black;">Contact</a>
                </li>


            </ul>
        </div>
<!--        <form action="search.php" method="post" class="form-inline my-2 my-lg-0 header-search" name="form">-->
<!--            <input class="form-control" type="search" placeholder="Search here..." required="yes" name="search[keyword]" style="width: 200px; height: 60px">-->
<!--            <a href="#" class="btn btn-info" ><i class="fas fa-search fa-2x"></i></a>-->
<!--        </form>-->
        <form class="form-inline mr-auto">
            <input class="form-control mr-md-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-unique btn-rounded btn-md my-0" type="submit">Search</button>
        </form>
    </div>
</nav>