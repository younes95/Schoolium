<?php

/* menusViews/addMenu.html.twig */
class __TwigTemplate_e169d7660420f733a15224b93dcd0f614d5a500a745360ae4c2809f94b8bc407 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base2.html.twig", "menusViews/addMenu.html.twig", 1);
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
        $__internal_448e42a074012f14a36c9b68c1226af5800083344bc7ae574763e0e2b410667d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_448e42a074012f14a36c9b68c1226af5800083344bc7ae574763e0e2b410667d->enter($__internal_448e42a074012f14a36c9b68c1226af5800083344bc7ae574763e0e2b410667d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "menusViews/addMenu.html.twig"));

        $__internal_43cf2c90c172fbf7e288a5fbd55c5d04b367a337171676f057d7e91247508ff6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43cf2c90c172fbf7e288a5fbd55c5d04b367a337171676f057d7e91247508ff6->enter($__internal_43cf2c90c172fbf7e288a5fbd55c5d04b367a337171676f057d7e91247508ff6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "menusViews/addMenu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_448e42a074012f14a36c9b68c1226af5800083344bc7ae574763e0e2b410667d->leave($__internal_448e42a074012f14a36c9b68c1226af5800083344bc7ae574763e0e2b410667d_prof);

        
        $__internal_43cf2c90c172fbf7e288a5fbd55c5d04b367a337171676f057d7e91247508ff6->leave($__internal_43cf2c90c172fbf7e288a5fbd55c5d04b367a337171676f057d7e91247508ff6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_cfea8106ce6448e5459f3f68b749291476c81d75adde01b96d63d6d30fd0dd3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfea8106ce6448e5459f3f68b749291476c81d75adde01b96d63d6d30fd0dd3d->enter($__internal_cfea8106ce6448e5459f3f68b749291476c81d75adde01b96d63d6d30fd0dd3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ca69580616d464967ecd5f17d47f5d132236632df80faa1233eef4c9afc3c557 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca69580616d464967ecd5f17d47f5d132236632df80faa1233eef4c9afc3c557->enter($__internal_ca69580616d464967ecd5f17d47f5d132236632df80faa1233eef4c9afc3c557_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ca69580616d464967ecd5f17d47f5d132236632df80faa1233eef4c9afc3c557->leave($__internal_ca69580616d464967ecd5f17d47f5d132236632df80faa1233eef4c9afc3c557_prof);

        
        $__internal_cfea8106ce6448e5459f3f68b749291476c81d75adde01b96d63d6d30fd0dd3d->leave($__internal_cfea8106ce6448e5459f3f68b749291476c81d75adde01b96d63d6d30fd0dd3d_prof);

    }

    // line 42
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b8b6fb82ded4edfced0e79aeb1017f55856f038f1d30967e9a8b042eb40378c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8b6fb82ded4edfced0e79aeb1017f55856f038f1d30967e9a8b042eb40378c5->enter($__internal_b8b6fb82ded4edfced0e79aeb1017f55856f038f1d30967e9a8b042eb40378c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_52a303bc23542995081c317b5361e896970115721835d34c08fbe0980b9a339d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52a303bc23542995081c317b5361e896970115721835d34c08fbe0980b9a339d->enter($__internal_52a303bc23542995081c317b5361e896970115721835d34c08fbe0980b9a339d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 43
        echo "\t<script type='text/javascript' src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/bootstrap/bootstrap-select.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_52a303bc23542995081c317b5361e896970115721835d34c08fbe0980b9a339d->leave($__internal_52a303bc23542995081c317b5361e896970115721835d34c08fbe0980b9a339d_prof);

        
        $__internal_b8b6fb82ded4edfced0e79aeb1017f55856f038f1d30967e9a8b042eb40378c5->leave($__internal_b8b6fb82ded4edfced0e79aeb1017f55856f038f1d30967e9a8b042eb40378c5_prof);

    }

    public function getTemplateName()
    {
        return "menusViews/addMenu.html.twig";
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
", "menusViews/addMenu.html.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\app\\Resources\\views\\menusViews\\addMenu.html.twig");
    }
}
