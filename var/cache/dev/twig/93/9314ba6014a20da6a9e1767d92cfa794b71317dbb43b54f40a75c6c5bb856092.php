<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_91c3b3fa1013c42257ee4f13b3342e06b7c8f6ab23cbf6d45e0b3def622d7c1c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_33d122f6955e4d3bad75a30cf4c12e873e2bff2c3af7a9b28fafb415114b4532 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33d122f6955e4d3bad75a30cf4c12e873e2bff2c3af7a9b28fafb415114b4532->enter($__internal_33d122f6955e4d3bad75a30cf4c12e873e2bff2c3af7a9b28fafb415114b4532_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        $__internal_2ff97e49d5548eb5163b36cae07e53d06e92411c4616a3743cf51024d700a3a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ff97e49d5548eb5163b36cae07e53d06e92411c4616a3743cf51024d700a3a2->enter($__internal_2ff97e49d5548eb5163b36cae07e53d06e92411c4616a3743cf51024d700a3a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_user_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_33d122f6955e4d3bad75a30cf4c12e873e2bff2c3af7a9b28fafb415114b4532->leave($__internal_33d122f6955e4d3bad75a30cf4c12e873e2bff2c3af7a9b28fafb415114b4532_prof);

        
        $__internal_2ff97e49d5548eb5163b36cae07e53d06e92411c4616a3743cf51024d700a3a2->leave($__internal_2ff97e49d5548eb5163b36cae07e53d06e92411c4616a3743cf51024d700a3a2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 5,  29 => 4,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"fos_user_user_show\">
    <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>
    <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>
</div>
", "FOSUserBundle:Profile:show_content.html.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\app/Resources/FOSUserBundle/views/Profile/show_content.html.twig");
    }
}
