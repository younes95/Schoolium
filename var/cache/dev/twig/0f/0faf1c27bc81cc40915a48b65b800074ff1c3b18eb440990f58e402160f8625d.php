<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_fe6b53e5eec613050f162a9691fd7dfc714f7e828fef0245e71f9a36a6886608 extends Twig_Template
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
        $__internal_e3e68c4a711813e349b58fbae6da83f5f471e21174d3b90c8a424667daecb5e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3e68c4a711813e349b58fbae6da83f5f471e21174d3b90c8a424667daecb5e9->enter($__internal_e3e68c4a711813e349b58fbae6da83f5f471e21174d3b90c8a424667daecb5e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_4015b98a1a57ed9d8d35cf2f4dfc167e54be602fc10b000ad7e454b13c1e39ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4015b98a1a57ed9d8d35cf2f4dfc167e54be602fc10b000ad7e454b13c1e39ab->enter($__internal_4015b98a1a57ed9d8d35cf2f4dfc167e54be602fc10b000ad7e454b13c1e39ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_e3e68c4a711813e349b58fbae6da83f5f471e21174d3b90c8a424667daecb5e9->leave($__internal_e3e68c4a711813e349b58fbae6da83f5f471e21174d3b90c8a424667daecb5e9_prof);

        
        $__internal_4015b98a1a57ed9d8d35cf2f4dfc167e54be602fc10b000ad7e454b13c1e39ab->leave($__internal_4015b98a1a57ed9d8d35cf2f4dfc167e54be602fc10b000ad7e454b13c1e39ab_prof);

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
", "TwigBundle:Exception:exception.atom.twig", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
