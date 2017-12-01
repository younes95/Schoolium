<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_706943a73a69727d5e5e089c9a20f44ad1296883b63db329c8e7ca7100b2eb50 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fbbb456368453346990ed3941f3d6b24ffb675d3d7c84ab5613e45182f5eaf5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbbb456368453346990ed3941f3d6b24ffb675d3d7c84ab5613e45182f5eaf5a->enter($__internal_fbbb456368453346990ed3941f3d6b24ffb675d3d7c84ab5613e45182f5eaf5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_19357ff3b7e99c18ea7edccb287ad8e864b3bd643109a0c4db6d664ce5d0c209 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19357ff3b7e99c18ea7edccb287ad8e864b3bd643109a0c4db6d664ce5d0c209->enter($__internal_19357ff3b7e99c18ea7edccb287ad8e864b3bd643109a0c4db6d664ce5d0c209_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_fbbb456368453346990ed3941f3d6b24ffb675d3d7c84ab5613e45182f5eaf5a->leave($__internal_fbbb456368453346990ed3941f3d6b24ffb675d3d7c84ab5613e45182f5eaf5a_prof);

        
        $__internal_19357ff3b7e99c18ea7edccb287ad8e864b3bd643109a0c4db6d664ce5d0c209->leave($__internal_19357ff3b7e99c18ea7edccb287ad8e864b3bd643109a0c4db6d664ce5d0c209_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_33a9afb9f4ef533831f71cbe9f10d85bbbeef4f872692295a9bba340c7f18952 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33a9afb9f4ef533831f71cbe9f10d85bbbeef4f872692295a9bba340c7f18952->enter($__internal_33a9afb9f4ef533831f71cbe9f10d85bbbeef4f872692295a9bba340c7f18952_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_68679f8d51354eb6dc5f75d0ce81053fa266dc3c932ad631a5f43df07b842d9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68679f8d51354eb6dc5f75d0ce81053fa266dc3c932ad631a5f43df07b842d9a->enter($__internal_68679f8d51354eb6dc5f75d0ce81053fa266dc3c932ad631a5f43df07b842d9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_68679f8d51354eb6dc5f75d0ce81053fa266dc3c932ad631a5f43df07b842d9a->leave($__internal_68679f8d51354eb6dc5f75d0ce81053fa266dc3c932ad631a5f43df07b842d9a_prof);

        
        $__internal_33a9afb9f4ef533831f71cbe9f10d85bbbeef4f872692295a9bba340c7f18952->leave($__internal_33a9afb9f4ef533831f71cbe9f10d85bbbeef4f872692295a9bba340c7f18952_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
