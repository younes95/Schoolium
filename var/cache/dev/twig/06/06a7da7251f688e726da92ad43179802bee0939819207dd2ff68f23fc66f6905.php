<?php

/* parentsViews/myProfileParent.html.twig */
class __TwigTemplate_753f82ec5d22349455f95b4f5f664cfb95a06f4e14275fad0c5ffc258b090edc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "parentsViews/myProfileParent.html.twig", 1);
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
        $__internal_35a747f67d039d8089f429d303ae76e22fbc5e08822a286c0d1c9c62b2e24c1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35a747f67d039d8089f429d303ae76e22fbc5e08822a286c0d1c9c62b2e24c1c->enter($__internal_35a747f67d039d8089f429d303ae76e22fbc5e08822a286c0d1c9c62b2e24c1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "parentsViews/myProfileParent.html.twig"));

        $__internal_616d53f6c7ae47f8e4c42dda5206bb873a7c499cdb289c1c0852a0bb170824a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_616d53f6c7ae47f8e4c42dda5206bb873a7c499cdb289c1c0852a0bb170824a4->enter($__internal_616d53f6c7ae47f8e4c42dda5206bb873a7c499cdb289c1c0852a0bb170824a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "parentsViews/myProfileParent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_35a747f67d039d8089f429d303ae76e22fbc5e08822a286c0d1c9c62b2e24c1c->leave($__internal_35a747f67d039d8089f429d303ae76e22fbc5e08822a286c0d1c9c62b2e24c1c_prof);

        
        $__internal_616d53f6c7ae47f8e4c42dda5206bb873a7c499cdb289c1c0852a0bb170824a4->leave($__internal_616d53f6c7ae47f8e4c42dda5206bb873a7c499cdb289c1c0852a0bb170824a4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_cdeeb48c4f8b8e1876d56e4fbd88dc14f2ac9819a8b6dcbc7079335ffb7328f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdeeb48c4f8b8e1876d56e4fbd88dc14f2ac9819a8b6dcbc7079335ffb7328f8->enter($__internal_cdeeb48c4f8b8e1876d56e4fbd88dc14f2ac9819a8b6dcbc7079335ffb7328f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2bf54c057b79f18e98f2648ce374b3ec9d1c521b5ba3d68d79499104cf2ed739 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bf54c057b79f18e98f2648ce374b3ec9d1c521b5ba3d68d79499104cf2ed739->enter($__internal_2bf54c057b79f18e98f2648ce374b3ec9d1c521b5ba3d68d79499104cf2ed739_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Mon Profile ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenom", array()), "html", null, true);
        echo "</h1>
\t<ul>
\t\t<li><b>nom :</b>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo "</li>
\t\t<li><b>prenom :</b>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenom", array()), "html", null, true);
        echo "</li>
\t\t<li><b>nom mere :</b>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nomMere", array()), "html", null, true);
        echo "</li>
\t\t<li><b>prenom mere :</b>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenomMere", array()), "html", null, true);
        echo "</li>
\t\t<li><b>adresse :</b>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "adresse", array()), "html", null, true);
        echo "</li>
\t\t<li><b>code postal :</b>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "codePostal", array()), "html", null, true);
        echo "</li>
\t\t<li><b>telephone :</b>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "telephone", array()), "html", null, true);
        echo "</li>
\t\t<li><b>username :</b>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "</li>
\t\t<li><b>email :</b>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "email", array()), "html", null, true);
        echo "</li>
\t\t<li><b>type :</b>";
        // line 15
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "typeUser", array())), "html", null, true);
        echo "</li>
\t\t<li><b>derniere connexion :</b>";
        // line 16
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "lastLogin", array()), "Y-m-d"), "html", null, true);
        echo "</li>
\t\t<li>
\t\t\t<b>Liste de mes enfants dans l'ecole</b>
\t\t\t<ul>
\t\t\t\t";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "eleves", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["eleve"]) {
            // line 21
            echo "\t\t\t\t\t<li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["eleve"], "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["eleve"], "prenom", array()), "html", null, true);
            echo "</li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['eleve'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "\t\t\t</ul>
\t\t</li>
\t</ul>
\t
\t
";
        
        $__internal_2bf54c057b79f18e98f2648ce374b3ec9d1c521b5ba3d68d79499104cf2ed739->leave($__internal_2bf54c057b79f18e98f2648ce374b3ec9d1c521b5ba3d68d79499104cf2ed739_prof);

        
        $__internal_cdeeb48c4f8b8e1876d56e4fbd88dc14f2ac9819a8b6dcbc7079335ffb7328f8->leave($__internal_cdeeb48c4f8b8e1876d56e4fbd88dc14f2ac9819a8b6dcbc7079335ffb7328f8_prof);

    }

    public function getTemplateName()
    {
        return "parentsViews/myProfileParent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 23,  108 => 21,  104 => 20,  97 => 16,  93 => 15,  89 => 14,  85 => 13,  81 => 12,  77 => 11,  73 => 10,  69 => 9,  65 => 8,  61 => 7,  57 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
<h1>Mon Profile {{app.user.nom}} {{app.user.prenom}}</h1>
\t<ul>
\t\t<li><b>nom :</b>{{app.user.nom}}</li>
\t\t<li><b>prenom :</b>{{app.user.prenom}}</li>
\t\t<li><b>nom mere :</b>{{app.user.nomMere}}</li>
\t\t<li><b>prenom mere :</b>{{app.user.prenomMere}}</li>
\t\t<li><b>adresse :</b>{{app.user.adresse}}</li>
\t\t<li><b>code postal :</b>{{app.user.codePostal}}</li>
\t\t<li><b>telephone :</b>{{app.user.telephone}}</li>
\t\t<li><b>username :</b>{{app.user.username}}</li>
\t\t<li><b>email :</b>{{app.user.email}}</li>
\t\t<li><b>type :</b>{{app.user.typeUser|upper}}</li>
\t\t<li><b>derniere connexion :</b>{{app.user.lastLogin|date('Y-m-d')}}</li>
\t\t<li>
\t\t\t<b>Liste de mes enfants dans l'ecole</b>
\t\t\t<ul>
\t\t\t\t{% for eleve in app.user.eleves %}
\t\t\t\t\t<li>{{eleve.nom}} {{eleve.prenom}}</li>
\t\t\t\t{% endfor %}
\t\t\t</ul>
\t\t</li>
\t</ul>
\t
\t
{% endblock %}", "parentsViews/myProfileParent.html.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\app\\Resources\\views\\parentsViews\\myProfileParent.html.twig");
    }
}
