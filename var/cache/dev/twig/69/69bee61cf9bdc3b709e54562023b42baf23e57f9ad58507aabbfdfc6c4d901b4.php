<?php

/* @FOSUser/Profile/edit_content.html.twig */
class __TwigTemplate_51151d243409c7ea69cd6f35f973525cb85342180188f89eaf0e60409e121504 extends Twig_Template
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
        $__internal_9a66a872be82a28e4b5c19c24e17074dbd2bc3245ed29a6d3010a01d238a7f22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a66a872be82a28e4b5c19c24e17074dbd2bc3245ed29a6d3010a01d238a7f22->enter($__internal_9a66a872be82a28e4b5c19c24e17074dbd2bc3245ed29a6d3010a01d238a7f22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit_content.html.twig"));

        $__internal_81aa4f511cb2d153261d7ea412d46a6d34d3d5748a6dca6965319483733b3c26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81aa4f511cb2d153261d7ea412d46a6d34d3d5748a6dca6965319483733b3c26->enter($__internal_81aa4f511cb2d153261d7ea412d46a6d34d3d5748a6dca6965319483733b3c26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit"), "attr" => array("class" => "fos_user_profile_edit")));
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_9a66a872be82a28e4b5c19c24e17074dbd2bc3245ed29a6d3010a01d238a7f22->leave($__internal_9a66a872be82a28e4b5c19c24e17074dbd2bc3245ed29a6d3010a01d238a7f22_prof);

        
        $__internal_81aa4f511cb2d153261d7ea412d46a6d34d3d5748a6dca6965319483733b3c26->leave($__internal_81aa4f511cb2d153261d7ea412d46a6d34d3d5748a6dca6965319483733b3c26_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit_content.html.twig";
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

{{ form_start(form, { 'action': path('fos_user_profile_edit'), 'attr': { 'class': 'fos_user_profile_edit' } }) }}
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" value=\"{{ 'profile.edit.submit'|trans }}\" />
    </div>
{{ form_end(form) }}
", "@FOSUser/Profile/edit_content.html.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\app\\Resources\\FOSUserBundle\\views\\Profile\\edit_content.html.twig");
    }
}
