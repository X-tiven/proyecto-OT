// Obtener los nombres de los trabajadores de manera correcta
const trabajadoresNombres = [];
const checkboxesSeleccionados = document.querySelectorAll('input[name="trabajadores[]"]:checked');

checkboxesSeleccionados.forEach(checkbox => {
    // Obtener la etiqueta hermana del checkbox
    const label = checkbox.nextElementSibling;
    if (label && label.tagName === 'LABEL' && label.textContent) {
        trabajadoresNombres.push(label.textContent.trim());
    }
});