<?php

/* cours/edit.html.twig */
class __TwigTemplate_916ff205da999c4d824699baaa8d6e1b9f0e3189e6b15f16df5e0653fd79c3d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base2.html.twig", "cours/edit.html.twig", 1);
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
        $__internal_9025baa6769f196359ed1f6ab3f815259a5085b58b3a25e844bdcdaff780bd4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9025baa6769f196359ed1f6ab3f815259a5085b58b3a25e844bdcdaff780bd4c->enter($__internal_9025baa6769f196359ed1f6ab3f815259a5085b58b3a25e844bdcdaff780bd4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "cours/edit.html.twig"));

        $__internal_561e56ba3cee4db2f84aeb770c6c85c641e50c7cafd8c3734095a2269fa32253 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_561e56ba3cee4db2f84aeb770c6c85c641e50c7cafd8c3734095a2269fa32253->enter($__internal_561e56ba3cee4db2f84aeb770c6c85c641e50c7cafd8c3734095a2269fa32253_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "cours/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9025baa6769f196359ed1f6ab3f815259a5085b58b3a25e844bdcdaff780bd4c->leave($__internal_9025baa6769f196359ed1f6ab3f815259a5085b58b3a25e844bdcdaff780bd4c_prof);

        
        $__internal_561e56ba3cee4db2f84aeb770c6c85c641e50c7cafd8c3734095a2269fa32253->leave($__internal_561e56ba3cee4db2f84aeb770c6c85c641e50c7cafd8c3734095a2269fa32253_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ee5640eb6f079346f921950b2bc7959881adca92dabd40da721bc5b7f80b8a7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee5640eb6f079346f921950b2bc7959881adca92dabd40da721bc5b7f80b8a7b->enter($__internal_ee5640eb6f079346f921950b2bc7959881adca92dabd40da721bc5b7f80b8a7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4f6b067ff01285a4fbe180bb02739f14b36200215d1ac704aaef8cf4f76b391b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f6b067ff01285a4fbe180bb02739f14b36200215d1ac704aaef8cf4f76b391b->enter($__internal_4f6b067ff01285a4fbe180bb02739f14b36200215d1ac704aaef8cf4f76b391b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"page-content-wrap\">
                ";
        if ($this->env->isDebug()) {
            // line 5
            \Symfony\Component\VarDumper\VarDumper::dump(($context["edit_form"] ?? $this->getContext($context, "edit_form")));
        }
        // line 6
        echo "    <div class=\"row\">
        <div class=\"col-md-12\">  
\t";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
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
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "titre", array()), 'label', array("label_attr" => array("class" => "col-md-3 col-xs-12 control-label")));
        echo "
\t\t\t\t<div class=\"col-md-6 col-xs-12\">
\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t<span class=\"input-group-addon\"><span class=\"fa fa-pencil\"></span></span>
\t\t\t\t  \t\t\t";
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "titre", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t</div>
\t\t    \t\t\t";
        // line 23
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "titre", array()), 'errors');
        echo "
\t\t    \t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "devoir", array()), 'label', array("label_attr" => array("class" => "col-md-3 col-xs-12 control-label")));
        echo "
\t\t\t\t<div class=\"col-md-6 col-xs-12\">
\t\t\t\t\t<a class=\"file-input-wrapper btn btn-default  fileinput\">
                       \t<span>";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("global.parcourir"), "html", null, true);
        echo "</span>
                       \t";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "devoir", array()), 'widget', array("label_attr" => array("class" => "fileinput")));
        echo "
\t\t\t\t  \t</a>
\t\t\t\t\t
\t\t    \t\t";
        // line 34
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "devoir", array()), 'errors');
        echo "
\t\t    \t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
        // line 38
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "support", array()), 'label', array("label_attr" => array("class" => "col-md-3 col-xs-12 control-label")));
        echo "
\t\t\t\t\t<div class=\"col-md-6 col-xs-12\">
\t\t\t\t\t\t<a class=\"file-input-wrapper btn btn-default  fileinput\">
                            <span>";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("global.parcourir"), "html", null, true);
        echo "</span>
                            ";
        // line 42
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "support", array()), 'widget', array("label_attr" => array("class" => "fileinput")));
        echo "
                        </a>
                        ";
        // line 44
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "support", array()), 'errors');
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
        // line 48
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "annexe", array()), 'label', array("label_attr" => array("class" => "col-md-3 col-xs-12 control-label")));
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
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "annexe", array()), 'widget', array("label_attr" => array("class" => "fileinputForm")));
        echo "
\t\t\t\t\t  \t</a>                
\t\t\t\t\t\t";
        // line 55
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "annexe", array()), 'errors');
        echo "
\t\t\t\t    </div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"panel-footer\">                                    
\t\t\t\t<input type=\"submit\" value=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("global.edit"), "html", null, true);
        echo "\" class=\"btn btn-primary pull-right\" />
\t\t\t</div>
\t";
        // line 62
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "
</div>

