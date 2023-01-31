<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PSW</title>
</head>

<body>



    <main>
        <form action="index.php" method="get">
            <label for="passwordLength">Inserisci la lunghezza della password:</label>
            <input type="number" id="passwordLength" name="passwordLength">
            <input type="submit" value="Genera password">
        </form>



        <?php
        function generatePassword($length)
        {
            $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+-=';
            $password = '';
            for ($i = 0; $i < $length; $i++) {
                $password .= $characters[rand(0, strlen($characters) - 1)];
            }
            return $password;
        }


        ?>

        <?php
        if (isset($_GET['passwordLength'])) {
            $passwordLength = $_GET['passwordLength'];
            $password = generatePassword($passwordLength);
            echo "La tua password è: " . $password;
        }

        ?>





    </main>

</body>

</html>