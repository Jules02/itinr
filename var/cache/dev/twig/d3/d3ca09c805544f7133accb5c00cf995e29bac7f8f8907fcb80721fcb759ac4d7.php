<?php

/* content/profil.html.twig */
class __TwigTemplate_f40a599ad70a896c0a1cc9852f6a1dc171d183b0a39719062a55217512952e9b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "content/profil.html.twig", 1);
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
        $__internal_0361d0f473ee5a700596fd55b47e21b826dbe1a8e4f3cb62ef422b15d5b51524 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0361d0f473ee5a700596fd55b47e21b826dbe1a8e4f3cb62ef422b15d5b51524->enter($__internal_0361d0f473ee5a700596fd55b47e21b826dbe1a8e4f3cb62ef422b15d5b51524_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "content/profil.html.twig"));

        $__internal_d8e0c784c8ec05024d33e863916ef048559f499932f2d826bb09fb3ecea5c8e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8e0c784c8ec05024d33e863916ef048559f499932f2d826bb09fb3ecea5c8e1->enter($__internal_d8e0c784c8ec05024d33e863916ef048559f499932f2d826bb09fb3ecea5c8e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "content/profil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0361d0f473ee5a700596fd55b47e21b826dbe1a8e4f3cb62ef422b15d5b51524->leave($__internal_0361d0f473ee5a700596fd55b47e21b826dbe1a8e4f3cb62ef422b15d5b51524_prof);

        
        $__internal_d8e0c784c8ec05024d33e863916ef048559f499932f2d826bb09fb3ecea5c8e1->leave($__internal_d8e0c784c8ec05024d33e863916ef048559f499932f2d826bb09fb3ecea5c8e1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6a8ce443ab4f9aa4de82f794f94d90087300a311dec08ccb8a59cdaf0e18f3cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a8ce443ab4f9aa4de82f794f94d90087300a311dec08ccb8a59cdaf0e18f3cc->enter($__internal_6a8ce443ab4f9aa4de82f794f94d90087300a311dec08ccb8a59cdaf0e18f3cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b7744d8547bd771b851a2554414132fec9709370e430d9eb7603ab0abca35b08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7744d8547bd771b851a2554414132fec9709370e430d9eb7603ab0abca35b08->enter($__internal_b7744d8547bd771b851a2554414132fec9709370e430d9eb7603ab0abca35b08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <p>Bienvenue ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 4, $this->getSourceContext()); })()), "user", array()), "fullName", array()), "html", null, true);
        echo "</p>
    <a href=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modifier_profil");
        echo "\">Modifier mes informations</a>
";
        
        $__internal_b7744d8547bd771b851a2554414132fec9709370e430d9eb7603ab0abca35b08->leave($__internal_b7744d8547bd771b851a2554414132fec9709370e430d9eb7603ab0abca35b08_prof);

        
        $__internal_6a8ce443ab4f9aa4de82f794f94d90087300a311dec08ccb8a59cdaf0e18f3cc->leave($__internal_6a8ce443ab4f9aa4de82f794f94d90087300a311dec08ccb8a59cdaf0e18f3cc_prof);

    }

    public function getTemplateName()
    {
        return "content/profil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <p>Bienvenue {{ app.user.fullName }}</p>
    <a href=\"{{ path('modifier_profil') }}\">Modifier mes informations</a>
{% endblock %}", "content/profil.html.twig", "C:\\wamp64\\www\\mapbox\\templates\\content\\profil.html.twig");
    }
}
