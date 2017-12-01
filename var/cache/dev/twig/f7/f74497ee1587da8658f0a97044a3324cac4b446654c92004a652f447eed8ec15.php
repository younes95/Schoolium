<?php

/* :default:index.html.twig */
class __TwigTemplate_d487a4d24fb93b804c89e7fcf033ea5a64d5e508c1923030e27a59433d3c50f6 extends Twig_Template
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
        $__internal_81fe31c0968d5f382b8382e2bd133283480981eb8c0ef1cc71babbcf57766a7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81fe31c0968d5f382b8382e2bd133283480981eb8c0ef1cc71babbcf57766a7b->enter($__internal_81fe31c0968d5f382b8382e2bd133283480981eb8c0ef1cc71babbcf57766a7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        $__internal_aec2cf5eb487abd993cf432dd158d6f5f22d071847fa5d9d56bea4616ca07510 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aec2cf5eb487abd993cf432dd158d6f5f22d071847fa5d9d56bea4616ca07510->enter($__internal_aec2cf5eb487abd993cf432dd158d6f5f22d071847fa5d9d56bea4616ca07510_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_81fe31c0968d5f382b8382e2bd133283480981eb8c0ef1cc71babbcf57766a7b->leave($__internal_81fe31c0968d5f382b8382e2bd133283480981eb8c0ef1cc71babbcf57766a7b_prof);

        
        $__internal_aec2cf5eb487abd993cf432dd158d6f5f22d071847fa5d9d56bea4616ca07510->leave($__internal_aec2cf5eb487abd993cf432dd158d6f5f22d071847fa5d9d56bea4616ca07510_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a9416edc9e7c1e283edafe61e3517a31346d4c91545bb472cfa1f61a1cc4b4f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9416edc9e7c1e283edafe61e3517a31346d4c91545bb472cfa1f61a1cc4b4f2->enter($__internal_a9416edc9e7c1e283edafe61e3517a31346d4c91545bb472cfa1f61a1cc4b4f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_842e17ce95a95b4f0978cefb21503c3681b637651ec26776c3091f384b794601 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_842e17ce95a95b4f0978cefb21503c3681b637651ec26776c3091f384b794601->enter($__internal_842e17ce95a95b4f0978cefb21503c3681b637651ec26776c3091f384b794601_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_842e17ce95a95b4f0978cefb21503c3681b637651ec26776c3091f384b794601->leave($__internal_842e17ce95a95b4f0978cefb21503c3681b637651ec26776c3091f384b794601_prof);

        
        $__internal_a9416edc9e7c1e283edafe61e3517a31346d4c91545bb472cfa1f61a1cc4b4f2->leave($__internal_a9416edc9e7c1e283edafe61e3517a31346d4c91545bb472cfa1f61a1cc4b4f2_prof);

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
{% endblock %}", ":default:index.html.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\app/Resources\\views/default/index.html.twig");
    }
}
