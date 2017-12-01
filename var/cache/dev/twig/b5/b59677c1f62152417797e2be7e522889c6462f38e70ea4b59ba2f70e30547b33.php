<?php

/* :transportsViews:listTransports.html.twig */
class __TwigTemplate_7ce043acbcae663c52c02595723422c083e7a75cb26be6b2143bce573a72507f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseList.html.twig", ":transportsViews:listTransports.html.twig", 1);
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
        $__internal_7b4f744090fcdfd157e44ced34cf5ad152ed17249ffe41a3a988adcee0d4bd7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b4f744090fcdfd157e44ced34cf5ad152ed17249ffe41a3a988adcee0d4bd7a->enter($__internal_7b4f744090fcdfd157e44ced34cf5ad152ed17249ffe41a3a988adcee0d4bd7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":transportsViews:listTransports.html.twig"));

        $__internal_ebe999600ec8c3afceac839cfb304b91d0f9e7eb3dcc9571b09602aa76e19f96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebe999600ec8c3afceac839cfb304b91d0f9e7eb3dcc9571b09602aa76e19f96->enter($__internal_ebe999600ec8c3afceac839cfb304b91d0f9e7eb3dcc9571b09602aa76e19f96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":transportsViews:listTransports.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7b4f744090fcdfd157e44ced34cf5ad152ed17249ffe41a3a988adcee0d4bd7a->leave($__internal_7b4f744090fcdfd157e44ced34cf5ad152ed17249ffe41a3a988adcee0d4bd7a_prof);

        
        $__internal_ebe999600ec8c3afceac839cfb304b91d0f9e7eb3dcc9571b09602aa76e19f96->leave($__internal_ebe999600ec8c3afceac839cfb304b91d0f9e7eb3dcc9571b09602aa76e19f96_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f8d7aafa881f8e62d9db1740953d251e73b70e0886950aaffb459a836b680234 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8d7aafa881f8e62d9db1740953d251e73b70e0886950aaffb459a836b680234->enter($__internal_f8d7aafa881f8e62d9db1740953d251e73b70e0886950aaffb459a836b680234_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_91e6355340ab3a489ced802eb02f19e5ad91110f98612fcb1085308b594db9e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91e6355340ab3a489ced802eb02f19e5ad91110f98612fcb1085308b594db9e8->enter($__internal_91e6355340ab3a489ced802eb02f19e5ad91110f98612fcb1085308b594db9e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\t";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("lignes"), "html", null, true);
        echo "
";
        
        $__internal_91e6355340ab3a489ced802eb02f19e5ad91110f98612fcb1085308b594db9e8->leave($__internal_91e6355340ab3a489ced802eb02f19e5ad91110f98612fcb1085308b594db9e8_prof);

        
        $__internal_f8d7aafa881f8e62d9db1740953d251e73b70e0886950aaffb459a836b680234->leave($__internal_f8d7aafa881f8e62d9db1740953d251e73b70e0886950aaffb459a836b680234_prof);

    }

    // line 8
    public function block_bodyList($context, array $blocks = array())
    {
        $__internal_2e3e7a8be9182b35a52097b8b1a14407ef5e1519ca3a9e7edceec2cbfe5fabad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e3e7a8be9182b35a52097b8b1a14407ef5e1519ca3a9e7edceec2cbfe5fabad->enter($__internal_2e3e7a8be9182b35a52097b8b1a14407ef5e1519ca3a9e7edceec2cbfe5fabad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        $__internal_c968c020db2c1b42870ede93c97d768d52d19b0174bf620fbd99cefbe364ebcd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c968c020db2c1b42870ede93c97d768d52d19b0174bf620fbd99cefbe364ebcd->enter($__internal_c968c020db2c1b42870ede93c97d768d52d19b0174bf620fbd99cefbe364ebcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        // line 9
        echo "
    <div class=\"table-responsive\">
        <table id=\"customers2\" class=\"table datatable\">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Départ</th>
                    <th>Trajet</th>
                    <th>Heure Départ</th>
                    <th>Capacité</th>
                    <th>";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("edit"), "html", null, true);
        echo "</th>
                    <th>";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("delete"), "html", null, true);
        echo "</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "ecole", array()), "transports", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trans"]) {
            // line 25
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
            // line 26
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["trans"], "nom", array())), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["trans"], "depart", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["trans"], "trajet", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 29
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["trans"], "heureDepart", array()), "h:m"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["trans"], "capacite", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editTransport", array("id" => $this->getAttribute($context["trans"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-pencil-square-o\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("removeTransport", array("id" => $this->getAttribute($context["trans"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-trash\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trans'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "            </tbody>
        </table>                                    
    </div>
    
";
        
        $__internal_c968c020db2c1b42870ede93c97d768d52d19b0174bf620fbd99cefbe364ebcd->leave($__internal_c968c020db2c1b42870ede93c97d768d52d19b0174bf620fbd99cefbe364ebcd_prof);

        
        $__internal_2e3e7a8be9182b35a52097b8b1a14407ef5e1519ca3a9e7edceec2cbfe5fabad->leave($__internal_2e3e7a8be9182b35a52097b8b1a14407ef5e1519ca3a9e7edceec2cbfe5fabad_prof);

    }

    public function getTemplateName()
    {
        return ":transportsViews:listTransports.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 43,  133 => 37,  125 => 32,  120 => 30,  116 => 29,  112 => 28,  108 => 27,  104 => 26,  101 => 25,  97 => 24,  90 => 20,  86 => 19,  74 => 9,  65 => 8,  50 => 4,  41 => 3,  11 => 1,);
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
\t{{'list'|trans}} {{'lignes'|trans}}
{% endblock %}


{% block bodyList %}

    <div class=\"table-responsive\">
        <table id=\"customers2\" class=\"table datatable\">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Départ</th>
                    <th>Trajet</th>
                    <th>Heure Départ</th>
                    <th>Capacité</th>
                    <th>{{'edit'|trans}}</th>
                    <th>{{'delete'|trans}}</th>
                </tr>
            </thead>
            <tbody>
                {% for trans in app.user.ecole.transports %}
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>{{ trans.nom|upper}}</td>
\t\t\t\t\t\t<td>{{ trans.depart}}</td>
\t\t\t\t\t\t<td>{{ trans.trajet}}</td>
\t\t\t\t\t\t<td>{{ trans.heureDepart|date('h:m')}}</td>
\t\t\t\t\t\t<td>{{ trans.capacite}}</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"{{ path('editTransport',{'id':trans.id})}}\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-pencil-square-o\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"{{ path('removeTransport',{'id':trans.id})}}\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-trash\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
                {% endfor %}
            </tbody>
        </table>                                    
    </div>
    
{% endblock %}  ", ":transportsViews:listTransports.html.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\app/Resources\\views/transportsViews/listTransports.html.twig");
    }
}
