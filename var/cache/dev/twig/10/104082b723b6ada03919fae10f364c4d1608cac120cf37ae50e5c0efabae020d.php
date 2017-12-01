<?php

/* :absence:add.html.twig */
class __TwigTemplate_88df5193a490d9c87908b60a9505c95adfd3662199643f5f8febebda100cd806 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base2.html.twig", ":absence:add.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_235262a096edc6f5a1f840c207e99305e3f9a99ee1e2d8a342940d51628d0af9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_235262a096edc6f5a1f840c207e99305e3f9a99ee1e2d8a342940d51628d0af9->enter($__internal_235262a096edc6f5a1f840c207e99305e3f9a99ee1e2d8a342940d51628d0af9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":absence:add.html.twig"));

        $__internal_2e281dce46857fbd26f18e71f0f9df094ac10b61af633ac6dbce176080358d62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e281dce46857fbd26f18e71f0f9df094ac10b61af633ac6dbce176080358d62->enter($__internal_2e281dce46857fbd26f18e71f0f9df094ac10b61af633ac6dbce176080358d62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":absence:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_235262a096edc6f5a1f840c207e99305e3f9a99ee1e2d8a342940d51628d0af9->leave($__internal_235262a096edc6f5a1f840c207e99305e3f9a99ee1e2d8a342940d51628d0af9_prof);

        
        $__internal_2e281dce46857fbd26f18e71f0f9df094ac10b61af633ac6dbce176080358d62->leave($__internal_2e281dce46857fbd26f18e71f0f9df094ac10b61af633ac6dbce176080358d62_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c3ca365f2a306b3efd7155daa116931b9ba9849acfe0c6751fa335b6fabbb125 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3ca365f2a306b3efd7155daa116931b9ba9849acfe0c6751fa335b6fabbb125->enter($__internal_c3ca365f2a306b3efd7155daa116931b9ba9849acfe0c6751fa335b6fabbb125_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3b6b806a8ef90fed0b6c44605ab7b0259431a370fcb32c22c8e51805d3168907 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b6b806a8ef90fed0b6c44605ab7b0259431a370fcb32c22c8e51805d3168907->enter($__internal_3b6b806a8ef90fed0b6c44605ab7b0259431a370fcb32c22c8e51805d3168907_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"page-content-wrap\">
    <div class=\"row\">
        <div class=\"col-md-12\">  
\t\t\t";
        // line 7
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t<h3 class=\"panel-title\">
\t\t\t\t\t\t\t";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("evaluation.add"), "html", null, true);
        echo "
\t\t\t\t\t\t</h3>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "eleve", array()), 'label', array("label_attr" => array("class" => "col-md-3 col-xs-12 control-label")));
        echo "
\t\t\t\t\t\t\t<div class=\"col-md-6 col-xs-12\">
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "eleve", array()), 'widget', array("id" => "selectEleve", "label_attr" => array("class" => "form-control select")));
        echo "
\t\t\t\t  \t\t\t\t</div>
\t\t\t\t\t\t    ";
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "eleve", array()), 'errors');
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t";
        // line 25
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'label', array("label_attr" => array("class" => "col-md-3 col-xs-12 control-label")));
        echo "
\t\t\t\t\t\t\t<div class=\"col-md-6 col-xs-12\">
\t\t\t\t\t\t\t\t<div class=\"input-group date\">
\t\t\t\t\t\t\t\t\t ";
        // line 28
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'widget');
        echo "
                                    <span class=\"input-group-addon\">
                                    \t<span class=\"glyphicon glyphicon-calendar\"></span>
                                    </span>
                                </div>
\t\t\t\t  \t\t\t\t";
        // line 33
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'errors');
        echo "
\t\t\t\t  \t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t";
        // line 37
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "commentaire", array()), 'label', array("label_attr" => array("class" => "col-md-3 col-xs-12 control-label")));
        echo "
\t\t\t\t\t\t\t<div class=\"col-md-6 col-xs-12\">
\t\t\t\t\t\t\t\t";
        // line 39
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "commentaire", array()), 'widget');
        echo "
\t\t\t\t  \t\t\t\t";
        // line 40
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "commentaire", array()), 'errors');
        echo "
\t\t\t\t  \t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"panel-footer\">                                    
\t\t\t\t\t<input type=\"submit\" value=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("add"), "html", null, true);
        echo "\" class=\"btn btn-primary pull-right\" />
\t\t\t\t</div>
\t\t\t";
        // line 48
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t\t</div>
\t</div>
</div>

