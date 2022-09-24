<?php
  include 'connection.php';
  $message .= " ";
  if (isset($_POST['login'])) {
  	   $uname = $_POST['uname'];
  	   $pass = $_POST['pass'];
       $query = "SELECT role FROM users WHERE uname='$uname' AND pass='$pass'";
    	$response = mysqli_query($connection,$query);

         if ($response) {
			//fetch the resulting rows in an array
			$resulting_rows = mysqli_fetch_all($response, MYSQLI_ASSOC);
	
			if ($resulting_rows) {
				$role = $resulting_rows[0]['role'];
				$uname = $resulting_rows[0]['uname'];
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
             $message .= "Server not responding: "; 
         }
  }
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.css">
</head>
<body>
<div class="container">
    <div class="col-md-12">
	    <div class="row d-flex justify-content-center">
			<div class="col-md-6 shadow-sm" style="margin-top:100px;">
				<form action ="" method="post" >
				    <h3 class="text-center my+3">Login</h3>
					<div class="text-center text-danger"><?php echo $message; ?></div>
					<label>Username</label>
					<input type="text" name="uname" class="form-control my-2" required = 'true' 
							placeholder="Enter Username" >
						
					<label>Password</label>
					<input type="password" name="pass" class="form-control my-2" placeholder="Enter password"
							required = 'true' autocomplete="off">

					<input type="submit" name="login" class="btn btn-primary" value="Login">

				</form>
				
			</div>
			</div>
		</div>
    </div>
</body>
</html>
