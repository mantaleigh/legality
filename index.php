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


<html>

<head>
<script type = "text/javascript">
 //Here we take the PHP data through ajax
</script>
<link rel="stylesheet" href="css/styling.css" type="text/css">
</head>




<body>

<!-- our page --> 
<h1> testing </h1>
    
    
<script type="text/javascript" src="js/jquery-1.11.3.js"></script>
<script type="text/javascript" src="js/test.js"></script>
</body>



</html>