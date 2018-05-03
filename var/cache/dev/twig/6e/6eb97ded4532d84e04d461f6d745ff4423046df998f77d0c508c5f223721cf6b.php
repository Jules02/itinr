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
        $__internal_5b078c40d3193836974930deebcd564ae93aa1252596290462b13383e3d48dc2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b078c40d3193836974930deebcd564ae93aa1252596290462b13383e3d48dc2->enter($__internal_5b078c40d3193836974930deebcd564ae93aa1252596290462b13383e3d48dc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_a4b11b09ced424fa2054cd2a1f5699014bb6cfb07f44a6506165b566ea353c34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4b11b09ced424fa2054cd2a1f5699014bb6cfb07f44a6506165b566ea353c34->enter($__internal_a4b11b09ced424fa2054cd2a1f5699014bb6cfb07f44a6506165b566ea353c34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5b078c40d3193836974930deebcd564ae93aa1252596290462b13383e3d48dc2->leave($__internal_5b078c40d3193836974930deebcd564ae93aa1252596290462b13383e3d48dc2_prof);

        
        $__internal_a4b11b09ced424fa2054cd2a1f5699014bb6cfb07f44a6506165b566ea353c34->leave($__internal_a4b11b09ced424fa2054cd2a1f5699014bb6cfb07f44a6506165b566ea353c34_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8d376f74b3ec85aa3e3ca42166cebe6a65d6fa8e41f287e045e6e412b35c37f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d376f74b3ec85aa3e3ca42166cebe6a65d6fa8e41f287e045e6e412b35c37f6->enter($__internal_8d376f74b3ec85aa3e3ca42166cebe6a65d6fa8e41f287e045e6e412b35c37f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7b53137d2f4ea089f1bea0064b65802aa4494b77d2b77f016524be157d15cf2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b53137d2f4ea089f1bea0064b65802aa4494b77d2b77f016524be157d15cf2a->enter($__internal_7b53137d2f4ea089f1bea0064b65802aa4494b77d2b77f016524be157d15cf2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Connexion";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_7b53137d2f4ea089f1bea0064b65802aa4494b77d2b77f016524be157d15cf2a->leave($__internal_7b53137d2f4ea089f1bea0064b65802aa4494b77d2b77f016524be157d15cf2a_prof);

        
        $__internal_8d376f74b3ec85aa3e3ca42166cebe6a65d6fa8e41f287e045e6e412b35c37f6->leave($__internal_8d376f74b3ec85aa3e3ca42166cebe6a65d6fa8e41f287e045e6e412b35c37f6_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_150b4217fdb2b8eecb7dd5aabcb0c79d536d906ef343344bdf4e8fec94cc238a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_150b4217fdb2b8eecb7dd5aabcb0c79d536d906ef343344bdf4e8fec94cc238a->enter($__internal_150b4217fdb2b8eecb7dd5aabcb0c79d536d906ef343344bdf4e8fec94cc238a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_5bbdf627e5a01a0ec32b2fafe059755e65b173de80d5e03e1709f9f4ea2b33b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bbdf627e5a01a0ec32b2fafe059755e65b173de80d5e03e1709f9f4ea2b33b1->enter($__internal_5bbdf627e5a01a0ec32b2fafe059755e65b173de80d5e03e1709f9f4ea2b33b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/css/apropos.css"), "html", null, true);
        
        $__internal_5bbdf627e5a01a0ec32b2fafe059755e65b173de80d5e03e1709f9f4ea2b33b1->leave($__internal_5bbdf627e5a01a0ec32b2fafe059755e65b173de80d5e03e1709f9f4ea2b33b1_prof);

        
        $__internal_150b4217fdb2b8eecb7dd5aabcb0c79d536d906ef343344bdf4e8fec94cc238a->leave($__internal_150b4217fdb2b8eecb7dd5aabcb0c79d536d906ef343344bdf4e8fec94cc238a_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_8dc79424162a68235bfe76eea3cab46deacb659c8d1070aba4ace24833f01494 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8dc79424162a68235bfe76eea3cab46deacb659c8d1070aba4ace24833f01494->enter($__internal_8dc79424162a68235bfe76eea3cab46deacb659c8d1070aba4ace24833f01494_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f46622a42e016ebfac6349b283ba3e6d94c1c79e9720609df4c38ae76c98407c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f46622a42e016ebfac6349b283ba3e6d94c1c79e9720609df4c38ae76c98407c->enter($__internal_f46622a42e016ebfac6349b283ba3e6d94c1c79e9720609df4c38ae76c98407c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
    ";
        // line 9
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 9, $this->getSourceContext()); })())) {
            // line 10
            echo "        <div class=\"alert alert-danger\">
            ";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 11, $this->getSourceContext()); })()), "messageKey", array()), "html", null, true);
            echo "
        </div>
    ";
        }
        // line 14
        echo "
    <div class=\"row\">
    <div class=\"col-sm-5\">
        <div class=\"well\">
            <form action=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("security_login");
        echo "\" method=\"post\">
                <fieldset>
                    <legend><i class=\"fa fa-lock\" aria-hidden=\"true\"></i> Connexion</legend>
                    <div class=\"form-group\">
                        <label for=\"username\">Username</label>
                        <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new Twig_Error_Runtime('Variable "last_username" does not exist.', 23, $this->getSourceContext()); })()), "html", null, true);
        echo "\" class=\"form-control\"/>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"password\">Mot de passe</label>
                        <input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control\" />
                    </div>
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"/>
                    <button type=\"submit\" class=\"btn btn-primary\">
                        <i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i> Connexion
                    </button>
                </fieldset>
            </form>
        </div>
    </div>


";
        
        $__internal_f46622a42e016ebfac6349b283ba3e6d94c1c79e9720609df4c38ae76c98407c->leave($__internal_f46622a42e016ebfac6349b283ba3e6d94c1c79e9720609df4c38ae76c98407c_prof);

        
        $__internal_8dc79424162a68235bfe76eea3cab46deacb659c8d1070aba4ace24833f01494->leave($__internal_8dc79424162a68235bfe76eea3cab46deacb659c8d1070aba4ace24833f01494_prof);

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
        return array (  125 => 29,  116 => 23,  108 => 18,  102 => 14,  96 => 11,  93 => 10,  91 => 9,  88 => 8,  79 => 7,  61 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Connexion{{ parent() }}{% endblock %}

{% block stylesheets %}{{ asset('build/css/apropos.css') }}{% endblock %}

{% block body %}

    {% if error %}
        <div class=\"alert alert-danger\">
            {{ error.messageKey }}
        </div>
    {% endif %}

    <div class=\"row\">
    <div class=\"col-sm-5\">
        <div class=\"well\">
            <form action=\"{{ path('security_login') }}\" method=\"post\">
                <fieldset>
                    <legend><i class=\"fa fa-lock\" aria-hidden=\"true\"></i> Connexion</legend>
                    <div class=\"form-group\">
                        <label for=\"username\">Username</label>
                        <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" class=\"form-control\"/>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"password\">Mot de passe</label>
                        <input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control\" />
                    </div>
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\"/>
                    <button type=\"submit\" class=\"btn btn-primary\">
                        <i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i> Connexion
                    </button>
                </fieldset>
            </form>
        </div>
    </div>


{% endblock %}", "security/login.html.twig", "C:\\wamp64\\www\\mapbox\\templates\\security\\login.html.twig");
    }
}
