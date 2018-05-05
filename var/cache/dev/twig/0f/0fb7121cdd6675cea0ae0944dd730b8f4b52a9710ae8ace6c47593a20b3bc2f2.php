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
        $__internal_981f478058179598f8f7285f334bc648955821872c77445677018df35affc949 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_981f478058179598f8f7285f334bc648955821872c77445677018df35affc949->enter($__internal_981f478058179598f8f7285f334bc648955821872c77445677018df35affc949_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "content/apropos.html.twig"));

        $__internal_7de78197d4159725e8a6c5e869fd632c6bc61f7cc111e11eac35f7e80988c0b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7de78197d4159725e8a6c5e869fd632c6bc61f7cc111e11eac35f7e80988c0b5->enter($__internal_7de78197d4159725e8a6c5e869fd632c6bc61f7cc111e11eac35f7e80988c0b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "content/apropos.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_981f478058179598f8f7285f334bc648955821872c77445677018df35affc949->leave($__internal_981f478058179598f8f7285f334bc648955821872c77445677018df35affc949_prof);

        
        $__internal_7de78197d4159725e8a6c5e869fd632c6bc61f7cc111e11eac35f7e80988c0b5->leave($__internal_7de78197d4159725e8a6c5e869fd632c6bc61f7cc111e11eac35f7e80988c0b5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b7231aabdfce760c7dd4ff3cae4405bd87c410e60fdf62499254c7f3b2466022 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7231aabdfce760c7dd4ff3cae4405bd87c410e60fdf62499254c7f3b2466022->enter($__internal_b7231aabdfce760c7dd4ff3cae4405bd87c410e60fdf62499254c7f3b2466022_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c992bb8c8665286a398e5a68a9d991e5d3f35667d806d11bbd6859bbeaf0a40a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c992bb8c8665286a398e5a68a9d991e5d3f35667d806d11bbd6859bbeaf0a40a->enter($__internal_c992bb8c8665286a398e5a68a9d991e5d3f35667d806d11bbd6859bbeaf0a40a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "A propos";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_c992bb8c8665286a398e5a68a9d991e5d3f35667d806d11bbd6859bbeaf0a40a->leave($__internal_c992bb8c8665286a398e5a68a9d991e5d3f35667d806d11bbd6859bbeaf0a40a_prof);

        
        $__internal_b7231aabdfce760c7dd4ff3cae4405bd87c410e60fdf62499254c7f3b2466022->leave($__internal_b7231aabdfce760c7dd4ff3cae4405bd87c410e60fdf62499254c7f3b2466022_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_92a3817e2126385b48abb62795ea6b7766647d7f61b10f2c78cddc0bc070a2c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92a3817e2126385b48abb62795ea6b7766647d7f61b10f2c78cddc0bc070a2c3->enter($__internal_92a3817e2126385b48abb62795ea6b7766647d7f61b10f2c78cddc0bc070a2c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_9a69c4c2de8dd6456455790299ca7d17437ed23cbcf9104d914b03568253e867 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a69c4c2de8dd6456455790299ca7d17437ed23cbcf9104d914b03568253e867->enter($__internal_9a69c4c2de8dd6456455790299ca7d17437ed23cbcf9104d914b03568253e867_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/apropos.css"), "html", null, true);
        
        $__internal_9a69c4c2de8dd6456455790299ca7d17437ed23cbcf9104d914b03568253e867->leave($__internal_9a69c4c2de8dd6456455790299ca7d17437ed23cbcf9104d914b03568253e867_prof);

        
        $__internal_92a3817e2126385b48abb62795ea6b7766647d7f61b10f2c78cddc0bc070a2c3->leave($__internal_92a3817e2126385b48abb62795ea6b7766647d7f61b10f2c78cddc0bc070a2c3_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_8c5bc6aad7876f31942beda0c9a71e8948087478a622560a88a8360f6d6ef406 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c5bc6aad7876f31942beda0c9a71e8948087478a622560a88a8360f6d6ef406->enter($__internal_8c5bc6aad7876f31942beda0c9a71e8948087478a622560a88a8360f6d6ef406_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_41b6c200184cb6987ef7d1ab5d506905c2f5d714646c90f48ef1db9719ed58cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41b6c200184cb6987ef7d1ab5d506905c2f5d714646c90f48ef1db9719ed58cd->enter($__internal_41b6c200184cb6987ef7d1ab5d506905c2f5d714646c90f48ef1db9719ed58cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_41b6c200184cb6987ef7d1ab5d506905c2f5d714646c90f48ef1db9719ed58cd->leave($__internal_41b6c200184cb6987ef7d1ab5d506905c2f5d714646c90f48ef1db9719ed58cd_prof);

        
        $__internal_8c5bc6aad7876f31942beda0c9a71e8948087478a622560a88a8360f6d6ef406->leave($__internal_8c5bc6aad7876f31942beda0c9a71e8948087478a622560a88a8360f6d6ef406_prof);

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
