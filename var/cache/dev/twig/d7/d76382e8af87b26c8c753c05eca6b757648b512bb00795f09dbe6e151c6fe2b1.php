<?php

/* content/concepteur.html.twig */
class __TwigTemplate_8833928235bd785be8411155e6f198145e6368f42b2c1a06c11b07f14de222d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "content/concepteur.html.twig", 1);
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
        $__internal_12e274521d35a328ade58491e00dd28bc09ccb3fba67187a74bd1359f58af72e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12e274521d35a328ade58491e00dd28bc09ccb3fba67187a74bd1359f58af72e->enter($__internal_12e274521d35a328ade58491e00dd28bc09ccb3fba67187a74bd1359f58af72e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "content/concepteur.html.twig"));

        $__internal_50268bab7555d7332562807b550fa4acd5d4158c5b61d1c386b23f82dd320a1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50268bab7555d7332562807b550fa4acd5d4158c5b61d1c386b23f82dd320a1b->enter($__internal_50268bab7555d7332562807b550fa4acd5d4158c5b61d1c386b23f82dd320a1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "content/concepteur.html.twig"));

        // line 3
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 3, $this->getSourceContext()); })()), array(0 => "bootstrap_4_layout.html.twig"), true);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_12e274521d35a328ade58491e00dd28bc09ccb3fba67187a74bd1359f58af72e->leave($__internal_12e274521d35a328ade58491e00dd28bc09ccb3fba67187a74bd1359f58af72e_prof);

        
        $__internal_50268bab7555d7332562807b550fa4acd5d4158c5b61d1c386b23f82dd320a1b->leave($__internal_50268bab7555d7332562807b550fa4acd5d4158c5b61d1c386b23f82dd320a1b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e098e090661f66ab5e3414aac4482696df6a3ab3a3b5e0fbf24fc76919d30088 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e098e090661f66ab5e3414aac4482696df6a3ab3a3b5e0fbf24fc76919d30088->enter($__internal_e098e090661f66ab5e3414aac4482696df6a3ab3a3b5e0fbf24fc76919d30088_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3c461d21b6a6d1ec96bba66c9e532a64e0eb39ccf5a0a3d3d6f62440697cde4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c461d21b6a6d1ec96bba66c9e532a64e0eb39ccf5a0a3d3d6f62440697cde4e->enter($__internal_3c461d21b6a6d1ec96bba66c9e532a64e0eb39ccf5a0a3d3d6f62440697cde4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Concepteur";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_3c461d21b6a6d1ec96bba66c9e532a64e0eb39ccf5a0a3d3d6f62440697cde4e->leave($__internal_3c461d21b6a6d1ec96bba66c9e532a64e0eb39ccf5a0a3d3d6f62440697cde4e_prof);

        
        $__internal_e098e090661f66ab5e3414aac4482696df6a3ab3a3b5e0fbf24fc76919d30088->leave($__internal_e098e090661f66ab5e3414aac4482696df6a3ab3a3b5e0fbf24fc76919d30088_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_81695c5694d76c7b925bcd6cd8665a8794ce311bb896b48fb83e01b928c52526 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81695c5694d76c7b925bcd6cd8665a8794ce311bb896b48fb83e01b928c52526->enter($__internal_81695c5694d76c7b925bcd6cd8665a8794ce311bb896b48fb83e01b928c52526_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_08daa4bf036c542a0a0579cd77fc6cd4e537b1e64798143df1f922eaa56e42f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08daa4bf036c542a0a0579cd77fc6cd4e537b1e64798143df1f922eaa56e42f7->enter($__internal_08daa4bf036c542a0a0579cd77fc6cd4e537b1e64798143df1f922eaa56e42f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/concepteur.css"), "html", null, true);
        
        $__internal_08daa4bf036c542a0a0579cd77fc6cd4e537b1e64798143df1f922eaa56e42f7->leave($__internal_08daa4bf036c542a0a0579cd77fc6cd4e537b1e64798143df1f922eaa56e42f7_prof);

        
        $__internal_81695c5694d76c7b925bcd6cd8665a8794ce311bb896b48fb83e01b928c52526->leave($__internal_81695c5694d76c7b925bcd6cd8665a8794ce311bb896b48fb83e01b928c52526_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_118734947d3db0991ef54ff760bea5a097f87eaa15376289345daaadf84b7b90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_118734947d3db0991ef54ff760bea5a097f87eaa15376289345daaadf84b7b90->enter($__internal_118734947d3db0991ef54ff760bea5a097f87eaa15376289345daaadf84b7b90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9e6a7883530f083a7b5c6cc491a2f2c7ed25de6e2249864af8b5ef9ac5b56e2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e6a7883530f083a7b5c6cc491a2f2c7ed25de6e2249864af8b5ef9ac5b56e2d->enter($__internal_9e6a7883530f083a7b5c6cc491a2f2c7ed25de6e2249864af8b5ef9ac5b56e2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "        ";
        $this->loadTemplate("flash_messages.html.twig", "content/concepteur.html.twig", 11)->display($context);
        // line 12
        echo "
        <div id=\"loading\">
            <img id=\"loading-image\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/loader.gif"), "html", null, true);
        echo "\" alt=\"Loading...\" />
        </div>

        <div id=\"map\" oncontextmenu=\"return false\"></div>

        <div id=\"mapFilter\" class=\"mapFilter\"></div>

        <!-- Zone de texte de la distance en bas -->

           <!-- Contrôles présents sur la carte-->
            <input id=\"pac-input\" class=\"controls\" type=\"text\" placeholder=\"Entrez votre localisation\">
            <button type=\"button\" id=\"centerMap\" name=\"bouton4\" title=\"Centrez la carte sur votre localisation\"><img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/gps.png"), "html", null, true);
        echo "\" alt=\"Localisez vous\"/></button>


            <div class=\"map-bottom\">
                <div id=\"textDiv\"></div>
                <input type=\"button\" id=\"deleteAllButton\" class=\"bottomButton\" name=\"bouton2\" value=\"Supprimer tous les points\">
                <input type=\"button\" id=\"deleteLastButton\" class=\"bottomButton\" name=\"bouton\" value=\"Supprimer le dernier point\">
                <input type=\"button\" id=\"closeLoopButton\" class=\"bottomButton\" name=\"bouton3\" value=\"Fermer la boucle\" title=\"Reliez votre dernier point avec votre point de départ\">
            </div>




            <button id=\"boutonMenuLateral\" class=\"boutonMenuLateralStyle\"><img src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/menu-droite.png"), "html", null, true);
        echo "\" alt=\"Droite\" id=\"imgBoutonMenuGauche\"></button>
            <div id=\"menuGauche\">
                <p id=\"menuGauche-message\">Commencez par tracer votre parcours !</p>

                <div id=\"menuGauche-interieur\">
                    <div class=\"menuGauche-partie\" id=\"temps-necessaire-container\">
                        <p class=\"menuGauche-partie-texte temps-necessaire-texte\">Connaître le temps nécessaire pour parcourir votre<br/>itinéraire en donnant votre vitesse moyenne</p>
                        <div class=\"temps-necessaire-formcontainer\">
                            <input type=\"text\" name=\"vitesse-moyenne\" id=\"temps-necessaire-input\"/>
                            <button type=\"submit\" id=\"temps-necessaire-submit\" class=\"menuGauche-btn-submit\"><img src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/fleche-tempsnecessaire.png"), "html", null, true);
        echo "\"></button>
                        </div>
                        <p class=\"temps-necessaire-soustexte\">Rentrez votre vitesse moyenne en km/h</p>
                    </div>
                    <div class=\"menuGauche-partie\" id=\"temps-necessaire-resultat-partie\">
                        <div class=\"temps-necessaire-resultat-container\">
                            <p id=\"temps-necessaire-resultat\">
                                Avec votre allure de
                                <span id=\"temps-necessaire-resultat-allure\"></span>
                                km/h, <br/> vous prendrez
                                <span id=\"temps-necessaire-resultat-temps\"></span>
                            </p>
                            <button id=\"temps-necessaire-resultat-btn\">Calculer à nouveau</button>
                        </div>
                    </div>




                    <div class=\"menuGauche-partie\" id=\"vitesse-moyenne-container\">
                        <div class=\"sepa-container\"><div class=\"menuGauche-sepa\"></div></div>
                        <div class=\"vitesse-moyenne-souscontainer\">
                                <p class=\"menuGauche-partie-texte vitesse-moyenne-texte\">Calculez à quelle vitesse en moyenne vous avez<br/>parcouru cet itinéraire en rentrant combien<br/>de temps vous avez mis </p>
                                <div class=\"vitesse-moyenne-formcontainer\">
                                    <div class=\"vitesse-moyenne-inputcontainer\">
                                        <input type=\"text\" name=\"vitesse-moyenne\" id=\"vitesse-moyenne-input-h\" class=\"vitesse-input\" placeholder=\"h\"/>
                                        <input type=\"text\" name=\"vitesse-moyenne\" id=\"vitesse-moyenne-input-m\" class=\"vitesse-input\" placeholder=\"m\"/>
                                        <input type=\"text\" name=\"vitesse-moyenne\" id=\"vitesse-moyenne-input-s\" class=\"vitesse-input\" placeholder=\"s\"/>
                                    </div>
                                    <button type=\"submit\" id=\"vitesse-moyenne-submit\" class=\"menuGauche-btn-submit vitesse-moyenne-submit\"><img src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/fleche-tempsnecessaire.png"), "html", null, true);
        echo "\"></button>
                                </div>
                        </div>
                    </div>
                    <div class=\"menuGauche-partie\" id=\"vitesse-moyenne-resultat-container\">
                        <div class=\"sepa-container\"><div class=\"menuGauche-sepa\"></div></div>
                        <div class=\"vitesse-moyenne-resultat-container\">
                            <p id=\"vitesse-moyenne-resultat\">
                                Vous avez parcouru ce parcours avec <br/>une vitesse moyenne de
                                <span id=\"vitesse-moyenne-resultat-vitesse\"></span>
                                km/h
                            </p>
                            <button id=\"vitesse-moyenne-resultat-btn\">Calculer à nouveau</button>
                        </div>
                    </div>



                    <div class=\"menuGauche-partie\">
                        <div class=\"sepa-container\"><div class=\"menuGauche-sepa\"></div></div>
                        <div class=\"menuGauche-partie-container\">
                            <img src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/velo.png"), "html", null, true);
        echo "\" alt=\"Icône vélo\" class=\"menuGauche-img\">
                            <p class=\"menuGauche-partie-temps-sport\"><span title=\"Avec une vitesse moyenne de 20 km/h\">En vélo,</span> vous prendrez <span id=\"tempsVelo\"></span></p>
                        </div>
                    </div>

                    <div class=\"menuGauche-partie\">
                        <div class=\"sepa-container\"><div class=\"menuGauche-sepa\"></div></div>
                        <div class=\"menuGauche-partie-container\">
                            <img src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/footing.png"), "html", null, true);
        echo "\" alt=\"Icône footing\" class=\"menuGauche-img\">
                            <p class=\"menuGauche-partie-temps-sport\"><span title=\"Avec une vitesse moyenne de 13 km/h\">Avec une allure de footing,</span> vous prendrez <span id=\"tempsFooting\"></span></p>
                        </div>
                    </div>

                    <div class=\"menuGauche-partie\">
                        <div class=\"sepa-container\"><div class=\"menuGauche-sepa\"></div></div>
                        <div class=\"menuGauche-partie-container\">
                            <img src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/marche.png"), "html", null, true);
        echo "\" alt=\"Icône marche\" class=\"menuGauche-img\">
                            <p class=\"menuGauche-partie-temps-sport\"><span title=\"Avec une vitesse moyenne de 6 km/h\">En marchant,</span> vous prendrez <span id=\"tempsMarche\"></span></p>
                        </div>
                    </div>
                </div>

                <!--<button id=\"boutonMenuLateralFermer\" class=\"boutonMenuLateralStyle\"><img src=\"img/menu-gauche.png\" alt=\"Gauche\"></button>-->
            </div>





            <select name=\"modeSuivi\" id=\"selectModeSuivi\">
                <option value=\"DRIVING\" selected disabled=true>Mode de suivi des routes</option>
                <option value=\"BICYCLING\" title=\"Les itinéraires essayerons au maximum de passer par des pistes cyclables\">Vélo</option>
                <option value=\"WALKING\" title=\"Privilégie les voies piétonnes et les rues avec trottoir\">Marche et course à pied</option>
                <option value=\"DRIVING\" title=\"N'emprunte que le réseau routier\">Voiture ou vélo de route</option>
            </select>

            <button id=\"savePath\" class=\"saveButton\" name=\"button4\" value=\"\" title=\"Sauvegardez ou publiez votre parcours\">
                <img src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/share.png"), "html", null, true);
        echo "\" alt='Icône sauvegarder' class=\"saveImgHover\">
            </button>
            <div class=\"saveContainer\" id=\"saveContainer\">
                <div class=\"save-messageContainer\">
                    <div id=\"save-message\">
                        <p>Commencez par tracer votre parcours</p>
                    </div>
                </div>
                <div id=\"formFilter\"></div>
                <div class=\"formContainer\">
                    <div class=\"formPopUp\" id=\"formPopUp\">
                        <p class=\"form-facultatif\">* À part pour le titre, tous les champs sont facultatifs</p>
                        ";
        // line 146
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 146, $this->getSourceContext()); })()), 'form_start');
        echo "
                        ";
        // line 147
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 147, $this->getSourceContext()); })()), "titre", array()), 'row');
        echo "

                        <p class=\"typeSport-title\">Pour quel sport ce parcours est il le plus adapté ?</p>
                        <div class=\"typeSport-container\">
                            <div class=\"typeSport-input-container\">
                                <input id=\"path_typeSport_0\" name=\"path[typeSport]\" required=\"required\" value=\"marche\" type=\"radio\">
                                <label for=\"path_typeSport_0\" class=\"required typeSport-input\"><span></span>Marche</label>
                            </div>

                            <div class=\"typeSport-input-container\">
                                <input id=\"path_typeSport_1\" name=\"path[typeSport]\" required=\"required\" value=\"course\" type=\"radio\">
                                <label for=\"path_typeSport_1\" class=\"required typeSport-input\"><span></span>Course à pied</label>
                            </div>

                            <div class=\"typeSport-input-container\">
                                <input id=\"path_typeSport_2\" name=\"path[typeSport]\" required=\"required\" value=\"veloroute\" type=\"radio\">
                                <label for=\"path_typeSport_2\" class=\"required typeSport-input\"><span></span>Vélo de route</label>
                            </div>

                            <div class=\"typeSport-input-container\">
                                <input id=\"path_typeSport_3\" name=\"path[typeSport]\" required=\"required\" value=\"vtt\" type=\"radio\">
                                <label for=\"path_typeSport_3\" class=\"required typeSport-input\"><span></span>VTT</label>
                            </div>

                            <div class=\"typeSport-input-container\">
                                <input id=\"path_typeSport_4\" name=\"path[typeSport]\" required=\"required\" value=\"autre\" type=\"radio\">
                                <label for=\"path_typeSport_4\" class=\"required typeSport-input\"><span></span>Autre</label>
                            </div>
                        </div>
                        ";
        // line 176
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 176, $this->getSourceContext()); })()), "description", array()), 'row');
        echo "
                        ";
        // line 177
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 177, $this->getSourceContext()); })()), "image", array()), 'row');
        echo "

                        <p class=\"autre_filtre-title\">Pour être encore plus précis</p>
                        <div class=\"path_autre_filtre\">
                            <div class=\"autrefiltre-input-container\">
                                <input id=\"path_autre_filtre_0\" class=\"form-check-input\" name=\"path[autre_filtre][]\" value=\"detente\" type=\"checkbox\">
                                <label for=\"path_autre_filtre_0\" class=\"autrefiltre-input\"><span></span>Détente</label>
                            </div>

                            <div class=\"autrefiltre-input-container\">
                                <input id=\"path_autre_filtre_1\" class=\"form-check-input\" name=\"path[autre_filtre][]\" value=\"sportif\" type=\"checkbox\">
                                <label for=\"path_autre_filtre_1\" class=\"autrefiltre-input\"><span></span>Sportif</label>
                            </div>

                            <div class=\"autrefiltre-input-container\">
                                <input id=\"path_autre_filtre_2\" class=\"form-check-input\" name=\"path[autre_filtre][]\" value=\"denivele\" type=\"checkbox\">
                                <label for=\"path_autre_filtre_2\" class=\"autrefiltre-input\"><span></span>Dénivelé important</label>
                            </div>

                            <div class=\"autrefiltre-input-container\">
                                <input id=\"path_autre_filtre_3\" class=\"form-check-input\" name=\"path[autre_filtre][]\" value=\"paysage\" type=\"checkbox\">
                                <label for=\"path_autre_filtre_3\" class=\"autrefiltre-input\"><span></span>Beau paysage</label>
                            </div>

                            <div class=\"autrefiltre-input-container\">
                                <input id=\"path_autre_filtre_4\" class=\"form-check-input\" name=\"path[autre_filtre][]\" value=\"mauvais etat\" type=\"checkbox\">
                                <label for=\"path_autre_filtre_4\" class=\"autrefiltre-input\"><span></span>Mauvais état</label>
                            </div>
                        </div>

                        ";
        // line 207
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 207, $this->getSourceContext()); })()), "path", array()), 'row');
        echo "
                        ";
        // line 208
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 208, $this->getSourceContext()); })()), "placeId", array()), 'row');
        echo "
                        <input type=\"hidden\" value=\"Caché\" id=\"hiddenInputPath\" name=\"path[path]\"/>
                        <input type=\"hidden\" value=\"Caché\" id=\"hiddenInputPlaceId\" name=\"path[placeId]\"/>
                        <button id=\"saveFormBtn\" class=\"submit-input\">Partager</button>
                        ";
        // line 212
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 212, $this->getSourceContext()); })()), 'form_end');
        echo "
                    </div>
                </div>
                <div id=\"mapFilterForm\" class=\"mapFilter\"></div>
            </div>
