<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_32c1e2dd51908b999fd6d04a140dfe953f2babe834a00a161265969b76654424 extends Twig_Template
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
        $__internal_8f598f262a34facc1eec93489a14dfda91fe5a943ad83f87cac412154f0827db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f598f262a34facc1eec93489a14dfda91fe5a943ad83f87cac412154f0827db->enter($__internal_8f598f262a34facc1eec93489a14dfda91fe5a943ad83f87cac412154f0827db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_a1165ae461108310cdfac013a88bd6366c047326e820ff9010b9c66f888a4ce3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1165ae461108310cdfac013a88bd6366c047326e820ff9010b9c66f888a4ce3->enter($__internal_a1165ae461108310cdfac013a88bd6366c047326e820ff9010b9c66f888a4ce3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
";
        
        $__internal_8f598f262a34facc1eec93489a14dfda91fe5a943ad83f87cac412154f0827db->leave($__internal_8f598f262a34facc1eec93489a14dfda91fe5a943ad83f87cac412154f0827db_prof);

        
        $__internal_a1165ae461108310cdfac013a88bd6366c047326e820ff9010b9c66f888a4ce3->leave($__internal_a1165ae461108310cdfac013a88bd6366c047326e820ff9010b9c66f888a4ce3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "C:\\wamp64\\www\\SCHOOL-master\\school\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_widget_compound.html.php");
    }
}
