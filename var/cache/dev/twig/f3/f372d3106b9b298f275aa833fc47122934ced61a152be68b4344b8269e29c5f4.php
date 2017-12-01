<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_1c3b96777cf94effa02c943b746540d3b772e3d71d8737a45bed8f6ba09bd879 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_54972bc85b56a73a6239ea55fcf6804f016873c290c553206418e4c49983ef43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54972bc85b56a73a6239ea55fcf6804f016873c290c553206418e4c49983ef43->enter($__internal_54972bc85b56a73a6239ea55fcf6804f016873c290c553206418e4c49983ef43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_6b6f1ece894584d782663c9b86d3001cf9c1f3eec9bf350704913492e65c601b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b6f1ece894584d782663c9b86d3001cf9c1f3eec9bf350704913492e65c601b->enter($__internal_6b6f1ece894584d782663c9b86d3001cf9c1f3eec9bf350704913492e65c601b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_54972bc85b56a73a6239ea55fcf6804f016873c290c553206418e4c49983ef43->leave($__internal_54972bc85b56a73a6239ea55fcf6804f016873c290c553206418e4c49983ef43_prof);

        
        $__internal_6b6f1ece894584d782663c9b86d3001cf9c1f3eec9bf350704913492e65c601b->leave($__internal_6b6f1ece894584d782663c9b86d3001cf9c1f3eec9bf350704913492e65c601b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ef0ec5cc2f700dd76be190f4bf8a2c45b116044873f3434cf7d50e41b9a14d56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef0ec5cc2f700dd76be190f4bf8a2c45b116044873f3434cf7d50e41b9a14d56->enter($__internal_ef0ec5cc2f700dd76be190f4bf8a2c45b116044873f3434cf7d50e41b9a14d56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_5bdbd07303dcb63c92b5197bbc7dfda43f27ae264e44228441f0d3f9956fb58a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bdbd07303dcb63c92b5197bbc7dfda43f27ae264e44228441f0d3f9956fb58a->enter($__internal_5bdbd07303dcb63c92b5197bbc7dfda43f27ae264e44228441f0d3f9956fb58a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_5bdbd07303dcb63c92b5197bbc7dfda43f27ae264e44228441f0d3f9956fb58a->leave($__internal_5bdbd07303dcb63c92b5197bbc7dfda43f27ae264e44228441f0d3f9956fb58a_prof);

        
        $__internal_ef0ec5cc2f700dd76be190f4bf8a2c45b116044873f3434cf7d50e41b9a14d56->leave($__internal_ef0ec5cc2f700dd76be190f4bf8a2c45b116044873f3434cf7d50e41b9a14d56_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
", "FOSUserBundle:Resetting:reset.html.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\app/Resources/FOSUserBundle/views/Resetting/reset.html.twig");
    }
}
