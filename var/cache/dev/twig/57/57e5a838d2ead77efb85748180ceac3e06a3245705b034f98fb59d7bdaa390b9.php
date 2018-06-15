<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_0e3fdccf4608efa4cdeca3f52980b5923f331fc7f11a6a184d87cb65f8b453ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fcf874d05f4ad77b16bd5c0f9587c5a89f7b5852b1d2339ef28b0c1875a131fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcf874d05f4ad77b16bd5c0f9587c5a89f7b5852b1d2339ef28b0c1875a131fe->enter($__internal_fcf874d05f4ad77b16bd5c0f9587c5a89f7b5852b1d2339ef28b0c1875a131fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_5086cd121ce9ae7e9b4e50b94d66d4579f0ad7a2f2f9dafdb92c748d2f2237a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5086cd121ce9ae7e9b4e50b94d66d4579f0ad7a2f2f9dafdb92c748d2f2237a5->enter($__internal_5086cd121ce9ae7e9b4e50b94d66d4579f0ad7a2f2f9dafdb92c748d2f2237a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_fcf874d05f4ad77b16bd5c0f9587c5a89f7b5852b1d2339ef28b0c1875a131fe->leave($__internal_fcf874d05f4ad77b16bd5c0f9587c5a89f7b5852b1d2339ef28b0c1875a131fe_prof);

        
        $__internal_5086cd121ce9ae7e9b4e50b94d66d4579f0ad7a2f2f9dafdb92c748d2f2237a5->leave($__internal_5086cd121ce9ae7e9b4e50b94d66d4579f0ad7a2f2f9dafdb92c748d2f2237a5_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "C:\\wamp64\\www\\mapbox\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Profiler\\header.html.twig");
    }
}
