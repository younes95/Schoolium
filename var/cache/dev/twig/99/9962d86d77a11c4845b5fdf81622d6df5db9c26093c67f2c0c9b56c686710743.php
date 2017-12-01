<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_5cea255f8ac967820ec3d0e6610a9ec3448d674780fda4d97fa5bf78ff08ef74 extends Twig_Template
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
        $__internal_7f877528ef8d7e05dda774975eb64dbcde43e8260274193708622b271ea92ebb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f877528ef8d7e05dda774975eb64dbcde43e8260274193708622b271ea92ebb->enter($__internal_7f877528ef8d7e05dda774975eb64dbcde43e8260274193708622b271ea92ebb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_ef72404d55cf07ecdb39f8fa85aeb15aaa6a8eb8e052435d84fb48c20503bfad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef72404d55cf07ecdb39f8fa85aeb15aaa6a8eb8e052435d84fb48c20503bfad->enter($__internal_ef72404d55cf07ecdb39f8fa85aeb15aaa6a8eb8e052435d84fb48c20503bfad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_7f877528ef8d7e05dda774975eb64dbcde43e8260274193708622b271ea92ebb->leave($__internal_7f877528ef8d7e05dda774975eb64dbcde43e8260274193708622b271ea92ebb_prof);

        
        $__internal_ef72404d55cf07ecdb39f8fa85aeb15aaa6a8eb8e052435d84fb48c20503bfad->leave($__internal_ef72404d55cf07ecdb39f8fa85aeb15aaa6a8eb8e052435d84fb48c20503bfad_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
