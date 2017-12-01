<?php

/* adminsViews/schoolAdmin.html.twig */
class __TwigTemplate_e89f1678fbfb0284e0323104f24bd10eec8c53d5ea2300aba64baaca38f8949d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "adminsViews/schoolAdmin.html.twig", 1);
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
        $__internal_595d568ce00051b03e3e04805b31b186d09aac8cef2d5c83fc097a00b86b3cf9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_595d568ce00051b03e3e04805b31b186d09aac8cef2d5c83fc097a00b86b3cf9->enter($__internal_595d568ce00051b03e3e04805b31b186d09aac8cef2d5c83fc097a00b86b3cf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "adminsViews/schoolAdmin.html.twig"));

        $__internal_18193ec9cc1ce55adc9d350ed0ba90a78a151e2b6f52e583adcb9e2516fdc5cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18193ec9cc1ce55adc9d350ed0ba90a78a151e2b6f52e583adcb9e2516fdc5cc->enter($__internal_18193ec9cc1ce55adc9d350ed0ba90a78a151e2b6f52e583adcb9e2516fdc5cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "adminsViews/schoolAdmin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_595d568ce00051b03e3e04805b31b186d09aac8cef2d5c83fc097a00b86b3cf9->leave($__internal_595d568ce00051b03e3e04805b31b186d09aac8cef2d5c83fc097a00b86b3cf9_prof);

        
        $__internal_18193ec9cc1ce55adc9d350ed0ba90a78a151e2b6f52e583adcb9e2516fdc5cc->leave($__internal_18193ec9cc1ce55adc9d350ed0ba90a78a151e2b6f52e583adcb9e2516fdc5cc_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_053e0ee64026e770f934fddd9b3ca493fc96108608470cc7eaf9982b4c0ef6b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_053e0ee64026e770f934fddd9b3ca493fc96108608470cc7eaf9982b4c0ef6b9->enter($__internal_053e0ee64026e770f934fddd9b3ca493fc96108608470cc7eaf9982b4c0ef6b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_92925a02ca5e9f4a5341c608172b611f8ec2a617d801e19e23e03c08bed59b6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92925a02ca5e9f4a5341c608172b611f8ec2a617d801e19e23e03c08bed59b6d->enter($__internal_92925a02ca5e9f4a5341c608172b611f8ec2a617d801e19e23e03c08bed59b6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_92925a02ca5e9f4a5341c608172b611f8ec2a617d801e19e23e03c08bed59b6d->leave($__internal_92925a02ca5e9f4a5341c608172b611f8ec2a617d801e19e23e03c08bed59b6d_prof);

        
        $__internal_053e0ee64026e770f934fddd9b3ca493fc96108608470cc7eaf9982b4c0ef6b9->leave($__internal_053e0ee64026e770f934fddd9b3ca493fc96108608470cc7eaf9982b4c0ef6b9_prof);

    }

    public function getTemplateName()
    {
        return "adminsViews/schoolAdmin.html.twig";
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
{% endblock %}", "adminsViews/schoolAdmin.html.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\app\\Resources\\views\\adminsViews\\schoolAdmin.html.twig");
    }
}
