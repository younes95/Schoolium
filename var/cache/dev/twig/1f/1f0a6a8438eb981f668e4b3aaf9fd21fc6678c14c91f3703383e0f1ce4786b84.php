<?php

/* base2.html.twig */
class __TwigTemplate_d76c77c54cef8e2e5f5cde7e9ab1d0a900c992402cd873356655bb31b4774095 extends Twig_Template
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
        $__internal_271982e06482af9d16026e609c8c91f17c8ef66dd6bebc7e54bdaff8956d56e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_271982e06482af9d16026e609c8c91f17c8ef66dd6bebc7e54bdaff8956d56e8->enter($__internal_271982e06482af9d16026e609c8c91f17c8ef66dd6bebc7e54bdaff8956d56e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base2.html.twig"));

        $__internal_c8dfbf97bb3459576a5c1e204808f098ba14d466b3f28e4c487af73bababb070 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8dfbf97bb3459576a5c1e204808f098ba14d466b3f28e4c487af73bababb070->enter($__internal_c8dfbf97bb3459576a5c1e204808f098ba14d466b3f28e4c487af73bababb070_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base2.html.twig"));

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
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "locale", array()) == "ar")) {
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
        if ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "photo", array())) {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/photos/" . $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "photo", array()))), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/photos/avatar.png"), "html", null, true);
        }
        echo "\" alt=\"Photo de profile\"/>
                        </a>
                        <div class=\"profile\">
                            <div class=\"profile-image\">
                                <img src=\"";
        // line 35
        if ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "photo", array())) {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/photos/" . $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "photo", array()))), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/photos/avatar.png"), "html", null, true);
        }
        echo "\" alt=\"Photo de profile\"/>
                            </div>
                            <div class=\"profile-data\">
                                <div class=\"profile-data-name\">";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "prenom", array()), "html", null, true);
        echo "</div>
                                <div class=\"profile-data-title\">";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "typeUser", array()), "html", null, true);
        echo "</div>
                            </div>
                            <div class=\"profile-controls\">
                                <a href=\"pages-profile.html\" class=\"profile-control-left\"><span class=\"fa fa-info\"></span></a>
                                <a href=\"pages-messages.html\" class=\"profile-control-right\"><span class=\"fa fa-envelope\"></span></a>
                            </div>
                        </div>                                                                        
                    </li>

                    <li class=\"active\" >
                        <a href=\"#\">
                            <span class=\"fa fa-dashboard\"></span> 
                            <span class=\"xn-text\">Dashboard</span>
                        </a>
                    </li>

                    <!-- Menu Navigation pour Administrateur -->

                    ";
        // line 57
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 58
            echo "                        ";
            if (twig_in_filter("ROLE_ENSEIGNANT", $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "roles", array()))) {
                // line 59
                echo "                           
                            <!-- Gestion des classes -->
                            <li class=\"xn-openable\">
                                <a href=\"#\">
                                    <span class=\"fa fa-users\"></span> 
                                    <span class=\"xn-text\">Gestion des Classes</span>
                                </a>
                                <ul>
                                    <li>
                                        <a href=\"";
                // line 68
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("enseignant_liste_classes", array("id" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
                echo "\">
                                            <span class=\"xn-text\">Liste des Classes </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"";
                // line 73
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("matiere_program_annual_add", array("id" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
                echo "\">
                                            <span class=\"xn-text\">Programme Annuel </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"";
                // line 78
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show_travail", array("id" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
                echo "\">
                                            <span class=\"xn-text\">Travail réalisé </span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!-- Gestion des absences/retard -->
                            <li>
                                <a href=\"";
                // line 86
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("absence_index");
                echo "\">
                                    <span class=\"fa fa-check-square-o\"></span> 
                                    <span class=\"xn-text\">Gestion des Retards et absences</span>
                                </a>
                            </li>
                            <!-- Gestion des emplois du temps -->
                            <li class=\"xn-openable\">
                                <a href=\"#\">
                                    <span class=\"fa fa-table\">
                                    </span> 
                                    <span class=\"xn-text\">Gestion des Emplois de temps</span>
                                </a>
                                <ul>
                                    <li>
                                        <a href=\"";
                // line 100
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("program_show_enseignant", array("id" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
                echo "\">
                                            <span class=\"xn-text\">Mon Emploi du temps</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                           
                        ";
            }
            // line 108
            echo "                    ";
        }
        // line 109
        echo "
                    <!-- Fin Menu Navigation pour Enseignant -->

                    <!-- Menu Navigation pour Administrateur -->

                    ";
        // line 114
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 115
            echo "                        ";
            if (twig_in_filter("ROLE_ADMIN", $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "roles", array()))) {
                // line 116
                echo "                            <!-- Gestion des élèves -->
                            <li class=\"xn-openable\">
                                <a href=\"#\"><span class=\"fa fa-graduation-cap\"></span> <span class=\"xn-text\">Gestion des Eleves</span></a>
                                <ul>
                                    <li><a href=\"";
                // line 120
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addEleve");
                echo "\"><span class=\"xn-text\">Ajouter Eleve</span></a></li>
                                    <li><a href=\"";
                // line 121
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listEleves");
                echo "\"><span class=\"xn-text\">Liste des eleves </span></a></li>
                                </ul>
                            </li>

                            <!-- Gestion des parents -->
                            <li class=\"xn-openable\">
                                <a href=\"#\"><span class=\"fa fa-male\"></span> <span class=\"xn-text\">Gestion des Parents</span></a>
                                <ul>
                                    <li><a href=\"";
                // line 129
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addParental");
                echo "\"><span class=\"xn-text\">Ajouter Parent</span></a></li>
                                    <li><a href=\"";
                // line 130
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listParentals");
                echo "\"><span class=\"xn-text\">Liste des Parents </span></a></li>
                                </ul>
                            </li>

                            <!-- Gestion des enseignants -->
                            <li class=\"xn-openable\">
                                <a href=\"#\"><span class=\"fa fa-briefcase\"></span> <span class=\"xn-text\">Gestion des Enseignants</span></a>
                                <ul>
                                    <li><a href=\"";
                // line 138
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addEnseignant");
                echo "\"><span class=\"xn-text\">Ajouter Enseignant</span></a></li>
                                    <li><a href=\"";
                // line 139
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

                            <!-- Gestion des classes -->
                            <li class=\"xn-openable\">
                                <a href=\"#\"><span class=\"fa fa-users\"></span> <span class=\"xn-text\">Gestion des Classes</span></a>
                                <ul>
                                    <li><a href=\"";
                // line 154
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addClasse");
                echo "\"><span class=\"xn-text\">Ajouter Classe</span></a></li>
                                    <li><a href=\"";
                // line 155
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listClasses");
                echo "\"><span class=\"xn-text\">Liste des Classes </span></a></li>
                                </ul>
                            </li>

                            <!-- Gestion des emplois du temps -->
                            <li class=\"xn-openable\">
                                <a href=\"#\"><span class=\"fa fa-table\"></span> <span class=\"xn-text\">Gestion des Emplois de temps</span></a>
                                <ul>
                                    <li><a href=\"#\"><span class=\"xn-text\">Ajouter Emploi de temps</span></a></li>
                                    <li><a href=\"#\"><span class=\"xn-text\">Liste des Emplois de temps </span></a></li>
                                </ul>
                            </li>

                            <!-- Gestion des salles -->
                            <li class=\"xn-openable\">
                                <a href=\"#\"><span class=\"fa fa-th\"></span> <span class=\"xn-text\">Gestion des Salles</span></a>
                                <ul>
                                    <li><a href=\"";
                // line 172
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addSalle");
                echo "\"><span class=\"xn-text\">Ajouter Salle</span></a></li>
                                    <li><a href=\"";
                // line 173
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listSalles");
                echo "\"><span class=\"xn-text\">Liste des Salles </span></a></li>
                                </ul>
                            </li>

                            <!-- Gestion des absences/retard -->
                            <li><a href=\"#\"><span class=\"fa fa-check-square-o\"></span> <span class=\"xn-text\">Gestion des Retards et absences</span></a></li>

                            <!-- Transport -->
                            <li class=\"xn-openable\">
                                <a href=\"#\"><span class=\"fa fa-bus\"></span> <span class=\"xn-text\">Transport</span></a>
                                <ul>
                                    <li><a href=\"";
                // line 184
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addTransport");
                echo "\"><span class=\"xn-text\">Ajouter Transport</span></a></li>
                                    <li><a href=\"";
                // line 185
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listTransports");
                echo "\"><span class=\"xn-text\">Liste des Transports </span></a></li>
                                </ul>
                            </li>

                            <!-- Paiement -->
                            <li><a href=\"#\"><span class=\"fa fa-money\"></span> <span class=\"xn-text\">Payement</span></a></li>

                            <!-- Messagerie -->
                            <li><a href=\"#\"><span class=\"fa fa-envelope-o\"></span> <span class=\"xn-text\">Messagerie</span></a></li>

                            <!-- Ressources pédagogiques -->
                            <li><a href=\"#\"><span class=\"fa fa-leanpub\"></span> <span class=\"xn-text\">Ressources pédagogiques</span></a></li>

                            <!-- Planning des examens -->
                            <li><a href=\"#\"><span class=\"fa fa-table\"></span> <span class=\"xn-text\">Plannings des examens</span></a></li>

                            <!-- Menu cantine -->
                            <li class=\"xn-openable\">
                                <a href=\"#\"><span class=\"fa fa-cutlery\"></span> <span class=\"xn-text\">Menu de cantine</span></a>
                                <ul>
                                    <li><a href=\"";
                // line 205
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addMenu");
                echo "\"><span class=\"xn-text\">Ajouter Menu</span></a></li>
                                    <li><a href=\"";
                // line 206
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listMenus");
                echo "\"><span class=\"xn-text\">Liste des Menus </span></a></li>
                                </ul>
                            </li>

                            <!-- Bulletin -->
                            <li><a href=\"#\"><span class=\"fa fa-check\"></span> <span class=\"xn-text\">Bulletin</span></a></li>
                        ";
            }
            // line 212
            echo "        
                    ";
        }
        // line 214
        echo "                    
                    <!-- Fin Menu Navigation pour Administrateur -->
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
        // line 264
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/photos/avatar.png"), "html", null, true);
        echo "\" class=\"pull-left\" alt=\"John Doe\"/>
                                    <span class=\"contacts-title\">John Doe</span>
                                    <p>Praesent placerat tellus id augue condimentum</p>
                                </a>
                                <a href=\"#\" class=\"list-group-item\">
                                    <div class=\"list-group-status status-away\"></div>
                                    <img src=\"";
        // line 270
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/photos/avatar.png"), "html", null, true);
        echo "\" class=\"pull-left\" alt=\"Dmitry Ivaniuk\"/>
                                    <span class=\"contacts-title\">Dmitry Ivaniuk</span>
                                    <p>Donec risus sapien, sagittis et magna quis</p>
                                </a>
                                <a href=\"#\" class=\"list-group-item\">
                                    <div class=\"list-group-status status-away\"></div>
                                    <img src=\"";
        // line 276
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/photos/avatar.png"), "html", null, true);
        echo "\" class=\"pull-left\" alt=\"Nadia Ali\"/>
                                    <span class=\"contacts-title\">Nadia Ali</span>
                                    <p>Mauris vel eros ut nunc rhoncus cursus sed</p>
                                </a>
                                <a href=\"#\" class=\"list-group-item\">
                                    <div class=\"list-group-status status-offline\"></div>
                                    <img src=\"";
        // line 282
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
        // line 344
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method"), twig_array_merge($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route_params"), "method"), array("_locale" => "fr"))), "html", null, true);
        echo "\"><span class=\"flag flag-fr\"></span> Français</a></li>
                            <li><a href=\"";
        // line 345
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method"), twig_array_merge($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route_params"), "method"), array("_locale" => "ar"))), "html", null, true);
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
        // line 360
        $this->displayBlock('body', $context, $blocks);
        // line 361
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
        // line 376
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
        // line 400
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img"), "html", null, true);
        echo "\";
        </script>
        <!-- START PLUGINS -->
        <script type=\"text/javascript\" src=\"";
        // line 403
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 404
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/jquery/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 405
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>        
        <!-- END PLUGINS -->

        <!-- START THIS PAGE PLUGINS-->        
        <script type='text/javascript' src=\"";
        // line 409
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/icheck/icheck.min.js"), "html", null, true);
        echo "\"></script>        
        <script type=\"text/javascript\" src=\"";
        // line 410
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 411
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/scrolltotop/scrolltopcontrol.js"), "html", null, true);
        echo "\"></script>
        
        <script type=\"text/javascript\" src=\"";
        // line 413
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/morris/raphael-min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 414
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/morris/morris.min.js"), "html", null, true);
        echo "\"></script>       
  <!--      <script type=\"text/javascript\" src=\"";
        // line 415
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/rickshaw/d3.v3.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 416
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/rickshaw/rickshaw.min.js"), "html", null, true);
        echo "\"></script>
      -->  <script type='text/javascript' src=\"";
        // line 417
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"), "html", null, true);
        echo "\"></script>
        <script type='text/javascript' src=\"";
        // line 418
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"), "html", null, true);
        echo "\"></script>                
        <script type='text/javascript' src=\"";
        // line 419
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/bootstrap/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>                
        <script type=\"text/javascript\" src=\"";
        // line 420
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/owl/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>               
        <script type=\"text/javascript\" src=\"";
        // line 421
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/bootstrap/bootstrap-select.js"), "html", null, true);
        echo "\"></script>
        
        
        <script type=\"text/javascript\" src=\"";
        // line 424
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/moment.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 425
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/daterangepicker/daterangepicker.js"), "html", null, true);
        echo "\"></script>
        <!-- END THIS PAGE PLUGINS-->        

        <!-- START TEMPLATE -->
        <script type=\"text/javascript\" src=\"";
        // line 429
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/settings.js"), "html", null, true);
        echo "\"></script>
    <!--   
        <script type=\"text/javascript\" src=\"";
        // line 431
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins.js"), "html", null, true);
        echo "\"></script>        
        --><script type=\"text/javascript\" src=\"";
        // line 432
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/actions.js"), "html", null, true);
        echo "\"></script>
      <!--  
        <script type=\"text/javascript\" src=\"";
        // line 434
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/demo_dashboard.js"), "html", null, true);
        echo "\"></script>
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS --> 
        ";
        // line 437
        $this->displayBlock('javascripts', $context, $blocks);
        // line 439
        echo "
    </body>
