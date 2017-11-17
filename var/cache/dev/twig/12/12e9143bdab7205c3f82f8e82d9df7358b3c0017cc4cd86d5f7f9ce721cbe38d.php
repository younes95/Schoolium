<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_4a1898d70c31567b111acf4c8a96ad27394c0a650e21dbf2c6d3ba94f79b14f2 extends Twig_Template
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
        $__internal_df428eaf0caae7e6d7d96b77238622b5dd5c3e3a6676b8f72e75e107c7e72b7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df428eaf0caae7e6d7d96b77238622b5dd5c3e3a6676b8f72e75e107c7e72b7c->enter($__internal_df428eaf0caae7e6d7d96b77238622b5dd5c3e3a6676b8f72e75e107c7e72b7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_382b7280540e5a2169fc6215e14249d776e2838e064473cefa2bcb2a288ede96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_382b7280540e5a2169fc6215e14249d776e2838e064473cefa2bcb2a288ede96->enter($__internal_382b7280540e5a2169fc6215e14249d776e2838e064473cefa2bcb2a288ede96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df428eaf0caae7e6d7d96b77238622b5dd5c3e3a6676b8f72e75e107c7e72b7c->leave($__internal_df428eaf0caae7e6d7d96b77238622b5dd5c3e3a6676b8f72e75e107c7e72b7c_prof);

        
        $__internal_382b7280540e5a2169fc6215e14249d776e2838e064473cefa2bcb2a288ede96->leave($__internal_382b7280540e5a2169fc6215e14249d776e2838e064473cefa2bcb2a288ede96_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ab799ecf75a4867c20a936848f7a0a4189a311b18450eaed6c653b720db8b9e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab799ecf75a4867c20a936848f7a0a4189a311b18450eaed6c653b720db8b9e7->enter($__internal_ab799ecf75a4867c20a936848f7a0a4189a311b18450eaed6c653b720db8b9e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_bb97b5e9c5eb15d17ea595db99b28229de0aac6d82132d404b8927a6766284a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb97b5e9c5eb15d17ea595db99b28229de0aac6d82132d404b8927a6766284a2->enter($__internal_bb97b5e9c5eb15d17ea595db99b28229de0aac6d82132d404b8927a6766284a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) ? $context["tokenLifetime"] : $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_bb97b5e9c5eb15d17ea595db99b28229de0aac6d82132d404b8927a6766284a2->leave($__internal_bb97b5e9c5eb15d17ea595db99b28229de0aac6d82132d404b8927a6766284a2_prof);

        
        $__internal_ab799ecf75a4867c20a936848f7a0a4189a311b18450eaed6c653b720db8b9e7->leave($__internal_ab799ecf75a4867c20a936848f7a0a4189a311b18450eaed6c653b720db8b9e7_prof);

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
", "FOSUserBundle:Resetting:check_email.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/FOSUserBundle/views/Resetting/check_email.html.twig");
    }
}
