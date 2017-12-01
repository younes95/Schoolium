<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_fb2104fa7e1229b433c113d994690d41bc7694aa76337c640acd788d9ba1beac extends Twig_Template
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
        $__internal_cfd4ed28d329ea887ef6f9fbad0381fb2c7f670a14287a3093ce8d7ed867f332 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfd4ed28d329ea887ef6f9fbad0381fb2c7f670a14287a3093ce8d7ed867f332->enter($__internal_cfd4ed28d329ea887ef6f9fbad0381fb2c7f670a14287a3093ce8d7ed867f332_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_e385730873970ad153a56a6f6b518780cbced7050d4e2308091cb80e460ea1fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e385730873970ad153a56a6f6b518780cbced7050d4e2308091cb80e460ea1fb->enter($__internal_e385730873970ad153a56a6f6b518780cbced7050d4e2308091cb80e460ea1fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_cfd4ed28d329ea887ef6f9fbad0381fb2c7f670a14287a3093ce8d7ed867f332->leave($__internal_cfd4ed28d329ea887ef6f9fbad0381fb2c7f670a14287a3093ce8d7ed867f332_prof);

        
        $__internal_e385730873970ad153a56a6f6b518780cbced7050d4e2308091cb80e460ea1fb->leave($__internal_e385730873970ad153a56a6f6b518780cbced7050d4e2308091cb80e460ea1fb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "C:\\wamp64\\www\\SCHOOL-master\\school\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
