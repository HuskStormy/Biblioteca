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
                <i class="bi bi-table"></i> <p>Gestion de Usuarios</p>
            </a>
        </li>
        <li class="nav-item">

            <a href="{{url('table_usuariosPendietes')}}" class="nav-link nav-tree">
                <i class="far fa-circle"></i> <p>Gestion de ususario pendientes</p> <span class="badge badge-info ml-auto">6</span>
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
                <i class="far fa-circle nav-icon"></i> <p>Permisos</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{url('tabla_objeto')}}" class="nav-link nav-tree">
                <i class="far fa-circle nav-icon"></i> <p>Objeto</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{url('table_parametros')}}" class="nav-link nav-tree">
                <i class="far fa-circle nav-icon"></i> <p>Parametros</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{url('tabla_rol')}}" class="nav-link nav-tree">
                <i class="far fa-circle nav-icon"></i> <p>Rol</p>
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
<li class="nav-header nav-label">Inventario</li>

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
                <i class="far fa-circle nav-icon"></i> <p>Material Bibliografico</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{url('table_audiovideo')}}" class="nav-link nav-tree">
                <i class="far fa-circle nav-icon"></i> <p>Multimedia </p>
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
                <i class="far fa-circle nav-icon"></i> <p>Dewey</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{url('table_autores')}}" class="nav-link nav-tree">
                <i class="far fa-circle nav-icon"></i> <p>Autores</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{url('table_cursos')}}" class="nav-link nav-tree">
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
            <a href="{{url('table_destacado')}}" class="nav-link nav-tree">
                <i class="far fa-circle nav-icon"></i> <p>Reporte destacado</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{url('form_agregarDestacado')}}" class="nav-link nav-tree">
                <i class="far fa-circle nav-icon"></i> <p>Creacion de Destacado</p>
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
            <a href="{{url('table_repocitorioMaterial')}}" class="nav-link nav-tree">
                <i class="far fa-circle nav-icon"></i> <p>Repositorio de material</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{url('table_repocitorioAudiovideo')}}" class="nav-link nav-tree">
                <i class="far fa-circle nav-icon"></i> <p>Repositorio de audiovideo</p>
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
    <a href="{{url('table_solvencia')}}" class="nav-link">
        <i class="bi bi-clipboard2-check-fill nav-icon"></i>
        <p>
            Solvencias
        </p>
    </a>
    <!-- /.BUTTON principal -->

</li>

<!-- BODY-->
<li class="nav-item">
    <!-- BUTTON principal -->
    <a href="{{url('table_prestamo')}}" class="nav-link">
        <i class="fa fa-user nav-icon"></i>
        <p>
            Prestamos
        </p>
    </a>
    <!-- /.BUTTON principal -->
</li>


<!-- BODY-->
<li class="nav-item">
    <!-- BUTTON principal -->
    <a href="#" class="nav-link nav_link_bar">
        <i class="fa fa-user nav-icon"></i>
        <p>
            Ficha de ingreso
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <!-- /.BUTTON principal -->

    <!-- dentro del button -->
    <ul class="nav nav-treeview">

        <li class="nav-item">
            <a href="{{url('table_ficha')}}" class="nav-link nav-tree">
                <i class="far fa-circle nav-icon"></i> <p>Reporte de fichas</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{url('proc_agregarFicha')}}" class="nav-link nav-tree">
                <i class="far fa-circle nav-icon"></i> <p>Agregar ficha</p>
            </a>
        </li>
    </ul>
</li>


<!-- BODY-->
<li class="nav-item">
    <!-- BUTTON principal -->
    <a href="{{url('table_CentroRegional')}}" class="nav-link nav_link_bar">
        <i class="fa fa-user nav-icon"></i>
        <p>
            Centro Regional
        </p>
    </a>
    <!-- /.BUTTON principal -->
</li>












<!--########################################################################################################################################-->
<!--########################################################################################################################################-->

<!-- CABECERA-->
<li class="nav-header nav-label">Mantenimiento</li>

<!-- Seguridad-->
<li class="nav-item">
    <!-- BUTTON principal -->
    <a href="mnt-seguridad" class="nav-link nav_link_bar">
        <i class="bi bi-clipboard2-check-fill nav-icon"></i>
        <p>
            Seguridad
        </p>
    </a>
    <!-- /.BUTTON principal -->
</li>
<!-- Seguridad-->
<li class="nav-item">
    <!-- BUTTON principal -->
    <a href="mnt-inv" class="nav-link nav_link_bar">
        <i class="bi bi-clipboard2-check-fill nav-icon"></i>
        <p>
            Inventario
        </p>
    </a>
    <!-- /.BUTTON principal -->
</li>
<!-- Seguridad-->
<li class="nav-item">
    <!-- BUTTON principal -->
    <a href="mnt-ProcGest" class="nav-link nav_link_bar">
        <i class="bi bi-clipboard2-check-fill nav-icon"></i>
        <p>
            Proceso y gestiones
        </p>
    </a>
    <!-- /.BUTTON principal -->
</li>

<!--########################################################################################################################################-->
<!--########################################################################################################################################-->

<!-- CABECERA-->
<li class="nav-header nav-label">Base de datos</li>

<!-- BODY-->
<li class="nav-item">
    <!-- BUTTON principal -->
    <a href="{{url('backup')}}" class="nav-link">
        <i class="bi bi-clipboard2-check-fill nav-icon"></i>
        <p>
            Backup
        </p>
    </a>
    <a href="{{url('restore')}}" class="nav-link">
        <i class="bi bi-clipboard2-check-fill nav-icon"></i>
        <p>
            Restore
        </p>
    </a>
</li>
