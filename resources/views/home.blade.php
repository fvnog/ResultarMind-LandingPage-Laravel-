@extends('layouts.app')

@section('content')

<div style="height:80px;"></div>


<body data-spy="scroll" data-target=".main-menu">
  <div class="gradient-body">
     
      <!--====== Start Banner Section ======-->
      <section class="hero-banner-v2 position-relative z-1" id="home">
          <div class="shape shape-one"><span><img src="img/hero/hero-two-shape-1.png" alt=""></span></div>
          <div class="shape shape-two"><span><img src="img/hero/hero-two-shape-2.png" alt=""></span></div>
          <div class="shape shape-three"><span><img src="img/hero/hero-two-shape-3.png" alt=""></span></div>
          <div class="shape shape-four"><span><img src="img/hero/dot-pattern.png" alt=""></span></div>
          <div class="container">
              <div class="row align-items-center">
                  <div class="col-lg-7">
                      <div class="hero-content">
                          <span class="sub-title wow fadeInUp"><i class="fas fa-arrow-right"></i>Bem vindo a ResultarMind</span>
                          <h2 class="wow fadeInUp pb-5" data-wow-delay=".5s">Gestão de Rede Social,</br>
                              Criação de WebSite,</br>
                              Design Gráfico, </br>
                              & BOT de Automação</h2>

                          <a href="about.html" class="main-btn arrow-btn wow fadeInUp" data-wow-delay=".7s">Saiba mais</a>
                      </div>
                  </div>
                  <div class="col-lg-5">
                      <div class="hero-img wow fadeInRight" data-wow-delay=".9s">
                          <img src="{{ asset('img/Robo.png') }}" alt="Imagem">
                          <div class="hero-shape hero-shape-one animate-float-x"><span><img src="img/hero/shape-1.png" alt=""></span></div>
                          <div class="hero-shape hero-shape-two animate-float-y"><span><img src="img/hero/shape-2.png" alt=""></span></div>
                      </div>
                  </div>
              </div>
          </div>
      </section><!--====== End Banner Section ======-->

        <!--====== Start Counter Section ======-->
        <section class="counter-area counter-area-v2 pb-90 pt-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-9">
                        <div class="section-title text-center mb-55 wow fadeInUp">
                            <h2>Acompanhe nosso Desempenho</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="counter-item mb-40 wow fadeInUp" data-wow-delay=".2s">
                            <div class="icon">
                                <i class="flaticon-start-up"></i>
                            </div>
                            <div class="text">
                                <h2 class="number"><span>70</span>+</h2>
                                <p>Projetos Completos</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="counter-item mb-40 item-active wow fadeInUp" data-wow-delay=".3s">
                            <div class="icon">
                                <i class="flaticon-creativity"></i>
                            </div>
                            <div class="text">
                                <h2 class="number"><span>783</span>+</h2>
                                <p>Soluções Criadas</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="counter-item mb-40 wow fadeInUp" data-wow-delay=".4s">
                            <div class="icon">
                                <i class="flaticon-medal"></i>
                            </div>
                            <div class="text">
                                <h2 class="number"><span>97</span>+</h2>
                                <p>Clientes Satisfeitos</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="counter-item mb-40 wow fadeInUp" data-wow-delay=".5s">
                            <div class="icon">
                                <i class="flaticon-technical-support"></i>
                            </div>
                            <div class="text">
                                <h2 class="number"><span>3</span>+</h2>
                                <p>Anos de Experiência</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--====== End Counter Section ======-->

