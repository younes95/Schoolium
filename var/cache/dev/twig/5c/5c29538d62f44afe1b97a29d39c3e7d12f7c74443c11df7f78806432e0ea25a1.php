<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_0e0de528db60a449d530700dfbc75ced11e4744544f9817782e5ddd0ef4303f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_be36fbf4253d12a99caae06bdde34e1bed4452952585040b6e17c5a146a5d039 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be36fbf4253d12a99caae06bdde34e1bed4452952585040b6e17c5a146a5d039->enter($__internal_be36fbf4253d12a99caae06bdde34e1bed4452952585040b6e17c5a146a5d039_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $__internal_63cfcb9a9bc94b35eec55b5b3c49d06a1fbfef493d8cc8d90ec73b3360e4f629 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63cfcb9a9bc94b35eec55b5b3c49d06a1fbfef493d8cc8d90ec73b3360e4f629->enter($__internal_63cfcb9a9bc94b35eec55b5b3c49d06a1fbfef493d8cc8d90ec73b3360e4f629_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be36fbf4253d12a99caae06bdde34e1bed4452952585040b6e17c5a146a5d039->leave($__internal_be36fbf4253d12a99caae06bdde34e1bed4452952585040b6e17c5a146a5d039_prof);

        
        $__internal_63cfcb9a9bc94b35eec55b5b3c49d06a1fbfef493d8cc8d90ec73b3360e4f629->leave($__internal_63cfcb9a9bc94b35eec55b5b3c49d06a1fbfef493d8cc8d90ec73b3360e4f629_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_95eefd76abedefe433e8a5f393225818edfd587a6f048d91c2fa67a235a4824c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95eefd76abedefe433e8a5f393225818edfd587a6f048d91c2fa67a235a4824c->enter($__internal_95eefd76abedefe433e8a5f393225818edfd587a6f048d91c2fa67a235a4824c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_cdf07fbf41c1884f7758db1309ba1d53e81e020189046cfc38829fb0e104f913 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdf07fbf41c1884f7758db1309ba1d53e81e020189046cfc38829fb0e104f913->enter($__internal_cdf07fbf41c1884f7758db1309ba1d53e81e020189046cfc38829fb0e104f913_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_cdf07fbf41c1884f7758db1309ba1d53e81e020189046cfc38829fb0e104f913->leave($__internal_cdf07fbf41c1884f7758db1309ba1d53e81e020189046cfc38829fb0e104f913_prof);

        
        $__internal_95eefd76abedefe433e8a5f393225818edfd587a6f048d91c2fa67a235a4824c->leave($__internal_95eefd76abedefe433e8a5f393225818edfd587a6f048d91c2fa67a235a4824c_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Resetting/request.html.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\app\\Resources\\FOSUserBundle\\views\\Resetting\\request.html.twig");
    }
}
