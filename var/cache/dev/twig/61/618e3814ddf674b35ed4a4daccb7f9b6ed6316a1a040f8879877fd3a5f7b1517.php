<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_e3417ba34fb75147703b0a6ea9680104772dc815b5b40be1703f99c70ffdf89f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7dbaeed5463659c624980c41cb24ef85981038a93bc8af95e663bfa07f2e2089 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7dbaeed5463659c624980c41cb24ef85981038a93bc8af95e663bfa07f2e2089->enter($__internal_7dbaeed5463659c624980c41cb24ef85981038a93bc8af95e663bfa07f2e2089_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $__internal_3862a1129aa4a24509a6a3da9a78363e1a5093088780d09ed716785e54b7f1d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3862a1129aa4a24509a6a3da9a78363e1a5093088780d09ed716785e54b7f1d2->enter($__internal_3862a1129aa4a24509a6a3da9a78363e1a5093088780d09ed716785e54b7f1d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7dbaeed5463659c624980c41cb24ef85981038a93bc8af95e663bfa07f2e2089->leave($__internal_7dbaeed5463659c624980c41cb24ef85981038a93bc8af95e663bfa07f2e2089_prof);

        
        $__internal_3862a1129aa4a24509a6a3da9a78363e1a5093088780d09ed716785e54b7f1d2->leave($__internal_3862a1129aa4a24509a6a3da9a78363e1a5093088780d09ed716785e54b7f1d2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a42a2cc76f7cd02b4c4cc5327fc68298728d8f426fe647e77b074f7a55d0a462 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a42a2cc76f7cd02b4c4cc5327fc68298728d8f426fe647e77b074f7a55d0a462->enter($__internal_a42a2cc76f7cd02b4c4cc5327fc68298728d8f426fe647e77b074f7a55d0a462_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_a9f330e403c6485eaf492df7711395a00e39f27c631e8433f8ba5ea06793977c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9f330e403c6485eaf492df7711395a00e39f27c631e8433f8ba5ea06793977c->enter($__internal_a9f330e403c6485eaf492df7711395a00e39f27c631e8433f8ba5ea06793977c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_a9f330e403c6485eaf492df7711395a00e39f27c631e8433f8ba5ea06793977c->leave($__internal_a9f330e403c6485eaf492df7711395a00e39f27c631e8433f8ba5ea06793977c_prof);

        
        $__internal_a42a2cc76f7cd02b4c4cc5327fc68298728d8f426fe647e77b074f7a55d0a462->leave($__internal_a42a2cc76f7cd02b4c4cc5327fc68298728d8f426fe647e77b074f7a55d0a462_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Resetting/reset.html.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\app\\Resources\\FOSUserBundle\\views\\Resetting\\reset.html.twig");
    }
}
