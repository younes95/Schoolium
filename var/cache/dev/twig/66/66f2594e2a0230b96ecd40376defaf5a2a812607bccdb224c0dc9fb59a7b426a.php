<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_879169f9a1471646aee9ef1be7cb1db64dc498bb040efd1ce7756722b94090fd extends Twig_Template
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
        $__internal_50d44cd185af9f62caacf3d6fbe05f5c250f191387498b848487bf346486615f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50d44cd185af9f62caacf3d6fbe05f5c250f191387498b848487bf346486615f->enter($__internal_50d44cd185af9f62caacf3d6fbe05f5c250f191387498b848487bf346486615f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_ae3de4fd595ad47cc4a09133c910eb67ae9ac387e9418ad51bf573d546ed73dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae3de4fd595ad47cc4a09133c910eb67ae9ac387e9418ad51bf573d546ed73dc->enter($__internal_ae3de4fd595ad47cc4a09133c910eb67ae9ac387e9418ad51bf573d546ed73dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_50d44cd185af9f62caacf3d6fbe05f5c250f191387498b848487bf346486615f->leave($__internal_50d44cd185af9f62caacf3d6fbe05f5c250f191387498b848487bf346486615f_prof);

        
        $__internal_ae3de4fd595ad47cc4a09133c910eb67ae9ac387e9418ad51bf573d546ed73dc->leave($__internal_ae3de4fd595ad47cc4a09133c910eb67ae9ac387e9418ad51bf573d546ed73dc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
