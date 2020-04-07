<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Agripac S.A.</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="icon" type="img/png" href="{{asset('img/agripac.png')}}" />
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('css/font-awesome.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('css/AdminLTE.min.css')}}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <!-- fileimput -->
    <link rel="stylesheet" href="{{asset('css/fileinput.min.css')}}">
    <!-------------------->

    <link rel="stylesheet" href="{{asset('css/_all-skins.min.css')}}">
    <link rel="apple-touch-icon" href="{{asset('img/apple-touch-icon.png')}}">
<!-- Datepicker Files -->
    <link rel="stylesheet" href="{{asset('datePicker/css/bootstrap-datepicker3.css')}}">
    <link rel="stylesheet" href="{{asset('datePicker/css/bootstrap-datepicker.standalone.css')}}">
    <link rel="stylesheet" href="{{asset('css/dataTables.bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/estilos_generales.css')}}">

    
        <!-- jQuery 2.1.4 -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="{{asset('js/jQuery-2.1.4.min.js')}}"></script>
    <script src="{{asset('js/jquery-ui.js')}}"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <!-- file input .js -->
    <script src="{{asset('js/fileinput.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('js/app.min.js')}}"></script>
    <!--Validaciones Globales -->
    <script src="{{asset('js/validaciones_globales.js')}}"></script>
    
    <script src="{{asset('datePicker/js/bootstrap-datepicker.js')}}"></script>
    <!-- Languaje -->
    <script src="{{asset('datePicker/locales/bootstrap-datepicker.es.min.js')}}"></script>
    
    <script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('js/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{asset('js/validaciones_globales.js')}}"></script>
    <script src="{{asset('js/jquery.mask.js')}}"></script>
    <script src="{{asset('js/notify.js')}}"></script>

  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
      <header class="main-header">

        <!-- Logo -->
        <a href="/home" class="logo">
          <!-- mini logo for sidebar mini 90x90 pixels -->
          <!--<span class="logo-mini"><b>AYAYAI</b></span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><img src="{{asset('img/logofarm.png')}}" alt="Logo">AYAYAI</span>
        </a>

        <!-- Header Navbar: style can be found in header.less -->
        <nav id="navbar_principal" class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Navegación</span>
          </a>
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <small class=""><img src="{{asset('img/usuario.png')}}"></small>
                  <span class="hidden-xs">{{ Auth::user()->name }}</span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout').submit();">
                        Salir
                        </a>

                        <form id="logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside id="sidebar" class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
                    
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header"></li>
            
            <li class="treeview">
              <a href="#">
                <i class="fa fa-laptop"></i>
                <span>Mantenimientos</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{URL('/productos')}}"><i class="fa fa-circle-o"></i> Productos</a></li>
                <li><a href="{{URL('/mproductos')}}"><i class="fa fa-circle-o"></i> Mostrar Productos</a></li>
              </ul>
            </li>

            <li class="treeview">
              <a href="#">
                <i class="fa fa-tags"></i>
                <span>Administración</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{URL('/factura')}}"><i class="fa fa-circle-o"></i> Facturas</a></li>
                <li><a href="mfactura"><i class="fa fa-circle-o"></i> Mostrar Factura</a></li>
              </ul>
            </li>
            
            <li class="treeview">
              <a href="#">
                <i class="fa fa-th"></i>
                <span>Compras</span>
                 <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{URL('/clientes')}}"><i class="fa fa-circle-o"></i> Clientes</a></li>
                <li><a href="{{URL('/mclientes')}}"><i class="fa fa-circle-o"></i> Mostrar Clientes</a></li>
                <li><a href="{{URL('/proveedores')}}"><i class="fa fa-circle-o"></i> Proveedores</a></li>
                <li><a href="{{URL('/mproveedores')}}"><i class="fa fa-circle-o"></i> Mostrar Proveedores</a></li>
              </ul>
            </li>      
            <li class="treeview">
              <a href="#">
                <i class="fa fa-folder"></i> <span>Acceso</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{URL('/musuarios')}}"><i class="fa fa-circle-o"></i> Usuarios Registrados</a></li>
                
              </ul>
            </li>
             <li>
              <a href="#">
                <i class="fa fa-plus-square"></i> <span>Ayuda</span>
                <small class="label pull-right bg-red">PDF</small>
              </a>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-info-circle"></i> <span>Acerca De...</span>
                <small class="label pull-right bg-yellow">IT</small>
              </a>
               <ul class="treeview-menu">
               <li><a href="{{URL('/mproductosE')}}"><i class="fa fa-circle-o"></i> Productos Eliminados</a></li>
               <li><a href="{{URL('/mclientesE')}}"><i class="fa fa-circle-o"></i> Clientes Eliminados</a></li> 
               <li><a href="{{URL('/mproveedoresE')}}"><i class="fa fa-circle-o"></i> Proveedores Eliminados</a></li>
               <li><a href="{{URL('/mfacturasE')}}"><i class="fa fa-circle-o"></i> Facturas Eliminados</a></li>  
              </ul>
            </li>           
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>
      <!--Contenido-->
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        
        <!-- Main content -->
        <section class="content">
          
          <div class="row">
            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title"><b>Sistema de Ventas</b></h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                      <div class="col-md-12">
                        <!--Contenido-->
                        @yield('contenidos')
                        <!--Fin Contenido-->
                      </div>
                    </div>
                      </div>
                    </div><!-- /.row -->
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <!--Fin-Contenido-->
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 1.0.0
        </div>
        <center><strong>Copyright &copy; 2019 <a href="http://aulavirtual.istb.edu.ec/">Davis Jacome</a>.</strong> Todos los derechos reservados.</center>
      </footer>

  @section('scripts')
  @show


  </body>
</html>
