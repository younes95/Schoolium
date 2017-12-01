<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_f9039e9c5b82279e56cc3b3d4835e8f890c8fbc32dbd35f9a94c8c5a6e8a02f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
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
        $__internal_c08944aca6aa4e92cbddf5bf0baeb2426c892d197522d1bb8402654c969ee26b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c08944aca6aa4e92cbddf5bf0baeb2426c892d197522d1bb8402654c969ee26b->enter($__internal_c08944aca6aa4e92cbddf5bf0baeb2426c892d197522d1bb8402654c969ee26b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $__internal_3f2b65a59545c73a6653c28c66abf043a1cae74f55be0dd260596d8537fa622f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f2b65a59545c73a6653c28c66abf043a1cae74f55be0dd260596d8537fa622f->enter($__internal_3f2b65a59545c73a6653c28c66abf043a1cae74f55be0dd260596d8537fa622f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c08944aca6aa4e92cbddf5bf0baeb2426c892d197522d1bb8402654c969ee26b->leave($__internal_c08944aca6aa4e92cbddf5bf0baeb2426c892d197522d1bb8402654c969ee26b_prof);

        
        $__internal_3f2b65a59545c73a6653c28c66abf043a1cae74f55be0dd260596d8537fa622f->leave($__internal_3f2b65a59545c73a6653c28c66abf043a1cae74f55be0dd260596d8537fa622f_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b775d0028967c3ed37af4f047d5214226eef90edbf7dde616c30ac5ad5da366f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b775d0028967c3ed37af4f047d5214226eef90edbf7dde616c30ac5ad5da366f->enter($__internal_b775d0028967c3ed37af4f047d5214226eef90edbf7dde616c30ac5ad5da366f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c5a6e8796f4800d0caf1b52d870298943ce7c60d07f77241d1272e27f0137bc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5a6e8796f4800d0caf1b52d870298943ce7c60d07f77241d1272e27f0137bc2->enter($__internal_c5a6e8796f4800d0caf1b52d870298943ce7c60d07f77241d1272e27f0137bc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_c5a6e8796f4800d0caf1b52d870298943ce7c60d07f77241d1272e27f0137bc2->leave($__internal_c5a6e8796f4800d0caf1b52d870298943ce7c60d07f77241d1272e27f0137bc2_prof);

        
        $__internal_b775d0028967c3ed37af4f047d5214226eef90edbf7dde616c30ac5ad5da366f->leave($__internal_b775d0028967c3ed37af4f047d5214226eef90edbf7dde616c30ac5ad5da366f_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/confirmed.html.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\app\\Resources\\FOSUserBundle\\views\\Registration\\confirmed.html.twig");
    }
}
