<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_a45c09c8519e4c4f4d1ef042bc714e49b8f5720ba4b775d01d36ed7edc7ab329 extends Twig_Template
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
        $__internal_29d20403b0c67e18cf11d1f5f1b204945ab169c9fd02ca0627f0b818526a47c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29d20403b0c67e18cf11d1f5f1b204945ab169c9fd02ca0627f0b818526a47c2->enter($__internal_29d20403b0c67e18cf11d1f5f1b204945ab169c9fd02ca0627f0b818526a47c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_303936b3d3e9ccf5b34b6eb36dd0f49df709811bc16be4b8320d81e889bcf159 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_303936b3d3e9ccf5b34b6eb36dd0f49df709811bc16be4b8320d81e889bcf159->enter($__internal_303936b3d3e9ccf5b34b6eb36dd0f49df709811bc16be4b8320d81e889bcf159_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_29d20403b0c67e18cf11d1f5f1b204945ab169c9fd02ca0627f0b818526a47c2->leave($__internal_29d20403b0c67e18cf11d1f5f1b204945ab169c9fd02ca0627f0b818526a47c2_prof);

        
        $__internal_303936b3d3e9ccf5b34b6eb36dd0f49df709811bc16be4b8320d81e889bcf159->leave($__internal_303936b3d3e9ccf5b34b6eb36dd0f49df709811bc16be4b8320d81e889bcf159_prof);

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
", "@Framework/Form/form_enctype.html.php", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
