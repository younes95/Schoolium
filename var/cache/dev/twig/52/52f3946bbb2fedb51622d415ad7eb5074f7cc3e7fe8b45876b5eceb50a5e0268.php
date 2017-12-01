<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_9ba68c83c2c30f20ee1f3c04d495bd7f8d503cc4c3445d9733f151ba3ac36a92 extends Twig_Template
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
        $__internal_ed96cf875baad3d77353edcf03f3a2b3eb21a9a7425120d920de32a23e408653 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed96cf875baad3d77353edcf03f3a2b3eb21a9a7425120d920de32a23e408653->enter($__internal_ed96cf875baad3d77353edcf03f3a2b3eb21a9a7425120d920de32a23e408653_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_a086819cba371b3bd9c826a4e65f6b130cd4f905695fe5d2e11f87d53f01aeb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a086819cba371b3bd9c826a4e65f6b130cd4f905695fe5d2e11f87d53f01aeb2->enter($__internal_a086819cba371b3bd9c826a4e65f6b130cd4f905695fe5d2e11f87d53f01aeb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_ed96cf875baad3d77353edcf03f3a2b3eb21a9a7425120d920de32a23e408653->leave($__internal_ed96cf875baad3d77353edcf03f3a2b3eb21a9a7425120d920de32a23e408653_prof);

        
        $__internal_a086819cba371b3bd9c826a4e65f6b130cd4f905695fe5d2e11f87d53f01aeb2->leave($__internal_a086819cba371b3bd9c826a4e65f6b130cd4f905695fe5d2e11f87d53f01aeb2_prof);

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
", "@Framework/Form/choice_options.html.php", "C:\\wamp64\\www\\SCHOOL-master\\school\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}
