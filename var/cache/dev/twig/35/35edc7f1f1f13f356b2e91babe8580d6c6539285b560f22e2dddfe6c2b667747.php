<?php

/* :travailrealise:add.html.twig */
class __TwigTemplate_c2dfb883ef8ba9d4d2b2dae12904ec7c73d998a5b287dabd2764cbd64c674a5c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":travailrealise:add.html.twig", 1);
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
        $__internal_56cf96dbfdf46c383f38dc504bd705c32aaa66c77bf74eae654c702680795a70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56cf96dbfdf46c383f38dc504bd705c32aaa66c77bf74eae654c702680795a70->enter($__internal_56cf96dbfdf46c383f38dc504bd705c32aaa66c77bf74eae654c702680795a70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":travailrealise:add.html.twig"));

        $__internal_be40b1ca4753ee1e9c90919c8dfe649c5151dcfff330fd7f2624a47f4383866a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be40b1ca4753ee1e9c90919c8dfe649c5151dcfff330fd7f2624a47f4383866a->enter($__internal_be40b1ca4753ee1e9c90919c8dfe649c5151dcfff330fd7f2624a47f4383866a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":travailrealise:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_56cf96dbfdf46c383f38dc504bd705c32aaa66c77bf74eae654c702680795a70->leave($__internal_56cf96dbfdf46c383f38dc504bd705c32aaa66c77bf74eae654c702680795a70_prof);

        
        $__internal_be40b1ca4753ee1e9c90919c8dfe649c5151dcfff330fd7f2624a47f4383866a->leave($__internal_be40b1ca4753ee1e9c90919c8dfe649c5151dcfff330fd7f2624a47f4383866a_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_c6a8ad2eb74bfa0c7962d8604a1f8d3b8f3e4f45c4ca17df48201471016b1d78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6a8ad2eb74bfa0c7962d8604a1f8d3b8f3e4f45c4ca17df48201471016b1d78->enter($__internal_c6a8ad2eb74bfa0c7962d8604a1f8d3b8f3e4f45c4ca17df48201471016b1d78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e1d70879f3d125010157d8c37e07323540768815f5fd2f3585b5481740974bef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1d70879f3d125010157d8c37e07323540768815f5fd2f3585b5481740974bef->enter($__internal_e1d70879f3d125010157d8c37e07323540768815f5fd2f3585b5481740974bef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<div class=\"container\">
";
        if ($this->env->isDebug()) {
            // line 6
            \Symfony\Component\VarDumper\VarDumper::dump((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")));
        }
        // line 7
        echo "\t";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
\t\t
\t\t<button type=\"submit\">Valider</button>
\t";
        // line 10
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
</div>

";
        
        $__internal_e1d70879f3d125010157d8c37e07323540768815f5fd2f3585b5481740974bef->leave($__internal_e1d70879f3d125010157d8c37e07323540768815f5fd2f3585b5481740974bef_prof);

        
        $__internal_c6a8ad2eb74bfa0c7962d8604a1f8d3b8f3e4f45c4ca17df48201471016b1d78->leave($__internal_c6a8ad2eb74bfa0c7962d8604a1f8d3b8f3e4f45c4ca17df48201471016b1d78_prof);

    }

    public function getTemplateName()
    {
        return ":travailrealise:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 10,  56 => 7,  53 => 6,  49 => 5,  40 => 4,  11 => 1,);
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
<div class=\"container\">
{% dump(data) %}
\t{{ form_start(form) }}
\t\t
\t\t<button type=\"submit\">Valider</button>
\t{{ form_end(form) }}
</div>

{% endblock %}", ":travailrealise:add.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/views/travailrealise/add.html.twig");
    }
}
