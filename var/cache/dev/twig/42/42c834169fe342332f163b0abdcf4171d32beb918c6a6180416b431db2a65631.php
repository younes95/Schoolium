<?php

/* :menusViews:listMenus.html.twig */
class __TwigTemplate_6aaa21c3ef1b020eaf2219216a1e4be948e6b642607e7b1aa3fda6f39cdfcca2 extends Twig_Template
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
        $__internal_a78bea612c9493d788e3e620e77748fbe9fd6c0019d77a3840bc100e92c44cb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a78bea612c9493d788e3e620e77748fbe9fd6c0019d77a3840bc100e92c44cb0->enter($__internal_a78bea612c9493d788e3e620e77748fbe9fd6c0019d77a3840bc100e92c44cb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":menusViews:listMenus.html.twig"));

        $__internal_d769387f78a6d36119ca998e50b1f1f22c0dbe809cf6474dccabdada140f67d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d769387f78a6d36119ca998e50b1f1f22c0dbe809cf6474dccabdada140f67d8->enter($__internal_d769387f78a6d36119ca998e50b1f1f22c0dbe809cf6474dccabdada140f67d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":menusViews:listMenus.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a78bea612c9493d788e3e620e77748fbe9fd6c0019d77a3840bc100e92c44cb0->leave($__internal_a78bea612c9493d788e3e620e77748fbe9fd6c0019d77a3840bc100e92c44cb0_prof);

        
        $__internal_d769387f78a6d36119ca998e50b1f1f22c0dbe809cf6474dccabdada140f67d8->leave($__internal_d769387f78a6d36119ca998e50b1f1f22c0dbe809cf6474dccabdada140f67d8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a043b55285ebda737e53b57013c75c07dfcd15a70f697a412676162c2cc75e83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a043b55285ebda737e53b57013c75c07dfcd15a70f697a412676162c2cc75e83->enter($__internal_a043b55285ebda737e53b57013c75c07dfcd15a70f697a412676162c2cc75e83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_88f391b69dce0999997e53125973ce94c6d8b8621f390e4b38519f2b56b25147 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88f391b69dce0999997e53125973ce94c6d8b8621f390e4b38519f2b56b25147->enter($__internal_88f391b69dce0999997e53125973ce94c6d8b8621f390e4b38519f2b56b25147_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\t";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("menues"), "html", null, true);
        echo "
";
        
        $__internal_88f391b69dce0999997e53125973ce94c6d8b8621f390e4b38519f2b56b25147->leave($__internal_88f391b69dce0999997e53125973ce94c6d8b8621f390e4b38519f2b56b25147_prof);

        
        $__internal_a043b55285ebda737e53b57013c75c07dfcd15a70f697a412676162c2cc75e83->leave($__internal_a043b55285ebda737e53b57013c75c07dfcd15a70f697a412676162c2cc75e83_prof);

    }

    // line 8
    public function block_bodyList($context, array $blocks = array())
    {
        $__internal_34d5f931ed8b60c31715fae9981e5e95903cbf1ec973a77a8bbc0af21802d78a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34d5f931ed8b60c31715fae9981e5e95903cbf1ec973a77a8bbc0af21802d78a->enter($__internal_34d5f931ed8b60c31715fae9981e5e95903cbf1ec973a77a8bbc0af21802d78a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        $__internal_fde8de4e65f3e61bfebaeb3a5497ad1df818b49d7a50fb12e125e39342f13696 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fde8de4e65f3e61bfebaeb3a5497ad1df818b49d7a50fb12e125e39342f13696->enter($__internal_fde8de4e65f3e61bfebaeb3a5497ad1df818b49d7a50fb12e125e39342f13696_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

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
        
        $__internal_fde8de4e65f3e61bfebaeb3a5497ad1df818b49d7a50fb12e125e39342f13696->leave($__internal_fde8de4e65f3e61bfebaeb3a5497ad1df818b49d7a50fb12e125e39342f13696_prof);

        
        $__internal_34d5f931ed8b60c31715fae9981e5e95903cbf1ec973a77a8bbc0af21802d78a->leave($__internal_34d5f931ed8b60c31715fae9981e5e95903cbf1ec973a77a8bbc0af21802d78a_prof);

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
    
{% endblock %}  ", ":menusViews:listMenus.html.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\app/Resources\\views/menusViews/listMenus.html.twig");
    }
}
