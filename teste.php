<?php


// iniciar a session
if(!isset($_SESSION)) session_start();
// verificar se a variavel existe
if(!isset($_SESSION['usuario']))
   header('Location: index.html');

?>
<!DOCTYPE html>
<html>
<head>
	<title>Que sonho bom</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="UTF-8">
  <!-- Font awesome  -->
  <link rel="stylesheet" href="css/fontawesome.css">
  <!-- Owl carousel -->
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <!-- Bootstrap -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Main css -->
	<link rel="stylesheet" href="css/style.css">
  <!-- Responsive -->
  <link rel="stylesheet" href="css/responsive.css">
  <!-- Default skin -->
  <link rel="stylesheet" href="css/skins/crimson.css">

  <!-- Live Style Switcher - demo only -->
  <link rel="stylesheet" title="crimson" class="alternate-style" href="css/skins/crimson.css" disabled>
  <link rel="stylesheet" title="blue" class="alternate-style" href="css/skins/blue.css" disabled>
  <link rel="stylesheet" title="indigo" class="alternate-style" href="css/skins/indigo.css" disabled>
  <link rel="stylesheet" title="aqua" class="alternate-style" href="css/skins/aqua.css" disabled>
  <link rel="stylesheet" title="black" class="alternate-style" href="css/skins/black.css" disabled>
  <link rel="stylesheet" href="css/styleSwitcher.css">

</head>

