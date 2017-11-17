<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_5a1144d2a97ff8b5fbe77968f7bece0aa5b4ba021073dc8d44ebe2ecb7e40bbb extends Twig_Template
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
        $__internal_ce379717ddd5da7b52908d87badebf93d7696f622b6b1a4121b78ac58dd87a4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce379717ddd5da7b52908d87badebf93d7696f622b6b1a4121b78ac58dd87a4b->enter($__internal_ce379717ddd5da7b52908d87badebf93d7696f622b6b1a4121b78ac58dd87a4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_2bf1eb33c6524f582361d2f2191fd0784db6b69bbe25d4f87dbfebb277bcb7f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bf1eb33c6524f582361d2f2191fd0784db6b69bbe25d4f87dbfebb277bcb7f4->enter($__internal_2bf1eb33c6524f582361d2f2191fd0784db6b69bbe25d4f87dbfebb277bcb7f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_ce379717ddd5da7b52908d87badebf93d7696f622b6b1a4121b78ac58dd87a4b->leave($__internal_ce379717ddd5da7b52908d87badebf93d7696f622b6b1a4121b78ac58dd87a4b_prof);

        
        $__internal_2bf1eb33c6524f582361d2f2191fd0784db6b69bbe25d4f87dbfebb277bcb7f4->leave($__internal_2bf1eb33c6524f582361d2f2191fd0784db6b69bbe25d4f87dbfebb277bcb7f4_prof);

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
", "TwigBundle:Exception:error.rdf.twig", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
