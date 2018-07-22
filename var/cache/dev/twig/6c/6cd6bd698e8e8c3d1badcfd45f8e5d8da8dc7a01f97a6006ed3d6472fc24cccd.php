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
        $__internal_a43623f9aa33cdfdf1b4a9775a10c1427cb94caf93178eff09cf733607e78a97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a43623f9aa33cdfdf1b4a9775a10c1427cb94caf93178eff09cf733607e78a97->enter($__internal_a43623f9aa33cdfdf1b4a9775a10c1427cb94caf93178eff09cf733607e78a97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "content/aide.html.twig"));

        $__internal_540edd97881388cddd7fe4afc7ec7f59bc2cb26df7eac8975491ff0d7676e04e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_540edd97881388cddd7fe4afc7ec7f59bc2cb26df7eac8975491ff0d7676e04e->enter($__internal_540edd97881388cddd7fe4afc7ec7f59bc2cb26df7eac8975491ff0d7676e04e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "content/aide.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a43623f9aa33cdfdf1b4a9775a10c1427cb94caf93178eff09cf733607e78a97->leave($__internal_a43623f9aa33cdfdf1b4a9775a10c1427cb94caf93178eff09cf733607e78a97_prof);

        
        $__internal_540edd97881388cddd7fe4afc7ec7f59bc2cb26df7eac8975491ff0d7676e04e->leave($__internal_540edd97881388cddd7fe4afc7ec7f59bc2cb26df7eac8975491ff0d7676e04e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2d73100cdc981c3714e9cda724f271c932db92c0d244441572ae5115a48cd2f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d73100cdc981c3714e9cda724f271c932db92c0d244441572ae5115a48cd2f1->enter($__internal_2d73100cdc981c3714e9cda724f271c932db92c0d244441572ae5115a48cd2f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3dc2395fbc31e3e355b3040fd0604bfd6e0a205f800efeaa030e6bffccebadb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3dc2395fbc31e3e355b3040fd0604bfd6e0a205f800efeaa030e6bffccebadb1->enter($__internal_3dc2395fbc31e3e355b3040fd0604bfd6e0a205f800efeaa030e6bffccebadb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Aide";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_3dc2395fbc31e3e355b3040fd0604bfd6e0a205f800efeaa030e6bffccebadb1->leave($__internal_3dc2395fbc31e3e355b3040fd0604bfd6e0a205f800efeaa030e6bffccebadb1_prof);

        
        $__internal_2d73100cdc981c3714e9cda724f271c932db92c0d244441572ae5115a48cd2f1->leave($__internal_2d73100cdc981c3714e9cda724f271c932db92c0d244441572ae5115a48cd2f1_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_17b8fd4fc1f4997c62867400788d84881d0ab070370f86cf4c38cf7b2e3a5218 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17b8fd4fc1f4997c62867400788d84881d0ab070370f86cf4c38cf7b2e3a5218->enter($__internal_17b8fd4fc1f4997c62867400788d84881d0ab070370f86cf4c38cf7b2e3a5218_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_b1bb0988e5ed09c2db0f9bcd1395771d21edb30498b8abe0925d3cd603e1f94c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1bb0988e5ed09c2db0f9bcd1395771d21edb30498b8abe0925d3cd603e1f94c->enter($__internal_b1bb0988e5ed09c2db0f9bcd1395771d21edb30498b8abe0925d3cd603e1f94c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/aide.css"), "html", null, true);
        
        $__internal_b1bb0988e5ed09c2db0f9bcd1395771d21edb30498b8abe0925d3cd603e1f94c->leave($__internal_b1bb0988e5ed09c2db0f9bcd1395771d21edb30498b8abe0925d3cd603e1f94c_prof);

        
        $__internal_17b8fd4fc1f4997c62867400788d84881d0ab070370f86cf4c38cf7b2e3a5218->leave($__internal_17b8fd4fc1f4997c62867400788d84881d0ab070370f86cf4c38cf7b2e3a5218_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_0256d61142a8531439605bd0b4c47b7abc33a18af7172eb85c9b1f6c25072a21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0256d61142a8531439605bd0b4c47b7abc33a18af7172eb85c9b1f6c25072a21->enter($__internal_0256d61142a8531439605bd0b4c47b7abc33a18af7172eb85c9b1f6c25072a21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_53c026c40953af67dc59518120c38bac0bbba8d384727466722c7889d6e1aa3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53c026c40953af67dc59518120c38bac0bbba8d384727466722c7889d6e1aa3c->enter($__internal_53c026c40953af67dc59518120c38bac0bbba8d384727466722c7889d6e1aa3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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

    <iframe src=\"https://giphy.com/embed/cPKWZB2aaB3rO\" width=\"480\" height=\"408\" frameBorder=\"0\" class=\"giphy-embed\" allowFullScreen></iframe><p><a href=\"https://giphy.com/gifs/cPKWZB2aaB3rO\">via GIPHY</a></p>
";
        
        $__internal_53c026c40953af67dc59518120c38bac0bbba8d384727466722c7889d6e1aa3c->leave($__internal_53c026c40953af67dc59518120c38bac0bbba8d384727466722c7889d6e1aa3c_prof);

        
        $__internal_0256d61142a8531439605bd0b4c47b7abc33a18af7172eb85c9b1f6c25072a21->leave($__internal_0256d61142a8531439605bd0b4c47b7abc33a18af7172eb85c9b1f6c25072a21_prof);

    }

    // line 55
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8f88b4f7d8de7971530b8b0c14fd9391198f2900d22a12d24e3aad8b3d1d2c88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f88b4f7d8de7971530b8b0c14fd9391198f2900d22a12d24e3aad8b3d1d2c88->enter($__internal_8f88b4f7d8de7971530b8b0c14fd9391198f2900d22a12d24e3aad8b3d1d2c88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_078dd296bc4f7535ee028be17c0418455b43543f57f4a293fd23d858e6d81eac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_078dd296bc4f7535ee028be17c0418455b43543f57f4a293fd23d858e6d81eac->enter($__internal_078dd296bc4f7535ee028be17c0418455b43543f57f4a293fd23d858e6d81eac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 57
        echo "<script src=\"https://apis.google.com/js/platform.js\"></script>
";
        
        $__internal_078dd296bc4f7535ee028be17c0418455b43543f57f4a293fd23d858e6d81eac->leave($__internal_078dd296bc4f7535ee028be17c0418455b43543f57f4a293fd23d858e6d81eac_prof);

        
        $__internal_8f88b4f7d8de7971530b8b0c14fd9391198f2900d22a12d24e3aad8b3d1d2c88->leave($__internal_8f88b4f7d8de7971530b8b0c14fd9391198f2900d22a12d24e3aad8b3d1d2c88_prof);

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
        return array (  156 => 57,  147 => 55,  132 => 49,  89 => 8,  80 => 7,  62 => 5,  43 => 3,  11 => 1,);
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

    <iframe src=\"https://giphy.com/embed/cPKWZB2aaB3rO\" width=\"480\" height=\"408\" frameBorder=\"0\" class=\"giphy-embed\" allowFullScreen></iframe><p><a href=\"https://giphy.com/gifs/cPKWZB2aaB3rO\">via GIPHY</a></p>
{% endblock %}

{% block javascripts %}
{# Pour charger le bouton d'abonnement Youtube #}
<script src=\"https://apis.google.com/js/platform.js\"></script>
{% endblock %}", "content/aide.html.twig", "C:\\wamp64\\www\\mapbox\\templates\\content\\aide.html.twig");
    }
}
