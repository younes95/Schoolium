<?php

/* :matieresViews:listMatieres.html.twig */
class __TwigTemplate_ce42cdc9dbe95a1a44c1076577e211b706ddf7c60cbc489ab213a2cc42c41c68 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":matieresViews:listMatieres.html.twig", 1);
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
        $__internal_7f8f637d4fc2534c9b918cde977e44a0e7d5ef961cc823ed5da66e8dedac21e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f8f637d4fc2534c9b918cde977e44a0e7d5ef961cc823ed5da66e8dedac21e6->enter($__internal_7f8f637d4fc2534c9b918cde977e44a0e7d5ef961cc823ed5da66e8dedac21e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":matieresViews:listMatieres.html.twig"));

        $__internal_0c015cd1c3dd662308d848bb7dbea7b3db8f708785b891aac0cd7e61ea35c6a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c015cd1c3dd662308d848bb7dbea7b3db8f708785b891aac0cd7e61ea35c6a2->enter($__internal_0c015cd1c3dd662308d848bb7dbea7b3db8f708785b891aac0cd7e61ea35c6a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":matieresViews:listMatieres.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7f8f637d4fc2534c9b918cde977e44a0e7d5ef961cc823ed5da66e8dedac21e6->leave($__internal_7f8f637d4fc2534c9b918cde977e44a0e7d5ef961cc823ed5da66e8dedac21e6_prof);

        
        $__internal_0c015cd1c3dd662308d848bb7dbea7b3db8f708785b891aac0cd7e61ea35c6a2->leave($__internal_0c015cd1c3dd662308d848bb7dbea7b3db8f708785b891aac0cd7e61ea35c6a2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_832735bb01a86a1ee4264b6141079fa6ca2b297ef78bc30bcd5b39bcae3f8751 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_832735bb01a86a1ee4264b6141079fa6ca2b297ef78bc30bcd5b39bcae3f8751->enter($__internal_832735bb01a86a1ee4264b6141079fa6ca2b297ef78bc30bcd5b39bcae3f8751_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_75e71e47ed8ff53e685ea14a9f3441750c36622060b8796b38ebb9c029978203 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75e71e47ed8ff53e685ea14a9f3441750c36622060b8796b38ebb9c029978203->enter($__internal_75e71e47ed8ff53e685ea14a9f3441750c36622060b8796b38ebb9c029978203_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("matiere"), "html", null, true);
        echo "</h1>
\t<ol>
\t\t";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["matieres"]) ? $context["matieres"] : $this->getContext($context, "matieres")));
        foreach ($context['_seq'] as $context["_key"] => $context["matiere"]) {
            // line 7
            echo "\t\t\t<li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["matiere"], "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["matiere"], "description", array()), "html", null, true);
            echo " <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editMatiere", array("id" => $this->getAttribute($context["matiere"], "id", array()))), "html", null, true);
            echo "\">Modifier</a> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("removeMatiere", array("id" => $this->getAttribute($context["matiere"], "id", array()))), "html", null, true);
            echo "\">Supprimer</a>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['matiere'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "\t</ol>
\t
";
        
        $__internal_75e71e47ed8ff53e685ea14a9f3441750c36622060b8796b38ebb9c029978203->leave($__internal_75e71e47ed8ff53e685ea14a9f3441750c36622060b8796b38ebb9c029978203_prof);

        
        $__internal_832735bb01a86a1ee4264b6141079fa6ca2b297ef78bc30bcd5b39bcae3f8751->leave($__internal_832735bb01a86a1ee4264b6141079fa6ca2b297ef78bc30bcd5b39bcae3f8751_prof);

    }

    public function getTemplateName()
    {
        return ":matieresViews:listMatieres.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 9,  61 => 7,  57 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
<h1>{{'list'|trans}} {{'matiere'|trans}}</h1>
\t<ol>
\t\t{% for matiere in matieres %}
\t\t\t<li>{{ matiere.nom}} {{ matiere.description}} <a href=\"{{ path('editMatiere',{'id':matiere.id})}}\">Modifier</a> <a href=\"{{ path('removeMatiere',{'id':matiere.id})}}\">Supprimer</a>
\t\t{% endfor %}
\t</ol>
\t
{% endblock %}", ":matieresViews:listMatieres.html.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\app/Resources\\views/matieresViews/listMatieres.html.twig");
    }
}
