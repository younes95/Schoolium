<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_2f97f0bb28644ff672cb12d38927ee89643e31d7681ef1e1e6e270f43d33b63f extends Twig_Template
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
        $__internal_7beab7e441dfb62360bef235aa95c85488346c96ddf33f322f686fd7c5b7ff06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7beab7e441dfb62360bef235aa95c85488346c96ddf33f322f686fd7c5b7ff06->enter($__internal_7beab7e441dfb62360bef235aa95c85488346c96ddf33f322f686fd7c5b7ff06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_8b8640c4b7154e1a0301466e31e650327e8141a9962d4456dfb6b1c3572521d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b8640c4b7154e1a0301466e31e650327e8141a9962d4456dfb6b1c3572521d4->enter($__internal_8b8640c4b7154e1a0301466e31e650327e8141a9962d4456dfb6b1c3572521d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_7beab7e441dfb62360bef235aa95c85488346c96ddf33f322f686fd7c5b7ff06->leave($__internal_7beab7e441dfb62360bef235aa95c85488346c96ddf33f322f686fd7c5b7ff06_prof);

        
        $__internal_8b8640c4b7154e1a0301466e31e650327e8141a9962d4456dfb6b1c3572521d4->leave($__internal_8b8640c4b7154e1a0301466e31e650327e8141a9962d4456dfb6b1c3572521d4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "C:\\wamp64\\www\\SCHOOL-master\\school\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_widget.html.php");
    }
}
