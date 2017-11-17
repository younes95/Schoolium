<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_209f9b1dd92199514a613c8d869d57bfd31d9b10d21be4e5439ebb6fe860f980 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_518aafd926e8c09602999ad04b9db450586073fc32085a9a9a7ce49c0e6db0fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_518aafd926e8c09602999ad04b9db450586073fc32085a9a9a7ce49c0e6db0fd->enter($__internal_518aafd926e8c09602999ad04b9db450586073fc32085a9a9a7ce49c0e6db0fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_c4c2b19595c2c71429d7aa07dc37dd6dc00e3e489fc43cf44a4031ec7a2df092 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4c2b19595c2c71429d7aa07dc37dd6dc00e3e489fc43cf44a4031ec7a2df092->enter($__internal_c4c2b19595c2c71429d7aa07dc37dd6dc00e3e489fc43cf44a4031ec7a2df092_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_518aafd926e8c09602999ad04b9db450586073fc32085a9a9a7ce49c0e6db0fd->leave($__internal_518aafd926e8c09602999ad04b9db450586073fc32085a9a9a7ce49c0e6db0fd_prof);

        
        $__internal_c4c2b19595c2c71429d7aa07dc37dd6dc00e3e489fc43cf44a4031ec7a2df092->leave($__internal_c4c2b19595c2c71429d7aa07dc37dd6dc00e3e489fc43cf44a4031ec7a2df092_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c4272e95b1b21b00208b46d6466ec77ffdce5011d2ba7c3bc10137b02303ad33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4272e95b1b21b00208b46d6466ec77ffdce5011d2ba7c3bc10137b02303ad33->enter($__internal_c4272e95b1b21b00208b46d6466ec77ffdce5011d2ba7c3bc10137b02303ad33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_898b097a02a33053b669dc9410134f80702358b1602bf624f72bdcb27ecfecb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_898b097a02a33053b669dc9410134f80702358b1602bf624f72bdcb27ecfecb6->enter($__internal_898b097a02a33053b669dc9410134f80702358b1602bf624f72bdcb27ecfecb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_898b097a02a33053b669dc9410134f80702358b1602bf624f72bdcb27ecfecb6->leave($__internal_898b097a02a33053b669dc9410134f80702358b1602bf624f72bdcb27ecfecb6_prof);

        
        $__internal_c4272e95b1b21b00208b46d6466ec77ffdce5011d2ba7c3bc10137b02303ad33->leave($__internal_c4272e95b1b21b00208b46d6466ec77ffdce5011d2ba7c3bc10137b02303ad33_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\app\\Resources\\FOSUserBundle\\views\\Security\\login.html.twig");
    }
}
