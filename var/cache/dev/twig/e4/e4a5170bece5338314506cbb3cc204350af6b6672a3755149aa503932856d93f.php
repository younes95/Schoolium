<?php

/* parentsViews/profileParent.html.twig */
class __TwigTemplate_81d0009d02fd7dbe75b889170a979504e747ea9e3458e45429566316f5901740 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "parentsViews/profileParent.html.twig", 1);
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
        $__internal_553e7900a1633644dec8a8f6c6b7d6857401d04f3030b8e28c27ae29c23c7dbd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_553e7900a1633644dec8a8f6c6b7d6857401d04f3030b8e28c27ae29c23c7dbd->enter($__internal_553e7900a1633644dec8a8f6c6b7d6857401d04f3030b8e28c27ae29c23c7dbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "parentsViews/profileParent.html.twig"));

        $__internal_7fe9831865a876cac42c002a70c1b9754692268db0bdcd962671df8d95fdf0c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fe9831865a876cac42c002a70c1b9754692268db0bdcd962671df8d95fdf0c8->enter($__internal_7fe9831865a876cac42c002a70c1b9754692268db0bdcd962671df8d95fdf0c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "parentsViews/profileParent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_553e7900a1633644dec8a8f6c6b7d6857401d04f3030b8e28c27ae29c23c7dbd->leave($__internal_553e7900a1633644dec8a8f6c6b7d6857401d04f3030b8e28c27ae29c23c7dbd_prof);

        
        $__internal_7fe9831865a876cac42c002a70c1b9754692268db0bdcd962671df8d95fdf0c8->leave($__internal_7fe9831865a876cac42c002a70c1b9754692268db0bdcd962671df8d95fdf0c8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_556952cc81a96bc898de458664fc4f5ae2a4b649f149279c0fda8f401e98a7a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_556952cc81a96bc898de458664fc4f5ae2a4b649f149279c0fda8f401e98a7a8->enter($__internal_556952cc81a96bc898de458664fc4f5ae2a4b649f149279c0fda8f401e98a7a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_416cc6eb4580d586dd13d3a7a318638bdfb9ca0cb3d4e2c6714b31c089639699 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_416cc6eb4580d586dd13d3a7a318638bdfb9ca0cb3d4e2c6714b31c089639699->enter($__internal_416cc6eb4580d586dd13d3a7a318638bdfb9ca0cb3d4e2c6714b31c089639699_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Profile De ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "prenom", array()), "html", null, true);
        echo "</h1>
\t<ul>
\t\t<li><b>nom :</b>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "nom", array()), "html", null, true);
        echo "</li>
\t\t<li><b>prenom :</b>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "prenomMere", array()), "html", null, true);
        echo "</li>
\t\t<li><b>nom mere :</b>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "nomMere", array()), "html", null, true);
        echo "</li>
\t\t<li><b>prenom mere :</b>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "prenom", array()), "html", null, true);
        echo "</li>
\t\t<li><b>adresse :</b>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "adresse", array()), "html", null, true);
        echo "</li>
\t\t<li><b>code postal :</b>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "codePostal", array()), "html", null, true);
        echo "</li>
\t\t<li><b>telephone :</b>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "telephone", array()), "html", null, true);
        echo "</li>
\t\t<li><b>username :</b>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "username", array()), "html", null, true);
        echo "</li>
\t\t<li><b>email :</b>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "email", array()), "html", null, true);
        echo "</li>
\t\t<li><b>type :</b>";
        // line 15
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "typeUser", array())), "html", null, true);
        echo "</li>
\t\t<li><b>derniere connexion :</b>";
        // line 16
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "lastLogin", array()), "Y-m-d"), "html", null, true);
        echo "</li>
\t\t<li><b>Ecole :</b>";
        // line 17
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "ecole", array()), "nom", array())), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "ecole", array()), "ville", array())), "html", null, true);
        echo "</li>
\t\t<li>
\t\t\t<b>Liste des enfants dans l'ecole</b>
\t\t\t<ul>
\t\t\t\t";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "eleves", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["eleve"]) {
            // line 22
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
        // line 24
        echo "\t\t\t</ul>
\t\t</li>
\t</ul>
\t

\t
";
        
        $__internal_416cc6eb4580d586dd13d3a7a318638bdfb9ca0cb3d4e2c6714b31c089639699->leave($__internal_416cc6eb4580d586dd13d3a7a318638bdfb9ca0cb3d4e2c6714b31c089639699_prof);

        
        $__internal_556952cc81a96bc898de458664fc4f5ae2a4b649f149279c0fda8f401e98a7a8->leave($__internal_556952cc81a96bc898de458664fc4f5ae2a4b649f149279c0fda8f401e98a7a8_prof);

    }

    public function getTemplateName()
    {
        return "parentsViews/profileParent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 24,  114 => 22,  110 => 21,  101 => 17,  97 => 16,  93 => 15,  89 => 14,  85 => 13,  81 => 12,  77 => 11,  73 => 10,  69 => 9,  65 => 8,  61 => 7,  57 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
<h1>Profile De {{parent.nom}} {{parent.prenom}}</h1>
\t<ul>
\t\t<li><b>nom :</b>{{parent.nom}}</li>
\t\t<li><b>prenom :</b>{{parent.prenomMere}}</li>
\t\t<li><b>nom mere :</b>{{parent.nomMere}}</li>
\t\t<li><b>prenom mere :</b>{{parent.prenom}}</li>
\t\t<li><b>adresse :</b>{{parent.adresse}}</li>
\t\t<li><b>code postal :</b>{{parent.codePostal}}</li>
\t\t<li><b>telephone :</b>{{parent.telephone}}</li>
\t\t<li><b>username :</b>{{parent.username}}</li>
\t\t<li><b>email :</b>{{parent.email}}</li>
\t\t<li><b>type :</b>{{parent.typeUser|upper}}</li>
\t\t<li><b>derniere connexion :</b>{{parent.lastLogin|date('Y-m-d')}}</li>
\t\t<li><b>Ecole :</b>{{parent.ecole.nom|upper}} {{parent.ecole.ville|upper}}</li>
\t\t<li>
\t\t\t<b>Liste des enfants dans l'ecole</b>
\t\t\t<ul>
\t\t\t\t{% for eleve in parent.eleves %}
\t\t\t\t\t<li>{{eleve.nom}} {{eleve.prenom}}</li>
\t\t\t\t{% endfor %}
\t\t\t</ul>
\t\t</li>
\t</ul>
\t

\t
{% endblock %}", "parentsViews/profileParent.html.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\app\\Resources\\views\\parentsViews\\profileParent.html.twig");
    }
}
