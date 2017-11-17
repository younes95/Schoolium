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
        $__internal_f10fbcbf6d72dc8997ccc386210f78c188d076b5e66d35211d35a84fd25e97b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f10fbcbf6d72dc8997ccc386210f78c188d076b5e66d35211d35a84fd25e97b0->enter($__internal_f10fbcbf6d72dc8997ccc386210f78c188d076b5e66d35211d35a84fd25e97b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_4191bcf564ac8644fd3daf3d2c0e273fa7459b624ddd95236e46fbd77d08b8bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4191bcf564ac8644fd3daf3d2c0e273fa7459b624ddd95236e46fbd77d08b8bc->enter($__internal_4191bcf564ac8644fd3daf3d2c0e273fa7459b624ddd95236e46fbd77d08b8bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f10fbcbf6d72dc8997ccc386210f78c188d076b5e66d35211d35a84fd25e97b0->leave($__internal_f10fbcbf6d72dc8997ccc386210f78c188d076b5e66d35211d35a84fd25e97b0_prof);

        
        $__internal_4191bcf564ac8644fd3daf3d2c0e273fa7459b624ddd95236e46fbd77d08b8bc->leave($__internal_4191bcf564ac8644fd3daf3d2c0e273fa7459b624ddd95236e46fbd77d08b8bc_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f9b9b19a3eb77f8fc997f1d4f21a22de274dac0f3b2950e827ef3d00992d388f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9b9b19a3eb77f8fc997f1d4f21a22de274dac0f3b2950e827ef3d00992d388f->enter($__internal_f9b9b19a3eb77f8fc997f1d4f21a22de274dac0f3b2950e827ef3d00992d388f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_109b6b5e519ce410c6b7514f1227798abd0f06f9ae1a4113f3485dcefa0dd66a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_109b6b5e519ce410c6b7514f1227798abd0f06f9ae1a4113f3485dcefa0dd66a->enter($__internal_109b6b5e519ce410c6b7514f1227798abd0f06f9ae1a4113f3485dcefa0dd66a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_109b6b5e519ce410c6b7514f1227798abd0f06f9ae1a4113f3485dcefa0dd66a->leave($__internal_109b6b5e519ce410c6b7514f1227798abd0f06f9ae1a4113f3485dcefa0dd66a_prof);

        
        $__internal_f9b9b19a3eb77f8fc997f1d4f21a22de274dac0f3b2950e827ef3d00992d388f->leave($__internal_f9b9b19a3eb77f8fc997f1d4f21a22de274dac0f3b2950e827ef3d00992d388f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_dbaec2dea7e347112e271d7a9e830d987bbebab6a02bf6daaf5af725c3976576 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbaec2dea7e347112e271d7a9e830d987bbebab6a02bf6daaf5af725c3976576->enter($__internal_dbaec2dea7e347112e271d7a9e830d987bbebab6a02bf6daaf5af725c3976576_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_aff9a0daa861c4c3aaa72b92bdcb54847ec6347b4bab32d50aa13e8c44ea60b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aff9a0daa861c4c3aaa72b92bdcb54847ec6347b4bab32d50aa13e8c44ea60b5->enter($__internal_aff9a0daa861c4c3aaa72b92bdcb54847ec6347b4bab32d50aa13e8c44ea60b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_aff9a0daa861c4c3aaa72b92bdcb54847ec6347b4bab32d50aa13e8c44ea60b5->leave($__internal_aff9a0daa861c4c3aaa72b92bdcb54847ec6347b4bab32d50aa13e8c44ea60b5_prof);

        
        $__internal_dbaec2dea7e347112e271d7a9e830d987bbebab6a02bf6daaf5af725c3976576->leave($__internal_dbaec2dea7e347112e271d7a9e830d987bbebab6a02bf6daaf5af725c3976576_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cd9a1b5b7c7e71a7df5da5766296a513c1aa910ef0df40a350e816cbe6ba54d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd9a1b5b7c7e71a7df5da5766296a513c1aa910ef0df40a350e816cbe6ba54d3->enter($__internal_cd9a1b5b7c7e71a7df5da5766296a513c1aa910ef0df40a350e816cbe6ba54d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_54e683a9a914235da92bb57711a90dcc7a4756be7c5be30907d3b1266f90d99c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54e683a9a914235da92bb57711a90dcc7a4756be7c5be30907d3b1266f90d99c->enter($__internal_54e683a9a914235da92bb57711a90dcc7a4756be7c5be30907d3b1266f90d99c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_54e683a9a914235da92bb57711a90dcc7a4756be7c5be30907d3b1266f90d99c->leave($__internal_54e683a9a914235da92bb57711a90dcc7a4756be7c5be30907d3b1266f90d99c_prof);

        
        $__internal_cd9a1b5b7c7e71a7df5da5766296a513c1aa910ef0df40a350e816cbe6ba54d3->leave($__internal_cd9a1b5b7c7e71a7df5da5766296a513c1aa910ef0df40a350e816cbe6ba54d3_prof);

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
