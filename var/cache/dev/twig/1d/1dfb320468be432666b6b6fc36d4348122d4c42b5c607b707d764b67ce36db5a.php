<?php

/* cours/add.html.twig */
class __TwigTemplate_3b1dbac035444c654df20cb6f521f7227daec848254efe79a5c2cf6262604ed9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base2.html.twig", "cours/add.html.twig", 1);
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
        $__internal_889e3866904d9fde5e0c2360e0528fd4f0d89b98c2c04b7e43de256f9548977b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_889e3866904d9fde5e0c2360e0528fd4f0d89b98c2c04b7e43de256f9548977b->enter($__internal_889e3866904d9fde5e0c2360e0528fd4f0d89b98c2c04b7e43de256f9548977b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "cours/add.html.twig"));

        $__internal_60595ddd9c80ed16c6a3067c2c28b8d3f4319251f9c51e72dc87b245594b35db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60595ddd9c80ed16c6a3067c2c28b8d3f4319251f9c51e72dc87b245594b35db->enter($__internal_60595ddd9c80ed16c6a3067c2c28b8d3f4319251f9c51e72dc87b245594b35db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "cours/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_889e3866904d9fde5e0c2360e0528fd4f0d89b98c2c04b7e43de256f9548977b->leave($__internal_889e3866904d9fde5e0c2360e0528fd4f0d89b98c2c04b7e43de256f9548977b_prof);

        
        $__internal_60595ddd9c80ed16c6a3067c2c28b8d3f4319251f9c51e72dc87b245594b35db->leave($__internal_60595ddd9c80ed16c6a3067c2c28b8d3f4319251f9c51e72dc87b245594b35db_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0cedd3e9fb310b02b9c0c06c9fb6b513356d3eedaeaa8658165f4588fb197fb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cedd3e9fb310b02b9c0c06c9fb6b513356d3eedaeaa8658165f4588fb197fb0->enter($__internal_0cedd3e9fb310b02b9c0c06c9fb6b513356d3eedaeaa8658165f4588fb197fb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9ce87ef8c7c3b3f6050054d83d3a3d254372ff09b76085e6da2b2e3855cbd553 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ce87ef8c7c3b3f6050054d83d3a3d254372ff09b76085e6da2b2e3855cbd553->enter($__internal_9ce87ef8c7c3b3f6050054d83d3a3d254372ff09b76085e6da2b2e3855cbd553_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"page-content-wrap\">
                
    <div class=\"row\">
        <div class=\"col-md-12\">  
\t";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
\t\t<div class=\"panel panel-default\">
\t\t\t<div class=\"panel-heading\">
\t\t\t\t<h3 class=\"panel-title\">
\t\t\t\t\t";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("evaluation.add"), "html", null, true);
        echo "
\t\t\t\t</h3>
\t\t\t</div>
\t\t\t<div class=\"panel-body\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "titre", array()), 'label', array("label_attr" => array("class" => "col-md-3 col-xs-12 control-label")));
        echo "
\t\t\t\t<div class=\"col-md-6 col-xs-12\">
\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t<span class=\"input-group-addon\"><span class=\"fa fa-pencil\"></span></span>
\t\t\t\t  \t\t\t";
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "titre", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t</div>
\t\t    \t\t\t";
        // line 23
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "titre", array()), 'errors');
        echo "
\t\t    \t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "devoir", array()), 'label', array("label_attr" => array("class" => "col-md-3 col-xs-12 control-label")));
        echo "
\t\t\t\t<div class=\"col-md-6 col-xs-12\">
\t\t\t\t\t<a class=\"file-input-wrapper btn btn-default  fileinput\">
                       \t<span>";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("global.parcourir"), "html", null, true);
        echo "</span>
                       \t";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "devoir", array()), 'widget', array("label_attr" => array("class" => "fileinput")));
        echo "
\t\t\t\t  \t</a>
\t\t\t\t\t
\t\t    \t\t";
        // line 34
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "devoir", array()), 'errors');
        echo "
\t\t    \t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
        // line 38
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "support", array()), 'label', array("label_attr" => array("class" => "col-md-3 col-xs-12 control-label")));
        echo "
