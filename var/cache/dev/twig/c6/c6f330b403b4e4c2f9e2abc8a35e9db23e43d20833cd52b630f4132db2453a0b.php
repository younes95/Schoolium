<?php

/* travailrealise/add.html.twig */
class __TwigTemplate_79cbeeb9fa3a6fd702bac15c59b133a429e6ff5f208225d8d2f03dca82f3c2fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base2.html.twig", "travailrealise/add.html.twig", 1);
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
        $__internal_6a908a792d82c83b84213d48775ac55d7469bb12730420438d9a62032ab0bf30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a908a792d82c83b84213d48775ac55d7469bb12730420438d9a62032ab0bf30->enter($__internal_6a908a792d82c83b84213d48775ac55d7469bb12730420438d9a62032ab0bf30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "travailrealise/add.html.twig"));

        $__internal_b48e3b5900e1add80a626a458ecf61c902a2a0cf4526d530b4777bff62a4632e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b48e3b5900e1add80a626a458ecf61c902a2a0cf4526d530b4777bff62a4632e->enter($__internal_b48e3b5900e1add80a626a458ecf61c902a2a0cf4526d530b4777bff62a4632e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "travailrealise/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a908a792d82c83b84213d48775ac55d7469bb12730420438d9a62032ab0bf30->leave($__internal_6a908a792d82c83b84213d48775ac55d7469bb12730420438d9a62032ab0bf30_prof);

        
        $__internal_b48e3b5900e1add80a626a458ecf61c902a2a0cf4526d530b4777bff62a4632e->leave($__internal_b48e3b5900e1add80a626a458ecf61c902a2a0cf4526d530b4777bff62a4632e_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_a60ce0f50b3bab9fbea38dc9c877c36982723fb7b5b8998c9106246915a69d46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a60ce0f50b3bab9fbea38dc9c877c36982723fb7b5b8998c9106246915a69d46->enter($__internal_a60ce0f50b3bab9fbea38dc9c877c36982723fb7b5b8998c9106246915a69d46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1e4c80c37c023e7d64ac7f9f5f07834d184741415c02e72911626c2882931e21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e4c80c37c023e7d64ac7f9f5f07834d184741415c02e72911626c2882931e21->enter($__internal_1e4c80c37c023e7d64ac7f9f5f07834d184741415c02e72911626c2882931e21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<div class=\"page-content-wrap\">
    <div class=\"row\">
        <div class=\"col-md-12\">  
\t\t\t";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
\t\t\t<div class=\"panel panel-default\">
\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t<h3 class=\"panel-title\">
\t\t\t\t\t\t
\t\t\t\t\t</h3>
\t\t\t\t</div>
\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "matiere", array()), 'label', array("label_attr" => array("class" => "col-md-3 col-xs-12 control-label")));
        echo "
\t\t\t\t\t\t<div class=\"col-md-6 col-xs-12\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t";
        // line 20
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "matiere", array()), 'widget', array("id" => "selectMatiere", "label_attr" => array("class" => "form-control select")));
        echo "
\t\t\t\t\t  \t\t</div>
\t\t\t\t\t\t\t";
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "matiere", array()), 'errors');
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t";
        // line 26
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "classe", array()), 'label', array("label_attr" => array("class" => "col-md-3 col-xs-12 control-label")));
        echo "
\t\t\t\t\t\t<div class=\"col-md-6 col-xs-12\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "classe", array()), 'widget', array("id" => "selectClasse", "label_attr" => array("class" => "form-control select")));
        echo "
\t\t\t\t\t  \t\t</div>
\t\t\t\t\t\t\t";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "classe", array()), 'errors');
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t";
        // line 35
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'label', array("label_attr" => array("class" => "col-md-3 col-xs-12 control-label")));
        echo "
\t\t\t\t\t\t<div class=\"col-md-6 col-xs-12\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><span class=\"fa fa-calendar\"></span></span>
\t\t\t\t\t   \t\t\t";
        // line 39
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget');
        echo "
\t\t\t\t\t  \t\t</div>
\t\t\t\t\t\t\t";
        // line 41
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'errors');
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t";
        // line 45
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "travail", array()), 'label', array("label_attr" => array("class" => "col-md-3 col-xs-12 control-label")));
        echo "
\t\t\t\t\t\t<div class=\"col-md-6 col-xs-12\">
\t\t\t\t\t\t\t<a class=\"file-input-wrapper btn btn-default  fileinput\">
\t\t                       \t<span>";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("global.parcourir"), "html", null, true);
        echo "</span>
\t\t                       \t";
        // line 49
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "travail", array()), 'widget', array("label_attr" => array("class" => "fileinput")));
        echo "
\t\t\t\t  \t\t\t</a>
\t\t\t\t\t\t\t";
        // line 51
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "travail", array()), 'errors');
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"panel-footer\">                                    
\t\t\t\t\t<input type=\"submit\" value=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("add"), "html", null, true);
        echo "\" class=\"btn btn-primary pull-right\" />
\t\t\t\t</div>
\t\t\t\t";
        // line 58
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
\t\t\t</div>
\t\t</div>
\t</div>
</div>

