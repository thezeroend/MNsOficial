@extends('layouts.admintemplate')

@section('conteudo')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Categorias
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Pagina Inicial</a></li>
                <li class="active"><a href="#"><i class="fa fa-newspaper-o"></i> Gerenciar Categorias</a></li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Gerenciar Categorias</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="col-lg-4">
                                @if(Session::has('success'))
                                    <div class="alert alert-success alert-dismissible">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                        {{ Session::get('success') }}
                                    </div>
                                @endif
                            </div>
                            <div class="col-lg-12 table-responsive">

                                <table id="example2" class="table table-bordered table-hover table-responsive">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Categoria</th>
                                        <th style="width: 100px;">Ações</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($categorias as $key => $categoria)
                                        <tr>
                                            <td>{{ $categoria->id }}</td>
                                            <td>{{ $categoria->nome_categoria }}</td>
                                            <td>
                                                <form action="{{ URL('admin/categoria/' . $categoria->id) }}" method="POST">
                                                    {{ csrf_field() }}
                                                    {{ method_field('DELETE') }}

                                                    <a href="{{ URL('admin/categoria/' . $categoria->id . '/edit') }}" class="btn btn-sm btn-primary"><i class="fa fa-pencil"></i></a>

                                                    <button type="submit" class="btn btn-sm btn-danger" Onclick="return confirm('Você tem certeza que deseja remover?');"><i class="fa fa-trash"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>ID</th>
                                        <th>Categoria</th>
                                        <th style="width: 100px;">Ações</th>
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