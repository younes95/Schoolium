<?php

/* matieresViews/listMatieres.html.twig */
class __TwigTemplate_adabd2e285d91438b532884c90bbec8c98f0e19c30cd883e0ddaf8dc48881b62 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "matieresViews/listMatieres.html.twig", 1);
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
        $__internal_70808299169ebabfe068f2139cea758d77c6b595511915b57b1873ce6a4dbb74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70808299169ebabfe068f2139cea758d77c6b595511915b57b1873ce6a4dbb74->enter($__internal_70808299169ebabfe068f2139cea758d77c6b595511915b57b1873ce6a4dbb74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "matieresViews/listMatieres.html.twig"));

        $__internal_82fc9528c9e37970057c8eb790ffe80ef92e6faf88d0df8f77eed540c8122321 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82fc9528c9e37970057c8eb790ffe80ef92e6faf88d0df8f77eed540c8122321->enter($__internal_82fc9528c9e37970057c8eb790ffe80ef92e6faf88d0df8f77eed540c8122321_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "matieresViews/listMatieres.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_70808299169ebabfe068f2139cea758d77c6b595511915b57b1873ce6a4dbb74->leave($__internal_70808299169ebabfe068f2139cea758d77c6b595511915b57b1873ce6a4dbb74_prof);

        
        $__internal_82fc9528c9e37970057c8eb790ffe80ef92e6faf88d0df8f77eed540c8122321->leave($__internal_82fc9528c9e37970057c8eb790ffe80ef92e6faf88d0df8f77eed540c8122321_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c3ad27d66d93a0806f58aadcf3979bac7f215531d92f09e34db89eadb2f298af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3ad27d66d93a0806f58aadcf3979bac7f215531d92f09e34db89eadb2f298af->enter($__internal_c3ad27d66d93a0806f58aadcf3979bac7f215531d92f09e34db89eadb2f298af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_53a28fc02ef8af2ef1f52511be6dfc5667eadfd3999f807327cccc383b987dc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53a28fc02ef8af2ef1f52511be6dfc5667eadfd3999f807327cccc383b987dc6->enter($__internal_53a28fc02ef8af2ef1f52511be6dfc5667eadfd3999f807327cccc383b987dc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("matiere"), "html", null, true);
        echo "</h1>
\t<ol>
\t\t";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["matieres"] ?? $this->getContext($context, "matieres")));
        foreach ($context['_seq'] as $context["_key"] => $context["matiere"]) {
            // line 7
            echo "\t\t\t<li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["matiere"], "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["matiere"], "description", array()), "html", null, true);
            echo " <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editMatiere", array("id" => $this->getAttribute($context["matiere"], "id", array()))), "html", null, true);
            echo "\">Modifier</a> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("removeMatiere", array("id" => $this->getAttribute($context["matiere"], "id", array()))), "html", null, true);
            echo "\">Supprimer</a>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['matiere'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "\t</ol>
\t
";
        
        $__internal_53a28fc02ef8af2ef1f52511be6dfc5667eadfd3999f807327cccc383b987dc6->leave($__internal_53a28fc02ef8af2ef1f52511be6dfc5667eadfd3999f807327cccc383b987dc6_prof);

        
        $__internal_c3ad27d66d93a0806f58aadcf3979bac7f215531d92f09e34db89eadb2f298af->leave($__internal_c3ad27d66d93a0806f58aadcf3979bac7f215531d92f09e34db89eadb2f298af_prof);

    }

    public function getTemplateName()
    {
        return "matieresViews/listMatieres.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 9,  61 => 7,  57 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
<h1>{{'list'|trans}} {{'matiere'|trans}}</h1>
\t<ol>
\t\t{% for matiere in matieres %}
\t\t\t<li>{{ matiere.nom}} {{ matiere.description}} <a href=\"{{ path('editMatiere',{'id':matiere.id})}}\">Modifier</a> <a href=\"{{ path('removeMatiere',{'id':matiere.id})}}\">Supprimer</a>
\t\t{% endfor %}
\t</ol>
\t
{% endblock %}", "matieresViews/listMatieres.html.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\app\\Resources\\views\\matieresViews\\listMatieres.html.twig");
    }
}
