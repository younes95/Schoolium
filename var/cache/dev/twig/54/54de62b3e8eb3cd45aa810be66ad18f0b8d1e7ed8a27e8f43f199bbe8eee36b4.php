<?php

/* :evaluation:add.html.twig */
class __TwigTemplate_7c412192b886fe1ecb99b5bead6e2549f296432eed075072292e432c2579bf4d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base2.html.twig", ":evaluation:add.html.twig", 1);
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
        $__internal_45f457aa63fa0e6ef77b90dd7ef8cc2c9c08d53014447bdeabdb4730028122e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45f457aa63fa0e6ef77b90dd7ef8cc2c9c08d53014447bdeabdb4730028122e8->enter($__internal_45f457aa63fa0e6ef77b90dd7ef8cc2c9c08d53014447bdeabdb4730028122e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":evaluation:add.html.twig"));

        $__internal_3a2c063ba3c15730d6ae427246601bba611c86c490ef44a1103f160f38609f61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a2c063ba3c15730d6ae427246601bba611c86c490ef44a1103f160f38609f61->enter($__internal_3a2c063ba3c15730d6ae427246601bba611c86c490ef44a1103f160f38609f61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":evaluation:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_45f457aa63fa0e6ef77b90dd7ef8cc2c9c08d53014447bdeabdb4730028122e8->leave($__internal_45f457aa63fa0e6ef77b90dd7ef8cc2c9c08d53014447bdeabdb4730028122e8_prof);

        
        $__internal_3a2c063ba3c15730d6ae427246601bba611c86c490ef44a1103f160f38609f61->leave($__internal_3a2c063ba3c15730d6ae427246601bba611c86c490ef44a1103f160f38609f61_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f13ea8e6afb43dbe18fbca572e0f961e9dfdebd70298d13703f60a7d965da1ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f13ea8e6afb43dbe18fbca572e0f961e9dfdebd70298d13703f60a7d965da1ab->enter($__internal_f13ea8e6afb43dbe18fbca572e0f961e9dfdebd70298d13703f60a7d965da1ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5c7ece6309e9d769541775727e141a1e5c7ad4c562f7111d6c9f31a0c0a37d0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c7ece6309e9d769541775727e141a1e5c7ad4c562f7111d6c9f31a0c0a37d0b->enter($__internal_5c7ece6309e9d769541775727e141a1e5c7ad4c562f7111d6c9f31a0c0a37d0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"page-content-wrap\">
                
    <div class=\"row\">
        <div class=\"col-md-12\">  


\t";
        // line 10
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-heading\">
\t\t\t<h3 class=\"panel-title\">
\t\t\t\t";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("evaluation.add"), "html", null, true);
        echo "
\t\t\t</h3>
\t\t</div>
\t\t<div class=\"panel-body\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "matiere", array()), 'label', array("label_attr" => array("class" => "col-md-3 col-xs-12 control-label")));
        echo "
\t\t\t\t\t\t\t<div class=\"col-md-6 col-xs-12\">
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><span class=\"fa fa-pencil\"></span></span>
\t\t\t\t\t\t   \t\t\t";
        // line 23
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "matiere", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t\t  \t\t</div>
\t\t\t\t\t\t\t\t";
        // line 25
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "matiere", array()), 'errors');
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t";
        // line 30
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "classe", array()), 'label', array("label_attr" => array("class" => "col-md-3 col-xs-12 control-label")));
        echo "
\t\t\t\t\t\t\t<div class=\"col-md-6 col-xs-12\">
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><span class=\"fa fa-pencil\"></span></span>
\t\t\t\t\t\t   \t\t\t";
        // line 34
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "classe", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t\t   \t\t</div>
\t\t\t\t\t\t   \t</div>
\t\t\t\t\t\t    ";
        // line 37
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "classe", array()), 'errors');
        echo "
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t";
        // line 41
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "evaluation", array()), 'label', array("label_attr" => array("class" => "col-md-3 col-xs-12 control-label")));
        echo "
