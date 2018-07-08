<?php

/* content/apropos.html.twig */
class __TwigTemplate_ea484c6b0905b8a3663306f43e717d15a6440d0eef4f97a655b8166493c311ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "content/apropos.html.twig", 1);
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
        $__internal_88c81f0eeccf0d0c48a36d510ddc461dff575119c9fa7ac08a699f4a9c8fca65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88c81f0eeccf0d0c48a36d510ddc461dff575119c9fa7ac08a699f4a9c8fca65->enter($__internal_88c81f0eeccf0d0c48a36d510ddc461dff575119c9fa7ac08a699f4a9c8fca65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "content/apropos.html.twig"));

        $__internal_9283f378c9db4500b05a5aa21535ec460956322c62fc60a05fc48c8d77ea197a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9283f378c9db4500b05a5aa21535ec460956322c62fc60a05fc48c8d77ea197a->enter($__internal_9283f378c9db4500b05a5aa21535ec460956322c62fc60a05fc48c8d77ea197a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "content/apropos.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_88c81f0eeccf0d0c48a36d510ddc461dff575119c9fa7ac08a699f4a9c8fca65->leave($__internal_88c81f0eeccf0d0c48a36d510ddc461dff575119c9fa7ac08a699f4a9c8fca65_prof);

        
        $__internal_9283f378c9db4500b05a5aa21535ec460956322c62fc60a05fc48c8d77ea197a->leave($__internal_9283f378c9db4500b05a5aa21535ec460956322c62fc60a05fc48c8d77ea197a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_245e1020039ea7d416ccd139f3b970b9b3272526bd717c304078305436d0c9bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_245e1020039ea7d416ccd139f3b970b9b3272526bd717c304078305436d0c9bc->enter($__internal_245e1020039ea7d416ccd139f3b970b9b3272526bd717c304078305436d0c9bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3440dd3aa8d6c09aa08aaa2ee70d8ea7cc5e78d0c80a9fbec31c04517b967f85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3440dd3aa8d6c09aa08aaa2ee70d8ea7cc5e78d0c80a9fbec31c04517b967f85->enter($__internal_3440dd3aa8d6c09aa08aaa2ee70d8ea7cc5e78d0c80a9fbec31c04517b967f85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "A propos";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_3440dd3aa8d6c09aa08aaa2ee70d8ea7cc5e78d0c80a9fbec31c04517b967f85->leave($__internal_3440dd3aa8d6c09aa08aaa2ee70d8ea7cc5e78d0c80a9fbec31c04517b967f85_prof);

        
        $__internal_245e1020039ea7d416ccd139f3b970b9b3272526bd717c304078305436d0c9bc->leave($__internal_245e1020039ea7d416ccd139f3b970b9b3272526bd717c304078305436d0c9bc_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_923d53d7eb4985b788d94eb9d1c531abb13c4910510f9ddb634ff3e6d0ec48e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_923d53d7eb4985b788d94eb9d1c531abb13c4910510f9ddb634ff3e6d0ec48e2->enter($__internal_923d53d7eb4985b788d94eb9d1c531abb13c4910510f9ddb634ff3e6d0ec48e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_01f298b1cc951abcee4ff840eac07e7b1d92f154f47c4adf37ef5d955071ba6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01f298b1cc951abcee4ff840eac07e7b1d92f154f47c4adf37ef5d955071ba6c->enter($__internal_01f298b1cc951abcee4ff840eac07e7b1d92f154f47c4adf37ef5d955071ba6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/apropos.css"), "html", null, true);
        
        $__internal_01f298b1cc951abcee4ff840eac07e7b1d92f154f47c4adf37ef5d955071ba6c->leave($__internal_01f298b1cc951abcee4ff840eac07e7b1d92f154f47c4adf37ef5d955071ba6c_prof);

        
        $__internal_923d53d7eb4985b788d94eb9d1c531abb13c4910510f9ddb634ff3e6d0ec48e2->leave($__internal_923d53d7eb4985b788d94eb9d1c531abb13c4910510f9ddb634ff3e6d0ec48e2_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_ad756fd15df50e2effdb269ba33aaed4c3fb8aa59f5bfde6d3c82e5e6afe405d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad756fd15df50e2effdb269ba33aaed4c3fb8aa59f5bfde6d3c82e5e6afe405d->enter($__internal_ad756fd15df50e2effdb269ba33aaed4c3fb8aa59f5bfde6d3c82e5e6afe405d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f8145ba681bfddb4bbdcef544ce67b3116c18a4141a8ad91c24ece5868da0d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f8145ba681bfddb4bbdcef544ce67b3116c18a4141a8ad91c24ece5868da0d8->enter($__internal_6f8145ba681bfddb4bbdcef544ce67b3116c18a4141a8ad91c24ece5868da0d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <div class=\"margin-left\">
        <h1 class=\"titre\">Apprenez-en plus sur Movee</h1>
        <div class=\"sepa-title\"></div>

        <p class=\"description\">Movee est un Lorem ipsum dolor sit amet, consectetur adipiscing elit. In cursus finibus justo sit amet tempor. Praesent volutpat varius arcu ac tincidunt. Fusce nunc dolor, elementum vel mattis facilisis, vestibulum vel sem. Suspendisse nec velit malesuada, sagittis mauris quis, rhoncus purus. Pellentesque et diam a lorem rhoncus faucibus. Nulla non massa et dolor egestas viverra. Praesent dictum purus vel magna convallis, non eleifend tellus malesuada.</p>
        <p class=\"description\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In cursus finibus justo sit amet tempor.</p>

        <p class=\"author-title\">Movee a été développé par:</p>
        <div class=\"author-container\">
            <div class=\"author\">
                <div class=\"author-avatarcontainer\"><img src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/moi.png"), "html", null, true);
        echo "\" alt=\"Avatar auteur\" class=\"author-avatar\"></div><p>Jules Dupont</p>
            </div>
        </div>

        <h3 class=\"subtitle\">Comment contribuer à ce projet</h3>
        <div class=\"sepa-subtitle\"></div>

        <p class=\"opensource-toptext\">Vous êtes développeur ou simplement curieux ?</p>
        <a class=\"opensource\" href=\"https://github.com\"><img class=\"opensource-emoji\" src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/vemoji.png"), "html", null, true);
        echo "\" alt=\"Emoji V\">Movee est 100% open-source !<img class=\"opensource-gitimg\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/github.png"), "html", null, true);
        echo "\" alt=\"Icône Git\"></a>
        <p class=\"opensource-bottomtext\">Votre aide est donc la bienvenue dans la section Issues 😊</p>

        <p class=\"fonctionnement-text\">Movee est un projet Symfony,<img src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/symfony.png"), "html", null, true);
        echo "\" alt=\"Logo Symfony\" class=\"fonctionnement-symfonyimg fonctionnement-img\"></p>
        <p class=\"fonctionnement-text\">et le concepteur d'itinéraires fonctionne avec la Google Maps API v3<img src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/gmaps.png"), "html", null, true);
        echo "\" alt=\"Logo Google Maps\" class=\"fonctionnement-gmapsimg fonctionnement-img\"></p>
        <p class=\"fonctionnement-questions\">Si vous avez des questions à propos de l’utilisation de Symfony ou de l’API Google Maps, n’hésitez surtout pas à me <a href=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contact");
        echo "\">les poser</a></p>
    </div>
