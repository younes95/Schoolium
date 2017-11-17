<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_d40f471fddbf53d25126d418aae39d519ec1926ef851574cf7a91b400abd4cb0 extends Twig_Template
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
        $__internal_6207b593e0843b156fbb7ab2b89b3fc2f5ae8fa3b5498b9a21f4d74fd16a6bac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6207b593e0843b156fbb7ab2b89b3fc2f5ae8fa3b5498b9a21f4d74fd16a6bac->enter($__internal_6207b593e0843b156fbb7ab2b89b3fc2f5ae8fa3b5498b9a21f4d74fd16a6bac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_8239ed40d367d44db7350e655170368215e739b1315fa6e79c7ac918361f283d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8239ed40d367d44db7350e655170368215e739b1315fa6e79c7ac918361f283d->enter($__internal_8239ed40d367d44db7350e655170368215e739b1315fa6e79c7ac918361f283d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_6207b593e0843b156fbb7ab2b89b3fc2f5ae8fa3b5498b9a21f4d74fd16a6bac->leave($__internal_6207b593e0843b156fbb7ab2b89b3fc2f5ae8fa3b5498b9a21f4d74fd16a6bac_prof);

        
        $__internal_8239ed40d367d44db7350e655170368215e739b1315fa6e79c7ac918361f283d->leave($__internal_8239ed40d367d44db7350e655170368215e739b1315fa6e79c7ac918361f283d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
