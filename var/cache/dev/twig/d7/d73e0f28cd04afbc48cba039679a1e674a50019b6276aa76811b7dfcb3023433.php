<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_1068454afee879c510c67f8283368bc2247c3ddac8d2eedf860f65bdb10cab3c extends Twig_Template
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
        $__internal_04072cf889b7a8263336711e9a8e4b3d5e25cb0a757c6f624ba46208885df4c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04072cf889b7a8263336711e9a8e4b3d5e25cb0a757c6f624ba46208885df4c8->enter($__internal_04072cf889b7a8263336711e9a8e4b3d5e25cb0a757c6f624ba46208885df4c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_30dcc5c6a7567256eb7b60461e983b526824d308789a0fc84cdd839b295bf394 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30dcc5c6a7567256eb7b60461e983b526824d308789a0fc84cdd839b295bf394->enter($__internal_30dcc5c6a7567256eb7b60461e983b526824d308789a0fc84cdd839b295bf394_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_04072cf889b7a8263336711e9a8e4b3d5e25cb0a757c6f624ba46208885df4c8->leave($__internal_04072cf889b7a8263336711e9a8e4b3d5e25cb0a757c6f624ba46208885df4c8_prof);

        
        $__internal_30dcc5c6a7567256eb7b60461e983b526824d308789a0fc84cdd839b295bf394->leave($__internal_30dcc5c6a7567256eb7b60461e983b526824d308789a0fc84cdd839b295bf394_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f65f9c3db5115eef57d168b7d03da6d3eedcd28ff4f07632728279c7b41ec6af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f65f9c3db5115eef57d168b7d03da6d3eedcd28ff4f07632728279c7b41ec6af->enter($__internal_f65f9c3db5115eef57d168b7d03da6d3eedcd28ff4f07632728279c7b41ec6af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_b74d27df0fa4625b2e2ac7e49755518497df480a14d52789bf39267c69469ada = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b74d27df0fa4625b2e2ac7e49755518497df480a14d52789bf39267c69469ada->enter($__internal_b74d27df0fa4625b2e2ac7e49755518497df480a14d52789bf39267c69469ada_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_b74d27df0fa4625b2e2ac7e49755518497df480a14d52789bf39267c69469ada->leave($__internal_b74d27df0fa4625b2e2ac7e49755518497df480a14d52789bf39267c69469ada_prof);

        
        $__internal_f65f9c3db5115eef57d168b7d03da6d3eedcd28ff4f07632728279c7b41ec6af->leave($__internal_f65f9c3db5115eef57d168b7d03da6d3eedcd28ff4f07632728279c7b41ec6af_prof);

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
", "WebProfilerBundle:Collector:ajax.html.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
