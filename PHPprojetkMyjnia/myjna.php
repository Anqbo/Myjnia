<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Myjnia samochodowa</title>
    <link rel="stylesheet" href="myjnia.css">
</head>
<body>
    <div class="baner">
        
        <h2>Myjnia "express"</h2>
    </div>


    <div class="baner2">
    
        <p>Data: <?php $data = date('Y/m/d'); echo"$data";?></p><br>
        <form method='POST' action='logowanie/logowanie.php'>
            <input type='submit' name='zaloguj' value='ZALOGUJ'>
        </form>
    </div>


    <div class="srodkowy">
        <br>
        <h2><b>Cennik naszych usług</b></h2><br><Br>
        <table class='tabelka'>
            <tr><th>Lp.</th><th>Usługa</th><th>Cena</th></tr>
            <tr><td>1</td><td>Mycie ręczne</td><td>20zł</td></tr>
            <tr><td>2</td><td>Mycie automatyczne</td><td>30zł</td></tr>
            <tr><td>3</td><td>Mycie półautomatyczne</td><td>25zł</td></tr>
            <tr><td>4</td><td>Mycie z woskowaniem</td><td>40zł</td></tr>
        </table><br><br>
        <br>
    <h3>Nasza lokalizacja: </h3>
<br><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d39975.91137418781!2d22.474734913651016!3d51.228387892306834!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47225829003ca94d%3A0xe4062748e94f3e78!2sMyjnia%20samochodowa%20automatyczna%20Circle%20K!5e0!3m2!1spl!2spl!4v1684420855519!5m2!1spl!2spl" width="600" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> 
    </div>


    <div class="prawy">
    <br>
    <?php
      include 'logowanie/kalendarz.php';
    ?>
    
    <br><br><br>

<h2>Jak zarezerwować wizyte?</h2><br>
<form>
<label>Masz już konto? => <input type='submit' name='tak' value='Klinknij tutaj'></label><br>
<br><label>Nie masz konta? => <input type='submit' name='nie' value='Klinknij tutaj'></label><br><br><br>
<?php
    if(isset($_GET['tak'])){
        echo'<p>Klinknij w przycisk ZALOGUJ w prawym górym rogu</p>';
    }
    if(isset($_GET['nie'])){
        echo'<p>Klinknij w przycisk ZALOGUJ w prawym górym rogu, a dalej kliknij "STWÓRZ KONTO"</p>';
    }
?>
</form>   
</div>


    <div class="stopka">
        <p>Stronę wyknała: Anna Bork :)</p>
    </div>
</body>
</html>