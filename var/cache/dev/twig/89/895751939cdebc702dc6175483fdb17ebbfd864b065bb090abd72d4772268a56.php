<?php

/* absence/add.html.twig */
class __TwigTemplate_53846c9b9bdffc663609031aea6ed9e53e124051714945f14d31ea8713ce6ec4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base2.html.twig", "absence/add.html.twig", 1);
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
        $__internal_f8231d1dc862f6f8eeadf59a8b9823b35cd21fcc01890eff010f17f411d5985c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8231d1dc862f6f8eeadf59a8b9823b35cd21fcc01890eff010f17f411d5985c->enter($__internal_f8231d1dc862f6f8eeadf59a8b9823b35cd21fcc01890eff010f17f411d5985c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "absence/add.html.twig"));

        $__internal_cf060139b942403dd9dc5a332bd4b98eecf6f93a0c78d9d79b9c97282ee450e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf060139b942403dd9dc5a332bd4b98eecf6f93a0c78d9d79b9c97282ee450e1->enter($__internal_cf060139b942403dd9dc5a332bd4b98eecf6f93a0c78d9d79b9c97282ee450e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "absence/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f8231d1dc862f6f8eeadf59a8b9823b35cd21fcc01890eff010f17f411d5985c->leave($__internal_f8231d1dc862f6f8eeadf59a8b9823b35cd21fcc01890eff010f17f411d5985c_prof);

        
        $__internal_cf060139b942403dd9dc5a332bd4b98eecf6f93a0c78d9d79b9c97282ee450e1->leave($__internal_cf060139b942403dd9dc5a332bd4b98eecf6f93a0c78d9d79b9c97282ee450e1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_93b4423115efec44e8489a96ef400fa5c9c41130e2f0881f8a2eb4e64bec7dd1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93b4423115efec44e8489a96ef400fa5c9c41130e2f0881f8a2eb4e64bec7dd1->enter($__internal_93b4423115efec44e8489a96ef400fa5c9c41130e2f0881f8a2eb4e64bec7dd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e745251dc46edc0c3e090133f64859d97166ddf5230c78b966d2f5d7faf4226b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e745251dc46edc0c3e090133f64859d97166ddf5230c78b966d2f5d7faf4226b->enter($__internal_e745251dc46edc0c3e090133f64859d97166ddf5230c78b966d2f5d7faf4226b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e745251dc46edc0c3e090133f64859d97166ddf5230c78b966d2f5d7faf4226b->leave($__internal_e745251dc46edc0c3e090133f64859d97166ddf5230c78b966d2f5d7faf4226b_prof);

        
        $__internal_93b4423115efec44e8489a96ef400fa5c9c41130e2f0881f8a2eb4e64bec7dd1->leave($__internal_93b4423115efec44e8489a96ef400fa5c9c41130e2f0881f8a2eb4e64bec7dd1_prof);

    }

    // line 56
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0188564cc75a501cded8f4671ef5f7b79d3f0155c116c497b0a26d4b2994e985 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0188564cc75a501cded8f4671ef5f7b79d3f0155c116c497b0a26d4b2994e985->enter($__internal_0188564cc75a501cded8f4671ef5f7b79d3f0155c116c497b0a26d4b2994e985_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_59573436778a327a43348a6c83bccf82b4886a00f1ab74415397dd83e2494be6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59573436778a327a43348a6c83bccf82b4886a00f1ab74415397dd83e2494be6->enter($__internal_59573436778a327a43348a6c83bccf82b4886a00f1ab74415397dd83e2494be6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_59573436778a327a43348a6c83bccf82b4886a00f1ab74415397dd83e2494be6->leave($__internal_59573436778a327a43348a6c83bccf82b4886a00f1ab74415397dd83e2494be6_prof);

        
        $__internal_0188564cc75a501cded8f4671ef5f7b79d3f0155c116c497b0a26d4b2994e985->leave($__internal_0188564cc75a501cded8f4671ef5f7b79d3f0155c116c497b0a26d4b2994e985_prof);

    }

    public function getTemplateName()
    {
        return "absence/add.html.twig";
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

{% endblock %}", "absence/add.html.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\app\\Resources\\views\\absence\\add.html.twig");
    }
}
