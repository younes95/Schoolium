<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_18d6bc7d5888e75d39b4a9f128d510682c0b27c8a8d9c02875cee9d41a33c64b extends Twig_Template
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
        $__internal_cd71a9bcc6d1a9ce4e1b6317f99ea43fb45360606f9b1edc7624afc1d0618c4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd71a9bcc6d1a9ce4e1b6317f99ea43fb45360606f9b1edc7624afc1d0618c4b->enter($__internal_cd71a9bcc6d1a9ce4e1b6317f99ea43fb45360606f9b1edc7624afc1d0618c4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_17ff0a7256fb43ef8debb47680ab744f81f7af6d87ae96f37512affae3c72241 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17ff0a7256fb43ef8debb47680ab744f81f7af6d87ae96f37512affae3c72241->enter($__internal_17ff0a7256fb43ef8debb47680ab744f81f7af6d87ae96f37512affae3c72241_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_cd71a9bcc6d1a9ce4e1b6317f99ea43fb45360606f9b1edc7624afc1d0618c4b->leave($__internal_cd71a9bcc6d1a9ce4e1b6317f99ea43fb45360606f9b1edc7624afc1d0618c4b_prof);

        
        $__internal_17ff0a7256fb43ef8debb47680ab744f81f7af6d87ae96f37512affae3c72241->leave($__internal_17ff0a7256fb43ef8debb47680ab744f81f7af6d87ae96f37512affae3c72241_prof);

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
", "@Framework/Form/repeated_row.html.php", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
