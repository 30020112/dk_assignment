<?php

// database requirements
$user ="a3002011_dkaur";
$password= "Amarvir2019";
$db="a3002011_dkaur";

//Database Connection
$connection = new mysqli('localhost', $user, $password, $db) or die(mysqli_error($connection));
   

// Check connection
//if ($connection->connect_error) {
    //die("Connection failed: " . $connection->connect_error);
 //}
   //echo "Connected successfully";
// Get all data from the table and save in a variable for use on our page application
$result = $connection->query("select * from subject") or die($connection->error());

//check form submission
 if(isset($_POST['item_no']))
 {
     //create variables for fetching data from form
     $item_number= $_POST['item_no'];
     $object_class = $_POST['object_class'];
     $subject_image = $_POST['subject_image'];
     $procedures = $_POST['procedures'];
     $description = $_POST['description'];
     $history = $_POST['history'];
     $ad_notes = $_POST['notes'];
     $reference = $_POST['reference'];

     //insert data into database
     $sql= "INSERT INTO subject (item_no, object_class, subject_image, procedures, description, history, ad_notes, reference)
     VALUES ('$item_number', '$object_class', '$subject_image', '$procedures', '$description', '$history', '$ad_notes', '$reference')";

    //display message
    if($connection->query($sql) === TRUE)
    {
        echo "
        <h1>Record added successfully</h1>
        <p><a href= '../index.php'>Back to index page</a></p>
        ";
    }
    else
    {
        echo "
        <h1>Error</h1>
        <p>{$connection->error()}</p>
        <p><a href= '../index.php'>Back to index page</a></p>
        ";
    }

 }

?>