<?php

/* flash_messages.html.twig */
class __TwigTemplate_7e0d5a199a8eef7dd54934c307a288fa72992200942a05c0de37d0c154541674 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'flash_messages' => array($this, 'block_flash_messages'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f30a8c6d97e1f64bf78f7a4e88890a82af9a1907dfc8107e93866adc15f1fb67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f30a8c6d97e1f64bf78f7a4e88890a82af9a1907dfc8107e93866adc15f1fb67->enter($__internal_f30a8c6d97e1f64bf78f7a4e88890a82af9a1907dfc8107e93866adc15f1fb67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "flash_messages.html.twig"));

        $__internal_1831fb648fde9a045714bd737ec1db036283dec21b4d692f332644a353a0e5ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1831fb648fde9a045714bd737ec1db036283dec21b4d692f332644a353a0e5ec->enter($__internal_1831fb648fde9a045714bd737ec1db036283dec21b4d692f332644a353a0e5ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "flash_messages.html.twig"));

        // line 1
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/flash_messages.css"), "html", null, true);
        echo "\"/>

";
        // line 3
        $this->displayBlock('flash_messages', $context, $blocks);
        // line 13
        echo "
<script>
    var hideButton = document.getElementById(\"hideButton\");
    var container = document.getElementById(\"container\");

    function cacherBouton(){
        container.style.display = \"none\";
    };

    setTimeout(cacherBouton, 10000);

</script>";
        
        $__internal_f30a8c6d97e1f64bf78f7a4e88890a82af9a1907dfc8107e93866adc15f1fb67->leave($__internal_f30a8c6d97e1f64bf78f7a4e88890a82af9a1907dfc8107e93866adc15f1fb67_prof);

        
        $__internal_1831fb648fde9a045714bd737ec1db036283dec21b4d692f332644a353a0e5ec->leave($__internal_1831fb648fde9a045714bd737ec1db036283dec21b4d692f332644a353a0e5ec_prof);

    }

    // line 3
    public function block_flash_messages($context, array $blocks = array())
    {
        $__internal_f59f0b66fe4320ac317c6fe5d624346186425cf2a568b747a3bac7d23562b359 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f59f0b66fe4320ac317c6fe5d624346186425cf2a568b747a3bac7d23562b359->enter($__internal_f59f0b66fe4320ac317c6fe5d624346186425cf2a568b747a3bac7d23562b359_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash_messages"));

        $__internal_7e2ada3a6723913a9d2440a63ab14a8a92e38dbaf17ca53cc1bd7f71427cb8dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e2ada3a6723913a9d2440a63ab14a8a92e38dbaf17ca53cc1bd7f71427cb8dc->enter($__internal_7e2ada3a6723913a9d2440a63ab14a8a92e38dbaf17ca53cc1bd7f71427cb8dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash_messages"));

        // line 4
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 4, $this->getSourceContext()); })()), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 5
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 6
                echo "            <div id=\"container\">
                <p class=\"message\">";
                // line 7
                echo $context["message"];
                echo "</p>
                <button id=\"hideButton\" onclick=\"cacherBouton()\"></button>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_7e2ada3a6723913a9d2440a63ab14a8a92e38dbaf17ca53cc1bd7f71427cb8dc->leave($__internal_7e2ada3a6723913a9d2440a63ab14a8a92e38dbaf17ca53cc1bd7f71427cb8dc_prof);

        
        $__internal_f59f0b66fe4320ac317c6fe5d624346186425cf2a568b747a3bac7d23562b359->leave($__internal_f59f0b66fe4320ac317c6fe5d624346186425cf2a568b747a3bac7d23562b359_prof);

    }

    public function getTemplateName()
    {
        return "flash_messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 11,  77 => 7,  74 => 6,  69 => 5,  64 => 4,  55 => 3,  34 => 13,  32 => 3,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<link rel=\"stylesheet\" href=\"{{ asset('build/flash_messages.css') }}\"/>

{% block flash_messages %}
    {% for type, messages in app.session.flashbag.all() %}
        {% for message in messages %}
            <div id=\"container\">
                <p class=\"message\">{{ message | raw }}</p>
                <button id=\"hideButton\" onclick=\"cacherBouton()\"></button>
            </div>
        {% endfor %}
    {% endfor %}
{% endblock %}

<script>
    var hideButton = document.getElementById(\"hideButton\");
    var container = document.getElementById(\"container\");

    function cacherBouton(){
        container.style.display = \"none\";
    };

    setTimeout(cacherBouton, 10000);

</script>", "flash_messages.html.twig", "C:\\wamp64\\www\\mapbox\\templates\\flash_messages.html.twig");
    }
}
