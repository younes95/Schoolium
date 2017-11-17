<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_cf162f25fa3b6f82cee69ba6f883fb7c82621dcf246f7c18429b115a3511835f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
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
        $__internal_37dfc23665a9a643ed9f2c2cbcc14e213e73af414ccb4ca5903339c5a85c327c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37dfc23665a9a643ed9f2c2cbcc14e213e73af414ccb4ca5903339c5a85c327c->enter($__internal_37dfc23665a9a643ed9f2c2cbcc14e213e73af414ccb4ca5903339c5a85c327c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_1a60524690aebab49c16a1aedc88a9f78b057feba7963067c754b7f3800514f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a60524690aebab49c16a1aedc88a9f78b057feba7963067c754b7f3800514f7->enter($__internal_1a60524690aebab49c16a1aedc88a9f78b057feba7963067c754b7f3800514f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_37dfc23665a9a643ed9f2c2cbcc14e213e73af414ccb4ca5903339c5a85c327c->leave($__internal_37dfc23665a9a643ed9f2c2cbcc14e213e73af414ccb4ca5903339c5a85c327c_prof);

        
        $__internal_1a60524690aebab49c16a1aedc88a9f78b057feba7963067c754b7f3800514f7->leave($__internal_1a60524690aebab49c16a1aedc88a9f78b057feba7963067c754b7f3800514f7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a2887c730305ea4f6443ebea2b5062331e572ee512d37ada6420342ad90c8283 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2887c730305ea4f6443ebea2b5062331e572ee512d37ada6420342ad90c8283->enter($__internal_a2887c730305ea4f6443ebea2b5062331e572ee512d37ada6420342ad90c8283_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_da590355d67adf3c762d7dd111e0d483483df89b1cac06c451fd1702c15ae66e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da590355d67adf3c762d7dd111e0d483483df89b1cac06c451fd1702c15ae66e->enter($__internal_da590355d67adf3c762d7dd111e0d483483df89b1cac06c451fd1702c15ae66e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_da590355d67adf3c762d7dd111e0d483483df89b1cac06c451fd1702c15ae66e->leave($__internal_da590355d67adf3c762d7dd111e0d483483df89b1cac06c451fd1702c15ae66e_prof);

        
        $__internal_a2887c730305ea4f6443ebea2b5062331e572ee512d37ada6420342ad90c8283->leave($__internal_a2887c730305ea4f6443ebea2b5062331e572ee512d37ada6420342ad90c8283_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ef0d6364d70a17fb795206ab77c96a2c9c467b0838a471929990e6a5ffd5b178 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef0d6364d70a17fb795206ab77c96a2c9c467b0838a471929990e6a5ffd5b178->enter($__internal_ef0d6364d70a17fb795206ab77c96a2c9c467b0838a471929990e6a5ffd5b178_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_5b1dfe8258b4b3ff03e5afdec3f7d6512a6c2fe3adc217d04cb061123513e608 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b1dfe8258b4b3ff03e5afdec3f7d6512a6c2fe3adc217d04cb061123513e608->enter($__internal_5b1dfe8258b4b3ff03e5afdec3f7d6512a6c2fe3adc217d04cb061123513e608_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_5b1dfe8258b4b3ff03e5afdec3f7d6512a6c2fe3adc217d04cb061123513e608->leave($__internal_5b1dfe8258b4b3ff03e5afdec3f7d6512a6c2fe3adc217d04cb061123513e608_prof);

        
        $__internal_ef0d6364d70a17fb795206ab77c96a2c9c467b0838a471929990e6a5ffd5b178->leave($__internal_ef0d6364d70a17fb795206ab77c96a2c9c467b0838a471929990e6a5ffd5b178_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ba6b1b44b9bdb1cdab51c533d9d0f38e6cb864eec70a9a2cf18f94f12918cbb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba6b1b44b9bdb1cdab51c533d9d0f38e6cb864eec70a9a2cf18f94f12918cbb6->enter($__internal_ba6b1b44b9bdb1cdab51c533d9d0f38e6cb864eec70a9a2cf18f94f12918cbb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8fbf2982889ba0550e589bfd711d20be7314b8c43bf790ae69b3849efcba49d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fbf2982889ba0550e589bfd711d20be7314b8c43bf790ae69b3849efcba49d4->enter($__internal_8fbf2982889ba0550e589bfd711d20be7314b8c43bf790ae69b3849efcba49d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_8fbf2982889ba0550e589bfd711d20be7314b8c43bf790ae69b3849efcba49d4->leave($__internal_8fbf2982889ba0550e589bfd711d20be7314b8c43bf790ae69b3849efcba49d4_prof);

        
        $__internal_ba6b1b44b9bdb1cdab51c533d9d0f38e6cb864eec70a9a2cf18f94f12918cbb6->leave($__internal_ba6b1b44b9bdb1cdab51c533d9d0f38e6cb864eec70a9a2cf18f94f12918cbb6_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
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
", "@WebProfiler/Collector/exception.html.twig", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
