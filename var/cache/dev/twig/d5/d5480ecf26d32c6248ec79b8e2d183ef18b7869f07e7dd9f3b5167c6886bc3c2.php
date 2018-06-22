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
        $__internal_c2744249c0a74ffb5e1af512ba72c9642daae4e1c1b436e45f6cc52883049a0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2744249c0a74ffb5e1af512ba72c9642daae4e1c1b436e45f6cc52883049a0a->enter($__internal_c2744249c0a74ffb5e1af512ba72c9642daae4e1c1b436e45f6cc52883049a0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_ed43aa82dea3f338f99e0351605a1069f3591002fb6cbc01ad005cb3e5a1f82c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed43aa82dea3f338f99e0351605a1069f3591002fb6cbc01ad005cb3e5a1f82c->enter($__internal_ed43aa82dea3f338f99e0351605a1069f3591002fb6cbc01ad005cb3e5a1f82c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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

    <header class=\"header\">
        <a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("concepteur");
        echo "\"><div class=\"header-logo\"><p class=\"header-logo-txt\">Logo</p></div></a> <!-- à remplacer par l'img du logo -->
        <a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("concepteur");
        echo "\"><h1 class=\"header-title\">Movee</h1></a>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contact");
        echo "\">Contact</a></li>
                    <li class=\"sub-nav-item\"><a href=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("aide");
        echo "\">Aide</a></li>
                    <li class=\"sub-nav-item\"><a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("apropos");
        echo "\">À propos</a></li>
                </ul>
            </div>
        </div>

        ";
        // line 34
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 34, $this->getSourceContext()); })()), "user", array())) {
            // line 35
            echo "            <div class=\"header-account\">
                <a href=\"";
            // line 36
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profil");
            echo "\" class=\"header-account-signed btn-account btn-account-gauche profil-container\">
                    ";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 37, $this->getSourceContext()); })()), "user", array()), "surname", array()), "html", null, true);
            echo "
                    <div class=\"user-image-container\"><img src=\"";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 38, $this->getSourceContext()); })()), "user", array()), "image", array()), "html", null, true);
            echo "\" class=\"header-account-user-image\"/></div>
                </a>
                <a href=\"";
            // line 40
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("security_logout");
            echo "\" class=\"header-account-signout btn-account\">Déconnexion</a>
            </div>
            ";
        } else {
            // line 43
            echo "                <div class=\"header-account\">
                    <a class=\"header-account-signup btn-account btn-account-gauche\" href=\"";
            // line 44
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("inscription");
            echo "\">Inscription</a>
                    <a class=\"header-account-signin btn-account\" href=\"";
            // line 45
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("security_login");
            echo "\">Connexion</a>
                </div>
        ";
        }
        // line 48
        echo "    </header>

    <section id=\"content\">
