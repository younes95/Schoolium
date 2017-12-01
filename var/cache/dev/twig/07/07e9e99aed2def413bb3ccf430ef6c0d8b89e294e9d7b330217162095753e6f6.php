<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_cdcc2c5aebcb16f3da3b8fa293d042feab5f04236228cc486549b6afa9a78996 extends Twig_Template
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
        $__internal_5098345c90f8a6832f38644c60e6f8e0847d33b24d71d72878d2af010d654bf2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5098345c90f8a6832f38644c60e6f8e0847d33b24d71d72878d2af010d654bf2->enter($__internal_5098345c90f8a6832f38644c60e6f8e0847d33b24d71d72878d2af010d654bf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_e38f80626d389665fbc84125d40748f1a80f3abe122eba78d6c3f120e7c39469 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e38f80626d389665fbc84125d40748f1a80f3abe122eba78d6c3f120e7c39469->enter($__internal_e38f80626d389665fbc84125d40748f1a80f3abe122eba78d6c3f120e7c39469_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_5098345c90f8a6832f38644c60e6f8e0847d33b24d71d72878d2af010d654bf2->leave($__internal_5098345c90f8a6832f38644c60e6f8e0847d33b24d71d72878d2af010d654bf2_prof);

        
        $__internal_e38f80626d389665fbc84125d40748f1a80f3abe122eba78d6c3f120e7c39469->leave($__internal_e38f80626d389665fbc84125d40748f1a80f3abe122eba78d6c3f120e7c39469_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "C:\\wamp64\\www\\SCHOOL-master\\school\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_simple.html.php");
    }
}
