@extends('layouts.admintemplate')

@section('conteudo')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Usuários
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Pagina Inicial</a></li>
                <li><a><i class="fa fa-cog"> Gerenciar Usuários</i></a>
                <li class="active"><a href="#"><i class="fa fa-plus-circle"></i> {{ isset($usuario) ? 'Alterar': 'Adicionar' }} Usuário</a></li>
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
                            <h3 class="box-title">{{isset($usuario) ? 'Alterar': 'Criar'}} Usuário</h3>
                        </div>
                        <!-- /.box-header -->
                        <form action="{{ URL('admin/usuario') }}{{ isset($usuario) ? '/'.$usuario->id : '' }}" method="POST" enctype="multipart/form-data">
                            <div class="box-body">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        {{ csrf_field() }}
                                        @if (isset($usuario))
                                            {{ method_field('PUT') }}
                                        @endif
                                        <input id="name" type="text" placeholder="Nome" class="form-control" name="name" value="{{ isset($usuario) ? $usuario->name : ''  }}" required autofocus>

                                        @if ($errors->has('name'))
                                            <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                                        @endif

                                        <br>

                                        <input type="text" id="usuario" placeholder="Usuario" class="form-control" name="usuario" value="{{ isset($usuario) ? $usuario->usuario : ''  }}" {{ isset($usuario) ? 'disabled' : 'required'  }} autofocus>

                                        @if ($errors->has('usuario'))
                                            <br>
                                            <div class="alert alert-danger">
                                                <strong>{{ $errors->first('usuario') }}</strong>
                                            </div>
                                        @endif

                                        <br>
                                        <input id="email" type="email" placeholder="E-mail" class="form-control" name="email" value="{{ isset($usuario) ? $usuario->email : ''  }}" required>

                                        @if ($errors->has('email'))
                                            <br>
                                            <div class="alert alert-danger">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </div>
                                        @endif

                                        <br>

                                        <input id="password" placeholder="{{ isset($usuario) ? 'Deixe em branco para não alterar' : 'Digite a Senha'  }}" type="password" class="form-control" name="password" {{ isset($usuario) ? '' : 'required'  }}>

                                        @if ($errors->has('password'))
                                            <br>
                                            <div class="alert alert-danger">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </div>
                                        @endif

                                        <br>
                                        <input id="password-confirm" placeholder="{{ isset($usuario) ? 'Deixe em branco para não alterar' : 'Confirme a Senha'  }}" type="password" class="form-control" name="password_confirmation" {{ isset($usuario) ? '' : 'required'  }}>
                                    </div>
                                </div>
                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer">
                                <button class="btn btn-success">{{isset($usuario) ? 'Alterar': 'Criar'}}</button>
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