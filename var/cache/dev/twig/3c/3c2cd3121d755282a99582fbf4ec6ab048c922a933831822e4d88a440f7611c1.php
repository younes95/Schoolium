<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_0f823cfc0da8cfb6112c7132a23ddeea41e9cc9c2d0dbe26ed549f1c19c71e56 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eef6ac43843b37980c852b21ce210daf4164f74f226e5c894e14dcbf597346c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eef6ac43843b37980c852b21ce210daf4164f74f226e5c894e14dcbf597346c2->enter($__internal_eef6ac43843b37980c852b21ce210daf4164f74f226e5c894e14dcbf597346c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_bae4e5dd1f9b1b4665a7abcc4973c71ccdec4f2e70b63c27b50187c4fceebb44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bae4e5dd1f9b1b4665a7abcc4973c71ccdec4f2e70b63c27b50187c4fceebb44->enter($__internal_bae4e5dd1f9b1b4665a7abcc4973c71ccdec4f2e70b63c27b50187c4fceebb44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eef6ac43843b37980c852b21ce210daf4164f74f226e5c894e14dcbf597346c2->leave($__internal_eef6ac43843b37980c852b21ce210daf4164f74f226e5c894e14dcbf597346c2_prof);

        
        $__internal_bae4e5dd1f9b1b4665a7abcc4973c71ccdec4f2e70b63c27b50187c4fceebb44->leave($__internal_bae4e5dd1f9b1b4665a7abcc4973c71ccdec4f2e70b63c27b50187c4fceebb44_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_fe4649a94ac3a36fd770f9fcebacba9d541d37e3c757e9efbbf6a8cbeabc8fb9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe4649a94ac3a36fd770f9fcebacba9d541d37e3c757e9efbbf6a8cbeabc8fb9->enter($__internal_fe4649a94ac3a36fd770f9fcebacba9d541d37e3c757e9efbbf6a8cbeabc8fb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_e8e9542d2b682911e989928d318e71e08075e7ce59adfa39d78f9edee207eaaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8e9542d2b682911e989928d318e71e08075e7ce59adfa39d78f9edee207eaaf->enter($__internal_e8e9542d2b682911e989928d318e71e08075e7ce59adfa39d78f9edee207eaaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e8e9542d2b682911e989928d318e71e08075e7ce59adfa39d78f9edee207eaaf->leave($__internal_e8e9542d2b682911e989928d318e71e08075e7ce59adfa39d78f9edee207eaaf_prof);

        
        $__internal_fe4649a94ac3a36fd770f9fcebacba9d541d37e3c757e9efbbf6a8cbeabc8fb9->leave($__internal_fe4649a94ac3a36fd770f9fcebacba9d541d37e3c757e9efbbf6a8cbeabc8fb9_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_94625b630072f90ceacd4b7b2c4caecd21b3ad6a22897f817d7cfaea69a9ac68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94625b630072f90ceacd4b7b2c4caecd21b3ad6a22897f817d7cfaea69a9ac68->enter($__internal_94625b630072f90ceacd4b7b2c4caecd21b3ad6a22897f817d7cfaea69a9ac68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_29e377d829ce6efa7107c64dd26ed376064647c9c3f9b5407b023a0ea7d93d07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29e377d829ce6efa7107c64dd26ed376064647c9c3f9b5407b023a0ea7d93d07->enter($__internal_29e377d829ce6efa7107c64dd26ed376064647c9c3f9b5407b023a0ea7d93d07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_29e377d829ce6efa7107c64dd26ed376064647c9c3f9b5407b023a0ea7d93d07->leave($__internal_29e377d829ce6efa7107c64dd26ed376064647c9c3f9b5407b023a0ea7d93d07_prof);

        
        $__internal_94625b630072f90ceacd4b7b2c4caecd21b3ad6a22897f817d7cfaea69a9ac68->leave($__internal_94625b630072f90ceacd4b7b2c4caecd21b3ad6a22897f817d7cfaea69a9ac68_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3eb99aa36ef648538170d81f9df79a0ca9362d02857ca11365f946445ef6046f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3eb99aa36ef648538170d81f9df79a0ca9362d02857ca11365f946445ef6046f->enter($__internal_3eb99aa36ef648538170d81f9df79a0ca9362d02857ca11365f946445ef6046f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c112866f225f99322ba3f2b94d8c2128faa23f1835d7e28863a312f6b3ce7b16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c112866f225f99322ba3f2b94d8c2128faa23f1835d7e28863a312f6b3ce7b16->enter($__internal_c112866f225f99322ba3f2b94d8c2128faa23f1835d7e28863a312f6b3ce7b16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c112866f225f99322ba3f2b94d8c2128faa23f1835d7e28863a312f6b3ce7b16->leave($__internal_c112866f225f99322ba3f2b94d8c2128faa23f1835d7e28863a312f6b3ce7b16_prof);

        
        $__internal_3eb99aa36ef648538170d81f9df79a0ca9362d02857ca11365f946445ef6046f->leave($__internal_3eb99aa36ef648538170d81f9df79a0ca9362d02857ca11365f946445ef6046f_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
