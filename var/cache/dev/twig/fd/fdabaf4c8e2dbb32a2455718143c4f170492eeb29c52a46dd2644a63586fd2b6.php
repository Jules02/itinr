<?php

/* security/inscription.html.twig */
class __TwigTemplate_589c4069cae63efee0b2f777f755240f7263cc5c7fc00782985ad4360e674944 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "security/inscription.html.twig", 1);
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
        $__internal_99763ec10a3bb11d4c10e6e2896fe0d5d45a80e7b268069da3bc65a2bd5d9ac4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99763ec10a3bb11d4c10e6e2896fe0d5d45a80e7b268069da3bc65a2bd5d9ac4->enter($__internal_99763ec10a3bb11d4c10e6e2896fe0d5d45a80e7b268069da3bc65a2bd5d9ac4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/inscription.html.twig"));

        $__internal_6b1e4a76c293e5a3d1d589d8c1c6b75a1521618fecc6bdabaf3dea501bb2dff1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b1e4a76c293e5a3d1d589d8c1c6b75a1521618fecc6bdabaf3dea501bb2dff1->enter($__internal_6b1e4a76c293e5a3d1d589d8c1c6b75a1521618fecc6bdabaf3dea501bb2dff1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/inscription.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_99763ec10a3bb11d4c10e6e2896fe0d5d45a80e7b268069da3bc65a2bd5d9ac4->leave($__internal_99763ec10a3bb11d4c10e6e2896fe0d5d45a80e7b268069da3bc65a2bd5d9ac4_prof);

        
        $__internal_6b1e4a76c293e5a3d1d589d8c1c6b75a1521618fecc6bdabaf3dea501bb2dff1->leave($__internal_6b1e4a76c293e5a3d1d589d8c1c6b75a1521618fecc6bdabaf3dea501bb2dff1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c1bee2cc41aac5e0b77c0f35f6aabaaff3f71d999e4f9e9a8b10ab2658894d53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1bee2cc41aac5e0b77c0f35f6aabaaff3f71d999e4f9e9a8b10ab2658894d53->enter($__internal_c1bee2cc41aac5e0b77c0f35f6aabaaff3f71d999e4f9e9a8b10ab2658894d53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_66a5750b02b05c6056a738bcbe2bddf4f9e19f8225271b2c855909dbd985cb68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66a5750b02b05c6056a738bcbe2bddf4f9e19f8225271b2c855909dbd985cb68->enter($__internal_66a5750b02b05c6056a738bcbe2bddf4f9e19f8225271b2c855909dbd985cb68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Inscription";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_66a5750b02b05c6056a738bcbe2bddf4f9e19f8225271b2c855909dbd985cb68->leave($__internal_66a5750b02b05c6056a738bcbe2bddf4f9e19f8225271b2c855909dbd985cb68_prof);

        
        $__internal_c1bee2cc41aac5e0b77c0f35f6aabaaff3f71d999e4f9e9a8b10ab2658894d53->leave($__internal_c1bee2cc41aac5e0b77c0f35f6aabaaff3f71d999e4f9e9a8b10ab2658894d53_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f6d6a5d24543fece4724549ce7ac278f8192ba80a773dbad42d0acfb6db24d4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6d6a5d24543fece4724549ce7ac278f8192ba80a773dbad42d0acfb6db24d4d->enter($__internal_f6d6a5d24543fece4724549ce7ac278f8192ba80a773dbad42d0acfb6db24d4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6350a8c416ddaca1071ba5461387c5dc86a2ede7f4c57163f07eecf6973645b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6350a8c416ddaca1071ba5461387c5dc86a2ede7f4c57163f07eecf6973645b7->enter($__internal_6350a8c416ddaca1071ba5461387c5dc86a2ede7f4c57163f07eecf6973645b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/inscription.css"), "html", null, true);
        
        $__internal_6350a8c416ddaca1071ba5461387c5dc86a2ede7f4c57163f07eecf6973645b7->leave($__internal_6350a8c416ddaca1071ba5461387c5dc86a2ede7f4c57163f07eecf6973645b7_prof);

        
        $__internal_f6d6a5d24543fece4724549ce7ac278f8192ba80a773dbad42d0acfb6db24d4d->leave($__internal_f6d6a5d24543fece4724549ce7ac278f8192ba80a773dbad42d0acfb6db24d4d_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_b44c2c98b168db5cf4fa8c9fa0ebba541e1f819c504b85a4311cd97381eae803 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b44c2c98b168db5cf4fa8c9fa0ebba541e1f819c504b85a4311cd97381eae803->enter($__internal_b44c2c98b168db5cf4fa8c9fa0ebba541e1f819c504b85a4311cd97381eae803_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_067d962951a5eb9a5e1b6d9648d1a61f7883bfbd33a33306e3f8d17710b6b77e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_067d962951a5eb9a5e1b6d9648d1a61f7883bfbd33a33306e3f8d17710b6b77e->enter($__internal_067d962951a5eb9a5e1b6d9648d1a61f7883bfbd33a33306e3f8d17710b6b77e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
    <h1 class=\"titre margin-left\">Rejoignez-nous</h1>
    <div class=\"titre-separation margin-left\"></div>

    <div class=\"form-container\">
        <div class=\"OAuth-connect facebook-connect\"><img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/facebook_login.png"), "html", null, true);
        echo "\" alt=\"Icône Google\" class=\"OAuth-connect-img\"/>S'inscire avec Facebook</div>

        <div class=\"OAuth-connect google-connect\"><img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/google_login.png"), "html", null, true);
        echo "\" alt=\"Icône Google\" class=\"OAuth-connect-img\"/>S'inscire avec Google</div>


        ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 18, $this->getSourceContext()); })()), 'form_start');
        echo "
        ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->getSourceContext()); })()), "surname", array()), 'row');
        echo "
        ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 20, $this->getSourceContext()); })()), "username", array()), 'row');
        echo "
        ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 21, $this->getSourceContext()); })()), "email", array()), 'row');
        echo "
        <div title=\"Nous en avons besoin pour votre avatar\" class=\"genre-container\">
            <div class=\"genre-input-container\">
                <input id=\"user_genre_0\" name=\"user[genre]\" required=\"required\" value=\"homme\" type=\"radio\">
                <label for=\"user_genre_0\" class=\"required\"><span></span>Homme</label>
            </div>

            <div class=\"genre-input-container\">
                <input id=\"user_genre_1\" name=\"user[genre]\" required=\"required\" value=\"femme\" type=\"radio\">
                <label for=\"user_genre_1\" class=\"required\"><span></span>Femme</label>
            </div>

            <div class=\"genre-input-container\">
                <input id=\"user_genre_2\" name=\"user[genre]\" required=\"required\" value=\"autre\" type=\"radio\">
                <label for=\"user_genre_2\" class=\"required\"><span></span>Autre</label>
            </div>
        </div>
        ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 38, $this->getSourceContext()); })()), "password", array()), "first", array()), 'row');
        echo "
        ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 39, $this->getSourceContext()); })()), "password", array()), "second", array()), 'row');
        echo "
        <p class=\"conditions\">En cliquant sur S’inscrire, vous acceptez nos <a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("conditions");
        echo "\">Conditions générales</a></p>
        <button type=\"submit\" class=\"submit-input\">S'inscrire</button>
        ";
        // line 42
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 42, $this->getSourceContext()); })()), 'form_end');
        echo "
    </div>

