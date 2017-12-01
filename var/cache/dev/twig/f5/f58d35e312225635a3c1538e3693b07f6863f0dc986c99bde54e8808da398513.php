<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_8144918e963b70fea72fae84c95cbe3c15f09be3bc488a3cfcf84543c52f3523 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_68a210999a8bfec6a313ccb35331aeb0b7c40048b2e94853c03e61b430f1f585 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68a210999a8bfec6a313ccb35331aeb0b7c40048b2e94853c03e61b430f1f585->enter($__internal_68a210999a8bfec6a313ccb35331aeb0b7c40048b2e94853c03e61b430f1f585_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $__internal_3bf86a566ce5ea8538dcdcf420b479449cadbd28069d02ee41cdfa17b847e9cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bf86a566ce5ea8538dcdcf420b479449cadbd28069d02ee41cdfa17b847e9cb->enter($__internal_3bf86a566ce5ea8538dcdcf420b479449cadbd28069d02ee41cdfa17b847e9cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_68a210999a8bfec6a313ccb35331aeb0b7c40048b2e94853c03e61b430f1f585->leave($__internal_68a210999a8bfec6a313ccb35331aeb0b7c40048b2e94853c03e61b430f1f585_prof);

        
        $__internal_3bf86a566ce5ea8538dcdcf420b479449cadbd28069d02ee41cdfa17b847e9cb->leave($__internal_3bf86a566ce5ea8538dcdcf420b479449cadbd28069d02ee41cdfa17b847e9cb_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dc32dfc97a8641450f772d57e4b9c37184c39cf7c8835e13ae95f8f9af24671d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc32dfc97a8641450f772d57e4b9c37184c39cf7c8835e13ae95f8f9af24671d->enter($__internal_dc32dfc97a8641450f772d57e4b9c37184c39cf7c8835e13ae95f8f9af24671d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_35308aeb799acb0c77698088b1208e6ada43aa34c1cb6908b995b2f9c1a926a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35308aeb799acb0c77698088b1208e6ada43aa34c1cb6908b995b2f9c1a926a8->enter($__internal_35308aeb799acb0c77698088b1208e6ada43aa34c1cb6908b995b2f9c1a926a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_35308aeb799acb0c77698088b1208e6ada43aa34c1cb6908b995b2f9c1a926a8->leave($__internal_35308aeb799acb0c77698088b1208e6ada43aa34c1cb6908b995b2f9c1a926a8_prof);

        
        $__internal_dc32dfc97a8641450f772d57e4b9c37184c39cf7c8835e13ae95f8f9af24671d->leave($__internal_dc32dfc97a8641450f772d57e4b9c37184c39cf7c8835e13ae95f8f9af24671d_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
", "@FOSUser/Group/edit.html.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\app\\Resources\\FOSUserBundle\\views\\Group\\edit.html.twig");
    }
}
