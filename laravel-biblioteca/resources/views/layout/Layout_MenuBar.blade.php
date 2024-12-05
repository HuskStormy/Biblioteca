<!--
    para el <li> en class, deberia de ir:
        "nav-item"  //para saber que es de la barra lateral
        "menu-open" //para hacer que se abra, sin el no se abrira

    para el <ul> es para abrir un arbol.
-->


<!--########################################################################################################################################-->
<!--########################################################################################################################################-->

<!-- CABECERA-->
<li class="nav-header nav-label">Seguridad</li>


<!-- BODY-->
<li class="nav-item">
    <!-- BUTTON principal -->
    <a href="#" class="nav-link">
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
            <a href="{{url('table_usuarios')}}" class="nav-link nav-tree">
                <i class="far fa-circle"></i> <p>Gestion de Usuarios</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{url('table_usuariosPendietes')}}" class="nav-link nav-tree">
                <i class="far fa-circle"></i> <p>Gestion de ususario pendientes</p>
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
            <a href="{{url('tabla_permisos')}}" class="nav-link nav-tree">
                <i class="far fa-circle nav-icon"></i> <p>permisos</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{url('table_parametros')}}" class="nav-link nav-tree">
                <i class="far fa-circle nav-icon"></i> <p>parametros</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{url('tabla_rol')}}" class="nav-link nav-tree">
                <i class="far fa-circle nav-icon"></i> <p>rol</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{url('table_bitacora')}}" class="nav-link nav-tree">
                <i class="far fa-circle nav-icon"></i> <p>Bitacora</p>
            </a>
        </li>
    </ul>
</li>



<!-- CABECERA-->
<li class="nav-header nav-label">inventario</li>

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
            <a href="{{url('table_material')}}" class="nav-link nav-tree">
                <i class="far fa-circle nav-icon"></i> <p>tabla de materiales</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{url('table_audiovideo')}}" class="nav-link nav-tree">
                <i class="far fa-circle nav-icon"></i> <p>tabla de audiovideo</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{url('form_agregarMateria')}}" class="nav-link nav-tree">
                <i class="far fa-circle nav-icon"></i> <p>agregar material</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{url('form_agregarAudiovideo')}}" class="nav-link nav-tree">
                <i class="far fa-circle nav-icon"></i> <p>agregar audiovideo</p>
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
            Sistema de ordenamiento
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <!-- /.BUTTON principal -->

    <!-- dentro del button -->
    <ul class="nav nav-treeview">

        <li class="nav-item">
            <a href="{{url('table_dewey')}}" class="nav-link nav-tree">
                <i class="far fa-circle nav-icon"></i> <p>dewey</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{url('table_autores')}}" class="nav-link nav-tree">
                <i class="far fa-circle nav-icon"></i> <p>autores</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{url('table_cursos')}}" class="nav-link nav-tree">
                <i class="far fa-circle nav-icon"></i> <p>cursos</p>
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
            destacado
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <!-- /.BUTTON principal -->

    <!-- dentro del button -->
    <ul class="nav nav-treeview">

        <li class="nav-item">
            <a href="{{url('table_destacado')}}" class="nav-link nav-tree">
                <i class="far fa-circle nav-icon"></i> <p>table de destacado</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{url('form_agregarDestacado')}}" class="nav-link nav-tree">
                <i class="far fa-circle nav-icon"></i> <p>agregar destacado</p>
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
            repocitorio
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <!-- /.BUTTON principal -->

    <!-- dentro del button -->
    <ul class="nav nav-treeview">

        <li class="nav-item">
            <a href="{{url('table_repocitorioMaterial')}}" class="nav-link nav-tree">
                <i class="far fa-circle nav-icon"></i> <p>repocitorio de material</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{url('table_repocitorioAudiovideo')}}" class="nav-link nav-tree">
                <i class="far fa-circle nav-icon"></i> <p>repocitorio de audiovideo</p>
            </a>
        </li>
    </ul>
</li>

<!--########################################################################################################################################-->
<!--########################################################################################################################################-->

<!-- CABECERA-->
<li class="nav-header nav-label">Gestiones y procesos</li>

<!-- BODY-->
<li class="nav-item">
    <!-- BUTTON principal -->
    <a href="#" class="nav-link nav_link_bar">
        <i class="bi bi-clipboard2-check-fill nav-icon"></i>
        <p>
            solvencias
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <!-- /.BUTTON principal -->

    <!-- dentro del button -->
    <ul class="nav nav-treeview">

        <li class="nav-item">
            <a href="{{url('table_solvencia')}}" class="nav-link nav-tree">
                <i class="far fa-circle nav-icon"></i> <p>tabla de solvencias</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{url('proc_agregarSolvecia')}}" class="nav-link nav-tree">
                <i class="far fa-circle nav-icon"></i> <p>generar solvencia</p>
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
            prestamos
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <!-- /.BUTTON principal -->

    <!-- dentro del button -->
    <ul class="nav nav-treeview">

        <li class="nav-item">
            <a href="{{url('table_prestamo')}}" class="nav-link nav-tree">
                <i class="far fa-circle nav-icon"></i> <p>tabla de prestamos</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{url('proc_solicitarPrestamo')}}" class="nav-link nav-tree">
                <i class="far fa-circle nav-icon"></i> <p>solicitud de prestamos</p>
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
            ficha de ingreso
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <!-- /.BUTTON principal -->

    <!-- dentro del button -->
    <ul class="nav nav-treeview">

        <li class="nav-item">
            <a href="{{url('table_ficha')}}" class="nav-link nav-tree">
                <i class="far fa-circle nav-icon"></i> <p>tabla de fichas</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{url('proc_agregarFicha')}}" class="nav-link nav-tree">
                <i class="far fa-circle nav-icon"></i> <p>agregar ficha</p>
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
            <a href="{{url('table_CentroRegional')}}" class="nav-link nav-tree">
                <i class="far fa-circle nav-icon"></i> <p>tabla de centros regionales</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{url('proc_agregarCentroRegional')}}" class="nav-link nav-tree">
                <i class="far fa-circle nav-icon"></i> <p>agregar centro regional</p>
            </a>
        </li>
    </ul>
</li>
<!--########################################################################################################################################-->
<!--########################################################################################################################################-->

<!-- CABECERA-->
<li class="nav-header nav-label">Mantenimiento</li>

<!-- BODY-->
<li class="nav-item">
    <!-- BUTTON principal -->
    <a href="backup" class="nav-link nav_link_bar">
        <i class="bi bi-clipboard2-check-fill nav-icon"></i>
        <p>
            Backup
        </p>
    </a>
    <a href="restore" class="nav-link nav_link_bar">
        <i class="bi bi-clipboard2-check-fill nav-icon"></i>
        <p>
            Restore
        </p>
    </a>
</li>
