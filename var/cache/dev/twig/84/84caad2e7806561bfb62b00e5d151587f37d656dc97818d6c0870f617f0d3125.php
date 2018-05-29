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
        $__internal_770e4c8829970a67a30c1f2b34179dae03b0b926c2a09fd3c89db97bcded7908 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_770e4c8829970a67a30c1f2b34179dae03b0b926c2a09fd3c89db97bcded7908->enter($__internal_770e4c8829970a67a30c1f2b34179dae03b0b926c2a09fd3c89db97bcded7908_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "content/chercher.html.twig"));

        $__internal_37e663aea23fcdbde669ade2644d5cd22e12c258316f765d745bddad6f578008 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37e663aea23fcdbde669ade2644d5cd22e12c258316f765d745bddad6f578008->enter($__internal_37e663aea23fcdbde669ade2644d5cd22e12c258316f765d745bddad6f578008_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "content/chercher.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_770e4c8829970a67a30c1f2b34179dae03b0b926c2a09fd3c89db97bcded7908->leave($__internal_770e4c8829970a67a30c1f2b34179dae03b0b926c2a09fd3c89db97bcded7908_prof);

        
        $__internal_37e663aea23fcdbde669ade2644d5cd22e12c258316f765d745bddad6f578008->leave($__internal_37e663aea23fcdbde669ade2644d5cd22e12c258316f765d745bddad6f578008_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3086b0f43b9e07930cc0105c10774d1bac9265558d77f152a350090fa923d437 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3086b0f43b9e07930cc0105c10774d1bac9265558d77f152a350090fa923d437->enter($__internal_3086b0f43b9e07930cc0105c10774d1bac9265558d77f152a350090fa923d437_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_625a7556b2b6f580da7700a62d0e0b424d31029b9ed65e5a8515147cf8c7334b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_625a7556b2b6f580da7700a62d0e0b424d31029b9ed65e5a8515147cf8c7334b->enter($__internal_625a7556b2b6f580da7700a62d0e0b424d31029b9ed65e5a8515147cf8c7334b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Chercher";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_625a7556b2b6f580da7700a62d0e0b424d31029b9ed65e5a8515147cf8c7334b->leave($__internal_625a7556b2b6f580da7700a62d0e0b424d31029b9ed65e5a8515147cf8c7334b_prof);

        
        $__internal_3086b0f43b9e07930cc0105c10774d1bac9265558d77f152a350090fa923d437->leave($__internal_3086b0f43b9e07930cc0105c10774d1bac9265558d77f152a350090fa923d437_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2baf1c35ef4ffdc6c046340ee95061714bb3cc92c719609d3bca06ff75644988 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2baf1c35ef4ffdc6c046340ee95061714bb3cc92c719609d3bca06ff75644988->enter($__internal_2baf1c35ef4ffdc6c046340ee95061714bb3cc92c719609d3bca06ff75644988_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_a4e3ee7a148df47c3b830a543e20d1991b96c1fedc9d17613819f649383c0ae5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4e3ee7a148df47c3b830a543e20d1991b96c1fedc9d17613819f649383c0ae5->enter($__internal_a4e3ee7a148df47c3b830a543e20d1991b96c1fedc9d17613819f649383c0ae5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/chercher.css"), "html", null, true);
        
        $__internal_a4e3ee7a148df47c3b830a543e20d1991b96c1fedc9d17613819f649383c0ae5->leave($__internal_a4e3ee7a148df47c3b830a543e20d1991b96c1fedc9d17613819f649383c0ae5_prof);

        
        $__internal_2baf1c35ef4ffdc6c046340ee95061714bb3cc92c719609d3bca06ff75644988->leave($__internal_2baf1c35ef4ffdc6c046340ee95061714bb3cc92c719609d3bca06ff75644988_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_7d862d4ca87fdc1005360d1aa8d03abc0bc6e0f67ac8778957d13bc8132b348a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d862d4ca87fdc1005360d1aa8d03abc0bc6e0f67ac8778957d13bc8132b348a->enter($__internal_7d862d4ca87fdc1005360d1aa8d03abc0bc6e0f67ac8778957d13bc8132b348a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e022ebaf39348685aee5dd3b4c9b68f6256bd069e6fc5b70f24800643b8f2ff1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e022ebaf39348685aee5dd3b4c9b68f6256bd069e6fc5b70f24800643b8f2ff1->enter($__internal_e022ebaf39348685aee5dd3b4c9b68f6256bd069e6fc5b70f24800643b8f2ff1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        <div class=\"placeId-input-container\">
            ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 18, $this->getSourceContext()); })()), "placeId", array()), 'row');
        echo "
            <button id=\"placeId_gps_btn\" name=\"chercher[gps]\" type=\"button\" onclick=\"fillInAdressGeolocation()\"><img src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/chercher_gps.png"), "html", null, true);
        echo "\" alt=\"Icône gps\" class=\"placeId-gps-btn-img\"/></button>
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
        
        $__internal_e022ebaf39348685aee5dd3b4c9b68f6256bd069e6fc5b70f24800643b8f2ff1->leave($__internal_e022ebaf39348685aee5dd3b4c9b68f6256bd069e6fc5b70f24800643b8f2ff1_prof);

        
        $__internal_7d862d4ca87fdc1005360d1aa8d03abc0bc6e0f67ac8778957d13bc8132b348a->leave($__internal_7d862d4ca87fdc1005360d1aa8d03abc0bc6e0f67ac8778957d13bc8132b348a_prof);

    }

    // line 66
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a55f06cb13400ee09d68825d4e84f0461d8cf1283a557f9e0bbac37fabf8d192 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a55f06cb13400ee09d68825d4e84f0461d8cf1283a557f9e0bbac37fabf8d192->enter($__internal_a55f06cb13400ee09d68825d4e84f0461d8cf1283a557f9e0bbac37fabf8d192_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_5f29b6dea3764ad1b558e6373837ccd8377c03e25b928baf8bed513106c727c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f29b6dea3764ad1b558e6373837ccd8377c03e25b928baf8bed513106c727c5->enter($__internal_5f29b6dea3764ad1b558e6373837ccd8377c03e25b928baf8bed513106c727c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 67
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
        
        $__internal_5f29b6dea3764ad1b558e6373837ccd8377c03e25b928baf8bed513106c727c5->leave($__internal_5f29b6dea3764ad1b558e6373837ccd8377c03e25b928baf8bed513106c727c5_prof);

        
        $__internal_a55f06cb13400ee09d68825d4e84f0461d8cf1283a557f9e0bbac37fabf8d192->leave($__internal_a55f06cb13400ee09d68825d4e84f0461d8cf1283a557f9e0bbac37fabf8d192_prof);

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
        <div class=\"placeId-input-container\">
            {{ form_row(form.placeId) }}
            <button id=\"placeId_gps_btn\" name=\"chercher[gps]\" type=\"button\" onclick=\"fillInAdressGeolocation()\"><img src=\"{{ asset('images/chercher_gps.png') }}\" alt=\"Icône gps\" class=\"placeId-gps-btn-img\"/></button>
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
