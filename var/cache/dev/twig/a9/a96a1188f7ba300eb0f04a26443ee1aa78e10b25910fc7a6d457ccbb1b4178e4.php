<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_7f8854cd010339daaa43e28044d34c6c45501535d47a9b6200e41bb423057965 extends Twig_Template
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
        $__internal_9d65dc5965d12c770c71afba77605550114378ef9c568e4c7bba695924253f38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d65dc5965d12c770c71afba77605550114378ef9c568e4c7bba695924253f38->enter($__internal_9d65dc5965d12c770c71afba77605550114378ef9c568e4c7bba695924253f38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_7ab5fa5d642ba8f0a310a5cea4603dd88b4edfa363444e21ff0b5315dcd016bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ab5fa5d642ba8f0a310a5cea4603dd88b4edfa363444e21ff0b5315dcd016bc->enter($__internal_7ab5fa5d642ba8f0a310a5cea4603dd88b4edfa363444e21ff0b5315dcd016bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_9d65dc5965d12c770c71afba77605550114378ef9c568e4c7bba695924253f38->leave($__internal_9d65dc5965d12c770c71afba77605550114378ef9c568e4c7bba695924253f38_prof);

        
        $__internal_7ab5fa5d642ba8f0a310a5cea4603dd88b4edfa363444e21ff0b5315dcd016bc->leave($__internal_7ab5fa5d642ba8f0a310a5cea4603dd88b4edfa363444e21ff0b5315dcd016bc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "C:\\wamp64\\www\\SCHOOL-master\\school\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_row.html.php");
    }
}
