<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_37a56eb3377ba02b5a78d394d023ca313219f29ea8c4a4311e3ba18a7efcb3c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_996962f00d6bc34255fa4992704a51409edfdc3fbb31ebd14728588f631c8f30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_996962f00d6bc34255fa4992704a51409edfdc3fbb31ebd14728588f631c8f30->enter($__internal_996962f00d6bc34255fa4992704a51409edfdc3fbb31ebd14728588f631c8f30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $__internal_f4ae288c2f41bfcb385b563879dd367e72262894d245c9eb28f26d28e932f1d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4ae288c2f41bfcb385b563879dd367e72262894d245c9eb28f26d28e932f1d7->enter($__internal_f4ae288c2f41bfcb385b563879dd367e72262894d245c9eb28f26d28e932f1d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_996962f00d6bc34255fa4992704a51409edfdc3fbb31ebd14728588f631c8f30->leave($__internal_996962f00d6bc34255fa4992704a51409edfdc3fbb31ebd14728588f631c8f30_prof);

        
        $__internal_f4ae288c2f41bfcb385b563879dd367e72262894d245c9eb28f26d28e932f1d7->leave($__internal_f4ae288c2f41bfcb385b563879dd367e72262894d245c9eb28f26d28e932f1d7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d37e8ac0259ab1266363f1e3e9b33396749e30948a0366127a13bca39714bda9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d37e8ac0259ab1266363f1e3e9b33396749e30948a0366127a13bca39714bda9->enter($__internal_d37e8ac0259ab1266363f1e3e9b33396749e30948a0366127a13bca39714bda9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_75bd7d9bca55a5e16857b329fd55f9f583dae786590bd7073597dff9a0ae2e42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75bd7d9bca55a5e16857b329fd55f9f583dae786590bd7073597dff9a0ae2e42->enter($__internal_75bd7d9bca55a5e16857b329fd55f9f583dae786590bd7073597dff9a0ae2e42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_75bd7d9bca55a5e16857b329fd55f9f583dae786590bd7073597dff9a0ae2e42->leave($__internal_75bd7d9bca55a5e16857b329fd55f9f583dae786590bd7073597dff9a0ae2e42_prof);

        
        $__internal_d37e8ac0259ab1266363f1e3e9b33396749e30948a0366127a13bca39714bda9->leave($__internal_d37e8ac0259ab1266363f1e3e9b33396749e30948a0366127a13bca39714bda9_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/edit.html.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\app\\Resources\\FOSUserBundle\\views\\Profile\\edit.html.twig");
    }
}
