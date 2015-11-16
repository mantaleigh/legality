<?php
require_once('receive_data.php');
?>


<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Legality</title>

        <!-- Boostrap -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <script type = "text/javascript">
            //Here we take the PHP data through ajax
        
        </script>

        <!-- Custom Styling -->
        <link rel="stylesheet" href="css/main.css">

    </head>

    <body>
        <nav class="navbar navbar-default navbar-fixed-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
                <a class="navbar-brand" href="#"><img class="logo" src="assets/logo.png" alt="Logo"></img></a> <!-- logo here -->
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="active" id="entries-button"><a href="#entries">Entries</a></li>
                <li><a href="#map" id="map-button">Map</a></li>
              </ul>
            </div><!--/.nav-collapse -->
          </div>
        </nav>
    
    <div id="main"><div id="map_page"></div><div id="entries_page"></div></div>
    
    
    <div id="footer" class="footer">
        <div class="container"> 
            <span class="footer-link"><a href="#about">About Us</a></span>
            <span class="footer-link"><a href="#contact">Contact Us</a></span>
            <span class="footer-link"><a href="#privacy-policy">Privacy Policy</a></span>
            <span class="footer-copyright">&copy; Legality - All Rights Reserved</span>
        </div>
    </div>


   
        <!-- jQuery --> 
        <script type="text/javascript" src="js/jquery-1.11.3.js"></script>
        <!-- Boostrap --> 
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAODGY9h63E5KEnZkQLjhpKTEON4X7sfCg&signed_in=true&libraries=visualization">
    </script>
    </body>
</html>