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
        $__internal_74426e455b85883f963f5b3f96e25e0a45c4e7b5bc7f7868fda059190bbdc25d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74426e455b85883f963f5b3f96e25e0a45c4e7b5bc7f7868fda059190bbdc25d->enter($__internal_74426e455b85883f963f5b3f96e25e0a45c4e7b5bc7f7868fda059190bbdc25d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "content/contact.html.twig"));

        $__internal_2ff536325722687bca614026fe03bb9ca4dd2572b74dd225193ef6dfff81fd3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ff536325722687bca614026fe03bb9ca4dd2572b74dd225193ef6dfff81fd3d->enter($__internal_2ff536325722687bca614026fe03bb9ca4dd2572b74dd225193ef6dfff81fd3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "content/contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_74426e455b85883f963f5b3f96e25e0a45c4e7b5bc7f7868fda059190bbdc25d->leave($__internal_74426e455b85883f963f5b3f96e25e0a45c4e7b5bc7f7868fda059190bbdc25d_prof);

        
        $__internal_2ff536325722687bca614026fe03bb9ca4dd2572b74dd225193ef6dfff81fd3d->leave($__internal_2ff536325722687bca614026fe03bb9ca4dd2572b74dd225193ef6dfff81fd3d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_54b6ec77cc58b7374b2a67ac861ae9cd5da399a6a733f204930352a9335dcd7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54b6ec77cc58b7374b2a67ac861ae9cd5da399a6a733f204930352a9335dcd7e->enter($__internal_54b6ec77cc58b7374b2a67ac861ae9cd5da399a6a733f204930352a9335dcd7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d8c2654fba2703bf694a08ca4f99032db794b038101b973583c50f84610bbaf2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8c2654fba2703bf694a08ca4f99032db794b038101b973583c50f84610bbaf2->enter($__internal_d8c2654fba2703bf694a08ca4f99032db794b038101b973583c50f84610bbaf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Contact";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_d8c2654fba2703bf694a08ca4f99032db794b038101b973583c50f84610bbaf2->leave($__internal_d8c2654fba2703bf694a08ca4f99032db794b038101b973583c50f84610bbaf2_prof);

        
        $__internal_54b6ec77cc58b7374b2a67ac861ae9cd5da399a6a733f204930352a9335dcd7e->leave($__internal_54b6ec77cc58b7374b2a67ac861ae9cd5da399a6a733f204930352a9335dcd7e_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_216b90451a6fcea616e1a2eab25f7c9a8aa585f2b0ed382a78e3f2f5058f5374 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_216b90451a6fcea616e1a2eab25f7c9a8aa585f2b0ed382a78e3f2f5058f5374->enter($__internal_216b90451a6fcea616e1a2eab25f7c9a8aa585f2b0ed382a78e3f2f5058f5374_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_e0e410a54d34c5c20cc991d9f16e122c36c8de804b172658f28c4a6acde1fc4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0e410a54d34c5c20cc991d9f16e122c36c8de804b172658f28c4a6acde1fc4e->enter($__internal_e0e410a54d34c5c20cc991d9f16e122c36c8de804b172658f28c4a6acde1fc4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/contact.css"), "html", null, true);
        
        $__internal_e0e410a54d34c5c20cc991d9f16e122c36c8de804b172658f28c4a6acde1fc4e->leave($__internal_e0e410a54d34c5c20cc991d9f16e122c36c8de804b172658f28c4a6acde1fc4e_prof);

        
        $__internal_216b90451a6fcea616e1a2eab25f7c9a8aa585f2b0ed382a78e3f2f5058f5374->leave($__internal_216b90451a6fcea616e1a2eab25f7c9a8aa585f2b0ed382a78e3f2f5058f5374_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_4d6fc3a2aac3be63bc6e056f47f4ab27636f6aff9910e785dac91c77bbca5d63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d6fc3a2aac3be63bc6e056f47f4ab27636f6aff9910e785dac91c77bbca5d63->enter($__internal_4d6fc3a2aac3be63bc6e056f47f4ab27636f6aff9910e785dac91c77bbca5d63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0f67d60a7d9635cace0b8f56fc0de845556c999cc205819761143c418b357b01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f67d60a7d9635cace0b8f56fc0de845556c999cc205819761143c418b357b01->enter($__internal_0f67d60a7d9635cace0b8f56fc0de845556c999cc205819761143c418b357b01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_0f67d60a7d9635cace0b8f56fc0de845556c999cc205819761143c418b357b01->leave($__internal_0f67d60a7d9635cace0b8f56fc0de845556c999cc205819761143c418b357b01_prof);

        
        $__internal_4d6fc3a2aac3be63bc6e056f47f4ab27636f6aff9910e785dac91c77bbca5d63->leave($__internal_4d6fc3a2aac3be63bc6e056f47f4ab27636f6aff9910e785dac91c77bbca5d63_prof);

    }

    // line 28
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d0fd6f036b62264589d3ac96f265abaa6e5b33ae861043ec542d6dbb7a3a4a67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0fd6f036b62264589d3ac96f265abaa6e5b33ae861043ec542d6dbb7a3a4a67->enter($__internal_d0fd6f036b62264589d3ac96f265abaa6e5b33ae861043ec542d6dbb7a3a4a67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_7df901082ca2dedd4756605e9288606106c2a4f3c8163a195910eac920daeaa2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7df901082ca2dedd4756605e9288606106c2a4f3c8163a195910eac920daeaa2->enter($__internal_7df901082ca2dedd4756605e9288606106c2a4f3c8163a195910eac920daeaa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_7df901082ca2dedd4756605e9288606106c2a4f3c8163a195910eac920daeaa2->leave($__internal_7df901082ca2dedd4756605e9288606106c2a4f3c8163a195910eac920daeaa2_prof);

        
        $__internal_d0fd6f036b62264589d3ac96f265abaa6e5b33ae861043ec542d6dbb7a3a4a67->leave($__internal_d0fd6f036b62264589d3ac96f265abaa6e5b33ae861043ec542d6dbb7a3a4a67_prof);

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
        return array (  137 => 28,  124 => 24,  120 => 23,  116 => 22,  112 => 21,  104 => 16,  100 => 15,  92 => 9,  89 => 8,  80 => 7,  62 => 5,  43 => 3,  11 => 1,);
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
{% endblock %}", "content/contact.html.twig", "C:\\wamp64\\www\\mapbox\\templates\\content\\contact.html.twig");
    }
}
