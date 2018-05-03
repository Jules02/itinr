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
        $__internal_15b0bce941edf52fd7ab053a963676a19ed14613757580b9ca88ef123b006e78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15b0bce941edf52fd7ab053a963676a19ed14613757580b9ca88ef123b006e78->enter($__internal_15b0bce941edf52fd7ab053a963676a19ed14613757580b9ca88ef123b006e78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_2b9789fe4828720f21aa5adc7db7fa9ecf122e185947f3074d2ea3107eb10c16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b9789fe4828720f21aa5adc7db7fa9ecf122e185947f3074d2ea3107eb10c16->enter($__internal_2b9789fe4828720f21aa5adc7db7fa9ecf122e185947f3074d2ea3107eb10c16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_15b0bce941edf52fd7ab053a963676a19ed14613757580b9ca88ef123b006e78->leave($__internal_15b0bce941edf52fd7ab053a963676a19ed14613757580b9ca88ef123b006e78_prof);

        
        $__internal_2b9789fe4828720f21aa5adc7db7fa9ecf122e185947f3074d2ea3107eb10c16->leave($__internal_2b9789fe4828720f21aa5adc7db7fa9ecf122e185947f3074d2ea3107eb10c16_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3f36ade44b3209bba097d11736836078a10a8a36993465168412633ac5c22f6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f36ade44b3209bba097d11736836078a10a8a36993465168412633ac5c22f6f->enter($__internal_3f36ade44b3209bba097d11736836078a10a8a36993465168412633ac5c22f6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_b7189bb003bb46b48148c5c586daa4e85045bf18e9a25ce982874a4287ed16dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7189bb003bb46b48148c5c586daa4e85045bf18e9a25ce982874a4287ed16dd->enter($__internal_b7189bb003bb46b48148c5c586daa4e85045bf18e9a25ce982874a4287ed16dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b7189bb003bb46b48148c5c586daa4e85045bf18e9a25ce982874a4287ed16dd->leave($__internal_b7189bb003bb46b48148c5c586daa4e85045bf18e9a25ce982874a4287ed16dd_prof);

        
        $__internal_3f36ade44b3209bba097d11736836078a10a8a36993465168412633ac5c22f6f->leave($__internal_3f36ade44b3209bba097d11736836078a10a8a36993465168412633ac5c22f6f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6aeb4f0705e8600ccac52f3fdf92851f17ad6c34c6b7f39a2cbdaff579e1d9ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6aeb4f0705e8600ccac52f3fdf92851f17ad6c34c6b7f39a2cbdaff579e1d9ff->enter($__internal_6aeb4f0705e8600ccac52f3fdf92851f17ad6c34c6b7f39a2cbdaff579e1d9ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d4bb9ab5346fa3607f1de417fd46b30ec3fdeb21be6bf81c5f4d7c9804886dfe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4bb9ab5346fa3607f1de417fd46b30ec3fdeb21be6bf81c5f4d7c9804886dfe->enter($__internal_d4bb9ab5346fa3607f1de417fd46b30ec3fdeb21be6bf81c5f4d7c9804886dfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d4bb9ab5346fa3607f1de417fd46b30ec3fdeb21be6bf81c5f4d7c9804886dfe->leave($__internal_d4bb9ab5346fa3607f1de417fd46b30ec3fdeb21be6bf81c5f4d7c9804886dfe_prof);

        
        $__internal_6aeb4f0705e8600ccac52f3fdf92851f17ad6c34c6b7f39a2cbdaff579e1d9ff->leave($__internal_6aeb4f0705e8600ccac52f3fdf92851f17ad6c34c6b7f39a2cbdaff579e1d9ff_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3ca63bbe6cfd4f7846b012a01e0c2e806f54942b3c08189f2e5b7ff01c8f41ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ca63bbe6cfd4f7846b012a01e0c2e806f54942b3c08189f2e5b7ff01c8f41ea->enter($__internal_3ca63bbe6cfd4f7846b012a01e0c2e806f54942b3c08189f2e5b7ff01c8f41ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f841bb4df1b89096574e0b812bc1a3967af678b3a17f390a30deecea418e325e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f841bb4df1b89096574e0b812bc1a3967af678b3a17f390a30deecea418e325e->enter($__internal_f841bb4df1b89096574e0b812bc1a3967af678b3a17f390a30deecea418e325e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_f841bb4df1b89096574e0b812bc1a3967af678b3a17f390a30deecea418e325e->leave($__internal_f841bb4df1b89096574e0b812bc1a3967af678b3a17f390a30deecea418e325e_prof);

        
        $__internal_3ca63bbe6cfd4f7846b012a01e0c2e806f54942b3c08189f2e5b7ff01c8f41ea->leave($__internal_3ca63bbe6cfd4f7846b012a01e0c2e806f54942b3c08189f2e5b7ff01c8f41ea_prof);

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
