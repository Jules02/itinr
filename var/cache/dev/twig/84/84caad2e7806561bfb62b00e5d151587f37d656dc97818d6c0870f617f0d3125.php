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
        $__internal_9e3deffa261143a155302e67083e6d8ea9b611ef86e5bf38370e25d6fb698272 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e3deffa261143a155302e67083e6d8ea9b611ef86e5bf38370e25d6fb698272->enter($__internal_9e3deffa261143a155302e67083e6d8ea9b611ef86e5bf38370e25d6fb698272_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "content/chercher.html.twig"));

        $__internal_3fcd5f84c5141eff1a5a600db67e0a235dc2c97ad2ebd98d528f0f99c12e7ba7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fcd5f84c5141eff1a5a600db67e0a235dc2c97ad2ebd98d528f0f99c12e7ba7->enter($__internal_3fcd5f84c5141eff1a5a600db67e0a235dc2c97ad2ebd98d528f0f99c12e7ba7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "content/chercher.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9e3deffa261143a155302e67083e6d8ea9b611ef86e5bf38370e25d6fb698272->leave($__internal_9e3deffa261143a155302e67083e6d8ea9b611ef86e5bf38370e25d6fb698272_prof);

        
        $__internal_3fcd5f84c5141eff1a5a600db67e0a235dc2c97ad2ebd98d528f0f99c12e7ba7->leave($__internal_3fcd5f84c5141eff1a5a600db67e0a235dc2c97ad2ebd98d528f0f99c12e7ba7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_923d386286b91148e659ece9012ad6ef76bb99e64f4614f24fd5659e270e5aa4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_923d386286b91148e659ece9012ad6ef76bb99e64f4614f24fd5659e270e5aa4->enter($__internal_923d386286b91148e659ece9012ad6ef76bb99e64f4614f24fd5659e270e5aa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0cfa456529ebeb44203ede43ed49b614e49a6edc3d8269d9f5a6f29eb2e87a54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cfa456529ebeb44203ede43ed49b614e49a6edc3d8269d9f5a6f29eb2e87a54->enter($__internal_0cfa456529ebeb44203ede43ed49b614e49a6edc3d8269d9f5a6f29eb2e87a54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Chercher";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_0cfa456529ebeb44203ede43ed49b614e49a6edc3d8269d9f5a6f29eb2e87a54->leave($__internal_0cfa456529ebeb44203ede43ed49b614e49a6edc3d8269d9f5a6f29eb2e87a54_prof);

        
        $__internal_923d386286b91148e659ece9012ad6ef76bb99e64f4614f24fd5659e270e5aa4->leave($__internal_923d386286b91148e659ece9012ad6ef76bb99e64f4614f24fd5659e270e5aa4_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_55ca04c570d36a901e07bba9b1c8d8fb88fe3efc1a2ce5f21f7d0b39df12af6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55ca04c570d36a901e07bba9b1c8d8fb88fe3efc1a2ce5f21f7d0b39df12af6e->enter($__internal_55ca04c570d36a901e07bba9b1c8d8fb88fe3efc1a2ce5f21f7d0b39df12af6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_8cf74ef1ce411c3e0647a393d300a280a9e034936cf22b67c5c007048233e65b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cf74ef1ce411c3e0647a393d300a280a9e034936cf22b67c5c007048233e65b->enter($__internal_8cf74ef1ce411c3e0647a393d300a280a9e034936cf22b67c5c007048233e65b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/chercher.css"), "html", null, true);
        
        $__internal_8cf74ef1ce411c3e0647a393d300a280a9e034936cf22b67c5c007048233e65b->leave($__internal_8cf74ef1ce411c3e0647a393d300a280a9e034936cf22b67c5c007048233e65b_prof);

        
        $__internal_55ca04c570d36a901e07bba9b1c8d8fb88fe3efc1a2ce5f21f7d0b39df12af6e->leave($__internal_55ca04c570d36a901e07bba9b1c8d8fb88fe3efc1a2ce5f21f7d0b39df12af6e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_d1231abdde5fce714cfae02e9efa791e863d488aca7200fe9e1ed3bbf70ec2f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1231abdde5fce714cfae02e9efa791e863d488aca7200fe9e1ed3bbf70ec2f1->enter($__internal_d1231abdde5fce714cfae02e9efa791e863d488aca7200fe9e1ed3bbf70ec2f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8e50dedf60abebbc1f699d3344c40d978028850a053bbb040870fedd305b8923 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e50dedf60abebbc1f699d3344c40d978028850a053bbb040870fedd305b8923->enter($__internal_8e50dedf60abebbc1f699d3344c40d978028850a053bbb040870fedd305b8923_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    ";
        $this->loadTemplate("flash_messages.html.twig", "content/chercher.html.twig", 8)->display($context);
        // line 9
        echo "
    <h1 class=\"titre margin-left\">Vous prévoyez une séance de course à pied, une sortie vélo, une randonnée ou autre ? Trouvez l’itinéraire qu’il vous faut grâçe à Movee.</h1>
    <p class=\"sous-titre margin-left\">Nouvelle, nouveau ? <a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("aide");
        echo "\" class=\"sous-titre-aide\">Découvrez nos tutoriaux </a>ou lisez <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("aide");
        echo "\" class=\"sous-titre-tuto\">Comment trouver un itinéraire</a></p>

    <div class=\"titre-separation margin-left\"></div>

    <div class=\"form-container\">
        ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 16, $this->getSourceContext()); })()), 'form_start');
        echo "
        <div class=\"lieu-input-container\">
            ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 18, $this->getSourceContext()); })()), "lieu", array()), 'row');
        echo "
            <button id=\"lieu_gps_btn\" name=\"chercher[gps]\" type=\"button\" onclick=\"fillInAdressGeolocation()\"><img src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/chercher_gps.png"), "html", null, true);
        echo "\" alt=\"Icône gps\" class=\"lieu-gps-btn-img\"/></button>
        </div>
        <div class=\"form-part1-container\">
            <h2 class=\"titre-form-part\">Affinez votre recherche</h2>
            <div class=\"titre-form-part-separation\"></div>

            <h3 class=\"sous-titre-form-part1\">Quel type d’itinéraire cherchez-vous ?</h3>
            ";
        // line 27
        echo "            <div class=\"typeSport-container\">
                <div class=\"typeSport-input-container\">
                    <input id=\"chercher_typeSport_0\" name=\"chercher[typeSport]\" required=\"required\" value=\"marche\" type=\"radio\">
                    <label for=\"chercher_typeSport_0\" class=\"required typeSport-input\"><span></span><img src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/chercher_typeSport3.png"), "html", null, true);
        echo "\" alt=\"Icône marche\"/>Marche</label>
                </div>

                <div class=\"typeSport-input-container\">
                    <input id=\"chercher_typeSport_1\" name=\"chercher[typeSport]\" required=\"required\" value=\"course\" type=\"radio\">
                    <label for=\"chercher_typeSport_1\" class=\"required typeSport-input\"><span></span><img src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/chercher_typeSport2.png"), "html", null, true);
        echo "\" alt=\"Icône course\"/>Course à pied</label>
                </div>

                <div class=\"typeSport-input-container\">
                    <input id=\"chercher_typeSport_2\" name=\"chercher[typeSport]\" required=\"required\" value=\"veloroute\" type=\"radio\">
                    <label for=\"chercher_typeSport_2\" class=\"required typeSport-input\"><span></span><img src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/chercher_typeSport4.png"), "html", null, true);
        echo "\" alt=\"Icône vélo de route\"/>Vélo de route</label>
                </div>

                <div class=\"typeSport-input-container\">
                    <input id=\"chercher_typeSport_3\" name=\"chercher[typeSport]\" required=\"required\" value=\"vtt\" type=\"radio\">
                    <label for=\"chercher_typeSport_3\" class=\"required typeSport-input\"><span></span><img src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/chercher_typeSport5.png"), "html", null, true);
        echo "\" alt=\"Icône VTT\"/>VTT</label>
                </div>

                <div class=\"typeSport-input-container\">
                    <input id=\"chercher_typeSport_4\" name=\"chercher[typeSport]\" required=\"required\" value=\"autre\" type=\"radio\">
                    <label for=\"chercher_typeSport_4\" class=\"required typeSport-input\"><span></span><img src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/chercher_typeSport1.png"), "html", null, true);
        echo "\" alt=\"Icône autre\"/>Autre</label>
                </div>
            </div>
        </div>

        <div class=\"form-part2-container\">
            <h2 class=\"titre-form-part\">Ou recherchez un parcours précis</h2>
            <div class=\"titre-form-part-separation\"></div>
            ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 58, $this->getSourceContext()); })()), "recherchePrecise", array()), 'row');
        echo "
        </div>
        <div class=\"submit-container\"><button type=\"submit\" class=\"submit-input\">Rechercher</button></div>
        ";
        // line 61
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 61, $this->getSourceContext()); })()), 'form_end');
        echo "

    </div>
