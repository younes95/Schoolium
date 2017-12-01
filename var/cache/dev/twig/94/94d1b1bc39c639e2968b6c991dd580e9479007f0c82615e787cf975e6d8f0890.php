<?php

/* SchoolBundle:Default:index.html.twig */
class __TwigTemplate_ba6b753a89face2115ac755d9c1c567ed1c5c0003f99597c10c733ea7c56610c extends Twig_Template
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
        $__internal_ae23da892e10eeaef1a2d25042f9c7e063bc3fe345239ad61fb7cf547b26883c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae23da892e10eeaef1a2d25042f9c7e063bc3fe345239ad61fb7cf547b26883c->enter($__internal_ae23da892e10eeaef1a2d25042f9c7e063bc3fe345239ad61fb7cf547b26883c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SchoolBundle:Default:index.html.twig"));

        $__internal_e90f5cc70e304b7f81d8b60ad59aee4e0409538daa1f1559d0ccf53758fa8985 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e90f5cc70e304b7f81d8b60ad59aee4e0409538daa1f1559d0ccf53758fa8985->enter($__internal_e90f5cc70e304b7f81d8b60ad59aee4e0409538daa1f1559d0ccf53758fa8985_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SchoolBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_ae23da892e10eeaef1a2d25042f9c7e063bc3fe345239ad61fb7cf547b26883c->leave($__internal_ae23da892e10eeaef1a2d25042f9c7e063bc3fe345239ad61fb7cf547b26883c_prof);

        
        $__internal_e90f5cc70e304b7f81d8b60ad59aee4e0409538daa1f1559d0ccf53758fa8985->leave($__internal_e90f5cc70e304b7f81d8b60ad59aee4e0409538daa1f1559d0ccf53758fa8985_prof);

    }

    public function getTemplateName()
    {
        return "SchoolBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Hello World!
", "SchoolBundle:Default:index.html.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\src\\SchoolBundle/Resources/views/Default/index.html.twig");
    }
}
