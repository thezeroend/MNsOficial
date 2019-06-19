@extends('template.template')
  
@section('conteudo')
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
 <section id="mu-contact">
   <div class="container">
     <div class="">
       <div class="">
         <div class="mu-contact-area">
          <!-- start conteudo -->
          <div class="mu-contact-content">
            <div class="row">

                 <div class="full-height-width" id="previsao">
                      <iframe scrolling="no" frameborder="0" marginwidth="0" marginheight="0" style="margin:0;padding:0;border:0;" src="https://www.climatempo.com.br/tempo-no-seu-site/videos/selo/sudeste/1050x600" width="100%" height="600" frameborder="0"></iframe>
                 </div>

                <div class="mu-tabua-previsao" id="tabua">
                    <h1>Tábua de Marés</h1>
                <h4><a href="https://tabuademares.com/br/so-paulo/sao-sebastiao" target="_blank">SÃO SEBASTIÃO</a></h4>
                <h4><a href="https://tabuademares.com/br/so-paulo/santos" target="_blank">SANTOS</a></h4>

                    <p><h4><a href="https://www.marinha.mil.br/chm/dados-do-segnav/dados-de-mare-mapa?field_tipo_de_dados_value=TÁBUAS+DE+MARÉ" target="_blank">Dados de Tábuas de Maré</a></h4></p>
                </div>

              <div class="mu-temp-previsao full-height-width" id="windguru">
                    <h2 style="text-align: center">Previsão do Tempo</h2>
                    <p></p>
                    <h3>Marinas Nacionais</h3>
                    <script id="wg_fwdg_283964_3_1555788267126">
                        (function (window, document) {
                            var loader = function () {
                                var arg = ["s=283964","m=3","uid=wg_fwdg_283964_3_1555788267126","wj=knots","tj=c","odh=0","doh=24","fhours=240","vt=forecasts",
                                    "p=WINDSPD,GUST,MWINDSPD,SMER,TMPE,FLHGT,CDC,APCPs,RATING"];
                                var script = document.createElement("script");
                                var tag = document.getElementsByTagName("script")[0];
                                script.src = "https://www.windguru.cz/js/widget.php?"+(arg.join("&"));
                                tag.parentNode.insertBefore(script, tag);
                            };
                            window.addEventListener ? window.addEventListener("load", loader, false) : window.attachEvent("onload", loader);
                        })(window, document);
                    </script>

                    <p></p>
                    <h3>Ilhabela</h3>
                    <script id="wg_fwdg_322_3_1555787417299">
                        (function (window, document) {
                            var loader = function () {
                                var arg = ["s=322","m=3","uid=wg_fwdg_322_3_1555787417299","wj=knots","tj=c","odh=0","doh=24","fhours=240","vt=forecasts",
                                    "p=WINDSPD,GUST,MWINDSPD,SMER,TMPE,FLHGT,CDC,APCPs,RATING"];
                                var script = document.createElement("script");
                                var tag = document.getElementsByTagName("script")[0];
                                script.src = "https://www.windguru.cz/js/widget.php?"+(arg.join("&"));
                                tag.parentNode.insertBefore(script, tag);
                            };
                            window.addEventListener ? window.addEventListener("load", loader, false) : window.attachEvent("onload", loader);
                        })(window, document);
                    </script>
                    <p></p>
                    <h3>Ponta da Juantinga</h3>
                     <script id="wg_fwdg_349914_3_1555787517044">
                        (function (window, document) {
                            var loader = function () {
                                var arg = ["s=349914","m=3","uid=wg_fwdg_349914_3_1555787517044","wj=knots","tj=c","odh=0","doh=24","fhours=240","vt=forecasts",
                                    "p=WINDSPD,GUST,MWINDSPD,SMER,TMPE,FLHGT,CDC,APCPs,RATING"];
                                var script = document.createElement("script");
                                var tag = document.getElementsByTagName("script")[0];
                                script.src = "https://www.windguru.cz/js/widget.php?"+(arg.join("&"));
                                tag.parentNode.insertBefore(script, tag);
                            };
                            window.addEventListener ? window.addEventListener("load", loader, false) : window.attachEvent("onload", loader);
                        })(window, document);
                    </script>
                    <p></p>
                    <h3>Ilha das Couves - Ilhas</h3>
                    <script id="wg_fwdg_284616_3_1555788037766">
                        (function (window, document) {
                            var loader = function () {
                                var arg = ["s=284616","m=3","uid=wg_fwdg_284616_3_1555788037766","wj=knots","tj=c","odh=0","doh=24","fhours=240","vt=forecasts",
                                    "p=WINDSPD,GUST,MWINDSPD,SMER,TMPE,FLHGT,CDC,APCPs,RATING"];
                                var script = document.createElement("script");
                                var tag = document.getElementsByTagName("script")[0];
                                script.src = "https://www.windguru.cz/js/widget.php?"+(arg.join("&"));
                                tag.parentNode.insertBefore(script, tag);
                            };
                            window.addEventListener ? window.addEventListener("load", loader, false) : window.attachEvent("onload", loader);
                        })(window, document);
                    </script>

                    <p></p>
                    <h3>Indaiá</h3>
                    <script id="wg_fwdg_295592_3_1555788106166">
                        (function (window, document) {
                            var loader = function () {
                                var arg = ["s=295592","m=3","uid=wg_fwdg_295592_3_1555788106166","wj=knots","tj=c","odh=0","doh=24","fhours=240","vt=forecasts",
                                    "p=WINDSPD,GUST,MWINDSPD,SMER,TMPE,FLHGT,CDC,APCPs,RATING"];
                                var script = document.createElement("script");
                                var tag = document.getElementsByTagName("script")[0];
                                script.src = "https://www.windguru.cz/js/widget.php?"+(arg.join("&"));
                                tag.parentNode.insertBefore(script, tag);
                            };
                            window.addEventListener ? window.addEventListener("load", loader, false) : window.attachEvent("onload", loader);
                        })(window, document);
                    </script>
                    <p></p>
                    <h3>Montão de Trigo</h3>
                    <script id="wg_fwdg_284618_3_1555788183641">
                        (function (window, document) {
                            var loader = function () {
                                var arg = ["s=284618","m=3","uid=wg_fwdg_284618_3_1555788183641","wj=knots","tj=c","odh=0","doh=24","fhours=240","vt=forecasts",
                                    "p=WINDSPD,GUST,MWINDSPD,SMER,TMPE,FLHGT,CDC,APCPs,RATING"];
                                var script = document.createElement("script");
                                var tag = document.getElementsByTagName("script")[0];
                                script.src = "https://www.windguru.cz/js/widget.php?"+(arg.join("&"));
                                tag.parentNode.insertBefore(script, tag);
                            };
                            window.addEventListener ? window.addEventListener("load", loader, false) : window.attachEvent("onload", loader);
                        })(window, document);
                    </script>


                </div>
              </div>
            </div>
          </div>
          <!-- end conteudo -->
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- End contato  -->
@stop