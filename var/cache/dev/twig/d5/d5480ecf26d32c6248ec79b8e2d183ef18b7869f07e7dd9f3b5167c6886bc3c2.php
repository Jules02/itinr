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
        $__internal_cb00939f7be54b36f3ae075be09d3caf2cd1e87df3e4bd46380576a1cb0a1bbd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb00939f7be54b36f3ae075be09d3caf2cd1e87df3e4bd46380576a1cb0a1bbd->enter($__internal_cb00939f7be54b36f3ae075be09d3caf2cd1e87df3e4bd46380576a1cb0a1bbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_328443d975ecb9f9915e9a77473a59a131e0a7eafabd024eb4241067fd2700f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_328443d975ecb9f9915e9a77473a59a131e0a7eafabd024eb4241067fd2700f4->enter($__internal_328443d975ecb9f9915e9a77473a59a131e0a7eafabd024eb4241067fd2700f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/flash_messages.css"), "html", null, true);
        echo "\">
</head>
<body>

    <header class=\"header\">
        <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("concepteur");
        echo "\"><div class=\"header-logo\"><p class=\"header-logo-txt\">Logo</p></div></a> <!-- à remplacer par l'img du logo -->
        <a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("concepteur");
        echo "\"><h1 class=\"header-title\">Movee</h1></a>

        <div class=\"header-navbar\">
            <ul class=\"nav_onglets\">
                <li class=\"nav-item\"><a href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("concepteur");
        echo "\">Concepteur d'itinéraires</a></li>
                <li class=\"nav-item\"><a href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("chercher");
        echo "\">Trouver un itinéraire</a></li>
                <li class=\"nav-item nav-item-plus\" id=\"plus\">
                    <a>Plus <img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/caretdown.png"), "html", null, true);
        echo "\" alt=\"Déroulant\" class=\"caretdown\" id=\"caret\"/></a>
                </li>
            </ul>
            <div class=\"sub-nav\" id=\"accordeon\">
                <ul class=\"sub-nav-ul\">
                    <li class=\"sub-nav-item\"><a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contact");
        echo "\">Contact</a></li>
                    <li class=\"sub-nav-item\"><a href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("aide");
        echo "\">Aide</a></li>
                    <li class=\"sub-nav-item\"><a href=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("apropos");
        echo "\">À propos</a></li>
                </ul>
            </div>
        </div>

        ";
        // line 33
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 33, $this->getSourceContext()); })()), "user", array())) {
            // line 34
            echo "            <div class=\"header-account\">
                <a href=\"";
            // line 35
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profil");
            echo "\" class=\"header-account-signed btn-account btn-account-gauche profil-container\">
                    ";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 36, $this->getSourceContext()); })()), "user", array()), "surname", array()), "html", null, true);
            echo "
                    <div class=\"user-image-container\"><img src=\"";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 37, $this->getSourceContext()); })()), "user", array()), "image", array()), "html", null, true);
            echo "\" class=\"header-account-user-image\"/></div>
                </a>
                <a href=\"";
            // line 39
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("security_logout");
            echo "\" class=\"header-account-signout btn-account\">Déconnexion</a>
            </div>
            ";
        } else {
            // line 42
            echo "                <div class=\"header-account\">
                    <a class=\"header-account-signup btn-account btn-account-gauche\" href=\"";
            // line 43
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("inscription");
            echo "\">Inscription</a>
                    <a class=\"header-account-signin btn-account\" href=\"";
            // line 44
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("security_login");
            echo "\">Connexion</a>
                </div>
        ";
        }
        // line 47
        echo "    </header>

    <section id=\"content\">