<!--====== Start Service Section ======-->
<section class="service-area service-area-v1" id="services">
  <div class="container-1350">
      <div class="service-wrapper pt-75 pb-40">
          <div class="row justify-content-center">
              <div class="col-lg-8">
                  <div class="section-title text-center mb-55 wow fadeInUp">
                      <h2>Soluções Criativas</h2>
                      <p>Agência Profissional para fornecer soluções em diversas áreas de tecnologia</p>
                  </div>
              </div>
          </div>
          <div class="row justify-content-center">
            <div class="row ">

              <div class="col">
                  <div class="service-item service-style-two mb-40 wow fadeInUp" data-wow-delay=".15s">
                      <div class="icon justify-content-center">
                        <img src="img/icon/social-media.png" class="icon-service text-center">
                      </div>
                      <div class="text">
                          <h3 class="title"><a href="service-details.html">Rede Sociais</a></h3>
                          <ul class="list-style-two">
                              <li>Gerênciamento</li>
                              <li>Postagem</li>
                              <li>Produção de conteúdo</li>
                          </ul>
                          <a href="{{ route('gestao') }}" class="btn-link">Saiba Mais sobre Gerênciamento</a>
                        </div>
                  </div>
              </div>

              <div class="col">
                <div class="service-item service-style-two mb-40 wow fadeInUp" data-wow-delay=".15s">
                    <div class="icon">
                        <img src="img/icon/web.png" class="icon-service">
                    </div>
                    <div class="text">
                        <h3 class="title"><a href="service-details.html">WebSite</a></h3>
                        <ul class="list-style-two">
                            <li>Portfolios</li>
                            <li>Sites simples</li>
                            <li>Sites administrativos</li>
                        </ul>
                        <a href="{{ route('website') }}" class="btn-link">Saiba Mais sobre WebSite</a>
                    </div>
                </div>
            </div>

            <div class="col">
              <div class="service-item service-style-two mb-40 wow fadeInUp" data-wow-delay=".15s">
                  <div class="icon">
                    <img src="img/icon/design.png" class="icon-service">
                </div>
                  <div class="text">
                      <h3 class="title"><a href="service-details.html">Design Gráfico</a></h3>
                      <ul class="list-style-two">
                          <li>Flyers personalizados</li>
                          <li>Logos</li>
                          <li>Banners</li>
                      </ul>
                      <a href="{{ route('designgrafico') }}" class="btn-link">Saiba Mais sobre Design Gráfico</a>
                    </div>
              </div>
          </div>

                            <div class="col">
                  <div class="service-item service-style-two mb-40 wow fadeInUp" data-wow-delay=".15s">
                      <div class="icon">
                        <img src="img/icon/bot.png" class="icon-service">
                    </div>
                      <div class="text">
                          <h3 class="title"><a href="service-details.html">Automação</a></h3>
                          <ul class="list-style-two">
                              <li>BOTs</li>
                              <li>Respondedores automáticos</li>
                              <li>Vendas via BOT</li>
                          </ul>
                          <a href="{{ route('automacao') }}" class="btn-link">Saiba Mais sobre Automação</a>
                        </div>
                  </div>
              </div>

          </div>
        </div>
      </div>
  </div>
