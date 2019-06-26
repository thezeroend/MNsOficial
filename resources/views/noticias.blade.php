@extends('template.template')
  
@section('conteudo')
<!-- Page breadcrumb -->
 <section id="mu-page-breadcrumb">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="mu-page-breadcrumb-area">
           <h2>Ultimas Noticias</h2>
           <ol class="breadcrumb">
            <li><a href="#">Inicio</a></li>            
            <li class="active">Ultimas Noticias</li>
          </ol>
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- End breadcrumb -->
 <section id="mu-course-content">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="mu-course-content-area">
            <div class="row">
              <div class="col-md-9">
                <!-- start conteudo -->

                <div class="mu-course-container mu-blog-archive">
                  <div class="row">
                    @foreach ($noticias as $key => $noticia)
                    <div class="col-md-6 col-sm-6">
                      <article class="mu-blog-single-item">
                        <figure class="mu-blog-single-img">
                          <a href="#"><img src="{{ URL('/storage/public/noticias/' . $noticia->image) }}" alt="img"></a>
                          <figcaption class="mu-blog-caption">
                            <h3><a href="#">{{ $noticia->titulo }}</a></h3>
                          </figcaption>
                        </figure>
                        <div class="mu-blog-meta">
                          <a href="#">{{ $noticia->categoria }}</a>
                          <a href="#">- {{ $noticia->data_post }}</a>
                        </div>
                        <div class="mu-blog-description">
                          <p>{{ $noticia->conteudo }}</p>
                          <a class="mu-read-more-btn" href="#">Ler Mais</a>
                        </div>
                      </article>
                    </div>
                    @endforeach

                  </div>
                </div>
                <!-- end conteudo -->
                <!-- start pagination -->

                <div class="mu-pagination">
                  <nav>
                    <ul class="pagination">
                      {{ $noticias->links() }}
                    </ul>
                  </nav>
                </div>
                <!-- end pagination -->
              </div>
              <div class="col-md-3">
                <!-- start side bar -->
                <aside class="mu-sidebar">
                  <!-- start side bar -->
                  <div class="mu-single-sidebar">
                    <h3>Categorias</h3>
                    <ul class="mu-sidebar-catg">
                      @foreach ($categorias as $key => $categoria)
                        <li><a href="#">{{ $categoria->categoria }}</a></li>
                      @endforeach
                    </ul>
                  </div>
                  <!-- end side bar -->
                  
                </aside>
                <!-- / end sidebar -->
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
 </section>
@stop