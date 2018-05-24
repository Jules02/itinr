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
        $__internal_c1851c512ede579b9702d2932bdff2b89be8e08246884c23d4c28fe17bd9fa53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1851c512ede579b9702d2932bdff2b89be8e08246884c23d4c28fe17bd9fa53->enter($__internal_c1851c512ede579b9702d2932bdff2b89be8e08246884c23d4c28fe17bd9fa53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "content/chercher.html.twig"));

        $__internal_ac50a927701c092f8450691c4f0ac0916a925a767246d4f083eb204d776a0a91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac50a927701c092f8450691c4f0ac0916a925a767246d4f083eb204d776a0a91->enter($__internal_ac50a927701c092f8450691c4f0ac0916a925a767246d4f083eb204d776a0a91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "content/chercher.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c1851c512ede579b9702d2932bdff2b89be8e08246884c23d4c28fe17bd9fa53->leave($__internal_c1851c512ede579b9702d2932bdff2b89be8e08246884c23d4c28fe17bd9fa53_prof);

        
        $__internal_ac50a927701c092f8450691c4f0ac0916a925a767246d4f083eb204d776a0a91->leave($__internal_ac50a927701c092f8450691c4f0ac0916a925a767246d4f083eb204d776a0a91_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b664e4fe0bcd5cef034e0a69f70ce8803e3c1eadf602168abb731ffb5ecb27f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b664e4fe0bcd5cef034e0a69f70ce8803e3c1eadf602168abb731ffb5ecb27f5->enter($__internal_b664e4fe0bcd5cef034e0a69f70ce8803e3c1eadf602168abb731ffb5ecb27f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e6e4db872117d09f876ff5518c302216853c21b62ef0e821a2016b26b0c19f49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6e4db872117d09f876ff5518c302216853c21b62ef0e821a2016b26b0c19f49->enter($__internal_e6e4db872117d09f876ff5518c302216853c21b62ef0e821a2016b26b0c19f49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Chercher";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_e6e4db872117d09f876ff5518c302216853c21b62ef0e821a2016b26b0c19f49->leave($__internal_e6e4db872117d09f876ff5518c302216853c21b62ef0e821a2016b26b0c19f49_prof);

        
        $__internal_b664e4fe0bcd5cef034e0a69f70ce8803e3c1eadf602168abb731ffb5ecb27f5->leave($__internal_b664e4fe0bcd5cef034e0a69f70ce8803e3c1eadf602168abb731ffb5ecb27f5_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7b05706445d4cfc37599853a144512d58cbb1de241ca42ec5d6c6f0410edc151 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b05706445d4cfc37599853a144512d58cbb1de241ca42ec5d6c6f0410edc151->enter($__internal_7b05706445d4cfc37599853a144512d58cbb1de241ca42ec5d6c6f0410edc151_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_46d7d39057fbbdc26688011874970f268a3e8a34b165210478b8a0f0b98e9ef6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46d7d39057fbbdc26688011874970f268a3e8a34b165210478b8a0f0b98e9ef6->enter($__internal_46d7d39057fbbdc26688011874970f268a3e8a34b165210478b8a0f0b98e9ef6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/chercher.css"), "html", null, true);
        
        $__internal_46d7d39057fbbdc26688011874970f268a3e8a34b165210478b8a0f0b98e9ef6->leave($__internal_46d7d39057fbbdc26688011874970f268a3e8a34b165210478b8a0f0b98e9ef6_prof);

        
        $__internal_7b05706445d4cfc37599853a144512d58cbb1de241ca42ec5d6c6f0410edc151->leave($__internal_7b05706445d4cfc37599853a144512d58cbb1de241ca42ec5d6c6f0410edc151_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_b351d2950baf69cf773e337d59f24ca72438cc570e43c513f38ece311b259f99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b351d2950baf69cf773e337d59f24ca72438cc570e43c513f38ece311b259f99->enter($__internal_b351d2950baf69cf773e337d59f24ca72438cc570e43c513f38ece311b259f99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_52028c38748bf66978b17163f18a09f359576035b0ebb87505cd9a79572ad807 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52028c38748bf66978b17163f18a09f359576035b0ebb87505cd9a79572ad807->enter($__internal_52028c38748bf66978b17163f18a09f359576035b0ebb87505cd9a79572ad807_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            <h2 class=\"titre-form-part1\">Affinez votre recherche</h2>
            <div class=\"titre-form-part1-separation\"></div>

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
            ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 54, $this->getSourceContext()); })()), "noteMinimale", array()), 'row');
        echo "
        </div>
        ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 56, $this->getSourceContext()); })()), "trier", array()), 'row');
        echo "
        <button type=\"submit\" class=\"submit-input\">Chercher</button>
        ";
        // line 58
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 58, $this->getSourceContext()); })()), 'form_end');
        echo "
    </div>
";
        
        $__internal_52028c38748bf66978b17163f18a09f359576035b0ebb87505cd9a79572ad807->leave($__internal_52028c38748bf66978b17163f18a09f359576035b0ebb87505cd9a79572ad807_prof);

        
        $__internal_b351d2950baf69cf773e337d59f24ca72438cc570e43c513f38ece311b259f99->leave($__internal_b351d2950baf69cf773e337d59f24ca72438cc570e43c513f38ece311b259f99_prof);

    }

    // line 62
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4b34eae3c02f4648341863e183d29d1eab77ff6f1c6b5200d272b8d3b984de7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b34eae3c02f4648341863e183d29d1eab77ff6f1c6b5200d272b8d3b984de7a->enter($__internal_4b34eae3c02f4648341863e183d29d1eab77ff6f1c6b5200d272b8d3b984de7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_98b96a739fc2294fbd65c624d3a80bc5dcc927f686aabfbef120661421902f1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98b96a739fc2294fbd65c624d3a80bc5dcc927f686aabfbef120661421902f1b->enter($__internal_98b96a739fc2294fbd65c624d3a80bc5dcc927f686aabfbef120661421902f1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 63
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
                                    }
                                    var geolocationResult = results[0].formatted_address.substring(6 , results[0].formatted_address.length);
                                    document.getElementById('chercher_placeId').value = geolocationResult;
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
        
        $__internal_98b96a739fc2294fbd65c624d3a80bc5dcc927f686aabfbef120661421902f1b->leave($__internal_98b96a739fc2294fbd65c624d3a80bc5dcc927f686aabfbef120661421902f1b_prof);

        
        $__internal_4b34eae3c02f4648341863e183d29d1eab77ff6f1c6b5200d272b8d3b984de7a->leave($__internal_4b34eae3c02f4648341863e183d29d1eab77ff6f1c6b5200d272b8d3b984de7a_prof);

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
        return array (  198 => 63,  189 => 62,  176 => 58,  171 => 56,  166 => 54,  162 => 53,  155 => 49,  147 => 44,  139 => 39,  131 => 34,  123 => 29,  109 => 18,  103 => 15,  93 => 10,  89 => 8,  80 => 7,  62 => 5,  43 => 3,  11 => 1,);
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
            <h2 class=\"titre-form-part1\">Affinez votre recherche</h2>
            <div class=\"titre-form-part1-separation\"></div>

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
            {{ form_row(form.noteMinimale) }}
        </div>
        {{ form_row(form.trier) }}
        <button type=\"submit\" class=\"submit-input\">Chercher</button>
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
                                    }
                                    var geolocationResult = results[0].formatted_address.substring(6 , results[0].formatted_address.length);
                                    document.getElementById('chercher_placeId').value = geolocationResult;
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
