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
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
        Launch static backdrop modal
    </button>

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">New user</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="fname" class="form-label">First name</label>
                        <input type="text" class="form-control" id="fname" aria-describedby="fname" placeholder="Enter your first name">
                    </div>

                    <div class="mb-3">
                        <label for="sname" class="form-label">Surname</label>
                        <input type="text" class="form-control" id="sname" aria-describedby="sname" placeholder="Enter your surname">
                    </div>

                    <div class="mb-3">
                        <label for="uname" class="form-label">Username</label>
                        <input type="email" class="form-control" id="uname" aria-describedby="uname" placeholder="Enter your username">
                    </div>

                    <select class="form-select" aria-label="Default select example" id="role">
                        <option selected>Select user role</option>
                        <option value="Technician">Technician</option>
                        <option value="Administrator">Administrator</option>
                    </select>

                    <div class="mb-3">
                        <label for="pass" class="form-label">Password</label>
                        <input type="password" class="form-control" placeholder="Enter your password" id="pass">
                    </div>

                    <div class="mb-3">
                        <label for="cpass" class="form-label">Confirm password</label>
                        <input type="password" class="form-control" placeholder="Renter your password" id="cpass">
                    </div>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="submit" onclick="adduser()"> Submit</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    
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

    <script>
        function adduser(){
            var fnameAdd =$('#fname').val()
            var snameAdd =$('#sname').val()
            var unameAdd =$('#uname').val()
            var roleAdd =$('#role').val()
            var passAdd =$('#pass').val()
            var cpassAdd =$('#cpass').val()
            $.ajax({
                url:"newuserinsert.php",
                type: 'post',
                data:{
                    fnamesend:fnameAdd,
                    snamesend:snameAdd,
                    unamesend:unameAdd,
                    rolesend:roleAdd,
                    passsend:passAdd,
                    cpasssend:cpassAdd
                },
                success:function(data, status){
                    //function to display data
                    console.log(status);


                }
            })
        }
    </script>
</body>

</html>