";
        
        $__internal_4f6b067ff01285a4fbe180bb02739f14b36200215d1ac704aaef8cf4f76b391b->leave($__internal_4f6b067ff01285a4fbe180bb02739f14b36200215d1ac704aaef8cf4f76b391b_prof);

        
        $__internal_ee5640eb6f079346f921950b2bc7959881adca92dabd40da721bc5b7f80b8a7b->leave($__internal_ee5640eb6f079346f921950b2bc7959881adca92dabd40da721bc5b7f80b8a7b_prof);

    }

    // line 68
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_72fc2352401efabe85d8475646da7e5b9b92355335c262ea5729499ca5aa46ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72fc2352401efabe85d8475646da7e5b9b92355335c262ea5729499ca5aa46ff->enter($__internal_72fc2352401efabe85d8475646da7e5b9b92355335c262ea5729499ca5aa46ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_599bc3952c07ff238974aeb7ccc54c2a2ba77b0500e66b11938dc3a50cec9918 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_599bc3952c07ff238974aeb7ccc54c2a2ba77b0500e66b11938dc3a50cec9918->enter($__internal_599bc3952c07ff238974aeb7ccc54c2a2ba77b0500e66b11938dc3a50cec9918_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 69
        echo "
<script type=\"text/javascript\" src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/bootstrap/bootstrap-file-input.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\">

  \$( document ).ready( function() {

//\$('#fileinputForm').fileinput();
            });
     
</script>

";
        
        $__internal_599bc3952c07ff238974aeb7ccc54c2a2ba77b0500e66b11938dc3a50cec9918->leave($__internal_599bc3952c07ff238974aeb7ccc54c2a2ba77b0500e66b11938dc3a50cec9918_prof);

        
        $__internal_72fc2352401efabe85d8475646da7e5b9b92355335c262ea5729499ca5aa46ff->leave($__internal_72fc2352401efabe85d8475646da7e5b9b92355335c262ea5729499ca5aa46ff_prof);

    }

    public function getTemplateName()
    {
        return "cours/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 70,  192 => 69,  183 => 68,  169 => 62,  164 => 60,  156 => 55,  151 => 53,  147 => 52,  140 => 48,  133 => 44,  128 => 42,  124 => 41,  118 => 38,  111 => 34,  105 => 31,  101 => 30,  95 => 27,  88 => 23,  83 => 21,  76 => 17,  68 => 12,  61 => 8,  57 => 6,  54 => 5,  50 => 4,  41 => 3,  11 => 1,);
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
                {% dump(edit_form) %}
    <div class=\"row\">
        <div class=\"col-md-12\">  
\t{{ form_start(edit_form, { 'attr' : { 'class': 'form-horizontal' } }) }}
\t\t<div class=\"panel panel-default\">
\t\t\t<div class=\"panel-heading\">
\t\t\t\t<h3 class=\"panel-title\">
\t\t\t\t\t{{'evaluation.add'|trans}}
\t\t\t\t</h3>
\t\t\t</div>
\t\t\t<div class=\"panel-body\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t{{ form_label(edit_form.titre,null,{ 'label_attr': {'class': 'col-md-3 col-xs-12 control-label'} }) }}
\t\t\t\t<div class=\"col-md-6 col-xs-12\">
\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t<span class=\"input-group-addon\"><span class=\"fa fa-pencil\"></span></span>
\t\t\t\t  \t\t\t{{ form_widget(edit_form.titre ,{ 'attr': {'class': 'form-control'} }) }}
\t\t\t\t\t</div>
\t\t    \t\t\t{{ form_errors(edit_form.titre) }}
\t\t    \t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t{{ form_label(edit_form.devoir,null,{ 'label_attr': {'class': 'col-md-3 col-xs-12 control-label'} }) }}
\t\t\t\t<div class=\"col-md-6 col-xs-12\">
\t\t\t\t\t<a class=\"file-input-wrapper btn btn-default  fileinput\">
                       \t<span>{{'global.parcourir'|trans}}</span>
                       \t{{ form_widget(edit_form.devoir,{ 'label_attr': {'class': 'fileinput'} } ) }}
\t\t\t\t  \t</a>
\t\t\t\t\t
\t\t    \t\t{{ form_errors(edit_form.devoir) }}
\t\t    \t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t{{ form_label(edit_form.support,null,{ 'label_attr': {'class': 'col-md-3 col-xs-12 control-label'} }) }}
\t\t\t\t\t<div class=\"col-md-6 col-xs-12\">
\t\t\t\t\t\t<a class=\"file-input-wrapper btn btn-default  fileinput\">
                            <span>{{'global.parcourir'|trans}}</span>
                            {{ form_widget(edit_form.support,{ 'label_attr': {'class': 'fileinput'} } ) }}
                        </a>
                        {{ form_errors(edit_form.support) }}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t{{ form_label(edit_form.annexe,null,{ 'label_attr': {'class': 'col-md-3 col-xs-12 control-label'} }) }}
\t\t\t\t\t<div class=\"col-md-6 col-xs-12\">
\t\t\t\t\t\t
\t\t\t\t\t  \t<a class=\"file-input-wrapper btn btn-default  fileinput\">
\t\t\t\t\t  \t\t<span>{{'global.parcourir'|trans}}</span>
\t\t\t\t\t  \t\t{{ form_widget(edit_form.annexe,{ 'label_attr': {'class': 'fileinputForm'} } ) }}
\t\t\t\t\t  \t</a>                
\t\t\t\t\t\t{{ form_errors(edit_form.annexe) }}
\t\t\t\t    </div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"panel-footer\">                                    
\t\t\t\t<input type=\"submit\" value=\"{{'global.edit'|trans}}\" class=\"btn btn-primary pull-right\" />
\t\t\t</div>
\t{{ form_end(edit_form) }}
</div>

{% endblock %}


{% block javascripts %}

<script type=\"text/javascript\" src=\"{{asset('js/plugins/bootstrap/bootstrap-file-input.js')}}\"></script>
<script type=\"text/javascript\">

  \$( document ).ready( function() {

//\$('#fileinputForm').fileinput();
            });
     
</script>

{% endblock %}", "cours/edit.html.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\app\\Resources\\views\\cours\\edit.html.twig");
    }
}
