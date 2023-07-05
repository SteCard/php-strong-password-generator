<?php
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
?>