<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_fa5c9c354d2ba3996bc34bbb16743a20b12dca171759e3320608b33f7d51e74a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_22ac5856cf7e43a795cb1994facadecc2ca3c7fa7db3ca10698c61d265068d23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22ac5856cf7e43a795cb1994facadecc2ca3c7fa7db3ca10698c61d265068d23->enter($__internal_22ac5856cf7e43a795cb1994facadecc2ca3c7fa7db3ca10698c61d265068d23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_ea73a366dd7c3019f176436e5beda5c563d4af8447fa49097d9b7770d58ad0c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea73a366dd7c3019f176436e5beda5c563d4af8447fa49097d9b7770d58ad0c1->enter($__internal_ea73a366dd7c3019f176436e5beda5c563d4af8447fa49097d9b7770d58ad0c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_22ac5856cf7e43a795cb1994facadecc2ca3c7fa7db3ca10698c61d265068d23->leave($__internal_22ac5856cf7e43a795cb1994facadecc2ca3c7fa7db3ca10698c61d265068d23_prof);

        
        $__internal_ea73a366dd7c3019f176436e5beda5c563d4af8447fa49097d9b7770d58ad0c1->leave($__internal_ea73a366dd7c3019f176436e5beda5c563d4af8447fa49097d9b7770d58ad0c1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_92a6d4b3e8e201ac843c1c669f0f0581c192db3b4d68fc36be598ef68131fb27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92a6d4b3e8e201ac843c1c669f0f0581c192db3b4d68fc36be598ef68131fb27->enter($__internal_92a6d4b3e8e201ac843c1c669f0f0581c192db3b4d68fc36be598ef68131fb27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_2eb01376001ae89d47dbf98eaa7165e9398279fb28bb0395d32ec577c1602478 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2eb01376001ae89d47dbf98eaa7165e9398279fb28bb0395d32ec577c1602478->enter($__internal_2eb01376001ae89d47dbf98eaa7165e9398279fb28bb0395d32ec577c1602478_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_2eb01376001ae89d47dbf98eaa7165e9398279fb28bb0395d32ec577c1602478->leave($__internal_2eb01376001ae89d47dbf98eaa7165e9398279fb28bb0395d32ec577c1602478_prof);

        
        $__internal_92a6d4b3e8e201ac843c1c669f0f0581c192db3b4d68fc36be598ef68131fb27->leave($__internal_92a6d4b3e8e201ac843c1c669f0f0581c192db3b4d68fc36be598ef68131fb27_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\app\\Resources\\FOSUserBundle\\views\\Security\\login.html.twig");
    }
}
