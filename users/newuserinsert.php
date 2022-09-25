<?php
include 'connection.php';
extract($_POST);
if (isset($_POST['fnamesend']) && isset($_POST['snamesend']) && isset($_POST['unamesend']) && isset($_POST['rolesend']) && isset($_POST['passsend']) && isset($_POST['cpasssend'])){

     
     $sql = "INSERT INTO `users` ( `fname`, `sname`, `uname`, `role`, `pass`) 
            VALUES ('$fnamesend','$snamesend','$unamesend','$rolesend','$passsend')";
        $response = mysqli_query($connection, $sql);

        if ($response) {
            //echo "Information successfully submited";
            header("Location: index.php");
        } else {
            die("Connection failed: " . $connection->connect_error);
            // $message .= "Server not responding ";  
        }

}



// $output = " ";
// $message = " ";
// $message .= " ";

// if (isset($_POST['submit'])) {
//     $fname = $_POST['fname'];
//     $pass = $_POST['pass'];
//     $uname = $_POST['uname'];
//     $role = $_POST['role'];
//     $sname = $_POST['sname'];
//     $cpass = $_POST['cpass'];

//     if (empty($fname)) {
//         $error['error'] = "Firstname is Empty";
//     } else if (empty($sname)) {
//         $error['error'] = "Surname is empty";
//     } else if (empty($uname)) {
//         $error['error'] = "username is empty";
//     } else if (empty($pass)) {
//         $error['error'] = "Enter Password";
//     } else if (empty($cpass)) {
//         $error['error'] = "Confirm Password";
//     } else if ($pass != $cpass) {
//         $error['error'] = "Both passwords do not match";
//     }



//     if (isset($error['error'])) {
//         $output .= $error['error'];
//     } else {
//         $output .= "";
//     }


//     if (count($error) < 1) {


//         $sql = "INSERT INTO `users` ( `fname`, `sname`, `uname`, `role`, `pass`) 
//             VALUES ('$fname','$sname','$uname','$role','$pass')";
//         $response = mysqli_query($connection, $sql);

//         if ($response) {
//             //echo "Information successfully submited";
//             header("Location: index.php");
//         } else {
//             die("Connection failed: " . $connection->connect_error);
//             // $message .= "Server not responding ";  
//         }
//     } else {
//     }
// } else {
//     $output .= "";
// }
?>