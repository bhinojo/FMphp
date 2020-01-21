<?php

if(isset($_POST['btncalcularsis']) && $_POST['plazoTotalSitemaFrances'] && $_POST['plazoSitemaFrances'] && $_POST['capitalSistemaFrances']){

echo "<table>";

$count =  $_POST['plazoTotalSitemaFrances'] / $_POST['plazoSitemaFrances'];

      for ($i=1; $i <= $count; $i++) {

        echo "<tr><td>Cuota " . $i . "</td><td>" . $_POST['capitalSistemaFrances'] . "</td></tr>";

      }

echo "</table>";

}else{
  echo "No hay datos ingresados.";
}

 ?>
