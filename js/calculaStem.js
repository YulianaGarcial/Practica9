// Función para calcular el semieje mayor del cometa Halley
function calcularSemiejeMayor(periodo) {
    return Math.pow(periodo * periodo, 1 / 3); // Fórmula: a = (T^2)^(1/3)
}

// Función que muestra los resultados en el HTML
function calcula() {
    const periodoHalley = 76; // Período orbital en años
    const uaKm = 150e6;       // 1 UA en kilómetros

    // Cálculo del semieje mayor
    const semiejeMayorUA = calcularSemiejeMayor(periodoHalley);
    const semiejeMayorKm = semiejeMayorUA * uaKm;

    // Actualización del resultado en el HTML
    const d = document.getElementById("resultadoA");
    d.innerHTML = `
        <p>Semieje mayor del cometa Halley:</p>
        <ul>
            <li>${semiejeMayorUA.toFixed(2)} UA</li>
            <li>${semiejeMayorKm.toLocaleString()} km</li>
        </ul>
    `;
}
