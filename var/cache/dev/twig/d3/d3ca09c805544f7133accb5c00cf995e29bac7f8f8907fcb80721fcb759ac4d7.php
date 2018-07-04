<?php

/* content/profil.html.twig */
class __TwigTemplate_f40a599ad70a896c0a1cc9852f6a1dc171d183b0a39719062a55217512952e9b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "content/profil.html.twig", 1);
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
        $__internal_36ae1d0e731cf614eba1747c39a4e19c81b9b733dd87bb03834e11858f516593 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36ae1d0e731cf614eba1747c39a4e19c81b9b733dd87bb03834e11858f516593->enter($__internal_36ae1d0e731cf614eba1747c39a4e19c81b9b733dd87bb03834e11858f516593_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "content/profil.html.twig"));

        $__internal_418d7a440c66699d05f4daf69bd2d846a3ebe4f1847e3fb56824a7a7794fd7dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_418d7a440c66699d05f4daf69bd2d846a3ebe4f1847e3fb56824a7a7794fd7dd->enter($__internal_418d7a440c66699d05f4daf69bd2d846a3ebe4f1847e3fb56824a7a7794fd7dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "content/profil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_36ae1d0e731cf614eba1747c39a4e19c81b9b733dd87bb03834e11858f516593->leave($__internal_36ae1d0e731cf614eba1747c39a4e19c81b9b733dd87bb03834e11858f516593_prof);

        
        $__internal_418d7a440c66699d05f4daf69bd2d846a3ebe4f1847e3fb56824a7a7794fd7dd->leave($__internal_418d7a440c66699d05f4daf69bd2d846a3ebe4f1847e3fb56824a7a7794fd7dd_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_fa91839c9ad4fb4689f61c214fbcbb9d025532953e2683e69f92edfac0de21c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa91839c9ad4fb4689f61c214fbcbb9d025532953e2683e69f92edfac0de21c0->enter($__internal_fa91839c9ad4fb4689f61c214fbcbb9d025532953e2683e69f92edfac0de21c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_527d27c6176e20bed240eb05dd55d5804e37aafe48af6b6920a89fa2b57fb1e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_527d27c6176e20bed240eb05dd55d5804e37aafe48af6b6920a89fa2b57fb1e3->enter($__internal_527d27c6176e20bed240eb05dd55d5804e37aafe48af6b6920a89fa2b57fb1e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 3, $this->getSourceContext()); })()), "username", array()), "html", null, true);
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_527d27c6176e20bed240eb05dd55d5804e37aafe48af6b6920a89fa2b57fb1e3->leave($__internal_527d27c6176e20bed240eb05dd55d5804e37aafe48af6b6920a89fa2b57fb1e3_prof);

        
        $__internal_fa91839c9ad4fb4689f61c214fbcbb9d025532953e2683e69f92edfac0de21c0->leave($__internal_fa91839c9ad4fb4689f61c214fbcbb9d025532953e2683e69f92edfac0de21c0_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c22d8d958849b14d1bdb0c30e08ab636f93b6a33d67fd2faf4e14a2e8fa0ea41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c22d8d958849b14d1bdb0c30e08ab636f93b6a33d67fd2faf4e14a2e8fa0ea41->enter($__internal_c22d8d958849b14d1bdb0c30e08ab636f93b6a33d67fd2faf4e14a2e8fa0ea41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_f81c992846d30d639a38290797ebbdec6f2bb11a7c64972fe7022f4ac4ca70d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f81c992846d30d639a38290797ebbdec6f2bb11a7c64972fe7022f4ac4ca70d4->enter($__internal_f81c992846d30d639a38290797ebbdec6f2bb11a7c64972fe7022f4ac4ca70d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/profil.css"), "html", null, true);
        
        $__internal_f81c992846d30d639a38290797ebbdec6f2bb11a7c64972fe7022f4ac4ca70d4->leave($__internal_f81c992846d30d639a38290797ebbdec6f2bb11a7c64972fe7022f4ac4ca70d4_prof);

        
        $__internal_c22d8d958849b14d1bdb0c30e08ab636f93b6a33d67fd2faf4e14a2e8fa0ea41->leave($__internal_c22d8d958849b14d1bdb0c30e08ab636f93b6a33d67fd2faf4e14a2e8fa0ea41_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_e7cc13e8f299ff56820382ebb246f26d447b58f0ed252c41f2ddf9acd81440d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7cc13e8f299ff56820382ebb246f26d447b58f0ed252c41f2ddf9acd81440d4->enter($__internal_e7cc13e8f299ff56820382ebb246f26d447b58f0ed252c41f2ddf9acd81440d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5445a0430b1eccc3cf0924c5197f46273c2f3176323b66d3f71a057f34953855 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5445a0430b1eccc3cf0924c5197f46273c2f3176323b66d3f71a057f34953855->enter($__internal_5445a0430b1eccc3cf0924c5197f46273c2f3176323b66d3f71a057f34953855_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    ";
        $this->loadTemplate("flash_messages.html.twig", "content/profil.html.twig", 8)->display($context);
        // line 9
        echo "
    <h1 class=\"titre margin-left\"><div class=\"avatar-container\"><img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->getSourceContext()); })()), "image", array())), "html", null, true);
        echo "\" class=\"avatar\"/></div>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->getSourceContext()); })()), "username", array()), "html", null, true);
        echo "</h1>
    <div class=\"titre-separation margin-left\"></div>

    <div class=\"itineraires-container margin-left\">
        ";
        // line 14
        if (array_key_exists("nbPaths", $context)) {
            // line 15
            echo "            <h2 class=\"itineraires-titre\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 15, $this->getSourceContext()); })()), "surname", array()), "html", null, true);
            echo " a déjà partagé <span class=\"itineraires-titre-profil-span\">";
            echo twig_escape_filter($this->env, (isset($context["nbPaths"]) || array_key_exists("nbPaths", $context) ? $context["nbPaths"] : (function () { throw new Twig_Error_Runtime('Variable "nbPaths" does not exist.', 15, $this->getSourceContext()); })()), "html", null, true);
            echo "</span> itinéraires</h2>
            <div class=\"resultats-bigcontainer\">
                <div class=\"resultats-container\">
                    ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["resultatPath"]) || array_key_exists("resultatPath", $context) ? $context["resultatPath"] : (function () { throw new Twig_Error_Runtime('Variable "resultatPath" does not exist.', 18, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["path"]) {
                // line 19
                echo "                        <a class=\"resultat-container\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("itineraire", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["path"], "id", array()))), "html", null, true);
                echo "\">
                            <p class=\"resultat-titre\">";
                // line 20
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["path"], "titre", array()), "html", null, true);
                echo "</p>
                            <div class=\"resultat-titre-sepa\"></div>
                            <p class=\"resultat-typeSport resultat-margin-left\">
                                ";
                // line 23
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["path"], "typeSport", array()) == "marche")) {
                    // line 24
                    echo "                                    <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/chercher_typeSport3.png"), "html", null, true);
                    echo "\"/>
                                    Marche
                                ";
                } elseif ((twig_get_attribute($this->env, $this->getSourceContext(),                 // line 26
$context["path"], "typeSport", array()) == "course")) {
                    // line 27
                    echo "                                    <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/chercher_typeSport2.png"), "html", null, true);
                    echo "\"/>
                                    Course à pied
                                ";
                } elseif ((twig_get_attribute($this->env, $this->getSourceContext(),                 // line 29
$context["path"], "typeSport", array()) == "veloroute")) {
                    // line 30
                    echo "                                    <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/chercher_typeSport4.png"), "html", null, true);
                    echo "\"/>
                                    Vélo de route
                                ";
                } elseif ((twig_get_attribute($this->env, $this->getSourceContext(),                 // line 32
$context["path"], "typeSport", array()) == "vtt")) {
                    // line 33
                    echo "                                    <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/chercher_typeSport5.png"), "html", null, true);
                    echo "\"/>
                                    VTT
                                ";
                } elseif ((twig_get_attribute($this->env, $this->getSourceContext(),                 // line 35
$context["path"], "typeSport", array()) == "autre")) {
                    // line 36
                    echo "                                    <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/chercher_typeSport1.png"), "html", null, true);
                    echo "\"/>
                                    Autre
                                ";
                }
                // line 39
                echo "                            </p>
                            <p class=\"resultat-auteur resultat-margin-left\">";
                // line 40
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["path"], "auteur", array()), "html", null, true);
                echo "</p>
                            <p id=\"resultat-placeId\" class=\"resultat-margin-left\">
                                ";
                // line 42
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["path"], "placeId", array()), "html", null, true);
                echo "
                            </p>
                        </a>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['path'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "                </div>
            </div>
        ";
        } else {
            // line 49
            echo "            <h2 class=\"itineraires-vide\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/profil_vide.png"), "html", null, true);
            echo "\"/>C’est un peu vide ici...</h2>
            <p class=\"itineraires-vide-p\"><span>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 50, $this->getSourceContext()); })()), "surname", array()), "html", null, true);
            echo "</span> n’a toujours pas partagé d’itinéraires</p>
        ";
        }
        // line 52
        echo "    </div>
