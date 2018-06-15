<?php

/* security/inscription.html.twig */
class __TwigTemplate_589c4069cae63efee0b2f777f755240f7263cc5c7fc00782985ad4360e674944 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "security/inscription.html.twig", 1);
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
        $__internal_10e8e65d08abbb2933478b26a3573955d46801d8ed557e047180fe6e2ec5796e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10e8e65d08abbb2933478b26a3573955d46801d8ed557e047180fe6e2ec5796e->enter($__internal_10e8e65d08abbb2933478b26a3573955d46801d8ed557e047180fe6e2ec5796e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/inscription.html.twig"));

        $__internal_16bc4c0f70eba0e10ea6642e845961c2ce0b72722c30e965ba7eeda2a6616244 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16bc4c0f70eba0e10ea6642e845961c2ce0b72722c30e965ba7eeda2a6616244->enter($__internal_16bc4c0f70eba0e10ea6642e845961c2ce0b72722c30e965ba7eeda2a6616244_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/inscription.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_10e8e65d08abbb2933478b26a3573955d46801d8ed557e047180fe6e2ec5796e->leave($__internal_10e8e65d08abbb2933478b26a3573955d46801d8ed557e047180fe6e2ec5796e_prof);

        
        $__internal_16bc4c0f70eba0e10ea6642e845961c2ce0b72722c30e965ba7eeda2a6616244->leave($__internal_16bc4c0f70eba0e10ea6642e845961c2ce0b72722c30e965ba7eeda2a6616244_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_292a4a86e8940ca715aa17165e34bd6c8aa16739b32ff5edc93b22f6ddfb5cdf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_292a4a86e8940ca715aa17165e34bd6c8aa16739b32ff5edc93b22f6ddfb5cdf->enter($__internal_292a4a86e8940ca715aa17165e34bd6c8aa16739b32ff5edc93b22f6ddfb5cdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_79591a62406ee637291096e28cff12f30e9f3ecad024ad17252caa03efdd776d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79591a62406ee637291096e28cff12f30e9f3ecad024ad17252caa03efdd776d->enter($__internal_79591a62406ee637291096e28cff12f30e9f3ecad024ad17252caa03efdd776d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Inscription";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_79591a62406ee637291096e28cff12f30e9f3ecad024ad17252caa03efdd776d->leave($__internal_79591a62406ee637291096e28cff12f30e9f3ecad024ad17252caa03efdd776d_prof);

        
        $__internal_292a4a86e8940ca715aa17165e34bd6c8aa16739b32ff5edc93b22f6ddfb5cdf->leave($__internal_292a4a86e8940ca715aa17165e34bd6c8aa16739b32ff5edc93b22f6ddfb5cdf_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1ece85c45cfa6e0ae27259ad8145a9512ed7966cea94bc3388b5c252aee8dd0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ece85c45cfa6e0ae27259ad8145a9512ed7966cea94bc3388b5c252aee8dd0a->enter($__internal_1ece85c45cfa6e0ae27259ad8145a9512ed7966cea94bc3388b5c252aee8dd0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_1ea158d9708fbc282e7d1c3052bc9127ee3b013cd39741fbf6bad391bbd21a74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ea158d9708fbc282e7d1c3052bc9127ee3b013cd39741fbf6bad391bbd21a74->enter($__internal_1ea158d9708fbc282e7d1c3052bc9127ee3b013cd39741fbf6bad391bbd21a74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/inscription.css"), "html", null, true);
        
        $__internal_1ea158d9708fbc282e7d1c3052bc9127ee3b013cd39741fbf6bad391bbd21a74->leave($__internal_1ea158d9708fbc282e7d1c3052bc9127ee3b013cd39741fbf6bad391bbd21a74_prof);

        
        $__internal_1ece85c45cfa6e0ae27259ad8145a9512ed7966cea94bc3388b5c252aee8dd0a->leave($__internal_1ece85c45cfa6e0ae27259ad8145a9512ed7966cea94bc3388b5c252aee8dd0a_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_bbe00bafca584736a387dce84d40d4e3fdd6603f6587ea40a2e187c305f8bf91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbe00bafca584736a387dce84d40d4e3fdd6603f6587ea40a2e187c305f8bf91->enter($__internal_bbe00bafca584736a387dce84d40d4e3fdd6603f6587ea40a2e187c305f8bf91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5a7887d7700edca1f890ced438ed45f12c6c243d758a66d5b451befb3c8cc18b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a7887d7700edca1f890ced438ed45f12c6c243d758a66d5b451befb3c8cc18b->enter($__internal_5a7887d7700edca1f890ced438ed45f12c6c243d758a66d5b451befb3c8cc18b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
    <h1 class=\"titre margin-left\">Rejoignez-nous</h1>
    <div class=\"titre-separation margin-left\"></div>

    <div class=\"form-container\">
        <div class=\"OAuth-connect facebook-connect\"><img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/facebook_login.png"), "html", null, true);
        echo "\" alt=\"Icône Google\" class=\"OAuth-connect-img\"/>S'inscire avec Facebook</div>

        <div class=\"OAuth-connect google-connect\"><img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/google_login.png"), "html", null, true);
        echo "\" alt=\"Icône Google\" class=\"OAuth-connect-img\"/>S'inscire avec Google</div>


        ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 18, $this->getSourceContext()); })()), 'form_start');
        echo "
        ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->getSourceContext()); })()), "surname", array()), 'row');
        echo "
        ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 20, $this->getSourceContext()); })()), "username", array()), 'row');
        echo "
        ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 21, $this->getSourceContext()); })()), "email", array()), 'row');
        echo "
        <div title=\"Nous en avons besoin pour votre avatar\" class=\"genre-container\">
            <div class=\"genre-input-container\">
                <input id=\"user_genre_0\" name=\"user[genre]\" required=\"required\" value=\"homme\" type=\"radio\">
                <label for=\"user_genre_0\" class=\"required\"><span></span>Homme</label>
            </div>

            <div class=\"genre-input-container\">
                <input id=\"user_genre_1\" name=\"user[genre]\" required=\"required\" value=\"femme\" type=\"radio\">
                <label for=\"user_genre_1\" class=\"required\"><span></span>Femme</label>
            </div>

            <div class=\"genre-input-container\">
                <input id=\"user_genre_2\" name=\"user[genre]\" required=\"required\" value=\"autre\" type=\"radio\">
                <label for=\"user_genre_2\" class=\"required\"><span></span>Autre</label>
            </div>
        </div>
        ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 38, $this->getSourceContext()); })()), "password", array()), "first", array()), 'row');
        echo "
        ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 39, $this->getSourceContext()); })()), "password", array()), "second", array()), 'row');
        echo "
        <p class=\"conditions\">En cliquant sur S’inscrire, vous acceptez nos <a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("conditions");
        echo "\">Conditions générales</a></p>
        <button type=\"submit\" class=\"submit-input\">S'inscrire</button>
        ";
        // line 42
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 42, $this->getSourceContext()); })()), 'form_end');
        echo "
    </div>

