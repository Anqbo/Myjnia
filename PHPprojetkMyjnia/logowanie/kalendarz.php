<?PHP

function printCalendar()
{
  $year = date("Y");
  $monthNum = date("n");
  $daysofmonth = date("t");
  $dayofweek = date("w");
  $dayofmonth = date("j");
  $firstdayofmonth = date("w", mktime(0,0,0,$monthNum, 1, $year));

  if($dayofweek == 0) $dayofweek = 7;
  if($firstdayofmonth == 0) $firstdayofmonth = 7;

  switch($monthNum){
    case 1 : $monthName = "Styczeń";break;
    case 2 : $monthName = "Luty";break;
    case 3 : $monthName = "Marzec";break;
    case 4 : $monthName = "Kwiecień";break;
    case 5 : $monthName = "Maj";break;
    case 6 : $monthName = "Czerwiec";break;
    case 7 : $monthName = "Lipiec";break;
    case 8 : $monthName = "Sierpień";break;
    case 9 : $monthName = "Wrzesień";break;
    case 10 : $monthName = "Październik";break;
    case 11 : $monthName = "Listopad";break;
    case 12 : $monthName = "Grudzień";break;
  }

  echo"<br>";
  echo("<TABLE border = 1 align = 'center'><TR>");
  echo("<TD bgcolor='#8A2BE2' align='center' colspan='7''>");
  echo($monthName." ".$year);
  echo("</TD></TR><TR>");
  ?>
  <TR>
  <TD align="center" bgcolor="#9932CC">Pn</TD>
  <TD align="center" bgcolor="#9932CC">Wt</TD>
  <TD align="center" bgcolor="#9932CC">Sr</TD>
  <TD align="center" bgcolor="#9932CC">Cz</TD>
  <TD align="center" bgcolor="#9932CC">Pt</TD>
  <TD align="center" bgcolor="#9932CC">Sb</TD>
  <TD align="center" bgcolor="#9932CC">Nd</TD>
  </TR>
  <?php
  $j = $daysofmonth + $firstdayofmonth - 1;

  for($i = 0; $i < $j; $i++){
    if($i < $firstdayofmonth - 1){
      echo("<TD></TD>");
      continue;
    }
    if(($i % 7) == 0){
      echo("</TR><TR>");
    }
    if(($i - $firstdayofmonth + 2) == $dayofmonth){
      $color = "#9932CC";
    }
    else{
      $color = "#9370DB";
    }
    echo("<TD bgcolor='$color' align='center'>");
    echo($i - $firstdayofmonth + 2);
    echo("</TD>");
  }
  echo("</TR></TABLE>");
}
printCalendar();
?>