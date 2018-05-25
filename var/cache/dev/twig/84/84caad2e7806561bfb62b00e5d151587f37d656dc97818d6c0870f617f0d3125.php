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
        $__internal_06d7dd7f7160e2a22b65d4d532a4f49c033740e799cc4230402f4cd5e03a31d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06d7dd7f7160e2a22b65d4d532a4f49c033740e799cc4230402f4cd5e03a31d0->enter($__internal_06d7dd7f7160e2a22b65d4d532a4f49c033740e799cc4230402f4cd5e03a31d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "content/chercher.html.twig"));

        $__internal_081a22e258619b9084464259d943854994b342886a15c5b233829c1f77f9e315 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_081a22e258619b9084464259d943854994b342886a15c5b233829c1f77f9e315->enter($__internal_081a22e258619b9084464259d943854994b342886a15c5b233829c1f77f9e315_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "content/chercher.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_06d7dd7f7160e2a22b65d4d532a4f49c033740e799cc4230402f4cd5e03a31d0->leave($__internal_06d7dd7f7160e2a22b65d4d532a4f49c033740e799cc4230402f4cd5e03a31d0_prof);

        
        $__internal_081a22e258619b9084464259d943854994b342886a15c5b233829c1f77f9e315->leave($__internal_081a22e258619b9084464259d943854994b342886a15c5b233829c1f77f9e315_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ad3bd9b434da12be85d504a1eae786f64364a3b050f5e9c36a8cadb01a2d8702 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad3bd9b434da12be85d504a1eae786f64364a3b050f5e9c36a8cadb01a2d8702->enter($__internal_ad3bd9b434da12be85d504a1eae786f64364a3b050f5e9c36a8cadb01a2d8702_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1c3cb4356b08320e3f2efbca4e25d5032d653a25623db737d1cd7edebcdd0a8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c3cb4356b08320e3f2efbca4e25d5032d653a25623db737d1cd7edebcdd0a8c->enter($__internal_1c3cb4356b08320e3f2efbca4e25d5032d653a25623db737d1cd7edebcdd0a8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Chercher";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_1c3cb4356b08320e3f2efbca4e25d5032d653a25623db737d1cd7edebcdd0a8c->leave($__internal_1c3cb4356b08320e3f2efbca4e25d5032d653a25623db737d1cd7edebcdd0a8c_prof);

        
        $__internal_ad3bd9b434da12be85d504a1eae786f64364a3b050f5e9c36a8cadb01a2d8702->leave($__internal_ad3bd9b434da12be85d504a1eae786f64364a3b050f5e9c36a8cadb01a2d8702_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0d3bf20366fa43844411ab6df2ec1b5e9bd52c5d79bee62eeb1d920509c0a166 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d3bf20366fa43844411ab6df2ec1b5e9bd52c5d79bee62eeb1d920509c0a166->enter($__internal_0d3bf20366fa43844411ab6df2ec1b5e9bd52c5d79bee62eeb1d920509c0a166_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_7d8db83f9d72a36ca65a94ef5790a2e658c874ab0b332da85d7bb44ce2640d52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d8db83f9d72a36ca65a94ef5790a2e658c874ab0b332da85d7bb44ce2640d52->enter($__internal_7d8db83f9d72a36ca65a94ef5790a2e658c874ab0b332da85d7bb44ce2640d52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/chercher.css"), "html", null, true);
        
        $__internal_7d8db83f9d72a36ca65a94ef5790a2e658c874ab0b332da85d7bb44ce2640d52->leave($__internal_7d8db83f9d72a36ca65a94ef5790a2e658c874ab0b332da85d7bb44ce2640d52_prof);

        
        $__internal_0d3bf20366fa43844411ab6df2ec1b5e9bd52c5d79bee62eeb1d920509c0a166->leave($__internal_0d3bf20366fa43844411ab6df2ec1b5e9bd52c5d79bee62eeb1d920509c0a166_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_0f7607d5762ae2f8acb2bb57d028af7d6d22b3bf0f53ea01140c75e4ff4437f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f7607d5762ae2f8acb2bb57d028af7d6d22b3bf0f53ea01140c75e4ff4437f2->enter($__internal_0f7607d5762ae2f8acb2bb57d028af7d6d22b3bf0f53ea01140c75e4ff4437f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_96adcdc97469f1c815f45b6a2b9d2969a08ccb321c6476a43e63dcc099e9d4f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96adcdc97469f1c815f45b6a2b9d2969a08ccb321c6476a43e63dcc099e9d4f6->enter($__internal_96adcdc97469f1c815f45b6a2b9d2969a08ccb321c6476a43e63dcc099e9d4f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
    <h1 class=\"titre margin-left\">Vous prévoyez une séance de course à pied, une sortie vélo, une randonnée ou autre ? Trouvez l’itinéraire qu’il vous faut grâçe à Movee.</h1>
    <p class=\"sous-titre margin-left\">Nouvelle, nouveau ? <a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("aide");
        echo "\" class=\"sous-titre-aide\">Découvrez nos tutoriaux </a>ou lisez <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("aide");
        echo "\" class=\"sous-titre-tuto\">Comment trouver un itinéraire</a></p>

    <div class=\"titre-separation margin-left\"></div>

    <div class=\"form-container\">
        ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 15, $this->getSourceContext()); })()), 'form_start');
        echo "
        <div class=\"placeId-input-container\">
            <input id=\"chercher_placeId\" placeholder=\"Où voulez vous trouver un itinéraire ?\" type=\"text\" name=\"chercher[placeId]\" />
            <button id=\"placeId_gps_btn\" name=\"chercher[gps]\" type=\"button\" onclick=\"fillInAdressGeolocation()\"><img src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/chercher_gps.png"), "html", null, true);
        echo "\" alt=\"Icône gps\" class=\"placeId-gps-btn-img\"/></button>
        </div>

        <div class=\"form-part1-container\">
            <h2 class=\"titre-form-part\">Affinez votre recherche</h2>
            <div class=\"titre-form-part-separation\"></div>

            <h3 class=\"sous-titre-form-part1\">Quel type d’itinéraire cherchez-vous ?</h3>
            <div class=\"typeSport-container\">
                <div class=\"typeSport-input-container\">
                    <input id=\"user_typeSport_0\" name=\"user[typeSport]\" required=\"required\" value=\"marche\" type=\"radio\">
                    <label for=\"user_typeSport_0\" class=\"required typeSport-input\"><span></span><img src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/chercher_typeSport3.png"), "html", null, true);
        echo "\" alt=\"Icône marche\"/>Marche</label>
                </div>

                <div class=\"typeSport-input-container\">
                    <input id=\"user_typeSport_1\" name=\"user[typeSport]\" required=\"required\" value=\"course\" type=\"radio\">
                    <label for=\"user_typeSport_1\" class=\"required typeSport-input\"><span></span><img src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/chercher_typeSport2.png"), "html", null, true);
        echo "\" alt=\"Icône course\"/>Course à pied</label>
                </div>

                <div class=\"typeSport-input-container\">
                    <input id=\"user_typeSport_2\" name=\"user[typeSport]\" required=\"required\" value=\"veloroute\" type=\"radio\">
                    <label for=\"user_typeSport_2\" class=\"required typeSport-input\"><span></span><img src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/chercher_typeSport4.png"), "html", null, true);
        echo "\" alt=\"Icône vélo de route\"/>Vélo de route</label>
                </div>

                <div class=\"typeSport-input-container\">
                    <input id=\"user_typeSport_3\" name=\"user[typeSport]\" required=\"required\" value=\"vtt\" type=\"radio\">
                    <label for=\"user_typeSport_3\" class=\"required typeSport-input\"><span></span><img src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/chercher_typeSport5.png"), "html", null, true);
        echo "\" alt=\"Icône VTT\"/>VTT</label>
                </div>

                <div class=\"typeSport-input-container\">
                    <input id=\"user_typeSport_4\" name=\"user[typeSport]\" required=\"required\" value=\"autre\" type=\"radio\">
                    <label for=\"user_typeSport_4\" class=\"required typeSport-input\"><span></span><img src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/chercher_typeSport1.png"), "html", null, true);
        echo "\" alt=\"Icône autre\"/>Autre</label>
                </div>
            </div>
            <h3 class=\"sous-titre-form-part1\">Ajoutez quelques filtres</h3>
            ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 53, $this->getSourceContext()); })()), "filtres", array()), 'row');
        echo "
        </div>

        <div class=\"form-part2-container\">
            <h2 class=\"titre-form-part\">Ou recherchez un parcours précis</h2>
            <div class=\"titre-form-part-separation\"></div>
            <div class=\"recherchePrecise-input-container\">
                <label class=\"required recherchePrecise_label\">En rentrant le nom de l’auteur</label>
                <input name=\"chercher[recherchePrecise][parAuteur]\" required=\"required\" class=\"recherchePrecise-input\" type=\"text\">
            </div>
            <div class=\"recherchePrecise-input-container\">
                <label class=\"required recherchePrecise_label\">Ou en rentrant le titre de l’itinéraire</label>
                <input name=\"chercher[recherchePrecise][parTitre]\" required=\"required\" class=\"recherchePrecise-input\" type=\"text\">
            </div>
        </div>
        <div class=\"submit-container\"><button class=\"submit-input\" type=\"submit\">Rechercher</button></div>
        ";
        // line 69
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 69, $this->getSourceContext()); })()), 'form_end');
        echo "
    </div>
