<?php

/* enseignantsViews/enseignant.html.twig */
class __TwigTemplate_8ecc8766c49d808d8bf6469f37ffa0c08257d1b8fc9ecfd24aa8d53b9a2e4e96 extends Twig_Template
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
        $__internal_8689c18bde91422d464294a55a14b1f61f167d6488512d27ccdb57ddcf1a4baf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8689c18bde91422d464294a55a14b1f61f167d6488512d27ccdb57ddcf1a4baf->enter($__internal_8689c18bde91422d464294a55a14b1f61f167d6488512d27ccdb57ddcf1a4baf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "enseignantsViews/enseignant.html.twig"));

        $__internal_ea8cb9c36a8daa9293e56b354eeb01e38949fcc06bdc7aec12fa2b9563fa5dc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea8cb9c36a8daa9293e56b354eeb01e38949fcc06bdc7aec12fa2b9563fa5dc7->enter($__internal_ea8cb9c36a8daa9293e56b354eeb01e38949fcc06bdc7aec12fa2b9563fa5dc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "enseignantsViews/enseignant.html.twig"));

        // line 1
        echo " <li class=\"\"><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listEnseignants");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("navbar.link.link4"), "html", null, true);
        echo "<span class=\"sr-only\"></span></a></li>
";
        
        $__internal_8689c18bde91422d464294a55a14b1f61f167d6488512d27ccdb57ddcf1a4baf->leave($__internal_8689c18bde91422d464294a55a14b1f61f167d6488512d27ccdb57ddcf1a4baf_prof);

        
        $__internal_ea8cb9c36a8daa9293e56b354eeb01e38949fcc06bdc7aec12fa2b9563fa5dc7->leave($__internal_ea8cb9c36a8daa9293e56b354eeb01e38949fcc06bdc7aec12fa2b9563fa5dc7_prof);

    }

    public function getTemplateName()
    {
        return "enseignantsViews/enseignant.html.twig";
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
", "enseignantsViews/enseignant.html.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\app\\Resources\\views\\enseignantsViews\\enseignant.html.twig");
    }
}
