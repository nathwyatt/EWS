<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "flood";

// Create a connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if all sensor readings are provided as query parameters
if (isset($_GET['water_level']) && isset($_GET['humidity']) && isset($_GET['temperature']) && isset($_GET['soil_moisture']) && isset($_GET['latitude']) && isset($_GET['longitude'])) {
    $distance = $_GET['water_level'];
    $humidity = $_GET['humidity'];
    $temperature = $_GET['temperature'];
    $soil_moisture = $_GET['soil_moisture'];
    $latitude = $_GET['latitude'];
    $longitude = $_GET['longitude'];

    // Insert the data into the database
    $sql = "INSERT INTO station_data (water_level, hummidity, temperature, soil_moisture,latitude,longitude,station_Id) VALUES ('$distance', '$humidity', '$temperature', '$soil_moisture','$latitude','$longitude', 1)";

    if ($conn->query($sql) === TRUE) {
        echo "Data inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "Sensor readings not provided in GET data";
}

// Close the database connection
$conn->close();

?>
