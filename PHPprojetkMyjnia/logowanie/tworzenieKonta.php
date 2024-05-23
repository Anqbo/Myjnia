<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Rejestracja</title>
    <link rel="stylesheet" href="logowanie.css">
</head>
<body>
    <div class = formularz>
        <h2>Utworzono konto</h2>
        <form method="POST"><br>
            <input type ="submit" name = "log" value ="Przejdz do logowania" ><br> <br>
            
        </form>
    </div>
    
    <?php
    if(isset($_POST['log'])){
        echo 'Za chwile zostaniesz przekierowany';
        sleep(1);
        header("location: logowanie.php");
    }
    ?>
</body>
</html>