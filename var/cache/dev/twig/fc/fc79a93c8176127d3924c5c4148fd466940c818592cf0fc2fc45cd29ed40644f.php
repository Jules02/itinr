<?php

/* content/contact.html.twig */
class __TwigTemplate_07bd450265fee450bac34dfb0120e732d97d72f86359ecec2cf6cad7f767d22f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "content/contact.html.twig", 1);
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
        $__internal_902939a53f2f6398904fe4e7fe3c28bf729bc86d3b8e71689f3b6d6957b08f71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_902939a53f2f6398904fe4e7fe3c28bf729bc86d3b8e71689f3b6d6957b08f71->enter($__internal_902939a53f2f6398904fe4e7fe3c28bf729bc86d3b8e71689f3b6d6957b08f71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "content/contact.html.twig"));

        $__internal_68b897ab5ef36153cd39d4d84f7a33fd7ee7b6066c734aa8775e1306750cdf8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68b897ab5ef36153cd39d4d84f7a33fd7ee7b6066c734aa8775e1306750cdf8d->enter($__internal_68b897ab5ef36153cd39d4d84f7a33fd7ee7b6066c734aa8775e1306750cdf8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "content/contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_902939a53f2f6398904fe4e7fe3c28bf729bc86d3b8e71689f3b6d6957b08f71->leave($__internal_902939a53f2f6398904fe4e7fe3c28bf729bc86d3b8e71689f3b6d6957b08f71_prof);

        
        $__internal_68b897ab5ef36153cd39d4d84f7a33fd7ee7b6066c734aa8775e1306750cdf8d->leave($__internal_68b897ab5ef36153cd39d4d84f7a33fd7ee7b6066c734aa8775e1306750cdf8d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1563cce664b97bccc74456554ec47215324bffefddfaf78279eb6fc6b4754f5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1563cce664b97bccc74456554ec47215324bffefddfaf78279eb6fc6b4754f5b->enter($__internal_1563cce664b97bccc74456554ec47215324bffefddfaf78279eb6fc6b4754f5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_36ae62bef530cca7449359eeea417758d6d8efa126a893e0ad8c7d44ee48f50d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36ae62bef530cca7449359eeea417758d6d8efa126a893e0ad8c7d44ee48f50d->enter($__internal_36ae62bef530cca7449359eeea417758d6d8efa126a893e0ad8c7d44ee48f50d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Contact";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_36ae62bef530cca7449359eeea417758d6d8efa126a893e0ad8c7d44ee48f50d->leave($__internal_36ae62bef530cca7449359eeea417758d6d8efa126a893e0ad8c7d44ee48f50d_prof);

        
        $__internal_1563cce664b97bccc74456554ec47215324bffefddfaf78279eb6fc6b4754f5b->leave($__internal_1563cce664b97bccc74456554ec47215324bffefddfaf78279eb6fc6b4754f5b_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_20b60618f4ae1ba3c25b6383e476580f5610b7592287f46576224fac18ed4f7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20b60618f4ae1ba3c25b6383e476580f5610b7592287f46576224fac18ed4f7a->enter($__internal_20b60618f4ae1ba3c25b6383e476580f5610b7592287f46576224fac18ed4f7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_965ef8364827d118d1c120f65dfd936820a4565593d7d8545b9cbddb245e0e2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_965ef8364827d118d1c120f65dfd936820a4565593d7d8545b9cbddb245e0e2f->enter($__internal_965ef8364827d118d1c120f65dfd936820a4565593d7d8545b9cbddb245e0e2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/contact.css"), "html", null, true);
        
        $__internal_965ef8364827d118d1c120f65dfd936820a4565593d7d8545b9cbddb245e0e2f->leave($__internal_965ef8364827d118d1c120f65dfd936820a4565593d7d8545b9cbddb245e0e2f_prof);

        
        $__internal_20b60618f4ae1ba3c25b6383e476580f5610b7592287f46576224fac18ed4f7a->leave($__internal_20b60618f4ae1ba3c25b6383e476580f5610b7592287f46576224fac18ed4f7a_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_88309fe92c0701ab70f9c82e79f1a7dcd6818dfa2572e434d4d4bad26ef3262f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88309fe92c0701ab70f9c82e79f1a7dcd6818dfa2572e434d4d4bad26ef3262f->enter($__internal_88309fe92c0701ab70f9c82e79f1a7dcd6818dfa2572e434d4d4bad26ef3262f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_969a58d43f772bc729b6c44510b5b5c2d8e8c70fed9edf28a250b342786c5793 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_969a58d43f772bc729b6c44510b5b5c2d8e8c70fed9edf28a250b342786c5793->enter($__internal_969a58d43f772bc729b6c44510b5b5c2d8e8c70fed9edf28a250b342786c5793_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    ";
        $this->loadTemplate("flash_messages.html.twig", "content/contact.html.twig", 8)->display($context);
        // line 9
        echo "
        <h1 class=\"titre margin-left\">Contactez-nous</h1>
        <p class=\"sous-titre margin-left\">Une question, une suggestion ? Nous vous répondrons avec plaisir 😉 </p>

        <div class=\"titre-separation margin-left\"></div>

        <p class=\"texte texte1 texte-flex margin-left\">Envoyez nous votre message sur<a class=\"texte1-facebook texte-flex\" href=\"facebook.com\">Facebook<img class=\"texte-img\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/facebookcontact.png"), "html", null, true);
        echo "\"/></a></p>
        <p class=\"texte texte2 texte-flex margin-left\">Par mail : <a class=\"texte2-email texte-flex\" href=\"mailto:contact@movee.fr\">contact@movee.fr <img class=\"texte-img\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/envelope(1).png"), "html", null, true);
        echo "\"/></a></p>

        <p class=\"texte texte3 margin-left\">Ou simplement en remplissant ce formulaire :</p>

        <div class=\"form-container\">
           ";
        // line 21
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 21, $this->getSourceContext()); })()), 'form_start');
        echo "
           ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 22, $this->getSourceContext()); })()), 'widget');
        echo "
           <button class=\"submit-input\">Envoyer<img src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/envoyercontact.png"), "html", null, true);
        echo "\" class=\"submit-input-img\"></button>
           ";
        // line 24
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 24, $this->getSourceContext()); })()), 'form_end');
        echo "
        </div>
