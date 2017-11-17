<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_98378b0b10c1aa84b052cd06e016af7182c732531d2cc614546c430bcd2fa86b extends Twig_Template
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
        $__internal_43a11595c32b13d69e71b6e400ee5f4d6fced699c2e0288a97ba3a74ec52ac22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43a11595c32b13d69e71b6e400ee5f4d6fced699c2e0288a97ba3a74ec52ac22->enter($__internal_43a11595c32b13d69e71b6e400ee5f4d6fced699c2e0288a97ba3a74ec52ac22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_a8d8e151962c3ed2bb33109b9d0e2a7c99a09509eca73cf5a96779c6a31e27b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8d8e151962c3ed2bb33109b9d0e2a7c99a09509eca73cf5a96779c6a31e27b6->enter($__internal_a8d8e151962c3ed2bb33109b9d0e2a7c99a09509eca73cf5a96779c6a31e27b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_43a11595c32b13d69e71b6e400ee5f4d6fced699c2e0288a97ba3a74ec52ac22->leave($__internal_43a11595c32b13d69e71b6e400ee5f4d6fced699c2e0288a97ba3a74ec52ac22_prof);

        
        $__internal_a8d8e151962c3ed2bb33109b9d0e2a7c99a09509eca73cf5a96779c6a31e27b6->leave($__internal_a8d8e151962c3ed2bb33109b9d0e2a7c99a09509eca73cf5a96779c6a31e27b6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
