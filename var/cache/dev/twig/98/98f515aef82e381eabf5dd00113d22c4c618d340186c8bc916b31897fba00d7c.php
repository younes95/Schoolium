<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_d419f92c55e03d031904800f7fa8114751b7cf13d159543da6b97755000b29c6 extends Twig_Template
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
        $__internal_00ba2863cf861d2e72b90dfaf75927b013d86cb150fb36c62c5a95946bb5aa31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00ba2863cf861d2e72b90dfaf75927b013d86cb150fb36c62c5a95946bb5aa31->enter($__internal_00ba2863cf861d2e72b90dfaf75927b013d86cb150fb36c62c5a95946bb5aa31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_6f6f12f85b380ad1f52c6872092c910ba726ede4ecef69d74d8d77c18750f827 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f6f12f85b380ad1f52c6872092c910ba726ede4ecef69d74d8d77c18750f827->enter($__internal_6f6f12f85b380ad1f52c6872092c910ba726ede4ecef69d74d8d77c18750f827_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_00ba2863cf861d2e72b90dfaf75927b013d86cb150fb36c62c5a95946bb5aa31->leave($__internal_00ba2863cf861d2e72b90dfaf75927b013d86cb150fb36c62c5a95946bb5aa31_prof);

        
        $__internal_6f6f12f85b380ad1f52c6872092c910ba726ede4ecef69d74d8d77c18750f827->leave($__internal_6f6f12f85b380ad1f52c6872092c910ba726ede4ecef69d74d8d77c18750f827_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
", "TwigBundle:Exception:error.js.twig", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
