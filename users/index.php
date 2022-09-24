<?php include('connection.php')?>
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
    <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <button class="nav-link active" id="nav-users-tab" data-bs-toggle="tab" data-bs-target="#nav-users"
                type="button" role="tab" aria-controls="nav-users" aria-selected="true">Users</button>
            <button class="nav-link" id="nav-administrators-tab" data-bs-toggle="tab"
                data-bs-target="#nav-administrators" type="button" role="tab" aria-controls="nav-administrators"
                aria-selected="false">Administrators</button>
            <button class="nav-link" id="nav-technicians-tab" data-bs-toggle="tab" data-bs-target="#nav-technicians"
                type="button" role="tab" aria-controls="nav-technicians" aria-selected="false">Technicians</button>
            <button class="nav-link" id="nav-addusers-tab" data-bs-toggle="tab" data-bs-target="#nav-addusers"
                type="button" role="tab" aria-controls="nav-addusers" aria-selected="false">Add Users</button>
        </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-users" role="tabpanel" aria-labelledby="nav-users-tab">
            <!-- ...users -->
            <div class="ratio ratio-16x9">
                <iframe src="/users/users.php" title="Details" allowfullscreen></iframe>
            </div>


        </div>

    </div>

    <div class="tab-pane fade" id="nav-administrators" role="tabpanel" aria-labelledby="nav-administrators-tab">
        ...admin
    </div>

    <div class="tab-pane fade" id="nav-technicians" role="tabpanel" aria-labelledby="nav-technicians-tab">
        ...tech
    </div>

    <div class="tab-pane fade" id="nav-addusers" role="tabpanel" aria-labelledby="nav-addusers-tab">
        <!-- ...add  -->
        <div class="ratio ratio-16x9">
            <iframe src="/users/create.php" title="Details" allowfullscreen></iframe>
        </div>


    </div>
    </div>
    </div>
    <!-- <script src="bootstrap-5.0.2-dist/css/bootstrap/js/popper.min.js" ></script>
    <script src="bootstrap-5.0.2-dist/css/bootstrap/css/bootstrap.min.js"></script> -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>