<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_298b9d532c6f95ae216b7e059274db33509b27f2aacdee327036a4a77528d802 extends Twig_Template
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
        $__internal_26931248461cfc525a382bd3cb5dd444c06ebb84785aa3b6ac86cf74c1ba0f60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26931248461cfc525a382bd3cb5dd444c06ebb84785aa3b6ac86cf74c1ba0f60->enter($__internal_26931248461cfc525a382bd3cb5dd444c06ebb84785aa3b6ac86cf74c1ba0f60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_d4b223f384f8015eab1db9048a15d0b8bccacd2a67bf2b4d2ccffec29a7d92fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4b223f384f8015eab1db9048a15d0b8bccacd2a67bf2b4d2ccffec29a7d92fd->enter($__internal_d4b223f384f8015eab1db9048a15d0b8bccacd2a67bf2b4d2ccffec29a7d92fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_26931248461cfc525a382bd3cb5dd444c06ebb84785aa3b6ac86cf74c1ba0f60->leave($__internal_26931248461cfc525a382bd3cb5dd444c06ebb84785aa3b6ac86cf74c1ba0f60_prof);

        
        $__internal_d4b223f384f8015eab1db9048a15d0b8bccacd2a67bf2b4d2ccffec29a7d92fd->leave($__internal_d4b223f384f8015eab1db9048a15d0b8bccacd2a67bf2b4d2ccffec29a7d92fd_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f30829b1ba082c71324eccf185cd090cbfa4937a874735b6ec003cdf53e614f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f30829b1ba082c71324eccf185cd090cbfa4937a874735b6ec003cdf53e614f7->enter($__internal_f30829b1ba082c71324eccf185cd090cbfa4937a874735b6ec003cdf53e614f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_519316921018276944b64dbbea40d717d30c62373ab4d31221cdc4118ce3fea1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_519316921018276944b64dbbea40d717d30c62373ab4d31221cdc4118ce3fea1->enter($__internal_519316921018276944b64dbbea40d717d30c62373ab4d31221cdc4118ce3fea1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_519316921018276944b64dbbea40d717d30c62373ab4d31221cdc4118ce3fea1->leave($__internal_519316921018276944b64dbbea40d717d30c62373ab4d31221cdc4118ce3fea1_prof);

        
        $__internal_f30829b1ba082c71324eccf185cd090cbfa4937a874735b6ec003cdf53e614f7->leave($__internal_f30829b1ba082c71324eccf185cd090cbfa4937a874735b6ec003cdf53e614f7_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_72a0ea9ba84384a7af8be68199e398ec1e18fd500dc78ea14fadf91279abf7b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72a0ea9ba84384a7af8be68199e398ec1e18fd500dc78ea14fadf91279abf7b8->enter($__internal_72a0ea9ba84384a7af8be68199e398ec1e18fd500dc78ea14fadf91279abf7b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_bf971bbf88f61ad3a468a38d9e3b0b423e17343a5f5aefdd25f25d5286529c39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf971bbf88f61ad3a468a38d9e3b0b423e17343a5f5aefdd25f25d5286529c39->enter($__internal_bf971bbf88f61ad3a468a38d9e3b0b423e17343a5f5aefdd25f25d5286529c39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_bf971bbf88f61ad3a468a38d9e3b0b423e17343a5f5aefdd25f25d5286529c39->leave($__internal_bf971bbf88f61ad3a468a38d9e3b0b423e17343a5f5aefdd25f25d5286529c39_prof);

        
        $__internal_72a0ea9ba84384a7af8be68199e398ec1e18fd500dc78ea14fadf91279abf7b8->leave($__internal_72a0ea9ba84384a7af8be68199e398ec1e18fd500dc78ea14fadf91279abf7b8_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_41cae219b69d55a63cb99df85d8bb4086fdba5999aab051eb994be6edf156045 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41cae219b69d55a63cb99df85d8bb4086fdba5999aab051eb994be6edf156045->enter($__internal_41cae219b69d55a63cb99df85d8bb4086fdba5999aab051eb994be6edf156045_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c15447dc1c9ec098aeff4e1d947ade344629319e83e19b6c0f25a452bd04c586 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c15447dc1c9ec098aeff4e1d947ade344629319e83e19b6c0f25a452bd04c586->enter($__internal_c15447dc1c9ec098aeff4e1d947ade344629319e83e19b6c0f25a452bd04c586_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c15447dc1c9ec098aeff4e1d947ade344629319e83e19b6c0f25a452bd04c586->leave($__internal_c15447dc1c9ec098aeff4e1d947ade344629319e83e19b6c0f25a452bd04c586_prof);

        
        $__internal_41cae219b69d55a63cb99df85d8bb4086fdba5999aab051eb994be6edf156045->leave($__internal_41cae219b69d55a63cb99df85d8bb4086fdba5999aab051eb994be6edf156045_prof);

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
