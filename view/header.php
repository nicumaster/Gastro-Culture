<!DOCTYPE HTML>
<html>
<head>
    <title>Home</title>
    <link href="/css/style.css" rel="stylesheet">
    <link href="/css/bootstrap.css" rel="stylesheet">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/bootstrap-grid.css" rel="stylesheet">
    <link href="/css/bootstrap-grid.min.css" rel="stylesheet">
    <link href="/css/bootstrap-reboot.css" rel="stylesheet">
    <link href="/css/bootstrap-reboot.min.css" rel="stylesheet">
</head>
<body class="body">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Gastro-Culture.ch</a>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/uberuns">Über uns</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/user">users</a>
            </li>
        </ul>
    </div>

        <?php
        if(!$_SESSION['loginerror'] && !$_SESSION['loginsuccess']){
            if(!isset($_SESSION['id'])){
                $_SESSION['loginmiss'] = true;
                $_SESSION['message'] = 'sie sind nicht eingeloggt';
            } else {
                $_SESSION['loginmiss'] = false;
            }
            $_SESSION['loginsuccess'] = false;
            $_SESSION['loginerror'] = false;
        }
        if($_SESSION['loginerror']){
            $_SESSION['loginsuccess'] = true;
            $_SESSION['loginmiss'] = false;
        }
        if($_SESSION['loginsuccess']){
            $_SESSION['loginmiss'] = false;
            $_SESSION['loginerror'] = false;
        }
        echo "<div class='meldung_header'>";
        if($_SESSION['loginerror']){
            echo "<div class='alert alert-danger'>".$_SESSION['message']."</div>";
        }
        if($_SESSION['loginsuccess']){
            echo "<div class='alert alert-success'>".$_SESSION['message']."</div>";
        }
        if($_SESSION['loginmiss']){
            echo "<div class='alert alert-warning'>".$_SESSION['message']."</div>";
        }
        echo "</div>";
        echo "<div class=\"nav_login\">";
        if(isset($_SESSION['id']) && isset($_SESSION['username'])){
            echo "<div class='user_logo'><a href='/user/profile'/></div>";
            echo "<form action='/user/logout' type='submit'><input type='submit' class='login_button_header' value='logout'></form>";
        } else {
            echo "<div class='user_logo_register'><a href='/user/register'></a></div>";
            echo "<form class='login_form' method='post' action='/user/doLogin'>";
            echo "<input onblur='this.placeholder = \"username\"' onfocus='this.placeholder= \" \"' class='nav_login_inputs' placeholder='username' type='text' name='username'>";
            echo "<input onblur='this.placeholder = \"password\"' onfocus='this.placeholder= \" \"' class='nav_login_inputs' placeholder='password' type='password' name='password'>";
            echo "<input type='submit' class='login_button_header' value='login'>";
            echo "</form>";
        }
        ?>
    </div>
</nav>
