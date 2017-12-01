<?php

/* transportsViews/listTransports.html.twig */
class __TwigTemplate_69a052571e36c2b3d91e3989379437bf15322be4e1d534153718815d887f9a40 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseList.html.twig", "transportsViews/listTransports.html.twig", 1);
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
        $__internal_14d674ea47df989989802f8370cc2529a52db9385939371d1e49782efa59f0a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14d674ea47df989989802f8370cc2529a52db9385939371d1e49782efa59f0a3->enter($__internal_14d674ea47df989989802f8370cc2529a52db9385939371d1e49782efa59f0a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "transportsViews/listTransports.html.twig"));

        $__internal_02b96a9a49df03ffebbbb1fb5eedb53830c4ccb41fb328ca224c6ae3631376c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02b96a9a49df03ffebbbb1fb5eedb53830c4ccb41fb328ca224c6ae3631376c0->enter($__internal_02b96a9a49df03ffebbbb1fb5eedb53830c4ccb41fb328ca224c6ae3631376c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "transportsViews/listTransports.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_14d674ea47df989989802f8370cc2529a52db9385939371d1e49782efa59f0a3->leave($__internal_14d674ea47df989989802f8370cc2529a52db9385939371d1e49782efa59f0a3_prof);

        
        $__internal_02b96a9a49df03ffebbbb1fb5eedb53830c4ccb41fb328ca224c6ae3631376c0->leave($__internal_02b96a9a49df03ffebbbb1fb5eedb53830c4ccb41fb328ca224c6ae3631376c0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2518b94598e9f4a82032366a745f8e3f67c3eaca142afe1a98eede554ec31fc1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2518b94598e9f4a82032366a745f8e3f67c3eaca142afe1a98eede554ec31fc1->enter($__internal_2518b94598e9f4a82032366a745f8e3f67c3eaca142afe1a98eede554ec31fc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9fac9fa57a44ca332a25d02da37389ac690ea96026390072b44f4df86a0187d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fac9fa57a44ca332a25d02da37389ac690ea96026390072b44f4df86a0187d2->enter($__internal_9fac9fa57a44ca332a25d02da37389ac690ea96026390072b44f4df86a0187d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\t";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("lignes"), "html", null, true);
        echo "
";
        
        $__internal_9fac9fa57a44ca332a25d02da37389ac690ea96026390072b44f4df86a0187d2->leave($__internal_9fac9fa57a44ca332a25d02da37389ac690ea96026390072b44f4df86a0187d2_prof);

        
        $__internal_2518b94598e9f4a82032366a745f8e3f67c3eaca142afe1a98eede554ec31fc1->leave($__internal_2518b94598e9f4a82032366a745f8e3f67c3eaca142afe1a98eede554ec31fc1_prof);

    }

    // line 8
    public function block_bodyList($context, array $blocks = array())
    {
        $__internal_e2bbd61e55014eac2071f08ecafb1b79d315863c1a7f2c38390787d20b489754 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2bbd61e55014eac2071f08ecafb1b79d315863c1a7f2c38390787d20b489754->enter($__internal_e2bbd61e55014eac2071f08ecafb1b79d315863c1a7f2c38390787d20b489754_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        $__internal_761f327a6f28b3b46d4815ae977a76abbbcf12115a3b14399cb068fcd4608a16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_761f327a6f28b3b46d4815ae977a76abbbcf12115a3b14399cb068fcd4608a16->enter($__internal_761f327a6f28b3b46d4815ae977a76abbbcf12115a3b14399cb068fcd4608a16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

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
        
        $__internal_761f327a6f28b3b46d4815ae977a76abbbcf12115a3b14399cb068fcd4608a16->leave($__internal_761f327a6f28b3b46d4815ae977a76abbbcf12115a3b14399cb068fcd4608a16_prof);

        
        $__internal_e2bbd61e55014eac2071f08ecafb1b79d315863c1a7f2c38390787d20b489754->leave($__internal_e2bbd61e55014eac2071f08ecafb1b79d315863c1a7f2c38390787d20b489754_prof);

    }

    public function getTemplateName()
    {
        return "transportsViews/listTransports.html.twig";
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
    
{% endblock %}  ", "transportsViews/listTransports.html.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\app\\Resources\\views\\transportsViews\\listTransports.html.twig");
    }
}
