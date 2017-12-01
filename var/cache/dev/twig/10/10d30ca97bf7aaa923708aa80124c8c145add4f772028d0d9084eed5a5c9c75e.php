<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_0a49730a4415c52dbae0bde59acb7a1499983a905e405c913fd1a90537bf38c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_200f7b2e4ec702b65a13aaa6552268c10d9854c95d546fe22f8feb9f92d39cab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_200f7b2e4ec702b65a13aaa6552268c10d9854c95d546fe22f8feb9f92d39cab->enter($__internal_200f7b2e4ec702b65a13aaa6552268c10d9854c95d546fe22f8feb9f92d39cab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_79d9811bb98e82ad7a92c8fed22f7df55d7b6f51f448f5e96c197675020ed2ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79d9811bb98e82ad7a92c8fed22f7df55d7b6f51f448f5e96c197675020ed2ed->enter($__internal_79d9811bb98e82ad7a92c8fed22f7df55d7b6f51f448f5e96c197675020ed2ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_200f7b2e4ec702b65a13aaa6552268c10d9854c95d546fe22f8feb9f92d39cab->leave($__internal_200f7b2e4ec702b65a13aaa6552268c10d9854c95d546fe22f8feb9f92d39cab_prof);

        
        $__internal_79d9811bb98e82ad7a92c8fed22f7df55d7b6f51f448f5e96c197675020ed2ed->leave($__internal_79d9811bb98e82ad7a92c8fed22f7df55d7b6f51f448f5e96c197675020ed2ed_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_14b8e0ffb0314cf1bb15e82b3d0bdf3a10cae79de0349a98814bd31653be50b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14b8e0ffb0314cf1bb15e82b3d0bdf3a10cae79de0349a98814bd31653be50b9->enter($__internal_14b8e0ffb0314cf1bb15e82b3d0bdf3a10cae79de0349a98814bd31653be50b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_8e5234e38cc8a277db2f6be0f525d9dccddcd6e63f114db8feb3f96cc678a46c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e5234e38cc8a277db2f6be0f525d9dccddcd6e63f114db8feb3f96cc678a46c->enter($__internal_8e5234e38cc8a277db2f6be0f525d9dccddcd6e63f114db8feb3f96cc678a46c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_8e5234e38cc8a277db2f6be0f525d9dccddcd6e63f114db8feb3f96cc678a46c->leave($__internal_8e5234e38cc8a277db2f6be0f525d9dccddcd6e63f114db8feb3f96cc678a46c_prof);

        
        $__internal_14b8e0ffb0314cf1bb15e82b3d0bdf3a10cae79de0349a98814bd31653be50b9->leave($__internal_14b8e0ffb0314cf1bb15e82b3d0bdf3a10cae79de0349a98814bd31653be50b9_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1b6930552d2e93f2fae2e238ca07c22bbd93944fb48728b6fff3af34774c28cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b6930552d2e93f2fae2e238ca07c22bbd93944fb48728b6fff3af34774c28cd->enter($__internal_1b6930552d2e93f2fae2e238ca07c22bbd93944fb48728b6fff3af34774c28cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_dfcaf4baa2a7ed6208aa67eb313d04311eebf94671a12486f7db48dfc6d1c576 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfcaf4baa2a7ed6208aa67eb313d04311eebf94671a12486f7db48dfc6d1c576->enter($__internal_dfcaf4baa2a7ed6208aa67eb313d04311eebf94671a12486f7db48dfc6d1c576_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_dfcaf4baa2a7ed6208aa67eb313d04311eebf94671a12486f7db48dfc6d1c576->leave($__internal_dfcaf4baa2a7ed6208aa67eb313d04311eebf94671a12486f7db48dfc6d1c576_prof);

        
        $__internal_1b6930552d2e93f2fae2e238ca07c22bbd93944fb48728b6fff3af34774c28cd->leave($__internal_1b6930552d2e93f2fae2e238ca07c22bbd93944fb48728b6fff3af34774c28cd_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6ce0dd04f6df5e18427372d8ce9318b84550f9f7bf534760dedc064a0635658f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ce0dd04f6df5e18427372d8ce9318b84550f9f7bf534760dedc064a0635658f->enter($__internal_6ce0dd04f6df5e18427372d8ce9318b84550f9f7bf534760dedc064a0635658f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_352c2796e4b0078f4e0468ee3dce5087c5c73679296f603249be64090fc320d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_352c2796e4b0078f4e0468ee3dce5087c5c73679296f603249be64090fc320d5->enter($__internal_352c2796e4b0078f4e0468ee3dce5087c5c73679296f603249be64090fc320d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_352c2796e4b0078f4e0468ee3dce5087c5c73679296f603249be64090fc320d5->leave($__internal_352c2796e4b0078f4e0468ee3dce5087c5c73679296f603249be64090fc320d5_prof);

        
        $__internal_6ce0dd04f6df5e18427372d8ce9318b84550f9f7bf534760dedc064a0635658f->leave($__internal_6ce0dd04f6df5e18427372d8ce9318b84550f9f7bf534760dedc064a0635658f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
