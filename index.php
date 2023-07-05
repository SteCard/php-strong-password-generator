<?php
    // CONTROLLO VARIABILI DEL METODO GET 
    if(isset($_GET['password-length']) && $_GET['password-length'] !== '' && $_GET['password-length'] > 0) {

        $passwordLength = $_GET['password-length'];

        // FUNZIONE PER GENERARE PASSWORD
        function randomPassword($maxLength) {

            // ELENCO CARATTERI
            $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!@#$%^&*()';

            // LUNGHEZZA ELENCO CARATTERI
            $charactersLength = strlen($characters);

            // ARRAY PASSWORD GENERATA
            $password = [];

            // CICLO FOR (DA 1 ALLA LUNGHEZZA SCELTA DALL'UTENTE)
            for ($i = 1; $i <= $maxLength; $i++) {

                // NUMERO RANDOM CHE VA DA 1 ALLA LUNGHEZZA DELL'ELENCO CARATTERI
                $n = rand(1, $charactersLength);

                $password[] = $characters[$n-1];
            }

            return implode($password);
        }

        $password = randomPassword($passwordLength);
    }
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
                <?php if(!isset($_GET['password-length']) || $_GET['password-length'] === '' || $_GET['password-length'] <= 0){ ?>
                    <!-- Form -->
                    <form action="index.php" method="GET" class="bg-white rounded-3 p-5 w-50 my-3">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <label for="password-length">Lunghezza Password:</label>
                            </div>
                            <div class="col-6">
                                <input type="number" name="password-length" id="password-length" min="1" class="py-2">
                            </div>
                            <div class="col-12 d-flex justify-content-center mt-5">
                                <!-- Button -->
                                <button type="submit" class="btn btn-primary mx-1">Invia</button>
                                <button type="reset" class="btn btn-secondary mx-1">Annulla</button>
                            </div>
                        </div>
                    </form>
                <?php } else{ ?>
                <!-- Password Content -->
                <div class="password-content text-center bg-white rounded-3 p-5 w-50">
                    <h3>
                        <?php echo $password ?>
                    </h3>
                </div>
                <?php } ?>

            </div>
        </div>
    </div>
</body>
</html>