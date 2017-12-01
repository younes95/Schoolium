<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_72715f3f9b43be9551e560ea5e04186fdcc2c36da980752869d46c6c98aa4c7e extends Twig_Template
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
        $__internal_70498fbcdef94ac7ab3c21c45133246a9ce74f24c86be4f0788a36b3bb87c1fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70498fbcdef94ac7ab3c21c45133246a9ce74f24c86be4f0788a36b3bb87c1fb->enter($__internal_70498fbcdef94ac7ab3c21c45133246a9ce74f24c86be4f0788a36b3bb87c1fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_4f879ea7e36879ddd0a5ec36fac4f2239afca4a1fc8e3dd9e47f45140935f740 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f879ea7e36879ddd0a5ec36fac4f2239afca4a1fc8e3dd9e47f45140935f740->enter($__internal_4f879ea7e36879ddd0a5ec36fac4f2239afca4a1fc8e3dd9e47f45140935f740_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_70498fbcdef94ac7ab3c21c45133246a9ce74f24c86be4f0788a36b3bb87c1fb->leave($__internal_70498fbcdef94ac7ab3c21c45133246a9ce74f24c86be4f0788a36b3bb87c1fb_prof);

        
        $__internal_4f879ea7e36879ddd0a5ec36fac4f2239afca4a1fc8e3dd9e47f45140935f740->leave($__internal_4f879ea7e36879ddd0a5ec36fac4f2239afca4a1fc8e3dd9e47f45140935f740_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "@Twig/Exception/error.txt.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.txt.twig");
    }
}
