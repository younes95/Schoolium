<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_4f4a32f7b310cc5afc82594fef7b2b0764f9d4f28a83c54922512696ce008e12 extends Twig_Template
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
        $__internal_ded752f739ae170d87feb5bde3f86e6fbfceed37d3d379d5b732b34c2d62f58b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ded752f739ae170d87feb5bde3f86e6fbfceed37d3d379d5b732b34c2d62f58b->enter($__internal_ded752f739ae170d87feb5bde3f86e6fbfceed37d3d379d5b732b34c2d62f58b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_3cf5d63b534ac3683fbbf184a648650046f966d141e4d61dc31d018cabcd1f56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cf5d63b534ac3683fbbf184a648650046f966d141e4d61dc31d018cabcd1f56->enter($__internal_3cf5d63b534ac3683fbbf184a648650046f966d141e4d61dc31d018cabcd1f56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_ded752f739ae170d87feb5bde3f86e6fbfceed37d3d379d5b732b34c2d62f58b->leave($__internal_ded752f739ae170d87feb5bde3f86e6fbfceed37d3d379d5b732b34c2d62f58b_prof);

        
        $__internal_3cf5d63b534ac3683fbbf184a648650046f966d141e4d61dc31d018cabcd1f56->leave($__internal_3cf5d63b534ac3683fbbf184a648650046f966d141e4d61dc31d018cabcd1f56_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "C:\\wamp64\\www\\SCHOOL-master\\school\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_attributes.html.php");
    }
}
