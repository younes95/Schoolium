<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_ea2bf1adf33610aae7127de23eabd4c76f592d519eb929223d1b452c817795d5 extends Twig_Template
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
        $__internal_cdfae1ff69ceebdf94121d3122f27ae68aa783ddac94dc669e190bb6a0a5fdfd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdfae1ff69ceebdf94121d3122f27ae68aa783ddac94dc669e190bb6a0a5fdfd->enter($__internal_cdfae1ff69ceebdf94121d3122f27ae68aa783ddac94dc669e190bb6a0a5fdfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_d22bb26ed6c0f41a43aa11e9e1701de105d5789ba6b6ba5c7f45388569a68288 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d22bb26ed6c0f41a43aa11e9e1701de105d5789ba6b6ba5c7f45388569a68288->enter($__internal_d22bb26ed6c0f41a43aa11e9e1701de105d5789ba6b6ba5c7f45388569a68288_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_cdfae1ff69ceebdf94121d3122f27ae68aa783ddac94dc669e190bb6a0a5fdfd->leave($__internal_cdfae1ff69ceebdf94121d3122f27ae68aa783ddac94dc669e190bb6a0a5fdfd_prof);

        
        $__internal_d22bb26ed6c0f41a43aa11e9e1701de105d5789ba6b6ba5c7f45388569a68288->leave($__internal_d22bb26ed6c0f41a43aa11e9e1701de105d5789ba6b6ba5c7f45388569a68288_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "C:\\wamp64\\www\\SCHOOL-master\\school\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\collection_widget.html.php");
    }
}
