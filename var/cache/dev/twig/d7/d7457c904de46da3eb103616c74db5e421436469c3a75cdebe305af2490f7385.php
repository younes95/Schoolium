<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_f111faba86a580cf046ddbb7b5d6e58bacf212dd064e3022449f40c759381566 extends Twig_Template
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
        $__internal_395d150f9090dd1ab97fd0e4dfa0813a83c711265cb9479e2162bdbf547f9b27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_395d150f9090dd1ab97fd0e4dfa0813a83c711265cb9479e2162bdbf547f9b27->enter($__internal_395d150f9090dd1ab97fd0e4dfa0813a83c711265cb9479e2162bdbf547f9b27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        $__internal_293ac8bc48c500e1f0f55e8384ceec7ef66da7d3fed6ffbc5e1e48db65ea6d0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_293ac8bc48c500e1f0f55e8384ceec7ef66da7d3fed6ffbc5e1e48db65ea6d0a->enter($__internal_293ac8bc48c500e1f0f55e8384ceec7ef66da7d3fed6ffbc5e1e48db65ea6d0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
";
        
        $__internal_395d150f9090dd1ab97fd0e4dfa0813a83c711265cb9479e2162bdbf547f9b27->leave($__internal_395d150f9090dd1ab97fd0e4dfa0813a83c711265cb9479e2162bdbf547f9b27_prof);

        
        $__internal_293ac8bc48c500e1f0f55e8384ceec7ef66da7d3fed6ffbc5e1e48db65ea6d0a->leave($__internal_293ac8bc48c500e1f0f55e8384ceec7ef66da7d3fed6ffbc5e1e48db65ea6d0a_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
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
        return new Twig_Source("{{ include('@Twig/exception.css.twig') }}

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
", "WebProfilerBundle:Collector:exception.css.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/exception.css.twig");
    }
}
