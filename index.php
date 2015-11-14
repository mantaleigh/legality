<?php

//Need to end off with mysqli close
define('DB_HOST', 'legalityprojectdb.cjdgq2fyyngs.us-west-2.rds.amazonaws.com');
define('DB_NAME', 'legalityprojectdb');
define('DB_USER','user');
define('DB_PASSWORD','password');

$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die("Failed to connect to MySQL: " . mysqli_error());

 if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}



//MAKE QUERIES HERE


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
        <link rel="stylesheet" href="css/main.css" type="text/css">

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
            <a class="navbar-brand" href="#"><img src="" alt="Logo"></img></a> <!-- logo here -->
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#time">Time</a></li>
            <li><a href="#map">Map</a></li>
            <li><a href="#frequency">Frequency</a></li>
            <li><a href="#type">Type</a></li>
            <li><a href="#id">ID</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
        
    <div class="container">

      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron">
        <h1>Navbar example</h1>
        <p>This example is a quick exercise to illustrate how the default, static and fixed to top navbar work. It includes the responsive CSS and HTML, so it also adapts to your viewport and device.</p>
        <p>To see the difference between static and fixed top navbars, just scroll.</p>
        <p>
          <a class="btn btn-lg btn-primary" href="../../components/#navbar" role="button">View navbar docs &raquo;</a>
        </p>
      </div>

    </div> <!-- /container -->



        <!-- jQuery --> 
        <script type="text/javascript" src="js/jquery-1.11.3.js"></script>
        <!-- Boostrap --> 
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <!-- Custom -->
        <script type="text/javascript" src="js/test.js"></script>
    </body>
</html>