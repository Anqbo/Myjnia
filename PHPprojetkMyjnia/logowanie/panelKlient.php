
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Myjnia samochodowa</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <div class="baner">
        
        <h2>Myjnia "express"</h2>
    </div>


    <div class="baner2">
    
        <p>Data: <?php $data = date('Y/m/d'); echo"$data";?></p><br>
        <form method='POST' action='wyloguj.php'>
            <input type='submit' name='wyloguj' value='WYLOGUJ'>
        </form>
    </div>


    <div class="srodkowy">
        <br>
        <h3><b>Umów wizytę</b></h3><br>
        <form method='POST'>
            <label>Podaj date wizyty: <input type='date' name='data'></label><br>
            <label>Wybierz numer usługi (rozpisaka usług z cenami poniżej): <input type='number' name='usluga'></label><br>
            <label>Podaj swoje nazwisko: <input type='text' name='nazwisko'></label><br>
            <br><input type='submit' name='przycisk' value='Zarezerwuj'>
            <input type='reset' value='Wyczyść'>
            <?php
                $db = mysqli_connect("localhost","root","","projekt"); 
                if(isset($_POST['przycisk'])){
                    $data = $_POST['data'];
                    $usluga = $_POST['usluga'];
                    $naz = $_POST['nazwisko'];
               
                $zapytanie = "INSERT INTO wizyty values ('', '$data', $usluga, '$naz');";
                $query = mysqli_query($db, $zapytanie); 
                echo'<br><p>Dziękujemy za zarezerwowanie wizyty :)</p>';
            }
            ?>
        </form>
        <Br><br>
        <hr><br>
        <h3><b>Cennik naszych usług</b></h3><br><Br>
        <table>
        <tr><th>Lp.</th><th>Usługa</th><th>Cena</th></tr>
            <tr><td>1</td><td>Mycie ręczne</td><td>20zł</td></tr>
            <tr><td>2</td><td>Mycie automatyczne</td><td>30zł</td></tr>
            <tr><td>3</td><td>Mycie półautomatyczne</td><td>25zł</td></tr>
            <tr><td>4</td><td>Mycie z woskowaniem</td><td>40zł</td></tr>

        </table><br><Br>
<hr><br>
        <h3><b>Twoje ostatnie wizyty</b></h3><br>
        <form method='POST'>
            <label>Podaj nazwisko: <input type='text' name='naz'></label><br>
            <br><input type='submit' name='przycisk1' value='Szukaj'>
            <input type='reset' value='Wyczyść'><br>
        <?php
                $db = mysqli_connect("localhost","root","","projekt"); 
                if(isset($_POST['przycisk1'])){
                    $na = $_POST['naz'];
                $zapytanie1 = "SELECT * FROM wizyty WHERE nazwisko='$na';";
                $query1 = mysqli_query($db, $zapytanie1);
                echo '<br><table><tr><th>ID wizyty</th><th>Data</th><th>Numer usługi</th></tr>';
                while($row = mysqli_fetch_array($query1)){
                    echo'<tr><td>'.$row[0].'</td><td>'.$row[1].'</td><td>'.$row[2].'</td></tr>';
                }
                }
                echo'</table>';
            ?>
            </form>
        <Br><br>
        <hr><br>

        <h3><b>Odwołanie wizyt</b></h3><br>
        <form method='POST'>
            <label>Podaj date wizyty którą chcesz odwołać: <input type='date' name='data1'></label><br>
            <label>Podaj swoje nazwisko: <input type='text' name='nazwisko1'></label><br>
            <br><input type='submit' name='przycisk2' value='Odowłaj'>
            <input type='reset' value='Wyczyść'><br>
            <?php
                $db = mysqli_connect("localhost","root","","projekt"); 
                if(isset($_POST['przycisk2'])){
                    $data1 = $_POST['data1'];
                    $naz1 = $_POST['nazwisko1'];
               
                $zapytanie2 = "DELETE FROM wizyty WHERE data='$data1' and Nazwisko='$naz1';";
                $query1 = mysqli_query($db, $zapytanie2); 
                echo'<br><p>Wizyta usunięta, zapraszamy w innym teminie :)</p>';
            }
            ?>
        </form>
        <Br><br>
        <Br>
    </div>



    <div class="prawy">
    <br>
    <?php
        include 'kalendarz.php';
    ?>
    </div>


    <div class="stopka">
        <p>Stronę wyknała: Anna Bork :)</p>
    </div>
</body>
</html>