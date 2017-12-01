<?php

/* FOSUserBundle:Resetting:request_content.html.twig */
class __TwigTemplate_9684480054544a602c203d71821fd19745ea0b6e8696c5116a02713a282c6f01 extends Twig_Template
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
        $__internal_7f0a96af41a02bbb18fcd054105e4c78f21bec0c37114cb6739f9e5d887ff30c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f0a96af41a02bbb18fcd054105e4c78f21bec0c37114cb6739f9e5d887ff30c->enter($__internal_7f0a96af41a02bbb18fcd054105e4c78f21bec0c37114cb6739f9e5d887ff30c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request_content.html.twig"));

        $__internal_5222a0e68357ff701bb9046087f361acfc522997588cdbe0cbbac9b59627034d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5222a0e68357ff701bb9046087f361acfc522997588cdbe0cbbac9b59627034d->enter($__internal_5222a0e68357ff701bb9046087f361acfc522997588cdbe0cbbac9b59627034d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request_content.html.twig"));

        // line 2
        echo "
<form action=\"";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_send_email");
        echo "\" method=\"POST\" class=\"fos_user_resetting_request\">
    <div>
        <label for=\"username\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
    </div>
    <div>
        <input type=\"submit\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
        
        $__internal_7f0a96af41a02bbb18fcd054105e4c78f21bec0c37114cb6739f9e5d887ff30c->leave($__internal_7f0a96af41a02bbb18fcd054105e4c78f21bec0c37114cb6739f9e5d887ff30c_prof);

        
        $__internal_5222a0e68357ff701bb9046087f361acfc522997588cdbe0cbbac9b59627034d->leave($__internal_5222a0e68357ff701bb9046087f361acfc522997588cdbe0cbbac9b59627034d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 9,  33 => 5,  28 => 3,  25 => 2,);
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

<form action=\"{{ path('fos_user_resetting_send_email') }}\" method=\"POST\" class=\"fos_user_resetting_request\">
    <div>
        <label for=\"username\">{{ 'resetting.request.username'|trans }}</label>
        <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
    </div>
    <div>
        <input type=\"submit\" value=\"{{ 'resetting.request.submit'|trans }}\" />
    </div>
</form>
", "FOSUserBundle:Resetting:request_content.html.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\app/Resources/FOSUserBundle/views/Resetting/request_content.html.twig");
    }
}