";
        
        $__internal_96adcdc97469f1c815f45b6a2b9d2969a08ccb321c6476a43e63dcc099e9d4f6->leave($__internal_96adcdc97469f1c815f45b6a2b9d2969a08ccb321c6476a43e63dcc099e9d4f6_prof);

        
        $__internal_0f7607d5762ae2f8acb2bb57d028af7d6d22b3bf0f53ea01140c75e4ff4437f2->leave($__internal_0f7607d5762ae2f8acb2bb57d028af7d6d22b3bf0f53ea01140c75e4ff4437f2_prof);

    }

    // line 73
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_49b5017b161577ae7a987c7861ffee1a882d73e3e9648465fd30f5c110ba6d38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49b5017b161577ae7a987c7861ffee1a882d73e3e9648465fd30f5c110ba6d38->enter($__internal_49b5017b161577ae7a987c7861ffee1a882d73e3e9648465fd30f5c110ba6d38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_c3918a104eea615326ad61801efda6d3b5c391f64432a75a3cf587ff7bf91e14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3918a104eea615326ad61801efda6d3b5c391f64432a75a3cf587ff7bf91e14->enter($__internal_c3918a104eea615326ad61801efda6d3b5c391f64432a75a3cf587ff7bf91e14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 74
        echo "    <script type=\"text/javascript\" src=\"http://code.jquery.com/jquery-latest.js\"></script>
    <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBxvWmkG3pYY6DaFxUzvRiyvttqYjdX15Q&libraries=places&callback=initAutocomplete\" async defer></script>
    <script>
        var placeSearch, autocomplete, geocoder;

        function initAutocomplete() {
            geocoder = new google.maps.Geocoder();
            autocomplete = new google.maps.places.Autocomplete(
                (document.getElementById('chercher_placeId')),
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
            alert(place.place_id);
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
                                    document.getElementById('chercher_placeId').value = geoLocationResult;
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
        
        $__internal_c3918a104eea615326ad61801efda6d3b5c391f64432a75a3cf587ff7bf91e14->leave($__internal_c3918a104eea615326ad61801efda6d3b5c391f64432a75a3cf587ff7bf91e14_prof);

        
        $__internal_49b5017b161577ae7a987c7861ffee1a882d73e3e9648465fd30f5c110ba6d38->leave($__internal_49b5017b161577ae7a987c7861ffee1a882d73e3e9648465fd30f5c110ba6d38_prof);

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
        return array (  203 => 74,  194 => 73,  181 => 69,  162 => 53,  155 => 49,  147 => 44,  139 => 39,  131 => 34,  123 => 29,  109 => 18,  103 => 15,  93 => 10,  89 => 8,  80 => 7,  62 => 5,  43 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Chercher{{ parent() }}{% endblock %}

{% block stylesheets %}{{ asset('build/chercher.css') }}{% endblock %}

{% block body %}

    <h1 class=\"titre margin-left\">Vous prévoyez une séance de course à pied, une sortie vélo, une randonnée ou autre ? Trouvez l’itinéraire qu’il vous faut grâçe à Movee.</h1>
    <p class=\"sous-titre margin-left\">Nouvelle, nouveau ? <a href=\"{{ path('aide') }}\" class=\"sous-titre-aide\">Découvrez nos tutoriaux </a>ou lisez <a href=\"{{ path('aide') }}\" class=\"sous-titre-tuto\">Comment trouver un itinéraire</a></p>

    <div class=\"titre-separation margin-left\"></div>

    <div class=\"form-container\">
        {{ form_start(form) }}
        <div class=\"placeId-input-container\">
            <input id=\"chercher_placeId\" placeholder=\"Où voulez vous trouver un itinéraire ?\" type=\"text\" name=\"chercher[placeId]\" />
            <button id=\"placeId_gps_btn\" name=\"chercher[gps]\" type=\"button\" onclick=\"fillInAdressGeolocation()\"><img src=\"{{ asset('images/chercher_gps.png') }}\" alt=\"Icône gps\" class=\"placeId-gps-btn-img\"/></button>
        </div>

        <div class=\"form-part1-container\">
            <h2 class=\"titre-form-part\">Affinez votre recherche</h2>
            <div class=\"titre-form-part-separation\"></div>

            <h3 class=\"sous-titre-form-part1\">Quel type d’itinéraire cherchez-vous ?</h3>
            <div class=\"typeSport-container\">
                <div class=\"typeSport-input-container\">
                    <input id=\"user_typeSport_0\" name=\"user[typeSport]\" required=\"required\" value=\"marche\" type=\"radio\">
                    <label for=\"user_typeSport_0\" class=\"required typeSport-input\"><span></span><img src=\"{{ asset('images/chercher_typeSport3.png') }}\" alt=\"Icône marche\"/>Marche</label>
                </div>

                <div class=\"typeSport-input-container\">
                    <input id=\"user_typeSport_1\" name=\"user[typeSport]\" required=\"required\" value=\"course\" type=\"radio\">
                    <label for=\"user_typeSport_1\" class=\"required typeSport-input\"><span></span><img src=\"{{ asset('images/chercher_typeSport2.png') }}\" alt=\"Icône course\"/>Course à pied</label>
                </div>

                <div class=\"typeSport-input-container\">
                    <input id=\"user_typeSport_2\" name=\"user[typeSport]\" required=\"required\" value=\"veloroute\" type=\"radio\">
                    <label for=\"user_typeSport_2\" class=\"required typeSport-input\"><span></span><img src=\"{{ asset('images/chercher_typeSport4.png') }}\" alt=\"Icône vélo de route\"/>Vélo de route</label>
                </div>

                <div class=\"typeSport-input-container\">
                    <input id=\"user_typeSport_3\" name=\"user[typeSport]\" required=\"required\" value=\"vtt\" type=\"radio\">
                    <label for=\"user_typeSport_3\" class=\"required typeSport-input\"><span></span><img src=\"{{ asset('images/chercher_typeSport5.png') }}\" alt=\"Icône VTT\"/>VTT</label>
                </div>

                <div class=\"typeSport-input-container\">
                    <input id=\"user_typeSport_4\" name=\"user[typeSport]\" required=\"required\" value=\"autre\" type=\"radio\">
                    <label for=\"user_typeSport_4\" class=\"required typeSport-input\"><span></span><img src=\"{{ asset('images/chercher_typeSport1.png') }}\" alt=\"Icône autre\"/>Autre</label>
                </div>
            </div>
            <h3 class=\"sous-titre-form-part1\">Ajoutez quelques filtres</h3>
            {{ form_row(form.filtres) }}
        </div>

        <div class=\"form-part2-container\">
            <h2 class=\"titre-form-part\">Ou recherchez un parcours précis</h2>
            <div class=\"titre-form-part-separation\"></div>
            <div class=\"recherchePrecise-input-container\">
                <label class=\"required recherchePrecise_label\">En rentrant le nom de l’auteur</label>
                <input name=\"chercher[recherchePrecise][parAuteur]\" required=\"required\" class=\"recherchePrecise-input\" type=\"text\">
            </div>
            <div class=\"recherchePrecise-input-container\">
                <label class=\"required recherchePrecise_label\">Ou en rentrant le titre de l’itinéraire</label>
                <input name=\"chercher[recherchePrecise][parTitre]\" required=\"required\" class=\"recherchePrecise-input\" type=\"text\">
            </div>
        </div>
        <div class=\"submit-container\"><button class=\"submit-input\" type=\"submit\">Rechercher</button></div>
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
                (document.getElementById('chercher_placeId')),
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
            alert(place.place_id);
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
                                    document.getElementById('chercher_placeId').value = geoLocationResult;
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
