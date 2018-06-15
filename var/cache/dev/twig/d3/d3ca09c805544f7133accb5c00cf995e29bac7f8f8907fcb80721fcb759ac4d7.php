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
        $__internal_6e4501ec0dcc10a80c024484eacf47a4ba3fb99123fdcb8dea903d265bc12b22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e4501ec0dcc10a80c024484eacf47a4ba3fb99123fdcb8dea903d265bc12b22->enter($__internal_6e4501ec0dcc10a80c024484eacf47a4ba3fb99123fdcb8dea903d265bc12b22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "content/profil.html.twig"));

        $__internal_989b1cc4f9364d006c5e0391291d76a6e72b41d77097ee0db837a6176f2f1870 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_989b1cc4f9364d006c5e0391291d76a6e72b41d77097ee0db837a6176f2f1870->enter($__internal_989b1cc4f9364d006c5e0391291d76a6e72b41d77097ee0db837a6176f2f1870_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "content/profil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6e4501ec0dcc10a80c024484eacf47a4ba3fb99123fdcb8dea903d265bc12b22->leave($__internal_6e4501ec0dcc10a80c024484eacf47a4ba3fb99123fdcb8dea903d265bc12b22_prof);

        
        $__internal_989b1cc4f9364d006c5e0391291d76a6e72b41d77097ee0db837a6176f2f1870->leave($__internal_989b1cc4f9364d006c5e0391291d76a6e72b41d77097ee0db837a6176f2f1870_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_682a01a74433c8bf976f6366fde48d393e709d56b0e1b2c55ee02168f9b64e8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_682a01a74433c8bf976f6366fde48d393e709d56b0e1b2c55ee02168f9b64e8c->enter($__internal_682a01a74433c8bf976f6366fde48d393e709d56b0e1b2c55ee02168f9b64e8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c71c8f2e2b4fc37a394d8b0ac64a60c20b27bd7db0297f1b68e4494271167276 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c71c8f2e2b4fc37a394d8b0ac64a60c20b27bd7db0297f1b68e4494271167276->enter($__internal_c71c8f2e2b4fc37a394d8b0ac64a60c20b27bd7db0297f1b68e4494271167276_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Mon profil";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_c71c8f2e2b4fc37a394d8b0ac64a60c20b27bd7db0297f1b68e4494271167276->leave($__internal_c71c8f2e2b4fc37a394d8b0ac64a60c20b27bd7db0297f1b68e4494271167276_prof);

        
        $__internal_682a01a74433c8bf976f6366fde48d393e709d56b0e1b2c55ee02168f9b64e8c->leave($__internal_682a01a74433c8bf976f6366fde48d393e709d56b0e1b2c55ee02168f9b64e8c_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ef0f3b5a020843808f0909d2970367df8dcb0d1ffc6f4bc3ba283c889a128ea3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef0f3b5a020843808f0909d2970367df8dcb0d1ffc6f4bc3ba283c889a128ea3->enter($__internal_ef0f3b5a020843808f0909d2970367df8dcb0d1ffc6f4bc3ba283c889a128ea3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_8562cbef5d3e07a8bb096083167f9b69f01a0c3e0cfa4b4ecaf70b7b0f03ff4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8562cbef5d3e07a8bb096083167f9b69f01a0c3e0cfa4b4ecaf70b7b0f03ff4d->enter($__internal_8562cbef5d3e07a8bb096083167f9b69f01a0c3e0cfa4b4ecaf70b7b0f03ff4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/profil.css"), "html", null, true);
        
        $__internal_8562cbef5d3e07a8bb096083167f9b69f01a0c3e0cfa4b4ecaf70b7b0f03ff4d->leave($__internal_8562cbef5d3e07a8bb096083167f9b69f01a0c3e0cfa4b4ecaf70b7b0f03ff4d_prof);

        
        $__internal_ef0f3b5a020843808f0909d2970367df8dcb0d1ffc6f4bc3ba283c889a128ea3->leave($__internal_ef0f3b5a020843808f0909d2970367df8dcb0d1ffc6f4bc3ba283c889a128ea3_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_b0682fc90fd657c3a96c94b594e2d9b0a12e7796150cdb4a68dd315136c31a76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0682fc90fd657c3a96c94b594e2d9b0a12e7796150cdb4a68dd315136c31a76->enter($__internal_b0682fc90fd657c3a96c94b594e2d9b0a12e7796150cdb4a68dd315136c31a76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_acdf2289fe9b2c25b80d35328a269b5104260d9cff918f9801bb22abc2091337 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acdf2289fe9b2c25b80d35328a269b5104260d9cff918f9801bb22abc2091337->enter($__internal_acdf2289fe9b2c25b80d35328a269b5104260d9cff918f9801bb22abc2091337_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    ";
        $this->loadTemplate("flash_messages.html.twig", "content/profil.html.twig", 8)->display($context);
        // line 9
        echo "
    <h1 class=\"titre margin-left\">Mon profil</h1>
    <div class=\"titre-separation margin-left\"></div>

    <div class=\"bonjour-container margin-left\"><div class=\"avatar-container\"><a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("newAvatar");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 13, $this->getSourceContext()); })()), "user", array()), "image", array()), "html", null, true);
        echo "\" class=\"avatar\"/></a></div><p>Bonjour <span class=\"bonjour-nom\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 13, $this->getSourceContext()); })()), "user", array()), "surname", array()), "html", null, true);
        echo "</span></p></div>
    <a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modifier_profil");
        echo "\" class=\"modifier margin-left\">Modifier mes informations</a>

    <div class=\"informations-container margin-left\">
        <h2 class=\"informations-titre\">Mes informations</h2>
        <p class=\"informations-username informations-content\">Nom d'utilisateur<span>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 18, $this->getSourceContext()); })()), "user", array()), "username", array()), "html", null, true);
        echo "</span></p>
        <p class=\"informations-email informations-content\">Adresse email<span>";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 19, $this->getSourceContext()); })()), "user", array()), "email", array()), "html", null, true);
        echo "</span></p>
        <a href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("conditions");
        echo "\" title=\"Spoil: pas grand chose\" class=\"informations-privacy\">Que faisons-nous de vos données ?</a>
    </div>

    <div class=\"itineraires-container margin-left\">
        <h2 class=\"itineraires-titre\">Mes itinéraires<span>";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["nbPaths"]) || array_key_exists("nbPaths", $context) ? $context["nbPaths"] : (function () { throw new Twig_Error_Runtime('Variable "nbPaths" does not exist.', 24, $this->getSourceContext()); })()), "html", null, true);
        echo "</span></h2>
        <div class=\"resultats-bigcontainer\">
            <div class=\"resultats-container\">
                ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["resultatPath"]) || array_key_exists("resultatPath", $context) ? $context["resultatPath"] : (function () { throw new Twig_Error_Runtime('Variable "resultatPath" does not exist.', 27, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["path"]) {
            // line 28
            echo "                    <div class=\"resultat-container\">
                        <p class=\"resultat-titre\">";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["path"], "titre", array()), "html", null, true);
            echo "</p>
                        <div class=\"resultat-titre-sepa\"></div>
                        <p>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["path"], "typeSport", array()), "html", null, true);
            echo "</p>
                        <p>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["path"], "auteur", array()), "html", null, true);
            echo "</p>
                        <p id=\"resultat-placeId\">
                            ";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["path"], "placeId", array()), "html", null, true);
            echo "
                        </p>
                        <p>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["path"], "note", array()), "html", null, true);
            echo "</p>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['path'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "            </div>
        </div>
    </div>
