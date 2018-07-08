<?php

/* content/modifier_profil.html.twig */
class __TwigTemplate_d226ca79fdf1d9530860d0bbd62d11617d0a2326b5da989e72b5ef7aaf5e1836 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "content/modifier_profil.html.twig", 1);
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
        $__internal_1bac6ea6167d1d91fb13f41fc98953d48db20cf00caeb282a935d3b1793fe73d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1bac6ea6167d1d91fb13f41fc98953d48db20cf00caeb282a935d3b1793fe73d->enter($__internal_1bac6ea6167d1d91fb13f41fc98953d48db20cf00caeb282a935d3b1793fe73d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "content/modifier_profil.html.twig"));

        $__internal_4de1942955ad543babf571207c5577bb027923929b83ecfeb2277dae74e48bb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4de1942955ad543babf571207c5577bb027923929b83ecfeb2277dae74e48bb7->enter($__internal_4de1942955ad543babf571207c5577bb027923929b83ecfeb2277dae74e48bb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "content/modifier_profil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1bac6ea6167d1d91fb13f41fc98953d48db20cf00caeb282a935d3b1793fe73d->leave($__internal_1bac6ea6167d1d91fb13f41fc98953d48db20cf00caeb282a935d3b1793fe73d_prof);

        
        $__internal_4de1942955ad543babf571207c5577bb027923929b83ecfeb2277dae74e48bb7->leave($__internal_4de1942955ad543babf571207c5577bb027923929b83ecfeb2277dae74e48bb7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_dbcb9e178ed6f61b92584d16a57885300c480b2199ea20ad66c1df2b94875fda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbcb9e178ed6f61b92584d16a57885300c480b2199ea20ad66c1df2b94875fda->enter($__internal_dbcb9e178ed6f61b92584d16a57885300c480b2199ea20ad66c1df2b94875fda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5ef915f08bdaf6b2041fbc98d2df35968082fa9f4bfb3ae7c627faa16e9331e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ef915f08bdaf6b2041fbc98d2df35968082fa9f4bfb3ae7c627faa16e9331e1->enter($__internal_5ef915f08bdaf6b2041fbc98d2df35968082fa9f4bfb3ae7c627faa16e9331e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Modifiez votre profil";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_5ef915f08bdaf6b2041fbc98d2df35968082fa9f4bfb3ae7c627faa16e9331e1->leave($__internal_5ef915f08bdaf6b2041fbc98d2df35968082fa9f4bfb3ae7c627faa16e9331e1_prof);

        
        $__internal_dbcb9e178ed6f61b92584d16a57885300c480b2199ea20ad66c1df2b94875fda->leave($__internal_dbcb9e178ed6f61b92584d16a57885300c480b2199ea20ad66c1df2b94875fda_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0f771fb3543135339488504821f3138f0e10bb597fdbda84d99d26220d7a115c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f771fb3543135339488504821f3138f0e10bb597fdbda84d99d26220d7a115c->enter($__internal_0f771fb3543135339488504821f3138f0e10bb597fdbda84d99d26220d7a115c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_8312065649a19606a5d0c048870a51244de56c64ddf20d1b8ab9a17d286a7f74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8312065649a19606a5d0c048870a51244de56c64ddf20d1b8ab9a17d286a7f74->enter($__internal_8312065649a19606a5d0c048870a51244de56c64ddf20d1b8ab9a17d286a7f74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/modifier_profil.css"), "html", null, true);
        
        $__internal_8312065649a19606a5d0c048870a51244de56c64ddf20d1b8ab9a17d286a7f74->leave($__internal_8312065649a19606a5d0c048870a51244de56c64ddf20d1b8ab9a17d286a7f74_prof);

        
        $__internal_0f771fb3543135339488504821f3138f0e10bb597fdbda84d99d26220d7a115c->leave($__internal_0f771fb3543135339488504821f3138f0e10bb597fdbda84d99d26220d7a115c_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_8eda03d9620ae04907e8c8a818898128c1e7a404c49cddce31275d4d4425adbf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8eda03d9620ae04907e8c8a818898128c1e7a404c49cddce31275d4d4425adbf->enter($__internal_8eda03d9620ae04907e8c8a818898128c1e7a404c49cddce31275d4d4425adbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_31f5083e920a896f08999b5075dd4dfd8fb339942a52d1653ea7003b0f275c7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31f5083e920a896f08999b5075dd4dfd8fb339942a52d1653ea7003b0f275c7d->enter($__internal_31f5083e920a896f08999b5075dd4dfd8fb339942a52d1653ea7003b0f275c7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
    <h1 class=\"titre margin-left\">Modifiez votre profil</h1>
    <div class=\"titre-separation margin-left\"></div>

    <div class=\"form-container\">
        <a class=\"newAvatar-container\" href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("newAvatar");
        echo "\"><div class=\"newAvatar-avatar-container\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 13, $this->getSourceContext()); })()), "user", array()), "image", array())), "html", null, true);
        echo "\" class=\"newAvatar-avatar\"/></div><p>Nouvel avatar<img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/newAvatar_edit.png"), "html", null, true);
        echo "\" alt=\"Nouvel avatar\"></p></a>

        ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 15, $this->getSourceContext()); })()), 'form_start');
        echo "
        ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 16, $this->getSourceContext()); })()), "surname", array()), 'row');
        echo "
        ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 17, $this->getSourceContext()); })()), "username", array()), 'row');
        echo "
        ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 18, $this->getSourceContext()); })()), "email", array()), 'row');
        echo "
        <div title=\"Nous en avons besoin pour votre avatar\" class=\"genre-container\">
            <div class=\"genre-input-container\">
                <input id=\"user_genre_0\" name=\"user[genre]\" required=\"required\" value=\"homme\" type=\"radio\" ";
        // line 21
        if (((isset($context["genre"]) || array_key_exists("genre", $context) ? $context["genre"] : (function () { throw new Twig_Error_Runtime('Variable "genre" does not exist.', 21, $this->getSourceContext()); })()) == "homme")) {
            echo "checked";
        }
        echo ">
                <label for=\"user_genre_0\" class=\"required\"><span></span>Homme</label>
            </div>

            <div class=\"genre-input-container\">
                <input id=\"user_genre_1\" name=\"user[genre]\" required=\"required\" value=\"femme\" type=\"radio\" ";
        // line 26
        if (((isset($context["genre"]) || array_key_exists("genre", $context) ? $context["genre"] : (function () { throw new Twig_Error_Runtime('Variable "genre" does not exist.', 26, $this->getSourceContext()); })()) == "femme")) {
            echo "checked";
        }
        echo ">
                <label for=\"user_genre_1\" class=\"required\"><span></span>Femme</label>
            </div>

            <div class=\"genre-input-container\">
                <input id=\"user_genre_2\" name=\"user[genre]\" required=\"required\" value=\"autre\" type=\"radio\" ";
        // line 31
        if (((isset($context["genre"]) || array_key_exists("genre", $context) ? $context["genre"] : (function () { throw new Twig_Error_Runtime('Variable "genre" does not exist.', 31, $this->getSourceContext()); })()) == "autre")) {
            echo "checked";
        }
        echo ">
                <label for=\"user_genre_2\" class=\"required\"><span></span>Autre</label>
            </div>
        </div>
        ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 35, $this->getSourceContext()); })()), "password", array()), "first", array()), 'row');
        echo "
        ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 36, $this->getSourceContext()); })()), "password", array()), "second", array()), 'row');
        echo "
        <button type=\"submit\" class=\"submit-input\">Appliquer les modifications</button>
        ";
        // line 38
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 38, $this->getSourceContext()); })()), 'form_end');
        echo "
    </div>

