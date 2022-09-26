<?php include('connection.php') ;?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/bootstrap-5.0.2-dist/css/bootstrap.css">
    <title>users</title>
</head>

<body>
    <div class="container my-3">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">User ID</th>
                    <th scope="col">First name</th>
                    <th scope="col">Surnam name</th>
                    <th scope="col">User name</th>
                    <th scope="col">Role</th>
                    <th scope="col">password</th>
                    <th scope="col">Operations</th>

                </tr>
            </thead>
            <tbody>
                <?php
        $sql ="SELECT * FROM `users` WHERE 1";
        $result = mysqli_query($connection, $sql);
        if($result){
            while($row = mysqli_fetch_assoc($result)){
                $id = $row['id'];
                $fname = $row['fname'];
                $sname = $row['sname'];
                $uname = $row['uname'];
                $role = $row['role'];
                $pass = $row['pass'];
                echo '<tr>
                <th scope = "row">'.$id.'</th>
                <td>'.$fname.'</td>
                <td>'.$sname.'</td>
                <td>'.$uname.'</td>
                <td>'.$role.'</td>
                <td>'.$pass.'</td>
                <td>
                    <button class ="btn btn-primary "><a href="update.php?updateid='.$id.'" class = "text-white"> Edit</a>
                    </button>
                    <button class = "btn btn-danger"><a href="delete.php?deleteid='.$id.'" class = "text-white">Delete</a></button>
                </td>
              </tr> ';

            }
        }
    ?>


            </tbody>
        </table>
    </div>
    </div>


    <script src="bootstrap-5.0.2-dist/js/bootstrap.js"></script>
</body>

</html>