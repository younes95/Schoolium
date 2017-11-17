<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_576c773e18a6a5ac8c77fbb7b5934d7422f8d2ff5ad6c63673555c53aa5d38b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_12dd732b3000bdc5a378d0bd0ca7fb85f84f1fc6932f784ef246d32445dc277a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12dd732b3000bdc5a378d0bd0ca7fb85f84f1fc6932f784ef246d32445dc277a->enter($__internal_12dd732b3000bdc5a378d0bd0ca7fb85f84f1fc6932f784ef246d32445dc277a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $__internal_f0c97f2f088f2161b6bfecce360e38f2f5701a63861ffe3d31869733dc4c0c51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0c97f2f088f2161b6bfecce360e38f2f5701a63861ffe3d31869733dc4c0c51->enter($__internal_f0c97f2f088f2161b6bfecce360e38f2f5701a63861ffe3d31869733dc4c0c51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_12dd732b3000bdc5a378d0bd0ca7fb85f84f1fc6932f784ef246d32445dc277a->leave($__internal_12dd732b3000bdc5a378d0bd0ca7fb85f84f1fc6932f784ef246d32445dc277a_prof);

        
        $__internal_f0c97f2f088f2161b6bfecce360e38f2f5701a63861ffe3d31869733dc4c0c51->leave($__internal_f0c97f2f088f2161b6bfecce360e38f2f5701a63861ffe3d31869733dc4c0c51_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bb214d8b430115718adb8358abba957b4d76f4f8421835c8de54aebc558ce914 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb214d8b430115718adb8358abba957b4d76f4f8421835c8de54aebc558ce914->enter($__internal_bb214d8b430115718adb8358abba957b4d76f4f8421835c8de54aebc558ce914_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_7891810dff1c3e2c1901559710ae5b738d1b5338269348d0e3a9c60a02c2347a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7891810dff1c3e2c1901559710ae5b738d1b5338269348d0e3a9c60a02c2347a->enter($__internal_7891810dff1c3e2c1901559710ae5b738d1b5338269348d0e3a9c60a02c2347a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_7891810dff1c3e2c1901559710ae5b738d1b5338269348d0e3a9c60a02c2347a->leave($__internal_7891810dff1c3e2c1901559710ae5b738d1b5338269348d0e3a9c60a02c2347a_prof);

        
        $__internal_bb214d8b430115718adb8358abba957b4d76f4f8421835c8de54aebc558ce914->leave($__internal_bb214d8b430115718adb8358abba957b4d76f4f8421835c8de54aebc558ce914_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
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
", "FOSUserBundle:Security:login.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
