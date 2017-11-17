<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_7cfbe0a4f24069a03a1cc9155454a34bf83ecbb17d3979acc6625d7fb8070744 extends Twig_Template
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
        $__internal_d5f724ee0fb2834fcfed0ab21cae6271603831d569199a24f8c932443d51610f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5f724ee0fb2834fcfed0ab21cae6271603831d569199a24f8c932443d51610f->enter($__internal_d5f724ee0fb2834fcfed0ab21cae6271603831d569199a24f8c932443d51610f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_bc41b21fae9340b761fecb4f362617125ea4082251002677b84ac5a48888e45c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc41b21fae9340b761fecb4f362617125ea4082251002677b84ac5a48888e45c->enter($__internal_bc41b21fae9340b761fecb4f362617125ea4082251002677b84ac5a48888e45c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_d5f724ee0fb2834fcfed0ab21cae6271603831d569199a24f8c932443d51610f->leave($__internal_d5f724ee0fb2834fcfed0ab21cae6271603831d569199a24f8c932443d51610f_prof);

        
        $__internal_bc41b21fae9340b761fecb4f362617125ea4082251002677b84ac5a48888e45c->leave($__internal_bc41b21fae9340b761fecb4f362617125ea4082251002677b84ac5a48888e45c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
