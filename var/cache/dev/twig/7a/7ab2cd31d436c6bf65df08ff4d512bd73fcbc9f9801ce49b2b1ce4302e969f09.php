<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_5d54ece49f3eaea3b8641a621aa5ea65eab7f2456c91cd9fb7e51d715f7116e9 extends Twig_Template
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
        $__internal_357c11b9f8c6d3c9382e22757e43f3f54a963550c2409c0ad2099ace121d4a1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_357c11b9f8c6d3c9382e22757e43f3f54a963550c2409c0ad2099ace121d4a1d->enter($__internal_357c11b9f8c6d3c9382e22757e43f3f54a963550c2409c0ad2099ace121d4a1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_cfdcc0a49674a0a715fe7f11c9829c9ab7cac9edb99d0a89cfdc0240042802c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfdcc0a49674a0a715fe7f11c9829c9ab7cac9edb99d0a89cfdc0240042802c8->enter($__internal_cfdcc0a49674a0a715fe7f11c9829c9ab7cac9edb99d0a89cfdc0240042802c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_357c11b9f8c6d3c9382e22757e43f3f54a963550c2409c0ad2099ace121d4a1d->leave($__internal_357c11b9f8c6d3c9382e22757e43f3f54a963550c2409c0ad2099ace121d4a1d_prof);

        
        $__internal_cfdcc0a49674a0a715fe7f11c9829c9ab7cac9edb99d0a89cfdc0240042802c8->leave($__internal_cfdcc0a49674a0a715fe7f11c9829c9ab7cac9edb99d0a89cfdc0240042802c8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2d807d092a3d49a7fdbdf58b525c55f4567c4c478a2691f5f3040a97144453e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d807d092a3d49a7fdbdf58b525c55f4567c4c478a2691f5f3040a97144453e7->enter($__internal_2d807d092a3d49a7fdbdf58b525c55f4567c4c478a2691f5f3040a97144453e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_843b68065afc10af4cdf9651e7d046ec94d036373b6533c3faf93060384d1b34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_843b68065afc10af4cdf9651e7d046ec94d036373b6533c3faf93060384d1b34->enter($__internal_843b68065afc10af4cdf9651e7d046ec94d036373b6533c3faf93060384d1b34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_843b68065afc10af4cdf9651e7d046ec94d036373b6533c3faf93060384d1b34->leave($__internal_843b68065afc10af4cdf9651e7d046ec94d036373b6533c3faf93060384d1b34_prof);

        
        $__internal_2d807d092a3d49a7fdbdf58b525c55f4567c4c478a2691f5f3040a97144453e7->leave($__internal_2d807d092a3d49a7fdbdf58b525c55f4567c4c478a2691f5f3040a97144453e7_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_66c833d33bdc84042a88f2ae3aac260da8be68dc11f0747d9d782485270208d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66c833d33bdc84042a88f2ae3aac260da8be68dc11f0747d9d782485270208d4->enter($__internal_66c833d33bdc84042a88f2ae3aac260da8be68dc11f0747d9d782485270208d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_5a8a4c0c3ae3c81553220ac8344d2084fc3c557eff1a9d21d2b0bddd43208d4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a8a4c0c3ae3c81553220ac8344d2084fc3c557eff1a9d21d2b0bddd43208d4e->enter($__internal_5a8a4c0c3ae3c81553220ac8344d2084fc3c557eff1a9d21d2b0bddd43208d4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_5a8a4c0c3ae3c81553220ac8344d2084fc3c557eff1a9d21d2b0bddd43208d4e->leave($__internal_5a8a4c0c3ae3c81553220ac8344d2084fc3c557eff1a9d21d2b0bddd43208d4e_prof);

        
        $__internal_66c833d33bdc84042a88f2ae3aac260da8be68dc11f0747d9d782485270208d4->leave($__internal_66c833d33bdc84042a88f2ae3aac260da8be68dc11f0747d9d782485270208d4_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_788d99e867f14c058ff6ceba7a1d758e055b61934bc9ddfcbf2b5d36addd7b45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_788d99e867f14c058ff6ceba7a1d758e055b61934bc9ddfcbf2b5d36addd7b45->enter($__internal_788d99e867f14c058ff6ceba7a1d758e055b61934bc9ddfcbf2b5d36addd7b45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2ed011cdbd7ff5f295cd523088761820464a4c23f0de03fdff2febecdf97933f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ed011cdbd7ff5f295cd523088761820464a4c23f0de03fdff2febecdf97933f->enter($__internal_2ed011cdbd7ff5f295cd523088761820464a4c23f0de03fdff2febecdf97933f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_2ed011cdbd7ff5f295cd523088761820464a4c23f0de03fdff2febecdf97933f->leave($__internal_2ed011cdbd7ff5f295cd523088761820464a4c23f0de03fdff2febecdf97933f_prof);

        
        $__internal_788d99e867f14c058ff6ceba7a1d758e055b61934bc9ddfcbf2b5d36addd7b45->leave($__internal_788d99e867f14c058ff6ceba7a1d758e055b61934bc9ddfcbf2b5d36addd7b45_prof);

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
