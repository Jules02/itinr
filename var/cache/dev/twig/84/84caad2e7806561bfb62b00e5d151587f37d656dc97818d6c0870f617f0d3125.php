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
        $__internal_d573f8c5b26b383ec66a0fe6469e028168286566e55cdbd0ffdaf3130332b79e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d573f8c5b26b383ec66a0fe6469e028168286566e55cdbd0ffdaf3130332b79e->enter($__internal_d573f8c5b26b383ec66a0fe6469e028168286566e55cdbd0ffdaf3130332b79e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "content/chercher.html.twig"));

        $__internal_872d8ec11bf316fa80397706651950cefda28dd10dc5e9d92b23d1070f4d1a4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_872d8ec11bf316fa80397706651950cefda28dd10dc5e9d92b23d1070f4d1a4c->enter($__internal_872d8ec11bf316fa80397706651950cefda28dd10dc5e9d92b23d1070f4d1a4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "content/chercher.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d573f8c5b26b383ec66a0fe6469e028168286566e55cdbd0ffdaf3130332b79e->leave($__internal_d573f8c5b26b383ec66a0fe6469e028168286566e55cdbd0ffdaf3130332b79e_prof);

        
        $__internal_872d8ec11bf316fa80397706651950cefda28dd10dc5e9d92b23d1070f4d1a4c->leave($__internal_872d8ec11bf316fa80397706651950cefda28dd10dc5e9d92b23d1070f4d1a4c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_36be8b36d08e85cffdb54bb51f90c13f64f603b0479747dae6084736f8cefff4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36be8b36d08e85cffdb54bb51f90c13f64f603b0479747dae6084736f8cefff4->enter($__internal_36be8b36d08e85cffdb54bb51f90c13f64f603b0479747dae6084736f8cefff4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_651f2ca19f4f1919ac311f25354da4943ac11f7cee2b0124ffb34e8d4a9a5967 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_651f2ca19f4f1919ac311f25354da4943ac11f7cee2b0124ffb34e8d4a9a5967->enter($__internal_651f2ca19f4f1919ac311f25354da4943ac11f7cee2b0124ffb34e8d4a9a5967_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Chercher";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_651f2ca19f4f1919ac311f25354da4943ac11f7cee2b0124ffb34e8d4a9a5967->leave($__internal_651f2ca19f4f1919ac311f25354da4943ac11f7cee2b0124ffb34e8d4a9a5967_prof);

        
        $__internal_36be8b36d08e85cffdb54bb51f90c13f64f603b0479747dae6084736f8cefff4->leave($__internal_36be8b36d08e85cffdb54bb51f90c13f64f603b0479747dae6084736f8cefff4_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fb2720cb7311ca9df77e76c462d2358bc5aac3e577bbf9084690269f832105cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb2720cb7311ca9df77e76c462d2358bc5aac3e577bbf9084690269f832105cf->enter($__internal_fb2720cb7311ca9df77e76c462d2358bc5aac3e577bbf9084690269f832105cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_eaa8ac84f1b87b211b65380a5d4542869dc676ea3e44e3617266a4c3d13ae20c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eaa8ac84f1b87b211b65380a5d4542869dc676ea3e44e3617266a4c3d13ae20c->enter($__internal_eaa8ac84f1b87b211b65380a5d4542869dc676ea3e44e3617266a4c3d13ae20c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/chercher.css"), "html", null, true);
        
        $__internal_eaa8ac84f1b87b211b65380a5d4542869dc676ea3e44e3617266a4c3d13ae20c->leave($__internal_eaa8ac84f1b87b211b65380a5d4542869dc676ea3e44e3617266a4c3d13ae20c_prof);

        
        $__internal_fb2720cb7311ca9df77e76c462d2358bc5aac3e577bbf9084690269f832105cf->leave($__internal_fb2720cb7311ca9df77e76c462d2358bc5aac3e577bbf9084690269f832105cf_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_0a6617941eaaae7712f7b392168fd9487d3ac34f0a1caf482b8ac46e506fe7df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a6617941eaaae7712f7b392168fd9487d3ac34f0a1caf482b8ac46e506fe7df->enter($__internal_0a6617941eaaae7712f7b392168fd9487d3ac34f0a1caf482b8ac46e506fe7df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d6280e0e729513c323d35b9e9ab3a32764a5b2f8294bbbea20a350c63fee8f97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6280e0e729513c323d35b9e9ab3a32764a5b2f8294bbbea20a350c63fee8f97->enter($__internal_d6280e0e729513c323d35b9e9ab3a32764a5b2f8294bbbea20a350c63fee8f97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    ";
        $this->loadTemplate("flash_messages.html.twig", "content/chercher.html.twig", 8)->display($context);
        // line 9
        echo "
    <h1 class=\"titre margin-left\">Vous prévoyez une séance de course à pied, une sortie vélo, une randonnée ou autre ? Trouvez l’itinéraire qu’il vous faut grâçe à Itin'r.</h1>
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
        
        $__internal_d6280e0e729513c323d35b9e9ab3a32764a5b2f8294bbbea20a350c63fee8f97->leave($__internal_d6280e0e729513c323d35b9e9ab3a32764a5b2f8294bbbea20a350c63fee8f97_prof);

        
        $__internal_0a6617941eaaae7712f7b392168fd9487d3ac34f0a1caf482b8ac46e506fe7df->leave($__internal_0a6617941eaaae7712f7b392168fd9487d3ac34f0a1caf482b8ac46e506fe7df_prof);

    }

    // line 66
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_086ead84e04709c4c90db521bb180cca86531a42e890bfa462b84dfa6c4a75da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_086ead84e04709c4c90db521bb180cca86531a42e890bfa462b84dfa6c4a75da->enter($__internal_086ead84e04709c4c90db521bb180cca86531a42e890bfa462b84dfa6c4a75da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_da6769236a21aeff1894e079b4ca9f36106b48f170faffe9f4a1da3399226d8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da6769236a21aeff1894e079b4ca9f36106b48f170faffe9f4a1da3399226d8f->enter($__internal_da6769236a21aeff1894e079b4ca9f36106b48f170faffe9f4a1da3399226d8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 67
        echo "    <script type=\"text/javascript\" src=\"http://code.jquery.com/jquery-latest.js\"></script>
    <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBxvWmkG3pYY6DaFxUzvRiyvttqYjdX15Q&libraries=places&callback=initAutocomplete\" async defer></script>
    <script>
        var placeSearch, autocomplete, geocoder;

        //Autocompletion de l'adresse
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
            placeIdInput.value = place.place_id;   //On met le placeId du lieu qui vient d'être rentré dans l'hidden input placeId
        }

        //Rempli la searchbox de notre localisation lorsqu'on appuye sur le bouton géolocalisation
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
                                    var geoLocationResult = results[0].formatted_address.substring(6 , results[0].formatted_address.length);   //Un peu à l'arrache, mais on passe de 02880, Bucy-le-Long, France à Bucy-le-Long, France
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
        
        $__internal_da6769236a21aeff1894e079b4ca9f36106b48f170faffe9f4a1da3399226d8f->leave($__internal_da6769236a21aeff1894e079b4ca9f36106b48f170faffe9f4a1da3399226d8f_prof);

        
        $__internal_086ead84e04709c4c90db521bb180cca86531a42e890bfa462b84dfa6c4a75da->leave($__internal_086ead84e04709c4c90db521bb180cca86531a42e890bfa462b84dfa6c4a75da_prof);

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

    <h1 class=\"titre margin-left\">Vous prévoyez une séance de course à pied, une sortie vélo, une randonnée ou autre ? Trouvez l’itinéraire qu’il vous faut grâçe à Itin'r.</h1>
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

        //Autocompletion de l'adresse
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
            placeIdInput.value = place.place_id;   //On met le placeId du lieu qui vient d'être rentré dans l'hidden input placeId
        }

        //Rempli la searchbox de notre localisation lorsqu'on appuye sur le bouton géolocalisation
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
                                    var geoLocationResult = results[0].formatted_address.substring(6 , results[0].formatted_address.length);   //Un peu à l'arrache, mais on passe de 02880, Bucy-le-Long, France à Bucy-le-Long, France
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