\t\t\t\t\t<div class=\"col-md-6 col-xs-12\">
\t\t\t\t\t\t<a class=\"file-input-wrapper btn btn-default  fileinput\">
                            <span>";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("global.parcourir"), "html", null, true);
        echo "</span>
                            ";
        // line 42
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "support", array()), 'widget', array("label_attr" => array("class" => "fileinput")));
        echo "
                        </a>
                        ";
        // line 44
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "support", array()), 'errors');
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
        // line 48
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "annexe", array()), 'label', array("label_attr" => array("class" => "col-md-3 col-xs-12 control-label")));
        echo "
\t\t\t\t\t<div class=\"col-md-6 col-xs-12\">
\t\t\t\t\t\t
\t\t\t\t\t  \t<a class=\"file-input-wrapper btn btn-default  fileinput\">
\t\t\t\t\t  \t\t<span>";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("global.parcourir"), "html", null, true);
        echo "</span>
\t\t\t\t\t  \t\t";
        // line 53
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "annexe", array()), 'widget', array("label_attr" => array("class" => "fileinputForm")));
        echo "
\t\t\t\t\t  \t</a>                
\t\t\t\t\t\t";
        // line 55
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "annexe", array()), 'errors');
        echo "
\t\t\t\t    </div>
\t\t\t\t</div>
\t\t\t\t<input type=\"hidden\" name=\"idClasse\" value=\"";
        // line 58
        echo twig_escape_filter($this->env, ($context["idClasse"] ?? $this->getContext($context, "idClasse")), "html", null, true);
        echo "\">
\t\t\t\t<input type=\"hidden\" name=\"idMatiere\" value=\"";
        // line 59
        echo twig_escape_filter($this->env, ($context["idMatiere"] ?? $this->getContext($context, "idMatiere")), "html", null, true);
        echo "\">
\t\t\t</div>
\t\t\t<div class=\"panel-footer\">                                    
\t\t\t\t<input type=\"submit\" value=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("add"), "html", null, true);
        echo "\" class=\"btn btn-primary pull-right\" />
\t\t\t</div>
\t";
        // line 64
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
</div>

