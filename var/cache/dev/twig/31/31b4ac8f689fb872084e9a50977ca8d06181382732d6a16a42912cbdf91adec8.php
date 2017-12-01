<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_47867b47d047b57a69b61b818d077441105b9dedf0a9dafb9e475df4246fb7b8 extends Twig_Template
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
        $__internal_bf9b52615c2aaddc713e1e4948d0cadb9fed563da3bb7c7a63a17cfe67407399 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf9b52615c2aaddc713e1e4948d0cadb9fed563da3bb7c7a63a17cfe67407399->enter($__internal_bf9b52615c2aaddc713e1e4948d0cadb9fed563da3bb7c7a63a17cfe67407399_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_f1f0ba267f2b5a496ca8493052b434a53594ec28f6cb83fc125dec50c4b7a6af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1f0ba267f2b5a496ca8493052b434a53594ec28f6cb83fc125dec50c4b7a6af->enter($__internal_f1f0ba267f2b5a496ca8493052b434a53594ec28f6cb83fc125dec50c4b7a6af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_bf9b52615c2aaddc713e1e4948d0cadb9fed563da3bb7c7a63a17cfe67407399->leave($__internal_bf9b52615c2aaddc713e1e4948d0cadb9fed563da3bb7c7a63a17cfe67407399_prof);

        
        $__internal_f1f0ba267f2b5a496ca8493052b434a53594ec28f6cb83fc125dec50c4b7a6af->leave($__internal_f1f0ba267f2b5a496ca8493052b434a53594ec28f6cb83fc125dec50c4b7a6af_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "C:\\wamp64\\www\\SCHOOL-master\\school\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget_expanded.html.php");
    }
}
