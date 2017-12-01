<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_5c64798516c1e831dcf0fa8083fe812f4716ff09bddb42a777d9869d656888dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_377914b0c0a9fe57f3723a2c20b52b8deb91719237801288107e9590ad5c248f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_377914b0c0a9fe57f3723a2c20b52b8deb91719237801288107e9590ad5c248f->enter($__internal_377914b0c0a9fe57f3723a2c20b52b8deb91719237801288107e9590ad5c248f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $__internal_c141420330774c68bd678e6a94abfa647a738eb3da67469989c80789f4ef0970 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c141420330774c68bd678e6a94abfa647a738eb3da67469989c80789f4ef0970->enter($__internal_c141420330774c68bd678e6a94abfa647a738eb3da67469989c80789f4ef0970_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_377914b0c0a9fe57f3723a2c20b52b8deb91719237801288107e9590ad5c248f->leave($__internal_377914b0c0a9fe57f3723a2c20b52b8deb91719237801288107e9590ad5c248f_prof);

        
        $__internal_c141420330774c68bd678e6a94abfa647a738eb3da67469989c80789f4ef0970->leave($__internal_c141420330774c68bd678e6a94abfa647a738eb3da67469989c80789f4ef0970_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c956b3868c237f7c90c9bdff76775e28151c6f567e525eae1d84634210f61a7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c956b3868c237f7c90c9bdff76775e28151c6f567e525eae1d84634210f61a7a->enter($__internal_c956b3868c237f7c90c9bdff76775e28151c6f567e525eae1d84634210f61a7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e87fc6f6dddd2fb42e56a52f810bbd19b87a0dfb285ee3179c7f6050357f8713 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e87fc6f6dddd2fb42e56a52f810bbd19b87a0dfb285ee3179c7f6050357f8713->enter($__internal_e87fc6f6dddd2fb42e56a52f810bbd19b87a0dfb285ee3179c7f6050357f8713_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_e87fc6f6dddd2fb42e56a52f810bbd19b87a0dfb285ee3179c7f6050357f8713->leave($__internal_e87fc6f6dddd2fb42e56a52f810bbd19b87a0dfb285ee3179c7f6050357f8713_prof);

        
        $__internal_c956b3868c237f7c90c9bdff76775e28151c6f567e525eae1d84634210f61a7a->leave($__internal_c956b3868c237f7c90c9bdff76775e28151c6f567e525eae1d84634210f61a7a_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/show.html.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\app\\Resources\\FOSUserBundle\\views\\Profile\\show.html.twig");
    }
}
