<?php

/* :absence:index.html.twig */
class __TwigTemplate_1647b360634203e1ee5d2e5b32e6a6f5f0337058ca447bef8fed447a4155a2c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":absence:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_63e9390a3915f296b60cefdc36a20aaeb234c3017fa264d0fa5fa79a78b1cf50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63e9390a3915f296b60cefdc36a20aaeb234c3017fa264d0fa5fa79a78b1cf50->enter($__internal_63e9390a3915f296b60cefdc36a20aaeb234c3017fa264d0fa5fa79a78b1cf50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":absence:index.html.twig"));

        $__internal_7dc7fc71a57fdc8b418d7bb55403fdadcd5285ddbc7059edbd593609c6ccbd0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7dc7fc71a57fdc8b418d7bb55403fdadcd5285ddbc7059edbd593609c6ccbd0e->enter($__internal_7dc7fc71a57fdc8b418d7bb55403fdadcd5285ddbc7059edbd593609c6ccbd0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":absence:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_63e9390a3915f296b60cefdc36a20aaeb234c3017fa264d0fa5fa79a78b1cf50->leave($__internal_63e9390a3915f296b60cefdc36a20aaeb234c3017fa264d0fa5fa79a78b1cf50_prof);

        
        $__internal_7dc7fc71a57fdc8b418d7bb55403fdadcd5285ddbc7059edbd593609c6ccbd0e->leave($__internal_7dc7fc71a57fdc8b418d7bb55403fdadcd5285ddbc7059edbd593609c6ccbd0e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b7b07863814ea1083073159518ea36855e1e927fb1d0c89d50c8f109168b5299 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7b07863814ea1083073159518ea36855e1e927fb1d0c89d50c8f109168b5299->enter($__internal_b7b07863814ea1083073159518ea36855e1e927fb1d0c89d50c8f109168b5299_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_47c4c37c94f7c694fddf33c1f728e01698e553061d1d6c748d0cbd4d872ce667 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47c4c37c94f7c694fddf33c1f728e01698e553061d1d6c748d0cbd4d872ce667->enter($__internal_47c4c37c94f7c694fddf33c1f728e01698e553061d1d6c748d0cbd4d872ce667_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t";
        // line 5
        echo "         ";
        // line 6
        echo "           <!-- <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("absence_new");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("absence.add"), "html", null, true);
        echo "</a> -->
        ";
        // line 8
        echo "    ";
        // line 9
        echo "\t<div class=\"container\">
\t";
        // line 10
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
\t\t<div class=\"form-group\">
\t\t\t";
        // line 12
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "classe", array()), 'label');
        echo "
\t\t    ";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "classe", array()), 'widget');
        echo "
\t\t    ";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "classe", array()), 'errors');
        echo "
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "annee", array()), 'label');
        echo "
\t\t    ";
        // line 18
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "annee", array()), 'widget');
        echo "
\t\t    ";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "annee", array()), 'errors');
        echo "
\t\t</div>
\t\t
\t\t<button type=\"submit\">Chercher</button>
\t";
        // line 23
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
</div>
<div class=\"container\">
\t<ul>
\t";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["absences"]) ? $context["absences"] : $this->getContext($context, "absences")));
        foreach ($context['_seq'] as $context["_key"] => $context["absence"]) {
            // line 28
            echo "\t\t<li>";
            echo twig_escape_filter($this->env, (((((($this->getAttribute($this->getAttribute($context["absence"], "eleve", array()), "nom", array()) . " ") . $this->getAttribute($this->getAttribute($context["absence"], "eleve", array()), "prenom", array())) . " ") . twig_date_format_filter($this->env, $this->getAttribute($context["absence"], "date", array()))) . " ") . $this->getAttribute($context["absence"], "commentaire", array())), "html", null, true);
            echo "</li>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['absence'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "\t</ul>
</div>

";
        
        $__internal_47c4c37c94f7c694fddf33c1f728e01698e553061d1d6c748d0cbd4d872ce667->leave($__internal_47c4c37c94f7c694fddf33c1f728e01698e553061d1d6c748d0cbd4d872ce667_prof);

        
        $__internal_b7b07863814ea1083073159518ea36855e1e927fb1d0c89d50c8f109168b5299->leave($__internal_b7b07863814ea1083073159518ea36855e1e927fb1d0c89d50c8f109168b5299_prof);

    }

    public function getTemplateName()
    {
        return ":absence:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 30,  110 => 28,  106 => 27,  99 => 23,  92 => 19,  88 => 18,  84 => 17,  78 => 14,  74 => 13,  70 => 12,  65 => 10,  62 => 9,  60 => 8,  53 => 6,  51 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
\t{#% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %#}
         {#% # if 'ROLE_SUPER_ADMIN' in app.user.roles %#}
           <!-- <a href=\"{{path('absence_new')}}\">{{'absence.add'|trans}}</a> -->
        {#% # endif %#}
    {#% # endif %#}
\t<div class=\"container\">
\t{{ form_start(form) }}
\t\t<div class=\"form-group\">
\t\t\t{{ form_label(form.classe) }}
\t\t    {{ form_widget(form.classe) }}
\t\t    {{ form_errors(form.classe) }}
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t{{ form_label(form.annee) }}
\t\t    {{ form_widget(form.annee) }}
\t\t    {{ form_errors(form.annee) }}
\t\t</div>
\t\t
\t\t<button type=\"submit\">Chercher</button>
\t{{ form_end(form) }}
</div>
<div class=\"container\">
\t<ul>
\t{% for absence in absences %}
\t\t<li>{{absence.eleve.nom~' '~absence.eleve.prenom~' '~absence.date|date()~' '~absence.commentaire}}</li>
\t{% endfor %}
\t</ul>
</div>

{% endblock %}", ":absence:index.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/views/absence/index.html.twig");
    }
}
