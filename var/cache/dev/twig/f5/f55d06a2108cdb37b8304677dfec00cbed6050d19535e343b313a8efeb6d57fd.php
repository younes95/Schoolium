<?php

/* @Twig/Exception/traces.xml.twig */
class __TwigTemplate_7ce47e092ebbee34a951b5918f1163e2b6e4ba9bd88047697fc6621bbc8efe38 extends Twig_Template
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
        $__internal_ad5645642efcc331970b8ec188d56fe8a8a33ee0285172e687a85e8a5c680936 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad5645642efcc331970b8ec188d56fe8a8a33ee0285172e687a85e8a5c680936->enter($__internal_ad5645642efcc331970b8ec188d56fe8a8a33ee0285172e687a85e8a5c680936_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        $__internal_c1d575387139a67e86dddedc8c4956b6a1d834f70de41f5bd3d5f43e80bd425f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1d575387139a67e86dddedc8c4956b6a1d834f70de41f5bd3d5f43e80bd425f->enter($__internal_c1d575387139a67e86dddedc8c4956b6a1d834f70de41f5bd3d5f43e80bd425f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            echo twig_include($this->env, $context, "@Twig/Exception/trace.txt.twig", array("trace" => $context["trace"]), false);
            echo "

            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_ad5645642efcc331970b8ec188d56fe8a8a33ee0285172e687a85e8a5c680936->leave($__internal_ad5645642efcc331970b8ec188d56fe8a8a33ee0285172e687a85e8a5c680936_prof);

        
        $__internal_c1d575387139a67e86dddedc8c4956b6a1d834f70de41f5bd3d5f43e80bd425f->leave($__internal_c1d575387139a67e86dddedc8c4956b6a1d834f70de41f5bd3d5f43e80bd425f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{{ include('@Twig/Exception/trace.txt.twig', { trace: trace }, with_context = false) }}

            </trace>
{% endfor %}
        </traces>
", "@Twig/Exception/traces.xml.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\traces.xml.twig");
    }
}
