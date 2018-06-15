<?php

/* security/login.html.twig */
class __TwigTemplate_3381ac27e39b0d4545c00bb3d47651507a974b4c6783b5d0c3a42d76fa446b11 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_856b3e1bfd776ec6503dfdd44365f82b4db2bd4f2e4dc0927558bca5b87b8287 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_856b3e1bfd776ec6503dfdd44365f82b4db2bd4f2e4dc0927558bca5b87b8287->enter($__internal_856b3e1bfd776ec6503dfdd44365f82b4db2bd4f2e4dc0927558bca5b87b8287_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_1b261913b703d5681a8785218e85a5f3063a69dd0f4e0e64c0cc2e5f5050580e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b261913b703d5681a8785218e85a5f3063a69dd0f4e0e64c0cc2e5f5050580e->enter($__internal_1b261913b703d5681a8785218e85a5f3063a69dd0f4e0e64c0cc2e5f5050580e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_856b3e1bfd776ec6503dfdd44365f82b4db2bd4f2e4dc0927558bca5b87b8287->leave($__internal_856b3e1bfd776ec6503dfdd44365f82b4db2bd4f2e4dc0927558bca5b87b8287_prof);

        
        $__internal_1b261913b703d5681a8785218e85a5f3063a69dd0f4e0e64c0cc2e5f5050580e->leave($__internal_1b261913b703d5681a8785218e85a5f3063a69dd0f4e0e64c0cc2e5f5050580e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e1f19a4208c16788a7c911390520dc729e3cb38d7ece08f597f12587ba4af0fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1f19a4208c16788a7c911390520dc729e3cb38d7ece08f597f12587ba4af0fe->enter($__internal_e1f19a4208c16788a7c911390520dc729e3cb38d7ece08f597f12587ba4af0fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5b5d769f8d405643e5c64947074cb37009eb5df01593215cdb2379cbad0d16c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b5d769f8d405643e5c64947074cb37009eb5df01593215cdb2379cbad0d16c3->enter($__internal_5b5d769f8d405643e5c64947074cb37009eb5df01593215cdb2379cbad0d16c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Connexion";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_5b5d769f8d405643e5c64947074cb37009eb5df01593215cdb2379cbad0d16c3->leave($__internal_5b5d769f8d405643e5c64947074cb37009eb5df01593215cdb2379cbad0d16c3_prof);

        
        $__internal_e1f19a4208c16788a7c911390520dc729e3cb38d7ece08f597f12587ba4af0fe->leave($__internal_e1f19a4208c16788a7c911390520dc729e3cb38d7ece08f597f12587ba4af0fe_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_22fa54b0e1fa15dcbc43654e990667b7824194100272f5d777a584c8f00b7d54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22fa54b0e1fa15dcbc43654e990667b7824194100272f5d777a584c8f00b7d54->enter($__internal_22fa54b0e1fa15dcbc43654e990667b7824194100272f5d777a584c8f00b7d54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_4d5225065515f0d66734a2276a2a2bc7964be90bc3f62372b31dc0ce3aee1977 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d5225065515f0d66734a2276a2a2bc7964be90bc3f62372b31dc0ce3aee1977->enter($__internal_4d5225065515f0d66734a2276a2a2bc7964be90bc3f62372b31dc0ce3aee1977_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/connexion.css"), "html", null, true);
        
        $__internal_4d5225065515f0d66734a2276a2a2bc7964be90bc3f62372b31dc0ce3aee1977->leave($__internal_4d5225065515f0d66734a2276a2a2bc7964be90bc3f62372b31dc0ce3aee1977_prof);

        
        $__internal_22fa54b0e1fa15dcbc43654e990667b7824194100272f5d777a584c8f00b7d54->leave($__internal_22fa54b0e1fa15dcbc43654e990667b7824194100272f5d777a584c8f00b7d54_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_02453292e29f68110d83326189a5cfbd268540b62401aa7d31997f193659b9a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02453292e29f68110d83326189a5cfbd268540b62401aa7d31997f193659b9a8->enter($__internal_02453292e29f68110d83326189a5cfbd268540b62401aa7d31997f193659b9a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3605ae8d66547efce20f5185728d456db368e640da36ef14f227461165b2b092 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3605ae8d66547efce20f5185728d456db368e640da36ef14f227461165b2b092->enter($__internal_3605ae8d66547efce20f5185728d456db368e640da36ef14f227461165b2b092_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
    <h1 class=\"titre margin-left\">Connexion</h1>
    <div class=\"titre-separation margin-left\"></div>

    ";
        // line 12
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 12, $this->getSourceContext()); })())) {
            // line 13
            echo "        <div class=\"form-error\">
            ";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 14, $this->getSourceContext()); })()), "messageKey", array()), "html", null, true);
            echo "
        </div>
    ";
        }
        // line 17
        echo "
    <div class=\"form-container\">
        <form action=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("security_login");
        echo "\" method=\"post\">
            <div class=\"OAuth-connect facebook-connect\"><img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/facebook_login.png"), "html", null, true);
        echo "\" alt=\"Icône Google\" class=\"OAuth-connect-img\"/>Se connecter avec Facebook</div>

            <div class=\"OAuth-connect google-connect\"><img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/google_login.png"), "html", null, true);
        echo "\" alt=\"Icône Google\" class=\"OAuth-connect-img\"/>Se connecter avec Google</div>

            <div class=\"form-group\">
                <input placeholder=\"Nom d'utilisateur\" type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new Twig_Error_Runtime('Variable "last_username" does not exist.', 25, $this->getSourceContext()); })()), "html", null, true);
        echo "\" class=\"form-username form-input\"/>
            </div>

            <div class=\"form-group\">
                <input placeholder=\"Mot de passe\" type=\"password\" id=\"password\" name=\"_password\" class=\"form-mdp form-input\" />
            </div>

            <div class=\"form-rememberme-container\">
                <input type=\"checkbox\" class=\"form-rememberme\" id=\"remember_me\" name=\"_remember_me\" checked />
                <label for=\"remember_me\"><span></span>Se souvenir de moi</label>
            </div>

            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"/>

            <button type=\"submit\" class=\"form-submit\">Connexion</button>
        </form>
    </div>
";
        
        $__internal_3605ae8d66547efce20f5185728d456db368e640da36ef14f227461165b2b092->leave($__internal_3605ae8d66547efce20f5185728d456db368e640da36ef14f227461165b2b092_prof);

        
        $__internal_02453292e29f68110d83326189a5cfbd268540b62401aa7d31997f193659b9a8->leave($__internal_02453292e29f68110d83326189a5cfbd268540b62401aa7d31997f193659b9a8_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 37,  124 => 25,  118 => 22,  113 => 20,  109 => 19,  105 => 17,  99 => 14,  96 => 13,  94 => 12,  88 => 8,  79 => 7,  61 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Connexion{{ parent() }}{% endblock %}

{% block stylesheets %}{{ asset('build/connexion.css') }}{% endblock %}

{% block body %}

    <h1 class=\"titre margin-left\">Connexion</h1>
    <div class=\"titre-separation margin-left\"></div>

    {% if error %}
        <div class=\"form-error\">
            {{ error.messageKey }}
        </div>
    {% endif %}

    <div class=\"form-container\">
        <form action=\"{{ path('security_login') }}\" method=\"post\">
            <div class=\"OAuth-connect facebook-connect\"><img src=\"{{ asset('images/facebook_login.png') }}\" alt=\"Icône Google\" class=\"OAuth-connect-img\"/>Se connecter avec Facebook</div>

            <div class=\"OAuth-connect google-connect\"><img src=\"{{ asset('images/google_login.png') }}\" alt=\"Icône Google\" class=\"OAuth-connect-img\"/>Se connecter avec Google</div>

            <div class=\"form-group\">
                <input placeholder=\"Nom d'utilisateur\" type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" class=\"form-username form-input\"/>
            </div>

            <div class=\"form-group\">
                <input placeholder=\"Mot de passe\" type=\"password\" id=\"password\" name=\"_password\" class=\"form-mdp form-input\" />
            </div>

            <div class=\"form-rememberme-container\">
                <input type=\"checkbox\" class=\"form-rememberme\" id=\"remember_me\" name=\"_remember_me\" checked />
                <label for=\"remember_me\"><span></span>Se souvenir de moi</label>
            </div>

            <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\"/>

            <button type=\"submit\" class=\"form-submit\">Connexion</button>
        </form>
    </div>
{% endblock %}", "security/login.html.twig", "C:\\wamp64\\www\\mapbox\\templates\\security\\login.html.twig");
    }
}
