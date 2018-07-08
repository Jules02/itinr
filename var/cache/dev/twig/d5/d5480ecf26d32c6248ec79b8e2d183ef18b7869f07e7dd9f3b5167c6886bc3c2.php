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
        $__internal_068cbf72065c4e2f892b3e81403e314c2f73be8e0cdbdfec66f80ca332f4ea4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_068cbf72065c4e2f892b3e81403e314c2f73be8e0cdbdfec66f80ca332f4ea4c->enter($__internal_068cbf72065c4e2f892b3e81403e314c2f73be8e0cdbdfec66f80ca332f4ea4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_469f40ca909b8cdfff6246ae77b125feda3acf900e2e361c227067ff8a383679 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_469f40ca909b8cdfff6246ae77b125feda3acf900e2e361c227067ff8a383679->enter($__internal_469f40ca909b8cdfff6246ae77b125feda3acf900e2e361c227067ff8a383679_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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

";
        // line 73
        $this->displayBlock('javascripts', $context, $blocks);
        // line 74
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
        
        $__internal_068cbf72065c4e2f892b3e81403e314c2f73be8e0cdbdfec66f80ca332f4ea4c->leave($__internal_068cbf72065c4e2f892b3e81403e314c2f73be8e0cdbdfec66f80ca332f4ea4c_prof);

        
        $__internal_469f40ca909b8cdfff6246ae77b125feda3acf900e2e361c227067ff8a383679->leave($__internal_469f40ca909b8cdfff6246ae77b125feda3acf900e2e361c227067ff8a383679_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8ef9fe4c62335a49fe3b20b80a540de475af15cda2e658d19f67a55b8a8c3069 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ef9fe4c62335a49fe3b20b80a540de475af15cda2e658d19f67a55b8a8c3069->enter($__internal_8ef9fe4c62335a49fe3b20b80a540de475af15cda2e658d19f67a55b8a8c3069_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4f61a412ad210331a2b9465194f7efda940060b38bc335ef145dc84be76b1f1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f61a412ad210331a2b9465194f7efda940060b38bc335ef145dc84be76b1f1d->enter($__internal_4f61a412ad210331a2b9465194f7efda940060b38bc335ef145dc84be76b1f1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " | Itin'r";
        
        $__internal_4f61a412ad210331a2b9465194f7efda940060b38bc335ef145dc84be76b1f1d->leave($__internal_4f61a412ad210331a2b9465194f7efda940060b38bc335ef145dc84be76b1f1d_prof);

        
        $__internal_8ef9fe4c62335a49fe3b20b80a540de475af15cda2e658d19f67a55b8a8c3069->leave($__internal_8ef9fe4c62335a49fe3b20b80a540de475af15cda2e658d19f67a55b8a8c3069_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b53b64804feee0ba936f7a1cf195b7e4b5fe5055bc5f42c6bcc4bcf98281c0d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b53b64804feee0ba936f7a1cf195b7e4b5fe5055bc5f42c6bcc4bcf98281c0d9->enter($__internal_b53b64804feee0ba936f7a1cf195b7e4b5fe5055bc5f42c6bcc4bcf98281c0d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_5548ddb21b58f374b04b89ef4a776bab88d9f56616b3a37f32dbd150698a10f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5548ddb21b58f374b04b89ef4a776bab88d9f56616b3a37f32dbd150698a10f6->enter($__internal_5548ddb21b58f374b04b89ef4a776bab88d9f56616b3a37f32dbd150698a10f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_5548ddb21b58f374b04b89ef4a776bab88d9f56616b3a37f32dbd150698a10f6->leave($__internal_5548ddb21b58f374b04b89ef4a776bab88d9f56616b3a37f32dbd150698a10f6_prof);

        
        $__internal_b53b64804feee0ba936f7a1cf195b7e4b5fe5055bc5f42c6bcc4bcf98281c0d9->leave($__internal_b53b64804feee0ba936f7a1cf195b7e4b5fe5055bc5f42c6bcc4bcf98281c0d9_prof);

    }

    // line 8
    public function block_stylesheets2($context, array $blocks = array())
    {
        $__internal_46051ec35bfc5eb4feacac0408e274483bbdc7abaf2d728a6ec993d6fa7887ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46051ec35bfc5eb4feacac0408e274483bbdc7abaf2d728a6ec993d6fa7887ae->enter($__internal_46051ec35bfc5eb4feacac0408e274483bbdc7abaf2d728a6ec993d6fa7887ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets2"));

        $__internal_504e10ec9a70d7287c5b46da675bce75d5e84f610ced2d62d1e196e710a3ae7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_504e10ec9a70d7287c5b46da675bce75d5e84f610ced2d62d1e196e710a3ae7e->enter($__internal_504e10ec9a70d7287c5b46da675bce75d5e84f610ced2d62d1e196e710a3ae7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets2"));

        
        $__internal_504e10ec9a70d7287c5b46da675bce75d5e84f610ced2d62d1e196e710a3ae7e->leave($__internal_504e10ec9a70d7287c5b46da675bce75d5e84f610ced2d62d1e196e710a3ae7e_prof);

        
        $__internal_46051ec35bfc5eb4feacac0408e274483bbdc7abaf2d728a6ec993d6fa7887ae->leave($__internal_46051ec35bfc5eb4feacac0408e274483bbdc7abaf2d728a6ec993d6fa7887ae_prof);

    }

    // line 52
    public function block_body($context, array $blocks = array())
    {
        $__internal_eb6a4618535d89ee6d4e7a2110dd454ff3ee496c117f3faece27b2c10b846e10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb6a4618535d89ee6d4e7a2110dd454ff3ee496c117f3faece27b2c10b846e10->enter($__internal_eb6a4618535d89ee6d4e7a2110dd454ff3ee496c117f3faece27b2c10b846e10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5b5f9710868c2ca3a88524d3fffb472be034507698c7cbebf7a4b0337a5ec945 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b5f9710868c2ca3a88524d3fffb472be034507698c7cbebf7a4b0337a5ec945->enter($__internal_5b5f9710868c2ca3a88524d3fffb472be034507698c7cbebf7a4b0337a5ec945_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5b5f9710868c2ca3a88524d3fffb472be034507698c7cbebf7a4b0337a5ec945->leave($__internal_5b5f9710868c2ca3a88524d3fffb472be034507698c7cbebf7a4b0337a5ec945_prof);

        
        $__internal_eb6a4618535d89ee6d4e7a2110dd454ff3ee496c117f3faece27b2c10b846e10->leave($__internal_eb6a4618535d89ee6d4e7a2110dd454ff3ee496c117f3faece27b2c10b846e10_prof);

    }

    // line 73
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1c7766c861dec595350f7c4ee24aa11574e5ce488ff1172ca98d9423e86ea43a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c7766c861dec595350f7c4ee24aa11574e5ce488ff1172ca98d9423e86ea43a->enter($__internal_1c7766c861dec595350f7c4ee24aa11574e5ce488ff1172ca98d9423e86ea43a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_a4ee5c2149dea79b9b3ba9e6d3c3ca52a5e14ddd208223e8d5f9868a3df96dda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4ee5c2149dea79b9b3ba9e6d3c3ca52a5e14ddd208223e8d5f9868a3df96dda->enter($__internal_a4ee5c2149dea79b9b3ba9e6d3c3ca52a5e14ddd208223e8d5f9868a3df96dda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_a4ee5c2149dea79b9b3ba9e6d3c3ca52a5e14ddd208223e8d5f9868a3df96dda->leave($__internal_a4ee5c2149dea79b9b3ba9e6d3c3ca52a5e14ddd208223e8d5f9868a3df96dda_prof);

        
        $__internal_1c7766c861dec595350f7c4ee24aa11574e5ce488ff1172ca98d9423e86ea43a->leave($__internal_1c7766c861dec595350f7c4ee24aa11574e5ce488ff1172ca98d9423e86ea43a_prof);

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
        return array (  283 => 73,  266 => 52,  249 => 8,  232 => 7,  214 => 5,  190 => 74,  188 => 73,  176 => 64,  172 => 63,  168 => 62,  164 => 61,  160 => 60,  152 => 54,  150 => 52,  145 => 49,  139 => 46,  135 => 45,  132 => 44,  126 => 41,  121 => 39,  117 => 38,  113 => 37,  110 => 36,  108 => 35,  100 => 30,  96 => 29,  92 => 28,  88 => 27,  80 => 22,  75 => 20,  71 => 19,  64 => 15,  60 => 14,  52 => 9,  48 => 8,  44 => 7,  40 => 6,  36 => 5,  30 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>{% block title %} | Itin'r{% endblock %}</title>
    <link rel=\"stylesheet\" href=\"{{ asset('build/layout.css') }}\">
    <link rel=\"stylesheet\" href=\"{% block stylesheets %}{% endblock %}\">
    <link rel=\"stylesheet\" href=\"{% block stylesheets2 %}{% endblock %}\">
    <link rel=\"stylesheet\" href=\"{{ asset('build/flash_messages.css') }}\">
</head>
<body>

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
