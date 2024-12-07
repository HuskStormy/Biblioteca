<!--
    para el <li> en class, deberia de ir:
        "nav-item"  //para saber que es de la barra lateral
        "menu-open" //para hacer que se abra, sin el no se abrira

    para el <ul> es para abrir un arbol.
-->


<!--########################################################################################################################################-->
<!--########################################################################################################################################-->

<!-- CABECERA-->
<li class="nav-header">Seguridad</li>




<!-- BODY-->
<li class="nav-item">
    <!-- BUTTON principal -->
    <a href="#" class="nav-link nav_link_bar">
        <i class="bi bi-people-fill nav-icon"></i>
        <p>
            Usuarios
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <!-- /.BUTTON principal -->

    <!-- dentro del button -->
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{url('table_usuarios')}}" class="nav-link nav_link_tree">
                <i class="bi bi-table"></i> <p>tabla de Usuarios</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{url('table_usuariosPendietes')}}" class="nav-link nav_link_tree">
                <i class="bi bi-table"></i> <p>tabla de ususario pendientes</p>
            </a>
        </li>
    </ul>
</li>


<!-- BODY-->
<li class="nav-item">
    <!-- BUTTON principal -->
    <a href="#" class="nav-link nav_link_bar">
        <i class="bi bi-shield-fill-check nav-icon"></i>
        <p>
            Seguridad
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <!-- /.BUTTON principal -->

    <!-- dentro del button -->
    <ul class="nav nav-treeview">

        <li class="nav-item">
            <a href="{{url('tabla_permisos')}}" class="nav-link nav_link_tree">
                <i class="far fa-circle nav-icon"></i> <p>Permisos</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{url('table_parametros')}}" class="nav-link nav_link_tree">
                <i class="far fa-circle nav-icon"></i> <p>Parámetros</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{url('tabla_rol')}}" class="nav-link nav_link_tree">
                <i class="far fa-circle nav-icon"></i> <p>Rol</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{url('table_bitacora')}}" class="nav-link nav_link_tree">
                <i class="far fa-circle nav-icon"></i> <p>Bitácora</p>
            </a>
        </li>
    </ul>
</li>



<!-- CABECERA-->
<li class="nav-header">Inventario</li>

<!-- BODY-->
<li class="nav-item">
    <!-- BUTTON principal -->
    <a href="#" class="nav-link nav_link_bar">
        <i class="bi bi-journal-bookmark-fill nav-icon"></i>
        <p>
            Material
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <!-- /.BUTTON principal -->

    <!-- dentro del button -->
    <ul class="nav nav-treeview">

        <li class="nav-item">
            <a href="{{url('table_material')}}" class="nav-link nav_link_tree">
                <i class="far fa-circle nav-icon"></i> <p>Tabla de Materiales</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{url('table_audiovideo')}}" class="nav-link nav_link_tree">
                <i class="far fa-circle nav-icon"></i> <p>Tabla de Audiovideo</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{url('form_agregarMateria')}}" class="nav-link nav_link_tree">
                <i class="far fa-circle nav-icon"></i> <p>Agregar Material</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{url('form_agregarAudiovideo')}}" class="nav-link nav_link_tree">
                <i class="far fa-circle nav-icon"></i> <p>Agregar Audiovideo</p>
            </a>
        </li>
    </ul>
</li>


<!-- BODY-->
<li class="nav-item">
    <!-- BUTTON principal -->
    <a href="#" class="nav-link nav_link_bar">
        <i class="bi bi-journal-album nav-icon"></i>
        <p>
            Sistema de Ordenamiento
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <!-- /.BUTTON principal -->

    <!-- dentro del button -->
    <ul class="nav nav-treeview">

        <li class="nav-item">
            <a href="{{url('table_dewey')}}" class="nav-link nav_link_tree">
                <i class="far fa-circle nav-icon"></i> <p>Dewey</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{url('table_autores')}}" class="nav-link nav_link_tree">
                <i class="far fa-circle nav-icon"></i> <p>Autores</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{url('table_cursos')}}" class="nav-link nav_link_tree">
                <i class="far fa-circle nav-icon"></i> <p>Cursos</p>
            </a>
        </li>
    </ul>
</li>

