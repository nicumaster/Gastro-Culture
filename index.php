<!DOCTYPE HTML>
<html>
<head>
    <title>Home</title>
    <link href="css/style.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-grid.css" rel="stylesheet">
    <link href="css/bootstrap-grid.min.css" rel="stylesheet">
    <link href="css/bootstrap-reboot.css" rel="stylesheet">
    <link href="css/bootstrap-reboot.min.css" rel="stylesheet">
</head>
<body class="body">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Über uns</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Login</a>
            </li>
        </ul>
    </div>
</nav>
<?php
include_once "controller/DefaultController.php";
?>

<div class="home_map_div">
    <div class="home_map_alaska_div"></div>
    <div class="home_map_canada_div"></div>
    <div class="home_map_europe_div"></div>
    <div class="home_map_russia_div"></div>
    <div class="home_map_usa_div"></div>
    <div class="home_map_south_america_div"></div>
    <div class="home_map_africa_div"></div>
    <div class="home_map_asia_div"></div>
    <div class="home_map_australia_div"></div>
</div>

</body>
</html>