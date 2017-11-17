<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_0db91e81d130907ebd7b0e6dc57d01c738d72f0cddbd1e4e15d1a5d5b1fa5fa6 extends Twig_Template
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
        $__internal_0a81d9b6f5eb9a3862c8d345cf3cc0d757da8d5fa7f1dae9555b202abb5c2df1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a81d9b6f5eb9a3862c8d345cf3cc0d757da8d5fa7f1dae9555b202abb5c2df1->enter($__internal_0a81d9b6f5eb9a3862c8d345cf3cc0d757da8d5fa7f1dae9555b202abb5c2df1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_5bdde564d20547de4469da8f605829590c2bc47b0ac1ea32b3be2e235dd03fd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bdde564d20547de4469da8f605829590c2bc47b0ac1ea32b3be2e235dd03fd0->enter($__internal_5bdde564d20547de4469da8f605829590c2bc47b0ac1ea32b3be2e235dd03fd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_0a81d9b6f5eb9a3862c8d345cf3cc0d757da8d5fa7f1dae9555b202abb5c2df1->leave($__internal_0a81d9b6f5eb9a3862c8d345cf3cc0d757da8d5fa7f1dae9555b202abb5c2df1_prof);

        
        $__internal_5bdde564d20547de4469da8f605829590c2bc47b0ac1ea32b3be2e235dd03fd0->leave($__internal_5bdde564d20547de4469da8f605829590c2bc47b0ac1ea32b3be2e235dd03fd0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
