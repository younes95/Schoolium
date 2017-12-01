<?php

/* default/lock.html.twig */
class __TwigTemplate_b6fb31d4608f75124e9ca0ffc398b0fadcfdd94e397667a28e0523afabe3d95f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/lock.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4041f708ce8bc00fb5d28054672cf42a79dcde07299fce0cc3e507ade2236590 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4041f708ce8bc00fb5d28054672cf42a79dcde07299fce0cc3e507ade2236590->enter($__internal_4041f708ce8bc00fb5d28054672cf42a79dcde07299fce0cc3e507ade2236590_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/lock.html.twig"));

        $__internal_1eb361277b30fb1bba015075f4a001b7445e8ca5dea5f0d0a56b69d21d407cb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1eb361277b30fb1bba015075f4a001b7445e8ca5dea5f0d0a56b69d21d407cb2->enter($__internal_1eb361277b30fb1bba015075f4a001b7445e8ca5dea5f0d0a56b69d21d407cb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/lock.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4041f708ce8bc00fb5d28054672cf42a79dcde07299fce0cc3e507ade2236590->leave($__internal_4041f708ce8bc00fb5d28054672cf42a79dcde07299fce0cc3e507ade2236590_prof);

        
        $__internal_1eb361277b30fb1bba015075f4a001b7445e8ca5dea5f0d0a56b69d21d407cb2->leave($__internal_1eb361277b30fb1bba015075f4a001b7445e8ca5dea5f0d0a56b69d21d407cb2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_939675c67989948bf680f8c338099294fadbea4043659b30cf7fb104de3a50a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_939675c67989948bf680f8c338099294fadbea4043659b30cf7fb104de3a50a6->enter($__internal_939675c67989948bf680f8c338099294fadbea4043659b30cf7fb104de3a50a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ad8a8be53a5eab883b882e9ace415f6eec9a6f0fd2c4fc4a5f6740fdfbc497de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad8a8be53a5eab883b882e9ace415f6eec9a6f0fd2c4fc4a5f6740fdfbc497de->enter($__internal_ad8a8be53a5eab883b882e9ace415f6eec9a6f0fd2c4fc4a5f6740fdfbc497de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<div class=\"lockscreen-container\">
            
            <div class=\"lockscreen-box animated fadeInDown\">
                
                <div class=\"lsb-access\">
                    <div class=\"lsb-box\">
                        <div class=\"fa fa-lock\"></div>
                        <div class=\"user animated fadeIn\">
                            <img src=\"";
        // line 13
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "photo", array())) {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/photos/" . $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "photo", array()))), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/photos/avatar.png"), "html", null, true);
        }
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo "\"/>
                            <div class=\"user_signin animated fadeIn\">
                                <div class=\"fa fa-sign-in\"></div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class=\"lsb-form animated fadeInDown\">
                    <form action=\"#\" method=\"post\" class=\"form-horizontal\">
                        <div class=\"form-group sign-in animated fadeInDown\">
                            <div class=\"col-md-12\">
                                <div class=\"input-group\">
                                    <div class=\"input-group-addon\">
                                        <span class=\"fa fa-user\"></span>
                                    </div>
                                    <input type=\"text\" class=\"form-control\" placeholder=\"Your login\"/>
                                </div>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <div class=\"col-md-12\">
                                <div class=\"input-group\">
                                    <div class=\"input-group-addon\">
                                        <span class=\"fa fa-lock\"></span>
                                    </div>
                                    <input type=\"password\" class=\"form-control\" placeholder=\"Password\"/>
                                </div>
                            </div>
                        </div>
                        <input type=\"submit\" class=\"hidden\"/>
                    </form>
                </div>
                
            </div>
            
        </div>
    <!-- START SCRIPTS -->
        <!-- START PLUGINS -->
        <script type=\"text/javascript\" src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/jquery/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>        
        <!-- END PLUGINS -->

        <!-- START TEMPLATE -->                
        <script type=\"text/javascript\" src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/actions.js"), "html", null, true);
        echo "\"></script>
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS --> 

";
        
        $__internal_ad8a8be53a5eab883b882e9ace415f6eec9a6f0fd2c4fc4a5f6740fdfbc497de->leave($__internal_ad8a8be53a5eab883b882e9ace415f6eec9a6f0fd2c4fc4a5f6740fdfbc497de_prof);

        
        $__internal_939675c67989948bf680f8c338099294fadbea4043659b30cf7fb104de3a50a6->leave($__internal_939675c67989948bf680f8c338099294fadbea4043659b30cf7fb104de3a50a6_prof);

    }

    public function getTemplateName()
    {
        return "default/lock.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 59,  123 => 58,  116 => 54,  112 => 53,  108 => 52,  60 => 13,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}

<div class=\"lockscreen-container\">
            
            <div class=\"lockscreen-box animated fadeInDown\">
                
                <div class=\"lsb-access\">
                    <div class=\"lsb-box\">
                        <div class=\"fa fa-lock\"></div>
                        <div class=\"user animated fadeIn\">
                            <img src=\"{% if app.user.photo %}{{ asset('uploads/photos/' ~ app.user.photo) }}{% else %}{{ asset('uploads/photos/avatar.png') }}{% endif %}\" alt=\"{{app.user.nom}}\"/>
                            <div class=\"user_signin animated fadeIn\">
                                <div class=\"fa fa-sign-in\"></div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class=\"lsb-form animated fadeInDown\">
                    <form action=\"#\" method=\"post\" class=\"form-horizontal\">
                        <div class=\"form-group sign-in animated fadeInDown\">
                            <div class=\"col-md-12\">
                                <div class=\"input-group\">
                                    <div class=\"input-group-addon\">
                                        <span class=\"fa fa-user\"></span>
                                    </div>
                                    <input type=\"text\" class=\"form-control\" placeholder=\"Your login\"/>
                                </div>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <div class=\"col-md-12\">
                                <div class=\"input-group\">
                                    <div class=\"input-group-addon\">
                                        <span class=\"fa fa-lock\"></span>
                                    </div>
                                    <input type=\"password\" class=\"form-control\" placeholder=\"Password\"/>
                                </div>
                            </div>
                        </div>
                        <input type=\"submit\" class=\"hidden\"/>
                    </form>
                </div>
                
            </div>
            
        </div>
    <!-- START SCRIPTS -->
        <!-- START PLUGINS -->
        <script type=\"text/javascript\" src=\"{{ asset('js/plugins/jquery/jquery.min.js')}}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset('js/plugins/jquery/jquery-ui.min.js')}}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset('js/plugins/bootstrap/bootstrap.min.js')}}\"></script>        
        <!-- END PLUGINS -->

        <!-- START TEMPLATE -->                
        <script type=\"text/javascript\" src=\"{{ asset('js/plugins.js')}}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset('js/actions.js')}}\"></script>
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS --> 

{% endblock %}", "default/lock.html.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\app\\Resources\\views\\default\\lock.html.twig");
    }
}
