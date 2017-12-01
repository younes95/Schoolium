<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_992cf42486638ab58da0083167ec3d46c3d3a34a319d57af5d058ff8fb5091fa extends Twig_Template
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
        $__internal_b3287dfd6a54e63a3ce2a61453e4c8263eecd5d6403f6756bcf9b3c343b77253 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3287dfd6a54e63a3ce2a61453e4c8263eecd5d6403f6756bcf9b3c343b77253->enter($__internal_b3287dfd6a54e63a3ce2a61453e4c8263eecd5d6403f6756bcf9b3c343b77253_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_293e2a01e4097a981e6a3e3690fd24838241a4d8581a7b1248d330720d098b81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_293e2a01e4097a981e6a3e3690fd24838241a4d8581a7b1248d330720d098b81->enter($__internal_293e2a01e4097a981e6a3e3690fd24838241a4d8581a7b1248d330720d098b81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_b3287dfd6a54e63a3ce2a61453e4c8263eecd5d6403f6756bcf9b3c343b77253->leave($__internal_b3287dfd6a54e63a3ce2a61453e4c8263eecd5d6403f6756bcf9b3c343b77253_prof);

        
        $__internal_293e2a01e4097a981e6a3e3690fd24838241a4d8581a7b1248d330720d098b81->leave($__internal_293e2a01e4097a981e6a3e3690fd24838241a4d8581a7b1248d330720d098b81_prof);

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
", "@Framework/Form/email_widget.html.php", "C:\\wamp64\\www\\SCHOOL-master\\school\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}
