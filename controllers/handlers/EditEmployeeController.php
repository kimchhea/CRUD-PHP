<?php 
if($_SERVER['REQUEST_METHOD'] == "POST") {
    // Retrieve the submitted data
    $data = $_POST;

    // Display the data for testing purposes
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}
?>
