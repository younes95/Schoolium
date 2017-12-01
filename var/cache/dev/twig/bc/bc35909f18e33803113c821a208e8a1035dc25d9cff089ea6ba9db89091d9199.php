<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_4bd0b9aa65688a53c23b37aed6b9e4f4ceb88b2ac35bc14e6a9447cfd4257854 extends Twig_Template
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
        $__internal_f07151f8d94c2898e74ba0998fcf5a69009dc272c9e99e74da7890b69114925f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f07151f8d94c2898e74ba0998fcf5a69009dc272c9e99e74da7890b69114925f->enter($__internal_f07151f8d94c2898e74ba0998fcf5a69009dc272c9e99e74da7890b69114925f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_f3ef3ff964f15daa939e64a59142d56ee99e306803711c5343e2178b4d707092 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3ef3ff964f15daa939e64a59142d56ee99e306803711c5343e2178b4d707092->enter($__internal_f3ef3ff964f15daa939e64a59142d56ee99e306803711c5343e2178b4d707092_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_f07151f8d94c2898e74ba0998fcf5a69009dc272c9e99e74da7890b69114925f->leave($__internal_f07151f8d94c2898e74ba0998fcf5a69009dc272c9e99e74da7890b69114925f_prof);

        
        $__internal_f3ef3ff964f15daa939e64a59142d56ee99e306803711c5343e2178b4d707092->leave($__internal_f3ef3ff964f15daa939e64a59142d56ee99e306803711c5343e2178b4d707092_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "@Twig/Exception/error.json.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.json.twig");
    }
}
