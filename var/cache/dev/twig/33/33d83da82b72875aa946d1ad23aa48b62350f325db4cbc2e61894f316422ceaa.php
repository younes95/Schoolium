<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_0e5449bc332f7b8239c2b5e329dd8a96f823be6bf406649db9be429086f4bd20 extends Twig_Template
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
        $__internal_83cb01c928ddc614cd1d4f6b9063ea97552d8073f3cbb7263addfd25898e9b91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83cb01c928ddc614cd1d4f6b9063ea97552d8073f3cbb7263addfd25898e9b91->enter($__internal_83cb01c928ddc614cd1d4f6b9063ea97552d8073f3cbb7263addfd25898e9b91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_1da42eea9570b31786b99748a12bc8aa52ebb6a7532b91f9a73fdc0fba6dd464 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1da42eea9570b31786b99748a12bc8aa52ebb6a7532b91f9a73fdc0fba6dd464->enter($__internal_1da42eea9570b31786b99748a12bc8aa52ebb6a7532b91f9a73fdc0fba6dd464_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_83cb01c928ddc614cd1d4f6b9063ea97552d8073f3cbb7263addfd25898e9b91->leave($__internal_83cb01c928ddc614cd1d4f6b9063ea97552d8073f3cbb7263addfd25898e9b91_prof);

        
        $__internal_1da42eea9570b31786b99748a12bc8aa52ebb6a7532b91f9a73fdc0fba6dd464->leave($__internal_1da42eea9570b31786b99748a12bc8aa52ebb6a7532b91f9a73fdc0fba6dd464_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
