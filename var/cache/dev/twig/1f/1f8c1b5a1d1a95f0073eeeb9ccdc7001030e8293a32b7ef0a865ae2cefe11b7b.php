<?php

/* ::base2.html.twig */
class __TwigTemplate_d9ccd535102694624d8b0f40bb8d3c0a1630f9ec9166401d572101194d4af8e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f4435019e21e588548cabad6e89b631a4d1b235b50293dd637961f5f70b9f0b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4435019e21e588548cabad6e89b631a4d1b235b50293dd637961f5f70b9f0b8->enter($__internal_f4435019e21e588548cabad6e89b631a4d1b235b50293dd637961f5f70b9f0b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base2.html.twig"));

        $__internal_58f9f1be4e9954396d245d1575f9acf48cf29d774c0e5d778c9fee1e562943aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58f9f1be4e9954396d245d1575f9acf48cf29d774c0e5d778c9fee1e562943aa->enter($__internal_58f9f1be4e9954396d245d1575f9acf48cf29d774c0e5d778c9fee1e562943aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base2.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" type=\"text/css\" id=\"theme\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/theme-default.css"), "html", null, true);
        echo "\"/>
        ";
        // line 10
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array()) == "ar")) {
            // line 11
            echo "        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-rtl/3.4.0/css/bootstrap-flipped.css\">
        ";
        }
        // line 13
        echo "        
    </head>
    <body>


      <!-- START PAGE CONTAINER -->
        <div class=\"page-container\">
            
            <!-- START PAGE SIDEBAR -->
            <div class=\"page-sidebar\">
                <!-- START X-NAVIGATION -->
                <ul class=\"x-navigation\">
                    <li class=\"xn-logo\">
                        <!-- <a href=\"#\">SCHOOLIUM</a> -->
                        <a href=\"#\" class=\"x-navigation-control\"></a>
                    </li>
                    <li class=\"xn-profile\">
                        <a href=\"#\" class=\"profile-mini\">
                            <img src=\"";
        // line 31
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "photo", array())) {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/photos/" . $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "photo", array()))), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/photos/avatar.png"), "html", null, true);
        }
        echo "\" alt=\"Photo de profile\"/>
                        </a>
                        <div class=\"profile\">
                            <div class=\"profile-image\">
                                <img src=\"";
        // line 35
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "photo", array())) {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/photos/" . $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "photo", array()))), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/photos/avatar.png"), "html", null, true);
        }
        echo "\" alt=\"Photo de profile\"/>
                            </div>
                            <div class=\"profile-data\">
                                <div class=\"profile-data-name\">";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenom", array()), "html", null, true);
        echo "</div>
                                <div class=\"profile-data-title\">";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "typeUser", array()), "html", null, true);
        echo "</div>
                            </div>
                            <div class=\"profile-controls\">
                                <a href=\"pages-profile.html\" class=\"profile-control-left\"><span class=\"fa fa-info\"></span></a>
                                <a href=\"pages-messages.html\" class=\"profile-control-right\"><span class=\"fa fa-envelope\"></span></a>
                            </div>
                        </div>                                                                        
                    </li>
                    <li class=\"active\" ><a href=\"#\"><span class=\"fa fa-dashboard\"></span> <span class=\"xn-text\">Dashboard</span></a></li>
                    <li class=\"xn-openable\">
                        <a href=\"#\"><span class=\"fa fa-graduation-cap\"></span> <span class=\"xn-text\">Gestion des Eleves</span></a>
                        <ul>
                            <li><a href=\"";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addEleve");
        echo "\"><span class=\"xn-text\">Ajouter Eleve</span></a></li>
                            <li><a href=\"";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listEleves");
        echo "\"><span class=\"xn-text\">Liste des eleves </span></a></li>
                        </ul>
                    </li>
                    <li class=\"xn-openable\">
                        <a href=\"#\"><span class=\"fa fa-male\"></span> <span class=\"xn-text\">Gestion des Parents</span></a>
                        <ul>
                            <li><a href=\"";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addParental");
        echo "\"><span class=\"xn-text\">Ajouter Parent</span></a></li>
                            <li><a href=\"";
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listParentals");
        echo "\"><span class=\"xn-text\">Liste des Parents </span></a></li>
                        </ul>
                    </li>
                     <li class=\"xn-openable\">
                        <a href=\"#\"><span class=\"fa fa-briefcase\"></span> <span class=\"xn-text\">Gestion des Enseignants</span></a>
                        <ul>
                            <li><a href=\"";
        // line 65
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addEnseignant");
        echo "\"><span class=\"xn-text\">Ajouter Enseignant</span></a></li>
                            <li><a href=\"";
        // line 66
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listEnseignants");
        echo "\"><span class=\"xn-text\">Liste des Enseignants </span></a></li>
                        </ul>
                    </li>
                     <!-- <li class=\"xn-openable\">
                        <a href=\"#\"><span class=\"fa fa-book\"></span> <span class=\"xn-text\">Gestion des Matieres</span></a>
                        <ul>
                            <li><a href=\"#\"><span class=\"xn-text\">Ajouter Matiere</span></a></li>
                            <li><a href=\"dashboard.html\"><span class=\"xn-text\">Liste des Matieres </span></a></li>
                        </ul>
                    </li> -->
                     <li class=\"xn-openable\">
                        <a href=\"#\"><span class=\"fa fa-users\"></span> <span class=\"xn-text\">Gestion des Classes</span></a>
                        <ul>
                            <li><a href=\"";
        // line 79
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addClasse");
        echo "\"><span class=\"xn-text\">Ajouter Classe</span></a></li>
                            <li><a href=\"";
        // line 80
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listClasses");
        echo "\"><span class=\"xn-text\">Liste des Classes </span></a></li>
                        </ul>
                    </li>
                     <li class=\"xn-openable\">
                        <a href=\"#\"><span class=\"fa fa-table\"></span> <span class=\"xn-text\">Gestion des Emplois de temps</span></a>
                        <ul>
                            <li><a href=\"#\"><span class=\"xn-text\">Ajouter Emploi de temps</span></a></li>
                            <li><a href=\"#\"><span class=\"xn-text\">Liste des Emplois de temps </span></a></li>
                        </ul>
                    </li>
                     <li class=\"xn-openable\">
                        <a href=\"#\"><span class=\"fa fa-th\"></span> <span class=\"xn-text\">Gestion des Salles</span></a>
                        <ul>
                            <li><a href=\"";
        // line 93
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addSalle");
        echo "\"><span class=\"xn-text\">Ajouter Salle</span></a></li>
                            <li><a href=\"";
        // line 94
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listSalles");
        echo "\"><span class=\"xn-text\">Liste des Salles </span></a></li>
                        </ul>
                    </li>
                    <li><a href=\"#\"><span class=\"fa fa-check-square-o\"></span> <span class=\"xn-text\">Gestion des Retards et absences</span></a></li>
                    <li class=\"xn-openable\">
                        <a href=\"#\"><span class=\"fa fa-bus\"></span> <span class=\"xn-text\">Transport</span></a>
                        <ul>
                            <li><a href=\"";
        // line 101
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addTransport");
        echo "\"><span class=\"xn-text\">Ajouter Transport</span></a></li>
                            <li><a href=\"";
        // line 102
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listTransports");
        echo "\"><span class=\"xn-text\">Liste des Transports </span></a></li>
                        </ul>
                    </li>
                    <li><a href=\"#\"><span class=\"fa fa-money\"></span> <span class=\"xn-text\">Payement</span></a></li>
                    <li><a href=\"#\"><span class=\"fa fa-envelope-o\"></span> <span class=\"xn-text\">Messagerie</span></a></li>
                    <li><a href=\"#\"><span class=\"fa fa-leanpub\"></span> <span class=\"xn-text\">Ressources pédagogiques</span></a></li>
                    <li><a href=\"#\"><span class=\"fa fa-table\"></span> <span class=\"xn-text\">Plannings des examens</span></a></li>
                    <li class=\"xn-openable\">
                        <a href=\"#\"><span class=\"fa fa-cutlery\"></span> <span class=\"xn-text\">Menu de cantine</span></a>
                        <ul>
                            <li><a href=\"";
        // line 112
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addMenu");
        echo "\"><span class=\"xn-text\">Ajouter Menu</span></a></li>
                            <li><a href=\"";
        // line 113
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listMenus");
        echo "\"><span class=\"xn-text\">Liste des Menus </span></a></li>
                        </ul>
                    </li>
                    <li><a href=\"#\"><span class=\"fa fa-check\"></span> <span class=\"xn-text\">Bultin</span></a></li>
                    <li><a href=\"#\"></a></li>
                    
                    
                </ul>
                <!-- END X-NAVIGATION -->
            </div>
            <!-- END PAGE SIDEBAR -->




            <!-- PAGE CONTENT -->
            <div class=\"page-content\">
                
                <!-- START X-NAVIGATION VERTICAL -->
                <ul class=\"x-navigation x-navigation-horizontal x-navigation-panel\">
                    <!-- TOGGLE NAVIGATION -->
                    <li class=\"xn-icon-button\">
                        <a href=\"#\" class=\"x-navigation-minimize\"><span class=\"fa fa-dedent\"></span></a>
                    </li>
                    <!-- END TOGGLE NAVIGATION -->
                    <!-- SEARCH -->
                    <li class=\"xn-search\">
                        <form role=\"form\">
                            <input type=\"text\" name=\"search\" placeholder=\"Search...\"/>
                        </form>
                    </li>   
                    <!-- END SEARCH -->                    
                    <!-- POWER OFF -->
                    <li class=\"xn-icon-button pull-right last\">
                        <a href=\"#\"><span class=\"fa fa-power-off\"></span></a>
                        <ul class=\"xn-drop-left animated zoomIn\">
                            <li><a href=\"lockScreen\"><span class=\"fa fa-lock\"></span> Lock Screen</a></li>
                            <li><a href=\"#\" class=\"mb-control\" data-box=\"#mb-signout\"><span class=\"fa fa-sign-out\"></span> Sign Out</a></li>
                        </ul>                        
                    </li> 
                    <!-- END POWER OFF -->                    
                    <!-- MESSAGES -->
                    <li class=\"xn-icon-button pull-right\">
                        <a href=\"#\"><span class=\"fa fa-comments\"></span></a>
                        <div class=\"informer informer-danger\">4</div>
                        <div class=\"panel panel-primary animated zoomIn xn-drop-left xn-panel-dragging\">
                            <div class=\"panel-heading\">
                                <h3 class=\"panel-title\"><span class=\"fa fa-comments\"></span> Messages</h3>                                
                                <div class=\"pull-right\">
                                    <span class=\"label label-danger\">4 new</span>
                                </div>
                            </div>
                            <div class=\"panel-body list-group list-group-contacts scroll\" style=\"height: 200px;\">
                                <a href=\"#\" class=\"list-group-item\">
                                    <div class=\"list-group-status status-online\"></div>
                                    <img src=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/photos/avatar.png"), "html", null, true);
        echo "\" class=\"pull-left\" alt=\"John Doe\"/>
                                    <span class=\"contacts-title\">John Doe</span>
                                    <p>Praesent placerat tellus id augue condimentum</p>
                                </a>
                                <a href=\"#\" class=\"list-group-item\">
                                    <div class=\"list-group-status status-away\"></div>
                                    <img src=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/photos/avatar.png"), "html", null, true);
        echo "\" class=\"pull-left\" alt=\"Dmitry Ivaniuk\"/>
                                    <span class=\"contacts-title\">Dmitry Ivaniuk</span>
                                    <p>Donec risus sapien, sagittis et magna quis</p>
                                </a>
                                <a href=\"#\" class=\"list-group-item\">
                                    <div class=\"list-group-status status-away\"></div>
                                    <img src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/photos/avatar.png"), "html", null, true);
        echo "\" class=\"pull-left\" alt=\"Nadia Ali\"/>
                                    <span class=\"contacts-title\">Nadia Ali</span>
                                    <p>Mauris vel eros ut nunc rhoncus cursus sed</p>
                                </a>
                                <a href=\"#\" class=\"list-group-item\">
                                    <div class=\"list-group-status status-offline\"></div>
                                    <img src=\"";
        // line 186
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/photos/avatar.png"), "html", null, true);
        echo "\" class=\"pull-left\" alt=\"Darth Vader\"/>
                                    <span class=\"contacts-title\">Darth Vader</span>
                                    <p>I want my money back!</p>
                                </a>
                            </div>     
                            <div class=\"panel-footer text-center\">
                                <a href=\"pages-messages.html\">Show all messages</a>
                            </div>                            
                        </div>                        
                    </li>
                    <!-- END MESSAGES -->
                    <!-- TASKS -->
                    <li class=\"xn-icon-button pull-right\">
                        <a href=\"#\"><span class=\"fa fa-tasks\"></span></a>
                        <div class=\"informer informer-warning\">3</div>
                        <div class=\"panel panel-primary animated zoomIn xn-drop-left xn-panel-dragging\">
                            <div class=\"panel-heading\">
                                <h3 class=\"panel-title\"><span class=\"fa fa-tasks\"></span> Tasks</h3>                                
                                <div class=\"pull-right\">
                                    <span class=\"label label-warning\">3 active</span>
                                </div>
                            </div>
                            <div class=\"panel-body list-group scroll\" style=\"height: 200px;\">                                
                                <a class=\"list-group-item\" href=\"#\">
                                    <strong>Phasellus augue arcu, elementum</strong>
                                    <div class=\"progress progress-small progress-striped active\">
                                        <div class=\"progress-bar progress-bar-danger\" role=\"progressbar\" aria-valuenow=\"50\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 50%;\">50%</div>
                                    </div>
                                    <small class=\"text-muted\">John Doe, 25 Sep 2015 / 50%</small>
                                </a>
                                <a class=\"list-group-item\" href=\"#\">
                                    <strong>Aenean ac cursus</strong>
                                    <div class=\"progress progress-small progress-striped active\">
                                        <div class=\"progress-bar progress-bar-warning\" role=\"progressbar\" aria-valuenow=\"80\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 80%;\">80%</div>
                                    </div>
                                    <small class=\"text-muted\">Dmitry Ivaniuk, 24 Sep 2015 / 80%</small>
                                </a>
                                <a class=\"list-group-item\" href=\"#\">
                                    <strong>Lorem ipsum dolor</strong>
                                    <div class=\"progress progress-small progress-striped active\">
                                        <div class=\"progress-bar progress-bar-success\" role=\"progressbar\" aria-valuenow=\"95\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 95%;\">95%</div>
                                    </div>
                                    <small class=\"text-muted\">John Doe, 23 Sep 2015 / 95%</small>
                                </a>
                                <a class=\"list-group-item\" href=\"#\">
                                    <strong>Cras suscipit ac quam at tincidunt.</strong>
                                    <div class=\"progress progress-small\">
                                        <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"100\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 100%;\">100%</div>
                                    </div>
                                    <small class=\"text-muted\">John Doe, 21 Sep 2015 /</small><small class=\"text-success\"> Done</small>
                                </a>                                
                            </div>     
                            <div class=\"panel-footer text-center\">
                                <a href=\"pages-tasks.html\">Show all tasks</a>
                            </div>                            
                        </div>                        
                    </li>
                    <!-- END TASKS -->
                    <!-- LANG BAR -->
                    <li class=\"xn-icon-button pull-right\">
                        <a href=\"#\"><span class=\"flag flag-fr\"></span></a>
                        <ul class=\"xn-drop-left xn-drop-white animated zoomIn\">
                            <li><a href=\"";
        // line 248
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method"), twig_array_merge($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route_params"), "method"), array("_locale" => "fr"))), "html", null, true);
        echo "\"><span class=\"flag flag-fr\"></span> Français</a></li>
                            <li><a href=\"";
        // line 249
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method"), twig_array_merge($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route_params"), "method"), array("_locale" => "ar"))), "html", null, true);
        echo "\"><span class=\"flag flag-ar\"></span> العربية</a></li>
                        </ul>                        
                    </li> 
                    <!-- END LANG BAR -->
                </ul>
                <!-- END X-NAVIGATION VERTICAL -->                     

                <!-- START BREADCRUMB -->
                <ul class=\"breadcrumb\">
                    <li><a href=\"#\">Accueil</a></li>                    
                    <li class=\"active\">Dashboard</li>
                </ul>
                <!-- END BREADCRUMB -->     

                
                ";
        // line 264
        $this->displayBlock('body', $context, $blocks);
        // line 265
        echo "
            </div>
            </div>                  

            <!-- MESSAGE BOX-->
        <div class=\"message-box animated fadeIn\" data-sound=\"alert\" id=\"mb-signout\">
            <div class=\"mb-container\">
                <div class=\"mb-middle\">
                    <div class=\"mb-title\"><span class=\"fa fa-sign-out\"></span> Log <strong>Out</strong> ?</div>
                    <div class=\"mb-content\">
                        <p>Are you sure you want to log out?</p>                    
                        <p>Press No if youwant to continue work. Press Yes to logout current user.</p>
                    </div>
                    <div class=\"mb-footer\">
                        <div class=\"pull-right\">
                            <a href=\"";
        // line 280
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\" class=\"btn btn-success btn-lg\">Yes</a>
                            <button class=\"btn btn-default btn-lg mb-control-close\">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MESSAGE BOX-->





            
            

        
        <!-- ********************************************* -->



        <!-- START SCRIPTS -->

        <script type=\"text/javascript\">
            var path = \"";
        // line 304
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img"), "html", null, true);
        echo "\";
        </script>
        <!-- START PLUGINS -->
        <script type=\"text/javascript\" src=\"";
        // line 307
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 308
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/jquery/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 309
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>        
        <!-- END PLUGINS -->

        <!-- START THIS PAGE PLUGINS-->        
        <script type='text/javascript' src=\"";
        // line 313
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/icheck/icheck.min.js"), "html", null, true);
        echo "\"></script>        
        <script type=\"text/javascript\" src=\"";
        // line 314
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 315
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/scrolltotop/scrolltopcontrol.js"), "html", null, true);
        echo "\"></script>
        
        <script type=\"text/javascript\" src=\"";
        // line 317
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/morris/raphael-min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 318
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/morris/morris.min.js"), "html", null, true);
        echo "\"></script>       
  <!--      <script type=\"text/javascript\" src=\"";
        // line 319
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/rickshaw/d3.v3.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 320
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/rickshaw/rickshaw.min.js"), "html", null, true);
        echo "\"></script>
      -->  <script type='text/javascript' src=\"";
        // line 321
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"), "html", null, true);
        echo "\"></script>
        <script type='text/javascript' src=\"";
        // line 322
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"), "html", null, true);
        echo "\"></script>                
        <script type='text/javascript' src=\"";
        // line 323
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/bootstrap/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>                
        <script type=\"text/javascript\" src=\"";
        // line 324
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/owl/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>               
        <script type=\"text/javascript\" src=\"";
        // line 325
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/bootstrap/bootstrap-select.js"), "html", null, true);
        echo "\"></script>
        
        
        <script type=\"text/javascript\" src=\"";
        // line 328
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/moment.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 329
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/daterangepicker/daterangepicker.js"), "html", null, true);
        echo "\"></script>
        <!-- END THIS PAGE PLUGINS-->        

        <!-- START TEMPLATE -->
        <script type=\"text/javascript\" src=\"";
        // line 333
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/settings.js"), "html", null, true);
        echo "\"></script>
    <!--   
        <script type=\"text/javascript\" src=\"";
        // line 335
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins.js"), "html", null, true);
        echo "\"></script>        
        --><script type=\"text/javascript\" src=\"";
        // line 336
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/actions.js"), "html", null, true);
        echo "\"></script>
      <!--  
        <script type=\"text/javascript\" src=\"";
        // line 338
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/demo_dashboard.js"), "html", null, true);
        echo "\"></script>
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS --> 
        ";
        // line 341
        $this->displayBlock('javascripts', $context, $blocks);
        // line 343
        echo "
    </body>
