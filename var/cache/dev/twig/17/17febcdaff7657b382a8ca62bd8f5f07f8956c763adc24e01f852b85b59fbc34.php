<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_c7c5d7f4de059fb7823d4e1739d8e672d33df3617e8c3891e873173a9633452f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_387cf8764004ae23c35eb5348ddb61e6e7178102205e75b55bafb575bb23e31d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_387cf8764004ae23c35eb5348ddb61e6e7178102205e75b55bafb575bb23e31d->enter($__internal_387cf8764004ae23c35eb5348ddb61e6e7178102205e75b55bafb575bb23e31d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_ba26f5c4377a56f90ce94a510300c08f6bedb3680c08f0ac27323c3eacf3e352 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba26f5c4377a56f90ce94a510300c08f6bedb3680c08f0ac27323c3eacf3e352->enter($__internal_ba26f5c4377a56f90ce94a510300c08f6bedb3680c08f0ac27323c3eacf3e352_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_387cf8764004ae23c35eb5348ddb61e6e7178102205e75b55bafb575bb23e31d->leave($__internal_387cf8764004ae23c35eb5348ddb61e6e7178102205e75b55bafb575bb23e31d_prof);

        
        $__internal_ba26f5c4377a56f90ce94a510300c08f6bedb3680c08f0ac27323c3eacf3e352->leave($__internal_ba26f5c4377a56f90ce94a510300c08f6bedb3680c08f0ac27323c3eacf3e352_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ab6338a039f1f452dc9dff0ae2c5758795e9bba6fa1d2ab954c3ae205f0fae1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab6338a039f1f452dc9dff0ae2c5758795e9bba6fa1d2ab954c3ae205f0fae1f->enter($__internal_ab6338a039f1f452dc9dff0ae2c5758795e9bba6fa1d2ab954c3ae205f0fae1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f072fa78461cb5b92f2f197c7f913ec5ffd11c06393c4927f71ce33afa5a5ee4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f072fa78461cb5b92f2f197c7f913ec5ffd11c06393c4927f71ce33afa5a5ee4->enter($__internal_f072fa78461cb5b92f2f197c7f913ec5ffd11c06393c4927f71ce33afa5a5ee4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_f072fa78461cb5b92f2f197c7f913ec5ffd11c06393c4927f71ce33afa5a5ee4->leave($__internal_f072fa78461cb5b92f2f197c7f913ec5ffd11c06393c4927f71ce33afa5a5ee4_prof);

        
        $__internal_ab6338a039f1f452dc9dff0ae2c5758795e9bba6fa1d2ab954c3ae205f0fae1f->leave($__internal_ab6338a039f1f452dc9dff0ae2c5758795e9bba6fa1d2ab954c3ae205f0fae1f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f4251d971d8e3d785f0219f40eebeb1ca4c693c599f2674adf41e69ab805a55f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4251d971d8e3d785f0219f40eebeb1ca4c693c599f2674adf41e69ab805a55f->enter($__internal_f4251d971d8e3d785f0219f40eebeb1ca4c693c599f2674adf41e69ab805a55f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ec8114935e86d148cec558438406ab4860a59448747eb8466c498c50259274ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec8114935e86d148cec558438406ab4860a59448747eb8466c498c50259274ef->enter($__internal_ec8114935e86d148cec558438406ab4860a59448747eb8466c498c50259274ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_ec8114935e86d148cec558438406ab4860a59448747eb8466c498c50259274ef->leave($__internal_ec8114935e86d148cec558438406ab4860a59448747eb8466c498c50259274ef_prof);

        
        $__internal_f4251d971d8e3d785f0219f40eebeb1ca4c693c599f2674adf41e69ab805a55f->leave($__internal_f4251d971d8e3d785f0219f40eebeb1ca4c693c599f2674adf41e69ab805a55f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\wamp64\\www\\mapbox\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
