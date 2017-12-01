<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_5d44f4360e3e9feaa1cb73971eb6fabaa095559369b7e994fd34bbc4f47465d7 extends Twig_Template
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
        $__internal_ce9e1e28e30e669677678388a18092b50085caf1339d22ed83a4122b8248ae73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce9e1e28e30e669677678388a18092b50085caf1339d22ed83a4122b8248ae73->enter($__internal_ce9e1e28e30e669677678388a18092b50085caf1339d22ed83a4122b8248ae73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_c1330d11c22745bf963ce5e674715eda22380e80e94f09dc51bcb1fc0c9f41f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1330d11c22745bf963ce5e674715eda22380e80e94f09dc51bcb1fc0c9f41f5->enter($__internal_c1330d11c22745bf963ce5e674715eda22380e80e94f09dc51bcb1fc0c9f41f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_ce9e1e28e30e669677678388a18092b50085caf1339d22ed83a4122b8248ae73->leave($__internal_ce9e1e28e30e669677678388a18092b50085caf1339d22ed83a4122b8248ae73_prof);

        
        $__internal_c1330d11c22745bf963ce5e674715eda22380e80e94f09dc51bcb1fc0c9f41f5->leave($__internal_c1330d11c22745bf963ce5e674715eda22380e80e94f09dc51bcb1fc0c9f41f5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "C:\\wamp64\\www\\SCHOOL-master\\school\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form.html.php");
    }
}
