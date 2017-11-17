<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_8c30e4a94b46ad9cb270f151aded745754b9c394d87b78eb80161f2a5cd0ff59 extends Twig_Template
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
        $__internal_96f1ddd127bdfcee4999e12098bb8f09aeb0d9b5da91f335ebca2ae324b13596 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96f1ddd127bdfcee4999e12098bb8f09aeb0d9b5da91f335ebca2ae324b13596->enter($__internal_96f1ddd127bdfcee4999e12098bb8f09aeb0d9b5da91f335ebca2ae324b13596_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_9b45306e6dc3af4b52a845c87a10ce39f4b79255566c5ca9d797a76a3056c283 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b45306e6dc3af4b52a845c87a10ce39f4b79255566c5ca9d797a76a3056c283->enter($__internal_9b45306e6dc3af4b52a845c87a10ce39f4b79255566c5ca9d797a76a3056c283_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_96f1ddd127bdfcee4999e12098bb8f09aeb0d9b5da91f335ebca2ae324b13596->leave($__internal_96f1ddd127bdfcee4999e12098bb8f09aeb0d9b5da91f335ebca2ae324b13596_prof);

        
        $__internal_9b45306e6dc3af4b52a845c87a10ce39f4b79255566c5ca9d797a76a3056c283->leave($__internal_9b45306e6dc3af4b52a845c87a10ce39f4b79255566c5ca9d797a76a3056c283_prof);

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
", "@Framework/Form/form_widget_simple.html.php", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
