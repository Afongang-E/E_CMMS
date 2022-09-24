

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Multilogin System</title>
	<link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.css"></head>
<body>

   
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
   	 <h5 class="navbar-brand text-white">C_aid_System</h5>

   	 <div class="mr-auto"></div>

   	 <ul class="d-flex flex-row">
   	 	<?php 
               
               if ($_SESSION['technician']==='technician') {?>
               	   <li class="nav-item">
   	 		            <a href="#" class="nav-link"><?php echo $_SESSION['technician']; ?></a>
   	 	            </li>
   	 	            <li class="nav-item">
   	 		            <a href="logout.php" class="nav-link">Logout</a>
   	 	            </li>
         <?php }else if($_SESSION['administrator']==='administrator'){ ?>
                    <li class="nav-item">
   	 		            <a href="index.php" class="nav-link"><?php echo $_SESSION['administrator']; ?></a>
   	 	            </li>
   	 	            <li class="nav-item">
   	 		            <a href="logout.php" class="nav-link">Logout</a>
   	 	            </li>
         <?php }else{ ?>
                    <li class="nav-item">
   	 		            <a href="index.php" class="nav-link text-white"> <h5>Login</h5> </a>
   	 	            </li>
   	 	            <li class="nav-item">
   	 	            	<a href="registration.php" class="nav-link text-white "> <h5>Register</h5></a>
   	            	</li>
              <?php }
   	 	 ?>
   	 </ul>
   </nav>

</body>
</html>