<?php

/* menusViews/listMenus.html.twig */
class __TwigTemplate_6e70678598af5e3493ac669cb4665bba39aeb6a86bfb11480c91415947708c53 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseList.html.twig", "menusViews/listMenus.html.twig", 1);
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
        $__internal_be46e0ca5f69d6ce2abf4eae1c598ff3ddba74b2c1777c63eb82e7e124948a51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be46e0ca5f69d6ce2abf4eae1c598ff3ddba74b2c1777c63eb82e7e124948a51->enter($__internal_be46e0ca5f69d6ce2abf4eae1c598ff3ddba74b2c1777c63eb82e7e124948a51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "menusViews/listMenus.html.twig"));

        $__internal_500f552b33b99cd76fbf6ab266b45667f1aa0c15f1159d299048bfdc580159ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_500f552b33b99cd76fbf6ab266b45667f1aa0c15f1159d299048bfdc580159ff->enter($__internal_500f552b33b99cd76fbf6ab266b45667f1aa0c15f1159d299048bfdc580159ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "menusViews/listMenus.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be46e0ca5f69d6ce2abf4eae1c598ff3ddba74b2c1777c63eb82e7e124948a51->leave($__internal_be46e0ca5f69d6ce2abf4eae1c598ff3ddba74b2c1777c63eb82e7e124948a51_prof);

        
        $__internal_500f552b33b99cd76fbf6ab266b45667f1aa0c15f1159d299048bfdc580159ff->leave($__internal_500f552b33b99cd76fbf6ab266b45667f1aa0c15f1159d299048bfdc580159ff_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c4db84e3b980b4fe4f848d43ccde10adb6c4f9f50e82a26336e2e98b2f5f74e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4db84e3b980b4fe4f848d43ccde10adb6c4f9f50e82a26336e2e98b2f5f74e1->enter($__internal_c4db84e3b980b4fe4f848d43ccde10adb6c4f9f50e82a26336e2e98b2f5f74e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_10d002fdbf62bf86218502ea45ea4803005bf7c52337c1112d64f437eeaf33eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10d002fdbf62bf86218502ea45ea4803005bf7c52337c1112d64f437eeaf33eb->enter($__internal_10d002fdbf62bf86218502ea45ea4803005bf7c52337c1112d64f437eeaf33eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\t";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("menues"), "html", null, true);
        echo "
";
        
        $__internal_10d002fdbf62bf86218502ea45ea4803005bf7c52337c1112d64f437eeaf33eb->leave($__internal_10d002fdbf62bf86218502ea45ea4803005bf7c52337c1112d64f437eeaf33eb_prof);

        
        $__internal_c4db84e3b980b4fe4f848d43ccde10adb6c4f9f50e82a26336e2e98b2f5f74e1->leave($__internal_c4db84e3b980b4fe4f848d43ccde10adb6c4f9f50e82a26336e2e98b2f5f74e1_prof);

    }

    // line 8
    public function block_bodyList($context, array $blocks = array())
    {
        $__internal_5e4e104c5cef8dfc92792eae86f3897cc34cb8a5542d258900fd0d549b2d2b99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e4e104c5cef8dfc92792eae86f3897cc34cb8a5542d258900fd0d549b2d2b99->enter($__internal_5e4e104c5cef8dfc92792eae86f3897cc34cb8a5542d258900fd0d549b2d2b99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        $__internal_63795d80765a791fce5da39a7e8db560872bda2c630e69102c240908a38be591 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63795d80765a791fce5da39a7e8db560872bda2c630e69102c240908a38be591->enter($__internal_63795d80765a791fce5da39a7e8db560872bda2c630e69102c240908a38be591_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

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
        
        $__internal_63795d80765a791fce5da39a7e8db560872bda2c630e69102c240908a38be591->leave($__internal_63795d80765a791fce5da39a7e8db560872bda2c630e69102c240908a38be591_prof);

        
        $__internal_5e4e104c5cef8dfc92792eae86f3897cc34cb8a5542d258900fd0d549b2d2b99->leave($__internal_5e4e104c5cef8dfc92792eae86f3897cc34cb8a5542d258900fd0d549b2d2b99_prof);

    }

    public function getTemplateName()
    {
        return "menusViews/listMenus.html.twig";
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
    
{% endblock %}  ", "menusViews/listMenus.html.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\app\\Resources\\views\\menusViews\\listMenus.html.twig");
    }
}
