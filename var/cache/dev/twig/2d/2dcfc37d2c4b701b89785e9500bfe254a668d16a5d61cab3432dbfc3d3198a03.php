<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_1af2b205ad2e5885b1177b583b5d115d22c23006caf0278e200c07be47ad0b98 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
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
        $__internal_54f48bd1dbe6dea27736c5668627af836ca2b8fd9966485519288c79da6d2769 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54f48bd1dbe6dea27736c5668627af836ca2b8fd9966485519288c79da6d2769->enter($__internal_54f48bd1dbe6dea27736c5668627af836ca2b8fd9966485519288c79da6d2769_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_3d8ce2036e0b8281967f21a1b3749ec81d877bc867de809e5008d957c2b7edee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d8ce2036e0b8281967f21a1b3749ec81d877bc867de809e5008d957c2b7edee->enter($__internal_3d8ce2036e0b8281967f21a1b3749ec81d877bc867de809e5008d957c2b7edee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_54f48bd1dbe6dea27736c5668627af836ca2b8fd9966485519288c79da6d2769->leave($__internal_54f48bd1dbe6dea27736c5668627af836ca2b8fd9966485519288c79da6d2769_prof);

        
        $__internal_3d8ce2036e0b8281967f21a1b3749ec81d877bc867de809e5008d957c2b7edee->leave($__internal_3d8ce2036e0b8281967f21a1b3749ec81d877bc867de809e5008d957c2b7edee_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_dbf4748c046b4f4c27487173dd37950494e7b10ab7ab1a7147feb0a6cbec099b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbf4748c046b4f4c27487173dd37950494e7b10ab7ab1a7147feb0a6cbec099b->enter($__internal_dbf4748c046b4f4c27487173dd37950494e7b10ab7ab1a7147feb0a6cbec099b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_f40c3a98f53073c274bc5bac10534d90884c3b3a3065ade8d2a3f9f1b6e24bd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f40c3a98f53073c274bc5bac10534d90884c3b3a3065ade8d2a3f9f1b6e24bd3->enter($__internal_f40c3a98f53073c274bc5bac10534d90884c3b3a3065ade8d2a3f9f1b6e24bd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_f40c3a98f53073c274bc5bac10534d90884c3b3a3065ade8d2a3f9f1b6e24bd3->leave($__internal_f40c3a98f53073c274bc5bac10534d90884c3b3a3065ade8d2a3f9f1b6e24bd3_prof);

        
        $__internal_dbf4748c046b4f4c27487173dd37950494e7b10ab7ab1a7147feb0a6cbec099b->leave($__internal_dbf4748c046b4f4c27487173dd37950494e7b10ab7ab1a7147feb0a6cbec099b_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_91e36f14bdaed741cf6e56c79a3bf1226be643b0622e805593382cbb6eea9b94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91e36f14bdaed741cf6e56c79a3bf1226be643b0622e805593382cbb6eea9b94->enter($__internal_91e36f14bdaed741cf6e56c79a3bf1226be643b0622e805593382cbb6eea9b94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_999456088a58595489b93d2657447dbe7862c8eb21c6d0c36d5f827efad72a02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_999456088a58595489b93d2657447dbe7862c8eb21c6d0c36d5f827efad72a02->enter($__internal_999456088a58595489b93d2657447dbe7862c8eb21c6d0c36d5f827efad72a02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_999456088a58595489b93d2657447dbe7862c8eb21c6d0c36d5f827efad72a02->leave($__internal_999456088a58595489b93d2657447dbe7862c8eb21c6d0c36d5f827efad72a02_prof);

        
        $__internal_91e36f14bdaed741cf6e56c79a3bf1226be643b0622e805593382cbb6eea9b94->leave($__internal_91e36f14bdaed741cf6e56c79a3bf1226be643b0622e805593382cbb6eea9b94_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
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
", "WebProfilerBundle:Profiler:info.html.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