";
        
        $__internal_8e50dedf60abebbc1f699d3344c40d978028850a053bbb040870fedd305b8923->leave($__internal_8e50dedf60abebbc1f699d3344c40d978028850a053bbb040870fedd305b8923_prof);

        
        $__internal_d1231abdde5fce714cfae02e9efa791e863d488aca7200fe9e1ed3bbf70ec2f1->leave($__internal_d1231abdde5fce714cfae02e9efa791e863d488aca7200fe9e1ed3bbf70ec2f1_prof);

    }

    // line 66
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_de8eb1cafcc7e324735588529bd6d997e4dc08c958bcb9146424b413858fc897 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de8eb1cafcc7e324735588529bd6d997e4dc08c958bcb9146424b413858fc897->enter($__internal_de8eb1cafcc7e324735588529bd6d997e4dc08c958bcb9146424b413858fc897_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_2199c1e17b179033368177cdf4d9ca634e8823074560ebe7bd4d9df13adc8765 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2199c1e17b179033368177cdf4d9ca634e8823074560ebe7bd4d9df13adc8765->enter($__internal_2199c1e17b179033368177cdf4d9ca634e8823074560ebe7bd4d9df13adc8765_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 67
        echo "    <script type=\"text/javascript\" src=\"http://code.jquery.com/jquery-latest.js\"></script>
    <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBxvWmkG3pYY6DaFxUzvRiyvttqYjdX15Q&libraries=places&callback=initAutocomplete\" async defer></script>
    <script>
        var placeSearch, autocomplete, geocoder;

        function initAutocomplete() {
            geocoder = new google.maps.Geocoder();
            autocomplete = new google.maps.places.Autocomplete(
                (document.getElementById('chercher_lieu')),
                {types: ['(cities)']});

            autocomplete.addListener('place_changed', fillInAddress);
        }

        function codeAddress(address) {
            geocoder.geocode( { 'address': address}, function(results, status) {
                if (status == 'OK') {
                    alert(results[0].geometry.location);
                } else {
                    alert('Le Geocoder a echoué. Raison: ' + status);
                }
            });
        }

        function fillInAddress() {
            var place = autocomplete.getPlace();
            var placeIdInput = document.getElementById('chercher_placeId');
            placeIdInput.value = place.place_id;
        }

        function fillInAdressGeolocation(){
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function(position){   //recupère notre position
                    geoPos = {
                        lat: position.coords.latitude,
                        lng: position.coords.longitude
                    };

                    geocoder.geocode({
                            'location': geoPos
                        }, function(results, status) {
                        if (status === google.maps.GeocoderStatus.OK) {
                            if (results[1]) {
                                geocoder.geocode({'placeId': results[1].place_id}, function(results, status) {
                                    if (status !== 'OK') {
                                        alert('Le Geocoder a echoué. Raison: ' + status);
                                        return;
                                    }
                                    var geoLocationResult = results[0].formatted_address.substring(6 , results[0].formatted_address.length);
                                    document.getElementById('chercher_lieu').value = geoLocationResult;
                                    var placeIdInput = document.getElementById('chercher_placeId');
                                    placeIdInput.value = place.place_id;
                                });
                            } else {
                                alert('Aucun résultat trouvé');
                            }
                        } else {
                            alert('Le Geocoder a echoué. Raison: ' + status);
                        }
                    });

                }, function() {
                    handleLocationError(true, infoWindow, map.getCenter());
                });

            } else {
                // Le navigateur ne supporte pas la géolocalisation ou elle a été refusé
                handleLocationError(false, infoWindow, map.getCenter());
            }
        }
    </script>
