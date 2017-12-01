<?php

/* enseignantsViews/listEnseignants.html.twig */
class __TwigTemplate_58eb5afbd7f392bbb172be11b9c6487a7cbe1aeebf39c848894f3a37a903fc57 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseList.html.twig", "enseignantsViews/listEnseignants.html.twig", 1);
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
        $__internal_e76f7babfe87b864af3854030d23279844134ac3c1d8595444cb374aff81aef0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e76f7babfe87b864af3854030d23279844134ac3c1d8595444cb374aff81aef0->enter($__internal_e76f7babfe87b864af3854030d23279844134ac3c1d8595444cb374aff81aef0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "enseignantsViews/listEnseignants.html.twig"));

        $__internal_ca2e7c34ad0565400063eee2a261140f966bdf4fb75a61e355b48c756a2abef6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca2e7c34ad0565400063eee2a261140f966bdf4fb75a61e355b48c756a2abef6->enter($__internal_ca2e7c34ad0565400063eee2a261140f966bdf4fb75a61e355b48c756a2abef6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "enseignantsViews/listEnseignants.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e76f7babfe87b864af3854030d23279844134ac3c1d8595444cb374aff81aef0->leave($__internal_e76f7babfe87b864af3854030d23279844134ac3c1d8595444cb374aff81aef0_prof);

        
        $__internal_ca2e7c34ad0565400063eee2a261140f966bdf4fb75a61e355b48c756a2abef6->leave($__internal_ca2e7c34ad0565400063eee2a261140f966bdf4fb75a61e355b48c756a2abef6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_23ef7eff75f3bc7aa42257f86d3391f07060c9d62820b84eedb2d8cf0f7ffe16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23ef7eff75f3bc7aa42257f86d3391f07060c9d62820b84eedb2d8cf0f7ffe16->enter($__internal_23ef7eff75f3bc7aa42257f86d3391f07060c9d62820b84eedb2d8cf0f7ffe16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2d88da6bbe8b7c99ade627a47301b829e2c20249e40cef29c67a9963ed0bad3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d88da6bbe8b7c99ade627a47301b829e2c20249e40cef29c67a9963ed0bad3d->enter($__internal_2d88da6bbe8b7c99ade627a47301b829e2c20249e40cef29c67a9963ed0bad3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("teachers"), "html", null, true);
        echo "
";
        
        $__internal_2d88da6bbe8b7c99ade627a47301b829e2c20249e40cef29c67a9963ed0bad3d->leave($__internal_2d88da6bbe8b7c99ade627a47301b829e2c20249e40cef29c67a9963ed0bad3d_prof);

        
        $__internal_23ef7eff75f3bc7aa42257f86d3391f07060c9d62820b84eedb2d8cf0f7ffe16->leave($__internal_23ef7eff75f3bc7aa42257f86d3391f07060c9d62820b84eedb2d8cf0f7ffe16_prof);

    }

    // line 7
    public function block_bodyList($context, array $blocks = array())
    {
        $__internal_be10cf887c9433e5842c2f4edcd25988f7b289dd8c983bd97927fd7af944a4ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be10cf887c9433e5842c2f4edcd25988f7b289dd8c983bd97927fd7af944a4ce->enter($__internal_be10cf887c9433e5842c2f4edcd25988f7b289dd8c983bd97927fd7af944a4ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        $__internal_4b04179ac798907632df0990c2a6bd6dc858951de5212b63422a2604424dce2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b04179ac798907632df0990c2a6bd6dc858951de5212b63422a2604424dce2b->enter($__internal_4b04179ac798907632df0990c2a6bd6dc858951de5212b63422a2604424dce2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

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
        
        $__internal_4b04179ac798907632df0990c2a6bd6dc858951de5212b63422a2604424dce2b->leave($__internal_4b04179ac798907632df0990c2a6bd6dc858951de5212b63422a2604424dce2b_prof);

        
        $__internal_be10cf887c9433e5842c2f4edcd25988f7b289dd8c983bd97927fd7af944a4ce->leave($__internal_be10cf887c9433e5842c2f4edcd25988f7b289dd8c983bd97927fd7af944a4ce_prof);

    }

    public function getTemplateName()
    {
        return "enseignantsViews/listEnseignants.html.twig";
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
", "enseignantsViews/listEnseignants.html.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\app\\Resources\\views\\enseignantsViews\\listEnseignants.html.twig");
    }
}
