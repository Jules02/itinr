<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_9e1fccbcb4bbe07d3bd48672c6a3bb4f7d505eb2ba00db6bb6d9dc9622320f96 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_32828f6a1e65963b226bcdec1b03a94e414417ab9f54d0a97f57703b97778ac5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32828f6a1e65963b226bcdec1b03a94e414417ab9f54d0a97f57703b97778ac5->enter($__internal_32828f6a1e65963b226bcdec1b03a94e414417ab9f54d0a97f57703b97778ac5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_91cac5418f5b5ec28cfd1c54de1bef0e6344b94840df90b4c6e74a787bf58545 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91cac5418f5b5ec28cfd1c54de1bef0e6344b94840df90b4c6e74a787bf58545->enter($__internal_91cac5418f5b5ec28cfd1c54de1bef0e6344b94840df90b4c6e74a787bf58545_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_32828f6a1e65963b226bcdec1b03a94e414417ab9f54d0a97f57703b97778ac5->leave($__internal_32828f6a1e65963b226bcdec1b03a94e414417ab9f54d0a97f57703b97778ac5_prof);

        
        $__internal_91cac5418f5b5ec28cfd1c54de1bef0e6344b94840df90b4c6e74a787bf58545->leave($__internal_91cac5418f5b5ec28cfd1c54de1bef0e6344b94840df90b4c6e74a787bf58545_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_50efce291a3632cd027e98d5b9ce13267454239202fa287dd3e7a6edfb0e0e64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50efce291a3632cd027e98d5b9ce13267454239202fa287dd3e7a6edfb0e0e64->enter($__internal_50efce291a3632cd027e98d5b9ce13267454239202fa287dd3e7a6edfb0e0e64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_af0fe6f81b3b2e6613f098009bda05326892d70198e6aa7742a0e26f4be800fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af0fe6f81b3b2e6613f098009bda05326892d70198e6aa7742a0e26f4be800fe->enter($__internal_af0fe6f81b3b2e6613f098009bda05326892d70198e6aa7742a0e26f4be800fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_af0fe6f81b3b2e6613f098009bda05326892d70198e6aa7742a0e26f4be800fe->leave($__internal_af0fe6f81b3b2e6613f098009bda05326892d70198e6aa7742a0e26f4be800fe_prof);

        
        $__internal_50efce291a3632cd027e98d5b9ce13267454239202fa287dd3e7a6edfb0e0e64->leave($__internal_50efce291a3632cd027e98d5b9ce13267454239202fa287dd3e7a6edfb0e0e64_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_d4af4c5bc978fd50c68ecf2bc0167d36cfae751f86ac48fad817167f1da80dd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4af4c5bc978fd50c68ecf2bc0167d36cfae751f86ac48fad817167f1da80dd8->enter($__internal_d4af4c5bc978fd50c68ecf2bc0167d36cfae751f86ac48fad817167f1da80dd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_85494c19df973665a6edfc936dd7eb1e2acece9fbbadea4e89976476d43c2ce0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85494c19df973665a6edfc936dd7eb1e2acece9fbbadea4e89976476d43c2ce0->enter($__internal_85494c19df973665a6edfc936dd7eb1e2acece9fbbadea4e89976476d43c2ce0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_85494c19df973665a6edfc936dd7eb1e2acece9fbbadea4e89976476d43c2ce0->leave($__internal_85494c19df973665a6edfc936dd7eb1e2acece9fbbadea4e89976476d43c2ce0_prof);

        
        $__internal_d4af4c5bc978fd50c68ecf2bc0167d36cfae751f86ac48fad817167f1da80dd8->leave($__internal_d4af4c5bc978fd50c68ecf2bc0167d36cfae751f86ac48fad817167f1da80dd8_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_a110833cf4c4a56b99aac158b6cb87183fc6befce58d25e288568b87a93f5e7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a110833cf4c4a56b99aac158b6cb87183fc6befce58d25e288568b87a93f5e7b->enter($__internal_a110833cf4c4a56b99aac158b6cb87183fc6befce58d25e288568b87a93f5e7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_46085ebfeb38d3d49c18fc207945c955cf25374e2ce855c10ba792b2f0616d17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46085ebfeb38d3d49c18fc207945c955cf25374e2ce855c10ba792b2f0616d17->enter($__internal_46085ebfeb38d3d49c18fc207945c955cf25374e2ce855c10ba792b2f0616d17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_46085ebfeb38d3d49c18fc207945c955cf25374e2ce855c10ba792b2f0616d17->leave($__internal_46085ebfeb38d3d49c18fc207945c955cf25374e2ce855c10ba792b2f0616d17_prof);

        
        $__internal_a110833cf4c4a56b99aac158b6cb87183fc6befce58d25e288568b87a93f5e7b->leave($__internal_a110833cf4c4a56b99aac158b6cb87183fc6befce58d25e288568b87a93f5e7b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "C:\\wamp64\\www\\mapbox\\vendor\\symfony\\twig-bundle\\Resources\\views\\layout.html.twig");
    }
}
