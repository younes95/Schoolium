<?php

/* :absence:add.html.twig */
class __TwigTemplate_ca85dbf1011aaa597d92897ccf61cb669db1d8de04cd13d3d01ec2e93173cbfd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":absence:add.html.twig", 1);
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
        $__internal_b211a1b58544ee3590d45d2f8eca5ec2d13e144b1919f7edfb5fcc99382fc36a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b211a1b58544ee3590d45d2f8eca5ec2d13e144b1919f7edfb5fcc99382fc36a->enter($__internal_b211a1b58544ee3590d45d2f8eca5ec2d13e144b1919f7edfb5fcc99382fc36a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":absence:add.html.twig"));

        $__internal_03ee7f6b556316c1ff361ab5997f2bb294a74148658f9b82ac823873dea0e534 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03ee7f6b556316c1ff361ab5997f2bb294a74148658f9b82ac823873dea0e534->enter($__internal_03ee7f6b556316c1ff361ab5997f2bb294a74148658f9b82ac823873dea0e534_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":absence:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b211a1b58544ee3590d45d2f8eca5ec2d13e144b1919f7edfb5fcc99382fc36a->leave($__internal_b211a1b58544ee3590d45d2f8eca5ec2d13e144b1919f7edfb5fcc99382fc36a_prof);

        
        $__internal_03ee7f6b556316c1ff361ab5997f2bb294a74148658f9b82ac823873dea0e534->leave($__internal_03ee7f6b556316c1ff361ab5997f2bb294a74148658f9b82ac823873dea0e534_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9c1ece820a8932b3d91b00bd88df4309c273d536a6eb62a41f02dadd8b4e61db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c1ece820a8932b3d91b00bd88df4309c273d536a6eb62a41f02dadd8b4e61db->enter($__internal_9c1ece820a8932b3d91b00bd88df4309c273d536a6eb62a41f02dadd8b4e61db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2929d490b551ae09173ed81fb44ea43d0fc12b4fc2a3819c814eda646b888d90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2929d490b551ae09173ed81fb44ea43d0fc12b4fc2a3819c814eda646b888d90->enter($__internal_2929d490b551ae09173ed81fb44ea43d0fc12b4fc2a3819c814eda646b888d90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"container\">
\t";
        // line 5
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
\t\t<div class=\"form-group\">
\t\t\t";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "eleve", array()), 'label');
        echo "
\t\t    ";
        // line 8
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "eleve", array()), 'widget');
        echo "
\t\t    ";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "eleve", array()), 'errors');
        echo "
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t";
        // line 12
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'label');
        echo "
\t\t    ";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'widget');
        echo "
\t\t    ";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'errors');
        echo "
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "commentaire", array()), 'label');
        echo "
\t\t    ";
        // line 18
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "commentaire", array()), 'widget');
        echo "
\t\t    ";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "commentaire", array()), 'errors');
        echo "
\t\t</div>
\t\t
\t\t<button type=\"submit\">Chercher</button>
\t";
        // line 23
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
</div>

";
        
        $__internal_2929d490b551ae09173ed81fb44ea43d0fc12b4fc2a3819c814eda646b888d90->leave($__internal_2929d490b551ae09173ed81fb44ea43d0fc12b4fc2a3819c814eda646b888d90_prof);

        
        $__internal_9c1ece820a8932b3d91b00bd88df4309c273d536a6eb62a41f02dadd8b4e61db->leave($__internal_9c1ece820a8932b3d91b00bd88df4309c273d536a6eb62a41f02dadd8b4e61db_prof);

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
        return array (  100 => 23,  93 => 19,  89 => 18,  85 => 17,  79 => 14,  75 => 13,  71 => 12,  65 => 9,  61 => 8,  57 => 7,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
\t{{ form_start(form) }}
\t\t<div class=\"form-group\">
\t\t\t{{ form_label(form.eleve) }}
\t\t    {{ form_widget(form.eleve) }}
\t\t    {{ form_errors(form.eleve) }}
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t{{ form_label(form.date) }}
\t\t    {{ form_widget(form.date) }}
\t\t    {{ form_errors(form.date) }}
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t{{ form_label(form.commentaire) }}
\t\t    {{ form_widget(form.commentaire) }}
\t\t    {{ form_errors(form.commentaire) }}
\t\t</div>
\t\t
\t\t<button type=\"submit\">Chercher</button>
\t{{ form_end(form) }}
</div>

{% endblock %}", ":absence:add.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/views/absence/add.html.twig");
    }
}
