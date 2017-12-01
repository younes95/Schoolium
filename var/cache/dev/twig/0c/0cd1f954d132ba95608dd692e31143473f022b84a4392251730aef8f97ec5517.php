<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_19a8a40f5535a3971b85b15395a14da982964d4e4d8be5675f4c96b188960304 extends Twig_Template
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
        $__internal_06cb00f73027496f56c51431fd1f14e6e045a76195c2548fb517b99253233b39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06cb00f73027496f56c51431fd1f14e6e045a76195c2548fb517b99253233b39->enter($__internal_06cb00f73027496f56c51431fd1f14e6e045a76195c2548fb517b99253233b39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        $__internal_3201a24f0e10884190e29477f9d9f9fc1afaa806f3b3a4a351e63d0246b79a4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3201a24f0e10884190e29477f9d9f9fc1afaa806f3b3a4a351e63d0246b79a4c->enter($__internal_3201a24f0e10884190e29477f9d9f9fc1afaa806f3b3a4a351e63d0246b79a4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_06cb00f73027496f56c51431fd1f14e6e045a76195c2548fb517b99253233b39->leave($__internal_06cb00f73027496f56c51431fd1f14e6e045a76195c2548fb517b99253233b39_prof);

        
        $__internal_3201a24f0e10884190e29477f9d9f9fc1afaa806f3b3a4a351e63d0246b79a4c->leave($__internal_3201a24f0e10884190e29477f9d9f9fc1afaa806f3b3a4a351e63d0246b79a4c_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_3a4f862404e96e421bf0353782570fc428dbc5c58e3878d11b4162e530535815 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a4f862404e96e421bf0353782570fc428dbc5c58e3878d11b4162e530535815->enter($__internal_3a4f862404e96e421bf0353782570fc428dbc5c58e3878d11b4162e530535815_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_a515315320a779d9fa3c661dabffd7282d062b39df81a2c0638b1f007cb8a202 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a515315320a779d9fa3c661dabffd7282d062b39df81a2c0638b1f007cb8a202->enter($__internal_a515315320a779d9fa3c661dabffd7282d062b39df81a2c0638b1f007cb8a202_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_a515315320a779d9fa3c661dabffd7282d062b39df81a2c0638b1f007cb8a202->leave($__internal_a515315320a779d9fa3c661dabffd7282d062b39df81a2c0638b1f007cb8a202_prof);

        
        $__internal_3a4f862404e96e421bf0353782570fc428dbc5c58e3878d11b4162e530535815->leave($__internal_3a4f862404e96e421bf0353782570fc428dbc5c58e3878d11b4162e530535815_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_2920367ed095f340ec95dbca48aede18dd1ff0047479baa2c678c75b585434e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2920367ed095f340ec95dbca48aede18dd1ff0047479baa2c678c75b585434e4->enter($__internal_2920367ed095f340ec95dbca48aede18dd1ff0047479baa2c678c75b585434e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_2bd89322ee7ad22a2aa2fca1053dbc3964cd4e6f31f8b77090d8cf31f1d59335 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bd89322ee7ad22a2aa2fca1053dbc3964cd4e6f31f8b77090d8cf31f1d59335->enter($__internal_2bd89322ee7ad22a2aa2fca1053dbc3964cd4e6f31f8b77090d8cf31f1d59335_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_2bd89322ee7ad22a2aa2fca1053dbc3964cd4e6f31f8b77090d8cf31f1d59335->leave($__internal_2bd89322ee7ad22a2aa2fca1053dbc3964cd4e6f31f8b77090d8cf31f1d59335_prof);

        
        $__internal_2920367ed095f340ec95dbca48aede18dd1ff0047479baa2c678c75b585434e4->leave($__internal_2920367ed095f340ec95dbca48aede18dd1ff0047479baa2c678c75b585434e4_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_ca9b18d517fa220a27f94e08f99729c9d07f1c6b4b4f32f4af785ab79ca5c543 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca9b18d517fa220a27f94e08f99729c9d07f1c6b4b4f32f4af785ab79ca5c543->enter($__internal_ca9b18d517fa220a27f94e08f99729c9d07f1c6b4b4f32f4af785ab79ca5c543_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_096ecdd03fab5685468e813d8a41521b8bf5f61a61a0ea84ae1911bb454c7bd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_096ecdd03fab5685468e813d8a41521b8bf5f61a61a0ea84ae1911bb454c7bd5->enter($__internal_096ecdd03fab5685468e813d8a41521b8bf5f61a61a0ea84ae1911bb454c7bd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_096ecdd03fab5685468e813d8a41521b8bf5f61a61a0ea84ae1911bb454c7bd5->leave($__internal_096ecdd03fab5685468e813d8a41521b8bf5f61a61a0ea84ae1911bb454c7bd5_prof);

        
        $__internal_ca9b18d517fa220a27f94e08f99729c9d07f1c6b4b4f32f4af785ab79ca5c543->leave($__internal_ca9b18d517fa220a27f94e08f99729c9d07f1c6b4b4f32f4af785ab79ca5c543_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
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
", "@FOSUser/Registration/email.txt.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\app\\Resources\\FOSUserBundle\\views\\Registration\\email.txt.twig");
    }
}
