<?php

/* @WebProfiler/Collector/exception.css.twig */
class __TwigTemplate_7249e9ea235e0960072b3f2ad4e2f25badbf0f45e8620637ea2808d365437e71 extends Twig_Template
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
        $__internal_d3f2c59bf7198e0a425b7bb0cfa7de0a03f7b93f26b50078177b49908a23ff3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3f2c59bf7198e0a425b7bb0cfa7de0a03f7b93f26b50078177b49908a23ff3b->enter($__internal_d3f2c59bf7198e0a425b7bb0cfa7de0a03f7b93f26b50078177b49908a23ff3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

        $__internal_2f979abea966c6f58765c4b4446715c77ac9a470604e7459dc480efe8c33c1d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f979abea966c6f58765c4b4446715c77ac9a470604e7459dc480efe8c33c1d7->enter($__internal_2f979abea966c6f58765c4b4446715c77ac9a470604e7459dc480efe8c33c1d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

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
        
        $__internal_d3f2c59bf7198e0a425b7bb0cfa7de0a03f7b93f26b50078177b49908a23ff3b->leave($__internal_d3f2c59bf7198e0a425b7bb0cfa7de0a03f7b93f26b50078177b49908a23ff3b_prof);

        
        $__internal_2f979abea966c6f58765c4b4446715c77ac9a470604e7459dc480efe8c33c1d7->leave($__internal_2f979abea966c6f58765c4b4446715c77ac9a470604e7459dc480efe8c33c1d7_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.css.twig";
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
", "@WebProfiler/Collector/exception.css.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.css.twig");
    }
}
