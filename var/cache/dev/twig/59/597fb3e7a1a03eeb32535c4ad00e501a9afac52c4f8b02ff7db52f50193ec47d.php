<?php

/* @Swiftmailer/Collector/swiftmailer.html.twig */
class __TwigTemplate_b73bbef730e66bf3ed059a5c694e37251923edfea78fe5084cb93933cd5da7c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@Swiftmailer/Collector/swiftmailer.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_641667ebc82aaca41133a4f53c669e8c770f0e84072ad4baa0667b7595d2d360 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_641667ebc82aaca41133a4f53c669e8c770f0e84072ad4baa0667b7595d2d360->enter($__internal_641667ebc82aaca41133a4f53c669e8c770f0e84072ad4baa0667b7595d2d360_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Swiftmailer/Collector/swiftmailer.html.twig"));

        $__internal_b490fd593f0f586aea4921c079a0a2acaf7fe4ddd005175803e764947f3911af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b490fd593f0f586aea4921c079a0a2acaf7fe4ddd005175803e764947f3911af->enter($__internal_b490fd593f0f586aea4921c079a0a2acaf7fe4ddd005175803e764947f3911af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Swiftmailer/Collector/swiftmailer.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_641667ebc82aaca41133a4f53c669e8c770f0e84072ad4baa0667b7595d2d360->leave($__internal_641667ebc82aaca41133a4f53c669e8c770f0e84072ad4baa0667b7595d2d360_prof);

        
        $__internal_b490fd593f0f586aea4921c079a0a2acaf7fe4ddd005175803e764947f3911af->leave($__internal_b490fd593f0f586aea4921c079a0a2acaf7fe4ddd005175803e764947f3911af_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_777f8f7e42613dea73586de351e9e4578b4a43d522e85abb3be1fd91be30bb8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_777f8f7e42613dea73586de351e9e4578b4a43d522e85abb3be1fd91be30bb8c->enter($__internal_777f8f7e42613dea73586de351e9e4578b4a43d522e85abb3be1fd91be30bb8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_115ea999e90675aeb1d3ecdaa3e60f095f581d1626b11e0c9b847c443669b1f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_115ea999e90675aeb1d3ecdaa3e60f095f581d1626b11e0c9b847c443669b1f2->enter($__internal_115ea999e90675aeb1d3ecdaa3e60f095f581d1626b11e0c9b847c443669b1f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        $context["profiler_markup_version"] = ((array_key_exists("profiler_markup_version", $context)) ? (_twig_default_filter((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context) ? $context["profiler_markup_version"] : (function () { throw new Twig_Error_Runtime('Variable "profiler_markup_version" does not exist.', 4, $this->getSourceContext()); })()), 1)) : (1));
        // line 5
        echo "
    ";
        // line 6
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 6, $this->getSourceContext()); })()), "messageCount", array())) {
            // line 7
            echo "        ";
            ob_start();
            // line 8
            echo "            ";
            if (((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context) ? $context["profiler_markup_version"] : (function () { throw new Twig_Error_Runtime('Variable "profiler_markup_version" does not exist.', 8, $this->getSourceContext()); })()) == 1)) {
                // line 9
                echo "                <img width=\"23\" height=\"28\" alt=\"Swiftmailer\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABcAAAAcCAYAAACK7SRjAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYwIDYxLjEzNDc3NywgMjAxMC8wMi8xMi0xNzozMjowMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNSBNYWNpbnRvc2giIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6N0NEOTU1MjM0OThFMTFFMDg3NzJBNTE2ODgwQzMxMzQiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6N0NEOTU1MjQ0OThFMTFFMDg3NzJBNTE2ODgwQzMxMzQiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDoxMEQ5OTQ5QzQ5OEMxMUUwODc3MkE1MTY4ODBDMzEzNCIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo3Q0Q5NTUyMjQ5OEUxMUUwODc3MkE1MTY4ODBDMzEzNCIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PpkRnSAAAAJ0SURBVHjaYvz//z8DrQATAw3BqOFYAaO9vT1FBhw4cGCAXA5MipxBQUHT3r17l0AVAxkZ/wkLC89as2ZNIcjlYkALXKnlWqBZTH/+/PEDmQsynLW/v3+NoaHhN2oYDjJn8uTJK4BMNpDhPwsLCwOKiop2+fn5vafEYC8vrw8gc/Lz8wOB3B8gw/nev38vn5WV5eTg4LA/Ly/vESsrK2npmYmJITU19SnQ8L0gc4DxpwgyF2S4EEjB58+f+crLy31YWFjOt7S0XBYUFPxHjMEcHBz/6+rqboqJiZ0qKSnxBpkDlRICGc4MU/j792+2CRMm+L18+fLSxIkTDykoKPzBZ7CoqOi/np6eE8rKylvb29v9fvz4wYEkzYKRzjk5OX/LyMjcnDRpEkjjdisrK6wRraOj8wvokAMLFy788ejRoxcaGhrPCWai4ODgB8DUE3/mzBknYMToASNoMzAfvEVW4+Tk9LmhoWFbTU2NwunTpx2BjiiMjo6+hm4WCzJHUlLyz+vXrxkfP36sDOI/ffpUPikpibe7u3sLsJjQW7VqlSrQxe+Avjmanp7u9PbtWzGQOmCCkARmmu/m5uYfT548yY/V5UpKSl+2b9+uiiz26dMnIWBSDTp27NgdYGrYCIzwE7m5uR4wg2Hg/PnzSsDI/QlKOcjZ3wGUBLm5uf+DwLdv38gub4AG/xcSEvr35s0bZmCB5sgCE/z69SsjyDJKMtG/f/8YQQYD8wkoGf8H51AbG5sH1CpbQBnQ09PzBiiHgoIFFHlBQGwLxLxUMP8dqJgH4k3gIhfIkAKVYkDMTmmhCHIxEL8A4peMo02L4WU4QIABANxZAoDIQDv3AAAAAElFTkSuQmCC\" />
                <span class=\"sf-toolbar-status\">";
                // line 10
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 10, $this->getSourceContext()); })()), "messageCount", array()), "html", null, true);
                echo "</span>
            ";
            } else {
                // line 12
                echo "                ";
                echo twig_include($this->env, $context, "@Swiftmailer/Collector/icon.svg");
                echo "
                <span class=\"sf-toolbar-value\">";
                // line 13
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "messageCount", array()), "html", null, true);
                echo "</span>
            ";
            }
            // line 15
            echo "        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 16
            echo "
        ";
            // line 17
            ob_start();
            // line 18
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Sent messages</b>
                <span class=\"sf-toolbar-status\">";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 20, $this->getSourceContext()); })()), "messageCount", array()), "html", null, true);
            echo "</span>
            </div>

            ";
            // line 23
            if (((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context) ? $context["profiler_markup_version"] : (function () { throw new Twig_Error_Runtime('Variable "profiler_markup_version" does not exist.', 23, $this->getSourceContext()); })()) == 1)) {
                // line 24
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 24, $this->getSourceContext()); })()), "mailers", array()));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["name"]) {
                    // line 25
                    echo "                    <div class=\"sf-toolbar-info-piece\">
                        <b>";
                    // line 26
                    echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                    echo "</b>
                        <span>";
                    // line 27
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "messageCount", array(0 => $context["name"]), "method"), "html", null, true);
                    echo "</span>
                    </div>
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Is spooled?</b>
                        <span>";
                    // line 31
                    echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 31, $this->getSourceContext()); })()), "isSpool", array(0 => $context["name"]), "method")) ? ("yes") : ("no"));
                    echo "</span>
                    </div>

                    ";
                    // line 34
                    if ( !twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "first", array())) {
                        // line 35
                        echo "                        <hr>
                    ";
                    }
                    // line 37
                    echo "                ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['name'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 38
                echo "            ";
            } else {
                // line 39
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 39, $this->getSourceContext()); })()), "mailers", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["name"]) {
                    // line 40
                    echo "                    <div class=\"sf-toolbar-info-piece\">
                        <b>";
                    // line 41
                    echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                    echo " mailer</b>
                        <span class=\"sf-toolbar-status\">";
                    // line 42
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["collector"] ?? null), "messageCount", array(0 => $context["name"]), "method", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["collector"] ?? null), "messageCount", array(0 => $context["name"]), "method"), 0)) : (0)), "html", null, true);
                    echo "</span>
                        &nbsp; (<small>";
                    // line 43
                    echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 43, $this->getSourceContext()); })()), "isSpool", array(0 => $context["name"]), "method")) ? ("spooled") : ("sent"));
                    echo "</small>)
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['name'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 46
                echo "            ";
            }
            // line 47
            echo "        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 48
            echo "
        ";
            // line 49
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => (isset($context["profiler_url"]) || array_key_exists("profiler_url", $context) ? $context["profiler_url"] : (function () { throw new Twig_Error_Runtime('Variable "profiler_url" does not exist.', 49, $this->getSourceContext()); })())));
            echo "
    ";
        }
        
        $__internal_115ea999e90675aeb1d3ecdaa3e60f095f581d1626b11e0c9b847c443669b1f2->leave($__internal_115ea999e90675aeb1d3ecdaa3e60f095f581d1626b11e0c9b847c443669b1f2_prof);

        
        $__internal_777f8f7e42613dea73586de351e9e4578b4a43d522e85abb3be1fd91be30bb8c->leave($__internal_777f8f7e42613dea73586de351e9e4578b4a43d522e85abb3be1fd91be30bb8c_prof);

    }

    // line 53
    public function block_head($context, array $blocks = array())
    {
        $__internal_7e98a4d1b84bb241ece3819eff247bb099b5f43b34c217ceab6167ae32553f27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e98a4d1b84bb241ece3819eff247bb099b5f43b34c217ceab6167ae32553f27->enter($__internal_7e98a4d1b84bb241ece3819eff247bb099b5f43b34c217ceab6167ae32553f27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c7cc281b5dd841d39bc2b2d7d87c0b508ec8adcfb19b965f83c04bea4b66ec88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7cc281b5dd841d39bc2b2d7d87c0b508ec8adcfb19b965f83c04bea4b66ec88->enter($__internal_c7cc281b5dd841d39bc2b2d7d87c0b508ec8adcfb19b965f83c04bea4b66ec88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 54
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
    <style type=\"text/css\">
        /* utility classes */
        .m-t-0 { margin-top: 0 !important; }
        .m-t-10 { margin-top: 10px !important; }

        /* basic grid */
        .row {
            display: flex;
            flex-wrap: wrap;
            margin-right: -15px;
            margin-left: -15px;
        }
        .col {
            flex-basis: 0;
            flex-grow: 1;
            max-width: 100%;
            position: relative;
            width: 100%;
            min-height: 1px;
            padding-right: 15px;
            padding-left: 15px;
        }
        .col-4 {
            flex: 0 0 33.333333%;
            max-width: 33.333333%;
        }

        /* small tabs */
        .sf-tabs-sm .tab-navigation li {
            font-size: 14px;
            padding: .3em .5em;
        }
    </style>
";
        
        $__internal_c7cc281b5dd841d39bc2b2d7d87c0b508ec8adcfb19b965f83c04bea4b66ec88->leave($__internal_c7cc281b5dd841d39bc2b2d7d87c0b508ec8adcfb19b965f83c04bea4b66ec88_prof);

        
        $__internal_7e98a4d1b84bb241ece3819eff247bb099b5f43b34c217ceab6167ae32553f27->leave($__internal_7e98a4d1b84bb241ece3819eff247bb099b5f43b34c217ceab6167ae32553f27_prof);

    }

    // line 90
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e2f37e622f17774337524a498817dc384a98a54597cc49c96e9a5a63e08c784f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2f37e622f17774337524a498817dc384a98a54597cc49c96e9a5a63e08c784f->enter($__internal_e2f37e622f17774337524a498817dc384a98a54597cc49c96e9a5a63e08c784f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_12173ebbf8455d1c9dd80dcd2f1cf6c5c02d2774cea88fc7683d21e43f2a0a9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12173ebbf8455d1c9dd80dcd2f1cf6c5c02d2774cea88fc7683d21e43f2a0a9d->enter($__internal_12173ebbf8455d1c9dd80dcd2f1cf6c5c02d2774cea88fc7683d21e43f2a0a9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 91
        echo "    ";
        $context["profiler_markup_version"] = ((array_key_exists("profiler_markup_version", $context)) ? (_twig_default_filter((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context) ? $context["profiler_markup_version"] : (function () { throw new Twig_Error_Runtime('Variable "profiler_markup_version" does not exist.', 91, $this->getSourceContext()); })()), 1)) : (1));
        // line 92
        echo "
    <span class=\"label ";
        // line 93
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 93, $this->getSourceContext()); })()), "messageCount", array())) ? ("") : ("disabled"));
        echo "\">
        ";
        // line 94
        if (((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context) ? $context["profiler_markup_version"] : (function () { throw new Twig_Error_Runtime('Variable "profiler_markup_version" does not exist.', 94, $this->getSourceContext()); })()) == 1)) {
            // line 95
            echo "            <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACoAAAAeCAYAAABaKIzgAAAEDElEQVR42u2XWUhUURjHy6isILAebO+lonpJ8qkHM3NFVFxAUVFM0RSXUKnwwdAQn3wQE0MyA1MwBEUQcxvHZTTTHNcZl9DUGqd0JBOzcsZ7+n8XJ0Z0GueOVwg68GfmnLn3O7/7Lee7s4cxZpHq6uos0bb3+Q+6DrG3u7v7RHt7u3tbW9uD5ubm8qamJnlDQ4NKIpG8HhkZOU3X7BYoD9Tb22sjk8mcWltb70ul0pcAegugBfzOjKmzs/MJ7j0kCujw8PBhADkAKAVAz+EZGYA+08bmCN79qdFo7sGmjaWg+wgIIUtoaWl5CqDmxsbGj7SJpYK3uYWFBRnsDmEfWyGg+zs6OkIBNEoGxVB9fT2bnZ1VIHff03xmZuY29rUyF9QWT6sWC5I0OTk5rVAo3unnSqXyEfa1Nhf0Kp5UKRYk8lsDD0oM1/r6+l5h32Pmgl5UqVTP5ubmlEgBHRlCobC8vDzm5eXFHB0dRZWzs/OXsLCwu5SCpkBPo4DaMVRI9rbp6Wk1vnP+/v5kaFfk4eGhAcdJU6Dn+/v7q9aTnpPL5YqVlRV5eXm5Fk+7Gx7lCgsL68Fx2RToWST7C8McQgr8yMrKWkLu/hQz/LDNIZojycnJb8BxwRTocYT8oSEoQs8bSkpK0k5MTGgiIiK4nYYMDg7mcBLIo6OjP9Ec44opUGvIF+eoTg/a1dX1x2BISMgyKncpLS1tbacgU1NT2djY2HxoaOi8fg3jhilQK+gmQvBVD4qQbzDs4+ND6bBWUFCgtRQyJyeHdwSKdcODY9zaTgu9jheMcWOgJFdXV1ZZWclqamp0bm5uQoqGVVRUrFHBuru782tCQC+hW0j/BkpCPlGXIY9wfn5+5hQN5T3dS+cz5btg0DNTU1NFpkBra2tZaWkpy8jIYOPj4ywmJmY7RcMGBwdZZmYmKykpoa7ELPGozeLiYrIetKenZ5OhuLg4ft3T05OfJyQk8LDp6el/LRq6JiUlheb8vXgzY7m5uYJBD0LeeDnRApQ8sKloqK3GxsZuWEPrYzhiWHFx8ZZFMzo6yiIjIw1DTTZ+qNXqMRcXF0GgVpADKltDoCisDcbj4+NZfn7+ll5D9fKeprYbFRXFwsPDWVVV1SodPwEBAVueEtnZ2QNIhTkhoKRrAxhb5WhRURFzcnIyGmIcX9rq6uoPq6urAzqdrresrGwIHtMZux62OOT6AD4FgZ5bXl5+DMhv6P16j/KhCwoK2vHO5O3t/SsxMfG7ENAjkAOUBUkMvMVDiiFKDSGge6Gj0CUoGmffpvwSEfg7dUch/0LtkWcdvr6+a2JDBgYG6tDt6DXPTgjoKegOVAo1QVKR1AgVQ8GQrRDQA+uw9ushuSWSyLYdQRr7K/JP6DcTwr8i7Fj8pwAAAABJRU5ErkJggg==\" alt=\"Swiftmailer\" /></span>
        ";
        } else {
            // line 97
            echo "            <span class=\"icon\">";
            echo twig_include($this->env, $context, "@Swiftmailer/Collector/icon.svg");
            echo "</span>
        ";
        }
        // line 99
        echo "
        <strong>E-Mails</strong>
        ";
        // line 101
        if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 101, $this->getSourceContext()); })()), "messageCount", array()) > 0)) {
            // line 102
            echo "            <span class=\"count\">
                <span>";
            // line 103
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 103, $this->getSourceContext()); })()), "messageCount", array()), "html", null, true);
            echo "</span>
            </span>
        ";
        }
        // line 106
        echo "    </span>
