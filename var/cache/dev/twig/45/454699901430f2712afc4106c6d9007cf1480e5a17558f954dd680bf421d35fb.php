<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_19b4c863e74d0fa7304b3805ec542e81faa566947f9b9781d92db7ce8701ddf9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5cfa7f4d8cc49d7ac8bf8e62164bea76c8c712d6a5b4699fbc247e80d4e7d091 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cfa7f4d8cc49d7ac8bf8e62164bea76c8c712d6a5b4699fbc247e80d4e7d091->enter($__internal_5cfa7f4d8cc49d7ac8bf8e62164bea76c8c712d6a5b4699fbc247e80d4e7d091_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_f4e7820de59513dab31687875c5389dcf0b4c8ddde2d4512699c5fd2cba6ac15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4e7820de59513dab31687875c5389dcf0b4c8ddde2d4512699c5fd2cba6ac15->enter($__internal_f4e7820de59513dab31687875c5389dcf0b4c8ddde2d4512699c5fd2cba6ac15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5cfa7f4d8cc49d7ac8bf8e62164bea76c8c712d6a5b4699fbc247e80d4e7d091->leave($__internal_5cfa7f4d8cc49d7ac8bf8e62164bea76c8c712d6a5b4699fbc247e80d4e7d091_prof);

        
        $__internal_f4e7820de59513dab31687875c5389dcf0b4c8ddde2d4512699c5fd2cba6ac15->leave($__internal_f4e7820de59513dab31687875c5389dcf0b4c8ddde2d4512699c5fd2cba6ac15_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_85465ed7b29eadc86f5cbb45e3e8cc181f40985f5bf6177565b483da50b5b206 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85465ed7b29eadc86f5cbb45e3e8cc181f40985f5bf6177565b483da50b5b206->enter($__internal_85465ed7b29eadc86f5cbb45e3e8cc181f40985f5bf6177565b483da50b5b206_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_15f76b71717f433f4a9c49593e73a2c74a1f615912b6ed05cb23a4b675277b18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15f76b71717f433f4a9c49593e73a2c74a1f615912b6ed05cb23a4b675277b18->enter($__internal_15f76b71717f433f4a9c49593e73a2c74a1f615912b6ed05cb23a4b675277b18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_15f76b71717f433f4a9c49593e73a2c74a1f615912b6ed05cb23a4b675277b18->leave($__internal_15f76b71717f433f4a9c49593e73a2c74a1f615912b6ed05cb23a4b675277b18_prof);

        
        $__internal_85465ed7b29eadc86f5cbb45e3e8cc181f40985f5bf6177565b483da50b5b206->leave($__internal_85465ed7b29eadc86f5cbb45e3e8cc181f40985f5bf6177565b483da50b5b206_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f4768a789e1b6bcddfda771662bd69d0624899b0f9fd36e55bd00a2286b77c42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4768a789e1b6bcddfda771662bd69d0624899b0f9fd36e55bd00a2286b77c42->enter($__internal_f4768a789e1b6bcddfda771662bd69d0624899b0f9fd36e55bd00a2286b77c42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8b5845b47804e79bd932d864087a8816b7f7c184807e40df9146b8e9d3749398 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b5845b47804e79bd932d864087a8816b7f7c184807e40df9146b8e9d3749398->enter($__internal_8b5845b47804e79bd932d864087a8816b7f7c184807e40df9146b8e9d3749398_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_8b5845b47804e79bd932d864087a8816b7f7c184807e40df9146b8e9d3749398->leave($__internal_8b5845b47804e79bd932d864087a8816b7f7c184807e40df9146b8e9d3749398_prof);

        
        $__internal_f4768a789e1b6bcddfda771662bd69d0624899b0f9fd36e55bd00a2286b77c42->leave($__internal_f4768a789e1b6bcddfda771662bd69d0624899b0f9fd36e55bd00a2286b77c42_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ea5f6efa2ccc09614f23a3ebade8daed4d07e30aa70bde187856fd9b1b9b1c91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea5f6efa2ccc09614f23a3ebade8daed4d07e30aa70bde187856fd9b1b9b1c91->enter($__internal_ea5f6efa2ccc09614f23a3ebade8daed4d07e30aa70bde187856fd9b1b9b1c91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1a635379ec9c4afd86614c3091c558289f0fec370b65c7331640c7e22a3c80b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a635379ec9c4afd86614c3091c558289f0fec370b65c7331640c7e22a3c80b7->enter($__internal_1a635379ec9c4afd86614c3091c558289f0fec370b65c7331640c7e22a3c80b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_1a635379ec9c4afd86614c3091c558289f0fec370b65c7331640c7e22a3c80b7->leave($__internal_1a635379ec9c4afd86614c3091c558289f0fec370b65c7331640c7e22a3c80b7_prof);

        
        $__internal_ea5f6efa2ccc09614f23a3ebade8daed4d07e30aa70bde187856fd9b1b9b1c91->leave($__internal_ea5f6efa2ccc09614f23a3ebade8daed4d07e30aa70bde187856fd9b1b9b1c91_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
