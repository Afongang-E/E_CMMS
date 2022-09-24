<?php
  include 'connection.php';
    $message .= " ";
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
     

       $sql = "INSERT INTO `users` ( `fname`, `sname`, `uname`, `role`, `pass`) 
            VALUES ('$fname','$sname','$uname','$role','$pass')";
    	$response = mysqli_query($connection,$sql);

         if ($response) {
			//echo "Information successfully submited";
            //header("Location: /administrator.php");
            echo "<script >  alert('New user successfully added !!'); </script>";
	 
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
    <title>user creat</title>
    <link rel="stylesheet" href="/bootstrap-5.0.2-dist/css/bootstrap.css">
</head>

<body>


    <!-- Button trigger modal -->
    <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
        Launch static backdrop modal
    </button>

     //Modal 
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">New user</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="row d-flex justify-content-center">
                        <div class="text-center text-danger">
                            </ /?php echo $output; ?>
                        </div>
                        <div class="mb-2">
                            <label>First name</label>
                            <input type="text" class="form-control" required='true' placeholder="Enter your name"
                                name="fname">
                        </div>
                        <div class="mb-2">
                            <label>Surname name</label>
                            <input type="text" class="form-control" required='true' placeholder="Enter your name"
                                name="sname">
                        </div>
                        <div class="mb-2">
                            <label>User name</label>
                            <input type="text" class="form-control" required='true' placeholder="Enter your user name"
                                name="uname">
                        </div>

                        <div class="mb-2">
                            <label class="form-label">Select role</label>
                            <select name="role" class="form-select">
                                <option value="technician">Technician</option>
                                <option value="administrator">Administrator</option>
                            </select>
                        </div>

                        <div class="mb-2">
                            <label>Password</label>
                            <input type="password" class="form-control" required='true' name="pass"
                                placeholder="Enter you password">
                        </div>
                        <div class="mb-2">
                            <label>Confirm password</label>
                            <input type="password" class="form-control" required='true' name="cpass"
                                placeholder="Enter you password">
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" name="submit">Submit</button>
                </div>
            </div>
        </div>
    </div> -->



<div class="container">
        <div class="col">
            <div class="row d-flex justify-content-center">
                <div class="col-md-8 shadow-sm" >
                    <form method="post" action="#">
                      
                        <div class="text-center text-danger"><?php echo $output; ?></div>
                        <div class="mb-2">
                            <label>First name</label>
                            <input type="text" class="form-control" required='true' placeholder="Enter your name"
                                name="fname">
                        </div>
                        <div class="mb-2">
                            <label>Surname name</label>
                            <input type="text" class="form-control" required='true' placeholder="Enter your name"
                                name="sname">
                        </div>
                        <div class="mb-2">
                            <label>User name</label>
                            <input type="text" class="form-control" required='true' placeholder="Enter your user name"
                                name="uname">
                        </div>

                        <div class="mb-2">
                            <label class="form-label">Select role</label>
                            <select name="role" class="form-select">
                                <option value="technician">Technician</option>
                                <option value="administrator">Administrator</option>
                            </select>
                        </div>

                        <div class="mb-2">
                            <label>Password</label>
                            <input type="password" class="form-control" required='true' name="pass"
                                placeholder="Enter you password">
                        </div>
                        <div class="mb-2">
                            <label>Confirm password</label>
                            <input type="password" class="form-control" required='true' name="cpass"
                                placeholder="Enter you password">
                        </div>
                        <button type="submit" class="btn btn-primary" name="submit">submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div> 


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>