let dataRows = 1; // Inicializa con una fila de datos

function addRow() {
    const tableBody = document.querySelector("#dynamic-table-body");
    const newRow = document.createElement("tr");
    newRow.innerHTML = `
      <th scope="row">${dataRows}</th>
      <td><input type="number" name="Cantidad[]" class="form-control"></td>
      <td>
        <select class="form-control" name="Unidad[]" >
        <option selected>SELECCIONAR...</option>
          <option value="PZAS">PZAS</option>
          <option value="CAJON">CAJON</option>
          <option value="PAQUETE">PAQUETE</option>  
        </select>
      </td>
      <td><input type="text" name="Descripcion[]" class="form-control" oninput="this.value = this.value.toUpperCase()"></td>
     
      <td><button class="btn btn-danger" onclick="removeRow(this)">Eliminar</button></td>
    `;
    tableBody.appendChild(newRow);
    dataRows++;
}

function removeRow(button) {
    const row = button.parentNode.parentNode;
    row.parentNode.removeChild(row);
}

function saveDataToServer(data) {
    const jsonData = JSON.stringify(data);

    const xhr = new XMLHttpRequest();
    xhr.open("POST", "/guardar-datos", true); // Ruta de Laravel para guardar datos
    xhr.setRequestHeader("Content-Type", "application/json;charset=UTF-8");

    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            console.log("Datos guardados exitosamente en el servidor.");
        }
    };

    xhr.send(jsonData);
}

function saveData() {
    const tableRows = document.querySelectorAll("#dynamic-table-body tr");

    const data = {
        _token: document
            .querySelector('meta[name="csrf-token"]')
            .getAttribute("content"), // Agregar el token CSRF
        Fecha: document.getElementById("fecha").value,
        Area: document.querySelector("input[name='Area']").value,
        Requesicion_No: document.querySelector("input[name='Requesicion_No']")
            .value,
        Justificacion: document.querySelector("input[name='Justificacion']").value,
        Id_Empresa: document.querySelector("select[name='Empresa']").value,
        dynamicData: [],
    };

    tableRows.forEach((row) => {
        const cells = row.querySelectorAll("td input, td select");
        const rowData = Array.from(cells).map((cell) => {
            if (cell.tagName === "SELECT") {
                return cell.options[cell.selectedIndex].text;
            }
            return cell.value;
        });
        data.dynamicData.push(rowData);
    });

    // Envía los datos al servidor
    saveDataToServer(data);
}

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

/* JS DE LA FECHA */

// JS PARA OBTENER EL AÑO Y VALORES AUTOINCREMENTABLES INICIANDO DESDE 1000
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
