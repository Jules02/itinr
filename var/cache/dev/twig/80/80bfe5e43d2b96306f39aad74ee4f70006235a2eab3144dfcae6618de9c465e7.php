<?php

/* content/modifier_profil.html.twig */
class __TwigTemplate_71203fedb0b26bb4e278cf881f6672c0edfce38a6ca494b8677753267bbba42b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "content/modifier_profil.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c47bde4194c8cbaa4eff36111ca79cc1ac70b017c5748176d0dafbc199826b94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c47bde4194c8cbaa4eff36111ca79cc1ac70b017c5748176d0dafbc199826b94->enter($__internal_c47bde4194c8cbaa4eff36111ca79cc1ac70b017c5748176d0dafbc199826b94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "content/modifier_profil.html.twig"));

        $__internal_15c39c26e09389becc5a1100dcca63572a98e5333a1bf4f215226a3907607b19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15c39c26e09389becc5a1100dcca63572a98e5333a1bf4f215226a3907607b19->enter($__internal_15c39c26e09389becc5a1100dcca63572a98e5333a1bf4f215226a3907607b19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "content/modifier_profil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c47bde4194c8cbaa4eff36111ca79cc1ac70b017c5748176d0dafbc199826b94->leave($__internal_c47bde4194c8cbaa4eff36111ca79cc1ac70b017c5748176d0dafbc199826b94_prof);

        
        $__internal_15c39c26e09389becc5a1100dcca63572a98e5333a1bf4f215226a3907607b19->leave($__internal_15c39c26e09389becc5a1100dcca63572a98e5333a1bf4f215226a3907607b19_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_25b93907a11e7b9e6049af78e7940fa554b1f63dd7d928f02216404bc54ba7a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25b93907a11e7b9e6049af78e7940fa554b1f63dd7d928f02216404bc54ba7a3->enter($__internal_25b93907a11e7b9e6049af78e7940fa554b1f63dd7d928f02216404bc54ba7a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c8306a7f21bc4a21c9c8508398dcd7c01e51e2949f5aac3143d484feba56e578 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8306a7f21bc4a21c9c8508398dcd7c01e51e2949f5aac3143d484feba56e578->enter($__internal_c8306a7f21bc4a21c9c8508398dcd7c01e51e2949f5aac3143d484feba56e578_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <p>Modifier mes informations</p>
";
        
        $__internal_c8306a7f21bc4a21c9c8508398dcd7c01e51e2949f5aac3143d484feba56e578->leave($__internal_c8306a7f21bc4a21c9c8508398dcd7c01e51e2949f5aac3143d484feba56e578_prof);

        
        $__internal_25b93907a11e7b9e6049af78e7940fa554b1f63dd7d928f02216404bc54ba7a3->leave($__internal_25b93907a11e7b9e6049af78e7940fa554b1f63dd7d928f02216404bc54ba7a3_prof);

    }

    public function getTemplateName()
    {
        return "content/modifier_profil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <p>Modifier mes informations</p>
{% endblock %}", "content/modifier_profil.html.twig", "C:\\wamp64\\www\\mapbox\\templates\\content\\modifier_profil.html.twig");
    }
}
