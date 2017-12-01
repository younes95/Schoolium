<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_b094c28242c8a6aa22c240152eb1e54c1585c524dc3ec0bac29435664712c317 extends Twig_Template
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
        $__internal_04df22cdf7c4577cec334ef4e103516d0d8d8f7932138dfcd3b0f8742916e58d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04df22cdf7c4577cec334ef4e103516d0d8d8f7932138dfcd3b0f8742916e58d->enter($__internal_04df22cdf7c4577cec334ef4e103516d0d8d8f7932138dfcd3b0f8742916e58d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_78cf3f47d6fd183e5a5548c334c1ac33c0d4966b956b586d5dd91fc48e408093 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78cf3f47d6fd183e5a5548c334c1ac33c0d4966b956b586d5dd91fc48e408093->enter($__internal_78cf3f47d6fd183e5a5548c334c1ac33c0d4966b956b586d5dd91fc48e408093_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_04df22cdf7c4577cec334ef4e103516d0d8d8f7932138dfcd3b0f8742916e58d->leave($__internal_04df22cdf7c4577cec334ef4e103516d0d8d8f7932138dfcd3b0f8742916e58d_prof);

        
        $__internal_78cf3f47d6fd183e5a5548c334c1ac33c0d4966b956b586d5dd91fc48e408093->leave($__internal_78cf3f47d6fd183e5a5548c334c1ac33c0d4966b956b586d5dd91fc48e408093_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "C:\\wamp64\\www\\SCHOOL-master\\school\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
