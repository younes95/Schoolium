<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_6bfd14c617dc73b529766f5b09b99359d35ac1465991e086610475d346c6ff27 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_90c0743cfe540166b22b6b7907b1b507323cd0a29ed97c69aa3ab6d4cb5e15e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90c0743cfe540166b22b6b7907b1b507323cd0a29ed97c69aa3ab6d4cb5e15e5->enter($__internal_90c0743cfe540166b22b6b7907b1b507323cd0a29ed97c69aa3ab6d4cb5e15e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_c7fe0f53963ee0713b281c96a042be029dd7ee14e27c625cab174aaaadea70f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7fe0f53963ee0713b281c96a042be029dd7ee14e27c625cab174aaaadea70f4->enter($__internal_c7fe0f53963ee0713b281c96a042be029dd7ee14e27c625cab174aaaadea70f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_90c0743cfe540166b22b6b7907b1b507323cd0a29ed97c69aa3ab6d4cb5e15e5->leave($__internal_90c0743cfe540166b22b6b7907b1b507323cd0a29ed97c69aa3ab6d4cb5e15e5_prof);

        
        $__internal_c7fe0f53963ee0713b281c96a042be029dd7ee14e27c625cab174aaaadea70f4->leave($__internal_c7fe0f53963ee0713b281c96a042be029dd7ee14e27c625cab174aaaadea70f4_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fbe80d2b693416df8d2899e093d02d216f9f6e873407404928018a0e36c21ec8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbe80d2b693416df8d2899e093d02d216f9f6e873407404928018a0e36c21ec8->enter($__internal_fbe80d2b693416df8d2899e093d02d216f9f6e873407404928018a0e36c21ec8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_35c0f44e1b6896149c40b6c3f6185e43de570ff3e73c906e428663e9d2cd2d2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35c0f44e1b6896149c40b6c3f6185e43de570ff3e73c906e428663e9d2cd2d2b->enter($__internal_35c0f44e1b6896149c40b6c3f6185e43de570ff3e73c906e428663e9d2cd2d2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_35c0f44e1b6896149c40b6c3f6185e43de570ff3e73c906e428663e9d2cd2d2b->leave($__internal_35c0f44e1b6896149c40b6c3f6185e43de570ff3e73c906e428663e9d2cd2d2b_prof);

        
        $__internal_fbe80d2b693416df8d2899e093d02d216f9f6e873407404928018a0e36c21ec8->leave($__internal_fbe80d2b693416df8d2899e093d02d216f9f6e873407404928018a0e36c21ec8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
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
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:check_email.html.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\app/Resources/FOSUserBundle/views/Registration/check_email.html.twig");
    }
}