</section><!--====== End Service Section ======-->


      <!--====== Start About Section ======-->
      <section class="about-area about-area-v2 pt-130" id="about">
          <div class="container">
              <div class="row">
                  <div class="col-lg-5">
                    
                    <div class="img-holder wow fadeInLeft pt-5">
                      <div class="icon">
                        <img src="img/logo/Logotipo.png" class="pt-4">
                      </div>
                  </div>
                  
                      
                  </div>
                  <div class="col-lg-7">
                      <div class="text-wrapper mb-50 wow fadeInRight">
                        
                          <div class="section-title mb-25">
                              <h2>Uma agência criativa desde 2020</h2>
                              <p class="blue-dark">Uma empresa ativacional com resultado.</p>
                          </div>


                          <p>Somos uma agência criativa impulsionadora de marcas. Oferecemos gerenciamento de redes sociais, criação de websites e design gráfico para transmitir identidades de forma inovadora. Além disso, nossa automação com bots aprimora interações, transformando cada ponto de contato em uma oportunidade impactante.</p>
                          <ul class="list-style-one mb-40">
                              <li>Gerênciamento de Redes Sociais</li>
                              <li>Criação de WebSites</li>
                              <li>Design Gráfico</li>
                              <li>Automação com BOT</li>
                          </ul>
                      </div>
                  </div>
              </div>
          </div>
      </section><!--====== End About Section ======-->
      <!--====== Start Portfolio Section ======-->
      <section class="portfolio-area portfolio-area-v2 pt-75" id="portfolio">
          <div class="container">
              <div class="row justify-content-center">
                  <div class="col-lg-8">
                      <div class="section-title text-center mb-45 wow fadeInUp">
                          <h2>Experiência Profissional</h2>
                          <p>Soluções profissionais para sua empresa</p>
                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-lg-12">
                      <div class="portfolio-filter-button text-center mb-30 wow fadeInDown">
                          <ul class="filter-btn mb-30">
                              <li data-filter="*" class="active">Exibir Todas</li>
                              <li data-filter=".cat-1">WebSite</li>
                              <li data-filter=".cat-2">Design Gráfico</li>
                          </ul>
                      </div>
                  </div>
              </div>
              <div class="row portfolio-grid">
                  <div class="col-lg-4 col-md-6 col-sm-12 cat-1 portfolio-column cat-1">
                      <div class="portfolio-item portfolio-style-two mb-50 wow fadeInUp" data-wow-delay=".1s">
                          <div class="img-holder">
                              <img src="img/portfolio/img-10.jpg" alt="Img">
                              <div class="portfolio-hover">
                                  <div class="hover-content">
                                      <a href="#" class="cat-btn">WebSite</a>
                                      <h4><a href="project-details.html">Acabamentos Ribeiro</a></h4>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>

                  <div class="col-lg-4 col-md-6 col-sm-12 portfolio-column cat-2 cat-1">
                      <div class="portfolio-item portfolio-style-two mb-50 wow fadeInUp" data-wow-delay=".2s">
                          <div class="img-holder">
                              <img src="img/portfolio/img-11.jpg" alt="Img">
                              <div class="portfolio-hover">
                                  <div class="hover-content">
                                      <a href="#" class="cat-btn">WebSite</a>
                                      <h4><a href="project-details.html">Acabamentos Ribeiro</a></h4>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>

                  <div class="col-lg-4 col-md-6 col-sm-12 portfolio-column cat-3 cat-2">
                      <div class="portfolio-item portfolio-style-two mb-50 wow fadeInUp" data-wow-delay=".3s">
                          <div class="img-holder">
                              <img src="img/portfolio/img-12.jpg" alt="Img">
                              <div class="portfolio-hover">
                                  <div class="hover-content">
                                      <a href="#" class="cat-btn">Design Gráfico</a>
                                      <h4><a href="project-details.html">Logo</a></h4>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-12 portfolio-column cat-4 cat-2">
                      <div class="portfolio-item portfolio-style-two mb-50 wow fadeInUp" data-wow-delay=".4s">
                          <div class="img-holder">
                              <img src="img/portfolio/img-13.jpg" alt="Img">
                              <div class="portfolio-hover">
                                  <div class="hover-content">
                                      <a href="#" class="cat-btn">Design Gráfico</a>
                                      <h4><a href="project-details.html">Flyer</a></h4>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-12 portfolio-column cat-5 cat-1">
                      <div class="portfolio-item portfolio-style-two mb-50 wow fadeInUp" data-wow-delay=".5s">
                          <div class="img-holder">
                              <img src="img/portfolio/img-14.jpg" alt="Img">
                              <div class="portfolio-hover">
                                  <div class="hover-content">
                                      <a href="#" class="cat-btn">WebSite</a>
                                      <h4><a href="project-details.html">Acabamentos Ribeiro</a></h4>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-12 portfolio-column cat-4 cat-2">
                      <div class="portfolio-item portfolio-style-two mb-50 wow fadeInUp" data-wow-delay=".6s">
                          <div class="img-holder">
                              <img src="img/portfolio/img-15.jpg" alt="Img">
                              <div class="portfolio-hover">
                                  <div class="hover-content">
                                      <a href="#" class="cat-btn">Design Gráfico</a>
                                      <h4><a href="project-details.html">Arte 3D</a></h4>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section><!--====== End Portfolio Section ======-->
      <!--====== Start Contact Section ======-->
      <section class="contact-area contact-area-v2 pt-80 pb-125" id="contact">
          <div class="container-1350">
              <div class="contact-wrapper pt-70 pb-40">
                  <div class="row">
                      <div class="col-lg-6">
                          <div class="text-wrapper mb-40 wow fadeInLeft">
                              
                              <div class="information-style-two d-flex mb-20">
                                  <div class="icon">
                                      <i class="far fa-envelope-open"></i>
                                  </div>
                                  <div class="info">
                                      <h5 class="blue-dark">Nosso E-mail</h5>
                                      <h4><a href="mailto:support@gmail.com">mindresultar@gmail.com</a></h4>
                                  </div>
                              </div>

                              <div class="information-style-two d-flex mb-20">
                                  <div class="icon">
                                      <i class="far fa-phone"></i>
                                  </div>
                                  <div class="info">
                                      <h5 class="blue-dark">Nosso Telefone</h5>
                                      <h4><a href="tel:+012(345)6789">+55 33 9948-6265</a></h4>
                                  </div>
                              </div>
                              
                              <div class="information-style-two d-flex mb-20">
                                <div class="info">
                                    <h5 class="blue-dark pb-1">Nossa Localização</h5>
                                    <div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=300&amp;height=200&amp;hl=en&amp;q=ResultarMind&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://gachanymph.com/">Gacha Nymph</a></div><style>.mapouter{position:relative;text-align:right;width:100%;height:200px;}.gmap_canvas {overflow:hidden;background:none!important;width:100%;height:200px;}.gmap_iframe {height:200px!important;}</style></div>
                                </div>
                            </div>

                          </div>
                      </div>
                      <div class="col-lg-6">
                          <div class="contact-form mb-40 wow fadeInRight">
                              <h2>Alguma dúvida?
                                  Fale conosco!</h2>
                              <form>
                                  <div class="row">
                                      <div class="col-lg-12">
                                          <div class="form_group">
                                              <input type="text" class="form_control" placeholder="Nome completo" name="name" required>
                                          </div>
                                      </div>
                                      <div class="col-lg-12">
                                          <div class="form_group">
                                              <input type="email" class="form_control" placeholder="E-mail" name="email" required>
                                          </div>
                                      </div>
                                      <div class="col-lg-12">
                                          <div class="form_group">
                                              <select class="wide">
                                                  <option data-display="Assunto">Assunto</option>
                                                  <option value="01">Gerênciamento de Redes Sociais</option>
                                                  <option value="02">Criação de WebSite</option>
                                                  <option value="03">Design Gráfico</option>
                                                  <option value="02">Automação com BOT</option>

                                              </select>
                                          </div>
                                      </div>
                                      <div class="col-lg-12">
                                          <div class="form_group">
                                              <input type="text" class="form_control" placeholder="Número de telefone" name="phone" required>
                                          </div>
                                      </div>
                                      <div class="col-lg-12">
                                          <div class="form_group">
                                              <button class="main-btn arrow-btn">Enviar Mensagem</button>
                                          </div>
                                      </div>
                                  </div>
                              </form>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section><!--====== End Contact Section ======-->
    
      <!--====== Start Video Section ======-->
      <section class="intro-area intro-area-v1 pb-5">
          <div class="container">
              <div class="row">
                  <div class="col-lg-12">
                      <div class="play-content bg_cover text-center wow fadeInUp" style="background-image: url(img/video/img-1.jpg);">
                          <a href="https://www.youtube.com/watch?v=AT6oSIDbGkw" class="video-popup"><i class="fas fa-play"></i></a>
                      </div>
                  </div>
              </div>
          </div>
      </section><!--====== End Video Section ======-->
     

    
      <!--====== Start CTA Section ======-->
      <section class="cta-area cta-area-v2 position-relative z-2 wow fadeInDown pt-5">
          <div class="container">
              <div class="cta-wrapper">
                  <div class="row align-items-center">
                      <div class="col-lg-7">
                          <div class="text-wrapper">
                              <div class="section-title section-title-white">
                                  <h2>Tem algum projeto em mente?</h2>
                              <p>Fale conosco para criar uma solução!</p>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-5">
                          <div class="button-box float-lg-right">
                              <a href="contact.html" class="main-btn bordered-btn btn-white arrow-btn">Fale com nossa equipe</a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section><!--====== End CTA Section ======-->

  </div>


