@extends('layouts.admintemplate')

@section('conteudo')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Revistas
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Pagina Inicial</a></li>
                <li><a><i class="fa fa-newspaper-o"> Gerenciar Revistas</i></a>
                <li class="active"><a href="#"><i class="fa fa-plus-circle"></i> Adicionar Revistas</a></li>
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
                            <h3 class="box-title">{{isset($revista) ? 'Alterar': 'Criar'}} Revista</h3>
                        </div>
                        <!-- /.box-header -->
                        <form action="{{ URL('admin/revista') }}{{ isset($revista) ? '/'.$revista->id : '' }}" method="POST" enctype="multipart/form-data">
                            <div class="box-body">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        {{ csrf_field() }}
                                        @if (isset($revista))
                                            {{ method_field('PUT') }}
                                        @endif
                                        <input type="text" name="titulo" placeholder="Titulo" class="form-control" value="{{ isset($revista) ? $revista->titulo : ''  }}" required>
                                        <br>
                                        <input type="text" name="conteudo" placeholder="Conteudo" class="form-control" value="{{ isset($revista) ? $revista->conteudo : ''  }}" required>
                                        <br>
                                        <input type='file' name='image' placeholder="Insira sua Imagem aqui" class='form-control' required><br>
                                        <br>
                                        <input type='file' name='pdf' placeholder="Insira o PDF aqui" class='form-control' required><br>
                                    </div>
                                </div>
                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer">
                                <button class="btn btn-success">{{isset($revista) ? 'Alterar': 'Criar'}}</button>
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