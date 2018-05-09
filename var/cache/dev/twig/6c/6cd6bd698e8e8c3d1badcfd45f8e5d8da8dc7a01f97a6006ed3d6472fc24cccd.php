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
        $__internal_77d1039551672fb76da5ebdcaded921cf68a03a0a22d24366693f0f401ff1ab1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77d1039551672fb76da5ebdcaded921cf68a03a0a22d24366693f0f401ff1ab1->enter($__internal_77d1039551672fb76da5ebdcaded921cf68a03a0a22d24366693f0f401ff1ab1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "content/aide.html.twig"));

        $__internal_6c23a0f58f5be38a596ddbf9ef06919ca5a2935bbc0ad6bc6ff8b05eab99d5d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c23a0f58f5be38a596ddbf9ef06919ca5a2935bbc0ad6bc6ff8b05eab99d5d5->enter($__internal_6c23a0f58f5be38a596ddbf9ef06919ca5a2935bbc0ad6bc6ff8b05eab99d5d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "content/aide.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_77d1039551672fb76da5ebdcaded921cf68a03a0a22d24366693f0f401ff1ab1->leave($__internal_77d1039551672fb76da5ebdcaded921cf68a03a0a22d24366693f0f401ff1ab1_prof);

        
        $__internal_6c23a0f58f5be38a596ddbf9ef06919ca5a2935bbc0ad6bc6ff8b05eab99d5d5->leave($__internal_6c23a0f58f5be38a596ddbf9ef06919ca5a2935bbc0ad6bc6ff8b05eab99d5d5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0efe170a858bc23623cb21f46047893bd2c05539b53862873e11160d9c646c0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0efe170a858bc23623cb21f46047893bd2c05539b53862873e11160d9c646c0b->enter($__internal_0efe170a858bc23623cb21f46047893bd2c05539b53862873e11160d9c646c0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a4185d1defbc54532bab7bf3d981a5d1ed729c2d99348244e0562ed328c14d3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4185d1defbc54532bab7bf3d981a5d1ed729c2d99348244e0562ed328c14d3b->enter($__internal_a4185d1defbc54532bab7bf3d981a5d1ed729c2d99348244e0562ed328c14d3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Aide";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_a4185d1defbc54532bab7bf3d981a5d1ed729c2d99348244e0562ed328c14d3b->leave($__internal_a4185d1defbc54532bab7bf3d981a5d1ed729c2d99348244e0562ed328c14d3b_prof);

        
        $__internal_0efe170a858bc23623cb21f46047893bd2c05539b53862873e11160d9c646c0b->leave($__internal_0efe170a858bc23623cb21f46047893bd2c05539b53862873e11160d9c646c0b_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3fe8395a67d0f04cc5a366436f7cce5b7bf86428973ae19cfa37611ae115209a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fe8395a67d0f04cc5a366436f7cce5b7bf86428973ae19cfa37611ae115209a->enter($__internal_3fe8395a67d0f04cc5a366436f7cce5b7bf86428973ae19cfa37611ae115209a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_e382518ae525965c612ce6c393ca2856e1910d5f6a9de922b48b7283646e6d70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e382518ae525965c612ce6c393ca2856e1910d5f6a9de922b48b7283646e6d70->enter($__internal_e382518ae525965c612ce6c393ca2856e1910d5f6a9de922b48b7283646e6d70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/aide.css"), "html", null, true);
        
        $__internal_e382518ae525965c612ce6c393ca2856e1910d5f6a9de922b48b7283646e6d70->leave($__internal_e382518ae525965c612ce6c393ca2856e1910d5f6a9de922b48b7283646e6d70_prof);

        
        $__internal_3fe8395a67d0f04cc5a366436f7cce5b7bf86428973ae19cfa37611ae115209a->leave($__internal_3fe8395a67d0f04cc5a366436f7cce5b7bf86428973ae19cfa37611ae115209a_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_51556bdf9c31cadc30e524cd9aa34d9afd352a7de450542d26b437b9a86cf6bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51556bdf9c31cadc30e524cd9aa34d9afd352a7de450542d26b437b9a86cf6bf->enter($__internal_51556bdf9c31cadc30e524cd9aa34d9afd352a7de450542d26b437b9a86cf6bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9ab87fc190ac231fa340b2dc8979a837ecdd5d5f90f01921244f7f4c04b9a6c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ab87fc190ac231fa340b2dc8979a837ecdd5d5f90f01921244f7f4c04b9a6c4->enter($__internal_9ab87fc190ac231fa340b2dc8979a837ecdd5d5f90f01921244f7f4c04b9a6c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <div class=\"margin-left\">
        <h1 class=\"titre\">Novice ? Un problème ?</h1>
        <div class=\"titre-separation\"></div>

        <h2 class=\"sous-titre sous-titre1\">Découvrez nos tutoriels sur Youtube</h2>

        <div class=\"yt-container\">
            <div class=\"g-ytsubscribe\" data-channel=\"GoogleDevelopers\" data-layout=\"full\" data-count=\"default\"></div>
            <div class=\"yt-sepa\"></div>
            <iframe width=\"320\" height=\"200\" src=\"https://www.youtube.com/embed/avrmiFo2jcg\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>
        </div>

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
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contact");
        echo "\" class=\"fin-contact\">Contact</a>, nous saurons peut-être vous répondre</p>
    </div>
";
        
        $__internal_9ab87fc190ac231fa340b2dc8979a837ecdd5d5f90f01921244f7f4c04b9a6c4->leave($__internal_9ab87fc190ac231fa340b2dc8979a837ecdd5d5f90f01921244f7f4c04b9a6c4_prof);

        
        $__internal_51556bdf9c31cadc30e524cd9aa34d9afd352a7de450542d26b437b9a86cf6bf->leave($__internal_51556bdf9c31cadc30e524cd9aa34d9afd352a7de450542d26b437b9a86cf6bf_prof);

    }

    // line 53
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a61cb0f6a2142579bcaafd33c96d4701b9f987e08d6f166be4c5aeb3d264a2e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a61cb0f6a2142579bcaafd33c96d4701b9f987e08d6f166be4c5aeb3d264a2e0->enter($__internal_a61cb0f6a2142579bcaafd33c96d4701b9f987e08d6f166be4c5aeb3d264a2e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_a4200caecb2939af13e4e764bd36476b127fe92f6e06d8bfa16626fe108f4254 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4200caecb2939af13e4e764bd36476b127fe92f6e06d8bfa16626fe108f4254->enter($__internal_a4200caecb2939af13e4e764bd36476b127fe92f6e06d8bfa16626fe108f4254_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 54
        echo "<script src=\"https://apis.google.com/js/platform.js\"></script>
";
        
        $__internal_a4200caecb2939af13e4e764bd36476b127fe92f6e06d8bfa16626fe108f4254->leave($__internal_a4200caecb2939af13e4e764bd36476b127fe92f6e06d8bfa16626fe108f4254_prof);

        
        $__internal_a61cb0f6a2142579bcaafd33c96d4701b9f987e08d6f166be4c5aeb3d264a2e0->leave($__internal_a61cb0f6a2142579bcaafd33c96d4701b9f987e08d6f166be4c5aeb3d264a2e0_prof);

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
        return array (  154 => 54,  145 => 53,  132 => 49,  89 => 8,  80 => 7,  62 => 5,  43 => 3,  11 => 1,);
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

        <div class=\"yt-container\">
            <div class=\"g-ytsubscribe\" data-channel=\"GoogleDevelopers\" data-layout=\"full\" data-count=\"default\"></div>
            <div class=\"yt-sepa\"></div>
            <iframe width=\"320\" height=\"200\" src=\"https://www.youtube.com/embed/avrmiFo2jcg\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>
        </div>

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
