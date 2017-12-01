<?php

/* parentsViews/parent.html.twig */
class __TwigTemplate_f5a1f66891d4e6a2a56640890fd6697b7feb59f2120d33946b749f5db35c2667 extends Twig_Template
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
        $__internal_25953ce99f0994650af8715b8705759f606067db6ebbb3bb67214cbd58ffdc40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25953ce99f0994650af8715b8705759f606067db6ebbb3bb67214cbd58ffdc40->enter($__internal_25953ce99f0994650af8715b8705759f606067db6ebbb3bb67214cbd58ffdc40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "parentsViews/parent.html.twig"));

        $__internal_5c31a6fc53282cbd275cc009233610b5cab076db554c0d0856c8fb5dd9db8e42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c31a6fc53282cbd275cc009233610b5cab076db554c0d0856c8fb5dd9db8e42->enter($__internal_5c31a6fc53282cbd275cc009233610b5cab076db554c0d0856c8fb5dd9db8e42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "parentsViews/parent.html.twig"));

        // line 1
        echo "
  <li class=\"\"><a href=\"";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listEnseignants");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("navbar.link.link4"), "html", null, true);
        echo "<span class=\"sr-only\"></span></a></li>";
        
        $__internal_25953ce99f0994650af8715b8705759f606067db6ebbb3bb67214cbd58ffdc40->leave($__internal_25953ce99f0994650af8715b8705759f606067db6ebbb3bb67214cbd58ffdc40_prof);

        
        $__internal_5c31a6fc53282cbd275cc009233610b5cab076db554c0d0856c8fb5dd9db8e42->leave($__internal_5c31a6fc53282cbd275cc009233610b5cab076db554c0d0856c8fb5dd9db8e42_prof);

    }

    public function getTemplateName()
    {
        return "parentsViews/parent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
  <li class=\"\"><a href=\"{{ path('listEnseignants') }}\">{{'navbar.link.link4'|trans}}<span class=\"sr-only\"></span></a></li>", "parentsViews/parent.html.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\app\\Resources\\views\\parentsViews\\parent.html.twig");
    }
}
