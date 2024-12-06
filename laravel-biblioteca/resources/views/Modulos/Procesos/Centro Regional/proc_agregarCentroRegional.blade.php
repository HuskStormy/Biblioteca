@extends('layout.Layout_Main')

@section('TITULO_PAGINA', 'proceso - ejemplo')
@section('PAG_GRUPO', 'Modulos')
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
    <a class="nav-link active" href="#" data-target="section1">Pantalla 1</a>
    <a class="nav-link" href="#" data-target="section2">Pantalla 2</a>
    <a class="nav-link" href="#" data-target="section3">Pantalla 3</a>
</nav>

<div id="section1" class="content-section active">
    <h1>Pantalla 1</h1>
    <p>Contenido de la primera pantalla.</p>




</div>
<div id="section2" class="content-section">
    <h1>Pantalla 2</h1>
    <p>Contenido de la segunda pantalla.</p>

    
</div>
<div id="section3" class="content-section">
    <h1>Pantalla 3</h1>
    <p>Contenido de la tercera pantalla.</p>
</div>

<script>
    // Obtener todos los enlaces y secciones
    const navLinks = document.querySelectorAll('.nav-link');
    const sections = document.querySelectorAll('.content-section');

    // Agregar evento de clic a los enlaces
    navLinks.forEach(link => {
        link.addEventListener('click', (e) => {
            e.preventDefault(); // Evitar comportamiento predeterminado del enlace

            // Quitar clase activa de todos los enlaces y secciones
            navLinks.forEach(link => link.classList.remove('active'));
            sections.forEach(section => section.classList.remove('active'));

            // Añadir clase activa al enlace clickeado y su sección correspondiente
            link.classList.add('active');
            const targetSection = document.getElementById(link.getAttribute('data-target'));
            targetSection.classList.add('active');
        });
    });
</script>

@endsection

