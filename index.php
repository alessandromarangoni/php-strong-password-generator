<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <title>"strong" p generator</title>
</head>
<?php
include "./function.php";
?>
<body>
    <div class="container bg-secondary mt-5 pb-5 rounded">
        <div class="row">
            <div class="col text-center text-white">
                <h1>STRONG PASSWORD GENERATOR</h1>
                <h3>Genera una password sicura </h3>
                <div class="bg-primary text-white rounded mb-2 pt-2">
                    <?php if ($lunghezza) { 
                        echo generateRandomString($length = $lunghezza);
                    } else{
                        echo 'NESSUN CAMPO COMPILATO';
                    }?>
                <div class="pt-3">
                    <form action="index.php" method="get" class="form-control">
                        <input  class="form-control" type="number" name="lunghezza" placeholder="inserisci la lunghezza desiderata" min="3" max="25">
                        <button type="submit" class="btn btn-primary mt-3">genera</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>