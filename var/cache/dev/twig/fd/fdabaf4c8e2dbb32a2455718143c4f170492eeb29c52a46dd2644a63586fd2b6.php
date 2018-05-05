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
        $__internal_e33b24a5a7b84e0e3cde77bcc7aa68dfa872c700e7fe40aef652a9cba88f8d8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e33b24a5a7b84e0e3cde77bcc7aa68dfa872c700e7fe40aef652a9cba88f8d8f->enter($__internal_e33b24a5a7b84e0e3cde77bcc7aa68dfa872c700e7fe40aef652a9cba88f8d8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/inscription.html.twig"));

        $__internal_d46d7383575c6704235a9c84997d04ff1f914775d2a0374c1d4d6b9677033606 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d46d7383575c6704235a9c84997d04ff1f914775d2a0374c1d4d6b9677033606->enter($__internal_d46d7383575c6704235a9c84997d04ff1f914775d2a0374c1d4d6b9677033606_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/inscription.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e33b24a5a7b84e0e3cde77bcc7aa68dfa872c700e7fe40aef652a9cba88f8d8f->leave($__internal_e33b24a5a7b84e0e3cde77bcc7aa68dfa872c700e7fe40aef652a9cba88f8d8f_prof);

        
        $__internal_d46d7383575c6704235a9c84997d04ff1f914775d2a0374c1d4d6b9677033606->leave($__internal_d46d7383575c6704235a9c84997d04ff1f914775d2a0374c1d4d6b9677033606_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_01de1a85bb3b25ada2b4cb8952af9420daca850a3cb0a3cb9a26b69dfb5024f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01de1a85bb3b25ada2b4cb8952af9420daca850a3cb0a3cb9a26b69dfb5024f7->enter($__internal_01de1a85bb3b25ada2b4cb8952af9420daca850a3cb0a3cb9a26b69dfb5024f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0aa91506e9dd8eaf3b1f9a72e5284c57ba713c459f5c971d379f8210fcdd0dab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0aa91506e9dd8eaf3b1f9a72e5284c57ba713c459f5c971d379f8210fcdd0dab->enter($__internal_0aa91506e9dd8eaf3b1f9a72e5284c57ba713c459f5c971d379f8210fcdd0dab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Inscription";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_0aa91506e9dd8eaf3b1f9a72e5284c57ba713c459f5c971d379f8210fcdd0dab->leave($__internal_0aa91506e9dd8eaf3b1f9a72e5284c57ba713c459f5c971d379f8210fcdd0dab_prof);

        
        $__internal_01de1a85bb3b25ada2b4cb8952af9420daca850a3cb0a3cb9a26b69dfb5024f7->leave($__internal_01de1a85bb3b25ada2b4cb8952af9420daca850a3cb0a3cb9a26b69dfb5024f7_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0486d4fa1191daadcdba1081fb3b8261c438b215373338d02ca15988e61b4b9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0486d4fa1191daadcdba1081fb3b8261c438b215373338d02ca15988e61b4b9f->enter($__internal_0486d4fa1191daadcdba1081fb3b8261c438b215373338d02ca15988e61b4b9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_72987688ea0cc2ea9ecf71bd35ed584e3df0367b26ffefed2a5b1b8ac875252f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72987688ea0cc2ea9ecf71bd35ed584e3df0367b26ffefed2a5b1b8ac875252f->enter($__internal_72987688ea0cc2ea9ecf71bd35ed584e3df0367b26ffefed2a5b1b8ac875252f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/inscription.css"), "html", null, true);
        
        $__internal_72987688ea0cc2ea9ecf71bd35ed584e3df0367b26ffefed2a5b1b8ac875252f->leave($__internal_72987688ea0cc2ea9ecf71bd35ed584e3df0367b26ffefed2a5b1b8ac875252f_prof);

        
        $__internal_0486d4fa1191daadcdba1081fb3b8261c438b215373338d02ca15988e61b4b9f->leave($__internal_0486d4fa1191daadcdba1081fb3b8261c438b215373338d02ca15988e61b4b9f_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_9797a81cb1955ca0f28cf84a807e1cd67ac8cccc088f7ef764f9ae1d08f23294 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9797a81cb1955ca0f28cf84a807e1cd67ac8cccc088f7ef764f9ae1d08f23294->enter($__internal_9797a81cb1955ca0f28cf84a807e1cd67ac8cccc088f7ef764f9ae1d08f23294_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_78df9092e8722e3cfc7533c6e3e2f50d0f27764b0cacc7a17165de1f5d8f37d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78df9092e8722e3cfc7533c6e3e2f50d0f27764b0cacc7a17165de1f5d8f37d3->enter($__internal_78df9092e8722e3cfc7533c6e3e2f50d0f27764b0cacc7a17165de1f5d8f37d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
    <h1 class=\"titre margin-left\">Rejoignez-nous</h1>
    <div class=\"titre-separation margin-left\"></div>

    <div class=\"form-container\">
        ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 13, $this->getSourceContext()); })()), 'form_start');
        echo "
        ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 14, $this->getSourceContext()); })()), "surname", array()), 'row');
        echo "
        ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 15, $this->getSourceContext()); })()), "username", array()), 'row');
        echo "
        ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 16, $this->getSourceContext()); })()), "email", array()), 'row');
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
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 33, $this->getSourceContext()); })()), "password", array()), "first", array()), 'row');
        echo "
        ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 34, $this->getSourceContext()); })()), "password", array()), "second", array()), 'row');
        echo "
        <p class=\"conditions\">En cliquant sur S’inscrire, vous acceptez nos <a href=\"";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("conditions");
        echo "\">Conditions générales</a></p>
        <button type=\"submit\" class=\"submit-input\">S'inscrire</button>
        ";
        // line 37
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 37, $this->getSourceContext()); })()), 'form_end');
        echo "
    </div>

";
        
        $__internal_78df9092e8722e3cfc7533c6e3e2f50d0f27764b0cacc7a17165de1f5d8f37d3->leave($__internal_78df9092e8722e3cfc7533c6e3e2f50d0f27764b0cacc7a17165de1f5d8f37d3_prof);

        
        $__internal_9797a81cb1955ca0f28cf84a807e1cd67ac8cccc088f7ef764f9ae1d08f23294->leave($__internal_9797a81cb1955ca0f28cf84a807e1cd67ac8cccc088f7ef764f9ae1d08f23294_prof);

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
        return array (  140 => 37,  135 => 35,  131 => 34,  127 => 33,  107 => 16,  103 => 15,  99 => 14,  95 => 13,  88 => 8,  79 => 7,  61 => 5,  42 => 3,  11 => 1,);
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
