<?php

/* :classesViews:affecterProf.html.twig */
class __TwigTemplate_089c7d67e1561c52d42c76e1b085778de00bc5714a48b671d4d27533b156cdc3 extends Twig_Template
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
        $__internal_991b5cf32c5093bc4aa79dce774f82301b8aab2d8ac80b83a02c208fe2055904 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_991b5cf32c5093bc4aa79dce774f82301b8aab2d8ac80b83a02c208fe2055904->enter($__internal_991b5cf32c5093bc4aa79dce774f82301b8aab2d8ac80b83a02c208fe2055904_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":classesViews:affecterProf.html.twig"));

        $__internal_aa5d96ef8d434ee46c2df85fa1fb1d551c8d7c0d11926956de424ef455afb131 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa5d96ef8d434ee46c2df85fa1fb1d551c8d7c0d11926956de424ef455afb131->enter($__internal_aa5d96ef8d434ee46c2df85fa1fb1d551c8d7c0d11926956de424ef455afb131_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":classesViews:affecterProf.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_991b5cf32c5093bc4aa79dce774f82301b8aab2d8ac80b83a02c208fe2055904->leave($__internal_991b5cf32c5093bc4aa79dce774f82301b8aab2d8ac80b83a02c208fe2055904_prof);

        
        $__internal_aa5d96ef8d434ee46c2df85fa1fb1d551c8d7c0d11926956de424ef455afb131->leave($__internal_aa5d96ef8d434ee46c2df85fa1fb1d551c8d7c0d11926956de424ef455afb131_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_49bae5013803ef96f4299db0f3593cd387afa75b99b7904528dcb2c13ff1e334 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49bae5013803ef96f4299db0f3593cd387afa75b99b7904528dcb2c13ff1e334->enter($__internal_49bae5013803ef96f4299db0f3593cd387afa75b99b7904528dcb2c13ff1e334_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fabc53c10ca93fc5b251558c77dc5559c7a0f080eedee6c6fa4e4bd9099e5248 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fabc53c10ca93fc5b251558c77dc5559c7a0f080eedee6c6fa4e4bd9099e5248->enter($__internal_fabc53c10ca93fc5b251558c77dc5559c7a0f080eedee6c6fa4e4bd9099e5248_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_fabc53c10ca93fc5b251558c77dc5559c7a0f080eedee6c6fa4e4bd9099e5248->leave($__internal_fabc53c10ca93fc5b251558c77dc5559c7a0f080eedee6c6fa4e4bd9099e5248_prof);

        
        $__internal_49bae5013803ef96f4299db0f3593cd387afa75b99b7904528dcb2c13ff1e334->leave($__internal_49bae5013803ef96f4299db0f3593cd387afa75b99b7904528dcb2c13ff1e334_prof);

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
{% endblock %}", ":classesViews:affecterProf.html.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\app/Resources\\views/classesViews/affecterProf.html.twig");
    }
}
