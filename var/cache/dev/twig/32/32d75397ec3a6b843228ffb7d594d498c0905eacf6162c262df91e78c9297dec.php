<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_01a16bb4f659be9addd18e3a33b2a1a9aab56ddabea244bec55050b1b0a0019d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_23996eda8a0b5af7a69e17d25035de3386cdc8e0648d3b10f5b5876081d02f80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23996eda8a0b5af7a69e17d25035de3386cdc8e0648d3b10f5b5876081d02f80->enter($__internal_23996eda8a0b5af7a69e17d25035de3386cdc8e0648d3b10f5b5876081d02f80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_6e9ac3541fa3363195db625d32f6bef0e99906a9d079e38c370704f0f4a5ff86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e9ac3541fa3363195db625d32f6bef0e99906a9d079e38c370704f0f4a5ff86->enter($__internal_6e9ac3541fa3363195db625d32f6bef0e99906a9d079e38c370704f0f4a5ff86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_23996eda8a0b5af7a69e17d25035de3386cdc8e0648d3b10f5b5876081d02f80->leave($__internal_23996eda8a0b5af7a69e17d25035de3386cdc8e0648d3b10f5b5876081d02f80_prof);

        
        $__internal_6e9ac3541fa3363195db625d32f6bef0e99906a9d079e38c370704f0f4a5ff86->leave($__internal_6e9ac3541fa3363195db625d32f6bef0e99906a9d079e38c370704f0f4a5ff86_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6110ceb1c477567476debcb21d43dfb8e99ff2d48d1754150913ed1a3b4a7af4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6110ceb1c477567476debcb21d43dfb8e99ff2d48d1754150913ed1a3b4a7af4->enter($__internal_6110ceb1c477567476debcb21d43dfb8e99ff2d48d1754150913ed1a3b4a7af4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5f2e5a6d29a80d84db94e8865ae3b6f61a156649e47834ab8352c3e8c388fe43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f2e5a6d29a80d84db94e8865ae3b6f61a156649e47834ab8352c3e8c388fe43->enter($__internal_5f2e5a6d29a80d84db94e8865ae3b6f61a156649e47834ab8352c3e8c388fe43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_5f2e5a6d29a80d84db94e8865ae3b6f61a156649e47834ab8352c3e8c388fe43->leave($__internal_5f2e5a6d29a80d84db94e8865ae3b6f61a156649e47834ab8352c3e8c388fe43_prof);

        
        $__internal_6110ceb1c477567476debcb21d43dfb8e99ff2d48d1754150913ed1a3b4a7af4->leave($__internal_6110ceb1c477567476debcb21d43dfb8e99ff2d48d1754150913ed1a3b4a7af4_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_77758ec664411d276a33781c119cd22bfcc6631edef469aa05b78800ecaaa3be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77758ec664411d276a33781c119cd22bfcc6631edef469aa05b78800ecaaa3be->enter($__internal_77758ec664411d276a33781c119cd22bfcc6631edef469aa05b78800ecaaa3be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6c831a5676b1ba50bd2a50bbbd881c3d04657d8be7f4fe83e6fb9dec7d2a0cd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c831a5676b1ba50bd2a50bbbd881c3d04657d8be7f4fe83e6fb9dec7d2a0cd9->enter($__internal_6c831a5676b1ba50bd2a50bbbd881c3d04657d8be7f4fe83e6fb9dec7d2a0cd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_6c831a5676b1ba50bd2a50bbbd881c3d04657d8be7f4fe83e6fb9dec7d2a0cd9->leave($__internal_6c831a5676b1ba50bd2a50bbbd881c3d04657d8be7f4fe83e6fb9dec7d2a0cd9_prof);

        
        $__internal_77758ec664411d276a33781c119cd22bfcc6631edef469aa05b78800ecaaa3be->leave($__internal_77758ec664411d276a33781c119cd22bfcc6631edef469aa05b78800ecaaa3be_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