";
        
        $__internal_12173ebbf8455d1c9dd80dcd2f1cf6c5c02d2774cea88fc7683d21e43f2a0a9d->leave($__internal_12173ebbf8455d1c9dd80dcd2f1cf6c5c02d2774cea88fc7683d21e43f2a0a9d_prof);

        
        $__internal_e2f37e622f17774337524a498817dc384a98a54597cc49c96e9a5a63e08c784f->leave($__internal_e2f37e622f17774337524a498817dc384a98a54597cc49c96e9a5a63e08c784f_prof);

    }

    // line 109
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b4d82160fa1501d2c6b8a2e0f36f898cf800a183699339ff6ae30b4cfcaecfd4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4d82160fa1501d2c6b8a2e0f36f898cf800a183699339ff6ae30b4cfcaecfd4->enter($__internal_b4d82160fa1501d2c6b8a2e0f36f898cf800a183699339ff6ae30b4cfcaecfd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_736e960d1986bfe90c97bedfe9f9fffc8c085af4f63d62da34cde9c6ea0325c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_736e960d1986bfe90c97bedfe9f9fffc8c085af4f63d62da34cde9c6ea0325c2->enter($__internal_736e960d1986bfe90c97bedfe9f9fffc8c085af4f63d62da34cde9c6ea0325c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 110
        echo "    ";
        $context["profiler_markup_version"] = ((array_key_exists("profiler_markup_version", $context)) ? (_twig_default_filter((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context) ? $context["profiler_markup_version"] : (function () { throw new Twig_Error_Runtime('Variable "profiler_markup_version" does not exist.', 110, $this->getSourceContext()); })()), 1)) : (1));
        // line 111
        echo "
    ";
        // line 112
        if (((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context) ? $context["profiler_markup_version"] : (function () { throw new Twig_Error_Runtime('Variable "profiler_markup_version" does not exist.', 112, $this->getSourceContext()); })()) == 1)) {
            // line 113
            echo "        <style>
            h3 { margin-top: 2em; }
            h3 span { color: #999; font-weight: normal; }
            h3 small { color: #999; }
            h4 { font-size: 14px; font-weight: bold; }
            .card { background: #F5F5F5; margin: .5em 0 1em; padding: .5em; }
            .card .label { display: block; font-size: 13px; font-weight: bold; margin-bottom: .5em; }
            .card .card-block { margin-bottom: 1em; }
        </style>
    ";
        }
        // line 123
        echo "
    <h2>E-mails</h2>

    ";
        // line 126
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 126, $this->getSourceContext()); })()), "mailers", array())) {
            // line 127
            echo "        <div class=\"empty\">
            <p>No e-mail messages were sent.</p>
        </div>
    ";
        }
        // line 131
        echo "
    ";
        // line 132
        if ((((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context) ? $context["profiler_markup_version"] : (function () { throw new Twig_Error_Runtime('Variable "profiler_markup_version" does not exist.', 132, $this->getSourceContext()); })()) == 1) || (twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 132, $this->getSourceContext()); })()), "mailers", array())) > 1))) {
            // line 133
            echo "        <table>
            <thead>
                <tr>
                    <th scope=\"col\">Mailer Name</th>
                    <th scope=\"col\">Num. of messages</th>
                    <th scope=\"col\">Messages status</th>
                    <th scope=\"col\">Notes</th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 143
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 143, $this->getSourceContext()); })()), "mailers", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["name"]) {
                // line 144
                echo "                    <tr>
                        <th class=\"font-normal\">";
                // line 145
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "</th>
                        <td class=\"font-normal\">";
                // line 146
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 146, $this->getSourceContext()); })()), "messageCount", array(0 => $context["name"]), "method"), "html", null, true);
                echo "</td>
                        <td class=\"font-normal\">";
                // line 147
                echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 147, $this->getSourceContext()); })()), "isSpool", array(0 => $context["name"]), "method")) ? ("spooled") : ("sent"));
                echo "</td>
                        <td class=\"font-normal\">";
                // line 148
                echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 148, $this->getSourceContext()); })()), "isDefaultMailer", array(0 => $context["name"]), "method")) ? ("This is the default mailer") : (""));
                echo "</td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 151
            echo "            </tbody>
        </table>
    ";
        } else {
            // line 154
            echo "        <div class=\"metrics\">
            ";
            // line 155
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 155, $this->getSourceContext()); })()), "mailers", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["name"]) {
                // line 156
                echo "                <div class=\"metric\">
                    <span class=\"value\">";
                // line 157
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 157, $this->getSourceContext()); })()), "messageCount", array(0 => $context["name"]), "method"), "html", null, true);
                echo "</span>
                    <span class=\"label\">";
                // line 158
                echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 158, $this->getSourceContext()); })()), "isSpool", array(0 => $context["name"]), "method")) ? ("spooled") : ("sent"));
                echo " ";
                echo (((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 158, $this->getSourceContext()); })()), "messageCount", array(0 => $context["name"]), "method") == 1)) ? ("message") : ("messages"));
                echo "</span>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 161
            echo "        </div>
    ";
        }
        // line 163
        echo "
    ";
        // line 164
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 164, $this->getSourceContext()); })()), "mailers", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["name"]) {
            // line 165
            echo "        ";
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 165, $this->getSourceContext()); })()), "mailers", array())) > 1)) {
                // line 166
                echo "            <h3>
                ";
                // line 167
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo " <span>mailer</span>
                <small>";
                // line 168
                echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 168, $this->getSourceContext()); })()), "isDefaultMailer", array(0 => $context["name"]), "method")) ? ("(default app mailer)") : (""));
                echo "</small>
            </h3>
        ";
            }
            // line 171
            echo "
        ";
            // line 172
            if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 172, $this->getSourceContext()); })()), "messages", array(0 => $context["name"]), "method")) {
                // line 173
                echo "            <div class=\"empty\">
                <p>No e-mail messages were sent.</p>
            </div>
        ";
            } else {
                // line 177
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 177, $this->getSourceContext()); })()), "messages", array(0 => $context["name"]), "method"));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 178
                    echo "                ";
                    if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "length", array()) > 1)) {
                        // line 179
                        echo "                    <h4>E-mail #";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index", array()), "html", null, true);
                        echo " details</h4>
                ";
                    } else {
                        // line 181
                        echo "                    <h4>E-mail details</h4>
                ";
                    }
                    // line 183
                    echo "
                <div class=\"card\">
                    <div class=\"card-block\">
                        <span class=\"label\">Subject</span>
                        <h2 class=\"m-t-10\">";
                    // line 187
                    echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["message"], "headers", array(), "any", false, true), "get", array(0 => "subject"), "method", false, true), "value", array(), "any", true, true) &&  !(null === twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["message"], "headers", array(), "any", false, true), "get", array(0 => "subject"), "method", false, true), "value", array())))) ? (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["message"], "headers", array(), "any", false, true), "get", array(0 => "subject"), "method", false, true), "value", array())) : ("(empty)")), "html", null, true);
                    echo "</h2>
                    </div>
                    <div class=\"card-block\">
                        <div class=\"row\">
                            <div class=\"col col-4\">
                                <span class=\"label\">From</span>
                                <pre class=\"prewrap\">";
                    // line 193
                    echo twig_escape_filter($this->env, twig_replace_filter((((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["message"], "headers", array(), "any", false, true), "get", array(0 => "from"), "method", false, true), "toString", array(), "any", true, true) &&  !(null === twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["message"], "headers", array(), "any", false, true), "get", array(0 => "from"), "method", false, true), "toString", array())))) ? (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["message"], "headers", array(), "any", false, true), "get", array(0 => "from"), "method", false, true), "toString", array())) : ("(empty)")), array("From:" => "")), "html", null, true);
                    echo "</pre>

                                <span class=\"label\">To</span>
                                <pre class=\"prewrap\">";
                    // line 196
                    echo twig_escape_filter($this->env, twig_replace_filter((((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["message"], "headers", array(), "any", false, true), "get", array(0 => "to"), "method", false, true), "toString", array(), "any", true, true) &&  !(null === twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["message"], "headers", array(), "any", false, true), "get", array(0 => "to"), "method", false, true), "toString", array())))) ? (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["message"], "headers", array(), "any", false, true), "get", array(0 => "to"), "method", false, true), "toString", array())) : ("(empty)")), array("To:" => "")), "html", null, true);
                    echo "</pre>
                            </div>
                            <div class=\"col\">
                                <span class=\"label\">Headers</span>
                                <pre class=\"prewrap\">";
                    // line 200
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["message"], "headers", array()), "all", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["header"]) {
                        if (!twig_in_filter((((twig_get_attribute($this->env, $this->getSourceContext(), $context["header"], "fieldName", array(), "any", true, true) &&  !(null === twig_get_attribute($this->env, $this->getSourceContext(), $context["header"], "fieldName", array())))) ? (twig_get_attribute($this->env, $this->getSourceContext(), $context["header"], "fieldName", array())) : ("")), array(0 => "Subject", 1 => "From", 2 => "To"))) {
                            // line 201
                            echo twig_escape_filter($this->env, $context["header"], "html", null, true);
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['header'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 202
                    echo "</pre>
                            </div>
                        </div>
                    </div>

                    <div class=\"card-block\">
                        <div class=\"sf-tabs sf-tabs-sm\">
                            <div class=\"tab\">
                                <h3 class=\"tab-title\">Raw content</h3>

                                <div class=\"tab-content\">
                                    <pre class=\"prewrap\" style=\"max-height: 600px\">";
                    // line 214
                    if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["message"], "charset", array(), "any", true, true) && twig_get_attribute($this->env, $this->getSourceContext(), $context["message"], "charset", array()))) {
                        // line 215
                        echo twig_escape_filter($this->env, twig_convert_encoding(twig_get_attribute($this->env, $this->getSourceContext(), $context["message"], "body", array()), "UTF-8", twig_get_attribute($this->env, $this->getSourceContext(), $context["message"], "charset", array())), "html", null, true);
                    } else {
                        // line 217
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["message"], "body", array()), "html", null, true);
                    }
                    // line 219
                    echo "</pre>
                                </div>
                            </div>

                            <div class=\"tab\">
                                <h3 class=\"tab-title\">Rendered content</h3>

                                <div class=\"tab-content\">
                                    <iframe class=\"full-width\" style=\"min-height: 600px\" src=\"data:";
                    // line 227
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["message"], "__contentType", array()), "html", null, true);
                    echo ";base64,";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["message"], "__base64EncodedBody", array()), "html", null, true);
                    echo "\"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>

                    ";
                    // line 233
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["message"], "children", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["messagePart"]) {
                        if (twig_in_filter(twig_get_attribute($this->env, $this->getSourceContext(), $context["messagePart"], "contentType", array()), array(0 => "text/plain", 1 => "text/html"))) {
                            // line 234
                            echo "                        <div class=\"card-block\">
                            <span class=\"label\">Alternative part (";
                            // line 235
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["messagePart"], "contentType", array()), "html", null, true);
                            echo ")</span>
                            <pre class=\"prewrap\">";
                            // line 237
                            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["messagePart"], "charset", array(), "any", true, true) && twig_get_attribute($this->env, $this->getSourceContext(), $context["messagePart"], "charset", array()))) {
                                // line 238
                                echo twig_escape_filter($this->env, twig_convert_encoding(twig_get_attribute($this->env, $this->getSourceContext(), $context["messagePart"], "body", array()), "UTF-8", twig_get_attribute($this->env, $this->getSourceContext(), $context["messagePart"], "charset", array())), "html", null, true);
                            } else {
                                // line 240
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["messagePart"], "body", array()), "html", null, true);
                            }
                            // line 242
                            echo "</pre>
                        </div>
                    ";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['messagePart'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 245
                    echo "
                    ";
                    // line 246
                    $context["attachments"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 246, $this->getSourceContext()); })()), "extractAttachments", array(0 => $context["message"]), "method");
                    // line 247
                    echo "                    ";
                    if ((isset($context["attachments"]) || array_key_exists("attachments", $context) ? $context["attachments"] : (function () { throw new Twig_Error_Runtime('Variable "attachments" does not exist.', 247, $this->getSourceContext()); })())) {
                        // line 248
                        echo "                        <div class=\"card-block\">
                            <span class=\"label\">
                                ";
                        // line 250
                        if ((twig_length_filter($this->env, (isset($context["attachments"]) || array_key_exists("attachments", $context) ? $context["attachments"] : (function () { throw new Twig_Error_Runtime('Variable "attachments" does not exist.', 250, $this->getSourceContext()); })())) > 1)) {
                            // line 251
                            echo "                                    ";
                            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["attachments"]) || array_key_exists("attachments", $context) ? $context["attachments"] : (function () { throw new Twig_Error_Runtime('Variable "attachments" does not exist.', 251, $this->getSourceContext()); })())), "html", null, true);
                            echo " Attachments
                                ";
                        } else {
                            // line 253
                            echo "                                    1 Attachment
                                ";
                        }
                        // line 255
                        echo "                            </span>

                            <ol>
                                ";
                        // line 258
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((isset($context["attachments"]) || array_key_exists("attachments", $context) ? $context["attachments"] : (function () { throw new Twig_Error_Runtime('Variable "attachments" does not exist.', 258, $this->getSourceContext()); })()));
                        foreach ($context['_seq'] as $context["_key"] => $context["attachment"]) {
                            // line 259
                            echo "                                    <li>
                                        Filename:
                                        ";
                            // line 261
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["attachment"], "filename", array()), "html", null, true);
                            echo "
                                    </li>
                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attachment'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 264
                        echo "                            </ol>
                        </div>
                    ";
                    }
                    // line 267
                    echo "                </div>
            ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 269
                echo "        ";
            }
            // line 270
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_736e960d1986bfe90c97bedfe9f9fffc8c085af4f63d62da34cde9c6ea0325c2->leave($__internal_736e960d1986bfe90c97bedfe9f9fffc8c085af4f63d62da34cde9c6ea0325c2_prof);

        
        $__internal_b4d82160fa1501d2c6b8a2e0f36f898cf800a183699339ff6ae30b4cfcaecfd4->leave($__internal_b4d82160fa1501d2c6b8a2e0f36f898cf800a183699339ff6ae30b4cfcaecfd4_prof);

    }

    public function getTemplateName()
    {
        return "@Swiftmailer/Collector/swiftmailer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  690 => 270,  687 => 269,  672 => 267,  667 => 264,  658 => 261,  654 => 259,  650 => 258,  645 => 255,  641 => 253,  635 => 251,  633 => 250,  629 => 248,  626 => 247,  624 => 246,  621 => 245,  612 => 242,  609 => 240,  606 => 238,  604 => 237,  600 => 235,  597 => 234,  592 => 233,  581 => 227,  571 => 219,  568 => 217,  565 => 215,  563 => 214,  550 => 202,  543 => 201,  538 => 200,  531 => 196,  525 => 193,  516 => 187,  510 => 183,  506 => 181,  500 => 179,  497 => 178,  479 => 177,  473 => 173,  471 => 172,  468 => 171,  462 => 168,  458 => 167,  455 => 166,  452 => 165,  448 => 164,  445 => 163,  441 => 161,  430 => 158,  426 => 157,  423 => 156,  419 => 155,  416 => 154,  411 => 151,  402 => 148,  398 => 147,  394 => 146,  390 => 145,  387 => 144,  383 => 143,  371 => 133,  369 => 132,  366 => 131,  360 => 127,  358 => 126,  353 => 123,  341 => 113,  339 => 112,  336 => 111,  333 => 110,  324 => 109,  313 => 106,  307 => 103,  304 => 102,  302 => 101,  298 => 99,  292 => 97,  288 => 95,  286 => 94,  282 => 93,  279 => 92,  276 => 91,  267 => 90,  221 => 54,  212 => 53,  199 => 49,  196 => 48,  193 => 47,  190 => 46,  181 => 43,  177 => 42,  173 => 41,  170 => 40,  165 => 39,  162 => 38,  148 => 37,  144 => 35,  142 => 34,  136 => 31,  129 => 27,  125 => 26,  122 => 25,  104 => 24,  102 => 23,  96 => 20,  92 => 18,  90 => 17,  87 => 16,  84 => 15,  79 => 13,  74 => 12,  69 => 10,  66 => 9,  63 => 8,  60 => 7,  58 => 6,  55 => 5,  52 => 4,  43 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set profiler_markup_version = profiler_markup_version|default(1) %}

    {% if collector.messageCount %}
        {% set icon %}
            {% if profiler_markup_version == 1 %}
                <img width=\"23\" height=\"28\" alt=\"Swiftmailer\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABcAAAAcCAYAAACK7SRjAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYwIDYxLjEzNDc3NywgMjAxMC8wMi8xMi0xNzozMjowMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNSBNYWNpbnRvc2giIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6N0NEOTU1MjM0OThFMTFFMDg3NzJBNTE2ODgwQzMxMzQiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6N0NEOTU1MjQ0OThFMTFFMDg3NzJBNTE2ODgwQzMxMzQiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDoxMEQ5OTQ5QzQ5OEMxMUUwODc3MkE1MTY4ODBDMzEzNCIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo3Q0Q5NTUyMjQ5OEUxMUUwODc3MkE1MTY4ODBDMzEzNCIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PpkRnSAAAAJ0SURBVHjaYvz//z8DrQATAw3BqOFYAaO9vT1FBhw4cGCAXA5MipxBQUHT3r17l0AVAxkZ/wkLC89as2ZNIcjlYkALXKnlWqBZTH/+/PEDmQsynLW/v3+NoaHhN2oYDjJn8uTJK4BMNpDhPwsLCwOKiop2+fn5vafEYC8vrw8gc/Lz8wOB3B8gw/nev38vn5WV5eTg4LA/Ly/vESsrK2npmYmJITU19SnQ8L0gc4DxpwgyF2S4EEjB58+f+crLy31YWFjOt7S0XBYUFPxHjMEcHBz/6+rqboqJiZ0qKSnxBpkDlRICGc4MU/j792+2CRMm+L18+fLSxIkTDykoKPzBZ7CoqOi/np6eE8rKylvb29v9fvz4wYEkzYKRzjk5OX/LyMjcnDRpEkjjdisrK6wRraOj8wvokAMLFy788ejRoxcaGhrPCWai4ODgB8DUE3/mzBknYMToASNoMzAfvEVW4+Tk9LmhoWFbTU2NwunTpx2BjiiMjo6+hm4WCzJHUlLyz+vXrxkfP36sDOI/ffpUPikpibe7u3sLsJjQW7VqlSrQxe+Avjmanp7u9PbtWzGQOmCCkARmmu/m5uYfT548yY/V5UpKSl+2b9+uiiz26dMnIWBSDTp27NgdYGrYCIzwE7m5uR4wg2Hg/PnzSsDI/QlKOcjZ3wGUBLm5uf+DwLdv38gub4AG/xcSEvr35s0bZmCB5sgCE/z69SsjyDJKMtG/f/8YQQYD8wkoGf8H51AbG5sH1CpbQBnQ09PzBiiHgoIFFHlBQGwLxLxUMP8dqJgH4k3gIhfIkAKVYkDMTmmhCHIxEL8A4peMo02L4WU4QIABANxZAoDIQDv3AAAAAElFTkSuQmCC\" />
                <span class=\"sf-toolbar-status\">{{ collector.messageCount }}</span>
            {% else %}
                {{ include('@Swiftmailer/Collector/icon.svg') }}
                <span class=\"sf-toolbar-value\">{{ collector.messageCount }}</span>
            {% endif %}
        {% endset %}

        {% set text %}
            <div class=\"sf-toolbar-info-piece\">
                <b>Sent messages</b>
                <span class=\"sf-toolbar-status\">{{ collector.messageCount }}</span>
            </div>

            {% if profiler_markup_version == 1 %}
                {% for name in collector.mailers %}
                    <div class=\"sf-toolbar-info-piece\">
                        <b>{{ name }}</b>
                        <span>{{ collector.messageCount(name) }}</span>
                    </div>
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Is spooled?</b>
                        <span>{{ collector.isSpool(name) ? 'yes' : 'no' }}</span>
                    </div>

                    {% if not loop.first %}
                        <hr>
                    {% endif %}
                {% endfor %}
            {% else %}
                {% for name in collector.mailers %}
                    <div class=\"sf-toolbar-info-piece\">
                        <b>{{ name }} mailer</b>
                        <span class=\"sf-toolbar-status\">{{ collector.messageCount(name)|default(0) }}</span>
                        &nbsp; (<small>{{ collector.isSpool(name) ? 'spooled' : 'sent' }}</small>)
                    </div>
                {% endfor %}
            {% endif %}
        {% endset %}

        {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { 'link': profiler_url }) }}
    {% endif %}
{% endblock %}

