<?php

/* :classesViews:eleves.html.twig */
class __TwigTemplate_604c7120324177ee0d696f33f8bea56583e7a0c345ab02ab143fe5e3ce431f4a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":classesViews:eleves.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_25a458da85d88b460f7b3dffe5598a00d96df874173e5ad3d30725c0ae8943ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25a458da85d88b460f7b3dffe5598a00d96df874173e5ad3d30725c0ae8943ce->enter($__internal_25a458da85d88b460f7b3dffe5598a00d96df874173e5ad3d30725c0ae8943ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":classesViews:eleves.html.twig"));

        $__internal_945f2a562079ffeda1bb3a9191c5967631a7c924955650a40b3444e6253ebe4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_945f2a562079ffeda1bb3a9191c5967631a7c924955650a40b3444e6253ebe4a->enter($__internal_945f2a562079ffeda1bb3a9191c5967631a7c924955650a40b3444e6253ebe4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":classesViews:eleves.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_25a458da85d88b460f7b3dffe5598a00d96df874173e5ad3d30725c0ae8943ce->leave($__internal_25a458da85d88b460f7b3dffe5598a00d96df874173e5ad3d30725c0ae8943ce_prof);

        
        $__internal_945f2a562079ffeda1bb3a9191c5967631a7c924955650a40b3444e6253ebe4a->leave($__internal_945f2a562079ffeda1bb3a9191c5967631a7c924955650a40b3444e6253ebe4a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_13dadbbd9bf332c2925e8c2b63b31b35acae5b88098f6f755021c05a83794464 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13dadbbd9bf332c2925e8c2b63b31b35acae5b88098f6f755021c05a83794464->enter($__internal_13dadbbd9bf332c2925e8c2b63b31b35acae5b88098f6f755021c05a83794464_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c5455073ca88cf8836d8bffdc44f4564693c9c338dd7e0d6d5145944c67e9a65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5455073ca88cf8836d8bffdc44f4564693c9c338dd7e0d6d5145944c67e9a65->enter($__internal_c5455073ca88cf8836d8bffdc44f4564693c9c338dd7e0d6d5145944c67e9a65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("teachers"), "html", null, true);
        echo "</h1>
";
        if ($this->env->isDebug()) {
            // line 5
            \Symfony\Component\VarDumper\VarDumper::dump((isset($context["eleves"]) ? $context["eleves"] : $this->getContext($context, "eleves")));
        }
        // line 6
        echo "\t<ol>
\t\t
\t</ol>
\t
";
        
        $__internal_c5455073ca88cf8836d8bffdc44f4564693c9c338dd7e0d6d5145944c67e9a65->leave($__internal_c5455073ca88cf8836d8bffdc44f4564693c9c338dd7e0d6d5145944c67e9a65_prof);

        
        $__internal_13dadbbd9bf332c2925e8c2b63b31b35acae5b88098f6f755021c05a83794464->leave($__internal_13dadbbd9bf332c2925e8c2b63b31b35acae5b88098f6f755021c05a83794464_prof);

    }

    public function getTemplateName()
    {
        return ":classesViews:eleves.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 6,  57 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
<h1>{{'list'|trans}} {{'teachers'|trans}}</h1>
{% dump(eleves) %}
\t<ol>
\t\t
\t</ol>
\t
{% endblock %}", ":classesViews:eleves.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/views/classesViews/eleves.html.twig");
    }
}
