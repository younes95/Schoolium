<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_9f579a794f7c9498e8b150b6fec5db9fd656599e809278d9031a4f35d2670800 extends Twig_Template
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
        $__internal_a6bd1977ac5dedc572e60f04d1f87215bf180db929bcbfb5aecbe321eafa9305 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6bd1977ac5dedc572e60f04d1f87215bf180db929bcbfb5aecbe321eafa9305->enter($__internal_a6bd1977ac5dedc572e60f04d1f87215bf180db929bcbfb5aecbe321eafa9305_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_9061e716db627ebccdff0f6458f7598bfad70612dd15232b780af52876eb869d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9061e716db627ebccdff0f6458f7598bfad70612dd15232b780af52876eb869d->enter($__internal_9061e716db627ebccdff0f6458f7598bfad70612dd15232b780af52876eb869d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_a6bd1977ac5dedc572e60f04d1f87215bf180db929bcbfb5aecbe321eafa9305->leave($__internal_a6bd1977ac5dedc572e60f04d1f87215bf180db929bcbfb5aecbe321eafa9305_prof);

        
        $__internal_9061e716db627ebccdff0f6458f7598bfad70612dd15232b780af52876eb869d->leave($__internal_9061e716db627ebccdff0f6458f7598bfad70612dd15232b780af52876eb869d_prof);

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
", "@Framework/Form/form_end.html.php", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
