<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_3f7bf1cf12951abc18db2966ea07bb74d6cbfee5434c28ba8bbc95efdf8fdda9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
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
        $__internal_96062e0b8d59f9ea8def633423b1d30037cf440002e53ad6d8f9cafc6febae7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96062e0b8d59f9ea8def633423b1d30037cf440002e53ad6d8f9cafc6febae7e->enter($__internal_96062e0b8d59f9ea8def633423b1d30037cf440002e53ad6d8f9cafc6febae7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_bcad3ba69b133db2b8bfec366f8fa406c1fdca28efbab300ad156964a6d6de55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcad3ba69b133db2b8bfec366f8fa406c1fdca28efbab300ad156964a6d6de55->enter($__internal_bcad3ba69b133db2b8bfec366f8fa406c1fdca28efbab300ad156964a6d6de55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_96062e0b8d59f9ea8def633423b1d30037cf440002e53ad6d8f9cafc6febae7e->leave($__internal_96062e0b8d59f9ea8def633423b1d30037cf440002e53ad6d8f9cafc6febae7e_prof);

        
        $__internal_bcad3ba69b133db2b8bfec366f8fa406c1fdca28efbab300ad156964a6d6de55->leave($__internal_bcad3ba69b133db2b8bfec366f8fa406c1fdca28efbab300ad156964a6d6de55_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3b2d44f8f80928872e4f7f89865e293dc1b468ba8da398dde133573004b02602 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b2d44f8f80928872e4f7f89865e293dc1b468ba8da398dde133573004b02602->enter($__internal_3b2d44f8f80928872e4f7f89865e293dc1b468ba8da398dde133573004b02602_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_401057831b04caf7aacacd7e3f63fb2e55a72215ff31dadcd220698de8c8160a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_401057831b04caf7aacacd7e3f63fb2e55a72215ff31dadcd220698de8c8160a->enter($__internal_401057831b04caf7aacacd7e3f63fb2e55a72215ff31dadcd220698de8c8160a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) ? $context["tokenLifetime"] : $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_401057831b04caf7aacacd7e3f63fb2e55a72215ff31dadcd220698de8c8160a->leave($__internal_401057831b04caf7aacacd7e3f63fb2e55a72215ff31dadcd220698de8c8160a_prof);

        
        $__internal_3b2d44f8f80928872e4f7f89865e293dc1b468ba8da398dde133573004b02602->leave($__internal_3b2d44f8f80928872e4f7f89865e293dc1b468ba8da398dde133573004b02602_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
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
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "FOSUserBundle:Resetting:check_email.html.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\app/Resources/FOSUserBundle/views/Resetting/check_email.html.twig");
    }
}
