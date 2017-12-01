<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_b00aba3589b70453d58b40c18b999f2b9191dfd342ca24cc0d8f9c408612e844 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c684c985b5847799e4d43893b57b2173be01acf3b6e0fd81a5912a517a135af5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c684c985b5847799e4d43893b57b2173be01acf3b6e0fd81a5912a517a135af5->enter($__internal_c684c985b5847799e4d43893b57b2173be01acf3b6e0fd81a5912a517a135af5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_86523331f6ffcbbfaa223be8a8355ffa60d2667b86162b6edd1eb8583f076c5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86523331f6ffcbbfaa223be8a8355ffa60d2667b86162b6edd1eb8583f076c5e->enter($__internal_86523331f6ffcbbfaa223be8a8355ffa60d2667b86162b6edd1eb8583f076c5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c684c985b5847799e4d43893b57b2173be01acf3b6e0fd81a5912a517a135af5->leave($__internal_c684c985b5847799e4d43893b57b2173be01acf3b6e0fd81a5912a517a135af5_prof);

        
        $__internal_86523331f6ffcbbfaa223be8a8355ffa60d2667b86162b6edd1eb8583f076c5e->leave($__internal_86523331f6ffcbbfaa223be8a8355ffa60d2667b86162b6edd1eb8583f076c5e_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_a83ab7aef0794a4d2cec5f1bbd7b7f21b2ad7da9818b76a23431917b376942e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a83ab7aef0794a4d2cec5f1bbd7b7f21b2ad7da9818b76a23431917b376942e3->enter($__internal_a83ab7aef0794a4d2cec5f1bbd7b7f21b2ad7da9818b76a23431917b376942e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_a31fe2e47484793ec7322fc2fc876396654d494fbf8283a1946e1f6e951e8c3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a31fe2e47484793ec7322fc2fc876396654d494fbf8283a1946e1f6e951e8c3b->enter($__internal_a31fe2e47484793ec7322fc2fc876396654d494fbf8283a1946e1f6e951e8c3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_a31fe2e47484793ec7322fc2fc876396654d494fbf8283a1946e1f6e951e8c3b->leave($__internal_a31fe2e47484793ec7322fc2fc876396654d494fbf8283a1946e1f6e951e8c3b_prof);

        
        $__internal_a83ab7aef0794a4d2cec5f1bbd7b7f21b2ad7da9818b76a23431917b376942e3->leave($__internal_a83ab7aef0794a4d2cec5f1bbd7b7f21b2ad7da9818b76a23431917b376942e3_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_33bd0d858cc08084cbc0c9a3a5e6270981076d1b96674a671789670a5749a2db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33bd0d858cc08084cbc0c9a3a5e6270981076d1b96674a671789670a5749a2db->enter($__internal_33bd0d858cc08084cbc0c9a3a5e6270981076d1b96674a671789670a5749a2db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_eb9376bb21236af3cf1c86d25566e7f70571ad4eb08a73ea30dc99f4335f39f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb9376bb21236af3cf1c86d25566e7f70571ad4eb08a73ea30dc99f4335f39f8->enter($__internal_eb9376bb21236af3cf1c86d25566e7f70571ad4eb08a73ea30dc99f4335f39f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_eb9376bb21236af3cf1c86d25566e7f70571ad4eb08a73ea30dc99f4335f39f8->leave($__internal_eb9376bb21236af3cf1c86d25566e7f70571ad4eb08a73ea30dc99f4335f39f8_prof);

        
        $__internal_33bd0d858cc08084cbc0c9a3a5e6270981076d1b96674a671789670a5749a2db->leave($__internal_33bd0d858cc08084cbc0c9a3a5e6270981076d1b96674a671789670a5749a2db_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
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

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "@WebProfiler/Profiler/info.html.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\info.html.twig");
    }
}
