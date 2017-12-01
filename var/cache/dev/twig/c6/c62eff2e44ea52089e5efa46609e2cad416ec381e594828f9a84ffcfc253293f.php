<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_79b52ee1bca8afd597c036390abe13a2a813e3884719713b9b534a93b0ee40db extends Twig_Template
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
        $__internal_237ff669ddc6d58e5fa92238e47d6a9b8198aa01fc9c9801375a12a60c94d692 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_237ff669ddc6d58e5fa92238e47d6a9b8198aa01fc9c9801375a12a60c94d692->enter($__internal_237ff669ddc6d58e5fa92238e47d6a9b8198aa01fc9c9801375a12a60c94d692_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_df5f906f2b14f2d3b70954c32d44cf5f0c6f89550ae5c12b1367546c6727f8f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df5f906f2b14f2d3b70954c32d44cf5f0c6f89550ae5c12b1367546c6727f8f1->enter($__internal_df5f906f2b14f2d3b70954c32d44cf5f0c6f89550ae5c12b1367546c6727f8f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_237ff669ddc6d58e5fa92238e47d6a9b8198aa01fc9c9801375a12a60c94d692->leave($__internal_237ff669ddc6d58e5fa92238e47d6a9b8198aa01fc9c9801375a12a60c94d692_prof);

        
        $__internal_df5f906f2b14f2d3b70954c32d44cf5f0c6f89550ae5c12b1367546c6727f8f1->leave($__internal_df5f906f2b14f2d3b70954c32d44cf5f0c6f89550ae5c12b1367546c6727f8f1_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
", "@Twig/Exception/exception.css.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.css.twig");
    }
}
