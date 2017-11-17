<?php

/* :default:index.html.twig */
class __TwigTemplate_5979ee791d4b96b1df90daa28ae5681340c1f71c32ca1e118713ae242dd98bfc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:index.html.twig", 1);
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
        $__internal_9f790d969d2f2ef6848880d57b6fe3d4303e9f3a074b6c85f3d2b630f8fb5c63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f790d969d2f2ef6848880d57b6fe3d4303e9f3a074b6c85f3d2b630f8fb5c63->enter($__internal_9f790d969d2f2ef6848880d57b6fe3d4303e9f3a074b6c85f3d2b630f8fb5c63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        $__internal_695bc4d5ea9ed4fbbdcc1106e05e1a33ccd5006eed632c5896fec5903705d640 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_695bc4d5ea9ed4fbbdcc1106e05e1a33ccd5006eed632c5896fec5903705d640->enter($__internal_695bc4d5ea9ed4fbbdcc1106e05e1a33ccd5006eed632c5896fec5903705d640_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f790d969d2f2ef6848880d57b6fe3d4303e9f3a074b6c85f3d2b630f8fb5c63->leave($__internal_9f790d969d2f2ef6848880d57b6fe3d4303e9f3a074b6c85f3d2b630f8fb5c63_prof);

        
        $__internal_695bc4d5ea9ed4fbbdcc1106e05e1a33ccd5006eed632c5896fec5903705d640->leave($__internal_695bc4d5ea9ed4fbbdcc1106e05e1a33ccd5006eed632c5896fec5903705d640_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2b0a77cbe69bc8ff1e6e39da45efcbb6b2cd2d35ececbcaf945805ce5e998577 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b0a77cbe69bc8ff1e6e39da45efcbb6b2cd2d35ececbcaf945805ce5e998577->enter($__internal_2b0a77cbe69bc8ff1e6e39da45efcbb6b2cd2d35ececbcaf945805ce5e998577_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1657b7d14a8c27ff5a4a624a5c934c24e234550b6aa6d33525afd9d58c10c646 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1657b7d14a8c27ff5a4a624a5c934c24e234550b6aa6d33525afd9d58c10c646->enter($__internal_1657b7d14a8c27ff5a4a624a5c934c24e234550b6aa6d33525afd9d58c10c646_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        <div class=\"row\" style=\"text-align: center;\">
            <h1>Bienvenue chez Schoolium</h1>
            ";
        // line 7
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 8
            echo "            <h1>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
            echo "</h1>
            ";
        }
        // line 10
        echo "        </div>
    </div>
";
        
        $__internal_1657b7d14a8c27ff5a4a624a5c934c24e234550b6aa6d33525afd9d58c10c646->leave($__internal_1657b7d14a8c27ff5a4a624a5c934c24e234550b6aa6d33525afd9d58c10c646_prof);

        
        $__internal_2b0a77cbe69bc8ff1e6e39da45efcbb6b2cd2d35ececbcaf945805ce5e998577->leave($__internal_2b0a77cbe69bc8ff1e6e39da45efcbb6b2cd2d35ececbcaf945805ce5e998577_prof);

    }

    public function getTemplateName()
    {
        return ":default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 10,  56 => 8,  54 => 7,  49 => 4,  40 => 3,  11 => 1,);
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
        <div class=\"row\" style=\"text-align: center;\">
            <h1>Bienvenue chez Schoolium</h1>
            {% if  app.user %}
            <h1>{{app.user.nom}}</h1>
            {% endif %}
        </div>
    </div>
{% endblock %}", ":default:index.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/views/default/index.html.twig");
    }
}
