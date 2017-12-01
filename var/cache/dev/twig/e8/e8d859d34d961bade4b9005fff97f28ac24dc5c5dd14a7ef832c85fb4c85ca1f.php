<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_80fb3a719a8df43bc36ec504dc75df625d94e38a75044c2f8ac923e5e7692b72 extends Twig_Template
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
        $__internal_e2b281777a35569684a19f82b10df713404f509fb6a8df24cac3af5b211ece0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2b281777a35569684a19f82b10df713404f509fb6a8df24cac3af5b211ece0d->enter($__internal_e2b281777a35569684a19f82b10df713404f509fb6a8df24cac3af5b211ece0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_c511fa096893099171a4c3619b6de55705130156e8fde3760193a67680b14a82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c511fa096893099171a4c3619b6de55705130156e8fde3760193a67680b14a82->enter($__internal_c511fa096893099171a4c3619b6de55705130156e8fde3760193a67680b14a82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_e2b281777a35569684a19f82b10df713404f509fb6a8df24cac3af5b211ece0d->leave($__internal_e2b281777a35569684a19f82b10df713404f509fb6a8df24cac3af5b211ece0d_prof);

        
        $__internal_c511fa096893099171a4c3619b6de55705130156e8fde3760193a67680b14a82->leave($__internal_c511fa096893099171a4c3619b6de55705130156e8fde3760193a67680b14a82_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
", "@Twig/Exception/error.rdf.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
