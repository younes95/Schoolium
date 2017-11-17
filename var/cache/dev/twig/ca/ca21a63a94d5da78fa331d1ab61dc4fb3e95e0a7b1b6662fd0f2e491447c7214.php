<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_9a92024f757c65d9974a3ea6d9d57aa60ec8d50559862acc3058792d84f9ec81 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_22c2fcb1e8acba51128d77b83451efe660ab1c62b2eddf64bcaf186d56348932 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22c2fcb1e8acba51128d77b83451efe660ab1c62b2eddf64bcaf186d56348932->enter($__internal_22c2fcb1e8acba51128d77b83451efe660ab1c62b2eddf64bcaf186d56348932_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_3b19bafec1b184381286e0e933bb2aa91856cdb1dfcd358677e3f1739e980d55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b19bafec1b184381286e0e933bb2aa91856cdb1dfcd358677e3f1739e980d55->enter($__internal_3b19bafec1b184381286e0e933bb2aa91856cdb1dfcd358677e3f1739e980d55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_22c2fcb1e8acba51128d77b83451efe660ab1c62b2eddf64bcaf186d56348932->leave($__internal_22c2fcb1e8acba51128d77b83451efe660ab1c62b2eddf64bcaf186d56348932_prof);

        
        $__internal_3b19bafec1b184381286e0e933bb2aa91856cdb1dfcd358677e3f1739e980d55->leave($__internal_3b19bafec1b184381286e0e933bb2aa91856cdb1dfcd358677e3f1739e980d55_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ebaff446a7b6ce24187c2558c65b067b562d9eaecdd3bdeaaa2715db605d5223 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebaff446a7b6ce24187c2558c65b067b562d9eaecdd3bdeaaa2715db605d5223->enter($__internal_ebaff446a7b6ce24187c2558c65b067b562d9eaecdd3bdeaaa2715db605d5223_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_978b270d212ccac8ed18a168a1da12f94d2e334a572e31b3ba32f2fae36361d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_978b270d212ccac8ed18a168a1da12f94d2e334a572e31b3ba32f2fae36361d1->enter($__internal_978b270d212ccac8ed18a168a1da12f94d2e334a572e31b3ba32f2fae36361d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_978b270d212ccac8ed18a168a1da12f94d2e334a572e31b3ba32f2fae36361d1->leave($__internal_978b270d212ccac8ed18a168a1da12f94d2e334a572e31b3ba32f2fae36361d1_prof);

        
        $__internal_ebaff446a7b6ce24187c2558c65b067b562d9eaecdd3bdeaaa2715db605d5223->leave($__internal_ebaff446a7b6ce24187c2558c65b067b562d9eaecdd3bdeaaa2715db605d5223_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
", "FOSUserBundle:Profile:edit.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/FOSUserBundle/views/Profile/edit.html.twig");
    }
}
