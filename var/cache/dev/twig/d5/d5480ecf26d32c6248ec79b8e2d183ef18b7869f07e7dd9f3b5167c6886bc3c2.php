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
        $__internal_4f3f44812485791fa38cde17d12fb1710cbcc5ea4b1b66b572ba6c74fa016497 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f3f44812485791fa38cde17d12fb1710cbcc5ea4b1b66b572ba6c74fa016497->enter($__internal_4f3f44812485791fa38cde17d12fb1710cbcc5ea4b1b66b572ba6c74fa016497_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_e5074d1e0a5157c0cc5c6788a3a1430f09368beefce6977b9fea4d7feb192ba3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5074d1e0a5157c0cc5c6788a3a1430f09368beefce6977b9fea4d7feb192ba3->enter($__internal_e5074d1e0a5157c0cc5c6788a3a1430f09368beefce6977b9fea4d7feb192ba3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("chercher");
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
        
        $__internal_4f3f44812485791fa38cde17d12fb1710cbcc5ea4b1b66b572ba6c74fa016497->leave($__internal_4f3f44812485791fa38cde17d12fb1710cbcc5ea4b1b66b572ba6c74fa016497_prof);

        
        $__internal_e5074d1e0a5157c0cc5c6788a3a1430f09368beefce6977b9fea4d7feb192ba3->leave($__internal_e5074d1e0a5157c0cc5c6788a3a1430f09368beefce6977b9fea4d7feb192ba3_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a5b09737e834a8dc7134d1ef167a4ea795624500bcd3ee0ba38ea702590730f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5b09737e834a8dc7134d1ef167a4ea795624500bcd3ee0ba38ea702590730f0->enter($__internal_a5b09737e834a8dc7134d1ef167a4ea795624500bcd3ee0ba38ea702590730f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5a3ef4ca4c20abc1fd9f2d128d73f9dabcf2c1cd1258834a45b1487f264fc0ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a3ef4ca4c20abc1fd9f2d128d73f9dabcf2c1cd1258834a45b1487f264fc0ee->enter($__internal_5a3ef4ca4c20abc1fd9f2d128d73f9dabcf2c1cd1258834a45b1487f264fc0ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " | Movee";
        
        $__internal_5a3ef4ca4c20abc1fd9f2d128d73f9dabcf2c1cd1258834a45b1487f264fc0ee->leave($__internal_5a3ef4ca4c20abc1fd9f2d128d73f9dabcf2c1cd1258834a45b1487f264fc0ee_prof);

        
        $__internal_a5b09737e834a8dc7134d1ef167a4ea795624500bcd3ee0ba38ea702590730f0->leave($__internal_a5b09737e834a8dc7134d1ef167a4ea795624500bcd3ee0ba38ea702590730f0_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fc89d28053a0ec1914777840d4a2505b9c0ab123fe3ce9aeaf4559715f508981 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc89d28053a0ec1914777840d4a2505b9c0ab123fe3ce9aeaf4559715f508981->enter($__internal_fc89d28053a0ec1914777840d4a2505b9c0ab123fe3ce9aeaf4559715f508981_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_d694f2a061b705e21b806f429933d885d5ba9a73abec86891d4e715e2716d087 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d694f2a061b705e21b806f429933d885d5ba9a73abec86891d4e715e2716d087->enter($__internal_d694f2a061b705e21b806f429933d885d5ba9a73abec86891d4e715e2716d087_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_d694f2a061b705e21b806f429933d885d5ba9a73abec86891d4e715e2716d087->leave($__internal_d694f2a061b705e21b806f429933d885d5ba9a73abec86891d4e715e2716d087_prof);

        
        $__internal_fc89d28053a0ec1914777840d4a2505b9c0ab123fe3ce9aeaf4559715f508981->leave($__internal_fc89d28053a0ec1914777840d4a2505b9c0ab123fe3ce9aeaf4559715f508981_prof);

    }

    // line 49
    public function block_body($context, array $blocks = array())
    {
        $__internal_808858a84e04ce4212e4a6071b74333b57ae1047ca2e0ce14485a72db9e296e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_808858a84e04ce4212e4a6071b74333b57ae1047ca2e0ce14485a72db9e296e1->enter($__internal_808858a84e04ce4212e4a6071b74333b57ae1047ca2e0ce14485a72db9e296e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a45c4f8db4ce6d6a2a2ee86362edbf7f94647052762dda119f62fb6c2fac9797 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a45c4f8db4ce6d6a2a2ee86362edbf7f94647052762dda119f62fb6c2fac9797->enter($__internal_a45c4f8db4ce6d6a2a2ee86362edbf7f94647052762dda119f62fb6c2fac9797_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a45c4f8db4ce6d6a2a2ee86362edbf7f94647052762dda119f62fb6c2fac9797->leave($__internal_a45c4f8db4ce6d6a2a2ee86362edbf7f94647052762dda119f62fb6c2fac9797_prof);

        
        $__internal_808858a84e04ce4212e4a6071b74333b57ae1047ca2e0ce14485a72db9e296e1->leave($__internal_808858a84e04ce4212e4a6071b74333b57ae1047ca2e0ce14485a72db9e296e1_prof);

    }

    // line 70
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_10ef537bc3c51067113e204dd48506b07e6985219562cebfe802f2cb6e3cfd0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10ef537bc3c51067113e204dd48506b07e6985219562cebfe802f2cb6e3cfd0d->enter($__internal_10ef537bc3c51067113e204dd48506b07e6985219562cebfe802f2cb6e3cfd0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_3cc91061c274b3181ed7b4050d267026411346b6f374a6869e88494173eaeae9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cc91061c274b3181ed7b4050d267026411346b6f374a6869e88494173eaeae9->enter($__internal_3cc91061c274b3181ed7b4050d267026411346b6f374a6869e88494173eaeae9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_3cc91061c274b3181ed7b4050d267026411346b6f374a6869e88494173eaeae9->leave($__internal_3cc91061c274b3181ed7b4050d267026411346b6f374a6869e88494173eaeae9_prof);

        
        $__internal_10ef537bc3c51067113e204dd48506b07e6985219562cebfe802f2cb6e3cfd0d->leave($__internal_10ef537bc3c51067113e204dd48506b07e6985219562cebfe802f2cb6e3cfd0d_prof);

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
