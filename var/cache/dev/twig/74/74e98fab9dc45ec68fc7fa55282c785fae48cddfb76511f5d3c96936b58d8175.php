<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_8620b9c5242e3c9b8b9d2b4b4fbf1a22544c2e341ecd012c66349e940fc1d27b extends Twig_Template
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
        $__internal_b130633c003af6f9e53b2aac53b8181267136fc68d6ad6b21cc5ba255c97208c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b130633c003af6f9e53b2aac53b8181267136fc68d6ad6b21cc5ba255c97208c->enter($__internal_b130633c003af6f9e53b2aac53b8181267136fc68d6ad6b21cc5ba255c97208c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_3e51bca17830300429eb4a55921ef96826a9840adda4a1773fea6c198d838d94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e51bca17830300429eb4a55921ef96826a9840adda4a1773fea6c198d838d94->enter($__internal_3e51bca17830300429eb4a55921ef96826a9840adda4a1773fea6c198d838d94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_b130633c003af6f9e53b2aac53b8181267136fc68d6ad6b21cc5ba255c97208c->leave($__internal_b130633c003af6f9e53b2aac53b8181267136fc68d6ad6b21cc5ba255c97208c_prof);

        
        $__internal_3e51bca17830300429eb4a55921ef96826a9840adda4a1773fea6c198d838d94->leave($__internal_3e51bca17830300429eb4a55921ef96826a9840adda4a1773fea6c198d838d94_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_a361856ca1d99683e70635b53c44a5d979c3efe5f415236493ed77fc57a5c96b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a361856ca1d99683e70635b53c44a5d979c3efe5f415236493ed77fc57a5c96b->enter($__internal_a361856ca1d99683e70635b53c44a5d979c3efe5f415236493ed77fc57a5c96b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_fb2ce41085bfb7a45d6f34d1755e994483b85114d0f1367e7bd3c0c8e25b2e9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb2ce41085bfb7a45d6f34d1755e994483b85114d0f1367e7bd3c0c8e25b2e9e->enter($__internal_fb2ce41085bfb7a45d6f34d1755e994483b85114d0f1367e7bd3c0c8e25b2e9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_fb2ce41085bfb7a45d6f34d1755e994483b85114d0f1367e7bd3c0c8e25b2e9e->leave($__internal_fb2ce41085bfb7a45d6f34d1755e994483b85114d0f1367e7bd3c0c8e25b2e9e_prof);

        
        $__internal_a361856ca1d99683e70635b53c44a5d979c3efe5f415236493ed77fc57a5c96b->leave($__internal_a361856ca1d99683e70635b53c44a5d979c3efe5f415236493ed77fc57a5c96b_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_6c58de40764b196e9bcba2eb010b7dd4c1b6fa9198173e1d481c5d05ee86db66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c58de40764b196e9bcba2eb010b7dd4c1b6fa9198173e1d481c5d05ee86db66->enter($__internal_6c58de40764b196e9bcba2eb010b7dd4c1b6fa9198173e1d481c5d05ee86db66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_86ff15431b2c5e77fd5d14e1298d36cb347c3db0a52a700ffbcf0ca47fa5b325 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86ff15431b2c5e77fd5d14e1298d36cb347c3db0a52a700ffbcf0ca47fa5b325->enter($__internal_86ff15431b2c5e77fd5d14e1298d36cb347c3db0a52a700ffbcf0ca47fa5b325_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_86ff15431b2c5e77fd5d14e1298d36cb347c3db0a52a700ffbcf0ca47fa5b325->leave($__internal_86ff15431b2c5e77fd5d14e1298d36cb347c3db0a52a700ffbcf0ca47fa5b325_prof);

        
        $__internal_6c58de40764b196e9bcba2eb010b7dd4c1b6fa9198173e1d481c5d05ee86db66->leave($__internal_6c58de40764b196e9bcba2eb010b7dd4c1b6fa9198173e1d481c5d05ee86db66_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_762b7c7b5c61ebd7a893028af788466a12dd24646135f5a6c3c32597ecebe7b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_762b7c7b5c61ebd7a893028af788466a12dd24646135f5a6c3c32597ecebe7b9->enter($__internal_762b7c7b5c61ebd7a893028af788466a12dd24646135f5a6c3c32597ecebe7b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_78f69173569a1d959e23ae326b505b9ab03a05155d386d08a5b438b9d127db9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78f69173569a1d959e23ae326b505b9ab03a05155d386d08a5b438b9d127db9b->enter($__internal_78f69173569a1d959e23ae326b505b9ab03a05155d386d08a5b438b9d127db9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_78f69173569a1d959e23ae326b505b9ab03a05155d386d08a5b438b9d127db9b->leave($__internal_78f69173569a1d959e23ae326b505b9ab03a05155d386d08a5b438b9d127db9b_prof);

        
        $__internal_762b7c7b5c61ebd7a893028af788466a12dd24646135f5a6c3c32597ecebe7b9->leave($__internal_762b7c7b5c61ebd7a893028af788466a12dd24646135f5a6c3c32597ecebe7b9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
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
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Registration:email.txt.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\app/Resources/FOSUserBundle/views/Registration/email.txt.twig");
    }
}