<!--end contact form--> 
        <!--====== back-to-top ======-->
        <a href="#" class="back-to-top" ><i class="far fa-angle-up"></i></a>
        <!--====== Jquery js ======-->
        <script src="vendor/jquery-3.6.0.min.js"></script>
        <!--====== Bootstrap js ======-->
        <script src="vendor/popper/popper.min.js"></script>
        <!--====== Bootstrap js ======-->
        <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
        <!--====== Slick js ======-->
        <script src="vendor/slick/slick.min.js"></script>
        <!--====== Magnific js ======-->
        <script src="vendor/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
        <!--====== Isotope js ======-->
        <script src="vendor/isotope.min.js"></script>
        <!--====== Imagesloaded js ======-->
        <script src="vendor/imagesloaded.min.js"></script>
        <!--====== Counterup js ======-->
        <script src="vendor/jquery.counterup.min.js"></script>
        <!--====== Waypoints js ======-->
        <script src="vendor/jquery.waypoints.js"></script>
        <!--====== Nice-select js ======-->
        <script src="vendor/nice-select/js/jquery.nice-select.min.js"></script>
        <!--====== WOW js ======-->
        <script src="vendor/wow.min.js"></script>
        <!--====== Parallax js ======-->
        <script src="vendor/parallax.min.js"></script>
        <!--====== Main js ======-->
        <script src="js/theme.js"></script>

</body>
@endsection
