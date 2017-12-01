<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_0a1615bded4cabb1e00a10feca8d0f78834832c28666e5f395da923e53934f20 extends Twig_Template
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
        $__internal_48ed2d0f2341d3e8a4802f94959a22073f3be84d819c20cafeb79b304817e2a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48ed2d0f2341d3e8a4802f94959a22073f3be84d819c20cafeb79b304817e2a1->enter($__internal_48ed2d0f2341d3e8a4802f94959a22073f3be84d819c20cafeb79b304817e2a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_5a364b5904b69ea72aff41ce8260c4c03fb717907b7a6694c51896f15c3f5cf3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a364b5904b69ea72aff41ce8260c4c03fb717907b7a6694c51896f15c3f5cf3->enter($__internal_5a364b5904b69ea72aff41ce8260c4c03fb717907b7a6694c51896f15c3f5cf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_48ed2d0f2341d3e8a4802f94959a22073f3be84d819c20cafeb79b304817e2a1->leave($__internal_48ed2d0f2341d3e8a4802f94959a22073f3be84d819c20cafeb79b304817e2a1_prof);

        
        $__internal_5a364b5904b69ea72aff41ce8260c4c03fb717907b7a6694c51896f15c3f5cf3->leave($__internal_5a364b5904b69ea72aff41ce8260c4c03fb717907b7a6694c51896f15c3f5cf3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "C:\\wamp64\\www\\SCHOOL-master\\school\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\percent_widget.html.php");
    }
}
