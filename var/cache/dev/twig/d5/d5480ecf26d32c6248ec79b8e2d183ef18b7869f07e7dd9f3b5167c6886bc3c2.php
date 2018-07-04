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
        $__internal_1d957132712eeda582b268177656d7f3b2b84ee2dd80930d99384b1a2d558caf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d957132712eeda582b268177656d7f3b2b84ee2dd80930d99384b1a2d558caf->enter($__internal_1d957132712eeda582b268177656d7f3b2b84ee2dd80930d99384b1a2d558caf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6786cf7bf624a252b92bfa7cb65d7c0735d3e5f59310308853ef21bf5cf49fd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6786cf7bf624a252b92bfa7cb65d7c0735d3e5f59310308853ef21bf5cf49fd7->enter($__internal_6786cf7bf624a252b92bfa7cb65d7c0735d3e5f59310308853ef21bf5cf49fd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profil", array("username" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 36, $this->getSourceContext()); })()), "user", array()), "username", array()))), "html", null, true);
            echo "\" class=\"header-account-signed btn-account btn-account-gauche profil-container\">
                    ";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 37, $this->getSourceContext()); })()), "user", array()), "surname", array()), "html", null, true);
            echo "
                    <div class=\"user-image-container\"><img src=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 38, $this->getSourceContext()); })()), "user", array()), "image", array())), "html", null, true);
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
        
        $__internal_1d957132712eeda582b268177656d7f3b2b84ee2dd80930d99384b1a2d558caf->leave($__internal_1d957132712eeda582b268177656d7f3b2b84ee2dd80930d99384b1a2d558caf_prof);

        
        $__internal_6786cf7bf624a252b92bfa7cb65d7c0735d3e5f59310308853ef21bf5cf49fd7->leave($__internal_6786cf7bf624a252b92bfa7cb65d7c0735d3e5f59310308853ef21bf5cf49fd7_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_88a0c56a0a2187907b30a10426164e6cc30ddb51dd9bfced684ea6e9e981205c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88a0c56a0a2187907b30a10426164e6cc30ddb51dd9bfced684ea6e9e981205c->enter($__internal_88a0c56a0a2187907b30a10426164e6cc30ddb51dd9bfced684ea6e9e981205c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4b38ae6b8b48afed1edd61b738b16e2fd1ef60ddd9eaaff0d0134e442c7f69be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b38ae6b8b48afed1edd61b738b16e2fd1ef60ddd9eaaff0d0134e442c7f69be->enter($__internal_4b38ae6b8b48afed1edd61b738b16e2fd1ef60ddd9eaaff0d0134e442c7f69be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " | Movee";
        
        $__internal_4b38ae6b8b48afed1edd61b738b16e2fd1ef60ddd9eaaff0d0134e442c7f69be->leave($__internal_4b38ae6b8b48afed1edd61b738b16e2fd1ef60ddd9eaaff0d0134e442c7f69be_prof);

        
        $__internal_88a0c56a0a2187907b30a10426164e6cc30ddb51dd9bfced684ea6e9e981205c->leave($__internal_88a0c56a0a2187907b30a10426164e6cc30ddb51dd9bfced684ea6e9e981205c_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_56bd4d561ccfb1dcfe1e9d973ab644f5728dd8f8783765f5c66aa12aab3288ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56bd4d561ccfb1dcfe1e9d973ab644f5728dd8f8783765f5c66aa12aab3288ae->enter($__internal_56bd4d561ccfb1dcfe1e9d973ab644f5728dd8f8783765f5c66aa12aab3288ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_1690b2addc0a24c3004c3bc00ff872325d46544db3578122d73fdd4cde4c0d94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1690b2addc0a24c3004c3bc00ff872325d46544db3578122d73fdd4cde4c0d94->enter($__internal_1690b2addc0a24c3004c3bc00ff872325d46544db3578122d73fdd4cde4c0d94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_1690b2addc0a24c3004c3bc00ff872325d46544db3578122d73fdd4cde4c0d94->leave($__internal_1690b2addc0a24c3004c3bc00ff872325d46544db3578122d73fdd4cde4c0d94_prof);

        
        $__internal_56bd4d561ccfb1dcfe1e9d973ab644f5728dd8f8783765f5c66aa12aab3288ae->leave($__internal_56bd4d561ccfb1dcfe1e9d973ab644f5728dd8f8783765f5c66aa12aab3288ae_prof);

    }

    // line 8
    public function block_stylesheets2($context, array $blocks = array())
    {
        $__internal_95ba2079109c9cb4e8c15b9447e07671cdbbbca1dd7c099c37c19add11648801 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95ba2079109c9cb4e8c15b9447e07671cdbbbca1dd7c099c37c19add11648801->enter($__internal_95ba2079109c9cb4e8c15b9447e07671cdbbbca1dd7c099c37c19add11648801_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets2"));

        $__internal_2b45fe7098d67bcf5496865b7b1e5a3c8ca0ffcdc35bc8197bad28a48f27f72a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b45fe7098d67bcf5496865b7b1e5a3c8ca0ffcdc35bc8197bad28a48f27f72a->enter($__internal_2b45fe7098d67bcf5496865b7b1e5a3c8ca0ffcdc35bc8197bad28a48f27f72a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets2"));

        
        $__internal_2b45fe7098d67bcf5496865b7b1e5a3c8ca0ffcdc35bc8197bad28a48f27f72a->leave($__internal_2b45fe7098d67bcf5496865b7b1e5a3c8ca0ffcdc35bc8197bad28a48f27f72a_prof);

        
        $__internal_95ba2079109c9cb4e8c15b9447e07671cdbbbca1dd7c099c37c19add11648801->leave($__internal_95ba2079109c9cb4e8c15b9447e07671cdbbbca1dd7c099c37c19add11648801_prof);

    }

    // line 51
    public function block_body($context, array $blocks = array())
    {
        $__internal_2c9857fa64ea1bde0ba12cd3ae6ca208a9afe39f5b4ea41b5534010991487616 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c9857fa64ea1bde0ba12cd3ae6ca208a9afe39f5b4ea41b5534010991487616->enter($__internal_2c9857fa64ea1bde0ba12cd3ae6ca208a9afe39f5b4ea41b5534010991487616_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4e2b326e80956837565460127ec5303b379336495422c948f6bf624e822be343 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e2b326e80956837565460127ec5303b379336495422c948f6bf624e822be343->enter($__internal_4e2b326e80956837565460127ec5303b379336495422c948f6bf624e822be343_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4e2b326e80956837565460127ec5303b379336495422c948f6bf624e822be343->leave($__internal_4e2b326e80956837565460127ec5303b379336495422c948f6bf624e822be343_prof);

        
        $__internal_2c9857fa64ea1bde0ba12cd3ae6ca208a9afe39f5b4ea41b5534010991487616->leave($__internal_2c9857fa64ea1bde0ba12cd3ae6ca208a9afe39f5b4ea41b5534010991487616_prof);

    }

    // line 72
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ccb305ffbc6335bd603566e1277efebfb59b374a1b94dc14ee965004f8a23a95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccb305ffbc6335bd603566e1277efebfb59b374a1b94dc14ee965004f8a23a95->enter($__internal_ccb305ffbc6335bd603566e1277efebfb59b374a1b94dc14ee965004f8a23a95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_d479fcb283fe6d4fbcaa9b15f6237b58d07c21d669e9b300b041a43f1f8676bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d479fcb283fe6d4fbcaa9b15f6237b58d07c21d669e9b300b041a43f1f8676bd->enter($__internal_d479fcb283fe6d4fbcaa9b15f6237b58d07c21d669e9b300b041a43f1f8676bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_d479fcb283fe6d4fbcaa9b15f6237b58d07c21d669e9b300b041a43f1f8676bd->leave($__internal_d479fcb283fe6d4fbcaa9b15f6237b58d07c21d669e9b300b041a43f1f8676bd_prof);

        
        $__internal_ccb305ffbc6335bd603566e1277efebfb59b374a1b94dc14ee965004f8a23a95->leave($__internal_ccb305ffbc6335bd603566e1277efebfb59b374a1b94dc14ee965004f8a23a95_prof);

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
