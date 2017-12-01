<?php

/* :anneesViews:listAnnees.html.twig */
class __TwigTemplate_c0519db9656e0c5b98d39818d6c3437f720db807d5e96607ce6684757a0b03b5 extends Twig_Template
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
        $__internal_c4381bad70edd4b7bc31331670fe4d67913e1d78279e39a76883cf38d76a9b48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4381bad70edd4b7bc31331670fe4d67913e1d78279e39a76883cf38d76a9b48->enter($__internal_c4381bad70edd4b7bc31331670fe4d67913e1d78279e39a76883cf38d76a9b48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":anneesViews:listAnnees.html.twig"));

        $__internal_77c29cf26a32795200b78cf40e3f5b794a49ab3cba6300abb50f6d0f9576c858 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77c29cf26a32795200b78cf40e3f5b794a49ab3cba6300abb50f6d0f9576c858->enter($__internal_77c29cf26a32795200b78cf40e3f5b794a49ab3cba6300abb50f6d0f9576c858_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":anneesViews:listAnnees.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c4381bad70edd4b7bc31331670fe4d67913e1d78279e39a76883cf38d76a9b48->leave($__internal_c4381bad70edd4b7bc31331670fe4d67913e1d78279e39a76883cf38d76a9b48_prof);

        
        $__internal_77c29cf26a32795200b78cf40e3f5b794a49ab3cba6300abb50f6d0f9576c858->leave($__internal_77c29cf26a32795200b78cf40e3f5b794a49ab3cba6300abb50f6d0f9576c858_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_33bce8536d9c02dda5de1d66dd75354a41df8ee7254c769198075e5abda9a900 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33bce8536d9c02dda5de1d66dd75354a41df8ee7254c769198075e5abda9a900->enter($__internal_33bce8536d9c02dda5de1d66dd75354a41df8ee7254c769198075e5abda9a900_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_67ad29161683d13abf7cf631ae3af42b894e9a935910edc58336bbbbafd325c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67ad29161683d13abf7cf631ae3af42b894e9a935910edc58336bbbbafd325c3->enter($__internal_67ad29161683d13abf7cf631ae3af42b894e9a935910edc58336bbbbafd325c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_67ad29161683d13abf7cf631ae3af42b894e9a935910edc58336bbbbafd325c3->leave($__internal_67ad29161683d13abf7cf631ae3af42b894e9a935910edc58336bbbbafd325c3_prof);

        
        $__internal_33bce8536d9c02dda5de1d66dd75354a41df8ee7254c769198075e5abda9a900->leave($__internal_33bce8536d9c02dda5de1d66dd75354a41df8ee7254c769198075e5abda9a900_prof);

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
{% endblock %}", ":anneesViews:listAnnees.html.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\app/Resources\\views/anneesViews/listAnnees.html.twig");
    }
}
