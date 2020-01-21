<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>

    <meta charset="utf-8" />

    <title>Sistemas Frances</title>

    <link href="styles_FinMath_General.css" rel="stylesheet" />
    <link href="styles_FinMath_Amortizaciones.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans&display=swap" rel="stylesheet">

    <script src="js_amortizaciones.js"></script>

</head>

<body>

    <header>

        <h1>FinMath</h1>

    </header>

    <nav>

        <ul id="menuNavegacion">
            <li>
                <a href="index.html">Interes</a>
            </li>
            <li id="paraHover">
                <a href="amortizaciones.html">Sistemas de Amortizacion - Calculo de Cuotas</a>
                <ul id="mostrar">
                    <li>
                        <a  href="sistemafrances.html">Sistema Frances</a>
                    </li>
                    <li>
                        <a href="sistemaaleman.html">Sistema Aleman</a>
                    </li>
                    <li>
                        <a href="sistemaamericano.html">Sistema Americano</a>
                    </li>
                </ul>
            </li>
        </ul>

    </nav>

    <section id="sectionAmortizaciones">

        <article id="frances">

            <p>Amortizacion <br /> Francesa</p>

            <div class="formulario">

                <form name="sistemaFrances">

                    <h3>Capital</h3>
                    <input type="number" id="capitalSistemaFrances" value="">
                    <h3>Tasa</h3>
                    <input type="number" id="tasaSistemaFrances" value="">
                    <h3>Plazo</h3>
                    <input type="number" id="plazosiStemaFrances" value="">
                    <h3>Capital Final</h3>
                    <input type="text" id="resultadoSistemaFrances" name="resultadoSistemaFrances" value="" />

                </form>

            </div>

        </article>

    </section>

</body>

</html>