<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_87d82ad9bcacc7400e6b7d3e246a39769ee71733f00895a96d95e79a441c2df0 extends Twig_Template
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
        $__internal_fb42073d1cc6ac3374c8e7ce5a42d7a4bcc7bee1e13a52aed65f2930c325f161 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb42073d1cc6ac3374c8e7ce5a42d7a4bcc7bee1e13a52aed65f2930c325f161->enter($__internal_fb42073d1cc6ac3374c8e7ce5a42d7a4bcc7bee1e13a52aed65f2930c325f161_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_427fbb8d90be3fbccf683beb80f1772253b5658c00c76bd7b8af1fc6436a9bda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_427fbb8d90be3fbccf683beb80f1772253b5658c00c76bd7b8af1fc6436a9bda->enter($__internal_427fbb8d90be3fbccf683beb80f1772253b5658c00c76bd7b8af1fc6436a9bda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_fb42073d1cc6ac3374c8e7ce5a42d7a4bcc7bee1e13a52aed65f2930c325f161->leave($__internal_fb42073d1cc6ac3374c8e7ce5a42d7a4bcc7bee1e13a52aed65f2930c325f161_prof);

        
        $__internal_427fbb8d90be3fbccf683beb80f1772253b5658c00c76bd7b8af1fc6436a9bda->leave($__internal_427fbb8d90be3fbccf683beb80f1772253b5658c00c76bd7b8af1fc6436a9bda_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
