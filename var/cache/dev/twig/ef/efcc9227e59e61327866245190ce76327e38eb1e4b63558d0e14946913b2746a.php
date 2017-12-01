<?php

/* :classesViews:eleves.html.twig */
class __TwigTemplate_c5e78c15018bef5205e9648b0bf3a32a5f46a671c66a9c25092c0e73204656f9 extends Twig_Template
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
        $__internal_69feed69d6bb15a234fc55952459c531f9562189ba440601d3dd04efef39e548 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69feed69d6bb15a234fc55952459c531f9562189ba440601d3dd04efef39e548->enter($__internal_69feed69d6bb15a234fc55952459c531f9562189ba440601d3dd04efef39e548_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":classesViews:eleves.html.twig"));

        $__internal_b7a6f5047b29e75b77410ae19667cf05e0701bcac42faedb6a2409de667da044 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7a6f5047b29e75b77410ae19667cf05e0701bcac42faedb6a2409de667da044->enter($__internal_b7a6f5047b29e75b77410ae19667cf05e0701bcac42faedb6a2409de667da044_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":classesViews:eleves.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_69feed69d6bb15a234fc55952459c531f9562189ba440601d3dd04efef39e548->leave($__internal_69feed69d6bb15a234fc55952459c531f9562189ba440601d3dd04efef39e548_prof);

        
        $__internal_b7a6f5047b29e75b77410ae19667cf05e0701bcac42faedb6a2409de667da044->leave($__internal_b7a6f5047b29e75b77410ae19667cf05e0701bcac42faedb6a2409de667da044_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_253e868943e5e4d61cb90728fdd812e5190cf377a317922e589d26e3aae3f893 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_253e868943e5e4d61cb90728fdd812e5190cf377a317922e589d26e3aae3f893->enter($__internal_253e868943e5e4d61cb90728fdd812e5190cf377a317922e589d26e3aae3f893_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a7933f10bd4b65c9c57c1fff459b726a1c0f9266950b60c55a9285414ea486df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7933f10bd4b65c9c57c1fff459b726a1c0f9266950b60c55a9285414ea486df->enter($__internal_a7933f10bd4b65c9c57c1fff459b726a1c0f9266950b60c55a9285414ea486df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a7933f10bd4b65c9c57c1fff459b726a1c0f9266950b60c55a9285414ea486df->leave($__internal_a7933f10bd4b65c9c57c1fff459b726a1c0f9266950b60c55a9285414ea486df_prof);

        
        $__internal_253e868943e5e4d61cb90728fdd812e5190cf377a317922e589d26e3aae3f893->leave($__internal_253e868943e5e4d61cb90728fdd812e5190cf377a317922e589d26e3aae3f893_prof);

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
{% endblock %}", ":classesViews:eleves.html.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\app/Resources\\views/classesViews/eleves.html.twig");
    }
}
