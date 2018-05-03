<?php

/* content/aide.html.twig */
class __TwigTemplate_96f978298e994167119c6faa8d58c58e14db47c80828ee0acead5b54f859411e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "content/aide.html.twig", 1);
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
        $__internal_c95917ee4ec82c5950d47763a80d0320edf197cb8885d0f5eea5bdd2d1ce2d0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c95917ee4ec82c5950d47763a80d0320edf197cb8885d0f5eea5bdd2d1ce2d0d->enter($__internal_c95917ee4ec82c5950d47763a80d0320edf197cb8885d0f5eea5bdd2d1ce2d0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "content/aide.html.twig"));

        $__internal_1ac5a8c5200eb458b0e47bf2da588e827b9f34a6ea7290b554a9bb6102b65930 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ac5a8c5200eb458b0e47bf2da588e827b9f34a6ea7290b554a9bb6102b65930->enter($__internal_1ac5a8c5200eb458b0e47bf2da588e827b9f34a6ea7290b554a9bb6102b65930_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "content/aide.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c95917ee4ec82c5950d47763a80d0320edf197cb8885d0f5eea5bdd2d1ce2d0d->leave($__internal_c95917ee4ec82c5950d47763a80d0320edf197cb8885d0f5eea5bdd2d1ce2d0d_prof);

        
        $__internal_1ac5a8c5200eb458b0e47bf2da588e827b9f34a6ea7290b554a9bb6102b65930->leave($__internal_1ac5a8c5200eb458b0e47bf2da588e827b9f34a6ea7290b554a9bb6102b65930_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_adfe805e0c0e486e7482d528ed81a49ae914808fd5c60e726a352c4026ba7411 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_adfe805e0c0e486e7482d528ed81a49ae914808fd5c60e726a352c4026ba7411->enter($__internal_adfe805e0c0e486e7482d528ed81a49ae914808fd5c60e726a352c4026ba7411_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fdeecdd8cc3580dec2a5919156c132000e0ac996857cdb0212f0dbf45b2a51b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdeecdd8cc3580dec2a5919156c132000e0ac996857cdb0212f0dbf45b2a51b4->enter($__internal_fdeecdd8cc3580dec2a5919156c132000e0ac996857cdb0212f0dbf45b2a51b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <p>Message</p>
";
        
        $__internal_fdeecdd8cc3580dec2a5919156c132000e0ac996857cdb0212f0dbf45b2a51b4->leave($__internal_fdeecdd8cc3580dec2a5919156c132000e0ac996857cdb0212f0dbf45b2a51b4_prof);

        
        $__internal_adfe805e0c0e486e7482d528ed81a49ae914808fd5c60e726a352c4026ba7411->leave($__internal_adfe805e0c0e486e7482d528ed81a49ae914808fd5c60e726a352c4026ba7411_prof);

    }

    public function getTemplateName()
    {
        return "content/aide.html.twig";
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
    <p>Message</p>
{% endblock %}", "content/aide.html.twig", "C:\\wamp64\\www\\mapbox\\templates\\content\\aide.html.twig");
    }
}
