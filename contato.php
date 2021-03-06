<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Péricles Cavalcanti</title>

     <!-- CAPCTCHA GOOGLE -->
  <script src='https://www.google.com/recaptcha/api.js'></script>
  <script>
    window.onload = function () {
      var recaptcha = document.forms["formulario"]["checkbox"];
      recaptcha.required = true;
      recaptcha.oninvalid = function (e) {
        // fazer algo, no caso to dando um alert
        alert("Preencha todos os dados!");
      }
    }
  </script>
  <!-- CAPCTCHA GOOGLE -->
   <!-- Bootstrap Core CSS -->
   <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

   <!-- Custom Fonts -->
   <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">    
   <link href="https://fonts.googleapis.com/css2?family=Bodoni+Moda:wght@600;800&display=swap" rel="stylesheet">
   <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">

   <!-- Custom CSS -->
   <link href="css/stylish-portfolio.min.css" rel="stylesheet">
  <script src="https://kit.fontawesome.com/8fb0c43f8c.js" crossorigin="anonymous"></script>

   <!-- Favicon -->
   <link rel="icon" href="img/favicon_pc.png" sizes="16x16" type="image/png">
</head>
<body id="page-top">
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary static-top">
   <div class="container">
    
       <ul class="list-inline mb-0">
         <li class="list-inline-item">
           <a class="social-link  text-white mr-3"  href="https://www.facebook.com/pericles.cavalcanti.oficial" target="_blank">
             <i class="icon-social-facebook"></i>
           </a>
         </li>
         <li class="list-inline-item">
           <a class="social-link text-white mr-3" href="https://www.instagram.com/pericles_cavalcanti/" target="_blank">
             <i class="icon-social-instagram"></i>
           </a>
         </li>
         
         <li class="list-inline-item">
           <a class="social-link text-white mr-3" href="https://www.youtube.com/c/periclescavalcanti47"  target="_blank">
             <i class="icon-social-youtube"></i>
           </a>
         </li>
         
       </ul>
     
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
     </button>
     <div class="collapse navbar-collapse" id="navbarResponsive">
       <ul class="navbar-nav ml-auto">
         <li class="nav-item active">
           <a class="nav-link" href="http://periclescavalcanti.com.br/">Inicio</a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="http://periclescavalcanti.com.br/">Agenda</a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="http://periclescavalcanti.com.br/">Discografia</a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="http://periclescavalcanti.com.br/">Sobre</a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="http://periclescavalcanti.com.br/contato.html">Contato</a>
         </li>
       </ul>
     </div>
   </div>
 </nav>
  <section class="content-section bg-light  text-center" id="contato">
    <div class="container">
     
        <div class="content-section-heading">
          <h3 class="text-secondary mb-3">Péricles Cavalcanti</h3>
          <h2 class="mb-0">Contato</h2>
          </div>
        <div class="text-center mb-3">          
             <p>Envie um e-mail e entraremos em contato com você o mais breve possível!</p>
            </div>
      </div>
    </div>
     <div class="container">
      <form action="formulario/enviar.php" method="POST" id="formulario">
        <div class="form-group text-left">
          <label  for="nome">Nome:</label>
          <input type="text" class="form-control" id="nome" placeholder="Nome completo" name="nome"
            style="border-radius: 50px;" required>
        </div>
        <div class="form-group text-left">
          <label for="email">Email:</label>
          <input type="email" class="form-control" id="email" placeholder="Seu email" name="email"
            style="border-radius: 50px;" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required>
        </div>
        <div class="form-group text-left">
          <label for="assunto">Assunto:</label>
          <input type="text" class="form-control" id="assunto" placeholder="Coloque aqui o assunto" name="assunto"
            style="border-radius: 50px;" required>
        </div>
        <div class="form-group text-left">
          <label for="mensagem">Mensagem:</label>
          <textarea type="text" class="form-control" id="mensagem" placeholder="Descreva o motivo do contato"
            name="mensagem" style="border-radius: 15px;" required></textarea>
        </div>
        <div class="checkbox">
          <label><input type="checkbox" name="robo" id="robo">Não sou um robô</label>
        </div>
        <button type="submit" class="btn btn-default">Enviar mensagem</button>
      </form>
   
  </section>
     <!-- Footer -->
     <footer class="footer text-center">
      <div class="container">
        <ul class="list-inline mb-5">
          <li class="list-inline-item">
            <a class="social-link rounded-circle text-white mr-3" href="https://www.facebook.com/pericles.cavalcanti.oficial" target="_blank">
              <i class="icon-social-facebook"></i>
            </a>
          </li>
          <li class="list-inline-item">
            <a class="social-link rounded-circle text-white mr-3" href="https://www.instagram.com/pericles_cavalcanti/" target="_blank">
              <i class="icon-social-instagram"></i>
            </a>
          </li>
          <li class="list-inline-item">
            <a class="social-link rounded-circle text-white mr-3" href="https://www.youtube.com/c/periclescavalcanti47" target="_blank">
              <i class="icon-social-youtube"></i>
            </a>
          </li>
          
      </ul>
        <p class="text-mute small mb-0">Copyright &copy; Péricles Cavalcanti - DeleDela Produções Artísticas 2021 - <a href="http://sumayatavora.com.br/" target="_blank">Criação de Sites</a>
           </p>
           <p class="text-mute small mb-0">  São paulo - SP - Brasil </p>
      </div>
    </footer>

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded js-scroll-trigger" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/stylish-portfolio.min.js"></script>
        
    <!-- Load Facebook SDK for JavaScript -->
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
    fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>


  <script src="https://apis.google.com/js/platform.js"></script>

  <!-- CAPCTCHA GOOGLE -->
<script src='https://www.google.com/recaptcha/api.js'></script>
   <script>
    window.onload = function() {
    var recaptcha = document.forms["formulario"]["robo"];
    recaptcha.required = true;
    recaptcha.oninvalid = function(e) {
    // fazer algo, no caso to dando um alert
    alert("Preencha todos os dados, inclusive o CAPTCHA.");
      }
   }
   </script>
 <!-- CAPCTCHA GOOGLE -->  
</body>
</html>