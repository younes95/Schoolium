<?php

/* @FOSUser/Resetting/request_content.html.twig */
class __TwigTemplate_3be9eeb203cf37d0262069a138bd90b3d980318f511cf3fcd7d164752e2ea783 extends Twig_Template
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
        $__internal_f2be057fbc539c8a8b908a1c63e671751906553f4a76f7f496e8d5d1a76b1c1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2be057fbc539c8a8b908a1c63e671751906553f4a76f7f496e8d5d1a76b1c1a->enter($__internal_f2be057fbc539c8a8b908a1c63e671751906553f4a76f7f496e8d5d1a76b1c1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request_content.html.twig"));

        $__internal_e0fc0fc3ba31dca77ebc1ef890d3555335709783dc58de4f9d158f48b4e5a47c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0fc0fc3ba31dca77ebc1ef890d3555335709783dc58de4f9d158f48b4e5a47c->enter($__internal_e0fc0fc3ba31dca77ebc1ef890d3555335709783dc58de4f9d158f48b4e5a47c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request_content.html.twig"));

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
        
        $__internal_f2be057fbc539c8a8b908a1c63e671751906553f4a76f7f496e8d5d1a76b1c1a->leave($__internal_f2be057fbc539c8a8b908a1c63e671751906553f4a76f7f496e8d5d1a76b1c1a_prof);

        
        $__internal_e0fc0fc3ba31dca77ebc1ef890d3555335709783dc58de4f9d158f48b4e5a47c->leave($__internal_e0fc0fc3ba31dca77ebc1ef890d3555335709783dc58de4f9d158f48b4e5a47c_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request_content.html.twig";
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
", "@FOSUser/Resetting/request_content.html.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\app\\Resources\\FOSUserBundle\\views\\Resetting\\request_content.html.twig");
    }
}
