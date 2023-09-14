<?php 
include_once("config.php");

// Change the query to order by InTime instead of id
$query = "SELECT picture FROM approval ORDER BY InTime DESC LIMIT 1";
$result = $db->query($query);

$image_path = "path_to_default_image.jpg"; // Default path in case there's no image in the database.

if ($result && $result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $image_path = $row['picture'];
}

echo $image_path;
?>

