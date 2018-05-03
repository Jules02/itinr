<?php

/* content/chercher.html.twig */
class __TwigTemplate_41ade4ee441cbbbdf21328290705d104719b3208c6f8f5f89f66b4c1b7acc512 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "content/chercher.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a7734ce6e01c742a1e160fbb3a8d213901f6ac775b30dccd0856e097351ffa59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7734ce6e01c742a1e160fbb3a8d213901f6ac775b30dccd0856e097351ffa59->enter($__internal_a7734ce6e01c742a1e160fbb3a8d213901f6ac775b30dccd0856e097351ffa59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "content/chercher.html.twig"));

        $__internal_4618bdc032ee7d4013b7112fb6dce233c8013d353e630ced23b6482c7ccf1e05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4618bdc032ee7d4013b7112fb6dce233c8013d353e630ced23b6482c7ccf1e05->enter($__internal_4618bdc032ee7d4013b7112fb6dce233c8013d353e630ced23b6482c7ccf1e05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "content/chercher.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a7734ce6e01c742a1e160fbb3a8d213901f6ac775b30dccd0856e097351ffa59->leave($__internal_a7734ce6e01c742a1e160fbb3a8d213901f6ac775b30dccd0856e097351ffa59_prof);

        
        $__internal_4618bdc032ee7d4013b7112fb6dce233c8013d353e630ced23b6482c7ccf1e05->leave($__internal_4618bdc032ee7d4013b7112fb6dce233c8013d353e630ced23b6482c7ccf1e05_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5a7fb46779c388799589c9ed6df9e4d01d857dc5b6aca0f3c7fccd5b920c9421 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a7fb46779c388799589c9ed6df9e4d01d857dc5b6aca0f3c7fccd5b920c9421->enter($__internal_5a7fb46779c388799589c9ed6df9e4d01d857dc5b6aca0f3c7fccd5b920c9421_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ec3b812a98be21a23ba07350a46699699876d28d9b782bd1032de690269bad3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec3b812a98be21a23ba07350a46699699876d28d9b782bd1032de690269bad3e->enter($__internal_ec3b812a98be21a23ba07350a46699699876d28d9b782bd1032de690269bad3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Chercher";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_ec3b812a98be21a23ba07350a46699699876d28d9b782bd1032de690269bad3e->leave($__internal_ec3b812a98be21a23ba07350a46699699876d28d9b782bd1032de690269bad3e_prof);

        
        $__internal_5a7fb46779c388799589c9ed6df9e4d01d857dc5b6aca0f3c7fccd5b920c9421->leave($__internal_5a7fb46779c388799589c9ed6df9e4d01d857dc5b6aca0f3c7fccd5b920c9421_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a89dd234f84a15287c7ec33e60a366b8fae2e83f3c6ca4f6eeb110c785f97f81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a89dd234f84a15287c7ec33e60a366b8fae2e83f3c6ca4f6eeb110c785f97f81->enter($__internal_a89dd234f84a15287c7ec33e60a366b8fae2e83f3c6ca4f6eeb110c785f97f81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_d7273da8f3f70fd27f94e12f1e2b50bab448385c599088567a936ec18715b7e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7273da8f3f70fd27f94e12f1e2b50bab448385c599088567a936ec18715b7e4->enter($__internal_d7273da8f3f70fd27f94e12f1e2b50bab448385c599088567a936ec18715b7e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/concepteur.css"), "html", null, true);
        
        $__internal_d7273da8f3f70fd27f94e12f1e2b50bab448385c599088567a936ec18715b7e4->leave($__internal_d7273da8f3f70fd27f94e12f1e2b50bab448385c599088567a936ec18715b7e4_prof);

        
        $__internal_a89dd234f84a15287c7ec33e60a366b8fae2e83f3c6ca4f6eeb110c785f97f81->leave($__internal_a89dd234f84a15287c7ec33e60a366b8fae2e83f3c6ca4f6eeb110c785f97f81_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_88602fa2b93bf1472d329ba356a485820bbdbcee2c7d24e72b34d4673a56b966 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88602fa2b93bf1472d329ba356a485820bbdbcee2c7d24e72b34d4673a56b966->enter($__internal_88602fa2b93bf1472d329ba356a485820bbdbcee2c7d24e72b34d4673a56b966_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6be9dc473870ff782e07ca5eac028dac3b3d9e08d9bf949f845d81de2372edb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6be9dc473870ff782e07ca5eac028dac3b3d9e08d9bf949f845d81de2372edb0->enter($__internal_6be9dc473870ff782e07ca5eac028dac3b3d9e08d9bf949f845d81de2372edb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<div id=\"loading\">
    <img id=\"loading-image\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/loader.gif"), "html", null, true);
        echo "\" alt=\"Loading...\" />
</div>

<div id=\"map\" oncontextmenu=\"return false\"></div>

<div id=\"textDiv\" class=\"textDivDisplay\"></div>
<div id=\"petitTextDiv\"></div>

<div id=\"mapFilter\" class=\"mapFilter\"></div>

    <button id=\"boutonMenuLateral\" class=\"boutonMenuLateralStyle\"><img src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/menu-droite.png"), "html", null, true);
        echo "\" alt=\"Droite\" id=\"imgBoutonMenuGauche\"></button>

    <div id=\"menuGauche\">
        <p id=\"menuGauche-message\">Commencez par tracer votre parcours !</p>

        <div id=\"menuGauche-interieur\">
            <div class=\"menuGauche-partie\">
                <p class=\"menuGauche-partie-texte\">Vitesse Moyenne</p>
            </div>

            <div class=\"menuGauche-partie\">
                <div class=\"sepa-container\"><div class=\"menuGauche-sepa\"></div></div>
                <p class=\"menuGauche-partie-texte\">Temps nécessaire</p>
            </div>

            <div class=\"menuGauche-partie\">
                <div class=\"sepa-container\"><div class=\"menuGauche-sepa\"></div></div>
                <div class=\"menuGauche-partie-container\">
                    <img src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/velo.png"), "html", null, true);
        echo "\" alt=\"Icône vélo\" class=\"menuGauche-img\">
                    <p class=\"menuGauche-partie-temps-sport\"><span title=\"Avec une vitesse moyenne de 20 km/h\">En vélo,</span> vous prendrez <span id=\"tempsVelo\"></span></p>
                </div>
            </div>

            <div class=\"menuGauche-partie\">
                <div class=\"sepa-container\"><div class=\"menuGauche-sepa\"></div></div>
                <div class=\"menuGauche-partie-container\">
                    <img src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/footing.png"), "html", null, true);
        echo "\" alt=\"Icône footing\" class=\"menuGauche-img\">
                    <p class=\"menuGauche-partie-temps-sport\"><span title=\"Avec une vitesse moyenne de 13 km/h\">Avec une allure de footing,</span> vous prendrez <span id=\"tempsFooting\"></span></p>
                </div>
            </div>

            <div class=\"menuGauche-partie\">
                <div class=\"sepa-container\"><div class=\"menuGauche-sepa\"></div></div>
                <div class=\"menuGauche-partie-container\">
                    <img src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/marche.png"), "html", null, true);
        echo "\" alt=\"Icône marche\" class=\"menuGauche-img\">
                    <p class=\"menuGauche-partie-temps-sport\"><span title=\"Avec une vitesse moyenne de 6 km/h\">En marchant,</span> vous prendrez <span id=\"tempsMarche\"></span></p>
                </div>
            </div>
        </div>

        <!--<button id=\"boutonMenuLateralFermer\" class=\"boutonMenuLateralStyle\"><img src=\"img/menu-gauche.png\" alt=\"Gauche\"></button>-->
    </div>
    <table>
        <thead>
        <tr>
            <th>Titre</th>
            <th>Type de sport</th>
            <th>Description</th>
            <th>Image</th>
            <th>Note</th>
            <th>Autre filtre</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>";
        // line 74
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new Twig_Error_Runtime('Variable "path" does not exist.', 74, $this->getSourceContext()); })()), "titre", array()), "html", null, true);
        echo "</td>
            <td>";
        // line 75
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new Twig_Error_Runtime('Variable "path" does not exist.', 75, $this->getSourceContext()); })()), "typeSport", array()), "html", null, true);
        echo "</td>
            <td>";
        // line 76
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new Twig_Error_Runtime('Variable "path" does not exist.', 76, $this->getSourceContext()); })()), "description", array()), "html", null, true);
        echo "</td>
            <td>";
        // line 77
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new Twig_Error_Runtime('Variable "path" does not exist.', 77, $this->getSourceContext()); })()), "image", array()), "html", null, true);
        echo "</td>
            <td>";
        // line 78
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new Twig_Error_Runtime('Variable "path" does not exist.', 78, $this->getSourceContext()); })()), "note", array()), "html", null, true);
        echo "</td>
            <td>";
        // line 79
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new Twig_Error_Runtime('Variable "path" does not exist.', 79, $this->getSourceContext()); })()), "autreFiltre", array()), "html", null, true);
        echo "</td>
        </tr>
        </tbody>
    </table>
