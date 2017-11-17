<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_e12506caa6aa0b489a5a6e3aed6a7d8b525d78ffcaed02e7eb56bb15cc405767 extends Twig_Template
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
        $__internal_055bee87f3acfcbf0ac3cb5dde9d79a0d55e29ab941a70f3400a63d1cd30044f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_055bee87f3acfcbf0ac3cb5dde9d79a0d55e29ab941a70f3400a63d1cd30044f->enter($__internal_055bee87f3acfcbf0ac3cb5dde9d79a0d55e29ab941a70f3400a63d1cd30044f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_2027c479e6feb3e6ed4b1965d34823c76a84d36fd38feafa8d7cbec22c8269b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2027c479e6feb3e6ed4b1965d34823c76a84d36fd38feafa8d7cbec22c8269b1->enter($__internal_2027c479e6feb3e6ed4b1965d34823c76a84d36fd38feafa8d7cbec22c8269b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_055bee87f3acfcbf0ac3cb5dde9d79a0d55e29ab941a70f3400a63d1cd30044f->leave($__internal_055bee87f3acfcbf0ac3cb5dde9d79a0d55e29ab941a70f3400a63d1cd30044f_prof);

        
        $__internal_2027c479e6feb3e6ed4b1965d34823c76a84d36fd38feafa8d7cbec22c8269b1->leave($__internal_2027c479e6feb3e6ed4b1965d34823c76a84d36fd38feafa8d7cbec22c8269b1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0e95fbca1e15972169eb67b17a3a5c183dfa72485c139368ccd0acee99adfbc2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e95fbca1e15972169eb67b17a3a5c183dfa72485c139368ccd0acee99adfbc2->enter($__internal_0e95fbca1e15972169eb67b17a3a5c183dfa72485c139368ccd0acee99adfbc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_759fa126a176ac650514621627169d828e591b5461a11bd3740a9f02ca225165 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_759fa126a176ac650514621627169d828e591b5461a11bd3740a9f02ca225165->enter($__internal_759fa126a176ac650514621627169d828e591b5461a11bd3740a9f02ca225165_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_759fa126a176ac650514621627169d828e591b5461a11bd3740a9f02ca225165->leave($__internal_759fa126a176ac650514621627169d828e591b5461a11bd3740a9f02ca225165_prof);

        
        $__internal_0e95fbca1e15972169eb67b17a3a5c183dfa72485c139368ccd0acee99adfbc2->leave($__internal_0e95fbca1e15972169eb67b17a3a5c183dfa72485c139368ccd0acee99adfbc2_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_da9c7ba1b41f7967f6c80c732794cc49af0f3b342d7ffc93931c0dd9281320d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da9c7ba1b41f7967f6c80c732794cc49af0f3b342d7ffc93931c0dd9281320d5->enter($__internal_da9c7ba1b41f7967f6c80c732794cc49af0f3b342d7ffc93931c0dd9281320d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6b0211111fa7087740e5443b4409033f00fafd82c492d8b1e288a9f2e53698d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b0211111fa7087740e5443b4409033f00fafd82c492d8b1e288a9f2e53698d9->enter($__internal_6b0211111fa7087740e5443b4409033f00fafd82c492d8b1e288a9f2e53698d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_6b0211111fa7087740e5443b4409033f00fafd82c492d8b1e288a9f2e53698d9->leave($__internal_6b0211111fa7087740e5443b4409033f00fafd82c492d8b1e288a9f2e53698d9_prof);

        
        $__internal_da9c7ba1b41f7967f6c80c732794cc49af0f3b342d7ffc93931c0dd9281320d5->leave($__internal_da9c7ba1b41f7967f6c80c732794cc49af0f3b342d7ffc93931c0dd9281320d5_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b02ac479b7c66e32883ef65242fcd6922e0f186f505bd2be7e0289d73e703ad3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b02ac479b7c66e32883ef65242fcd6922e0f186f505bd2be7e0289d73e703ad3->enter($__internal_b02ac479b7c66e32883ef65242fcd6922e0f186f505bd2be7e0289d73e703ad3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1469a8ac86b8d0568dbde3f4109b9d2cb1678982e9cb72532153134698a1f358 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1469a8ac86b8d0568dbde3f4109b9d2cb1678982e9cb72532153134698a1f358->enter($__internal_1469a8ac86b8d0568dbde3f4109b9d2cb1678982e9cb72532153134698a1f358_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_1469a8ac86b8d0568dbde3f4109b9d2cb1678982e9cb72532153134698a1f358->leave($__internal_1469a8ac86b8d0568dbde3f4109b9d2cb1678982e9cb72532153134698a1f358_prof);

        
        $__internal_b02ac479b7c66e32883ef65242fcd6922e0f186f505bd2be7e0289d73e703ad3->leave($__internal_b02ac479b7c66e32883ef65242fcd6922e0f186f505bd2be7e0289d73e703ad3_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