";
        
        $__internal_6f8145ba681bfddb4bbdcef544ce67b3116c18a4141a8ad91c24ece5868da0d8->leave($__internal_6f8145ba681bfddb4bbdcef544ce67b3116c18a4141a8ad91c24ece5868da0d8_prof);

        
        $__internal_ad756fd15df50e2effdb269ba33aaed4c3fb8aa59f5bfde6d3c82e5e6afe405d->leave($__internal_ad756fd15df50e2effdb269ba33aaed4c3fb8aa59f5bfde6d3c82e5e6afe405d_prof);

    }

    public function getTemplateName()
    {
        return "content/apropos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 31,  123 => 30,  119 => 29,  111 => 26,  100 => 18,  88 => 8,  79 => 7,  61 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}A propos{{ parent() }}{% endblock %}

{% block stylesheets %}{{ asset('build/apropos.css') }}{% endblock %}

{% block body %}
    <div class=\"margin-left\">
        <h1 class=\"titre\">Apprenez-en plus sur Movee</h1>
        <div class=\"sepa-title\"></div>

        <p class=\"description\">Movee est un Lorem ipsum dolor sit amet, consectetur adipiscing elit. In cursus finibus justo sit amet tempor. Praesent volutpat varius arcu ac tincidunt. Fusce nunc dolor, elementum vel mattis facilisis, vestibulum vel sem. Suspendisse nec velit malesuada, sagittis mauris quis, rhoncus purus. Pellentesque et diam a lorem rhoncus faucibus. Nulla non massa et dolor egestas viverra. Praesent dictum purus vel magna convallis, non eleifend tellus malesuada.</p>
        <p class=\"description\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In cursus finibus justo sit amet tempor.</p>

        <p class=\"author-title\">Movee a été développé par:</p>
        <div class=\"author-container\">
            <div class=\"author\">
                <div class=\"author-avatarcontainer\"><img src=\"{{ asset('images/moi.png') }}\" alt=\"Avatar auteur\" class=\"author-avatar\"></div><p>Jules Dupont</p>
            </div>
        </div>

        <h3 class=\"subtitle\">Comment contribuer à ce projet</h3>
        <div class=\"sepa-subtitle\"></div>

        <p class=\"opensource-toptext\">Vous êtes développeur ou simplement curieux ?</p>
        <a class=\"opensource\" href=\"https://github.com\"><img class=\"opensource-emoji\" src=\"{{ asset('images/vemoji.png') }}\" alt=\"Emoji V\">Movee est 100% open-source !<img class=\"opensource-gitimg\" src=\"{{ asset('images/github.png') }}\" alt=\"Icône Git\"></a>
        <p class=\"opensource-bottomtext\">Votre aide est donc la bienvenue dans la section Issues 😊</p>

        <p class=\"fonctionnement-text\">Movee est un projet Symfony,<img src=\"{{ asset('images/symfony.png') }}\" alt=\"Logo Symfony\" class=\"fonctionnement-symfonyimg fonctionnement-img\"></p>
        <p class=\"fonctionnement-text\">et le concepteur d'itinéraires fonctionne avec la Google Maps API v3<img src=\"{{ asset('images/gmaps.png') }}\" alt=\"Logo Google Maps\" class=\"fonctionnement-gmapsimg fonctionnement-img\"></p>
        <p class=\"fonctionnement-questions\">Si vous avez des questions à propos de l’utilisation de Symfony ou de l’API Google Maps, n’hésitez surtout pas à me <a href=\"{{ path('contact') }}\">les poser</a></p>
    </div>
{% endblock %}", "content/apropos.html.twig", "C:\\wamp64\\www\\mapbox\\templates\\content\\apropos.html.twig");
    }
}