{% block head %}
    {{ parent() }}
    <style type=\"text/css\">
        /* utility classes */
        .m-t-0 { margin-top: 0 !important; }
        .m-t-10 { margin-top: 10px !important; }

        /* basic grid */
        .row {
            display: flex;
            flex-wrap: wrap;
            margin-right: -15px;
            margin-left: -15px;
        }
        .col {
            flex-basis: 0;
            flex-grow: 1;
            max-width: 100%;
            position: relative;
            width: 100%;
            min-height: 1px;
            padding-right: 15px;
            padding-left: 15px;
        }
        .col-4 {
            flex: 0 0 33.333333%;
            max-width: 33.333333%;
        }

        /* small tabs */
        .sf-tabs-sm .tab-navigation li {
            font-size: 14px;
            padding: .3em .5em;
        }
    </style>
{% endblock %}

{% block menu %}
    {% set profiler_markup_version = profiler_markup_version|default(1) %}

    <span class=\"label {{ collector.messageCount ? '' : 'disabled' }}\">
        {% if profiler_markup_version == 1 %}
            <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACoAAAAeCAYAAABaKIzgAAAEDElEQVR42u2XWUhUURjHy6isILAebO+lonpJ8qkHM3NFVFxAUVFM0RSXUKnwwdAQn3wQE0MyA1MwBEUQcxvHZTTTHNcZl9DUGqd0JBOzcsZ7+n8XJ0Z0GueOVwg68GfmnLn3O7/7Lee7s4cxZpHq6uos0bb3+Q+6DrG3u7v7RHt7u3tbW9uD5ubm8qamJnlDQ4NKIpG8HhkZOU3X7BYoD9Tb22sjk8mcWltb70ul0pcAegugBfzOjKmzs/MJ7j0kCujw8PBhADkAKAVAz+EZGYA+08bmCN79qdFo7sGmjaWg+wgIIUtoaWl5CqDmxsbGj7SJpYK3uYWFBRnsDmEfWyGg+zs6OkIBNEoGxVB9fT2bnZ1VIHff03xmZuY29rUyF9QWT6sWC5I0OTk5rVAo3unnSqXyEfa1Nhf0Kp5UKRYk8lsDD0oM1/r6+l5h32Pmgl5UqVTP5ubmlEgBHRlCobC8vDzm5eXFHB0dRZWzs/OXsLCwu5SCpkBPo4DaMVRI9rbp6Wk1vnP+/v5kaFfk4eGhAcdJU6Dn+/v7q9aTnpPL5YqVlRV5eXm5Fk+7Gx7lCgsL68Fx2RToWST7C8McQgr8yMrKWkLu/hQz/LDNIZojycnJb8BxwRTocYT8oSEoQs8bSkpK0k5MTGgiIiK4nYYMDg7mcBLIo6OjP9Ec44opUGvIF+eoTg/a1dX1x2BISMgyKncpLS1tbacgU1NT2djY2HxoaOi8fg3jhilQK+gmQvBVD4qQbzDs4+ND6bBWUFCgtRQyJyeHdwSKdcODY9zaTgu9jheMcWOgJFdXV1ZZWclqamp0bm5uQoqGVVRUrFHBuru782tCQC+hW0j/BkpCPlGXIY9wfn5+5hQN5T3dS+cz5btg0DNTU1NFpkBra2tZaWkpy8jIYOPj4ywmJmY7RcMGBwdZZmYmKykpoa7ELPGozeLiYrIetKenZ5OhuLg4ft3T05OfJyQk8LDp6el/LRq6JiUlheb8vXgzY7m5uYJBD0LeeDnRApQ8sKloqK3GxsZuWEPrYzhiWHFx8ZZFMzo6yiIjIw1DTTZ+qNXqMRcXF0GgVpADKltDoCisDcbj4+NZfn7+ll5D9fKeprYbFRXFwsPDWVVV1SodPwEBAVueEtnZ2QNIhTkhoKRrAxhb5WhRURFzcnIyGmIcX9rq6uoPq6urAzqdrresrGwIHtMZux62OOT6AD4FgZ5bXl5+DMhv6P16j/KhCwoK2vHO5O3t/SsxMfG7ENAjkAOUBUkMvMVDiiFKDSGge6Gj0CUoGmffpvwSEfg7dUch/0LtkWcdvr6+a2JDBgYG6tDt6DXPTgjoKegOVAo1QVKR1AgVQ8GQrRDQA+uw9ushuSWSyLYdQRr7K/JP6DcTwr8i7Fj8pwAAAABJRU5ErkJggg==\" alt=\"Swiftmailer\" /></span>
        {% else %}
            <span class=\"icon\">{{ include('@Swiftmailer/Collector/icon.svg') }}</span>
        {% endif %}

        <strong>E-Mails</strong>
        {% if collector.messageCount > 0 %}
            <span class=\"count\">
                <span>{{ collector.messageCount }}</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    {% set profiler_markup_version = profiler_markup_version|default(1) %}

    {% if profiler_markup_version == 1 %}
        <style>
            h3 { margin-top: 2em; }
            h3 span { color: #999; font-weight: normal; }
            h3 small { color: #999; }
            h4 { font-size: 14px; font-weight: bold; }
            .card { background: #F5F5F5; margin: .5em 0 1em; padding: .5em; }
            .card .label { display: block; font-size: 13px; font-weight: bold; margin-bottom: .5em; }
            .card .card-block { margin-bottom: 1em; }
        </style>
    {% endif %}

    <h2>E-mails</h2>

    {% if not collector.mailers %}
        <div class=\"empty\">
            <p>No e-mail messages were sent.</p>
        </div>
    {% endif %}

    {% if profiler_markup_version == 1 or collector.mailers|length > 1 %}
        <table>
            <thead>
                <tr>
                    <th scope=\"col\">Mailer Name</th>
                    <th scope=\"col\">Num. of messages</th>
                    <th scope=\"col\">Messages status</th>
                    <th scope=\"col\">Notes</th>
                </tr>
            </thead>
            <tbody>
                {% for name in collector.mailers %}
                    <tr>
                        <th class=\"font-normal\">{{ name }}</th>
                        <td class=\"font-normal\">{{ collector.messageCount(name) }}</td>
                        <td class=\"font-normal\">{{ collector.isSpool(name) ? 'spooled' : 'sent' }}</td>
                        <td class=\"font-normal\">{{ collector.isDefaultMailer(name) ? 'This is the default mailer' }}</td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    {% else %}
        <div class=\"metrics\">
            {% for name in collector.mailers %}
                <div class=\"metric\">
                    <span class=\"value\">{{ collector.messageCount(name) }}</span>
                    <span class=\"label\">{{ collector.isSpool(name) ? 'spooled' : 'sent' }} {{ collector.messageCount(name) == 1 ? 'message' : 'messages' }}</span>
                </div>
            {% endfor %}
        </div>
    {% endif %}

    {% for name in collector.mailers %}
        {% if collector.mailers|length > 1 %}
            <h3>
                {{ name }} <span>mailer</span>
                <small>{{ collector.isDefaultMailer(name) ? '(default app mailer)' }}</small>
            </h3>
        {% endif %}

        {% if not collector.messages(name) %}
            <div class=\"empty\">
                <p>No e-mail messages were sent.</p>
            </div>
        {% else %}
            {% for message in collector.messages(name) %}
                {% if loop.length > 1 %}
                    <h4>E-mail #{{ loop.index }} details</h4>
                {% else %}
                    <h4>E-mail details</h4>
                {% endif %}

                <div class=\"card\">
                    <div class=\"card-block\">
                        <span class=\"label\">Subject</span>
                        <h2 class=\"m-t-10\">{{ message.headers.get('subject').value ?? '(empty)' }}</h2>
                    </div>
                    <div class=\"card-block\">
                        <div class=\"row\">
                            <div class=\"col col-4\">
                                <span class=\"label\">From</span>
                                <pre class=\"prewrap\">{{ (message.headers.get('from').toString ?? '(empty)')|replace({'From:': ''}) }}</pre>

                                <span class=\"label\">To</span>
                                <pre class=\"prewrap\">{{ (message.headers.get('to').toString ?? '(empty)')|replace({'To:': ''}) }}</pre>
                            </div>
                            <div class=\"col\">
                                <span class=\"label\">Headers</span>
                                <pre class=\"prewrap\">{% for header in message.headers.all if (header.fieldName ?? '') not in ['Subject', 'From', 'To'] %}
                                    {{- header -}}
                                {% endfor %}</pre>
                            </div>
                        </div>
                    </div>

                    <div class=\"card-block\">
                        <div class=\"sf-tabs sf-tabs-sm\">
                            <div class=\"tab\">
                                <h3 class=\"tab-title\">Raw content</h3>

                                <div class=\"tab-content\">
                                    <pre class=\"prewrap\" style=\"max-height: 600px\">
                                        {%- if message.charset is defined and message.charset %}
                                            {{- message.body|convert_encoding('UTF-8', message.charset) }}
                                        {%- else %}
                                            {{- message.body }}
                                        {%- endif -%}
                                    </pre>
                                </div>
                            </div>

                            <div class=\"tab\">
                                <h3 class=\"tab-title\">Rendered content</h3>

                                <div class=\"tab-content\">
                                    <iframe class=\"full-width\" style=\"min-height: 600px\" src=\"data:{{ message.__contentType }};base64,{{ message.__base64EncodedBody }}\"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>

                    {% for messagePart in message.children if messagePart.contentType in ['text/plain', 'text/html'] %}
                        <div class=\"card-block\">
                            <span class=\"label\">Alternative part ({{ messagePart.contentType }})</span>
                            <pre class=\"prewrap\">
                                {%- if messagePart.charset is defined and messagePart.charset %}
                                    {{- messagePart.body|convert_encoding('UTF-8', messagePart.charset) }}
                                {%- else %}
                                    {{- messagePart.body }}
                                {%- endif -%}
                            </pre>
                        </div>
                    {% endfor %}

                    {% set attachments = collector.extractAttachments(message) %}
                    {% if attachments %}
                        <div class=\"card-block\">
                            <span class=\"label\">
                                {% if attachments|length > 1 %}
                                    {{ attachments|length }} Attachments
                                {% else %}
                                    1 Attachment
                                {% endif %}
                            </span>

                            <ol>
                                {% for attachment in attachments %}
                                    <li>
                                        Filename:
                                        {{ attachment.filename }}
                                    </li>
                                {% endfor %}
                            </ol>
                        </div>
                    {% endif %}
                </div>
            {% endfor %}
        {% endif %}
    {% endfor %}
{% endblock %}
", "@Swiftmailer/Collector/swiftmailer.html.twig", "C:\\wamp64\\www\\mapbox\\vendor\\symfony\\swiftmailer-bundle\\Resources\\views\\Collector\\swiftmailer.html.twig");
    }
}
