<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_9ecd932e5d724ac01bd34c6c7859d2c76df6788246a7764cb84aec5455501f11 extends Twig_Template
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
        $__internal_2c9025982c36b90651f3a4b598d3b30b8684944578839dae624074775a52fe16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c9025982c36b90651f3a4b598d3b30b8684944578839dae624074775a52fe16->enter($__internal_2c9025982c36b90651f3a4b598d3b30b8684944578839dae624074775a52fe16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_b7c19e5f5c55f0c13f6eba7ce18d6e7eab886ed63d41e9b4878297f1120b1b28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7c19e5f5c55f0c13f6eba7ce18d6e7eab886ed63d41e9b4878297f1120b1b28->enter($__internal_b7c19e5f5c55f0c13f6eba7ce18d6e7eab886ed63d41e9b4878297f1120b1b28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_2c9025982c36b90651f3a4b598d3b30b8684944578839dae624074775a52fe16->leave($__internal_2c9025982c36b90651f3a4b598d3b30b8684944578839dae624074775a52fe16_prof);

        
        $__internal_b7c19e5f5c55f0c13f6eba7ce18d6e7eab886ed63d41e9b4878297f1120b1b28->leave($__internal_b7c19e5f5c55f0c13f6eba7ce18d6e7eab886ed63d41e9b4878297f1120b1b28_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "C:\\wamp64\\www\\SCHOOL-master\\school\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_compound.html.php");
    }
}
