@extends('layout.Layout_Main')

@section('TITULO_PAGINA', 'Creacion de Destacado')
@section('PAG_GRUPO', 'inventario')
@section('content')



<style>
    .content-section {
        display: none; /* Oculta todas las secciones por defecto */
    }
    .content-section.active {
        display: block; /* Muestra solo la sección activa */
    }
</style>

<nav class="nav nav-tabs">
    <a class="nav-link nav-dest active" href="#" data-target="section1">Crear Destacado</a>
    <a class="nav-link nav-dest" href="#" data-target="section2">Añadir Contenido</a>
    <a class="nav-link nav-dest" href="#" data-target="section3">Verificación</a>
</nav>

<div id="section1" class="content-section active">
    <h2>Crear una Lista de Destacado</h2>
    <form id="formSection1">
        <div>
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Ingresa el nombre" required>
        </div>
        <div>
            <label for="usuario">Usuario:</label>
            <input type="text" id="usuario" name="usuario" class="form-control" placeholder="Ingresa tu usuario" required>
        </div>
        <div>
            <label for="fecha">Fecha:</label>
            <input type="date" id="fecha" name="fecha" class="form-control" required>
        </div>
        <div>
            <label for="descripcion">Descripción:</label>
            <textarea id="descripcion" class="form-control" name="descripcion" rows="4" placeholder="Describe el destacado"></textarea>
        </div>
        <button type="button" class="btn btn-primary" onclick="goToNextSection('section2')">Siguiente</button>
    </form>
</div>

<div id="section2" class="content-section">
    <h2>Agregar Contenido</h2>
    <form id="formSection2">
        <div id="contentInputs">
            <div class="content-input">
                <label for="contenido1">Contenido:</label>
                <select id="contenido1" name="contenido[]" class="form-select" aria-label="Seleccionar contenido">
                    <option value="" disabled selected>Selecciona un libro</option>
                    <option value="libro1">Libro 1</option>
                    <option value="libro2">Libro 2</option>
                    <option value="libro3">Libro 3</option>
                    <option value="libro4">Libro 4</option>
                </select>
            </div>
        </div>
        <button type="button" class="btn btn-secondary" onclick="addInput()">Agregar Más</button>
        <button type="button" class="btn btn-danger" onclick="removeInput()">Eliminar Último</button>
        <br><br>
        <button type="button" class="btn btn-primary" onclick="goToNextSection('section3')">Siguiente</button>
    </form>
</div>

<div id="section3" class="content-section">
    <h2>Verificación</h2>
    <form id="formSection3">
        <div>
            <p>¿Deseas terminar el proceso?</p>
        </div>
        <button type="submit" class="btn btn-success">Finalizar</button>
    </form>
</div>

<script>
    // Cambiar entre secciones
    const navLinks = document.querySelectorAll('.nav-dest');
    const sections = document.querySelectorAll('.content-section');

    navLinks.forEach(link => {
        link.addEventListener('click', (e) => {
            e.preventDefault();
            navLinks.forEach(link => link.classList.remove('active'));
            sections.forEach(section => section.classList.remove('active'));
            link.classList.add('active');
            const targetSection = document.getElementById(link.getAttribute('data-target'));
            targetSection.classList.add('active');
        });
    });

    // Ir a la siguiente sección
    function goToNextSection(nextSectionId) {
        navLinks.forEach(link => link.classList.remove('active'));
        sections.forEach(section => section.classList.remove('active'));
        document.querySelector(`a[data-target="${nextSectionId}"]`).classList.add('active');
        document.getElementById(nextSectionId).classList.add('active');
    }


    // Agregar más inputs con select
    function addInput() {
        const contentInputs = document.getElementById('contentInputs');
        const newInput = document.createElement('div');
        newInput.classList.add('content-input', 'mt-2');
        newInput.innerHTML = `
            <label for="contenido">Contenido:</label>
            <select name="contenido[]" class="form-select" aria-label="Seleccionar contenido">
                <option value="" disabled selected>Selecciona un libro</option>
                <option value="libro1">Libro 1</option>
                <option value="libro2">Libro 2</option>
                <option value="libro3">Libro 3</option>
                <option value="libro4">Libro 4</option>
            </select>
        `;
        contentInputs.appendChild(newInput);
    }

    // Eliminar el último input con select
    function removeInput() {
        const contentInputs = document.getElementById('contentInputs');
        if (contentInputs.children.length > 1) {
            contentInputs.removeChild(contentInputs.lastElementChild);
        } else {
            alert('Debe haber al menos un campo.');
        }
    }

</script>









@endsection
