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
            header("Location: index.php");
	 
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
    <div class="modal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Modal body text goes here.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <script src="bootstrap-5.0.2-dist/css/bootstrap.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
</body>

</html>