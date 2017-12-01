<?php

/* @School/Default/index.html.twig */
class __TwigTemplate_a8afd1dce7bb31f089cf0ce227fd740fd72b6a681004b012d8ef7bf344dd9ffe extends Twig_Template
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
        $__internal_ed550fdc942c3cc399c1e16355de29d97af73e49e63ad23972889d6450b0e8fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed550fdc942c3cc399c1e16355de29d97af73e49e63ad23972889d6450b0e8fb->enter($__internal_ed550fdc942c3cc399c1e16355de29d97af73e49e63ad23972889d6450b0e8fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@School/Default/index.html.twig"));

        $__internal_781d0ae2ca142d71706a82265b8acf678028958f059ef91825680b9a7e56a6f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_781d0ae2ca142d71706a82265b8acf678028958f059ef91825680b9a7e56a6f7->enter($__internal_781d0ae2ca142d71706a82265b8acf678028958f059ef91825680b9a7e56a6f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@School/Default/index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_ed550fdc942c3cc399c1e16355de29d97af73e49e63ad23972889d6450b0e8fb->leave($__internal_ed550fdc942c3cc399c1e16355de29d97af73e49e63ad23972889d6450b0e8fb_prof);

        
        $__internal_781d0ae2ca142d71706a82265b8acf678028958f059ef91825680b9a7e56a6f7->leave($__internal_781d0ae2ca142d71706a82265b8acf678028958f059ef91825680b9a7e56a6f7_prof);

    }

    public function getTemplateName()
    {
        return "@School/Default/index.html.twig";
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
", "@School/Default/index.html.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\src\\SchoolBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
