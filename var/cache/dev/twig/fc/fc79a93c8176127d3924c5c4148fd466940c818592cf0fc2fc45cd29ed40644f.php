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
        $__internal_8d1b3b3dadcea4916923fd6b0712aff0dbb457452da27060ed21852e3aaaf36c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d1b3b3dadcea4916923fd6b0712aff0dbb457452da27060ed21852e3aaaf36c->enter($__internal_8d1b3b3dadcea4916923fd6b0712aff0dbb457452da27060ed21852e3aaaf36c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "content/contact.html.twig"));

        $__internal_5b541e708bf375f35bd441cd1035147f24c7b53363e088ea3558ccefd399a961 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b541e708bf375f35bd441cd1035147f24c7b53363e088ea3558ccefd399a961->enter($__internal_5b541e708bf375f35bd441cd1035147f24c7b53363e088ea3558ccefd399a961_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "content/contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d1b3b3dadcea4916923fd6b0712aff0dbb457452da27060ed21852e3aaaf36c->leave($__internal_8d1b3b3dadcea4916923fd6b0712aff0dbb457452da27060ed21852e3aaaf36c_prof);

        
        $__internal_5b541e708bf375f35bd441cd1035147f24c7b53363e088ea3558ccefd399a961->leave($__internal_5b541e708bf375f35bd441cd1035147f24c7b53363e088ea3558ccefd399a961_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9e5a8664669652b03268af44d032940000746fe5277b62456cb9ef4bb77dd42f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e5a8664669652b03268af44d032940000746fe5277b62456cb9ef4bb77dd42f->enter($__internal_9e5a8664669652b03268af44d032940000746fe5277b62456cb9ef4bb77dd42f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0b0c436f326798f000ef214510e8bd941b9adb512a4757324df9f2bee7cd5106 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b0c436f326798f000ef214510e8bd941b9adb512a4757324df9f2bee7cd5106->enter($__internal_0b0c436f326798f000ef214510e8bd941b9adb512a4757324df9f2bee7cd5106_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Contact";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_0b0c436f326798f000ef214510e8bd941b9adb512a4757324df9f2bee7cd5106->leave($__internal_0b0c436f326798f000ef214510e8bd941b9adb512a4757324df9f2bee7cd5106_prof);

        
        $__internal_9e5a8664669652b03268af44d032940000746fe5277b62456cb9ef4bb77dd42f->leave($__internal_9e5a8664669652b03268af44d032940000746fe5277b62456cb9ef4bb77dd42f_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_93f78ef34e42cc8dd2803b1a219b9fda789ee89153596de890f4d6acaba46dfd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93f78ef34e42cc8dd2803b1a219b9fda789ee89153596de890f4d6acaba46dfd->enter($__internal_93f78ef34e42cc8dd2803b1a219b9fda789ee89153596de890f4d6acaba46dfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_290fbccc786ddf3949092501561f2046391083204c177095696923f997748f3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_290fbccc786ddf3949092501561f2046391083204c177095696923f997748f3f->enter($__internal_290fbccc786ddf3949092501561f2046391083204c177095696923f997748f3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/contact.css"), "html", null, true);
        
        $__internal_290fbccc786ddf3949092501561f2046391083204c177095696923f997748f3f->leave($__internal_290fbccc786ddf3949092501561f2046391083204c177095696923f997748f3f_prof);

        
        $__internal_93f78ef34e42cc8dd2803b1a219b9fda789ee89153596de890f4d6acaba46dfd->leave($__internal_93f78ef34e42cc8dd2803b1a219b9fda789ee89153596de890f4d6acaba46dfd_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_fac376f289474a5111012658de503832aaacd43c749243ce8369d3131af8702a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fac376f289474a5111012658de503832aaacd43c749243ce8369d3131af8702a->enter($__internal_fac376f289474a5111012658de503832aaacd43c749243ce8369d3131af8702a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_aec0ee69548b1a16a5a19e431f4a76e75cdcb8a25ffc0aff13df679310e298ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aec0ee69548b1a16a5a19e431f4a76e75cdcb8a25ffc0aff13df679310e298ef->enter($__internal_aec0ee69548b1a16a5a19e431f4a76e75cdcb8a25ffc0aff13df679310e298ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_aec0ee69548b1a16a5a19e431f4a76e75cdcb8a25ffc0aff13df679310e298ef->leave($__internal_aec0ee69548b1a16a5a19e431f4a76e75cdcb8a25ffc0aff13df679310e298ef_prof);

        
        $__internal_fac376f289474a5111012658de503832aaacd43c749243ce8369d3131af8702a->leave($__internal_fac376f289474a5111012658de503832aaacd43c749243ce8369d3131af8702a_prof);

    }

    // line 28
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f81ffdddddb6c91c46d37c984e4ac2c633bf46347ce6a9fa07dbb6ff8b147aba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f81ffdddddb6c91c46d37c984e4ac2c633bf46347ce6a9fa07dbb6ff8b147aba->enter($__internal_f81ffdddddb6c91c46d37c984e4ac2c633bf46347ce6a9fa07dbb6ff8b147aba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_9285857fcfbf34e465a5b9ce784be684cbebe4b73f2144b85c7f0d2d77b915e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9285857fcfbf34e465a5b9ce784be684cbebe4b73f2144b85c7f0d2d77b915e0->enter($__internal_9285857fcfbf34e465a5b9ce784be684cbebe4b73f2144b85c7f0d2d77b915e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 29
        echo "<script>
    /*var bouton = document.getElementById('submit');

    var windowWidth = window.innerWidth;
    var tailleNb = windowWidth - 90;
    var tailleVoulu = tailleNb + 'px';

    bouton.style.width = tailleVoulu;*/
</script>
";
        
        $__internal_9285857fcfbf34e465a5b9ce784be684cbebe4b73f2144b85c7f0d2d77b915e0->leave($__internal_9285857fcfbf34e465a5b9ce784be684cbebe4b73f2144b85c7f0d2d77b915e0_prof);

        
        $__internal_f81ffdddddb6c91c46d37c984e4ac2c633bf46347ce6a9fa07dbb6ff8b147aba->leave($__internal_f81ffdddddb6c91c46d37c984e4ac2c633bf46347ce6a9fa07dbb6ff8b147aba_prof);

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
