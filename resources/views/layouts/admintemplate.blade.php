<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>CMS 1.0 - Painel Administrativo</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{ asset('PainelAdmin/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('PainelAdmin/bower_components/font-awesome/css/font-awesome.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{ asset('PainelAdmin/bower_components/Ionicons/css/ionicons.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('PainelAdmin/dist/css/AdminLTE.min.css') }}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{ asset('PainelAdmin/dist/css/skins/_all-skins.min.css') }}">
  <!-- Morris chart -->
  <link rel="stylesheet" href="{{ asset('PainelAdmin/bower_components/morris.js/morris.css') }}">
  <!-- jvectormap -->
  <link rel="stylesheet" href="{{ asset('PainelAdmin/bower_components/jvectormap/jquery-jvectormap.css') }}">
  <!-- Date Picker -->
  <link rel="stylesheet" href="{{ asset('PainelAdmin/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('PainelAdmin/bower_components/bootstrap-daterangepicker/daterangepicker.css') }}">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="{{ asset('PainelAdmin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>CMS</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Painel</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="{{ URL('PainelAdmin/dist/img/user2-160x160.jpg') }}" class="user-image" alt="User Image">
              <span class="hidden-xs">{{ Auth::user()->name }}</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  {{ Auth::user()->name }} - Função
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Mudar Senha</a>
                </div>
                <div class="pull-right">
                  <a href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();"
                     class="btn btn-default btn-flat">Sair</a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                  </form>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MENU DE NAVEGAÇÃO</li>
        <li class="treeview">
          <a>
            <i class="fa fa-dashboard"></i> <span>Paginas</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
            <li class="active"><a href="index.html"><i class="fa fa-circle-o"></i> Pagina 1</a></li>
            <li><a href="{{ URL('admin/pagina') }}"><i class="fa fa-circle-o"></i> Gerenciar Paginas</a></li>
          </ul>
        </li>
        <li class="{{ isset($pagina_banner) ? "active" : '' }} treeview">
          <a>
            <i class="fa fa-files-o"></i>
            <span>Banners e Fotos</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{ isset($banner_create) ? "active" : '' }}"><a href=" {{ URL('admin/banner/create') }}"><i class="fa fa-circle-o"></i> Adicionar</a></li>
            <li class="{{ isset($banner_create) ? "active" : '' }}"><a href=" {{ URL('admin/banner/create') }}"><i class="fa fa-circle-o"></i> Gerenciar Banners</a></li>
          </ul>
        </li>
        <li class="{{ isset($pagina_galeria) ? "active" : '' }} treeview">
          <a>
            <i class="fa fa-th"></i> 
            <span>Galerias</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{ isset($galeria_create) ? "active" : '' }}"><a href=" {{ URL('admin/galeria/create') }}"><i class="fa fa-circle-o"></i> Adicionar</a></li>
            <li class="{{ isset($galeria_index) ? "active" : '' }}"><a href=" {{ URL('admin/galeria') }} "><i class="fa fa-circle-o"></i> Gerenciar Galerias</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a>
            <i class="fa fa-pie-chart"></i>
            <span>Revistas</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{ isset($revista_create) ? "active" : '' }}"><a href=" {{ URL('admin/revista/create') }}"><i class="fa fa-circle-o"></i> Adicionar</a></li>
            <li class="{{ isset($revista_index) ? "active" : '' }}"><a href=" {{ URL('admin/revista') }} "><i class="fa fa-circle-o"></i> Gerenciar Revistas</a></li>
          </ul>
        </li>
        <li class="{{ isset($pagina_slide) ? "active" : '' }} treeview">
          <a>
            <i class="fa fa-laptop"></i>
            <span>Slides</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{ isset($slide_create) ? "active" : '' }}"><a href=" {{ URL('admin/slide/create') }} "><i class="fa fa-circle-o"></i> Adicionar</a></li>
            <li class="{{ isset($slide_index) ? "active" : '' }}"><a href=" {{ URL('admin/slide') }} "><i class="fa fa-circle-o"></i> Gerenciar Slides</a></li>
          </ul>
        </li>
        <li class="{{ isset($pagina_noticia) ? "active" : '' }} treeview">
          <a>
            <i class="fa fa-laptop"></i>
            <span>Notícias</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{ isset($noticia_create) ? "active" : '' }}"><a href=" {{ URL('admin/noticia/create') }} "><i class="fa fa-circle-o"></i> Adicionar</a></li>
            <li class="{{ isset($noticia_index) ? "active" : '' }}"><a href=" {{ URL('admin/noticia') }} "><i class="fa fa-circle-o"></i> Gerenciar Noticias</a></li>
          </ul>
        </li>
        <li class="{{ isset($pagina_categorias) ? "active" : '' }} treeview">
          <a>
            <i class="fa fa-edit"></i> <span>Categorias</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{ isset($categorias_create) ? "active" : '' }}"><a href="{{ URL('admin/categoria/create') }}"><i class="fa fa-circle-o"></i> Adicionar</a></li>
            <li class="{{ isset($categorias_index) ? "active" : '' }}"><a href="{{ URL('admin/categoria/') }}"><i class="fa fa-circle-o"></i> Gerenciar Categorias</a></li>
          </ul>
        </li>
        <li class="{{ isset($pagina_clientes) ? "active" : '' }} treeview">
          <a>
            <i class="fa fa-table"></i> <span>Clientes</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{ isset($clientes_create) ? "active" : '' }}"><a href="{{ URL('admin/adcliente/create') }}"><i class="fa fa-circle-o"></i> Adicionar</a></li>
            <li class="{{ isset($clientes_index) ? "active" : '' }}"><a href="{{ URL('admin/adcliente') }}"><i class="fa fa-circle-o"></i> Gerenciar Clientes</a></li>
          </ul>
        </li>
        <li class="{{ isset($pagina_conf) ? "active" : '' }}">
          <a href="{{ url('admin/configuracao') }}">
            <i class="fa fa-cog"></i> <span>Configurações</span>
          </a>
        </li>
        <li class="{{ isset($pagina_users) ? "active" : '' }} treeview">
          <a>
            <i class="fa fa-users"></i> <span>Usuários</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{ isset($users_create) ? "active" : '' }}"><a href="{{ URL('admin/usuario/create') }}"><i class="fa fa-circle-o"></i> Adicionar</a></li>
            <li class="{{ isset($users_index) ? "active" : '' }}"><a href=" {{ URL('admin/usuario') }}"><i class="fa fa-circle-o"></i> Gerenciar Usuários</a></li>
          </ul>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-folder"></i> <span>Alterar Senha</span>

          </a>
        </li>
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  @yield('conteudo')

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Versão</b> 1.0
    </div>
    <strong>Copyright &copy; 2019 .</strong> Todos os direitos reservados.
  </footer>

</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="{{ asset('PainelAdmin/bower_components/jquery/dist/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('PainelAdmin/bower_components/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ asset('PainelAdmin/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>

<!-- Sparkline -->
<script src="{{ asset('PainelAdmin/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js') }}"></script>
<!-- jvectormap -->
<script src="{{ asset('PainelAdmin/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
<script src="{{ asset('PainelAdmin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>

<!-- daterangepicker -->
<script src="{{ asset('PainelAdmin/bower_components/moment/min/moment.min.js') }}"></script>
<script src="{{ asset('PainelAdmin/bower_components/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
<!-- datepicker -->
<script src="{{ asset('PainelAdmin/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{ asset('PainelAdmin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
<!-- Slimscroll -->
<script src="{{ asset('PainelAdmin/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ asset('PainelAdmin/bower_components/fastclick/lib/fastclick.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('PainelAdmin/dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('PainelAdmin/dist/js/pages/dashboard.js') }}"></script>

<!-- CKEditor -->
<script src="{{ asset('PainelAdmin/ckeditor/ckeditor.js') }}"></script>
<script>
  CKEDITOR.replace('conteudo');
</script>

</body>
</html>
