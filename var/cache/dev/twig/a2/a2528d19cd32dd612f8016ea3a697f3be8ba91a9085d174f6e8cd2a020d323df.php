<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_e0731b4961b425cdfa99869a8cfceb0558ad8c0d0bc31a33178cbc6fc451cd50 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_ee454acd02055f8c37912bb1c92ae845a55bc91e6bb9811ea50d59e202473a60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee454acd02055f8c37912bb1c92ae845a55bc91e6bb9811ea50d59e202473a60->enter($__internal_ee454acd02055f8c37912bb1c92ae845a55bc91e6bb9811ea50d59e202473a60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_501db342bf8bb8f93de0c9d9ce9471e27baa0c9b2f8712ff4c714a2533d3a0ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_501db342bf8bb8f93de0c9d9ce9471e27baa0c9b2f8712ff4c714a2533d3a0ed->enter($__internal_501db342bf8bb8f93de0c9d9ce9471e27baa0c9b2f8712ff4c714a2533d3a0ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee454acd02055f8c37912bb1c92ae845a55bc91e6bb9811ea50d59e202473a60->leave($__internal_ee454acd02055f8c37912bb1c92ae845a55bc91e6bb9811ea50d59e202473a60_prof);

        
        $__internal_501db342bf8bb8f93de0c9d9ce9471e27baa0c9b2f8712ff4c714a2533d3a0ed->leave($__internal_501db342bf8bb8f93de0c9d9ce9471e27baa0c9b2f8712ff4c714a2533d3a0ed_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7affe91a133e2c18dcf3971cdf4f7348922e98fd9597f9fc11963c1500158474 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7affe91a133e2c18dcf3971cdf4f7348922e98fd9597f9fc11963c1500158474->enter($__internal_7affe91a133e2c18dcf3971cdf4f7348922e98fd9597f9fc11963c1500158474_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e247190d04a3bb81a9d3ce71e00812c4f5d3f74a7d6ae91597374b4b4a954cea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e247190d04a3bb81a9d3ce71e00812c4f5d3f74a7d6ae91597374b4b4a954cea->enter($__internal_e247190d04a3bb81a9d3ce71e00812c4f5d3f74a7d6ae91597374b4b4a954cea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_e247190d04a3bb81a9d3ce71e00812c4f5d3f74a7d6ae91597374b4b4a954cea->leave($__internal_e247190d04a3bb81a9d3ce71e00812c4f5d3f74a7d6ae91597374b4b4a954cea_prof);

        
        $__internal_7affe91a133e2c18dcf3971cdf4f7348922e98fd9597f9fc11963c1500158474->leave($__internal_7affe91a133e2c18dcf3971cdf4f7348922e98fd9597f9fc11963c1500158474_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
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
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:check_email.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/FOSUserBundle/views/Registration/check_email.html.twig");
    }
}