\t\t\t\t\t\t\t<div class=\"col-md-6 col-xs-12\">
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><span class=\"fa fa-pencil\"></span></span>
\t\t\t\t\t\t   \t\t";
        // line 45
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "evaluation", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t\t   \t\t</div>
\t\t\t\t\t\t   \t</div>
\t\t\t\t\t\t    ";
        // line 48
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "evaluation", array()), 'errors');
        echo "
\t\t\t\t\t\t</div>
\t\t</div>
\t\t<div class=\"panel-footer\">                                    
\t\t   \t<input type=\"submit\" value=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("add"), "html", null, true);
        echo "\" class=\"btn btn-primary pull-right\" />
\t\t</div>
\t</div>
\t\t
\t";
        // line 56
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t
";
        
        $__internal_5c7ece6309e9d769541775727e141a1e5c7ad4c562f7111d6c9f31a0c0a37d0b->leave($__internal_5c7ece6309e9d769541775727e141a1e5c7ad4c562f7111d6c9f31a0c0a37d0b_prof);

        
        $__internal_f13ea8e6afb43dbe18fbca572e0f961e9dfdebd70298d13703f60a7d965da1ab->leave($__internal_f13ea8e6afb43dbe18fbca572e0f961e9dfdebd70298d13703f60a7d965da1ab_prof);

    }

    public function getTemplateName()
    {
        return ":evaluation:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 56,  132 => 52,  125 => 48,  119 => 45,  112 => 41,  105 => 37,  99 => 34,  92 => 30,  84 => 25,  79 => 23,  72 => 19,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
                
    <div class=\"row\">
        <div class=\"col-md-12\">  


\t{{ form_start(form, { 'attr' : { 'class': 'form-horizontal' } }) }}
\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-heading\">
\t\t\t<h3 class=\"panel-title\">
\t\t\t\t{{'evaluation.add'|trans}}
\t\t\t</h3>
\t\t</div>
\t\t<div class=\"panel-body\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t{{ form_label(form.matiere,null,{ 'label_attr': {'class': 'col-md-3 col-xs-12 control-label'} }) }}
\t\t\t\t\t\t\t<div class=\"col-md-6 col-xs-12\">
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><span class=\"fa fa-pencil\"></span></span>
\t\t\t\t\t\t   \t\t\t{{ form_widget(form.matiere ,{ 'attr': {'class': 'form-control'} }) }}
\t\t\t\t\t\t  \t\t</div>
\t\t\t\t\t\t\t\t{{ form_errors(form.matiere) }}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t{{ form_label(form.classe,null,{ 'label_attr': {'class': 'col-md-3 col-xs-12 control-label'} }) }}
\t\t\t\t\t\t\t<div class=\"col-md-6 col-xs-12\">
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><span class=\"fa fa-pencil\"></span></span>
\t\t\t\t\t\t   \t\t\t{{ form_widget(form.classe ,{ 'attr': {'class': 'form-control'} }) }}
\t\t\t\t\t\t   \t\t</div>
\t\t\t\t\t\t   \t</div>
\t\t\t\t\t\t    {{ form_errors(form.classe) }}
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t{{ form_label(form.evaluation,null,{ 'label_attr': {'class': 'col-md-3 col-xs-12 control-label'} }) }}
\t\t\t\t\t\t\t<div class=\"col-md-6 col-xs-12\">
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><span class=\"fa fa-pencil\"></span></span>
\t\t\t\t\t\t   \t\t{{ form_widget(form.evaluation ,{ 'attr': {'class': 'form-control'} }) }}
\t\t\t\t\t\t   \t\t</div>
\t\t\t\t\t\t   \t</div>
\t\t\t\t\t\t    {{ form_errors(form.evaluation) }}
\t\t\t\t\t\t</div>
\t\t</div>
\t\t<div class=\"panel-footer\">                                    
\t\t   \t<input type=\"submit\" value=\"{{'add'|trans}}\" class=\"btn btn-primary pull-right\" />
\t\t</div>
\t</div>
\t\t
\t{{ form_end(form) }}
\t
{% endblock %}", ":evaluation:add.html.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\app/Resources\\views/evaluation/add.html.twig");
    }
}