";
        
        $__internal_1e4c80c37c023e7d64ac7f9f5f07834d184741415c02e72911626c2882931e21->leave($__internal_1e4c80c37c023e7d64ac7f9f5f07834d184741415c02e72911626c2882931e21_prof);

        
        $__internal_a60ce0f50b3bab9fbea38dc9c877c36982723fb7b5b8998c9106246915a69d46->leave($__internal_a60ce0f50b3bab9fbea38dc9c877c36982723fb7b5b8998c9106246915a69d46_prof);

    }

    // line 66
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0970573fe7edc44e2a549e761979558f28542a2ea5c5b247138dac18aec12f73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0970573fe7edc44e2a549e761979558f28542a2ea5c5b247138dac18aec12f73->enter($__internal_0970573fe7edc44e2a549e761979558f28542a2ea5c5b247138dac18aec12f73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_f41c8f66b1bfb3fa806409eedf9c71800f14abb422d8c0fdf6ee7b069c39177a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f41c8f66b1bfb3fa806409eedf9c71800f14abb422d8c0fdf6ee7b069c39177a->enter($__internal_f41c8f66b1bfb3fa806409eedf9c71800f14abb422d8c0fdf6ee7b069c39177a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 67
        echo "\t
<script type=\"text/javascript\">

     \$( document ).ready( function() {

                \$('.dp-3').datepicker({startView: 2,format: 'yyyy-mm-dd' });
                \$('#selectMatiere').selectpicker({
 \t\t\t\t\tstyle: 'btn-default',
  \t\t\t\t\tsize: 4
\t\t\t\t});
\t\t\t\t\$('#selectClasse').selectpicker({
 \t\t\t\t\tstyle: 'btn-default',
  \t\t\t\t\tsize: 4
\t\t\t\t});
            });
</script>

";
        
        $__internal_f41c8f66b1bfb3fa806409eedf9c71800f14abb422d8c0fdf6ee7b069c39177a->leave($__internal_f41c8f66b1bfb3fa806409eedf9c71800f14abb422d8c0fdf6ee7b069c39177a_prof);

        
        $__internal_0970573fe7edc44e2a549e761979558f28542a2ea5c5b247138dac18aec12f73->leave($__internal_0970573fe7edc44e2a549e761979558f28542a2ea5c5b247138dac18aec12f73_prof);

    }

    public function getTemplateName()
    {
        return "travailrealise/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 67,  167 => 66,  150 => 58,  145 => 56,  137 => 51,  132 => 49,  128 => 48,  122 => 45,  115 => 41,  110 => 39,  103 => 35,  96 => 31,  91 => 29,  85 => 26,  78 => 22,  73 => 20,  67 => 17,  55 => 8,  50 => 5,  41 => 4,  11 => 1,);
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
\t\t\t<div class=\"panel panel-default\">
\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t<h3 class=\"panel-title\">
\t\t\t\t\t\t
\t\t\t\t\t</h3>
\t\t\t\t</div>
\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t{{ form_label(form.matiere,null,{ 'label_attr': {'class': 'col-md-3 col-xs-12 control-label'} }) }}
\t\t\t\t\t\t<div class=\"col-md-6 col-xs-12\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t{{ form_widget(form.matiere,{ 'id':'selectMatiere', 'label_attr': {'class': 'form-control select'} }) }}
\t\t\t\t\t  \t\t</div>
\t\t\t\t\t\t\t{{ form_errors(form.matiere) }}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t{{ form_label(form.classe,null,{ 'label_attr': {'class': 'col-md-3 col-xs-12 control-label'} }) }}
\t\t\t\t\t\t<div class=\"col-md-6 col-xs-12\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t{{ form_widget(form.classe,{ 'id':'selectClasse', 'label_attr': {'class': 'form-control select'} }) }}
\t\t\t\t\t  \t\t</div>
\t\t\t\t\t\t\t{{ form_errors(form.classe) }}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t{{ form_label(form.date,null,{ 'label_attr': {'class': 'col-md-3 col-xs-12 control-label'} }) }}
\t\t\t\t\t\t<div class=\"col-md-6 col-xs-12\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><span class=\"fa fa-calendar\"></span></span>
\t\t\t\t\t   \t\t\t{{ form_widget(form.date) }}
\t\t\t\t\t  \t\t</div>
\t\t\t\t\t\t\t{{ form_errors(form.date) }}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t{{ form_label(form.travail,null,{ 'label_attr': {'class': 'col-md-3 col-xs-12 control-label'} }) }}
\t\t\t\t\t\t<div class=\"col-md-6 col-xs-12\">
\t\t\t\t\t\t\t<a class=\"file-input-wrapper btn btn-default  fileinput\">
\t\t                       \t<span>{{'global.parcourir'|trans}}</span>
\t\t                       \t{{ form_widget(form.travail,{ 'label_attr': {'class': 'fileinput'} } ) }}
\t\t\t\t  \t\t\t</a>
\t\t\t\t\t\t\t{{ form_errors(form.travail) }}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"panel-footer\">                                    
\t\t\t\t\t<input type=\"submit\" value=\"{{'add'|trans}}\" class=\"btn btn-primary pull-right\" />
\t\t\t\t</div>
\t\t\t\t{{ form_end(form) }}
\t\t\t</div>
\t\t</div>
\t</div>
</div>

{% endblock %}

{% block javascripts %}
\t
<script type=\"text/javascript\">

     \$( document ).ready( function() {

                \$('.dp-3').datepicker({startView: 2,format: 'yyyy-mm-dd' });
                \$('#selectMatiere').selectpicker({
 \t\t\t\t\tstyle: 'btn-default',
  \t\t\t\t\tsize: 4
\t\t\t\t});
\t\t\t\t\$('#selectClasse').selectpicker({
 \t\t\t\t\tstyle: 'btn-default',
  \t\t\t\t\tsize: 4
\t\t\t\t});
            });
</script>

{% endblock %}", "travailrealise/add.html.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\app\\Resources\\views\\travailrealise\\add.html.twig");
    }
}
