<?php

/* absence/index.html.twig */
class __TwigTemplate_6832251bef396690b1db43e1119386f64623e845c16ba0665a3702b8e48fb3b5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base2.html.twig", "absence/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_deeac20757d575414cf78e7dd6f722d058e83332e7ce9da43323aa324316b500 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_deeac20757d575414cf78e7dd6f722d058e83332e7ce9da43323aa324316b500->enter($__internal_deeac20757d575414cf78e7dd6f722d058e83332e7ce9da43323aa324316b500_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "absence/index.html.twig"));

        $__internal_1a0d1e61e0b3ae98d1fc74bf74303838a66a0959881852928c37fced808ab283 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a0d1e61e0b3ae98d1fc74bf74303838a66a0959881852928c37fced808ab283->enter($__internal_1a0d1e61e0b3ae98d1fc74bf74303838a66a0959881852928c37fced808ab283_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "absence/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_deeac20757d575414cf78e7dd6f722d058e83332e7ce9da43323aa324316b500->leave($__internal_deeac20757d575414cf78e7dd6f722d058e83332e7ce9da43323aa324316b500_prof);

        
        $__internal_1a0d1e61e0b3ae98d1fc74bf74303838a66a0959881852928c37fced808ab283->leave($__internal_1a0d1e61e0b3ae98d1fc74bf74303838a66a0959881852928c37fced808ab283_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_031b16aaf84fb8faab6fb61b8d097434effefe64997489070b7f2663f8a7d410 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_031b16aaf84fb8faab6fb61b8d097434effefe64997489070b7f2663f8a7d410->enter($__internal_031b16aaf84fb8faab6fb61b8d097434effefe64997489070b7f2663f8a7d410_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_644c64ffa246cdaf37cd5288a0179aa5decb0c89ffc4d2e1b2828c3e63238975 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_644c64ffa246cdaf37cd5288a0179aa5decb0c89ffc4d2e1b2828c3e63238975->enter($__internal_644c64ffa246cdaf37cd5288a0179aa5decb0c89ffc4d2e1b2828c3e63238975_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"page-content-wrap\">
    ";
        // line 6
        echo "         ";
        // line 7
        echo "           <!-- <a href=\"";
        echo "</a> -->
        ";
        // line 9
        echo "    ";
        echo "            
    <div class=\"row\">
        <div class=\"col-md-12\">
\t\t\t";
        // line 12
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
\t\t\t<div class=\"panel panel-default\">
\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t<h3 class=\"panel-title\">
\t\t\t\t\t\t";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("absence.manage"), "html", null, true);
        echo "
\t\t\t\t\t</h3>
\t\t\t\t</div>
\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t";
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "classe", array()), 'label', array("label_attr" => array("class" => "col-md-3 col-xs-12 control-label")));
        echo "
\t\t\t\t\t\t<div class=\"col-md-6 col-xs-12\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><span class=\"fa fa-pencil\"></span></span>
\t\t\t\t\t\t    \t";
        // line 25
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "classe", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t\t    </div>
\t\t\t\t\t    \t";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "classe", array()), 'errors');
        echo "
\t\t\t\t\t    </div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "annee", array()), 'label', array("label_attr" => array("class" => "col-md-3 col-xs-12 control-label")));
        echo "
\t\t\t\t\t\t<div class=\"col-md-6 col-xs-12\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><span class=\"fa fa-pencil\"></span></span>
\t\t\t\t\t\t    \t";
        // line 35
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "annee", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        // line 37
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "annee", array()), 'errors');
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<button type=\"submit\" class=\"btn btn-primary pull-right\">Chercher</button>
\t\t\t";
        // line 43
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t\t</div>
\t</div>
\t\t
\t\t
</div>