";
        // line 50
        $this->displayBlock('body', $context, $blocks);
        // line 52
        echo "    </section>

    <footer class=\"footer\" id=\"footer\">
        <div class=\"footer-content\">
            <div class=\"footer-contentrs\">
                <ul class=\"footer-rs\">
                    <li class=\"footer-rs-li\"><a href=\"https://facebook.com\"><img src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/facebook.png"), "html", null, true);
        echo "\" alt=\"Icône réseau social\"></a></li>
                    <li class=\"footer-rs-li\"><a href=\"https://twitter.com\"><img src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/twitter.png"), "html", null, true);
        echo "\" alt=\"Icône réseau social\"></a></li>
                    <li class=\"footer-rs-li\"><a href=\"https://instagram.com\"><img src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/instagram.png"), "html", null, true);
        echo "\" alt=\"Icône réseau social\"></a></li>
                    <li class=\"footer-rs-li\"><a href=\"https://snapchat.com\"><img src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/snapchat.png"), "html", null, true);
        echo "\" alt=\"Icône réseau social\"></a></li>
                    <li class=\"footer-rs-li\"><a href=\"https://youtube.com\"><img src=\"";
        // line 62
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
        // line 71
        $this->displayBlock('javascripts', $context, $blocks);
        // line 72
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
        
        $__internal_cb00939f7be54b36f3ae075be09d3caf2cd1e87df3e4bd46380576a1cb0a1bbd->leave($__internal_cb00939f7be54b36f3ae075be09d3caf2cd1e87df3e4bd46380576a1cb0a1bbd_prof);

        
        $__internal_328443d975ecb9f9915e9a77473a59a131e0a7eafabd024eb4241067fd2700f4->leave($__internal_328443d975ecb9f9915e9a77473a59a131e0a7eafabd024eb4241067fd2700f4_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e288b7e89aaad613acc47b40289cfc36493d4ad2b31dc250434e1166030219c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e288b7e89aaad613acc47b40289cfc36493d4ad2b31dc250434e1166030219c7->enter($__internal_e288b7e89aaad613acc47b40289cfc36493d4ad2b31dc250434e1166030219c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_044a760a2da6692ae9a41fe484e4f109d8b19b17f00c28925c2aba471c5deaec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_044a760a2da6692ae9a41fe484e4f109d8b19b17f00c28925c2aba471c5deaec->enter($__internal_044a760a2da6692ae9a41fe484e4f109d8b19b17f00c28925c2aba471c5deaec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " | Movee";
        
        $__internal_044a760a2da6692ae9a41fe484e4f109d8b19b17f00c28925c2aba471c5deaec->leave($__internal_044a760a2da6692ae9a41fe484e4f109d8b19b17f00c28925c2aba471c5deaec_prof);

        
        $__internal_e288b7e89aaad613acc47b40289cfc36493d4ad2b31dc250434e1166030219c7->leave($__internal_e288b7e89aaad613acc47b40289cfc36493d4ad2b31dc250434e1166030219c7_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_21ff7056f728ca0d9597f8fc4101e987a8b1780a2b9cd3e059f0d824776d06eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21ff7056f728ca0d9597f8fc4101e987a8b1780a2b9cd3e059f0d824776d06eb->enter($__internal_21ff7056f728ca0d9597f8fc4101e987a8b1780a2b9cd3e059f0d824776d06eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_0127aa0ecce83607dd1a7145953c882423e5d575fe2af58717b92126cd9e5370 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0127aa0ecce83607dd1a7145953c882423e5d575fe2af58717b92126cd9e5370->enter($__internal_0127aa0ecce83607dd1a7145953c882423e5d575fe2af58717b92126cd9e5370_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_0127aa0ecce83607dd1a7145953c882423e5d575fe2af58717b92126cd9e5370->leave($__internal_0127aa0ecce83607dd1a7145953c882423e5d575fe2af58717b92126cd9e5370_prof);

        
        $__internal_21ff7056f728ca0d9597f8fc4101e987a8b1780a2b9cd3e059f0d824776d06eb->leave($__internal_21ff7056f728ca0d9597f8fc4101e987a8b1780a2b9cd3e059f0d824776d06eb_prof);

    }

    // line 50
    public function block_body($context, array $blocks = array())
    {
        $__internal_0f7638fbc1eb7bc838ce02fcfe429721a9d449611500369e95ea761c1f14bb5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f7638fbc1eb7bc838ce02fcfe429721a9d449611500369e95ea761c1f14bb5c->enter($__internal_0f7638fbc1eb7bc838ce02fcfe429721a9d449611500369e95ea761c1f14bb5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_948e96cce596ae03fe7c0360b8b4108efc7809ba9c7fb2a846b97aa634d1fef0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_948e96cce596ae03fe7c0360b8b4108efc7809ba9c7fb2a846b97aa634d1fef0->enter($__internal_948e96cce596ae03fe7c0360b8b4108efc7809ba9c7fb2a846b97aa634d1fef0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_948e96cce596ae03fe7c0360b8b4108efc7809ba9c7fb2a846b97aa634d1fef0->leave($__internal_948e96cce596ae03fe7c0360b8b4108efc7809ba9c7fb2a846b97aa634d1fef0_prof);

        
        $__internal_0f7638fbc1eb7bc838ce02fcfe429721a9d449611500369e95ea761c1f14bb5c->leave($__internal_0f7638fbc1eb7bc838ce02fcfe429721a9d449611500369e95ea761c1f14bb5c_prof);

    }

    // line 71
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b078b410da6a57826ef395b143d8cf85f86e7d7f7e4e347c169b1df1627b1ea8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b078b410da6a57826ef395b143d8cf85f86e7d7f7e4e347c169b1df1627b1ea8->enter($__internal_b078b410da6a57826ef395b143d8cf85f86e7d7f7e4e347c169b1df1627b1ea8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_667697cd57b82047907cc5548f17472999da10e611cb3b77f7d855c49d67cc8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_667697cd57b82047907cc5548f17472999da10e611cb3b77f7d855c49d67cc8f->enter($__internal_667697cd57b82047907cc5548f17472999da10e611cb3b77f7d855c49d67cc8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_667697cd57b82047907cc5548f17472999da10e611cb3b77f7d855c49d67cc8f->leave($__internal_667697cd57b82047907cc5548f17472999da10e611cb3b77f7d855c49d67cc8f_prof);

        
        $__internal_b078b410da6a57826ef395b143d8cf85f86e7d7f7e4e347c169b1df1627b1ea8->leave($__internal_b078b410da6a57826ef395b143d8cf85f86e7d7f7e4e347c169b1df1627b1ea8_prof);

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
        return array (  257 => 71,  240 => 50,  223 => 7,  205 => 5,  181 => 72,  179 => 71,  167 => 62,  163 => 61,  159 => 60,  155 => 59,  151 => 58,  143 => 52,  141 => 50,  136 => 47,  130 => 44,  126 => 43,  123 => 42,  117 => 39,  112 => 37,  108 => 36,  104 => 35,  101 => 34,  99 => 33,  91 => 28,  87 => 27,  83 => 26,  75 => 21,  70 => 19,  66 => 18,  59 => 14,  55 => 13,  47 => 8,  43 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
