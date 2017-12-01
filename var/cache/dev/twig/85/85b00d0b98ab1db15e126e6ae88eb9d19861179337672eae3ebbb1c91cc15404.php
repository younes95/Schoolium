<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_d0a69ce79b3d71a87eb187f056f3ef92b6d0b426395d332d7034acc9b3c30ce9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_0f46d1868fd69139193ffb8add4d528788543ef64716692d8b4fcc98dfc08233 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f46d1868fd69139193ffb8add4d528788543ef64716692d8b4fcc98dfc08233->enter($__internal_0f46d1868fd69139193ffb8add4d528788543ef64716692d8b4fcc98dfc08233_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_03bab38501626d95830093f382e1fadffda47abdfbb231eda7269382bc7d886a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03bab38501626d95830093f382e1fadffda47abdfbb231eda7269382bc7d886a->enter($__internal_03bab38501626d95830093f382e1fadffda47abdfbb231eda7269382bc7d886a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f46d1868fd69139193ffb8add4d528788543ef64716692d8b4fcc98dfc08233->leave($__internal_0f46d1868fd69139193ffb8add4d528788543ef64716692d8b4fcc98dfc08233_prof);

        
        $__internal_03bab38501626d95830093f382e1fadffda47abdfbb231eda7269382bc7d886a->leave($__internal_03bab38501626d95830093f382e1fadffda47abdfbb231eda7269382bc7d886a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7466a23c7928c892605de48b5d18cb9c05c119e68d0d5a4f13bde7444749a9ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7466a23c7928c892605de48b5d18cb9c05c119e68d0d5a4f13bde7444749a9ce->enter($__internal_7466a23c7928c892605de48b5d18cb9c05c119e68d0d5a4f13bde7444749a9ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_79596cddb10db53cbe34502fdeed42743f09f1003b08c027457663af50330854 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79596cddb10db53cbe34502fdeed42743f09f1003b08c027457663af50330854->enter($__internal_79596cddb10db53cbe34502fdeed42743f09f1003b08c027457663af50330854_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_79596cddb10db53cbe34502fdeed42743f09f1003b08c027457663af50330854->leave($__internal_79596cddb10db53cbe34502fdeed42743f09f1003b08c027457663af50330854_prof);

        
        $__internal_7466a23c7928c892605de48b5d18cb9c05c119e68d0d5a4f13bde7444749a9ce->leave($__internal_7466a23c7928c892605de48b5d18cb9c05c119e68d0d5a4f13bde7444749a9ce_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\app/Resources/FOSUserBundle/views/Profile/edit.html.twig");
    }
}