";
        // line 50
        if ((twig_length_filter($this->env, (isset($context["absences"]) ? $context["absences"] : $this->getContext($context, "absences"))) != 0)) {
            // line 51
            echo " <div class=\"table-responsive\">
    \t<table id=\"customers2\" class=\"table datatable\">
            <thead>
                <tr>
                    <th>";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("student.lastname"), "html", null, true);
            echo "</th>
                    <th>";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("student.firstname"), "html", null, true);
            echo "</th>
                    <th>";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("absence.date"), "html", null, true);
            echo "</th>
                    <th>";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.comment"), "html", null, true);
            echo "</th>
                </tr>
            </thead>
            <tbody>
            \t";
            // line 62
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["absences"]) ? $context["absences"] : $this->getContext($context, "absences")));
            foreach ($context['_seq'] as $context["_key"] => $context["absence"]) {
                // line 63
                echo "            \t<tr>
            \t<td>";
                // line 64
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["absence"], "eleve", array()), "nom", array()), "html", null, true);
                echo "</td>
            \t<td>";
                // line 65
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["absence"], "eleve", array()), "prenom", array()), "html", null, true);
                echo "</td>
            \t<td>";
                // line 66
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["absence"], "date", array())), "html", null, true);
                echo "</td>
            \t<td>";
                // line 67
                echo twig_escape_filter($this->env, $this->getAttribute($context["absence"], "commentaire", array()), "html", null, true);
                echo "</td>
            </tr>
            \t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['absence'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 70
            echo "            </tbody>
        </table>
</div>
";
        }
        
        $__internal_644c64ffa246cdaf37cd5288a0179aa5decb0c89ffc4d2e1b2828c3e63238975->leave($__internal_644c64ffa246cdaf37cd5288a0179aa5decb0c89ffc4d2e1b2828c3e63238975_prof);

        
        $__internal_031b16aaf84fb8faab6fb61b8d097434effefe64997489070b7f2663f8a7d410->leave($__internal_031b16aaf84fb8faab6fb61b8d097434effefe64997489070b7f2663f8a7d410_prof);

    }

    public function getTemplateName()
    {
        return "absence/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 70,  175 => 67,  171 => 66,  167 => 65,  163 => 64,  160 => 63,  156 => 62,  149 => 58,  145 => 57,  141 => 56,  137 => 55,  131 => 51,  129 => 50,  119 => 43,  110 => 37,  105 => 35,  98 => 31,  91 => 27,  86 => 25,  79 => 21,  71 => 16,  64 => 12,  58 => 9,  54 => 7,  52 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base2.html.twig' %}

{% block body %}
<div class=\"page-content-wrap\">
    {#% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %#}
         {#% # if 'ROLE_SUPER_ADMIN' in app.user.roles %#}
           <!-- <a href=\"{#{path('absence_new')}}\">{{'absence.add'|trans}#}</a> -->
        {#% # endif %#}
    {#% # endif %#}            
    <div class=\"row\">
        <div class=\"col-md-12\">
\t\t\t{{ form_start(form, { 'attr' : { 'class': 'form-horizontal' } }) }}
\t\t\t<div class=\"panel panel-default\">
\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t<h3 class=\"panel-title\">
\t\t\t\t\t\t{{'absence.manage'|trans}}
\t\t\t\t\t</h3>
\t\t\t\t</div>
\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t{{ form_label(form.classe, null ,{ 'label_attr': {'class': 'col-md-3 col-xs-12 control-label'} }) }}
\t\t\t\t\t\t<div class=\"col-md-6 col-xs-12\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><span class=\"fa fa-pencil\"></span></span>
\t\t\t\t\t\t    \t{{ form_widget(form.classe ,{ 'attr': {'class': 'form-control'} }) }}
\t\t\t\t\t\t    </div>
\t\t\t\t\t    \t{{ form_errors(form.classe) }}
\t\t\t\t\t    </div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t{{ form_label(form.annee, null ,{ 'label_attr': {'class': 'col-md-3 col-xs-12 control-label'} }) }}
\t\t\t\t\t\t<div class=\"col-md-6 col-xs-12\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><span class=\"fa fa-pencil\"></span></span>
\t\t\t\t\t\t    \t{{ form_widget(form.annee ,{ 'attr': {'class': 'form-control'} }) }}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{{ form_errors(form.annee) }}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<button type=\"submit\" class=\"btn btn-primary pull-right\">Chercher</button>
\t\t\t{{ form_end(form) }}
\t\t</div>
\t</div>
\t\t
\t\t
</div>

{% if absences|length != 0 %}
 <div class=\"table-responsive\">
    \t<table id=\"customers2\" class=\"table datatable\">
            <thead>
                <tr>
                    <th>{{'student.lastname'|trans}}</th>
                    <th>{{'student.firstname'|trans}}</th>
                    <th>{{'absence.date'|trans}}</th>
                    <th>{{'form.comment'|trans}}</th>
                </tr>
            </thead>
            <tbody>
            \t{% for absence in absences %}
            \t<tr>
            \t<td>{{absence.eleve.nom}}</td>
            \t<td>{{absence.eleve.prenom}}</td>
            \t<td>{{absence.date|date()}}</td>
            \t<td>{{absence.commentaire}}</td>
            </tr>
            \t{% endfor %}
            </tbody>
        </table>
</div>
{% endif %}
{% endblock %}", "absence/index.html.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\app\\Resources\\views\\absence\\index.html.twig");
    }
}
