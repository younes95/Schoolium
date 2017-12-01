<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_e180f9812d9abd59e8d051fff5bf906fb5a7a2e7a1089a63df52725eeff688ea extends Twig_Template
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
        $__internal_0b90d742df6bb288c359d1d799e48461d798fbf88fa5e63b32442d49aefa52f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b90d742df6bb288c359d1d799e48461d798fbf88fa5e63b32442d49aefa52f8->enter($__internal_0b90d742df6bb288c359d1d799e48461d798fbf88fa5e63b32442d49aefa52f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_27dec686688d45941b6cfdb2496e4cca3129470bfa7b10a688ac71667aae32e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27dec686688d45941b6cfdb2496e4cca3129470bfa7b10a688ac71667aae32e4->enter($__internal_27dec686688d45941b6cfdb2496e4cca3129470bfa7b10a688ac71667aae32e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_0b90d742df6bb288c359d1d799e48461d798fbf88fa5e63b32442d49aefa52f8->leave($__internal_0b90d742df6bb288c359d1d799e48461d798fbf88fa5e63b32442d49aefa52f8_prof);

        
        $__internal_27dec686688d45941b6cfdb2496e4cca3129470bfa7b10a688ac71667aae32e4->leave($__internal_27dec686688d45941b6cfdb2496e4cca3129470bfa7b10a688ac71667aae32e4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "@Twig/Exception/exception.js.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.js.twig");
    }
}
