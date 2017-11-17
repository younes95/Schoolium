<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_3af4a99c1cb655a4825f0a6e01551d674b52d52b622e47d73e3845cb1496152a extends Twig_Template
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
        $__internal_9b76845a8f6733ef3df427487e5ec2d4a6543f805ac24bba6ccbbcd921d4b73c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b76845a8f6733ef3df427487e5ec2d4a6543f805ac24bba6ccbbcd921d4b73c->enter($__internal_9b76845a8f6733ef3df427487e5ec2d4a6543f805ac24bba6ccbbcd921d4b73c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_c9f9a42347edfc8737400577d8ac5fece257ea85b70b40ac4a35a4605b36dca3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9f9a42347edfc8737400577d8ac5fece257ea85b70b40ac4a35a4605b36dca3->enter($__internal_c9f9a42347edfc8737400577d8ac5fece257ea85b70b40ac4a35a4605b36dca3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b76845a8f6733ef3df427487e5ec2d4a6543f805ac24bba6ccbbcd921d4b73c->leave($__internal_9b76845a8f6733ef3df427487e5ec2d4a6543f805ac24bba6ccbbcd921d4b73c_prof);

        
        $__internal_c9f9a42347edfc8737400577d8ac5fece257ea85b70b40ac4a35a4605b36dca3->leave($__internal_c9f9a42347edfc8737400577d8ac5fece257ea85b70b40ac4a35a4605b36dca3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_70f98b04b5d5a1892410f6b9030c76c0b69873ebd93d82a6105dde1271bd7b3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70f98b04b5d5a1892410f6b9030c76c0b69873ebd93d82a6105dde1271bd7b3e->enter($__internal_70f98b04b5d5a1892410f6b9030c76c0b69873ebd93d82a6105dde1271bd7b3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_b64f078fc639a2ecdd9ce12ae5f40e33d7e1b0532a4e3b9eb3d72cdadfcf6de0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b64f078fc639a2ecdd9ce12ae5f40e33d7e1b0532a4e3b9eb3d72cdadfcf6de0->enter($__internal_b64f078fc639a2ecdd9ce12ae5f40e33d7e1b0532a4e3b9eb3d72cdadfcf6de0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b64f078fc639a2ecdd9ce12ae5f40e33d7e1b0532a4e3b9eb3d72cdadfcf6de0->leave($__internal_b64f078fc639a2ecdd9ce12ae5f40e33d7e1b0532a4e3b9eb3d72cdadfcf6de0_prof);

        
        $__internal_70f98b04b5d5a1892410f6b9030c76c0b69873ebd93d82a6105dde1271bd7b3e->leave($__internal_70f98b04b5d5a1892410f6b9030c76c0b69873ebd93d82a6105dde1271bd7b3e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_dbd64e886295a4ee920f0a126df1dea402728c5a8dc01ab7bc552506763b4a12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbd64e886295a4ee920f0a126df1dea402728c5a8dc01ab7bc552506763b4a12->enter($__internal_dbd64e886295a4ee920f0a126df1dea402728c5a8dc01ab7bc552506763b4a12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f1ea0813ed10ee8f713cf9b10f3a392fc2179477e74ff32d8ed120e6c3be086f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1ea0813ed10ee8f713cf9b10f3a392fc2179477e74ff32d8ed120e6c3be086f->enter($__internal_f1ea0813ed10ee8f713cf9b10f3a392fc2179477e74ff32d8ed120e6c3be086f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f1ea0813ed10ee8f713cf9b10f3a392fc2179477e74ff32d8ed120e6c3be086f->leave($__internal_f1ea0813ed10ee8f713cf9b10f3a392fc2179477e74ff32d8ed120e6c3be086f_prof);

        
        $__internal_dbd64e886295a4ee920f0a126df1dea402728c5a8dc01ab7bc552506763b4a12->leave($__internal_dbd64e886295a4ee920f0a126df1dea402728c5a8dc01ab7bc552506763b4a12_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a21f0f651349ad307ad67f39c50c058160d293f0240d8c2e6508ce55b5ad89cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a21f0f651349ad307ad67f39c50c058160d293f0240d8c2e6508ce55b5ad89cf->enter($__internal_a21f0f651349ad307ad67f39c50c058160d293f0240d8c2e6508ce55b5ad89cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f6ddbc1e12b31dd2369eb5f67b4bb8f3f9ceef0007055e6149866dbc61bad99a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6ddbc1e12b31dd2369eb5f67b4bb8f3f9ceef0007055e6149866dbc61bad99a->enter($__internal_f6ddbc1e12b31dd2369eb5f67b4bb8f3f9ceef0007055e6149866dbc61bad99a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f6ddbc1e12b31dd2369eb5f67b4bb8f3f9ceef0007055e6149866dbc61bad99a->leave($__internal_f6ddbc1e12b31dd2369eb5f67b4bb8f3f9ceef0007055e6149866dbc61bad99a_prof);

        
        $__internal_a21f0f651349ad307ad67f39c50c058160d293f0240d8c2e6508ce55b5ad89cf->leave($__internal_a21f0f651349ad307ad67f39c50c058160d293f0240d8c2e6508ce55b5ad89cf_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
