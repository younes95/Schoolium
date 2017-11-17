<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_1510ded2273452cd2fadd5c341acb1711fe5edffa04ef128f8fc21f6ec152c48 extends Twig_Template
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
        $__internal_e65fab1021cb463bc3edc87f57db15c61f34cc8cb5bbd34702ed76256e35f6cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e65fab1021cb463bc3edc87f57db15c61f34cc8cb5bbd34702ed76256e35f6cd->enter($__internal_e65fab1021cb463bc3edc87f57db15c61f34cc8cb5bbd34702ed76256e35f6cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_6c69df95e6a77f248eeb83dff91a47d2ec2845388ec1daa456aa40632a19e430 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c69df95e6a77f248eeb83dff91a47d2ec2845388ec1daa456aa40632a19e430->enter($__internal_6c69df95e6a77f248eeb83dff91a47d2ec2845388ec1daa456aa40632a19e430_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_e65fab1021cb463bc3edc87f57db15c61f34cc8cb5bbd34702ed76256e35f6cd->leave($__internal_e65fab1021cb463bc3edc87f57db15c61f34cc8cb5bbd34702ed76256e35f6cd_prof);

        
        $__internal_6c69df95e6a77f248eeb83dff91a47d2ec2845388ec1daa456aa40632a19e430->leave($__internal_6c69df95e6a77f248eeb83dff91a47d2ec2845388ec1daa456aa40632a19e430_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
