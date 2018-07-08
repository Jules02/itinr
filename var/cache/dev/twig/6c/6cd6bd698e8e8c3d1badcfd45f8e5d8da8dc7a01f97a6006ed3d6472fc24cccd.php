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
        $__internal_9d74a1f61d4909c353c1b07ed506011a78ffe3462d4f8083224909dbeda76cc9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d74a1f61d4909c353c1b07ed506011a78ffe3462d4f8083224909dbeda76cc9->enter($__internal_9d74a1f61d4909c353c1b07ed506011a78ffe3462d4f8083224909dbeda76cc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "content/aide.html.twig"));

        $__internal_538ea5c0ff4e0cf30f1e8129d56decb7eb47e9d3cc385fa8021f872979e55e08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_538ea5c0ff4e0cf30f1e8129d56decb7eb47e9d3cc385fa8021f872979e55e08->enter($__internal_538ea5c0ff4e0cf30f1e8129d56decb7eb47e9d3cc385fa8021f872979e55e08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "content/aide.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d74a1f61d4909c353c1b07ed506011a78ffe3462d4f8083224909dbeda76cc9->leave($__internal_9d74a1f61d4909c353c1b07ed506011a78ffe3462d4f8083224909dbeda76cc9_prof);

        
        $__internal_538ea5c0ff4e0cf30f1e8129d56decb7eb47e9d3cc385fa8021f872979e55e08->leave($__internal_538ea5c0ff4e0cf30f1e8129d56decb7eb47e9d3cc385fa8021f872979e55e08_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_263952abea9b000bedab0a487288aed2fb66a493a2c0cb0efede53ba59c8b619 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_263952abea9b000bedab0a487288aed2fb66a493a2c0cb0efede53ba59c8b619->enter($__internal_263952abea9b000bedab0a487288aed2fb66a493a2c0cb0efede53ba59c8b619_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3ab16fc0d9dfb662bd5cedbf504d67a05a022592d0c36cc80fdd0ec8a3447929 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ab16fc0d9dfb662bd5cedbf504d67a05a022592d0c36cc80fdd0ec8a3447929->enter($__internal_3ab16fc0d9dfb662bd5cedbf504d67a05a022592d0c36cc80fdd0ec8a3447929_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Aide";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_3ab16fc0d9dfb662bd5cedbf504d67a05a022592d0c36cc80fdd0ec8a3447929->leave($__internal_3ab16fc0d9dfb662bd5cedbf504d67a05a022592d0c36cc80fdd0ec8a3447929_prof);

        
        $__internal_263952abea9b000bedab0a487288aed2fb66a493a2c0cb0efede53ba59c8b619->leave($__internal_263952abea9b000bedab0a487288aed2fb66a493a2c0cb0efede53ba59c8b619_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e26f76c6b46934b6ea99697d2df4f302b9392efc2dc67e5cb119f0d2793b074e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e26f76c6b46934b6ea99697d2df4f302b9392efc2dc67e5cb119f0d2793b074e->enter($__internal_e26f76c6b46934b6ea99697d2df4f302b9392efc2dc67e5cb119f0d2793b074e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_780c6746a601cc707c4e562c4804deaefd97a2fd474ff0166b72e8187d33e40b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_780c6746a601cc707c4e562c4804deaefd97a2fd474ff0166b72e8187d33e40b->enter($__internal_780c6746a601cc707c4e562c4804deaefd97a2fd474ff0166b72e8187d33e40b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/aide.css"), "html", null, true);
        
        $__internal_780c6746a601cc707c4e562c4804deaefd97a2fd474ff0166b72e8187d33e40b->leave($__internal_780c6746a601cc707c4e562c4804deaefd97a2fd474ff0166b72e8187d33e40b_prof);

        
        $__internal_e26f76c6b46934b6ea99697d2df4f302b9392efc2dc67e5cb119f0d2793b074e->leave($__internal_e26f76c6b46934b6ea99697d2df4f302b9392efc2dc67e5cb119f0d2793b074e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_48a7bb2293aa84521fc8a402d20bd1f78a5fa07a2d47eba08dfe708161871f4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48a7bb2293aa84521fc8a402d20bd1f78a5fa07a2d47eba08dfe708161871f4e->enter($__internal_48a7bb2293aa84521fc8a402d20bd1f78a5fa07a2d47eba08dfe708161871f4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8c40def0c71144d9bae36463c2471c44f26969c31c3e202ec4859a9ba186c1d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c40def0c71144d9bae36463c2471c44f26969c31c3e202ec4859a9ba186c1d3->enter($__internal_8c40def0c71144d9bae36463c2471c44f26969c31c3e202ec4859a9ba186c1d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_8c40def0c71144d9bae36463c2471c44f26969c31c3e202ec4859a9ba186c1d3->leave($__internal_8c40def0c71144d9bae36463c2471c44f26969c31c3e202ec4859a9ba186c1d3_prof);

        
        $__internal_48a7bb2293aa84521fc8a402d20bd1f78a5fa07a2d47eba08dfe708161871f4e->leave($__internal_48a7bb2293aa84521fc8a402d20bd1f78a5fa07a2d47eba08dfe708161871f4e_prof);

    }

    // line 53
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_bd40535f0cd8a655097090d72df3fd84dde0075fda82df7938691605e9145da0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd40535f0cd8a655097090d72df3fd84dde0075fda82df7938691605e9145da0->enter($__internal_bd40535f0cd8a655097090d72df3fd84dde0075fda82df7938691605e9145da0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_7822f49801b6273f4467b38fca862e4c351a0f5da69526e73029fa69f85a303c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7822f49801b6273f4467b38fca862e4c351a0f5da69526e73029fa69f85a303c->enter($__internal_7822f49801b6273f4467b38fca862e4c351a0f5da69526e73029fa69f85a303c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 55
        echo "<script src=\"https://apis.google.com/js/platform.js\"></script>
";
        
        $__internal_7822f49801b6273f4467b38fca862e4c351a0f5da69526e73029fa69f85a303c->leave($__internal_7822f49801b6273f4467b38fca862e4c351a0f5da69526e73029fa69f85a303c_prof);

        
        $__internal_bd40535f0cd8a655097090d72df3fd84dde0075fda82df7938691605e9145da0->leave($__internal_bd40535f0cd8a655097090d72df3fd84dde0075fda82df7938691605e9145da0_prof);

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
        return array (  154 => 55,  145 => 53,  132 => 49,  89 => 8,  80 => 7,  62 => 5,  43 => 3,  11 => 1,);
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
{# Pour charger le bouton d'abonnement Youtube #}
<script src=\"https://apis.google.com/js/platform.js\"></script>
{% endblock %}", "content/aide.html.twig", "C:\\wamp64\\www\\mapbox\\templates\\content\\aide.html.twig");
    }
}