";
        
        $__internal_9ce87ef8c7c3b3f6050054d83d3a3d254372ff09b76085e6da2b2e3855cbd553->leave($__internal_9ce87ef8c7c3b3f6050054d83d3a3d254372ff09b76085e6da2b2e3855cbd553_prof);

        
        $__internal_0cedd3e9fb310b02b9c0c06c9fb6b513356d3eedaeaa8658165f4588fb197fb0->leave($__internal_0cedd3e9fb310b02b9c0c06c9fb6b513356d3eedaeaa8658165f4588fb197fb0_prof);

    }

    // line 70
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_cb21e59e277a96d67425047bc471cecb3ab6935ec176e67056bf1f0d0b180b2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb21e59e277a96d67425047bc471cecb3ab6935ec176e67056bf1f0d0b180b2b->enter($__internal_cb21e59e277a96d67425047bc471cecb3ab6935ec176e67056bf1f0d0b180b2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_5ab5285a83fcd7e70f4a9f5885d2c62b1d0e959c60cd78b4a17f00cf26a6bd76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ab5285a83fcd7e70f4a9f5885d2c62b1d0e959c60cd78b4a17f00cf26a6bd76->enter($__internal_5ab5285a83fcd7e70f4a9f5885d2c62b1d0e959c60cd78b4a17f00cf26a6bd76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 71
        echo "
<script type=\"text/javascript\" src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/bootstrap/bootstrap-file-input.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\">

  \$( document ).ready( function() {

//\$('#fileinputForm').fileinput();
            });
     
</script>

";
        
        $__internal_5ab5285a83fcd7e70f4a9f5885d2c62b1d0e959c60cd78b4a17f00cf26a6bd76->leave($__internal_5ab5285a83fcd7e70f4a9f5885d2c62b1d0e959c60cd78b4a17f00cf26a6bd76_prof);

        
        $__internal_cb21e59e277a96d67425047bc471cecb3ab6935ec176e67056bf1f0d0b180b2b->leave($__internal_cb21e59e277a96d67425047bc471cecb3ab6935ec176e67056bf1f0d0b180b2b_prof);

    }

    public function getTemplateName()
    {
        return "cours/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 72,  195 => 71,  186 => 70,  172 => 64,  167 => 62,  161 => 59,  157 => 58,  151 => 55,  146 => 53,  142 => 52,  135 => 48,  128 => 44,  123 => 42,  119 => 41,  113 => 38,  106 => 34,  100 => 31,  96 => 30,  90 => 27,  83 => 23,  78 => 21,  71 => 17,  63 => 12,  56 => 8,  50 => 4,  41 => 3,  11 => 1,);
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
\t\t<div class=\"panel panel-default\">
\t\t\t<div class=\"panel-heading\">
\t\t\t\t<h3 class=\"panel-title\">
\t\t\t\t\t{{'evaluation.add'|trans}}
\t\t\t\t</h3>
\t\t\t</div>
\t\t\t<div class=\"panel-body\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t{{ form_label(form.titre,null,{ 'label_attr': {'class': 'col-md-3 col-xs-12 control-label'} }) }}
\t\t\t\t<div class=\"col-md-6 col-xs-12\">
\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t<span class=\"input-group-addon\"><span class=\"fa fa-pencil\"></span></span>
\t\t\t\t  \t\t\t{{ form_widget(form.titre ,{ 'attr': {'class': 'form-control'} }) }}
\t\t\t\t\t</div>
\t\t    \t\t\t{{ form_errors(form.titre) }}
\t\t    \t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t{{ form_label(form.devoir,null,{ 'label_attr': {'class': 'col-md-3 col-xs-12 control-label'} }) }}
\t\t\t\t<div class=\"col-md-6 col-xs-12\">
\t\t\t\t\t<a class=\"file-input-wrapper btn btn-default  fileinput\">
                       \t<span>{{'global.parcourir'|trans}}</span>
                       \t{{ form_widget(form.devoir,{ 'label_attr': {'class': 'fileinput'} } ) }}
\t\t\t\t  \t</a>
\t\t\t\t\t
\t\t    \t\t{{ form_errors(form.devoir) }}
\t\t    \t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t{{ form_label(form.support,null,{ 'label_attr': {'class': 'col-md-3 col-xs-12 control-label'} }) }}
\t\t\t\t\t<div class=\"col-md-6 col-xs-12\">
\t\t\t\t\t\t<a class=\"file-input-wrapper btn btn-default  fileinput\">
                            <span>{{'global.parcourir'|trans}}</span>
                            {{ form_widget(form.support,{ 'label_attr': {'class': 'fileinput'} } ) }}
                        </a>
                        {{ form_errors(form.support) }}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t{{ form_label(form.annexe,null,{ 'label_attr': {'class': 'col-md-3 col-xs-12 control-label'} }) }}
\t\t\t\t\t<div class=\"col-md-6 col-xs-12\">
\t\t\t\t\t\t
\t\t\t\t\t  \t<a class=\"file-input-wrapper btn btn-default  fileinput\">
\t\t\t\t\t  \t\t<span>{{'global.parcourir'|trans}}</span>
\t\t\t\t\t  \t\t{{ form_widget(form.annexe,{ 'label_attr': {'class': 'fileinputForm'} } ) }}
\t\t\t\t\t  \t</a>                
\t\t\t\t\t\t{{ form_errors(form.annexe) }}
\t\t\t\t    </div>
\t\t\t\t</div>
\t\t\t\t<input type=\"hidden\" name=\"idClasse\" value=\"{{idClasse}}\">
\t\t\t\t<input type=\"hidden\" name=\"idMatiere\" value=\"{{idMatiere}}\">
\t\t\t</div>
\t\t\t<div class=\"panel-footer\">                                    
\t\t\t\t<input type=\"submit\" value=\"{{'add'|trans}}\" class=\"btn btn-primary pull-right\" />
\t\t\t</div>
\t{{ form_end(form) }}
</div>

{% endblock %}


{% block javascripts %}

<script type=\"text/javascript\" src=\"{{asset('js/plugins/bootstrap/bootstrap-file-input.js')}}\"></script>
<script type=\"text/javascript\">

  \$( document ).ready( function() {

//\$('#fileinputForm').fileinput();
            });
     
</script>

{% endblock %}", "cours/add.html.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\app\\Resources\\views\\cours\\add.html.twig");
    }
}
