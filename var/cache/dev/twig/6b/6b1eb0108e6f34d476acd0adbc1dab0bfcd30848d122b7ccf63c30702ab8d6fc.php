<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_17ffca3678dbfda368c7380a1545df359c3adfd563d0f6a0ebe06e1684129b92 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2b14eb7af34c893514f7996d30890ace452ba01e1f83bdbb0f3ec39ac9bdc1b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b14eb7af34c893514f7996d30890ace452ba01e1f83bdbb0f3ec39ac9bdc1b7->enter($__internal_2b14eb7af34c893514f7996d30890ace452ba01e1f83bdbb0f3ec39ac9bdc1b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        $__internal_adde484ec386f2dea8b0cba74d6b4554a0caa6c0bc7b5a04bf74c10846912624 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adde484ec386f2dea8b0cba74d6b4554a0caa6c0bc7b5a04bf74c10846912624->enter($__internal_adde484ec386f2dea8b0cba74d6b4554a0caa6c0bc7b5a04bf74c10846912624_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_2b14eb7af34c893514f7996d30890ace452ba01e1f83bdbb0f3ec39ac9bdc1b7->leave($__internal_2b14eb7af34c893514f7996d30890ace452ba01e1f83bdbb0f3ec39ac9bdc1b7_prof);

        
        $__internal_adde484ec386f2dea8b0cba74d6b4554a0caa6c0bc7b5a04bf74c10846912624->leave($__internal_adde484ec386f2dea8b0cba74d6b4554a0caa6c0bc7b5a04bf74c10846912624_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_f7d05d72db7bbc330952f7fcbbec6bd5f4f3db1411ade39129a55749a5752581 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7d05d72db7bbc330952f7fcbbec6bd5f4f3db1411ade39129a55749a5752581->enter($__internal_f7d05d72db7bbc330952f7fcbbec6bd5f4f3db1411ade39129a55749a5752581_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_2f29c976648ba1f2543a617a9645a54dc3cdffa6fc49d324459a7aeac8902138 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f29c976648ba1f2543a617a9645a54dc3cdffa6fc49d324459a7aeac8902138->enter($__internal_2f29c976648ba1f2543a617a9645a54dc3cdffa6fc49d324459a7aeac8902138_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_2f29c976648ba1f2543a617a9645a54dc3cdffa6fc49d324459a7aeac8902138->leave($__internal_2f29c976648ba1f2543a617a9645a54dc3cdffa6fc49d324459a7aeac8902138_prof);

        
        $__internal_f7d05d72db7bbc330952f7fcbbec6bd5f4f3db1411ade39129a55749a5752581->leave($__internal_f7d05d72db7bbc330952f7fcbbec6bd5f4f3db1411ade39129a55749a5752581_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_b0c328e4caefbe0356f740e9cf9b54799147a21aa05de6471d6c13359018cc70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0c328e4caefbe0356f740e9cf9b54799147a21aa05de6471d6c13359018cc70->enter($__internal_b0c328e4caefbe0356f740e9cf9b54799147a21aa05de6471d6c13359018cc70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_b113f72dcf118244c46308b16e975291698cc413e5fe631529ac9a172d0d7f65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b113f72dcf118244c46308b16e975291698cc413e5fe631529ac9a172d0d7f65->enter($__internal_b113f72dcf118244c46308b16e975291698cc413e5fe631529ac9a172d0d7f65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_b113f72dcf118244c46308b16e975291698cc413e5fe631529ac9a172d0d7f65->leave($__internal_b113f72dcf118244c46308b16e975291698cc413e5fe631529ac9a172d0d7f65_prof);

        
        $__internal_b0c328e4caefbe0356f740e9cf9b54799147a21aa05de6471d6c13359018cc70->leave($__internal_b0c328e4caefbe0356f740e9cf9b54799147a21aa05de6471d6c13359018cc70_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_daab2e9294f3949f75c47da0e2ed324fed2e437be6554fd6e88549d7edb621a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_daab2e9294f3949f75c47da0e2ed324fed2e437be6554fd6e88549d7edb621a2->enter($__internal_daab2e9294f3949f75c47da0e2ed324fed2e437be6554fd6e88549d7edb621a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_8aaad862ed0018a224bf47646f9414cdaad1475f44952ed8034054a3bc1b0d12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8aaad862ed0018a224bf47646f9414cdaad1475f44952ed8034054a3bc1b0d12->enter($__internal_8aaad862ed0018a224bf47646f9414cdaad1475f44952ed8034054a3bc1b0d12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_8aaad862ed0018a224bf47646f9414cdaad1475f44952ed8034054a3bc1b0d12->leave($__internal_8aaad862ed0018a224bf47646f9414cdaad1475f44952ed8034054a3bc1b0d12_prof);

        
        $__internal_daab2e9294f3949f75c47da0e2ed324fed2e437be6554fd6e88549d7edb621a2->leave($__internal_daab2e9294f3949f75c47da0e2ed324fed2e437be6554fd6e88549d7edb621a2_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "@FOSUser/Resetting/email.txt.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\app\\Resources\\FOSUserBundle\\views\\Resetting\\email.txt.twig");
    }
}
