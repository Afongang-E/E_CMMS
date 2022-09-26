<?php
include 'connection.php';

$connectdb = StartDatabaseConnection();
//Code start for inserting the data in the database.
if(isset($_POST['submit']))
{    
    $SN = rand(000000,999999);
     $name = $_POST['name'];
     $picture = $_POST['picture'];
     $description = $_POST['description'];
     $location = $_POST['location'];
     $manufacturer = $_POST['manufacturer'];
     $attachments = $_POST['attachments'];
     $characteristics = $_POST['characteristics'];
     $characteristics1 = $_POST['characteristics1'];
     $characteristics2 = $_POST['characteristics2'];
     $parentequipment = $_POST['parentequipment'];
     $sql = "INSERT INTO equipments (SN,name,picture,description,location,manufacturer,attachments,characteristics,parentequipment)
     VALUES ('$SN','$name','$picture','$description','$location','$manufacturer','$attachments','$characteristics','$parentequipment')";
     if (mysqli_query($connectdb, $sql)) {
        echo "New record has been inserted in the database successfully!";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($connectdb);
     }
}
else {
        echo "<br />"."Some issue.";
     } 
//Code ends for inserting the data into the database.
//close connection
CloseDatabaseConnection($connectdb);
?>