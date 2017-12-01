<?php

/* default/dashAdmin.html.twig */
class __TwigTemplate_c23d31806133fe447e7a98edf7ad4deb88fe5b54aadd19a4edc35bc7f68058ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base2.html.twig", "default/dashAdmin.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d133a6141ec8518d3f8bed95c09a970ac5c6d4d243ac68fd8cb77cc1283827cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d133a6141ec8518d3f8bed95c09a970ac5c6d4d243ac68fd8cb77cc1283827cb->enter($__internal_d133a6141ec8518d3f8bed95c09a970ac5c6d4d243ac68fd8cb77cc1283827cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/dashAdmin.html.twig"));

        $__internal_3d6375c076673d4d7ef57c8ea2a647655efc06cf28cc01439659aeb52c9fb9f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d6375c076673d4d7ef57c8ea2a647655efc06cf28cc01439659aeb52c9fb9f2->enter($__internal_3d6375c076673d4d7ef57c8ea2a647655efc06cf28cc01439659aeb52c9fb9f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/dashAdmin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d133a6141ec8518d3f8bed95c09a970ac5c6d4d243ac68fd8cb77cc1283827cb->leave($__internal_d133a6141ec8518d3f8bed95c09a970ac5c6d4d243ac68fd8cb77cc1283827cb_prof);

        
        $__internal_3d6375c076673d4d7ef57c8ea2a647655efc06cf28cc01439659aeb52c9fb9f2->leave($__internal_3d6375c076673d4d7ef57c8ea2a647655efc06cf28cc01439659aeb52c9fb9f2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1ad5fbd3ce0ce1b41a202ba18ebe5c2579e0b38ded7a3e77e455cd8c5798cbef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ad5fbd3ce0ce1b41a202ba18ebe5c2579e0b38ded7a3e77e455cd8c5798cbef->enter($__internal_1ad5fbd3ce0ce1b41a202ba18ebe5c2579e0b38ded7a3e77e455cd8c5798cbef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9339061ea3ecb14b889e2321bd264e2bdb57477e377978b1a704a0a6d1264005 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9339061ea3ecb14b889e2321bd264e2bdb57477e377978b1a704a0a6d1264005->enter($__internal_9339061ea3ecb14b889e2321bd264e2bdb57477e377978b1a704a0a6d1264005_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"page-content-wrap\">
                    
        <!-- START WIDGETS -->                    
        <div class=\"row\">
            <div class=\"col-md-3\">
                
                <!-- START WIDGET SLIDER -->
                <div class=\"widget widget-default widget-carousel\">
                    <div class=\"owl-carousel\" id=\"owl-example\">
                        <div>                                    
                            <div class=\"widget-title\">Total Eleves</div>                                                                 
                            <div class=\"widget-subtitle\">Visitors</div>
                            <div class=\"widget-int\">";
        // line 16
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "ecole", array()), "eleves", array())), "html", null, true);
        echo "</div>
                        </div>
                        <div>                                    
                            <div class=\"widget-title\">Total Enseignants</div>
                            <div class=\"widget-subtitle\">Visitors</div>
                            <div class=\"widget-int\">";
        // line 21
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "ecole", array()), "enseignants", array())), "html", null, true);
        echo "</div>
                        </div>
                        <div>                                    
                            <div class=\"widget-title\">Total Parents</div>
                            <div class=\"widget-subtitle\">Visitors</div>
                            <div class=\"widget-int\">";
        // line 26
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "ecole", array()), "parents", array())), "html", null, true);
        echo "</div>
                        </div>
                    </div>                            
                    <div class=\"widget-controls\">                                
                        <a href=\"#\" class=\"widget-control-right widget-remove\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Remove Widget\"><span class=\"fa fa-times\"></span></a>
                    </div>                             
                </div>         
                <!-- END WIDGET SLIDER -->
                
            </div>
            <div class=\"col-md-3\">
                
                <!-- START WIDGET MESSAGES -->
                <div class=\"widget widget-default widget-item-icon\" onclick=\"location.href='pages-messages.html';\">
                    <div class=\"widget-item-left\">
                        <span class=\"fa fa-envelope\"></span>
                    </div>                             
                    <div class=\"widget-data\">
                        <div class=\"widget-int num-count\">0</div>
                        <div class=\"widget-title\">New messages</div>
                        <div class=\"widget-subtitle\">In your mailbox</div>
                    </div>      
                    <div class=\"widget-controls\">                                
                        <a href=\"#\" class=\"widget-control-right widget-remove\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Remove Widget\"><span class=\"fa fa-times\"></span></a>
                    </div>
                </div>                            
                <!-- END WIDGET MESSAGES -->
                
            </div>
            <div class=\"col-md-3\">
                
                <!-- START WIDGET REGISTRED -->
                <div class=\"widget widget-default widget-item-icon\" onclick=\"location.href='pages-address-book.html';\">
                    <div class=\"widget-item-left\">
                        <span class=\"fa fa-user\"></span>
                    </div>
                    <div class=\"widget-data\">
                        <div class=\"widget-int num-count\">";
        // line 63
        echo twig_escape_filter($this->env, ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "ecole", array()), "parents", array())) + twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "ecole", array()), "eleves", array()))) + twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "ecole", array()), "enseignants", array()))), "html", null, true);
        echo "</div>
                        <div class=\"widget-title\">UTILISATEURS</div>
                        <div class=\"widget-subtitle\">pour ";
        // line 65
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "ecole", array()), "nom", array())), "html", null, true);
        echo "</div>
                    </div>
                    <div class=\"widget-controls\">                                
                        <a href=\"#\" class=\"widget-control-right widget-remove\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Remove Widget\"><span class=\"fa fa-times\"></span></a>
                    </div>                            
                </div>                            
                <!-- END WIDGET REGISTRED -->
                
            </div>
            <div class=\"col-md-3\">
                
                <!-- START WIDGET CLOCK -->
                <div class=\"widget widget-danger widget-padding-sm\">
                    <div class=\"widget-big-int plugin-clock\">00:00</div>                            
                    <div class=\"widget-subtitle plugin-date\">Loading...</div>
                    <div class=\"widget-controls\">                                
                        <a href=\"#\" class=\"widget-control-right widget-remove\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Remove Widget\"><span class=\"fa fa-times\"></span></a>
                    </div>                            
                    <div class=\"widget-buttons widget-c3\">
                        <div class=\"col\">
                            <a href=\"#\"><span class=\"fa fa-clock-o\"></span></a>
                        </div>
                        <div class=\"col\">
                            <a href=\"#\"><span class=\"fa fa-bell\"></span></a>
                        </div>
                        <div class=\"col\">
                            <a href=\"#\"><span class=\"fa fa-calendar\"></span></a>
                        </div>
                    </div>                            
                </div>                        
                <!-- END WIDGET CLOCK -->
                
            </div>
        </div>
        <!-- END WIDGETS -->

