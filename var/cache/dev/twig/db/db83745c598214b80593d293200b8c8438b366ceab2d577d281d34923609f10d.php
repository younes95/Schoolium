<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_db981745479cac9450bb7c4639df7a45a05e39e875b2be790d5ebf47495d8862 extends Twig_Template
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
        $__internal_93bfa6719cd3f74cf2f22c8c252d27875d0ff63f031aa4d18d04b0dcfd5dce6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93bfa6719cd3f74cf2f22c8c252d27875d0ff63f031aa4d18d04b0dcfd5dce6d->enter($__internal_93bfa6719cd3f74cf2f22c8c252d27875d0ff63f031aa4d18d04b0dcfd5dce6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_970ac567f91ac59fcda2062e8e29c989a7d2da9c5bf0a9770594e0ccf6e2a6a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_970ac567f91ac59fcda2062e8e29c989a7d2da9c5bf0a9770594e0ccf6e2a6a4->enter($__internal_970ac567f91ac59fcda2062e8e29c989a7d2da9c5bf0a9770594e0ccf6e2a6a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_93bfa6719cd3f74cf2f22c8c252d27875d0ff63f031aa4d18d04b0dcfd5dce6d->leave($__internal_93bfa6719cd3f74cf2f22c8c252d27875d0ff63f031aa4d18d04b0dcfd5dce6d_prof);

        
        $__internal_970ac567f91ac59fcda2062e8e29c989a7d2da9c5bf0a9770594e0ccf6e2a6a4->leave($__internal_970ac567f91ac59fcda2062e8e29c989a7d2da9c5bf0a9770594e0ccf6e2a6a4_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_6e9044197aa04f214b2fa6effeac2a3da63c4ae2484149236be15a229e109d24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e9044197aa04f214b2fa6effeac2a3da63c4ae2484149236be15a229e109d24->enter($__internal_6e9044197aa04f214b2fa6effeac2a3da63c4ae2484149236be15a229e109d24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_e480ae8c4a3eeb454ebf3c810b02d000b5b796bfe462cabe3eb9b61a5dbe8f1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e480ae8c4a3eeb454ebf3c810b02d000b5b796bfe462cabe3eb9b61a5dbe8f1e->enter($__internal_e480ae8c4a3eeb454ebf3c810b02d000b5b796bfe462cabe3eb9b61a5dbe8f1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_e480ae8c4a3eeb454ebf3c810b02d000b5b796bfe462cabe3eb9b61a5dbe8f1e->leave($__internal_e480ae8c4a3eeb454ebf3c810b02d000b5b796bfe462cabe3eb9b61a5dbe8f1e_prof);

        
        $__internal_6e9044197aa04f214b2fa6effeac2a3da63c4ae2484149236be15a229e109d24->leave($__internal_6e9044197aa04f214b2fa6effeac2a3da63c4ae2484149236be15a229e109d24_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_77dd3dc5c74cc12d23bc1dfda9e0c651a3ab58df709652c2c67b309c29eb085b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77dd3dc5c74cc12d23bc1dfda9e0c651a3ab58df709652c2c67b309c29eb085b->enter($__internal_77dd3dc5c74cc12d23bc1dfda9e0c651a3ab58df709652c2c67b309c29eb085b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3b1515f25b05c33afffa9af1449d9de9841d695610ef41ef824e62e95b928308 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b1515f25b05c33afffa9af1449d9de9841d695610ef41ef824e62e95b928308->enter($__internal_3b1515f25b05c33afffa9af1449d9de9841d695610ef41ef824e62e95b928308_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_3b1515f25b05c33afffa9af1449d9de9841d695610ef41ef824e62e95b928308->leave($__internal_3b1515f25b05c33afffa9af1449d9de9841d695610ef41ef824e62e95b928308_prof);

        
        $__internal_77dd3dc5c74cc12d23bc1dfda9e0c651a3ab58df709652c2c67b309c29eb085b->leave($__internal_77dd3dc5c74cc12d23bc1dfda9e0c651a3ab58df709652c2c67b309c29eb085b_prof);

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
", "WebProfilerBundle:Profiler:info.html.twig", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
