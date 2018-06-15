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
        $__internal_6f4e73eafc3e1c804b78409637e959b685cd2c08f63675416b00b4b6f0719dc6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f4e73eafc3e1c804b78409637e959b685cd2c08f63675416b00b4b6f0719dc6->enter($__internal_6f4e73eafc3e1c804b78409637e959b685cd2c08f63675416b00b4b6f0719dc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "content/chercher.html.twig"));

        $__internal_b4da3e2a2a2c35589e4c90d75110f296aa95026c929c6464ac4fbca7452b6920 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4da3e2a2a2c35589e4c90d75110f296aa95026c929c6464ac4fbca7452b6920->enter($__internal_b4da3e2a2a2c35589e4c90d75110f296aa95026c929c6464ac4fbca7452b6920_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "content/chercher.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f4e73eafc3e1c804b78409637e959b685cd2c08f63675416b00b4b6f0719dc6->leave($__internal_6f4e73eafc3e1c804b78409637e959b685cd2c08f63675416b00b4b6f0719dc6_prof);

        
        $__internal_b4da3e2a2a2c35589e4c90d75110f296aa95026c929c6464ac4fbca7452b6920->leave($__internal_b4da3e2a2a2c35589e4c90d75110f296aa95026c929c6464ac4fbca7452b6920_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d06e9984cacc8f02da4ee411b5b6c6400fad387bb34cdafe45e883522bd2f3fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d06e9984cacc8f02da4ee411b5b6c6400fad387bb34cdafe45e883522bd2f3fc->enter($__internal_d06e9984cacc8f02da4ee411b5b6c6400fad387bb34cdafe45e883522bd2f3fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e68ad4f69374bbcb8c189513731615754a9ed1eacd1692fa2e2ccd3f84a68afc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e68ad4f69374bbcb8c189513731615754a9ed1eacd1692fa2e2ccd3f84a68afc->enter($__internal_e68ad4f69374bbcb8c189513731615754a9ed1eacd1692fa2e2ccd3f84a68afc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Chercher";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_e68ad4f69374bbcb8c189513731615754a9ed1eacd1692fa2e2ccd3f84a68afc->leave($__internal_e68ad4f69374bbcb8c189513731615754a9ed1eacd1692fa2e2ccd3f84a68afc_prof);

        
        $__internal_d06e9984cacc8f02da4ee411b5b6c6400fad387bb34cdafe45e883522bd2f3fc->leave($__internal_d06e9984cacc8f02da4ee411b5b6c6400fad387bb34cdafe45e883522bd2f3fc_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3afa5aaa7d884ac284e729b91379bfae2bee44ab861538a037cbb4d3189aebbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3afa5aaa7d884ac284e729b91379bfae2bee44ab861538a037cbb4d3189aebbc->enter($__internal_3afa5aaa7d884ac284e729b91379bfae2bee44ab861538a037cbb4d3189aebbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_e54e7d82c9a26b7c32bfe80d67276aaf8e43979f05b6298a10b5cfc35eeca2ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e54e7d82c9a26b7c32bfe80d67276aaf8e43979f05b6298a10b5cfc35eeca2ab->enter($__internal_e54e7d82c9a26b7c32bfe80d67276aaf8e43979f05b6298a10b5cfc35eeca2ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/chercher.css"), "html", null, true);
        
        $__internal_e54e7d82c9a26b7c32bfe80d67276aaf8e43979f05b6298a10b5cfc35eeca2ab->leave($__internal_e54e7d82c9a26b7c32bfe80d67276aaf8e43979f05b6298a10b5cfc35eeca2ab_prof);

        
        $__internal_3afa5aaa7d884ac284e729b91379bfae2bee44ab861538a037cbb4d3189aebbc->leave($__internal_3afa5aaa7d884ac284e729b91379bfae2bee44ab861538a037cbb4d3189aebbc_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_0cf4367e4989def313401012314cf2118de1e7f277f035511925bd716729a0df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cf4367e4989def313401012314cf2118de1e7f277f035511925bd716729a0df->enter($__internal_0cf4367e4989def313401012314cf2118de1e7f277f035511925bd716729a0df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_15c852683c58f5fe7567f83e75e4d7dbf121a5f7e7a05ea11dd05ea4c55fb6ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15c852683c58f5fe7567f83e75e4d7dbf121a5f7e7a05ea11dd05ea4c55fb6ba->enter($__internal_15c852683c58f5fe7567f83e75e4d7dbf121a5f7e7a05ea11dd05ea4c55fb6ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_15c852683c58f5fe7567f83e75e4d7dbf121a5f7e7a05ea11dd05ea4c55fb6ba->leave($__internal_15c852683c58f5fe7567f83e75e4d7dbf121a5f7e7a05ea11dd05ea4c55fb6ba_prof);

        
        $__internal_0cf4367e4989def313401012314cf2118de1e7f277f035511925bd716729a0df->leave($__internal_0cf4367e4989def313401012314cf2118de1e7f277f035511925bd716729a0df_prof);

    }

    // line 66
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_49b364d019c50466a771612663994ee30251a1fc6f95d8620904a303a68c159e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49b364d019c50466a771612663994ee30251a1fc6f95d8620904a303a68c159e->enter($__internal_49b364d019c50466a771612663994ee30251a1fc6f95d8620904a303a68c159e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_f3324cce4bc0201fda83f01ebca221021a4cd92a696d06016024c6807cc3475f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3324cce4bc0201fda83f01ebca221021a4cd92a696d06016024c6807cc3475f->enter($__internal_f3324cce4bc0201fda83f01ebca221021a4cd92a696d06016024c6807cc3475f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_f3324cce4bc0201fda83f01ebca221021a4cd92a696d06016024c6807cc3475f->leave($__internal_f3324cce4bc0201fda83f01ebca221021a4cd92a696d06016024c6807cc3475f_prof);

        
        $__internal_49b364d019c50466a771612663994ee30251a1fc6f95d8620904a303a68c159e->leave($__internal_49b364d019c50466a771612663994ee30251a1fc6f95d8620904a303a68c159e_prof);

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
