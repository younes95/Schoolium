<?php

/* @FOSUser/Resetting/reset_content.html.twig */
class __TwigTemplate_323b274626820f3b0854369dfaa797b0a6a1c5add72ea4f789f02d54c079965e extends Twig_Template
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
        $__internal_54dc4a0dcca04a8b5be82eafabe8acc833539e6f0db2c2ef2086048d9c488884 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54dc4a0dcca04a8b5be82eafabe8acc833539e6f0db2c2ef2086048d9c488884->enter($__internal_54dc4a0dcca04a8b5be82eafabe8acc833539e6f0db2c2ef2086048d9c488884_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset_content.html.twig"));

        $__internal_1b1dd3a61d4eff581aa3a52b9b3cd1086e6ef876112f8f22f08273a3a53fad5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b1dd3a61d4eff581aa3a52b9b3cd1086e6ef876112f8f22f08273a3a53fad5b->enter($__internal_1b1dd3a61d4eff581aa3a52b9b3cd1086e6ef876112f8f22f08273a3a53fad5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_reset", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "attr" => array("class" => "fos_user_resetting_reset")));
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.reset.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_54dc4a0dcca04a8b5be82eafabe8acc833539e6f0db2c2ef2086048d9c488884->leave($__internal_54dc4a0dcca04a8b5be82eafabe8acc833539e6f0db2c2ef2086048d9c488884_prof);

        
        $__internal_1b1dd3a61d4eff581aa3a52b9b3cd1086e6ef876112f8f22f08273a3a53fad5b->leave($__internal_1b1dd3a61d4eff581aa3a52b9b3cd1086e6ef876112f8f22f08273a3a53fad5b_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 8,  37 => 6,  32 => 4,  28 => 3,  25 => 2,);
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

{{ form_start(form, { 'action': path('fos_user_resetting_reset', {'token': token}), 'attr': { 'class': 'fos_user_resetting_reset' } }) }}
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" value=\"{{ 'resetting.reset.submit'|trans }}\" />
    </div>
{{ form_end(form) }}
", "@FOSUser/Resetting/reset_content.html.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\app\\Resources\\FOSUserBundle\\views\\Resetting\\reset_content.html.twig");
    }
}
