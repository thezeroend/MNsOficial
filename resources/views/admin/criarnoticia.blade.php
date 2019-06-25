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
                <li><a><i class="fa fa-newspaper-o"> Gerenciar Noticias</i></a>
                <li class="active"><a href="#"><i class="fa fa-plus-circle"></i> Adicionar Noticia</a></li>
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
                            <h3 class="box-title">{{isset($noticia) ? 'Alterar': 'Criar'}} Noticia</h3>
                        </div>
                        <!-- /.box-header -->
                        <form action="{{ URL('admin/noticia') }}{{ isset($noticia) ? '/'.$noticia->id : '' }}" method="POST" enctype="multipart/form-data">
                            <div class="box-body">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        {{ csrf_field() }}
                                        @if (isset($noticia))
                                            {{ method_field('PUT') }}
                                        @endif
                                        <input type="text" name="titulo" placeholder="titulo" class="form-control" value="{{ isset($noticia) ? $noticia->titulo : ''  }}" required>
                                        <br>
                                        <input type="text" name="conteudo" placeholder="conteudo" class="form-control" value="{{ isset($noticia) ? $noticia->conteudo : ''  }}" required>
                                        <br>
                                        <input type="text" name="categoria" placeholder="categoria" class="form-control" value="{{ isset($noticia) ? $noticia->categoria : ''  }}" required>
                                        <br>
                                        <input type='file' name='image' class='form-control' required><br>
                                    </div>
                                </div>
                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer">
                                <button class="btn btn-success">{{isset($noticia) ? 'Alterar': 'Criar'}}</button>
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