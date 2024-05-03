// Función para cargar y mostrar los registros del archivo JSON
function mostrarRegistros() {
    fetch('data.json')
        .then(response => response.json())
        .then(data => {
            const outputDiv = document.getElementById('output');
            outputDiv.innerHTML = ''; // Limpiar el contenido existente

            // Mostrar cada registro en el contenedor de salida con botones de editar y eliminar
            data.forEach((registro, index) => {
                outputDiv.innerHTML += `
                    <div>
                        <strong>Nombre:</strong> ${registro.nombre}, <strong>Edad:</strong> ${registro.edad}
                        <button onclick="editarRegistro(${index})">Editar</button>
                        <button onclick="eliminarRegistro(${index})">Eliminar</button>
                    </div>
                `;
            });
        })
        .catch(error => console.error('Error al cargar los registros:', error));
}

// Función para agregar un registro
function agregarRegistro(nombre, edad) {
    fetch('data.json')
        .then(response => response.json())
        .then(data => {
            // Agregar el nuevo registro a los datos existentes
            data.push({ nombre, edad });

            // Enviar los datos al servidor para guardarlos
            fetch('guardar.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(data)
            })
            .then(() => {
                // Mostrar los registros actualizados
                mostrarRegistros();
            })
            .catch(error => console.error('Error al enviar datos al servidor:', error));
        })
        .catch(error => console.error('Error al cargar los registros:', error));
}

/*
function agregarRegistro(nombre, edad) {
    // Obtener los datos existentes del archivo JSON
    fetch('data.json')
        .then(response => response.json())
        .then(data => {
            // Agregar el nuevo registro a los datos existentes
            data.push({ nombre, edad });

            // Enviar los datos al servidor para guardarlos
            fetch('data.json', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(data)
            })
            .then(() => {
                // Mostrar los registros actualizados
                mostrarRegistros();
            })
            .catch(error => console.error('Error al agregar registro:', error));
        })
        .catch(error => console.error('Error al cargar los registros:', error));
} */



// Función para editar un registro
function editarRegistro(index) {
    const nuevoNombre = prompt('Ingrese el nuevo nombre:');
    const nuevaEdad = prompt('Ingrese la nueva edad:');

    if (nuevoNombre && nuevaEdad) {
        // Obtener los datos existentes del archivo JSON
        fetch('data.json')
            .then(response => response.json())
            .then(data => {
                // Editar el nombre y la edad del registro seleccionado
                data[index].nombre = nuevoNombre;
                data[index].edad = nuevaEdad;

                // Sobrescribir el archivo JSON con los datos actualizados
                return fetch('data.json', {
                    method: 'PUT',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify(data)
                });
            })
            .then(() => {
                // Mostrar los registros actualizados
                mostrarRegistros();
            })
            .catch(error => console.error('Error al editar registro:', error));
    }
}

// Función para eliminar un registro
function eliminarRegistro(index) {
    if (confirm('¿Estás seguro de que deseas eliminar este registro?')) {
        // Obtener los datos existentes del archivo JSON
        fetch('data.json')
            .then(response => response.json())
            .then(data => {
                // Eliminar el registro seleccionado
                data.splice(index, 1);

                // Sobrescribir el archivo JSON con los datos actualizados
                return fetch('data.json', {
                    method: 'PUT',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify(data)
                });
            })
            .then(() => {
                // Mostrar los registros actualizados
                mostrarRegistros();
            })
            .catch(error => console.error('Error al eliminar registro:', error));
    }
}

// Agregar evento submit al formulario
document.getElementById('agregarForm').addEventListener('submit', function (event) {
    event.preventDefault(); // Evitar el comportamiento por defecto del formulario

    // Obtener valores del formulario
    const nombre = document.getElementById('nombre').value;
    const edad = document.getElementById('edad').value;

    // Llamar a la función para agregar el registro
    agregarRegistro(nombre, edad);

    // Limpiar los campos del formulario después de agregar el registro
    this.reset();
});

// Cargar y mostrar los registros al cargar la página
document.addEventListener('DOMContentLoaded', mostrarRegistros);
