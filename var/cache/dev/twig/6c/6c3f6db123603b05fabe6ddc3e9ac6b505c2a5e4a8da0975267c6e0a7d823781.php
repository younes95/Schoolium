<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_673fe3ba4983d51b7cae290d66088054512e0b920257a64bcbcaf7564562a928 extends Twig_Template
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
        $__internal_4966cafc54e3b261200b6dad2e47c69bc7fc39ab802231cd9bcf74edbd16a336 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4966cafc54e3b261200b6dad2e47c69bc7fc39ab802231cd9bcf74edbd16a336->enter($__internal_4966cafc54e3b261200b6dad2e47c69bc7fc39ab802231cd9bcf74edbd16a336_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_aa82cf10f56de483f85acfc3a494a85aca3667ab11a8fee12eff033c454430dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa82cf10f56de483f85acfc3a494a85aca3667ab11a8fee12eff033c454430dd->enter($__internal_aa82cf10f56de483f85acfc3a494a85aca3667ab11a8fee12eff033c454430dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_4966cafc54e3b261200b6dad2e47c69bc7fc39ab802231cd9bcf74edbd16a336->leave($__internal_4966cafc54e3b261200b6dad2e47c69bc7fc39ab802231cd9bcf74edbd16a336_prof);

        
        $__internal_aa82cf10f56de483f85acfc3a494a85aca3667ab11a8fee12eff033c454430dd->leave($__internal_aa82cf10f56de483f85acfc3a494a85aca3667ab11a8fee12eff033c454430dd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "C:\\wamp64\\www\\SCHOOL-master\\school\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
