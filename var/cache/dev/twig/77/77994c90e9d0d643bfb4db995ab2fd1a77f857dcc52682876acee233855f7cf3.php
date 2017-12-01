<?php

/* anneesViews/listAnnees.html.twig */
class __TwigTemplate_e408886b2a093427edeb08123e807f02b8f4a168852a41ba6280ad5b23af248f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "anneesViews/listAnnees.html.twig", 1);
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
        $__internal_e3e387f7befb66dbb8588125baa297d3a5bf9efba3a1145606073103bab221da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3e387f7befb66dbb8588125baa297d3a5bf9efba3a1145606073103bab221da->enter($__internal_e3e387f7befb66dbb8588125baa297d3a5bf9efba3a1145606073103bab221da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "anneesViews/listAnnees.html.twig"));

        $__internal_07fc68ca32bfa022f2bc44feb9a310ccc0ecc4582d458c3a46c86dd7f933cad3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07fc68ca32bfa022f2bc44feb9a310ccc0ecc4582d458c3a46c86dd7f933cad3->enter($__internal_07fc68ca32bfa022f2bc44feb9a310ccc0ecc4582d458c3a46c86dd7f933cad3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "anneesViews/listAnnees.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e3e387f7befb66dbb8588125baa297d3a5bf9efba3a1145606073103bab221da->leave($__internal_e3e387f7befb66dbb8588125baa297d3a5bf9efba3a1145606073103bab221da_prof);

        
        $__internal_07fc68ca32bfa022f2bc44feb9a310ccc0ecc4582d458c3a46c86dd7f933cad3->leave($__internal_07fc68ca32bfa022f2bc44feb9a310ccc0ecc4582d458c3a46c86dd7f933cad3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1219231dcdfbe1adc5f9d7245c4670894592ba8aa98243096b0f77c3f74f5fe5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1219231dcdfbe1adc5f9d7245c4670894592ba8aa98243096b0f77c3f74f5fe5->enter($__internal_1219231dcdfbe1adc5f9d7245c4670894592ba8aa98243096b0f77c3f74f5fe5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_78c0c39d854297101673e20a7818cdc73e65347db3d695758e0e61fa88771579 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78c0c39d854297101673e20a7818cdc73e65347db3d695758e0e61fa88771579->enter($__internal_78c0c39d854297101673e20a7818cdc73e65347db3d695758e0e61fa88771579_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("annee"), "html", null, true);
        echo "</h1>
\t<ol>
\t\t";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["annees"]) ? $context["annees"] : $this->getContext($context, "annees")));
        foreach ($context['_seq'] as $context["_key"] => $context["annee"]) {
            // line 7
            echo "\t\t\t<li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["annee"], "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["annee"], "niveau", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["annee"], "specialite", array()), "html", null, true);
            echo " <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editAnnee", array("id" => $this->getAttribute($context["annee"], "id", array()))), "html", null, true);
            echo "\">Modifier</a> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("removeAnnee", array("id" => $this->getAttribute($context["annee"], "id", array()))), "html", null, true);
            echo "\">Supprimer</a>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['annee'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "\t</ol>
\t
";
        
        $__internal_78c0c39d854297101673e20a7818cdc73e65347db3d695758e0e61fa88771579->leave($__internal_78c0c39d854297101673e20a7818cdc73e65347db3d695758e0e61fa88771579_prof);

        
        $__internal_1219231dcdfbe1adc5f9d7245c4670894592ba8aa98243096b0f77c3f74f5fe5->leave($__internal_1219231dcdfbe1adc5f9d7245c4670894592ba8aa98243096b0f77c3f74f5fe5_prof);

    }

    public function getTemplateName()
    {
        return "anneesViews/listAnnees.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 9,  61 => 7,  57 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
<h1>{{'list'|trans}} {{'annee'|trans}}</h1>
\t<ol>
\t\t{% for annee in annees %}
\t\t\t<li>{{ annee.nom}} {{ annee.niveau}} {{ annee.specialite}} <a href=\"{{ path('editAnnee',{'id':annee.id})}}\">Modifier</a> <a href=\"{{ path('removeAnnee',{'id':annee.id})}}\">Supprimer</a>
\t\t{% endfor %}
\t</ol>
\t
{% endblock %}", "anneesViews/listAnnees.html.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\app\\Resources\\views\\anneesViews\\listAnnees.html.twig");
    }
}
