<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_b37797268ca5a8e41b087c3038ed78345c68e3a570cd732c25677d67549e6d36 extends Twig_Template
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
        $__internal_2c6a99d9510510a92b4087d55eef1507b573cede6f6aed982bd937c811b47d41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c6a99d9510510a92b4087d55eef1507b573cede6f6aed982bd937c811b47d41->enter($__internal_2c6a99d9510510a92b4087d55eef1507b573cede6f6aed982bd937c811b47d41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_6f3dd38dc96d565adedf99346e80470ac74a2555d799204dc26936ab599b36b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f3dd38dc96d565adedf99346e80470ac74a2555d799204dc26936ab599b36b6->enter($__internal_6f3dd38dc96d565adedf99346e80470ac74a2555d799204dc26936ab599b36b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_2c6a99d9510510a92b4087d55eef1507b573cede6f6aed982bd937c811b47d41->leave($__internal_2c6a99d9510510a92b4087d55eef1507b573cede6f6aed982bd937c811b47d41_prof);

        
        $__internal_6f3dd38dc96d565adedf99346e80470ac74a2555d799204dc26936ab599b36b6->leave($__internal_6f3dd38dc96d565adedf99346e80470ac74a2555d799204dc26936ab599b36b6_prof);

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
", "TwigBundle:Exception:error.css.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