";
        
        $__internal_6be9dc473870ff782e07ca5eac028dac3b3d9e08d9bf949f845d81de2372edb0->leave($__internal_6be9dc473870ff782e07ca5eac028dac3b3d9e08d9bf949f845d81de2372edb0_prof);

        
        $__internal_88602fa2b93bf1472d329ba356a485820bbdbcee2c7d24e72b34d4673a56b966->leave($__internal_88602fa2b93bf1472d329ba356a485820bbdbcee2c7d24e72b34d4673a56b966_prof);

    }

    // line 85
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0b63589fa79c63753eefcbd8505fa0e460f36a370267c58bd5f9ff4f28b348a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b63589fa79c63753eefcbd8505fa0e460f36a370267c58bd5f9ff4f28b348a0->enter($__internal_0b63589fa79c63753eefcbd8505fa0e460f36a370267c58bd5f9ff4f28b348a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_75d81a2bb3d858b4783ca0f14ebfb45863f2fe5886139b73d01ba8ef2e10084a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75d81a2bb3d858b4783ca0f14ebfb45863f2fe5886139b73d01ba8ef2e10084a->enter($__internal_75d81a2bb3d858b4783ca0f14ebfb45863f2fe5886139b73d01ba8ef2e10084a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 86
        echo "    ";
        // line 87
        echo "    <script src=\" ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/mousetrap.js"), "html", null, true);
        echo " \"></script>
    <script type=\"text/javascript\" src=\"http://code.jquery.com/jquery-latest.js\"></script>
    <script language=\"javascript\" type=\"text/javascript\">
        \$(window).load(function() {
            \$('#loading').hide();
        });
    </script>

    <script>
        var globalPoly;

        var map;
        var geoPos;

        var markerStart = \"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/marker.png"), "html", null, true);
        echo "\";   //icone de marqueur de début
        var markerEnd = \"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/empty.png"), "html", null, true);
        echo "\";

        var vitesseVelo = 20;
        var vitesseFooting = 13;
        var vitesseMarche = 6;




        function initMap() {
            var mapDiv = document.getElementById(\"map\");
            //je récupére mon element avec l'id map
            var windowHeight = window.innerHeight;
            //je prend la hauteur de la fenêtre
            var tailleVoulu = (windowHeight - 80) + 'px';
            //je calcule pour que ma map fasse hauteur de la fenêtre moins le header
            mapDiv.style.height = tailleVoulu;
            //c'est comme si je fais en CSS: 'height: tailleVoulu;'

            //definir taille du menu gauche
            var menuGauche = document.getElementById('menuGauche');
            menuGauche.style.height = tailleVoulu;

            //on veut centrer la carte sur notre position si la geolocalisation est activée
            /*if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function(position){   //recupère notre position
                    geoPos = {
                        lat: position.coords.latitude,
                        lng: position.coords.longitude
                    };

                    map.setCenter(geoPos);   //centre la carte

                }, function() {
                    handleLocationError(true, infoWindow, map.getCenter());
                });

            } else {
                // Le navigateur ne supporte pas la géolocalisation ou elle a été refusé
                handleLocationError(false, infoWindow, map.getCenter());
            };*/


            var ancienPath ='";
        // line 145
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new Twig_Error_Runtime('Variable "path" does not exist.', 145, $this->getSourceContext()); })()), "path", array()), "html", null, true);
        echo "';

            var ancienPathDesencode = new google.maps.geometry.encoding.decodePath(ancienPath);

            map = new google.maps.Map(document.getElementById('map'), {    //recupére la div #map et la transforme en objet map, stocké dans la var map
                zoom: 14  //Définie le zoom par défaut
            });

            globalPoly = new google.maps.Polyline({   //créé déjà la polyline
                path: ancienPathDesencode,
                strokeColor: '#3BA14C',
                strokeOpacity: 1.0,
                strokeWeight: 3
            });
            globalPoly.setMap(map);   //on attache l'objet polyline à notre map

            var premierMarker = ancienPathDesencode[0];
            firstMarker = new google.maps.Marker({
                position: premierMarker,
                title: 'Premier marqueur',
                map: map,
                icon: markerStart
            });

            var dernierMarker = ancienPathDesencode[ancienPathDesencode.length - 1];
            marker = new google.maps.Marker({
                position: dernierMarker,
                title: 'Dernier marqueur',
                map: map,
                icon: markerEnd
            });

            google.maps.event.addListener( map, 'maptypeid_changed', function(){
                var mapType = map.getMapTypeId();

                if (mapType == 'hybrid'){
                    globalPoly.setOptions({strokeColor: '#FFFFFF'});
                    firstMarker.setOptions({icon: \"";
        // line 182
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/marker_white.png"), "html", null, true);
        echo "\"});
                } else {
                    globalPoly.setOptions({strokeColor: '#3BA14C'});
                    firstMarker.setOptions({icon: \"";
        // line 185
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/marker.png"), "html", null, true);
        echo "\"});
                }
            });

            var boutonMenuLateral = document.getElementById('boutonMenuLateral');
            map.controls[google.maps.ControlPosition.LEFT].push(boutonMenuLateral);

            updateRouteLength();

            var monPath = globalPoly.getPath();

            var pathArray = monPath.getArray();

            zoomToObject(pathArray);
        }
        /************* FIN INITMAP *************/




        function zoomToObject(pathArray){
            var bounds = new google.maps.LatLngBounds();
            var points = pathArray;
            for (var n = 0; n < points.length ; n++){
                bounds.extend(points[n]);
            }
            map.fitBounds(bounds);
        }

        function updateRouteLength(){
            var monPath = globalPoly.getPath();

            var pathArray = monPath.getArray();

            var distance = google.maps.geometry.spherical.computeLength(pathArray);   //calcule la distance du parcours en comptant tout les points
            distanceArrondie = Math.round(distance);    //arrondi la distance à l'unité près
            distanceKmFloat = distanceArrondie/1000;
            distanceKm = Math.round(distanceKmFloat*10)/10;


            var div = document.getElementById(\"textDiv\");    //recupere la div textDiv
            var petiteDiv = document.getElementById(\"petitTextDiv\");
            if ((distanceArrondie == undefined) || (distanceArrondie == 0)){   //si aucun parcours n'est présent ou s'il n'y a qu'un marqueur
                div.textContent = \"Il n'y a qu'un seul marqueur\";
            } else {
                div.textContent = distanceKm + \" kilomètres\" ;
                //on affiche la distance arrondie et au km dans la div textDiv
                petiteDiv.textContent = distanceArrondie + \" mètres\"

                var menuGaucheInterieur = document.getElementById(\"menuGauche-interieur\");
                menuGaucheInterieur.style.display = \"block\";

                var menuGaucheMessage = document.getElementById(\"menuGauche-message\");
                menuGaucheMessage.style.display = \"none\";
            }

            updateTempsGlobal(distanceKmFloat);
        }

        function getDecimal(n) {
            return (n - Math.floor(n));
        }

        function getPartieDecimale(n){
            return (Math.round((Math.round(100 * getDecimal(n))/100) * 100 * 60 / 100));
        }

        function updateTempsGlobal(distanceKmFloat){
            //velo
            updateTempsNecessaire(distanceKmFloat, vitesseVelo, \"tempsVelo\");

            //footing
            updateTempsNecessaire(distanceKmFloat, vitesseFooting, \"tempsFooting\");

            //marche
            updateTempsNecessaire(distanceKmFloat, vitesseMarche, \"tempsMarche\");
        }

        function updateTempsNecessaire(distanceKmFloat, vitesseMoyenne, sport){
            var tempsHTML = document.getElementById(sport); //on récup l'élément p tempsVelo

            var temps = distanceKmFloat / vitesseMoyenne; // t = d / v      on sort le temps qu'il faut en heures (mais on a 1.5 heures au lieu de 1h30)
            var tempsEnMinutesAvecSecondes = Math.round(100 * (temps * 60))/100;  //on sort 52.31 (52 minutes 31 secondes)
            var secondesTemps = getPartieDecimale(tempsEnMinutesAvecSecondes);

            var tempsEnMinutes = Math.round(tempsEnMinutesAvecSecondes);   //on sort juste 52

            if(tempsEnMinutes === 1){
                var minuteOrthographe = \" minute\";
            }else{
                var minuteOrthographe = \" minutes\";
            }

            if(secondesTemps === 1){
                var secondeOrthographe = \" seconde\";
            }else{
                var secondeOrthographe = \" secondes\";
            }


            if(tempsEnMinutes < 1){
                tempsHTML.textContent = secondesTemps + secondeOrthographe;
                tempsHTML.title = \"\";
            }else{
                //si il y a plus de 60 minutes on affiche en heures et minutes
                if(tempsEnMinutes < 60){
                    tempsHTML.textContent = tempsEnMinutes + minuteOrthographe;
                    tempsHTML.title = \"Et \" + secondesTemps + secondeOrthographe;
                }else{
                    var tempsEnHeuresFloat = tempsEnMinutes / 60;
                    var minutesDuTempsPourHeures = getPartieDecimale(tempsEnHeuresFloat); //on recup les minutes
                    var tempsEnHeures = Math.round(tempsEnHeuresFloat);

                    if(minutesDuTempsPourHeures === 1){
                        var minuteOrthographe = \" minute\";
                    }else{
                        var minuteOrthographe = \" minutes\";
                    }

                    if(tempsEnHeures === 1){
                        var heureOrthographe = \" heure\";
                    }else{
                        var heureOrthographe = \" heures\";
                    }

                    tempsHTML.textContent = tempsEnHeures + heureOrthographe + \" et \" + minutesDuTempsPourHeures + minuteOrthographe;  //on affiche
                }
            }

        }

        var menuGaucheBouton = document.getElementById('boutonMenuLateral');
        var menuGauche = document.getElementById('menuGauche');
        var mapFilter = document.getElementById('mapFilter');

        menuGaucheBouton.onclick = function() {
            menuGauche.style.display = \"block\";
            mapFilter.style.display = \"block\";
        };

        mapFilter.onclick = function() {
            menuGauche.style.display = \"none\";
            mapFilter.style.display = \"none\";
        };


        /***** RACCOURCIS CLAVIER ********/
        Mousetrap.bind(['ctrl+z'], function() {
            deleteLastPoint();
        });




        //zoom/dezoom avec Ctrl Alt +/- ou Ctrl +/-
        var zoom = 14;

        Mousetrap.bind(['ctrl+alt++', 'ctrl++'], function() {
            if(zoom <= 23){
                zoom++;
                map.setZoom(zoom);
            }else{
                alert('Impossible de zoomer davantage');
            }
        });

        Mousetrap.bind(['ctrl+alt+-', 'ctrl+-'], function() {
            if(zoom >= 1){
                zoom--;
                map.setZoom(zoom);
            }else{
                alert('Impossible de dézoomer davantage');
            }
        });
    </script>
    <script async defer
            src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBxvWmkG3pYY6DaFxUzvRiyvttqYjdX15Q&libraries=geometry&callback=initMap\">
    </script>
";
        
        $__internal_75d81a2bb3d858b4783ca0f14ebfb45863f2fe5886139b73d01ba8ef2e10084a->leave($__internal_75d81a2bb3d858b4783ca0f14ebfb45863f2fe5886139b73d01ba8ef2e10084a_prof);

        
        $__internal_0b63589fa79c63753eefcbd8505fa0e460f36a370267c58bd5f9ff4f28b348a0->leave($__internal_0b63589fa79c63753eefcbd8505fa0e460f36a370267c58bd5f9ff4f28b348a0_prof);

    }

    public function getTemplateName()
    {
        return "content/chercher.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  332 => 185,  326 => 182,  286 => 145,  240 => 102,  236 => 101,  218 => 87,  216 => 86,  207 => 85,  192 => 79,  188 => 78,  184 => 77,  180 => 76,  176 => 75,  172 => 74,  148 => 53,  137 => 45,  126 => 37,  105 => 19,  92 => 9,  89 => 8,  80 => 7,  62 => 5,  43 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Chercher{{ parent() }}{% endblock %}

{% block stylesheets %}{{ asset('build/concepteur.css') }}{% endblock %}

{% block body %}
<div id=\"loading\">
    <img id=\"loading-image\" src=\"{{ asset('images/loader.gif') }}\" alt=\"Loading...\" />
</div>

<div id=\"map\" oncontextmenu=\"return false\"></div>

<div id=\"textDiv\" class=\"textDivDisplay\"></div>
<div id=\"petitTextDiv\"></div>

<div id=\"mapFilter\" class=\"mapFilter\"></div>

    <button id=\"boutonMenuLateral\" class=\"boutonMenuLateralStyle\"><img src=\"{{ asset('images/menu-droite.png') }}\" alt=\"Droite\" id=\"imgBoutonMenuGauche\"></button>

    <div id=\"menuGauche\">
        <p id=\"menuGauche-message\">Commencez par tracer votre parcours !</p>

        <div id=\"menuGauche-interieur\">
            <div class=\"menuGauche-partie\">
                <p class=\"menuGauche-partie-texte\">Vitesse Moyenne</p>
            </div>

            <div class=\"menuGauche-partie\">
                <div class=\"sepa-container\"><div class=\"menuGauche-sepa\"></div></div>
                <p class=\"menuGauche-partie-texte\">Temps nécessaire</p>
            </div>

            <div class=\"menuGauche-partie\">
                <div class=\"sepa-container\"><div class=\"menuGauche-sepa\"></div></div>
                <div class=\"menuGauche-partie-container\">
                    <img src=\"{{ asset('images/velo.png') }}\" alt=\"Icône vélo\" class=\"menuGauche-img\">
                    <p class=\"menuGauche-partie-temps-sport\"><span title=\"Avec une vitesse moyenne de 20 km/h\">En vélo,</span> vous prendrez <span id=\"tempsVelo\"></span></p>
                </div>
            </div>

            <div class=\"menuGauche-partie\">
                <div class=\"sepa-container\"><div class=\"menuGauche-sepa\"></div></div>
                <div class=\"menuGauche-partie-container\">
                    <img src=\"{{ asset('images/footing.png') }}\" alt=\"Icône footing\" class=\"menuGauche-img\">
                    <p class=\"menuGauche-partie-temps-sport\"><span title=\"Avec une vitesse moyenne de 13 km/h\">Avec une allure de footing,</span> vous prendrez <span id=\"tempsFooting\"></span></p>
                </div>
            </div>

            <div class=\"menuGauche-partie\">
                <div class=\"sepa-container\"><div class=\"menuGauche-sepa\"></div></div>
                <div class=\"menuGauche-partie-container\">
                    <img src=\"{{ asset('images/marche.png') }}\" alt=\"Icône marche\" class=\"menuGauche-img\">
                    <p class=\"menuGauche-partie-temps-sport\"><span title=\"Avec une vitesse moyenne de 6 km/h\">En marchant,</span> vous prendrez <span id=\"tempsMarche\"></span></p>
                </div>
            </div>
        </div>

        <!--<button id=\"boutonMenuLateralFermer\" class=\"boutonMenuLateralStyle\"><img src=\"img/menu-gauche.png\" alt=\"Gauche\"></button>-->
    </div>
    <table>
        <thead>
        <tr>
            <th>Titre</th>
            <th>Type de sport</th>
            <th>Description</th>
            <th>Image</th>
            <th>Note</th>
            <th>Autre filtre</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>{{ path.titre }}</td>
            <td>{{ path.typeSport }}</td>
            <td>{{ path.description }}</td>
            <td>{{ path.image }}</td>
            <td>{{ path.note }}</td>
            <td>{{ path.autreFiltre }}</td>
        </tr>
        </tbody>
    </table>
{% endblock %}

{% block javascripts %}
    {#<script src=\" {{ asset('build/js/main.js') }} \"></script>#}
    <script src=\" {{ asset('build/mousetrap.js') }} \"></script>
    <script type=\"text/javascript\" src=\"http://code.jquery.com/jquery-latest.js\"></script>
    <script language=\"javascript\" type=\"text/javascript\">
        \$(window).load(function() {
            \$('#loading').hide();
        });
    </script>

    <script>
        var globalPoly;

        var map;
        var geoPos;

        var markerStart = \"{{ asset('images/marker.png') }}\";   //icone de marqueur de début
        var markerEnd = \"{{ asset('images/empty.png') }}\";

        var vitesseVelo = 20;
        var vitesseFooting = 13;
        var vitesseMarche = 6;




        function initMap() {
            var mapDiv = document.getElementById(\"map\");
            //je récupére mon element avec l'id map
            var windowHeight = window.innerHeight;
            //je prend la hauteur de la fenêtre
            var tailleVoulu = (windowHeight - 80) + 'px';
            //je calcule pour que ma map fasse hauteur de la fenêtre moins le header
            mapDiv.style.height = tailleVoulu;
            //c'est comme si je fais en CSS: 'height: tailleVoulu;'

            //definir taille du menu gauche
            var menuGauche = document.getElementById('menuGauche');
            menuGauche.style.height = tailleVoulu;

            //on veut centrer la carte sur notre position si la geolocalisation est activée
            /*if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function(position){   //recupère notre position
                    geoPos = {
                        lat: position.coords.latitude,
                        lng: position.coords.longitude
                    };

                    map.setCenter(geoPos);   //centre la carte

                }, function() {
                    handleLocationError(true, infoWindow, map.getCenter());
                });

            } else {
                // Le navigateur ne supporte pas la géolocalisation ou elle a été refusé
                handleLocationError(false, infoWindow, map.getCenter());
            };*/


            var ancienPath ='{{ path.path }}';

            var ancienPathDesencode = new google.maps.geometry.encoding.decodePath(ancienPath);

            map = new google.maps.Map(document.getElementById('map'), {    //recupére la div #map et la transforme en objet map, stocké dans la var map
                zoom: 14  //Définie le zoom par défaut
            });

            globalPoly = new google.maps.Polyline({   //créé déjà la polyline
                path: ancienPathDesencode,
                strokeColor: '#3BA14C',
                strokeOpacity: 1.0,
                strokeWeight: 3
            });
            globalPoly.setMap(map);   //on attache l'objet polyline à notre map

            var premierMarker = ancienPathDesencode[0];
            firstMarker = new google.maps.Marker({
                position: premierMarker,
                title: 'Premier marqueur',
                map: map,
                icon: markerStart
            });

            var dernierMarker = ancienPathDesencode[ancienPathDesencode.length - 1];
            marker = new google.maps.Marker({
                position: dernierMarker,
                title: 'Dernier marqueur',
                map: map,
                icon: markerEnd
            });

            google.maps.event.addListener( map, 'maptypeid_changed', function(){
                var mapType = map.getMapTypeId();

                if (mapType == 'hybrid'){
                    globalPoly.setOptions({strokeColor: '#FFFFFF'});
                    firstMarker.setOptions({icon: \"{{ asset('images/marker_white.png') }}\"});
                } else {
                    globalPoly.setOptions({strokeColor: '#3BA14C'});
                    firstMarker.setOptions({icon: \"{{ asset('images/marker.png') }}\"});
                }
            });

            var boutonMenuLateral = document.getElementById('boutonMenuLateral');
            map.controls[google.maps.ControlPosition.LEFT].push(boutonMenuLateral);

            updateRouteLength();

            var monPath = globalPoly.getPath();

            var pathArray = monPath.getArray();

            zoomToObject(pathArray);
        }
        /************* FIN INITMAP *************/




        function zoomToObject(pathArray){
            var bounds = new google.maps.LatLngBounds();
            var points = pathArray;
            for (var n = 0; n < points.length ; n++){
                bounds.extend(points[n]);
            }
            map.fitBounds(bounds);
        }

        function updateRouteLength(){
            var monPath = globalPoly.getPath();

            var pathArray = monPath.getArray();

            var distance = google.maps.geometry.spherical.computeLength(pathArray);   //calcule la distance du parcours en comptant tout les points
            distanceArrondie = Math.round(distance);    //arrondi la distance à l'unité près
            distanceKmFloat = distanceArrondie/1000;
            distanceKm = Math.round(distanceKmFloat*10)/10;


            var div = document.getElementById(\"textDiv\");    //recupere la div textDiv
            var petiteDiv = document.getElementById(\"petitTextDiv\");
            if ((distanceArrondie == undefined) || (distanceArrondie == 0)){   //si aucun parcours n'est présent ou s'il n'y a qu'un marqueur
                div.textContent = \"Il n'y a qu'un seul marqueur\";
            } else {
                div.textContent = distanceKm + \" kilomètres\" ;
                //on affiche la distance arrondie et au km dans la div textDiv
                petiteDiv.textContent = distanceArrondie + \" mètres\"

                var menuGaucheInterieur = document.getElementById(\"menuGauche-interieur\");
                menuGaucheInterieur.style.display = \"block\";

                var menuGaucheMessage = document.getElementById(\"menuGauche-message\");
                menuGaucheMessage.style.display = \"none\";
            }

            updateTempsGlobal(distanceKmFloat);
        }

        function getDecimal(n) {
            return (n - Math.floor(n));
        }

        function getPartieDecimale(n){
            return (Math.round((Math.round(100 * getDecimal(n))/100) * 100 * 60 / 100));
        }

        function updateTempsGlobal(distanceKmFloat){
            //velo
            updateTempsNecessaire(distanceKmFloat, vitesseVelo, \"tempsVelo\");

            //footing
            updateTempsNecessaire(distanceKmFloat, vitesseFooting, \"tempsFooting\");

            //marche
            updateTempsNecessaire(distanceKmFloat, vitesseMarche, \"tempsMarche\");
        }

        function updateTempsNecessaire(distanceKmFloat, vitesseMoyenne, sport){
            var tempsHTML = document.getElementById(sport); //on récup l'élément p tempsVelo

            var temps = distanceKmFloat / vitesseMoyenne; // t = d / v      on sort le temps qu'il faut en heures (mais on a 1.5 heures au lieu de 1h30)
            var tempsEnMinutesAvecSecondes = Math.round(100 * (temps * 60))/100;  //on sort 52.31 (52 minutes 31 secondes)
            var secondesTemps = getPartieDecimale(tempsEnMinutesAvecSecondes);

            var tempsEnMinutes = Math.round(tempsEnMinutesAvecSecondes);   //on sort juste 52

            if(tempsEnMinutes === 1){
                var minuteOrthographe = \" minute\";
            }else{
                var minuteOrthographe = \" minutes\";
            }

            if(secondesTemps === 1){
                var secondeOrthographe = \" seconde\";
            }else{
                var secondeOrthographe = \" secondes\";
            }


            if(tempsEnMinutes < 1){
                tempsHTML.textContent = secondesTemps + secondeOrthographe;
                tempsHTML.title = \"\";
            }else{
                //si il y a plus de 60 minutes on affiche en heures et minutes
                if(tempsEnMinutes < 60){
                    tempsHTML.textContent = tempsEnMinutes + minuteOrthographe;
                    tempsHTML.title = \"Et \" + secondesTemps + secondeOrthographe;
                }else{
                    var tempsEnHeuresFloat = tempsEnMinutes / 60;
                    var minutesDuTempsPourHeures = getPartieDecimale(tempsEnHeuresFloat); //on recup les minutes
                    var tempsEnHeures = Math.round(tempsEnHeuresFloat);

                    if(minutesDuTempsPourHeures === 1){
                        var minuteOrthographe = \" minute\";
                    }else{
                        var minuteOrthographe = \" minutes\";
                    }

                    if(tempsEnHeures === 1){
                        var heureOrthographe = \" heure\";
                    }else{
                        var heureOrthographe = \" heures\";
                    }

                    tempsHTML.textContent = tempsEnHeures + heureOrthographe + \" et \" + minutesDuTempsPourHeures + minuteOrthographe;  //on affiche
                }
            }

        }

        var menuGaucheBouton = document.getElementById('boutonMenuLateral');
        var menuGauche = document.getElementById('menuGauche');
        var mapFilter = document.getElementById('mapFilter');

        menuGaucheBouton.onclick = function() {
            menuGauche.style.display = \"block\";
            mapFilter.style.display = \"block\";
        };

        mapFilter.onclick = function() {
            menuGauche.style.display = \"none\";
            mapFilter.style.display = \"none\";
        };


        /***** RACCOURCIS CLAVIER ********/
        Mousetrap.bind(['ctrl+z'], function() {
            deleteLastPoint();
        });




        //zoom/dezoom avec Ctrl Alt +/- ou Ctrl +/-
        var zoom = 14;

        Mousetrap.bind(['ctrl+alt++', 'ctrl++'], function() {
            if(zoom <= 23){
                zoom++;
                map.setZoom(zoom);
            }else{
                alert('Impossible de zoomer davantage');
            }
        });

        Mousetrap.bind(['ctrl+alt+-', 'ctrl+-'], function() {
            if(zoom >= 1){
                zoom--;
                map.setZoom(zoom);
            }else{
                alert('Impossible de dézoomer davantage');
            }
        });
    </script>
    <script async defer
            src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBxvWmkG3pYY6DaFxUzvRiyvttqYjdX15Q&libraries=geometry&callback=initMap\">
    </script>
{% endblock %}", "content/chercher.html.twig", "C:\\wamp64\\www\\mapbox\\templates\\content\\chercher.html.twig");
    }
}
