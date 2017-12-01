<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_f9fb4ba5cf8647b4985631d770b4d7b78bcebfd0d668622a3902f1e5263298be extends Twig_Template
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
        $__internal_d7a86337f514371f098825fa78ce00a33727ea1d9c57bbe194a18bf519c4ab44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7a86337f514371f098825fa78ce00a33727ea1d9c57bbe194a18bf519c4ab44->enter($__internal_d7a86337f514371f098825fa78ce00a33727ea1d9c57bbe194a18bf519c4ab44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_d4ad9b8e2125f7d9ba108563638394625dd1fe7e81df30d19758e4b885dbdff2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4ad9b8e2125f7d9ba108563638394625dd1fe7e81df30d19758e4b885dbdff2->enter($__internal_d4ad9b8e2125f7d9ba108563638394625dd1fe7e81df30d19758e4b885dbdff2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_d7a86337f514371f098825fa78ce00a33727ea1d9c57bbe194a18bf519c4ab44->leave($__internal_d7a86337f514371f098825fa78ce00a33727ea1d9c57bbe194a18bf519c4ab44_prof);

        
        $__internal_d4ad9b8e2125f7d9ba108563638394625dd1fe7e81df30d19758e4b885dbdff2->leave($__internal_d4ad9b8e2125f7d9ba108563638394625dd1fe7e81df30d19758e4b885dbdff2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "C:\\wamp64\\www\\SCHOOL-master\\school\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}
