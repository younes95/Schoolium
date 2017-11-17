<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_a19818406d46269c5d79e23b997b58f1e3e6674efdd71ac35b595fb04ec5131d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_4f36eebae20152226c46295367d7c2c872521bbcdd6376e97811d76a96529e86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f36eebae20152226c46295367d7c2c872521bbcdd6376e97811d76a96529e86->enter($__internal_4f36eebae20152226c46295367d7c2c872521bbcdd6376e97811d76a96529e86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_7a4a38e148a42486f211616299c6303310d80751d083cbb05594908527b89dcc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a4a38e148a42486f211616299c6303310d80751d083cbb05594908527b89dcc->enter($__internal_7a4a38e148a42486f211616299c6303310d80751d083cbb05594908527b89dcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4f36eebae20152226c46295367d7c2c872521bbcdd6376e97811d76a96529e86->leave($__internal_4f36eebae20152226c46295367d7c2c872521bbcdd6376e97811d76a96529e86_prof);

        
        $__internal_7a4a38e148a42486f211616299c6303310d80751d083cbb05594908527b89dcc->leave($__internal_7a4a38e148a42486f211616299c6303310d80751d083cbb05594908527b89dcc_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f2ff52185c1c5dea7490a295ecdc49e5c2c473832129f68cd4012a9a89cee8da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2ff52185c1c5dea7490a295ecdc49e5c2c473832129f68cd4012a9a89cee8da->enter($__internal_f2ff52185c1c5dea7490a295ecdc49e5c2c473832129f68cd4012a9a89cee8da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_23fc95029a96f284edb01e9c04dc52b6ef362aea7f967e778195045ed7416af2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23fc95029a96f284edb01e9c04dc52b6ef362aea7f967e778195045ed7416af2->enter($__internal_23fc95029a96f284edb01e9c04dc52b6ef362aea7f967e778195045ed7416af2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_23fc95029a96f284edb01e9c04dc52b6ef362aea7f967e778195045ed7416af2->leave($__internal_23fc95029a96f284edb01e9c04dc52b6ef362aea7f967e778195045ed7416af2_prof);

        
        $__internal_f2ff52185c1c5dea7490a295ecdc49e5c2c473832129f68cd4012a9a89cee8da->leave($__internal_f2ff52185c1c5dea7490a295ecdc49e5c2c473832129f68cd4012a9a89cee8da_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/FOSUserBundle/views/ChangePassword/change_password.html.twig");
    }
}
