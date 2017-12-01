<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_ec4593bfa186f1b70277da279fdda44bdd8cb917c21e7dd4151f9c252561a1a2 extends Twig_Template
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
        $__internal_e9a8022d50dccd53036017a3ad1ad0d44b7b6b6d3689c435770e884887f0c67e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9a8022d50dccd53036017a3ad1ad0d44b7b6b6d3689c435770e884887f0c67e->enter($__internal_e9a8022d50dccd53036017a3ad1ad0d44b7b6b6d3689c435770e884887f0c67e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_0aac8d8b30c00ff4226d34fc853cdb82be7eff8bd96998a639d178e03e3bb4eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0aac8d8b30c00ff4226d34fc853cdb82be7eff8bd96998a639d178e03e3bb4eb->enter($__internal_0aac8d8b30c00ff4226d34fc853cdb82be7eff8bd96998a639d178e03e3bb4eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_e9a8022d50dccd53036017a3ad1ad0d44b7b6b6d3689c435770e884887f0c67e->leave($__internal_e9a8022d50dccd53036017a3ad1ad0d44b7b6b6d3689c435770e884887f0c67e_prof);

        
        $__internal_0aac8d8b30c00ff4226d34fc853cdb82be7eff8bd96998a639d178e03e3bb4eb->leave($__internal_0aac8d8b30c00ff4226d34fc853cdb82be7eff8bd96998a639d178e03e3bb4eb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "C:\\wamp64\\www\\SCHOOL-master\\school\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}
