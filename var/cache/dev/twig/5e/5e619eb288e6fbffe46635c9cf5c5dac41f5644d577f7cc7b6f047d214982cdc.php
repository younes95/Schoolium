<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_a91a3b4322fa2e54aa441d59497315d55bbdf3dda35f906aa3ab94fbb1781251 extends Twig_Template
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
        $__internal_869dc4add6b69d0295f9a0b8a661c68168c4fdc4f4ebd1c2887dd2f50f928f9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_869dc4add6b69d0295f9a0b8a661c68168c4fdc4f4ebd1c2887dd2f50f928f9d->enter($__internal_869dc4add6b69d0295f9a0b8a661c68168c4fdc4f4ebd1c2887dd2f50f928f9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_b38d40d7a61974684646f4d199bcc9d32b86ff228f9b7052722d37d75c493470 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b38d40d7a61974684646f4d199bcc9d32b86ff228f9b7052722d37d75c493470->enter($__internal_b38d40d7a61974684646f4d199bcc9d32b86ff228f9b7052722d37d75c493470_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_869dc4add6b69d0295f9a0b8a661c68168c4fdc4f4ebd1c2887dd2f50f928f9d->leave($__internal_869dc4add6b69d0295f9a0b8a661c68168c4fdc4f4ebd1c2887dd2f50f928f9d_prof);

        
        $__internal_b38d40d7a61974684646f4d199bcc9d32b86ff228f9b7052722d37d75c493470->leave($__internal_b38d40d7a61974684646f4d199bcc9d32b86ff228f9b7052722d37d75c493470_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "C:\\wamp64\\www\\SCHOOL-master\\school\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\button_row.html.php");
    }
}
