<?php

/* :matieresViews:listMatieres.html.twig */
class __TwigTemplate_afc14e46b3ad334e4dbd2f1d00d71f33b8a47a5ad09d0e29521d0db520c9b2ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":matieresViews:listMatieres.html.twig", 1);
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
        $__internal_dad8e256307cee2c36913a59825ca572ebbaca5ab3043563dc9da59507f1f001 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dad8e256307cee2c36913a59825ca572ebbaca5ab3043563dc9da59507f1f001->enter($__internal_dad8e256307cee2c36913a59825ca572ebbaca5ab3043563dc9da59507f1f001_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":matieresViews:listMatieres.html.twig"));

        $__internal_3166e84f27dc12af3fc67a25eda733381dc0a03188b2590bb292aa7d8b2022f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3166e84f27dc12af3fc67a25eda733381dc0a03188b2590bb292aa7d8b2022f2->enter($__internal_3166e84f27dc12af3fc67a25eda733381dc0a03188b2590bb292aa7d8b2022f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":matieresViews:listMatieres.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dad8e256307cee2c36913a59825ca572ebbaca5ab3043563dc9da59507f1f001->leave($__internal_dad8e256307cee2c36913a59825ca572ebbaca5ab3043563dc9da59507f1f001_prof);

        
        $__internal_3166e84f27dc12af3fc67a25eda733381dc0a03188b2590bb292aa7d8b2022f2->leave($__internal_3166e84f27dc12af3fc67a25eda733381dc0a03188b2590bb292aa7d8b2022f2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_10eddb0e6da44a33792baabd606b04ad153394018af51124561917b954723d1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10eddb0e6da44a33792baabd606b04ad153394018af51124561917b954723d1e->enter($__internal_10eddb0e6da44a33792baabd606b04ad153394018af51124561917b954723d1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_058888072de60ce0f582b0aa8e05866ee8323d44b995316c99f05d54dc4af5fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_058888072de60ce0f582b0aa8e05866ee8323d44b995316c99f05d54dc4af5fd->enter($__internal_058888072de60ce0f582b0aa8e05866ee8323d44b995316c99f05d54dc4af5fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $context['_seq'] = twig_ensure_traversable((isset($context["matieres"]) ? $context["matieres"] : $this->getContext($context, "matieres")));
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
        
        $__internal_058888072de60ce0f582b0aa8e05866ee8323d44b995316c99f05d54dc4af5fd->leave($__internal_058888072de60ce0f582b0aa8e05866ee8323d44b995316c99f05d54dc4af5fd_prof);

        
        $__internal_10eddb0e6da44a33792baabd606b04ad153394018af51124561917b954723d1e->leave($__internal_10eddb0e6da44a33792baabd606b04ad153394018af51124561917b954723d1e_prof);

    }

    public function getTemplateName()
    {
        return ":matieresViews:listMatieres.html.twig";
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
{% endblock %}", ":matieresViews:listMatieres.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/views/matieresViews/listMatieres.html.twig");
    }
}
