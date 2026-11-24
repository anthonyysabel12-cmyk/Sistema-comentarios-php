document.addEventListener('DOMContentLoaded', function () {
    const formulario = document.getElementById('formComentario');
    const nombre = document.getElementById('nombre');
    const comentario = document.getElementById('comentario');

    function validarCampo(campo) {
        const vacio = campo.value.trim() === '';
        campo.classList.toggle('is-invalid', vacio);
        campo.classList.toggle('is-valid', !vacio);
        return !vacio;
    }

    formulario.addEventListener('submit', function (evento) {
        const nombreValido = validarCampo(nombre);
        const comentarioValido = validarCampo(comentario);

        if (!nombreValido || !comentarioValido) {
            evento.preventDefault();
        }
    });

    nombre.addEventListener('input', function () {
        validarCampo(nombre);
    });

    comentario.addEventListener('input', function () {
        validarCampo(comentario);
    });
});