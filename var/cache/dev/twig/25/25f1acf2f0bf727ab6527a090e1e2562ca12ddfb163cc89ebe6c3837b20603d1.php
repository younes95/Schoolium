<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_70e59212a33bbc3ba078a9c00406a1a9c76af612cf2fc2ce7394d717b59219da extends Twig_Template
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
        $__internal_3454f839d85cc9f05a5dd86706f63259938d3683405491c9295749d666b22fc5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3454f839d85cc9f05a5dd86706f63259938d3683405491c9295749d666b22fc5->enter($__internal_3454f839d85cc9f05a5dd86706f63259938d3683405491c9295749d666b22fc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_f08fa2cb7f359fa48755352678d57302c1edf0311d2c686abea28073d1ef1dcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f08fa2cb7f359fa48755352678d57302c1edf0311d2c686abea28073d1ef1dcf->enter($__internal_f08fa2cb7f359fa48755352678d57302c1edf0311d2c686abea28073d1ef1dcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3454f839d85cc9f05a5dd86706f63259938d3683405491c9295749d666b22fc5->leave($__internal_3454f839d85cc9f05a5dd86706f63259938d3683405491c9295749d666b22fc5_prof);

        
        $__internal_f08fa2cb7f359fa48755352678d57302c1edf0311d2c686abea28073d1ef1dcf->leave($__internal_f08fa2cb7f359fa48755352678d57302c1edf0311d2c686abea28073d1ef1dcf_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fb6cc312019485f0ae9bfd7e8ca2f6f1ef0ace0a7264b2f6c21cf1752c9784ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb6cc312019485f0ae9bfd7e8ca2f6f1ef0ace0a7264b2f6c21cf1752c9784ab->enter($__internal_fb6cc312019485f0ae9bfd7e8ca2f6f1ef0ace0a7264b2f6c21cf1752c9784ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4a84a19af0c7f33a88af77a9f2ef2a34850d48c4a2bf5b52da6f1fc3c2e50991 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a84a19af0c7f33a88af77a9f2ef2a34850d48c4a2bf5b52da6f1fc3c2e50991->enter($__internal_4a84a19af0c7f33a88af77a9f2ef2a34850d48c4a2bf5b52da6f1fc3c2e50991_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_4a84a19af0c7f33a88af77a9f2ef2a34850d48c4a2bf5b52da6f1fc3c2e50991->leave($__internal_4a84a19af0c7f33a88af77a9f2ef2a34850d48c4a2bf5b52da6f1fc3c2e50991_prof);

        
        $__internal_fb6cc312019485f0ae9bfd7e8ca2f6f1ef0ace0a7264b2f6c21cf1752c9784ab->leave($__internal_fb6cc312019485f0ae9bfd7e8ca2f6f1ef0ace0a7264b2f6c21cf1752c9784ab_prof);

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
", "FOSUserBundle:Registration:confirmed.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/FOSUserBundle/views/Registration/confirmed.html.twig");
    }
}
