<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_6a2355aa7f1013b197aef05ec7ae491c62f377d27c7c1ea05b1b9f67c2a90770 extends Twig_Template
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
        $__internal_a8f1bfd0fb25e0644b91bc07c70be7c24e996693167dc9f73284d9b52fae972c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8f1bfd0fb25e0644b91bc07c70be7c24e996693167dc9f73284d9b52fae972c->enter($__internal_a8f1bfd0fb25e0644b91bc07c70be7c24e996693167dc9f73284d9b52fae972c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_af9991738fae69adcc8cbc990c8e60e5bff9ac7f34e34c22462323ee99c17d38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af9991738fae69adcc8cbc990c8e60e5bff9ac7f34e34c22462323ee99c17d38->enter($__internal_af9991738fae69adcc8cbc990c8e60e5bff9ac7f34e34c22462323ee99c17d38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a8f1bfd0fb25e0644b91bc07c70be7c24e996693167dc9f73284d9b52fae972c->leave($__internal_a8f1bfd0fb25e0644b91bc07c70be7c24e996693167dc9f73284d9b52fae972c_prof);

        
        $__internal_af9991738fae69adcc8cbc990c8e60e5bff9ac7f34e34c22462323ee99c17d38->leave($__internal_af9991738fae69adcc8cbc990c8e60e5bff9ac7f34e34c22462323ee99c17d38_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1f1c8228170fd10dc48cfb6046969acca994a2b724a41153e2de2bca50d6cd78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f1c8228170fd10dc48cfb6046969acca994a2b724a41153e2de2bca50d6cd78->enter($__internal_1f1c8228170fd10dc48cfb6046969acca994a2b724a41153e2de2bca50d6cd78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b7c4609a56ec94e34a20e7f942d3132673075f896d0f457ec7a9813d10353a06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7c4609a56ec94e34a20e7f942d3132673075f896d0f457ec7a9813d10353a06->enter($__internal_b7c4609a56ec94e34a20e7f942d3132673075f896d0f457ec7a9813d10353a06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_b7c4609a56ec94e34a20e7f942d3132673075f896d0f457ec7a9813d10353a06->leave($__internal_b7c4609a56ec94e34a20e7f942d3132673075f896d0f457ec7a9813d10353a06_prof);

        
        $__internal_1f1c8228170fd10dc48cfb6046969acca994a2b724a41153e2de2bca50d6cd78->leave($__internal_1f1c8228170fd10dc48cfb6046969acca994a2b724a41153e2de2bca50d6cd78_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_e9dde295241623abbe6653444b05405a033720fa28855453826bfbfe2c78536d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9dde295241623abbe6653444b05405a033720fa28855453826bfbfe2c78536d->enter($__internal_e9dde295241623abbe6653444b05405a033720fa28855453826bfbfe2c78536d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fdaff65543604abdc4a69e5d944692f786590c92bce02aa512ce7129d562df4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdaff65543604abdc4a69e5d944692f786590c92bce02aa512ce7129d562df4b->enter($__internal_fdaff65543604abdc4a69e5d944692f786590c92bce02aa512ce7129d562df4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_fdaff65543604abdc4a69e5d944692f786590c92bce02aa512ce7129d562df4b->leave($__internal_fdaff65543604abdc4a69e5d944692f786590c92bce02aa512ce7129d562df4b_prof);

        
        $__internal_e9dde295241623abbe6653444b05405a033720fa28855453826bfbfe2c78536d->leave($__internal_e9dde295241623abbe6653444b05405a033720fa28855453826bfbfe2c78536d_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_9563bf9276e3a6e8acc0d9c3ae8af1b15933f0e52ad4e47ff1d58f097aa29bc4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9563bf9276e3a6e8acc0d9c3ae8af1b15933f0e52ad4e47ff1d58f097aa29bc4->enter($__internal_9563bf9276e3a6e8acc0d9c3ae8af1b15933f0e52ad4e47ff1d58f097aa29bc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6abcf7cbd9f0581c5f09b3aad92dfef4063fe1e499d8441c9394ac284eddfe6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6abcf7cbd9f0581c5f09b3aad92dfef4063fe1e499d8441c9394ac284eddfe6c->enter($__internal_6abcf7cbd9f0581c5f09b3aad92dfef4063fe1e499d8441c9394ac284eddfe6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_6abcf7cbd9f0581c5f09b3aad92dfef4063fe1e499d8441c9394ac284eddfe6c->leave($__internal_6abcf7cbd9f0581c5f09b3aad92dfef4063fe1e499d8441c9394ac284eddfe6c_prof);

        
        $__internal_9563bf9276e3a6e8acc0d9c3ae8af1b15933f0e52ad4e47ff1d58f097aa29bc4->leave($__internal_9563bf9276e3a6e8acc0d9c3ae8af1b15933f0e52ad4e47ff1d58f097aa29bc4_prof);

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
", "TwigBundle:Exception:exception_full.html.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
