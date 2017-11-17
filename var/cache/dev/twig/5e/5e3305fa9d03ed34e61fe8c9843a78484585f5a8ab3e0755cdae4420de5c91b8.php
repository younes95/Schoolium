<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_a5f9c64f9852860a5200e02bc60eff39256fd10b82e3fac883acaafd1f6c6b54 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_23a78c6210c2c5c7c0025640a628c1f0fb72c651801bea968abc7040173d1c88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23a78c6210c2c5c7c0025640a628c1f0fb72c651801bea968abc7040173d1c88->enter($__internal_23a78c6210c2c5c7c0025640a628c1f0fb72c651801bea968abc7040173d1c88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_84dbc477405809b2bc870faba7c996a12dba70c3342b4bb7bfd8789c256fb191 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84dbc477405809b2bc870faba7c996a12dba70c3342b4bb7bfd8789c256fb191->enter($__internal_84dbc477405809b2bc870faba7c996a12dba70c3342b4bb7bfd8789c256fb191_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_23a78c6210c2c5c7c0025640a628c1f0fb72c651801bea968abc7040173d1c88->leave($__internal_23a78c6210c2c5c7c0025640a628c1f0fb72c651801bea968abc7040173d1c88_prof);

        
        $__internal_84dbc477405809b2bc870faba7c996a12dba70c3342b4bb7bfd8789c256fb191->leave($__internal_84dbc477405809b2bc870faba7c996a12dba70c3342b4bb7bfd8789c256fb191_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_498cd22ee872eaad53644abd44675eadd6828b90bcb328e2bbdcfe911062fbba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_498cd22ee872eaad53644abd44675eadd6828b90bcb328e2bbdcfe911062fbba->enter($__internal_498cd22ee872eaad53644abd44675eadd6828b90bcb328e2bbdcfe911062fbba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_7b1152f2efeac2c9bf9094adb8b86e01bd8609e3e88c3c01473ed031aa922696 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b1152f2efeac2c9bf9094adb8b86e01bd8609e3e88c3c01473ed031aa922696->enter($__internal_7b1152f2efeac2c9bf9094adb8b86e01bd8609e3e88c3c01473ed031aa922696_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_7b1152f2efeac2c9bf9094adb8b86e01bd8609e3e88c3c01473ed031aa922696->leave($__internal_7b1152f2efeac2c9bf9094adb8b86e01bd8609e3e88c3c01473ed031aa922696_prof);

        
        $__internal_498cd22ee872eaad53644abd44675eadd6828b90bcb328e2bbdcfe911062fbba->leave($__internal_498cd22ee872eaad53644abd44675eadd6828b90bcb328e2bbdcfe911062fbba_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
", "FOSUserBundle:Profile:show.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/FOSUserBundle/views/Profile/show.html.twig");
    }
}
