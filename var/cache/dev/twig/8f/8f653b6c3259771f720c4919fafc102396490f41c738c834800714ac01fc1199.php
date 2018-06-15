<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_76a0247dec4b42e277b54b1e85c86f53751432c864d6926126790d4959c436f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_112d6db1429d42eeb7c70cd6fb3092bffe0e3b0257cfa546d51d257e51eeb000 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_112d6db1429d42eeb7c70cd6fb3092bffe0e3b0257cfa546d51d257e51eeb000->enter($__internal_112d6db1429d42eeb7c70cd6fb3092bffe0e3b0257cfa546d51d257e51eeb000_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_cb3d91f670c5cab1b118be6cfc5ae86b847016a97bc8feaa470b89279be7c26d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb3d91f670c5cab1b118be6cfc5ae86b847016a97bc8feaa470b89279be7c26d->enter($__internal_cb3d91f670c5cab1b118be6cfc5ae86b847016a97bc8feaa470b89279be7c26d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_112d6db1429d42eeb7c70cd6fb3092bffe0e3b0257cfa546d51d257e51eeb000->leave($__internal_112d6db1429d42eeb7c70cd6fb3092bffe0e3b0257cfa546d51d257e51eeb000_prof);

        
        $__internal_cb3d91f670c5cab1b118be6cfc5ae86b847016a97bc8feaa470b89279be7c26d->leave($__internal_cb3d91f670c5cab1b118be6cfc5ae86b847016a97bc8feaa470b89279be7c26d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_752e519b242c0d207bace8b67ebd5e718814dd2032c39f4815cae1f035df3afb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_752e519b242c0d207bace8b67ebd5e718814dd2032c39f4815cae1f035df3afb->enter($__internal_752e519b242c0d207bace8b67ebd5e718814dd2032c39f4815cae1f035df3afb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_7935dc2d13fcbc2f297214ace5fdb34863715dc7b58fa0ed3cdceacbf4aacb13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7935dc2d13fcbc2f297214ace5fdb34863715dc7b58fa0ed3cdceacbf4aacb13->enter($__internal_7935dc2d13fcbc2f297214ace5fdb34863715dc7b58fa0ed3cdceacbf4aacb13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7935dc2d13fcbc2f297214ace5fdb34863715dc7b58fa0ed3cdceacbf4aacb13->leave($__internal_7935dc2d13fcbc2f297214ace5fdb34863715dc7b58fa0ed3cdceacbf4aacb13_prof);

        
        $__internal_752e519b242c0d207bace8b67ebd5e718814dd2032c39f4815cae1f035df3afb->leave($__internal_752e519b242c0d207bace8b67ebd5e718814dd2032c39f4815cae1f035df3afb_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_18e97a9070a8c70e66659669544e0ee8a2289d125ffabe7ea6d1164c354849bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18e97a9070a8c70e66659669544e0ee8a2289d125ffabe7ea6d1164c354849bf->enter($__internal_18e97a9070a8c70e66659669544e0ee8a2289d125ffabe7ea6d1164c354849bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_212245f7397ae0ef8d9ab953914636636a639858f030909383768fce04a3585a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_212245f7397ae0ef8d9ab953914636636a639858f030909383768fce04a3585a->enter($__internal_212245f7397ae0ef8d9ab953914636636a639858f030909383768fce04a3585a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_212245f7397ae0ef8d9ab953914636636a639858f030909383768fce04a3585a->leave($__internal_212245f7397ae0ef8d9ab953914636636a639858f030909383768fce04a3585a_prof);

        
        $__internal_18e97a9070a8c70e66659669544e0ee8a2289d125ffabe7ea6d1164c354849bf->leave($__internal_18e97a9070a8c70e66659669544e0ee8a2289d125ffabe7ea6d1164c354849bf_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c816fb8a6928ee119c3b9d96bfa7ac76f576f42b8a4a3abf5a522b4c8f1ee343 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c816fb8a6928ee119c3b9d96bfa7ac76f576f42b8a4a3abf5a522b4c8f1ee343->enter($__internal_c816fb8a6928ee119c3b9d96bfa7ac76f576f42b8a4a3abf5a522b4c8f1ee343_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_dff281ae8b7b04bf840ae3863f60d8b9a14b19abe18df103a584b5be4ca97024 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dff281ae8b7b04bf840ae3863f60d8b9a14b19abe18df103a584b5be4ca97024->enter($__internal_dff281ae8b7b04bf840ae3863f60d8b9a14b19abe18df103a584b5be4ca97024_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_dff281ae8b7b04bf840ae3863f60d8b9a14b19abe18df103a584b5be4ca97024->leave($__internal_dff281ae8b7b04bf840ae3863f60d8b9a14b19abe18df103a584b5be4ca97024_prof);

        
        $__internal_c816fb8a6928ee119c3b9d96bfa7ac76f576f42b8a4a3abf5a522b4c8f1ee343->leave($__internal_c816fb8a6928ee119c3b9d96bfa7ac76f576f42b8a4a3abf5a522b4c8f1ee343_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\mapbox\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
