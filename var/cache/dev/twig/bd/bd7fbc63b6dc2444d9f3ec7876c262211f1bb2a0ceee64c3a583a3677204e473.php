<?php

/* :adminsViews:schoolAdmin.html.twig */
class __TwigTemplate_91eefa702d2039a40d48911b0de027ba5039bfeda09bfa1f937ed13a22cf6ff5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":adminsViews:schoolAdmin.html.twig", 1);
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
        $__internal_5137d81e5fd0c4eea8a0ec21d52a7e8bd4f2e29d40e9250fd356650aa1f05b21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5137d81e5fd0c4eea8a0ec21d52a7e8bd4f2e29d40e9250fd356650aa1f05b21->enter($__internal_5137d81e5fd0c4eea8a0ec21d52a7e8bd4f2e29d40e9250fd356650aa1f05b21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":adminsViews:schoolAdmin.html.twig"));

        $__internal_5e03710daad0bae6a0c996e15ab53f4ab6dea2644ac9378fe6d2b429911d94bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e03710daad0bae6a0c996e15ab53f4ab6dea2644ac9378fe6d2b429911d94bf->enter($__internal_5e03710daad0bae6a0c996e15ab53f4ab6dea2644ac9378fe6d2b429911d94bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":adminsViews:schoolAdmin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5137d81e5fd0c4eea8a0ec21d52a7e8bd4f2e29d40e9250fd356650aa1f05b21->leave($__internal_5137d81e5fd0c4eea8a0ec21d52a7e8bd4f2e29d40e9250fd356650aa1f05b21_prof);

        
        $__internal_5e03710daad0bae6a0c996e15ab53f4ab6dea2644ac9378fe6d2b429911d94bf->leave($__internal_5e03710daad0bae6a0c996e15ab53f4ab6dea2644ac9378fe6d2b429911d94bf_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ecf9d3dae566c66ba9e39fca8fbe90d13671ea6677e0138d97457ccca0ac1c1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecf9d3dae566c66ba9e39fca8fbe90d13671ea6677e0138d97457ccca0ac1c1b->enter($__internal_ecf9d3dae566c66ba9e39fca8fbe90d13671ea6677e0138d97457ccca0ac1c1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d71fdfdb9320d7d689fc21b497859f27dea5dedf93c2110ab582b9ac3e7e9d2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d71fdfdb9320d7d689fc21b497859f27dea5dedf93c2110ab582b9ac3e7e9d2f->enter($__internal_d71fdfdb9320d7d689fc21b497859f27dea5dedf93c2110ab582b9ac3e7e9d2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Pas d'ecole associé à ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "prenom", array()), "html", null, true);
        echo " </h1>
<h2>Selectioner une Ecole</h2>\t
\t<ol>
\t\t";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ecoles"]) ? $context["ecoles"] : $this->getContext($context, "ecoles")));
        foreach ($context['_seq'] as $context["_key"] => $context["ecole"]) {
            // line 8
            echo "\t\t\t";
            if (($this->getAttribute($context["ecole"], "admin", array()) == null)) {
                // line 9
                echo "\t\t\t<li>
\t\t\t\t";
                // line 10
                echo twig_escape_filter($this->env, $this->getAttribute($context["ecole"], "nom", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["ecole"], "ville", array()), "html", null, true);
                echo " <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("assoSchool", array("id" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array()), "idp" => $this->getAttribute($context["ecole"], "id", array()))), "html", null, true);
                echo "\">Associer</a>
\t\t\t</li>
\t\t\t";
            }
            // line 13
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ecole'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "\t</ol>
";
        
        $__internal_d71fdfdb9320d7d689fc21b497859f27dea5dedf93c2110ab582b9ac3e7e9d2f->leave($__internal_d71fdfdb9320d7d689fc21b497859f27dea5dedf93c2110ab582b9ac3e7e9d2f_prof);

        
        $__internal_ecf9d3dae566c66ba9e39fca8fbe90d13671ea6677e0138d97457ccca0ac1c1b->leave($__internal_ecf9d3dae566c66ba9e39fca8fbe90d13671ea6677e0138d97457ccca0ac1c1b_prof);

    }

    public function getTemplateName()
    {
        return ":adminsViews:schoolAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 14,  78 => 13,  68 => 10,  65 => 9,  62 => 8,  58 => 7,  49 => 4,  40 => 3,  11 => 1,);
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
<h1>Pas d'ecole associé à {{admin.nom}} {{admin.prenom}} </h1>
<h2>Selectioner une Ecole</h2>\t
\t<ol>
\t\t{% for ecole in ecoles %}
\t\t\t{% if ecole.admin ==null %}
\t\t\t<li>
\t\t\t\t{{ ecole.nom}} {{ ecole.ville}} <a href=\"{{ path('assoSchool',{'id':admin.id,'idp':ecole.id})}}\">Associer</a>
\t\t\t</li>
\t\t\t{% endif %}
\t\t{% endfor %}
\t</ol>
{% endblock %}", ":adminsViews:schoolAdmin.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/views/adminsViews/schoolAdmin.html.twig");
    }
}
