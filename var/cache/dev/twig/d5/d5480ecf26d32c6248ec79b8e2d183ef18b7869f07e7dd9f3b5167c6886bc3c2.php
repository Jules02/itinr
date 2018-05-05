<?php

/* base.html.twig */
class __TwigTemplate_d677415250fbbc5080c07cd04424ba36e94a88114f6a364184b7ca339428e8b9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_96c249d212e52499d8fd28fe59b01d3e99e44e722cc7e56819b7ff1b03841931 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96c249d212e52499d8fd28fe59b01d3e99e44e722cc7e56819b7ff1b03841931->enter($__internal_96c249d212e52499d8fd28fe59b01d3e99e44e722cc7e56819b7ff1b03841931_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_e90c391a4d0c774f9b6302bf19e08a210240c848d63615817aca769921227b82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e90c391a4d0c774f9b6302bf19e08a210240c848d63615817aca769921227b82->enter($__internal_e90c391a4d0c774f9b6302bf19e08a210240c848d63615817aca769921227b82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/layout.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        echo "\">
</head>
<body>

    <header class=\"header\">
        <a href=\"index.php\"><div class=\"header-logo\"><p class=\"header-logo-txt\">Logo</p></div></a> <!-- à remplacer par l'img du logo -->
        <a href=\"index.php\"><h1 class=\"header-title\">Movee</h1></a>

        <div class=\"header-navbar\">
            <ul class=\"nav_onglets\">
                <li class=\"nav-item\"><a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("concepteur");
        echo "\">Concepteur d'itinéraires</a></li>
                <li class=\"nav-item\"><a href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("chercher", array("id" => 2));
        echo "\">Trouver un itinéraire</a></li>
                <li class=\"nav-item nav-item-plus\" id=\"plus\">
                    <a>Plus <img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/caretdown.png"), "html", null, true);
        echo "\" alt=\"Déroulant\" class=\"caretdown\" id=\"caret\"/></a>
                </li>
            </ul>
            <div class=\"sub-nav\" id=\"accordeon\">
                <ul class=\"sub-nav-ul\">
                    <li class=\"sub-nav-item\"><a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contact");
        echo "\">Contact</a></li>
                    <li class=\"sub-nav-item\"><a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("aide");
        echo "\">Aide</a></li>
                    <li class=\"sub-nav-item\"><a href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("apropos");
        echo "\">À propos</a></li>
                </ul>
            </div>
        </div>

        ";
        // line 32
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 32, $this->getSourceContext()); })()), "user", array())) {
            // line 33
            echo "            <div class=\"header-account\">
                <a href=\"";
            // line 34
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profil");
            echo "\" class=\"header-account-signup btn-account profil-container\">
                    ";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 35, $this->getSourceContext()); })()), "user", array()), "fullName", array()), "html", null, true);
            echo "
                    <div class=\"user-image-container\"><img src=\"";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 36, $this->getSourceContext()); })()), "user", array()), "image", array()), "html", null, true);
            echo "\" class=\"header-account-user-image\"/></div>
                </a>
                <a href=\"";
            // line 38
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("security_logout");
            echo "\" class=\"header-account-signin btn-account\">Déconnexion</a>
            </div>
            ";
        } else {
            // line 41
            echo "                <div class=\"header-account\">
                    <a class=\"header-account-signup btn-account\" href=\"";
            // line 42
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("inscription");
            echo "\">Inscription</a>
                    <a class=\"header-account-signin btn-account\" href=\"";
            // line 43
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("security_login");
            echo "\">Connexion</a>
                </div>
        ";
        }
        // line 46
        echo "    </header>

    <section id=\"content\">
