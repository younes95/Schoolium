<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_8eaa0e9ce7636424c624d1e3524ae94387599e201f95a098025a82cbca056ec1 extends Twig_Template
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
        $__internal_cb525a2f668de035f8d7215d236ee03dec45c3ebca053cfbc47337e225dc6351 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb525a2f668de035f8d7215d236ee03dec45c3ebca053cfbc47337e225dc6351->enter($__internal_cb525a2f668de035f8d7215d236ee03dec45c3ebca053cfbc47337e225dc6351_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_e2328337d0e93b623ac64774f42403930dc5beed8932186e0ef247d5f310c8b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2328337d0e93b623ac64774f42403930dc5beed8932186e0ef247d5f310c8b1->enter($__internal_e2328337d0e93b623ac64774f42403930dc5beed8932186e0ef247d5f310c8b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_cb525a2f668de035f8d7215d236ee03dec45c3ebca053cfbc47337e225dc6351->leave($__internal_cb525a2f668de035f8d7215d236ee03dec45c3ebca053cfbc47337e225dc6351_prof);

        
        $__internal_e2328337d0e93b623ac64774f42403930dc5beed8932186e0ef247d5f310c8b1->leave($__internal_e2328337d0e93b623ac64774f42403930dc5beed8932186e0ef247d5f310c8b1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "C:\\wamp64\\www\\SCHOOL-master\\school\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
