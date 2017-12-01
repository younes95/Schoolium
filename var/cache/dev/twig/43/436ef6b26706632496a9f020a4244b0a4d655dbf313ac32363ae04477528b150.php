<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_3e3cfe76230e5d301a3c407a058a2c1f52a4cdb574d0ea80ef653cc4b8dfb14b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4231d7e8757e089eb67014859094d454332369d5a1468ba8c7a2848e359c7934 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4231d7e8757e089eb67014859094d454332369d5a1468ba8c7a2848e359c7934->enter($__internal_4231d7e8757e089eb67014859094d454332369d5a1468ba8c7a2848e359c7934_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_ddc443d85a08b8bf218773af9ce61562286bb87100d79a1600dacc87e4ec9cc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddc443d85a08b8bf218773af9ce61562286bb87100d79a1600dacc87e4ec9cc2->enter($__internal_ddc443d85a08b8bf218773af9ce61562286bb87100d79a1600dacc87e4ec9cc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_4231d7e8757e089eb67014859094d454332369d5a1468ba8c7a2848e359c7934->leave($__internal_4231d7e8757e089eb67014859094d454332369d5a1468ba8c7a2848e359c7934_prof);

        
        $__internal_ddc443d85a08b8bf218773af9ce61562286bb87100d79a1600dacc87e4ec9cc2->leave($__internal_ddc443d85a08b8bf218773af9ce61562286bb87100d79a1600dacc87e4ec9cc2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "@Twig/Exception/error.atom.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
