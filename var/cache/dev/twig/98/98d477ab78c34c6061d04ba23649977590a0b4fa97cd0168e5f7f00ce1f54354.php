<?php

/* matieresViews/listMatieres.html.twig */
class __TwigTemplate_05357d8048952463f6434d54ae9eeefc14852494e175a12138fc0a63d777840d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "matieresViews/listMatieres.html.twig", 1);
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
        $__internal_b035ca13485eb03782142e4e625a8723e0116fa5214afa08833e7f8b59a7b02b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b035ca13485eb03782142e4e625a8723e0116fa5214afa08833e7f8b59a7b02b->enter($__internal_b035ca13485eb03782142e4e625a8723e0116fa5214afa08833e7f8b59a7b02b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "matieresViews/listMatieres.html.twig"));

        $__internal_27d69e9a4e4c0820b5ed6974312b9238baa9559fa6c9cc9ab742caa7e5c6f5be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27d69e9a4e4c0820b5ed6974312b9238baa9559fa6c9cc9ab742caa7e5c6f5be->enter($__internal_27d69e9a4e4c0820b5ed6974312b9238baa9559fa6c9cc9ab742caa7e5c6f5be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "matieresViews/listMatieres.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b035ca13485eb03782142e4e625a8723e0116fa5214afa08833e7f8b59a7b02b->leave($__internal_b035ca13485eb03782142e4e625a8723e0116fa5214afa08833e7f8b59a7b02b_prof);

        
        $__internal_27d69e9a4e4c0820b5ed6974312b9238baa9559fa6c9cc9ab742caa7e5c6f5be->leave($__internal_27d69e9a4e4c0820b5ed6974312b9238baa9559fa6c9cc9ab742caa7e5c6f5be_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b0b2b185397ec00e63bc16f8b28178b5b2f70c7f574439c9ed6b3077deed324b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0b2b185397ec00e63bc16f8b28178b5b2f70c7f574439c9ed6b3077deed324b->enter($__internal_b0b2b185397ec00e63bc16f8b28178b5b2f70c7f574439c9ed6b3077deed324b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_69c7149ee51b3fced1ce9908d3f3ba04b0f2397d01732a2520202cd934e37344 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69c7149ee51b3fced1ce9908d3f3ba04b0f2397d01732a2520202cd934e37344->enter($__internal_69c7149ee51b3fced1ce9908d3f3ba04b0f2397d01732a2520202cd934e37344_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_69c7149ee51b3fced1ce9908d3f3ba04b0f2397d01732a2520202cd934e37344->leave($__internal_69c7149ee51b3fced1ce9908d3f3ba04b0f2397d01732a2520202cd934e37344_prof);

        
        $__internal_b0b2b185397ec00e63bc16f8b28178b5b2f70c7f574439c9ed6b3077deed324b->leave($__internal_b0b2b185397ec00e63bc16f8b28178b5b2f70c7f574439c9ed6b3077deed324b_prof);

    }

    public function getTemplateName()
    {
        return "matieresViews/listMatieres.html.twig";
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
{% endblock %}", "matieresViews/listMatieres.html.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\app\\Resources\\views\\matieresViews\\listMatieres.html.twig");
    }
}
