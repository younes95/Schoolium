<?php

/* elevesViews/listEleves.html.twig */
class __TwigTemplate_360b328b9cc3138159d845798057d37d1c7eeba2afeed355622cf14121838cc1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseList.html.twig", "elevesViews/listEleves.html.twig", 1);
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
        $__internal_9655554328cbbf45ad49619ed2a4d7d5fc462ed10861b686e8c7ab206882d62d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9655554328cbbf45ad49619ed2a4d7d5fc462ed10861b686e8c7ab206882d62d->enter($__internal_9655554328cbbf45ad49619ed2a4d7d5fc462ed10861b686e8c7ab206882d62d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "elevesViews/listEleves.html.twig"));

        $__internal_cbe858f025e7d46fe76e345e9027c32ae1731674a53dc6ca059056b4ab743fc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbe858f025e7d46fe76e345e9027c32ae1731674a53dc6ca059056b4ab743fc4->enter($__internal_cbe858f025e7d46fe76e345e9027c32ae1731674a53dc6ca059056b4ab743fc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "elevesViews/listEleves.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9655554328cbbf45ad49619ed2a4d7d5fc462ed10861b686e8c7ab206882d62d->leave($__internal_9655554328cbbf45ad49619ed2a4d7d5fc462ed10861b686e8c7ab206882d62d_prof);

        
        $__internal_cbe858f025e7d46fe76e345e9027c32ae1731674a53dc6ca059056b4ab743fc4->leave($__internal_cbe858f025e7d46fe76e345e9027c32ae1731674a53dc6ca059056b4ab743fc4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0e6cf277bec8d77fca0399427e1ec6ff6d15ca3d3e91f0c6dfa4dcdde7285c59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e6cf277bec8d77fca0399427e1ec6ff6d15ca3d3e91f0c6dfa4dcdde7285c59->enter($__internal_0e6cf277bec8d77fca0399427e1ec6ff6d15ca3d3e91f0c6dfa4dcdde7285c59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_871ba3601ae91b2b35a49b4cab746dcf5abecb9a556da5412be526f589c9b88c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_871ba3601ae91b2b35a49b4cab746dcf5abecb9a556da5412be526f589c9b88c->enter($__internal_871ba3601ae91b2b35a49b4cab746dcf5abecb9a556da5412be526f589c9b88c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\t";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("students"), "html", null, true);
        echo "
";
        
        $__internal_871ba3601ae91b2b35a49b4cab746dcf5abecb9a556da5412be526f589c9b88c->leave($__internal_871ba3601ae91b2b35a49b4cab746dcf5abecb9a556da5412be526f589c9b88c_prof);

        
        $__internal_0e6cf277bec8d77fca0399427e1ec6ff6d15ca3d3e91f0c6dfa4dcdde7285c59->leave($__internal_0e6cf277bec8d77fca0399427e1ec6ff6d15ca3d3e91f0c6dfa4dcdde7285c59_prof);

    }

    // line 7
    public function block_bodyList($context, array $blocks = array())
    {
        $__internal_c2ea956c7c86eee8d6d9c177f0de3954405fac5d8400d43be383279eb35803e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2ea956c7c86eee8d6d9c177f0de3954405fac5d8400d43be383279eb35803e8->enter($__internal_c2ea956c7c86eee8d6d9c177f0de3954405fac5d8400d43be383279eb35803e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        $__internal_087422fadbc4f86b04036dee95cfd0532e9408d0f92d5d695b683af78ad9b91f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_087422fadbc4f86b04036dee95cfd0532e9408d0f92d5d695b683af78ad9b91f->enter($__internal_087422fadbc4f86b04036dee95cfd0532e9408d0f92d5d695b683af78ad9b91f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        // line 8
        echo "
    <div class=\"table-responsive\">
        <table id=\"customers2\" class=\"table datatable\">
            <thead>
                <tr>
                    <th>Nom & Prenom</th>
                    <th>Age</th>
                    <th>Annee</th>
                    <th>";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("edit"), "html", null, true);
        echo "</th>
                    <th>";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("delete"), "html", null, true);
        echo "</th>
                    <th>";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile"), "html", null, true);
        echo "</th>
                    <th>";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("parent"), "html", null, true);
        echo "</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "ecole", array()), "eleves", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["eleve"]) {
            // line 24
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
            // line 25
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["eleve"], "nom", array())), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["eleve"], "prenom", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 26
            echo twig_escape_filter($this->env, (twig_date_format_filter($this->env, "now", "Y") - twig_date_format_filter($this->env, $this->getAttribute($context["eleve"], "dateDeNaissance", array()), "Y")), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["eleve"], "annee", array()), "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["eleve"], "annee", array()), "niveau", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editEleve", array("id" => $this->getAttribute($context["eleve"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-pencil-square-o\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("removeEleve", array("id" => $this->getAttribute($context["eleve"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-trash\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profileEleve", array("id" => $this->getAttribute($context["eleve"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-user\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("parentEleve", array("id" => $this->getAttribute($context["eleve"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-male\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['eleve'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "            </tbody>
        </table>                                    
    </div>
    
";
        
        $__internal_087422fadbc4f86b04036dee95cfd0532e9408d0f92d5d695b683af78ad9b91f->leave($__internal_087422fadbc4f86b04036dee95cfd0532e9408d0f92d5d695b683af78ad9b91f_prof);

        
        $__internal_c2ea956c7c86eee8d6d9c177f0de3954405fac5d8400d43be383279eb35803e8->leave($__internal_c2ea956c7c86eee8d6d9c177f0de3954405fac5d8400d43be383279eb35803e8_prof);

    }

    public function getTemplateName()
    {
        return "elevesViews/listEleves.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 50,  151 => 44,  143 => 39,  135 => 34,  127 => 29,  120 => 27,  116 => 26,  110 => 25,  107 => 24,  103 => 23,  96 => 19,  92 => 18,  88 => 17,  84 => 16,  74 => 8,  65 => 7,  50 => 4,  41 => 3,  11 => 1,);
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

    <div class=\"table-responsive\">
        <table id=\"customers2\" class=\"table datatable\">
            <thead>
                <tr>
                    <th>Nom & Prenom</th>
                    <th>Age</th>
                    <th>Annee</th>
                    <th>{{'edit'|trans}}</th>
                    <th>{{'delete'|trans}}</th>
                    <th>{{'profile'|trans}}</th>
                    <th>{{'parent'|trans}}</th>
                </tr>
            </thead>
            <tbody>
                {% for eleve in app.user.ecole.eleves %}
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>{{ eleve.nom|upper}} {{ eleve.prenom}}</td>
\t\t\t\t\t\t<td>{{ (\"now\"|date(\"Y\"))-( eleve.dateDeNaissance|date(\"Y\"))}}</td>
\t\t\t\t\t\t<td>{{ eleve.annee.nom}} {{ eleve.annee.niveau}}</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"{{ path('editEleve',{'id':eleve.id})}}\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-pencil-square-o\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"{{ path('removeEleve',{'id':eleve.id})}}\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-trash\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"{{ path('profileEleve',{'id':eleve.id})}}\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-user\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"{{ path('parentEleve',{'id':eleve.id})}}\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-male\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
                {% endfor %}
            </tbody>
        </table>                                    
    </div>
    
{% endblock %}               ", "elevesViews/listEleves.html.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\app\\Resources\\views\\elevesViews\\listEleves.html.twig");
    }
}
