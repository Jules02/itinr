<?php

/* content/modifier_profil.html.twig */
class __TwigTemplate_d226ca79fdf1d9530860d0bbd62d11617d0a2326b5da989e72b5ef7aaf5e1836 extends Twig_Template
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
        $__internal_ff3a67e94f7d6df7f54a00cd6cd6543ded3ffd897ed60682f9f77e309cd4f0ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff3a67e94f7d6df7f54a00cd6cd6543ded3ffd897ed60682f9f77e309cd4f0ee->enter($__internal_ff3a67e94f7d6df7f54a00cd6cd6543ded3ffd897ed60682f9f77e309cd4f0ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "content/modifier_profil.html.twig"));

        $__internal_4d9c2cdf0ecbb160c984ee3cd1f76bede7339902aefff0bc3654c03a918322e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d9c2cdf0ecbb160c984ee3cd1f76bede7339902aefff0bc3654c03a918322e6->enter($__internal_4d9c2cdf0ecbb160c984ee3cd1f76bede7339902aefff0bc3654c03a918322e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "content/modifier_profil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ff3a67e94f7d6df7f54a00cd6cd6543ded3ffd897ed60682f9f77e309cd4f0ee->leave($__internal_ff3a67e94f7d6df7f54a00cd6cd6543ded3ffd897ed60682f9f77e309cd4f0ee_prof);

        
        $__internal_4d9c2cdf0ecbb160c984ee3cd1f76bede7339902aefff0bc3654c03a918322e6->leave($__internal_4d9c2cdf0ecbb160c984ee3cd1f76bede7339902aefff0bc3654c03a918322e6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7fe3e57e80facaefae3141ed42ac0f3b68a3d2c4ea9d15e8c6424a5af0e351cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fe3e57e80facaefae3141ed42ac0f3b68a3d2c4ea9d15e8c6424a5af0e351cf->enter($__internal_7fe3e57e80facaefae3141ed42ac0f3b68a3d2c4ea9d15e8c6424a5af0e351cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e029fcd4716f10d21d96b20b5ad26fcb5fa72049fe226a587505fe5753742f3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e029fcd4716f10d21d96b20b5ad26fcb5fa72049fe226a587505fe5753742f3b->enter($__internal_e029fcd4716f10d21d96b20b5ad26fcb5fa72049fe226a587505fe5753742f3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <p>Modifier mes informations</p>
";
        
        $__internal_e029fcd4716f10d21d96b20b5ad26fcb5fa72049fe226a587505fe5753742f3b->leave($__internal_e029fcd4716f10d21d96b20b5ad26fcb5fa72049fe226a587505fe5753742f3b_prof);

        
        $__internal_7fe3e57e80facaefae3141ed42ac0f3b68a3d2c4ea9d15e8c6424a5af0e351cf->leave($__internal_7fe3e57e80facaefae3141ed42ac0f3b68a3d2c4ea9d15e8c6424a5af0e351cf_prof);

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