";
        
        $__internal_acdf2289fe9b2c25b80d35328a269b5104260d9cff918f9801bb22abc2091337->leave($__internal_acdf2289fe9b2c25b80d35328a269b5104260d9cff918f9801bb22abc2091337_prof);

        
        $__internal_b0682fc90fd657c3a96c94b594e2d9b0a12e7796150cdb4a68dd315136c31a76->leave($__internal_b0682fc90fd657c3a96c94b594e2d9b0a12e7796150cdb4a68dd315136c31a76_prof);

    }

    // line 44
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e3a782e390ba3d2aec92f3e5d0943270574b057c6f0cae0ea295965931588480 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3a782e390ba3d2aec92f3e5d0943270574b057c6f0cae0ea295965931588480->enter($__internal_e3a782e390ba3d2aec92f3e5d0943270574b057c6f0cae0ea295965931588480_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_04b7cf841d743b6a2b3fbcbefbbfa6e05c0e0ec3d63f8f7f7647d576e5b01a06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04b7cf841d743b6a2b3fbcbefbbfa6e05c0e0ec3d63f8f7f7647d576e5b01a06->enter($__internal_04b7cf841d743b6a2b3fbcbefbbfa6e05c0e0ec3d63f8f7f7647d576e5b01a06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 45
        echo "    <script>
    </script>
";
        
        $__internal_04b7cf841d743b6a2b3fbcbefbbfa6e05c0e0ec3d63f8f7f7647d576e5b01a06->leave($__internal_04b7cf841d743b6a2b3fbcbefbbfa6e05c0e0ec3d63f8f7f7647d576e5b01a06_prof);

        
        $__internal_e3a782e390ba3d2aec92f3e5d0943270574b057c6f0cae0ea295965931588480->leave($__internal_e3a782e390ba3d2aec92f3e5d0943270574b057c6f0cae0ea295965931588480_prof);

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
        return array (  191 => 45,  182 => 44,  169 => 39,  160 => 36,  155 => 34,  150 => 32,  146 => 31,  141 => 29,  138 => 28,  134 => 27,  128 => 24,  121 => 20,  117 => 19,  113 => 18,  106 => 14,  98 => 13,  92 => 9,  89 => 8,  80 => 7,  62 => 5,  43 => 3,  11 => 1,);
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

    <div class=\"bonjour-container margin-left\"><div class=\"avatar-container\"><a href=\"{{ path('newAvatar') }}\"><img src=\"{{ app.user.image }}\" class=\"avatar\"/></a></div><p>Bonjour <span class=\"bonjour-nom\">{{ app.user.surname }}</span></p></div>
    <a href=\"{{ path('modifier_profil') }}\" class=\"modifier margin-left\">Modifier mes informations</a>

    <div class=\"informations-container margin-left\">
        <h2 class=\"informations-titre\">Mes informations</h2>
        <p class=\"informations-username informations-content\">Nom d'utilisateur<span>{{ app.user.username }}</span></p>
        <p class=\"informations-email informations-content\">Adresse email<span>{{ app.user.email }}</span></p>
        <a href=\"{{ path('conditions') }}\" title=\"Spoil: pas grand chose\" class=\"informations-privacy\">Que faisons-nous de vos données ?</a>
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
