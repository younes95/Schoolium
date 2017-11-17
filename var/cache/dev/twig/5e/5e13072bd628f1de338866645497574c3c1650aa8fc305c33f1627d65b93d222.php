<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_76f6038beb39054a0be9ae0e32108dfcb82589afe85f4da4b7e44392685eccd5 extends Twig_Template
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
        $__internal_31accbc55961a72a1d570c42f842fdff37e936e00f0a244be50c0b42fae9a9dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31accbc55961a72a1d570c42f842fdff37e936e00f0a244be50c0b42fae9a9dd->enter($__internal_31accbc55961a72a1d570c42f842fdff37e936e00f0a244be50c0b42fae9a9dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_e38e267ba28a453eb3323e51c13fb7154bc65f5deb17fec2ccaae8a95908e8ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e38e267ba28a453eb3323e51c13fb7154bc65f5deb17fec2ccaae8a95908e8ca->enter($__internal_e38e267ba28a453eb3323e51c13fb7154bc65f5deb17fec2ccaae8a95908e8ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_31accbc55961a72a1d570c42f842fdff37e936e00f0a244be50c0b42fae9a9dd->leave($__internal_31accbc55961a72a1d570c42f842fdff37e936e00f0a244be50c0b42fae9a9dd_prof);

        
        $__internal_e38e267ba28a453eb3323e51c13fb7154bc65f5deb17fec2ccaae8a95908e8ca->leave($__internal_e38e267ba28a453eb3323e51c13fb7154bc65f5deb17fec2ccaae8a95908e8ca_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
