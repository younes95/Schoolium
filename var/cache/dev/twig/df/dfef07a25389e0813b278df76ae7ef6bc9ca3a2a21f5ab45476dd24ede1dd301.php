<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_bc5a673ed30d6440147e1ff563bb0edbfa349cee6b137d7dd48ed40dc4a66464 extends Twig_Template
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
        $__internal_8226dde90f16b15475a92f3619448ead91d73d001f57f9500326e58c768ef752 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8226dde90f16b15475a92f3619448ead91d73d001f57f9500326e58c768ef752->enter($__internal_8226dde90f16b15475a92f3619448ead91d73d001f57f9500326e58c768ef752_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_2ca8c6793d892b545cf87203292f2bd4cb41fac6d06540761adf5c0fcadfbfa3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ca8c6793d892b545cf87203292f2bd4cb41fac6d06540761adf5c0fcadfbfa3->enter($__internal_2ca8c6793d892b545cf87203292f2bd4cb41fac6d06540761adf5c0fcadfbfa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_8226dde90f16b15475a92f3619448ead91d73d001f57f9500326e58c768ef752->leave($__internal_8226dde90f16b15475a92f3619448ead91d73d001f57f9500326e58c768ef752_prof);

        
        $__internal_2ca8c6793d892b545cf87203292f2bd4cb41fac6d06540761adf5c0fcadfbfa3->leave($__internal_2ca8c6793d892b545cf87203292f2bd4cb41fac6d06540761adf5c0fcadfbfa3_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_70691f58a97a09ae5b4e19e7a345aa13b32b9df2f433da1e437f4c2e7efe0d61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70691f58a97a09ae5b4e19e7a345aa13b32b9df2f433da1e437f4c2e7efe0d61->enter($__internal_70691f58a97a09ae5b4e19e7a345aa13b32b9df2f433da1e437f4c2e7efe0d61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_e2732df14a9e680e9a1c6d397394de210e27037bfffe80c16bdf646432f5a0d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2732df14a9e680e9a1c6d397394de210e27037bfffe80c16bdf646432f5a0d1->enter($__internal_e2732df14a9e680e9a1c6d397394de210e27037bfffe80c16bdf646432f5a0d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_e2732df14a9e680e9a1c6d397394de210e27037bfffe80c16bdf646432f5a0d1->leave($__internal_e2732df14a9e680e9a1c6d397394de210e27037bfffe80c16bdf646432f5a0d1_prof);

        
        $__internal_70691f58a97a09ae5b4e19e7a345aa13b32b9df2f433da1e437f4c2e7efe0d61->leave($__internal_70691f58a97a09ae5b4e19e7a345aa13b32b9df2f433da1e437f4c2e7efe0d61_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_6b124e7c75290ec3d95254d919851c1200ec4b8aed10132e8be830ccc105d9ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b124e7c75290ec3d95254d919851c1200ec4b8aed10132e8be830ccc105d9ee->enter($__internal_6b124e7c75290ec3d95254d919851c1200ec4b8aed10132e8be830ccc105d9ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_5936c7f077438b0b0cddc914260eed8a0fc54371fdc7bc629fcab8a8f6391616 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5936c7f077438b0b0cddc914260eed8a0fc54371fdc7bc629fcab8a8f6391616->enter($__internal_5936c7f077438b0b0cddc914260eed8a0fc54371fdc7bc629fcab8a8f6391616_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_5936c7f077438b0b0cddc914260eed8a0fc54371fdc7bc629fcab8a8f6391616->leave($__internal_5936c7f077438b0b0cddc914260eed8a0fc54371fdc7bc629fcab8a8f6391616_prof);

        
        $__internal_6b124e7c75290ec3d95254d919851c1200ec4b8aed10132e8be830ccc105d9ee->leave($__internal_6b124e7c75290ec3d95254d919851c1200ec4b8aed10132e8be830ccc105d9ee_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_8de047e6a0d7625e0577363687e8eef4a461fba1aa86e4a2dcd374ffd682faba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8de047e6a0d7625e0577363687e8eef4a461fba1aa86e4a2dcd374ffd682faba->enter($__internal_8de047e6a0d7625e0577363687e8eef4a461fba1aa86e4a2dcd374ffd682faba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_560c206c6e28c2c4c006e2ad483f9f9ff21fda03d8924fd2bbebf3180dd8c935 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_560c206c6e28c2c4c006e2ad483f9f9ff21fda03d8924fd2bbebf3180dd8c935->enter($__internal_560c206c6e28c2c4c006e2ad483f9f9ff21fda03d8924fd2bbebf3180dd8c935_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_560c206c6e28c2c4c006e2ad483f9f9ff21fda03d8924fd2bbebf3180dd8c935->leave($__internal_560c206c6e28c2c4c006e2ad483f9f9ff21fda03d8924fd2bbebf3180dd8c935_prof);

        
        $__internal_8de047e6a0d7625e0577363687e8eef4a461fba1aa86e4a2dcd374ffd682faba->leave($__internal_8de047e6a0d7625e0577363687e8eef4a461fba1aa86e4a2dcd374ffd682faba_prof);

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
", "FOSUserBundle:Registration:email.txt.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/FOSUserBundle/views/Registration/email.txt.twig");
    }
}