";
        
        $__internal_5a7887d7700edca1f890ced438ed45f12c6c243d758a66d5b451befb3c8cc18b->leave($__internal_5a7887d7700edca1f890ced438ed45f12c6c243d758a66d5b451befb3c8cc18b_prof);

        
        $__internal_bbe00bafca584736a387dce84d40d4e3fdd6603f6587ea40a2e187c305f8bf91->leave($__internal_bbe00bafca584736a387dce84d40d4e3fdd6603f6587ea40a2e187c305f8bf91_prof);

    }

    public function getTemplateName()
    {
        return "security/inscription.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 42,  146 => 40,  142 => 39,  138 => 38,  118 => 21,  114 => 20,  110 => 19,  106 => 18,  100 => 15,  95 => 13,  88 => 8,  79 => 7,  61 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Inscription{{ parent() }}{% endblock %}

{% block stylesheets %}{{ asset('build/inscription.css') }}{% endblock %}

{% block body %}

    <h1 class=\"titre margin-left\">Rejoignez-nous</h1>
    <div class=\"titre-separation margin-left\"></div>

    <div class=\"form-container\">
        <div class=\"OAuth-connect facebook-connect\"><img src=\"{{ asset('images/facebook_login.png') }}\" alt=\"Icône Google\" class=\"OAuth-connect-img\"/>S'inscire avec Facebook</div>

        <div class=\"OAuth-connect google-connect\"><img src=\"{{ asset('images/google_login.png') }}\" alt=\"Icône Google\" class=\"OAuth-connect-img\"/>S'inscire avec Google</div>


        {{ form_start(form) }}
        {{ form_row(form.surname) }}
        {{ form_row(form.username) }}
        {{ form_row(form.email) }}
        <div title=\"Nous en avons besoin pour votre avatar\" class=\"genre-container\">
            <div class=\"genre-input-container\">
                <input id=\"user_genre_0\" name=\"user[genre]\" required=\"required\" value=\"homme\" type=\"radio\">
                <label for=\"user_genre_0\" class=\"required\"><span></span>Homme</label>
            </div>

            <div class=\"genre-input-container\">
                <input id=\"user_genre_1\" name=\"user[genre]\" required=\"required\" value=\"femme\" type=\"radio\">
                <label for=\"user_genre_1\" class=\"required\"><span></span>Femme</label>
            </div>

            <div class=\"genre-input-container\">
                <input id=\"user_genre_2\" name=\"user[genre]\" required=\"required\" value=\"autre\" type=\"radio\">
                <label for=\"user_genre_2\" class=\"required\"><span></span>Autre</label>
            </div>
        </div>
        {{ form_row(form.password.first) }}
        {{ form_row(form.password.second) }}
        <p class=\"conditions\">En cliquant sur S’inscrire, vous acceptez nos <a href=\"{{ path('conditions') }}\">Conditions générales</a></p>
        <button type=\"submit\" class=\"submit-input\">S'inscrire</button>
        {{ form_end(form) }}
    </div>

{% endblock %}", "security/inscription.html.twig", "C:\\wamp64\\www\\mapbox\\templates\\security\\inscription.html.twig");
    }
}
