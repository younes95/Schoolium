<?php

/* :menusViews:listMenus.html.twig */
class __TwigTemplate_2be886a7e6ceb572bf3fc1a9d0a8a0cedb350736374e45f96fbf64b0d3760aed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseList.html.twig", ":menusViews:listMenus.html.twig", 1);
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
        $__internal_2b90c854abfea3afdaf35578e06962e6268fabc0b259992146d3fac821738ad5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b90c854abfea3afdaf35578e06962e6268fabc0b259992146d3fac821738ad5->enter($__internal_2b90c854abfea3afdaf35578e06962e6268fabc0b259992146d3fac821738ad5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":menusViews:listMenus.html.twig"));

        $__internal_261c0bc36398f0ed8085c180ac3a37795976fef024b2be1584c37a148f85bc4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_261c0bc36398f0ed8085c180ac3a37795976fef024b2be1584c37a148f85bc4a->enter($__internal_261c0bc36398f0ed8085c180ac3a37795976fef024b2be1584c37a148f85bc4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":menusViews:listMenus.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b90c854abfea3afdaf35578e06962e6268fabc0b259992146d3fac821738ad5->leave($__internal_2b90c854abfea3afdaf35578e06962e6268fabc0b259992146d3fac821738ad5_prof);

        
        $__internal_261c0bc36398f0ed8085c180ac3a37795976fef024b2be1584c37a148f85bc4a->leave($__internal_261c0bc36398f0ed8085c180ac3a37795976fef024b2be1584c37a148f85bc4a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_77babef81da201f51e4ea0bd1572c7823ff9b80d19c19a885d1155ac8a11c8a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77babef81da201f51e4ea0bd1572c7823ff9b80d19c19a885d1155ac8a11c8a9->enter($__internal_77babef81da201f51e4ea0bd1572c7823ff9b80d19c19a885d1155ac8a11c8a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_33f4837df8f371558cd032f6cf8152c0ecde85fca2633c6648cb09cec9f964c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33f4837df8f371558cd032f6cf8152c0ecde85fca2633c6648cb09cec9f964c0->enter($__internal_33f4837df8f371558cd032f6cf8152c0ecde85fca2633c6648cb09cec9f964c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\t";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("menues"), "html", null, true);
        echo "
";
        
        $__internal_33f4837df8f371558cd032f6cf8152c0ecde85fca2633c6648cb09cec9f964c0->leave($__internal_33f4837df8f371558cd032f6cf8152c0ecde85fca2633c6648cb09cec9f964c0_prof);

        
        $__internal_77babef81da201f51e4ea0bd1572c7823ff9b80d19c19a885d1155ac8a11c8a9->leave($__internal_77babef81da201f51e4ea0bd1572c7823ff9b80d19c19a885d1155ac8a11c8a9_prof);

    }

    // line 8
    public function block_bodyList($context, array $blocks = array())
    {
        $__internal_cc4c0ce168c15a8f4b8501b968c564772323fe62b1c3d70cdb8888e98b135101 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc4c0ce168c15a8f4b8501b968c564772323fe62b1c3d70cdb8888e98b135101->enter($__internal_cc4c0ce168c15a8f4b8501b968c564772323fe62b1c3d70cdb8888e98b135101_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        $__internal_6c8fe8fc38b6f4c8e3ec8922e700a38848d57395e3cdc7595ed4d6ee97a5a747 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c8fe8fc38b6f4c8e3ec8922e700a38848d57395e3cdc7595ed4d6ee97a5a747->enter($__internal_6c8fe8fc38b6f4c8e3ec8922e700a38848d57395e3cdc7595ed4d6ee97a5a747_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        // line 9
        echo "
    <div class=\"table-responsive\">
        <table id=\"customers2\" class=\"table datatable\">
            <thead>
                <tr>
                \t<th>ID</th>
                    <th>Jour</th>
                    <th>Menu</th>
                    <th>";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("edit"), "html", null, true);
        echo "</th>
                    <th>";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("delete"), "html", null, true);
        echo "</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "ecole", array()), "menus", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
            // line 23
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "id", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "jour", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "menu", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editMenu", array("id" => $this->getAttribute($context["menu"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-pencil-square-o\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("removeMenu", array("id" => $this->getAttribute($context["menu"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-trash\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "            </tbody>
        </table>                                    
    </div>
    
";
        
        $__internal_6c8fe8fc38b6f4c8e3ec8922e700a38848d57395e3cdc7595ed4d6ee97a5a747->leave($__internal_6c8fe8fc38b6f4c8e3ec8922e700a38848d57395e3cdc7595ed4d6ee97a5a747_prof);

        
        $__internal_cc4c0ce168c15a8f4b8501b968c564772323fe62b1c3d70cdb8888e98b135101->leave($__internal_cc4c0ce168c15a8f4b8501b968c564772323fe62b1c3d70cdb8888e98b135101_prof);

    }

    public function getTemplateName()
    {
        return ":menusViews:listMenus.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 39,  123 => 33,  115 => 28,  110 => 26,  106 => 25,  102 => 24,  99 => 23,  95 => 22,  88 => 18,  84 => 17,  74 => 9,  65 => 8,  50 => 4,  41 => 3,  11 => 1,);
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
\t{{'list'|trans}} {{'menues'|trans}}
{% endblock %}


{% block bodyList %}

    <div class=\"table-responsive\">
        <table id=\"customers2\" class=\"table datatable\">
            <thead>
                <tr>
                \t<th>ID</th>
                    <th>Jour</th>
                    <th>Menu</th>
                    <th>{{'edit'|trans}}</th>
                    <th>{{'delete'|trans}}</th>
                </tr>
            </thead>
            <tbody>
                {% for menu in app.user.ecole.menus %}
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>{{ menu.id}}</td>
\t\t\t\t\t\t<td>{{ menu.jour}}</td>
\t\t\t\t\t\t<td>{{ menu.menu}}</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"{{ path('editMenu',{'id':menu.id})}}\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-pencil-square-o\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"{{ path('removeMenu',{'id':menu.id})}}\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-trash\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
                {% endfor %}
            </tbody>
        </table>                                    
    </div>
    
{% endblock %}  ", ":menusViews:listMenus.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/views/menusViews/listMenus.html.twig");
    }
}
