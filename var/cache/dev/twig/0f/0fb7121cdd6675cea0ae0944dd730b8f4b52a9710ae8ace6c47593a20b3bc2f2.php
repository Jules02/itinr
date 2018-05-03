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
        $__internal_68c59d299655bf47b7f87c9cb8ca5efa452f3874b17ed231f22d750d3d665c0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68c59d299655bf47b7f87c9cb8ca5efa452f3874b17ed231f22d750d3d665c0d->enter($__internal_68c59d299655bf47b7f87c9cb8ca5efa452f3874b17ed231f22d750d3d665c0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "content/apropos.html.twig"));

        $__internal_f44300b5d161395e4a97dae670180e21da656ab89eb89bf371fdeb081a8dd679 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f44300b5d161395e4a97dae670180e21da656ab89eb89bf371fdeb081a8dd679->enter($__internal_f44300b5d161395e4a97dae670180e21da656ab89eb89bf371fdeb081a8dd679_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "content/apropos.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_68c59d299655bf47b7f87c9cb8ca5efa452f3874b17ed231f22d750d3d665c0d->leave($__internal_68c59d299655bf47b7f87c9cb8ca5efa452f3874b17ed231f22d750d3d665c0d_prof);

        
        $__internal_f44300b5d161395e4a97dae670180e21da656ab89eb89bf371fdeb081a8dd679->leave($__internal_f44300b5d161395e4a97dae670180e21da656ab89eb89bf371fdeb081a8dd679_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_85809fbd9e850a7dbe6bf04d3518c82fcb145727658d8b9d74dd85af072c9904 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85809fbd9e850a7dbe6bf04d3518c82fcb145727658d8b9d74dd85af072c9904->enter($__internal_85809fbd9e850a7dbe6bf04d3518c82fcb145727658d8b9d74dd85af072c9904_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f8deccb50ea10c08f2ae0e87cfd4a41c0f17c411c0604fa6f9b69603e8f2ac66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8deccb50ea10c08f2ae0e87cfd4a41c0f17c411c0604fa6f9b69603e8f2ac66->enter($__internal_f8deccb50ea10c08f2ae0e87cfd4a41c0f17c411c0604fa6f9b69603e8f2ac66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "A propos";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_f8deccb50ea10c08f2ae0e87cfd4a41c0f17c411c0604fa6f9b69603e8f2ac66->leave($__internal_f8deccb50ea10c08f2ae0e87cfd4a41c0f17c411c0604fa6f9b69603e8f2ac66_prof);

        
        $__internal_85809fbd9e850a7dbe6bf04d3518c82fcb145727658d8b9d74dd85af072c9904->leave($__internal_85809fbd9e850a7dbe6bf04d3518c82fcb145727658d8b9d74dd85af072c9904_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_474abc01fbdfa791e2cd72e74a323eaf8229ac88ef79bbdb2ac9d8e122d8fed1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_474abc01fbdfa791e2cd72e74a323eaf8229ac88ef79bbdb2ac9d8e122d8fed1->enter($__internal_474abc01fbdfa791e2cd72e74a323eaf8229ac88ef79bbdb2ac9d8e122d8fed1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_36d8cccd957245be6502c286a697450577a787db44a05b4425b16ce76fbe9411 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36d8cccd957245be6502c286a697450577a787db44a05b4425b16ce76fbe9411->enter($__internal_36d8cccd957245be6502c286a697450577a787db44a05b4425b16ce76fbe9411_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/css/apropos.css"), "html", null, true);
        
        $__internal_36d8cccd957245be6502c286a697450577a787db44a05b4425b16ce76fbe9411->leave($__internal_36d8cccd957245be6502c286a697450577a787db44a05b4425b16ce76fbe9411_prof);

        
        $__internal_474abc01fbdfa791e2cd72e74a323eaf8229ac88ef79bbdb2ac9d8e122d8fed1->leave($__internal_474abc01fbdfa791e2cd72e74a323eaf8229ac88ef79bbdb2ac9d8e122d8fed1_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_6f3c14e38f8a065844d94406ec4a02c1f10fc330301947875240277056aaf65e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f3c14e38f8a065844d94406ec4a02c1f10fc330301947875240277056aaf65e->enter($__internal_6f3c14e38f8a065844d94406ec4a02c1f10fc330301947875240277056aaf65e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d04735842fc1da388cb579aa6db97a90eb4d99b0304b57b0941c39c3c1037e70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d04735842fc1da388cb579aa6db97a90eb4d99b0304b57b0941c39c3c1037e70->enter($__internal_d04735842fc1da388cb579aa6db97a90eb4d99b0304b57b0941c39c3c1037e70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <div class=\"container\">

        <h1 class=\"title\">Apprenez-en plus sur Movee</h1>
        <div class=\"sepa-title\"></div>

        <p class=\"description\">Movee est un Lorem ipsum dolor sit amet, consectetur adipiscing elit. In cursus finibus justo sit amet tempor. Praesent volutpat varius arcu ac tincidunt. Fusce nunc dolor, elementum vel mattis facilisis, vestibulum vel sem. Suspendisse nec velit malesuada, sagittis mauris quis, rhoncus purus. Pellentesque et diam a lorem rhoncus faucibus. Nulla non massa et dolor egestas viverra. Praesent dictum purus vel magna convallis, non eleifend tellus malesuada.</p>
        <p class=\"description\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In cursus finibus justo sit amet tempor.</p>

        <p class=\"author-title\">Movee a été développé par:</p>
        <div class=\"author-container\">
            <div class=\"author\">
                <div class=\"author-avatarcontainer\"><img src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/css/img/moi.png"), "html", null, true);
        echo "\" alt=\"Avatar auteur\" class=\"author-avatar\"></div><p>Jules Dupont</p>
            </div>
        </div>

        <h3 class=\"subtitle\">Comment contribuer à ce projet</h3>
        <div class=\"sepa-subtitle\"></div>

        <p class=\"opensource-toptext\">Vous êtes développeur ou simplement curieux ?</p>
        <a class=\"opensource\" href=\"https://github.ocm\"><img src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/css/img/emoji.png"), "html", null, true);
        echo "\" alt=\"Emoji\" class=\"opensource-emoji\">Movee est 100% open-source !<img class=\"opensource-gitimg\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/css/img/git.png"), "html", null, true);
        echo "\" alt=\"Icône Git\"></a>
        <p class=\"opensource-bottomtext\">Votre aide est donc la bienvenue dans la section Issues <img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/css/img/emoji-issues.png"), "html", null, true);
        echo "\" alt=\"Emoji flaté\" class=\"opensource-bottomtext-emoji\"></p>

        <p class=\"fonctionnement-text\">Movee est un projet Symfony,<img src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/css/img/symfony.png"), "html", null, true);
        echo "\" alt=\"Logo Symfony\" class=\"fonctionnement-symfonyimg fonctionnement-img\"></p>
        <p class=\"fonctionnement-text\">et le concepteur d'itinéraires fonctionne avec la Google Maps API v3<img src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/css/img/gmaps.png"), "html", null, true);
        echo "\" alt=\"Logo Google Maps\" class=\"fonctionnement-gmapsimg fonctionnement-img\"></p>
        <p class=\"fonctionnement-questions\">Si vous avez des questions à propos de l’utilisation de Symfony ou de l’API Google Maps, n’hésitez surtout pas à <a href=\"contact.php\">me les poser</a></p>


    </div>


    <div class=\"footer-separation\"></div>
