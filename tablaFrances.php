<?php

if(isset($_POST['btncalcularsis']) && $_POST['plazoTotalSitemaFrances'] && $_POST['plazoSitemaFrances'] && $_POST['capitalSistemaFrances'] && $_POST['tasaEfectivaSistemaFrances']){

echo "<table>";
echo "<tr id='encabezados'>
<td>

</td>
<td>
CUOTA
</td>
</tr>";

$count =  $_POST['plazoTotalSitemaFrances'] / $_POST['plazoSitemaFrances'];

$cuota = $_POST['tasaEfectivaSistemaFrances'] +1;
$cuota = $cuota ** $count;
$cuota = $cuota * $_POST['tasaEfectivaSistemaFrances'];

$operadorParaCuota = $_POST['tasaEfectivaSistemaFrances'] + 1;
$operadorParaCuota = $operadorParaCuota ** $count;
$operadorParaCuota = $operadorParaCuota -1;

$cuota = $cuota / $operadorParaCuota;
$cuota = $cuota * $_POST["capitalSistemaFrances"];

      for ($i=1; $i <= $count; $i++) {

        echo "<tr><td>" . $i . "</td><td>" . $cuota . "</td></tr>";

      }

echo "</table>";

}else{
  echo "No hay datos ingresados.";
}

 ?>
