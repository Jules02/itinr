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
        $__internal_8ef43019306b91a0a9d6e06101fe8b5aea3acfd9397178c9e82f7943f1ededf7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ef43019306b91a0a9d6e06101fe8b5aea3acfd9397178c9e82f7943f1ededf7->enter($__internal_8ef43019306b91a0a9d6e06101fe8b5aea3acfd9397178c9e82f7943f1ededf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "content/aide.html.twig"));

        $__internal_652027dfccd59c18031b03b747789a3b762585829bc3b8475160e7aac207af81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_652027dfccd59c18031b03b747789a3b762585829bc3b8475160e7aac207af81->enter($__internal_652027dfccd59c18031b03b747789a3b762585829bc3b8475160e7aac207af81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "content/aide.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ef43019306b91a0a9d6e06101fe8b5aea3acfd9397178c9e82f7943f1ededf7->leave($__internal_8ef43019306b91a0a9d6e06101fe8b5aea3acfd9397178c9e82f7943f1ededf7_prof);

        
        $__internal_652027dfccd59c18031b03b747789a3b762585829bc3b8475160e7aac207af81->leave($__internal_652027dfccd59c18031b03b747789a3b762585829bc3b8475160e7aac207af81_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3cfecb170eb8407d248b88326f11642bfa626662b883a5acbe66187ab47729b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cfecb170eb8407d248b88326f11642bfa626662b883a5acbe66187ab47729b3->enter($__internal_3cfecb170eb8407d248b88326f11642bfa626662b883a5acbe66187ab47729b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c303399eb9469d527bba0edd5ef7d2d82e3753b3e7cbd2b1cc377268a55a03e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c303399eb9469d527bba0edd5ef7d2d82e3753b3e7cbd2b1cc377268a55a03e8->enter($__internal_c303399eb9469d527bba0edd5ef7d2d82e3753b3e7cbd2b1cc377268a55a03e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Aide";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_c303399eb9469d527bba0edd5ef7d2d82e3753b3e7cbd2b1cc377268a55a03e8->leave($__internal_c303399eb9469d527bba0edd5ef7d2d82e3753b3e7cbd2b1cc377268a55a03e8_prof);

        
        $__internal_3cfecb170eb8407d248b88326f11642bfa626662b883a5acbe66187ab47729b3->leave($__internal_3cfecb170eb8407d248b88326f11642bfa626662b883a5acbe66187ab47729b3_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3946adfccc7e3b289f6dc17102e23eb53ddb4e696d091aa589cfdeadbf0ca4b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3946adfccc7e3b289f6dc17102e23eb53ddb4e696d091aa589cfdeadbf0ca4b7->enter($__internal_3946adfccc7e3b289f6dc17102e23eb53ddb4e696d091aa589cfdeadbf0ca4b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_e69811b21cb40513fb2f34fd5d9ade60c556910f57c9e1015f792ac3221bacbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e69811b21cb40513fb2f34fd5d9ade60c556910f57c9e1015f792ac3221bacbb->enter($__internal_e69811b21cb40513fb2f34fd5d9ade60c556910f57c9e1015f792ac3221bacbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/aide.css"), "html", null, true);
        
        $__internal_e69811b21cb40513fb2f34fd5d9ade60c556910f57c9e1015f792ac3221bacbb->leave($__internal_e69811b21cb40513fb2f34fd5d9ade60c556910f57c9e1015f792ac3221bacbb_prof);

        
        $__internal_3946adfccc7e3b289f6dc17102e23eb53ddb4e696d091aa589cfdeadbf0ca4b7->leave($__internal_3946adfccc7e3b289f6dc17102e23eb53ddb4e696d091aa589cfdeadbf0ca4b7_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_0ed34af406da0f3af80222b08a770b0562ebde9ea918aca474421ae6d5457f68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ed34af406da0f3af80222b08a770b0562ebde9ea918aca474421ae6d5457f68->enter($__internal_0ed34af406da0f3af80222b08a770b0562ebde9ea918aca474421ae6d5457f68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_db1d8ab4ed707104519ef7a9a76d81846a1bddb064f8064f45180b0a86152cbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db1d8ab4ed707104519ef7a9a76d81846a1bddb064f8064f45180b0a86152cbd->enter($__internal_db1d8ab4ed707104519ef7a9a76d81846a1bddb064f8064f45180b0a86152cbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_db1d8ab4ed707104519ef7a9a76d81846a1bddb064f8064f45180b0a86152cbd->leave($__internal_db1d8ab4ed707104519ef7a9a76d81846a1bddb064f8064f45180b0a86152cbd_prof);

        
        $__internal_0ed34af406da0f3af80222b08a770b0562ebde9ea918aca474421ae6d5457f68->leave($__internal_0ed34af406da0f3af80222b08a770b0562ebde9ea918aca474421ae6d5457f68_prof);

    }

    // line 53
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_708702a8da394a31faa081f0d612ac43abec1d9d2637766e0b7606f2f159ad3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_708702a8da394a31faa081f0d612ac43abec1d9d2637766e0b7606f2f159ad3e->enter($__internal_708702a8da394a31faa081f0d612ac43abec1d9d2637766e0b7606f2f159ad3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_4860eb336697a279fbe41eed614dc280aef9fd24a7f715b7b0e0e40188697e80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4860eb336697a279fbe41eed614dc280aef9fd24a7f715b7b0e0e40188697e80->enter($__internal_4860eb336697a279fbe41eed614dc280aef9fd24a7f715b7b0e0e40188697e80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 54
        echo "<script src=\"https://apis.google.com/js/platform.js\"></script>
";
        
        $__internal_4860eb336697a279fbe41eed614dc280aef9fd24a7f715b7b0e0e40188697e80->leave($__internal_4860eb336697a279fbe41eed614dc280aef9fd24a7f715b7b0e0e40188697e80_prof);

        
        $__internal_708702a8da394a31faa081f0d612ac43abec1d9d2637766e0b7606f2f159ad3e->leave($__internal_708702a8da394a31faa081f0d612ac43abec1d9d2637766e0b7606f2f159ad3e_prof);

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
