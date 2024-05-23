<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Logowanie</title>
    <link rel="stylesheet" href="logowanie.css">
</head>
<body>
    <div class = formularz>
        <h2>Logowanie</h2>
        <form method="POST"><br>
            <label>Login:<br><input type ="text" name="login" placeholder="Podaj login" style="height: 23px"></label><br>
            <label>Hasło:<br><input type ="password" name="pass" placeholder="Podaj hasło" style="height: 23px"></label><br>
            <input type ="submit" name = "send" value ="Zaloguj" ><br>
        </form>
        <form action=dodawanieKonta.php>
            <input type=submit value="Stwórz konto">
        </form>
        <form action='../myjna.php'>
            <input type=submit value="Powórt do strony głownej">
        </form>
    </div>
    <?php
    if(isset($_POST['send'])){
        $db = mysqli_connect("localhost","root","","projekt");
        $login = mysqli_real_escape_string($db, $_POST['login']);
        $pass = mysqli_real_escape_string($db, sha1($_POST['pass']));
        $sql = "select * from auth where login='$login' and pass='$pass'";
        $query = mysqli_query($db,$sql);
        if(mysqli_num_rows($query)>0){
            if($login == 'admin'){
                $_SESSION['login'] = $login;
                header("Location: panelPracownik.php");
                mysqli_close($db);
            }elseif ($login !== 'admin') {
                $_SESSION['login'] = $login;
                header("Location: panelKlient.php");
                mysqli_close($db);
            }
        }else{
            header("Location: logowanie.php"); 
        }
    }
    
    ?>
    
    
</body>
</html>