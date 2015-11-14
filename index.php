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
                <a class="navbar-brand" href="#"><img class="logo" src="assets/logo-150.png" alt="Logo"></img></a> <!-- logo here -->
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="#entries">Entries</a></li>
                <li><a href="#map">Map</a></li>
              </ul>
            </div><!--/.nav-collapse -->
          </div>
        </nav>
    
        <div id="search" class="panel panel-default">
            <div class="container">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Search By Keyword">
                      <span class="input-group-btn">
                        <button class="btn btn-default glyphicon glyphicon-search" type="button"></button>
                      </span>
                </div><!-- /input-group -->
                
                <div class="dropdown">
                  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    Type
                    <span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li><a href="#">Separated link</a></li>
                  </ul>
                </div> <!-- /dropdown -->
                <div class="dropdown">
                  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    No. of Reports
                    <span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li><a href="#">Separated link</a></li>
                  </ul>
                </div> <!-- /dropdown -->
                <div class="dropdown">
                  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    ID
                    <span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                    <li><a href="#">A-->Z</a></li>
                    <li><a href="#">Z-->A</a></li>
                  </ul>
                </div> <!-- /dropdown -->
                
            </div>
        </div>
    
        
    <div class="container">

      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron">
        <p>Table here.</p>
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