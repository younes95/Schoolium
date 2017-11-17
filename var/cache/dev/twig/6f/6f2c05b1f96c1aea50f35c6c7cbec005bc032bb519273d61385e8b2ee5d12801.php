<?php

/* :anneesViews:listAnnees.html.twig */
class __TwigTemplate_e2ee73f99c908f3da35be26e6f4e83e0362add6c700dcbbbe8a32f5dab13af6d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":anneesViews:listAnnees.html.twig", 1);
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
        $__internal_e98d71320c242780dd8b4759f5c50ea54fe5d1fead936507a03c484b1cee038b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e98d71320c242780dd8b4759f5c50ea54fe5d1fead936507a03c484b1cee038b->enter($__internal_e98d71320c242780dd8b4759f5c50ea54fe5d1fead936507a03c484b1cee038b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":anneesViews:listAnnees.html.twig"));

        $__internal_b2a589777f0ac64a826d768d66775f8e7a7a8b227a791b236eece3494897a78c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2a589777f0ac64a826d768d66775f8e7a7a8b227a791b236eece3494897a78c->enter($__internal_b2a589777f0ac64a826d768d66775f8e7a7a8b227a791b236eece3494897a78c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":anneesViews:listAnnees.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e98d71320c242780dd8b4759f5c50ea54fe5d1fead936507a03c484b1cee038b->leave($__internal_e98d71320c242780dd8b4759f5c50ea54fe5d1fead936507a03c484b1cee038b_prof);

        
        $__internal_b2a589777f0ac64a826d768d66775f8e7a7a8b227a791b236eece3494897a78c->leave($__internal_b2a589777f0ac64a826d768d66775f8e7a7a8b227a791b236eece3494897a78c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9b3ab0a611b512a75e36fae7f1eb510b42c5acffa74f32853bae08c5b18f7b3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b3ab0a611b512a75e36fae7f1eb510b42c5acffa74f32853bae08c5b18f7b3e->enter($__internal_9b3ab0a611b512a75e36fae7f1eb510b42c5acffa74f32853bae08c5b18f7b3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d1ae0e229c468b9bd30a1fd22848110b492faad6b7bbde797259a545813e96a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1ae0e229c468b9bd30a1fd22848110b492faad6b7bbde797259a545813e96a2->enter($__internal_d1ae0e229c468b9bd30a1fd22848110b492faad6b7bbde797259a545813e96a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d1ae0e229c468b9bd30a1fd22848110b492faad6b7bbde797259a545813e96a2->leave($__internal_d1ae0e229c468b9bd30a1fd22848110b492faad6b7bbde797259a545813e96a2_prof);

        
        $__internal_9b3ab0a611b512a75e36fae7f1eb510b42c5acffa74f32853bae08c5b18f7b3e->leave($__internal_9b3ab0a611b512a75e36fae7f1eb510b42c5acffa74f32853bae08c5b18f7b3e_prof);

    }

    public function getTemplateName()
    {
        return ":anneesViews:listAnnees.html.twig";
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
{% endblock %}", ":anneesViews:listAnnees.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/views/anneesViews/listAnnees.html.twig");
    }
}