<!-- BODY-->
<li class="nav-item">
    <!-- BUTTON principal -->
    <a href="#" class="nav-link nav_link_bar">
        <i class="bi bi-bookmark-check-fill nav-icon"></i>
        <p>
            Destacado
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <!-- /.BUTTON principal -->

    <!-- dentro del button -->
    <ul class="nav nav-treeview">

        <li class="nav-item">
            <a href="{{url('table_destacado')}}" class="nav-link nav_link_tree">
                <i class="far fa-circle nav-icon"></i> <p>Table de Destacado</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{url('form_agregarDestacado')}}" class="nav-link nav_link_tree">
                <i class="far fa-circle nav-icon"></i> <p>Agregar Destacado</p>
            </a>
        </li>
    </ul>
</li>

<!-- BODY-->
<li class="nav-item">
    <!-- BUTTON principal -->
    <a href="#" class="nav-link nav_link_bar">
        <i class="bi bi-file-earmark-easel-fill nav-icon"></i>
        <p>
            Repositorio
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <!-- /.BUTTON principal -->

    <!-- dentro del button -->
    <ul class="nav nav-treeview">

        <li class="nav-item">
            <a href="{{url('table_repocitorioMaterial')}}" class="nav-link nav_link_tree">
                <i class="far fa-circle nav-icon"></i> <p>Repositorio de Material</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{url('table_repocitorioAudiovideo')}}" class="nav-link nav_link_tree">
                <i class="far fa-circle nav-icon"></i> <p>Repositorio de Audiovideo</p>
            </a>
        </li>
    </ul>
</li>

<!--########################################################################################################################################-->
<!--########################################################################################################################################-->

<!-- CABECERA-->
<li class="nav-header">Gestiones y Procesos</li>

<!-- BODY-->
<li class="nav-item">
    <!-- BUTTON principal -->
    <a href="#" class="nav-link nav_link_bar">
        <i class="bi bi-clipboard2-check-fill nav-icon"></i>
        <p>
            Solvencias
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <!-- /.BUTTON principal -->

    <!-- dentro del button -->
    <ul class="nav nav-treeview">

        <li class="nav-item">
            <a href="{{url('table_solvencia')}}" class="nav-link nav_link_tree">
                <i class="far fa-circle nav-icon"></i> <p>Tabla de Solvencias</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{url('proc_agregarSolvecia')}}" class="nav-link nav_link_tree">
                <i class="far fa-circle nav-icon"></i> <p>Generar Solvencias</p>
            </a>
        </li>
    </ul>
</li>

<!-- BODY-->
<li class="nav-item">
    <!-- BUTTON principal -->
    <a href="#" class="nav-link nav_link_bar">
        <i class="fa fa-user nav-icon"></i>
        <p>
            Préstamos
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <!-- /.BUTTON principal -->

    <!-- dentro del button -->
    <ul class="nav nav-treeview">

        <li class="nav-item">
            <a href="{{url('table_prestamo')}}" class="nav-link nav_link_tree">
                <i class="far fa-circle nav-icon"></i> <p>Tabla de Préstamos</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{url('proc_solicitarPrestamo')}}" class="nav-link nav_link_tree">
                <i class="far fa-circle nav-icon"></i> <p>Solicitud de Préstamos</p>
            </a>
        </li>
    </ul>
</li>


<!-- BODY-->
<li class="nav-item">
    <!-- BUTTON principal -->
    <a href="#" class="nav-link nav_link_bar">
        <i class="fa fa-user nav-icon"></i>
        <p>
            Ficha de Ingreso
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <!-- /.BUTTON principal -->

    <!-- dentro del button -->
    <ul class="nav nav-treeview">

        <li class="nav-item">
            <a href="{{url('table_ficha')}}" class="nav-link nav_link_tree">
                <i class="far fa-circle nav-icon"></i> <p>Tabla de Fichas</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{url('proc_agregarFicha')}}" class="nav-link nav_link_tree">
                <i class="far fa-circle nav-icon"></i> <p>Agregar Ficha</p>
            </a>
        </li>
    </ul>
</li>


<!-- BODY-->
<li class="nav-item">
    <!-- BUTTON principal -->
    <a href="#" class="nav-link nav_link_bar">
        <i class="fa fa-user nav-icon"></i>
        <p>
            Centro Regional
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <!-- /.BUTTON principal -->

    <!-- dentro del button -->
    <ul class="nav nav-treeview">

        <li class="nav-item">
            <a href="{{url('table_CentroRegional')}}" class="nav-link nav_link_tree">
                <i class="far fa-circle nav-icon"></i> <p>Centros Regionales</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{url('proc_agregarCentroRegional')}}" class="nav-link nav_link_tree">
                <i class="far fa-circle nav-icon"></i> <p>Agregar Centro Regional</p>
            </a>
        </li>
    </ul>
</li>
