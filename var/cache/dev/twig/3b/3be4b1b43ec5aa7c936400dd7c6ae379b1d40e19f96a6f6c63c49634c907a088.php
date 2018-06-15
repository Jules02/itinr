<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_4cece701e1522cfd32ecad7d0f59ff211ecedeae5e07c72dd84071bb318435c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_68066f70129e7ff0e9d541dcf0df998dc79c7106babb9bba032fff7c6d5d774c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68066f70129e7ff0e9d541dcf0df998dc79c7106babb9bba032fff7c6d5d774c->enter($__internal_68066f70129e7ff0e9d541dcf0df998dc79c7106babb9bba032fff7c6d5d774c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_e5db58b565bebd3bfdde40218d826d3d79034d1dffefb3a418d1712de30b1f59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5db58b565bebd3bfdde40218d826d3d79034d1dffefb3a418d1712de30b1f59->enter($__internal_e5db58b565bebd3bfdde40218d826d3d79034d1dffefb3a418d1712de30b1f59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_68066f70129e7ff0e9d541dcf0df998dc79c7106babb9bba032fff7c6d5d774c->leave($__internal_68066f70129e7ff0e9d541dcf0df998dc79c7106babb9bba032fff7c6d5d774c_prof);

        
        $__internal_e5db58b565bebd3bfdde40218d826d3d79034d1dffefb3a418d1712de30b1f59->leave($__internal_e5db58b565bebd3bfdde40218d826d3d79034d1dffefb3a418d1712de30b1f59_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ebbd6126f0f2a636ab2da82e178170cefcd32339d322873ac78ad2feebd00eed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebbd6126f0f2a636ab2da82e178170cefcd32339d322873ac78ad2feebd00eed->enter($__internal_ebbd6126f0f2a636ab2da82e178170cefcd32339d322873ac78ad2feebd00eed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_3dfd8b87e8f90513db6a618c8d6ef79ef7d88f8df6a0f9527d51725e836fa6fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3dfd8b87e8f90513db6a618c8d6ef79ef7d88f8df6a0f9527d51725e836fa6fe->enter($__internal_3dfd8b87e8f90513db6a618c8d6ef79ef7d88f8df6a0f9527d51725e836fa6fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_3dfd8b87e8f90513db6a618c8d6ef79ef7d88f8df6a0f9527d51725e836fa6fe->leave($__internal_3dfd8b87e8f90513db6a618c8d6ef79ef7d88f8df6a0f9527d51725e836fa6fe_prof);

        
        $__internal_ebbd6126f0f2a636ab2da82e178170cefcd32339d322873ac78ad2feebd00eed->leave($__internal_ebbd6126f0f2a636ab2da82e178170cefcd32339d322873ac78ad2feebd00eed_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "C:\\wamp64\\www\\mapbox\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