";
        
        $__internal_067d962951a5eb9a5e1b6d9648d1a61f7883bfbd33a33306e3f8d17710b6b77e->leave($__internal_067d962951a5eb9a5e1b6d9648d1a61f7883bfbd33a33306e3f8d17710b6b77e_prof);

        
        $__internal_b44c2c98b168db5cf4fa8c9fa0ebba541e1f819c504b85a4311cd97381eae803->leave($__internal_b44c2c98b168db5cf4fa8c9fa0ebba541e1f819c504b85a4311cd97381eae803_prof);

    }

    public function getTemplateName()
    {
        return "security/inscription.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 42,  146 => 40,  142 => 39,  138 => 38,  118 => 21,  114 => 20,  110 => 19,  106 => 18,  100 => 15,  95 => 13,  88 => 8,  79 => 7,  61 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Inscription{{ parent() }}{% endblock %}

{% block stylesheets %}{{ asset('build/inscription.css') }}{% endblock %}

{% block body %}

    <h1 class=\"titre margin-left\">Rejoignez-nous</h1>
    <div class=\"titre-separation margin-left\"></div>

    <div class=\"form-container\">
        <div class=\"OAuth-connect facebook-connect\"><img src=\"{{ asset('images/facebook_login.png') }}\" alt=\"Icône Google\" class=\"OAuth-connect-img\"/>S'inscire avec Facebook</div>

        <div class=\"OAuth-connect google-connect\"><img src=\"{{ asset('images/google_login.png') }}\" alt=\"Icône Google\" class=\"OAuth-connect-img\"/>S'inscire avec Google</div>


        {{ form_start(form) }}
        {{ form_row(form.surname) }}
        {{ form_row(form.username) }}
        {{ form_row(form.email) }}
        <div title=\"Nous en avons besoin pour votre avatar\" class=\"genre-container\">
            <div class=\"genre-input-container\">
                <input id=\"user_genre_0\" name=\"user[genre]\" required=\"required\" value=\"homme\" type=\"radio\">
                <label for=\"user_genre_0\" class=\"required\"><span></span>Homme</label>
            </div>

            <div class=\"genre-input-container\">
                <input id=\"user_genre_1\" name=\"user[genre]\" required=\"required\" value=\"femme\" type=\"radio\">
                <label for=\"user_genre_1\" class=\"required\"><span></span>Femme</label>
            </div>

            <div class=\"genre-input-container\">
                <input id=\"user_genre_2\" name=\"user[genre]\" required=\"required\" value=\"autre\" type=\"radio\">
                <label for=\"user_genre_2\" class=\"required\"><span></span>Autre</label>
            </div>
        </div>
        {{ form_row(form.password.first) }}
        {{ form_row(form.password.second) }}
        <p class=\"conditions\">En cliquant sur S’inscrire, vous acceptez nos <a href=\"{{ path('conditions') }}\">Conditions générales</a></p>
        <button type=\"submit\" class=\"submit-input\">S'inscrire</button>
        {{ form_end(form) }}
    </div>

{% endblock %}", "security/inscription.html.twig", "C:\\wamp64\\www\\mapbox\\templates\\security\\inscription.html.twig");
    }
}
