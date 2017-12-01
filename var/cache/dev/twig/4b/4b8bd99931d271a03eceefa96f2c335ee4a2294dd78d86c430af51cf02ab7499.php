<?php

/* classesViews/listClasses.html.twig */
class __TwigTemplate_c0c61d98626e78b23653ac5a6ec1f73be38fcbf5d581ee44fd8e486f344408ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseList.html.twig", "classesViews/listClasses.html.twig", 1);
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
        $__internal_008e62aa9b2a9b5a773d3234391d652a951962481750f4a5d554f1af1f6bd010 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_008e62aa9b2a9b5a773d3234391d652a951962481750f4a5d554f1af1f6bd010->enter($__internal_008e62aa9b2a9b5a773d3234391d652a951962481750f4a5d554f1af1f6bd010_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "classesViews/listClasses.html.twig"));

        $__internal_065a1cbe777df23574e39809483611d8219e06c8bc60ec44477583cc77499726 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_065a1cbe777df23574e39809483611d8219e06c8bc60ec44477583cc77499726->enter($__internal_065a1cbe777df23574e39809483611d8219e06c8bc60ec44477583cc77499726_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "classesViews/listClasses.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_008e62aa9b2a9b5a773d3234391d652a951962481750f4a5d554f1af1f6bd010->leave($__internal_008e62aa9b2a9b5a773d3234391d652a951962481750f4a5d554f1af1f6bd010_prof);

        
        $__internal_065a1cbe777df23574e39809483611d8219e06c8bc60ec44477583cc77499726->leave($__internal_065a1cbe777df23574e39809483611d8219e06c8bc60ec44477583cc77499726_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_bfe9c0ab4d31c7567a189e13796ede6f6dbee26e81e836b4388d3f191bdb3180 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfe9c0ab4d31c7567a189e13796ede6f6dbee26e81e836b4388d3f191bdb3180->enter($__internal_bfe9c0ab4d31c7567a189e13796ede6f6dbee26e81e836b4388d3f191bdb3180_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3d7215de337722a38227570ce3fb7cf21b63d65c6c22d686bbf8c5149167eeab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d7215de337722a38227570ce3fb7cf21b63d65c6c22d686bbf8c5149167eeab->enter($__internal_3d7215de337722a38227570ce3fb7cf21b63d65c6c22d686bbf8c5149167eeab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\t";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("classe"), "html", null, true);
        echo "
";
        
        $__internal_3d7215de337722a38227570ce3fb7cf21b63d65c6c22d686bbf8c5149167eeab->leave($__internal_3d7215de337722a38227570ce3fb7cf21b63d65c6c22d686bbf8c5149167eeab_prof);

        
        $__internal_bfe9c0ab4d31c7567a189e13796ede6f6dbee26e81e836b4388d3f191bdb3180->leave($__internal_bfe9c0ab4d31c7567a189e13796ede6f6dbee26e81e836b4388d3f191bdb3180_prof);

    }

    // line 8
    public function block_bodyList($context, array $blocks = array())
    {
        $__internal_cd1bde5477a5b0590ebab1b9cac1afe1e41a2c9144e1343f275797a3386246d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd1bde5477a5b0590ebab1b9cac1afe1e41a2c9144e1343f275797a3386246d9->enter($__internal_cd1bde5477a5b0590ebab1b9cac1afe1e41a2c9144e1343f275797a3386246d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        $__internal_91cfbb91e865fcff8fa92f9b68f60d7ab3f6b5f59aaa7b10fd9d3281ab699485 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91cfbb91e865fcff8fa92f9b68f60d7ab3f6b5f59aaa7b10fd9d3281ab699485->enter($__internal_91cfbb91e865fcff8fa92f9b68f60d7ab3f6b5f59aaa7b10fd9d3281ab699485_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        // line 9
        echo "
    <div class=\"table-responsive\">
        <table id=\"customers2\" class=\"table datatable\">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Description</th>
                    <th>Annee</th>
                    <th>Nombre d'èléves</th>
                    <th>Responsable</th>
                    <th>";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("edit"), "html", null, true);
        echo "</th>
                    <th>";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("delete"), "html", null, true);
        echo "</th>
                    <th>Affecter Profs</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "ecole", array()), "classes", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["classe"]) {
            // line 26
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
            // line 27
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["classe"], "nom", array())), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["classe"], "description", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["classe"], "annee", array()), "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["classe"], "annee", array()), "niveau", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 30
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["classe"], "eleves", array())), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["classe"], "responsable", array()), "nom", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editClasse", array("id" => $this->getAttribute($context["classe"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-pencil-square-o\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("removeClasse", array("id" => $this->getAttribute($context["classe"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-trash\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("affectProf", array("id" => $this->getAttribute($context["classe"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-user-plus\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['classe'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "            </tbody>
        </table>                                    
    </div>
    
";
        
        $__internal_91cfbb91e865fcff8fa92f9b68f60d7ab3f6b5f59aaa7b10fd9d3281ab699485->leave($__internal_91cfbb91e865fcff8fa92f9b68f60d7ab3f6b5f59aaa7b10fd9d3281ab699485_prof);

        
        $__internal_cd1bde5477a5b0590ebab1b9cac1afe1e41a2c9144e1343f275797a3386246d9->leave($__internal_cd1bde5477a5b0590ebab1b9cac1afe1e41a2c9144e1343f275797a3386246d9_prof);

    }

    public function getTemplateName()
    {
        return "classesViews/listClasses.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 49,  144 => 43,  136 => 38,  128 => 33,  123 => 31,  119 => 30,  113 => 29,  109 => 28,  105 => 27,  102 => 26,  98 => 25,  90 => 20,  86 => 19,  74 => 9,  65 => 8,  50 => 4,  41 => 3,  11 => 1,);
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
\t{{'list'|trans}} {{'classe'|trans}}
{% endblock %}


{% block bodyList %}

    <div class=\"table-responsive\">
        <table id=\"customers2\" class=\"table datatable\">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Description</th>
                    <th>Annee</th>
                    <th>Nombre d'èléves</th>
                    <th>Responsable</th>
                    <th>{{'edit'|trans}}</th>
                    <th>{{'delete'|trans}}</th>
                    <th>Affecter Profs</th>
                </tr>
            </thead>
            <tbody>
                {% for classe in app.user.ecole.classes%}
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>{{ classe.nom|upper}}</td>
\t\t\t\t\t\t<td>{{ classe.description}}</td>
\t\t\t\t\t\t<td>{{ classe.annee.nom}} {{ classe.annee.niveau}}</td>
\t\t\t\t\t\t<td>{{ classe.eleves|length}}</td>
\t\t\t\t\t\t<td>{{ classe.responsable.nom}}</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"{{ path('editClasse',{'id':classe.id})}}\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-pencil-square-o\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"{{ path('removeClasse',{'id':classe.id})}}\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-trash\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"{{ path('affectProf',{'id':classe.id})}}\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-user-plus\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
                {% endfor %}
            </tbody>
        </table>                                    
    </div>
    
{% endblock %}  ", "classesViews/listClasses.html.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\app\\Resources\\views\\classesViews\\listClasses.html.twig");
    }
}
