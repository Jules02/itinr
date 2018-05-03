<?php

/* security/register.html.twig */
class __TwigTemplate_2ea9cc49247b8c67c723ed8317f882eb44732ed97f3f207bfcaf9b3c9643e5bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "security/register.html.twig", 1);
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
        $__internal_81942df171a732bf58b50d67b227511fda23fe6324a1655c29b7f824a8c2f1c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81942df171a732bf58b50d67b227511fda23fe6324a1655c29b7f824a8c2f1c4->enter($__internal_81942df171a732bf58b50d67b227511fda23fe6324a1655c29b7f824a8c2f1c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/register.html.twig"));

        $__internal_6d2e2b4d897731b7aa04a4019df9e85140fb75c47f90d7035f829d961189913f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d2e2b4d897731b7aa04a4019df9e85140fb75c47f90d7035f829d961189913f->enter($__internal_6d2e2b4d897731b7aa04a4019df9e85140fb75c47f90d7035f829d961189913f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_81942df171a732bf58b50d67b227511fda23fe6324a1655c29b7f824a8c2f1c4->leave($__internal_81942df171a732bf58b50d67b227511fda23fe6324a1655c29b7f824a8c2f1c4_prof);

        
        $__internal_6d2e2b4d897731b7aa04a4019df9e85140fb75c47f90d7035f829d961189913f->leave($__internal_6d2e2b4d897731b7aa04a4019df9e85140fb75c47f90d7035f829d961189913f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_71febf6aa5bb706727db15e690a187cf2eeb087d8634f26bcd0947e255498c1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71febf6aa5bb706727db15e690a187cf2eeb087d8634f26bcd0947e255498c1b->enter($__internal_71febf6aa5bb706727db15e690a187cf2eeb087d8634f26bcd0947e255498c1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9aa58b2ec5e1b58c0e91ddcde1f0111ef0a4faf46e8075b751d1292c3e0b302f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9aa58b2ec5e1b58c0e91ddcde1f0111ef0a4faf46e8075b751d1292c3e0b302f->enter($__internal_9aa58b2ec5e1b58c0e91ddcde1f0111ef0a4faf46e8075b751d1292c3e0b302f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Inscription";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_9aa58b2ec5e1b58c0e91ddcde1f0111ef0a4faf46e8075b751d1292c3e0b302f->leave($__internal_9aa58b2ec5e1b58c0e91ddcde1f0111ef0a4faf46e8075b751d1292c3e0b302f_prof);

        
        $__internal_71febf6aa5bb706727db15e690a187cf2eeb087d8634f26bcd0947e255498c1b->leave($__internal_71febf6aa5bb706727db15e690a187cf2eeb087d8634f26bcd0947e255498c1b_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d01717dcb3d9e6c9a8674401fdbcc79ed0de2a2782b18d5ea22a8b08a4d14ff7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d01717dcb3d9e6c9a8674401fdbcc79ed0de2a2782b18d5ea22a8b08a4d14ff7->enter($__internal_d01717dcb3d9e6c9a8674401fdbcc79ed0de2a2782b18d5ea22a8b08a4d14ff7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_2230e6111d68f7b1725e5568bb383d006b7a591d021ab0c00e6d4de239fa68e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2230e6111d68f7b1725e5568bb383d006b7a591d021ab0c00e6d4de239fa68e0->enter($__internal_2230e6111d68f7b1725e5568bb383d006b7a591d021ab0c00e6d4de239fa68e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/inscription.css"), "html", null, true);
        
        $__internal_2230e6111d68f7b1725e5568bb383d006b7a591d021ab0c00e6d4de239fa68e0->leave($__internal_2230e6111d68f7b1725e5568bb383d006b7a591d021ab0c00e6d4de239fa68e0_prof);

        
        $__internal_d01717dcb3d9e6c9a8674401fdbcc79ed0de2a2782b18d5ea22a8b08a4d14ff7->leave($__internal_d01717dcb3d9e6c9a8674401fdbcc79ed0de2a2782b18d5ea22a8b08a4d14ff7_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_95e4b4b289b28b0ee460f970bb780342b3d5f2490933063f8ec5d68df4ea3a58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95e4b4b289b28b0ee460f970bb780342b3d5f2490933063f8ec5d68df4ea3a58->enter($__internal_95e4b4b289b28b0ee460f970bb780342b3d5f2490933063f8ec5d68df4ea3a58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_27bbe2077b0940722fbe4c9efc3aa158af308cbaea09137ed24963c3fe505f19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27bbe2077b0940722fbe4c9efc3aa158af308cbaea09137ed24963c3fe505f19->enter($__internal_27bbe2077b0940722fbe4c9efc3aa158af308cbaea09137ed24963c3fe505f19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_27bbe2077b0940722fbe4c9efc3aa158af308cbaea09137ed24963c3fe505f19->leave($__internal_27bbe2077b0940722fbe4c9efc3aa158af308cbaea09137ed24963c3fe505f19_prof);

        
        $__internal_95e4b4b289b28b0ee460f970bb780342b3d5f2490933063f8ec5d68df4ea3a58->leave($__internal_95e4b4b289b28b0ee460f970bb780342b3d5f2490933063f8ec5d68df4ea3a58_prof);

    }

    public function getTemplateName()
    {
        return "security/register.html.twig";
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

{% endblock %}", "security/register.html.twig", "C:\\wamp64\\www\\mapbox\\templates\\security\\register.html.twig");
    }
}
