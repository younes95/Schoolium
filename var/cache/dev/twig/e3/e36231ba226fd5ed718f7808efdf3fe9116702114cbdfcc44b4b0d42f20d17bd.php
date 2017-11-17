<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_e8a4d2f5ffc0824be4849e2a7308600ec1b8244575199887552a4b43278d9727 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_842a55d8c38251f67c05195b22c7579b1892056dc71bc4c7554f38b1b60b8d76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_842a55d8c38251f67c05195b22c7579b1892056dc71bc4c7554f38b1b60b8d76->enter($__internal_842a55d8c38251f67c05195b22c7579b1892056dc71bc4c7554f38b1b60b8d76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_8bc458840d4ef7965dab10472278af9ce30ab9e0f74e7e4b37d0cb98f9ccf828 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bc458840d4ef7965dab10472278af9ce30ab9e0f74e7e4b37d0cb98f9ccf828->enter($__internal_8bc458840d4ef7965dab10472278af9ce30ab9e0f74e7e4b37d0cb98f9ccf828_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_842a55d8c38251f67c05195b22c7579b1892056dc71bc4c7554f38b1b60b8d76->leave($__internal_842a55d8c38251f67c05195b22c7579b1892056dc71bc4c7554f38b1b60b8d76_prof);

        
        $__internal_8bc458840d4ef7965dab10472278af9ce30ab9e0f74e7e4b37d0cb98f9ccf828->leave($__internal_8bc458840d4ef7965dab10472278af9ce30ab9e0f74e7e4b37d0cb98f9ccf828_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fcfb41c63820e0b2a731f1895322b8fdd4d0fc1be1c68630c6ff2e213f0fedec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcfb41c63820e0b2a731f1895322b8fdd4d0fc1be1c68630c6ff2e213f0fedec->enter($__internal_fcfb41c63820e0b2a731f1895322b8fdd4d0fc1be1c68630c6ff2e213f0fedec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4526f13031a69b1f4ea252db239b5472cc47957abd5b38698f53585411765d52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4526f13031a69b1f4ea252db239b5472cc47957abd5b38698f53585411765d52->enter($__internal_4526f13031a69b1f4ea252db239b5472cc47957abd5b38698f53585411765d52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_4526f13031a69b1f4ea252db239b5472cc47957abd5b38698f53585411765d52->leave($__internal_4526f13031a69b1f4ea252db239b5472cc47957abd5b38698f53585411765d52_prof);

        
        $__internal_fcfb41c63820e0b2a731f1895322b8fdd4d0fc1be1c68630c6ff2e213f0fedec->leave($__internal_fcfb41c63820e0b2a731f1895322b8fdd4d0fc1be1c68630c6ff2e213f0fedec_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/FOSUserBundle/views/Group/new.html.twig");
    }
}
