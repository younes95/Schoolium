<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_ad70f29241a284d520f0e5bbb34960fdaa6a9a50373849a457b5cb36d38425ee extends Twig_Template
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
        $__internal_6155267ed924a9493bc7bd2e3c0a465503f7515f9adc0416d65e711ec3afe761 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6155267ed924a9493bc7bd2e3c0a465503f7515f9adc0416d65e711ec3afe761->enter($__internal_6155267ed924a9493bc7bd2e3c0a465503f7515f9adc0416d65e711ec3afe761_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_e19a6bf7788fdd3a238090ff937ff98e0cba6291a7d68ec65e46fbb76d1e9d5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e19a6bf7788fdd3a238090ff937ff98e0cba6291a7d68ec65e46fbb76d1e9d5f->enter($__internal_e19a6bf7788fdd3a238090ff937ff98e0cba6291a7d68ec65e46fbb76d1e9d5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6155267ed924a9493bc7bd2e3c0a465503f7515f9adc0416d65e711ec3afe761->leave($__internal_6155267ed924a9493bc7bd2e3c0a465503f7515f9adc0416d65e711ec3afe761_prof);

        
        $__internal_e19a6bf7788fdd3a238090ff937ff98e0cba6291a7d68ec65e46fbb76d1e9d5f->leave($__internal_e19a6bf7788fdd3a238090ff937ff98e0cba6291a7d68ec65e46fbb76d1e9d5f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5a79d835d211cdb8bafdf0963ea1e53c71e3f6a342fae08c26fcea96b320cc6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a79d835d211cdb8bafdf0963ea1e53c71e3f6a342fae08c26fcea96b320cc6b->enter($__internal_5a79d835d211cdb8bafdf0963ea1e53c71e3f6a342fae08c26fcea96b320cc6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b338f855b373087b86f5c4c655b1c50354f010c20e931f3c0e0313c7f40500ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b338f855b373087b86f5c4c655b1c50354f010c20e931f3c0e0313c7f40500ed->enter($__internal_b338f855b373087b86f5c4c655b1c50354f010c20e931f3c0e0313c7f40500ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_b338f855b373087b86f5c4c655b1c50354f010c20e931f3c0e0313c7f40500ed->leave($__internal_b338f855b373087b86f5c4c655b1c50354f010c20e931f3c0e0313c7f40500ed_prof);

        
        $__internal_5a79d835d211cdb8bafdf0963ea1e53c71e3f6a342fae08c26fcea96b320cc6b->leave($__internal_5a79d835d211cdb8bafdf0963ea1e53c71e3f6a342fae08c26fcea96b320cc6b_prof);

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
", "@FOSUser/Security/login.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
