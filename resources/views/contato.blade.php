@extends('template.template')
  
@section('conteudo')
<!-- Start breadcrumb -->
 <section id="mu-page-breadcrumb">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="mu-page-breadcrumb-area">
           <h2>Contato</h2>
           <ol class="breadcrumb">
            <li><a href="#">Inicio</a></li>            
            <li class="active">Contato</li>
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
     <div class="row">
       <div class="col-md-12">
         <div class="mu-contact-area">
          <!-- start conteudo -->
          <div class="mu-contact-content">           
            <div class="row">
              <div class="col-md-6">
                <div class="mu-contact-left">
                  <form class="contactform">                  
                    <p class="comment-form-author">
                      <label for="nome">Nome <span class="required">*</span></label>
                      <input class="form-control" type="text" required="required" size="30" value="" name="author">
                    </p>
                    <p class="comment-form-email">
                      <label for="email">Email <span class="required">*</span></label>
                      <input class="form-control" type="email" required="required" aria-required="true" value="" name="email">
                    </p>
                    <p class="comment-form-url">
                        <label for="assunto">Assunto<span class="required">*</span></label>
                        <select class="form-control" name="assunto">
                            <option>Sugestão</option>
                            <option>Orçamento</option>
                            <option>Curriculo</option>
                        </select>
                    </p>
                    <p class="comment-form-comment">
                      <label for="mensagem">Mensagem</label>
                      <textarea class="form-control" required="required" aria-required="true" rows="8" cols="45" name="comment"></textarea>
                    </p>                
                    <p class="form-submit">
                      <input type="submit" value="Enviar" class="mu-post-btn" name="submit">
                    </p>        
                  </form>
                </div>
              </div>
              <div class="col-md-6">
                <div class="mu-contact-right">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d6249.345033302234!2d-80.02791918555701!3d40.45935344513505!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x8834f411a7b748bd%3A0xaec8197db3de9a9e!2sCalifornia-Kirkbride%2C+Pittsburgh%2C+PA%2C+USA!3m2!1d40.4600435!2d-80.0213538!5e0!3m2!1sen!2sbd!4v1464270878470" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
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