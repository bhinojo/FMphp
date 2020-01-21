<?php

if(isset($_POST['btncalcularsis'])){

$count =  $_POST['plazoTotalSitemaFrances'] / $_POST['plazoSitemaFrances'];


      for ($i=1; $i <= $count; $i++) {

    echo "<tr><td>Cuota " . $i . "</td><td>" . $_POST['capitalSistemaFrances'] . "</td></tr>";
      }

}

 ?>
