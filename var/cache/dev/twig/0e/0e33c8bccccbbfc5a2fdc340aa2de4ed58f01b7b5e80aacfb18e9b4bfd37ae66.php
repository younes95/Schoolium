<?php

/* :menusViews:addMenu.html.twig */
class __TwigTemplate_d7f901663a284a2343711b477c92f0f1aa2609330b01c026dc9cb85c9680b576 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base2.html.twig", ":menusViews:addMenu.html.twig", 1);
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
        $__internal_d53d5b3fd44a19ff28a2160f195bfa956070afd0fd7671a5e875bb0978469e28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d53d5b3fd44a19ff28a2160f195bfa956070afd0fd7671a5e875bb0978469e28->enter($__internal_d53d5b3fd44a19ff28a2160f195bfa956070afd0fd7671a5e875bb0978469e28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":menusViews:addMenu.html.twig"));

        $__internal_16cb1c01a0c69d49de32ca37995300b5dceebdf9279e1d31294fab5ccf6ee462 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16cb1c01a0c69d49de32ca37995300b5dceebdf9279e1d31294fab5ccf6ee462->enter($__internal_16cb1c01a0c69d49de32ca37995300b5dceebdf9279e1d31294fab5ccf6ee462_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":menusViews:addMenu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d53d5b3fd44a19ff28a2160f195bfa956070afd0fd7671a5e875bb0978469e28->leave($__internal_d53d5b3fd44a19ff28a2160f195bfa956070afd0fd7671a5e875bb0978469e28_prof);

        
        $__internal_16cb1c01a0c69d49de32ca37995300b5dceebdf9279e1d31294fab5ccf6ee462->leave($__internal_16cb1c01a0c69d49de32ca37995300b5dceebdf9279e1d31294fab5ccf6ee462_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e6c861e07d6d312267c061a8ba3c912b858405fa1597477282c15471ed8e410e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6c861e07d6d312267c061a8ba3c912b858405fa1597477282c15471ed8e410e->enter($__internal_e6c861e07d6d312267c061a8ba3c912b858405fa1597477282c15471ed8e410e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_44002d8b4c93d5fcf777a92c684db56e06ca5042f2db24f0be2d62402581a665 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44002d8b4c93d5fcf777a92c684db56e06ca5042f2db24f0be2d62402581a665->enter($__internal_44002d8b4c93d5fcf777a92c684db56e06ca5042f2db24f0be2d62402581a665_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"page-content-wrap\">
                
    <div class=\"row\">
        <div class=\"col-md-12\">               
\t\t\t";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "  
\t\t\t\t<div class=\"panel panel-default\">
\t\t            <div class=\"panel-heading\">
\t\t                <h3 class=\"panel-title\"><strong>";
        // line 11
        if ((isset($context["edit"]) ? $context["edit"] : $this->getContext($context, "edit"))) {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("edit"), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("add"), "html", null, true);
        }
        echo " </strong> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("menu"), "html", null, true);
        echo "</h3>
\t\t            </div>
\t\t            <div class=\"panel-body\">

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "jour", array()), 'label', array("label_attr" => array("class" => "col-md-3 col-xs-12 control-label")));
        echo "
\t\t\t\t\t\t\t<div class=\"col-md-6 col-xs-12\">
\t\t\t\t\t\t    \t";
        // line 18
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "jour", array()), 'widget', array("attr" => array("class" => "form-control select")));
        echo "
\t\t\t\t\t\t    \t";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "jour", array()), 'errors');
        echo "
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t";
        // line 24
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "menu", array()), 'label', array("label_attr" => array("class" => "col-md-3 col-xs-12 control-label")));
        echo "