";
        
        $__internal_9e6a7883530f083a7b5c6cc491a2f2c7ed25de6e2249864af8b5ef9ac5b56e2d->leave($__internal_9e6a7883530f083a7b5c6cc491a2f2c7ed25de6e2249864af8b5ef9ac5b56e2d_prof);

        
        $__internal_118734947d3db0991ef54ff760bea5a097f87eaa15376289345daaadf84b7b90->leave($__internal_118734947d3db0991ef54ff760bea5a097f87eaa15376289345daaadf84b7b90_prof);

    }

    // line 221
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f3386ce648399e0d0bb9283abef8d5a2e0ebcd282b7a0af6bfd6e1270821e12c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3386ce648399e0d0bb9283abef8d5a2e0ebcd282b7a0af6bfd6e1270821e12c->enter($__internal_f3386ce648399e0d0bb9283abef8d5a2e0ebcd282b7a0af6bfd6e1270821e12c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_35a6d4730373d06a8467c55d02361dc3707906810cf9276cee2d58ec0c9801bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35a6d4730373d06a8467c55d02361dc3707906810cf9276cee2d58ec0c9801bc->enter($__internal_35a6d4730373d06a8467c55d02361dc3707906810cf9276cee2d58ec0c9801bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 222
        echo "    ";
        // line 223
        echo "    <script src=\" ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/mousetrap.js"), "html", null, true);
        echo " \"></script>
    <script type=\"text/javascript\" src=\"http://code.jquery.com/jquery-latest.js\"></script>
    <script language=\"javascript\" type=\"text/javascript\">
        \$(window).load(function() {
            \$('#loading').hide();
        });
    </script>
    <script>
        var globalPoly;   //objet Polyline
        var poly;   //objet Polyline

        var pathArray = [];     //tableau contenant les coordonnées de chaque point

        var map;     //la carte (objet)
        var geoPos;     //objet

        var markerVide = \"";
        // line 239
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/empty.png"), "html", null, true);
        echo "\";   //pour ne pas avoir de marqueur pour chaque point (à ameliorer)

        var firstPoint;    //premier point à qui l'on donnera un skin différent (marqueur vert)
        var lastPoint;    //dernier point à avoir été placé (dernieres coords, pas dernier marqueur)
        var marker;
        var markers = [];    //array contenant l'ensemble des marqueurs
        var firstMarker;   //premier marqueur (à ne pas confondre avec firstPoint qui contient les coords de notre premier point)
        var distanceKmFloat;     //distance en km et au millième près (ex. 3.564 pour 3km et 564 mètres)
        var distanceArrondie;    //distance en mètres

        var vitesseVelo = 20;     // Vitesses (en km/h) pour les calculs du menu de gauche
        var vitesseFooting = 11;
        var vitesseMarche = 6;



        function initMap() {

            var mapDiv = document.getElementById(\"map\");
            //je récupére mon element avec l'id map
            var windowHeight = window.innerHeight;
            //je prend la hauteur de la fenêtre
            var tailleNb = windowHeight - 80;
            var tailleVoulu = tailleNb + 'px';
            //je calcule pour que ma map fasse hauteur de la fenêtre moins le header
            mapDiv.style.height = tailleVoulu;
            //c'est comme si je fais en CSS: 'height: tailleVoulu;'

            //definir taille du menu gauche
            var menuGauche = document.getElementById('menuGauche');
            menuGauche.style.height = tailleVoulu;

            var saveContainer = document.getElementById('saveContainer');
            saveContainer.style.height = tailleVoulu;

            /*var formPopUp = document.getElementById('formPopUp');
            formPopUp.style.height = (tailleNb - 100) + 'px';*/



            //on veut centrer la carte sur notre position si la geolocalisation est activée
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function(position){   //recupère notre position
                    geoPos = {
                        lat: position.coords.latitude,
                        lng: position.coords.longitude
                    };

                    map.setCenter(geoPos);   //centre la carte

                });
            } else {
                // Le navigateur ne supporte pas la géolocalisation ou elle a été refusé
                alert('Votre naviguateur ne supporte pas la géolocalisation ou un problème est survenu');
            }

            map = new google.maps.Map(document.getElementById('map'), {    //recupére la div #map et la transforme en objet map, stocké dans la var map
                zoom: 14,   //Définie le zoom par défaut
                draggableCursor: \"crosshair\",   //on a une croix comme curseur
                mapTypeId: 'hybrid',
                center: {lat: 49.3904707, lng: 3.3929198}  //si la geolocalisation n'est pas activée, on centre à Bucy
            });



            //Dans un soucis d'ergonomie, les markers et la couleurs des polylines changent en fonction du type de carte
            var mapType = map.getMapTypeId();
            var polyColor;
            var textDiv = document.getElementById('textDiv');

            if (mapType == 'hybrid'){
                polyColor = \"#35f700\";
                textDiv.style.color = \"#fff\";
            } else {
                polyColor = \"#3BA14C\";
                textDiv.style.color = \"#000\";
            }

            google.maps.event.addListener( map, 'maptypeid_changed', function(){
                var mapType = map.getMapTypeId();

                if (mapType == 'hybrid'){
                    hybridMapStyle();
                } else {
                    planMapStyle();
                }
            });



            globalPoly = new google.maps.Polyline({   //créé déjà la polyline
                strokeColor: \"#35f700\",
                strokeOpacity: 1.0,
                strokeWeight: 3
            });
            globalPoly.setMap(map);   //on attache l'objet polyline à notre map

            poly = new google.maps.Polyline({   //créé déjà la polyline
                strokeColor: \"#35f700\",
                strokeOpacity: 1.0,
                strokeWeight: 3
            });

            //listeners qui vont écouter les événements click et rightcick pour y lancer des fonctions
            map.addListener('click', addLatLng);     //quand on clique sur un endroit de la carte on lance la fonction addLatLng
            map.addListener('rightclick', addLatLngRoute);    //quand on clique droit sur un endroit on lance la fonction addLatLngRoute




            //Ici, on va transformer nos champs HTML (que l'on va recupérer avec getElementById) en \"contrôles\" de la map. Pour l'API, un contrôle est par exemple le bouton plein écran en haut à droite. C'est le seul moyen potable de faire passer des boutons sur une carte.

            var input = document.getElementById('pac-input');
            var searchBox = new google.maps.places.SearchBox(input);   //on définit que notre input est une search box (qui va nous permettre de rentrer notre localisation avec l'autocomplétion)
            map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);   //ce contrôle se positionnera en haut à gauche


            var deleteAllButton = document.getElementById('deleteAllButton');
            map.controls[google.maps.ControlPosition.BOTTOM].push(deleteAllButton);

            var deleteLastButton = document.getElementById('deleteLastButton');
            map.controls[google.maps.ControlPosition.BOTTOM].push(deleteLastButton);

            var closeLoopButton = document.getElementById('closeLoopButton');
            map.controls[google.maps.ControlPosition.BOTTOM].push(closeLoopButton);


            var centerMap = document.getElementById('centerMap');
            map.controls[google.maps.ControlPosition.TOP_LEFT].push(centerMap);


            var selectModeSuivi = document.getElementById('selectModeSuivi');
            map.controls[google.maps.ControlPosition.TOP_LEFT].push(selectModeSuivi);

            var savePath = document.getElementById('savePath');
            map.controls[google.maps.ControlPosition.RIGHT].push(savePath);

            var boutonMenuLateral = document.getElementById('boutonMenuLateral');
            map.controls[google.maps.ControlPosition.LEFT].push(boutonMenuLateral);




            //Toute cette dernière section se rapporte à la searchbox (localisation)

            map.addListener('bounds_changed', function() {
                searchBox.setBounds(map.getBounds());
            });

            searchBox.addListener('places_changed', function() {
                var places = searchBox.getPlaces();

                if (places.length === 0) {
                    return;
                }

                var bounds = new google.maps.LatLngBounds();

                places.forEach(function(place) {
                    if (!place.geometry) {
                        console.log(\"Le lieu ne retourne rien\");
                        return;
                    }

                    if (place.geometry.viewport) {
                        bounds.union(place.geometry.viewport);
                    } else {
                        bounds.extend(place.geometry.location);
                    }
                });

                map.fitBounds(bounds);
            });
        }
        /************* FIN INITMAP *************/








        // Fonction qui sera executée lors du clique d'un endroit de la carte
        function addLatLng(event) {
            var monPath = globalPoly.getPath();   //on récupére le parcours (si ce n'est pas le premier point)

            monPath.push(event.latLng);


            var markerStart;
            var mapType = map.getMapTypeId();

            if (mapType == 'hybrid'){
                markerStart = \"";
        // line 433
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/marker_hybrid.png"), "html", null, true);
        echo "\";
            } else {
                markerStart = \"";
        // line 435
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/marker.png"), "html", null, true);
        echo "\";
            }


            //Si c'est le premier marqueur on lui donne l'icone image sinon on laisse un marqeur normale
            if (monPath.getLength() === 1) {
                marker = new google.maps.Marker({
                    position: event.latLng,
                    map: map,
                    icon: markerStart          //le marqueur aura notre image de drapeau
                });

                firstPoint = event.latLng;

                lastPoint = event.latLng;

                firstMarker = marker;
            }
            else{     //sinon cela veut dire que ce n'est pas le premier marqueur et on ne lui donne pas de skin (empty.png)
                marker = new google.maps.Marker({
                    position: event.latLng,
                    map: map,
                    icon: markerVide
                });

                markers.push(marker);   //on met notre tout nouveau marker dans le tableau markers

                lastPoint = event.latLng;

                pathArray = monPath.getArray();

                var distance = google.maps.geometry.spherical.computeLength(pathArray);   //calcule la distance du parcours en comptant tout les points
                distanceArrondie = Math.round(distance);    //arrondi la distance à l'unité près
                distanceKmFloat = distanceArrondie/1000;
            }

            var div = document.getElementById(\"textDiv\");    //recupere la div textDiv
            if ((distanceArrondie == undefined) || (distanceArrondie == 0)){   //si aucun parcours n'est présent ou s'il n'y a qu'un marqueur
                div.textContent = \"Vous n'avez placé qu'un seul marqueur\"
            } else {
                div.textContent = \"Il y a \" + distanceKmFloat + \" kilomètres entre le premier et le dernier point\" ;
                //on affiche la distance arrondie et au km dans la div textDiv
                div.title = \"Ou \" + distanceArrondie + \" mètres\";

                var menuGaucheInterieur = document.getElementById(\"menuGauche-interieur\");
                menuGaucheInterieur.style.display = \"block\";

                var menuGaucheMessage = document.getElementById(\"menuGauche-message\");
                menuGaucheMessage.style.display = \"none\";

                var formPopUp = document.getElementById(\"formPopUp\");
                formPopUp.style.display = \"block\";

                var saveMessage = document.getElementById(\"save-message\");
                saveMessage.style.display = \"none\";
            }

            updateTempsGlobal(distanceKmFloat);
        }
        /************* FIN ADDLATLNG *************/












        //Fonction pour le clique droit qui permet de calculer la route entre deux points, passés en paramètres

        var directionsService;

        function calculateRoute(directionsService, lastPoint, newPoint) {
            var monPath = globalPoly.getPath();

            var directionsService = new google.maps.DirectionsService();

            var selectModeSuivi = document.getElementById('selectModeSuivi');

            var travelMode = selectModeSuivi.options[selectModeSuivi.selectedIndex].value;   //ici on met que le mode de transport est la marche mais in pourra plus tard laisser à l'utilisateur de choisir le mode
            var request = {
                origin: lastPoint,
                destination: newPoint,
                travelMode: google.maps.TravelMode[travelMode]
            };

            directionsService.route(request, function(response, status) {
                    if (status == 'OK') {                              //s'il n'y a aucun problème avec l'itinéraire
                        var pointsArray = response.routes[0].overview_path;

                        for (var i = 0; i < pointsArray.length; i++) {
                            monPath.push(pointsArray[i]);
                        }

                        updateRouteLength();
                    } else {
                        alert(\"Il n'y a pas de chemin pour aller à cet endroit\");
                    }
                }
            )
        }
        /************* FIN CALCULROUTE *************/





        //lorsque l'on right click sur un endroit on va ralier le dernier point créé à ce tout nouveau point mais en affichant l'itinéraire en passant par la route ou les chemins (pas en créant une ligne droite)
        function addLatLngRoute(event){

            newPoint = event.latLng;   // Coords du point qui vient d'etre rightclické

            calculateRoute(directionsService, lastPoint, newPoint);  //fonction qui calcule et affiche l'itinéraire

            var monPath = globalPoly.getPath();

            marker = new google.maps.Marker({
                position: event.latLng,
                map: map,
                icon: markerVide
            });

            poly.setMap(map);  //on affiche la polyline sur la map

            markers.push(marker);   //on met notre tout nouveau marker dans le tableau markers

            lastPoint = event.latLng;
        }
        /************* FIN ADDLATLNGROUTE *************/










        //Fonction qui met à jour la zone de texte en bas de la carte qui donne la distance du parcours
        function updateRouteLength(){

            var monPath = globalPoly.getPath();

            pathArray = monPath.getArray();

            var distance = google.maps.geometry.spherical.computeLength(pathArray);   //calcule la distance du parcours en comptant tout les points
            distanceArrondie = Math.round(distance);    //arrondi la distance à l'unité près
            distanceKmFloat = distanceArrondie/1000;


            var div = document.getElementById(\"textDiv\");    //recupere la div textDiv
            if ((distanceArrondie == undefined) || (distanceArrondie == 0)){   //si aucun parcours n'est présent ou s'il n'y a qu'un marqueur
                div.textContent = \"Vous n'avez placé qu'un seul marqueur\";
            } else {
                div.textContent = \"Il y a \" + distanceKmFloat + \" kilomètres entre le premier et le dernier point\" ;
                //on affiche la distance arrondie et au km dans la div textDiv
                div.title = \"Ou \" + distanceArrondie + \" mètres\";

                var menuGaucheInterieur = document.getElementById(\"menuGauche-interieur\");
                menuGaucheInterieur.style.display = \"block\";

                var menuGaucheMessage = document.getElementById(\"menuGauche-message\");
                menuGaucheMessage.style.display = \"none\";

                var formPopUp = document.getElementById(\"formPopUp\");
                formPopUp.style.display = \"block\";

                var saveMessage = document.getElementById(\"save-message\");
                saveMessage.style.display = \"none\";
            }

            updateTempsGlobal(distanceKmFloat);
        }
        /************* FIN UPDATEROUTELENGTH *************/








        //return 23 si on lui passe x.23
        function getDecimal(n) {
            return (n - Math.floor(n));
        }


        //return 15 si on lui passe x.25 (passe en base 60)
        function getPartieDecimale(n){
            return (Math.round((Math.round(100 * getDecimal(n))/100) * 100 * 60 / 100));
        }

        //met à jour tout les temps nécessaires dans le menu gauche
        function updateTempsGlobal(distanceKmFloat){
            //velo
            updateTempsNecessaire(distanceKmFloat, vitesseVelo, \"tempsVelo\");

            //footing
            updateTempsNecessaire(distanceKmFloat, vitesseFooting, \"tempsFooting\");

            //marche
            updateTempsNecessaire(distanceKmFloat, vitesseMarche, \"tempsMarche\");
        }

        //met à jour le temps nécessaure (menu gauche) du sport qu'on lui passe
        function updateTempsNecessaire(distanceKmFloat, vitesseMoyenne, sport){
            var tempsHTML = document.getElementById(sport); //on récup l'élément p tempsVelo

            var temps = distanceKmFloat / vitesseMoyenne; // t = d / v      on sort le temps qu'il faut en heures (mais on a 1.5 heures au lieu de 1h30)
            var tempsEnMinutesAvecSecondes = Math.round(100 * (temps * 60))/100;  //on sort 52.31 (52 minutes 31 secondes)
            var secondesTemps = getPartieDecimale(tempsEnMinutesAvecSecondes);

            var tempsEnMinutes = Math.round(tempsEnMinutesAvecSecondes);   //on sort juste 52

            //Pour l'orthographe :)
            if(tempsEnMinutes === 1){
                var minuteOrthographe = \" minute\";
            }else{
                var minuteOrthographe = \" minutes\";
            }

            if(secondesTemps === 1){
                var secondeOrthographe = \" seconde\";
            }else{
                var secondeOrthographe = \" secondes\";
            }


            if(tempsEnMinutes < 1){
                tempsHTML.textContent = secondesTemps + secondeOrthographe;
                tempsHTML.title = \"\";
            }else{
                //si il y a plus de 60 minutes on affiche en heures et minutes
                if(tempsEnMinutes < 60){
                    tempsHTML.textContent = tempsEnMinutes + minuteOrthographe;
                    tempsHTML.title = \"Et \" + secondesTemps + secondeOrthographe;
                }else{
                    var tempsEnHeuresFloat = tempsEnMinutes / 60;
                    var minutesDuTempsPourHeures = getPartieDecimale(tempsEnHeuresFloat); //on recup les minutes
                    var tempsEnHeures = Math.round(tempsEnHeuresFloat);

                    if(minutesDuTempsPourHeures === 1){
                        var minuteOrthographe = \" minute\";
                    }else{
                        var minuteOrthographe = \" minutes\";
                    }

                    if(tempsEnHeures === 1){
                        var heureOrthographe = \" heure\";
                    }else{
                        var heureOrthographe = \" heures\";
                    }

                    tempsHTML.textContent = tempsEnHeures + heureOrthographe + \" et \" + minutesDuTempsPourHeures + minuteOrthographe;  //on affiche
                }
            }

        }
        /************* FIN UPDATETEMPSNECESSAIRE *************/














        //return le dernier élément d'un tableau
        function dernierElem(tbl){
            var tbl = tbl;
            var tblLength = tbl.length;
            var pos = tblLength - 1;
            return tbl[pos];
        }


        //Erreur de geolocalisation
        function handleLocationError(browserHasGeolocation, infoWindow, pos) {
            infoWindow.setPosition(pos);
            infoWindow.setContent(browserHasGeolocation ?
                'Erreur: Le service de Géolocalisation a echoué.' :
                'Erreur: Votre naviguateur ne support pas la Géolocalisation.');
        }




        //fonction qui va nous créer un setMap mais pour tous les marqueurs
        function setMapOnAll(map) {
            for (var i = 0; i < markers.length; i++) {
                markers[i].setMap(map);
            }
        }



        //Fonctions des contrôles

        function deleteLastPoint(){
            var monPath = globalPoly.getPath();

            monPath.pop();   //on supprime le dernier élément du tableau path

            var pathArray = monPath.getArray();
            lastPoint = dernierElem(pathArray);

            var pathLength = monPath.getLength();

            if(pathLength === 0){
                deletePoints();
            }

            if(pathLength === 1){
                var menuGaucheInterieur = document.getElementById(\"menuGauche-interieur\");
                menuGaucheInterieur.style.display = \"none\";

                var menuGaucheMessage = document.getElementById(\"menuGauche-message\");
                menuGaucheMessage.style.display = \"block\";

                var formPopUp = document.getElementById(\"formPopUp\");
                formPopUp.style.display = \"block\";

                var formFilter = document.getElementById(\"formFilter\");
                formFilter.style.display = \"block\";

                var saveMessage = document.getElementById(\"save-message\");
                saveMessage.style.display = \"block\";
            }

            updateRouteLength();

            updateTempsGlobal(distanceKmFloat);
        }

        \$('#deleteLastButton').click(deleteLastPoint);

        \$('#deleteAllButton').click(function() {
            firstMarker.setMap(null);
            setMapOnAll(null);
            markers = [];
            globalPoly.setMap(null);

            monPath = globalPoly.getPath();
            monPath = [];
            lastPoint = \"\";

            pathArray = [];

            var div = document.getElementById(\"textDiv\");
            div.textContent = \"Vous n'avez pas placé de marqueur\";

            distanceArrondie = 0;
            distanceKmFloat = 0;

            var mapType = map.getMapTypeId();

            if (mapType == 'hybrid'){
                polyColor = \"#35f700\";
            } else {
                polyColor = \"#3BA14C\";
            }

            globalPoly = new google.maps.Polyline({   //on recréé une polyline pour que lorsque que l'on supprime l'ancienne on ne reparte pas sur l'ancienne
                strokeColor:  polyColor,
                strokeOpacity: 1.0,
                strokeWeight: 3
            });
            globalPoly.setMap(map);

            var menuGaucheInterieur = document.getElementById(\"menuGauche-interieur\");
            menuGaucheInterieur.style.display = \"none\";

            var menuGaucheMessage = document.getElementById(\"menuGauche-message\");
            menuGaucheMessage.style.display = \"block\";

            var formPopUp = document.getElementById(\"formPopUp\");
            formPopUp.style.display = \"block\";

            var formFilter = document.getElementById(\"formFilter\");
            formFilter.style.display = \"block\";

            var saveMessage = document.getElementById(\"save-message\");
            saveMessage.style.display = \"block\";
        });


        //Calcule et affiche la route entre le dernier point et le point de départ pour fermer la boucle
        \$('#closeLoopButton').click(function() {
            calculateRoute(directionsService, lastPoint, firstPoint);
        });

        \$('#centerMap').click(function() {
            map.setCenter(geoPos);
        });





        /****** MENU GAUCHE ******/
        var menuGaucheBouton = document.getElementById('boutonMenuLateral');
        var menuGauche = document.getElementById('menuGauche');
        var mapFilter = document.getElementById('mapFilter');

        menuGaucheBouton.onclick = function() {
            menuGauche.style.display = \"block\";
            mapFilter.style.display = \"block\";
        };

        \$('#temps-necessaire-submit').click(function() {
            var inputTempsNecessaire = document.getElementById('temps-necessaire-input');
            var vitesseInput = inputTempsNecessaire.value;

            if(vitesseInput != '' && isNaN(vitesseInput) == false && vitesseInput <= 300){
                var tempsNecessaireDiv = document.getElementById('temps-necessaire-container');
                tempsNecessaireDiv.style.display = \"none\";
                var tempsNecessaireResultatDiv = document.getElementById('temps-necessaire-resultat-partie');
                tempsNecessaireResultatDiv.style.display = \"block\";

                var temps = distanceKmFloat / vitesseInput; // t = d / v      on sort le temps qu'il faut en heures (mais on a 1.5 heures au lieu de 1h30)
                var tempsEnMinutesAvecSecondes = Math.round(100 * (temps * 60))/100;
                var secondesTemps = getPartieDecimale(tempsEnMinutesAvecSecondes);
                var tempsEnMinutes = Math.round(tempsEnMinutesAvecSecondes);   //on sort juste 52

                var tempsNecessaireResultatAllureSpan = document.getElementById('temps-necessaire-resultat-allure');
                tempsNecessaireResultatAllureSpan.textContent = vitesseInput;
                var tempsNecessaireResultatSpan = document.getElementById('temps-necessaire-resultat-temps');

                if(tempsEnMinutes === 1){
                    var minuteOrthographe = \" minute\";
                }else{
                    var minuteOrthographe = \" minutes\";
                }

                if(secondesTemps === 1){
                    var secondeOrthographe = \" seconde\";
                }else{
                    var secondeOrthographe = \" secondes\";
                }


                if(tempsEnMinutes < 1){
                    tempsNecessaireResultatSpan.textContent = secondesTemps + secondeOrthographe;
                    tempsNecessaireResultatSpan.title = \"\";
                }else{
                    //si il y a plus de 60 minutes on affiche en heures et minutes
                    if(tempsEnMinutes < 60){
                        tempsNecessaireResultatSpan.textContent = tempsEnMinutes + minuteOrthographe;
                        tempsNecessaireResultatSpan.title = \"Et \" + secondesTemps + secondeOrthographe;
                    }else{
                        var tempsEnHeuresFloat = tempsEnMinutes / 60;
                        var minutesDuTempsPourHeures = getPartieDecimale(tempsEnHeuresFloat); //on recup les minutes
                        var tempsEnHeures = Math.round(tempsEnHeuresFloat);

                        if(minutesDuTempsPourHeures === 1){
                            var minuteOrthographe = \" minute\";
                        }else{
                            var minuteOrthographe = \" minutes\";
                        }

                        if(tempsEnHeures === 1){
                            var heureOrthographe = \" heure\";
                        }else{
                            var heureOrthographe = \" heures\";
                        }

                        tempsNecessaireResultatSpan.textContent = tempsEnHeures + heureOrthographe + \" et \" + minutesDuTempsPourHeures + minuteOrthographe;  //on affiche
                    }
                }
            }else{
                alert(\"Vous n'avez soit rien rentré, soit rentré quelque chose d'autre qu'un nombre, soit un nombre supérieur à 300\");
            }
        });

        \$('#temps-necessaire-resultat-btn').click(function() {
            displayDefaultInterfaceTempsNecessaire();
        });

        function displayDefaultInterfaceTempsNecessaire(){
            var tempsNecessaireDiv = document.getElementById('temps-necessaire-container');
            tempsNecessaireDiv.style.display = \"block\";
            var tempsNecessaireResultatDiv = document.getElementById('temps-necessaire-resultat-partie');
            tempsNecessaireResultatDiv.style.display = \"none\";
            var inputTempsNecessaire = document.getElementById('temps-necessaire-input');
            inputTempsNecessaire.value = \"\";
        }




        /****** tpvm = Temps pour vitesse moyenne ******/

        \$('#vitesse-moyenne-submit').click(function() {
            var tpvmHInput = document.getElementById(\"vitesse-moyenne-input-h\");
            var tpvmMInput = document.getElementById(\"vitesse-moyenne-input-m\");
            var tpvmSInput = document.getElementById(\"vitesse-moyenne-input-s\");

            var tpvmH = tpvmHInput.value;
            var tpvmM = tpvmMInput.value;
            var tpvmS = tpvmSInput.value;

            if(tpvmH + tpvmM + tpvmS != '' && tpvmH + tpvmM + tpvmS != '0' && tpvmH + tpvmM + tpvmS != '00' && tpvmH + tpvmM + tpvmS != '000'){
                if(tpvmH <= 99){
                    if(tpvmM <= 59){
                        if(tpvmS <= 59){
                            var tpvmHInt;
                            var tpvmMInt;
                            var tpvmSInt;

                            if(tpvmH != ''){
                                tpvmHInt = parseInt(tpvmH, 10);
                            }else{
                                tpvmHInt = 0;
                            }
                            if(tpvmM != ''){
                                tpvmMInt = parseInt(tpvmM, 10);
                            }else{
                                tpvmMInt = 0;
                            }
                            if(tpvmS != ''){
                                tpvmSInt = parseInt(tpvmS, 10);
                            }else{
                                tpvmSInt = 0;
                            }

                            tpvmMInt = tpvmMInt * 100 / 60;
                            tpvmSInt = tpvmSInt * 100 / 60; /* On passe en base 100 */

                            tpvmMInt = tpvmMInt * 0.01;
                            tpvmSInt = tpvmSInt * 0.0001;

                            var tpvm = tpvmHInt + tpvmMInt + tpvmSInt;

                            var vitesseMoyenne = distanceKmFloat / tpvm; //d/t
                            var vitesseMoyenne = Math.round(100 * vitesseMoyenne) / 100;

                            var vitesseMoyenneResultatSpan = document.getElementById('vitesse-moyenne-resultat-vitesse');
                            vitesseMoyenneResultatSpan.textContent = vitesseMoyenne;
                        }else{
                            alert('Vous avez rentré une valeur supérieure à 59 dans le champ secondes');
                        }
                    }else{
                        alert('Vous avez rentré une valeur supérieure à 59 dans le champ minutes');
                    }
                }else{
                    alert('Vous avez rentré une valeur trop haute dans le champ heures');
                }
            }else{
                alert(\"Vous n'avez rien rentré\");
            }

            var vitesseMoyenneContainer = document.getElementById(\"vitesse-moyenne-container\");
            vitesseMoyenneContainer.style.display = \"none\";
            var vitesseMoyenneResultatContainer = document.getElementById(\"vitesse-moyenne-resultat-container\");
            vitesseMoyenneResultatContainer.style.display = \"block\";
        });

        \$('#vitesse-moyenne-resultat-btn').click(function() {
            displayDefaultInterfaceVitesseMoyenne();
        });

        function displayDefaultInterfaceVitesseMoyenne(){
            var vitesseMoyenneContainer = document.getElementById(\"vitesse-moyenne-container\");
            vitesseMoyenneContainer.style.display = \"block\";
            var vitesseMoyenneResultatContainer = document.getElementById(\"vitesse-moyenne-resultat-container\");
            vitesseMoyenneResultatContainer.style.display = \"none\";
            document.getElementById(\"vitesse-moyenne-input-h\").value = \"\";
            document.getElementById(\"vitesse-moyenne-input-m\").value = \"\";
            document.getElementById(\"vitesse-moyenne-input-s\").value = \"\";
        }




        var saveContainer = document.getElementById('saveContainer');

        mapFilter.onclick = function() {
            menuGauche.style.display = \"none\";
            mapFilter.style.display = \"none\";

            displayDefaultInterfaceTempsNecessaire();
            displayDefaultInterfaceVitesseMoyenne();
        };

        \$('#savePath').click(function() {
            mapFilterForm.style.display = \"block\";
            saveContainer.style.display = \"block\";

            var monPath = globalPoly.getPath();
            var encodeString = google.maps.geometry.encoding.encodePath(monPath);
            var hiddenInputPath = document.getElementById('hiddenInputPath');
            var hiddenInputPlaceId = document.getElementById('hiddenInputPlaceId');

            hiddenInputPath.value = encodeString;

            var geocoder = new google.maps.Geocoder;

            latitude = firstMarker.getPosition().lat();
            longitude = firstMarker.getPosition().lng();
            var latlng = {lat: parseFloat(latitude), lng: parseFloat(longitude)};

            geocoder.geocode({'location': latlng}, function(results, status) {
                if (status === google.maps.GeocoderStatus.OK) {
                    if (results[1]) {
                        hiddenInputPlaceId.value = results[1].place_id;
                    } else {
                        alert('Aucun résultat trouvé');
                    }
                } else {
                    alert('Le Geocoder a echoué. Raison: ' + status);
                }
            });


        });

        var mapFilterForm = document.getElementById('mapFilterForm');
        mapFilterForm.onclick = function() {
            saveContainer.style.display = \"none\";
            mapFilterForm.style.display = \"none\";
        };



        function getCoordinatesAverage(){
            var geocoder = new google.maps.Geocoder;

            latitude = firstMarker.getPosition().lat();
            longitude = firstMarker.getPosition().lng();
            var latlng = {lat: parseFloat(latitude), lng: parseFloat(longitude)};

            geocoder.geocode({'location': latlng}, function(results, status) {
                if (status === google.maps.GeocoderStatus.OK) {
                    if (results[1]) {
                        console.log(results[1].place_id);
                    } else {
                        window.alert('No results found');
                    }
                } else {
                    window.alert('Geocoder failed due to: ' + status);
                }
            });
        }

        var textDiv = document.getElementById('textDiv');

        function hybridMapStyle(){
            globalPoly.setOptions({strokeColor: '#35f700'});
            firstMarker.setOptions({icon: \"";
        // line 1095
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/marker_hybrid.png"), "html", null, true);
        echo "\"});

            textDiv.style.color = \"#fff\";
        }

        function planMapStyle(){
            globalPoly.setOptions({strokeColor: '#3BA14C'});
            firstMarker.setOptions({icon: \"";
        // line 1102
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/marker.png"), "html", null, true);
        echo "\"});

            textDiv.style.color = \"#000\";
        }




        /****** RACCOURCIS CLAVIER ********/
        Mousetrap.bind(['ctrl+z'], function() {
            deleteLastPoint();
        });




        //zoom/dezoom avec Ctrl Alt +/- ou Ctrl +/-
        var zoom = 14;

        Mousetrap.bind(['ctrl+alt++', 'ctrl++'], function() {
            if(zoom <= 23){
                zoom++;
                map.setZoom(zoom);
            }else{
                alert('Impossible de zoomer davantage');
            }
        });

        Mousetrap.bind(['ctrl+alt+-', 'ctrl+-'], function() {
            if(zoom >= 1){
                zoom--;
                map.setZoom(zoom);
            }else{
                alert('Impossible de dézoomer davantage');
            }
        });
    </script>
    <script async defer
            src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBxvWmkG3pYY6DaFxUzvRiyvttqYjdX15Q&libraries=geometry,places&callback=initMap\">
    </script>
";
        
        $__internal_35a6d4730373d06a8467c55d02361dc3707906810cf9276cee2d58ec0c9801bc->leave($__internal_35a6d4730373d06a8467c55d02361dc3707906810cf9276cee2d58ec0c9801bc_prof);

        
        $__internal_f3386ce648399e0d0bb9283abef8d5a2e0ebcd282b7a0af6bfd6e1270821e12c->leave($__internal_f3386ce648399e0d0bb9283abef8d5a2e0ebcd282b7a0af6bfd6e1270821e12c_prof);

    }

    public function getTemplateName()
    {
        return "content/concepteur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1264 => 1102,  1254 => 1095,  591 => 435,  586 => 433,  389 => 239,  369 => 223,  367 => 222,  358 => 221,  342 => 212,  335 => 208,  331 => 207,  298 => 177,  294 => 176,  262 => 147,  258 => 146,  243 => 134,  219 => 113,  208 => 105,  197 => 97,  173 => 76,  141 => 47,  129 => 38,  113 => 25,  99 => 14,  95 => 12,  92 => 11,  83 => 10,  65 => 7,  46 => 5,  36 => 1,  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% form_theme form 'bootstrap_4_layout.html.twig' %}

{% block title %}Concepteur{{ parent() }}{% endblock %}

{% block stylesheets %}{{ asset('build/concepteur.css') }}{% endblock %}


{% block body %}
        {% include 'flash_messages.html.twig' %}

        <div id=\"loading\">
            <img id=\"loading-image\" src=\"{{ asset('images/loader.gif') }}\" alt=\"Loading...\" />
        </div>

        <div id=\"map\" oncontextmenu=\"return false\"></div>

        <div id=\"mapFilter\" class=\"mapFilter\"></div>

        <!-- Zone de texte de la distance en bas -->

           <!-- Contrôles présents sur la carte-->
            <input id=\"pac-input\" class=\"controls\" type=\"text\" placeholder=\"Entrez votre localisation\">
            <button type=\"button\" id=\"centerMap\" name=\"bouton4\" title=\"Centrez la carte sur votre localisation\"><img src=\"{{ asset('images/gps.png') }}\" alt=\"Localisez vous\"/></button>


            <div class=\"map-bottom\">
                <div id=\"textDiv\"></div>
                <input type=\"button\" id=\"deleteAllButton\" class=\"bottomButton\" name=\"bouton2\" value=\"Supprimer tous les points\">
                <input type=\"button\" id=\"deleteLastButton\" class=\"bottomButton\" name=\"bouton\" value=\"Supprimer le dernier point\">
                <input type=\"button\" id=\"closeLoopButton\" class=\"bottomButton\" name=\"bouton3\" value=\"Fermer la boucle\" title=\"Reliez votre dernier point avec votre point de départ\">
            </div>




            <button id=\"boutonMenuLateral\" class=\"boutonMenuLateralStyle\"><img src=\"{{ asset('images/menu-droite.png') }}\" alt=\"Droite\" id=\"imgBoutonMenuGauche\"></button>
            <div id=\"menuGauche\">
                <p id=\"menuGauche-message\">Commencez par tracer votre parcours !</p>

                <div id=\"menuGauche-interieur\">
                    <div class=\"menuGauche-partie\" id=\"temps-necessaire-container\">
                        <p class=\"menuGauche-partie-texte temps-necessaire-texte\">Connaître le temps nécessaire pour parcourir votre<br/>itinéraire en donnant votre vitesse moyenne</p>
                        <div class=\"temps-necessaire-formcontainer\">
                            <input type=\"text\" name=\"vitesse-moyenne\" id=\"temps-necessaire-input\"/>
                            <button type=\"submit\" id=\"temps-necessaire-submit\" class=\"menuGauche-btn-submit\"><img src=\"{{ asset('images/fleche-tempsnecessaire.png') }}\"></button>
                        </div>
                        <p class=\"temps-necessaire-soustexte\">Rentrez votre vitesse moyenne en km/h</p>
                    </div>
                    <div class=\"menuGauche-partie\" id=\"temps-necessaire-resultat-partie\">
                        <div class=\"temps-necessaire-resultat-container\">
                            <p id=\"temps-necessaire-resultat\">
                                Avec votre allure de
                                <span id=\"temps-necessaire-resultat-allure\"></span>
                                km/h, <br/> vous prendrez
                                <span id=\"temps-necessaire-resultat-temps\"></span>
                            </p>
                            <button id=\"temps-necessaire-resultat-btn\">Calculer à nouveau</button>
                        </div>
                    </div>




                    <div class=\"menuGauche-partie\" id=\"vitesse-moyenne-container\">
                        <div class=\"sepa-container\"><div class=\"menuGauche-sepa\"></div></div>
                        <div class=\"vitesse-moyenne-souscontainer\">
                                <p class=\"menuGauche-partie-texte vitesse-moyenne-texte\">Calculez à quelle vitesse en moyenne vous avez<br/>parcouru cet itinéraire en rentrant combien<br/>de temps vous avez mis </p>
                                <div class=\"vitesse-moyenne-formcontainer\">
                                    <div class=\"vitesse-moyenne-inputcontainer\">
                                        <input type=\"text\" name=\"vitesse-moyenne\" id=\"vitesse-moyenne-input-h\" class=\"vitesse-input\" placeholder=\"h\"/>
                                        <input type=\"text\" name=\"vitesse-moyenne\" id=\"vitesse-moyenne-input-m\" class=\"vitesse-input\" placeholder=\"m\"/>
                                        <input type=\"text\" name=\"vitesse-moyenne\" id=\"vitesse-moyenne-input-s\" class=\"vitesse-input\" placeholder=\"s\"/>
                                    </div>
                                    <button type=\"submit\" id=\"vitesse-moyenne-submit\" class=\"menuGauche-btn-submit vitesse-moyenne-submit\"><img src=\"{{ asset('images/fleche-tempsnecessaire.png') }}\"></button>
                                </div>
                        </div>
                    </div>
                    <div class=\"menuGauche-partie\" id=\"vitesse-moyenne-resultat-container\">
                        <div class=\"sepa-container\"><div class=\"menuGauche-sepa\"></div></div>
                        <div class=\"vitesse-moyenne-resultat-container\">
                            <p id=\"vitesse-moyenne-resultat\">
                                Vous avez parcouru ce parcours avec <br/>une vitesse moyenne de
                                <span id=\"vitesse-moyenne-resultat-vitesse\"></span>
                                km/h
                            </p>
                            <button id=\"vitesse-moyenne-resultat-btn\">Calculer à nouveau</button>
                        </div>
                    </div>



                    <div class=\"menuGauche-partie\">
                        <div class=\"sepa-container\"><div class=\"menuGauche-sepa\"></div></div>
                        <div class=\"menuGauche-partie-container\">
                            <img src=\"{{ asset('images/velo.png') }}\" alt=\"Icône vélo\" class=\"menuGauche-img\">
                            <p class=\"menuGauche-partie-temps-sport\"><span title=\"Avec une vitesse moyenne de 20 km/h\">En vélo,</span> vous prendrez <span id=\"tempsVelo\"></span></p>
                        </div>
                    </div>

                    <div class=\"menuGauche-partie\">
                        <div class=\"sepa-container\"><div class=\"menuGauche-sepa\"></div></div>
                        <div class=\"menuGauche-partie-container\">
                            <img src=\"{{ asset('images/footing.png') }}\" alt=\"Icône footing\" class=\"menuGauche-img\">
                            <p class=\"menuGauche-partie-temps-sport\"><span title=\"Avec une vitesse moyenne de 13 km/h\">Avec une allure de footing,</span> vous prendrez <span id=\"tempsFooting\"></span></p>
                        </div>
                    </div>

                    <div class=\"menuGauche-partie\">
                        <div class=\"sepa-container\"><div class=\"menuGauche-sepa\"></div></div>
                        <div class=\"menuGauche-partie-container\">
                            <img src=\"{{ asset('images/marche.png') }}\" alt=\"Icône marche\" class=\"menuGauche-img\">
                            <p class=\"menuGauche-partie-temps-sport\"><span title=\"Avec une vitesse moyenne de 6 km/h\">En marchant,</span> vous prendrez <span id=\"tempsMarche\"></span></p>
                        </div>
                    </div>
                </div>

                <!--<button id=\"boutonMenuLateralFermer\" class=\"boutonMenuLateralStyle\"><img src=\"img/menu-gauche.png\" alt=\"Gauche\"></button>-->
            </div>





            <select name=\"modeSuivi\" id=\"selectModeSuivi\">
                <option value=\"DRIVING\" selected disabled=true>Mode de suivi des routes</option>
                <option value=\"BICYCLING\" title=\"Les itinéraires essayerons au maximum de passer par des pistes cyclables\">Vélo</option>
                <option value=\"WALKING\" title=\"Privilégie les voies piétonnes et les rues avec trottoir\">Marche et course à pied</option>
                <option value=\"DRIVING\" title=\"N'emprunte que le réseau routier\">Voiture ou vélo de route</option>
            </select>

            <button id=\"savePath\" class=\"saveButton\" name=\"button4\" value=\"\" title=\"Sauvegardez ou publiez votre parcours\">
                <img src=\"{{ asset('images/share.png') }}\" alt='Icône sauvegarder' class=\"saveImgHover\">
            </button>
            <div class=\"saveContainer\" id=\"saveContainer\">
                <div class=\"save-messageContainer\">
                    <div id=\"save-message\">
                        <p>Commencez par tracer votre parcours</p>
                    </div>
                </div>
                <div id=\"formFilter\"></div>
                <div class=\"formContainer\">
                    <div class=\"formPopUp\" id=\"formPopUp\">
                        <p class=\"form-facultatif\">* À part pour le titre, tous les champs sont facultatifs</p>
                        {{ form_start(form) }}
                        {{ form_row(form.titre) }}

                        <p class=\"typeSport-title\">Pour quel sport ce parcours est il le plus adapté ?</p>
                        <div class=\"typeSport-container\">
                            <div class=\"typeSport-input-container\">
                                <input id=\"path_typeSport_0\" name=\"path[typeSport]\" required=\"required\" value=\"marche\" type=\"radio\">
                                <label for=\"path_typeSport_0\" class=\"required typeSport-input\"><span></span>Marche</label>
                            </div>

                            <div class=\"typeSport-input-container\">
                                <input id=\"path_typeSport_1\" name=\"path[typeSport]\" required=\"required\" value=\"course\" type=\"radio\">
                                <label for=\"path_typeSport_1\" class=\"required typeSport-input\"><span></span>Course à pied</label>
                            </div>

                            <div class=\"typeSport-input-container\">
                                <input id=\"path_typeSport_2\" name=\"path[typeSport]\" required=\"required\" value=\"veloroute\" type=\"radio\">
                                <label for=\"path_typeSport_2\" class=\"required typeSport-input\"><span></span>Vélo de route</label>
                            </div>

                            <div class=\"typeSport-input-container\">
                                <input id=\"path_typeSport_3\" name=\"path[typeSport]\" required=\"required\" value=\"vtt\" type=\"radio\">
                                <label for=\"path_typeSport_3\" class=\"required typeSport-input\"><span></span>VTT</label>
                            </div>

                            <div class=\"typeSport-input-container\">
                                <input id=\"path_typeSport_4\" name=\"path[typeSport]\" required=\"required\" value=\"autre\" type=\"radio\">
                                <label for=\"path_typeSport_4\" class=\"required typeSport-input\"><span></span>Autre</label>
                            </div>
                        </div>
                        {{ form_row(form.description) }}
                        {{ form_row(form.image) }}

                        <p class=\"autre_filtre-title\">Pour être encore plus précis</p>
                        <div class=\"path_autre_filtre\">
                            <div class=\"autrefiltre-input-container\">
                                <input id=\"path_autre_filtre_0\" class=\"form-check-input\" name=\"path[autre_filtre][]\" value=\"detente\" type=\"checkbox\">
                                <label for=\"path_autre_filtre_0\" class=\"autrefiltre-input\"><span></span>Détente</label>
                            </div>

                            <div class=\"autrefiltre-input-container\">
                                <input id=\"path_autre_filtre_1\" class=\"form-check-input\" name=\"path[autre_filtre][]\" value=\"sportif\" type=\"checkbox\">
                                <label for=\"path_autre_filtre_1\" class=\"autrefiltre-input\"><span></span>Sportif</label>
                            </div>

                            <div class=\"autrefiltre-input-container\">
                                <input id=\"path_autre_filtre_2\" class=\"form-check-input\" name=\"path[autre_filtre][]\" value=\"denivele\" type=\"checkbox\">
                                <label for=\"path_autre_filtre_2\" class=\"autrefiltre-input\"><span></span>Dénivelé important</label>
                            </div>

                            <div class=\"autrefiltre-input-container\">
                                <input id=\"path_autre_filtre_3\" class=\"form-check-input\" name=\"path[autre_filtre][]\" value=\"paysage\" type=\"checkbox\">
                                <label for=\"path_autre_filtre_3\" class=\"autrefiltre-input\"><span></span>Beau paysage</label>
                            </div>

                            <div class=\"autrefiltre-input-container\">
                                <input id=\"path_autre_filtre_4\" class=\"form-check-input\" name=\"path[autre_filtre][]\" value=\"mauvais etat\" type=\"checkbox\">
                                <label for=\"path_autre_filtre_4\" class=\"autrefiltre-input\"><span></span>Mauvais état</label>
                            </div>
                        </div>

                        {{ form_row(form.path) }}
                        {{ form_row(form.placeId) }}
                        <input type=\"hidden\" value=\"Caché\" id=\"hiddenInputPath\" name=\"path[path]\"/>
                        <input type=\"hidden\" value=\"Caché\" id=\"hiddenInputPlaceId\" name=\"path[placeId]\"/>
                        <button id=\"saveFormBtn\" class=\"submit-input\">Partager</button>
                        {{ form_end(form) }}
                    </div>
                </div>
                <div id=\"mapFilterForm\" class=\"mapFilter\"></div>
            </div>
{% endblock %}



{% block javascripts %}
    {#<script src=\" {{ asset('build/js/main.js') }} \"></script>#}
    <script src=\" {{ asset('build/mousetrap.js') }} \"></script>
    <script type=\"text/javascript\" src=\"http://code.jquery.com/jquery-latest.js\"></script>
    <script language=\"javascript\" type=\"text/javascript\">
        \$(window).load(function() {
            \$('#loading').hide();
        });
    </script>
    <script>
        var globalPoly;   //objet Polyline
        var poly;   //objet Polyline

        var pathArray = [];     //tableau contenant les coordonnées de chaque point

        var map;     //la carte (objet)
        var geoPos;     //objet

        var markerVide = \"{{ asset('images/empty.png') }}\";   //pour ne pas avoir de marqueur pour chaque point (à ameliorer)

        var firstPoint;    //premier point à qui l'on donnera un skin différent (marqueur vert)
        var lastPoint;    //dernier point à avoir été placé (dernieres coords, pas dernier marqueur)
        var marker;
        var markers = [];    //array contenant l'ensemble des marqueurs
        var firstMarker;   //premier marqueur (à ne pas confondre avec firstPoint qui contient les coords de notre premier point)
        var distanceKmFloat;     //distance en km et au millième près (ex. 3.564 pour 3km et 564 mètres)
        var distanceArrondie;    //distance en mètres

        var vitesseVelo = 20;     // Vitesses (en km/h) pour les calculs du menu de gauche
        var vitesseFooting = 11;
        var vitesseMarche = 6;



        function initMap() {

            var mapDiv = document.getElementById(\"map\");
            //je récupére mon element avec l'id map
            var windowHeight = window.innerHeight;
            //je prend la hauteur de la fenêtre
            var tailleNb = windowHeight - 80;
            var tailleVoulu = tailleNb + 'px';
            //je calcule pour que ma map fasse hauteur de la fenêtre moins le header
            mapDiv.style.height = tailleVoulu;
            //c'est comme si je fais en CSS: 'height: tailleVoulu;'

            //definir taille du menu gauche
            var menuGauche = document.getElementById('menuGauche');
            menuGauche.style.height = tailleVoulu;

            var saveContainer = document.getElementById('saveContainer');
            saveContainer.style.height = tailleVoulu;

            /*var formPopUp = document.getElementById('formPopUp');
            formPopUp.style.height = (tailleNb - 100) + 'px';*/



            //on veut centrer la carte sur notre position si la geolocalisation est activée
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function(position){   //recupère notre position
                    geoPos = {
                        lat: position.coords.latitude,
                        lng: position.coords.longitude
                    };

                    map.setCenter(geoPos);   //centre la carte

                });
            } else {
                // Le navigateur ne supporte pas la géolocalisation ou elle a été refusé
                alert('Votre naviguateur ne supporte pas la géolocalisation ou un problème est survenu');
            }

            map = new google.maps.Map(document.getElementById('map'), {    //recupére la div #map et la transforme en objet map, stocké dans la var map
                zoom: 14,   //Définie le zoom par défaut
                draggableCursor: \"crosshair\",   //on a une croix comme curseur
                mapTypeId: 'hybrid',
                center: {lat: 49.3904707, lng: 3.3929198}  //si la geolocalisation n'est pas activée, on centre à Bucy
            });



            //Dans un soucis d'ergonomie, les markers et la couleurs des polylines changent en fonction du type de carte
            var mapType = map.getMapTypeId();
            var polyColor;
            var textDiv = document.getElementById('textDiv');

            if (mapType == 'hybrid'){
                polyColor = \"#35f700\";
                textDiv.style.color = \"#fff\";
            } else {
                polyColor = \"#3BA14C\";
                textDiv.style.color = \"#000\";
            }

            google.maps.event.addListener( map, 'maptypeid_changed', function(){
                var mapType = map.getMapTypeId();

                if (mapType == 'hybrid'){
                    hybridMapStyle();
                } else {
                    planMapStyle();
                }
            });



            globalPoly = new google.maps.Polyline({   //créé déjà la polyline
                strokeColor: \"#35f700\",
                strokeOpacity: 1.0,
                strokeWeight: 3
            });
            globalPoly.setMap(map);   //on attache l'objet polyline à notre map

            poly = new google.maps.Polyline({   //créé déjà la polyline
                strokeColor: \"#35f700\",
                strokeOpacity: 1.0,
                strokeWeight: 3
            });

            //listeners qui vont écouter les événements click et rightcick pour y lancer des fonctions
            map.addListener('click', addLatLng);     //quand on clique sur un endroit de la carte on lance la fonction addLatLng
            map.addListener('rightclick', addLatLngRoute);    //quand on clique droit sur un endroit on lance la fonction addLatLngRoute




            //Ici, on va transformer nos champs HTML (que l'on va recupérer avec getElementById) en \"contrôles\" de la map. Pour l'API, un contrôle est par exemple le bouton plein écran en haut à droite. C'est le seul moyen potable de faire passer des boutons sur une carte.

            var input = document.getElementById('pac-input');
            var searchBox = new google.maps.places.SearchBox(input);   //on définit que notre input est une search box (qui va nous permettre de rentrer notre localisation avec l'autocomplétion)
            map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);   //ce contrôle se positionnera en haut à gauche


            var deleteAllButton = document.getElementById('deleteAllButton');
            map.controls[google.maps.ControlPosition.BOTTOM].push(deleteAllButton);

            var deleteLastButton = document.getElementById('deleteLastButton');
            map.controls[google.maps.ControlPosition.BOTTOM].push(deleteLastButton);

            var closeLoopButton = document.getElementById('closeLoopButton');
            map.controls[google.maps.ControlPosition.BOTTOM].push(closeLoopButton);


            var centerMap = document.getElementById('centerMap');
            map.controls[google.maps.ControlPosition.TOP_LEFT].push(centerMap);


            var selectModeSuivi = document.getElementById('selectModeSuivi');
            map.controls[google.maps.ControlPosition.TOP_LEFT].push(selectModeSuivi);

            var savePath = document.getElementById('savePath');
            map.controls[google.maps.ControlPosition.RIGHT].push(savePath);

            var boutonMenuLateral = document.getElementById('boutonMenuLateral');
            map.controls[google.maps.ControlPosition.LEFT].push(boutonMenuLateral);




            //Toute cette dernière section se rapporte à la searchbox (localisation)

            map.addListener('bounds_changed', function() {
                searchBox.setBounds(map.getBounds());
            });

            searchBox.addListener('places_changed', function() {
                var places = searchBox.getPlaces();

                if (places.length === 0) {
                    return;
                }

                var bounds = new google.maps.LatLngBounds();

                places.forEach(function(place) {
                    if (!place.geometry) {
                        console.log(\"Le lieu ne retourne rien\");
                        return;
                    }

                    if (place.geometry.viewport) {
                        bounds.union(place.geometry.viewport);
                    } else {
                        bounds.extend(place.geometry.location);
                    }
                });

                map.fitBounds(bounds);
            });
        }
        /************* FIN INITMAP *************/








        // Fonction qui sera executée lors du clique d'un endroit de la carte
        function addLatLng(event) {
            var monPath = globalPoly.getPath();   //on récupére le parcours (si ce n'est pas le premier point)

            monPath.push(event.latLng);


            var markerStart;
            var mapType = map.getMapTypeId();

            if (mapType == 'hybrid'){
                markerStart = \"{{ asset('images/marker_hybrid.png') }}\";
            } else {
                markerStart = \"{{ asset('images/marker.png') }}\";
            }


            //Si c'est le premier marqueur on lui donne l'icone image sinon on laisse un marqeur normale
            if (monPath.getLength() === 1) {
                marker = new google.maps.Marker({
                    position: event.latLng,
                    map: map,
                    icon: markerStart          //le marqueur aura notre image de drapeau
                });

                firstPoint = event.latLng;

                lastPoint = event.latLng;

                firstMarker = marker;
            }
            else{     //sinon cela veut dire que ce n'est pas le premier marqueur et on ne lui donne pas de skin (empty.png)
                marker = new google.maps.Marker({
                    position: event.latLng,
                    map: map,
                    icon: markerVide
                });

                markers.push(marker);   //on met notre tout nouveau marker dans le tableau markers

                lastPoint = event.latLng;

                pathArray = monPath.getArray();

                var distance = google.maps.geometry.spherical.computeLength(pathArray);   //calcule la distance du parcours en comptant tout les points
                distanceArrondie = Math.round(distance);    //arrondi la distance à l'unité près
                distanceKmFloat = distanceArrondie/1000;
            }

            var div = document.getElementById(\"textDiv\");    //recupere la div textDiv
            if ((distanceArrondie == undefined) || (distanceArrondie == 0)){   //si aucun parcours n'est présent ou s'il n'y a qu'un marqueur
                div.textContent = \"Vous n'avez placé qu'un seul marqueur\"
            } else {
                div.textContent = \"Il y a \" + distanceKmFloat + \" kilomètres entre le premier et le dernier point\" ;
                //on affiche la distance arrondie et au km dans la div textDiv
                div.title = \"Ou \" + distanceArrondie + \" mètres\";

                var menuGaucheInterieur = document.getElementById(\"menuGauche-interieur\");
                menuGaucheInterieur.style.display = \"block\";

                var menuGaucheMessage = document.getElementById(\"menuGauche-message\");
                menuGaucheMessage.style.display = \"none\";

                var formPopUp = document.getElementById(\"formPopUp\");
                formPopUp.style.display = \"block\";

                var saveMessage = document.getElementById(\"save-message\");
                saveMessage.style.display = \"none\";
            }

            updateTempsGlobal(distanceKmFloat);
        }
        /************* FIN ADDLATLNG *************/












        //Fonction pour le clique droit qui permet de calculer la route entre deux points, passés en paramètres

        var directionsService;

        function calculateRoute(directionsService, lastPoint, newPoint) {
            var monPath = globalPoly.getPath();

            var directionsService = new google.maps.DirectionsService();

            var selectModeSuivi = document.getElementById('selectModeSuivi');

            var travelMode = selectModeSuivi.options[selectModeSuivi.selectedIndex].value;   //ici on met que le mode de transport est la marche mais in pourra plus tard laisser à l'utilisateur de choisir le mode
            var request = {
                origin: lastPoint,
                destination: newPoint,
                travelMode: google.maps.TravelMode[travelMode]
            };

            directionsService.route(request, function(response, status) {
                    if (status == 'OK') {                              //s'il n'y a aucun problème avec l'itinéraire
                        var pointsArray = response.routes[0].overview_path;

                        for (var i = 0; i < pointsArray.length; i++) {
                            monPath.push(pointsArray[i]);
                        }

                        updateRouteLength();
                    } else {
                        alert(\"Il n'y a pas de chemin pour aller à cet endroit\");
                    }
                }
            )
        }
        /************* FIN CALCULROUTE *************/





        //lorsque l'on right click sur un endroit on va ralier le dernier point créé à ce tout nouveau point mais en affichant l'itinéraire en passant par la route ou les chemins (pas en créant une ligne droite)
        function addLatLngRoute(event){

            newPoint = event.latLng;   // Coords du point qui vient d'etre rightclické

            calculateRoute(directionsService, lastPoint, newPoint);  //fonction qui calcule et affiche l'itinéraire

            var monPath = globalPoly.getPath();

            marker = new google.maps.Marker({
                position: event.latLng,
                map: map,
                icon: markerVide
            });

            poly.setMap(map);  //on affiche la polyline sur la map

            markers.push(marker);   //on met notre tout nouveau marker dans le tableau markers

            lastPoint = event.latLng;
        }
        /************* FIN ADDLATLNGROUTE *************/










        //Fonction qui met à jour la zone de texte en bas de la carte qui donne la distance du parcours
        function updateRouteLength(){

            var monPath = globalPoly.getPath();

            pathArray = monPath.getArray();

            var distance = google.maps.geometry.spherical.computeLength(pathArray);   //calcule la distance du parcours en comptant tout les points
            distanceArrondie = Math.round(distance);    //arrondi la distance à l'unité près
            distanceKmFloat = distanceArrondie/1000;


            var div = document.getElementById(\"textDiv\");    //recupere la div textDiv
            if ((distanceArrondie == undefined) || (distanceArrondie == 0)){   //si aucun parcours n'est présent ou s'il n'y a qu'un marqueur
                div.textContent = \"Vous n'avez placé qu'un seul marqueur\";
            } else {
                div.textContent = \"Il y a \" + distanceKmFloat + \" kilomètres entre le premier et le dernier point\" ;
                //on affiche la distance arrondie et au km dans la div textDiv
                div.title = \"Ou \" + distanceArrondie + \" mètres\";

                var menuGaucheInterieur = document.getElementById(\"menuGauche-interieur\");
                menuGaucheInterieur.style.display = \"block\";

                var menuGaucheMessage = document.getElementById(\"menuGauche-message\");
                menuGaucheMessage.style.display = \"none\";

                var formPopUp = document.getElementById(\"formPopUp\");
                formPopUp.style.display = \"block\";

                var saveMessage = document.getElementById(\"save-message\");
                saveMessage.style.display = \"none\";
            }

            updateTempsGlobal(distanceKmFloat);
        }
        /************* FIN UPDATEROUTELENGTH *************/








        //return 23 si on lui passe x.23
        function getDecimal(n) {
            return (n - Math.floor(n));
        }


        //return 15 si on lui passe x.25 (passe en base 60)
        function getPartieDecimale(n){
            return (Math.round((Math.round(100 * getDecimal(n))/100) * 100 * 60 / 100));
        }

        //met à jour tout les temps nécessaires dans le menu gauche
        function updateTempsGlobal(distanceKmFloat){
            //velo
            updateTempsNecessaire(distanceKmFloat, vitesseVelo, \"tempsVelo\");

            //footing
            updateTempsNecessaire(distanceKmFloat, vitesseFooting, \"tempsFooting\");

            //marche
            updateTempsNecessaire(distanceKmFloat, vitesseMarche, \"tempsMarche\");
        }

        //met à jour le temps nécessaure (menu gauche) du sport qu'on lui passe
        function updateTempsNecessaire(distanceKmFloat, vitesseMoyenne, sport){
            var tempsHTML = document.getElementById(sport); //on récup l'élément p tempsVelo

            var temps = distanceKmFloat / vitesseMoyenne; // t = d / v      on sort le temps qu'il faut en heures (mais on a 1.5 heures au lieu de 1h30)
            var tempsEnMinutesAvecSecondes = Math.round(100 * (temps * 60))/100;  //on sort 52.31 (52 minutes 31 secondes)
            var secondesTemps = getPartieDecimale(tempsEnMinutesAvecSecondes);

            var tempsEnMinutes = Math.round(tempsEnMinutesAvecSecondes);   //on sort juste 52

            //Pour l'orthographe :)
            if(tempsEnMinutes === 1){
                var minuteOrthographe = \" minute\";
            }else{
                var minuteOrthographe = \" minutes\";
            }

            if(secondesTemps === 1){
                var secondeOrthographe = \" seconde\";
            }else{
                var secondeOrthographe = \" secondes\";
            }


            if(tempsEnMinutes < 1){
                tempsHTML.textContent = secondesTemps + secondeOrthographe;
                tempsHTML.title = \"\";
            }else{
                //si il y a plus de 60 minutes on affiche en heures et minutes
                if(tempsEnMinutes < 60){
                    tempsHTML.textContent = tempsEnMinutes + minuteOrthographe;
                    tempsHTML.title = \"Et \" + secondesTemps + secondeOrthographe;
                }else{
                    var tempsEnHeuresFloat = tempsEnMinutes / 60;
                    var minutesDuTempsPourHeures = getPartieDecimale(tempsEnHeuresFloat); //on recup les minutes
                    var tempsEnHeures = Math.round(tempsEnHeuresFloat);

                    if(minutesDuTempsPourHeures === 1){
                        var minuteOrthographe = \" minute\";
                    }else{
                        var minuteOrthographe = \" minutes\";
                    }

                    if(tempsEnHeures === 1){
                        var heureOrthographe = \" heure\";
                    }else{
                        var heureOrthographe = \" heures\";
                    }

                    tempsHTML.textContent = tempsEnHeures + heureOrthographe + \" et \" + minutesDuTempsPourHeures + minuteOrthographe;  //on affiche
                }
            }

        }
        /************* FIN UPDATETEMPSNECESSAIRE *************/














        //return le dernier élément d'un tableau
        function dernierElem(tbl){
            var tbl = tbl;
            var tblLength = tbl.length;
            var pos = tblLength - 1;
            return tbl[pos];
        }


        //Erreur de geolocalisation
        function handleLocationError(browserHasGeolocation, infoWindow, pos) {
            infoWindow.setPosition(pos);
            infoWindow.setContent(browserHasGeolocation ?
                'Erreur: Le service de Géolocalisation a echoué.' :
                'Erreur: Votre naviguateur ne support pas la Géolocalisation.');
        }




        //fonction qui va nous créer un setMap mais pour tous les marqueurs
        function setMapOnAll(map) {
            for (var i = 0; i < markers.length; i++) {
                markers[i].setMap(map);
            }
        }



        //Fonctions des contrôles

        function deleteLastPoint(){
            var monPath = globalPoly.getPath();

            monPath.pop();   //on supprime le dernier élément du tableau path

            var pathArray = monPath.getArray();
            lastPoint = dernierElem(pathArray);

            var pathLength = monPath.getLength();

            if(pathLength === 0){
                deletePoints();
            }

            if(pathLength === 1){
                var menuGaucheInterieur = document.getElementById(\"menuGauche-interieur\");
                menuGaucheInterieur.style.display = \"none\";

                var menuGaucheMessage = document.getElementById(\"menuGauche-message\");
                menuGaucheMessage.style.display = \"block\";

                var formPopUp = document.getElementById(\"formPopUp\");
                formPopUp.style.display = \"block\";

                var formFilter = document.getElementById(\"formFilter\");
                formFilter.style.display = \"block\";

                var saveMessage = document.getElementById(\"save-message\");
                saveMessage.style.display = \"block\";
            }

            updateRouteLength();

            updateTempsGlobal(distanceKmFloat);
        }

        \$('#deleteLastButton').click(deleteLastPoint);

        \$('#deleteAllButton').click(function() {
            firstMarker.setMap(null);
            setMapOnAll(null);
            markers = [];
            globalPoly.setMap(null);

            monPath = globalPoly.getPath();
            monPath = [];
            lastPoint = \"\";

            pathArray = [];

            var div = document.getElementById(\"textDiv\");
            div.textContent = \"Vous n'avez pas placé de marqueur\";

            distanceArrondie = 0;
            distanceKmFloat = 0;

            var mapType = map.getMapTypeId();

            if (mapType == 'hybrid'){
                polyColor = \"#35f700\";
            } else {
                polyColor = \"#3BA14C\";
            }

            globalPoly = new google.maps.Polyline({   //on recréé une polyline pour que lorsque que l'on supprime l'ancienne on ne reparte pas sur l'ancienne
                strokeColor:  polyColor,
                strokeOpacity: 1.0,
                strokeWeight: 3
            });
            globalPoly.setMap(map);

            var menuGaucheInterieur = document.getElementById(\"menuGauche-interieur\");
            menuGaucheInterieur.style.display = \"none\";

            var menuGaucheMessage = document.getElementById(\"menuGauche-message\");
            menuGaucheMessage.style.display = \"block\";

            var formPopUp = document.getElementById(\"formPopUp\");
            formPopUp.style.display = \"block\";

            var formFilter = document.getElementById(\"formFilter\");
            formFilter.style.display = \"block\";

            var saveMessage = document.getElementById(\"save-message\");
            saveMessage.style.display = \"block\";
        });


        //Calcule et affiche la route entre le dernier point et le point de départ pour fermer la boucle
        \$('#closeLoopButton').click(function() {
            calculateRoute(directionsService, lastPoint, firstPoint);
        });

        \$('#centerMap').click(function() {
            map.setCenter(geoPos);
        });





        /****** MENU GAUCHE ******/
        var menuGaucheBouton = document.getElementById('boutonMenuLateral');
        var menuGauche = document.getElementById('menuGauche');
        var mapFilter = document.getElementById('mapFilter');

        menuGaucheBouton.onclick = function() {
            menuGauche.style.display = \"block\";
            mapFilter.style.display = \"block\";
        };

        \$('#temps-necessaire-submit').click(function() {
            var inputTempsNecessaire = document.getElementById('temps-necessaire-input');
            var vitesseInput = inputTempsNecessaire.value;

            if(vitesseInput != '' && isNaN(vitesseInput) == false && vitesseInput <= 300){
                var tempsNecessaireDiv = document.getElementById('temps-necessaire-container');
                tempsNecessaireDiv.style.display = \"none\";
                var tempsNecessaireResultatDiv = document.getElementById('temps-necessaire-resultat-partie');
                tempsNecessaireResultatDiv.style.display = \"block\";

                var temps = distanceKmFloat / vitesseInput; // t = d / v      on sort le temps qu'il faut en heures (mais on a 1.5 heures au lieu de 1h30)
                var tempsEnMinutesAvecSecondes = Math.round(100 * (temps * 60))/100;
                var secondesTemps = getPartieDecimale(tempsEnMinutesAvecSecondes);
                var tempsEnMinutes = Math.round(tempsEnMinutesAvecSecondes);   //on sort juste 52

                var tempsNecessaireResultatAllureSpan = document.getElementById('temps-necessaire-resultat-allure');
                tempsNecessaireResultatAllureSpan.textContent = vitesseInput;
                var tempsNecessaireResultatSpan = document.getElementById('temps-necessaire-resultat-temps');

                if(tempsEnMinutes === 1){
                    var minuteOrthographe = \" minute\";
                }else{
                    var minuteOrthographe = \" minutes\";
                }

                if(secondesTemps === 1){
                    var secondeOrthographe = \" seconde\";
                }else{
                    var secondeOrthographe = \" secondes\";
                }


                if(tempsEnMinutes < 1){
                    tempsNecessaireResultatSpan.textContent = secondesTemps + secondeOrthographe;
                    tempsNecessaireResultatSpan.title = \"\";
                }else{
                    //si il y a plus de 60 minutes on affiche en heures et minutes
                    if(tempsEnMinutes < 60){
                        tempsNecessaireResultatSpan.textContent = tempsEnMinutes + minuteOrthographe;
                        tempsNecessaireResultatSpan.title = \"Et \" + secondesTemps + secondeOrthographe;
                    }else{
                        var tempsEnHeuresFloat = tempsEnMinutes / 60;
                        var minutesDuTempsPourHeures = getPartieDecimale(tempsEnHeuresFloat); //on recup les minutes
                        var tempsEnHeures = Math.round(tempsEnHeuresFloat);

                        if(minutesDuTempsPourHeures === 1){
                            var minuteOrthographe = \" minute\";
                        }else{
                            var minuteOrthographe = \" minutes\";
                        }

                        if(tempsEnHeures === 1){
                            var heureOrthographe = \" heure\";
                        }else{
                            var heureOrthographe = \" heures\";
                        }

                        tempsNecessaireResultatSpan.textContent = tempsEnHeures + heureOrthographe + \" et \" + minutesDuTempsPourHeures + minuteOrthographe;  //on affiche
                    }
                }
            }else{
                alert(\"Vous n'avez soit rien rentré, soit rentré quelque chose d'autre qu'un nombre, soit un nombre supérieur à 300\");
            }
        });

        \$('#temps-necessaire-resultat-btn').click(function() {
            displayDefaultInterfaceTempsNecessaire();
        });

        function displayDefaultInterfaceTempsNecessaire(){
            var tempsNecessaireDiv = document.getElementById('temps-necessaire-container');
            tempsNecessaireDiv.style.display = \"block\";
            var tempsNecessaireResultatDiv = document.getElementById('temps-necessaire-resultat-partie');
            tempsNecessaireResultatDiv.style.display = \"none\";
            var inputTempsNecessaire = document.getElementById('temps-necessaire-input');
            inputTempsNecessaire.value = \"\";
        }




        /****** tpvm = Temps pour vitesse moyenne ******/

        \$('#vitesse-moyenne-submit').click(function() {
            var tpvmHInput = document.getElementById(\"vitesse-moyenne-input-h\");
            var tpvmMInput = document.getElementById(\"vitesse-moyenne-input-m\");
            var tpvmSInput = document.getElementById(\"vitesse-moyenne-input-s\");

            var tpvmH = tpvmHInput.value;
            var tpvmM = tpvmMInput.value;
            var tpvmS = tpvmSInput.value;

            if(tpvmH + tpvmM + tpvmS != '' && tpvmH + tpvmM + tpvmS != '0' && tpvmH + tpvmM + tpvmS != '00' && tpvmH + tpvmM + tpvmS != '000'){
                if(tpvmH <= 99){
                    if(tpvmM <= 59){
                        if(tpvmS <= 59){
                            var tpvmHInt;
                            var tpvmMInt;
                            var tpvmSInt;

                            if(tpvmH != ''){
                                tpvmHInt = parseInt(tpvmH, 10);
                            }else{
                                tpvmHInt = 0;
                            }
                            if(tpvmM != ''){
                                tpvmMInt = parseInt(tpvmM, 10);
                            }else{
                                tpvmMInt = 0;
                            }
                            if(tpvmS != ''){
                                tpvmSInt = parseInt(tpvmS, 10);
                            }else{
                                tpvmSInt = 0;
                            }

                            tpvmMInt = tpvmMInt * 100 / 60;
                            tpvmSInt = tpvmSInt * 100 / 60; /* On passe en base 100 */

                            tpvmMInt = tpvmMInt * 0.01;
                            tpvmSInt = tpvmSInt * 0.0001;

                            var tpvm = tpvmHInt + tpvmMInt + tpvmSInt;

                            var vitesseMoyenne = distanceKmFloat / tpvm; //d/t
                            var vitesseMoyenne = Math.round(100 * vitesseMoyenne) / 100;

                            var vitesseMoyenneResultatSpan = document.getElementById('vitesse-moyenne-resultat-vitesse');
                            vitesseMoyenneResultatSpan.textContent = vitesseMoyenne;
                        }else{
                            alert('Vous avez rentré une valeur supérieure à 59 dans le champ secondes');
                        }
                    }else{
                        alert('Vous avez rentré une valeur supérieure à 59 dans le champ minutes');
                    }
                }else{
                    alert('Vous avez rentré une valeur trop haute dans le champ heures');
                }
            }else{
                alert(\"Vous n'avez rien rentré\");
            }

            var vitesseMoyenneContainer = document.getElementById(\"vitesse-moyenne-container\");
            vitesseMoyenneContainer.style.display = \"none\";
            var vitesseMoyenneResultatContainer = document.getElementById(\"vitesse-moyenne-resultat-container\");
            vitesseMoyenneResultatContainer.style.display = \"block\";
        });

        \$('#vitesse-moyenne-resultat-btn').click(function() {
            displayDefaultInterfaceVitesseMoyenne();
        });

        function displayDefaultInterfaceVitesseMoyenne(){
            var vitesseMoyenneContainer = document.getElementById(\"vitesse-moyenne-container\");
            vitesseMoyenneContainer.style.display = \"block\";
            var vitesseMoyenneResultatContainer = document.getElementById(\"vitesse-moyenne-resultat-container\");
            vitesseMoyenneResultatContainer.style.display = \"none\";
            document.getElementById(\"vitesse-moyenne-input-h\").value = \"\";
            document.getElementById(\"vitesse-moyenne-input-m\").value = \"\";
            document.getElementById(\"vitesse-moyenne-input-s\").value = \"\";
        }




        var saveContainer = document.getElementById('saveContainer');

        mapFilter.onclick = function() {
            menuGauche.style.display = \"none\";
            mapFilter.style.display = \"none\";

            displayDefaultInterfaceTempsNecessaire();
            displayDefaultInterfaceVitesseMoyenne();
        };

        \$('#savePath').click(function() {
            mapFilterForm.style.display = \"block\";
            saveContainer.style.display = \"block\";

            var monPath = globalPoly.getPath();
            var encodeString = google.maps.geometry.encoding.encodePath(monPath);
            var hiddenInputPath = document.getElementById('hiddenInputPath');
            var hiddenInputPlaceId = document.getElementById('hiddenInputPlaceId');

            hiddenInputPath.value = encodeString;

            var geocoder = new google.maps.Geocoder;

            latitude = firstMarker.getPosition().lat();
            longitude = firstMarker.getPosition().lng();
            var latlng = {lat: parseFloat(latitude), lng: parseFloat(longitude)};

            geocoder.geocode({'location': latlng}, function(results, status) {
                if (status === google.maps.GeocoderStatus.OK) {
                    if (results[1]) {
                        hiddenInputPlaceId.value = results[1].place_id;
                    } else {
                        alert('Aucun résultat trouvé');
                    }
                } else {
                    alert('Le Geocoder a echoué. Raison: ' + status);
                }
            });


        });

        var mapFilterForm = document.getElementById('mapFilterForm');
        mapFilterForm.onclick = function() {
            saveContainer.style.display = \"none\";
            mapFilterForm.style.display = \"none\";
        };



        function getCoordinatesAverage(){
            var geocoder = new google.maps.Geocoder;

            latitude = firstMarker.getPosition().lat();
            longitude = firstMarker.getPosition().lng();
            var latlng = {lat: parseFloat(latitude), lng: parseFloat(longitude)};

            geocoder.geocode({'location': latlng}, function(results, status) {
                if (status === google.maps.GeocoderStatus.OK) {
                    if (results[1]) {
                        console.log(results[1].place_id);
                    } else {
                        window.alert('No results found');
                    }
                } else {
                    window.alert('Geocoder failed due to: ' + status);
                }
            });
        }

        var textDiv = document.getElementById('textDiv');

        function hybridMapStyle(){
            globalPoly.setOptions({strokeColor: '#35f700'});
            firstMarker.setOptions({icon: \"{{ asset('images/marker_hybrid.png') }}\"});

            textDiv.style.color = \"#fff\";
        }

        function planMapStyle(){
            globalPoly.setOptions({strokeColor: '#3BA14C'});
            firstMarker.setOptions({icon: \"{{ asset('images/marker.png') }}\"});

            textDiv.style.color = \"#000\";
        }




        /****** RACCOURCIS CLAVIER ********/
        Mousetrap.bind(['ctrl+z'], function() {
            deleteLastPoint();
        });




        //zoom/dezoom avec Ctrl Alt +/- ou Ctrl +/-
        var zoom = 14;

        Mousetrap.bind(['ctrl+alt++', 'ctrl++'], function() {
            if(zoom <= 23){
                zoom++;
                map.setZoom(zoom);
            }else{
                alert('Impossible de zoomer davantage');
            }
        });

        Mousetrap.bind(['ctrl+alt+-', 'ctrl+-'], function() {
            if(zoom >= 1){
                zoom--;
                map.setZoom(zoom);
            }else{
                alert('Impossible de dézoomer davantage');
            }
        });
    </script>
    <script async defer
            src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBxvWmkG3pYY6DaFxUzvRiyvttqYjdX15Q&libraries=geometry,places&callback=initMap\">
    </script>
{% endblock %}", "content/concepteur.html.twig", "C:\\wamp64\\www\\mapbox\\templates\\content\\concepteur.html.twig");
    }
}
