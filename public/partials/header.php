<?php
namespace public;
?>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title><?php echo $title ?> </title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <link rel="stylesheet" type="text/css" href="/styles/dg-styles.css" />
    
    
    
    
</head>

<body class="body">
    <div class="body-container">
        <header class="main-header header" id="header">
        <span class="menu-btn" onclick="openNav()">&#9776</span>

            <h1 class="main-heading portfolio-header logo">Dr Gabriel Codes</h1>
            <span class="motto">...Imagination meets creativity.</span>
            
            <div class="navigation-area side-nav" id="side-nav">
            <a href="javascript:void(0)" class="close-btn" onclick="closeNav()">&times;</a>
            <nav id="navigation-tabs">
                <a class="nav-link nav-list-item" href="/index.php">Home</a>
                <a class="nav-link nav-list-item" href="/public/about-me.php">About</a>
                    <a class="nav-link nav-list-item" href="/public/contact-me.php">Contact me</a>
            </nav>
        </div>

        <nav id="navigation-list">
                <a class="nav-link nav-list-item" href="/index.php">Home</a>
                <a class="nav-link nav-list-item" href="/public/about-me.php">About</a>
                    <a class="nav-link nav-list-item" href="/public/contact-me.php">Contact me</a>
            </nav>

        


        </header>

