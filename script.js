function mostrarRegistros() {
    fetch('data.json')
        .then(response => response.json())
        .then(data => {
            const outputDiv = document.getElementById('output');
            outputDiv.innerHTML = ''; // Limpiar el contenido existente

            data.forEach((registro, index) => {
                const registroDiv = document.createElement('div');
                registroDiv.textContent = `Nombre: ${registro.nombre}, Edad: ${registro.edad}`;
                
                // Botón para eliminar registro
                const deleteBtn = document.createElement('button');
                deleteBtn.textContent = 'Eliminar';
                deleteBtn.onclick = () => eliminarRegistro(index);
                registroDiv.appendChild(deleteBtn);

                // Botón para editar registro
                const editBtn = document.createElement('button');
                editBtn.textContent = 'Editar';
                editBtn.onclick = () => editarRegistro(index, registro);
                registroDiv.appendChild(editBtn);

                outputDiv.appendChild(registroDiv);
            });
        })
        .catch(error => console.error('Error al obtener los registros:', error));
}

function agregarRegistro(nombre, edad) {
    fetch('data.json')
        .then(response => response.json())
        .then(data => {
            data.push({nombre, edad});
            return fetch('data.json', {
                method: 'PUT',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(data)
            });
        })
        .then(() => mostrarRegistros())
        .catch(error => console.error('Error al agregar registro:', error));
}

function editarRegistro(index, registro) {
    const nuevoNombre = prompt('Ingrese el nuevo nombre:', registro.nombre);
    const nuevaEdad = prompt('Ingrese la nueva edad:', registro.edad);

    if (nuevoNombre !== null && nuevaEdad !== null) {
        fetch('data.json')
            .then(response => response.json())
            .then(data => {
                data[index] = {nombre: nuevoNombre, edad: nuevaEdad};
                return fetch('data.json', {
                    method: 'PUT',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify(data)
                });
            })
            .then(() => mostrarRegistros())
            .catch(error => console.error('Error al editar registro:', error));
    }
}

function eliminarRegistro(index) {
    fetch('data.json')
        .then(response => response.json())
        .then(data => {
            data.splice(index, 1);
            return fetch('data.json', {
                method: 'PUT',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(data)
            });
        })
        .then(() => mostrarRegistros())
        .catch(error => console.error('Error al eliminar registro:', error));
}

// Ejemplo de agregar un registro cuando se carga la página
document.addEventListener('DOMContentLoaded', () => {
    agregarRegistro('Ejemplo', 30);
});
