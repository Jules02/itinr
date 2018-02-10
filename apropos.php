<!DOCTYPE html>
<html>
    
  <head>
      <meta charset="utf-8" />
      <title>Calcul de parcours</title>
      <link rel=stylesheet href="apropos_style.css" />
      <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,600,700" rel="stylesheet">
  </head>
    
    
  <body>
    <?php
        include('includes/header.php');
    ?>
      
      
      <div class="container">
          
          <h1 class="title">Apprenez-en plus sur Movee</h1>
          <div class="sepa-title"></div>

          <p class="description">Movee est un Lorem ipsum dolor sit amet, consectetur adipiscing elit. In cursus finibus justo sit amet tempor. Praesent volutpat varius arcu ac tincidunt. Fusce nunc dolor, elementum vel mattis facilisis, vestibulum vel sem. Suspendisse nec velit malesuada, sagittis mauris quis, rhoncus purus. Pellentesque et diam a lorem rhoncus faucibus. Nulla non massa et dolor egestas viverra. Praesent dictum purus vel magna convallis, non eleifend tellus malesuada.</p>
          <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In cursus finibus justo sit amet tempor.</p>
          
          <p class="author-title">Movee a été développé par:</p>
          <div class="author-container">
              <div class="author">
                  <div class="author-avatarcontainer"><img src="img/moi.png" alt="Avatar auteur" class="author-avatar"></div><p>Jules Dupont</p>
              </div>
          </div>
          
          <h3 class="subtitle">Comment contribuer à ce projet</h3>
          <div class="sepa-subtitle"></div>
          
          <p class="opensource-toptext">Vous êtes développeur ou simplement curieux ?</p>
          <a class="opensource" href="https://github.ocm"><img src="img/emoji.png" alt="Emoji" class="opensource-emoji">Movee est 100% open-source !<img class="opensource-gitimg" src="img/git.png" alt="Icône Git"></a>
          <p class="opensource-bottomtext">Votre aide est donc la bienvenue dans la section Issues <img src="img/emoji-issues.png" alt="Emoji flaté" class="opensource-bottomtext-emoji"></p>
          
          <p class="fonctionnement-text">Movee est un projet Symfony,<img src="img/symfony.png" alt="Logo Symfony" class="fonctionnement-symfonyimg fonctionnement-img"></p>
          <p class="fonctionnement-text">et le concepteur d'itinéraires fonctionne avec la Google Maps API v3<img src="img/gmaps.png" alt="Logo Google Maps" class="fonctionnement-gmapsimg fonctionnement-img"></p>
          <p class="fonctionnement-questions">Si vous avez des questions à propos de l’utilisation de Symfony ou de l’API Google Maps, n’hésitez surtout pas à <a href="contact.php">me les poser</a></p>
          
          
      </div>
      
      
      <div class="footer-separation"></div>
    <?php
        include('includes/footer.php');
    ?>
  </body>
    
</html>