<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8" />

    <title>FinMath</title>

    <link href="styles_FinMath_General.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
    <link href="styles_FinMath_Intereses.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans&display=swap" rel="stylesheet">

    <script type="text/javascript" src="js_Intereses.js"></script>

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
                        <a  href="sistemafrances.php">Sistema Frances</a>
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

    <section>

        <button id="btnCalcular" onclick="calcularInteres()">Calcular</button>

        <div id="divArticlesSenction">

            <article id="simple">

                <p>Interes <br /> Simple</p>

                <div class="formulario">

                    <form name="interesSimple">

                        <h3>Capital</h3>

                        <input type="number" id="capital" value="">

                        <h3>Tasa</h3>

                        <input type="number" id="tasa" value="">

                        <h3>Plazo</h3>

                        <input type="number" id="plazo" value="">

                        <h3>Capital Final</h3>

                        <input type="text" id="resultado" name="resultado" value="" />

                    </form>

                </div>

            </article>

            <article id="compuesto">

                <p>Interes <br /> Compuesto</p>

                <div class="formulario">

                    <form name="interesCompuesto">

                        <h3>Capital</h3>

                        <input type="number" id="capitalCompuesto" value="">

                        <h3>Tasa</h3>

                        <input type="number" id="tasaCompuesto" value="">

                        <h3>Plazo</h3>

                        <input type="number" id="plazoCompuesto" value="">

                        <h3>Capital Final</h3>

                        <input type="text" id="resultadoCompuesto" name="resultadoCompuesto" value="" />

                    </form>

                </div>

            </article>

        </div>

    </section>

    <footer>

        <p>Contacto</p>

    </footer>

</body>

</html>
