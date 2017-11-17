<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_d8e67cd7a8baa436751b8b9cd5abfda77c6e4a99db4ffd9cdec90a8aad6078fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b017aa2774f16414880c29b0ec1113b1c3cf48b4748c47a7b68b0b166a091580 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b017aa2774f16414880c29b0ec1113b1c3cf48b4748c47a7b68b0b166a091580->enter($__internal_b017aa2774f16414880c29b0ec1113b1c3cf48b4748c47a7b68b0b166a091580_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_7e79cbff0e697f6e9e6e9405e82b2098649b18d71facb65a30350c92d1e6864f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e79cbff0e697f6e9e6e9405e82b2098649b18d71facb65a30350c92d1e6864f->enter($__internal_7e79cbff0e697f6e9e6e9405e82b2098649b18d71facb65a30350c92d1e6864f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_b017aa2774f16414880c29b0ec1113b1c3cf48b4748c47a7b68b0b166a091580->leave($__internal_b017aa2774f16414880c29b0ec1113b1c3cf48b4748c47a7b68b0b166a091580_prof);

        
        $__internal_7e79cbff0e697f6e9e6e9405e82b2098649b18d71facb65a30350c92d1e6864f->leave($__internal_7e79cbff0e697f6e9e6e9405e82b2098649b18d71facb65a30350c92d1e6864f_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_0cdca155dfb4b36404eddf5059fa75b5a72edd493bae15b25a31773c74decc41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cdca155dfb4b36404eddf5059fa75b5a72edd493bae15b25a31773c74decc41->enter($__internal_0cdca155dfb4b36404eddf5059fa75b5a72edd493bae15b25a31773c74decc41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_38a400c8fb37fd7e4cda76b765ffab65e64f4f89dc8aeaaf6dcf3ead943674ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38a400c8fb37fd7e4cda76b765ffab65e64f4f89dc8aeaaf6dcf3ead943674ec->enter($__internal_38a400c8fb37fd7e4cda76b765ffab65e64f4f89dc8aeaaf6dcf3ead943674ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_38a400c8fb37fd7e4cda76b765ffab65e64f4f89dc8aeaaf6dcf3ead943674ec->leave($__internal_38a400c8fb37fd7e4cda76b765ffab65e64f4f89dc8aeaaf6dcf3ead943674ec_prof);

        
        $__internal_0cdca155dfb4b36404eddf5059fa75b5a72edd493bae15b25a31773c74decc41->leave($__internal_0cdca155dfb4b36404eddf5059fa75b5a72edd493bae15b25a31773c74decc41_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_c11a36d6d1c233eaa36db5e91081db64c7e3044255372301f415ebc217a798a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c11a36d6d1c233eaa36db5e91081db64c7e3044255372301f415ebc217a798a4->enter($__internal_c11a36d6d1c233eaa36db5e91081db64c7e3044255372301f415ebc217a798a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_02108aa0f8e9126499d58a8101c48c511020d30e6e22e2f3989a1c2f164af73e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02108aa0f8e9126499d58a8101c48c511020d30e6e22e2f3989a1c2f164af73e->enter($__internal_02108aa0f8e9126499d58a8101c48c511020d30e6e22e2f3989a1c2f164af73e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_02108aa0f8e9126499d58a8101c48c511020d30e6e22e2f3989a1c2f164af73e->leave($__internal_02108aa0f8e9126499d58a8101c48c511020d30e6e22e2f3989a1c2f164af73e_prof);

        
        $__internal_c11a36d6d1c233eaa36db5e91081db64c7e3044255372301f415ebc217a798a4->leave($__internal_c11a36d6d1c233eaa36db5e91081db64c7e3044255372301f415ebc217a798a4_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_d6839d9ef84962550ff9228ce7b4f44387398773024b73ccbd9b0d0d2362ceb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6839d9ef84962550ff9228ce7b4f44387398773024b73ccbd9b0d0d2362ceb7->enter($__internal_d6839d9ef84962550ff9228ce7b4f44387398773024b73ccbd9b0d0d2362ceb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_5027f70d6e8ce87ceaddbbece938f06c3603d647a85338ce65461dba455231d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5027f70d6e8ce87ceaddbbece938f06c3603d647a85338ce65461dba455231d9->enter($__internal_5027f70d6e8ce87ceaddbbece938f06c3603d647a85338ce65461dba455231d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_5027f70d6e8ce87ceaddbbece938f06c3603d647a85338ce65461dba455231d9->leave($__internal_5027f70d6e8ce87ceaddbbece938f06c3603d647a85338ce65461dba455231d9_prof);

        
        $__internal_d6839d9ef84962550ff9228ce7b4f44387398773024b73ccbd9b0d0d2362ceb7->leave($__internal_d6839d9ef84962550ff9228ce7b4f44387398773024b73ccbd9b0d0d2362ceb7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
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
{% block subject %}
{%- autoescape false -%}
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Resetting:email.txt.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/FOSUserBundle/views/Resetting/email.txt.twig");
    }
}
