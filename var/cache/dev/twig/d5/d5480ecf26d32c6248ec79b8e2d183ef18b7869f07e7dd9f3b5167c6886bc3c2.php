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
            'stylesheets2' => array($this, 'block_stylesheets2'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8b61f30389a536e41178d232ba4b2c0007769d1140c1ed3a3e011fa2d2220ba1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b61f30389a536e41178d232ba4b2c0007769d1140c1ed3a3e011fa2d2220ba1->enter($__internal_8b61f30389a536e41178d232ba4b2c0007769d1140c1ed3a3e011fa2d2220ba1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_4533c64678afd3a7f7a3dd635d2a999016de8c81cd0aad6dac72160c75f21c87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4533c64678afd3a7f7a3dd635d2a999016de8c81cd0aad6dac72160c75f21c87->enter($__internal_4533c64678afd3a7f7a3dd635d2a999016de8c81cd0aad6dac72160c75f21c87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" name=\"viewport\" content=\"width=device-width, maximum-scale=1\"/>
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
    <link rel=\"stylesheet\" href=\"";
        // line 8
        $this->displayBlock('stylesheets2', $context, $blocks);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/flash_messages.css"), "html", null, true);
        echo "\">
</head>
<body>
    <section class=\"desktop\">
    <header class=\"header\">
        <a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("concepteur");
        echo "\"><div class=\"header-logo\"><p class=\"header-logo-txt\">Logo</p></div></a> <!-- à remplacer par l'img du logo -->
        <a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("concepteur");
        echo "\"><h1 class=\"header-title\">Itin'r</h1></a>

        <div class=\"header-navbar\">
            <ul class=\"nav_onglets\">
                <li class=\"nav-item\"><a href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("concepteur");
        echo "\">Concepteur d'itinéraires</a></li>
                <li class=\"nav-item\"><a href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("chercher");
        echo "\">Trouver un itinéraire</a></li>
                <li class=\"nav-item nav-item-plus\" id=\"plus\">
                    <a>Plus <img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/caretdown.png"), "html", null, true);
        echo "\" alt=\"Déroulant\" class=\"caretdown\" id=\"caret\"/></a>
                </li>
            </ul>
            <div class=\"sub-nav\" id=\"accordeon\">
                <ul class=\"sub-nav-ul\">
                    <li class=\"sub-nav-item\"><a href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("chercher-utilisateur");
        echo "\">Trouver un utilisateur</a></li>
                    <li class=\"sub-nav-item\"><a href=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contact");
        echo "\">Contact</a></li>
                    <li class=\"sub-nav-item\"><a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("aide");
        echo "\">Aide</a></li>
                    <li class=\"sub-nav-item\"><a href=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("apropos");
        echo "\">À propos</a></li>
                </ul>
            </div>
        </div>

        ";
        // line 35
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 35, $this->getSourceContext()); })()), "user", array())) {
            // line 36
            echo "            <div class=\"header-account\">
                <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profil", array("username" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 37, $this->getSourceContext()); })()), "user", array()), "username", array()))), "html", null, true);
            echo "\" class=\"header-account-signed btn-account btn-account-gauche profil-container\">
                    ";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 38, $this->getSourceContext()); })()), "user", array()), "surname", array()), "html", null, true);
            echo "
                    <div class=\"user-image-container\"><img src=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 39, $this->getSourceContext()); })()), "user", array()), "image", array())), "html", null, true);
            echo "\" class=\"header-account-user-image\"/></div>
                </a>
                <a href=\"";
            // line 41
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("security_logout");
            echo "\" class=\"header-account-signout btn-account\">Déconnexion</a>
            </div>
            ";
        } else {
            // line 44
            echo "                <div class=\"header-account\">
                    <a class=\"header-account-signup btn-account btn-account-gauche\" href=\"";
            // line 45
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("inscription");
            echo "\">Inscription</a>
                    <a class=\"header-account-signin btn-account\" href=\"";
            // line 46
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("security_login");
            echo "\">Connexion</a>
                </div>
        ";
        }
        // line 49
        echo "    </header>

    <section id=\"content\">
