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
    <link rel="stylesheet" href="css/styling.css" type="text/css">
    
</head>
    
    <body>
        <h1> testing </h1>

        
        
        
        

        <!-- jQuery --> 
        <script type="text/javascript" src="js/jquery-1.11.3.js"></script>
        <!-- Boostrap --> 
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <!-- Custom -->
        <script type="text/javascript" src="js/test.js"></script>
    </body>
</html>