<?php

/* :sallesViews:listSalles.html.twig */
class __TwigTemplate_32f4fe17c0405e9a2b5438ddc3491a4598ff1081bfe12b1d1cf17152dbb191a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseList.html.twig", ":sallesViews:listSalles.html.twig", 1);
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
        $__internal_3698801f069de8073b38e962b7bda3eab8e5b5fc67533510cf07bad46030e8e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3698801f069de8073b38e962b7bda3eab8e5b5fc67533510cf07bad46030e8e9->enter($__internal_3698801f069de8073b38e962b7bda3eab8e5b5fc67533510cf07bad46030e8e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":sallesViews:listSalles.html.twig"));

        $__internal_f41b9a66f5c824a8223425148f472f34a9f94b02b6b8d38ec3c4a220f7839103 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f41b9a66f5c824a8223425148f472f34a9f94b02b6b8d38ec3c4a220f7839103->enter($__internal_f41b9a66f5c824a8223425148f472f34a9f94b02b6b8d38ec3c4a220f7839103_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":sallesViews:listSalles.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3698801f069de8073b38e962b7bda3eab8e5b5fc67533510cf07bad46030e8e9->leave($__internal_3698801f069de8073b38e962b7bda3eab8e5b5fc67533510cf07bad46030e8e9_prof);

        
        $__internal_f41b9a66f5c824a8223425148f472f34a9f94b02b6b8d38ec3c4a220f7839103->leave($__internal_f41b9a66f5c824a8223425148f472f34a9f94b02b6b8d38ec3c4a220f7839103_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_081ea6e18942ba3579362a698713e7f3f916c1a793f0819718916ab3043a52a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_081ea6e18942ba3579362a698713e7f3f916c1a793f0819718916ab3043a52a9->enter($__internal_081ea6e18942ba3579362a698713e7f3f916c1a793f0819718916ab3043a52a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a9ae487c812f8f51189c1b9aa3ce4946b8836ba206017d62b2055e89bc730ef9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9ae487c812f8f51189c1b9aa3ce4946b8836ba206017d62b2055e89bc730ef9->enter($__internal_a9ae487c812f8f51189c1b9aa3ce4946b8836ba206017d62b2055e89bc730ef9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\t";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("salles"), "html", null, true);
        echo "
";
        
        $__internal_a9ae487c812f8f51189c1b9aa3ce4946b8836ba206017d62b2055e89bc730ef9->leave($__internal_a9ae487c812f8f51189c1b9aa3ce4946b8836ba206017d62b2055e89bc730ef9_prof);

        
        $__internal_081ea6e18942ba3579362a698713e7f3f916c1a793f0819718916ab3043a52a9->leave($__internal_081ea6e18942ba3579362a698713e7f3f916c1a793f0819718916ab3043a52a9_prof);

    }

    // line 8
    public function block_bodyList($context, array $blocks = array())
    {
        $__internal_789b3d97983ac2b814de8fd934dffe1efaf844f37984e68f7d3c24dd8502a11d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_789b3d97983ac2b814de8fd934dffe1efaf844f37984e68f7d3c24dd8502a11d->enter($__internal_789b3d97983ac2b814de8fd934dffe1efaf844f37984e68f7d3c24dd8502a11d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        $__internal_8e7e1db63ee6ff720074815bb189b6f2f310fa7f75c3e524e596af8d6d83b3fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e7e1db63ee6ff720074815bb189b6f2f310fa7f75c3e524e596af8d6d83b3fb->enter($__internal_8e7e1db63ee6ff720074815bb189b6f2f310fa7f75c3e524e596af8d6d83b3fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        // line 9
        echo "
    <div class=\"table-responsive\">
        <table id=\"customers2\" class=\"table datatable\">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Capacité</th>
                    <th>Equipements</th>
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "ecole", array()), "salles", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["salle"]) {
            // line 23
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
            // line 24
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["salle"], "nom", array())), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["salle"], "capacite", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["salle"], "equipement", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editSalle", array("id" => $this->getAttribute($context["salle"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-pencil-square-o\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("removeSalle", array("id" => $this->getAttribute($context["salle"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-trash\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['salle'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "            </tbody>
        </table>                                    
    </div>
    
";
        
        $__internal_8e7e1db63ee6ff720074815bb189b6f2f310fa7f75c3e524e596af8d6d83b3fb->leave($__internal_8e7e1db63ee6ff720074815bb189b6f2f310fa7f75c3e524e596af8d6d83b3fb_prof);

        
        $__internal_789b3d97983ac2b814de8fd934dffe1efaf844f37984e68f7d3c24dd8502a11d->leave($__internal_789b3d97983ac2b814de8fd934dffe1efaf844f37984e68f7d3c24dd8502a11d_prof);

    }

    public function getTemplateName()
    {
        return ":sallesViews:listSalles.html.twig";
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
\t{{'list'|trans}} {{'salles'|trans}}
{% endblock %}


{% block bodyList %}

    <div class=\"table-responsive\">
        <table id=\"customers2\" class=\"table datatable\">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Capacité</th>
                    <th>Equipements</th>
                    <th>{{'edit'|trans}}</th>
                    <th>{{'delete'|trans}}</th>
                </tr>
            </thead>
            <tbody>
                {% for salle in app.user.ecole.salles%}
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>{{ salle.nom|upper}}</td>
\t\t\t\t\t\t<td>{{ salle.capacite}}</td>
\t\t\t\t\t\t<td>{{ salle.equipement}}</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"{{ path('editSalle',{'id':salle.id})}}\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-pencil-square-o\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"{{ path('removeSalle',{'id':salle.id})}}\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-trash\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
                {% endfor %}
            </tbody>
        </table>                                    
    </div>
    
{% endblock %}  ", ":sallesViews:listSalles.html.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\app/Resources\\views/sallesViews/listSalles.html.twig");
    }
}
