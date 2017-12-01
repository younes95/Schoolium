<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_700e27bf84f30427b5402758d1ce32fc3c94c811e4b40ec89d665fab41cbd0a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_b4e766778d7088d4ba7c40c37cd4faf6be585244a3c94946e1ad88d15ba561cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4e766778d7088d4ba7c40c37cd4faf6be585244a3c94946e1ad88d15ba561cc->enter($__internal_b4e766778d7088d4ba7c40c37cd4faf6be585244a3c94946e1ad88d15ba561cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_22d96bdccd11ed1fa59672152d1384239af0c606ecb52ed6ce261b8627c183e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22d96bdccd11ed1fa59672152d1384239af0c606ecb52ed6ce261b8627c183e0->enter($__internal_22d96bdccd11ed1fa59672152d1384239af0c606ecb52ed6ce261b8627c183e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b4e766778d7088d4ba7c40c37cd4faf6be585244a3c94946e1ad88d15ba561cc->leave($__internal_b4e766778d7088d4ba7c40c37cd4faf6be585244a3c94946e1ad88d15ba561cc_prof);

        
        $__internal_22d96bdccd11ed1fa59672152d1384239af0c606ecb52ed6ce261b8627c183e0->leave($__internal_22d96bdccd11ed1fa59672152d1384239af0c606ecb52ed6ce261b8627c183e0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3d70a6ff57181bb86463cc79727396d200ee3e14b1008d2a0b421fbf585879b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d70a6ff57181bb86463cc79727396d200ee3e14b1008d2a0b421fbf585879b5->enter($__internal_3d70a6ff57181bb86463cc79727396d200ee3e14b1008d2a0b421fbf585879b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_1078bd9ffc4fa22c426c114f2b7bf5e2fdfacb15a0653ee9b6722c28c221f07d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1078bd9ffc4fa22c426c114f2b7bf5e2fdfacb15a0653ee9b6722c28c221f07d->enter($__internal_1078bd9ffc4fa22c426c114f2b7bf5e2fdfacb15a0653ee9b6722c28c221f07d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_1078bd9ffc4fa22c426c114f2b7bf5e2fdfacb15a0653ee9b6722c28c221f07d->leave($__internal_1078bd9ffc4fa22c426c114f2b7bf5e2fdfacb15a0653ee9b6722c28c221f07d_prof);

        
        $__internal_3d70a6ff57181bb86463cc79727396d200ee3e14b1008d2a0b421fbf585879b5->leave($__internal_3d70a6ff57181bb86463cc79727396d200ee3e14b1008d2a0b421fbf585879b5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\app/Resources/FOSUserBundle/views/Profile/show.html.twig");
    }
}
