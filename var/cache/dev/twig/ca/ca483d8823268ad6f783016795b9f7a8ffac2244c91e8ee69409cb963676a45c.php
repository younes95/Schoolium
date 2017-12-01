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
        $__internal_93a6a3b1f87c7db69a83b330e6222053296aef0c538826ff7431c609605f5469 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93a6a3b1f87c7db69a83b330e6222053296aef0c538826ff7431c609605f5469->enter($__internal_93a6a3b1f87c7db69a83b330e6222053296aef0c538826ff7431c609605f5469_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_9543e02990f3b4a4b3845a8c983ba545b99b552deaf246a6443b008ad5649e17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9543e02990f3b4a4b3845a8c983ba545b99b552deaf246a6443b008ad5649e17->enter($__internal_9543e02990f3b4a4b3845a8c983ba545b99b552deaf246a6443b008ad5649e17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_93a6a3b1f87c7db69a83b330e6222053296aef0c538826ff7431c609605f5469->leave($__internal_93a6a3b1f87c7db69a83b330e6222053296aef0c538826ff7431c609605f5469_prof);

        
        $__internal_9543e02990f3b4a4b3845a8c983ba545b99b552deaf246a6443b008ad5649e17->leave($__internal_9543e02990f3b4a4b3845a8c983ba545b99b552deaf246a6443b008ad5649e17_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5da2d7b9627dd8e164d9b5f7ebb3c3824b6899051080ec09504a9603185c30c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5da2d7b9627dd8e164d9b5f7ebb3c3824b6899051080ec09504a9603185c30c9->enter($__internal_5da2d7b9627dd8e164d9b5f7ebb3c3824b6899051080ec09504a9603185c30c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e2e40866dfce1e089b14b833185d7d2a17c0da0a1956b6f85b68b8abd37864e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2e40866dfce1e089b14b833185d7d2a17c0da0a1956b6f85b68b8abd37864e3->enter($__internal_e2e40866dfce1e089b14b833185d7d2a17c0da0a1956b6f85b68b8abd37864e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_e2e40866dfce1e089b14b833185d7d2a17c0da0a1956b6f85b68b8abd37864e3->leave($__internal_e2e40866dfce1e089b14b833185d7d2a17c0da0a1956b6f85b68b8abd37864e3_prof);

        
        $__internal_5da2d7b9627dd8e164d9b5f7ebb3c3824b6899051080ec09504a9603185c30c9->leave($__internal_5da2d7b9627dd8e164d9b5f7ebb3c3824b6899051080ec09504a9603185c30c9_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_374e71e845b132da017b85ee7a9af9bb5d6dbc8df7c5f8a582eea0a3e8a4309f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_374e71e845b132da017b85ee7a9af9bb5d6dbc8df7c5f8a582eea0a3e8a4309f->enter($__internal_374e71e845b132da017b85ee7a9af9bb5d6dbc8df7c5f8a582eea0a3e8a4309f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_373b3474cfe84507001e1d54992c445886eec20b8eaf297f9e15912969f90d98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_373b3474cfe84507001e1d54992c445886eec20b8eaf297f9e15912969f90d98->enter($__internal_373b3474cfe84507001e1d54992c445886eec20b8eaf297f9e15912969f90d98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_373b3474cfe84507001e1d54992c445886eec20b8eaf297f9e15912969f90d98->leave($__internal_373b3474cfe84507001e1d54992c445886eec20b8eaf297f9e15912969f90d98_prof);

        
        $__internal_374e71e845b132da017b85ee7a9af9bb5d6dbc8df7c5f8a582eea0a3e8a4309f->leave($__internal_374e71e845b132da017b85ee7a9af9bb5d6dbc8df7c5f8a582eea0a3e8a4309f_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_764a09fb9fd411864f63ab01254c562014efb537ee0d455eec28749cd6d6d2b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_764a09fb9fd411864f63ab01254c562014efb537ee0d455eec28749cd6d6d2b4->enter($__internal_764a09fb9fd411864f63ab01254c562014efb537ee0d455eec28749cd6d6d2b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6ae878551b6739922cf87061362631fb5f48af0482b8fac53dcc56372f8f4b10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ae878551b6739922cf87061362631fb5f48af0482b8fac53dcc56372f8f4b10->enter($__internal_6ae878551b6739922cf87061362631fb5f48af0482b8fac53dcc56372f8f4b10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_6ae878551b6739922cf87061362631fb5f48af0482b8fac53dcc56372f8f4b10->leave($__internal_6ae878551b6739922cf87061362631fb5f48af0482b8fac53dcc56372f8f4b10_prof);

        
        $__internal_764a09fb9fd411864f63ab01254c562014efb537ee0d455eec28749cd6d6d2b4->leave($__internal_764a09fb9fd411864f63ab01254c562014efb537ee0d455eec28749cd6d6d2b4_prof);

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
