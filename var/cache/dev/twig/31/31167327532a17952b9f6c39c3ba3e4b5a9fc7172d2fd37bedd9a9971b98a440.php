<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_86f7a632103f026320ef584c15d29cc5e25f4b6f4390a2303dbc447b59b77846 extends Twig_Template
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
        $__internal_8ee01de9147d11c5ed00fdd716ecc45b33bc4f01e3fd5e51b19212249fd2f7db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ee01de9147d11c5ed00fdd716ecc45b33bc4f01e3fd5e51b19212249fd2f7db->enter($__internal_8ee01de9147d11c5ed00fdd716ecc45b33bc4f01e3fd5e51b19212249fd2f7db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_b2df206e06dd1af0054912843bfdce8e4c1b3fafd5f1636f00f8d7eb9782c769 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2df206e06dd1af0054912843bfdce8e4c1b3fafd5f1636f00f8d7eb9782c769->enter($__internal_b2df206e06dd1af0054912843bfdce8e4c1b3fafd5f1636f00f8d7eb9782c769_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_8ee01de9147d11c5ed00fdd716ecc45b33bc4f01e3fd5e51b19212249fd2f7db->leave($__internal_8ee01de9147d11c5ed00fdd716ecc45b33bc4f01e3fd5e51b19212249fd2f7db_prof);

        
        $__internal_b2df206e06dd1af0054912843bfdce8e4c1b3fafd5f1636f00f8d7eb9782c769->leave($__internal_b2df206e06dd1af0054912843bfdce8e4c1b3fafd5f1636f00f8d7eb9782c769_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
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
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.js.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.js.twig");
    }
}
