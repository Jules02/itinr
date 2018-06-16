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
        $__internal_e4777897ca9a24d5fd955d643fb6eb70209d406df9dda82e9d6b9053abea074d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4777897ca9a24d5fd955d643fb6eb70209d406df9dda82e9d6b9053abea074d->enter($__internal_e4777897ca9a24d5fd955d643fb6eb70209d406df9dda82e9d6b9053abea074d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "content/profil.html.twig"));

        $__internal_f94c23817b2fcf852b0022581de6205285306c6f20751f9c1e3958f07fd6dfdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f94c23817b2fcf852b0022581de6205285306c6f20751f9c1e3958f07fd6dfdc->enter($__internal_f94c23817b2fcf852b0022581de6205285306c6f20751f9c1e3958f07fd6dfdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "content/profil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e4777897ca9a24d5fd955d643fb6eb70209d406df9dda82e9d6b9053abea074d->leave($__internal_e4777897ca9a24d5fd955d643fb6eb70209d406df9dda82e9d6b9053abea074d_prof);

        
        $__internal_f94c23817b2fcf852b0022581de6205285306c6f20751f9c1e3958f07fd6dfdc->leave($__internal_f94c23817b2fcf852b0022581de6205285306c6f20751f9c1e3958f07fd6dfdc_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_033596b64381a2be2c887bcac94c74f2bbac3cce24b5c28245a7bcbad8cfb9ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_033596b64381a2be2c887bcac94c74f2bbac3cce24b5c28245a7bcbad8cfb9ce->enter($__internal_033596b64381a2be2c887bcac94c74f2bbac3cce24b5c28245a7bcbad8cfb9ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0450033a28cf02f7a1379ece28c084ddc62514c10e3dc60250d0cb3b116d91ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0450033a28cf02f7a1379ece28c084ddc62514c10e3dc60250d0cb3b116d91ab->enter($__internal_0450033a28cf02f7a1379ece28c084ddc62514c10e3dc60250d0cb3b116d91ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Mon profil";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_0450033a28cf02f7a1379ece28c084ddc62514c10e3dc60250d0cb3b116d91ab->leave($__internal_0450033a28cf02f7a1379ece28c084ddc62514c10e3dc60250d0cb3b116d91ab_prof);

        
        $__internal_033596b64381a2be2c887bcac94c74f2bbac3cce24b5c28245a7bcbad8cfb9ce->leave($__internal_033596b64381a2be2c887bcac94c74f2bbac3cce24b5c28245a7bcbad8cfb9ce_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_eed93385a2766beae79cd2b2a48e6acad7e51853d165f16be2d962c6359fce9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eed93385a2766beae79cd2b2a48e6acad7e51853d165f16be2d962c6359fce9d->enter($__internal_eed93385a2766beae79cd2b2a48e6acad7e51853d165f16be2d962c6359fce9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_fd72ec348758f02674bd76573570e31f1dac2b4ef381c296e900785b43d33095 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd72ec348758f02674bd76573570e31f1dac2b4ef381c296e900785b43d33095->enter($__internal_fd72ec348758f02674bd76573570e31f1dac2b4ef381c296e900785b43d33095_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/profil.css"), "html", null, true);
        
        $__internal_fd72ec348758f02674bd76573570e31f1dac2b4ef381c296e900785b43d33095->leave($__internal_fd72ec348758f02674bd76573570e31f1dac2b4ef381c296e900785b43d33095_prof);

        
        $__internal_eed93385a2766beae79cd2b2a48e6acad7e51853d165f16be2d962c6359fce9d->leave($__internal_eed93385a2766beae79cd2b2a48e6acad7e51853d165f16be2d962c6359fce9d_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_49763f10f7676f29bec36a05c1b3f02185365813b2d0f2aa431c757e58812700 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49763f10f7676f29bec36a05c1b3f02185365813b2d0f2aa431c757e58812700->enter($__internal_49763f10f7676f29bec36a05c1b3f02185365813b2d0f2aa431c757e58812700_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_78acfdceb1b97ac1bee582e512e568afc1334e46a1a9b66961539a98aac522ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78acfdceb1b97ac1bee582e512e568afc1334e46a1a9b66961539a98aac522ab->enter($__internal_78acfdceb1b97ac1bee582e512e568afc1334e46a1a9b66961539a98aac522ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/modifier_profil.png"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/profil_privacy.png"), "html", null, true);
        echo "\"/>Que faisons-nous de vos données ?</a>
    </div>

    <div class=\"itineraires-container margin-left\">
        ";
        // line 26
        if (array_key_exists("nbPaths", $context)) {
            // line 27
            echo "        <h2 class=\"itineraires-titre\">Mes itinéraires<span>";
            echo twig_escape_filter($this->env, (isset($context["nbPaths"]) || array_key_exists("nbPaths", $context) ? $context["nbPaths"] : (function () { throw new Twig_Error_Runtime('Variable "nbPaths" does not exist.', 27, $this->getSourceContext()); })()), "html", null, true);
            echo "</span></h2>
        <div class=\"resultats-bigcontainer\">
            <div class=\"resultats-container\">
                ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["resultatPath"]) || array_key_exists("resultatPath", $context) ? $context["resultatPath"] : (function () { throw new Twig_Error_Runtime('Variable "resultatPath" does not exist.', 30, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["path"]) {
                // line 31
                echo "                    <div class=\"resultat-container\">
                        <p class=\"resultat-titre\">";
                // line 32
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["path"], "titre", array()), "html", null, true);
                echo "</p>
                        <div class=\"resultat-titre-sepa\"></div>
                        <p>";
                // line 34
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["path"], "typeSport", array()), "html", null, true);
                echo "</p>
                        <p>";
                // line 35
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["path"], "auteur", array()), "html", null, true);
                echo "</p>
                        <p id=\"resultat-placeId\">
                            ";
                // line 37
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["path"], "placeId", array()), "html", null, true);
                echo "
                        </p>
                        <p>";
                // line 39
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["path"], "note", array()), "html", null, true);
                echo "</p>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['path'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "            </div>
        </div>
        ";
        } else {
            // line 45
            echo "            <h2 class=\"itineraires-titre\">Mes itinéraires<span>0</span></h2>
            <p class=\"itineraires-null\">Vous n'avez toujours pas posté d'itinéraires 🙁</p>
            <a class=\"itineraires-null-a\" href=\"";
            // line 47
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("aide");
            echo "\">Découvrez comment</a>
        ";
        }
        // line 49
        echo "    </div>