";
        
        $__internal_969a58d43f772bc729b6c44510b5b5c2d8e8c70fed9edf28a250b342786c5793->leave($__internal_969a58d43f772bc729b6c44510b5b5c2d8e8c70fed9edf28a250b342786c5793_prof);

        
        $__internal_88309fe92c0701ab70f9c82e79f1a7dcd6818dfa2572e434d4d4bad26ef3262f->leave($__internal_88309fe92c0701ab70f9c82e79f1a7dcd6818dfa2572e434d4d4bad26ef3262f_prof);

    }

    // line 28
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8447f2dde1f55bf11628dfddbf3b78447f68a898de5e57516e42e1c635cdb62e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8447f2dde1f55bf11628dfddbf3b78447f68a898de5e57516e42e1c635cdb62e->enter($__internal_8447f2dde1f55bf11628dfddbf3b78447f68a898de5e57516e42e1c635cdb62e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_c7444bd7ab488240c12b6806ee8f8cdd224101210a722f96bac5ae9b09d305e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7444bd7ab488240c12b6806ee8f8cdd224101210a722f96bac5ae9b09d305e1->enter($__internal_c7444bd7ab488240c12b6806ee8f8cdd224101210a722f96bac5ae9b09d305e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 29
        echo "<script>
    /*var bouton = document.getElementById('submit');

    var windowWidth = window.innerWidth;
    var tailleNb = windowWidth - 90;
    var tailleVoulu = tailleNb + 'px';

    bouton.style.width = tailleVoulu;*/
</script>
";
        
        $__internal_c7444bd7ab488240c12b6806ee8f8cdd224101210a722f96bac5ae9b09d305e1->leave($__internal_c7444bd7ab488240c12b6806ee8f8cdd224101210a722f96bac5ae9b09d305e1_prof);

        
        $__internal_8447f2dde1f55bf11628dfddbf3b78447f68a898de5e57516e42e1c635cdb62e->leave($__internal_8447f2dde1f55bf11628dfddbf3b78447f68a898de5e57516e42e1c635cdb62e_prof);

    }

    public function getTemplateName()
    {
        return "content/contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 29,  137 => 28,  124 => 24,  120 => 23,  116 => 22,  112 => 21,  104 => 16,  100 => 15,  92 => 9,  89 => 8,  80 => 7,  62 => 5,  43 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Contact{{ parent() }}{% endblock %}

{% block stylesheets %}{{ asset('build/contact.css') }}{% endblock %}

{% block body %}
    {% include 'flash_messages.html.twig' %}

        <h1 class=\"titre margin-left\">Contactez-nous</h1>
        <p class=\"sous-titre margin-left\">Une question, une suggestion ? Nous vous répondrons avec plaisir 😉 </p>

        <div class=\"titre-separation margin-left\"></div>

        <p class=\"texte texte1 texte-flex margin-left\">Envoyez nous votre message sur<a class=\"texte1-facebook texte-flex\" href=\"facebook.com\">Facebook<img class=\"texte-img\" src=\"{{ asset('images/facebookcontact.png') }}\"/></a></p>
        <p class=\"texte texte2 texte-flex margin-left\">Par mail : <a class=\"texte2-email texte-flex\" href=\"mailto:contact@movee.fr\">contact@movee.fr <img class=\"texte-img\" src=\"{{ asset('images/envelope(1).png') }}\"/></a></p>

        <p class=\"texte texte3 margin-left\">Ou simplement en remplissant ce formulaire :</p>

        <div class=\"form-container\">
           {{ form_start(form) }}
           {{ form_widget(form) }}
           <button class=\"submit-input\">Envoyer<img src=\"{{ asset(\"images/envoyercontact.png\") }}\" class=\"submit-input-img\"></button>
           {{ form_end(form) }}
        </div>
{% endblock %}

{% block javascripts %}
<script>
    /*var bouton = document.getElementById('submit');

    var windowWidth = window.innerWidth;
    var tailleNb = windowWidth - 90;
    var tailleVoulu = tailleNb + 'px';

    bouton.style.width = tailleVoulu;*/
</script>
{% endblock %}", "content/contact.html.twig", "C:\\wamp64\\www\\mapbox\\templates\\content\\contact.html.twig");
    }
}