</html>
";
        
        $__internal_271982e06482af9d16026e609c8c91f17c8ef66dd6bebc7e54bdaff8956d56e8->leave($__internal_271982e06482af9d16026e609c8c91f17c8ef66dd6bebc7e54bdaff8956d56e8_prof);

        
        $__internal_c8dfbf97bb3459576a5c1e204808f098ba14d466b3f28e4c487af73bababb070->leave($__internal_c8dfbf97bb3459576a5c1e204808f098ba14d466b3f28e4c487af73bababb070_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_87c1e419ce25987d27f0866709013b9f33fb507b15daa103be550e05424f1780 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87c1e419ce25987d27f0866709013b9f33fb507b15daa103be550e05424f1780->enter($__internal_87c1e419ce25987d27f0866709013b9f33fb507b15daa103be550e05424f1780_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3ac80163b5a46300370a509974776a2212a40fcc63101459b85a3afa62ef61fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ac80163b5a46300370a509974776a2212a40fcc63101459b85a3afa62ef61fc->enter($__internal_3ac80163b5a46300370a509974776a2212a40fcc63101459b85a3afa62ef61fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_3ac80163b5a46300370a509974776a2212a40fcc63101459b85a3afa62ef61fc->leave($__internal_3ac80163b5a46300370a509974776a2212a40fcc63101459b85a3afa62ef61fc_prof);

        
        $__internal_87c1e419ce25987d27f0866709013b9f33fb507b15daa103be550e05424f1780->leave($__internal_87c1e419ce25987d27f0866709013b9f33fb507b15daa103be550e05424f1780_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7c9fe20570e07e2539d3d04c12bcf7d72c836bc628cf9378acb679f7fd0260f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c9fe20570e07e2539d3d04c12bcf7d72c836bc628cf9378acb679f7fd0260f3->enter($__internal_7c9fe20570e07e2539d3d04c12bcf7d72c836bc628cf9378acb679f7fd0260f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_0e0c2480331b51aaf30a3105886aec62ca0d8348cdb6e921d8001349ebf882bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e0c2480331b51aaf30a3105886aec62ca0d8348cdb6e921d8001349ebf882bd->enter($__internal_0e0c2480331b51aaf30a3105886aec62ca0d8348cdb6e921d8001349ebf882bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_0e0c2480331b51aaf30a3105886aec62ca0d8348cdb6e921d8001349ebf882bd->leave($__internal_0e0c2480331b51aaf30a3105886aec62ca0d8348cdb6e921d8001349ebf882bd_prof);

        
        $__internal_7c9fe20570e07e2539d3d04c12bcf7d72c836bc628cf9378acb679f7fd0260f3->leave($__internal_7c9fe20570e07e2539d3d04c12bcf7d72c836bc628cf9378acb679f7fd0260f3_prof);

    }

    // line 360
    public function block_body($context, array $blocks = array())
    {
        $__internal_a39d841d83e4e632200eac2087b98012cac6f037ce07f606cd36ae2c5a24d341 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a39d841d83e4e632200eac2087b98012cac6f037ce07f606cd36ae2c5a24d341->enter($__internal_a39d841d83e4e632200eac2087b98012cac6f037ce07f606cd36ae2c5a24d341_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4c6132fd07f6bc9606b2283e88380cf2e46844c31cf5631aaff52223579df457 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c6132fd07f6bc9606b2283e88380cf2e46844c31cf5631aaff52223579df457->enter($__internal_4c6132fd07f6bc9606b2283e88380cf2e46844c31cf5631aaff52223579df457_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4c6132fd07f6bc9606b2283e88380cf2e46844c31cf5631aaff52223579df457->leave($__internal_4c6132fd07f6bc9606b2283e88380cf2e46844c31cf5631aaff52223579df457_prof);

        
        $__internal_a39d841d83e4e632200eac2087b98012cac6f037ce07f606cd36ae2c5a24d341->leave($__internal_a39d841d83e4e632200eac2087b98012cac6f037ce07f606cd36ae2c5a24d341_prof);

    }

    // line 437
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9fd67f9c47f582eeb88d51f76de74a5563d338dc48c3068b2720d62bb4547ded = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fd67f9c47f582eeb88d51f76de74a5563d338dc48c3068b2720d62bb4547ded->enter($__internal_9fd67f9c47f582eeb88d51f76de74a5563d338dc48c3068b2720d62bb4547ded_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_a004e0ed66c84962b0b1c9b71d7181cf36fcd8f595aa6bb3daefec6e37ade750 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a004e0ed66c84962b0b1c9b71d7181cf36fcd8f595aa6bb3daefec6e37ade750->enter($__internal_a004e0ed66c84962b0b1c9b71d7181cf36fcd8f595aa6bb3daefec6e37ade750_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 438
        echo "        ";
        
        $__internal_a004e0ed66c84962b0b1c9b71d7181cf36fcd8f595aa6bb3daefec6e37ade750->leave($__internal_a004e0ed66c84962b0b1c9b71d7181cf36fcd8f595aa6bb3daefec6e37ade750_prof);

        
        $__internal_9fd67f9c47f582eeb88d51f76de74a5563d338dc48c3068b2720d62bb4547ded->leave($__internal_9fd67f9c47f582eeb88d51f76de74a5563d338dc48c3068b2720d62bb4547ded_prof);

    }

    public function getTemplateName()
    {
        return "base2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  747 => 438,  738 => 437,  721 => 360,  704 => 6,  686 => 5,  673 => 439,  671 => 437,  665 => 434,  660 => 432,  656 => 431,  651 => 429,  644 => 425,  640 => 424,  634 => 421,  630 => 420,  626 => 419,  622 => 418,  618 => 417,  614 => 416,  610 => 415,  606 => 414,  602 => 413,  597 => 411,  593 => 410,  589 => 409,  582 => 405,  578 => 404,  574 => 403,  568 => 400,  541 => 376,  524 => 361,  522 => 360,  504 => 345,  500 => 344,  435 => 282,  426 => 276,  417 => 270,  408 => 264,  356 => 214,  352 => 212,  342 => 206,  338 => 205,  315 => 185,  311 => 184,  297 => 173,  293 => 172,  273 => 155,  269 => 154,  251 => 139,  247 => 138,  236 => 130,  232 => 129,  221 => 121,  217 => 120,  211 => 116,  208 => 115,  206 => 114,  199 => 109,  196 => 108,  185 => 100,  168 => 86,  157 => 78,  149 => 73,  141 => 68,  130 => 59,  127 => 58,  125 => 57,  104 => 39,  98 => 38,  88 => 35,  77 => 31,  57 => 13,  53 => 11,  51 => 10,  47 => 9,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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

                    <li class=\"active\" >
                        <a href=\"#\">
                            <span class=\"fa fa-dashboard\"></span> 
                            <span class=\"xn-text\">Dashboard</span>
                        </a>
                    </li>

                    <!-- Menu Navigation pour Administrateur -->

                    {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                        {% if 'ROLE_ENSEIGNANT' in app.user.roles %}
                           
                            <!-- Gestion des classes -->
                            <li class=\"xn-openable\">
                                <a href=\"#\">
                                    <span class=\"fa fa-users\"></span> 
                                    <span class=\"xn-text\">Gestion des Classes</span>
                                </a>
                                <ul>
                                    <li>
                                        <a href=\"{{ path('enseignant_liste_classes', {'id': app.user.id}) }}\">
                                            <span class=\"xn-text\">Liste des Classes </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"{{path('matiere_program_annual_add',{ 'id': app.user.id})}}\">
                                            <span class=\"xn-text\">Programme Annuel </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"{{path('show_travail',{ 'id': app.user.id})}}\">
                                            <span class=\"xn-text\">Travail réalisé </span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!-- Gestion des absences/retard -->
                            <li>
                                <a href=\"{{path('absence_index')}}\">
                                    <span class=\"fa fa-check-square-o\"></span> 
                                    <span class=\"xn-text\">Gestion des Retards et absences</span>
                                </a>
                            </li>
                            <!-- Gestion des emplois du temps -->
                            <li class=\"xn-openable\">
                                <a href=\"#\">
                                    <span class=\"fa fa-table\">
                                    </span> 
                                    <span class=\"xn-text\">Gestion des Emplois de temps</span>
                                </a>
                                <ul>
                                    <li>
                                        <a href=\"{{ path('program_show_enseignant', { 'id': app.user.id}) }}\">
                                            <span class=\"xn-text\">Mon Emploi du temps</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                           
                        {% endif %}
                    {% endif %}

                    <!-- Fin Menu Navigation pour Enseignant -->

                    <!-- Menu Navigation pour Administrateur -->

                    {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                        {% if 'ROLE_ADMIN' in app.user.roles %}
                            <!-- Gestion des élèves -->
                            <li class=\"xn-openable\">
                                <a href=\"#\"><span class=\"fa fa-graduation-cap\"></span> <span class=\"xn-text\">Gestion des Eleves</span></a>
                                <ul>
                                    <li><a href=\"{{ path('addEleve') }}\"><span class=\"xn-text\">Ajouter Eleve</span></a></li>
                                    <li><a href=\"{{ path('listEleves') }}\"><span class=\"xn-text\">Liste des eleves </span></a></li>
                                </ul>
                            </li>

                            <!-- Gestion des parents -->
                            <li class=\"xn-openable\">
                                <a href=\"#\"><span class=\"fa fa-male\"></span> <span class=\"xn-text\">Gestion des Parents</span></a>
                                <ul>
                                    <li><a href=\"{{ path('addParental') }}\"><span class=\"xn-text\">Ajouter Parent</span></a></li>
                                    <li><a href=\"{{ path('listParentals') }}\"><span class=\"xn-text\">Liste des Parents </span></a></li>
                                </ul>
                            </li>

                            <!-- Gestion des enseignants -->
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

                            <!-- Gestion des classes -->
                            <li class=\"xn-openable\">
                                <a href=\"#\"><span class=\"fa fa-users\"></span> <span class=\"xn-text\">Gestion des Classes</span></a>
                                <ul>
                                    <li><a href=\"{{ path('addClasse') }}\"><span class=\"xn-text\">Ajouter Classe</span></a></li>
                                    <li><a href=\"{{ path('listClasses') }}\"><span class=\"xn-text\">Liste des Classes </span></a></li>
                                </ul>
                            </li>

                            <!-- Gestion des emplois du temps -->
                            <li class=\"xn-openable\">
                                <a href=\"#\"><span class=\"fa fa-table\"></span> <span class=\"xn-text\">Gestion des Emplois de temps</span></a>
                                <ul>
                                    <li><a href=\"#\"><span class=\"xn-text\">Ajouter Emploi de temps</span></a></li>
                                    <li><a href=\"#\"><span class=\"xn-text\">Liste des Emplois de temps </span></a></li>
                                </ul>
                            </li>

                            <!-- Gestion des salles -->
                            <li class=\"xn-openable\">
                                <a href=\"#\"><span class=\"fa fa-th\"></span> <span class=\"xn-text\">Gestion des Salles</span></a>
                                <ul>
                                    <li><a href=\"{{ path('addSalle') }}\"><span class=\"xn-text\">Ajouter Salle</span></a></li>
                                    <li><a href=\"{{ path('listSalles') }}\"><span class=\"xn-text\">Liste des Salles </span></a></li>
                                </ul>
                            </li>

                            <!-- Gestion des absences/retard -->
                            <li><a href=\"#\"><span class=\"fa fa-check-square-o\"></span> <span class=\"xn-text\">Gestion des Retards et absences</span></a></li>

                            <!-- Transport -->
                            <li class=\"xn-openable\">
                                <a href=\"#\"><span class=\"fa fa-bus\"></span> <span class=\"xn-text\">Transport</span></a>
                                <ul>
                                    <li><a href=\"{{ path('addTransport') }}\"><span class=\"xn-text\">Ajouter Transport</span></a></li>
                                    <li><a href=\"{{ path('listTransports') }}\"><span class=\"xn-text\">Liste des Transports </span></a></li>
                                </ul>
                            </li>

                            <!-- Paiement -->
                            <li><a href=\"#\"><span class=\"fa fa-money\"></span> <span class=\"xn-text\">Payement</span></a></li>

                            <!-- Messagerie -->
                            <li><a href=\"#\"><span class=\"fa fa-envelope-o\"></span> <span class=\"xn-text\">Messagerie</span></a></li>

                            <!-- Ressources pédagogiques -->
                            <li><a href=\"#\"><span class=\"fa fa-leanpub\"></span> <span class=\"xn-text\">Ressources pédagogiques</span></a></li>

                            <!-- Planning des examens -->
                            <li><a href=\"#\"><span class=\"fa fa-table\"></span> <span class=\"xn-text\">Plannings des examens</span></a></li>

                            <!-- Menu cantine -->
                            <li class=\"xn-openable\">
                                <a href=\"#\"><span class=\"fa fa-cutlery\"></span> <span class=\"xn-text\">Menu de cantine</span></a>
                                <ul>
                                    <li><a href=\"{{ path('addMenu') }}\"><span class=\"xn-text\">Ajouter Menu</span></a></li>
                                    <li><a href=\"{{ path('listMenus') }}\"><span class=\"xn-text\">Liste des Menus </span></a></li>
                                </ul>
                            </li>

                            <!-- Bulletin -->
                            <li><a href=\"#\"><span class=\"fa fa-check\"></span> <span class=\"xn-text\">Bulletin</span></a></li>
                        {% endif %}        
                    {% endif %}
                    
                    <!-- Fin Menu Navigation pour Administrateur -->
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
", "base2.html.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\app\\Resources\\views\\base2.html.twig");
    }
}
