<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_9315749591aa794155b0f9fe33972797a4c914346f2d327997b3a10837efc19b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_aaa7fd857a5b6da0ebe63da85f61974b54fcd04ed7e316beef6dfe50198a9c03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aaa7fd857a5b6da0ebe63da85f61974b54fcd04ed7e316beef6dfe50198a9c03->enter($__internal_aaa7fd857a5b6da0ebe63da85f61974b54fcd04ed7e316beef6dfe50198a9c03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_dc0149e3880a772985e1839cfd4592348d3dc13d58e0328d3d41c3a5099b96bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc0149e3880a772985e1839cfd4592348d3dc13d58e0328d3d41c3a5099b96bc->enter($__internal_dc0149e3880a772985e1839cfd4592348d3dc13d58e0328d3d41c3a5099b96bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aaa7fd857a5b6da0ebe63da85f61974b54fcd04ed7e316beef6dfe50198a9c03->leave($__internal_aaa7fd857a5b6da0ebe63da85f61974b54fcd04ed7e316beef6dfe50198a9c03_prof);

        
        $__internal_dc0149e3880a772985e1839cfd4592348d3dc13d58e0328d3d41c3a5099b96bc->leave($__internal_dc0149e3880a772985e1839cfd4592348d3dc13d58e0328d3d41c3a5099b96bc_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b59fab78774418697c6d0a063a9cc061d94edf6c70ff54efc67147d67dabb1d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b59fab78774418697c6d0a063a9cc061d94edf6c70ff54efc67147d67dabb1d1->enter($__internal_b59fab78774418697c6d0a063a9cc061d94edf6c70ff54efc67147d67dabb1d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9510850f625956a00c2a922c6d4fbff2550b50a2200be283e9fdbc4deec18210 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9510850f625956a00c2a922c6d4fbff2550b50a2200be283e9fdbc4deec18210->enter($__internal_9510850f625956a00c2a922c6d4fbff2550b50a2200be283e9fdbc4deec18210_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_9510850f625956a00c2a922c6d4fbff2550b50a2200be283e9fdbc4deec18210->leave($__internal_9510850f625956a00c2a922c6d4fbff2550b50a2200be283e9fdbc4deec18210_prof);

        
        $__internal_b59fab78774418697c6d0a063a9cc061d94edf6c70ff54efc67147d67dabb1d1->leave($__internal_b59fab78774418697c6d0a063a9cc061d94edf6c70ff54efc67147d67dabb1d1_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_fac911092498e81b1db08a2b358d96b823615e49c5cdab9d60e3ce831c73676f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fac911092498e81b1db08a2b358d96b823615e49c5cdab9d60e3ce831c73676f->enter($__internal_fac911092498e81b1db08a2b358d96b823615e49c5cdab9d60e3ce831c73676f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_74e8284dabd8ac3b43bd7110112c087d4a6f22ebf2f572f9be2dfecd38fb24df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74e8284dabd8ac3b43bd7110112c087d4a6f22ebf2f572f9be2dfecd38fb24df->enter($__internal_74e8284dabd8ac3b43bd7110112c087d4a6f22ebf2f572f9be2dfecd38fb24df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_74e8284dabd8ac3b43bd7110112c087d4a6f22ebf2f572f9be2dfecd38fb24df->leave($__internal_74e8284dabd8ac3b43bd7110112c087d4a6f22ebf2f572f9be2dfecd38fb24df_prof);

        
        $__internal_fac911092498e81b1db08a2b358d96b823615e49c5cdab9d60e3ce831c73676f->leave($__internal_fac911092498e81b1db08a2b358d96b823615e49c5cdab9d60e3ce831c73676f_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
