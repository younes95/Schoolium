<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_03df6694e95e24c25b2806ea3399f606807df96402325c040bfe1870768a3e66 extends Twig_Template
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
        $__internal_aec8845253382129c661e30eccc3477a0848fd4ef3d5244d18951f0c9741f1b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aec8845253382129c661e30eccc3477a0848fd4ef3d5244d18951f0c9741f1b6->enter($__internal_aec8845253382129c661e30eccc3477a0848fd4ef3d5244d18951f0c9741f1b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_784ca71c7a2221d8676c7783ecdd4a3b7a2a62a2d0e33374e4da1758cdb2d24b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_784ca71c7a2221d8676c7783ecdd4a3b7a2a62a2d0e33374e4da1758cdb2d24b->enter($__internal_784ca71c7a2221d8676c7783ecdd4a3b7a2a62a2d0e33374e4da1758cdb2d24b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_aec8845253382129c661e30eccc3477a0848fd4ef3d5244d18951f0c9741f1b6->leave($__internal_aec8845253382129c661e30eccc3477a0848fd4ef3d5244d18951f0c9741f1b6_prof);

        
        $__internal_784ca71c7a2221d8676c7783ecdd4a3b7a2a62a2d0e33374e4da1758cdb2d24b->leave($__internal_784ca71c7a2221d8676c7783ecdd4a3b7a2a62a2d0e33374e4da1758cdb2d24b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
