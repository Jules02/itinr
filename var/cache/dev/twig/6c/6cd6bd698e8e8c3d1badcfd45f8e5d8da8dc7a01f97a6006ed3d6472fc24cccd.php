<?php

/* content/aide.html.twig */
class __TwigTemplate_96f978298e994167119c6faa8d58c58e14db47c80828ee0acead5b54f859411e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "content/aide.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bc10ee1a6184760d916a931d872a3ec043a84d5c17bba6e34c3ecc1a59232f92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc10ee1a6184760d916a931d872a3ec043a84d5c17bba6e34c3ecc1a59232f92->enter($__internal_bc10ee1a6184760d916a931d872a3ec043a84d5c17bba6e34c3ecc1a59232f92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "content/aide.html.twig"));

        $__internal_9a8ea8b25301904155c24c3d2faec8c416c7ce33e898aa3ea7eafa71f44b0a26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a8ea8b25301904155c24c3d2faec8c416c7ce33e898aa3ea7eafa71f44b0a26->enter($__internal_9a8ea8b25301904155c24c3d2faec8c416c7ce33e898aa3ea7eafa71f44b0a26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "content/aide.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc10ee1a6184760d916a931d872a3ec043a84d5c17bba6e34c3ecc1a59232f92->leave($__internal_bc10ee1a6184760d916a931d872a3ec043a84d5c17bba6e34c3ecc1a59232f92_prof);

        
        $__internal_9a8ea8b25301904155c24c3d2faec8c416c7ce33e898aa3ea7eafa71f44b0a26->leave($__internal_9a8ea8b25301904155c24c3d2faec8c416c7ce33e898aa3ea7eafa71f44b0a26_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8c13e33b345ff4d4545e14870c69b6afdf9c7edb4bcb31fdfdc6c55bd79e75ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c13e33b345ff4d4545e14870c69b6afdf9c7edb4bcb31fdfdc6c55bd79e75ac->enter($__internal_8c13e33b345ff4d4545e14870c69b6afdf9c7edb4bcb31fdfdc6c55bd79e75ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7db69634aeade34cd8ce6323df84d478864fb13ed87a3934dd166a98ab54c46a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7db69634aeade34cd8ce6323df84d478864fb13ed87a3934dd166a98ab54c46a->enter($__internal_7db69634aeade34cd8ce6323df84d478864fb13ed87a3934dd166a98ab54c46a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Aide";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_7db69634aeade34cd8ce6323df84d478864fb13ed87a3934dd166a98ab54c46a->leave($__internal_7db69634aeade34cd8ce6323df84d478864fb13ed87a3934dd166a98ab54c46a_prof);

        
        $__internal_8c13e33b345ff4d4545e14870c69b6afdf9c7edb4bcb31fdfdc6c55bd79e75ac->leave($__internal_8c13e33b345ff4d4545e14870c69b6afdf9c7edb4bcb31fdfdc6c55bd79e75ac_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2fc94526f4f8384fd357b08efcdabe8235f927d6ecd56f5c62f59892f51171ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fc94526f4f8384fd357b08efcdabe8235f927d6ecd56f5c62f59892f51171ed->enter($__internal_2fc94526f4f8384fd357b08efcdabe8235f927d6ecd56f5c62f59892f51171ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_9cdd4fa658137ead93ac0cc5f52e2bfc4acb3f418032053cef7e08e414ac07ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cdd4fa658137ead93ac0cc5f52e2bfc4acb3f418032053cef7e08e414ac07ba->enter($__internal_9cdd4fa658137ead93ac0cc5f52e2bfc4acb3f418032053cef7e08e414ac07ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/aide.css"), "html", null, true);
        
        $__internal_9cdd4fa658137ead93ac0cc5f52e2bfc4acb3f418032053cef7e08e414ac07ba->leave($__internal_9cdd4fa658137ead93ac0cc5f52e2bfc4acb3f418032053cef7e08e414ac07ba_prof);

        
        $__internal_2fc94526f4f8384fd357b08efcdabe8235f927d6ecd56f5c62f59892f51171ed->leave($__internal_2fc94526f4f8384fd357b08efcdabe8235f927d6ecd56f5c62f59892f51171ed_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_f7630be323210a40a4044be2e816939932089638c59c18e57665c2a06ce7a857 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7630be323210a40a4044be2e816939932089638c59c18e57665c2a06ce7a857->enter($__internal_f7630be323210a40a4044be2e816939932089638c59c18e57665c2a06ce7a857_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2cabfc5e321685c6bce6d6266fe963befccaab82f84bb4b93a787355ea5ac37e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cabfc5e321685c6bce6d6266fe963befccaab82f84bb4b93a787355ea5ac37e->enter($__internal_2cabfc5e321685c6bce6d6266fe963befccaab82f84bb4b93a787355ea5ac37e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <div class=\"margin-left\">
        <h1 class=\"titre\">Novice ? Un problème ?</h1>
        <div class=\"titre-separation\"></div>

        <h2 class=\"sous-titre sous-titre1\">Découvrez nos tutoriels sur Youtube</h2>

        <div class=\"g-ytsubscribe\" data-channel=\"GoogleDevelopers\" data-layout=\"full\" data-count=\"default\"></div>

        <h2 class=\"sous-titre sous-titre2\">Ou nos tutoriels écrits</h2>

            <div class=\"tutoecrit-groupcontainer\">
                <div class=\"tutoecrit-container\">
                    <a class=\"tutoecrit-a\" href=\"#\">Comment concevoir un itinéraire</a>
                    <div class=\"tutoecrit-sepa\"></div>
                </div>

                <div class=\"tutoecrit-container\">
                    <a class=\"tutoecrit-a\" href=\"#\">Comment publier mon itinéraire</a>
                    <div class=\"tutoecrit-sepa\"></div>
                </div>

                <div class=\"tutoecrit-container\">
                    <a class=\"tutoecrit-a\" href=\"#\">Comment retrouver mon itinéraire après l’avoir sauvegardé</a>
                    <div class=\"tutoecrit-sepa\"></div>
                </div>

                <div class=\"tutoecrit-container\">
                    <a class=\"tutoecrit-a\" href=\"#\">Comment trouver un itinéraire</a>
                    <div class=\"tutoecrit-sepa\"></div>
                </div>
            </div>


        <a class=\"sous-titre sous-titre3\" href=\"#\">Découvrez également la documentation du concepteur d’itinéraires</a>


        <h2 class=\"sous-titre sous-titre4\">Vous n’avez pas trouvé de solution ?</h2>
            <p class=\"fin\">Décrivez nous votre problème en nous envoyant un message depuis la page <a href=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contact");
        echo "\" class=\"fin-contact\">Contact</a>, nous saurons peut-être vous répondre</p>
    </div>
";
        
        $__internal_2cabfc5e321685c6bce6d6266fe963befccaab82f84bb4b93a787355ea5ac37e->leave($__internal_2cabfc5e321685c6bce6d6266fe963befccaab82f84bb4b93a787355ea5ac37e_prof);

        
        $__internal_f7630be323210a40a4044be2e816939932089638c59c18e57665c2a06ce7a857->leave($__internal_f7630be323210a40a4044be2e816939932089638c59c18e57665c2a06ce7a857_prof);

    }

    // line 49
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7b8b604c85f5e4ca195859f272b6d2115d908234c51d38a2bc99f926e2e90dfb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b8b604c85f5e4ca195859f272b6d2115d908234c51d38a2bc99f926e2e90dfb->enter($__internal_7b8b604c85f5e4ca195859f272b6d2115d908234c51d38a2bc99f926e2e90dfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_db3fd4b95eaa304017f038e755a6b4e0576e69ef6d9bd0df1837c683fad569ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db3fd4b95eaa304017f038e755a6b4e0576e69ef6d9bd0df1837c683fad569ac->enter($__internal_db3fd4b95eaa304017f038e755a6b4e0576e69ef6d9bd0df1837c683fad569ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 50
        echo "<script src=\"https://apis.google.com/js/platform.js\"></script>
";
        
        $__internal_db3fd4b95eaa304017f038e755a6b4e0576e69ef6d9bd0df1837c683fad569ac->leave($__internal_db3fd4b95eaa304017f038e755a6b4e0576e69ef6d9bd0df1837c683fad569ac_prof);

        
        $__internal_7b8b604c85f5e4ca195859f272b6d2115d908234c51d38a2bc99f926e2e90dfb->leave($__internal_7b8b604c85f5e4ca195859f272b6d2115d908234c51d38a2bc99f926e2e90dfb_prof);

    }

    public function getTemplateName()
    {
        return "content/aide.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 50,  141 => 49,  128 => 45,  89 => 8,  80 => 7,  62 => 5,  43 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Aide{{ parent() }}{% endblock %}

{% block stylesheets %}{{ asset('build/aide.css') }}{% endblock %}

{% block body %}
    <div class=\"margin-left\">
        <h1 class=\"titre\">Novice ? Un problème ?</h1>
        <div class=\"titre-separation\"></div>

        <h2 class=\"sous-titre sous-titre1\">Découvrez nos tutoriels sur Youtube</h2>

        <div class=\"g-ytsubscribe\" data-channel=\"GoogleDevelopers\" data-layout=\"full\" data-count=\"default\"></div>

        <h2 class=\"sous-titre sous-titre2\">Ou nos tutoriels écrits</h2>

            <div class=\"tutoecrit-groupcontainer\">
                <div class=\"tutoecrit-container\">
                    <a class=\"tutoecrit-a\" href=\"#\">Comment concevoir un itinéraire</a>
                    <div class=\"tutoecrit-sepa\"></div>
                </div>

                <div class=\"tutoecrit-container\">
                    <a class=\"tutoecrit-a\" href=\"#\">Comment publier mon itinéraire</a>
                    <div class=\"tutoecrit-sepa\"></div>
                </div>

                <div class=\"tutoecrit-container\">
                    <a class=\"tutoecrit-a\" href=\"#\">Comment retrouver mon itinéraire après l’avoir sauvegardé</a>
                    <div class=\"tutoecrit-sepa\"></div>
                </div>

                <div class=\"tutoecrit-container\">
                    <a class=\"tutoecrit-a\" href=\"#\">Comment trouver un itinéraire</a>
                    <div class=\"tutoecrit-sepa\"></div>
                </div>
            </div>


        <a class=\"sous-titre sous-titre3\" href=\"#\">Découvrez également la documentation du concepteur d’itinéraires</a>


        <h2 class=\"sous-titre sous-titre4\">Vous n’avez pas trouvé de solution ?</h2>
            <p class=\"fin\">Décrivez nous votre problème en nous envoyant un message depuis la page <a href=\"{{ path('contact') }}\" class=\"fin-contact\">Contact</a>, nous saurons peut-être vous répondre</p>
    </div>
{% endblock %}

{% block javascripts %}
<script src=\"https://apis.google.com/js/platform.js\"></script>
{% endblock %}", "content/aide.html.twig", "C:\\wamp64\\www\\mapbox\\templates\\content\\aide.html.twig");
    }
}
