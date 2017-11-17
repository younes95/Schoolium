<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_f105047b354efc8b735bf76a9266c0d36af85fb6d992e9fbd51ae88d75a78747 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_d0639d18353ad03c460da603464e4b8769e31bb7d982c05f6855b546b29e18cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0639d18353ad03c460da603464e4b8769e31bb7d982c05f6855b546b29e18cc->enter($__internal_d0639d18353ad03c460da603464e4b8769e31bb7d982c05f6855b546b29e18cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_c36629b10641cc1a5e337132942fb381cdda0eb66c59a66092e156562ae8a616 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c36629b10641cc1a5e337132942fb381cdda0eb66c59a66092e156562ae8a616->enter($__internal_c36629b10641cc1a5e337132942fb381cdda0eb66c59a66092e156562ae8a616_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d0639d18353ad03c460da603464e4b8769e31bb7d982c05f6855b546b29e18cc->leave($__internal_d0639d18353ad03c460da603464e4b8769e31bb7d982c05f6855b546b29e18cc_prof);

        
        $__internal_c36629b10641cc1a5e337132942fb381cdda0eb66c59a66092e156562ae8a616->leave($__internal_c36629b10641cc1a5e337132942fb381cdda0eb66c59a66092e156562ae8a616_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a3af31551c3bb876db73712a1f72a66e0f3c36c166f9d57a0996349fec8ffe46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3af31551c3bb876db73712a1f72a66e0f3c36c166f9d57a0996349fec8ffe46->enter($__internal_a3af31551c3bb876db73712a1f72a66e0f3c36c166f9d57a0996349fec8ffe46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a9030b34a126ae5fd5f389ef4f968ccf98eea5d9fbd9046de81e536a5efd122b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9030b34a126ae5fd5f389ef4f968ccf98eea5d9fbd9046de81e536a5efd122b->enter($__internal_a9030b34a126ae5fd5f389ef4f968ccf98eea5d9fbd9046de81e536a5efd122b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_a9030b34a126ae5fd5f389ef4f968ccf98eea5d9fbd9046de81e536a5efd122b->leave($__internal_a9030b34a126ae5fd5f389ef4f968ccf98eea5d9fbd9046de81e536a5efd122b_prof);

        
        $__internal_a3af31551c3bb876db73712a1f72a66e0f3c36c166f9d57a0996349fec8ffe46->leave($__internal_a3af31551c3bb876db73712a1f72a66e0f3c36c166f9d57a0996349fec8ffe46_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_f41e35de74224f6290be5782ecf2cfefbd3bb0e3210af0e26069bf5fb86df54e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f41e35de74224f6290be5782ecf2cfefbd3bb0e3210af0e26069bf5fb86df54e->enter($__internal_f41e35de74224f6290be5782ecf2cfefbd3bb0e3210af0e26069bf5fb86df54e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_96889a71779b8a6e320738efced8774c9a08266613f961940edf7e702a57c30e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96889a71779b8a6e320738efced8774c9a08266613f961940edf7e702a57c30e->enter($__internal_96889a71779b8a6e320738efced8774c9a08266613f961940edf7e702a57c30e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_96889a71779b8a6e320738efced8774c9a08266613f961940edf7e702a57c30e->leave($__internal_96889a71779b8a6e320738efced8774c9a08266613f961940edf7e702a57c30e_prof);

        
        $__internal_f41e35de74224f6290be5782ecf2cfefbd3bb0e3210af0e26069bf5fb86df54e->leave($__internal_f41e35de74224f6290be5782ecf2cfefbd3bb0e3210af0e26069bf5fb86df54e_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_ce87cd15649d4753d82403acc84d3c8900c4b43ca7c1b9414d7f94b41d080ffc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce87cd15649d4753d82403acc84d3c8900c4b43ca7c1b9414d7f94b41d080ffc->enter($__internal_ce87cd15649d4753d82403acc84d3c8900c4b43ca7c1b9414d7f94b41d080ffc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_98d967eb8f14bd61956d5dd23dee45bcaa78cd25d8403f9f79cd3c5f37ace845 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98d967eb8f14bd61956d5dd23dee45bcaa78cd25d8403f9f79cd3c5f37ace845->enter($__internal_98d967eb8f14bd61956d5dd23dee45bcaa78cd25d8403f9f79cd3c5f37ace845_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_98d967eb8f14bd61956d5dd23dee45bcaa78cd25d8403f9f79cd3c5f37ace845->leave($__internal_98d967eb8f14bd61956d5dd23dee45bcaa78cd25d8403f9f79cd3c5f37ace845_prof);

        
        $__internal_ce87cd15649d4753d82403acc84d3c8900c4b43ca7c1b9414d7f94b41d080ffc->leave($__internal_ce87cd15649d4753d82403acc84d3c8900c4b43ca7c1b9414d7f94b41d080ffc_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
