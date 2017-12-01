<?php

/* @FOSUser/Registration/check_email.html.twig */
class __TwigTemplate_b503630083fe159791fd4c33ac22a57e1887026ec1a7e6bde6ee214560e78772 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/check_email.html.twig", 1);
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
        $__internal_de0ddcd8ceaed9ebe1db2a538dc14404bf560ead3be417f8b5dafb6f5457138e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de0ddcd8ceaed9ebe1db2a538dc14404bf560ead3be417f8b5dafb6f5457138e->enter($__internal_de0ddcd8ceaed9ebe1db2a538dc14404bf560ead3be417f8b5dafb6f5457138e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $__internal_494d7792b33c34d57f5f41f611364ae1bcb77fabb753ec3dbc6158056fdc4bc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_494d7792b33c34d57f5f41f611364ae1bcb77fabb753ec3dbc6158056fdc4bc0->enter($__internal_494d7792b33c34d57f5f41f611364ae1bcb77fabb753ec3dbc6158056fdc4bc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de0ddcd8ceaed9ebe1db2a538dc14404bf560ead3be417f8b5dafb6f5457138e->leave($__internal_de0ddcd8ceaed9ebe1db2a538dc14404bf560ead3be417f8b5dafb6f5457138e_prof);

        
        $__internal_494d7792b33c34d57f5f41f611364ae1bcb77fabb753ec3dbc6158056fdc4bc0->leave($__internal_494d7792b33c34d57f5f41f611364ae1bcb77fabb753ec3dbc6158056fdc4bc0_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_966325d2c57503899e901c176c63758a59a12e6847b05c2d8b82cadc117613fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_966325d2c57503899e901c176c63758a59a12e6847b05c2d8b82cadc117613fc->enter($__internal_966325d2c57503899e901c176c63758a59a12e6847b05c2d8b82cadc117613fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ec5087239acda71b74348d6037b875087d910e05bc8e172dacba0b3d6a695a63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec5087239acda71b74348d6037b875087d910e05bc8e172dacba0b3d6a695a63->enter($__internal_ec5087239acda71b74348d6037b875087d910e05bc8e172dacba0b3d6a695a63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_ec5087239acda71b74348d6037b875087d910e05bc8e172dacba0b3d6a695a63->leave($__internal_ec5087239acda71b74348d6037b875087d910e05bc8e172dacba0b3d6a695a63_prof);

        
        $__internal_966325d2c57503899e901c176c63758a59a12e6847b05c2d8b82cadc117613fc->leave($__internal_966325d2c57503899e901c176c63758a59a12e6847b05c2d8b82cadc117613fc_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/check_email.html.twig";
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
", "@FOSUser/Registration/check_email.html.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\app\\Resources\\FOSUserBundle\\views\\Registration\\check_email.html.twig");
    }
}