<body>

  <!-- Preloader Start  -->
   <div class="preloader">
      <div class="loader">
      </div>
   </div>
  <!-- Preloader End  -->

 
 <!-- Header Section Start -->
 <header class="header fixed-top">
    <div class="container-fluid">
      <nav class="navbar navbar-expand-lg navbar-light">
         <!-- Brand -->
         <a class="navbar-brand" href="#"><img src="img/logo1.png" id="logo" alt="logo"></a>

         <!-- Toggler/collapsibe Button -->
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
           <span class="navbar-toggler-icon"></span>
        </button>

       <!-- Navbar links -->
       <div class="collapse navbar-collapse" id="collapsibleNavbar" >
         <ul class="navbar-nav ml-auto">
            <li class="nav-item">
               <a class="nav-link active" href="#home">Home</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="#about">Sobre</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#features">Recursos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#products">Cardápio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#testimonial">Comentários</a>
            </li>
           
            <li class="nav-item">
              <a class="nav-link"  href="#contact">Contatos</a>
            </li>
 
             <li class="nav-item">
               <a class="nav-link rounded-circle"  href="php/logout.php">logout</a>
             </li>
            


         </ul>
       </div>
      </nav>
    </div>
 </header>
 <!-- Header Section End -->

 <!-- Home Section Start  -->
 <section class="home-section" id="home">
    <div class="bg-shapes">
       <div></div>
       <div></div>
       <div></div>
       <div></div>
       <div></div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="home-content">
                   <h1 class="text-warning">Que Sonho bom</h1>
                   <p>O famoso sonho, mas não um simples sonho, um sonho com recheio de geleias de frutas. Fugindo um pouco dos sabores tradicionais própria. Vem adquirir o seu!</p>
                   <a href="#products" class="btn mybtn1">Saiba mais</a>
                </div>
            </div>
            <div class="col-lg-6 order-first order-lg-last">
               <div class="home-img">
                 <img src="img/logo1.png" class="img-fluid" alt="product">
               </div>
            </div>
        </div>
    </div>
 </section>
 <!-- Home Section End  -->

 <!-- Sobre nós Section Start -->
 <section class="about-section" id="about">
    <div class="container">
       <div class="row">
           <div class="col-lg-6 d-flex">
               <div class="about-img">
                  <img class="img-fluid" id="equipe" src="img/equipe.jpg" alt="product">
               </div>
           </div>
           <div class="col-lg-6 order-first order-lg-last">
              <!-- Section Title Start -->
              <div class="section-title">
                  <h1 class="title">Que sonho bom</h1>
                  <h2 class="subtitle">Sobre nós</h2>
              </div>
              <!-- Section Title End -->
              <div class="about-content">
                 <p>A empresa nasceu com o objetivo de oferecer um produto já conhecido e amado por todos, o sonho, mas com um diferencial: o recheio de geleias de frutas. Com essa inovação, conseguimos nos distanciar dos sabores tradicionais e oferecer aos nossos clientes uma experiência única e saborosa. Nosso principal diferencial competitivo é a variedade de sabores e qualidade dos ingredientes utilizados, garantindo assim a satisfação dos nossos clientes. Estamos funcionando há algum tempo e já conquistamos uma clientela fiel e apaixonada por nossos produtos.</p>
                 <ul class="list-unstyled">
                  
                     <li><i class="fas fa-check"></i> Produtos de alta qualidade</li>
                     <li><i class="fas fa-check"></i> Melhor avaliado entre os consumidores</li>
                     <li><i class="fas fa-check"></i> O preço mais acessível no mercado</li>
                 </ul>
              </div>
           </div>
       </div>
    </div>
 </section>

 <!-- Sobre nós Section End -->

 <!-- Funcionalidades Section Start  -->
 <section class="features-section bg-light" id="features">
    <div class="container">
        <div class="row justify-content-center">
           <div class="col-lg-7">
              <!-- Section Title Start -->
              <div class="section-title">
                  <h1 class="title">QUE SONHO BOM</h1>
                  <h2 class="subtitle">Nossos Recursos</h2>
              </div>
              <!-- Section Title Start End-->
           </div>
        </div>
        <div class="row">
           <!-- Features Item Start-->
            <div class="col-md-6 col-lg-4 d-flex">
               <div class="col-lg-12 features-item">
                  <div class="icon"><i class="fas fa-wallet"></i>
                  </div>
                  <h3>Pagamento online seguro</h3>
                  <p>Oferecemos diversas opções de pagamento online seguras, incluindo cartões de crédito e débito, transferências bancárias e pagamentos via aplicativos de pagamento eletrônico.</p>
               </div>
            </div>
           <!-- Features Item End-->
           <!-- Features Item Start-->
            <div class="col-md-6 col-lg-4 d-flex">
               <div class="col-lg-12 features-item">
                  <div class="icon"><i class="fas fa-cheese"></i></div>
                  <h3>Sabores</h3>
                  <p>Oferecemos uma variedade de sabores de sonhos de doce leite, incluindo tradicional, chocolate, morango e muito mais!
                  </p>
               </div>
            </div>
           <!-- Features Item End-->
           <!-- Features Item Start-->
            <div class="col-md-6 col-lg-4 d-flex">
               <div class="col-lg-12 features-item">
                  <div class="icon"><i class="fas fa-pen"></i></div>
                  <h3>Ingredientes</h3>
                  <p>Usamos apenas ingredientes de qualidade superior para garantir o melhor sabor e textura em nossos sonhos de doce leite e geleia.</p>
               </div>
            </div>
           <!-- Features Item End-->
           <!-- Features Item Start-->
            <div class="col-md-6 col-lg-4 d-flex">
               <div class="col-lg-12 features-item">
                  <div class="icon"><i class="fas fa-utensils"></i></i></div>
                  <h3>Personalização</h3>
                  <p>Oferecemos a possibilidade de personalizar seu sonho de doce leite ou geleia com seus ingredientes preferidos ou adicionando uma mensagem especial.</p>
               </div>
            </div>
           <!-- Features Item End-->
           <!-- Features Item Start-->
            <div class="col-md-6 col-lg-4 d-flex">
               <div class="col-lg-12 features-item">
                  <div class="icon"><i class="fas fa-truck"></i></div>
                  <h3>Entrega</h3>
                  <p>Entregamos nossos sonhos de doce leite e geleia diretamente em sua casa ou em um local de sua escolha, garantindo que cheguem frescos e deliciosos.</p>
               </div>
            </div>
           <!-- Features Item End-->
           <!-- Features Item Start-->
            <div class="col-md-6 col-lg-4 d-flex">
               <div class="col-lg-12 features-item">
                  <div class="icon"><i class="fas fa-comments"></i></div>
                  <h3>Atendimento ao cliente</h3>
                  <p>Nossa equipe de atendimento ao cliente está sempre disponível para responder a suas perguntas e garantir que você tenha uma excelente experiência com nossos sonhos de doce leite e geleia.</p>
               </div>
            </div>
           <!-- Features Item End-->
        </div>
    </div>
 </section>
 <!-- Funcionalidades Section End  -->


 <!-- Produtos Section Start -->
 <section class="products-section" id="products">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                 <!-- Section Title Start -->
                <div class="section-title">
                    <h1 class="title">Nossos Produtos</h1>
                    <h2 class="subtitle">Os valores dos sonhos</h2>
                </div>
                <!-- Section Title End -->
            </div>
        </div>
        <div class="row">
            <div class="owl-carousel" id="product-carousel">
            <!-- Products Item Start -->
            <div class="col-lg-12">
                <div class="products-item">
                    <div class="product-img">
                       <img class="img-fluid" src="img/sonhos/promocao de sonhos de doces.jpg" alt="product">
                       <div class="overlay d-flex">
                         <a href="https://wa.me/5521985027501?text=Olá, Tenho interesse em comprar seu sonho da promoção" class="btn mybtn1">Comprar</a>
                       </div>
                    </div>
                    <div class="product-content">
                       <div class="product-price">
                          <span class="new-price">R$25,00</span>
                   
                       </div>
                       <h5 class="product-name">Promoção sonho bom </h5>
                    </div>
                </div>
            </div>
            <!-- Products Item End -->
            <!-- Products Item Start -->
            <div class="col-lg-12 container-fluid">
                <div class="products-item">
                    <div class="product-img">
                       <img class="img-fluid" src="img/sonhos/sonho-com-geleia.jpg" alt="product">
                       <div class="overlay d-flex">
                         <a href="https://wa.me/5521985027501?text=Olá, Tenho interesse em comprar seu sonho com geleia" class="btn mybtn1">Comprar</a>
                       </div>
                    </div>
                    <div class="product-content container-fluid">
                       <div class="product-price">
                          <span class="new-price">R$12,00</span>
                       
                       </div>
                       <h5 class="product-name">Sonho com geleia</h5>
                    </div>
                </div>
            </div>
            <!-- Products Item End -->
            <!-- Products Item Start -->
            <div class="col-lg-12">
                <div class="products-item">
                    <div class="product-img">
                       <img class="img-fluid" src="img/sonhos/sonho-doce-de-leite.jpg" alt="product">
                       <div class="overlay d-flex">
                         <a href="https://wa.me/5521985027501?text=Olá, Tenho interesse em comprar seu sonho de doce de leite" class="btn mybtn1">Comprar</a>
                       </div>
                    </div>
                    <div class="product-content">
                       <div class="product-price">
                          <span class="new-price">R$10,00</span>
                        
                       </div>
                       <h5 class="product-name">Doce de leite</h5>
                    </div>
                </div>
            </div>
            <!-- Products Item End -->
            <!-- Products Item Start -->
            <div class="col-lg-12">
                <div class="products-item">
                    <div class="product-img">
                       <img class="img-fluid" src="img/sonhos/sonho-nutela.jpg" alt="product">
                       <div class="overlay d-flex">
                         <a href="https://wa.me/5521985027501?text=Olá, Tenho interesse em comprar seu sonho de nutela" class="btn mybtn1">Comprar</a>
                       </div>
                    </div>
                    <div class="product-content">
                       <div class="product-price">
                          <span class="new-price">R$20,00</span>
                         
                       </div>
                       <h5 class="product-name">Sonho de Nutela</h5>
                    </div>
                </div>
            </div>
            <!-- Products Item End -->
            <!-- Products Item Start -->
            <div class="col-lg-12">
                <div class="products-item">
                    <div class="product-img">
                       <img class="img-fluid" src="img/sonhos/Sonho-de-geleia-de-morango.jpg" alt="product">
                       <div class="overlay d-flex">
                         <a href="https://wa.me/5521985027501?text=Olá, Tenho interesse em comprar seu sonho de morango" class="btn mybtn1">Comprar</a>
                       </div>
                    </div>
                    <div class="product-content">
                       <div class="product-price">
                          <span class="new-price">R$15,00</span>
                         
                       </div>
                       <h5 class="product-name">Sonho de morango</h5>
                    </div>
                </div>
            </div>
            <!-- Products Item End -->
          </div>
        </div>
    </div>
 </section>
 <!-- Products Section End -->

 <!-- Testimonial Section Start -->
 <section class="testimonial-section" id="testimonial">
     <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                 <!-- Section Title Start -->
                <div class="section-title">
                    <h1 class="title">Comentários</h1>
                    <h2 class="subtitle">A melhor avaliação de Nova Iguaçu</h2>
                </div>
                <!-- Section Title End -->
            </div>
        </div>
        <div class="row">
           <div class="owl-carousel" id="testimonial-carousel">
            <!-- Testi item start  -->
            <div class="col-lg-12">
                <div class="testi-item">
                    <div class="testi-comment">
                       <p>
                       <i class="fas fa-quote-left"></i> 
                      Ultrapassou expectativas, ótimo preço e Recomendo e muito para todos, meu favorito é o de Nutela! 
                       <i class="fas fa-quote-right"></i> 
                       </p>
                       <ul class="stars list-unstyled">
                           <li><i class="fas fa-star"></i></li>
                           <li><i class="fas fa-star"></i></li>
                           <li><i class="fas fa-star"></i></li>
                           <li><i class="fas fa-star"></i></li>
                           <li><i class="far fa-star"></i></li>
                       </ul>
                    </div>
                    <div class="client-info">
                       <img src="img/testimonial/1.jpg" alt="testimonial">
                       <h5>Virgilio Lagos</h5>
                       
                    </div>
                </div>
            </div>
            <!-- Testi item End  -->
            <!-- Testi item start  -->
            <div class="col-lg-12">
                <div class="testi-item">
                    <div class="testi-comment">
                       <p>
                       <i class="fas fa-quote-left"></i> 
                           Geente... é realmente espetacular!
                           O único problema foi...
                           Conseguir não comer tudo de uma vez!! Bjs
                       <i class="fas fa-quote-right"></i> 
                       </p>
                       <ul class="stars list-unstyled">
                           <li><i class="fas fa-star"></i></li>
                           <li><i class="fas fa-star"></i></li>
                           <li><i class="fas fa-star"></i></li>
                           <li><i class="fas fa-star"></i></li>
                           <li><i class="fas fa-star"></i></li>
                       </ul>
                    </div>
                    <div class="client-info">
                       <img src="img/testimonial/2.jpg" alt="testimonial">
                       <h5>Larissa Torres</h5>
                    </div>
                </div>
            </div>
            <!-- Testi item End  -->
            <!-- Testi item start  -->
            <div class="col-lg-12">
                <div class="testi-item">
                    <div class="testi-comment">
                       <p>
                       <i class="fas fa-quote-left"></i> 
                      Nada melhor que esses deliciosos sonhos para um lanche!
                       <i class="fas fa-quote-right"></i> 
                       </p>
                       <ul class="stars list-unstyled">
                           <li><i class="fas fa-star"></i></li>
                           <li><i class="fas fa-star"></i></li>
                           <li><i class="fas fa-star"></i></li>
                           <li><i class="fas fa-star"></i></li>
                           <li><i class="fas fa-star"></i></li>
                       </ul>
                    </div>
                    <div class="client-info">
                       <img src="img/testimonial/3.jpg" alt="testimonial">
                       <h5>Matheus Marinho</h5>
                      
                    </div>
                </div>
            </div>
            <!-- Testi item End  -->
          </div>
        </div>
     </div>
 </section>
 <!-- Testimonial Section End -->


 <!-- Contact Section Start -->
 <section class="contact-section" id="contact">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
               <!-- Section Title Start -->
                <div class="section-title">
                    <h1 class="title">Contatos</h1>
                    <h2 class="subtitle">Estamos aguardando seu contato.
                    </h2>
                </div>
                <!-- Section Title End -->
            </div>
        </div>
        <!--form action="https://formsubmit.co/youremail@gmail.com"  onsubmit="Salvar()" method="POST"-->
         <form action="https://formsubmit.co/herbert.hpzerro@gmail.com" onsubmit="Salvar()" method="POST">
         <!--Desabilitar captcha-->
         <input type="hidden" name="_captcha" value="false" style="display: none;">
         <!--Desabilitar captcha-->
         <!--não ir para outra pagina-->
         <input type="hidden" name="_next" value="http://localhost/projeto-integrador/teste.php" style="display: nome;">
         <!--não ir para outra pagina-->
         <!--Evitar spawm-->
         <input type="text" name="_honey" style="display:none">
         <!--Evitar spawm-->
        <div class="row">
            <div class="col-md-7">
                   <div class="row">
                      <div class="col-md-6">
                         <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="Seu nome">
                         </div>
                      </div>
                      <div class="col-md-6">
                         <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="Seu e-mail">
                         </div>
                      </div>
                   </div>
                   <div class="row">
                      <div class="col-md-12">
                          <div class="form-group">
                            <input type="text" class="form-control" placeholder="Assunto">
                          </div>
                      </div>
                   </div>
                   <div class="row">
                      <div class="col-md-12">
                          <div class="form-group">
                            <textarea class="form-control" name="msg" placeholder="Mensagem"></textarea>
                          </div>
                      </div>
                   </div>
                   <div class="row">
                      <div class="col-md-12">
                          <button type="submit" class="btn mybtn2">Enviar</button>
                      </div>
                   </div>
                </form>
            </div>
            <div class="col-md-5 order-first order-md-last">
               <!-- Contact Item Start -->
               <div class="contact-item">
                  <div class="icon">
                     <i class="fas fa-map-marker-alt"></i>
                  </div>
                  <h5>Endereço</h5>
                  <p>Rua Paraguaçu n:º 2023, Nova iguaçu- Centro- RJ</p>
               </div>
               <!-- Contact Item End -->
               <!-- Contact Item Start -->
               <div class="contact-item">
                  <div class="icon">
                     <i class="fas fa-envelope"></i>
                  </div>
                  <h5>Email</h5>
                  <p>quesonhobom@gmail.com</p>
               </div>
               <!-- Contact Item End -->
               <!-- Contact Item Start -->
               <div class="contact-item">
                  <div class="icon">
                     <i class="fas fa-phone"></i>
                  </div>
                  <h5>Telefone</h5>
                  <p>(21) 97969-5502</p>
               </div>
               <!-- Contact Item End -->
            </div>
        </div>
    </div>
 </section>
 <!-- Contact Section End -->

 <!-- Footer Section Start -->
 <footer class="footer">
     <div class="container">
        <div class="row justify-content-center">
             <div class="col-lg-6">
                <div class="footer-logo">
                   <a href="#" class="text-warning">Que Sonho Bom</a>
                </div>
                <div class="footer-text">
                  <p>Nossas redes sociais</p>
                </div>
                <div class="footer-social-links">
                   <a href="#"><i class="fab fa-facebook-f"></i></a>
                   <a href="#"><i class="fab fa-twitter"></i></a>
                   <a href="#"><i class="fab fa-instagram"></i></a>
                   <a href="#"><i class="fab fa-whatsapp"></i></a>
                   
                   
                </div>
             </div>
        </div>
     </div>
     <div class="copyright">
        <p>Direitos reservados &copy; Que Sonho Bom 2023. (Projeto Senac)</p>
     </div>
 </footer>
 <!-- Footer Section End -->

<script>
    function Salvar() {
        alert("E-mail enviado com sucesso")
    }
 </script>

<!-- Jquery -->
<script src="js/jquery.min.js"></script>
<!-- Popper -->
<script src="js/popper.min.js"></script>
 <!-- Bootstrap -->
<script src="js/bootstrap.min.js"></script>
<!-- Owl carousel -->
<script src="js/owl.carousel.min.js"></script>
<!-- main -->
<script src="js/main.js"></script>
<!--botao-->
<script src="js/botao.js"></script>

<!-- Live Style Switcher - demo only -->
<script src="js/styleSwitcher.js"></script>
</body>
</html>
