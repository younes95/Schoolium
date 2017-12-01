<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_ecbd9ccd1d137e963500eeadc5ce627c66a29d787212188841159b8197f85a72 extends Twig_Template
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
        $__internal_a00a04200d20f044f23573c45da52747f05c1b66342e466a3a597aebbbc7e630 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a00a04200d20f044f23573c45da52747f05c1b66342e466a3a597aebbbc7e630->enter($__internal_a00a04200d20f044f23573c45da52747f05c1b66342e466a3a597aebbbc7e630_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_d2f4075ccb5974bf5f8f306a067b4eac2ce7ef43676ea7664b0fe33e1ec2c682 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2f4075ccb5974bf5f8f306a067b4eac2ce7ef43676ea7664b0fe33e1ec2c682->enter($__internal_d2f4075ccb5974bf5f8f306a067b4eac2ce7ef43676ea7664b0fe33e1ec2c682_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_a00a04200d20f044f23573c45da52747f05c1b66342e466a3a597aebbbc7e630->leave($__internal_a00a04200d20f044f23573c45da52747f05c1b66342e466a3a597aebbbc7e630_prof);

        
        $__internal_d2f4075ccb5974bf5f8f306a067b4eac2ce7ef43676ea7664b0fe33e1ec2c682->leave($__internal_d2f4075ccb5974bf5f8f306a067b4eac2ce7ef43676ea7664b0fe33e1ec2c682_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "C:\\wamp64\\www\\SCHOOL-master\\school\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\number_widget.html.php");
    }
}
