<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_4f30a614d8060f026ee47cd2e3cd2f20366100a3f3051b5bfb88a1aae519092a extends Twig_Template
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
        $__internal_20622bed7a81ec2108844285c7626afd53798dac422442d5ab33215d60b0aae2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20622bed7a81ec2108844285c7626afd53798dac422442d5ab33215d60b0aae2->enter($__internal_20622bed7a81ec2108844285c7626afd53798dac422442d5ab33215d60b0aae2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_791c730f3f99b688556678bf9341b4f1cef48caa4091b3914ca9deb62324422f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_791c730f3f99b688556678bf9341b4f1cef48caa4091b3914ca9deb62324422f->enter($__internal_791c730f3f99b688556678bf9341b4f1cef48caa4091b3914ca9deb62324422f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_20622bed7a81ec2108844285c7626afd53798dac422442d5ab33215d60b0aae2->leave($__internal_20622bed7a81ec2108844285c7626afd53798dac422442d5ab33215d60b0aae2_prof);

        
        $__internal_791c730f3f99b688556678bf9341b4f1cef48caa4091b3914ca9deb62324422f->leave($__internal_791c730f3f99b688556678bf9341b4f1cef48caa4091b3914ca9deb62324422f_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_952332a8f8255e1ac9957fda6a1621f17ad58c6caffc1653b9b442743670542c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_952332a8f8255e1ac9957fda6a1621f17ad58c6caffc1653b9b442743670542c->enter($__internal_952332a8f8255e1ac9957fda6a1621f17ad58c6caffc1653b9b442743670542c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f7321307d85acd459b19c035704efbf921b73c7a8ddf64eb111200d676a1cf88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7321307d85acd459b19c035704efbf921b73c7a8ddf64eb111200d676a1cf88->enter($__internal_f7321307d85acd459b19c035704efbf921b73c7a8ddf64eb111200d676a1cf88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_f7321307d85acd459b19c035704efbf921b73c7a8ddf64eb111200d676a1cf88->leave($__internal_f7321307d85acd459b19c035704efbf921b73c7a8ddf64eb111200d676a1cf88_prof);

        
        $__internal_952332a8f8255e1ac9957fda6a1621f17ad58c6caffc1653b9b442743670542c->leave($__internal_952332a8f8255e1ac9957fda6a1621f17ad58c6caffc1653b9b442743670542c_prof);

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
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
