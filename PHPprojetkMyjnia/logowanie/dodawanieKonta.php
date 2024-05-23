<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Rejestracja</title>
    <link rel="stylesheet" href="logowanie.css">
</head>
<body>
    <div class = formularz>
        <h2>Rejestracja</h2>
        <form method="POST"><br>
            <label>Login:<br><input type ="text" name="login" placeholder="Twój login" style="height: 23px"></label><br>
            <label>Hasło:<br><input type ="password" name="pass" placeholder="Twoje hasło" style="height: 23px"></label><br>
            <label>Powtórz hasło:<br><input type ="password" name="pass1" placeholder="Powtórz hasło" style="height: 23px"></label><br>
            <input type ="submit" name = "send" value ="Stwórz Konto" ><br> <br>
        </form>
    </div>
    <?php
    if(isset($_POST['send'])){
        $login = $_POST['login'];
        $pass = $_POST['pass'];
        $pass1 = $_POST['pass1'];
        if($pass == $pass1){
            $db = mysqli_connect("localhost","root","","projekt");
            $login = mysqli_real_escape_string($db, $_POST['login']);
            $pass = mysqli_real_escape_string($db, sha1($_POST['pass']));
            $czas = date("Y-m-d H:i:s");
            $sql = "INSERT INTO auth (id,login,pass,czas) values (NULL,'$login','$pass','$czas')";
            $query = mysqli_query($db,$sql);
            
        header("Location: tworzenieKonta.php");

        
    }}
   
    ?>