<?php

/* security/login.html.twig */
class __TwigTemplate_3381ac27e39b0d4545c00bb3d47651507a974b4c6783b5d0c3a42d76fa446b11 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b1e9fa47e7b655c72cffdf87722aa97b34d541238cae462061c7f05e22df25aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1e9fa47e7b655c72cffdf87722aa97b34d541238cae462061c7f05e22df25aa->enter($__internal_b1e9fa47e7b655c72cffdf87722aa97b34d541238cae462061c7f05e22df25aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_5cdcc3fe215180f9e3331de084dacfb55e022e0a9275410c3920082ab010d808 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cdcc3fe215180f9e3331de084dacfb55e022e0a9275410c3920082ab010d808->enter($__internal_5cdcc3fe215180f9e3331de084dacfb55e022e0a9275410c3920082ab010d808_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b1e9fa47e7b655c72cffdf87722aa97b34d541238cae462061c7f05e22df25aa->leave($__internal_b1e9fa47e7b655c72cffdf87722aa97b34d541238cae462061c7f05e22df25aa_prof);

        
        $__internal_5cdcc3fe215180f9e3331de084dacfb55e022e0a9275410c3920082ab010d808->leave($__internal_5cdcc3fe215180f9e3331de084dacfb55e022e0a9275410c3920082ab010d808_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1987322b2853bf2a38f4eeef70b93becb6044c55af15c1f074b67ca4e74c20bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1987322b2853bf2a38f4eeef70b93becb6044c55af15c1f074b67ca4e74c20bb->enter($__internal_1987322b2853bf2a38f4eeef70b93becb6044c55af15c1f074b67ca4e74c20bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9535e164597a26dab4f3ea9392dcd8d1a25c4103de1155a16b0e78a94b1aeb91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9535e164597a26dab4f3ea9392dcd8d1a25c4103de1155a16b0e78a94b1aeb91->enter($__internal_9535e164597a26dab4f3ea9392dcd8d1a25c4103de1155a16b0e78a94b1aeb91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Connexion";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_9535e164597a26dab4f3ea9392dcd8d1a25c4103de1155a16b0e78a94b1aeb91->leave($__internal_9535e164597a26dab4f3ea9392dcd8d1a25c4103de1155a16b0e78a94b1aeb91_prof);

        
        $__internal_1987322b2853bf2a38f4eeef70b93becb6044c55af15c1f074b67ca4e74c20bb->leave($__internal_1987322b2853bf2a38f4eeef70b93becb6044c55af15c1f074b67ca4e74c20bb_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e8cf892612ef530b2518d6cb8e57cef15ed8654dfe96b71f0518f614b8acfe42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8cf892612ef530b2518d6cb8e57cef15ed8654dfe96b71f0518f614b8acfe42->enter($__internal_e8cf892612ef530b2518d6cb8e57cef15ed8654dfe96b71f0518f614b8acfe42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_3564c18c0f175a64cfc6c1836528f67ba64252f520ede9ab66b966d1feb2895a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3564c18c0f175a64cfc6c1836528f67ba64252f520ede9ab66b966d1feb2895a->enter($__internal_3564c18c0f175a64cfc6c1836528f67ba64252f520ede9ab66b966d1feb2895a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/connexion.css"), "html", null, true);
        
        $__internal_3564c18c0f175a64cfc6c1836528f67ba64252f520ede9ab66b966d1feb2895a->leave($__internal_3564c18c0f175a64cfc6c1836528f67ba64252f520ede9ab66b966d1feb2895a_prof);

        
        $__internal_e8cf892612ef530b2518d6cb8e57cef15ed8654dfe96b71f0518f614b8acfe42->leave($__internal_e8cf892612ef530b2518d6cb8e57cef15ed8654dfe96b71f0518f614b8acfe42_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_bddc5f999a4174328a8a993c12bb52b6d5f47bcce12715a58041637c146b5772 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bddc5f999a4174328a8a993c12bb52b6d5f47bcce12715a58041637c146b5772->enter($__internal_bddc5f999a4174328a8a993c12bb52b6d5f47bcce12715a58041637c146b5772_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_eebc710c7814826339226b9c42367f40943774103e26066d768e4bc20072c567 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eebc710c7814826339226b9c42367f40943774103e26066d768e4bc20072c567->enter($__internal_eebc710c7814826339226b9c42367f40943774103e26066d768e4bc20072c567_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
    <h1 class=\"titre margin-left\">Connexion</h1>
    <div class=\"titre-separation margin-left\"></div>

    ";
        // line 12
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 12, $this->getSourceContext()); })())) {
            // line 13
            echo "        <div class=\"form-error\">
            ";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 14, $this->getSourceContext()); })()), "messageKey", array()), "html", null, true);
            echo "
        </div>
    ";
        }
        // line 17
        echo "
    <div class=\"form-container\">
        <form action=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("security_login");
        echo "\" method=\"post\">
            <div class=\"OAuth-connect facebook-connect\"><img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/facebook_login.png"), "html", null, true);
        echo "\" alt=\"Icône Google\" class=\"OAuth-connect-img\"/>Se connecter avec Facebook</div>

            <div class=\"OAuth-connect google-connect\"><img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/google_login.png"), "html", null, true);
        echo "\" alt=\"Icône Google\" class=\"OAuth-connect-img\"/>Se connecter avec Google</div>

            <div class=\"form-group\">
                <input placeholder=\"Nom d'utilisateur\" type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new Twig_Error_Runtime('Variable "last_username" does not exist.', 25, $this->getSourceContext()); })()), "html", null, true);
        echo "\" class=\"form-username form-input\"/>
            </div>

            <div class=\"form-group\">
                <input placeholder=\"Mot de passe\" type=\"password\" id=\"password\" name=\"_password\" class=\"form-mdp form-input\" />
            </div>

            <div class=\"form-rememberme-container\">
                <input type=\"checkbox\" class=\"form-rememberme\" id=\"remember_me\" name=\"_remember_me\" checked />
                <label for=\"remember_me\"><span></span>Se souvenir de moi</label>
            </div>

            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"/>

            <button type=\"submit\" class=\"form-submit\">Connexion</button>
        </form>
    </div>
";
        
        $__internal_eebc710c7814826339226b9c42367f40943774103e26066d768e4bc20072c567->leave($__internal_eebc710c7814826339226b9c42367f40943774103e26066d768e4bc20072c567_prof);

        
        $__internal_bddc5f999a4174328a8a993c12bb52b6d5f47bcce12715a58041637c146b5772->leave($__internal_bddc5f999a4174328a8a993c12bb52b6d5f47bcce12715a58041637c146b5772_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 37,  124 => 25,  118 => 22,  113 => 20,  109 => 19,  105 => 17,  99 => 14,  96 => 13,  94 => 12,  88 => 8,  79 => 7,  61 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Connexion{{ parent() }}{% endblock %}

{% block stylesheets %}{{ asset('build/connexion.css') }}{% endblock %}

{% block body %}

    <h1 class=\"titre margin-left\">Connexion</h1>
    <div class=\"titre-separation margin-left\"></div>

    {% if error %}
        <div class=\"form-error\">
            {{ error.messageKey }}
        </div>
    {% endif %}

    <div class=\"form-container\">
        <form action=\"{{ path('security_login') }}\" method=\"post\">
            <div class=\"OAuth-connect facebook-connect\"><img src=\"{{ asset('images/facebook_login.png') }}\" alt=\"Icône Google\" class=\"OAuth-connect-img\"/>Se connecter avec Facebook</div>

            <div class=\"OAuth-connect google-connect\"><img src=\"{{ asset('images/google_login.png') }}\" alt=\"Icône Google\" class=\"OAuth-connect-img\"/>Se connecter avec Google</div>

            <div class=\"form-group\">
                <input placeholder=\"Nom d'utilisateur\" type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" class=\"form-username form-input\"/>
            </div>

            <div class=\"form-group\">
                <input placeholder=\"Mot de passe\" type=\"password\" id=\"password\" name=\"_password\" class=\"form-mdp form-input\" />
            </div>

            <div class=\"form-rememberme-container\">
                <input type=\"checkbox\" class=\"form-rememberme\" id=\"remember_me\" name=\"_remember_me\" checked />
                <label for=\"remember_me\"><span></span>Se souvenir de moi</label>
            </div>

            <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\"/>

            <button type=\"submit\" class=\"form-submit\">Connexion</button>
        </form>
    </div>
{% endblock %}", "security/login.html.twig", "C:\\wamp64\\www\\mapbox\\templates\\security\\login.html.twig");
    }
}
