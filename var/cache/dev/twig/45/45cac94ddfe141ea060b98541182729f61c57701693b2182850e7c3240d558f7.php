<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_80ddf62ff8cc628531d3ddca2de175b5b3d29ee6648e08290337d4d064fcc8f9 extends Twig_Template
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
        $__internal_afd59b8f9947a60ddde83897a42dfd3f83b2ae081a1386ddd6dd9e8292e17340 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afd59b8f9947a60ddde83897a42dfd3f83b2ae081a1386ddd6dd9e8292e17340->enter($__internal_afd59b8f9947a60ddde83897a42dfd3f83b2ae081a1386ddd6dd9e8292e17340_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_a96fd64d9e6db7f019e071199b3671493e8d51be24ae8da0969d37bca220f44f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a96fd64d9e6db7f019e071199b3671493e8d51be24ae8da0969d37bca220f44f->enter($__internal_a96fd64d9e6db7f019e071199b3671493e8d51be24ae8da0969d37bca220f44f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_afd59b8f9947a60ddde83897a42dfd3f83b2ae081a1386ddd6dd9e8292e17340->leave($__internal_afd59b8f9947a60ddde83897a42dfd3f83b2ae081a1386ddd6dd9e8292e17340_prof);

        
        $__internal_a96fd64d9e6db7f019e071199b3671493e8d51be24ae8da0969d37bca220f44f->leave($__internal_a96fd64d9e6db7f019e071199b3671493e8d51be24ae8da0969d37bca220f44f_prof);

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
", "@Framework/Form/button_row.html.php", "C:\\wamp64\\www\\SCHOOL-master\\school\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
