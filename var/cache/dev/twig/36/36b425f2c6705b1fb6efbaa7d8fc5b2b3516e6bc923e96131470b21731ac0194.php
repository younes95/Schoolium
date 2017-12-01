<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_1a9dab48292fbc982af7d3daa88e18b61f4ca8ea7e7de3f9a00de3b86f0ef11b extends Twig_Template
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
        $__internal_6113796c76eb1f641ce7e564a2d3aa51afa45ce7ebe317e37fd4a54c3d3fa60a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6113796c76eb1f641ce7e564a2d3aa51afa45ce7ebe317e37fd4a54c3d3fa60a->enter($__internal_6113796c76eb1f641ce7e564a2d3aa51afa45ce7ebe317e37fd4a54c3d3fa60a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_09b0d60a9c6e33b919f0c20f68652681bbe77337d3a1e072f304414008b3fb9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09b0d60a9c6e33b919f0c20f68652681bbe77337d3a1e072f304414008b3fb9f->enter($__internal_09b0d60a9c6e33b919f0c20f68652681bbe77337d3a1e072f304414008b3fb9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_6113796c76eb1f641ce7e564a2d3aa51afa45ce7ebe317e37fd4a54c3d3fa60a->leave($__internal_6113796c76eb1f641ce7e564a2d3aa51afa45ce7ebe317e37fd4a54c3d3fa60a_prof);

        
        $__internal_09b0d60a9c6e33b919f0c20f68652681bbe77337d3a1e072f304414008b3fb9f->leave($__internal_09b0d60a9c6e33b919f0c20f68652681bbe77337d3a1e072f304414008b3fb9f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "@Twig/Exception/exception.rdf.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.rdf.twig");
    }
}
