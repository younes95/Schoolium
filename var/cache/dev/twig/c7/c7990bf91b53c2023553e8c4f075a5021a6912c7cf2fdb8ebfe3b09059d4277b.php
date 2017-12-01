<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_d618b59fca9a830b8ab3ed0eeb533711d1b9c8f96a2fe56b9fec819474ef979e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_991a696cec150762fdcedd4423c4459e224798dc4b10ee3f8e7a6057cd98ea4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_991a696cec150762fdcedd4423c4459e224798dc4b10ee3f8e7a6057cd98ea4c->enter($__internal_991a696cec150762fdcedd4423c4459e224798dc4b10ee3f8e7a6057cd98ea4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_7afa566472106840251dc4805bd4d0631f8eef5a2bc359e9363c2be019e5c79f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7afa566472106840251dc4805bd4d0631f8eef5a2bc359e9363c2be019e5c79f->enter($__internal_7afa566472106840251dc4805bd4d0631f8eef5a2bc359e9363c2be019e5c79f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_991a696cec150762fdcedd4423c4459e224798dc4b10ee3f8e7a6057cd98ea4c->leave($__internal_991a696cec150762fdcedd4423c4459e224798dc4b10ee3f8e7a6057cd98ea4c_prof);

        
        $__internal_7afa566472106840251dc4805bd4d0631f8eef5a2bc359e9363c2be019e5c79f->leave($__internal_7afa566472106840251dc4805bd4d0631f8eef5a2bc359e9363c2be019e5c79f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0c0412f838325d928d23a71ccf8f55a2a8f421907b2d7ed2f9601b7992df3cb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c0412f838325d928d23a71ccf8f55a2a8f421907b2d7ed2f9601b7992df3cb6->enter($__internal_0c0412f838325d928d23a71ccf8f55a2a8f421907b2d7ed2f9601b7992df3cb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_1433580574a364cbe1a91fa8416ac0d88f30b6490962158cb7b60abb82e35ab6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1433580574a364cbe1a91fa8416ac0d88f30b6490962158cb7b60abb82e35ab6->enter($__internal_1433580574a364cbe1a91fa8416ac0d88f30b6490962158cb7b60abb82e35ab6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_1433580574a364cbe1a91fa8416ac0d88f30b6490962158cb7b60abb82e35ab6->leave($__internal_1433580574a364cbe1a91fa8416ac0d88f30b6490962158cb7b60abb82e35ab6_prof);

        
        $__internal_0c0412f838325d928d23a71ccf8f55a2a8f421907b2d7ed2f9601b7992df3cb6->leave($__internal_0c0412f838325d928d23a71ccf8f55a2a8f421907b2d7ed2f9601b7992df3cb6_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_d938ab636933a2bf64fdbb575ad48af2294fb22e8ba5c533173a490a2b3f1812 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d938ab636933a2bf64fdbb575ad48af2294fb22e8ba5c533173a490a2b3f1812->enter($__internal_d938ab636933a2bf64fdbb575ad48af2294fb22e8ba5c533173a490a2b3f1812_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5ef11df1ce22dd99002d1a0ea279b72d422f36fcbb7f842ba07c18f37aef2ed9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ef11df1ce22dd99002d1a0ea279b72d422f36fcbb7f842ba07c18f37aef2ed9->enter($__internal_5ef11df1ce22dd99002d1a0ea279b72d422f36fcbb7f842ba07c18f37aef2ed9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")), (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_5ef11df1ce22dd99002d1a0ea279b72d422f36fcbb7f842ba07c18f37aef2ed9->leave($__internal_5ef11df1ce22dd99002d1a0ea279b72d422f36fcbb7f842ba07c18f37aef2ed9_prof);

        
        $__internal_d938ab636933a2bf64fdbb575ad48af2294fb22e8ba5c533173a490a2b3f1812->leave($__internal_d938ab636933a2bf64fdbb575ad48af2294fb22e8ba5c533173a490a2b3f1812_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
