<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_384b84c2a8c763b2e5a56f575ff2205ae4a5a97ca45a2ddc1fd8a8a973b3b93e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_b4bad32034bbdaed52b25a3a60663e96fd8da3a2ef670e6afd8a84f63abe0c82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4bad32034bbdaed52b25a3a60663e96fd8da3a2ef670e6afd8a84f63abe0c82->enter($__internal_b4bad32034bbdaed52b25a3a60663e96fd8da3a2ef670e6afd8a84f63abe0c82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_2d8e93e331e33298aa1908aa1566afe089f4471c16ff40b496c2138d4f5ba93b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d8e93e331e33298aa1908aa1566afe089f4471c16ff40b496c2138d4f5ba93b->enter($__internal_2d8e93e331e33298aa1908aa1566afe089f4471c16ff40b496c2138d4f5ba93b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b4bad32034bbdaed52b25a3a60663e96fd8da3a2ef670e6afd8a84f63abe0c82->leave($__internal_b4bad32034bbdaed52b25a3a60663e96fd8da3a2ef670e6afd8a84f63abe0c82_prof);

        
        $__internal_2d8e93e331e33298aa1908aa1566afe089f4471c16ff40b496c2138d4f5ba93b->leave($__internal_2d8e93e331e33298aa1908aa1566afe089f4471c16ff40b496c2138d4f5ba93b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ea0dc2da59d3329ee39ffaab704a663c16e365bad63c6be6482c13f07e80ffd1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea0dc2da59d3329ee39ffaab704a663c16e365bad63c6be6482c13f07e80ffd1->enter($__internal_ea0dc2da59d3329ee39ffaab704a663c16e365bad63c6be6482c13f07e80ffd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_22db6567dcd82ce329f1dc700c525aed82533a47f637c773acd09a505bf4dcda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22db6567dcd82ce329f1dc700c525aed82533a47f637c773acd09a505bf4dcda->enter($__internal_22db6567dcd82ce329f1dc700c525aed82533a47f637c773acd09a505bf4dcda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_22db6567dcd82ce329f1dc700c525aed82533a47f637c773acd09a505bf4dcda->leave($__internal_22db6567dcd82ce329f1dc700c525aed82533a47f637c773acd09a505bf4dcda_prof);

        
        $__internal_ea0dc2da59d3329ee39ffaab704a663c16e365bad63c6be6482c13f07e80ffd1->leave($__internal_ea0dc2da59d3329ee39ffaab704a663c16e365bad63c6be6482c13f07e80ffd1_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
", "@FOSUser/Registration/register.html.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\app\\Resources\\FOSUserBundle\\views\\Registration\\register.html.twig");
    }
}
