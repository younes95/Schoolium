<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_6bb4ff11626cecb59a03a84f061116282fce74892df7fd9a7e10f17811feb733 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fedfb66f6df245fecb9f936ff97de83c3d84580a6a0a632189cafac1a98924ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fedfb66f6df245fecb9f936ff97de83c3d84580a6a0a632189cafac1a98924ae->enter($__internal_fedfb66f6df245fecb9f936ff97de83c3d84580a6a0a632189cafac1a98924ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_45b180abdb721df7b02676e9d73b5863ee5c8705504a0a1250eebe75eb974ce7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45b180abdb721df7b02676e9d73b5863ee5c8705504a0a1250eebe75eb974ce7->enter($__internal_45b180abdb721df7b02676e9d73b5863ee5c8705504a0a1250eebe75eb974ce7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fedfb66f6df245fecb9f936ff97de83c3d84580a6a0a632189cafac1a98924ae->leave($__internal_fedfb66f6df245fecb9f936ff97de83c3d84580a6a0a632189cafac1a98924ae_prof);

        
        $__internal_45b180abdb721df7b02676e9d73b5863ee5c8705504a0a1250eebe75eb974ce7->leave($__internal_45b180abdb721df7b02676e9d73b5863ee5c8705504a0a1250eebe75eb974ce7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0c3aaafb319bd43d60ecba74d1333e7bbed187ed2bfcf012e71f92b25b656825 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c3aaafb319bd43d60ecba74d1333e7bbed187ed2bfcf012e71f92b25b656825->enter($__internal_0c3aaafb319bd43d60ecba74d1333e7bbed187ed2bfcf012e71f92b25b656825_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5363d7cb8091ddbbdfbd3a9be4eaa44ea95674cf28a5fe6ba5b098512a79e8dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5363d7cb8091ddbbdfbd3a9be4eaa44ea95674cf28a5fe6ba5b098512a79e8dc->enter($__internal_5363d7cb8091ddbbdfbd3a9be4eaa44ea95674cf28a5fe6ba5b098512a79e8dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_5363d7cb8091ddbbdfbd3a9be4eaa44ea95674cf28a5fe6ba5b098512a79e8dc->leave($__internal_5363d7cb8091ddbbdfbd3a9be4eaa44ea95674cf28a5fe6ba5b098512a79e8dc_prof);

        
        $__internal_0c3aaafb319bd43d60ecba74d1333e7bbed187ed2bfcf012e71f92b25b656825->leave($__internal_0c3aaafb319bd43d60ecba74d1333e7bbed187ed2bfcf012e71f92b25b656825_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_3573b043dccc46d6b1d1c72232d68d9c3f24ba3862cd5fe258f595c4ea67aa48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3573b043dccc46d6b1d1c72232d68d9c3f24ba3862cd5fe258f595c4ea67aa48->enter($__internal_3573b043dccc46d6b1d1c72232d68d9c3f24ba3862cd5fe258f595c4ea67aa48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a4b8bb4ecca14fdef6d1f2c19fe3443b92302894f006c07750f28b338bd677d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4b8bb4ecca14fdef6d1f2c19fe3443b92302894f006c07750f28b338bd677d5->enter($__internal_a4b8bb4ecca14fdef6d1f2c19fe3443b92302894f006c07750f28b338bd677d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")), (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_a4b8bb4ecca14fdef6d1f2c19fe3443b92302894f006c07750f28b338bd677d5->leave($__internal_a4b8bb4ecca14fdef6d1f2c19fe3443b92302894f006c07750f28b338bd677d5_prof);

        
        $__internal_3573b043dccc46d6b1d1c72232d68d9c3f24ba3862cd5fe258f595c4ea67aa48->leave($__internal_3573b043dccc46d6b1d1c72232d68d9c3f24ba3862cd5fe258f595c4ea67aa48_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}
