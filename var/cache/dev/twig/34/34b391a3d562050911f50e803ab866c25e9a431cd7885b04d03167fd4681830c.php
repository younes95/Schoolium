<?php

/* default/index.html.twig */
class __TwigTemplate_3600cc78cdcca7057e0183a9a66b5240574c75abd7c4d631bf37f423c420b88a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
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
        $__internal_a144c64ad0986bee100fdfc656ba203283e7252569cf1aead4be4388ac688084 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a144c64ad0986bee100fdfc656ba203283e7252569cf1aead4be4388ac688084->enter($__internal_a144c64ad0986bee100fdfc656ba203283e7252569cf1aead4be4388ac688084_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_c085031a3063703a9c4ca314eaf082f2b464b7b8e8f56c1d7d7f3c480f30b6c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c085031a3063703a9c4ca314eaf082f2b464b7b8e8f56c1d7d7f3c480f30b6c0->enter($__internal_c085031a3063703a9c4ca314eaf082f2b464b7b8e8f56c1d7d7f3c480f30b6c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a144c64ad0986bee100fdfc656ba203283e7252569cf1aead4be4388ac688084->leave($__internal_a144c64ad0986bee100fdfc656ba203283e7252569cf1aead4be4388ac688084_prof);

        
        $__internal_c085031a3063703a9c4ca314eaf082f2b464b7b8e8f56c1d7d7f3c480f30b6c0->leave($__internal_c085031a3063703a9c4ca314eaf082f2b464b7b8e8f56c1d7d7f3c480f30b6c0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b8784bc18f123b0da816078d9fba29d9b720192219077ad26a1ea08b165f7d8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8784bc18f123b0da816078d9fba29d9b720192219077ad26a1ea08b165f7d8b->enter($__internal_b8784bc18f123b0da816078d9fba29d9b720192219077ad26a1ea08b165f7d8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e863a29e94374f55758f90b63a077d89fe97ab0d8cb8e8a4282095eb7cc8a2e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e863a29e94374f55758f90b63a077d89fe97ab0d8cb8e8a4282095eb7cc8a2e4->enter($__internal_e863a29e94374f55758f90b63a077d89fe97ab0d8cb8e8a4282095eb7cc8a2e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        <div class=\"row\" style=\"text-align: center;\">
            <h1>Bienvenue chez Schoolium</h1>
            ";
        // line 7
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 8
            echo "            <h1>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
            echo "</h1>
            ";
        }
        // line 10
        echo "        </div>
    </div>
";
        
        $__internal_e863a29e94374f55758f90b63a077d89fe97ab0d8cb8e8a4282095eb7cc8a2e4->leave($__internal_e863a29e94374f55758f90b63a077d89fe97ab0d8cb8e8a4282095eb7cc8a2e4_prof);

        
        $__internal_b8784bc18f123b0da816078d9fba29d9b720192219077ad26a1ea08b165f7d8b->leave($__internal_b8784bc18f123b0da816078d9fba29d9b720192219077ad26a1ea08b165f7d8b_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 10,  56 => 8,  54 => 7,  49 => 4,  40 => 3,  11 => 1,);
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
        <div class=\"row\" style=\"text-align: center;\">
            <h1>Bienvenue chez Schoolium</h1>
            {% if  app.user %}
            <h1>{{app.user.nom}}</h1>
            {% endif %}
        </div>
    </div>
{% endblock %}", "default/index.html.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\app\\Resources\\views\\default\\index.html.twig");
    }
}
