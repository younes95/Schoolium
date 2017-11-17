<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_0e1054df78f2d71a072a56dbeee37fb2553c64f277ca85008c2a86bc0f94e82d extends Twig_Template
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
        $__internal_255af3468da2de142cf6180d1066d940d9a0bcdf3e570d9c975295568cde1657 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_255af3468da2de142cf6180d1066d940d9a0bcdf3e570d9c975295568cde1657->enter($__internal_255af3468da2de142cf6180d1066d940d9a0bcdf3e570d9c975295568cde1657_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_d0b6c528ccc2f906a4bbc889b664052bf63b7824e7e0cc6cc04241335dfe4cb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0b6c528ccc2f906a4bbc889b664052bf63b7824e7e0cc6cc04241335dfe4cb9->enter($__internal_d0b6c528ccc2f906a4bbc889b664052bf63b7824e7e0cc6cc04241335dfe4cb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_255af3468da2de142cf6180d1066d940d9a0bcdf3e570d9c975295568cde1657->leave($__internal_255af3468da2de142cf6180d1066d940d9a0bcdf3e570d9c975295568cde1657_prof);

        
        $__internal_d0b6c528ccc2f906a4bbc889b664052bf63b7824e7e0cc6cc04241335dfe4cb9->leave($__internal_d0b6c528ccc2f906a4bbc889b664052bf63b7824e7e0cc6cc04241335dfe4cb9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
