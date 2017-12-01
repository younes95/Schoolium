<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_062d2765a011620b6d73c82eabfd9e25721e0be85d8317f339764a5606a61e85 extends Twig_Template
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
        $__internal_9fe49bcc329a9f75018913bf85ba8dc93e5a46149e20338c8030432777e2b887 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fe49bcc329a9f75018913bf85ba8dc93e5a46149e20338c8030432777e2b887->enter($__internal_9fe49bcc329a9f75018913bf85ba8dc93e5a46149e20338c8030432777e2b887_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_92b7111b605da014a746a5832948b6dcd93f64ae745d32141dc1dadcec4a3d23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92b7111b605da014a746a5832948b6dcd93f64ae745d32141dc1dadcec4a3d23->enter($__internal_92b7111b605da014a746a5832948b6dcd93f64ae745d32141dc1dadcec4a3d23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_9fe49bcc329a9f75018913bf85ba8dc93e5a46149e20338c8030432777e2b887->leave($__internal_9fe49bcc329a9f75018913bf85ba8dc93e5a46149e20338c8030432777e2b887_prof);

        
        $__internal_92b7111b605da014a746a5832948b6dcd93f64ae745d32141dc1dadcec4a3d23->leave($__internal_92b7111b605da014a746a5832948b6dcd93f64ae745d32141dc1dadcec4a3d23_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
