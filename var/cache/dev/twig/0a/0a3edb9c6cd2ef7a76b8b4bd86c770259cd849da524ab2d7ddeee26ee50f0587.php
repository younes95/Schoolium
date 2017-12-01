<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_1fb507363248ecd7908daec1fd65bdaa984058148b95c8a998e9f5930c8c4ec3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_430ed2244869ed18120809072f28dae01210f72ea3e4089ae571269b7c6b8de4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_430ed2244869ed18120809072f28dae01210f72ea3e4089ae571269b7c6b8de4->enter($__internal_430ed2244869ed18120809072f28dae01210f72ea3e4089ae571269b7c6b8de4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_280ff53f5ee802551b9cd4eda5c003eab483a78179cf26a142d34e490685c483 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_280ff53f5ee802551b9cd4eda5c003eab483a78179cf26a142d34e490685c483->enter($__internal_280ff53f5ee802551b9cd4eda5c003eab483a78179cf26a142d34e490685c483_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_430ed2244869ed18120809072f28dae01210f72ea3e4089ae571269b7c6b8de4->leave($__internal_430ed2244869ed18120809072f28dae01210f72ea3e4089ae571269b7c6b8de4_prof);

        
        $__internal_280ff53f5ee802551b9cd4eda5c003eab483a78179cf26a142d34e490685c483->leave($__internal_280ff53f5ee802551b9cd4eda5c003eab483a78179cf26a142d34e490685c483_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d75d2720a745ef4256f601e8ec59a5b63c8227c76df3208b3cb04fecaa48761d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d75d2720a745ef4256f601e8ec59a5b63c8227c76df3208b3cb04fecaa48761d->enter($__internal_d75d2720a745ef4256f601e8ec59a5b63c8227c76df3208b3cb04fecaa48761d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_00a717cb0f962d74adf2fcda9e6b26c19b14b750205bf4327cdd89488357dfb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00a717cb0f962d74adf2fcda9e6b26c19b14b750205bf4327cdd89488357dfb6->enter($__internal_00a717cb0f962d74adf2fcda9e6b26c19b14b750205bf4327cdd89488357dfb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_00a717cb0f962d74adf2fcda9e6b26c19b14b750205bf4327cdd89488357dfb6->leave($__internal_00a717cb0f962d74adf2fcda9e6b26c19b14b750205bf4327cdd89488357dfb6_prof);

        
        $__internal_d75d2720a745ef4256f601e8ec59a5b63c8227c76df3208b3cb04fecaa48761d->leave($__internal_d75d2720a745ef4256f601e8ec59a5b63c8227c76df3208b3cb04fecaa48761d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:confirmed.html.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\app/Resources/FOSUserBundle/views/Registration/confirmed.html.twig");
    }
}
