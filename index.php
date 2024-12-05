<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <title>CiTIM Grupo XB</title>
    <link rel="stylesheet" href="css/problemaStem.css"/>
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
    <script src="js/calculaStem.js"></script>
</head>
<body>
<section class="wrapper">
    <header>
        <h1 class="logo">Uso de la Ciencia, Tecnología, Ingeniería y Matemáticas para resolver problemas</h1>
    </header>
    <section id="contenedor">
        <section class="problema">
            <h2>Problema: Calcular el semieje mayor del cometa Halley</h2>
            <p>Descripción:</p>
            <p>Las Leyes de Kepler se aplican no sólo a los planetas sino también a otros cuerpos celestes.
                Calcula el semieje mayor de la órbita del cometa Halley sabiendo que su período orbital es de 76 años.</p>
        </section>
        <section class="esquemaProblema">
            <h2>Esquema</h2>
            <center>
                <img class="imgProblema" src="images/cometa.jpg" alt="Cometa Halley">
            </center>
        </section>
        <section class="formulas">
            <h2>Fórmulas</h2>
            <p>a^3 = T^2, donde:</p>
            <ul>
                <li>a: Semieje mayor en Unidades Astronómicas (UA)</li>
                <li>T: Período orbital en años</li>
            </ul>
            <p>Fórmula despejada para \(a\):</p>
            <p>a = sqrt[3](T^2)</p>
        </section>
        <section class="datos">
            <h2>Datos:</h2>
            <ul>
                <li>T = 76 años (período orbital del cometa Halley)</li>
                <li>1 UA = 150 millones de km</li>
            </ul>
        </section>
        <section class="calculos">
            <h2>Solución</h2>
            <button onclick="calcula();">Presiona para calcular</button>
        </section>
        <section class="resultado">
            <h2>Resultado:</h2>
            <div id="resultadoA"></div>
        </section>
    </section>
    <footer class="pie">
        Creative Commons versión 3.0 SciSoft 2024
    </footer>
</section>
</body>
</html>
