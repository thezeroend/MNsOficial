@extends('layouts.admintemplate')

@section('conteudo')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Noticias
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Pagina Inicial</a></li>
                <li class="active"><a href="#"><i class="fa fa-newspaper-o"></i> Gerenciar Slides</a></li>
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
                            <h3 class="box-title">Gerenciar Slides</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="col-lg-12 table-responsive">

                                <table id="example2" class="table table-bordered table-hover table-responsive">
                                    <thead>
                                    <tr>
                                        <th>Titulo</th>
                                        <th>Descrição</th>
                                        <th>Link</th>
                                        <th>IMG</th>
                                        <th style="width: 100px;">Ações</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($slide as $key => $slides)
                                        <tr>
                                            <td>{{ $slides->titulo }}</td>
                                            <td>{{ $slides->descricao }}</td>
                                            <td>{{ $slides->url }}</td>
                                            <td><img src="{{ URL('/storage/public/slides/' . $slides->image) }}" width="80px" height="80px"></td>
                                            <td>
                                                <form action="{{ URL('admin/slide/' . $slides->id) }}" method="POST">
                                                    {{ csrf_field() }}
                                                    {{ method_field('DELETE') }}

                                                    <a href="{{ URL('admin/slide/' . $slides->id . '/edit') }}" class="btn btn-sm btn-primary"><i class="fa fa-pencil"></i></a>

                                                    <button type="submit" class="btn btn-sm btn-danger"  onclick="return confirm('Você tem certeza que deseja remover?');"><i class="fa fa-trash"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>Titulo</th>
                                        <th>Descrição</th>
                                        <th>Link</th>
                                        <th>IMG</th>
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
