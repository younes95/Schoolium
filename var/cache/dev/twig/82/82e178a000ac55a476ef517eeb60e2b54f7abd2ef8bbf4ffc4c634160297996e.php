<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_baba2c74a9d60239ee7462094770bec9c4c846bcf7497a5f4c483cfb3dd1be44 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
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
        $__internal_3911ef9c0b8fd9156b23b398bf77e6169b708e8915085763f67ea7d98a24f226 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3911ef9c0b8fd9156b23b398bf77e6169b708e8915085763f67ea7d98a24f226->enter($__internal_3911ef9c0b8fd9156b23b398bf77e6169b708e8915085763f67ea7d98a24f226_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $__internal_566ab089e9e32688826c78d5d652a45f4011a54aed20658f5f2b3dd1e8e4bac2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_566ab089e9e32688826c78d5d652a45f4011a54aed20658f5f2b3dd1e8e4bac2->enter($__internal_566ab089e9e32688826c78d5d652a45f4011a54aed20658f5f2b3dd1e8e4bac2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3911ef9c0b8fd9156b23b398bf77e6169b708e8915085763f67ea7d98a24f226->leave($__internal_3911ef9c0b8fd9156b23b398bf77e6169b708e8915085763f67ea7d98a24f226_prof);

        
        $__internal_566ab089e9e32688826c78d5d652a45f4011a54aed20658f5f2b3dd1e8e4bac2->leave($__internal_566ab089e9e32688826c78d5d652a45f4011a54aed20658f5f2b3dd1e8e4bac2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b0559498989888330d4800b44b804adb50efef26029f7c861f387f5dc06c4dcf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0559498989888330d4800b44b804adb50efef26029f7c861f387f5dc06c4dcf->enter($__internal_b0559498989888330d4800b44b804adb50efef26029f7c861f387f5dc06c4dcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_af364969525ce86c07db905bdae60ae8e1049c3ecd9bf28a23291603097d0e22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af364969525ce86c07db905bdae60ae8e1049c3ecd9bf28a23291603097d0e22->enter($__internal_af364969525ce86c07db905bdae60ae8e1049c3ecd9bf28a23291603097d0e22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_af364969525ce86c07db905bdae60ae8e1049c3ecd9bf28a23291603097d0e22->leave($__internal_af364969525ce86c07db905bdae60ae8e1049c3ecd9bf28a23291603097d0e22_prof);

        
        $__internal_b0559498989888330d4800b44b804adb50efef26029f7c861f387f5dc06c4dcf->leave($__internal_b0559498989888330d4800b44b804adb50efef26029f7c861f387f5dc06c4dcf_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/new.html.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\app\\Resources\\FOSUserBundle\\views\\Group\\new.html.twig");
    }
}