";
        
        $__internal_78acfdceb1b97ac1bee582e512e568afc1334e46a1a9b66961539a98aac522ab->leave($__internal_78acfdceb1b97ac1bee582e512e568afc1334e46a1a9b66961539a98aac522ab_prof);

        
        $__internal_49763f10f7676f29bec36a05c1b3f02185365813b2d0f2aa431c757e58812700->leave($__internal_49763f10f7676f29bec36a05c1b3f02185365813b2d0f2aa431c757e58812700_prof);

    }

    // line 52
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_82253591e2b0805a7735100b261d8a0370dfa59e62bf05cd04a7827caebec874 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82253591e2b0805a7735100b261d8a0370dfa59e62bf05cd04a7827caebec874->enter($__internal_82253591e2b0805a7735100b261d8a0370dfa59e62bf05cd04a7827caebec874_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_aef74574807d48e4cf65044c7cfadc3c8d497f1fc14e6cd9a346a26946fb9f2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aef74574807d48e4cf65044c7cfadc3c8d497f1fc14e6cd9a346a26946fb9f2b->enter($__internal_aef74574807d48e4cf65044c7cfadc3c8d497f1fc14e6cd9a346a26946fb9f2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 53
        echo "    <script>
    </script>
";
        
        $__internal_aef74574807d48e4cf65044c7cfadc3c8d497f1fc14e6cd9a346a26946fb9f2b->leave($__internal_aef74574807d48e4cf65044c7cfadc3c8d497f1fc14e6cd9a346a26946fb9f2b_prof);

        
        $__internal_82253591e2b0805a7735100b261d8a0370dfa59e62bf05cd04a7827caebec874->leave($__internal_82253591e2b0805a7735100b261d8a0370dfa59e62bf05cd04a7827caebec874_prof);

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
        return array (  212 => 53,  203 => 52,  192 => 49,  187 => 47,  183 => 45,  178 => 42,  169 => 39,  164 => 37,  159 => 35,  155 => 34,  150 => 32,  147 => 31,  143 => 30,  136 => 27,  134 => 26,  125 => 22,  121 => 21,  117 => 20,  107 => 15,  99 => 14,  92 => 9,  89 => 8,  80 => 7,  62 => 5,  43 => 3,  11 => 1,);
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
        <a href=\"{{ path('modifier_profil') }}\" class=\"modifier margin-left\">Modifier mes informations<img src=\"{{ asset('images/modifier_profil.png') }}\"/></a>
    </div>

    <div class=\"informations-container margin-left\">
        <h2 class=\"informations-titre\">Mes informations</h2>
        <p class=\"informations-username informations-content\">Nom d'utilisateur<span>{{ app.user.username }}</span></p>
        <p class=\"informations-email informations-content\">Adresse email<span>{{ app.user.email }}</span></p>
        <a href=\"{{ path('conditions') }}\" title=\"Spoil: pas grand chose\" class=\"informations-privacy\"><img src=\"{{ asset('images/profil_privacy.png') }}\"/>Que faisons-nous de vos données ?</a>
    </div>

    <div class=\"itineraires-container margin-left\">
        {% if nbPaths is defined %}
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
        {% else %}
            <h2 class=\"itineraires-titre\">Mes itinéraires<span>0</span></h2>
            <p class=\"itineraires-null\">Vous n'avez toujours pas posté d'itinéraires 🙁</p>
            <a class=\"itineraires-null-a\" href=\"{{ path('aide') }}\">Découvrez comment</a>
        {% endif %}
    </div>
{% endblock %}

{% block javascripts %}
    <script>
    </script>
{% endblock %}", "content/profil.html.twig", "C:\\wamp64\\www\\mapbox\\templates\\content\\profil.html.twig");
    }
}
