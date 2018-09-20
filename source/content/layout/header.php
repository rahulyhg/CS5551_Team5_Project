<!DOCTYPE html>
<html lang="en">
<head>
    <title> Smart Bhojan </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>

    <link rel="shortcut icon" href="content/graphics/ladoo solo.png" />
    <link rel="stylesheet" href="content/css/base.css">

    <script src="content/js/smartBhojanApp.js"></script>

    <? include_once( "content/backend/backend.php" ); ?>

</head>
<body>
    <div class="container">
        <header>
            <p><img src="content/graphics/ladoo solo.png" class="logo"> Smart Bhojan</p>
            <h2><?=$pageName?></h2>
        </header>
        <nav>
            <div class="row">
                <div class="col-md-3">
                    <a href="grocery.php">Grocery List</a>
                </div>
                <div class="col-md-3">
                    <a href="recipe.php">Recipes</a>
                </div>
                <div class="col-md-3">
                    <a href="control-panel.php">Control</a>
                </div>
                <div class="col-md-3">
                    <a href="about.php">About</a>
                </div>
            </div>
        </nav>

        <section class="main-view">
            <!-- BEGINNING OF WEBPAGE -->
