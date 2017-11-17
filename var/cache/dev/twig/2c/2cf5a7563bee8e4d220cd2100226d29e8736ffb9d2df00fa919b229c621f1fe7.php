<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_31df43f0df743c63ee238d4b05856eaab653bed6b358457074c64a1877c9715d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_695c4ba84d1674065313d030a1908906be850ec6de532112f53ac4dc4812eb28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_695c4ba84d1674065313d030a1908906be850ec6de532112f53ac4dc4812eb28->enter($__internal_695c4ba84d1674065313d030a1908906be850ec6de532112f53ac4dc4812eb28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_c366a7c66b924e90135265570b7a45dbb2c40080f46c5ae23d018c21db0f3086 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c366a7c66b924e90135265570b7a45dbb2c40080f46c5ae23d018c21db0f3086->enter($__internal_c366a7c66b924e90135265570b7a45dbb2c40080f46c5ae23d018c21db0f3086_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_695c4ba84d1674065313d030a1908906be850ec6de532112f53ac4dc4812eb28->leave($__internal_695c4ba84d1674065313d030a1908906be850ec6de532112f53ac4dc4812eb28_prof);

        
        $__internal_c366a7c66b924e90135265570b7a45dbb2c40080f46c5ae23d018c21db0f3086->leave($__internal_c366a7c66b924e90135265570b7a45dbb2c40080f46c5ae23d018c21db0f3086_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_15e9ba7d08b0e81bce52c3f527ebcf1371a24b38d5014296ef03c85c83a7afd6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15e9ba7d08b0e81bce52c3f527ebcf1371a24b38d5014296ef03c85c83a7afd6->enter($__internal_15e9ba7d08b0e81bce52c3f527ebcf1371a24b38d5014296ef03c85c83a7afd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_42b72c1f24a07c998fba619c7b4b95cd59a41d5544a9b5ed682917a2f575f8ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42b72c1f24a07c998fba619c7b4b95cd59a41d5544a9b5ed682917a2f575f8ad->enter($__internal_42b72c1f24a07c998fba619c7b4b95cd59a41d5544a9b5ed682917a2f575f8ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_42b72c1f24a07c998fba619c7b4b95cd59a41d5544a9b5ed682917a2f575f8ad->leave($__internal_42b72c1f24a07c998fba619c7b4b95cd59a41d5544a9b5ed682917a2f575f8ad_prof);

        
        $__internal_15e9ba7d08b0e81bce52c3f527ebcf1371a24b38d5014296ef03c85c83a7afd6->leave($__internal_15e9ba7d08b0e81bce52c3f527ebcf1371a24b38d5014296ef03c85c83a7afd6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/FOSUserBundle/views/Group/list.html.twig");
    }
}