\t\t\t\t\t\t\t<div class=\"col-md-6 col-xs-12\">
\t\t\t\t\t\t    \t";
        // line 26
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "menu", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t\t    \t";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "menu", array()), 'errors');
        echo "
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t        <div class=\"panel-footer\">                                    
\t\t\t            <button class=\"btn btn-primary pull-right\">Valider</button>
\t\t\t        </div>
\t\t\t    </div>
\t\t\t\t";
        // line 35
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t\t\t</div>
\t    </div>                     
\t</div>
";
        
        $__internal_44002d8b4c93d5fcf777a92c684db56e06ca5042f2db24f0be2d62402581a665->leave($__internal_44002d8b4c93d5fcf777a92c684db56e06ca5042f2db24f0be2d62402581a665_prof);

        
        $__internal_e6c861e07d6d312267c061a8ba3c912b858405fa1597477282c15471ed8e410e->leave($__internal_e6c861e07d6d312267c061a8ba3c912b858405fa1597477282c15471ed8e410e_prof);

    }

    // line 42
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d404d9aed95ba71a3535945d0042c3a207d8510ed36cb524e9a1641a681b7cf6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d404d9aed95ba71a3535945d0042c3a207d8510ed36cb524e9a1641a681b7cf6->enter($__internal_d404d9aed95ba71a3535945d0042c3a207d8510ed36cb524e9a1641a681b7cf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_70a8a35f8b49b6a562bfa9bd4125d5d50a8f7b5ce29cc6c4edf0955c56a843f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70a8a35f8b49b6a562bfa9bd4125d5d50a8f7b5ce29cc6c4edf0955c56a843f5->enter($__internal_70a8a35f8b49b6a562bfa9bd4125d5d50a8f7b5ce29cc6c4edf0955c56a843f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 43
        echo "\t<script type='text/javascript' src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/bootstrap/bootstrap-select.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_70a8a35f8b49b6a562bfa9bd4125d5d50a8f7b5ce29cc6c4edf0955c56a843f5->leave($__internal_70a8a35f8b49b6a562bfa9bd4125d5d50a8f7b5ce29cc6c4edf0955c56a843f5_prof);

        
        $__internal_d404d9aed95ba71a3535945d0042c3a207d8510ed36cb524e9a1641a681b7cf6->leave($__internal_d404d9aed95ba71a3535945d0042c3a207d8510ed36cb524e9a1641a681b7cf6_prof);

    }

    public function getTemplateName()
    {
        return ":menusViews:addMenu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 43,  128 => 42,  113 => 35,  102 => 27,  98 => 26,  93 => 24,  85 => 19,  81 => 18,  76 => 16,  62 => 11,  56 => 8,  50 => 4,  41 => 3,  11 => 1,);
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
\t\t            <div class=\"panel-heading\">
\t\t                <h3 class=\"panel-title\"><strong>{% if edit %}{{'edit'|trans}}{% else %}{{'add'|trans}}{% endif %} </strong> {{'menu'|trans}}</h3>
\t\t            </div>
\t\t            <div class=\"panel-body\">

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t{{ form_label(form.jour , null ,{ 'label_attr': {'class': 'col-md-3 col-xs-12 control-label'} }) }}
\t\t\t\t\t\t\t<div class=\"col-md-6 col-xs-12\">
\t\t\t\t\t\t    \t{{ form_widget(form.jour ,{ 'attr': {'class': 'form-control select'} }) }}
\t\t\t\t\t\t    \t{{ form_errors(form.jour) }}
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t{{ form_label(form.menu , null ,{ 'label_attr': {'class': 'col-md-3 col-xs-12 control-label'} }) }}
\t\t\t\t\t\t\t<div class=\"col-md-6 col-xs-12\">
\t\t\t\t\t\t    \t{{ form_widget(form.menu ,{ 'attr': {'class': 'form-control'} }) }}
\t\t\t\t\t\t    \t{{ form_errors(form.menu) }}
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t        <div class=\"panel-footer\">                                    
\t\t\t            <button class=\"btn btn-primary pull-right\">Valider</button>
\t\t\t        </div>
\t\t\t    </div>
\t\t\t\t{{ form_end(form) }}
\t\t\t</div>
\t    </div>                     
\t</div>
{% endblock %}


{% block javascripts %}
\t<script type='text/javascript' src=\"{{ asset('js/plugins/bootstrap/bootstrap-select.js') }}\"></script>
{% endblock %}
", ":menusViews:addMenu.html.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\app/Resources\\views/menusViews/addMenu.html.twig");
    }
}
