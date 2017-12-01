<?php

/* :elevesViews:listEleves.html.twig */
class __TwigTemplate_925e502c932bd11307fd69df44495a03b9d77dd9424084ec4b1a7656b59f6457 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseList.html.twig", ":elevesViews:listEleves.html.twig", 1);
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
        $__internal_4e49b3e7de728b498e2726a1011fc9780b23afd956c5c7f2b02806488628c070 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e49b3e7de728b498e2726a1011fc9780b23afd956c5c7f2b02806488628c070->enter($__internal_4e49b3e7de728b498e2726a1011fc9780b23afd956c5c7f2b02806488628c070_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":elevesViews:listEleves.html.twig"));

        $__internal_6b70a64faa86da161e73218f2a055adb423964bb26ddf356491a8d56b4cf3fc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b70a64faa86da161e73218f2a055adb423964bb26ddf356491a8d56b4cf3fc3->enter($__internal_6b70a64faa86da161e73218f2a055adb423964bb26ddf356491a8d56b4cf3fc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":elevesViews:listEleves.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e49b3e7de728b498e2726a1011fc9780b23afd956c5c7f2b02806488628c070->leave($__internal_4e49b3e7de728b498e2726a1011fc9780b23afd956c5c7f2b02806488628c070_prof);

        
        $__internal_6b70a64faa86da161e73218f2a055adb423964bb26ddf356491a8d56b4cf3fc3->leave($__internal_6b70a64faa86da161e73218f2a055adb423964bb26ddf356491a8d56b4cf3fc3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1fddfafd398647a4d6b5c09d5d1a3e0e89643e2aa4db10b39c0b1e8a1c2e3949 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fddfafd398647a4d6b5c09d5d1a3e0e89643e2aa4db10b39c0b1e8a1c2e3949->enter($__internal_1fddfafd398647a4d6b5c09d5d1a3e0e89643e2aa4db10b39c0b1e8a1c2e3949_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_20a3b0cc58e90c0cc7a2a32fe395870808d31215469666d508553d02fb20b669 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20a3b0cc58e90c0cc7a2a32fe395870808d31215469666d508553d02fb20b669->enter($__internal_20a3b0cc58e90c0cc7a2a32fe395870808d31215469666d508553d02fb20b669_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\t";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("students"), "html", null, true);
        echo "
";
        
        $__internal_20a3b0cc58e90c0cc7a2a32fe395870808d31215469666d508553d02fb20b669->leave($__internal_20a3b0cc58e90c0cc7a2a32fe395870808d31215469666d508553d02fb20b669_prof);

        
        $__internal_1fddfafd398647a4d6b5c09d5d1a3e0e89643e2aa4db10b39c0b1e8a1c2e3949->leave($__internal_1fddfafd398647a4d6b5c09d5d1a3e0e89643e2aa4db10b39c0b1e8a1c2e3949_prof);

    }

    // line 7
    public function block_bodyList($context, array $blocks = array())
    {
        $__internal_8cbcffe1933138e808a83ed8d7d898c436b5723a1c2833e1fb5f4edc3ed1abc0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cbcffe1933138e808a83ed8d7d898c436b5723a1c2833e1fb5f4edc3ed1abc0->enter($__internal_8cbcffe1933138e808a83ed8d7d898c436b5723a1c2833e1fb5f4edc3ed1abc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        $__internal_39f4c003217dc16a2bb2e3fb4142c3f188cb37837c813003a2825a1f7599df3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39f4c003217dc16a2bb2e3fb4142c3f188cb37837c813003a2825a1f7599df3e->enter($__internal_39f4c003217dc16a2bb2e3fb4142c3f188cb37837c813003a2825a1f7599df3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

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
        
        $__internal_39f4c003217dc16a2bb2e3fb4142c3f188cb37837c813003a2825a1f7599df3e->leave($__internal_39f4c003217dc16a2bb2e3fb4142c3f188cb37837c813003a2825a1f7599df3e_prof);

        
        $__internal_8cbcffe1933138e808a83ed8d7d898c436b5723a1c2833e1fb5f4edc3ed1abc0->leave($__internal_8cbcffe1933138e808a83ed8d7d898c436b5723a1c2833e1fb5f4edc3ed1abc0_prof);

    }

    public function getTemplateName()
    {
        return ":elevesViews:listEleves.html.twig";
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
    
{% endblock %}               ", ":elevesViews:listEleves.html.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\app/Resources\\views/elevesViews/listEleves.html.twig");
    }
}
