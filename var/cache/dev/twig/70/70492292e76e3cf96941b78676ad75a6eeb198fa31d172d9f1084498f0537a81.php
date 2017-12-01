<?php

/* sallesViews/listSalles.html.twig */
class __TwigTemplate_c4cb3b697b7a68899ce7927b86e6a74d870c2d29293cb13f2d694884a31a9655 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseList.html.twig", "sallesViews/listSalles.html.twig", 1);
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
        $__internal_daed3881948d4a20e956a57ae2ace67858c5ba06140869ca6dead1003cf6e44a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_daed3881948d4a20e956a57ae2ace67858c5ba06140869ca6dead1003cf6e44a->enter($__internal_daed3881948d4a20e956a57ae2ace67858c5ba06140869ca6dead1003cf6e44a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "sallesViews/listSalles.html.twig"));

        $__internal_ec71d5473660fd3bc534bf204e54c4a3a7809df21edca5f2bd55f67b9ce33f9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec71d5473660fd3bc534bf204e54c4a3a7809df21edca5f2bd55f67b9ce33f9c->enter($__internal_ec71d5473660fd3bc534bf204e54c4a3a7809df21edca5f2bd55f67b9ce33f9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "sallesViews/listSalles.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_daed3881948d4a20e956a57ae2ace67858c5ba06140869ca6dead1003cf6e44a->leave($__internal_daed3881948d4a20e956a57ae2ace67858c5ba06140869ca6dead1003cf6e44a_prof);

        
        $__internal_ec71d5473660fd3bc534bf204e54c4a3a7809df21edca5f2bd55f67b9ce33f9c->leave($__internal_ec71d5473660fd3bc534bf204e54c4a3a7809df21edca5f2bd55f67b9ce33f9c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_639e32958c7eea1b0a5a4e995907009dbf42e1534a71ef2fc03007a74e887fb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_639e32958c7eea1b0a5a4e995907009dbf42e1534a71ef2fc03007a74e887fb6->enter($__internal_639e32958c7eea1b0a5a4e995907009dbf42e1534a71ef2fc03007a74e887fb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b7930593e8f31937841204c95f8e852611feda1d3fb46e153e4cf6a8a8063b2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7930593e8f31937841204c95f8e852611feda1d3fb46e153e4cf6a8a8063b2d->enter($__internal_b7930593e8f31937841204c95f8e852611feda1d3fb46e153e4cf6a8a8063b2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\t";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("salles"), "html", null, true);
        echo "
";
        
        $__internal_b7930593e8f31937841204c95f8e852611feda1d3fb46e153e4cf6a8a8063b2d->leave($__internal_b7930593e8f31937841204c95f8e852611feda1d3fb46e153e4cf6a8a8063b2d_prof);

        
        $__internal_639e32958c7eea1b0a5a4e995907009dbf42e1534a71ef2fc03007a74e887fb6->leave($__internal_639e32958c7eea1b0a5a4e995907009dbf42e1534a71ef2fc03007a74e887fb6_prof);

    }

    // line 8
    public function block_bodyList($context, array $blocks = array())
    {
        $__internal_1188a32b06cd782339e6c50b305778d7f2d8b5ebe00337b7e1437d8c69850723 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1188a32b06cd782339e6c50b305778d7f2d8b5ebe00337b7e1437d8c69850723->enter($__internal_1188a32b06cd782339e6c50b305778d7f2d8b5ebe00337b7e1437d8c69850723_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        $__internal_d24d6ee53c95030047e2d2e897210ef109a904ea88b9a17ed23251c544e1d945 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d24d6ee53c95030047e2d2e897210ef109a904ea88b9a17ed23251c544e1d945->enter($__internal_d24d6ee53c95030047e2d2e897210ef109a904ea88b9a17ed23251c544e1d945_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

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
        
        $__internal_d24d6ee53c95030047e2d2e897210ef109a904ea88b9a17ed23251c544e1d945->leave($__internal_d24d6ee53c95030047e2d2e897210ef109a904ea88b9a17ed23251c544e1d945_prof);

        
        $__internal_1188a32b06cd782339e6c50b305778d7f2d8b5ebe00337b7e1437d8c69850723->leave($__internal_1188a32b06cd782339e6c50b305778d7f2d8b5ebe00337b7e1437d8c69850723_prof);

    }

    public function getTemplateName()
    {
        return "sallesViews/listSalles.html.twig";
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
    
{% endblock %}  ", "sallesViews/listSalles.html.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\app\\Resources\\views\\sallesViews\\listSalles.html.twig");
    }
}
