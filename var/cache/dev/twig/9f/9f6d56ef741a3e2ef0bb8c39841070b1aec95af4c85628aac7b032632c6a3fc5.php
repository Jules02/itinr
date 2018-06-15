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
        $__internal_317bcbaca15dcb45c5cf670a4d8f9d75b8c95b153312dfc95061c6912fa95aae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_317bcbaca15dcb45c5cf670a4d8f9d75b8c95b153312dfc95061c6912fa95aae->enter($__internal_317bcbaca15dcb45c5cf670a4d8f9d75b8c95b153312dfc95061c6912fa95aae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_db301e04494c2dc0fb7f150aeb7abe6a9718a0c81ee00af59f505f74cc283df6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db301e04494c2dc0fb7f150aeb7abe6a9718a0c81ee00af59f505f74cc283df6->enter($__internal_db301e04494c2dc0fb7f150aeb7abe6a9718a0c81ee00af59f505f74cc283df6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_317bcbaca15dcb45c5cf670a4d8f9d75b8c95b153312dfc95061c6912fa95aae->leave($__internal_317bcbaca15dcb45c5cf670a4d8f9d75b8c95b153312dfc95061c6912fa95aae_prof);

        
        $__internal_db301e04494c2dc0fb7f150aeb7abe6a9718a0c81ee00af59f505f74cc283df6->leave($__internal_db301e04494c2dc0fb7f150aeb7abe6a9718a0c81ee00af59f505f74cc283df6_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f2b5665b142f0ef13967865d17d05af07c2c9886482f8ec912da70ef481158d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2b5665b142f0ef13967865d17d05af07c2c9886482f8ec912da70ef481158d4->enter($__internal_f2b5665b142f0ef13967865d17d05af07c2c9886482f8ec912da70ef481158d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5a0df9fe86e343ac1bd9525d4be1012e54888a6229b2891e5f55507339911efa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a0df9fe86e343ac1bd9525d4be1012e54888a6229b2891e5f55507339911efa->enter($__internal_5a0df9fe86e343ac1bd9525d4be1012e54888a6229b2891e5f55507339911efa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_5a0df9fe86e343ac1bd9525d4be1012e54888a6229b2891e5f55507339911efa->leave($__internal_5a0df9fe86e343ac1bd9525d4be1012e54888a6229b2891e5f55507339911efa_prof);

        
        $__internal_f2b5665b142f0ef13967865d17d05af07c2c9886482f8ec912da70ef481158d4->leave($__internal_f2b5665b142f0ef13967865d17d05af07c2c9886482f8ec912da70ef481158d4_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_97a41a35c45a4d6c1326af51879f30e4682a2bc25e7674fb16299f6e551a7cb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97a41a35c45a4d6c1326af51879f30e4682a2bc25e7674fb16299f6e551a7cb6->enter($__internal_97a41a35c45a4d6c1326af51879f30e4682a2bc25e7674fb16299f6e551a7cb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2c7613ded32eb649653e1705c892c8b9ed565901eefd30740ae6de651c89ad52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c7613ded32eb649653e1705c892c8b9ed565901eefd30740ae6de651c89ad52->enter($__internal_2c7613ded32eb649653e1705c892c8b9ed565901eefd30740ae6de651c89ad52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_2c7613ded32eb649653e1705c892c8b9ed565901eefd30740ae6de651c89ad52->leave($__internal_2c7613ded32eb649653e1705c892c8b9ed565901eefd30740ae6de651c89ad52_prof);

        
        $__internal_97a41a35c45a4d6c1326af51879f30e4682a2bc25e7674fb16299f6e551a7cb6->leave($__internal_97a41a35c45a4d6c1326af51879f30e4682a2bc25e7674fb16299f6e551a7cb6_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_7475f110a75ed6884aa5c4f1ecba278d6dfa9834dbe00252aafe540ee758bdd0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7475f110a75ed6884aa5c4f1ecba278d6dfa9834dbe00252aafe540ee758bdd0->enter($__internal_7475f110a75ed6884aa5c4f1ecba278d6dfa9834dbe00252aafe540ee758bdd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ad618a970f5b8724983a37ff3775dadb34703e1284797eac24703ee7e4b37ee5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad618a970f5b8724983a37ff3775dadb34703e1284797eac24703ee7e4b37ee5->enter($__internal_ad618a970f5b8724983a37ff3775dadb34703e1284797eac24703ee7e4b37ee5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ad618a970f5b8724983a37ff3775dadb34703e1284797eac24703ee7e4b37ee5->leave($__internal_ad618a970f5b8724983a37ff3775dadb34703e1284797eac24703ee7e4b37ee5_prof);

        
        $__internal_7475f110a75ed6884aa5c4f1ecba278d6dfa9834dbe00252aafe540ee758bdd0->leave($__internal_7475f110a75ed6884aa5c4f1ecba278d6dfa9834dbe00252aafe540ee758bdd0_prof);

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
