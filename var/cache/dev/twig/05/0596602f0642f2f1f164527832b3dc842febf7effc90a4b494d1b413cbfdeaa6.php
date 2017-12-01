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
        $__internal_e52849660ab74ea2a1961325ca43ff11b1312bdbbf6a00fd8828ff6c6c48a689 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e52849660ab74ea2a1961325ca43ff11b1312bdbbf6a00fd8828ff6c6c48a689->enter($__internal_e52849660ab74ea2a1961325ca43ff11b1312bdbbf6a00fd8828ff6c6c48a689_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_53f51387ca5e20e0ac40cdb94263cd0d2961497f229807449b357171680bf4b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53f51387ca5e20e0ac40cdb94263cd0d2961497f229807449b357171680bf4b7->enter($__internal_53f51387ca5e20e0ac40cdb94263cd0d2961497f229807449b357171680bf4b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e52849660ab74ea2a1961325ca43ff11b1312bdbbf6a00fd8828ff6c6c48a689->leave($__internal_e52849660ab74ea2a1961325ca43ff11b1312bdbbf6a00fd8828ff6c6c48a689_prof);

        
        $__internal_53f51387ca5e20e0ac40cdb94263cd0d2961497f229807449b357171680bf4b7->leave($__internal_53f51387ca5e20e0ac40cdb94263cd0d2961497f229807449b357171680bf4b7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_474de4f5385381b89db501054a96a325e5368cbbde3d3712f44a1f9c33bb1b3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_474de4f5385381b89db501054a96a325e5368cbbde3d3712f44a1f9c33bb1b3a->enter($__internal_474de4f5385381b89db501054a96a325e5368cbbde3d3712f44a1f9c33bb1b3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_03e754f446342d671598af8979e74cddd22a2d909bd0ebc76931a2c55641530e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03e754f446342d671598af8979e74cddd22a2d909bd0ebc76931a2c55641530e->enter($__internal_03e754f446342d671598af8979e74cddd22a2d909bd0ebc76931a2c55641530e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_03e754f446342d671598af8979e74cddd22a2d909bd0ebc76931a2c55641530e->leave($__internal_03e754f446342d671598af8979e74cddd22a2d909bd0ebc76931a2c55641530e_prof);

        
        $__internal_474de4f5385381b89db501054a96a325e5368cbbde3d3712f44a1f9c33bb1b3a->leave($__internal_474de4f5385381b89db501054a96a325e5368cbbde3d3712f44a1f9c33bb1b3a_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_606cf743e7e05fe7ab64509f17d82edfbf82104c247c04acfc576582c7525f45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_606cf743e7e05fe7ab64509f17d82edfbf82104c247c04acfc576582c7525f45->enter($__internal_606cf743e7e05fe7ab64509f17d82edfbf82104c247c04acfc576582c7525f45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c3fe68aa9412c2db1711e272e47ddc91a942a1220cc88c2319cdbe79a64eb1c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3fe68aa9412c2db1711e272e47ddc91a942a1220cc88c2319cdbe79a64eb1c1->enter($__internal_c3fe68aa9412c2db1711e272e47ddc91a942a1220cc88c2319cdbe79a64eb1c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_c3fe68aa9412c2db1711e272e47ddc91a942a1220cc88c2319cdbe79a64eb1c1->leave($__internal_c3fe68aa9412c2db1711e272e47ddc91a942a1220cc88c2319cdbe79a64eb1c1_prof);

        
        $__internal_606cf743e7e05fe7ab64509f17d82edfbf82104c247c04acfc576582c7525f45->leave($__internal_606cf743e7e05fe7ab64509f17d82edfbf82104c247c04acfc576582c7525f45_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_451c4a218d725ad775fea1cd6ec0091218cac5d30f97b5f707cd4bb7ef4a4a5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_451c4a218d725ad775fea1cd6ec0091218cac5d30f97b5f707cd4bb7ef4a4a5e->enter($__internal_451c4a218d725ad775fea1cd6ec0091218cac5d30f97b5f707cd4bb7ef4a4a5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e3e7c89b82bc459cae8dd82ef88eef36d85499a05c9dbb8b25c2806780224234 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3e7c89b82bc459cae8dd82ef88eef36d85499a05c9dbb8b25c2806780224234->enter($__internal_e3e7c89b82bc459cae8dd82ef88eef36d85499a05c9dbb8b25c2806780224234_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_e3e7c89b82bc459cae8dd82ef88eef36d85499a05c9dbb8b25c2806780224234->leave($__internal_e3e7c89b82bc459cae8dd82ef88eef36d85499a05c9dbb8b25c2806780224234_prof);

        
        $__internal_451c4a218d725ad775fea1cd6ec0091218cac5d30f97b5f707cd4bb7ef4a4a5e->leave($__internal_451c4a218d725ad775fea1cd6ec0091218cac5d30f97b5f707cd4bb7ef4a4a5e_prof);

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
