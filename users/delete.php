<?php 
    include('connection.php') ;
    
    if(isset($_GET['deleteid'])){
        $id = $_GET['deleteid'];
        
        $sql = "DELETE FROM `users` WHERE id = $id ";
        $result = mysqli_query($connection, $sql);
        if ($result){
            //echo "Delete successfull";
           header("location: index.php");
        }
        else{
            die("Connection failed: " . $connection->connect_error);
        }
    }

?>
