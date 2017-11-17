<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_40cd430c664ec2a698c7b428b63a8a71eb1673fcadbbc2f297210694c6bd80fa extends Twig_Template
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
        $__internal_d0513077ffd6b77e441522d87a94c496175f81af8d23c0ba90193cc9933cb6a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0513077ffd6b77e441522d87a94c496175f81af8d23c0ba90193cc9933cb6a6->enter($__internal_d0513077ffd6b77e441522d87a94c496175f81af8d23c0ba90193cc9933cb6a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_404ad2e1c9b0b858e19ae69c965b3003aad8584af2e7672e5e6f087fdab8b355 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_404ad2e1c9b0b858e19ae69c965b3003aad8584af2e7672e5e6f087fdab8b355->enter($__internal_404ad2e1c9b0b858e19ae69c965b3003aad8584af2e7672e5e6f087fdab8b355_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_d0513077ffd6b77e441522d87a94c496175f81af8d23c0ba90193cc9933cb6a6->leave($__internal_d0513077ffd6b77e441522d87a94c496175f81af8d23c0ba90193cc9933cb6a6_prof);

        
        $__internal_404ad2e1c9b0b858e19ae69c965b3003aad8584af2e7672e5e6f087fdab8b355->leave($__internal_404ad2e1c9b0b858e19ae69c965b3003aad8584af2e7672e5e6f087fdab8b355_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