";
        // line 49
        $this->displayBlock('body', $context, $blocks);
        // line 51
        echo "    </section>

    <footer class=\"footer\" id=\"footer\">
        <div class=\"footer-content\">
            <div class=\"footer-contentrs\">
                <ul class=\"footer-rs\">
                    <li class=\"footer-rs-li\"><a href=\"https://facebook.com\"><img src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/facebook.png"), "html", null, true);
        echo "\" alt=\"Icône réseau social\"></a></li>
                    <li class=\"footer-rs-li\"><a href=\"https://twitter.com\"><img src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/twitter.png"), "html", null, true);
        echo "\" alt=\"Icône réseau social\"></a></li>
                    <li class=\"footer-rs-li\"><a href=\"https://instagram.com\"><img src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/instagram.png"), "html", null, true);
        echo "\" alt=\"Icône réseau social\"></a></li>
                    <li class=\"footer-rs-li\"><a href=\"https://snapchat.com\"><img src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/snapchat.png"), "html", null, true);
        echo "\" alt=\"Icône réseau social\"></a></li>
                    <li class=\"footer-rs-li\"><a href=\"https://youtube.com\"><img src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/youtube.png"), "html", null, true);
        echo "\" alt=\"Icône réseau social\"></a></li>
                </ul>
            </div>
            <div class=\"footer-contentseparation\"></div>
            <p class=\"footer-author\">Site réalisé par Jules DUPONT</p>
            <p class=\"footer-date\">2018</p>
        </div>
    </footer>

