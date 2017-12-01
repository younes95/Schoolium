<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_4bc7e7a784d133918f6e03109f05e39011e458d777d67588a14a7457d3057c06 extends Twig_Template
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
        $__internal_c5edaa750fa7b9cffd78252ed63dba79e009bbccccd980f0b6865285485e8be0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5edaa750fa7b9cffd78252ed63dba79e009bbccccd980f0b6865285485e8be0->enter($__internal_c5edaa750fa7b9cffd78252ed63dba79e009bbccccd980f0b6865285485e8be0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_d24e69846b53435080ba8aa71d3479c5ace074514f8ead56b16cc4a937c31fb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d24e69846b53435080ba8aa71d3479c5ace074514f8ead56b16cc4a937c31fb7->enter($__internal_d24e69846b53435080ba8aa71d3479c5ace074514f8ead56b16cc4a937c31fb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_c5edaa750fa7b9cffd78252ed63dba79e009bbccccd980f0b6865285485e8be0->leave($__internal_c5edaa750fa7b9cffd78252ed63dba79e009bbccccd980f0b6865285485e8be0_prof);

        
        $__internal_d24e69846b53435080ba8aa71d3479c5ace074514f8ead56b16cc4a937c31fb7->leave($__internal_d24e69846b53435080ba8aa71d3479c5ace074514f8ead56b16cc4a937c31fb7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "C:\\wamp64\\www\\SCHOOL-master\\school\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget.html.php");
    }
}
