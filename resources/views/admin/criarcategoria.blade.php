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
                <li><a><i class="fa fa-cog"> Gerenciar Categorias</i></a>
                <li class="active"><a href="#"><i class="fa fa-plus-circle"></i> {{ isset($categoria) ? 'Alterar': 'Adicionar' }} Categoria</a></li>
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
                            <h3 class="box-title">{{isset($categoria) ? 'Alterar': 'Criar'}} Categoria</h3>
                        </div>
                        <!-- /.box-header -->
                        <form action="{{ URL('admin/categoria') }}{{ isset($categoria) ? '/'.$categoria->id : '' }}" method="POST" enctype="multipart/form-data">
                            <div class="box-body">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        {{ csrf_field() }}
                                        @if (isset($categoria))
                                            {{ method_field('PUT') }}
                                        @endif

                                        <input id="categoria" type="text" placeholder="Nome da Categoria" class="form-control" name="categoria" value="{{ isset($categoria) ? $categoria->nome_categoria : ''  }}" required autofocus>

                                        @if ($errors->has('name'))
                                            <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                                        @endif

                                    </div>
                                </div>
                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer">
                                <button class="btn btn-success">{{isset($categoria) ? 'Alterar': 'Criar'}}</button>
                            </div>
                        </form>
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