<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_356956d143e733f463e776eceb20aeb9881293d3a98a7f9845462e4217ca7c4e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_85112eeeb9f53e7f23a2255f9a7a97a88b622a3ce5ad70b2f6b35df4c7058ab0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85112eeeb9f53e7f23a2255f9a7a97a88b622a3ce5ad70b2f6b35df4c7058ab0->enter($__internal_85112eeeb9f53e7f23a2255f9a7a97a88b622a3ce5ad70b2f6b35df4c7058ab0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_9f4862135674a2703c25b56b07eca46ef41b4920480738bd0ef0ab85ed47cdc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f4862135674a2703c25b56b07eca46ef41b4920480738bd0ef0ab85ed47cdc1->enter($__internal_9f4862135674a2703c25b56b07eca46ef41b4920480738bd0ef0ab85ed47cdc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_85112eeeb9f53e7f23a2255f9a7a97a88b622a3ce5ad70b2f6b35df4c7058ab0->leave($__internal_85112eeeb9f53e7f23a2255f9a7a97a88b622a3ce5ad70b2f6b35df4c7058ab0_prof);

        
        $__internal_9f4862135674a2703c25b56b07eca46ef41b4920480738bd0ef0ab85ed47cdc1->leave($__internal_9f4862135674a2703c25b56b07eca46ef41b4920480738bd0ef0ab85ed47cdc1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d6ffbb7c7eaeba35f1a1ac5571535f02383f4625f7c2040e556410af8ce36b4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6ffbb7c7eaeba35f1a1ac5571535f02383f4625f7c2040e556410af8ce36b4b->enter($__internal_d6ffbb7c7eaeba35f1a1ac5571535f02383f4625f7c2040e556410af8ce36b4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_6f569fb167af4de0ffdea22b62ee129041bb3c4e25da1908df795d4a2f3165fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f569fb167af4de0ffdea22b62ee129041bb3c4e25da1908df795d4a2f3165fe->enter($__internal_6f569fb167af4de0ffdea22b62ee129041bb3c4e25da1908df795d4a2f3165fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_6f569fb167af4de0ffdea22b62ee129041bb3c4e25da1908df795d4a2f3165fe->leave($__internal_6f569fb167af4de0ffdea22b62ee129041bb3c4e25da1908df795d4a2f3165fe_prof);

        
        $__internal_d6ffbb7c7eaeba35f1a1ac5571535f02383f4625f7c2040e556410af8ce36b4b->leave($__internal_d6ffbb7c7eaeba35f1a1ac5571535f02383f4625f7c2040e556410af8ce36b4b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/FOSUserBundle/views/Group/edit.html.twig");
    }
}
