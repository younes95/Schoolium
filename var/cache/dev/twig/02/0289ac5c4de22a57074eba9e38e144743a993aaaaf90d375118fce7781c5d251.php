<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_da3d9b132af2a40e907a65e172b4f955099b807077400b069492c335ce2f3d3d extends Twig_Template
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
        $__internal_f906eedd80dcb08bf3d88512a23d67cb8173e9a74a681ca888d79d86d3b79703 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f906eedd80dcb08bf3d88512a23d67cb8173e9a74a681ca888d79d86d3b79703->enter($__internal_f906eedd80dcb08bf3d88512a23d67cb8173e9a74a681ca888d79d86d3b79703_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_2266bde32e3a49a7afa55bace9babd3c93af41a44050fb86e95c772ecfca08ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2266bde32e3a49a7afa55bace9babd3c93af41a44050fb86e95c772ecfca08ac->enter($__internal_2266bde32e3a49a7afa55bace9babd3c93af41a44050fb86e95c772ecfca08ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_f906eedd80dcb08bf3d88512a23d67cb8173e9a74a681ca888d79d86d3b79703->leave($__internal_f906eedd80dcb08bf3d88512a23d67cb8173e9a74a681ca888d79d86d3b79703_prof);

        
        $__internal_2266bde32e3a49a7afa55bace9babd3c93af41a44050fb86e95c772ecfca08ac->leave($__internal_2266bde32e3a49a7afa55bace9babd3c93af41a44050fb86e95c772ecfca08ac_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "C:\\wamp64\\www\\SCHOOL-master\\school\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rest.html.php");
    }
}
