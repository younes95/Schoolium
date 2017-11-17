<?php

/* enseignantsViews/listClasses.html.twig */
class __TwigTemplate_c432690059a55c2267313b51ab63bea7a79c643d74dd0490e9d25fe1a4b2d8e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "enseignantsViews/listClasses.html.twig", 1);
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
        $__internal_5827d66a52b19bf788a7cfa8eba5ae71785caf9faabcc35bbee57140c60296c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5827d66a52b19bf788a7cfa8eba5ae71785caf9faabcc35bbee57140c60296c0->enter($__internal_5827d66a52b19bf788a7cfa8eba5ae71785caf9faabcc35bbee57140c60296c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "enseignantsViews/listClasses.html.twig"));

        $__internal_0921e2277eb094b0785155a1b81b7a95e9d30f258c08d69c84b34c111d9d41fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0921e2277eb094b0785155a1b81b7a95e9d30f258c08d69c84b34c111d9d41fa->enter($__internal_0921e2277eb094b0785155a1b81b7a95e9d30f258c08d69c84b34c111d9d41fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "enseignantsViews/listClasses.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5827d66a52b19bf788a7cfa8eba5ae71785caf9faabcc35bbee57140c60296c0->leave($__internal_5827d66a52b19bf788a7cfa8eba5ae71785caf9faabcc35bbee57140c60296c0_prof);

        
        $__internal_0921e2277eb094b0785155a1b81b7a95e9d30f258c08d69c84b34c111d9d41fa->leave($__internal_0921e2277eb094b0785155a1b81b7a95e9d30f258c08d69c84b34c111d9d41fa_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_73c3fcd9088e4b2a940c04254b20a0d822b812053683911f5fc346464b0f4d64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73c3fcd9088e4b2a940c04254b20a0d822b812053683911f5fc346464b0f4d64->enter($__internal_73c3fcd9088e4b2a940c04254b20a0d822b812053683911f5fc346464b0f4d64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_795cfdfeae200ea2d2480b5ea0adcd2dba9fc7ff699f53dec76c176ef5cf6fbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_795cfdfeae200ea2d2480b5ea0adcd2dba9fc7ff699f53dec76c176ef5cf6fbc->enter($__internal_795cfdfeae200ea2d2480b5ea0adcd2dba9fc7ff699f53dec76c176ef5cf6fbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("teachers"), "html", null, true);
        echo "</h1>
";
        if ($this->env->isDebug()) {
            // line 5
            \Symfony\Component\VarDumper\VarDumper::dump(($context["data"] ?? $this->getContext($context, "data")));
        }
        // line 6
        echo "\t<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showEnseignant", array("id" => $this->getAttribute($this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "enseignant", array()), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("global.program"), "html", null, true);
        echo "</a>
\t<a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("absence_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("absence.manage"), "html", null, true);
        echo "</a>
\t<a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("program_add", array("id" => $this->getAttribute($this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "enseignant", array()), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("global.annual.program"), "html", null, true);
        echo "</a>
\t\t\t
\t<ol>

\t\t";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "classes", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["classe"]) {
            // line 13
            echo "\t\t\t<li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showEleve", array("idClasse" => $this->getAttribute($this->getAttribute($context["classe"], "classe", array()), "id", array()), "idMatiere" => $this->getAttribute($this->getAttribute($context["classe"], "matiere", array()), "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t";
            // line 14
            echo twig_escape_filter($this->env, (((((((($this->getAttribute($this->getAttribute($this->getAttribute($context["classe"], "classe", array()), "ecole", array()), "nom", array()) . " ") . $this->getAttribute($this->getAttribute($context["classe"], "classe", array()), "nom", array())) . " ") . $this->getAttribute($this->getAttribute($this->getAttribute($context["classe"], "classe", array()), "annee", array()), "nom", array())) . " ") . $this->getAttribute($this->getAttribute($this->getAttribute($context["classe"], "classe", array()), "annee", array()), "niveau", array())) . " ") . $this->getAttribute($this->getAttribute($context["classe"], "matiere", array()), "nom", array())), "html", null, true);
            echo "</a>
\t\t\t\t<a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showClasse", array("id" => $this->getAttribute($this->getAttribute($context["classe"], "classe", array()), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("global.program"), "html", null, true);
            echo "</a>
\t\t\t\t<a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("absence_new", array("id" => $this->getAttribute($this->getAttribute($context["classe"], "classe", array()), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("absence.add"), "html", null, true);
            echo "</a>
\t\t\t\t<a href=\"\">";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("message.send"), "html", null, true);
            echo "</a>
\t\t\t</li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['classe'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "
\t</ol>
\t
";
        
        $__internal_795cfdfeae200ea2d2480b5ea0adcd2dba9fc7ff699f53dec76c176ef5cf6fbc->leave($__internal_795cfdfeae200ea2d2480b5ea0adcd2dba9fc7ff699f53dec76c176ef5cf6fbc_prof);

        
        $__internal_73c3fcd9088e4b2a940c04254b20a0d822b812053683911f5fc346464b0f4d64->leave($__internal_73c3fcd9088e4b2a940c04254b20a0d822b812053683911f5fc346464b0f4d64_prof);

    }

    public function getTemplateName()
    {
        return "enseignantsViews/listClasses.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 20,  107 => 17,  101 => 16,  95 => 15,  91 => 14,  86 => 13,  82 => 12,  73 => 8,  67 => 7,  60 => 6,  57 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
{% dump(data) %}
\t<a href=\"{{ path('showEnseignant', { 'id': data.enseignant.id}) }}\">{{'global.program'|trans}}</a>
\t<a href=\"{{ path('absence_index')}}\">{{'absence.manage'|trans}}</a>
\t<a href=\"{{path('program_add',{ 'id': data.enseignant.id})}}\">{{'global.annual.program'|trans}}</a>
\t\t\t
\t<ol>

\t\t{% for classe in data.classes %}
\t\t\t<li><a href=\"{{ path('showEleve', { 'idClasse': classe.classe.id, 'idMatiere': classe.matiere.id}) }}\">
\t\t\t\t{{classe.classe.ecole.nom~' '~classe.classe.nom~' '~classe.classe.annee.nom~' '~classe.classe.annee.niveau~' '~classe.matiere.nom}}</a>
\t\t\t\t<a href=\"{{path('showClasse',{ 'id': classe.classe.id})}}\">{{'global.program'|trans}}</a>
\t\t\t\t<a href=\"{{path('absence_new',{ 'id': classe.classe.id})}}\">{{'absence.add'|trans}}</a>
\t\t\t\t<a href=\"\">{{'message.send'|trans}}</a>
\t\t\t</li>
\t\t{% endfor %}

\t</ol>
\t
{% endblock %}", "enseignantsViews/listClasses.html.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\app\\Resources\\views\\enseignantsViews\\listClasses.html.twig");
    }
}
