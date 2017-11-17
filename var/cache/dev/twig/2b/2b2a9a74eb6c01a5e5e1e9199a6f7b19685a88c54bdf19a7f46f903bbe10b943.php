<?php

/* :enseignantsViews:enseignant.html.twig */
class __TwigTemplate_8f8822dd60787f2f41874a8d930689e221c3d4dc2871ed75d60a84fddfa26b33 extends Twig_Template
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
        $__internal_f2f0d4bba44c5e749a427c98b8dca6f4ef883fe2c0be0e6827f5d4815a4e3b7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2f0d4bba44c5e749a427c98b8dca6f4ef883fe2c0be0e6827f5d4815a4e3b7c->enter($__internal_f2f0d4bba44c5e749a427c98b8dca6f4ef883fe2c0be0e6827f5d4815a4e3b7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":enseignantsViews:enseignant.html.twig"));

        $__internal_9c4c34f2eed5556f8d94acf26fa13fcf2527beb090ab0e2c51ed2afafd5402ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c4c34f2eed5556f8d94acf26fa13fcf2527beb090ab0e2c51ed2afafd5402ee->enter($__internal_9c4c34f2eed5556f8d94acf26fa13fcf2527beb090ab0e2c51ed2afafd5402ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":enseignantsViews:enseignant.html.twig"));

        // line 1
        echo " <li class=\"\"><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listEnseignants");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("navbar.link.link4"), "html", null, true);
        echo "<span class=\"sr-only\"></span></a></li>
";
        
        $__internal_f2f0d4bba44c5e749a427c98b8dca6f4ef883fe2c0be0e6827f5d4815a4e3b7c->leave($__internal_f2f0d4bba44c5e749a427c98b8dca6f4ef883fe2c0be0e6827f5d4815a4e3b7c_prof);

        
        $__internal_9c4c34f2eed5556f8d94acf26fa13fcf2527beb090ab0e2c51ed2afafd5402ee->leave($__internal_9c4c34f2eed5556f8d94acf26fa13fcf2527beb090ab0e2c51ed2afafd5402ee_prof);

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
", ":enseignantsViews:enseignant.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/views/enseignantsViews/enseignant.html.twig");
    }
}
