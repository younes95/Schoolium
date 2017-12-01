<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_209f9b1dd92199514a613c8d869d57bfd31d9b10d21be4e5439ebb6fe860f980 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_20a796a7901d4aba1786852c05d3128580190e7af3000064209c3dbc4c0106d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20a796a7901d4aba1786852c05d3128580190e7af3000064209c3dbc4c0106d1->enter($__internal_20a796a7901d4aba1786852c05d3128580190e7af3000064209c3dbc4c0106d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_002dcfaece2907611a13540a59576ddb1b4f68c02a1d409242e263c5c085bb22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_002dcfaece2907611a13540a59576ddb1b4f68c02a1d409242e263c5c085bb22->enter($__internal_002dcfaece2907611a13540a59576ddb1b4f68c02a1d409242e263c5c085bb22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_20a796a7901d4aba1786852c05d3128580190e7af3000064209c3dbc4c0106d1->leave($__internal_20a796a7901d4aba1786852c05d3128580190e7af3000064209c3dbc4c0106d1_prof);

        
        $__internal_002dcfaece2907611a13540a59576ddb1b4f68c02a1d409242e263c5c085bb22->leave($__internal_002dcfaece2907611a13540a59576ddb1b4f68c02a1d409242e263c5c085bb22_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_48025f9c3b4faa5eff6c9552a76e5c361d21b969bf9ec6160176090cc6cf2ca0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48025f9c3b4faa5eff6c9552a76e5c361d21b969bf9ec6160176090cc6cf2ca0->enter($__internal_48025f9c3b4faa5eff6c9552a76e5c361d21b969bf9ec6160176090cc6cf2ca0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_6f1b5770d5e58484e747f1fd78f3e7a249e9384a6e7d6271fa7e7f3691e53c70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f1b5770d5e58484e747f1fd78f3e7a249e9384a6e7d6271fa7e7f3691e53c70->enter($__internal_6f1b5770d5e58484e747f1fd78f3e7a249e9384a6e7d6271fa7e7f3691e53c70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_6f1b5770d5e58484e747f1fd78f3e7a249e9384a6e7d6271fa7e7f3691e53c70->leave($__internal_6f1b5770d5e58484e747f1fd78f3e7a249e9384a6e7d6271fa7e7f3691e53c70_prof);

        
        $__internal_48025f9c3b4faa5eff6c9552a76e5c361d21b969bf9ec6160176090cc6cf2ca0->leave($__internal_48025f9c3b4faa5eff6c9552a76e5c361d21b969bf9ec6160176090cc6cf2ca0_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\app\\Resources\\FOSUserBundle\\views\\Security\\login.html.twig");
    }
}
