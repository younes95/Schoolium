<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_3078bb444171a393edbd00fe3d1d2b94f0089de32c340d08af82a30085989f58 extends Twig_Template
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
        $__internal_e7d401ce1f1a85c96da5da1ab93f86a79277b90c91b30312715ecf59a48ec644 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7d401ce1f1a85c96da5da1ab93f86a79277b90c91b30312715ecf59a48ec644->enter($__internal_e7d401ce1f1a85c96da5da1ab93f86a79277b90c91b30312715ecf59a48ec644_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_75edd192cadb4877b54307ba21774499e75955f74b575ce3635e21835e43f54e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75edd192cadb4877b54307ba21774499e75955f74b575ce3635e21835e43f54e->enter($__internal_75edd192cadb4877b54307ba21774499e75955f74b575ce3635e21835e43f54e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_e7d401ce1f1a85c96da5da1ab93f86a79277b90c91b30312715ecf59a48ec644->leave($__internal_e7d401ce1f1a85c96da5da1ab93f86a79277b90c91b30312715ecf59a48ec644_prof);

        
        $__internal_75edd192cadb4877b54307ba21774499e75955f74b575ce3635e21835e43f54e->leave($__internal_75edd192cadb4877b54307ba21774499e75955f74b575ce3635e21835e43f54e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "C:\\wamp64\\www\\SCHOOL-master\\school\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\widget_attributes.html.php");
    }
}
