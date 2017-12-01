<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_9676b17fdd24f413452ce75aed249516f8713df58005b26b244c2201ca0e9782 extends Twig_Template
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
        $__internal_c72c87de130542ccdebe6208fabcf926e13af00c1a6a8c87dbb9833b39aae8eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c72c87de130542ccdebe6208fabcf926e13af00c1a6a8c87dbb9833b39aae8eb->enter($__internal_c72c87de130542ccdebe6208fabcf926e13af00c1a6a8c87dbb9833b39aae8eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_a29b7daa4c68065c70e7193ca64765f00bcbb0f34c373c0a5c023a073a78774c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a29b7daa4c68065c70e7193ca64765f00bcbb0f34c373c0a5c023a073a78774c->enter($__internal_a29b7daa4c68065c70e7193ca64765f00bcbb0f34c373c0a5c023a073a78774c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_c72c87de130542ccdebe6208fabcf926e13af00c1a6a8c87dbb9833b39aae8eb->leave($__internal_c72c87de130542ccdebe6208fabcf926e13af00c1a6a8c87dbb9833b39aae8eb_prof);

        
        $__internal_a29b7daa4c68065c70e7193ca64765f00bcbb0f34c373c0a5c023a073a78774c->leave($__internal_a29b7daa4c68065c70e7193ca64765f00bcbb0f34c373c0a5c023a073a78774c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "C:\\wamp64\\www\\SCHOOL-master\\school\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_attributes.html.php");
    }
}
