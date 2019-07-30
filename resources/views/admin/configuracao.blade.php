@extends('layouts.admintemplate')

@section('conteudo')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Configuração
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Pagina Inicial</a></li>
                <li class="active"><a href="#"><i class="fa fa-cog"></i> Configuração</a></li>
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
                            <h3 class="box-title">Editar Configuração</h3>
                        </div>
                        <!-- /.box-header -->
                        <form action="{{ URL('admin/configuracao') }}{{ isset($configuracao) ? '/'.$configuracao->id : '' }}" method="POST" enctype="multipart/form-data">
                            <div class="box-body">
                                @if(Session::has('success'))
                                    <div class="alert alert-success alert-dismissible">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                        {{ Session::get('success') }}
                                    </div>
                                @endif
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        {{ csrf_field() }}

                                        {{ method_field('PUT') }}

                                        <i class="fa fa-road"></i> Logradouro:
                                        <input type="text" name="Logradouro" placeholder="Logradouro" class="form-control" value="{{ isset($configuracao) ? $configuracao->logradouro : '' }} required">
                                        <br>
                                        <i class="fa fa-certificate"></i> Numero:
                                        <input type="text" name="Numero" placeholder="Número" class="form-control" value="{{ isset($configuracao) ? $configuracao->numero : ''  }} required" >
                                        <br>
                                        <i class="fa fa-certificate"></i> Complemento:
                                        <input type="text" name="Complemento" placeholder="Complemento" class="form-control" value="{{ isset($configuracao) ? $configuracao->complemento : ''  }} required" >
                                        <br>
                                        <i class="fa fa-certificate"></i> Bairro:
                                        <input type="text" name="Bairro" placeholder="Bairro" class="form-control" value="{{ isset($configuracao) ? $configuracao->bairro : ''  }}" >
                                        <br>
                                        <i class="fa fa-certificate"></i> CEP:
                                        <input type="text" name="CEP" placeholder="CEP" class="form-control" value="{{ isset($configuracao) ? $configuracao->CEP : ''  }}" required>
                                        <br>
                                        <i class="fa fa-certificate"></i> Municipio:
                                        <input type="text" name="Municipio" placeholder="Municipio" class="form-control" value="{{ isset($configuracao) ? $configuracao->municipio : ''  }}"required >
                                        <br>
                                        <i class="fa fa-certificate"></i> UF:
                                        <input type="text" name="UF" placeholder="UF" class="form-control" value="{{ isset($configuracao) ? $configuracao->UF : ''  }}" >
                                        <br>
                                        <i class="fa fa-phone"></i> Telefone 1:
                                        <input type="text" name="Telefone_1" placeholder="Telefone 1" class="form-control" value="{{ isset($configuracao) ? $configuracao->telefone_1 : ''  }}" required >
                                        <br>
                                        <i class="fa fa-phone"></i> Telefone 2:
                                        <input type="text" name="Telefone_2" placeholder="Telefone 2" class="form-control" value="{{ isset($configuracao) ? $configuracao->telefone_2 : ''  }}" >
                                        <br>
                                        <i class="fa fa-envelope"></i> E-mail para Contato:
                                        <input type="text" name="Email_cont" placeholder="Email Contato" class="form-control" value="{{ isset($configuracao) ? $configuracao->email : ''  }}" >
                                        <br>
                                        <i class="fa fa-facebook"></i> Facebook:
                                        <input type="text" name="Facebook" placeholder="Facebook" class="form-control" value="{{ isset($configuracao) ? $configuracao->facebook : ''  }}" required>
                                        <br>
                                        <i class="fa fa-twitter"></i> Twitter:
                                        <input type="text" name="Twitter" placeholder="Twitter" class="form-control" value="{{ isset($configuracao) ? $configuracao->twitter : ''  }}" required>
                                        <br>
                                        <i class="fa fa-google-plus"></i> Google +:
                                        <input type="text" name="Google" placeholder="Google+" class="form-control" value="{{ isset($configuracao) ? $configuracao->google : ''  }}" required >
                                        <br>
                                        <i class="fa fa-instagram"></i> Instagram:
                                        <input type="text" name="Instagram" placeholder="Instagram" class="form-control" value="{{ isset($configuracao) ? $configuracao->instagram : ''  }}" required>
                                        <br>
                                        <i class="fa fa-youtube-play"></i> Youtube:
                                        <input type="text" name="Youtube" placeholder="Youtube" class="form-control" value="{{ isset($configuracao) ? $configuracao->youtube : ''  }}" required >
                                        <br>


                                    </div>
                                </div>
                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer">
                                <button class="btn btn-success">Alterar</button>
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