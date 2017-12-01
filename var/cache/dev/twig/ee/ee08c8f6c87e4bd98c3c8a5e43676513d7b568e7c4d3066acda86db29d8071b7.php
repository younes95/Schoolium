<?php

/* :anneesViews:addAnnee.html.twig */
class __TwigTemplate_e4bd1b72f440dad4686f44fab51275a8aaa4dc96a660bcadada2cb67e539821a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":anneesViews:addAnnee.html.twig", 1);
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
        $__internal_1558133685183704cb6e3ccd2bc0918977aac9bc0255b780c0ca61d6d1d58746 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1558133685183704cb6e3ccd2bc0918977aac9bc0255b780c0ca61d6d1d58746->enter($__internal_1558133685183704cb6e3ccd2bc0918977aac9bc0255b780c0ca61d6d1d58746_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":anneesViews:addAnnee.html.twig"));

        $__internal_25627e83e8060069532828fd1e102d7124eee13ec1299fdd236cf9acdb127c2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25627e83e8060069532828fd1e102d7124eee13ec1299fdd236cf9acdb127c2b->enter($__internal_25627e83e8060069532828fd1e102d7124eee13ec1299fdd236cf9acdb127c2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":anneesViews:addAnnee.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1558133685183704cb6e3ccd2bc0918977aac9bc0255b780c0ca61d6d1d58746->leave($__internal_1558133685183704cb6e3ccd2bc0918977aac9bc0255b780c0ca61d6d1d58746_prof);

        
        $__internal_25627e83e8060069532828fd1e102d7124eee13ec1299fdd236cf9acdb127c2b->leave($__internal_25627e83e8060069532828fd1e102d7124eee13ec1299fdd236cf9acdb127c2b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ca6e45faf9352fa6e444d858f27c53a1f1102ad3a9dee5fdee312fdeb16487b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca6e45faf9352fa6e444d858f27c53a1f1102ad3a9dee5fdee312fdeb16487b6->enter($__internal_ca6e45faf9352fa6e444d858f27c53a1f1102ad3a9dee5fdee312fdeb16487b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_31b1a4b887bf6cb3af21f51d920c0eaa3e90ebeea28b13c1d8e9dd09e1b8c417 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31b1a4b887bf6cb3af21f51d920c0eaa3e90ebeea28b13c1d8e9dd09e1b8c417->enter($__internal_31b1a4b887bf6cb3af21f51d920c0eaa3e90ebeea28b13c1d8e9dd09e1b8c417_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"container\">
<h1>";
        // line 5
        if ((isset($context["edit"]) ? $context["edit"] : $this->getContext($context, "edit"))) {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("edit"), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("add"), "html", null, true);
        }
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("annee"), "html", null, true);
        echo "</h1>
<div class=\"container\">
\t";
        // line 7
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
\t\t<div class=\"form-group\">
\t\t\t";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'label');
        echo "
\t\t    ";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t    ";
        // line 11
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'errors');
        echo "
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "niveau", array()), 'label');
        echo "
\t\t    ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "niveau", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t    ";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "niveau", array()), 'errors');
        echo "
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "specialite", array()), 'label');
        echo "
\t\t    ";
        // line 20
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "specialite", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t    ";
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "specialite", array()), 'errors');
        echo "
\t\t</div>
\t\t<button type=\"submit\">Valider</button>
\t";
        // line 24
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
</div>
</div>
";
        
        $__internal_31b1a4b887bf6cb3af21f51d920c0eaa3e90ebeea28b13c1d8e9dd09e1b8c417->leave($__internal_31b1a4b887bf6cb3af21f51d920c0eaa3e90ebeea28b13c1d8e9dd09e1b8c417_prof);

        
        $__internal_ca6e45faf9352fa6e444d858f27c53a1f1102ad3a9dee5fdee312fdeb16487b6->leave($__internal_ca6e45faf9352fa6e444d858f27c53a1f1102ad3a9dee5fdee312fdeb16487b6_prof);

    }

    public function getTemplateName()
    {
        return ":anneesViews:addAnnee.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 24,  104 => 21,  100 => 20,  96 => 19,  90 => 16,  86 => 15,  82 => 14,  76 => 11,  72 => 10,  68 => 9,  63 => 7,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
<h1>{% if edit %}{{'edit'|trans}}{% else %}{{'add'|trans}}{% endif %} {{'annee'|trans}}</h1>
<div class=\"container\">
\t{{ form_start(form) }}
\t\t<div class=\"form-group\">
\t\t\t{{ form_label(form.nom) }}
\t\t    {{ form_widget(form.nom ,{ 'attr': {'class': 'form-control'} }) }}
\t\t    {{ form_errors(form.nom) }}
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t{{ form_label(form.niveau) }}
\t\t    {{ form_widget(form.niveau ,{ 'attr': {'class': 'form-control'} }) }}
\t\t    {{ form_errors(form.niveau) }}
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t{{ form_label(form.specialite) }}
\t\t    {{ form_widget(form.specialite ,{ 'attr': {'class': 'form-control'} }) }}
\t\t    {{ form_errors(form.specialite) }}
\t\t</div>
\t\t<button type=\"submit\">Valider</button>
\t{{ form_end(form) }}
</div>
</div>
{% endblock %}", ":anneesViews:addAnnee.html.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\app/Resources\\views/anneesViews/addAnnee.html.twig");
    }
}
