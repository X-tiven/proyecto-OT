const label = checkbox.nextElementSibling;
if (label && label.tagName === 'LABEL' && label.textContent.trim()) {
    trabajadoresNombres.push(label.textContent.trim());
}