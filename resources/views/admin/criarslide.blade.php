@extends('layouts.admintemplate')

@section('conteudo')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Slides
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Pagina Inicial</a></li>
                <li><a><i class="fa fa-arrow-right"> Gerenciar Slides</i></a>
                <li class="active"><a href="#"><i class="fa fa-plus-circle"></i> Adicionar Slide</a></li>
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
                            <h3 class="box-title">{{isset($slide) ? 'Alterar': 'Criar'}} Slides</h3>
                        </div>
                        <!-- /.box-header -->
                        <form action="{{ URL('admin/slide') }}{{ isset($slide) ? '/'.$slide->id : '' }}" method="POST" enctype="multipart/form-data">
                            <div class="box-body">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        {{ csrf_field() }}
                                        @if (isset($slide))
                                            {{ method_field('PUT') }}
                                        @endif
                                        <input type="text" name="titulo" placeholder="Titulo" class="form-control" value="{{ isset($slide) ? $slide->titulo : ''  }}" required>
                                        <br>
                                        <input type="text" name="descricao" placeholder="Descrição" class="form-control" value="{{ isset($slide) ? $slide->conteudo : ''  }}" required>
                                        <br>
                                        <input type="text" name="url" placeholder="URL" class="form-control" value="{{ isset($slide) ? $slide->categoria : ''  }}" required>
                                        <br>
                                        <input type='file' name='image' class='form-control' required><br>
                                    </div>
                                </div>
                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer">
                                <button class="btn btn-success">{{isset($slide) ? 'Alterar': 'Criar'}}</button>
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