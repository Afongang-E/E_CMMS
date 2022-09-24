<?php
  include 'connection.php';
    $message .= " ";
    $id = $_GET['updateid'];
    $sql = "SELECT * FROM `users` WHERE id = $id";
    $result = mysqli_query($connection, $sql);
    $row = mysqli_fetch_assoc($result);
    $fname = $row['fname'];
    $sname = $row['sname'];
    $uname = $row['uname'];
    $role = $row['role'];
    $pass = $row['pass'];

  if (isset($_POST['submit'])) {
  	   $fname = $_POST['fname'];
       $pass = $_POST['pass'];
       $uname = $_POST['uname'];
       $role = $_POST['role'];
       $sname = $_POST['sname'];
       $cpass = $_POST['cpass'];

    if (empty($fname)) {
		    $error['error'] = "Firstname is Empty";
	    }else if(empty($sname)){
		    $error['error'] = "Surname is empty";
	    }else if(empty($uname)){
		    $error['error'] = "username is empty";
	    }else if(empty($pass)){
		    $error['error'] = "Enter Password";
	    }else if(empty($cpass)){
		    $error['error'] = "Confirm Password";
	    }else if($pass != $cpass){
		    $error['error'] = "Both passwords do not match";
	}



	if (isset($error['error'])) {
		$output .= $error['error'];
	}else{
		$output .= "";
	}


	if (count($error) < 1) {
     

       $sql = "UPDATE `users` SET `id`=$id,`fname`='$fname',`sname`='$sname',`uname`='$uname',`role`='$role',`pass`='$pass' 
                WHERE `id`=$id;";
    	$response = mysqli_query($connection,$sql);

         if ($response) {
			//echo "Updated successfully";
            header("Location: display.php");
	 
         }else{
            die("Connection failed: " . $connection->connect_error);
            // $message .= "Server not responding ";  
         }
  }
  else{}
}else{
    $output .= "";

}
  ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update workers</title>
    <link rel="stylesheet" href="/bootstrap-5.0.2-dist/css/bootstrap.css">
</head>

<body>
    <div class="container">
        <div class="col-md-12">
            <div class="row d-flex justify-content-center">
                <div class="col-md-6 shadow-sm" style="margin-top:100px;">
                    <form method="post" action="#">
                        <div class="text-center text-danger"><?php echo $output; ?></div>
                        <div class="mb-3">
                            <label>First name</label>
                            <input type="text" class="form-control" required='true' placeholder="Enter your name"
                                name="fname" value=<?php echo $fname;?>>
                        </div>
                        <div class="mb-3">
                            <label>Surname name</label>
                            <input type="text" class="form-control" required='true' placeholder="Enter your name"
                                name="sname" value=<?php echo $sname;?>>
                        </div>
                        <div class="mb-3">
                            <label>User name</label>
                            <input type="text" class="form-control" required='true' placeholder="Enter your user name"
                                name="uname" value=<?php echo $uname;?>>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Select role</label>
                            <select name="role" class="form-select">
                                <option value=<?php echo $role;?>><?php echo $role;?></option>
                                <option value="technician">Technician</option>
                                <option value="administrator">Administrator</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label>Password</label>
                            <input type="password" class="form-control" required='true' name="pass"
                                placeholder="Enter you password" value=<?php echo $pass;?>>
                        </div>
                        <div class="mb-3">
                            <label>Confirm password</label>
                            <input type="password" class="form-control" required='true' name="cpass"
                                placeholder="Enter you password" value=<?php echo $pass;?>>
                        </div>
                        <button type="submit" class="btn btn-primary" name="submit">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>