";
        
        $__internal_2199c1e17b179033368177cdf4d9ca634e8823074560ebe7bd4d9df13adc8765->leave($__internal_2199c1e17b179033368177cdf4d9ca634e8823074560ebe7bd4d9df13adc8765_prof);

        
        $__internal_de8eb1cafcc7e324735588529bd6d997e4dc08c958bcb9146424b413858fc897->leave($__internal_de8eb1cafcc7e324735588529bd6d997e4dc08c958bcb9146424b413858fc897_prof);

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
        return array (  202 => 67,  193 => 66,  179 => 61,  173 => 58,  162 => 50,  154 => 45,  146 => 40,  138 => 35,  130 => 30,  125 => 27,  115 => 19,  111 => 18,  106 => 16,  96 => 11,  92 => 9,  89 => 8,  80 => 7,  62 => 5,  43 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Chercher{{ parent() }}{% endblock %}

{% block stylesheets %}{{ asset('build/chercher.css') }}{% endblock %}

{% block body %}
    {% include 'flash_messages.html.twig' %}

    <h1 class=\"titre margin-left\">Vous prévoyez une séance de course à pied, une sortie vélo, une randonnée ou autre ? Trouvez l’itinéraire qu’il vous faut grâçe à Movee.</h1>
    <p class=\"sous-titre margin-left\">Nouvelle, nouveau ? <a href=\"{{ path('aide') }}\" class=\"sous-titre-aide\">Découvrez nos tutoriaux </a>ou lisez <a href=\"{{ path('aide') }}\" class=\"sous-titre-tuto\">Comment trouver un itinéraire</a></p>

    <div class=\"titre-separation margin-left\"></div>

    <div class=\"form-container\">
        {{ form_start(form) }}
        <div class=\"lieu-input-container\">
            {{ form_row(form.lieu) }}
            <button id=\"lieu_gps_btn\" name=\"chercher[gps]\" type=\"button\" onclick=\"fillInAdressGeolocation()\"><img src=\"{{ asset('images/chercher_gps.png') }}\" alt=\"Icône gps\" class=\"lieu-gps-btn-img\"/></button>
        </div>
        <div class=\"form-part1-container\">
            <h2 class=\"titre-form-part\">Affinez votre recherche</h2>
            <div class=\"titre-form-part-separation\"></div>

            <h3 class=\"sous-titre-form-part1\">Quel type d’itinéraire cherchez-vous ?</h3>
            {#{{ form_row(form.typeSport) }}#}
            <div class=\"typeSport-container\">
                <div class=\"typeSport-input-container\">
                    <input id=\"chercher_typeSport_0\" name=\"chercher[typeSport]\" required=\"required\" value=\"marche\" type=\"radio\">
                    <label for=\"chercher_typeSport_0\" class=\"required typeSport-input\"><span></span><img src=\"{{ asset('images/chercher_typeSport3.png') }}\" alt=\"Icône marche\"/>Marche</label>
                </div>

                <div class=\"typeSport-input-container\">
                    <input id=\"chercher_typeSport_1\" name=\"chercher[typeSport]\" required=\"required\" value=\"course\" type=\"radio\">
                    <label for=\"chercher_typeSport_1\" class=\"required typeSport-input\"><span></span><img src=\"{{ asset('images/chercher_typeSport2.png') }}\" alt=\"Icône course\"/>Course à pied</label>
                </div>

                <div class=\"typeSport-input-container\">
                    <input id=\"chercher_typeSport_2\" name=\"chercher[typeSport]\" required=\"required\" value=\"veloroute\" type=\"radio\">
                    <label for=\"chercher_typeSport_2\" class=\"required typeSport-input\"><span></span><img src=\"{{ asset('images/chercher_typeSport4.png') }}\" alt=\"Icône vélo de route\"/>Vélo de route</label>
                </div>

                <div class=\"typeSport-input-container\">
                    <input id=\"chercher_typeSport_3\" name=\"chercher[typeSport]\" required=\"required\" value=\"vtt\" type=\"radio\">
                    <label for=\"chercher_typeSport_3\" class=\"required typeSport-input\"><span></span><img src=\"{{ asset('images/chercher_typeSport5.png') }}\" alt=\"Icône VTT\"/>VTT</label>
                </div>

                <div class=\"typeSport-input-container\">
                    <input id=\"chercher_typeSport_4\" name=\"chercher[typeSport]\" required=\"required\" value=\"autre\" type=\"radio\">
                    <label for=\"chercher_typeSport_4\" class=\"required typeSport-input\"><span></span><img src=\"{{ asset('images/chercher_typeSport1.png') }}\" alt=\"Icône autre\"/>Autre</label>
                </div>
            </div>
        </div>

        <div class=\"form-part2-container\">
            <h2 class=\"titre-form-part\">Ou recherchez un parcours précis</h2>
            <div class=\"titre-form-part-separation\"></div>
            {{ form_row(form.recherchePrecise) }}
        </div>
        <div class=\"submit-container\"><button type=\"submit\" class=\"submit-input\">Rechercher</button></div>
        {{ form_end(form) }}

    </div>
{% endblock %}

{% block javascripts %}
    <script type=\"text/javascript\" src=\"http://code.jquery.com/jquery-latest.js\"></script>
    <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBxvWmkG3pYY6DaFxUzvRiyvttqYjdX15Q&libraries=places&callback=initAutocomplete\" async defer></script>
    <script>
        var placeSearch, autocomplete, geocoder;

        function initAutocomplete() {
            geocoder = new google.maps.Geocoder();
            autocomplete = new google.maps.places.Autocomplete(
                (document.getElementById('chercher_lieu')),
                {types: ['(cities)']});

            autocomplete.addListener('place_changed', fillInAddress);
        }

        function codeAddress(address) {
            geocoder.geocode( { 'address': address}, function(results, status) {
                if (status == 'OK') {
                    alert(results[0].geometry.location);
                } else {
                    alert('Le Geocoder a echoué. Raison: ' + status);
                }
            });
        }

        function fillInAddress() {
            var place = autocomplete.getPlace();
            var placeIdInput = document.getElementById('chercher_placeId');
            placeIdInput.value = place.place_id;
        }

        function fillInAdressGeolocation(){
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function(position){   //recupère notre position
                    geoPos = {
                        lat: position.coords.latitude,
                        lng: position.coords.longitude
                    };

                    geocoder.geocode({
                            'location': geoPos
                        }, function(results, status) {
                        if (status === google.maps.GeocoderStatus.OK) {
                            if (results[1]) {
                                geocoder.geocode({'placeId': results[1].place_id}, function(results, status) {
                                    if (status !== 'OK') {
                                        alert('Le Geocoder a echoué. Raison: ' + status);
                                        return;
                                    }
                                    var geoLocationResult = results[0].formatted_address.substring(6 , results[0].formatted_address.length);
                                    document.getElementById('chercher_lieu').value = geoLocationResult;
                                    var placeIdInput = document.getElementById('chercher_placeId');
                                    placeIdInput.value = place.place_id;
                                });
                            } else {
                                alert('Aucun résultat trouvé');
                            }
                        } else {
                            alert('Le Geocoder a echoué. Raison: ' + status);
                        }
                    });

                }, function() {
                    handleLocationError(true, infoWindow, map.getCenter());
                });

            } else {
                // Le navigateur ne supporte pas la géolocalisation ou elle a été refusé
                handleLocationError(false, infoWindow, map.getCenter());
            }
        }
    </script>
{% endblock %}", "content/chercher.html.twig", "C:\\wamp64\\www\\mapbox\\templates\\content\\chercher.html.twig");
    }
}
