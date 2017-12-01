<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_c02706646be8830cee863351d5254b7b2c6abdc404e878e9f3360bec0b7bc527 extends Twig_Template
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
        $__internal_48d71e121c5d218887cb94503a00cbba8d923849404b5b347f1edc3ea2dce88e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48d71e121c5d218887cb94503a00cbba8d923849404b5b347f1edc3ea2dce88e->enter($__internal_48d71e121c5d218887cb94503a00cbba8d923849404b5b347f1edc3ea2dce88e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_9ed87245cbe6939baddbdb241ade00ca8c118a5454c32d0ed75901f1b05bc87a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ed87245cbe6939baddbdb241ade00ca8c118a5454c32d0ed75901f1b05bc87a->enter($__internal_9ed87245cbe6939baddbdb241ade00ca8c118a5454c32d0ed75901f1b05bc87a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_48d71e121c5d218887cb94503a00cbba8d923849404b5b347f1edc3ea2dce88e->leave($__internal_48d71e121c5d218887cb94503a00cbba8d923849404b5b347f1edc3ea2dce88e_prof);

        
        $__internal_9ed87245cbe6939baddbdb241ade00ca8c118a5454c32d0ed75901f1b05bc87a->leave($__internal_9ed87245cbe6939baddbdb241ade00ca8c118a5454c32d0ed75901f1b05bc87a_prof);

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
", "@Framework/Form/form_rows.html.php", "C:\\wamp64\\www\\SCHOOL-master\\school\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rows.html.php");
    }
}
