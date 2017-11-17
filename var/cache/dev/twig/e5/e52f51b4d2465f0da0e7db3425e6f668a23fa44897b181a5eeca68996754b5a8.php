<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_57dc079c772d6f3aaf4b9ad487ebbe39ce04f933659afe7f2a4483b41fea95de extends Twig_Template
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
        $__internal_e909d412b3031bc94b48fc69c882249699644fc7dbf442d410c9a96ab8548f22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e909d412b3031bc94b48fc69c882249699644fc7dbf442d410c9a96ab8548f22->enter($__internal_e909d412b3031bc94b48fc69c882249699644fc7dbf442d410c9a96ab8548f22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_56974760d30dcbf9a0f39f871a4a2d4b6e75c4317ed556cb90daab6f4f977bfa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56974760d30dcbf9a0f39f871a4a2d4b6e75c4317ed556cb90daab6f4f977bfa->enter($__internal_56974760d30dcbf9a0f39f871a4a2d4b6e75c4317ed556cb90daab6f4f977bfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_e909d412b3031bc94b48fc69c882249699644fc7dbf442d410c9a96ab8548f22->leave($__internal_e909d412b3031bc94b48fc69c882249699644fc7dbf442d410c9a96ab8548f22_prof);

        
        $__internal_56974760d30dcbf9a0f39f871a4a2d4b6e75c4317ed556cb90daab6f4f977bfa->leave($__internal_56974760d30dcbf9a0f39f871a4a2d4b6e75c4317ed556cb90daab6f4f977bfa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
