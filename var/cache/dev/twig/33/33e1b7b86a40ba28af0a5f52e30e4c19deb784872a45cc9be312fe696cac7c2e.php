<?php

/* travailrealise/add.html.twig */
class __TwigTemplate_257875fb1e7cc281405eb80c7b789e0d8edd6b3433a69e56e83ff34f031a8abc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "travailrealise/add.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_410385db946c09b1554f03c2403fbf84e6bbdfe464d821584c72be0b5480078e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_410385db946c09b1554f03c2403fbf84e6bbdfe464d821584c72be0b5480078e->enter($__internal_410385db946c09b1554f03c2403fbf84e6bbdfe464d821584c72be0b5480078e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "travailrealise/add.html.twig"));

        $__internal_361af08235410917d580279ce93f6afb0c94cd4feafdb3df0a76b4b748dbf81a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_361af08235410917d580279ce93f6afb0c94cd4feafdb3df0a76b4b748dbf81a->enter($__internal_361af08235410917d580279ce93f6afb0c94cd4feafdb3df0a76b4b748dbf81a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "travailrealise/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_410385db946c09b1554f03c2403fbf84e6bbdfe464d821584c72be0b5480078e->leave($__internal_410385db946c09b1554f03c2403fbf84e6bbdfe464d821584c72be0b5480078e_prof);

        
        $__internal_361af08235410917d580279ce93f6afb0c94cd4feafdb3df0a76b4b748dbf81a->leave($__internal_361af08235410917d580279ce93f6afb0c94cd4feafdb3df0a76b4b748dbf81a_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_bc9a65d520320684ba99a100def8c204d38c44a5fb3341d18e6c22bb08846180 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc9a65d520320684ba99a100def8c204d38c44a5fb3341d18e6c22bb08846180->enter($__internal_bc9a65d520320684ba99a100def8c204d38c44a5fb3341d18e6c22bb08846180_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8e7fa4ddeb0f2b72597a6d90a44efc5b2d963b7046c22ad8e229dadc37ad08b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e7fa4ddeb0f2b72597a6d90a44efc5b2d963b7046c22ad8e229dadc37ad08b9->enter($__internal_8e7fa4ddeb0f2b72597a6d90a44efc5b2d963b7046c22ad8e229dadc37ad08b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<div class=\"container\">
";
        if ($this->env->isDebug()) {
            // line 6
            \Symfony\Component\VarDumper\VarDumper::dump((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")));
        }
        // line 7
        echo "\t";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
\t\t
\t\t<button type=\"submit\">Valider</button>
\t";
        // line 10
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
</div>

";
        
        $__internal_8e7fa4ddeb0f2b72597a6d90a44efc5b2d963b7046c22ad8e229dadc37ad08b9->leave($__internal_8e7fa4ddeb0f2b72597a6d90a44efc5b2d963b7046c22ad8e229dadc37ad08b9_prof);

        
        $__internal_bc9a65d520320684ba99a100def8c204d38c44a5fb3341d18e6c22bb08846180->leave($__internal_bc9a65d520320684ba99a100def8c204d38c44a5fb3341d18e6c22bb08846180_prof);

    }

    public function getTemplateName()
    {
        return "travailrealise/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 10,  56 => 7,  53 => 6,  49 => 5,  40 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}


{% block body %}
<div class=\"container\">
{% dump(data) %}
\t{{ form_start(form) }}
\t\t
\t\t<button type=\"submit\">Valider</button>
\t{{ form_end(form) }}
</div>

{% endblock %}", "travailrealise/add.html.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\app\\Resources\\views\\travailrealise\\add.html.twig");
    }
}
