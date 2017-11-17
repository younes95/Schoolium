<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_d53c5086159fe5a49688cf64d3ab072be7a7e7a47c3e56920a31c877e13687f5 extends Twig_Template
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
        $__internal_83b1a006b83aa564e5cd22a7e5ecd8471a4f6aa424d13cbc26291d6c2349731f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83b1a006b83aa564e5cd22a7e5ecd8471a4f6aa424d13cbc26291d6c2349731f->enter($__internal_83b1a006b83aa564e5cd22a7e5ecd8471a4f6aa424d13cbc26291d6c2349731f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_02de12984ec55be9a57b9ff8286e976af9abbc2b86210fb6ab487c15d843b5ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02de12984ec55be9a57b9ff8286e976af9abbc2b86210fb6ab487c15d843b5ea->enter($__internal_02de12984ec55be9a57b9ff8286e976af9abbc2b86210fb6ab487c15d843b5ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_83b1a006b83aa564e5cd22a7e5ecd8471a4f6aa424d13cbc26291d6c2349731f->leave($__internal_83b1a006b83aa564e5cd22a7e5ecd8471a4f6aa424d13cbc26291d6c2349731f_prof);

        
        $__internal_02de12984ec55be9a57b9ff8286e976af9abbc2b86210fb6ab487c15d843b5ea->leave($__internal_02de12984ec55be9a57b9ff8286e976af9abbc2b86210fb6ab487c15d843b5ea_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_53f2195c3c2d80a31a1b2c8e7e0a566e4a55488d6f7addf8501ce9067508940e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53f2195c3c2d80a31a1b2c8e7e0a566e4a55488d6f7addf8501ce9067508940e->enter($__internal_53f2195c3c2d80a31a1b2c8e7e0a566e4a55488d6f7addf8501ce9067508940e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_78af223c849ecfc6eae33ff5ba7134521d3cd342004e07ccde653c37cf8d785d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78af223c849ecfc6eae33ff5ba7134521d3cd342004e07ccde653c37cf8d785d->enter($__internal_78af223c849ecfc6eae33ff5ba7134521d3cd342004e07ccde653c37cf8d785d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_78af223c849ecfc6eae33ff5ba7134521d3cd342004e07ccde653c37cf8d785d->leave($__internal_78af223c849ecfc6eae33ff5ba7134521d3cd342004e07ccde653c37cf8d785d_prof);

        
        $__internal_53f2195c3c2d80a31a1b2c8e7e0a566e4a55488d6f7addf8501ce9067508940e->leave($__internal_53f2195c3c2d80a31a1b2c8e7e0a566e4a55488d6f7addf8501ce9067508940e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_32a4f507ad361219b4ccc8d69a22cf91bc6d255b7b7cb4823d61b08aa9ce05c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32a4f507ad361219b4ccc8d69a22cf91bc6d255b7b7cb4823d61b08aa9ce05c7->enter($__internal_32a4f507ad361219b4ccc8d69a22cf91bc6d255b7b7cb4823d61b08aa9ce05c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_4b5c14238f4dc27fd61fa4911f39c3a98adcb2c78f4d06ad3b4e36c023c424fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b5c14238f4dc27fd61fa4911f39c3a98adcb2c78f4d06ad3b4e36c023c424fc->enter($__internal_4b5c14238f4dc27fd61fa4911f39c3a98adcb2c78f4d06ad3b4e36c023c424fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4b5c14238f4dc27fd61fa4911f39c3a98adcb2c78f4d06ad3b4e36c023c424fc->leave($__internal_4b5c14238f4dc27fd61fa4911f39c3a98adcb2c78f4d06ad3b4e36c023c424fc_prof);

        
        $__internal_32a4f507ad361219b4ccc8d69a22cf91bc6d255b7b7cb4823d61b08aa9ce05c7->leave($__internal_32a4f507ad361219b4ccc8d69a22cf91bc6d255b7b7cb4823d61b08aa9ce05c7_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_67a813562c5f265f342f19a0800ff7f0a368a3e6df59daf18bcee91f0550cace = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67a813562c5f265f342f19a0800ff7f0a368a3e6df59daf18bcee91f0550cace->enter($__internal_67a813562c5f265f342f19a0800ff7f0a368a3e6df59daf18bcee91f0550cace_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7685a26807581259cccf70b26cd4317dbd63d6b01482a4ce93b003e8a99507df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7685a26807581259cccf70b26cd4317dbd63d6b01482a4ce93b003e8a99507df->enter($__internal_7685a26807581259cccf70b26cd4317dbd63d6b01482a4ce93b003e8a99507df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_7685a26807581259cccf70b26cd4317dbd63d6b01482a4ce93b003e8a99507df->leave($__internal_7685a26807581259cccf70b26cd4317dbd63d6b01482a4ce93b003e8a99507df_prof);

        
        $__internal_67a813562c5f265f342f19a0800ff7f0a368a3e6df59daf18bcee91f0550cace->leave($__internal_67a813562c5f265f342f19a0800ff7f0a368a3e6df59daf18bcee91f0550cace_prof);

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
", "WebProfilerBundle:Collector:router.html.twig", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
