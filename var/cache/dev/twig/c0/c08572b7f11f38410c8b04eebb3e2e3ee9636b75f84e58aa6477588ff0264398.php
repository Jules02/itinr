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
        $__internal_550ca9c77658ae0166d288aaf92fb40768e7d37f3d3329e2d53f7854957a5f41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_550ca9c77658ae0166d288aaf92fb40768e7d37f3d3329e2d53f7854957a5f41->enter($__internal_550ca9c77658ae0166d288aaf92fb40768e7d37f3d3329e2d53f7854957a5f41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "flash_messages.html.twig"));

        $__internal_2d7c8d62789cfad82c57f12eb89e959ebdc49dfe5bbb08c54650a731ef43bd14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d7c8d62789cfad82c57f12eb89e959ebdc49dfe5bbb08c54650a731ef43bd14->enter($__internal_2d7c8d62789cfad82c57f12eb89e959ebdc49dfe5bbb08c54650a731ef43bd14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "flash_messages.html.twig"));

        // line 1
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/flash_messages.css"), "html", null, true);
        echo "\"/>

";
        // line 3
        $this->displayBlock('flash_messages', $context, $blocks);
        // line 13
        echo "
";
        // line 14
        if (array_key_exists("messages", $context)) {
            // line 15
            echo "    <script>
        var container = document.getElementById(\"message-container\");

        function cacherBouton(){
            container.style.display = \"none\";
            alert('hello');
        }

        if(container =! null){
            setTimeout(cacherBouton, 10000);
        }

    </script>
";
        }
        
        $__internal_550ca9c77658ae0166d288aaf92fb40768e7d37f3d3329e2d53f7854957a5f41->leave($__internal_550ca9c77658ae0166d288aaf92fb40768e7d37f3d3329e2d53f7854957a5f41_prof);

        
        $__internal_2d7c8d62789cfad82c57f12eb89e959ebdc49dfe5bbb08c54650a731ef43bd14->leave($__internal_2d7c8d62789cfad82c57f12eb89e959ebdc49dfe5bbb08c54650a731ef43bd14_prof);

    }

    // line 3
    public function block_flash_messages($context, array $blocks = array())
    {
        $__internal_e94d54d1c5470faca6aa0dda0d5757fe7ee4082aa721ca943d888b7a20f2e78a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e94d54d1c5470faca6aa0dda0d5757fe7ee4082aa721ca943d888b7a20f2e78a->enter($__internal_e94d54d1c5470faca6aa0dda0d5757fe7ee4082aa721ca943d888b7a20f2e78a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash_messages"));

        $__internal_e04d1525fd8c65e4bfbd6c0f9dd069d9d1194e09ba144c11d94b3d41322ab759 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e04d1525fd8c65e4bfbd6c0f9dd069d9d1194e09ba144c11d94b3d41322ab759->enter($__internal_e04d1525fd8c65e4bfbd6c0f9dd069d9d1194e09ba144c11d94b3d41322ab759_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash_messages"));

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
        
        $__internal_e04d1525fd8c65e4bfbd6c0f9dd069d9d1194e09ba144c11d94b3d41322ab759->leave($__internal_e04d1525fd8c65e4bfbd6c0f9dd069d9d1194e09ba144c11d94b3d41322ab759_prof);

        
        $__internal_e94d54d1c5470faca6aa0dda0d5757fe7ee4082aa721ca943d888b7a20f2e78a->leave($__internal_e94d54d1c5470faca6aa0dda0d5757fe7ee4082aa721ca943d888b7a20f2e78a_prof);

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
        return array (  95 => 11,  85 => 7,  82 => 6,  77 => 5,  72 => 4,  63 => 3,  39 => 15,  37 => 14,  34 => 13,  32 => 3,  26 => 1,);
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

{% if messages is defined %}
    <script>
        var container = document.getElementById(\"message-container\");

        function cacherBouton(){
            container.style.display = \"none\";
            alert('hello');
        }

        if(container =! null){
            setTimeout(cacherBouton, 10000);
        }

    </script>
{% endif %}", "flash_messages.html.twig", "C:\\wamp64\\www\\mapbox\\templates\\flash_messages.html.twig");
    }
}
