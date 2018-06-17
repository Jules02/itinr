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
        $__internal_a4909f2d1500c5b9ca6d44a887265505eaf6476b09c0258af83096dfaf20264a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4909f2d1500c5b9ca6d44a887265505eaf6476b09c0258af83096dfaf20264a->enter($__internal_a4909f2d1500c5b9ca6d44a887265505eaf6476b09c0258af83096dfaf20264a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "content/chercher.html.twig"));

        $__internal_6fa5525d72552f717672112191c3311960872b0e0f5bd77f6a0881533afa1b5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fa5525d72552f717672112191c3311960872b0e0f5bd77f6a0881533afa1b5b->enter($__internal_6fa5525d72552f717672112191c3311960872b0e0f5bd77f6a0881533afa1b5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "content/chercher.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a4909f2d1500c5b9ca6d44a887265505eaf6476b09c0258af83096dfaf20264a->leave($__internal_a4909f2d1500c5b9ca6d44a887265505eaf6476b09c0258af83096dfaf20264a_prof);

        
        $__internal_6fa5525d72552f717672112191c3311960872b0e0f5bd77f6a0881533afa1b5b->leave($__internal_6fa5525d72552f717672112191c3311960872b0e0f5bd77f6a0881533afa1b5b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f6e39c942b60e952795ae7e349e2b48f7759a919e956bcc6af38916a44f0cf61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6e39c942b60e952795ae7e349e2b48f7759a919e956bcc6af38916a44f0cf61->enter($__internal_f6e39c942b60e952795ae7e349e2b48f7759a919e956bcc6af38916a44f0cf61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b2df98520e98856555d4b401ba30ae8e2178bb9206f4e9265aa9aa06ae8589bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2df98520e98856555d4b401ba30ae8e2178bb9206f4e9265aa9aa06ae8589bb->enter($__internal_b2df98520e98856555d4b401ba30ae8e2178bb9206f4e9265aa9aa06ae8589bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Chercher";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_b2df98520e98856555d4b401ba30ae8e2178bb9206f4e9265aa9aa06ae8589bb->leave($__internal_b2df98520e98856555d4b401ba30ae8e2178bb9206f4e9265aa9aa06ae8589bb_prof);

        
        $__internal_f6e39c942b60e952795ae7e349e2b48f7759a919e956bcc6af38916a44f0cf61->leave($__internal_f6e39c942b60e952795ae7e349e2b48f7759a919e956bcc6af38916a44f0cf61_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4479dac2b6fda5ff649471b9bf03b5af674aeb060d31b150e1e7bb519c9c9c59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4479dac2b6fda5ff649471b9bf03b5af674aeb060d31b150e1e7bb519c9c9c59->enter($__internal_4479dac2b6fda5ff649471b9bf03b5af674aeb060d31b150e1e7bb519c9c9c59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_d76678c13e56089728e5d8390bb05d7f1ba565ea3fee4341e0fe3a0190d93209 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d76678c13e56089728e5d8390bb05d7f1ba565ea3fee4341e0fe3a0190d93209->enter($__internal_d76678c13e56089728e5d8390bb05d7f1ba565ea3fee4341e0fe3a0190d93209_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/chercher.css"), "html", null, true);
        
        $__internal_d76678c13e56089728e5d8390bb05d7f1ba565ea3fee4341e0fe3a0190d93209->leave($__internal_d76678c13e56089728e5d8390bb05d7f1ba565ea3fee4341e0fe3a0190d93209_prof);

        
        $__internal_4479dac2b6fda5ff649471b9bf03b5af674aeb060d31b150e1e7bb519c9c9c59->leave($__internal_4479dac2b6fda5ff649471b9bf03b5af674aeb060d31b150e1e7bb519c9c9c59_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_1c3c4d884d42327acde3c54aa6c590fc6cb3802d52a12b926319a679a9fa9bcb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c3c4d884d42327acde3c54aa6c590fc6cb3802d52a12b926319a679a9fa9bcb->enter($__internal_1c3c4d884d42327acde3c54aa6c590fc6cb3802d52a12b926319a679a9fa9bcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_dab8baf1fbacb54b628e78df36c924662bf400568eef917409eca511587ce736 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dab8baf1fbacb54b628e78df36c924662bf400568eef917409eca511587ce736->enter($__internal_dab8baf1fbacb54b628e78df36c924662bf400568eef917409eca511587ce736_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_dab8baf1fbacb54b628e78df36c924662bf400568eef917409eca511587ce736->leave($__internal_dab8baf1fbacb54b628e78df36c924662bf400568eef917409eca511587ce736_prof);

        
        $__internal_1c3c4d884d42327acde3c54aa6c590fc6cb3802d52a12b926319a679a9fa9bcb->leave($__internal_1c3c4d884d42327acde3c54aa6c590fc6cb3802d52a12b926319a679a9fa9bcb_prof);

    }

    // line 66
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_dba5049f044b6ffa5c77140aaf9061b06d71eaaa63f24eafb241b13ed5b2bd63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dba5049f044b6ffa5c77140aaf9061b06d71eaaa63f24eafb241b13ed5b2bd63->enter($__internal_dba5049f044b6ffa5c77140aaf9061b06d71eaaa63f24eafb241b13ed5b2bd63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_8645588d77a455faa8fa961b4ce4b76fd2b706e950aa001be4f2263f2e91905a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8645588d77a455faa8fa961b4ce4b76fd2b706e950aa001be4f2263f2e91905a->enter($__internal_8645588d77a455faa8fa961b4ce4b76fd2b706e950aa001be4f2263f2e91905a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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

        //
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
        
        $__internal_8645588d77a455faa8fa961b4ce4b76fd2b706e950aa001be4f2263f2e91905a->leave($__internal_8645588d77a455faa8fa961b4ce4b76fd2b706e950aa001be4f2263f2e91905a_prof);

        
        $__internal_dba5049f044b6ffa5c77140aaf9061b06d71eaaa63f24eafb241b13ed5b2bd63->leave($__internal_dba5049f044b6ffa5c77140aaf9061b06d71eaaa63f24eafb241b13ed5b2bd63_prof);

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

        //
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
