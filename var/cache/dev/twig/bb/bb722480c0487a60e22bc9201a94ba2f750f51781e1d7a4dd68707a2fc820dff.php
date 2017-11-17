<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_1a69f75182c96cd1202580092463d1b6442c2c96b16d11a045bd19c6785ba20e extends Twig_Template
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
        $__internal_bf9d5bf84cec4872629baf9f9e7b37153a211c426480901539c7edfe3a9aa494 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf9d5bf84cec4872629baf9f9e7b37153a211c426480901539c7edfe3a9aa494->enter($__internal_bf9d5bf84cec4872629baf9f9e7b37153a211c426480901539c7edfe3a9aa494_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_c6ac8d49678f7870623b94624146c80676b07927ede63f12b89db474e28a3c43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6ac8d49678f7870623b94624146c80676b07927ede63f12b89db474e28a3c43->enter($__internal_c6ac8d49678f7870623b94624146c80676b07927ede63f12b89db474e28a3c43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_bf9d5bf84cec4872629baf9f9e7b37153a211c426480901539c7edfe3a9aa494->leave($__internal_bf9d5bf84cec4872629baf9f9e7b37153a211c426480901539c7edfe3a9aa494_prof);

        
        $__internal_c6ac8d49678f7870623b94624146c80676b07927ede63f12b89db474e28a3c43->leave($__internal_c6ac8d49678f7870623b94624146c80676b07927ede63f12b89db474e28a3c43_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
", "TwigBundle:Exception:error.css.twig", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