";
        // line 51
        $this->displayBlock('body', $context, $blocks);
        // line 53
        echo "    </section>

    <footer class=\"footer\" id=\"footer\">
        <div class=\"footer-content\">
            <div class=\"footer-contentrs\">
                <ul class=\"footer-rs\">
                    <li class=\"footer-rs-li\"><a href=\"https://facebook.com\"><img src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/facebook.png"), "html", null, true);
        echo "\" alt=\"Icône réseau social\"></a></li>
                    <li class=\"footer-rs-li\"><a href=\"https://twitter.com\"><img src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/twitter.png"), "html", null, true);
        echo "\" alt=\"Icône réseau social\"></a></li>
                    <li class=\"footer-rs-li\"><a href=\"https://instagram.com\"><img src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/instagram.png"), "html", null, true);
        echo "\" alt=\"Icône réseau social\"></a></li>
                    <li class=\"footer-rs-li\"><a href=\"https://snapchat.com\"><img src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/snapchat.png"), "html", null, true);
        echo "\" alt=\"Icône réseau social\"></a></li>
                    <li class=\"footer-rs-li\"><a href=\"https://youtube.com\"><img src=\"";
        // line 63
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
        // line 72
        $this->displayBlock('javascripts', $context, $blocks);
        // line 73
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
        
        $__internal_c2744249c0a74ffb5e1af512ba72c9642daae4e1c1b436e45f6cc52883049a0a->leave($__internal_c2744249c0a74ffb5e1af512ba72c9642daae4e1c1b436e45f6cc52883049a0a_prof);

        
        $__internal_ed43aa82dea3f338f99e0351605a1069f3591002fb6cbc01ad005cb3e5a1f82c->leave($__internal_ed43aa82dea3f338f99e0351605a1069f3591002fb6cbc01ad005cb3e5a1f82c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_cce0c61dc3e3e155d8af32739da32630cc4a0bcfd978bf5ab8da2bc8789dc027 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cce0c61dc3e3e155d8af32739da32630cc4a0bcfd978bf5ab8da2bc8789dc027->enter($__internal_cce0c61dc3e3e155d8af32739da32630cc4a0bcfd978bf5ab8da2bc8789dc027_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1bb941b7309ab4ead9e50b2b206ad2fe72409969eb7a0291eb6c325eff653426 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bb941b7309ab4ead9e50b2b206ad2fe72409969eb7a0291eb6c325eff653426->enter($__internal_1bb941b7309ab4ead9e50b2b206ad2fe72409969eb7a0291eb6c325eff653426_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " | Movee";
        
        $__internal_1bb941b7309ab4ead9e50b2b206ad2fe72409969eb7a0291eb6c325eff653426->leave($__internal_1bb941b7309ab4ead9e50b2b206ad2fe72409969eb7a0291eb6c325eff653426_prof);

        
        $__internal_cce0c61dc3e3e155d8af32739da32630cc4a0bcfd978bf5ab8da2bc8789dc027->leave($__internal_cce0c61dc3e3e155d8af32739da32630cc4a0bcfd978bf5ab8da2bc8789dc027_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_309cf1bb3207ec378fd8489a50c55274a29115e91d9ea605f3bd7290740519cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_309cf1bb3207ec378fd8489a50c55274a29115e91d9ea605f3bd7290740519cc->enter($__internal_309cf1bb3207ec378fd8489a50c55274a29115e91d9ea605f3bd7290740519cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_91386912e6b0f574a2b07818665cc36bea945acbcd2f52f7d5962032cb547d21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91386912e6b0f574a2b07818665cc36bea945acbcd2f52f7d5962032cb547d21->enter($__internal_91386912e6b0f574a2b07818665cc36bea945acbcd2f52f7d5962032cb547d21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_91386912e6b0f574a2b07818665cc36bea945acbcd2f52f7d5962032cb547d21->leave($__internal_91386912e6b0f574a2b07818665cc36bea945acbcd2f52f7d5962032cb547d21_prof);

        
        $__internal_309cf1bb3207ec378fd8489a50c55274a29115e91d9ea605f3bd7290740519cc->leave($__internal_309cf1bb3207ec378fd8489a50c55274a29115e91d9ea605f3bd7290740519cc_prof);

    }

    // line 8
    public function block_stylesheets2($context, array $blocks = array())
    {
        $__internal_9e6b7d0e7334e07f4743b5c41914307064ae324e7ef356c5c967c9c7932ed55c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e6b7d0e7334e07f4743b5c41914307064ae324e7ef356c5c967c9c7932ed55c->enter($__internal_9e6b7d0e7334e07f4743b5c41914307064ae324e7ef356c5c967c9c7932ed55c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets2"));

        $__internal_caaf5d3abf6d224c624f658845537bbb325ecddafc46a77a11a9b37fd2f771a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_caaf5d3abf6d224c624f658845537bbb325ecddafc46a77a11a9b37fd2f771a3->enter($__internal_caaf5d3abf6d224c624f658845537bbb325ecddafc46a77a11a9b37fd2f771a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets2"));

        
        $__internal_caaf5d3abf6d224c624f658845537bbb325ecddafc46a77a11a9b37fd2f771a3->leave($__internal_caaf5d3abf6d224c624f658845537bbb325ecddafc46a77a11a9b37fd2f771a3_prof);

        
        $__internal_9e6b7d0e7334e07f4743b5c41914307064ae324e7ef356c5c967c9c7932ed55c->leave($__internal_9e6b7d0e7334e07f4743b5c41914307064ae324e7ef356c5c967c9c7932ed55c_prof);

    }

    // line 51
    public function block_body($context, array $blocks = array())
    {
        $__internal_392410655f678d6482af9e950869f08ecb446eb47eb5982c98791f302f2e8ea4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_392410655f678d6482af9e950869f08ecb446eb47eb5982c98791f302f2e8ea4->enter($__internal_392410655f678d6482af9e950869f08ecb446eb47eb5982c98791f302f2e8ea4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b0f009f89dc1cb2f01f1abc075b861f5b1c7572304bf230cfafe727b21bbf438 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0f009f89dc1cb2f01f1abc075b861f5b1c7572304bf230cfafe727b21bbf438->enter($__internal_b0f009f89dc1cb2f01f1abc075b861f5b1c7572304bf230cfafe727b21bbf438_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b0f009f89dc1cb2f01f1abc075b861f5b1c7572304bf230cfafe727b21bbf438->leave($__internal_b0f009f89dc1cb2f01f1abc075b861f5b1c7572304bf230cfafe727b21bbf438_prof);

        
        $__internal_392410655f678d6482af9e950869f08ecb446eb47eb5982c98791f302f2e8ea4->leave($__internal_392410655f678d6482af9e950869f08ecb446eb47eb5982c98791f302f2e8ea4_prof);

    }

    // line 72
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6923b002dd7e9114bec665d7eb5559d0aefc0b226b8abd817fbeaecc028a3281 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6923b002dd7e9114bec665d7eb5559d0aefc0b226b8abd817fbeaecc028a3281->enter($__internal_6923b002dd7e9114bec665d7eb5559d0aefc0b226b8abd817fbeaecc028a3281_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6af66e9836ff606aecae99b703e8d0eae8435f958fc3e0fd71ad5b581b12a814 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6af66e9836ff606aecae99b703e8d0eae8435f958fc3e0fd71ad5b581b12a814->enter($__internal_6af66e9836ff606aecae99b703e8d0eae8435f958fc3e0fd71ad5b581b12a814_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6af66e9836ff606aecae99b703e8d0eae8435f958fc3e0fd71ad5b581b12a814->leave($__internal_6af66e9836ff606aecae99b703e8d0eae8435f958fc3e0fd71ad5b581b12a814_prof);

        
        $__internal_6923b002dd7e9114bec665d7eb5559d0aefc0b226b8abd817fbeaecc028a3281->leave($__internal_6923b002dd7e9114bec665d7eb5559d0aefc0b226b8abd817fbeaecc028a3281_prof);

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
        return array (  279 => 72,  262 => 51,  245 => 8,  228 => 7,  210 => 5,  186 => 73,  184 => 72,  172 => 63,  168 => 62,  164 => 61,  160 => 60,  156 => 59,  148 => 53,  146 => 51,  141 => 48,  135 => 45,  131 => 44,  128 => 43,  122 => 40,  117 => 38,  113 => 37,  109 => 36,  106 => 35,  104 => 34,  96 => 29,  92 => 28,  88 => 27,  80 => 22,  75 => 20,  71 => 19,  64 => 15,  60 => 14,  52 => 9,  48 => 8,  44 => 7,  40 => 6,  36 => 5,  30 => 1,);
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
    <link rel=\"stylesheet\" href=\"{% block stylesheets2 %}{% endblock %}\">
    <link rel=\"stylesheet\" href=\"{{ asset('build/flash_messages.css') }}\">
</head>
<body>

    <header class=\"header\">
        <a href=\"{{ path(\"concepteur\") }}\"><div class=\"header-logo\"><p class=\"header-logo-txt\">Logo</p></div></a> <!-- à remplacer par l'img du logo -->
        <a href=\"{{ path(\"concepteur\") }}\"><h1 class=\"header-title\">Movee</h1></a>

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
                    <li class=\"sub-nav-item\"><a href=\"{{ path(\"contact\") }}\">Contact</a></li>
                    <li class=\"sub-nav-item\"><a href=\"{{ path(\"aide\") }}\">Aide</a></li>
                    <li class=\"sub-nav-item\"><a href=\"{{ path(\"apropos\") }}\">À propos</a></li>
                </ul>
            </div>
        </div>

        {% if app.user %}
            <div class=\"header-account\">
                <a href=\"{{ path('profil') }}\" class=\"header-account-signed btn-account btn-account-gauche profil-container\">
                    {{ app.user.surname }}
                    <div class=\"user-image-container\"><img src=\"{{ app.user.image }}\" class=\"header-account-user-image\"/></div>
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
