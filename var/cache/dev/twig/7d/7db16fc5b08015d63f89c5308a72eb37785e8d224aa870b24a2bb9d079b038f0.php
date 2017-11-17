<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_8ca53ce428b18a355ee75b2ed6ad9fa226259fd2b2e8f2888659da7769524686 extends Twig_Template
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
        $__internal_ab81279f6920874025cd18e5a2250e7ceeeb39cbf2fdd930f23cf5a7f2ae9259 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab81279f6920874025cd18e5a2250e7ceeeb39cbf2fdd930f23cf5a7f2ae9259->enter($__internal_ab81279f6920874025cd18e5a2250e7ceeeb39cbf2fdd930f23cf5a7f2ae9259_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_62aa46489464a9efe1dcfd8253438788bde7ee7d3df8b7f8d81bc5184dd76c66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62aa46489464a9efe1dcfd8253438788bde7ee7d3df8b7f8d81bc5184dd76c66->enter($__internal_62aa46489464a9efe1dcfd8253438788bde7ee7d3df8b7f8d81bc5184dd76c66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_ab81279f6920874025cd18e5a2250e7ceeeb39cbf2fdd930f23cf5a7f2ae9259->leave($__internal_ab81279f6920874025cd18e5a2250e7ceeeb39cbf2fdd930f23cf5a7f2ae9259_prof);

        
        $__internal_62aa46489464a9efe1dcfd8253438788bde7ee7d3df8b7f8d81bc5184dd76c66->leave($__internal_62aa46489464a9efe1dcfd8253438788bde7ee7d3df8b7f8d81bc5184dd76c66_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
