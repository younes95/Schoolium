<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_20a2f64e57eeea4acebd06748a95eaf0728156a0f93f49c62d48371c0b1bbe75 extends Twig_Template
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
        $__internal_37a130c5232f33d165186553b8ab5f74f58ab4283b481f53d7c06eeca2636807 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37a130c5232f33d165186553b8ab5f74f58ab4283b481f53d7c06eeca2636807->enter($__internal_37a130c5232f33d165186553b8ab5f74f58ab4283b481f53d7c06eeca2636807_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_17baf68f6a89056f34a4deb78377255d383514eb7f1c935afaeec49e8c9c61a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17baf68f6a89056f34a4deb78377255d383514eb7f1c935afaeec49e8c9c61a0->enter($__internal_17baf68f6a89056f34a4deb78377255d383514eb7f1c935afaeec49e8c9c61a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_37a130c5232f33d165186553b8ab5f74f58ab4283b481f53d7c06eeca2636807->leave($__internal_37a130c5232f33d165186553b8ab5f74f58ab4283b481f53d7c06eeca2636807_prof);

        
        $__internal_17baf68f6a89056f34a4deb78377255d383514eb7f1c935afaeec49e8c9c61a0->leave($__internal_17baf68f6a89056f34a4deb78377255d383514eb7f1c935afaeec49e8c9c61a0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
