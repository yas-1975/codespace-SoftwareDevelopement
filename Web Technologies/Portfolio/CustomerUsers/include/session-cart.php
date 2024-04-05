<?php
# Access session.
session_start() ;
# Redirect if not logged in.
if ( !isset( $_SESSION[ 'user_id' ] ) ) { require ( 'login_tools.php' ) ; load() ; }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Luxury Candles</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .card{
            margin-top: 10px;
            margin-bottom: 20px;
        }

    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-white bg-white border-bottom">
    <a class="navbar-brand" href="home.php"> Hello <?php
        echo "{$_SESSION['first_name']} {$_SESSION['last_name']}";?></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-user" style="font-size:20px;"> Account </i>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <!-- Dropdown items -->
                    <a class="dropdown-item" href="order_history.php">Order History</a>
                    <a class="dropdown-item" href="logout.php">Log Out</a>
                </div>
            </li>
        </ul>
		<ul>
		<p></p>
		</ul>
		<ul class="navbar-nav">
            <li class="nav-item active"><a href="cart.php"><i class="fa fa-shopping-cart" style="font-size:20px;"> View Basket</i></a>
            </li>
        </ul>
        
    </div>
</nav>
<div class="container">
