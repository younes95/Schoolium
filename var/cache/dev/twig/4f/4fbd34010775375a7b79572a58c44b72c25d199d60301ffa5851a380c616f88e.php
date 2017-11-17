<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_363efce88b1186c0b8e8c2d15c000cce837e04d640e63669f87178ae11a85f4a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_f7b80c47cad0d7f75a2e3276a0f50bb6ccf8186f027d234c9f1e81996e336362 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7b80c47cad0d7f75a2e3276a0f50bb6ccf8186f027d234c9f1e81996e336362->enter($__internal_f7b80c47cad0d7f75a2e3276a0f50bb6ccf8186f027d234c9f1e81996e336362_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_8d96f140f5e1474011caaf69e4f01aab8870b9765b2bf240127e83f76a7d42f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d96f140f5e1474011caaf69e4f01aab8870b9765b2bf240127e83f76a7d42f3->enter($__internal_8d96f140f5e1474011caaf69e4f01aab8870b9765b2bf240127e83f76a7d42f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f7b80c47cad0d7f75a2e3276a0f50bb6ccf8186f027d234c9f1e81996e336362->leave($__internal_f7b80c47cad0d7f75a2e3276a0f50bb6ccf8186f027d234c9f1e81996e336362_prof);

        
        $__internal_8d96f140f5e1474011caaf69e4f01aab8870b9765b2bf240127e83f76a7d42f3->leave($__internal_8d96f140f5e1474011caaf69e4f01aab8870b9765b2bf240127e83f76a7d42f3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6d608846c165cb1d8df29fd990d87b8858f0eeeb0ab3b3553445d6094172d645 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d608846c165cb1d8df29fd990d87b8858f0eeeb0ab3b3553445d6094172d645->enter($__internal_6d608846c165cb1d8df29fd990d87b8858f0eeeb0ab3b3553445d6094172d645_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_cfffa33cca8737329f27914e09b7da0ab2e0c8a1ea9b9d513561009956f8b075 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfffa33cca8737329f27914e09b7da0ab2e0c8a1ea9b9d513561009956f8b075->enter($__internal_cfffa33cca8737329f27914e09b7da0ab2e0c8a1ea9b9d513561009956f8b075_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_cfffa33cca8737329f27914e09b7da0ab2e0c8a1ea9b9d513561009956f8b075->leave($__internal_cfffa33cca8737329f27914e09b7da0ab2e0c8a1ea9b9d513561009956f8b075_prof);

        
        $__internal_6d608846c165cb1d8df29fd990d87b8858f0eeeb0ab3b3553445d6094172d645->leave($__internal_6d608846c165cb1d8df29fd990d87b8858f0eeeb0ab3b3553445d6094172d645_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/FOSUserBundle/views/Resetting/request.html.twig");
    }
}
