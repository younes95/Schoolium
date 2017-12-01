<?php

/* :travailrealise:add.html.twig */
class __TwigTemplate_632d91e76812a89fb729a567f3d171cf8d37f4425a608efce851cfd2f8ac8b0c extends Twig_Template
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
        $__internal_026d1ea53c5244fc7173dc51be440b9d46a4cca0c600f3e159c75b3a1d202ae3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_026d1ea53c5244fc7173dc51be440b9d46a4cca0c600f3e159c75b3a1d202ae3->enter($__internal_026d1ea53c5244fc7173dc51be440b9d46a4cca0c600f3e159c75b3a1d202ae3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":travailrealise:add.html.twig"));

        $__internal_13f5f04ec0a3c2f3133cb2a62c69302999eb2744403df1f14779249966d09454 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13f5f04ec0a3c2f3133cb2a62c69302999eb2744403df1f14779249966d09454->enter($__internal_13f5f04ec0a3c2f3133cb2a62c69302999eb2744403df1f14779249966d09454_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":travailrealise:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_026d1ea53c5244fc7173dc51be440b9d46a4cca0c600f3e159c75b3a1d202ae3->leave($__internal_026d1ea53c5244fc7173dc51be440b9d46a4cca0c600f3e159c75b3a1d202ae3_prof);

        
        $__internal_13f5f04ec0a3c2f3133cb2a62c69302999eb2744403df1f14779249966d09454->leave($__internal_13f5f04ec0a3c2f3133cb2a62c69302999eb2744403df1f14779249966d09454_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_d6779e6927a59cff1e5a708618d52cb48ff582ce75c013182c9cb8edec70a5f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6779e6927a59cff1e5a708618d52cb48ff582ce75c013182c9cb8edec70a5f0->enter($__internal_d6779e6927a59cff1e5a708618d52cb48ff582ce75c013182c9cb8edec70a5f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4fd11df0bfd4b39a886695a33e2362300d626b68a3b4ce1e3209ce7cb89fe0c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fd11df0bfd4b39a886695a33e2362300d626b68a3b4ce1e3209ce7cb89fe0c6->enter($__internal_4fd11df0bfd4b39a886695a33e2362300d626b68a3b4ce1e3209ce7cb89fe0c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_4fd11df0bfd4b39a886695a33e2362300d626b68a3b4ce1e3209ce7cb89fe0c6->leave($__internal_4fd11df0bfd4b39a886695a33e2362300d626b68a3b4ce1e3209ce7cb89fe0c6_prof);

        
        $__internal_d6779e6927a59cff1e5a708618d52cb48ff582ce75c013182c9cb8edec70a5f0->leave($__internal_d6779e6927a59cff1e5a708618d52cb48ff582ce75c013182c9cb8edec70a5f0_prof);

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

{% endblock %}", ":travailrealise:add.html.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\app/Resources\\views/travailrealise/add.html.twig");
    }
}
