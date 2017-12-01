<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_1be8e8f0489361dc10215d86f342c6e622e7487f80291c8238e66d3999e00f5e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_8a0274444e559690c24570c6496fb4bd4045bb60a6293641b467d51bc086014e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a0274444e559690c24570c6496fb4bd4045bb60a6293641b467d51bc086014e->enter($__internal_8a0274444e559690c24570c6496fb4bd4045bb60a6293641b467d51bc086014e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_685ff67a07eb4eaa81df9e6097603dea4c16f93736432bdbc248513e22f64f6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_685ff67a07eb4eaa81df9e6097603dea4c16f93736432bdbc248513e22f64f6a->enter($__internal_685ff67a07eb4eaa81df9e6097603dea4c16f93736432bdbc248513e22f64f6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8a0274444e559690c24570c6496fb4bd4045bb60a6293641b467d51bc086014e->leave($__internal_8a0274444e559690c24570c6496fb4bd4045bb60a6293641b467d51bc086014e_prof);

        
        $__internal_685ff67a07eb4eaa81df9e6097603dea4c16f93736432bdbc248513e22f64f6a->leave($__internal_685ff67a07eb4eaa81df9e6097603dea4c16f93736432bdbc248513e22f64f6a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_03ad7913738295d20619613d91f7b9eff5167c3227d1312720c8cbc8e6d15d73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03ad7913738295d20619613d91f7b9eff5167c3227d1312720c8cbc8e6d15d73->enter($__internal_03ad7913738295d20619613d91f7b9eff5167c3227d1312720c8cbc8e6d15d73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d390d8ba8908f382b4378644940afdb9cf9574a2bc8fe70fd380d77b2b4eeecb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d390d8ba8908f382b4378644940afdb9cf9574a2bc8fe70fd380d77b2b4eeecb->enter($__internal_d390d8ba8908f382b4378644940afdb9cf9574a2bc8fe70fd380d77b2b4eeecb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_d390d8ba8908f382b4378644940afdb9cf9574a2bc8fe70fd380d77b2b4eeecb->leave($__internal_d390d8ba8908f382b4378644940afdb9cf9574a2bc8fe70fd380d77b2b4eeecb_prof);

        
        $__internal_03ad7913738295d20619613d91f7b9eff5167c3227d1312720c8cbc8e6d15d73->leave($__internal_03ad7913738295d20619613d91f7b9eff5167c3227d1312720c8cbc8e6d15d73_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\app/Resources/FOSUserBundle/views/Group/list.html.twig");
    }
}
