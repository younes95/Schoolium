<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_9618fb385f27548aaf717ce25d8363a3037fd38d77cd4a84866ea38449ca69c6 extends Twig_Template
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
        $__internal_aa27f268483dddf1b83a25a7afc8dcfd15d4706aefe2a7945faf473529f3c4bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa27f268483dddf1b83a25a7afc8dcfd15d4706aefe2a7945faf473529f3c4bc->enter($__internal_aa27f268483dddf1b83a25a7afc8dcfd15d4706aefe2a7945faf473529f3c4bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_2d35ecc69e7f3f045caa78c96fd97305424c9e0b1c44d49ea786a8a66d07c084 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d35ecc69e7f3f045caa78c96fd97305424c9e0b1c44d49ea786a8a66d07c084->enter($__internal_2d35ecc69e7f3f045caa78c96fd97305424c9e0b1c44d49ea786a8a66d07c084_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_aa27f268483dddf1b83a25a7afc8dcfd15d4706aefe2a7945faf473529f3c4bc->leave($__internal_aa27f268483dddf1b83a25a7afc8dcfd15d4706aefe2a7945faf473529f3c4bc_prof);

        
        $__internal_2d35ecc69e7f3f045caa78c96fd97305424c9e0b1c44d49ea786a8a66d07c084->leave($__internal_2d35ecc69e7f3f045caa78c96fd97305424c9e0b1c44d49ea786a8a66d07c084_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
", "TwigBundle:Exception:exception.rdf.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
