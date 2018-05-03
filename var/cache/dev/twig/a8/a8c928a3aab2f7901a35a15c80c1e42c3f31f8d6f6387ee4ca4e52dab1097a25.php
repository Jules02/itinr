<?php

/* content/profil.html.twig */
class __TwigTemplate_4bf8c41824c000e4510001bc0b60da0b5c4ddd202d8a40d37e0e63142e526740 extends Twig_Template
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
        $__internal_889b8d33c98bb24aacde33f16387c0882136d711a3eaea318acc885c9b0bdb8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_889b8d33c98bb24aacde33f16387c0882136d711a3eaea318acc885c9b0bdb8c->enter($__internal_889b8d33c98bb24aacde33f16387c0882136d711a3eaea318acc885c9b0bdb8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "content/profil.html.twig"));

        $__internal_64ad5bc86b25dca0c1192e66019afa445c3adbde6e945a75dffed86aeb4e3eed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64ad5bc86b25dca0c1192e66019afa445c3adbde6e945a75dffed86aeb4e3eed->enter($__internal_64ad5bc86b25dca0c1192e66019afa445c3adbde6e945a75dffed86aeb4e3eed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "content/profil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_889b8d33c98bb24aacde33f16387c0882136d711a3eaea318acc885c9b0bdb8c->leave($__internal_889b8d33c98bb24aacde33f16387c0882136d711a3eaea318acc885c9b0bdb8c_prof);

        
        $__internal_64ad5bc86b25dca0c1192e66019afa445c3adbde6e945a75dffed86aeb4e3eed->leave($__internal_64ad5bc86b25dca0c1192e66019afa445c3adbde6e945a75dffed86aeb4e3eed_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_63549537c017107298a1ca4b7b60917679fc8e945759a4b97fc62020a3a65bae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63549537c017107298a1ca4b7b60917679fc8e945759a4b97fc62020a3a65bae->enter($__internal_63549537c017107298a1ca4b7b60917679fc8e945759a4b97fc62020a3a65bae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_48a8d59f2a170ef2eb20d0f109bdb36d9d05d5eba6b5ec2c06cedc4534612f21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48a8d59f2a170ef2eb20d0f109bdb36d9d05d5eba6b5ec2c06cedc4534612f21->enter($__internal_48a8d59f2a170ef2eb20d0f109bdb36d9d05d5eba6b5ec2c06cedc4534612f21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <p>Bienvenue ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 4, $this->getSourceContext()); })()), "user", array()), "fullName", array()), "html", null, true);
        echo "</p>
    <a href=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modifier_profile");
        echo "\">Modifier mes informations</a>
";
        
        $__internal_48a8d59f2a170ef2eb20d0f109bdb36d9d05d5eba6b5ec2c06cedc4534612f21->leave($__internal_48a8d59f2a170ef2eb20d0f109bdb36d9d05d5eba6b5ec2c06cedc4534612f21_prof);

        
        $__internal_63549537c017107298a1ca4b7b60917679fc8e945759a4b97fc62020a3a65bae->leave($__internal_63549537c017107298a1ca4b7b60917679fc8e945759a4b97fc62020a3a65bae_prof);

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
    <a href=\"{{ path('modifier_profile') }}\">Modifier mes informations</a>
{% endblock %}", "content/profil.html.twig", "C:\\wamp64\\www\\mapbox\\templates\\content\\profil.html.twig");
    }
}