";
        // line 52
        $this->displayBlock('body', $context, $blocks);
        // line 54
        echo "    </section>

    <footer class=\"footer\" id=\"footer\">
        <div class=\"footer-content\">
            <div class=\"footer-contentrs\">
                <ul class=\"footer-rs\">
                    <li class=\"footer-rs-li\"><a href=\"https://facebook.com\"><img src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/facebook.png"), "html", null, true);
        echo "\" alt=\"Icône réseau social\"></a></li>
                    <li class=\"footer-rs-li\"><a href=\"https://twitter.com\"><img src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/twitter.png"), "html", null, true);
        echo "\" alt=\"Icône réseau social\"></a></li>
                    <li class=\"footer-rs-li\"><a href=\"https://instagram.com\"><img src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/instagram.png"), "html", null, true);
        echo "\" alt=\"Icône réseau social\"></a></li>
                    <li class=\"footer-rs-li\"><a href=\"https://snapchat.com\"><img src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/snapchat.png"), "html", null, true);
        echo "\" alt=\"Icône réseau social\"></a></li>
                    <li class=\"footer-rs-li\"><a href=\"https://youtube.com\"><img src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/youtube.png"), "html", null, true);
        echo "\" alt=\"Icône réseau social\"></a></li>
                </ul>
            </div>
            <div class=\"footer-contentseparation\"></div>
            <p class=\"footer-author\">Site réalisé par Jules DUPONT</p>
            <p class=\"footer-date\">2018</p>
        </div>
    </footer>
    </section>

    <section class=\"mobile\">
        <div class=\"mobile-header\">
            <div class=\"header-logo mobile-header-logo\">
                <p class=\"header-logo-txt\">Logo</p>
            </div> <!-- à remplacer par l'img du logo -->
            <h1 class=\"header-title mobile-header-title\">Itin'r</h1>
        </div>

        <div class=\"mobile-comingsoon\">
            <img src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/comingsoon.png"), "html", null, true);
        echo "\" alt=\"Coming soon icône\">
            <p>Coming soon !</p>
        </div>

        <p class=\"mobile-unavailable\">Itin’r n’est pas disponible<br/>sur mobiles 😕</p>
    </section>

