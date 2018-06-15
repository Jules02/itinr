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
        $__internal_74d79be8d15494cbb5f9efae6601e39fdf74d7f19b6eb5fae32457e618f77e3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74d79be8d15494cbb5f9efae6601e39fdf74d7f19b6eb5fae32457e618f77e3d->enter($__internal_74d79be8d15494cbb5f9efae6601e39fdf74d7f19b6eb5fae32457e618f77e3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "flash_messages.html.twig"));

        $__internal_cf603204745ccdd2bfa215e6ba07fe436b9702ebf8ec0ed29d77e835ab29a51c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf603204745ccdd2bfa215e6ba07fe436b9702ebf8ec0ed29d77e835ab29a51c->enter($__internal_cf603204745ccdd2bfa215e6ba07fe436b9702ebf8ec0ed29d77e835ab29a51c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "flash_messages.html.twig"));

        // line 1
        $this->displayBlock('flash_messages', $context, $blocks);
        
        $__internal_74d79be8d15494cbb5f9efae6601e39fdf74d7f19b6eb5fae32457e618f77e3d->leave($__internal_74d79be8d15494cbb5f9efae6601e39fdf74d7f19b6eb5fae32457e618f77e3d_prof);

        
        $__internal_cf603204745ccdd2bfa215e6ba07fe436b9702ebf8ec0ed29d77e835ab29a51c->leave($__internal_cf603204745ccdd2bfa215e6ba07fe436b9702ebf8ec0ed29d77e835ab29a51c_prof);

    }

    public function block_flash_messages($context, array $blocks = array())
    {
        $__internal_bcd3c211d82cac4ac7e7676a85120d2415874ef85cd6df9b5c5503b6476e2c72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bcd3c211d82cac4ac7e7676a85120d2415874ef85cd6df9b5c5503b6476e2c72->enter($__internal_bcd3c211d82cac4ac7e7676a85120d2415874ef85cd6df9b5c5503b6476e2c72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash_messages"));

        $__internal_50c22eba26072ab2e0fa0fadf7e90e59a139d7be4da1af370534d71586658616 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50c22eba26072ab2e0fa0fadf7e90e59a139d7be4da1af370534d71586658616->enter($__internal_50c22eba26072ab2e0fa0fadf7e90e59a139d7be4da1af370534d71586658616_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash_messages"));

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
        
        $__internal_50c22eba26072ab2e0fa0fadf7e90e59a139d7be4da1af370534d71586658616->leave($__internal_50c22eba26072ab2e0fa0fadf7e90e59a139d7be4da1af370534d71586658616_prof);

        
        $__internal_bcd3c211d82cac4ac7e7676a85120d2415874ef85cd6df9b5c5503b6476e2c72->leave($__internal_bcd3c211d82cac4ac7e7676a85120d2415874ef85cd6df9b5c5503b6476e2c72_prof);

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