";
        
        $__internal_3b6b806a8ef90fed0b6c44605ab7b0259431a370fcb32c22c8e51805d3168907->leave($__internal_3b6b806a8ef90fed0b6c44605ab7b0259431a370fcb32c22c8e51805d3168907_prof);

        
        $__internal_c3ca365f2a306b3efd7155daa116931b9ba9849acfe0c6751fa335b6fabbb125->leave($__internal_c3ca365f2a306b3efd7155daa116931b9ba9849acfe0c6751fa335b6fabbb125_prof);

    }

    // line 56
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_48f81dc172651f6f3b5c8001555fe97100af35c3dacce6e56b0cc53aa8a753ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48f81dc172651f6f3b5c8001555fe97100af35c3dacce6e56b0cc53aa8a753ce->enter($__internal_48f81dc172651f6f3b5c8001555fe97100af35c3dacce6e56b0cc53aa8a753ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_1cdf60d98c15583edb3ee1d9a12a629c62ad55321000d81750d20ace95ed9308 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cdf60d98c15583edb3ee1d9a12a629c62ad55321000d81750d20ace95ed9308->enter($__internal_1cdf60d98c15583edb3ee1d9a12a629c62ad55321000d81750d20ace95ed9308_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 57
        echo "\t
<script type=\"text/javascript\">

     \$( document ).ready( function() {

                \$('.dp-3').datepicker({startView: 2,format: 'yyyy-mm-dd' });
                \$('#selectEleve').selectpicker({
 \t\t\t\t\tstyle: 'btn-default',
  \t\t\t\t\tsize: 4
\t\t\t\t});
            });
</script>

";
        
        $__internal_1cdf60d98c15583edb3ee1d9a12a629c62ad55321000d81750d20ace95ed9308->leave($__internal_1cdf60d98c15583edb3ee1d9a12a629c62ad55321000d81750d20ace95ed9308_prof);

        
        $__internal_48f81dc172651f6f3b5c8001555fe97100af35c3dacce6e56b0cc53aa8a753ce->leave($__internal_48f81dc172651f6f3b5c8001555fe97100af35c3dacce6e56b0cc53aa8a753ce_prof);

    }

    public function getTemplateName()
    {
        return ":absence:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 57,  148 => 56,  132 => 48,  127 => 46,  118 => 40,  114 => 39,  109 => 37,  102 => 33,  94 => 28,  88 => 25,  81 => 21,  76 => 19,  70 => 16,  62 => 11,  55 => 7,  50 => 4,  41 => 3,  11 => 1,);
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
\t\t\t{{ form_start(form, { 'attr' : { 'class': 'form-horizontal' } }) }}
\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t<h3 class=\"panel-title\">
\t\t\t\t\t\t\t{{'evaluation.add'|trans}}
\t\t\t\t\t\t</h3>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t{{ form_label(form.eleve, null ,{ 'label_attr': {'class': 'col-md-3 col-xs-12 control-label'} }) }}
\t\t\t\t\t\t\t<div class=\"col-md-6 col-xs-12\">
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t{{ form_widget(form.eleve,{ 'id':'selectEleve', 'label_attr': {'class': 'form-control select'} }) }}
\t\t\t\t  \t\t\t\t</div>
\t\t\t\t\t\t    {{ form_errors(form.eleve) }}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t{{ form_label(form.date, null ,{ 'label_attr': {'class': 'col-md-3 col-xs-12 control-label'} }) }}
\t\t\t\t\t\t\t<div class=\"col-md-6 col-xs-12\">
\t\t\t\t\t\t\t\t<div class=\"input-group date\">
\t\t\t\t\t\t\t\t\t {{ form_widget(form.date) }}
                                    <span class=\"input-group-addon\">
                                    \t<span class=\"glyphicon glyphicon-calendar\"></span>
                                    </span>
                                </div>
\t\t\t\t  \t\t\t\t{{ form_errors(form.date) }}
\t\t\t\t  \t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t{{ form_label(form.commentaire, null ,{ 'label_attr': {'class': 'col-md-3 col-xs-12 control-label'} })}}
\t\t\t\t\t\t\t<div class=\"col-md-6 col-xs-12\">
\t\t\t\t\t\t\t\t{{ form_widget(form.commentaire)  }}
\t\t\t\t  \t\t\t\t{{ form_errors(form.commentaire) }}
\t\t\t\t  \t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"panel-footer\">                                    
\t\t\t\t\t<input type=\"submit\" value=\"{{'add'|trans}}\" class=\"btn btn-primary pull-right\" />
\t\t\t\t</div>
\t\t\t{{ form_end(form) }}
\t\t</div>
\t</div>
</div>

{% endblock %}


{% block javascripts %}
\t
<script type=\"text/javascript\">

     \$( document ).ready( function() {

                \$('.dp-3').datepicker({startView: 2,format: 'yyyy-mm-dd' });
                \$('#selectEleve').selectpicker({
 \t\t\t\t\tstyle: 'btn-default',
  \t\t\t\t\tsize: 4
\t\t\t\t});
            });
</script>

{% endblock %}", ":absence:add.html.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\app/Resources\\views/absence/add.html.twig");
    }
}
