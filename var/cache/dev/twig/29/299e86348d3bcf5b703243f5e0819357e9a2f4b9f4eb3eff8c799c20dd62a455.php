<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_6a749129187158c6f4ec256c7f3be34327e35cf0522ccd52f7cc1840e5496d4d extends Twig_Template
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
        $__internal_b1ad31ed7a322f451f6fe7df1bb56c1c2f38a3182946d5a0b4f5feb17c5d6d84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1ad31ed7a322f451f6fe7df1bb56c1c2f38a3182946d5a0b4f5feb17c5d6d84->enter($__internal_b1ad31ed7a322f451f6fe7df1bb56c1c2f38a3182946d5a0b4f5feb17c5d6d84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_25c792bd77c572051a36b2fe95d1ad709803789381bf7b6c29a2107d27a02006 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25c792bd77c572051a36b2fe95d1ad709803789381bf7b6c29a2107d27a02006->enter($__internal_25c792bd77c572051a36b2fe95d1ad709803789381bf7b6c29a2107d27a02006_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b1ad31ed7a322f451f6fe7df1bb56c1c2f38a3182946d5a0b4f5feb17c5d6d84->leave($__internal_b1ad31ed7a322f451f6fe7df1bb56c1c2f38a3182946d5a0b4f5feb17c5d6d84_prof);

        
        $__internal_25c792bd77c572051a36b2fe95d1ad709803789381bf7b6c29a2107d27a02006->leave($__internal_25c792bd77c572051a36b2fe95d1ad709803789381bf7b6c29a2107d27a02006_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_660bdae37d5e70dac995509a921eeedfa0f13ba97bbfc4ceee710da03b08ad26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_660bdae37d5e70dac995509a921eeedfa0f13ba97bbfc4ceee710da03b08ad26->enter($__internal_660bdae37d5e70dac995509a921eeedfa0f13ba97bbfc4ceee710da03b08ad26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ea1d9960cd7c7c1982c3703459988752f10668639cfdbc7121b6c4e27241e2db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea1d9960cd7c7c1982c3703459988752f10668639cfdbc7121b6c4e27241e2db->enter($__internal_ea1d9960cd7c7c1982c3703459988752f10668639cfdbc7121b6c4e27241e2db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_ea1d9960cd7c7c1982c3703459988752f10668639cfdbc7121b6c4e27241e2db->leave($__internal_ea1d9960cd7c7c1982c3703459988752f10668639cfdbc7121b6c4e27241e2db_prof);

        
        $__internal_660bdae37d5e70dac995509a921eeedfa0f13ba97bbfc4ceee710da03b08ad26->leave($__internal_660bdae37d5e70dac995509a921eeedfa0f13ba97bbfc4ceee710da03b08ad26_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_05d75330e7d70cf0d7262662d49c6f605e8b951f9d25d48b81496c1a17178ee4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05d75330e7d70cf0d7262662d49c6f605e8b951f9d25d48b81496c1a17178ee4->enter($__internal_05d75330e7d70cf0d7262662d49c6f605e8b951f9d25d48b81496c1a17178ee4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_466e720ec68b66482f412abf8d02347eaa1ddfe297e3322fe08b9cb9e8425824 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_466e720ec68b66482f412abf8d02347eaa1ddfe297e3322fe08b9cb9e8425824->enter($__internal_466e720ec68b66482f412abf8d02347eaa1ddfe297e3322fe08b9cb9e8425824_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_466e720ec68b66482f412abf8d02347eaa1ddfe297e3322fe08b9cb9e8425824->leave($__internal_466e720ec68b66482f412abf8d02347eaa1ddfe297e3322fe08b9cb9e8425824_prof);

        
        $__internal_05d75330e7d70cf0d7262662d49c6f605e8b951f9d25d48b81496c1a17178ee4->leave($__internal_05d75330e7d70cf0d7262662d49c6f605e8b951f9d25d48b81496c1a17178ee4_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_af2bcefba1bdcea98dea9574151c1f4de9ec4c7133a2b86605f3f31aa6a6e2e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af2bcefba1bdcea98dea9574151c1f4de9ec4c7133a2b86605f3f31aa6a6e2e6->enter($__internal_af2bcefba1bdcea98dea9574151c1f4de9ec4c7133a2b86605f3f31aa6a6e2e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4be95e3f6fb5b1805b3deeb16ef6205636c03013d7967278bbbf51237a3084ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4be95e3f6fb5b1805b3deeb16ef6205636c03013d7967278bbbf51237a3084ca->enter($__internal_4be95e3f6fb5b1805b3deeb16ef6205636c03013d7967278bbbf51237a3084ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_4be95e3f6fb5b1805b3deeb16ef6205636c03013d7967278bbbf51237a3084ca->leave($__internal_4be95e3f6fb5b1805b3deeb16ef6205636c03013d7967278bbbf51237a3084ca_prof);

        
        $__internal_af2bcefba1bdcea98dea9574151c1f4de9ec4c7133a2b86605f3f31aa6a6e2e6->leave($__internal_af2bcefba1bdcea98dea9574151c1f4de9ec4c7133a2b86605f3f31aa6a6e2e6_prof);

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
", "WebProfilerBundle:Collector:exception.html.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
