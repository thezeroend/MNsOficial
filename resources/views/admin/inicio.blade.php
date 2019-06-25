@extends('template.template')
  
@section('conteudo')


                <!-- Start Slider -->
  <section id="mu-slider">
  @foreach ($slides as $slide)
    <!-- Start single slider item -->
    <div class="mu-slider-single">
      <div class="mu-slider-img">
        <figure>
          <img src="{{ URL('/storage/public/slides/' . $slide->image) }}" alt="img"> <!-- 1920x500 -->
        </figure>
      </div>
      <div class="mu-slider-content">
        <h4>Marinas Nacionais</h4>
        <span></span>
        <h2>{{ $slide->titulo }}</h2>
        <p>{{ $slide->descricao }}</p>
        <a href="{{ $slide->url }}" class="mu-read-more-btn">Saiba Mais</a>
      </div>
    </div>
  @endforeach
  </section>
  <!-- End Slider -->
  
  <!-- Start sobre -->
  <section id="mu-about-us">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-about-us-area">           
            <div class="row">
              <div class="col-lg-6 col-md-6">
                <div class="mu-about-us-left">
                  <!-- Start Title -->
                  <div class="mu-title">
                    <h2>Um Lugar especial como você</h2>              
                  </div>
                  <!-- End Title -->
                  <p align="justify">A Marinas Nacionais é a primeira marina do estado de São Paulo a receber a Bandeira Azul, um selo de excelência ambiental e operacional reconhecido internacionalmente.</p>
                  <p align="justify">É a consagração do espírito audacioso e da vocação inovadora da primeira marina brasileira.</p>
                  <p align="justify">
				  A Marinas Nacionais oferece tranquilidade ao cliente para a guarda da embarcação. Dois guindastes travelift, um deles com capacidade para embarcações de até 80 toneladas e outro para até 50 toneladas.</p>
				  <p align="justify">
			      Cinco tratores para manobrar os barcos e dois Forklift que retiram barcos de até 32 pés da água e os colocam imediatamente em seus locais de guarda empilhado. Todas as locações da Marinas Nacionais possuem apólices de seguro para as embarcações.</p>
                </div>
              </div>
              <div class="col-lg-6 col-md-6">
                <div class="mu-about-us-right">
                <a id="mu-abtus-video " href="https://www.youtube.com/embed/T9VtGhmCWOI?autoplay=1" target="mutube-video " >
                  <img src="assets/img/teste.png" alt="img">
                </a>                
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End sobre -->

  <!-- Start map -->
  <section id="mu-testimonial">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-testimonial-area">
            <div id="mu-testimonial-slide" class="mu-testimonial-content">
              <div class="mu-testimonial-item">
				<!-- <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d6249.345033302234!2d-80.02791918555701!3d40.45935344513505!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x8834f411a7b748bd%3A0xaec8197db3de9a9e!2sCalifornia-Kirkbride%2C+Pittsburgh%2C+PA%2C+USA!3m2!1d40.4600435!2d-80.0213538!5e0!3m2!1sen!2sbd!4v1464270878470" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Start notice -->
  <section id="mu-from-blog">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-from-blog-area">
            <!-- start title -->
            <div class="mu-title">
              <h2>Noticias Recentes</h2>
            </div>
            <!-- end title -->  
            <!-- start conteudo  -->
            <div class="mu-from-blog-content">
              <div class="row">
                @foreach($noticias as $noticia)
                <div class="col-md-4 col-sm-4">
                  <article class="mu-blog-single-item">
                    <figure class="mu-blog-single-img">
                      <a href="#"><img src="{{ URL('/storage/public/noticias/' . $noticia->image) }}" alt="img"></a>
                      <figcaption class="mu-blog-caption">
                        <h3><a href="#">{{ $noticia->titulo }}</a></h3>
                      </figcaption>                      
                    </figure>
                    <div class="mu-blog-meta">
                      <a href="#">{{ $noticia->categoria }}</a>
                      <a href="#">-  {{ $noticia->data_post }}</a>
                    </div>
                    <div class="mu-blog-description">
                      <p>{{ $noticia->conteudo }}</p>
                      <a class="mu-read-more-btn" href="#">Ler Tudo</a>
                    </div>
                  </article>
                </div>
                @endforeach
                <!-- Fim Artigo 1 -->

              </div>
            </div>     
            <!-- end conteudo   -->   
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End notice -->
@stop