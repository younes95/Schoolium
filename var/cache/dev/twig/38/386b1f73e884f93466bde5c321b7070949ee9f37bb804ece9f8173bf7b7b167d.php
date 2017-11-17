<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_5e93d5e3a429ea82cc5e671f8331b5b453268563aaa38cfc38e349a13569248b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_577a85a370db2a938edf2fcea25c3fd3c3e04fe70a8423ef87b20358d2b04b55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_577a85a370db2a938edf2fcea25c3fd3c3e04fe70a8423ef87b20358d2b04b55->enter($__internal_577a85a370db2a938edf2fcea25c3fd3c3e04fe70a8423ef87b20358d2b04b55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_a2d3d4acfae3f8c9e5f92875db2ca32f44f64a5944b4be021d44356c666245d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2d3d4acfae3f8c9e5f92875db2ca32f44f64a5944b4be021d44356c666245d8->enter($__internal_a2d3d4acfae3f8c9e5f92875db2ca32f44f64a5944b4be021d44356c666245d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_577a85a370db2a938edf2fcea25c3fd3c3e04fe70a8423ef87b20358d2b04b55->leave($__internal_577a85a370db2a938edf2fcea25c3fd3c3e04fe70a8423ef87b20358d2b04b55_prof);

        
        $__internal_a2d3d4acfae3f8c9e5f92875db2ca32f44f64a5944b4be021d44356c666245d8->leave($__internal_a2d3d4acfae3f8c9e5f92875db2ca32f44f64a5944b4be021d44356c666245d8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f435943172faf980d53db08fc9d7c86016e55988216400de02bcc39cf1421ba3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f435943172faf980d53db08fc9d7c86016e55988216400de02bcc39cf1421ba3->enter($__internal_f435943172faf980d53db08fc9d7c86016e55988216400de02bcc39cf1421ba3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4e287e40e857d0833e3a5f0d6f7236f766eaf82ec0f5da1c93fa170ed05727fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e287e40e857d0833e3a5f0d6f7236f766eaf82ec0f5da1c93fa170ed05727fb->enter($__internal_4e287e40e857d0833e3a5f0d6f7236f766eaf82ec0f5da1c93fa170ed05727fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_4e287e40e857d0833e3a5f0d6f7236f766eaf82ec0f5da1c93fa170ed05727fb->leave($__internal_4e287e40e857d0833e3a5f0d6f7236f766eaf82ec0f5da1c93fa170ed05727fb_prof);

        
        $__internal_f435943172faf980d53db08fc9d7c86016e55988216400de02bcc39cf1421ba3->leave($__internal_f435943172faf980d53db08fc9d7c86016e55988216400de02bcc39cf1421ba3_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_2552afd289f4f4887ce6817d84b36eac9c6998e03fc1346347b4d8bcfdf4098c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2552afd289f4f4887ce6817d84b36eac9c6998e03fc1346347b4d8bcfdf4098c->enter($__internal_2552afd289f4f4887ce6817d84b36eac9c6998e03fc1346347b4d8bcfdf4098c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a458cd8c69c92a287c8eee961a6450a3c0713a776a351256cf340d4beda2cf2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a458cd8c69c92a287c8eee961a6450a3c0713a776a351256cf340d4beda2cf2f->enter($__internal_a458cd8c69c92a287c8eee961a6450a3c0713a776a351256cf340d4beda2cf2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a458cd8c69c92a287c8eee961a6450a3c0713a776a351256cf340d4beda2cf2f->leave($__internal_a458cd8c69c92a287c8eee961a6450a3c0713a776a351256cf340d4beda2cf2f_prof);

        
        $__internal_2552afd289f4f4887ce6817d84b36eac9c6998e03fc1346347b4d8bcfdf4098c->leave($__internal_2552afd289f4f4887ce6817d84b36eac9c6998e03fc1346347b4d8bcfdf4098c_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_99b9120d94f6c248e5971911f1ff70715f112467987f28cb932a9acf0b75308f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99b9120d94f6c248e5971911f1ff70715f112467987f28cb932a9acf0b75308f->enter($__internal_99b9120d94f6c248e5971911f1ff70715f112467987f28cb932a9acf0b75308f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7c06142f2a4da125f676d4e1df3200ad98e1b8cb9a46014499f79631a55befff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c06142f2a4da125f676d4e1df3200ad98e1b8cb9a46014499f79631a55befff->enter($__internal_7c06142f2a4da125f676d4e1df3200ad98e1b8cb9a46014499f79631a55befff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_7c06142f2a4da125f676d4e1df3200ad98e1b8cb9a46014499f79631a55befff->leave($__internal_7c06142f2a4da125f676d4e1df3200ad98e1b8cb9a46014499f79631a55befff_prof);

        
        $__internal_99b9120d94f6c248e5971911f1ff70715f112467987f28cb932a9acf0b75308f->leave($__internal_99b9120d94f6c248e5971911f1ff70715f112467987f28cb932a9acf0b75308f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
", "TwigBundle:Exception:exception_full.html.twig", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
