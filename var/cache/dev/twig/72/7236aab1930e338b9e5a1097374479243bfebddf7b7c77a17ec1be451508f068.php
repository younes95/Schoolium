<?php

/* SchoolBundle:Default:index.html.twig */
class __TwigTemplate_136a17ea5ee39cc86fb54faa68ac8c8d01157d90a7cda8c201e3ef29e2f3ee87 extends Twig_Template
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
        $__internal_2215873884ac19b35f6575392ed5a3ab87687f2028be234787c3cced1461513a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2215873884ac19b35f6575392ed5a3ab87687f2028be234787c3cced1461513a->enter($__internal_2215873884ac19b35f6575392ed5a3ab87687f2028be234787c3cced1461513a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SchoolBundle:Default:index.html.twig"));

        $__internal_3ffd0a6b74446d4af28b5e1b7b1b5100ce0ddbb612f48f70bf9ce9af9ba14e0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ffd0a6b74446d4af28b5e1b7b1b5100ce0ddbb612f48f70bf9ce9af9ba14e0e->enter($__internal_3ffd0a6b74446d4af28b5e1b7b1b5100ce0ddbb612f48f70bf9ce9af9ba14e0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SchoolBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_2215873884ac19b35f6575392ed5a3ab87687f2028be234787c3cced1461513a->leave($__internal_2215873884ac19b35f6575392ed5a3ab87687f2028be234787c3cced1461513a_prof);

        
        $__internal_3ffd0a6b74446d4af28b5e1b7b1b5100ce0ddbb612f48f70bf9ce9af9ba14e0e->leave($__internal_3ffd0a6b74446d4af28b5e1b7b1b5100ce0ddbb612f48f70bf9ce9af9ba14e0e_prof);

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
", "SchoolBundle:Default:index.html.twig", "/Applications/MAMP/htdocs/Symfony/src/SchoolBundle/Resources/views/Default/index.html.twig");
    }
}
