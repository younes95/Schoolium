<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_3be36c52daff360d86d735f203002d64e284e97f1fc6846c5b0383fe4ecbe6ee extends Twig_Template
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
        $__internal_cc6db45d68ea5a6759fa90753230e73b974e74fed70f7bf476984d574c418dad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc6db45d68ea5a6759fa90753230e73b974e74fed70f7bf476984d574c418dad->enter($__internal_cc6db45d68ea5a6759fa90753230e73b974e74fed70f7bf476984d574c418dad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_4ce7964ae10a32b21eacb9556a9ebaba05cbc756ff0d11fd1b84f212cf0e0b35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ce7964ae10a32b21eacb9556a9ebaba05cbc756ff0d11fd1b84f212cf0e0b35->enter($__internal_4ce7964ae10a32b21eacb9556a9ebaba05cbc756ff0d11fd1b84f212cf0e0b35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_cc6db45d68ea5a6759fa90753230e73b974e74fed70f7bf476984d574c418dad->leave($__internal_cc6db45d68ea5a6759fa90753230e73b974e74fed70f7bf476984d574c418dad_prof);

        
        $__internal_4ce7964ae10a32b21eacb9556a9ebaba05cbc756ff0d11fd1b84f212cf0e0b35->leave($__internal_4ce7964ae10a32b21eacb9556a9ebaba05cbc756ff0d11fd1b84f212cf0e0b35_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
", "TwigBundle:Exception:exception.css.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