";
        
        $__internal_9339061ea3ecb14b889e2321bd264e2bdb57477e377978b1a704a0a6d1264005->leave($__internal_9339061ea3ecb14b889e2321bd264e2bdb57477e377978b1a704a0a6d1264005_prof);

        
        $__internal_1ad5fbd3ce0ce1b41a202ba18ebe5c2579e0b38ded7a3e77e455cd8c5798cbef->leave($__internal_1ad5fbd3ce0ce1b41a202ba18ebe5c2579e0b38ded7a3e77e455cd8c5798cbef_prof);

    }

    public function getTemplateName()
    {
        return "default/dashAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 65,  119 => 63,  79 => 26,  71 => 21,  63 => 16,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base2.html.twig' %}

{% block body %}
    <div class=\"page-content-wrap\">
                    
        <!-- START WIDGETS -->                    
        <div class=\"row\">
            <div class=\"col-md-3\">
                
                <!-- START WIDGET SLIDER -->
                <div class=\"widget widget-default widget-carousel\">
                    <div class=\"owl-carousel\" id=\"owl-example\">
                        <div>                                    
                            <div class=\"widget-title\">Total Eleves</div>                                                                 
                            <div class=\"widget-subtitle\">Visitors</div>
                            <div class=\"widget-int\">{{app.user.ecole.eleves|length}}</div>
                        </div>
                        <div>                                    
                            <div class=\"widget-title\">Total Enseignants</div>
                            <div class=\"widget-subtitle\">Visitors</div>
                            <div class=\"widget-int\">{{app.user.ecole.enseignants|length}}</div>
                        </div>
                        <div>                                    
                            <div class=\"widget-title\">Total Parents</div>
                            <div class=\"widget-subtitle\">Visitors</div>
                            <div class=\"widget-int\">{{app.user.ecole.parents|length}}</div>
                        </div>
                    </div>                            
                    <div class=\"widget-controls\">                                
                        <a href=\"#\" class=\"widget-control-right widget-remove\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Remove Widget\"><span class=\"fa fa-times\"></span></a>
                    </div>                             
                </div>         
                <!-- END WIDGET SLIDER -->
                
            </div>
            <div class=\"col-md-3\">
                
                <!-- START WIDGET MESSAGES -->
                <div class=\"widget widget-default widget-item-icon\" onclick=\"location.href='pages-messages.html';\">
                    <div class=\"widget-item-left\">
                        <span class=\"fa fa-envelope\"></span>
                    </div>                             
                    <div class=\"widget-data\">
                        <div class=\"widget-int num-count\">0</div>
                        <div class=\"widget-title\">New messages</div>
                        <div class=\"widget-subtitle\">In your mailbox</div>
                    </div>      
                    <div class=\"widget-controls\">                                
                        <a href=\"#\" class=\"widget-control-right widget-remove\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Remove Widget\"><span class=\"fa fa-times\"></span></a>
                    </div>
                </div>                            
                <!-- END WIDGET MESSAGES -->
                
            </div>
            <div class=\"col-md-3\">
                
                <!-- START WIDGET REGISTRED -->
                <div class=\"widget widget-default widget-item-icon\" onclick=\"location.href='pages-address-book.html';\">
                    <div class=\"widget-item-left\">
                        <span class=\"fa fa-user\"></span>
                    </div>
                    <div class=\"widget-data\">
                        <div class=\"widget-int num-count\">{{(app.user.ecole.parents|length)+(app.user.ecole.eleves|length)+(app.user.ecole.enseignants|length)}}</div>
                        <div class=\"widget-title\">UTILISATEURS</div>
                        <div class=\"widget-subtitle\">pour {{app.user.ecole.nom|upper}}</div>
                    </div>
                    <div class=\"widget-controls\">                                
                        <a href=\"#\" class=\"widget-control-right widget-remove\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Remove Widget\"><span class=\"fa fa-times\"></span></a>
                    </div>                            
                </div>                            
                <!-- END WIDGET REGISTRED -->
                
            </div>
            <div class=\"col-md-3\">
                
                <!-- START WIDGET CLOCK -->
                <div class=\"widget widget-danger widget-padding-sm\">
                    <div class=\"widget-big-int plugin-clock\">00:00</div>                            
                    <div class=\"widget-subtitle plugin-date\">Loading...</div>
                    <div class=\"widget-controls\">                                
                        <a href=\"#\" class=\"widget-control-right widget-remove\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Remove Widget\"><span class=\"fa fa-times\"></span></a>
                    </div>                            
                    <div class=\"widget-buttons widget-c3\">
                        <div class=\"col\">
                            <a href=\"#\"><span class=\"fa fa-clock-o\"></span></a>
                        </div>
                        <div class=\"col\">
                            <a href=\"#\"><span class=\"fa fa-bell\"></span></a>
                        </div>
                        <div class=\"col\">
                            <a href=\"#\"><span class=\"fa fa-calendar\"></span></a>
                        </div>
                    </div>                            
                </div>                        
                <!-- END WIDGET CLOCK -->
                
            </div>
        </div>
        <!-- END WIDGETS -->

{% endblock %}", "default/dashAdmin.html.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\app\\Resources\\views\\default\\dashAdmin.html.twig");
    }
}
