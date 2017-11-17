<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_e6006ab0fd67a67091cc229e417464def7d1f6febf4f03dca2ef9db823de18b5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_97aef9b0a8231403f4c451e403f64018dc732e35373b90fc23353098d05ea446 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97aef9b0a8231403f4c451e403f64018dc732e35373b90fc23353098d05ea446->enter($__internal_97aef9b0a8231403f4c451e403f64018dc732e35373b90fc23353098d05ea446_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_d14d1899a4d00b8429cbf5785d0131cac54a958397cf1824b2b3f6479fb9de9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d14d1899a4d00b8429cbf5785d0131cac54a958397cf1824b2b3f6479fb9de9d->enter($__internal_d14d1899a4d00b8429cbf5785d0131cac54a958397cf1824b2b3f6479fb9de9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_97aef9b0a8231403f4c451e403f64018dc732e35373b90fc23353098d05ea446->leave($__internal_97aef9b0a8231403f4c451e403f64018dc732e35373b90fc23353098d05ea446_prof);

        
        $__internal_d14d1899a4d00b8429cbf5785d0131cac54a958397cf1824b2b3f6479fb9de9d->leave($__internal_d14d1899a4d00b8429cbf5785d0131cac54a958397cf1824b2b3f6479fb9de9d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6a3202318e8971e5264e39de3d3a1eedb78c82d8bc593c696a7634581665c8e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a3202318e8971e5264e39de3d3a1eedb78c82d8bc593c696a7634581665c8e9->enter($__internal_6a3202318e8971e5264e39de3d3a1eedb78c82d8bc593c696a7634581665c8e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ee811f51834c49a2c6d3b9b5c03ea26c35f2025c9e6a9b2d327380e373d672c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee811f51834c49a2c6d3b9b5c03ea26c35f2025c9e6a9b2d327380e373d672c9->enter($__internal_ee811f51834c49a2c6d3b9b5c03ea26c35f2025c9e6a9b2d327380e373d672c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_ee811f51834c49a2c6d3b9b5c03ea26c35f2025c9e6a9b2d327380e373d672c9->leave($__internal_ee811f51834c49a2c6d3b9b5c03ea26c35f2025c9e6a9b2d327380e373d672c9_prof);

        
        $__internal_6a3202318e8971e5264e39de3d3a1eedb78c82d8bc593c696a7634581665c8e9->leave($__internal_6a3202318e8971e5264e39de3d3a1eedb78c82d8bc593c696a7634581665c8e9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/FOSUserBundle/views/Registration/register.html.twig");
    }
}
