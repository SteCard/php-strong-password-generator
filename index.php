<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Php-password-generator</title>
</head>
<body style="background-color: #ababc2">
    <div class="container my-3">
        <div class="row">
            
            <div class="col-12 text-center">
                <h1 class="fw-bold">Strong Password Generator</h1>
                <h2 class="text-success fw-bold">Genera una password sicura</h2>
            </div>

            <div class="col-12 d-flex justify-content-center">
                <!-- Form -->
                <form action="index.php" method="GET" class="bg-white rounded-2 p-4 w-50 my-3">
                    <div class="row align-items-center">
                        <div class="col-6">
                            <label for="password-length">Lunghezza Password:</label>
                        </div>
                        <div class="col-6">
                            <input type="text" name="password-length" id="password-length" class="py-2">
                        </div>
                        <div class="col-12 d-flex justify-content-center mt-5">
                            <button type="submit" class="btn btn-primary mx-1">Invia</button>
                            <button type="reset" class="btn btn-secondary mx-1">Annulla</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</body>
</html>