";
        
        $__internal_5445a0430b1eccc3cf0924c5197f46273c2f3176323b66d3f71a057f34953855->leave($__internal_5445a0430b1eccc3cf0924c5197f46273c2f3176323b66d3f71a057f34953855_prof);

        
        $__internal_e7cc13e8f299ff56820382ebb246f26d447b58f0ed252c41f2ddf9acd81440d4->leave($__internal_e7cc13e8f299ff56820382ebb246f26d447b58f0ed252c41f2ddf9acd81440d4_prof);

    }

    // line 55
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_859aaf52231a40cf7d05047a7cb76ef08df521956cd40615b832d4f6515310a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_859aaf52231a40cf7d05047a7cb76ef08df521956cd40615b832d4f6515310a6->enter($__internal_859aaf52231a40cf7d05047a7cb76ef08df521956cd40615b832d4f6515310a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_1e124df0f344ef1b45df4fa14ae1cac2652a95e908f42e319b120426b03ccfb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e124df0f344ef1b45df4fa14ae1cac2652a95e908f42e319b120426b03ccfb1->enter($__internal_1e124df0f344ef1b45df4fa14ae1cac2652a95e908f42e319b120426b03ccfb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_1e124df0f344ef1b45df4fa14ae1cac2652a95e908f42e319b120426b03ccfb1->leave($__internal_1e124df0f344ef1b45df4fa14ae1cac2652a95e908f42e319b120426b03ccfb1_prof);

        
        $__internal_859aaf52231a40cf7d05047a7cb76ef08df521956cd40615b832d4f6515310a6->leave($__internal_859aaf52231a40cf7d05047a7cb76ef08df521956cd40615b832d4f6515310a6_prof);

    }

    public function getTemplateName()
    {
        return "content/profil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 55,  204 => 52,  199 => 50,  194 => 49,  189 => 46,  179 => 42,  174 => 40,  171 => 39,  164 => 36,  162 => 35,  156 => 33,  154 => 32,  148 => 30,  146 => 29,  140 => 27,  138 => 26,  132 => 24,  130 => 23,  124 => 20,  119 => 19,  115 => 18,  106 => 15,  104 => 14,  95 => 10,  92 => 9,  89 => 8,  80 => 7,  62 => 5,  43 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}{{ user.username }}{{ parent() }}{% endblock %}

{% block stylesheets %}{{ asset('build/profil.css') }}{% endblock %}

{% block body %}
    {% include 'flash_messages.html.twig' %}

    <h1 class=\"titre margin-left\"><div class=\"avatar-container\"><img src=\"{{ asset(user.image) }}\" class=\"avatar\"/></div>{{ user.username }}</h1>
    <div class=\"titre-separation margin-left\"></div>

    <div class=\"itineraires-container margin-left\">
        {% if nbPaths is defined %}
            <h2 class=\"itineraires-titre\">{{ user.surname }} a déjà partagé <span class=\"itineraires-titre-profil-span\">{{ nbPaths }}</span> itinéraires</h2>
            <div class=\"resultats-bigcontainer\">
                <div class=\"resultats-container\">
                    {% for path in resultatPath %}
                        <a class=\"resultat-container\" href=\"{{ path('itineraire', {'id': path.id}) }}\">
                            <p class=\"resultat-titre\">{{ path.titre }}</p>
                            <div class=\"resultat-titre-sepa\"></div>
                            <p class=\"resultat-typeSport resultat-margin-left\">
                                {% if path.typeSport == \"marche\" %}
                                    <img src=\"{{ asset('images/chercher_typeSport3.png') }}\"/>
                                    Marche
                                {% elseif path.typeSport == \"course\" %}
                                    <img src=\"{{ asset('images/chercher_typeSport2.png') }}\"/>
                                    Course à pied
                                {% elseif path.typeSport == \"veloroute\" %}
                                    <img src=\"{{ asset('images/chercher_typeSport4.png') }}\"/>
                                    Vélo de route
                                {% elseif path.typeSport == \"vtt\" %}
                                    <img src=\"{{ asset('images/chercher_typeSport5.png') }}\"/>
                                    VTT
                                {% elseif path.typeSport == \"autre\" %}
                                    <img src=\"{{ asset('images/chercher_typeSport1.png') }}\"/>
                                    Autre
                                {% endif %}
                            </p>
                            <p class=\"resultat-auteur resultat-margin-left\">{{ path.auteur }}</p>
                            <p id=\"resultat-placeId\" class=\"resultat-margin-left\">
                                {{ path.placeId }}
                            </p>
                        </a>
                    {% endfor %}
                </div>
            </div>
        {% else %}
            <h2 class=\"itineraires-vide\"><img src=\"{{ asset('images/profil_vide.png') }}\"/>C’est un peu vide ici...</h2>
            <p class=\"itineraires-vide-p\"><span>{{ user.surname }}</span> n’a toujours pas partagé d’itinéraires</p>
        {% endif %}
    </div>
{% endblock %}

{% block javascripts %}
{% endblock %}", "content/profil.html.twig", "C:\\wamp64\\www\\mapbox\\templates\\content\\profil.html.twig");
    }
}
