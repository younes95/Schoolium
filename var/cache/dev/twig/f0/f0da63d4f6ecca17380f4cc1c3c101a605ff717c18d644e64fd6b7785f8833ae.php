<?php

/* :adminsViews:schoolAdmin.html.twig */
class __TwigTemplate_cae7212a43a8c2348971ab8965524a789c7c70b15c1a5bff43a9b39d767fba39 extends Twig_Template
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
        $__internal_96560ee93c0dbf781e240993b9e8d94619032d5c34bc4916e846f04779b02a06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96560ee93c0dbf781e240993b9e8d94619032d5c34bc4916e846f04779b02a06->enter($__internal_96560ee93c0dbf781e240993b9e8d94619032d5c34bc4916e846f04779b02a06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":adminsViews:schoolAdmin.html.twig"));

        $__internal_05a8700a8a9012353e4b2e42b4251702ead4157f15b87d3b3b7dc620d8025ea0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05a8700a8a9012353e4b2e42b4251702ead4157f15b87d3b3b7dc620d8025ea0->enter($__internal_05a8700a8a9012353e4b2e42b4251702ead4157f15b87d3b3b7dc620d8025ea0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":adminsViews:schoolAdmin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_96560ee93c0dbf781e240993b9e8d94619032d5c34bc4916e846f04779b02a06->leave($__internal_96560ee93c0dbf781e240993b9e8d94619032d5c34bc4916e846f04779b02a06_prof);

        
        $__internal_05a8700a8a9012353e4b2e42b4251702ead4157f15b87d3b3b7dc620d8025ea0->leave($__internal_05a8700a8a9012353e4b2e42b4251702ead4157f15b87d3b3b7dc620d8025ea0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_519c08abed1ba1831887820a17ad3c9fc2b48f29ec20c53821dec10641dea334 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_519c08abed1ba1831887820a17ad3c9fc2b48f29ec20c53821dec10641dea334->enter($__internal_519c08abed1ba1831887820a17ad3c9fc2b48f29ec20c53821dec10641dea334_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1d4d88fe102cd6191e088fddb467470f89b3047d1ac81a2a72ed64fb31b071ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d4d88fe102cd6191e088fddb467470f89b3047d1ac81a2a72ed64fb31b071ff->enter($__internal_1d4d88fe102cd6191e088fddb467470f89b3047d1ac81a2a72ed64fb31b071ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_1d4d88fe102cd6191e088fddb467470f89b3047d1ac81a2a72ed64fb31b071ff->leave($__internal_1d4d88fe102cd6191e088fddb467470f89b3047d1ac81a2a72ed64fb31b071ff_prof);

        
        $__internal_519c08abed1ba1831887820a17ad3c9fc2b48f29ec20c53821dec10641dea334->leave($__internal_519c08abed1ba1831887820a17ad3c9fc2b48f29ec20c53821dec10641dea334_prof);

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
{% endblock %}", ":adminsViews:schoolAdmin.html.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\app/Resources\\views/adminsViews/schoolAdmin.html.twig");
    }
}
