<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_b1ae45e6c525af639d29c6ee237b9149c3c15a6d09b3bcb07fc13f114b2cf538 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f46c938bd0aea9eae6dfcba6deb4c6126d2dfc7ed1c38244e543416643eb802e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f46c938bd0aea9eae6dfcba6deb4c6126d2dfc7ed1c38244e543416643eb802e->enter($__internal_f46c938bd0aea9eae6dfcba6deb4c6126d2dfc7ed1c38244e543416643eb802e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_9c42157d443ede3aee23e39b3a509a0d05e90103727328032265c5c52ab2570e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c42157d443ede3aee23e39b3a509a0d05e90103727328032265c5c52ab2570e->enter($__internal_9c42157d443ede3aee23e39b3a509a0d05e90103727328032265c5c52ab2570e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_f46c938bd0aea9eae6dfcba6deb4c6126d2dfc7ed1c38244e543416643eb802e->leave($__internal_f46c938bd0aea9eae6dfcba6deb4c6126d2dfc7ed1c38244e543416643eb802e_prof);

        
        $__internal_9c42157d443ede3aee23e39b3a509a0d05e90103727328032265c5c52ab2570e->leave($__internal_9c42157d443ede3aee23e39b3a509a0d05e90103727328032265c5c52ab2570e_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_fe8f023523522f444168bf76ce20d10031317a2172146c406d24bba32f66f29e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe8f023523522f444168bf76ce20d10031317a2172146c406d24bba32f66f29e->enter($__internal_fe8f023523522f444168bf76ce20d10031317a2172146c406d24bba32f66f29e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_38f491402773a0606f307964d49a5420fec2623f05c2a0f5d2adfbaf6969161d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38f491402773a0606f307964d49a5420fec2623f05c2a0f5d2adfbaf6969161d->enter($__internal_38f491402773a0606f307964d49a5420fec2623f05c2a0f5d2adfbaf6969161d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_38f491402773a0606f307964d49a5420fec2623f05c2a0f5d2adfbaf6969161d->leave($__internal_38f491402773a0606f307964d49a5420fec2623f05c2a0f5d2adfbaf6969161d_prof);

        
        $__internal_fe8f023523522f444168bf76ce20d10031317a2172146c406d24bba32f66f29e->leave($__internal_fe8f023523522f444168bf76ce20d10031317a2172146c406d24bba32f66f29e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
