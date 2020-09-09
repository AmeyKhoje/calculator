<?php
session_start();
if(!isset($_SESSION['loggedin'])) {
    header("location:login.html");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets//dist/style.css">
    <title>Document</title>
</head>

<body>
    <form action="logout.php">
        <button class="btn btn-danger logout">Logout</button>
    </form>
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8 m-auto">
                <div class="calc_container pt-4">
                    <div class="calc-input">
                        <input type="text" class="form-control result" name="" id="result">
                        <input type="text" value="" class="final-res mt-2">
                    </div>
                    <div class="calc-btns d-flex justify-content-between pt-4">
                        <button class="btn-primary btn-op" value="1">1</button>
                        <button class="btn-primary btn-op" value="2">2</button>
                        <button class="btn-primary btn-op" value="3">3</button>
                        
                    </div>
                    <div class="calc-btns d-flex justify-content-between pt-4">
                        <button class="btn-primary btn-op" value="4">4</button>
                        <button class="btn-primary btn-op" value="5">5</button>
                        <button class="btn-primary btn-op" value="6">6</button>
                        
                    </div>
                    <div class="calc-btns d-flex justify-content-between pt-4">
                        <button class="btn-primary btn-op" value="7">7</button>
                        <button class="btn-primary btn-op" value="8">8</button>
                        <button class="btn-primary btn-op" value="9">9</button>
                        
                        
                        <!-- <button class="btn-primary btn-op" value="*">x</button> -->
                        <!-- <button class="btn-primary btn-op" value="/">/</button> -->
                    </div>
                    <div class="calc-btns d-flex justify-content-center pt-4">
                        <button class="btn-primary btn-op" value="0">0</button>
                    </div>
                    <div class="calc-btns d-flex justify-content-between pt-4">
                        
                        <button class="btn-primary btn-op" value="+">+</button>
                        <button class="btn-primary btn-op" value="-">-</button>
                        <button class="btn-primary btn-op" value="*">x</button>
                        <button class="btn-primary btn-op" value="/">/</button>
                    </div>

                    <div class="calc-btns d-flex justify-content-center pt-4">
                        <button class="btn btn-success btn-calc">Calculate</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        $('.btn-op').on('click', function(e) {
            // alert(e.target.value)
            $('.result').val($('.result').val() + (e.target.value))

        })

        var res;
        $('.btn-calc').on('click', function() {
            res = eval($('.result').val())
            $('.final-res').val(res)
            $('.result').val('0')
        })
    </script>
</body>

</html>