";
        // line 70
        $this->displayBlock('javascripts', $context, $blocks);
        // line 71
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/header.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"http://code.jquery.com/jquery-latest.js\"></script>
<script>
    var content = document.getElementById(\"content\");

    var tailleVoulu = window.innerHeight - 80 - 30;

    if (content.offsetHeight < tailleVoulu){
        content.style.height = tailleVoulu + 'px';
    }
</script>
</body>
</html>";
        
        $__internal_96c249d212e52499d8fd28fe59b01d3e99e44e722cc7e56819b7ff1b03841931->leave($__internal_96c249d212e52499d8fd28fe59b01d3e99e44e722cc7e56819b7ff1b03841931_prof);

        
        $__internal_e90c391a4d0c774f9b6302bf19e08a210240c848d63615817aca769921227b82->leave($__internal_e90c391a4d0c774f9b6302bf19e08a210240c848d63615817aca769921227b82_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4c74fbb9bd8722ee58c3229d11f919144c93a23297875a15f6b98525207f303a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c74fbb9bd8722ee58c3229d11f919144c93a23297875a15f6b98525207f303a->enter($__internal_4c74fbb9bd8722ee58c3229d11f919144c93a23297875a15f6b98525207f303a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d7763b0f97abf3ddc9f01a629cd0ba6f7f5d3962747a505ca34a450d223a5dd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7763b0f97abf3ddc9f01a629cd0ba6f7f5d3962747a505ca34a450d223a5dd9->enter($__internal_d7763b0f97abf3ddc9f01a629cd0ba6f7f5d3962747a505ca34a450d223a5dd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " | Movee";
        
        $__internal_d7763b0f97abf3ddc9f01a629cd0ba6f7f5d3962747a505ca34a450d223a5dd9->leave($__internal_d7763b0f97abf3ddc9f01a629cd0ba6f7f5d3962747a505ca34a450d223a5dd9_prof);

        
        $__internal_4c74fbb9bd8722ee58c3229d11f919144c93a23297875a15f6b98525207f303a->leave($__internal_4c74fbb9bd8722ee58c3229d11f919144c93a23297875a15f6b98525207f303a_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_510f803346b104e868c5daceb220fe3bb5639672d64a7900507ac68d67e67e1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_510f803346b104e868c5daceb220fe3bb5639672d64a7900507ac68d67e67e1b->enter($__internal_510f803346b104e868c5daceb220fe3bb5639672d64a7900507ac68d67e67e1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_154b1f4a678db478a175d85eec93145e44e5aacfd67bd630fbe68b5e0f0fefc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_154b1f4a678db478a175d85eec93145e44e5aacfd67bd630fbe68b5e0f0fefc9->enter($__internal_154b1f4a678db478a175d85eec93145e44e5aacfd67bd630fbe68b5e0f0fefc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_154b1f4a678db478a175d85eec93145e44e5aacfd67bd630fbe68b5e0f0fefc9->leave($__internal_154b1f4a678db478a175d85eec93145e44e5aacfd67bd630fbe68b5e0f0fefc9_prof);

        
        $__internal_510f803346b104e868c5daceb220fe3bb5639672d64a7900507ac68d67e67e1b->leave($__internal_510f803346b104e868c5daceb220fe3bb5639672d64a7900507ac68d67e67e1b_prof);

    }

    // line 49
    public function block_body($context, array $blocks = array())
    {
        $__internal_012ad008b15c31057c1e14406e5d5c251dae1dc00249a6cd4865ee155ac37c0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_012ad008b15c31057c1e14406e5d5c251dae1dc00249a6cd4865ee155ac37c0f->enter($__internal_012ad008b15c31057c1e14406e5d5c251dae1dc00249a6cd4865ee155ac37c0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_719502ce393f87e6cc9dcd87fafc92bb905b506421fcc663ce54ca2bd64af726 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_719502ce393f87e6cc9dcd87fafc92bb905b506421fcc663ce54ca2bd64af726->enter($__internal_719502ce393f87e6cc9dcd87fafc92bb905b506421fcc663ce54ca2bd64af726_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_719502ce393f87e6cc9dcd87fafc92bb905b506421fcc663ce54ca2bd64af726->leave($__internal_719502ce393f87e6cc9dcd87fafc92bb905b506421fcc663ce54ca2bd64af726_prof);

        
        $__internal_012ad008b15c31057c1e14406e5d5c251dae1dc00249a6cd4865ee155ac37c0f->leave($__internal_012ad008b15c31057c1e14406e5d5c251dae1dc00249a6cd4865ee155ac37c0f_prof);

    }

    // line 70
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_01286574a5f55c8ac9031e95669245408e76b918297552e239604cad5fcd6f88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01286574a5f55c8ac9031e95669245408e76b918297552e239604cad5fcd6f88->enter($__internal_01286574a5f55c8ac9031e95669245408e76b918297552e239604cad5fcd6f88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_2532228ab3ff8ac39bd2086810a7c3f6d7f805f655decbe84732e0ef5dc8cd90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2532228ab3ff8ac39bd2086810a7c3f6d7f805f655decbe84732e0ef5dc8cd90->enter($__internal_2532228ab3ff8ac39bd2086810a7c3f6d7f805f655decbe84732e0ef5dc8cd90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_2532228ab3ff8ac39bd2086810a7c3f6d7f805f655decbe84732e0ef5dc8cd90->leave($__internal_2532228ab3ff8ac39bd2086810a7c3f6d7f805f655decbe84732e0ef5dc8cd90_prof);

        
        $__internal_01286574a5f55c8ac9031e95669245408e76b918297552e239604cad5fcd6f88->leave($__internal_01286574a5f55c8ac9031e95669245408e76b918297552e239604cad5fcd6f88_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  247 => 70,  230 => 49,  213 => 7,  195 => 5,  171 => 71,  169 => 70,  157 => 61,  153 => 60,  149 => 59,  145 => 58,  141 => 57,  133 => 51,  131 => 49,  126 => 46,  120 => 43,  116 => 42,  113 => 41,  107 => 38,  102 => 36,  98 => 35,  94 => 34,  91 => 33,  89 => 32,  81 => 27,  77 => 26,  73 => 25,  65 => 20,  60 => 18,  56 => 17,  43 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>{% block title %} | Movee{% endblock %}</title>
    <link rel=\"stylesheet\" href=\"{{ asset('build/layout.css') }}\">
    <link rel=\"stylesheet\" href=\"{% block stylesheets %}{% endblock %}\">
</head>
<body>

    <header class=\"header\">
        <a href=\"index.php\"><div class=\"header-logo\"><p class=\"header-logo-txt\">Logo</p></div></a> <!-- à remplacer par l'img du logo -->
        <a href=\"index.php\"><h1 class=\"header-title\">Movee</h1></a>

        <div class=\"header-navbar\">
            <ul class=\"nav_onglets\">
                <li class=\"nav-item\"><a href=\"{{ path(\"concepteur\") }}\">Concepteur d'itinéraires</a></li>
                <li class=\"nav-item\"><a href=\"{{ path(\"chercher\", {'id': 2}) }}\">Trouver un itinéraire</a></li>
                <li class=\"nav-item nav-item-plus\" id=\"plus\">
                    <a>Plus <img src=\"{{ asset('images/caretdown.png') }}\" alt=\"Déroulant\" class=\"caretdown\" id=\"caret\"/></a>
                </li>
            </ul>
            <div class=\"sub-nav\" id=\"accordeon\">
                <ul class=\"sub-nav-ul\">
                    <li class=\"sub-nav-item\"><a href=\"{{ path(\"contact\") }}\">Contact</a></li>
                    <li class=\"sub-nav-item\"><a href=\"{{ path(\"aide\") }}\">Aide</a></li>
                    <li class=\"sub-nav-item\"><a href=\"{{ path(\"apropos\") }}\">À propos</a></li>
                </ul>
            </div>
        </div>

        {% if app.user %}
            <div class=\"header-account\">
                <a href=\"{{ path('profil') }}\" class=\"header-account-signup btn-account profil-container\">
                    {{ app.user.fullName }}
                    <div class=\"user-image-container\"><img src=\"{{ app.user.image }}\" class=\"header-account-user-image\"/></div>
                </a>
                <a href=\"{{ path('security_logout') }}\" class=\"header-account-signin btn-account\">Déconnexion</a>
            </div>
            {% else %}
                <div class=\"header-account\">
                    <a class=\"header-account-signup btn-account\" href=\"{{ path(\"inscription\") }}\">Inscription</a>
                    <a class=\"header-account-signin btn-account\" href=\"{{ path(\"security_login\") }}\">Connexion</a>
                </div>
        {% endif %}
    </header>

    <section id=\"content\">
{% block body %}
{% endblock %}
    </section>

    <footer class=\"footer\" id=\"footer\">
        <div class=\"footer-content\">
            <div class=\"footer-contentrs\">
                <ul class=\"footer-rs\">
                    <li class=\"footer-rs-li\"><a href=\"https://facebook.com\"><img src=\"{{ asset('images/facebook.png') }}\" alt=\"Icône réseau social\"></a></li>
                    <li class=\"footer-rs-li\"><a href=\"https://twitter.com\"><img src=\"{{ asset('images/twitter.png') }}\" alt=\"Icône réseau social\"></a></li>
                    <li class=\"footer-rs-li\"><a href=\"https://instagram.com\"><img src=\"{{ asset('images/instagram.png') }}\" alt=\"Icône réseau social\"></a></li>
                    <li class=\"footer-rs-li\"><a href=\"https://snapchat.com\"><img src=\"{{ asset('images/snapchat.png') }}\" alt=\"Icône réseau social\"></a></li>
                    <li class=\"footer-rs-li\"><a href=\"https://youtube.com\"><img src=\"{{ asset('images/youtube.png') }}\" alt=\"Icône réseau social\"></a></li>
                </ul>
            </div>
            <div class=\"footer-contentseparation\"></div>
            <p class=\"footer-author\">Site réalisé par Jules DUPONT</p>
            <p class=\"footer-date\">2018</p>
        </div>
    </footer>

{% block javascripts %}{% endblock %}
<script src=\"{{ asset('build/header.js') }}\"></script>
<script type=\"text/javascript\" src=\"http://code.jquery.com/jquery-latest.js\"></script>
<script>
    var content = document.getElementById(\"content\");

    var tailleVoulu = window.innerHeight - 80 - 30;

    if (content.offsetHeight < tailleVoulu){
        content.style.height = tailleVoulu + 'px';
    }
</script>
</body>
</html>", "base.html.twig", "C:\\wamp64\\www\\mapbox\\templates\\base.html.twig");
    }
}
