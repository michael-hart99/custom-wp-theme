<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="https://students.washington.edu/uwtaiko/wordpress/wp-content/uploads/2020/07/icon-purple.png">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- <link rel="stylesheet" href="styles/styles.css"> -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/fetch/2.0.3/fetch.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/es6-promise/4.1.1/es6-promise.js"></script>
    <script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>

    <!-- <script src="js/index.js"></script> -->
    
    <title>Home</title>
    <?php wp_head();?>
</head>

<body>
    <!-- Navbar on small screens -->
    <nav id="nav" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:60px">
        <a href="proposal" class="navLink" onclick="navToggle()">PROPOSAL</a>
        <a href="engage" class="navLink" onclick="navToggle()">ENGAGE</a>
        <a href="booking" class="navLink" onclick="navToggle()">BOOKING</a>
        <a href="about" class="navLink" onclick="navToggle()">ABOUT</a>
        <a href="signin" class="navLink">SIGN IN</a>
    </nav>

    <!-- Navbar -->
    <nav class="w3-top">
        <div class="w3-bar w3-card transparentNav">
            <a class="navLink w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="navToggle()"
                title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
            <a href="index" class="navLink"><img src="https://students.washington.edu/uwtaiko/wordpress/wp-content/uploads/2020/07/logo-new.png" class="homeLogo"></a>
            <!--<a href="index.html" class="navLink">HOME</a>-->
            <a href="proposal" class="navLink w3-hide-small">PROPOSAL</a>
            <a href="engage" class="navLink w3-hide-small">ENGAGE</a>
            <a href="booking" class="navLink w3-hide-small">BOOKING</a>
            <a href="about" class="navLink w3-hide-small">ABOUT</a>
            <a href="signin" class="navLink signIn w3-hide-small">SIGN IN</a>
        </div>
    </nav>