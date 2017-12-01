<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_2a3d078fe6a6569732fb9059afe6eaf01595648b526a957ceea6782d30427a05 extends Twig_Template
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
        $__internal_cdb0905abe6efedc805b06418e20f92f834fa33fd5e2278c1fbdc877033f89f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdb0905abe6efedc805b06418e20f92f834fa33fd5e2278c1fbdc877033f89f2->enter($__internal_cdb0905abe6efedc805b06418e20f92f834fa33fd5e2278c1fbdc877033f89f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_3284b4765ad0fac9891bc2b7a54409e0ca39a246bb924e4c998dc8fe103ab34a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3284b4765ad0fac9891bc2b7a54409e0ca39a246bb924e4c998dc8fe103ab34a->enter($__internal_3284b4765ad0fac9891bc2b7a54409e0ca39a246bb924e4c998dc8fe103ab34a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_cdb0905abe6efedc805b06418e20f92f834fa33fd5e2278c1fbdc877033f89f2->leave($__internal_cdb0905abe6efedc805b06418e20f92f834fa33fd5e2278c1fbdc877033f89f2_prof);

        
        $__internal_3284b4765ad0fac9891bc2b7a54409e0ca39a246bb924e4c998dc8fe103ab34a->leave($__internal_3284b4765ad0fac9891bc2b7a54409e0ca39a246bb924e4c998dc8fe103ab34a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "C:\\wamp64\\www\\SCHOOL-master\\school\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\radio_widget.html.php");
    }
}
