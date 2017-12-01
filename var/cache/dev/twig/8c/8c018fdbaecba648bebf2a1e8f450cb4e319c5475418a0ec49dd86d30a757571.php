<?php

/* schoolsViews/listSchools.html.twig */
class __TwigTemplate_d9ae5f72e6da2eaec2f7275aebeca09980ec736f3abe9094a7232fbeb53f5dd8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "schoolsViews/listSchools.html.twig", 1);
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
        $__internal_2ad5bf53f013cbab5b7ccb61b020745ce6db1288860af9442bdcedc492ca06b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ad5bf53f013cbab5b7ccb61b020745ce6db1288860af9442bdcedc492ca06b9->enter($__internal_2ad5bf53f013cbab5b7ccb61b020745ce6db1288860af9442bdcedc492ca06b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "schoolsViews/listSchools.html.twig"));

        $__internal_8be52add4129f8b30ac691be671bb88e09ae09d16b4794613ae7679b34a9f1a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8be52add4129f8b30ac691be671bb88e09ae09d16b4794613ae7679b34a9f1a1->enter($__internal_8be52add4129f8b30ac691be671bb88e09ae09d16b4794613ae7679b34a9f1a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "schoolsViews/listSchools.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ad5bf53f013cbab5b7ccb61b020745ce6db1288860af9442bdcedc492ca06b9->leave($__internal_2ad5bf53f013cbab5b7ccb61b020745ce6db1288860af9442bdcedc492ca06b9_prof);

        
        $__internal_8be52add4129f8b30ac691be671bb88e09ae09d16b4794613ae7679b34a9f1a1->leave($__internal_8be52add4129f8b30ac691be671bb88e09ae09d16b4794613ae7679b34a9f1a1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ac92e9b33876660630c5224b764f1497fa6bdf0edfd35292d3cfb04f0edd15f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac92e9b33876660630c5224b764f1497fa6bdf0edfd35292d3cfb04f0edd15f3->enter($__internal_ac92e9b33876660630c5224b764f1497fa6bdf0edfd35292d3cfb04f0edd15f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d3a790c564066dcc5c2d0c09483cb46fc70daaa52579084021c10377e2f133f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3a790c564066dcc5c2d0c09483cb46fc70daaa52579084021c10377e2f133f4->enter($__internal_d3a790c564066dcc5c2d0c09483cb46fc70daaa52579084021c10377e2f133f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("schools"), "html", null, true);
        echo "</h1>
\t<ol>
\t\t";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ecoles"]) ? $context["ecoles"] : $this->getContext($context, "ecoles")));
        foreach ($context['_seq'] as $context["_key"] => $context["ecole"]) {
            // line 7
            echo "\t\t\t<li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ecole"], "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ecole"], "ville", array()), "html", null, true);
            echo " <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editSchool", array("id" => $this->getAttribute($context["ecole"], "id", array()))), "html", null, true);
            echo "\">Modifier</a> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("removeSchool", array("id" => $this->getAttribute($context["ecole"], "id", array()))), "html", null, true);
            echo "\">Supprimer</a> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profileSchool", array("id" => $this->getAttribute($context["ecole"], "id", array()))), "html", null, true);
            echo "\">Profile</a></li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ecole'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "\t</ol>
\t
";
        
        $__internal_d3a790c564066dcc5c2d0c09483cb46fc70daaa52579084021c10377e2f133f4->leave($__internal_d3a790c564066dcc5c2d0c09483cb46fc70daaa52579084021c10377e2f133f4_prof);

        
        $__internal_ac92e9b33876660630c5224b764f1497fa6bdf0edfd35292d3cfb04f0edd15f3->leave($__internal_ac92e9b33876660630c5224b764f1497fa6bdf0edfd35292d3cfb04f0edd15f3_prof);

    }

    public function getTemplateName()
    {
        return "schoolsViews/listSchools.html.twig";
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
<h1>{{'list'|trans}} {{'schools'|trans}}</h1>
\t<ol>
\t\t{% for ecole in ecoles %}
\t\t\t<li>{{ ecole.nom}} {{ ecole.ville}} <a href=\"{{ path('editSchool',{'id':ecole.id})}}\">Modifier</a> <a href=\"{{ path('removeSchool',{'id':ecole.id})}}\">Supprimer</a> <a href=\"{{ path('profileSchool',{'id':ecole.id})}}\">Profile</a></li>
\t\t{% endfor %}
\t</ol>
\t
{% endblock %}", "schoolsViews/listSchools.html.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\app\\Resources\\views\\schoolsViews\\listSchools.html.twig");
    }
}
