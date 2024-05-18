$(document).ready(function() {
    let registros = [];

    $("#formAgregar").submit(function(event) {
        event.preventDefault();
        const nombre = $("#nombreAgregar").val();
        const apellidos = $("#apellidosAgregar").val();
        const dependencia = $("#dependenciaAgregar").val();
        agregarRegistro(nombre, apellidos, dependencia);
        $("#nombreAgregar, #apellidosAgregar").val("").focus();
    });

    function agregarRegistro(nombre, apellidos, dependencia) {
        const id = Date.now().toString();
        const nuevoRegistro = { id, nombre, apellidos, dependencia };
        registros.push(nuevoRegistro);
        actualizarTabla();
        mostrarDialogo("Registro agregado correctamente.");
    }

    function actualizarTabla() {
        $("#cuerpoTabla").empty();
        registros.forEach(registro => {
            const fila = `
                <tr id="${registro.id}">
                    <td>${registro.nombre}</td>
                    <td>${registro.apellidos}</td>
                    <td>${registro.dependencia}</td>
                    <td>
                        <button type="button" class="btn btn-primary btn-sm" onclick="editarRegistro('${registro.id}')">Editar</button>
                        <button type="button" class="btn btn-danger btn-sm" onclick="eliminarRegistro('${registro.id}')">Eliminar</button>
                        <button type="button" class="btn btn-info btn-sm" onclick="verRegistro('${registro.id}')">Ver Registro</button>
                    </td>
                </tr>`;
            $("#cuerpoTabla").append(fila);
        });
    }

    window.editarRegistro = function(id) {
        const registro = registros.find(r => r.id === id);
        if (registro) {
            const nuevoNombre = prompt("Nuevo nombre:", registro.nombre);
            const nuevoApellido = prompt("Nuevo apellido:", registro.apellidos);
            const nuevaDependencia = prompt("Nueva dependencia:", registro.dependencia);
            if (nuevoNombre !== null && nuevoApellido !== null && nuevaDependencia !== null) {
                registro.nombre = nuevoNombre;
                registro.apellidos = nuevoApellido;
                registro.dependencia = nuevaDependencia;
                actualizarTabla();
                mostrarDialogo("Registro editado correctamente.");
            } else {
                mostrarErrorDialogo("No se realizó la edición del registro.");
            }
        } else {
            mostrarErrorDialogo("No se encontró el registro a editar.");
        }
    };
    
    window.verRegistro = function(id) {
        const registro = registros.find(r => r.id === id);
        if (registro) {
            const mensaje = `
                <p><strong>Nombre:</strong> ${registro.nombre}</p>
                <p><strong>Apellidos:</strong> ${registro.apellidos}</p>
                <p><strong>Dependencia:</strong> ${registro.dependencia}</p>
            `;
            mostrarDialogo(mensaje);
        }
    };

    window.eliminarRegistro = function(id) {
        const confirmacion = confirm("¿Estás seguro de eliminar este registro?");
        if (confirmacion) {
            const indice = registros.findIndex(r => r.id === id);
            if (indice !== -1) {
                registros.splice(indice, 1);
                actualizarTabla();
                mostrarDialogo("Registro eliminado correctamente.");
            } else {
                mostrarErrorDialogo("No se encontró el registro a eliminar.");
            }
        }
    };

    function mostrarDialogo(mensaje) {
        $("#dialog").html(`<p>${mensaje}</p>`);
        $("#dialog").dialog({
            modal: true,
            buttons: {
                Ok: function() {
                    $(this).dialog("close");
                }
            }
        });
    }

    function mostrarErrorDialogo(mensaje) {
        $("#dialog").html(`<p style="color: red;">${mensaje}</p>`);
        $("#dialog").dialog({
            modal: true,
            buttons: {
                Ok: function() {
                    $(this).dialog("close");
                }
            }
        });
    }
});
