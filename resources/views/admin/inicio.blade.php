@extends('layouts.admintemplate')

@section('conteudo')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Pagina Inicial
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Titulo</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="col-lg-12 table-responsive">

                <table id="example2" class="table table-bordered table-hover table-responsive">
                  <thead>
                  <tr>
                    <th style="width: 10px;">ID</th>
                    <th>Nome</th>
                    <th>Usuario</th>
                    <th>E-mail</th>
                    <th style="width: 100px;">Ações</th>
                  </tr>
                  </thead>
                  <tbody>

                  </tbody>
                  <tfoot>
                  <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Usuario</th>
                    <th>E-mail</th>
                    <th>Ações</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              Paginação
            </div>
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (left) -->

      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection