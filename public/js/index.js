


/* ---------------------- FORM DINAMICO ---------------------- */
document.addEventListener('DOMContentLoaded', function() {
    const dynamicFields = document.getElementById('dynamic-fields');
    const addFieldButton = document.getElementById('add-field');

    addFieldButton.addEventListener('click', function() {
      // Clonar la primera fila de campos
      const firstField = dynamicFields.querySelector('.field');
      const clonedField = firstField.cloneNode(true);

      // Borrar los valores de los campos clonados
      const inputs = clonedField.querySelectorAll('input');
      inputs.forEach(function(input) {
        input.value = '';
      });

      // Obtener el número actual de filas y aumentarlo
      const rowCount = dynamicFields.querySelectorAll('.field').length + 1;
      const tdNumber = clonedField.querySelector('td:first-child');
      tdNumber.textContent = rowCount;

      // Agregar el botón de eliminación a la fila clonada
      const deleteButton = document.createElement('a');
      deleteButton.href = '#';
      deleteButton.className = 'btn btn-small btn-danger';
      deleteButton.innerHTML = '<i class="fa-solid fa-trash"></i>';
      deleteButton.addEventListener('click', function(e) {
        e.preventDefault();
        dynamicFields.removeChild(clonedField);
      });
      clonedField.querySelector('td:last-child').appendChild(deleteButton);

      dynamicFields.appendChild(clonedField);
    });
  });

