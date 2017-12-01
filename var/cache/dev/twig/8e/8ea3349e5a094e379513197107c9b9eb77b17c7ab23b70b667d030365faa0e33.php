<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_d2c6051287dec7240518ff24fd973bb0bbe6429f52ab90508fb4aa3532856899 extends Twig_Template
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
        $__internal_9d2e326e0dd3ccb8c06656e3635ac85e1ea3bbfbb4ad482448da35f96e94989c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d2e326e0dd3ccb8c06656e3635ac85e1ea3bbfbb4ad482448da35f96e94989c->enter($__internal_9d2e326e0dd3ccb8c06656e3635ac85e1ea3bbfbb4ad482448da35f96e94989c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_893bceabeb8db93647bffa1b7e13d2f4fab760806057e97e40b1c7729bd17f9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_893bceabeb8db93647bffa1b7e13d2f4fab760806057e97e40b1c7729bd17f9f->enter($__internal_893bceabeb8db93647bffa1b7e13d2f4fab760806057e97e40b1c7729bd17f9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_9d2e326e0dd3ccb8c06656e3635ac85e1ea3bbfbb4ad482448da35f96e94989c->leave($__internal_9d2e326e0dd3ccb8c06656e3635ac85e1ea3bbfbb4ad482448da35f96e94989c_prof);

        
        $__internal_893bceabeb8db93647bffa1b7e13d2f4fab760806057e97e40b1c7729bd17f9f->leave($__internal_893bceabeb8db93647bffa1b7e13d2f4fab760806057e97e40b1c7729bd17f9f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "C:\\wamp64\\www\\SCHOOL-master\\school\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget.html.php");
    }
}
