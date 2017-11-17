<?php

/* :classesViews:affecterProf.html.twig */
class __TwigTemplate_717891281f30f163f34e58f7fafec21716412fd6ced28d2141c125812db9b512 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":classesViews:affecterProf.html.twig", 1);
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
        $__internal_610b8643b33198b353f6359350045729644d3ed1db06342a99f7699c8feed3ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_610b8643b33198b353f6359350045729644d3ed1db06342a99f7699c8feed3ff->enter($__internal_610b8643b33198b353f6359350045729644d3ed1db06342a99f7699c8feed3ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":classesViews:affecterProf.html.twig"));

        $__internal_47f4258cb853ad90bba081721d6d642656de23336a2efe29800c510081fd878d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47f4258cb853ad90bba081721d6d642656de23336a2efe29800c510081fd878d->enter($__internal_47f4258cb853ad90bba081721d6d642656de23336a2efe29800c510081fd878d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":classesViews:affecterProf.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_610b8643b33198b353f6359350045729644d3ed1db06342a99f7699c8feed3ff->leave($__internal_610b8643b33198b353f6359350045729644d3ed1db06342a99f7699c8feed3ff_prof);

        
        $__internal_47f4258cb853ad90bba081721d6d642656de23336a2efe29800c510081fd878d->leave($__internal_47f4258cb853ad90bba081721d6d642656de23336a2efe29800c510081fd878d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a9c5ae731e3f764d5813f1828a81a18a69fbd2195493c94ef0fb70a3d5cee3bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9c5ae731e3f764d5813f1828a81a18a69fbd2195493c94ef0fb70a3d5cee3bf->enter($__internal_a9c5ae731e3f764d5813f1828a81a18a69fbd2195493c94ef0fb70a3d5cee3bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_514fc8df46839a7b22c824c0efe3603b8d4b5b14323de951ab817b07a74b3aee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_514fc8df46839a7b22c824c0efe3603b8d4b5b14323de951ab817b07a74b3aee->enter($__internal_514fc8df46839a7b22c824c0efe3603b8d4b5b14323de951ab817b07a74b3aee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["classe"]) ? $context["classe"] : $this->getContext($context, "classe")), "nom", array())), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["classe"]) ? $context["classe"] : $this->getContext($context, "classe")), "annee", array()), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["classe"]) ? $context["classe"] : $this->getContext($context, "classe")), "annee", array()), "niveau", array()), "html", null, true);
        echo " </h1>
\t<ol>
\t\t";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
\t\t\t<div class=\"form-group\">
\t\t\t\t";
        // line 8
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "matiere", array()), 'label');
        echo "
\t\t\t    ";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "matiere", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t    ";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "matiere", array()), 'errors');
        echo "
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t\t";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "enseignant", array()), 'label');
        echo "
\t\t\t    ";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "enseignant", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t    ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "enseignant", array()), 'errors');
        echo "
\t\t\t</div>
\t\t\t<button type=\"submit\">Valider</button>
\t\t";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t</ol>
\t
";
        
        $__internal_514fc8df46839a7b22c824c0efe3603b8d4b5b14323de951ab817b07a74b3aee->leave($__internal_514fc8df46839a7b22c824c0efe3603b8d4b5b14323de951ab817b07a74b3aee_prof);

        
        $__internal_a9c5ae731e3f764d5813f1828a81a18a69fbd2195493c94ef0fb70a3d5cee3bf->leave($__internal_a9c5ae731e3f764d5813f1828a81a18a69fbd2195493c94ef0fb70a3d5cee3bf_prof);

    }

    public function getTemplateName()
    {
        return ":classesViews:affecterProf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 18,  86 => 15,  82 => 14,  78 => 13,  72 => 10,  68 => 9,  64 => 8,  59 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
<h1>{{classe.nom|trans}} {{classe.annee.nom}} {{classe.annee.niveau}} </h1>
\t<ol>
\t\t{{ form_start(form) }}
\t\t\t<div class=\"form-group\">
\t\t\t\t{{ form_label(form.matiere) }}
\t\t\t    {{ form_widget(form.matiere ,{ 'attr': {'class': 'form-control'} }) }}
\t\t\t    {{ form_errors(form.matiere) }}
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t\t{{ form_label(form.enseignant) }}
\t\t\t    {{ form_widget(form.enseignant ,{ 'attr': {'class': 'form-control'} }) }}
\t\t\t    {{ form_errors(form.enseignant) }}
\t\t\t</div>
\t\t\t<button type=\"submit\">Valider</button>
\t\t{{ form_end(form) }}
\t</ol>
\t
{% endblock %}", ":classesViews:affecterProf.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/views/classesViews/affecterProf.html.twig");
    }
}
