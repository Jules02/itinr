<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_aa51162854aea0157d9154daa17624b1f8e492959880e0993ad7712f034b30ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_6a11a72835dceafdd40dbb374cb0e38e8d571ef79aa24225beacef5997d821bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a11a72835dceafdd40dbb374cb0e38e8d571ef79aa24225beacef5997d821bb->enter($__internal_6a11a72835dceafdd40dbb374cb0e38e8d571ef79aa24225beacef5997d821bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_009e2d7a3276f2bc77a96fd8df91bcad2de8a1fcb40c7dd44d8b88e619a1499e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_009e2d7a3276f2bc77a96fd8df91bcad2de8a1fcb40c7dd44d8b88e619a1499e->enter($__internal_009e2d7a3276f2bc77a96fd8df91bcad2de8a1fcb40c7dd44d8b88e619a1499e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a11a72835dceafdd40dbb374cb0e38e8d571ef79aa24225beacef5997d821bb->leave($__internal_6a11a72835dceafdd40dbb374cb0e38e8d571ef79aa24225beacef5997d821bb_prof);

        
        $__internal_009e2d7a3276f2bc77a96fd8df91bcad2de8a1fcb40c7dd44d8b88e619a1499e->leave($__internal_009e2d7a3276f2bc77a96fd8df91bcad2de8a1fcb40c7dd44d8b88e619a1499e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_aaa3c804c4afdaff37e2b63ecf71785f254c45a45b1bda1603150313c0d22ebd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aaa3c804c4afdaff37e2b63ecf71785f254c45a45b1bda1603150313c0d22ebd->enter($__internal_aaa3c804c4afdaff37e2b63ecf71785f254c45a45b1bda1603150313c0d22ebd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_947c71769cab50e0ce052302c33fba42ba87466867349df71e84f010a54ee562 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_947c71769cab50e0ce052302c33fba42ba87466867349df71e84f010a54ee562->enter($__internal_947c71769cab50e0ce052302c33fba42ba87466867349df71e84f010a54ee562_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_947c71769cab50e0ce052302c33fba42ba87466867349df71e84f010a54ee562->leave($__internal_947c71769cab50e0ce052302c33fba42ba87466867349df71e84f010a54ee562_prof);

        
        $__internal_aaa3c804c4afdaff37e2b63ecf71785f254c45a45b1bda1603150313c0d22ebd->leave($__internal_aaa3c804c4afdaff37e2b63ecf71785f254c45a45b1bda1603150313c0d22ebd_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2944370d7156d4424b9a4ae4f64df6b773c0a7213f4fc3adc76034e7497a7584 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2944370d7156d4424b9a4ae4f64df6b773c0a7213f4fc3adc76034e7497a7584->enter($__internal_2944370d7156d4424b9a4ae4f64df6b773c0a7213f4fc3adc76034e7497a7584_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_fb00a6b645cd03361b12d26c06c51006ce606333bdbcf6547ccfa99e3db43bc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb00a6b645cd03361b12d26c06c51006ce606333bdbcf6547ccfa99e3db43bc2->enter($__internal_fb00a6b645cd03361b12d26c06c51006ce606333bdbcf6547ccfa99e3db43bc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_fb00a6b645cd03361b12d26c06c51006ce606333bdbcf6547ccfa99e3db43bc2->leave($__internal_fb00a6b645cd03361b12d26c06c51006ce606333bdbcf6547ccfa99e3db43bc2_prof);

        
        $__internal_2944370d7156d4424b9a4ae4f64df6b773c0a7213f4fc3adc76034e7497a7584->leave($__internal_2944370d7156d4424b9a4ae4f64df6b773c0a7213f4fc3adc76034e7497a7584_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f98833139eeb8518863fc284812c88269893c8972e3fef63697dc430b94f3b3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f98833139eeb8518863fc284812c88269893c8972e3fef63697dc430b94f3b3b->enter($__internal_f98833139eeb8518863fc284812c88269893c8972e3fef63697dc430b94f3b3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5d51d805b82864582f050ded5af02f3f157132be29ee5fb2b76627caf441f42a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d51d805b82864582f050ded5af02f3f157132be29ee5fb2b76627caf441f42a->enter($__internal_5d51d805b82864582f050ded5af02f3f157132be29ee5fb2b76627caf441f42a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_5d51d805b82864582f050ded5af02f3f157132be29ee5fb2b76627caf441f42a->leave($__internal_5d51d805b82864582f050ded5af02f3f157132be29ee5fb2b76627caf441f42a_prof);

        
        $__internal_f98833139eeb8518863fc284812c88269893c8972e3fef63697dc430b94f3b3b->leave($__internal_f98833139eeb8518863fc284812c88269893c8972e3fef63697dc430b94f3b3b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp64\\www\\mapbox\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
