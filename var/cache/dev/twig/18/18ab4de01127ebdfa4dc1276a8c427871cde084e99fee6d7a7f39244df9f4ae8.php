<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_e9ac38b7306a7d7484e19ed89942426ccc3f2fe0f809561b7fb2d78d54e463f9 extends Twig_Template
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
        $__internal_141fd9f72d955d7b7a4276999e2cb4f7b9c0fce3d6943dbdc5d3b4464e7a6ced = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_141fd9f72d955d7b7a4276999e2cb4f7b9c0fce3d6943dbdc5d3b4464e7a6ced->enter($__internal_141fd9f72d955d7b7a4276999e2cb4f7b9c0fce3d6943dbdc5d3b4464e7a6ced_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_9e3b946f72be95837afd6fdcf49381fff57115f959b24902e6860e8e51946049 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e3b946f72be95837afd6fdcf49381fff57115f959b24902e6860e8e51946049->enter($__internal_9e3b946f72be95837afd6fdcf49381fff57115f959b24902e6860e8e51946049_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_141fd9f72d955d7b7a4276999e2cb4f7b9c0fce3d6943dbdc5d3b4464e7a6ced->leave($__internal_141fd9f72d955d7b7a4276999e2cb4f7b9c0fce3d6943dbdc5d3b4464e7a6ced_prof);

        
        $__internal_9e3b946f72be95837afd6fdcf49381fff57115f959b24902e6860e8e51946049->leave($__internal_9e3b946f72be95837afd6fdcf49381fff57115f959b24902e6860e8e51946049_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
