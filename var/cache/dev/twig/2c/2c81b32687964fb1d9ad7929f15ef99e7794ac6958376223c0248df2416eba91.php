<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_0ce76abf968b1b253cc26f3e015d68e797208090f7e3198faeef914093b3a97f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
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
        $__internal_2524e4d2edde901903d3a4b6d11644dcd0dbfccdc1e5f3ae56118e333a3c3785 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2524e4d2edde901903d3a4b6d11644dcd0dbfccdc1e5f3ae56118e333a3c3785->enter($__internal_2524e4d2edde901903d3a4b6d11644dcd0dbfccdc1e5f3ae56118e333a3c3785_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_2e7eb37ccb243d768337d4b41248d6393ae517f625b28bcde20d30533e5a2891 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e7eb37ccb243d768337d4b41248d6393ae517f625b28bcde20d30533e5a2891->enter($__internal_2e7eb37ccb243d768337d4b41248d6393ae517f625b28bcde20d30533e5a2891_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2524e4d2edde901903d3a4b6d11644dcd0dbfccdc1e5f3ae56118e333a3c3785->leave($__internal_2524e4d2edde901903d3a4b6d11644dcd0dbfccdc1e5f3ae56118e333a3c3785_prof);

        
        $__internal_2e7eb37ccb243d768337d4b41248d6393ae517f625b28bcde20d30533e5a2891->leave($__internal_2e7eb37ccb243d768337d4b41248d6393ae517f625b28bcde20d30533e5a2891_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_344fb8f50016f536983f42d299f9387caf1e19bf5e4e33d55dc1a0d9253316e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_344fb8f50016f536983f42d299f9387caf1e19bf5e4e33d55dc1a0d9253316e8->enter($__internal_344fb8f50016f536983f42d299f9387caf1e19bf5e4e33d55dc1a0d9253316e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_8fb74e201761720c006f54fdfbb5eedf4bbf6a982239b00ba014cf1df5310b7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fb74e201761720c006f54fdfbb5eedf4bbf6a982239b00ba014cf1df5310b7f->enter($__internal_8fb74e201761720c006f54fdfbb5eedf4bbf6a982239b00ba014cf1df5310b7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_8fb74e201761720c006f54fdfbb5eedf4bbf6a982239b00ba014cf1df5310b7f->leave($__internal_8fb74e201761720c006f54fdfbb5eedf4bbf6a982239b00ba014cf1df5310b7f_prof);

        
        $__internal_344fb8f50016f536983f42d299f9387caf1e19bf5e4e33d55dc1a0d9253316e8->leave($__internal_344fb8f50016f536983f42d299f9387caf1e19bf5e4e33d55dc1a0d9253316e8_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
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
", "WebProfilerBundle:Collector:ajax.html.twig", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
