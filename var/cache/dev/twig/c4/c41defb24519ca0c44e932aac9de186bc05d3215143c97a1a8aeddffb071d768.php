<?php

/* @FOSUser/Resetting/check_email.html.twig */
class __TwigTemplate_a7ffe48cb1854c80b3cb01f370459f94abdaa54999d663e1f14d55885ac85e6b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/check_email.html.twig", 1);
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
        $__internal_a75ccf37a5371989c111c1367cb69dcac86101c0c75a2a7a14b5b0290d02d462 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a75ccf37a5371989c111c1367cb69dcac86101c0c75a2a7a14b5b0290d02d462->enter($__internal_a75ccf37a5371989c111c1367cb69dcac86101c0c75a2a7a14b5b0290d02d462_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/check_email.html.twig"));

        $__internal_3ddd6a04d10f460b3ff062ffb327969253da8645038e22c1db4c5c3b00a8ae0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ddd6a04d10f460b3ff062ffb327969253da8645038e22c1db4c5c3b00a8ae0d->enter($__internal_3ddd6a04d10f460b3ff062ffb327969253da8645038e22c1db4c5c3b00a8ae0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a75ccf37a5371989c111c1367cb69dcac86101c0c75a2a7a14b5b0290d02d462->leave($__internal_a75ccf37a5371989c111c1367cb69dcac86101c0c75a2a7a14b5b0290d02d462_prof);

        
        $__internal_3ddd6a04d10f460b3ff062ffb327969253da8645038e22c1db4c5c3b00a8ae0d->leave($__internal_3ddd6a04d10f460b3ff062ffb327969253da8645038e22c1db4c5c3b00a8ae0d_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3b89b262e79f50c60748bd26f5e1c3aa10e9ca9213fa7fb9d01b303599e01fb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b89b262e79f50c60748bd26f5e1c3aa10e9ca9213fa7fb9d01b303599e01fb1->enter($__internal_3b89b262e79f50c60748bd26f5e1c3aa10e9ca9213fa7fb9d01b303599e01fb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_785744274c91649526658cfb9990ddbc9fa09827eb7f60213f0af6dd23d09a3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_785744274c91649526658cfb9990ddbc9fa09827eb7f60213f0af6dd23d09a3b->enter($__internal_785744274c91649526658cfb9990ddbc9fa09827eb7f60213f0af6dd23d09a3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) ? $context["tokenLifetime"] : $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_785744274c91649526658cfb9990ddbc9fa09827eb7f60213f0af6dd23d09a3b->leave($__internal_785744274c91649526658cfb9990ddbc9fa09827eb7f60213f0af6dd23d09a3b_prof);

        
        $__internal_3b89b262e79f50c60748bd26f5e1c3aa10e9ca9213fa7fb9d01b303599e01fb1->leave($__internal_3b89b262e79f50c60748bd26f5e1c3aa10e9ca9213fa7fb9d01b303599e01fb1_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
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
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "@FOSUser/Resetting/check_email.html.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\app\\Resources\\FOSUserBundle\\views\\Resetting\\check_email.html.twig");
    }
}
