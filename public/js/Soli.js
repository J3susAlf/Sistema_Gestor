/*-------------------- JS DEL LA FECHA --------------------*/
setInterval(() => {
    let fecha = new Date();
    let dia = fecha.getDate();
    let mes = fecha.getMonth() + 1; // Los meses comienzan en 0, por lo que sumamos 1
    let ano = fecha.getFullYear();

    // Formateamos la fecha como "DD/MM/AAAA"
    let fechaFormateada = `${dia}/${mes}/${ano}`;

    document.getElementById("fecha").textContent = fechaFormateada;
}, 1000);



// -------------------------- JS PARA OBTENER EL AÑO Y VALORES AUTOINCREMENTABLES INICIANDO DESDE 1000
const year = new Date().getFullYear();

const min = 1000;
const max = 4000;

// Encuentra el último número de Requesicion en la página
const lastRequesicion = document.querySelectorAll(".Requesicion").length;

// Calcula el valor de Requesicion
const requesicionValue = "SDRM " + (min + lastRequesicion) + "/" + year;

// Verifica si el valor calculado supera el valor máximo (1000)
if (min + lastRequesicion > max) {
    alert("Se alcanzó el límite máximo de Requesicion (4000).");
} else {
    // Establece el valor calculado en el input
    document.getElementById("Requesicion").value = requesicionValue;
}