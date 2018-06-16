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
        $__internal_f2ba780d49fe04af32c9c8c815131d157c9a4039955598b8f58df9ed7d02c35f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2ba780d49fe04af32c9c8c815131d157c9a4039955598b8f58df9ed7d02c35f->enter($__internal_f2ba780d49fe04af32c9c8c815131d157c9a4039955598b8f58df9ed7d02c35f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "content/profil.html.twig"));

        $__internal_5d4ab754dd980c5a155433e31b507af1d73850ec8cbafcb1da19177c9a106bc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d4ab754dd980c5a155433e31b507af1d73850ec8cbafcb1da19177c9a106bc1->enter($__internal_5d4ab754dd980c5a155433e31b507af1d73850ec8cbafcb1da19177c9a106bc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "content/profil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f2ba780d49fe04af32c9c8c815131d157c9a4039955598b8f58df9ed7d02c35f->leave($__internal_f2ba780d49fe04af32c9c8c815131d157c9a4039955598b8f58df9ed7d02c35f_prof);

        
        $__internal_5d4ab754dd980c5a155433e31b507af1d73850ec8cbafcb1da19177c9a106bc1->leave($__internal_5d4ab754dd980c5a155433e31b507af1d73850ec8cbafcb1da19177c9a106bc1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_73abd3b114db24634a5c4d5768dc5dfce9910a36c24b4fcfd4028d656b593ae4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73abd3b114db24634a5c4d5768dc5dfce9910a36c24b4fcfd4028d656b593ae4->enter($__internal_73abd3b114db24634a5c4d5768dc5dfce9910a36c24b4fcfd4028d656b593ae4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_14491c5bd3771dc4c23bc16864155f17872d8db228a9903031a53ec78ef1b053 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14491c5bd3771dc4c23bc16864155f17872d8db228a9903031a53ec78ef1b053->enter($__internal_14491c5bd3771dc4c23bc16864155f17872d8db228a9903031a53ec78ef1b053_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Mon profil";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_14491c5bd3771dc4c23bc16864155f17872d8db228a9903031a53ec78ef1b053->leave($__internal_14491c5bd3771dc4c23bc16864155f17872d8db228a9903031a53ec78ef1b053_prof);

        
        $__internal_73abd3b114db24634a5c4d5768dc5dfce9910a36c24b4fcfd4028d656b593ae4->leave($__internal_73abd3b114db24634a5c4d5768dc5dfce9910a36c24b4fcfd4028d656b593ae4_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d3d96b30063f9a258952998782823a90698a79ea1b0c2cff21268a4a1d89b4a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3d96b30063f9a258952998782823a90698a79ea1b0c2cff21268a4a1d89b4a2->enter($__internal_d3d96b30063f9a258952998782823a90698a79ea1b0c2cff21268a4a1d89b4a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_d9691b3ff839c20a06751dcef1802107c65174dc383e01700fbe6ef1d301cef2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9691b3ff839c20a06751dcef1802107c65174dc383e01700fbe6ef1d301cef2->enter($__internal_d9691b3ff839c20a06751dcef1802107c65174dc383e01700fbe6ef1d301cef2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/profil.css"), "html", null, true);
        
        $__internal_d9691b3ff839c20a06751dcef1802107c65174dc383e01700fbe6ef1d301cef2->leave($__internal_d9691b3ff839c20a06751dcef1802107c65174dc383e01700fbe6ef1d301cef2_prof);

        
        $__internal_d3d96b30063f9a258952998782823a90698a79ea1b0c2cff21268a4a1d89b4a2->leave($__internal_d3d96b30063f9a258952998782823a90698a79ea1b0c2cff21268a4a1d89b4a2_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_573491ea9f21dee1647b735453f8b87253a3be036a5c1bcd65b8394d4d1e7676 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_573491ea9f21dee1647b735453f8b87253a3be036a5c1bcd65b8394d4d1e7676->enter($__internal_573491ea9f21dee1647b735453f8b87253a3be036a5c1bcd65b8394d4d1e7676_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4f93e0d933ef3060297f690d9a4ddb8e0d763335eb08ff9ca160cc9ba3bf5905 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f93e0d933ef3060297f690d9a4ddb8e0d763335eb08ff9ca160cc9ba3bf5905->enter($__internal_4f93e0d933ef3060297f690d9a4ddb8e0d763335eb08ff9ca160cc9ba3bf5905_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    ";
        $this->loadTemplate("flash_messages.html.twig", "content/profil.html.twig", 8)->display($context);
        // line 9
        echo "
    <h1 class=\"titre margin-left\">Mon profil</h1>
    <div class=\"titre-separation margin-left\"></div>

    <div class=\"section1-container\">
        <div class=\"bonjour-container margin-left\"><div class=\"avatar-container\"><a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("newAvatar");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 14, $this->getSourceContext()); })()), "user", array()), "image", array()), "html", null, true);
        echo "\" class=\"avatar\"/></a></div><p>Bonjour <span class=\"bonjour-nom\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 14, $this->getSourceContext()); })()), "user", array()), "surname", array()), "html", null, true);
        echo "</span></p></div>
        <a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modifier_profil");
        echo "\" class=\"modifier margin-left\">Modifier mes informations<img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/edit(1).png"), "html", null, true);
        echo "\"/></a>
    </div>

    <div class=\"informations-container margin-left\">
        <h2 class=\"informations-titre\">Mes informations</h2>
        <p class=\"informations-username informations-content\">Nom d'utilisateur<span>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 20, $this->getSourceContext()); })()), "user", array()), "username", array()), "html", null, true);
        echo "</span></p>
        <p class=\"informations-email informations-content\">Adresse email<span>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 21, $this->getSourceContext()); })()), "user", array()), "email", array()), "html", null, true);
        echo "</span></p>
        <a href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("conditions");
        echo "\" title=\"Spoil: pas grand chose\" class=\"informations-privacy\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/icons8-privacy-16.png"), "html", null, true);
        echo "\"/>Que faisons-nous de vos données ?</a>
    </div>

    <div class=\"itineraires-container margin-left\">
        <h2 class=\"itineraires-titre\">Mes itinéraires<span>";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["nbPaths"]) || array_key_exists("nbPaths", $context) ? $context["nbPaths"] : (function () { throw new Twig_Error_Runtime('Variable "nbPaths" does not exist.', 26, $this->getSourceContext()); })()), "html", null, true);
        echo "</span></h2>
        <div class=\"resultats-bigcontainer\">
            <div class=\"resultats-container\">
                ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["resultatPath"]) || array_key_exists("resultatPath", $context) ? $context["resultatPath"] : (function () { throw new Twig_Error_Runtime('Variable "resultatPath" does not exist.', 29, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["path"]) {
            // line 30
            echo "                    <div class=\"resultat-container\">
                        <p class=\"resultat-titre\">";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["path"], "titre", array()), "html", null, true);
            echo "</p>
                        <div class=\"resultat-titre-sepa\"></div>
                        <p>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["path"], "typeSport", array()), "html", null, true);
            echo "</p>
                        <p>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["path"], "auteur", array()), "html", null, true);
            echo "</p>
                        <p id=\"resultat-placeId\">
                            ";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["path"], "placeId", array()), "html", null, true);
            echo "
                        </p>
                        <p>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["path"], "note", array()), "html", null, true);
            echo "</p>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['path'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "            </div>
        </div>
    </div>
