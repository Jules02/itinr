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
        $__internal_0a3188bac925d94c15592dd216944790e9025261dbf49daf74b2191e9f50c606 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a3188bac925d94c15592dd216944790e9025261dbf49daf74b2191e9f50c606->enter($__internal_0a3188bac925d94c15592dd216944790e9025261dbf49daf74b2191e9f50c606_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "flash_messages.html.twig"));

        $__internal_b8853dcc488f44c930a44c4d3aaa1ff94f9f04d4e3b88ab91bc72115dda72ea1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8853dcc488f44c930a44c4d3aaa1ff94f9f04d4e3b88ab91bc72115dda72ea1->enter($__internal_b8853dcc488f44c930a44c4d3aaa1ff94f9f04d4e3b88ab91bc72115dda72ea1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "flash_messages.html.twig"));

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
    /*var hideButton = document.getElementById(\"hideButton\");
    var container = document.getElementById(\"message-container\");

    function cacherBouton(){
        container.style.display = \"none\";
        alert('hello');
    }

    if(container =! null){
        setTimeout(cacherBouton, 10000);
    }*/

</script>";
        
        $__internal_0a3188bac925d94c15592dd216944790e9025261dbf49daf74b2191e9f50c606->leave($__internal_0a3188bac925d94c15592dd216944790e9025261dbf49daf74b2191e9f50c606_prof);

        
        $__internal_b8853dcc488f44c930a44c4d3aaa1ff94f9f04d4e3b88ab91bc72115dda72ea1->leave($__internal_b8853dcc488f44c930a44c4d3aaa1ff94f9f04d4e3b88ab91bc72115dda72ea1_prof);

    }

    // line 3
    public function block_flash_messages($context, array $blocks = array())
    {
        $__internal_1a93ae769350b16a2e2e42a524a70e25cfecefeb45f75e42569db7e03234ed94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a93ae769350b16a2e2e42a524a70e25cfecefeb45f75e42569db7e03234ed94->enter($__internal_1a93ae769350b16a2e2e42a524a70e25cfecefeb45f75e42569db7e03234ed94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash_messages"));

        $__internal_cd1d155f80bb41c0129d36b823509f69903a1bf0249724a3d34220093e8f6346 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd1d155f80bb41c0129d36b823509f69903a1bf0249724a3d34220093e8f6346->enter($__internal_cd1d155f80bb41c0129d36b823509f69903a1bf0249724a3d34220093e8f6346_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash_messages"));

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
                echo "            <div id=\"message-container\">
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
        
        $__internal_cd1d155f80bb41c0129d36b823509f69903a1bf0249724a3d34220093e8f6346->leave($__internal_cd1d155f80bb41c0129d36b823509f69903a1bf0249724a3d34220093e8f6346_prof);

        
        $__internal_1a93ae769350b16a2e2e42a524a70e25cfecefeb45f75e42569db7e03234ed94->leave($__internal_1a93ae769350b16a2e2e42a524a70e25cfecefeb45f75e42569db7e03234ed94_prof);

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
        return array (  90 => 11,  80 => 7,  77 => 6,  72 => 5,  67 => 4,  58 => 3,  34 => 13,  32 => 3,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<link rel=\"stylesheet\" href=\"{{ asset('build/flash_messages.css') }}\"/>

{% block flash_messages %}
    {% for type, messages in app.session.flashbag.all() %}
        {% for message in messages %}
            <div id=\"message-container\">
                <p class=\"message\">{{ message | raw }}</p>
                <button id=\"hideButton\" onclick=\"cacherBouton()\"></button>
            </div>
        {% endfor %}
    {% endfor %}
{% endblock %}

<script>
    /*var hideButton = document.getElementById(\"hideButton\");
    var container = document.getElementById(\"message-container\");

    function cacherBouton(){
        container.style.display = \"none\";
        alert('hello');
    }

    if(container =! null){
        setTimeout(cacherBouton, 10000);
    }*/

</script>", "flash_messages.html.twig", "C:\\wamp64\\www\\mapbox\\templates\\flash_messages.html.twig");
    }
}
