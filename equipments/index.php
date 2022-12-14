<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/bootstrap-5.0.2-dist/css/bootstrap.css">
    <title>Assets</title>
</head>

<body>
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Asset</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Spare parts</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Maintenance</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
            <button type="button" class="nav-link" data-bs-toggle="modal" data-bs-target="#AssetModal">
                Add Asset
            </button>
        </li>
    </ul>

    <!-- Modal -->
    <div class="modal fade" id="AssetModal" tabindex="-1" aria-labelledby="AssetModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="AssetModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <!-- bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb -->
                <div class="modal-body">

                    <div class="mb-3">
                        <label for="Assetname" class="form-label">Asset name</label>
                        <input type="text" class="form-control" id="Assetname" aria-describedby="Asset name">
                    </div>

                </div>
                <!-- bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <script src="bootstrap-5.0.2-dist/css/bootstrap/js/popper.min.js"></script>
    <script src="bootstrap-5.0.2-dist/css/bootstrap/css/bootstrap.min.js"></script>
    <script src="bootstrap-5.0.2-dist/css/bootstrap/css/bootstrap.js"></script>
</body>

</html>