<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_6fe386939c97cf254516193ae9b4c0f2419409fcc2f87a2de3211650611bb002 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_a793fbac8830b22d4694a00cb43261586bcc6d130c9c2ba60147d1707113ffcf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a793fbac8830b22d4694a00cb43261586bcc6d130c9c2ba60147d1707113ffcf->enter($__internal_a793fbac8830b22d4694a00cb43261586bcc6d130c9c2ba60147d1707113ffcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_f968092fd0a79b014f99c1874c50d418b3ee81eb2638c8835d4f9cd7f863619c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f968092fd0a79b014f99c1874c50d418b3ee81eb2638c8835d4f9cd7f863619c->enter($__internal_f968092fd0a79b014f99c1874c50d418b3ee81eb2638c8835d4f9cd7f863619c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a793fbac8830b22d4694a00cb43261586bcc6d130c9c2ba60147d1707113ffcf->leave($__internal_a793fbac8830b22d4694a00cb43261586bcc6d130c9c2ba60147d1707113ffcf_prof);

        
        $__internal_f968092fd0a79b014f99c1874c50d418b3ee81eb2638c8835d4f9cd7f863619c->leave($__internal_f968092fd0a79b014f99c1874c50d418b3ee81eb2638c8835d4f9cd7f863619c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bc7c43183ffc8f77ce21520415da248e51c64a094e2cfe337558cddc6e27f3f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc7c43183ffc8f77ce21520415da248e51c64a094e2cfe337558cddc6e27f3f7->enter($__internal_bc7c43183ffc8f77ce21520415da248e51c64a094e2cfe337558cddc6e27f3f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e414419e9881e9c3383d6d03e02d15e5ca90d7ad69e6861809940ce20b2c7402 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e414419e9881e9c3383d6d03e02d15e5ca90d7ad69e6861809940ce20b2c7402->enter($__internal_e414419e9881e9c3383d6d03e02d15e5ca90d7ad69e6861809940ce20b2c7402_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_e414419e9881e9c3383d6d03e02d15e5ca90d7ad69e6861809940ce20b2c7402->leave($__internal_e414419e9881e9c3383d6d03e02d15e5ca90d7ad69e6861809940ce20b2c7402_prof);

        
        $__internal_bc7c43183ffc8f77ce21520415da248e51c64a094e2cfe337558cddc6e27f3f7->leave($__internal_bc7c43183ffc8f77ce21520415da248e51c64a094e2cfe337558cddc6e27f3f7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\app/Resources/FOSUserBundle/views/ChangePassword/change_password.html.twig");
    }
}
