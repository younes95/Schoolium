<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_9cf46f58af914c3d12a5c4277e0a560be63bd0b5507b4f462a7c0088cd5b387b extends Twig_Template
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
        $__internal_e164f8972133d869f7285d13103295d707b76309897bafef20f3605f8a8e288a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e164f8972133d869f7285d13103295d707b76309897bafef20f3605f8a8e288a->enter($__internal_e164f8972133d869f7285d13103295d707b76309897bafef20f3605f8a8e288a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_1b419882ef4b2e25e7452a17dde4b07da837fb8766c92890b03c0b36815a71e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b419882ef4b2e25e7452a17dde4b07da837fb8766c92890b03c0b36815a71e3->enter($__internal_1b419882ef4b2e25e7452a17dde4b07da837fb8766c92890b03c0b36815a71e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_e164f8972133d869f7285d13103295d707b76309897bafef20f3605f8a8e288a->leave($__internal_e164f8972133d869f7285d13103295d707b76309897bafef20f3605f8a8e288a_prof);

        
        $__internal_1b419882ef4b2e25e7452a17dde4b07da837fb8766c92890b03c0b36815a71e3->leave($__internal_1b419882ef4b2e25e7452a17dde4b07da837fb8766c92890b03c0b36815a71e3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "C:\\wamp64\\www\\SCHOOL-master\\school\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_end.html.php");
    }
}
