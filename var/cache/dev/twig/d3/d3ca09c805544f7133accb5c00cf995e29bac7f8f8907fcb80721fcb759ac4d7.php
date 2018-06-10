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
        $__internal_7bfa3c37b764f5afe765daef93ff0e4d63bffeb487df51c7208c85c40c48f660 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7bfa3c37b764f5afe765daef93ff0e4d63bffeb487df51c7208c85c40c48f660->enter($__internal_7bfa3c37b764f5afe765daef93ff0e4d63bffeb487df51c7208c85c40c48f660_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "content/profil.html.twig"));

        $__internal_80c417d498bee7f9ed7f0b35a4846ecf621850b036854ecdd7f8ad61f75fccea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80c417d498bee7f9ed7f0b35a4846ecf621850b036854ecdd7f8ad61f75fccea->enter($__internal_80c417d498bee7f9ed7f0b35a4846ecf621850b036854ecdd7f8ad61f75fccea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "content/profil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7bfa3c37b764f5afe765daef93ff0e4d63bffeb487df51c7208c85c40c48f660->leave($__internal_7bfa3c37b764f5afe765daef93ff0e4d63bffeb487df51c7208c85c40c48f660_prof);

        
        $__internal_80c417d498bee7f9ed7f0b35a4846ecf621850b036854ecdd7f8ad61f75fccea->leave($__internal_80c417d498bee7f9ed7f0b35a4846ecf621850b036854ecdd7f8ad61f75fccea_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_162306d752628ee5909b160d43020a61b4dd92cff282439aeccb489d501e9b59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_162306d752628ee5909b160d43020a61b4dd92cff282439aeccb489d501e9b59->enter($__internal_162306d752628ee5909b160d43020a61b4dd92cff282439aeccb489d501e9b59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d3c9c955e155f2b51fbc02f602615c90a52e757f00d9075e68e1f79ea3a633d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3c9c955e155f2b51fbc02f602615c90a52e757f00d9075e68e1f79ea3a633d7->enter($__internal_d3c9c955e155f2b51fbc02f602615c90a52e757f00d9075e68e1f79ea3a633d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <p>Bienvenue ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 4, $this->getSourceContext()); })()), "user", array()), "surname", array()), "html", null, true);
        echo "</p>
    <a href=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modifier_profil");
        echo "\">Modifier mes informations</a>
";
        
        $__internal_d3c9c955e155f2b51fbc02f602615c90a52e757f00d9075e68e1f79ea3a633d7->leave($__internal_d3c9c955e155f2b51fbc02f602615c90a52e757f00d9075e68e1f79ea3a633d7_prof);

        
        $__internal_162306d752628ee5909b160d43020a61b4dd92cff282439aeccb489d501e9b59->leave($__internal_162306d752628ee5909b160d43020a61b4dd92cff282439aeccb489d501e9b59_prof);

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
    <p>Bienvenue {{ app.user.surname }}</p>
    <a href=\"{{ path('modifier_profil') }}\">Modifier mes informations</a>
{% endblock %}", "content/profil.html.twig", "C:\\wamp64\\www\\mapbox\\templates\\content\\profil.html.twig");
    }
}
