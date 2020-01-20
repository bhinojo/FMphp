<?php

function suma($a,$b){
  return $a + $b;
}

if(isset($_POST['ok'])){

      for ($i=1; $i <= $_POST['num']; $i++) {
        $a=floatval($_POST['num2']); $b=$i;
    echo "<tr><td>" . $i . "</td>" . "<td>" . suma($a,$b) . "</td></tr>";
      }

}
?>
