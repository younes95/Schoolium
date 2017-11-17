<?php

/* :parentsViews:parent.html.twig */
class __TwigTemplate_70f841b10bf6f160a58a2032ba00da46c91c61fe3bddc8f1b691e33f1ba70632 extends Twig_Template
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
        $__internal_8ada7a724b33870385cda308f1577d338e00297f1d9dd8ddeba3389226702031 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ada7a724b33870385cda308f1577d338e00297f1d9dd8ddeba3389226702031->enter($__internal_8ada7a724b33870385cda308f1577d338e00297f1d9dd8ddeba3389226702031_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":parentsViews:parent.html.twig"));

        $__internal_6a9288d98a4ec92e3235db1ffdd5b45dec373a37fe765810515c5bf9f5911b75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a9288d98a4ec92e3235db1ffdd5b45dec373a37fe765810515c5bf9f5911b75->enter($__internal_6a9288d98a4ec92e3235db1ffdd5b45dec373a37fe765810515c5bf9f5911b75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":parentsViews:parent.html.twig"));

        // line 1
        echo "
  <li class=\"\"><a href=\"";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listEnseignants");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("navbar.link.link4"), "html", null, true);
        echo "<span class=\"sr-only\"></span></a></li>";
        
        $__internal_8ada7a724b33870385cda308f1577d338e00297f1d9dd8ddeba3389226702031->leave($__internal_8ada7a724b33870385cda308f1577d338e00297f1d9dd8ddeba3389226702031_prof);

        
        $__internal_6a9288d98a4ec92e3235db1ffdd5b45dec373a37fe765810515c5bf9f5911b75->leave($__internal_6a9288d98a4ec92e3235db1ffdd5b45dec373a37fe765810515c5bf9f5911b75_prof);

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
  <li class=\"\"><a href=\"{{ path('listEnseignants') }}\">{{'navbar.link.link4'|trans}}<span class=\"sr-only\"></span></a></li>", ":parentsViews:parent.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/views/parentsViews/parent.html.twig");
    }
}
