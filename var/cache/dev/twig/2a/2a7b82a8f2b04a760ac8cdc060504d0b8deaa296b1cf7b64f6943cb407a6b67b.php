<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_a39c4d267a93c23c71bed96768da44f870a2e199b55ac87fc7e097d39ebb7465 extends Twig_Template
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
        $__internal_8851efc48180bac2fd94757e3bda53c89f2d3e18433ad725f9c69cc0c26f21be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8851efc48180bac2fd94757e3bda53c89f2d3e18433ad725f9c69cc0c26f21be->enter($__internal_8851efc48180bac2fd94757e3bda53c89f2d3e18433ad725f9c69cc0c26f21be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_6a9a6f4b932865530c18ab2438c1165bd4016db291f5e6925d163fef1b89198e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a9a6f4b932865530c18ab2438c1165bd4016db291f5e6925d163fef1b89198e->enter($__internal_6a9a6f4b932865530c18ab2438c1165bd4016db291f5e6925d163fef1b89198e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_8851efc48180bac2fd94757e3bda53c89f2d3e18433ad725f9c69cc0c26f21be->leave($__internal_8851efc48180bac2fd94757e3bda53c89f2d3e18433ad725f9c69cc0c26f21be_prof);

        
        $__internal_6a9a6f4b932865530c18ab2438c1165bd4016db291f5e6925d163fef1b89198e->leave($__internal_6a9a6f4b932865530c18ab2438c1165bd4016db291f5e6925d163fef1b89198e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
", "@Twig/Exception/exception.atom.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.atom.twig");
    }
}
