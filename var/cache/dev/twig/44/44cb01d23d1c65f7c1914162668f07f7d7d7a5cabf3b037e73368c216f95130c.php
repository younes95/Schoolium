<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_79e00ce430e900607f54113a4c19a448bbf22c32b75b8588fa37456fe2e9a3dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_592db63a0a5dbcfc5a3ee162e2674446a4d7197efe1bb6e82d148f2ac296e620 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_592db63a0a5dbcfc5a3ee162e2674446a4d7197efe1bb6e82d148f2ac296e620->enter($__internal_592db63a0a5dbcfc5a3ee162e2674446a4d7197efe1bb6e82d148f2ac296e620_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_070ee216a395732ec02c3fdcbddfe22ba491c938026793ca7912881c29a744b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_070ee216a395732ec02c3fdcbddfe22ba491c938026793ca7912881c29a744b5->enter($__internal_070ee216a395732ec02c3fdcbddfe22ba491c938026793ca7912881c29a744b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_592db63a0a5dbcfc5a3ee162e2674446a4d7197efe1bb6e82d148f2ac296e620->leave($__internal_592db63a0a5dbcfc5a3ee162e2674446a4d7197efe1bb6e82d148f2ac296e620_prof);

        
        $__internal_070ee216a395732ec02c3fdcbddfe22ba491c938026793ca7912881c29a744b5->leave($__internal_070ee216a395732ec02c3fdcbddfe22ba491c938026793ca7912881c29a744b5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e3afd0bfc96f5709461a53a0cde4668c6d01fc028977bd5c03a6bcb7e420132c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3afd0bfc96f5709461a53a0cde4668c6d01fc028977bd5c03a6bcb7e420132c->enter($__internal_e3afd0bfc96f5709461a53a0cde4668c6d01fc028977bd5c03a6bcb7e420132c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b43f7bbe124f99fa98eac16cd74018993caafccaf6a7aa015bc7585d0a6b520a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b43f7bbe124f99fa98eac16cd74018993caafccaf6a7aa015bc7585d0a6b520a->enter($__internal_b43f7bbe124f99fa98eac16cd74018993caafccaf6a7aa015bc7585d0a6b520a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_b43f7bbe124f99fa98eac16cd74018993caafccaf6a7aa015bc7585d0a6b520a->leave($__internal_b43f7bbe124f99fa98eac16cd74018993caafccaf6a7aa015bc7585d0a6b520a_prof);

        
        $__internal_e3afd0bfc96f5709461a53a0cde4668c6d01fc028977bd5c03a6bcb7e420132c->leave($__internal_e3afd0bfc96f5709461a53a0cde4668c6d01fc028977bd5c03a6bcb7e420132c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/FOSUserBundle/views/Group/show.html.twig");
    }
}
