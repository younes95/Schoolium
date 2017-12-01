<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_9ea63ddd646c5fae2dcaedef86ed7563e766d3f291b8fe3f7366819b3add0382 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
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
        $__internal_e2cafb0b50ef3fc3662592ddd7614bd2b94ce00b0b532f7f9338220388ca28f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2cafb0b50ef3fc3662592ddd7614bd2b94ce00b0b532f7f9338220388ca28f5->enter($__internal_e2cafb0b50ef3fc3662592ddd7614bd2b94ce00b0b532f7f9338220388ca28f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $__internal_82605d4acf73acb8986ce6c8ff076442a0662c647893e8b3619df0b7c07605e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82605d4acf73acb8986ce6c8ff076442a0662c647893e8b3619df0b7c07605e0->enter($__internal_82605d4acf73acb8986ce6c8ff076442a0662c647893e8b3619df0b7c07605e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e2cafb0b50ef3fc3662592ddd7614bd2b94ce00b0b532f7f9338220388ca28f5->leave($__internal_e2cafb0b50ef3fc3662592ddd7614bd2b94ce00b0b532f7f9338220388ca28f5_prof);

        
        $__internal_82605d4acf73acb8986ce6c8ff076442a0662c647893e8b3619df0b7c07605e0->leave($__internal_82605d4acf73acb8986ce6c8ff076442a0662c647893e8b3619df0b7c07605e0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ff921ea52d508cae1c82c8ea52e282d08aaf3ad3d70ea33eb5c3b027403fb7d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff921ea52d508cae1c82c8ea52e282d08aaf3ad3d70ea33eb5c3b027403fb7d8->enter($__internal_ff921ea52d508cae1c82c8ea52e282d08aaf3ad3d70ea33eb5c3b027403fb7d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ba9555d1acb8336a828dd03c93e85416e46e7e12c6cc069a3327c056f58dd314 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba9555d1acb8336a828dd03c93e85416e46e7e12c6cc069a3327c056f58dd314->enter($__internal_ba9555d1acb8336a828dd03c93e85416e46e7e12c6cc069a3327c056f58dd314_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_ba9555d1acb8336a828dd03c93e85416e46e7e12c6cc069a3327c056f58dd314->leave($__internal_ba9555d1acb8336a828dd03c93e85416e46e7e12c6cc069a3327c056f58dd314_prof);

        
        $__internal_ff921ea52d508cae1c82c8ea52e282d08aaf3ad3d70ea33eb5c3b027403fb7d8->leave($__internal_ff921ea52d508cae1c82c8ea52e282d08aaf3ad3d70ea33eb5c3b027403fb7d8_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/show.html.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\app\\Resources\\FOSUserBundle\\views\\Group\\show.html.twig");
    }
}
