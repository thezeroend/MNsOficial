@extends('template.template')
@section('conteudo')
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
    <!-- Start breadcrumb -->
 <section id="mu-page-breadcrumb">
     <div class="container">
     <div class="row">
              <div class="col-md-12">
             <div class="mu-page-breadcrumb-area">
                 <h2>Previsão do Tempo</h2>
                 <ol class="breadcrumb">
                     <li><a href="#">Inicio</a></li>
                     <li class="active">Previsão do Tempo</li>
                 </ol>
             </div>
         </div>




     </div>
   </div>
 </section>
 <!-- End breadcrumb -->

 <!-- Start contato  -->
<section>
<div class="clearfix"></div>
    <div class="full-height-width">
    <div class="box-menu">
        <ul id="menu">
            <li><p class="card-text-2">RELATÓRIO DE MOVIMENTO DE EMBARCAÇÃO</p>
                <ul>
                    <li class="menu-secundario"><p class="card-text-2">Solicite aqui o relatório de subidas e descidas realizadas pela Marinas Nacionais.</p></li>
                </ul>
            </li>
            <li><p class="card-text-2">RELATÓRIO DE FREQUÊNCIA</p>
                <ul>
                    <li class="menu-secundario"><p class="card-text-2">Solicite aqui o relatório com as entradas e saídas de funcionários e prepostos da embarcação, registrados pela portaria da Marinas Nacionas.</p></li>
                </ul>
            </li>
            <li><p class="card-text-2">REGISTRO DE AUTORIZAÇÃO</p>
            <ul>
                <li class="menu-secundario"><p class="card-text-2">Informe aqui os dados do marinheiro que realizará serviços em sua embarcação.</p></li>
            </ul>
        </li>
            <li><p class="card-text-2">REGISTRO DE AUTORIZAÇÃO PARA PRESTADOR DE SERVIÇO</p>
            <ul>
                <li class="menu-secundario"><p class="card-text-2">Informe aqui os prestadores de serviços autorizados a trabalharem em sua embarcação.</p></li>
            </ul>
        </li>
            <li><p class="card-text-2">ATUALIZE SEUS DADOS</p>
            <ul>
                <li class="menu-secundario"><p class="card-text-2">Mantenha atualizadas as informações de contato e correspondência.</p></li>
            </ul>
        </li>
            <li><p class="card-text-2">CADASTRO PARA ENTRADA DE VEÍCULOS</p>
            <ul>
                <li class="menu-secundario"><p class="card-text-2">Para sua segurança, informe as características dos carros autorizados para entrada na Marinas Nacionais.</p></li>
            </ul>
        </li>
            <li><p class="card-text-2">MUDANÇA DE SENHA</p>
                <ul>
                    <li class="menu-secundario"><p class="card-text-2">Para alterar a senha do Espaço do Cliente clique no botão abaixo.</p></li>
                </ul>
            </li>
            <li><p class="card-text-2">Câmeras on-line</p>
                <ul>
                    <li class="menu-secundario"><a></a><p class="card-text-2">Clique e veja a Marnias Nacionais em tempo real.</p></li>
                </ul>
            </li>
            <li><p class="card-text-2"><a href="#">Segunda via de boleto</a></p></li>
            <li><p class="btn btn-sair">SAIR</p></li>


        </ul>
    </div>
        <div class="box-form">
            <form id="RME">
                <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
                        <h4 class="modal-title">Relatório de movimentação de embarcação</h4>
                    </div>
                    <div class="modal-body">
                        <p>Para que sua solicitação seja atendida, preencha todos os campos do formulário abaixo</p>

                        <div class="col-md-12 padding_ln padding_rn">
                            <input type="text" class="form-control" name="nomecompleto" id="nome" placeholder="Seu nome" value="def">
                        </div>
                        <div class="col-md-12 padding_ln padding_rn">
                            <input type="text" class="form-control" name="embarcacao" id="embarcacao" placeholder="Embarcação">
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-md-4 padding_ln">
                            <label class="pull_left">Período do relatório: </label>
                        </div>
                        <div class="col-md-3 padding_ln">
                            <input type="text" id="ini" class="form-control pull_right" name="periodo" placeholder="De:   /  /   ">
                        </div>
                        <div class="col-md-1 padding_ln">
                            <label class="pull_left">até </label>
                        </div>
                        <div class="col-md-3 padding_ln padding_rn">

                            <input type="text" id="fin" class="form-control pull_right" name="ate" placeholder="Até:   /  /   ">
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-md-12 padding_ln padding_rn">
                            <button type="button" id="btn_movimento" class="btn custom-btn pull-right margin0 btn-black">Enviar</button>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </form>

            <form id="RF">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
                    <h4 class="modal-title">Relatório de Frequência</h4>
                </div>
                <div class="modal-body">
                    <p>Para que sua solicitação seja atendida, preencha todos os campos do formulário abaixo</p>

                    <div class="col-md-12 padding_ln padding_rn">
                        <input type="text" class="form-control" name="nomecompleto" id="nome" placeholder="Seu nome" value="def">
                    </div>
                    <div class="col-md-12 padding_ln padding_rn">
                        <input type="text" class="form-control" name="embarcacao" id="embarcacao" placeholder="Embarcação">
                    </div>

                    <div class="col-md-12 padding_ln padding_rn">
                        <input type="text" class="form-control" name="funcionario" id="funcionario" placeholder="Nome do funcionário">
                    </div>

                    <div class="clearfix"></div>
                    <div class="col-md-4 padding_ln">
                        <label class="pull_left">Período do relatório: </label>
                    </div>
                    <div class="col-md-3 padding_ln">
                        <input type="text" id="ini" class="form-control pull_right" name="periodo" placeholder="De:   /  /   ">
                    </div>
                    <div class="col-md-1 padding_ln">
                        <label class="pull_left">até </label>
                    </div>
                    <div class="col-md-3 padding_ln padding_rn">

                        <input type="text" id="fin" class="form-control pull_right" name="ate" placeholder="Até:   /  /   ">
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-12 padding_ln padding_rn">
                        <button type="button" id="btn_frequencia" class="btn custom-btn pull-right margin0 btn-black">Enviar</button>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </form>

            <form id="RA">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
                    <h4 class="modal-title">Registro de Autorização</h4>
                </div>
                <div class="modal-body">
                    <p>Para que sua solicitação seja atendida, preencha todos os campos do formulário abaixo</p>

                    <div class="col-md-6 padding_ln">
                        <input type="text" class="form-control" name="nomecompleto" id="nome" placeholder="Seu nome" value="def">
                    </div>
                    <div class="col-md-6 padding_ln padding_rn">
                        <input type="text" class="form-control" name="embarcacao" id="embarcacao" placeholder="Embarcação exemplo: Tequila">
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-6 padding_ln">
                        <input type="text" class="form-control" name="marinheiro" id="marinheiro" placeholder="Nome do marinheiro">
                    </div>

                    <div class="col-md-6 padding_ln padding_rn">
                        <input type="text" class="form-control" name="rg" id="rg" placeholder="RG">
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-12 padding_ln padding_rn">
                        <input type="text" class="form-control" name="end" id="end" placeholder="Endereço Residencial">
                    </div>

                    <div class="col-md-4 padding_ln">
                        <input type="text" class="form-control" name="fone" id="fone" placeholder="Telefone Residencial">
                    </div>

                    <div class="col-md-5 padding_ln">
                        <input type="text" class="form-control" name="reg" id="reg" placeholder="Registro na capitania dos portos">
                    </div>

                    <div class="col-md-3 padding_ln padding_rn">
                        <input type="text" class="form-control" name="cat" id="cat" placeholder="Categoria">
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-12 padding_ln padding_rn">
                        <input type="text" class="form-control" name="exp" id="exp" placeholder="Porto de expedição">
                    </div>

                    <div class="clearfix"></div>
                    <div class="col-md-12 padding_ln padding_rn">
                        <h3>Instruções: </h3>
                    </div>

                    <div class="col-md-12 padding_ln padding_rn">
                        <label class="pull_left">1 - Dar ordem de serviços na embarcação e retirada de notas fiscais </label>
                        <input type="radio" name="os" value="1">Sim
                        <input type="radio" name="os" value="0">Não

                    </div>

                    <div class="col-md-12 padding_ln padding_rn">
                        <label class="pull_left">2 - Movimentação da embarcação </label>
                        <input type="radio" name="mov" value="1">Sim
                        <input type="radio" name="mov" value="0">Não

                    </div>

                    <div class="col-md-12 padding_ln padding_rn">
                        <label class="pull_left">3 - Saída de materiais e equipamentos fora da marina </label>
                        <input type="radio" name="materiais" value="1">Sim
                        <input type="radio" name="materiais" value="0">Não

                    </div>

                    <div class="col-md-12 padding_ln padding_rn">
                        <label class="pull_left">4 - Prestar serviços em outras embarcações </label>
                        <input type="radio" name="outras" value="1">Sim
                        <input type="radio" name="outras" value="0">Não

                    </div>

                    <div class="col-md-12 padding_ln padding_rn">
                        <label class="pull_left">5 - Autorizado a abastecer </label>
                        <input type="radio" name="abastecer" value="1">Sim
                        <input type="radio" name="abastecer" value="0">Não

                    </div>

                    <div class="col-md-12 padding_ln padding_rn">
                        <label class="pull_left">
                            <input type="checkbox" name="aceite" value="1">
                            Li e aceito as condições constantes do Regulamento Interno para Marinheiros da Marinas Nacionais e é do meu conhecimento que o encarregado/marinheiro deverá cumpri-lo.
                        </label>

                    </div>

                    <div class="clearfix"></div>
                    <div class="col-md-12 padding_ln padding_rn">
                        <button type="button" id="btn_autoriza" class="btn custom-btn pull-right margin0 btn-black">Enviar</button>
                    </div>
                    <div class="clearfix"></div>
                </div>

            </form>

            <form id="RAPS">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
                    <h4 class="modal-title">Registro de autorização para prestador de serviço </h4>
                </div>
                <div class="modal-body">
                    <p>Para que sua solicitação seja atendida, preencha todos os campos do formulário abaixo</p>

                    <div class="col-md-6 padding_ln">
                        <input type="text" class="form-control" name="nomecompleto" id="nome" placeholder="Seu nome" value="def">
                    </div>
                    <div class="col-md-6 padding_ln padding_rn">
                        <input type="text" class="form-control" name="embarcacao" id="embarcacao" placeholder="Embarcação exemplo: Tequila">
                    </div>

                    <div class="clearfix"></div>

                    <div class="col-md-12 padding_ln">
                        <p>Solicito que seja autorizada a permissão de acesso à Marinas Nacionais Coml. Ltda. do prestador abaixo para a realização de serviços em minha embarcação</p>
                    </div>

                    <div class="clearfix"></div>

                    <div class="col-md-12 padding_ln padding_rn">
                        <input type="text" class="form-control" name="prestador" id="prestador" placeholder="Nome do prestador de serviços">
                    </div>

                    <div class="col-md-6 padding_ln ">
                        <input type="text" class="form-control" name="rg" id="rg" placeholder="RG">
                    </div>

                    <div class="col-md-6 padding_ln padding_rn">
                        <input type="text" class="form-control" name="fone" id="fone" placeholder="Telefone">
                    </div>

                    <div class="clearfix"></div>
                    <div class="col-md-4 padding_ln">
                        <label class="pull_left">Período: </label>
                    </div>
                    <div class="col-md-3 padding_ln">
                        <input type="text" id="ini" class="form-control pull_right" name="periodo" placeholder="De:   /  /   ">
                    </div>
                    <div class="col-md-1 padding_ln">
                        <label class="pull_left">até </label>
                    </div>
                    <div class="col-md-3 padding_ln padding_rn">

                        <input type="text" id="fin" class="form-control pull_right" name="ate" placeholder="Até:   /  /   ">
                    </div>
                    <div class="clearfix"></div>

                    <div class="clearfix"></div>
                    <div class="col-md-12 padding_ln padding_rn">
                        <p>

                            Declaro que durante o período da autorização, o mesmo permanecerá sob minha inteira e irrestrita responsabilidade, correndo sob o meu risco os eventuais danos ou prejuízos ocasionados à Marinas Nacionais Com. Ltda. ou a terceiros decorrentes do atendimento à presente solicitação.
                        </p>
                        <p>

                            Assumo também todas as responsabilidades dos encargos trabalhistas, previdenciários e civis também decorrentes da concessão da presente solicitação, e tomo conhecimento neste ato de que a mesma é específica para o período nela manifestado, e que, se por necessidade de eventual continuidade, nova solicitação será apresentada desde que o profissional  apresente  a documentação que comprove a sua condição de autônomo ou outra, para fins de descaracterização de qualquer vínculo ou responsabilidade para com a empresa Marinas Nacionais Coml. Ltda.
                        </p>
                        <p>
                            Através desta, autorizo a emissão do crachá de identificação para o abaixo qualificado, meu empregado encarregado de embarcação, pelo qual assumo total responsabilidade e o autorizo a executar as instruções abaixo relacionadas, quando necessário, comprometendo-me a comunicar de imediato qualquer alteração que venha a ocorrer. </p>

                    </div>

                    <div class="col-md-12 padding_ln">
                        <label class="pull_left">
                            <input type="checkbox" name="aceite" value="1">
                            Li e aceito as condições constantes do Regulamento Interno para Marinheiros da Marinas Nacionais e é do meu conhecimento que o encarregado/marinheiro deverá cumpri-lo.
                        </label>

                    </div>

                    <div class="clearfix"></div>
                    <div class="col-md-12 padding_ln padding_rn">
                        <button type="button" id="btn_presta" class="btn custom-btn pull-right margin0 btn-black">Enviar</button>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </form>

            <form id="AD">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
                    <h4 class="modal-title">Atualização de dados</h4>
                </div>
                <div class="modal-body">
                    <p>Para que sua solicitação seja atendida, preencha todos os campos do formulário abaixo</p>

                    <div class="col-md-6 padding_ln">
                        <input type="text" class="form-control" name="nomecompleto" id="nome" placeholder="Seu nome" value="def">
                    </div>
                    <div class="col-md-6 padding_ln padding_rn">
                        <input type="text" class="form-control" name="embarcacao" id="embarcacao" placeholder="Embarcação">
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-12 padding_ln padding_rn">
                        <input type="text" class="form-control" name="end_new" id="end_new" placeholder="Endereço, número, bairro">
                    </div>

                    <div class="col-md-4 padding_ln">
                        <input type="text" class="form-control" name="complemento" id="complemento" placeholder="Continuação do endereço e complemento">
                    </div>

                    <div class="col-md-4 padding_ln">
                        <input type="text" class="form-control" name="cep" id="cep" placeholder="CEP">
                    </div>

                    <div class="col-md-4 padding_ln padding_rn">
                        <input type="text" class="form-control" name="cidade" id="cidade" placeholder="Cidade / UF">
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-4 padding_ln">
                        <input type="text" class="form-control" name="fone_new" id="fone_new" placeholder="Novo telefone">
                    </div>
                    <div class="col-md-8 padding_ln padding_rn">
                        <input type="text" class="form-control" name="mail_new" id="mail_new" placeholder="Novo e-mail">
                    </div>


                    <div class="clearfix"></div>
                    <div class="col-md-12 padding_ln padding_rn">
                        <button type="button" id="btn_dados" class="btn custom-btn pull-right margin0 btn-black">Enviar</button>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </form>

            <form id="CD">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
                    <h4 class="modal-title">Cadastro de veículos</h4>
                </div>
                <div class="modal-body">
                    <p>Para que sua solicitação seja atendida, preencha todos os campos do formulário abaixo</p>

                    <div class="col-md-6 padding_ln">
                        <input type="text" class="form-control" name="nomecompleto" id="nome" placeholder="Seu nome" value="def">
                    </div>
                    <div class="col-md-6 padding_ln padding_rn">
                        <input type="text" class="form-control" name="embarcacao" id="embarcacao" placeholder="Embarcação">
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-6 padding_ln">
                        <input type="text" class="form-control" name="veiculo" id="veiculo" placeholder="Marca e modelo">
                    </div>

                    <div class="col-md-6 padding_ln padding_rn">
                        <input type="text" class="form-control" name="cor" id="cor" placeholder="Cor do veículo">
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-12 padding_ln padding_rn">
                        <input type="text" class="form-control" name="placa" id="placa" placeholder="Placa do veículo">
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-12 padding_ln padding_rn">
                        <button type="button" id="btn_veiculo" class="btn custom-btn pull-right margin0 btn-black">Enviar</button>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </form>

            <form id="Senha">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
                    <h4 class="modal-title">Troca de senha</h4>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="id" id="id" value="251020160724225262">
                    <div class="col-md-12 padding_ln padding_rn">
                        <input type="password" class="form-control" name="senha" id="senha" placeholder="Digite sua nova senha">
                    </div>

                    <div class="col-md-12 padding_ln padding_rn">
                        <input type="password" class="form-control" name="conf_senha" id="conf_senha" placeholder="Confirme sua nova senha">
                    </div>


                    <div class="clearfix"></div>
                    <div class="col-md-12 padding_ln padding_rn">
                        <button type="button" id="btn_senha" class="btn custom-btn pull-right margin0 btn-black">Enviar</button>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </form>

            <form id="Camara">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
                    <h4 class="modal-title">Câmeras - Marinas Nacionais</h4>
                </div>
                <div class="modal-body">
                    <div>
                        <img src="http://138.97.222.54:5000/snapshot.cgi?" id="re" class="camera">
                    </div>
                    <div><img src="http://138.97.222.54:5001/snapshot.cgi?" id="re2" class="camera" style="margin-top: 10px;"></div>
                    <div class="clearfix"></div>
                </div>
            </form>
    </div>



     <div class="container"  id="mu-contact">
         <div class="mu-contact-area">
              <!-- start conteudo -->
              <div class="mu-contact-content">
                    <div class="row">
                        <br>



                    </div>
              </div>
         </div>


          <!-- end conteudo -->
   </div>
</section>
 <!-- End contato  -->
@stop