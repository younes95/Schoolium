<?php

/* :enseignantsViews:enseignant.html.twig */
class __TwigTemplate_4b3ae297672ada7fdb0df482ac4b74073b4985627934b6066d7e65a35dca9627 extends Twig_Template
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
        $__internal_743e4384f7321d05b48f07cb33ecad07e5b58c9f81e19fde81081102fab3039d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_743e4384f7321d05b48f07cb33ecad07e5b58c9f81e19fde81081102fab3039d->enter($__internal_743e4384f7321d05b48f07cb33ecad07e5b58c9f81e19fde81081102fab3039d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":enseignantsViews:enseignant.html.twig"));

        $__internal_07e44d9508728d98b61f28e3ea95a2cd7dae1567cae8b85a1fe117f0d1d605c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07e44d9508728d98b61f28e3ea95a2cd7dae1567cae8b85a1fe117f0d1d605c2->enter($__internal_07e44d9508728d98b61f28e3ea95a2cd7dae1567cae8b85a1fe117f0d1d605c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":enseignantsViews:enseignant.html.twig"));

        // line 1
        echo " <li class=\"\"><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listEnseignants");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("navbar.link.link4"), "html", null, true);
        echo "<span class=\"sr-only\"></span></a></li>
";
        
        $__internal_743e4384f7321d05b48f07cb33ecad07e5b58c9f81e19fde81081102fab3039d->leave($__internal_743e4384f7321d05b48f07cb33ecad07e5b58c9f81e19fde81081102fab3039d_prof);

        
        $__internal_07e44d9508728d98b61f28e3ea95a2cd7dae1567cae8b85a1fe117f0d1d605c2->leave($__internal_07e44d9508728d98b61f28e3ea95a2cd7dae1567cae8b85a1fe117f0d1d605c2_prof);

    }

    public function getTemplateName()
    {
        return ":enseignantsViews:enseignant.html.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source(" <li class=\"\"><a href=\"{{ path('listEnseignants') }}\">{{'navbar.link.link4'|trans}}<span class=\"sr-only\"></span></a></li>
", ":enseignantsViews:enseignant.html.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\app/Resources\\views/enseignantsViews/enseignant.html.twig");
    }
}
