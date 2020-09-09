<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets//dist/style.css">
</head>

<body>

    <div class="container">
        <div class="row pt-4pb-2">
            <h4 class="m-0">
                Register
            </h4>
        </div>
        <form id="form" action="create.php" method="post">
            <div class="row pb-2">
                <div class="col-12">
                    <input type="text" name="name" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="row pb-2">
                <div class="col-12">
                    <input type="text" name="email" class="form-control" placeholder="Email">
                </div>
            </div>
            <div class="row pb-2">
                <div class="col-12">
                    <input type="password" name="password" class="form-control" placeholder="Password">
                </div>
            </div>
            <div class="row pb-2">
                <div class="col-12">
                    <input type="password" name="passwordconf" class="form-control" placeholder="Confirm Password">
                </div>
            </div>
            <button class="submit btn btn-primary" type="submit">Submit</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>