";
        
        $__internal_4f93e0d933ef3060297f690d9a4ddb8e0d763335eb08ff9ca160cc9ba3bf5905->leave($__internal_4f93e0d933ef3060297f690d9a4ddb8e0d763335eb08ff9ca160cc9ba3bf5905_prof);

        
        $__internal_573491ea9f21dee1647b735453f8b87253a3be036a5c1bcd65b8394d4d1e7676->leave($__internal_573491ea9f21dee1647b735453f8b87253a3be036a5c1bcd65b8394d4d1e7676_prof);

    }

    // line 46
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b51cbb156800275cf73f4ffc9468f2db28ce6dd695a0be2766fb2e47c2901c69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b51cbb156800275cf73f4ffc9468f2db28ce6dd695a0be2766fb2e47c2901c69->enter($__internal_b51cbb156800275cf73f4ffc9468f2db28ce6dd695a0be2766fb2e47c2901c69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_e1c44758f03b075c3eaedc12df7cd440522aa63962da07dccf484d1d1ae0acf6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1c44758f03b075c3eaedc12df7cd440522aa63962da07dccf484d1d1ae0acf6->enter($__internal_e1c44758f03b075c3eaedc12df7cd440522aa63962da07dccf484d1d1ae0acf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 47
        echo "    <script>
    </script>
";
        
        $__internal_e1c44758f03b075c3eaedc12df7cd440522aa63962da07dccf484d1d1ae0acf6->leave($__internal_e1c44758f03b075c3eaedc12df7cd440522aa63962da07dccf484d1d1ae0acf6_prof);

        
        $__internal_b51cbb156800275cf73f4ffc9468f2db28ce6dd695a0be2766fb2e47c2901c69->leave($__internal_b51cbb156800275cf73f4ffc9468f2db28ce6dd695a0be2766fb2e47c2901c69_prof);

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
        return array (  197 => 47,  188 => 46,  175 => 41,  166 => 38,  161 => 36,  156 => 34,  152 => 33,  147 => 31,  144 => 30,  140 => 29,  134 => 26,  125 => 22,  121 => 21,  117 => 20,  107 => 15,  99 => 14,  92 => 9,  89 => 8,  80 => 7,  62 => 5,  43 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Mon profil{{ parent() }}{% endblock %}

{% block stylesheets %}{{ asset('build/profil.css') }}{% endblock %}

{% block body %}
    {% include 'flash_messages.html.twig' %}

    <h1 class=\"titre margin-left\">Mon profil</h1>
    <div class=\"titre-separation margin-left\"></div>

    <div class=\"section1-container\">
        <div class=\"bonjour-container margin-left\"><div class=\"avatar-container\"><a href=\"{{ path('newAvatar') }}\"><img src=\"{{ app.user.image }}\" class=\"avatar\"/></a></div><p>Bonjour <span class=\"bonjour-nom\">{{ app.user.surname }}</span></p></div>
        <a href=\"{{ path('modifier_profil') }}\" class=\"modifier margin-left\">Modifier mes informations<img src=\"{{ asset('images/edit(1).png') }}\"/></a>
    </div>

    <div class=\"informations-container margin-left\">
        <h2 class=\"informations-titre\">Mes informations</h2>
        <p class=\"informations-username informations-content\">Nom d'utilisateur<span>{{ app.user.username }}</span></p>
        <p class=\"informations-email informations-content\">Adresse email<span>{{ app.user.email }}</span></p>
        <a href=\"{{ path('conditions') }}\" title=\"Spoil: pas grand chose\" class=\"informations-privacy\"><img src=\"{{ asset('images/icons8-privacy-16.png') }}\"/>Que faisons-nous de vos données ?</a>
    </div>

    <div class=\"itineraires-container margin-left\">
        <h2 class=\"itineraires-titre\">Mes itinéraires<span>{{ nbPaths }}</span></h2>
        <div class=\"resultats-bigcontainer\">
            <div class=\"resultats-container\">
                {% for path in resultatPath %}
                    <div class=\"resultat-container\">
                        <p class=\"resultat-titre\">{{ path.titre }}</p>
                        <div class=\"resultat-titre-sepa\"></div>
                        <p>{{ path.typeSport }}</p>
                        <p>{{ path.auteur }}</p>
                        <p id=\"resultat-placeId\">
                            {{ path.placeId }}
                        </p>
                        <p>{{ path.note }}</p>
                    </div>
                {% endfor %}
            </div>
        </div>
    </div>
{% endblock %}

{% block javascripts %}
    <script>
    </script>
{% endblock %}", "content/profil.html.twig", "C:\\wamp64\\www\\mapbox\\templates\\content\\profil.html.twig");
    }
}
