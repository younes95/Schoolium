<?php

/* matieresViews/addMatiere.html.twig */
class __TwigTemplate_171b11afdc28020eb910fac11cf7db425a085c49b3b01f43fe16811bbe1b4351 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "matieresViews/addMatiere.html.twig", 1);
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
        $__internal_9b66a428c16b067f426b558a32c67dc1a795e8e4613e2c0d5c9739f0812f6bd6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b66a428c16b067f426b558a32c67dc1a795e8e4613e2c0d5c9739f0812f6bd6->enter($__internal_9b66a428c16b067f426b558a32c67dc1a795e8e4613e2c0d5c9739f0812f6bd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "matieresViews/addMatiere.html.twig"));

        $__internal_c2b9ee4537bfdfab4550cfd6304d3f977f919911b72ee09ecec5b4d467847acc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2b9ee4537bfdfab4550cfd6304d3f977f919911b72ee09ecec5b4d467847acc->enter($__internal_c2b9ee4537bfdfab4550cfd6304d3f977f919911b72ee09ecec5b4d467847acc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "matieresViews/addMatiere.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b66a428c16b067f426b558a32c67dc1a795e8e4613e2c0d5c9739f0812f6bd6->leave($__internal_9b66a428c16b067f426b558a32c67dc1a795e8e4613e2c0d5c9739f0812f6bd6_prof);

        
        $__internal_c2b9ee4537bfdfab4550cfd6304d3f977f919911b72ee09ecec5b4d467847acc->leave($__internal_c2b9ee4537bfdfab4550cfd6304d3f977f919911b72ee09ecec5b4d467847acc_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_cf01c3095221beae3b58179b0e266f321ea47cba37ba9d6edf59fa216ac8a3a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf01c3095221beae3b58179b0e266f321ea47cba37ba9d6edf59fa216ac8a3a1->enter($__internal_cf01c3095221beae3b58179b0e266f321ea47cba37ba9d6edf59fa216ac8a3a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a6efca8e207622c36ef1ba488320e7b8b6a63f80242c3196e5e8bccc7c26e7c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6efca8e207622c36ef1ba488320e7b8b6a63f80242c3196e5e8bccc7c26e7c1->enter($__internal_a6efca8e207622c36ef1ba488320e7b8b6a63f80242c3196e5e8bccc7c26e7c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"container\">
<h1>";
        // line 5
        if (($context["edit"] ?? $this->getContext($context, "edit"))) {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("edit"), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("add"), "html", null, true);
        }
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("matiere"), "html", null, true);
        echo "</h1>
<div class=\"container\">
\t";
        // line 7
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
\t\t<div class=\"form-group\">
\t\t\t";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nom", array()), 'label');
        echo "
\t\t    ";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t    ";
        // line 11
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nom", array()), 'errors');
        echo "
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "description", array()), 'label');
        echo "
\t\t    ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "description", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t    ";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "description", array()), 'errors');
        echo "
\t\t</div>
\t\t<button type=\"submit\">Valider</button>
\t";
        // line 19
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
</div>
</div>
";
        
        $__internal_a6efca8e207622c36ef1ba488320e7b8b6a63f80242c3196e5e8bccc7c26e7c1->leave($__internal_a6efca8e207622c36ef1ba488320e7b8b6a63f80242c3196e5e8bccc7c26e7c1_prof);

        
        $__internal_cf01c3095221beae3b58179b0e266f321ea47cba37ba9d6edf59fa216ac8a3a1->leave($__internal_cf01c3095221beae3b58179b0e266f321ea47cba37ba9d6edf59fa216ac8a3a1_prof);

    }

    public function getTemplateName()
    {
        return "matieresViews/addMatiere.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 19,  90 => 16,  86 => 15,  82 => 14,  76 => 11,  72 => 10,  68 => 9,  63 => 7,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
<h1>{% if edit %}{{'edit'|trans}}{% else %}{{'add'|trans}}{% endif %} {{'matiere'|trans}}</h1>
<div class=\"container\">
\t{{ form_start(form) }}
\t\t<div class=\"form-group\">
\t\t\t{{ form_label(form.nom) }}
\t\t    {{ form_widget(form.nom ,{ 'attr': {'class': 'form-control'} }) }}
\t\t    {{ form_errors(form.nom) }}
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t{{ form_label(form.description) }}
\t\t    {{ form_widget(form.description ,{ 'attr': {'class': 'form-control'} }) }}
\t\t    {{ form_errors(form.description) }}
\t\t</div>
\t\t<button type=\"submit\">Valider</button>
\t{{ form_end(form) }}
</div>
</div>
{% endblock %}", "matieresViews/addMatiere.html.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\app\\Resources\\views\\matieresViews\\addMatiere.html.twig");
    }
}