</html>
";
        
        $__internal_f4435019e21e588548cabad6e89b631a4d1b235b50293dd637961f5f70b9f0b8->leave($__internal_f4435019e21e588548cabad6e89b631a4d1b235b50293dd637961f5f70b9f0b8_prof);

        
        $__internal_58f9f1be4e9954396d245d1575f9acf48cf29d774c0e5d778c9fee1e562943aa->leave($__internal_58f9f1be4e9954396d245d1575f9acf48cf29d774c0e5d778c9fee1e562943aa_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f11a17799cfb456c58e4c37c06208e41b34d2c688e8041603fb280ddda6d5ec8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f11a17799cfb456c58e4c37c06208e41b34d2c688e8041603fb280ddda6d5ec8->enter($__internal_f11a17799cfb456c58e4c37c06208e41b34d2c688e8041603fb280ddda6d5ec8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5dba8de349802c304f8141ee19d722f8a6aef04ddab2b1f6628e1b4ba910441d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dba8de349802c304f8141ee19d722f8a6aef04ddab2b1f6628e1b4ba910441d->enter($__internal_5dba8de349802c304f8141ee19d722f8a6aef04ddab2b1f6628e1b4ba910441d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_5dba8de349802c304f8141ee19d722f8a6aef04ddab2b1f6628e1b4ba910441d->leave($__internal_5dba8de349802c304f8141ee19d722f8a6aef04ddab2b1f6628e1b4ba910441d_prof);

        
        $__internal_f11a17799cfb456c58e4c37c06208e41b34d2c688e8041603fb280ddda6d5ec8->leave($__internal_f11a17799cfb456c58e4c37c06208e41b34d2c688e8041603fb280ddda6d5ec8_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_051c48169562511927d7fd6152b457c880b43a501f99f8f8c2dd72213fe96122 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_051c48169562511927d7fd6152b457c880b43a501f99f8f8c2dd72213fe96122->enter($__internal_051c48169562511927d7fd6152b457c880b43a501f99f8f8c2dd72213fe96122_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_1c35b5be80f5af57e37671fcbd8fb89e7b37fd689de60cb5908c98b2da9a55fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c35b5be80f5af57e37671fcbd8fb89e7b37fd689de60cb5908c98b2da9a55fe->enter($__internal_1c35b5be80f5af57e37671fcbd8fb89e7b37fd689de60cb5908c98b2da9a55fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_1c35b5be80f5af57e37671fcbd8fb89e7b37fd689de60cb5908c98b2da9a55fe->leave($__internal_1c35b5be80f5af57e37671fcbd8fb89e7b37fd689de60cb5908c98b2da9a55fe_prof);

        
        $__internal_051c48169562511927d7fd6152b457c880b43a501f99f8f8c2dd72213fe96122->leave($__internal_051c48169562511927d7fd6152b457c880b43a501f99f8f8c2dd72213fe96122_prof);

    }

    // line 264
    public function block_body($context, array $blocks = array())
    {
        $__internal_7bea1e442d55a7804cb0809a8d69405020cfa8fa6879504c6e05bd46c407ae25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7bea1e442d55a7804cb0809a8d69405020cfa8fa6879504c6e05bd46c407ae25->enter($__internal_7bea1e442d55a7804cb0809a8d69405020cfa8fa6879504c6e05bd46c407ae25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_01e9325e7ab8e050829326c41b0eb1fbb9142869a1bd73807d9b1ae1bb3f0d6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01e9325e7ab8e050829326c41b0eb1fbb9142869a1bd73807d9b1ae1bb3f0d6b->enter($__internal_01e9325e7ab8e050829326c41b0eb1fbb9142869a1bd73807d9b1ae1bb3f0d6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_01e9325e7ab8e050829326c41b0eb1fbb9142869a1bd73807d9b1ae1bb3f0d6b->leave($__internal_01e9325e7ab8e050829326c41b0eb1fbb9142869a1bd73807d9b1ae1bb3f0d6b_prof);

        
        $__internal_7bea1e442d55a7804cb0809a8d69405020cfa8fa6879504c6e05bd46c407ae25->leave($__internal_7bea1e442d55a7804cb0809a8d69405020cfa8fa6879504c6e05bd46c407ae25_prof);

    }

    // line 341
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_629c1aacdaaf680dec680446aac1c34751a154d518ab628e610a8a0c5be85f42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_629c1aacdaaf680dec680446aac1c34751a154d518ab628e610a8a0c5be85f42->enter($__internal_629c1aacdaaf680dec680446aac1c34751a154d518ab628e610a8a0c5be85f42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_ee4f1e888bb2a0de3d78600e385551aa48790af5e7988c531817f1425e8293bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee4f1e888bb2a0de3d78600e385551aa48790af5e7988c531817f1425e8293bc->enter($__internal_ee4f1e888bb2a0de3d78600e385551aa48790af5e7988c531817f1425e8293bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 342
        echo "        ";
        
        $__internal_ee4f1e888bb2a0de3d78600e385551aa48790af5e7988c531817f1425e8293bc->leave($__internal_ee4f1e888bb2a0de3d78600e385551aa48790af5e7988c531817f1425e8293bc_prof);

        
        $__internal_629c1aacdaaf680dec680446aac1c34751a154d518ab628e610a8a0c5be85f42->leave($__internal_629c1aacdaaf680dec680446aac1c34751a154d518ab628e610a8a0c5be85f42_prof);

    }

    public function getTemplateName()
    {
        return "::base2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  617 => 342,  608 => 341,  591 => 264,  574 => 6,  556 => 5,  543 => 343,  541 => 341,  535 => 338,  530 => 336,  526 => 335,  521 => 333,  514 => 329,  510 => 328,  504 => 325,  500 => 324,  496 => 323,  492 => 322,  488 => 321,  484 => 320,  480 => 319,  476 => 318,  472 => 317,  467 => 315,  463 => 314,  459 => 313,  452 => 309,  448 => 308,  444 => 307,  438 => 304,  411 => 280,  394 => 265,  392 => 264,  374 => 249,  370 => 248,  305 => 186,  296 => 180,  287 => 174,  278 => 168,  220 => 113,  216 => 112,  203 => 102,  199 => 101,  189 => 94,  185 => 93,  169 => 80,  165 => 79,  149 => 66,  145 => 65,  136 => 59,  132 => 58,  123 => 52,  119 => 51,  104 => 39,  98 => 38,  88 => 35,  77 => 31,  57 => 13,  53 => 11,  51 => 10,  47 => 9,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" type=\"text/css\" id=\"theme\" href=\"{{ asset('css/theme-default.css') }}\"/>
        {% if (app.request.locale == 'ar') %}
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-rtl/3.4.0/css/bootstrap-flipped.css\">
        {% endif %}
        
    </head>
    <body>


      <!-- START PAGE CONTAINER -->
        <div class=\"page-container\">
            
            <!-- START PAGE SIDEBAR -->
            <div class=\"page-sidebar\">
                <!-- START X-NAVIGATION -->
                <ul class=\"x-navigation\">
                    <li class=\"xn-logo\">
                        <!-- <a href=\"#\">SCHOOLIUM</a> -->
                        <a href=\"#\" class=\"x-navigation-control\"></a>
                    </li>
                    <li class=\"xn-profile\">
                        <a href=\"#\" class=\"profile-mini\">
                            <img src=\"{% if app.user.photo %}{{ asset('uploads/photos/' ~ app.user.photo) }}{% else %}{{ asset('uploads/photos/avatar.png') }}{% endif %}\" alt=\"Photo de profile\"/>
                        </a>
                        <div class=\"profile\">
                            <div class=\"profile-image\">
                                <img src=\"{% if app.user.photo %}{{ asset('uploads/photos/' ~ app.user.photo) }}{% else %}{{ asset('uploads/photos/avatar.png') }}{% endif %}\" alt=\"Photo de profile\"/>
                            </div>
                            <div class=\"profile-data\">
                                <div class=\"profile-data-name\">{{app.user.nom}} {{app.user.prenom}}</div>
                                <div class=\"profile-data-title\">{{app.user.typeUser}}</div>
                            </div>
                            <div class=\"profile-controls\">
                                <a href=\"pages-profile.html\" class=\"profile-control-left\"><span class=\"fa fa-info\"></span></a>
                                <a href=\"pages-messages.html\" class=\"profile-control-right\"><span class=\"fa fa-envelope\"></span></a>
                            </div>
                        </div>                                                                        
                    </li>
                    <li class=\"active\" ><a href=\"#\"><span class=\"fa fa-dashboard\"></span> <span class=\"xn-text\">Dashboard</span></a></li>
                    <li class=\"xn-openable\">
                        <a href=\"#\"><span class=\"fa fa-graduation-cap\"></span> <span class=\"xn-text\">Gestion des Eleves</span></a>
                        <ul>
                            <li><a href=\"{{ path('addEleve') }}\"><span class=\"xn-text\">Ajouter Eleve</span></a></li>
                            <li><a href=\"{{ path('listEleves') }}\"><span class=\"xn-text\">Liste des eleves </span></a></li>
                        </ul>
                    </li>
                    <li class=\"xn-openable\">
                        <a href=\"#\"><span class=\"fa fa-male\"></span> <span class=\"xn-text\">Gestion des Parents</span></a>
                        <ul>
                            <li><a href=\"{{ path('addParental') }}\"><span class=\"xn-text\">Ajouter Parent</span></a></li>
                            <li><a href=\"{{ path('listParentals') }}\"><span class=\"xn-text\">Liste des Parents </span></a></li>
                        </ul>
                    </li>
                     <li class=\"xn-openable\">
                        <a href=\"#\"><span class=\"fa fa-briefcase\"></span> <span class=\"xn-text\">Gestion des Enseignants</span></a>
                        <ul>
                            <li><a href=\"{{ path('addEnseignant') }}\"><span class=\"xn-text\">Ajouter Enseignant</span></a></li>
                            <li><a href=\"{{ path('listEnseignants') }}\"><span class=\"xn-text\">Liste des Enseignants </span></a></li>
                        </ul>
                    </li>
                     <!-- <li class=\"xn-openable\">
                        <a href=\"#\"><span class=\"fa fa-book\"></span> <span class=\"xn-text\">Gestion des Matieres</span></a>
                        <ul>
                            <li><a href=\"#\"><span class=\"xn-text\">Ajouter Matiere</span></a></li>
                            <li><a href=\"dashboard.html\"><span class=\"xn-text\">Liste des Matieres </span></a></li>
                        </ul>
                    </li> -->
                     <li class=\"xn-openable\">
                        <a href=\"#\"><span class=\"fa fa-users\"></span> <span class=\"xn-text\">Gestion des Classes</span></a>
                        <ul>
                            <li><a href=\"{{ path('addClasse') }}\"><span class=\"xn-text\">Ajouter Classe</span></a></li>
                            <li><a href=\"{{ path('listClasses') }}\"><span class=\"xn-text\">Liste des Classes </span></a></li>
                        </ul>
                    </li>
                     <li class=\"xn-openable\">
                        <a href=\"#\"><span class=\"fa fa-table\"></span> <span class=\"xn-text\">Gestion des Emplois de temps</span></a>
                        <ul>
                            <li><a href=\"#\"><span class=\"xn-text\">Ajouter Emploi de temps</span></a></li>
                            <li><a href=\"#\"><span class=\"xn-text\">Liste des Emplois de temps </span></a></li>
                        </ul>
                    </li>
                     <li class=\"xn-openable\">
                        <a href=\"#\"><span class=\"fa fa-th\"></span> <span class=\"xn-text\">Gestion des Salles</span></a>
                        <ul>
                            <li><a href=\"{{ path('addSalle') }}\"><span class=\"xn-text\">Ajouter Salle</span></a></li>
                            <li><a href=\"{{ path('listSalles') }}\"><span class=\"xn-text\">Liste des Salles </span></a></li>
                        </ul>
                    </li>
                    <li><a href=\"#\"><span class=\"fa fa-check-square-o\"></span> <span class=\"xn-text\">Gestion des Retards et absences</span></a></li>
                    <li class=\"xn-openable\">
                        <a href=\"#\"><span class=\"fa fa-bus\"></span> <span class=\"xn-text\">Transport</span></a>
                        <ul>
                            <li><a href=\"{{ path('addTransport') }}\"><span class=\"xn-text\">Ajouter Transport</span></a></li>
                            <li><a href=\"{{ path('listTransports') }}\"><span class=\"xn-text\">Liste des Transports </span></a></li>
                        </ul>
                    </li>
                    <li><a href=\"#\"><span class=\"fa fa-money\"></span> <span class=\"xn-text\">Payement</span></a></li>
                    <li><a href=\"#\"><span class=\"fa fa-envelope-o\"></span> <span class=\"xn-text\">Messagerie</span></a></li>
                    <li><a href=\"#\"><span class=\"fa fa-leanpub\"></span> <span class=\"xn-text\">Ressources pédagogiques</span></a></li>
                    <li><a href=\"#\"><span class=\"fa fa-table\"></span> <span class=\"xn-text\">Plannings des examens</span></a></li>
                    <li class=\"xn-openable\">
                        <a href=\"#\"><span class=\"fa fa-cutlery\"></span> <span class=\"xn-text\">Menu de cantine</span></a>
                        <ul>
                            <li><a href=\"{{ path('addMenu') }}\"><span class=\"xn-text\">Ajouter Menu</span></a></li>
                            <li><a href=\"{{ path('listMenus') }}\"><span class=\"xn-text\">Liste des Menus </span></a></li>
                        </ul>
                    </li>
                    <li><a href=\"#\"><span class=\"fa fa-check\"></span> <span class=\"xn-text\">Bultin</span></a></li>
                    <li><a href=\"#\"></a></li>
                    
                    
                </ul>
                <!-- END X-NAVIGATION -->
            </div>
            <!-- END PAGE SIDEBAR -->




            <!-- PAGE CONTENT -->
            <div class=\"page-content\">
                
                <!-- START X-NAVIGATION VERTICAL -->
                <ul class=\"x-navigation x-navigation-horizontal x-navigation-panel\">
                    <!-- TOGGLE NAVIGATION -->
                    <li class=\"xn-icon-button\">
                        <a href=\"#\" class=\"x-navigation-minimize\"><span class=\"fa fa-dedent\"></span></a>
                    </li>
                    <!-- END TOGGLE NAVIGATION -->
                    <!-- SEARCH -->
                    <li class=\"xn-search\">
                        <form role=\"form\">
                            <input type=\"text\" name=\"search\" placeholder=\"Search...\"/>
                        </form>
                    </li>   
                    <!-- END SEARCH -->                    
                    <!-- POWER OFF -->
                    <li class=\"xn-icon-button pull-right last\">
                        <a href=\"#\"><span class=\"fa fa-power-off\"></span></a>
                        <ul class=\"xn-drop-left animated zoomIn\">
                            <li><a href=\"lockScreen\"><span class=\"fa fa-lock\"></span> Lock Screen</a></li>
                            <li><a href=\"#\" class=\"mb-control\" data-box=\"#mb-signout\"><span class=\"fa fa-sign-out\"></span> Sign Out</a></li>
                        </ul>                        
                    </li> 
                    <!-- END POWER OFF -->                    
                    <!-- MESSAGES -->
                    <li class=\"xn-icon-button pull-right\">
                        <a href=\"#\"><span class=\"fa fa-comments\"></span></a>
                        <div class=\"informer informer-danger\">4</div>
                        <div class=\"panel panel-primary animated zoomIn xn-drop-left xn-panel-dragging\">
                            <div class=\"panel-heading\">
                                <h3 class=\"panel-title\"><span class=\"fa fa-comments\"></span> Messages</h3>                                
                                <div class=\"pull-right\">
                                    <span class=\"label label-danger\">4 new</span>
                                </div>
                            </div>
                            <div class=\"panel-body list-group list-group-contacts scroll\" style=\"height: 200px;\">
                                <a href=\"#\" class=\"list-group-item\">
                                    <div class=\"list-group-status status-online\"></div>
                                    <img src=\"{{asset('uploads/photos/avatar.png')}}\" class=\"pull-left\" alt=\"John Doe\"/>
                                    <span class=\"contacts-title\">John Doe</span>
                                    <p>Praesent placerat tellus id augue condimentum</p>
                                </a>
                                <a href=\"#\" class=\"list-group-item\">
                                    <div class=\"list-group-status status-away\"></div>
                                    <img src=\"{{asset('uploads/photos/avatar.png')}}\" class=\"pull-left\" alt=\"Dmitry Ivaniuk\"/>
                                    <span class=\"contacts-title\">Dmitry Ivaniuk</span>
                                    <p>Donec risus sapien, sagittis et magna quis</p>
                                </a>
                                <a href=\"#\" class=\"list-group-item\">
                                    <div class=\"list-group-status status-away\"></div>
                                    <img src=\"{{asset('uploads/photos/avatar.png')}}\" class=\"pull-left\" alt=\"Nadia Ali\"/>
                                    <span class=\"contacts-title\">Nadia Ali</span>
                                    <p>Mauris vel eros ut nunc rhoncus cursus sed</p>
                                </a>
                                <a href=\"#\" class=\"list-group-item\">
                                    <div class=\"list-group-status status-offline\"></div>
                                    <img src=\"{{asset('uploads/photos/avatar.png')}}\" class=\"pull-left\" alt=\"Darth Vader\"/>
                                    <span class=\"contacts-title\">Darth Vader</span>
                                    <p>I want my money back!</p>
                                </a>
                            </div>     
                            <div class=\"panel-footer text-center\">
                                <a href=\"pages-messages.html\">Show all messages</a>
                            </div>                            
                        </div>                        
                    </li>
                    <!-- END MESSAGES -->
                    <!-- TASKS -->
                    <li class=\"xn-icon-button pull-right\">
                        <a href=\"#\"><span class=\"fa fa-tasks\"></span></a>
                        <div class=\"informer informer-warning\">3</div>
                        <div class=\"panel panel-primary animated zoomIn xn-drop-left xn-panel-dragging\">
                            <div class=\"panel-heading\">
                                <h3 class=\"panel-title\"><span class=\"fa fa-tasks\"></span> Tasks</h3>                                
                                <div class=\"pull-right\">
                                    <span class=\"label label-warning\">3 active</span>
                                </div>
                            </div>
                            <div class=\"panel-body list-group scroll\" style=\"height: 200px;\">                                
                                <a class=\"list-group-item\" href=\"#\">
                                    <strong>Phasellus augue arcu, elementum</strong>
                                    <div class=\"progress progress-small progress-striped active\">
                                        <div class=\"progress-bar progress-bar-danger\" role=\"progressbar\" aria-valuenow=\"50\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 50%;\">50%</div>
                                    </div>
                                    <small class=\"text-muted\">John Doe, 25 Sep 2015 / 50%</small>
                                </a>
                                <a class=\"list-group-item\" href=\"#\">
                                    <strong>Aenean ac cursus</strong>
                                    <div class=\"progress progress-small progress-striped active\">
                                        <div class=\"progress-bar progress-bar-warning\" role=\"progressbar\" aria-valuenow=\"80\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 80%;\">80%</div>
                                    </div>
                                    <small class=\"text-muted\">Dmitry Ivaniuk, 24 Sep 2015 / 80%</small>
                                </a>
                                <a class=\"list-group-item\" href=\"#\">
                                    <strong>Lorem ipsum dolor</strong>
                                    <div class=\"progress progress-small progress-striped active\">
                                        <div class=\"progress-bar progress-bar-success\" role=\"progressbar\" aria-valuenow=\"95\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 95%;\">95%</div>
                                    </div>
                                    <small class=\"text-muted\">John Doe, 23 Sep 2015 / 95%</small>
                                </a>
                                <a class=\"list-group-item\" href=\"#\">
                                    <strong>Cras suscipit ac quam at tincidunt.</strong>
                                    <div class=\"progress progress-small\">
                                        <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"100\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 100%;\">100%</div>
                                    </div>
                                    <small class=\"text-muted\">John Doe, 21 Sep 2015 /</small><small class=\"text-success\"> Done</small>
                                </a>                                
                            </div>     
                            <div class=\"panel-footer text-center\">
                                <a href=\"pages-tasks.html\">Show all tasks</a>
                            </div>                            
                        </div>                        
                    </li>
                    <!-- END TASKS -->
                    <!-- LANG BAR -->
                    <li class=\"xn-icon-button pull-right\">
                        <a href=\"#\"><span class=\"flag flag-fr\"></span></a>
                        <ul class=\"xn-drop-left xn-drop-white animated zoomIn\">
                            <li><a href=\"{{ path(app.request.get('_route'), app.request.get('_route_params')|merge({'_locale': 'fr'})) }}\"><span class=\"flag flag-fr\"></span> Français</a></li>
                            <li><a href=\"{{ path(app.request.get('_route'), app.request.get('_route_params')|merge({'_locale': 'ar'})) }}\"><span class=\"flag flag-ar\"></span> العربية</a></li>
                        </ul>                        
                    </li> 
                    <!-- END LANG BAR -->
                </ul>
                <!-- END X-NAVIGATION VERTICAL -->                     

                <!-- START BREADCRUMB -->
                <ul class=\"breadcrumb\">
                    <li><a href=\"#\">Accueil</a></li>                    
                    <li class=\"active\">Dashboard</li>
                </ul>
                <!-- END BREADCRUMB -->     

                
                {% block body %}{% endblock %}

            </div>
            </div>                  

            <!-- MESSAGE BOX-->
        <div class=\"message-box animated fadeIn\" data-sound=\"alert\" id=\"mb-signout\">
            <div class=\"mb-container\">
                <div class=\"mb-middle\">
                    <div class=\"mb-title\"><span class=\"fa fa-sign-out\"></span> Log <strong>Out</strong> ?</div>
                    <div class=\"mb-content\">
                        <p>Are you sure you want to log out?</p>                    
                        <p>Press No if youwant to continue work. Press Yes to logout current user.</p>
                    </div>
                    <div class=\"mb-footer\">
                        <div class=\"pull-right\">
                            <a href=\"{{ path('fos_user_security_logout') }}\" class=\"btn btn-success btn-lg\">Yes</a>
                            <button class=\"btn btn-default btn-lg mb-control-close\">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MESSAGE BOX-->





            
            

        
        <!-- ********************************************* -->



        <!-- START SCRIPTS -->

        <script type=\"text/javascript\">
            var path = \"{{ asset(\"img\") }}\";
        </script>
        <!-- START PLUGINS -->
        <script type=\"text/javascript\" src=\"{{ asset('js/plugins/jquery/jquery.min.js') }}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset('js/plugins/jquery/jquery-ui.min.js') }}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset('js/plugins/bootstrap/bootstrap.min.js') }}\"></script>        
        <!-- END PLUGINS -->

        <!-- START THIS PAGE PLUGINS-->        
        <script type='text/javascript' src=\"{{ asset('js/plugins/icheck/icheck.min.js') }}\"></script>        
        <script type=\"text/javascript\" src=\"{{ asset('js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js') }}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset('js/plugins/scrolltotop/scrolltopcontrol.js') }}\"></script>
        
        <script type=\"text/javascript\" src=\"{{ asset('js/plugins/morris/raphael-min.js') }}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset('js/plugins/morris/morris.min.js') }}\"></script>       
  <!--      <script type=\"text/javascript\" src=\"{{ asset('js/plugins/rickshaw/d3.v3.js') }}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset('js/plugins/rickshaw/rickshaw.min.js') }}\"></script>
      -->  <script type='text/javascript' src=\"{{ asset('js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}\"></script>
        <script type='text/javascript' src=\"{{ asset('js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}\"></script>                
        <script type='text/javascript' src=\"{{ asset('js/plugins/bootstrap/bootstrap-datepicker.js') }}\"></script>                
        <script type=\"text/javascript\" src=\"{{ asset('js/plugins/owl/owl.carousel.min.js') }}\"></script>               
        <script type=\"text/javascript\" src=\"{{ asset('js/plugins/bootstrap/bootstrap-select.js') }}\"></script>
        
        
        <script type=\"text/javascript\" src=\"{{ asset('js/plugins/moment.min.js') }}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset('js/plugins/daterangepicker/daterangepicker.js') }}\"></script>
        <!-- END THIS PAGE PLUGINS-->        

        <!-- START TEMPLATE -->
        <script type=\"text/javascript\" src=\"{{ asset('js/settings.js') }}\"></script>
    <!--   
        <script type=\"text/javascript\" src=\"{{ asset('js/plugins.js') }}\"></script>        
        --><script type=\"text/javascript\" src=\"{{ asset('js/actions.js') }}\"></script>
      <!--  
        <script type=\"text/javascript\" src=\"{{ asset('js/demo_dashboard.js') }}\"></script>
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS --> 
        {% block javascripts %}
        {% endblock %}

    </body>
</html>
", "::base2.html.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\app/Resources\\views/base2.html.twig");
    }
}
