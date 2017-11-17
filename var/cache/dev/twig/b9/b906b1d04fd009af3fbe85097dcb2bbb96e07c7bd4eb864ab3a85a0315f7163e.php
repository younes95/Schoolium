<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_df2a92cf087e5fe2e6f33058fb07608f2ba6f82041417460b9493599fb2ed816 extends Twig_Template
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
        $__internal_7f99d266b38ab9d22563d94b82e5b9e047e77abc7dfc9a115dd9588f0dde7ab5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f99d266b38ab9d22563d94b82e5b9e047e77abc7dfc9a115dd9588f0dde7ab5->enter($__internal_7f99d266b38ab9d22563d94b82e5b9e047e77abc7dfc9a115dd9588f0dde7ab5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_c9a3faaf3fce686c4a663505675c94b33e3f988ba6b8ac94dfb2c27efab65794 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9a3faaf3fce686c4a663505675c94b33e3f988ba6b8ac94dfb2c27efab65794->enter($__internal_c9a3faaf3fce686c4a663505675c94b33e3f988ba6b8ac94dfb2c27efab65794_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_7f99d266b38ab9d22563d94b82e5b9e047e77abc7dfc9a115dd9588f0dde7ab5->leave($__internal_7f99d266b38ab9d22563d94b82e5b9e047e77abc7dfc9a115dd9588f0dde7ab5_prof);

        
        $__internal_c9a3faaf3fce686c4a663505675c94b33e3f988ba6b8ac94dfb2c27efab65794->leave($__internal_c9a3faaf3fce686c4a663505675c94b33e3f988ba6b8ac94dfb2c27efab65794_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