";
        
        $__internal_d04735842fc1da388cb579aa6db97a90eb4d99b0304b57b0941c39c3c1037e70->leave($__internal_d04735842fc1da388cb579aa6db97a90eb4d99b0304b57b0941c39c3c1037e70_prof);

        
        $__internal_6f3c14e38f8a065844d94406ec4a02c1f10fc330301947875240277056aaf65e->leave($__internal_6f3c14e38f8a065844d94406ec4a02c1f10fc330301947875240277056aaf65e_prof);

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
        return array (  127 => 31,  123 => 30,  118 => 28,  112 => 27,  101 => 19,  88 => 8,  79 => 7,  61 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}A propos{{ parent() }}{% endblock %}

{% block stylesheets %}{{ asset('build/css/apropos.css') }}{% endblock %}

{% block body %}
    <div class=\"container\">

        <h1 class=\"title\">Apprenez-en plus sur Movee</h1>
        <div class=\"sepa-title\"></div>

        <p class=\"description\">Movee est un Lorem ipsum dolor sit amet, consectetur adipiscing elit. In cursus finibus justo sit amet tempor. Praesent volutpat varius arcu ac tincidunt. Fusce nunc dolor, elementum vel mattis facilisis, vestibulum vel sem. Suspendisse nec velit malesuada, sagittis mauris quis, rhoncus purus. Pellentesque et diam a lorem rhoncus faucibus. Nulla non massa et dolor egestas viverra. Praesent dictum purus vel magna convallis, non eleifend tellus malesuada.</p>
        <p class=\"description\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In cursus finibus justo sit amet tempor.</p>

        <p class=\"author-title\">Movee a été développé par:</p>
        <div class=\"author-container\">
            <div class=\"author\">
                <div class=\"author-avatarcontainer\"><img src=\"{{ asset('build/css/img/moi.png') }}\" alt=\"Avatar auteur\" class=\"author-avatar\"></div><p>Jules Dupont</p>
            </div>
        </div>

        <h3 class=\"subtitle\">Comment contribuer à ce projet</h3>
        <div class=\"sepa-subtitle\"></div>

        <p class=\"opensource-toptext\">Vous êtes développeur ou simplement curieux ?</p>
        <a class=\"opensource\" href=\"https://github.ocm\"><img src=\"{{ asset('build/css/img/emoji.png') }}\" alt=\"Emoji\" class=\"opensource-emoji\">Movee est 100% open-source !<img class=\"opensource-gitimg\" src=\"{{ asset('build/css/img/git.png') }}\" alt=\"Icône Git\"></a>
        <p class=\"opensource-bottomtext\">Votre aide est donc la bienvenue dans la section Issues <img src=\"{{ asset('build/css/img/emoji-issues.png') }}\" alt=\"Emoji flaté\" class=\"opensource-bottomtext-emoji\"></p>

        <p class=\"fonctionnement-text\">Movee est un projet Symfony,<img src=\"{{ asset('build/css/img/symfony.png') }}\" alt=\"Logo Symfony\" class=\"fonctionnement-symfonyimg fonctionnement-img\"></p>
        <p class=\"fonctionnement-text\">et le concepteur d'itinéraires fonctionne avec la Google Maps API v3<img src=\"{{ asset('build/css/img/gmaps.png') }}\" alt=\"Logo Google Maps\" class=\"fonctionnement-gmapsimg fonctionnement-img\"></p>
        <p class=\"fonctionnement-questions\">Si vous avez des questions à propos de l’utilisation de Symfony ou de l’API Google Maps, n’hésitez surtout pas à <a href=\"contact.php\">me les poser</a></p>


    </div>


    <div class=\"footer-separation\"></div>
{% endblock %}", "content/apropos.html.twig", "C:\\wamp64\\www\\mapbox\\templates\\content\\apropos.html.twig");
    }
}
