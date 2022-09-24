<?php
  include 'connection.php';
  $message .= " ";
  if (isset($_POST['login'])) {
  	   $uname = $_POST['uname'];
  	   $pass = $_POST['pass'];
       $query = "SELECT crole FROM users WHERE uname='$uname' AND pass='$pass'";
    	$response = mysqli_query($connection,$query);

         if ($response) {
			//fetch the resulting rows in an array
			$resulting_rows = mysqli_fetch_all($response, MYSQLI_ASSOC);
	
			if ($resulting_rows) {
				$role = $resulting_rows[0]['crole'];
				//$message .=  print_r ($role);
				if ($role === "technician") {
              		$message .= "technician";
         	  		$_SESSION['technician'] = $uname;
         	  	header("Location: technician.php");
         	  	
         	  }else if($role === "administrator"){
              		 $message .= "admin";
                	 $_SESSION['administrator'] = $uname;
                header("Location: administrator.php");
         	  }
			}
			else {
				$message .= "Failed to login verify username and password then try again";
			}

			//free the memory
			mysqli_free_result($response);
			//close connection
			mysqli_close($connection);
         }else{
             $message .= "Server not responding ";  
         }
  }
  ?>