<?php

/* classesViews/eleves.html.twig */
class __TwigTemplate_aa996a7c43ceb54f4c9fa52a8271398f580b4923135ee4a223869e82185ed2d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "classesViews/eleves.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9c206dec22fdaebb206549dcba1ad93096de69d6de96cbdba536c8874783b819 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c206dec22fdaebb206549dcba1ad93096de69d6de96cbdba536c8874783b819->enter($__internal_9c206dec22fdaebb206549dcba1ad93096de69d6de96cbdba536c8874783b819_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "classesViews/eleves.html.twig"));

        $__internal_c93810f50bab8c79109f54bd8cf2dd25a243f89461f323e9dab6820cfe2f0cf2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c93810f50bab8c79109f54bd8cf2dd25a243f89461f323e9dab6820cfe2f0cf2->enter($__internal_c93810f50bab8c79109f54bd8cf2dd25a243f89461f323e9dab6820cfe2f0cf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "classesViews/eleves.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c206dec22fdaebb206549dcba1ad93096de69d6de96cbdba536c8874783b819->leave($__internal_9c206dec22fdaebb206549dcba1ad93096de69d6de96cbdba536c8874783b819_prof);

        
        $__internal_c93810f50bab8c79109f54bd8cf2dd25a243f89461f323e9dab6820cfe2f0cf2->leave($__internal_c93810f50bab8c79109f54bd8cf2dd25a243f89461f323e9dab6820cfe2f0cf2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_313362c315a05fb1c2ae44c4c16a88e4cbc8aa8c88ae4e459f79f0b03713944f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_313362c315a05fb1c2ae44c4c16a88e4cbc8aa8c88ae4e459f79f0b03713944f->enter($__internal_313362c315a05fb1c2ae44c4c16a88e4cbc8aa8c88ae4e459f79f0b03713944f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8d9e51286fa61569e7220ac4218247d5c7089df4974dc79adab9e2e6bfccf25c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d9e51286fa61569e7220ac4218247d5c7089df4974dc79adab9e2e6bfccf25c->enter($__internal_8d9e51286fa61569e7220ac4218247d5c7089df4974dc79adab9e2e6bfccf25c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("teachers"), "html", null, true);
        echo "</h1>
";
        if ($this->env->isDebug()) {
            // line 5
            \Symfony\Component\VarDumper\VarDumper::dump((isset($context["eleves"]) ? $context["eleves"] : $this->getContext($context, "eleves")));
        }
        // line 6
        echo "\t<ol>
\t\t
\t</ol>
\t
";
        
        $__internal_8d9e51286fa61569e7220ac4218247d5c7089df4974dc79adab9e2e6bfccf25c->leave($__internal_8d9e51286fa61569e7220ac4218247d5c7089df4974dc79adab9e2e6bfccf25c_prof);

        
        $__internal_313362c315a05fb1c2ae44c4c16a88e4cbc8aa8c88ae4e459f79f0b03713944f->leave($__internal_313362c315a05fb1c2ae44c4c16a88e4cbc8aa8c88ae4e459f79f0b03713944f_prof);

    }

    public function getTemplateName()
    {
        return "classesViews/eleves.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 6,  57 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
<h1>{{'list'|trans}} {{'teachers'|trans}}</h1>
{% dump(eleves) %}
\t<ol>
\t\t
\t</ol>
\t
{% endblock %}", "classesViews/eleves.html.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\app\\Resources\\views\\classesViews\\eleves.html.twig");
    }
}
