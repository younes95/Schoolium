<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_b60c8463566e2be5e09097f3595b0f9e7e853d2c2ecd5693383cf26df9e43075 extends Twig_Template
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
        $__internal_3b55f06832c3415ea35a7d8589d4c9124031a26931d7de5cc0c80082efafcfa6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b55f06832c3415ea35a7d8589d4c9124031a26931d7de5cc0c80082efafcfa6->enter($__internal_3b55f06832c3415ea35a7d8589d4c9124031a26931d7de5cc0c80082efafcfa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_43248e46d7c806e82996f69e8eaf08be16bc02808d67b2b7e57a81a8fc7c7351 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43248e46d7c806e82996f69e8eaf08be16bc02808d67b2b7e57a81a8fc7c7351->enter($__internal_43248e46d7c806e82996f69e8eaf08be16bc02808d67b2b7e57a81a8fc7c7351_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_3b55f06832c3415ea35a7d8589d4c9124031a26931d7de5cc0c80082efafcfa6->leave($__internal_3b55f06832c3415ea35a7d8589d4c9124031a26931d7de5cc0c80082efafcfa6_prof);

        
        $__internal_43248e46d7c806e82996f69e8eaf08be16bc02808d67b2b7e57a81a8fc7c7351->leave($__internal_43248e46d7c806e82996f69e8eaf08be16bc02808d67b2b7e57a81a8fc7c7351_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "C:\\wamp64\\www\\SCHOOL-master\\school\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_errors.html.php");
    }
}
