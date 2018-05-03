<?php

/* emails/registred.html.twig */
class __TwigTemplate_7ac9ff545f23ef7ef63f06d9ae54cbe46560e36337a765d9896d363692aa6dfe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e1b43bf2edd39a22a0a1851902850146c7fc007ae84d9e7f5fe33839883fd77a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1b43bf2edd39a22a0a1851902850146c7fc007ae84d9e7f5fe33839883fd77a->enter($__internal_e1b43bf2edd39a22a0a1851902850146c7fc007ae84d9e7f5fe33839883fd77a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "emails/registred.html.twig"));

        $__internal_ca7c310e944f277371c8094b59f459803e9ee3843044f88083bfb0e68adb5a7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca7c310e944f277371c8094b59f459803e9ee3843044f88083bfb0e68adb5a7a->enter($__internal_ca7c310e944f277371c8094b59f459803e9ee3843044f88083bfb0e68adb5a7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "emails/registred.html.twig"));

        // line 1
        echo "<h3>Vous êtes inscrit !</h3>

<a href=\"";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("security_login");
        echo "\">Connectez-vous </a>

Merci !";
        
        $__internal_e1b43bf2edd39a22a0a1851902850146c7fc007ae84d9e7f5fe33839883fd77a->leave($__internal_e1b43bf2edd39a22a0a1851902850146c7fc007ae84d9e7f5fe33839883fd77a_prof);

        
        $__internal_ca7c310e944f277371c8094b59f459803e9ee3843044f88083bfb0e68adb5a7a->leave($__internal_ca7c310e944f277371c8094b59f459803e9ee3843044f88083bfb0e68adb5a7a_prof);

    }

    public function getTemplateName()
    {
        return "emails/registred.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h3>Vous êtes inscrit !</h3>

<a href=\"{{ url('security_login') }}\">Connectez-vous </a>

Merci !", "emails/registred.html.twig", "C:\\wamp64\\www\\mapbox\\templates\\emails\\registred.html.twig");
    }
}
