<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_02d5be04ad7ae480ab6b82dc987260dc8126ca46ddc1e671ba2fdf1a24d3191d extends Twig_Template
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
        $__internal_807893f71d9bd52c076c69b065f4f5fbfafa040842a7b68f92c98473a6581632 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_807893f71d9bd52c076c69b065f4f5fbfafa040842a7b68f92c98473a6581632->enter($__internal_807893f71d9bd52c076c69b065f4f5fbfafa040842a7b68f92c98473a6581632_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_677d01ac3809a6a8562568ebde08220e83e0d61d461d757389ebd5f38a14199d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_677d01ac3809a6a8562568ebde08220e83e0d61d461d757389ebd5f38a14199d->enter($__internal_677d01ac3809a6a8562568ebde08220e83e0d61d461d757389ebd5f38a14199d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_807893f71d9bd52c076c69b065f4f5fbfafa040842a7b68f92c98473a6581632->leave($__internal_807893f71d9bd52c076c69b065f4f5fbfafa040842a7b68f92c98473a6581632_prof);

        
        $__internal_677d01ac3809a6a8562568ebde08220e83e0d61d461d757389ebd5f38a14199d->leave($__internal_677d01ac3809a6a8562568ebde08220e83e0d61d461d757389ebd5f38a14199d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