";
        // line 90
        $this->displayBlock('javascripts', $context, $blocks);
        // line 91
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
        
        $__internal_8b61f30389a536e41178d232ba4b2c0007769d1140c1ed3a3e011fa2d2220ba1->leave($__internal_8b61f30389a536e41178d232ba4b2c0007769d1140c1ed3a3e011fa2d2220ba1_prof);

        
        $__internal_4533c64678afd3a7f7a3dd635d2a999016de8c81cd0aad6dac72160c75f21c87->leave($__internal_4533c64678afd3a7f7a3dd635d2a999016de8c81cd0aad6dac72160c75f21c87_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3293f97e793192d8e959f5abb17ffe2dd7e416a2be7a3b213165b57ebeec9a33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3293f97e793192d8e959f5abb17ffe2dd7e416a2be7a3b213165b57ebeec9a33->enter($__internal_3293f97e793192d8e959f5abb17ffe2dd7e416a2be7a3b213165b57ebeec9a33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4d3822a01d6ad8af367844d4dc602be0608f08dd4b8a3efe4f4208943728cc0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d3822a01d6ad8af367844d4dc602be0608f08dd4b8a3efe4f4208943728cc0e->enter($__internal_4d3822a01d6ad8af367844d4dc602be0608f08dd4b8a3efe4f4208943728cc0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " | Itin'r";
        
        $__internal_4d3822a01d6ad8af367844d4dc602be0608f08dd4b8a3efe4f4208943728cc0e->leave($__internal_4d3822a01d6ad8af367844d4dc602be0608f08dd4b8a3efe4f4208943728cc0e_prof);

        
        $__internal_3293f97e793192d8e959f5abb17ffe2dd7e416a2be7a3b213165b57ebeec9a33->leave($__internal_3293f97e793192d8e959f5abb17ffe2dd7e416a2be7a3b213165b57ebeec9a33_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_adf6036cc61d591cc900db72775cc316bc780dd812255dd0bd4cf8cf745a6da9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_adf6036cc61d591cc900db72775cc316bc780dd812255dd0bd4cf8cf745a6da9->enter($__internal_adf6036cc61d591cc900db72775cc316bc780dd812255dd0bd4cf8cf745a6da9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_f60599fc75ea4c07bf21fa2ba8ab407f0f82b87ba11df7af2c49cc0856614e93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f60599fc75ea4c07bf21fa2ba8ab407f0f82b87ba11df7af2c49cc0856614e93->enter($__internal_f60599fc75ea4c07bf21fa2ba8ab407f0f82b87ba11df7af2c49cc0856614e93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_f60599fc75ea4c07bf21fa2ba8ab407f0f82b87ba11df7af2c49cc0856614e93->leave($__internal_f60599fc75ea4c07bf21fa2ba8ab407f0f82b87ba11df7af2c49cc0856614e93_prof);

        
        $__internal_adf6036cc61d591cc900db72775cc316bc780dd812255dd0bd4cf8cf745a6da9->leave($__internal_adf6036cc61d591cc900db72775cc316bc780dd812255dd0bd4cf8cf745a6da9_prof);

    }

    // line 8
    public function block_stylesheets2($context, array $blocks = array())
    {
        $__internal_40dfc7094539002061bb5da203f7e3bbab3b40fe54f9d2616f02c24c2d772f6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40dfc7094539002061bb5da203f7e3bbab3b40fe54f9d2616f02c24c2d772f6d->enter($__internal_40dfc7094539002061bb5da203f7e3bbab3b40fe54f9d2616f02c24c2d772f6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets2"));

        $__internal_1a61dc5cd46c746ae9bdb0fdc1fd554323591f27da842d4f362de1b48e24bac6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a61dc5cd46c746ae9bdb0fdc1fd554323591f27da842d4f362de1b48e24bac6->enter($__internal_1a61dc5cd46c746ae9bdb0fdc1fd554323591f27da842d4f362de1b48e24bac6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets2"));

        
        $__internal_1a61dc5cd46c746ae9bdb0fdc1fd554323591f27da842d4f362de1b48e24bac6->leave($__internal_1a61dc5cd46c746ae9bdb0fdc1fd554323591f27da842d4f362de1b48e24bac6_prof);

        
        $__internal_40dfc7094539002061bb5da203f7e3bbab3b40fe54f9d2616f02c24c2d772f6d->leave($__internal_40dfc7094539002061bb5da203f7e3bbab3b40fe54f9d2616f02c24c2d772f6d_prof);

    }

    // line 52
    public function block_body($context, array $blocks = array())
    {
        $__internal_b2fb7c0eff330ffd15bf75d8976e446728e8fde1dede3839268bfe44ac1a1262 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2fb7c0eff330ffd15bf75d8976e446728e8fde1dede3839268bfe44ac1a1262->enter($__internal_b2fb7c0eff330ffd15bf75d8976e446728e8fde1dede3839268bfe44ac1a1262_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5be5afea7522f99dc0592ca3930bea5dc428dda5074bd0ee3ec8d2fd8669a2ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5be5afea7522f99dc0592ca3930bea5dc428dda5074bd0ee3ec8d2fd8669a2ec->enter($__internal_5be5afea7522f99dc0592ca3930bea5dc428dda5074bd0ee3ec8d2fd8669a2ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5be5afea7522f99dc0592ca3930bea5dc428dda5074bd0ee3ec8d2fd8669a2ec->leave($__internal_5be5afea7522f99dc0592ca3930bea5dc428dda5074bd0ee3ec8d2fd8669a2ec_prof);

        
        $__internal_b2fb7c0eff330ffd15bf75d8976e446728e8fde1dede3839268bfe44ac1a1262->leave($__internal_b2fb7c0eff330ffd15bf75d8976e446728e8fde1dede3839268bfe44ac1a1262_prof);

    }

    // line 90
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4d590de58c7657bffd24c0ede2c44f0b593ba354153049c7722b8aee61bedfe5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d590de58c7657bffd24c0ede2c44f0b593ba354153049c7722b8aee61bedfe5->enter($__internal_4d590de58c7657bffd24c0ede2c44f0b593ba354153049c7722b8aee61bedfe5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_96dd3634e05b739fb4f0a422ad5dc4db89fbbc73873dbe18bccd79650568ff3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96dd3634e05b739fb4f0a422ad5dc4db89fbbc73873dbe18bccd79650568ff3e->enter($__internal_96dd3634e05b739fb4f0a422ad5dc4db89fbbc73873dbe18bccd79650568ff3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_96dd3634e05b739fb4f0a422ad5dc4db89fbbc73873dbe18bccd79650568ff3e->leave($__internal_96dd3634e05b739fb4f0a422ad5dc4db89fbbc73873dbe18bccd79650568ff3e_prof);

        
        $__internal_4d590de58c7657bffd24c0ede2c44f0b593ba354153049c7722b8aee61bedfe5->leave($__internal_4d590de58c7657bffd24c0ede2c44f0b593ba354153049c7722b8aee61bedfe5_prof);

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
        return array (  303 => 90,  286 => 52,  269 => 8,  252 => 7,  234 => 5,  210 => 91,  208 => 90,  198 => 83,  176 => 64,  172 => 63,  168 => 62,  164 => 61,  160 => 60,  152 => 54,  150 => 52,  145 => 49,  139 => 46,  135 => 45,  132 => 44,  126 => 41,  121 => 39,  117 => 38,  113 => 37,  110 => 36,  108 => 35,  100 => 30,  96 => 29,  92 => 28,  88 => 27,  80 => 22,  75 => 20,  71 => 19,  64 => 15,  60 => 14,  52 => 9,  48 => 8,  44 => 7,  40 => 6,  36 => 5,  30 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" name=\"viewport\" content=\"width=device-width, maximum-scale=1\"/>
    <title>{% block title %} | Itin'r{% endblock %}</title>
    <link rel=\"stylesheet\" href=\"{{ asset('build/layout.css') }}\">
    <link rel=\"stylesheet\" href=\"{% block stylesheets %}{% endblock %}\">
    <link rel=\"stylesheet\" href=\"{% block stylesheets2 %}{% endblock %}\">
    <link rel=\"stylesheet\" href=\"{{ asset('build/flash_messages.css') }}\">
</head>
<body>
    <section class=\"desktop\">
    <header class=\"header\">
        <a href=\"{{ path(\"concepteur\") }}\"><div class=\"header-logo\"><p class=\"header-logo-txt\">Logo</p></div></a> <!-- à remplacer par l'img du logo -->
        <a href=\"{{ path(\"concepteur\") }}\"><h1 class=\"header-title\">Itin'r</h1></a>

        <div class=\"header-navbar\">
            <ul class=\"nav_onglets\">
                <li class=\"nav-item\"><a href=\"{{ path(\"concepteur\") }}\">Concepteur d'itinéraires</a></li>
                <li class=\"nav-item\"><a href=\"{{ path(\"chercher\") }}\">Trouver un itinéraire</a></li>
                <li class=\"nav-item nav-item-plus\" id=\"plus\">
                    <a>Plus <img src=\"{{ asset('images/caretdown.png') }}\" alt=\"Déroulant\" class=\"caretdown\" id=\"caret\"/></a>
                </li>
            </ul>
            <div class=\"sub-nav\" id=\"accordeon\">
                <ul class=\"sub-nav-ul\">
                    <li class=\"sub-nav-item\"><a href=\"{{ path(\"chercher-utilisateur\") }}\">Trouver un utilisateur</a></li>
                    <li class=\"sub-nav-item\"><a href=\"{{ path(\"contact\") }}\">Contact</a></li>
                    <li class=\"sub-nav-item\"><a href=\"{{ path(\"aide\") }}\">Aide</a></li>
                    <li class=\"sub-nav-item\"><a href=\"{{ path(\"apropos\") }}\">À propos</a></li>
                </ul>
            </div>
        </div>

        {% if app.user %}
            <div class=\"header-account\">
                <a href=\"{{ path('profil', {'username': app.user.username}) }}\" class=\"header-account-signed btn-account btn-account-gauche profil-container\">
                    {{ app.user.surname }}
                    <div class=\"user-image-container\"><img src=\"{{ asset(app.user.image) }}\" class=\"header-account-user-image\"/></div>
                </a>
                <a href=\"{{ path('security_logout') }}\" class=\"header-account-signout btn-account\">Déconnexion</a>
            </div>
            {% else %}
                <div class=\"header-account\">
                    <a class=\"header-account-signup btn-account btn-account-gauche\" href=\"{{ path(\"inscription\") }}\">Inscription</a>
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
    </section>

    <section class=\"mobile\">
        <div class=\"mobile-header\">
            <div class=\"header-logo mobile-header-logo\">
                <p class=\"header-logo-txt\">Logo</p>
            </div> <!-- à remplacer par l'img du logo -->
            <h1 class=\"header-title mobile-header-title\">Itin'r</h1>
        </div>

        <div class=\"mobile-comingsoon\">
            <img src=\"{{ asset('images/comingsoon.png') }}\" alt=\"Coming soon icône\">
            <p>Coming soon !</p>
        </div>

        <p class=\"mobile-unavailable\">Itin’r n’est pas disponible<br/>sur mobiles 😕</p>
    </section>

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
