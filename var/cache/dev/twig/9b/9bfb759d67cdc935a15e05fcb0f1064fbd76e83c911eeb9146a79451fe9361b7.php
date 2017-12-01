<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_2ab1c6c4208a205987a23ebcb3ca2eff89e6f04e3b9eef954130e8647e804a2b extends Twig_Template
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
        $__internal_ec642e9a09b6e32b9885ed2f386a8affb0657df8f75881e668b6505ee212fdbf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec642e9a09b6e32b9885ed2f386a8affb0657df8f75881e668b6505ee212fdbf->enter($__internal_ec642e9a09b6e32b9885ed2f386a8affb0657df8f75881e668b6505ee212fdbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_134ce0e07890af60fc1b30d6694e65f8387f136c21cb79d84257867258070b0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_134ce0e07890af60fc1b30d6694e65f8387f136c21cb79d84257867258070b0e->enter($__internal_134ce0e07890af60fc1b30d6694e65f8387f136c21cb79d84257867258070b0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_ec642e9a09b6e32b9885ed2f386a8affb0657df8f75881e668b6505ee212fdbf->leave($__internal_ec642e9a09b6e32b9885ed2f386a8affb0657df8f75881e668b6505ee212fdbf_prof);

        
        $__internal_134ce0e07890af60fc1b30d6694e65f8387f136c21cb79d84257867258070b0e->leave($__internal_134ce0e07890af60fc1b30d6694e65f8387f136c21cb79d84257867258070b0e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "C:\\wamp64\\www\\SCHOOL-master\\school\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}
