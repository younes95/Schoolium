<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_2ec7402370cdd2d7938db9711335234f07427b47d164fade4bde4a0c2d52e42a extends Twig_Template
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
        $__internal_a653d529643dd9bc6514d8b93eef194a1da232ae4a9e864c70744f0a81e40f79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a653d529643dd9bc6514d8b93eef194a1da232ae4a9e864c70744f0a81e40f79->enter($__internal_a653d529643dd9bc6514d8b93eef194a1da232ae4a9e864c70744f0a81e40f79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_d3e205f3a3ba4cedbb2b18c846fffcc3fc1f28dcffd7182ef176ead7d4291698 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3e205f3a3ba4cedbb2b18c846fffcc3fc1f28dcffd7182ef176ead7d4291698->enter($__internal_d3e205f3a3ba4cedbb2b18c846fffcc3fc1f28dcffd7182ef176ead7d4291698_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_a653d529643dd9bc6514d8b93eef194a1da232ae4a9e864c70744f0a81e40f79->leave($__internal_a653d529643dd9bc6514d8b93eef194a1da232ae4a9e864c70744f0a81e40f79_prof);

        
        $__internal_d3e205f3a3ba4cedbb2b18c846fffcc3fc1f28dcffd7182ef176ead7d4291698->leave($__internal_d3e205f3a3ba4cedbb2b18c846fffcc3fc1f28dcffd7182ef176ead7d4291698_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.css.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.css.twig");
    }
}
