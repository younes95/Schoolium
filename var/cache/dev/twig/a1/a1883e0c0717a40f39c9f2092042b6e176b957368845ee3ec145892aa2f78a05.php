<?php

/* :matieresViews:addMatiere.html.twig */
class __TwigTemplate_fe5d096ff29338a87b4c761ae838e4c41ad7754233e715180350a32a26ba43df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":matieresViews:addMatiere.html.twig", 1);
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
        $__internal_1642bc54ef7704898f2bf43d1d71d8a041ef0b0daeeadd8a25ccf648a2d00c78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1642bc54ef7704898f2bf43d1d71d8a041ef0b0daeeadd8a25ccf648a2d00c78->enter($__internal_1642bc54ef7704898f2bf43d1d71d8a041ef0b0daeeadd8a25ccf648a2d00c78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":matieresViews:addMatiere.html.twig"));

        $__internal_b92926801112ba9a999e922a93f33c692e082c8f7b0f246c703259838c67fb35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b92926801112ba9a999e922a93f33c692e082c8f7b0f246c703259838c67fb35->enter($__internal_b92926801112ba9a999e922a93f33c692e082c8f7b0f246c703259838c67fb35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":matieresViews:addMatiere.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1642bc54ef7704898f2bf43d1d71d8a041ef0b0daeeadd8a25ccf648a2d00c78->leave($__internal_1642bc54ef7704898f2bf43d1d71d8a041ef0b0daeeadd8a25ccf648a2d00c78_prof);

        
        $__internal_b92926801112ba9a999e922a93f33c692e082c8f7b0f246c703259838c67fb35->leave($__internal_b92926801112ba9a999e922a93f33c692e082c8f7b0f246c703259838c67fb35_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c24d85590dbf4e802147985c0cbcb4e1c7737d68c3dec936bface54b465182c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c24d85590dbf4e802147985c0cbcb4e1c7737d68c3dec936bface54b465182c9->enter($__internal_c24d85590dbf4e802147985c0cbcb4e1c7737d68c3dec936bface54b465182c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_84b827baced17d062c88623b619c7593f4b914d7c084583702788786f85f02b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84b827baced17d062c88623b619c7593f4b914d7c084583702788786f85f02b8->enter($__internal_84b827baced17d062c88623b619c7593f4b914d7c084583702788786f85f02b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_84b827baced17d062c88623b619c7593f4b914d7c084583702788786f85f02b8->leave($__internal_84b827baced17d062c88623b619c7593f4b914d7c084583702788786f85f02b8_prof);

        
        $__internal_c24d85590dbf4e802147985c0cbcb4e1c7737d68c3dec936bface54b465182c9->leave($__internal_c24d85590dbf4e802147985c0cbcb4e1c7737d68c3dec936bface54b465182c9_prof);

    }

    public function getTemplateName()
    {
        return ":matieresViews:addMatiere.html.twig";
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
{% endblock %}", ":matieresViews:addMatiere.html.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\app/Resources\\views/matieresViews/addMatiere.html.twig");
    }
}
