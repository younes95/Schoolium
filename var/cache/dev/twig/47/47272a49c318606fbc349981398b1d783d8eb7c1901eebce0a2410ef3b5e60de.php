<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_6e4570fad85f6f3092700e80b4da0b39d79996b97c2a68ef92cae4c383c27b16 extends Twig_Template
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
        $__internal_dccd45693308c5e5a7da3716b6af4e86f63a7c04564c5cff653db972cc5ef36b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dccd45693308c5e5a7da3716b6af4e86f63a7c04564c5cff653db972cc5ef36b->enter($__internal_dccd45693308c5e5a7da3716b6af4e86f63a7c04564c5cff653db972cc5ef36b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_116a20464b483e52671ffbf141ef4f7fbeed96fa066d46a621a7a26c10a92d9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_116a20464b483e52671ffbf141ef4f7fbeed96fa066d46a621a7a26c10a92d9f->enter($__internal_116a20464b483e52671ffbf141ef4f7fbeed96fa066d46a621a7a26c10a92d9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_dccd45693308c5e5a7da3716b6af4e86f63a7c04564c5cff653db972cc5ef36b->leave($__internal_dccd45693308c5e5a7da3716b6af4e86f63a7c04564c5cff653db972cc5ef36b_prof);

        
        $__internal_116a20464b483e52671ffbf141ef4f7fbeed96fa066d46a621a7a26c10a92d9f->leave($__internal_116a20464b483e52671ffbf141ef4f7fbeed96fa066d46a621a7a26c10a92d9f_prof);

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
", "@Framework/Form/integer_widget.html.php", "C:\\wamp64\\www\\SCHOOL-master\\school\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}