";
        
        $__internal_31f5083e920a896f08999b5075dd4dfd8fb339942a52d1653ea7003b0f275c7d->leave($__internal_31f5083e920a896f08999b5075dd4dfd8fb339942a52d1653ea7003b0f275c7d_prof);

        
        $__internal_8eda03d9620ae04907e8c8a818898128c1e7a404c49cddce31275d4d4425adbf->leave($__internal_8eda03d9620ae04907e8c8a818898128c1e7a404c49cddce31275d4d4425adbf_prof);

    }

    public function getTemplateName()
    {
        return "content/modifier_profil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 38,  155 => 36,  151 => 35,  142 => 31,  132 => 26,  122 => 21,  116 => 18,  112 => 17,  108 => 16,  104 => 15,  95 => 13,  88 => 8,  79 => 7,  61 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Modifiez votre profil{{ parent() }}{% endblock %}

{% block stylesheets %}{{ asset('build/modifier_profil.css') }}{% endblock %}

{% block body %}

    <h1 class=\"titre margin-left\">Modifiez votre profil</h1>
    <div class=\"titre-separation margin-left\"></div>

    <div class=\"form-container\">
        <a class=\"newAvatar-container\" href=\"{{ path('newAvatar') }}\"><div class=\"newAvatar-avatar-container\"><img src=\"{{ asset(app.user.image) }}\" class=\"newAvatar-avatar\"/></div><p>Nouvel avatar<img src=\"{{ asset('images/newAvatar_edit.png') }}\" alt=\"Nouvel avatar\"></p></a>

        {{ form_start(form) }}
        {{ form_row(form.surname) }}
        {{ form_row(form.username) }}
        {{ form_row(form.email) }}
        <div title=\"Nous en avons besoin pour votre avatar\" class=\"genre-container\">
            <div class=\"genre-input-container\">
                <input id=\"user_genre_0\" name=\"user[genre]\" required=\"required\" value=\"homme\" type=\"radio\" {% if genre == \"homme\" %}checked{% endif %}>
                <label for=\"user_genre_0\" class=\"required\"><span></span>Homme</label>
            </div>

            <div class=\"genre-input-container\">
                <input id=\"user_genre_1\" name=\"user[genre]\" required=\"required\" value=\"femme\" type=\"radio\" {% if genre == \"femme\" %}checked{% endif %}>
                <label for=\"user_genre_1\" class=\"required\"><span></span>Femme</label>
            </div>

            <div class=\"genre-input-container\">
                <input id=\"user_genre_2\" name=\"user[genre]\" required=\"required\" value=\"autre\" type=\"radio\" {% if genre == \"autre\" %}checked{% endif %}>
                <label for=\"user_genre_2\" class=\"required\"><span></span>Autre</label>
            </div>
        </div>
        {{ form_row(form.password.first) }}
        {{ form_row(form.password.second) }}
        <button type=\"submit\" class=\"submit-input\">Appliquer les modifications</button>
        {{ form_end(form) }}
    </div>

{% endblock %}", "content/modifier_profil.html.twig", "C:\\wamp64\\www\\mapbox\\templates\\content\\modifier_profil.html.twig");
    }
}
