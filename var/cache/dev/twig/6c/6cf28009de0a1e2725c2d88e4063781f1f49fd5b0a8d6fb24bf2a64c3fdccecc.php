<?php

/* matieresViews/addMatiere.html.twig */
class __TwigTemplate_ec9a60f5f284c779838dcdd5b7e97f4ee9b25556ea34fc8226c62c2ff68163d9 extends Twig_Template
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
        $__internal_36c3093ebd4af55040283482cc016a2741dee9bdada146ec188aa1d21d54092b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36c3093ebd4af55040283482cc016a2741dee9bdada146ec188aa1d21d54092b->enter($__internal_36c3093ebd4af55040283482cc016a2741dee9bdada146ec188aa1d21d54092b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "matieresViews/addMatiere.html.twig"));

        $__internal_cb9fe369f3f0e91fb05a7c66592c8567b2315b087144fedca432012c0147c6ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb9fe369f3f0e91fb05a7c66592c8567b2315b087144fedca432012c0147c6ee->enter($__internal_cb9fe369f3f0e91fb05a7c66592c8567b2315b087144fedca432012c0147c6ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "matieresViews/addMatiere.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_36c3093ebd4af55040283482cc016a2741dee9bdada146ec188aa1d21d54092b->leave($__internal_36c3093ebd4af55040283482cc016a2741dee9bdada146ec188aa1d21d54092b_prof);

        
        $__internal_cb9fe369f3f0e91fb05a7c66592c8567b2315b087144fedca432012c0147c6ee->leave($__internal_cb9fe369f3f0e91fb05a7c66592c8567b2315b087144fedca432012c0147c6ee_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_70a49c3f761a5e926d6da7ae48b665626038483f507f1af3e15003771d0f0b81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70a49c3f761a5e926d6da7ae48b665626038483f507f1af3e15003771d0f0b81->enter($__internal_70a49c3f761a5e926d6da7ae48b665626038483f507f1af3e15003771d0f0b81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5b41e47b740594fc12035446f052c546af773fd6ecfa2afb40646d23bca66f8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b41e47b740594fc12035446f052c546af773fd6ecfa2afb40646d23bca66f8d->enter($__internal_5b41e47b740594fc12035446f052c546af773fd6ecfa2afb40646d23bca66f8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("matiere"), "html", null, true);
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
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'label');
        echo "
\t\t    ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t    ";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'errors');
        echo "
\t\t</div>
\t\t<button type=\"submit\">Valider</button>
\t";
        // line 19
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
</div>
</div>
";
        
        $__internal_5b41e47b740594fc12035446f052c546af773fd6ecfa2afb40646d23bca66f8d->leave($__internal_5b41e47b740594fc12035446f052c546af773fd6ecfa2afb40646d23bca66f8d_prof);

        
        $__internal_70a49c3f761a5e926d6da7ae48b665626038483f507f1af3e15003771d0f0b81->leave($__internal_70a49c3f761a5e926d6da7ae48b665626038483f507f1af3e15003771d0f0b81_prof);

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
