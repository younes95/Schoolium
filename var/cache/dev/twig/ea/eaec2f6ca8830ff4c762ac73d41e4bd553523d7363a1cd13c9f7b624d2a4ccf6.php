<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_304ce1dacd745c05cd184a8dd7508af6e435c85202dae61f4f3f23c4903d6f6b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_4768cb6c58abadb2090b55655581ef31ce1376b1dde486963f418002ae3f9a4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4768cb6c58abadb2090b55655581ef31ce1376b1dde486963f418002ae3f9a4f->enter($__internal_4768cb6c58abadb2090b55655581ef31ce1376b1dde486963f418002ae3f9a4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_caa045af50e7a000b2d4b0649a9f3b55df093d5e3e4eae8ce4ed6ae4c30e2b01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_caa045af50e7a000b2d4b0649a9f3b55df093d5e3e4eae8ce4ed6ae4c30e2b01->enter($__internal_caa045af50e7a000b2d4b0649a9f3b55df093d5e3e4eae8ce4ed6ae4c30e2b01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4768cb6c58abadb2090b55655581ef31ce1376b1dde486963f418002ae3f9a4f->leave($__internal_4768cb6c58abadb2090b55655581ef31ce1376b1dde486963f418002ae3f9a4f_prof);

        
        $__internal_caa045af50e7a000b2d4b0649a9f3b55df093d5e3e4eae8ce4ed6ae4c30e2b01->leave($__internal_caa045af50e7a000b2d4b0649a9f3b55df093d5e3e4eae8ce4ed6ae4c30e2b01_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ad4f0b977deed180e8e159f9cfe391630219b9017a628eedf77d77ce5b224ab9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad4f0b977deed180e8e159f9cfe391630219b9017a628eedf77d77ce5b224ab9->enter($__internal_ad4f0b977deed180e8e159f9cfe391630219b9017a628eedf77d77ce5b224ab9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c7048b77cd4f594d3bcfdcb7b2dd48bf6f236cf18ff498003d40eb53e78c5aac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7048b77cd4f594d3bcfdcb7b2dd48bf6f236cf18ff498003d40eb53e78c5aac->enter($__internal_c7048b77cd4f594d3bcfdcb7b2dd48bf6f236cf18ff498003d40eb53e78c5aac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_c7048b77cd4f594d3bcfdcb7b2dd48bf6f236cf18ff498003d40eb53e78c5aac->leave($__internal_c7048b77cd4f594d3bcfdcb7b2dd48bf6f236cf18ff498003d40eb53e78c5aac_prof);

        
        $__internal_ad4f0b977deed180e8e159f9cfe391630219b9017a628eedf77d77ce5b224ab9->leave($__internal_ad4f0b977deed180e8e159f9cfe391630219b9017a628eedf77d77ce5b224ab9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/FOSUserBundle/views/Resetting/reset.html.twig");
    }
}
