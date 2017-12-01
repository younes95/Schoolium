<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_a30f2aba0e86f2e9a213ae7a3327eaa0620e5565a69a9236ddba978599211e79 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_73c0b71dcc43539e3125a104d1c77d767d533573307cd289bed880554cab18a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73c0b71dcc43539e3125a104d1c77d767d533573307cd289bed880554cab18a0->enter($__internal_73c0b71dcc43539e3125a104d1c77d767d533573307cd289bed880554cab18a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_a5583fd374cfcf4579622ad76528df252829c7c30efc8f1dadd694a106dc9fd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5583fd374cfcf4579622ad76528df252829c7c30efc8f1dadd694a106dc9fd0->enter($__internal_a5583fd374cfcf4579622ad76528df252829c7c30efc8f1dadd694a106dc9fd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_73c0b71dcc43539e3125a104d1c77d767d533573307cd289bed880554cab18a0->leave($__internal_73c0b71dcc43539e3125a104d1c77d767d533573307cd289bed880554cab18a0_prof);

        
        $__internal_a5583fd374cfcf4579622ad76528df252829c7c30efc8f1dadd694a106dc9fd0->leave($__internal_a5583fd374cfcf4579622ad76528df252829c7c30efc8f1dadd694a106dc9fd0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_118cafae1294a7c98577d1dc83677ced98934a42212a912a1f5d863436c5cc15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_118cafae1294a7c98577d1dc83677ced98934a42212a912a1f5d863436c5cc15->enter($__internal_118cafae1294a7c98577d1dc83677ced98934a42212a912a1f5d863436c5cc15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0a64d7836d8f5da9e2b7b45513f99e88501e3f48eb56e1019672c90163371efc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a64d7836d8f5da9e2b7b45513f99e88501e3f48eb56e1019672c90163371efc->enter($__internal_0a64d7836d8f5da9e2b7b45513f99e88501e3f48eb56e1019672c90163371efc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_0a64d7836d8f5da9e2b7b45513f99e88501e3f48eb56e1019672c90163371efc->leave($__internal_0a64d7836d8f5da9e2b7b45513f99e88501e3f48eb56e1019672c90163371efc_prof);

        
        $__internal_118cafae1294a7c98577d1dc83677ced98934a42212a912a1f5d863436c5cc15->leave($__internal_118cafae1294a7c98577d1dc83677ced98934a42212a912a1f5d863436c5cc15_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a79985902f292aec4806794b1060aa8d15f7261991a511e7e66a8f47028c5d06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a79985902f292aec4806794b1060aa8d15f7261991a511e7e66a8f47028c5d06->enter($__internal_a79985902f292aec4806794b1060aa8d15f7261991a511e7e66a8f47028c5d06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8f31a77d7c5e1d142dc45f96a57699d26ce6992022b7688769b53af0705a7ac7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f31a77d7c5e1d142dc45f96a57699d26ce6992022b7688769b53af0705a7ac7->enter($__internal_8f31a77d7c5e1d142dc45f96a57699d26ce6992022b7688769b53af0705a7ac7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_8f31a77d7c5e1d142dc45f96a57699d26ce6992022b7688769b53af0705a7ac7->leave($__internal_8f31a77d7c5e1d142dc45f96a57699d26ce6992022b7688769b53af0705a7ac7_prof);

        
        $__internal_a79985902f292aec4806794b1060aa8d15f7261991a511e7e66a8f47028c5d06->leave($__internal_a79985902f292aec4806794b1060aa8d15f7261991a511e7e66a8f47028c5d06_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
