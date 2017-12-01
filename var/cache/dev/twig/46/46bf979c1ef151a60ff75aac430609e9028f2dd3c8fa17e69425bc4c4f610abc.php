<?php

/* @FOSUser/ChangePassword/change_password.html.twig */
class __TwigTemplate_1c7e500c309dcb1acf28074737b3766f92b3aec6af81d7699f69b0f2ea019288 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 1);
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
        $__internal_2fa697469d4c298adb2e201144403b4fee7c5465b01b6b488b3f4cffadc1148f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fa697469d4c298adb2e201144403b4fee7c5465b01b6b488b3f4cffadc1148f->enter($__internal_2fa697469d4c298adb2e201144403b4fee7c5465b01b6b488b3f4cffadc1148f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $__internal_dd685689f89678dfbf0a21728590c957274a48ed612e884bd9bc73ec8dd5a7d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd685689f89678dfbf0a21728590c957274a48ed612e884bd9bc73ec8dd5a7d1->enter($__internal_dd685689f89678dfbf0a21728590c957274a48ed612e884bd9bc73ec8dd5a7d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2fa697469d4c298adb2e201144403b4fee7c5465b01b6b488b3f4cffadc1148f->leave($__internal_2fa697469d4c298adb2e201144403b4fee7c5465b01b6b488b3f4cffadc1148f_prof);

        
        $__internal_dd685689f89678dfbf0a21728590c957274a48ed612e884bd9bc73ec8dd5a7d1->leave($__internal_dd685689f89678dfbf0a21728590c957274a48ed612e884bd9bc73ec8dd5a7d1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d78380e1c718c649520921c83a50c7cd84c0f554641ea5a52c1ba4f904076ba6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d78380e1c718c649520921c83a50c7cd84c0f554641ea5a52c1ba4f904076ba6->enter($__internal_d78380e1c718c649520921c83a50c7cd84c0f554641ea5a52c1ba4f904076ba6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_54a361765fd3ba18ffff1d27d6b46963d1f62395044bcfe0eee6b094a345ed9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54a361765fd3ba18ffff1d27d6b46963d1f62395044bcfe0eee6b094a345ed9e->enter($__internal_54a361765fd3ba18ffff1d27d6b46963d1f62395044bcfe0eee6b094a345ed9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 4)->display($context);
        
        $__internal_54a361765fd3ba18ffff1d27d6b46963d1f62395044bcfe0eee6b094a345ed9e->leave($__internal_54a361765fd3ba18ffff1d27d6b46963d1f62395044bcfe0eee6b094a345ed9e_prof);

        
        $__internal_d78380e1c718c649520921c83a50c7cd84c0f554641ea5a52c1ba4f904076ba6->leave($__internal_d78380e1c718c649520921c83a50c7cd84c0f554641ea5a52c1ba4f904076ba6_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/change_password.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
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

{% block fos_user_content %}
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/ChangePassword/change_password.html.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\app\\Resources\\FOSUserBundle\\views\\ChangePassword\\change_password.html.twig");
    }
}
