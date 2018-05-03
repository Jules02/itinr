<?php

/* content/welcome.html.twig */
class __TwigTemplate_40afce11233e97f203dd43aa99e2eee97d1b1bdc5b28f50a7e76f05ad6ffbde3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "content/welcome.html.twig", 1);
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
        $__internal_b9a5f6818cdf8a26858c47650f4346890d5af798f77c8c4aa73fffe2c19e23da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9a5f6818cdf8a26858c47650f4346890d5af798f77c8c4aa73fffe2c19e23da->enter($__internal_b9a5f6818cdf8a26858c47650f4346890d5af798f77c8c4aa73fffe2c19e23da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "content/welcome.html.twig"));

        $__internal_ef95990ae17958fd2f6810a38b16fda2bbef461e6f41bc24120f750f6bfe91db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef95990ae17958fd2f6810a38b16fda2bbef461e6f41bc24120f750f6bfe91db->enter($__internal_ef95990ae17958fd2f6810a38b16fda2bbef461e6f41bc24120f750f6bfe91db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "content/welcome.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b9a5f6818cdf8a26858c47650f4346890d5af798f77c8c4aa73fffe2c19e23da->leave($__internal_b9a5f6818cdf8a26858c47650f4346890d5af798f77c8c4aa73fffe2c19e23da_prof);

        
        $__internal_ef95990ae17958fd2f6810a38b16fda2bbef461e6f41bc24120f750f6bfe91db->leave($__internal_ef95990ae17958fd2f6810a38b16fda2bbef461e6f41bc24120f750f6bfe91db_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a5e2f61a93239ce521c0248e2961c29e1cfdce626ce67cdb3f2118641b360999 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5e2f61a93239ce521c0248e2961c29e1cfdce626ce67cdb3f2118641b360999->enter($__internal_a5e2f61a93239ce521c0248e2961c29e1cfdce626ce67cdb3f2118641b360999_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1e1e99a0ea6e94f7fc49ebe239b85599c611388feb58c33a2570459646fe327a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e1e99a0ea6e94f7fc49ebe239b85599c611388feb58c33a2570459646fe327a->enter($__internal_1e1e99a0ea6e94f7fc49ebe239b85599c611388feb58c33a2570459646fe327a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<p>Hello world</p>
";
        
        $__internal_1e1e99a0ea6e94f7fc49ebe239b85599c611388feb58c33a2570459646fe327a->leave($__internal_1e1e99a0ea6e94f7fc49ebe239b85599c611388feb58c33a2570459646fe327a_prof);

        
        $__internal_a5e2f61a93239ce521c0248e2961c29e1cfdce626ce67cdb3f2118641b360999->leave($__internal_a5e2f61a93239ce521c0248e2961c29e1cfdce626ce67cdb3f2118641b360999_prof);

    }

    public function getTemplateName()
    {
        return "content/welcome.html.twig";
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
<p>Hello world</p>
{% endblock %}", "content/welcome.html.twig", "C:\\wamp64\\www\\mapbox\\templates\\content\\welcome.html.twig");
    }
}
