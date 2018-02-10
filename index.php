<!DOCTYPE html>
<html>
    
  <head>
      <meta charset="utf-8" />
      <title>Calcul de parcours</title>
      <link rel=stylesheet href="index_style.css" />
  </head>
    
    
  <body>
    <div id="loading">
        <img id="loading-image" src="img/loader.gif" alt="Loading..." />
    </div>
      
      
      
      
    <?php
        include('includes/header.php');
    ?>
      
    <div id="map" oncontextmenu="return false"></div>
      
      <div id="mapFilter"></div>
      
  <!-- Zone de texte de la distance en bas -->
      
    <form>    <!-- Contrôles présents sur la carte-->
        <input id="pac-input" class="controls" type="text" placeholder="Entrez votre localisation">
        <button type="button" id="centerMap" name="bouton4" onclick="centerMap()" title="Centrez la carte sur votre localisation"><img src="img/gps.png" alt="Localisez vous"/></button>
          
          
        <div class="map-bottom">
            <div id="textDiv"></div>
            <input type="button" id="deleteAllButton" class="bottomButton" name="bouton2" value="Supprimer tous les points" onclick="deletePoints()">
            <input type="button" id="deleteLastButton" class="bottomButton" name="bouton" value="Supprimer le dernier point" onclick="deleteLastPoint()">
            <input type="button" id="closeLoopButton" class="bottomButton" name="bouton3" value="Fermer la boucle" title="Reliez votre dernier point avec votre point de départ" onclick="fermerBoucle()">
        </div>
        
        <button id="savePath" class="saveButton" name="button4" value="" title="Sauvegardez ou publiez votre parcours">
        <img src='img/share-option%20(5).png' alt='Icône sauvegarder' class="saveImgHover">
        </button>
        <button id="boutonMenuLateral" class="boutonMenuLateralStyle"><img src="img/menu-droite.png" alt="Droite" id="imgBoutonMenuGauche"></button>
        <div id="menuGauche">
            <p id="menuGauche-message">Commencez par tracer votre parcours !</p>
            
            <div id="menuGauche-interieur">
                <div class="menuGauche-partie">
                    <p class="menuGauche-partie-texte">Vitesse Moyenne</p>
                </div>

                <div class="menuGauche-partie">
                    <div class="sepa-container"><div class="menuGauche-sepa"></div></div>
                    <p class="menuGauche-partie-texte">Temps nécessaire</p>
                </div>

                <div class="menuGauche-partie">
                    <div class="sepa-container"><div class="menuGauche-sepa"></div></div>
                    <div class="menuGauche-partie-container">
                        <img src="img/sports-menugauche/velo.png" alt="Icône vélo" class="menuGauche-img">
                        <p class="menuGauche-partie-temps-sport"><span title="Avec une vitesse moyenne de 20 km/h">En vélo,</span> vous prendrez <span id="tempsVelo"></span></p>
                    </div>
                </div>

                <div class="menuGauche-partie">
                    <div class="sepa-container"><div class="menuGauche-sepa"></div></div>
                    <div class="menuGauche-partie-container">
                        <img src="img/sports-menugauche/marche.png" alt="Icône footing" class="menuGauche-img">
                        <p class="menuGauche-partie-temps-sport"><span title="Avec une vitesse moyenne de 13 km/h">Avec une allure de footing,</span> vous prendrez <span id="tempsFooting"></span></p>
                    </div>
                </div>

                <div class="menuGauche-partie">
                    <div class="sepa-container"><div class="menuGauche-sepa"></div></div>
                    <div class="menuGauche-partie-container">
                        <img src="img/sports-menugauche/footing.png" alt="Icône marche" class="menuGauche-img">
                        <p class="menuGauche-partie-temps-sport"><span title="Avec une vitesse moyenne de 6 km/h">En marchant,</span> vous prendrez <span id="tempsMarche"></span></p>
                    </div>
                </div>
            </div>
            
            <!--<button id="boutonMenuLateralFermer" class="boutonMenuLateralStyle"><img src="img/menu-gauche.png" alt="Gauche"></button>-->
        </div>

        <select name="modeSuivi" id="selectModeSuivi">
            <option value="DRIVING" selected disabled=true>Mode de suivi des routes</option>
            <option value="BICYCLING" title="Les itinéraires essayerons au maximum de passer par des pistes cyclables">Vélo</option>
            <option value="WALKING" title="Privilégie les voies piétonnes et les rues avec trottoir">Marche et course à pied</option>
            <option value="DRIVING" title="N'emprunte que le réseau routier">Voiture ou vélo de route</option>
        </select>      
    </form>
      
    <?php
        include('includes/footer.php');
    ?>
      
    <script src="mousetrap.js"></script>
      
    <script src="main.js"></script>
      
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBxvWmkG3pYY6DaFxUzvRiyvttqYjdX15Q&libraries=geometry&libraries=places&callback=initMap">
    </script>
      
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
    <script language="javascript" type="text/javascript">
        $(window).load(function() {
            $('#loading').hide();
        });
    </script>
  </body>
    
</html>