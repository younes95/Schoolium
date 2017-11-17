<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_a2da1501c0f2b2c086f90427005f19536bbee796fb0cc2f6f4dd1e63db3c3954 extends Twig_Template
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
        $__internal_1ea1861af0e56ff532269744301d414fdc599a8b84ee88ef3f592ec119c9cc09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ea1861af0e56ff532269744301d414fdc599a8b84ee88ef3f592ec119c9cc09->enter($__internal_1ea1861af0e56ff532269744301d414fdc599a8b84ee88ef3f592ec119c9cc09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_f19895e202362a0a267b58e79e677c03f62e1d77c50c69edec398e36a6078a60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f19895e202362a0a267b58e79e677c03f62e1d77c50c69edec398e36a6078a60->enter($__internal_f19895e202362a0a267b58e79e677c03f62e1d77c50c69edec398e36a6078a60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_1ea1861af0e56ff532269744301d414fdc599a8b84ee88ef3f592ec119c9cc09->leave($__internal_1ea1861af0e56ff532269744301d414fdc599a8b84ee88ef3f592ec119c9cc09_prof);

        
        $__internal_f19895e202362a0a267b58e79e677c03f62e1d77c50c69edec398e36a6078a60->leave($__internal_f19895e202362a0a267b58e79e677c03f62e1d77c50c69edec398e36a6078a60_prof);

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
", "@Framework/Form/form.html.php", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
