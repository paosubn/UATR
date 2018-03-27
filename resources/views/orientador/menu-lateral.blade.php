
<div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        Start Bootstrap
                    </a>
                </li>
                <li>
                    <a href="#">Dashboard</a>
                </li>
                <li>
                    <a href="#">Shortcuts</a>
                </li>
                <li>
                    <a href="#">Overview</a>
                </li>
                <li>
                    <a href="#">Events</a>
                </li>
                <li>
                    <a href="#">About</a>
                </li>
                <li>
                    <a href="#">Services</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <h1>Simple Sidebar</h1>
                <p>This template has a responsive menu toggling system. The menu will appear collapsed on smaller screens, and will appear non-collapsed on larger screens. When toggled using the button below, the menu will appear/disappear. On small screens, the page content will be pushed off canvas.</p>
                <p>Make sure to keep all page content within the <code>#page-content-wrapper</code>.</p>
                <a href="#menu-toggle" class="btn btn-secondary" id="menu-toggle">Toggle Menu</a>

                <div class="row">
    <!--barra lateral-->
<div class="col-2" style="background-color: #985252">

    
</div>
<!--barra superior-->
    <div class="col-10" style="background-color: #FDF9F9">
        <div class="row">
            <div class="form-goup-row">
                <div class="col-md-3">
                    <label for="nuc">NUC</label>
                    <input type="text" class="col-form-label-sm">
                </div>
            </div>
            <div class="form-goup-row">
                <div class="col-md-3">
                    <label for="nuc">Folio</label>
                    <input type="text" class="col-form-label-sm">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <button class="button button1">Guardar
                    <i class="fa fa-archive"></i>
                    </button>
                </div>
                <div class="col-md-3">
                    <button class= "button button1">Editar
                    <i class="fa fa-pencil-square-o"></i>
                    </button>
                </div>
                <div class="col-md-3">
                    <button class="button button1">Cancelar
                    <i class="fa fa-pencil-square-o"></i>
                    </button>
                </div>
            </div>
            </div>
        </div>

<!--nav-->

    <div class="col-md-10">
        <ul class="nav nav-tabs">
          <li class="nav-item">
            <a class="nav-link active" href="#">Datos del solicitante</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Hechos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Delitos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Investigado</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Victimas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Medidas de proteccion</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Medidas de atención</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Acuerdo reparatorio</a>
          </li>
        </ul>
    </div>




            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Bootstrap core JavaScript -->
     <link rel="stylesheet" href="{{ asset('css/simple-sidebar.css') }}">
      <link rel="stylesheet" href="{{ asset('css/bootstrap.bundle.min.js') }}">
    

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

{{-- <div  id="barra" class="wrapper">

        <nav id="sidebar">
            <!-- Sidebar Header -->
            <div class="sidebar-header">
                <h3>MENU</div>
                <strong>BS</strong>
            </div>

            <!-- Sidebar Links -->
            <ul class="list-unstyled components">
                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">
                        <i class="glyphicon glyphicon-home"></i>
                        FORMATOS
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="glyphicon glyphicon-briefcase"></i>
                        BUSQUEDA
                    </a>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false">
                        <i class="glyphicon glyphicon-duplicate"></i>
                        NUEVO
                    </a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li><a href="#">Page 1</a></li>
                        <li><a href="#">Page 2</a></li>
                        <li><a href="#">Page 3</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <i class="glyphicon glyphicon-link"></i>
                        Portfolio
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="glyphicon glyphicon-send"></i>
                        Contact
                    </a>
                </li>
            </ul>
        </nav>

        <div id="content">
            <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                <i class="glyphicon glyphicon-align-left"></i>
                Toggle Sidebar
            </button>
        <div>

</div> --}}