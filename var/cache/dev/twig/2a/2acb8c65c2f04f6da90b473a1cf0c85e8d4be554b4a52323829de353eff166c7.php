<?php

/* :enseignantsViews:listClasses.html.twig */
class __TwigTemplate_3b8cf41d69879222b8fda71a3324589d01b6ff2caf0e1f0f59bfe3adca4f6107 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseList.html.twig", ":enseignantsViews:listClasses.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'bodyList' => array($this, 'block_bodyList'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "baseList.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_301ab7f17d62ba6925e68984ead617bfc0d011b4c1838d841a76611a0b523ca8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_301ab7f17d62ba6925e68984ead617bfc0d011b4c1838d841a76611a0b523ca8->enter($__internal_301ab7f17d62ba6925e68984ead617bfc0d011b4c1838d841a76611a0b523ca8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":enseignantsViews:listClasses.html.twig"));

        $__internal_b122632e86273f4df1b8c7b25d29a1a50695fd39ee9d614f2f647f44004668b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b122632e86273f4df1b8c7b25d29a1a50695fd39ee9d614f2f647f44004668b3->enter($__internal_b122632e86273f4df1b8c7b25d29a1a50695fd39ee9d614f2f647f44004668b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":enseignantsViews:listClasses.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_301ab7f17d62ba6925e68984ead617bfc0d011b4c1838d841a76611a0b523ca8->leave($__internal_301ab7f17d62ba6925e68984ead617bfc0d011b4c1838d841a76611a0b523ca8_prof);

        
        $__internal_b122632e86273f4df1b8c7b25d29a1a50695fd39ee9d614f2f647f44004668b3->leave($__internal_b122632e86273f4df1b8c7b25d29a1a50695fd39ee9d614f2f647f44004668b3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_609c1b39c056bfad56a61496e2daef5a865714800ad1d0fbff4e113f8d54f839 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_609c1b39c056bfad56a61496e2daef5a865714800ad1d0fbff4e113f8d54f839->enter($__internal_609c1b39c056bfad56a61496e2daef5a865714800ad1d0fbff4e113f8d54f839_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_79eb47ed524a85b32a39f1d703361bba70954393df928b98a664d147a90c04a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79eb47ed524a85b32a39f1d703361bba70954393df928b98a664d147a90c04a2->enter($__internal_79eb47ed524a85b32a39f1d703361bba70954393df928b98a664d147a90c04a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\t";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("students"), "html", null, true);
        echo "
";
        
        $__internal_79eb47ed524a85b32a39f1d703361bba70954393df928b98a664d147a90c04a2->leave($__internal_79eb47ed524a85b32a39f1d703361bba70954393df928b98a664d147a90c04a2_prof);

        
        $__internal_609c1b39c056bfad56a61496e2daef5a865714800ad1d0fbff4e113f8d54f839->leave($__internal_609c1b39c056bfad56a61496e2daef5a865714800ad1d0fbff4e113f8d54f839_prof);

    }

    // line 8
    public function block_bodyList($context, array $blocks = array())
    {
        $__internal_0ba28efc34dd1a1ef43d767b5e0f701190cf6ec98791dc6f0a5031197d8a39f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ba28efc34dd1a1ef43d767b5e0f701190cf6ec98791dc6f0a5031197d8a39f7->enter($__internal_0ba28efc34dd1a1ef43d767b5e0f701190cf6ec98791dc6f0a5031197d8a39f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        $__internal_97e05e804b89850464c631036c9736e672d4fdeb8d1c9b2da52af9eb85c9f731 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97e05e804b89850464c631036c9736e672d4fdeb8d1c9b2da52af9eb85c9f731->enter($__internal_97e05e804b89850464c631036c9736e672d4fdeb8d1c9b2da52af9eb85c9f731_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        // line 9
        echo "\t<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showEnseignant", array("id" => $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "enseignant", array()), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("global.program"), "html", null, true);
        echo "</a>
\t<a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("absence_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("absence.manage"), "html", null, true);
        echo "</a>
\t<a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("program_add", array("id" => $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "enseignant", array()), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("global.annual.program"), "html", null, true);
        echo "</a>
\t\t\t
    <div class=\"table-responsive\">
        <table id=\"customers2\" class=\"table datatable\">
            <thead>
                <tr>
                    <th>";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("school"), "html", null, true);
        echo "</th>
                    <th>";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("classe"), "html", null, true);
        echo "</th>
                    <th>";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("annee"), "html", null, true);
        echo "</th>
                    <th>";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("niveau"), "html", null, true);
        echo "</th>
                    <th>";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("matiere"), "html", null, true);
        echo "</th>
                    <th>";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("student.show"), "html", null, true);
        echo "</th>
                    <th>";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("global.program"), "html", null, true);
        echo "</th>
                    <th>";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("absence.add"), "html", null, true);
        echo "</th>
                    <th>";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("message.send"), "html", null, true);
        echo "</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "classes", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["classe"]) {
            // line 30
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["classe"], "classe", array()), "ecole", array()), "nom", array()), "html", null, true);
            echo " </td>
\t\t\t\t\t\t<td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["classe"], "classe", array()), "nom", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["classe"], "classe", array()), "annee", array()), "nom", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["classe"], "classe", array()), "annee", array()), "niveau", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["classe"], "matiere", array()), "nom", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t<a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showEleve", array("idClasse" => $this->getAttribute($this->getAttribute($context["classe"], "classe", array()), "id", array()), "idMatiere" => $this->getAttribute($this->getAttribute($context["classe"], "matiere", array()), "id", array()))), "html", null, true);
            echo "\"> <i class=\"fa fa-eye\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t<a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showClasse", array("id" => $this->getAttribute($this->getAttribute($context["classe"], "classe", array()), "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-tasks\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t<a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("absence_new", array("id" => $this->getAttribute($this->getAttribute($context["classe"], "classe", array()), "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-plus\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-envelope\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['classe'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "            </tbody>
        </table>                                    
    </div>
    
";
        
        $__internal_97e05e804b89850464c631036c9736e672d4fdeb8d1c9b2da52af9eb85c9f731->leave($__internal_97e05e804b89850464c631036c9736e672d4fdeb8d1c9b2da52af9eb85c9f731_prof);

        
        $__internal_0ba28efc34dd1a1ef43d767b5e0f701190cf6ec98791dc6f0a5031197d8a39f7->leave($__internal_0ba28efc34dd1a1ef43d767b5e0f701190cf6ec98791dc6f0a5031197d8a39f7_prof);

    }

    public function getTemplateName()
    {
        return ":enseignantsViews:listClasses.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 57,  180 => 46,  172 => 41,  165 => 37,  160 => 35,  156 => 34,  152 => 33,  148 => 32,  144 => 31,  141 => 30,  137 => 29,  130 => 25,  126 => 24,  122 => 23,  118 => 22,  114 => 21,  110 => 20,  106 => 19,  102 => 18,  98 => 17,  87 => 11,  81 => 10,  74 => 9,  65 => 8,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'baseList.html.twig' %}

{% block title %}
\t{{'list'|trans}} {{'students'|trans}}
{% endblock %}


{% block bodyList %}
\t<a href=\"{{ path('showEnseignant', { 'id': data.enseignant.id}) }}\">{{'global.program'|trans}}</a>
\t<a href=\"{{ path('absence_index')}}\">{{'absence.manage'|trans}}</a>
\t<a href=\"{{path('program_add',{ 'id': data.enseignant.id})}}\">{{'global.annual.program'|trans}}</a>
\t\t\t
    <div class=\"table-responsive\">
        <table id=\"customers2\" class=\"table datatable\">
            <thead>
                <tr>
                    <th>{{'school'|trans}}</th>
                    <th>{{'classe'|trans}}</th>
                    <th>{{'annee'|trans}}</th>
                    <th>{{'niveau'|trans}}</th>
                    <th>{{'matiere'|trans}}</th>
                    <th>{{'student.show'|trans}}</th>
                    <th>{{'global.program'|trans}}</th>
                    <th>{{'absence.add'|trans}}</th>
                    <th>{{'message.send'|trans}}</th>
                </tr>
            </thead>
            <tbody>
                {% for classe in data.classes %}
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>{{ classe.classe.ecole.nom}} </td>
\t\t\t\t\t\t<td>{{ classe.classe.nom }}</td>
\t\t\t\t\t\t<td>{{ classe.classe.annee.nom}}</td>
\t\t\t\t\t\t<td>{{ classe.classe.annee.niveau}}</td>
\t\t\t\t\t\t<td>{{classe.matiere.nom}}</td>
\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t<a href=\"{{ path('showEleve', { 'idClasse': classe.classe.id, 'idMatiere': classe.matiere.id}) }}\"> <i class=\"fa fa-eye\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t<a href=\"{{path('showClasse',{ 'id': classe.classe.id})}}\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-tasks\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t<a href=\"{{path('absence_new',{ 'id': classe.classe.id})}}\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-plus\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-envelope\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
                {% endfor %}
            </tbody>
        </table>                                    
    </div>
    
{% endblock %}  
", ":enseignantsViews:listClasses.html.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\app/Resources\\views/enseignantsViews/listClasses.html.twig");
    }
}
