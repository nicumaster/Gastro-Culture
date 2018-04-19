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
                <a class="nav-link" href="\uberuns">Über uns</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="\user">users</a>
            </li>
        </ul>
    </div>

    <div class="nav_login">
        <a href="\user\register"><div class="user_logo_register"></div></a>
        <a href="\user\profile"><div class="user_logo"></div></a>
        <form type="submit" class="login_form">
            <input onblur="this.placeholder = 'username'" onfocus="this.placeholder= ''" class="nav_login_inputs" placeholder="username" type="text" name="username">
            <input onblur="this.placeholder = 'password'" onfocus="this.placeholder= ''" class="nav_login_inputs" placeholder="password" type="password" name="password">
        </form>
    </div>
</nav>
