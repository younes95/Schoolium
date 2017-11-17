<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_eec7c5a175274f120b3298441dd427c4a089461ce7cd3067f67080610c0eb955 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_27e029f2368aba4fbf80ea8067a47d46323eab2469e3a48110f308cd9c760fd4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27e029f2368aba4fbf80ea8067a47d46323eab2469e3a48110f308cd9c760fd4->enter($__internal_27e029f2368aba4fbf80ea8067a47d46323eab2469e3a48110f308cd9c760fd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_b0b4a143df820a16882ecd9435e77eee9d19574e2e81e17f5cd988ed5474283f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0b4a143df820a16882ecd9435e77eee9d19574e2e81e17f5cd988ed5474283f->enter($__internal_b0b4a143df820a16882ecd9435e77eee9d19574e2e81e17f5cd988ed5474283f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_27e029f2368aba4fbf80ea8067a47d46323eab2469e3a48110f308cd9c760fd4->leave($__internal_27e029f2368aba4fbf80ea8067a47d46323eab2469e3a48110f308cd9c760fd4_prof);

        
        $__internal_b0b4a143df820a16882ecd9435e77eee9d19574e2e81e17f5cd988ed5474283f->leave($__internal_b0b4a143df820a16882ecd9435e77eee9d19574e2e81e17f5cd988ed5474283f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_54ddffe4cbb82892c5756ec5f53c59adcc3e8afd6a5f7b199da572d5ec0114ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54ddffe4cbb82892c5756ec5f53c59adcc3e8afd6a5f7b199da572d5ec0114ea->enter($__internal_54ddffe4cbb82892c5756ec5f53c59adcc3e8afd6a5f7b199da572d5ec0114ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_d00fdca0b2041db780db8648f8c33a493c7ef28fc01e8fc25cc731d15caa0cd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d00fdca0b2041db780db8648f8c33a493c7ef28fc01e8fc25cc731d15caa0cd1->enter($__internal_d00fdca0b2041db780db8648f8c33a493c7ef28fc01e8fc25cc731d15caa0cd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_d00fdca0b2041db780db8648f8c33a493c7ef28fc01e8fc25cc731d15caa0cd1->leave($__internal_d00fdca0b2041db780db8648f8c33a493c7ef28fc01e8fc25cc731d15caa0cd1_prof);

        
        $__internal_54ddffe4cbb82892c5756ec5f53c59adcc3e8afd6a5f7b199da572d5ec0114ea->leave($__internal_54ddffe4cbb82892c5756ec5f53c59adcc3e8afd6a5f7b199da572d5ec0114ea_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
