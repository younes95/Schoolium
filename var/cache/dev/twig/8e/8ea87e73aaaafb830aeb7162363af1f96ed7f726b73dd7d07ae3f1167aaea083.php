<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_bf043cdc1f86180e4b139ce9ecd758283ee7565b0ba4e5ddd009afa4c62823f7 extends Twig_Template
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
        $__internal_417414e71bde820c1e02164260f87c1718780c16477e885d5903f4403f1191d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_417414e71bde820c1e02164260f87c1718780c16477e885d5903f4403f1191d9->enter($__internal_417414e71bde820c1e02164260f87c1718780c16477e885d5903f4403f1191d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_7deda10e9e5c6da37050109b3b95165d7f79f87e055df20dfa2993c688505602 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7deda10e9e5c6da37050109b3b95165d7f79f87e055df20dfa2993c688505602->enter($__internal_7deda10e9e5c6da37050109b3b95165d7f79f87e055df20dfa2993c688505602_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_417414e71bde820c1e02164260f87c1718780c16477e885d5903f4403f1191d9->leave($__internal_417414e71bde820c1e02164260f87c1718780c16477e885d5903f4403f1191d9_prof);

        
        $__internal_7deda10e9e5c6da37050109b3b95165d7f79f87e055df20dfa2993c688505602->leave($__internal_7deda10e9e5c6da37050109b3b95165d7f79f87e055df20dfa2993c688505602_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "C:\\wamp64\\www\\SCHOOL-master\\school\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\hidden_row.html.php");
    }
}
