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
        $__internal_8a76f24cff68b79ea918ba22bf67966c90a120fae4d751d808827c7125c660ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a76f24cff68b79ea918ba22bf67966c90a120fae4d751d808827c7125c660ca->enter($__internal_8a76f24cff68b79ea918ba22bf67966c90a120fae4d751d808827c7125c660ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_b234414cd1b4669d07e048fc3d7c9573d23b3f7c68a3c867c662e08317c83012 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b234414cd1b4669d07e048fc3d7c9573d23b3f7c68a3c867c662e08317c83012->enter($__internal_b234414cd1b4669d07e048fc3d7c9573d23b3f7c68a3c867c662e08317c83012_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        <a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("concepteur");
        echo "\"><div class=\"header-logo\"><p class=\"header-logo-txt\">Logo</p></div></a> <!-- à remplacer par l'img du logo -->
        <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("concepteur");
        echo "\"><h1 class=\"header-title\">Movee</h1></a>

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
        
        $__internal_8a76f24cff68b79ea918ba22bf67966c90a120fae4d751d808827c7125c660ca->leave($__internal_8a76f24cff68b79ea918ba22bf67966c90a120fae4d751d808827c7125c660ca_prof);

        
        $__internal_b234414cd1b4669d07e048fc3d7c9573d23b3f7c68a3c867c662e08317c83012->leave($__internal_b234414cd1b4669d07e048fc3d7c9573d23b3f7c68a3c867c662e08317c83012_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2bcb6fb1ed6ce33bffc994ef500b04b46a3071343fd00fae6b9928ab24bf3d1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bcb6fb1ed6ce33bffc994ef500b04b46a3071343fd00fae6b9928ab24bf3d1e->enter($__internal_2bcb6fb1ed6ce33bffc994ef500b04b46a3071343fd00fae6b9928ab24bf3d1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2f278765804fd47b334b0848a2970e2821387a4b23174fb99a91f62d7359f592 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f278765804fd47b334b0848a2970e2821387a4b23174fb99a91f62d7359f592->enter($__internal_2f278765804fd47b334b0848a2970e2821387a4b23174fb99a91f62d7359f592_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " | Movee";
        
        $__internal_2f278765804fd47b334b0848a2970e2821387a4b23174fb99a91f62d7359f592->leave($__internal_2f278765804fd47b334b0848a2970e2821387a4b23174fb99a91f62d7359f592_prof);

        
        $__internal_2bcb6fb1ed6ce33bffc994ef500b04b46a3071343fd00fae6b9928ab24bf3d1e->leave($__internal_2bcb6fb1ed6ce33bffc994ef500b04b46a3071343fd00fae6b9928ab24bf3d1e_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_58eb9bf7fe3caae7cf8890b7abdf0cde0cad60e772efc8875d28c1eb78b8526a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58eb9bf7fe3caae7cf8890b7abdf0cde0cad60e772efc8875d28c1eb78b8526a->enter($__internal_58eb9bf7fe3caae7cf8890b7abdf0cde0cad60e772efc8875d28c1eb78b8526a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_08a7bcb12af0d8d06984b9a79e159cbc7b8ce680b052951e59b08b040b1694ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08a7bcb12af0d8d06984b9a79e159cbc7b8ce680b052951e59b08b040b1694ac->enter($__internal_08a7bcb12af0d8d06984b9a79e159cbc7b8ce680b052951e59b08b040b1694ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_08a7bcb12af0d8d06984b9a79e159cbc7b8ce680b052951e59b08b040b1694ac->leave($__internal_08a7bcb12af0d8d06984b9a79e159cbc7b8ce680b052951e59b08b040b1694ac_prof);

        
        $__internal_58eb9bf7fe3caae7cf8890b7abdf0cde0cad60e772efc8875d28c1eb78b8526a->leave($__internal_58eb9bf7fe3caae7cf8890b7abdf0cde0cad60e772efc8875d28c1eb78b8526a_prof);

    }

    // line 49
    public function block_body($context, array $blocks = array())
    {
        $__internal_1e97eff2a61258cef1cadb152179fa30567f9fec609d8f6f9bfdae43f925062c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e97eff2a61258cef1cadb152179fa30567f9fec609d8f6f9bfdae43f925062c->enter($__internal_1e97eff2a61258cef1cadb152179fa30567f9fec609d8f6f9bfdae43f925062c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a19a4a35f79599d7814a7e5ff28973d56a7e6ad635a7006b057083e15a939fbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a19a4a35f79599d7814a7e5ff28973d56a7e6ad635a7006b057083e15a939fbd->enter($__internal_a19a4a35f79599d7814a7e5ff28973d56a7e6ad635a7006b057083e15a939fbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a19a4a35f79599d7814a7e5ff28973d56a7e6ad635a7006b057083e15a939fbd->leave($__internal_a19a4a35f79599d7814a7e5ff28973d56a7e6ad635a7006b057083e15a939fbd_prof);

        
        $__internal_1e97eff2a61258cef1cadb152179fa30567f9fec609d8f6f9bfdae43f925062c->leave($__internal_1e97eff2a61258cef1cadb152179fa30567f9fec609d8f6f9bfdae43f925062c_prof);

    }

    // line 70
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6f5eb90e52ac23bafda8056e173ca2c080649c0a8dd9e47d4874194490aad178 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f5eb90e52ac23bafda8056e173ca2c080649c0a8dd9e47d4874194490aad178->enter($__internal_6f5eb90e52ac23bafda8056e173ca2c080649c0a8dd9e47d4874194490aad178_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_4dfc041c6d7c8ed18af80802710f6d9fa80f793510ed373448874991efac0d1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dfc041c6d7c8ed18af80802710f6d9fa80f793510ed373448874991efac0d1e->enter($__internal_4dfc041c6d7c8ed18af80802710f6d9fa80f793510ed373448874991efac0d1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_4dfc041c6d7c8ed18af80802710f6d9fa80f793510ed373448874991efac0d1e->leave($__internal_4dfc041c6d7c8ed18af80802710f6d9fa80f793510ed373448874991efac0d1e_prof);

        
        $__internal_6f5eb90e52ac23bafda8056e173ca2c080649c0a8dd9e47d4874194490aad178->leave($__internal_6f5eb90e52ac23bafda8056e173ca2c080649c0a8dd9e47d4874194490aad178_prof);

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
        return array (  253 => 70,  236 => 49,  219 => 7,  201 => 5,  177 => 71,  175 => 70,  163 => 61,  159 => 60,  155 => 59,  151 => 58,  147 => 57,  139 => 51,  137 => 49,  132 => 46,  126 => 43,  122 => 42,  119 => 41,  113 => 38,  108 => 36,  104 => 35,  100 => 34,  97 => 33,  95 => 32,  87 => 27,  83 => 26,  79 => 25,  71 => 20,  66 => 18,  62 => 17,  55 => 13,  51 => 12,  43 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
        <a href=\"{{ path(\"concepteur\") }}\"><div class=\"header-logo\"><p class=\"header-logo-txt\">Logo</p></div></a> <!-- à remplacer par l'img du logo -->
        <a href=\"{{ path(\"concepteur\") }}\"><h1 class=\"header-title\">Movee</h1></a>

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
