<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>

    <meta charset="utf-8" />

    <title>Sistemas Frances</title>

    <link href="styles_FinMath_General.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
    <link href="styles_FinMath_TablaAmortizaciones.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
    <link href="styles_FinMath_Amortizaciones.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans&display=swap?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />

    <script src="js_amortizaciones.js"></script>
    <script src="tablaFrances.js"></script>


</head>

<body>

    <header>

        <h1>FinMath</h1>

    </header>

    <nav>

        <ul id="menuNavegacion">
            <li>
                <a href="index.php">Interes</a>
            </li>
            <li id="subMenuAmortizaciones">
                <a href="amortizaciones.php">Sistemas de Amortizacion - Calculo de Cuotas</a>
                <ul id="SubMenuDesplegable">
                    <li>
                        <a  href="sistemaFrances.php">Sistema Frances</a>
                    </li>
                    <li>
                        <a href="sistemaaleman.php">Sistema Aleman</a>
                    </li>
                    <li>
                        <a href="sistemaamericano.php">Sistema Americano</a>
                    </li>
                </ul>
            </li>
        </ul>

    </nav>

    <section id="sectionAmortizaciones">

        <article id="frances">

            <p>Amortizacion <br /> Francesa</p>

            <div class="formulario">

                <form name="sistemaFrances" method="post">

                    <h3>Capital</h3>
                    <input type="floatval" id="capitalSistemaFrances" name="capitalSistemaFrances" value="">
                    <h3>Tasa Efectiva</h3>
                    <input type="floatval" id="tasaEfectivaSistemaFrances" name="tasaEfectivaSistemaFrances" value="">
                    <h3>Frecuencia de Pago (en dias)</h3>
                    <input type="number" id="plazoSitemaFrances" name="plazoSitemaFrances" value="">
                    <h3>Plazo Todal de Pago (en dias)</h3>
                    <input type="number" id="plazoTotalSitemaFrances" name="plazoTotalSitemaFrances" value="">
                    <button id="btncalcularsis" type="submit" name="btncalcularsis" >CALCULAR</button>

                </form>

            </div>

        </article>

    </section>

    <div id="divTablaParaCalculoDeSistema">

      <?php
        include("tablaFrances.php");
       ?>

   </div>

</body>

</html>
