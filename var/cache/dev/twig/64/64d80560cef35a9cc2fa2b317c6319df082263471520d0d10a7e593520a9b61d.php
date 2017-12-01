<?php

/* :enseignantsViews:listEnseignants.html.twig */
class __TwigTemplate_b18d41fd64c3ef3a901ee73aa0a96058e4f78f43cb2135f853daefe9e0643986 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseList.html.twig", ":enseignantsViews:listEnseignants.html.twig", 1);
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
        $__internal_3c51137f33f72f4acf6d3a91f93dd45c3aa3fdc97d9bf7008e6fbd94cb9977a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c51137f33f72f4acf6d3a91f93dd45c3aa3fdc97d9bf7008e6fbd94cb9977a8->enter($__internal_3c51137f33f72f4acf6d3a91f93dd45c3aa3fdc97d9bf7008e6fbd94cb9977a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":enseignantsViews:listEnseignants.html.twig"));

        $__internal_bf1bb3162801883590de0ce3d75fe6e6bcabc9d30835af305c7aab40c38d1245 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf1bb3162801883590de0ce3d75fe6e6bcabc9d30835af305c7aab40c38d1245->enter($__internal_bf1bb3162801883590de0ce3d75fe6e6bcabc9d30835af305c7aab40c38d1245_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":enseignantsViews:listEnseignants.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3c51137f33f72f4acf6d3a91f93dd45c3aa3fdc97d9bf7008e6fbd94cb9977a8->leave($__internal_3c51137f33f72f4acf6d3a91f93dd45c3aa3fdc97d9bf7008e6fbd94cb9977a8_prof);

        
        $__internal_bf1bb3162801883590de0ce3d75fe6e6bcabc9d30835af305c7aab40c38d1245->leave($__internal_bf1bb3162801883590de0ce3d75fe6e6bcabc9d30835af305c7aab40c38d1245_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_72e372957d1e0d9b4c55de3e438831224c5b01aad9631b1ec17ef13c395436f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72e372957d1e0d9b4c55de3e438831224c5b01aad9631b1ec17ef13c395436f6->enter($__internal_72e372957d1e0d9b4c55de3e438831224c5b01aad9631b1ec17ef13c395436f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_689c7e42f2e7c4990909cfce3099ace4dda6bbf0885155122142b3bb15d83bf2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_689c7e42f2e7c4990909cfce3099ace4dda6bbf0885155122142b3bb15d83bf2->enter($__internal_689c7e42f2e7c4990909cfce3099ace4dda6bbf0885155122142b3bb15d83bf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("teachers"), "html", null, true);
        echo "
";
        
        $__internal_689c7e42f2e7c4990909cfce3099ace4dda6bbf0885155122142b3bb15d83bf2->leave($__internal_689c7e42f2e7c4990909cfce3099ace4dda6bbf0885155122142b3bb15d83bf2_prof);

        
        $__internal_72e372957d1e0d9b4c55de3e438831224c5b01aad9631b1ec17ef13c395436f6->leave($__internal_72e372957d1e0d9b4c55de3e438831224c5b01aad9631b1ec17ef13c395436f6_prof);

    }

    // line 7
    public function block_bodyList($context, array $blocks = array())
    {
        $__internal_8d8ee79267fb85144f846d826cc3a8575d3c01dc465427217f8cc2a721742dfd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d8ee79267fb85144f846d826cc3a8575d3c01dc465427217f8cc2a721742dfd->enter($__internal_8d8ee79267fb85144f846d826cc3a8575d3c01dc465427217f8cc2a721742dfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        $__internal_268153bbc6e7ef473c2bf76a7d562ea6eb3357565dcb80684301076fb9475a78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_268153bbc6e7ef473c2bf76a7d562ea6eb3357565dcb80684301076fb9475a78->enter($__internal_268153bbc6e7ef473c2bf76a7d562ea6eb3357565dcb80684301076fb9475a78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        // line 8
        echo "\t <div class=\"table-responsive\">
        <table id=\"customers2\" class=\"table datatable\">
            <thead>
                <tr>
                    <th>Nom & Prenom</th>
                    <th> Age </th>
                    <th>Date d'entrée</th>
                    <th>Type de contrat</th>
                    <th>telephone</th>
                    <th>";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("edit"), "html", null, true);
        echo "</th>
                    <th>";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("delete"), "html", null, true);
        echo "</th>
                    <th>";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile"), "html", null, true);
        echo "</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "ecole", array()), "enseignants", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["enseignant"]) {
            // line 24
            echo "                    <tr>
                        <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["enseignant"], "nom", array())), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["enseignant"], "prenom", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 26
            echo twig_escape_filter($this->env, (twig_date_format_filter($this->env, "now", "Y") - twig_date_format_filter($this->env, $this->getAttribute($context["enseignant"], "dateDeNaissance", array()), "Y")), "html", null, true);
            echo "</td>
                        <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["enseignant"], "dateDEntree", array()), "Y-m-d"), "html", null, true);
            echo "</td>
                        <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["enseignant"], "typeContrat", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["enseignant"], "telephone", array()), "html", null, true);
            echo "</td>
                        <td>
                            <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editEnseignant", array("id" => $this->getAttribute($context["enseignant"], "id", array()))), "html", null, true);
            echo "\">
                                <span class=\"fa fa-pencil-square-o\"></span>
                            </a>
                        </td>
                        <td>
                            <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("removeEnseignant", array("id" => $this->getAttribute($context["enseignant"], "id", array()))), "html", null, true);
            echo "\">
                                <span class=\"fa fa-trash\"></span>
                            </a>
                        </td>
                        <td>
                            <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profileEnseignant", array("id" => $this->getAttribute($context["enseignant"], "id", array()))), "html", null, true);
            echo "\">
                                <span class=\"fa fa-user\"></span>
                            </a>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['enseignant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "            </tbody>
        </table>                                    
    </div>
";
        
        $__internal_268153bbc6e7ef473c2bf76a7d562ea6eb3357565dcb80684301076fb9475a78->leave($__internal_268153bbc6e7ef473c2bf76a7d562ea6eb3357565dcb80684301076fb9475a78_prof);

        
        $__internal_8d8ee79267fb85144f846d826cc3a8575d3c01dc465427217f8cc2a721742dfd->leave($__internal_8d8ee79267fb85144f846d826cc3a8575d3c01dc465427217f8cc2a721742dfd_prof);

    }

    public function getTemplateName()
    {
        return ":enseignantsViews:listEnseignants.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 47,  146 => 41,  138 => 36,  130 => 31,  125 => 29,  121 => 28,  117 => 27,  113 => 26,  107 => 25,  104 => 24,  100 => 23,  93 => 19,  89 => 18,  85 => 17,  74 => 8,  65 => 7,  50 => 4,  41 => 3,  11 => 1,);
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
    {{'list'|trans}} {{'teachers'|trans}}
{% endblock %}

{% block bodyList %}
\t <div class=\"table-responsive\">
        <table id=\"customers2\" class=\"table datatable\">
            <thead>
                <tr>
                    <th>Nom & Prenom</th>
                    <th> Age </th>
                    <th>Date d'entrée</th>
                    <th>Type de contrat</th>
                    <th>telephone</th>
                    <th>{{'edit'|trans}}</th>
                    <th>{{'delete'|trans}}</th>
                    <th>{{'profile'|trans}}</th>
                </tr>
            </thead>
            <tbody>
                {% for enseignant in app.user.ecole.enseignants %}
                    <tr>
                        <td>{{ enseignant.nom|upper}} {{ enseignant.prenom}}</td>
                        <td>{{ (\"now\"|date(\"Y\"))-( enseignant.dateDeNaissance|date(\"Y\"))}}</td>
                        <td>{{enseignant.dateDEntree|date(\"Y-m-d\")}}</td>
                        <td>{{enseignant.typeContrat}}</td>
                        <td>{{enseignant.telephone}}</td>
                        <td>
                            <a href=\"{{ path('editEnseignant',{'id':enseignant.id})}}\">
                                <span class=\"fa fa-pencil-square-o\"></span>
                            </a>
                        </td>
                        <td>
                            <a href=\"{{ path('removeEnseignant',{'id':enseignant.id})}}\">
                                <span class=\"fa fa-trash\"></span>
                            </a>
                        </td>
                        <td>
                            <a href=\"{{ path('profileEnseignant',{'id':enseignant.id})}}\">
                                <span class=\"fa fa-user\"></span>
                            </a>
                        </td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>                                    
    </div>
{% endblock %}
", ":enseignantsViews:listEnseignants.html.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\app/Resources\\views/enseignantsViews/listEnseignants.html.twig");
    }
}
