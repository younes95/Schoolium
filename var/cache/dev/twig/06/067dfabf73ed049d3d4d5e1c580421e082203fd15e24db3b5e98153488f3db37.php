<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_0ca2a5fd76dc10add61f5ba3bd5cbdd81f9012abacabd2c6021cc701cc6107a3 extends Twig_Template
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
        $__internal_6576c51eac675c828d802e53ca7193a46dad639351f2010bd2e068f6bf212089 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6576c51eac675c828d802e53ca7193a46dad639351f2010bd2e068f6bf212089->enter($__internal_6576c51eac675c828d802e53ca7193a46dad639351f2010bd2e068f6bf212089_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_5e7a50de564f69aaf397e404b3e51e0a1a6f2817d9cfaf929e15d0611e629291 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e7a50de564f69aaf397e404b3e51e0a1a6f2817d9cfaf929e15d0611e629291->enter($__internal_5e7a50de564f69aaf397e404b3e51e0a1a6f2817d9cfaf929e15d0611e629291_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_6576c51eac675c828d802e53ca7193a46dad639351f2010bd2e068f6bf212089->leave($__internal_6576c51eac675c828d802e53ca7193a46dad639351f2010bd2e068f6bf212089_prof);

        
        $__internal_5e7a50de564f69aaf397e404b3e51e0a1a6f2817d9cfaf929e15d0611e629291->leave($__internal_5e7a50de564f69aaf397e404b3e51e0a1a6f2817d9cfaf929e15d0611e629291_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_4673710de5513a4b397686e7c19520178f6836a91144916361c44dbb294b4e51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4673710de5513a4b397686e7c19520178f6836a91144916361c44dbb294b4e51->enter($__internal_4673710de5513a4b397686e7c19520178f6836a91144916361c44dbb294b4e51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_ff2d86b7018fca1f4dc81ee63448752a59cc081af3d25646e89f0cd7e6163292 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff2d86b7018fca1f4dc81ee63448752a59cc081af3d25646e89f0cd7e6163292->enter($__internal_ff2d86b7018fca1f4dc81ee63448752a59cc081af3d25646e89f0cd7e6163292_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_ff2d86b7018fca1f4dc81ee63448752a59cc081af3d25646e89f0cd7e6163292->leave($__internal_ff2d86b7018fca1f4dc81ee63448752a59cc081af3d25646e89f0cd7e6163292_prof);

        
        $__internal_4673710de5513a4b397686e7c19520178f6836a91144916361c44dbb294b4e51->leave($__internal_4673710de5513a4b397686e7c19520178f6836a91144916361c44dbb294b4e51_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_2ebd6486c9aeaa47011016b5802bd9b5c60ac2eb578f3a136ce572e9ed5f5618 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ebd6486c9aeaa47011016b5802bd9b5c60ac2eb578f3a136ce572e9ed5f5618->enter($__internal_2ebd6486c9aeaa47011016b5802bd9b5c60ac2eb578f3a136ce572e9ed5f5618_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_6311278e27bf3e906aed3858665ec9f7c93db619b8f365b6a61ad69a96baed5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6311278e27bf3e906aed3858665ec9f7c93db619b8f365b6a61ad69a96baed5c->enter($__internal_6311278e27bf3e906aed3858665ec9f7c93db619b8f365b6a61ad69a96baed5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_6311278e27bf3e906aed3858665ec9f7c93db619b8f365b6a61ad69a96baed5c->leave($__internal_6311278e27bf3e906aed3858665ec9f7c93db619b8f365b6a61ad69a96baed5c_prof);

        
        $__internal_2ebd6486c9aeaa47011016b5802bd9b5c60ac2eb578f3a136ce572e9ed5f5618->leave($__internal_2ebd6486c9aeaa47011016b5802bd9b5c60ac2eb578f3a136ce572e9ed5f5618_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_f34d4d3f6b74ae2ebe2853dd30dfb0966ed40057a6ab49662d5ace065db455e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f34d4d3f6b74ae2ebe2853dd30dfb0966ed40057a6ab49662d5ace065db455e0->enter($__internal_f34d4d3f6b74ae2ebe2853dd30dfb0966ed40057a6ab49662d5ace065db455e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_0634594da9325c990e6569808b425d7357cd0bc74d17b8125f717832defea3c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0634594da9325c990e6569808b425d7357cd0bc74d17b8125f717832defea3c9->enter($__internal_0634594da9325c990e6569808b425d7357cd0bc74d17b8125f717832defea3c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_0634594da9325c990e6569808b425d7357cd0bc74d17b8125f717832defea3c9->leave($__internal_0634594da9325c990e6569808b425d7357cd0bc74d17b8125f717832defea3c9_prof);

        
        $__internal_f34d4d3f6b74ae2ebe2853dd30dfb0966ed40057a6ab49662d5ace065db455e0->leave($__internal_f34d4d3f6b74ae2ebe2853dd30dfb0966ed40057a6ab49662d5ace065db455e0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
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
", "FOSUserBundle:Resetting:email.txt.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\app/Resources/FOSUserBundle/views/Resetting/email.txt.twig");
    }
}
