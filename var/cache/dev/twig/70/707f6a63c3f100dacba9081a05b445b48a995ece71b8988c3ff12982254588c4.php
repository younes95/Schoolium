<?php

/* enseignantsViews/listClasses.html.twig */
class __TwigTemplate_551f541be3b5544ce2d19e1d4c6786873b2ec2aff831f426f5630d0e4a65636d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseList.html.twig", "enseignantsViews/listClasses.html.twig", 1);
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
        $__internal_4b02fe776914b2702be6fe9c2e3b4d718d61a728588a5a7b10e7d6d1a28f0ceb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b02fe776914b2702be6fe9c2e3b4d718d61a728588a5a7b10e7d6d1a28f0ceb->enter($__internal_4b02fe776914b2702be6fe9c2e3b4d718d61a728588a5a7b10e7d6d1a28f0ceb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "enseignantsViews/listClasses.html.twig"));

        $__internal_59b6b0f40f03958a2261e365692e77ed666553311dbf9773d72b2c09a3c71b62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59b6b0f40f03958a2261e365692e77ed666553311dbf9773d72b2c09a3c71b62->enter($__internal_59b6b0f40f03958a2261e365692e77ed666553311dbf9773d72b2c09a3c71b62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "enseignantsViews/listClasses.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b02fe776914b2702be6fe9c2e3b4d718d61a728588a5a7b10e7d6d1a28f0ceb->leave($__internal_4b02fe776914b2702be6fe9c2e3b4d718d61a728588a5a7b10e7d6d1a28f0ceb_prof);

        
        $__internal_59b6b0f40f03958a2261e365692e77ed666553311dbf9773d72b2c09a3c71b62->leave($__internal_59b6b0f40f03958a2261e365692e77ed666553311dbf9773d72b2c09a3c71b62_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_59d0e7a578083681963d7db5225f6b2cd5e4abb2d708a8cc7f6316dc6e62ae98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59d0e7a578083681963d7db5225f6b2cd5e4abb2d708a8cc7f6316dc6e62ae98->enter($__internal_59d0e7a578083681963d7db5225f6b2cd5e4abb2d708a8cc7f6316dc6e62ae98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b2e6b32e32e97bc269275a3dc750ce07655e7d8df870ba32cfa5f045e0ec1689 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2e6b32e32e97bc269275a3dc750ce07655e7d8df870ba32cfa5f045e0ec1689->enter($__internal_b2e6b32e32e97bc269275a3dc750ce07655e7d8df870ba32cfa5f045e0ec1689_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\t";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("students"), "html", null, true);
        echo "
";
        
        $__internal_b2e6b32e32e97bc269275a3dc750ce07655e7d8df870ba32cfa5f045e0ec1689->leave($__internal_b2e6b32e32e97bc269275a3dc750ce07655e7d8df870ba32cfa5f045e0ec1689_prof);

        
        $__internal_59d0e7a578083681963d7db5225f6b2cd5e4abb2d708a8cc7f6316dc6e62ae98->leave($__internal_59d0e7a578083681963d7db5225f6b2cd5e4abb2d708a8cc7f6316dc6e62ae98_prof);

    }

    // line 8
    public function block_bodyList($context, array $blocks = array())
    {
        $__internal_b98dc336f672f0c996a76fddb07088c8379b0a1c7664bb2db505932541c003bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b98dc336f672f0c996a76fddb07088c8379b0a1c7664bb2db505932541c003bd->enter($__internal_b98dc336f672f0c996a76fddb07088c8379b0a1c7664bb2db505932541c003bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        $__internal_c7660151962b8a99921ae312e3fa9d3412237f6fa106ad62d65b13958c932685 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7660151962b8a99921ae312e3fa9d3412237f6fa106ad62d65b13958c932685->enter($__internal_c7660151962b8a99921ae312e3fa9d3412237f6fa106ad62d65b13958c932685_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

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
        
        $__internal_c7660151962b8a99921ae312e3fa9d3412237f6fa106ad62d65b13958c932685->leave($__internal_c7660151962b8a99921ae312e3fa9d3412237f6fa106ad62d65b13958c932685_prof);

        
        $__internal_b98dc336f672f0c996a76fddb07088c8379b0a1c7664bb2db505932541c003bd->leave($__internal_b98dc336f672f0c996a76fddb07088c8379b0a1c7664bb2db505932541c003bd_prof);

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
", "enseignantsViews/listClasses.html.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\app\\Resources\\views\\enseignantsViews\\listClasses.html.twig");
    }
}
