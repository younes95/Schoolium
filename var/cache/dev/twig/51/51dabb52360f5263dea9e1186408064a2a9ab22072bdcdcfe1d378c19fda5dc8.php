<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_84cc671909b7a8d151fc2e6bad4f9ffebb4cab4735e927a310fde078842cd166 extends Twig_Template
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
        $__internal_cc842303810bc83b791932172fccce1e0f5a5589793f1dafa8c72b3600574dd1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc842303810bc83b791932172fccce1e0f5a5589793f1dafa8c72b3600574dd1->enter($__internal_cc842303810bc83b791932172fccce1e0f5a5589793f1dafa8c72b3600574dd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_42effc53ca40e7e6e30c676ac437db1d3ddda62c76376b8328a3497277f4c929 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42effc53ca40e7e6e30c676ac437db1d3ddda62c76376b8328a3497277f4c929->enter($__internal_42effc53ca40e7e6e30c676ac437db1d3ddda62c76376b8328a3497277f4c929_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_cc842303810bc83b791932172fccce1e0f5a5589793f1dafa8c72b3600574dd1->leave($__internal_cc842303810bc83b791932172fccce1e0f5a5589793f1dafa8c72b3600574dd1_prof);

        
        $__internal_42effc53ca40e7e6e30c676ac437db1d3ddda62c76376b8328a3497277f4c929->leave($__internal_42effc53ca40e7e6e30c676ac437db1d3ddda62c76376b8328a3497277f4c929_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "C:\\wamp64\\www\\SCHOOL-master\\school\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
