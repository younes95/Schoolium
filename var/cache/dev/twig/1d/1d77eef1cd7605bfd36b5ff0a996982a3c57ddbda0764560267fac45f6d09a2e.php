<?php

/* :schoolsViews:listSchools.html.twig */
class __TwigTemplate_850c2ffe284d7a6dc88a3c96c8ab75551f1b3bad87076db2fe4c08d5858e2cf2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":schoolsViews:listSchools.html.twig", 1);
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
        $__internal_343bd038ae17a1c448528e55cc33a9b26969fabe4cf4d6dd980328f520f710c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_343bd038ae17a1c448528e55cc33a9b26969fabe4cf4d6dd980328f520f710c6->enter($__internal_343bd038ae17a1c448528e55cc33a9b26969fabe4cf4d6dd980328f520f710c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":schoolsViews:listSchools.html.twig"));

        $__internal_22c17a902c36638d910b0326ea02ef0bd88fddba1324570c8aaa35839ea1e266 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22c17a902c36638d910b0326ea02ef0bd88fddba1324570c8aaa35839ea1e266->enter($__internal_22c17a902c36638d910b0326ea02ef0bd88fddba1324570c8aaa35839ea1e266_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":schoolsViews:listSchools.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_343bd038ae17a1c448528e55cc33a9b26969fabe4cf4d6dd980328f520f710c6->leave($__internal_343bd038ae17a1c448528e55cc33a9b26969fabe4cf4d6dd980328f520f710c6_prof);

        
        $__internal_22c17a902c36638d910b0326ea02ef0bd88fddba1324570c8aaa35839ea1e266->leave($__internal_22c17a902c36638d910b0326ea02ef0bd88fddba1324570c8aaa35839ea1e266_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_bc24e5766a3ab98e86d6455da664d85f2c151de3d6e6d0323f27df5de75b632b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc24e5766a3ab98e86d6455da664d85f2c151de3d6e6d0323f27df5de75b632b->enter($__internal_bc24e5766a3ab98e86d6455da664d85f2c151de3d6e6d0323f27df5de75b632b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_69f38f7b727cd7d087b63c2c68c7e2e82541a19086911833b712468b91e13641 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69f38f7b727cd7d087b63c2c68c7e2e82541a19086911833b712468b91e13641->enter($__internal_69f38f7b727cd7d087b63c2c68c7e2e82541a19086911833b712468b91e13641_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("schools"), "html", null, true);
        echo "</h1>
\t<ol>
\t\t";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ecoles"]) ? $context["ecoles"] : $this->getContext($context, "ecoles")));
        foreach ($context['_seq'] as $context["_key"] => $context["ecole"]) {
            // line 7
            echo "\t\t\t<li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ecole"], "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ecole"], "ville", array()), "html", null, true);
            echo " <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editSchool", array("id" => $this->getAttribute($context["ecole"], "id", array()))), "html", null, true);
            echo "\">Modifier</a> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("removeSchool", array("id" => $this->getAttribute($context["ecole"], "id", array()))), "html", null, true);
            echo "\">Supprimer</a> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profileSchool", array("id" => $this->getAttribute($context["ecole"], "id", array()))), "html", null, true);
            echo "\">Profile</a></li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ecole'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "\t</ol>
\t
";
        
        $__internal_69f38f7b727cd7d087b63c2c68c7e2e82541a19086911833b712468b91e13641->leave($__internal_69f38f7b727cd7d087b63c2c68c7e2e82541a19086911833b712468b91e13641_prof);

        
        $__internal_bc24e5766a3ab98e86d6455da664d85f2c151de3d6e6d0323f27df5de75b632b->leave($__internal_bc24e5766a3ab98e86d6455da664d85f2c151de3d6e6d0323f27df5de75b632b_prof);

    }

    public function getTemplateName()
    {
        return ":schoolsViews:listSchools.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 9,  61 => 7,  57 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
<h1>{{'list'|trans}} {{'schools'|trans}}</h1>
\t<ol>
\t\t{% for ecole in ecoles %}
\t\t\t<li>{{ ecole.nom}} {{ ecole.ville}} <a href=\"{{ path('editSchool',{'id':ecole.id})}}\">Modifier</a> <a href=\"{{ path('removeSchool',{'id':ecole.id})}}\">Supprimer</a> <a href=\"{{ path('profileSchool',{'id':ecole.id})}}\">Profile</a></li>
\t\t{% endfor %}
\t</ol>
\t
{% endblock %}", ":schoolsViews:listSchools.html.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\app/Resources\\views/schoolsViews/listSchools.html.twig");
    }
}
