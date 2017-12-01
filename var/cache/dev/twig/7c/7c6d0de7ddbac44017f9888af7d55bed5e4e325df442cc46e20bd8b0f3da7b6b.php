<?php

/* :parentsViews:parent.html.twig */
class __TwigTemplate_bb1e2dc9b6c665dbfdec530e9a80f6edab8c0721435ce60ceedb4cd91ae01eb7 extends Twig_Template
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
        $__internal_fc026ee81783056aa1404eb7cac21838e48d8bb462946d4df0312fde1830ca8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc026ee81783056aa1404eb7cac21838e48d8bb462946d4df0312fde1830ca8d->enter($__internal_fc026ee81783056aa1404eb7cac21838e48d8bb462946d4df0312fde1830ca8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":parentsViews:parent.html.twig"));

        $__internal_ae003875812ce55e74c91e0d5c4c5d3d593146f44f278440a518c41cacd79220 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae003875812ce55e74c91e0d5c4c5d3d593146f44f278440a518c41cacd79220->enter($__internal_ae003875812ce55e74c91e0d5c4c5d3d593146f44f278440a518c41cacd79220_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":parentsViews:parent.html.twig"));

        // line 1
        echo "
  <li class=\"\"><a href=\"";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listEnseignants");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("navbar.link.link4"), "html", null, true);
        echo "<span class=\"sr-only\"></span></a></li>";
        
        $__internal_fc026ee81783056aa1404eb7cac21838e48d8bb462946d4df0312fde1830ca8d->leave($__internal_fc026ee81783056aa1404eb7cac21838e48d8bb462946d4df0312fde1830ca8d_prof);

        
        $__internal_ae003875812ce55e74c91e0d5c4c5d3d593146f44f278440a518c41cacd79220->leave($__internal_ae003875812ce55e74c91e0d5c4c5d3d593146f44f278440a518c41cacd79220_prof);

    }

    public function getTemplateName()
    {
        return ":parentsViews:parent.html.twig";
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
  <li class=\"\"><a href=\"{{ path('listEnseignants') }}\">{{'navbar.link.link4'|trans}}<span class=\"sr-only\"></span></a></li>", ":parentsViews:parent.html.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\app/Resources\\views/parentsViews/parent.html.twig");
    }
}
