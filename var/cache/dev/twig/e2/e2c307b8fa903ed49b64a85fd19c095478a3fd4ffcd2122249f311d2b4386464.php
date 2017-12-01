<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_4bb7a418deb75e4d57cbdc911417b03a3a155027b92ffac152ba20e558ae2b8f extends Twig_Template
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
        $__internal_61efd7c159a10dc40ebf50352e79b2c8addd67f8b018dad2ac2150e46a7668fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61efd7c159a10dc40ebf50352e79b2c8addd67f8b018dad2ac2150e46a7668fd->enter($__internal_61efd7c159a10dc40ebf50352e79b2c8addd67f8b018dad2ac2150e46a7668fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_c6c289dd54f9653d4e3cb631b695107c4c80f834e65980d63670204046693a2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6c289dd54f9653d4e3cb631b695107c4c80f834e65980d63670204046693a2b->enter($__internal_c6c289dd54f9653d4e3cb631b695107c4c80f834e65980d63670204046693a2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_61efd7c159a10dc40ebf50352e79b2c8addd67f8b018dad2ac2150e46a7668fd->leave($__internal_61efd7c159a10dc40ebf50352e79b2c8addd67f8b018dad2ac2150e46a7668fd_prof);

        
        $__internal_c6c289dd54f9653d4e3cb631b695107c4c80f834e65980d63670204046693a2b->leave($__internal_c6c289dd54f9653d4e3cb631b695107c4c80f834e65980d63670204046693a2b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "C:\\wamp64\\www\\SCHOOL-master\\school\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}
