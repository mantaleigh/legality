<?php
ini_set('display_errors', 'On');


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

$data = array();
    
$query = "SELECT ID, latitude, longitude, date_of_event, description, crime_type, image_path FROM Entries ORDER by ID";

if ($result = $mysqli->query($query)) {
    $count = 0;    
    while ($row = $result->fetch_assoc()) {
		$data[$count]['ID'] = $row['ID'];
		$data[$count]['latitude'] = $row['latitude'];
		$data[$count]['longitude'] = $row['longitude'];
		$data[$count]['date_of_event'] = $row['date_of_event'];
        $data[$count]['description'] = $row['description'];
		$data[$count]['crime_type'] = $row['crime_type'];
		$data[$count]['image_path'] = $row['image_path'];
		 $count++;
	}
    
}
$data = json_encode($data);
echo $data;



?>