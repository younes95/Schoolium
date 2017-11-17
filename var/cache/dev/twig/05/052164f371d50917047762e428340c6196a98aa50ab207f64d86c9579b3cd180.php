<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_87ec3d4c96c830715b6c4b523ee3971491a1f6b16a2dd8253304336e3817398e extends Twig_Template
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
        $__internal_b451db8a1db0a327d652ced9f9a049e9732af36ffd77095395c2804f76f9fb8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b451db8a1db0a327d652ced9f9a049e9732af36ffd77095395c2804f76f9fb8d->enter($__internal_b451db8a1db0a327d652ced9f9a049e9732af36ffd77095395c2804f76f9fb8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_337ee2d45d72e54d3f7f2417e9f4f30462148c0f79f3d967746f9ca9049b31b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_337ee2d45d72e54d3f7f2417e9f4f30462148c0f79f3d967746f9ca9049b31b2->enter($__internal_337ee2d45d72e54d3f7f2417e9f4f30462148c0f79f3d967746f9ca9049b31b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_b451db8a1db0a327d652ced9f9a049e9732af36ffd77095395c2804f76f9fb8d->leave($__internal_b451db8a1db0a327d652ced9f9a049e9732af36ffd77095395c2804f76f9fb8d_prof);

        
        $__internal_337ee2d45d72e54d3f7f2417e9f4f30462148c0f79f3d967746f9ca9049b31b2->leave($__internal_337ee2d45d72e54d3f7f2417e9f4f30462148c0f79f3d967746f9ca9049b31b2_prof);

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
", "@Framework/Form/number_widget.html.php", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
