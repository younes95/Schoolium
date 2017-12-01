<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_6ac95d2c8d1ebe9907d9f429f869a2eef34762df24d4ec7e26554055ef566658 extends Twig_Template
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
        $__internal_b7233fca90d82bde016e2e81dc54bd8b9cb646accc2516eda1e8810e954519c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7233fca90d82bde016e2e81dc54bd8b9cb646accc2516eda1e8810e954519c5->enter($__internal_b7233fca90d82bde016e2e81dc54bd8b9cb646accc2516eda1e8810e954519c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_c725726decf4f6a0cb62ab8b82d438e08c862087c0a8cfdba4bf33bac36ec975 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c725726decf4f6a0cb62ab8b82d438e08c862087c0a8cfdba4bf33bac36ec975->enter($__internal_c725726decf4f6a0cb62ab8b82d438e08c862087c0a8cfdba4bf33bac36ec975_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_b7233fca90d82bde016e2e81dc54bd8b9cb646accc2516eda1e8810e954519c5->leave($__internal_b7233fca90d82bde016e2e81dc54bd8b9cb646accc2516eda1e8810e954519c5_prof);

        
        $__internal_c725726decf4f6a0cb62ab8b82d438e08c862087c0a8cfdba4bf33bac36ec975->leave($__internal_c725726decf4f6a0cb62ab8b82d438e08c862087c0a8cfdba4bf33bac36ec975_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "C:\\wamp64\\www\\SCHOOL-master\\school\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\repeated_row.html.php");
    }
}
