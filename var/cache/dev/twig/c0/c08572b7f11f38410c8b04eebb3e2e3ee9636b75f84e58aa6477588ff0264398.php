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
        $__internal_0b953c213b58bdfad5123bca448bc91dc58d867364d227e7bcb4fbcd5036855f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b953c213b58bdfad5123bca448bc91dc58d867364d227e7bcb4fbcd5036855f->enter($__internal_0b953c213b58bdfad5123bca448bc91dc58d867364d227e7bcb4fbcd5036855f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "flash_messages.html.twig"));

        $__internal_271976b5ffb1e40e78710b6c52e9debc8b5d4e3198e75f5aaf60600466eb7bc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_271976b5ffb1e40e78710b6c52e9debc8b5d4e3198e75f5aaf60600466eb7bc2->enter($__internal_271976b5ffb1e40e78710b6c52e9debc8b5d4e3198e75f5aaf60600466eb7bc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "flash_messages.html.twig"));

        // line 1
        $this->displayBlock('flash_messages', $context, $blocks);
        
        $__internal_0b953c213b58bdfad5123bca448bc91dc58d867364d227e7bcb4fbcd5036855f->leave($__internal_0b953c213b58bdfad5123bca448bc91dc58d867364d227e7bcb4fbcd5036855f_prof);

        
        $__internal_271976b5ffb1e40e78710b6c52e9debc8b5d4e3198e75f5aaf60600466eb7bc2->leave($__internal_271976b5ffb1e40e78710b6c52e9debc8b5d4e3198e75f5aaf60600466eb7bc2_prof);

    }

    public function block_flash_messages($context, array $blocks = array())
    {
        $__internal_faf2c77d01fa3d687125097f9975ce93c9c6b648d921858b41d0c4e2294d0f7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_faf2c77d01fa3d687125097f9975ce93c9c6b648d921858b41d0c4e2294d0f7e->enter($__internal_faf2c77d01fa3d687125097f9975ce93c9c6b648d921858b41d0c4e2294d0f7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash_messages"));

        $__internal_63313902ff3ffacc4d87c643c0144d1bd40c0aa2e8ed0a37a14381e7f4a75410 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63313902ff3ffacc4d87c643c0144d1bd40c0aa2e8ed0a37a14381e7f4a75410->enter($__internal_63313902ff3ffacc4d87c643c0144d1bd40c0aa2e8ed0a37a14381e7f4a75410_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash_messages"));

        // line 2
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 2, $this->getSourceContext()); })()), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 3
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 4
                echo "                <div id=\"message-container\">
                    <p class=\"message\">";
                // line 5
                echo $context["message"];
                echo "</p>
                    <button id=\"hideButton\" onclick=\"cacherBouton()\"></button>
                </div>

                <script>
                    function cacherBouton(){
                        document.getElementById(\"message-container\").style.display = \"none\";
                    }

                    setTimeout(cacherBouton, 10000);

                </script>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_63313902ff3ffacc4d87c643c0144d1bd40c0aa2e8ed0a37a14381e7f4a75410->leave($__internal_63313902ff3ffacc4d87c643c0144d1bd40c0aa2e8ed0a37a14381e7f4a75410_prof);

        
        $__internal_faf2c77d01fa3d687125097f9975ce93c9c6b648d921858b41d0c4e2294d0f7e->leave($__internal_faf2c77d01fa3d687125097f9975ce93c9c6b648d921858b41d0c4e2294d0f7e_prof);

    }

    public function getTemplateName()
    {
        return "flash_messages.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  76 => 18,  57 => 5,  54 => 4,  49 => 3,  44 => 2,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block flash_messages %}
        {% for type, messages in app.session.flashbag.all() %}
            {% for message in messages %}
                <div id=\"message-container\">
                    <p class=\"message\">{{ message | raw }}</p>
                    <button id=\"hideButton\" onclick=\"cacherBouton()\"></button>
                </div>

                <script>
                    function cacherBouton(){
                        document.getElementById(\"message-container\").style.display = \"none\";
                    }

                    setTimeout(cacherBouton, 10000);

                </script>
            {% endfor %}
        {% endfor %}
{% endblock %}
", "flash_messages.html.twig", "C:\\wamp64\\www\\mapbox\\templates\\flash_messages.html.twig");
    }
}
