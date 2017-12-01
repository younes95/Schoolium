<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_d5f13b17d3bf94261c5e9b86745780376018cef8208aa10cce0800f586f30433 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_5d928f0d3cb3b05027387829ebedb0687f16dc68e9ee8c6700ad276ca3c577d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d928f0d3cb3b05027387829ebedb0687f16dc68e9ee8c6700ad276ca3c577d4->enter($__internal_5d928f0d3cb3b05027387829ebedb0687f16dc68e9ee8c6700ad276ca3c577d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_565d49ad7e391fad87ceba46ab282c664be3e7f3464441f964353edae15f9654 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_565d49ad7e391fad87ceba46ab282c664be3e7f3464441f964353edae15f9654->enter($__internal_565d49ad7e391fad87ceba46ab282c664be3e7f3464441f964353edae15f9654_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5d928f0d3cb3b05027387829ebedb0687f16dc68e9ee8c6700ad276ca3c577d4->leave($__internal_5d928f0d3cb3b05027387829ebedb0687f16dc68e9ee8c6700ad276ca3c577d4_prof);

        
        $__internal_565d49ad7e391fad87ceba46ab282c664be3e7f3464441f964353edae15f9654->leave($__internal_565d49ad7e391fad87ceba46ab282c664be3e7f3464441f964353edae15f9654_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b25343edf1ebd4c2f77d7ddecb7a9d30cdd37dbba8a4a76bd870f0f6ad293cbe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b25343edf1ebd4c2f77d7ddecb7a9d30cdd37dbba8a4a76bd870f0f6ad293cbe->enter($__internal_b25343edf1ebd4c2f77d7ddecb7a9d30cdd37dbba8a4a76bd870f0f6ad293cbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_996401289eb5b94243487045509ac9f37d36067dc9b0ad508b1f53bf440d7e49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_996401289eb5b94243487045509ac9f37d36067dc9b0ad508b1f53bf440d7e49->enter($__internal_996401289eb5b94243487045509ac9f37d36067dc9b0ad508b1f53bf440d7e49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_996401289eb5b94243487045509ac9f37d36067dc9b0ad508b1f53bf440d7e49->leave($__internal_996401289eb5b94243487045509ac9f37d36067dc9b0ad508b1f53bf440d7e49_prof);

        
        $__internal_b25343edf1ebd4c2f77d7ddecb7a9d30cdd37dbba8a4a76bd870f0f6ad293cbe->leave($__internal_b25343edf1ebd4c2f77d7ddecb7a9d30cdd37dbba8a4a76bd870f0f6ad293cbe_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\app/Resources/FOSUserBundle/views/Registration/register.html.twig");
    }
}
