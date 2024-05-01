
let pantallaActualId = '';

function mostrarPantalla(event, id) {
    
    if (pantallaActualId) {
        const pantallaActual = document.getElementById(pantallaActualId);
        pantallaActual.style.display = 'none';
        if (pantallaActualId === 'screen0') {
            const imagenScreen0 = pantallaActual.querySelector('img');
            imagenScreen0.style.display = 'flex';
        }
    }

    const pantallaMostrar = document.getElementById(id);
    pantallaMostrar.style.display = 'flex';

    pantallaActualId = id;
    event.preventDefault();
}