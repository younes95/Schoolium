<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_d22126f7a9171352b0754978fad4dfc3fb81db35d5a32cafca6ef1b0e72b5314 extends Twig_Template
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
        $__internal_97683c0c07ed11b54aa9c784048d15727193f079447eefa87ca5f9aed0d8b711 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97683c0c07ed11b54aa9c784048d15727193f079447eefa87ca5f9aed0d8b711->enter($__internal_97683c0c07ed11b54aa9c784048d15727193f079447eefa87ca5f9aed0d8b711_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_b97465c432cb0e8749e6398c191be6cc1da7e70741ee524a8050270c1091c9b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b97465c432cb0e8749e6398c191be6cc1da7e70741ee524a8050270c1091c9b4->enter($__internal_b97465c432cb0e8749e6398c191be6cc1da7e70741ee524a8050270c1091c9b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_97683c0c07ed11b54aa9c784048d15727193f079447eefa87ca5f9aed0d8b711->leave($__internal_97683c0c07ed11b54aa9c784048d15727193f079447eefa87ca5f9aed0d8b711_prof);

        
        $__internal_b97465c432cb0e8749e6398c191be6cc1da7e70741ee524a8050270c1091c9b4->leave($__internal_b97465c432cb0e8749e6398c191be6cc1da7e70741ee524a8050270c1091c9b4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
