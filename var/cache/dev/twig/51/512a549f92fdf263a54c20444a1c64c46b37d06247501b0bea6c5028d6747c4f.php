<?php

/* :elevesViews:profileEleve.html.twig */
class __TwigTemplate_74b590ecc170f26439f15d632901c83835f7b2e0c2abd7ebc61beabe1b9d328d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":elevesViews:profileEleve.html.twig", 1);
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
        $__internal_226e869d365bbaa88d5bd63ee33c6bb706d5a55fe689eed094ce1ba1ff1fcbcf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_226e869d365bbaa88d5bd63ee33c6bb706d5a55fe689eed094ce1ba1ff1fcbcf->enter($__internal_226e869d365bbaa88d5bd63ee33c6bb706d5a55fe689eed094ce1ba1ff1fcbcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":elevesViews:profileEleve.html.twig"));

        $__internal_1b28dbf522f1a2c56b56c8a459bbcd4493c772196f5d97ba932dfae7d8049214 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b28dbf522f1a2c56b56c8a459bbcd4493c772196f5d97ba932dfae7d8049214->enter($__internal_1b28dbf522f1a2c56b56c8a459bbcd4493c772196f5d97ba932dfae7d8049214_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":elevesViews:profileEleve.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_226e869d365bbaa88d5bd63ee33c6bb706d5a55fe689eed094ce1ba1ff1fcbcf->leave($__internal_226e869d365bbaa88d5bd63ee33c6bb706d5a55fe689eed094ce1ba1ff1fcbcf_prof);

        
        $__internal_1b28dbf522f1a2c56b56c8a459bbcd4493c772196f5d97ba932dfae7d8049214->leave($__internal_1b28dbf522f1a2c56b56c8a459bbcd4493c772196f5d97ba932dfae7d8049214_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a6c1e0a8c1cd140c67240d6baa7f02a2a79c92d3f2e7d2740d0d9a68d27e15b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6c1e0a8c1cd140c67240d6baa7f02a2a79c92d3f2e7d2740d0d9a68d27e15b0->enter($__internal_a6c1e0a8c1cd140c67240d6baa7f02a2a79c92d3f2e7d2740d0d9a68d27e15b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a650ab479c0ac7bf5afebf4596750b7d0fd30b75f627691b497278d99505fe0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a650ab479c0ac7bf5afebf4596750b7d0fd30b75f627691b497278d99505fe0a->enter($__internal_a650ab479c0ac7bf5afebf4596750b7d0fd30b75f627691b497278d99505fe0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Profile De ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["eleve"]) ? $context["eleve"] : $this->getContext($context, "eleve")), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["eleve"]) ? $context["eleve"] : $this->getContext($context, "eleve")), "prenom", array()), "html", null, true);
        echo "</h1>
\t<ul>
\t\t<li><b>photo :</b><img src=\"";
        // line 6
        if ($this->getAttribute((isset($context["eleve"]) ? $context["eleve"] : $this->getContext($context, "eleve")), "photo", array())) {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/photos/" . $this->getAttribute((isset($context["eleve"]) ? $context["eleve"] : $this->getContext($context, "eleve")), "photo", array()))), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/photos/avatar.png"), "html", null, true);
        }
        echo "\" alt=\"\"></li>
\t\t<li><b>nom :</b>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["eleve"]) ? $context["eleve"] : $this->getContext($context, "eleve")), "nom", array()), "html", null, true);
        echo "</li>
\t\t<li><b>prenom :</b>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["eleve"]) ? $context["eleve"] : $this->getContext($context, "eleve")), "prenom", array()), "html", null, true);
        echo "</li>
\t\t<li><b>genre :</b>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["eleve"]) ? $context["eleve"] : $this->getContext($context, "eleve")), "genre", array()), "html", null, true);
        echo "</li>
\t\t<li><b>date et lieu de naissance :</b>";
        // line 10
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["eleve"]) ? $context["eleve"] : $this->getContext($context, "eleve")), "dateDeNaissance", array()), "Y-m-d"), "html", null, true);
        echo " à ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["eleve"]) ? $context["eleve"] : $this->getContext($context, "eleve")), "lieuDeNaissance", array()), "html", null, true);
        echo "</li>
\t\t<li><b>adresse :</b>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["eleve"]) ? $context["eleve"] : $this->getContext($context, "eleve")), "adresse", array()), "html", null, true);
        echo "</li>
\t\t<li><b>code postal :</b>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["eleve"]) ? $context["eleve"] : $this->getContext($context, "eleve")), "codePostal", array()), "html", null, true);
        echo "</li>
\t\t<li><b>telephone :</b>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["eleve"]) ? $context["eleve"] : $this->getContext($context, "eleve")), "telephone", array()), "html", null, true);
        echo "</li>
\t\t<li><b>username :</b>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["eleve"]) ? $context["eleve"] : $this->getContext($context, "eleve")), "username", array()), "html", null, true);
        echo "</li>
\t\t<li><b>email :</b>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["eleve"]) ? $context["eleve"] : $this->getContext($context, "eleve")), "email", array()), "html", null, true);
        echo "</li>
\t\t<li><b>type :</b>";
        // line 16
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute((isset($context["eleve"]) ? $context["eleve"] : $this->getContext($context, "eleve")), "typeUser", array())), "html", null, true);
        echo "</li>
\t\t<li><b>derniere connexion :</b>";
        // line 17
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["eleve"]) ? $context["eleve"] : $this->getContext($context, "eleve")), "lastLogin", array()), "Y-m-d"), "html", null, true);
        echo "</li>
\t\t<li><b>parent :</b>";
        // line 18
        if (($this->getAttribute((isset($context["eleve"]) ? $context["eleve"] : $this->getContext($context, "eleve")), "parent", array()) != null)) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["eleve"]) ? $context["eleve"] : $this->getContext($context, "eleve")), "parent", array()), "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["eleve"]) ? $context["eleve"] : $this->getContext($context, "eleve")), "parent", array()), "prenom", array()), "html", null, true);
        }
        echo "</li>
\t\t<li><b>ecole :</b>";
        // line 19
        if (($this->getAttribute((isset($context["eleve"]) ? $context["eleve"] : $this->getContext($context, "eleve")), "ecole", array()) != null)) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["eleve"]) ? $context["eleve"] : $this->getContext($context, "eleve")), "ecole", array()), "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["eleve"]) ? $context["eleve"] : $this->getContext($context, "eleve")), "ecole", array()), "ville", array()), "html", null, true);
        }
        echo "</li>
\t\t<li>
\t\t\t<b>Liste des Absences</b>
\t\t\t<ul>
\t\t\t\t";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["eleve"]) ? $context["eleve"] : $this->getContext($context, "eleve")), "absences", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["abs"]) {
            // line 24
            echo "\t\t\t\t\t<li>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["abs"], "date", array()), "Y-m-d H:i:s"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["abs"], "commentaire", array()), "html", null, true);
            echo "</li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['abs'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "\t\t\t</ul>
\t\t</li>
\t\t<li>
\t\t\t<b>Liste des retard</b>
\t\t\t<ul>
\t\t\t\t";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["eleve"]) ? $context["eleve"] : $this->getContext($context, "eleve")), "retards", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["ret"]) {
            // line 32
            echo "\t\t\t\t\t<li>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["ret"], "date", array()), "Y-m-d H:i:s"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ret"], "commentaire", array()), "html", null, true);
            echo "</li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ret'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "\t\t\t</ul>
\t\t</li>
\t</ul>
\t
";
        
        $__internal_a650ab479c0ac7bf5afebf4596750b7d0fd30b75f627691b497278d99505fe0a->leave($__internal_a650ab479c0ac7bf5afebf4596750b7d0fd30b75f627691b497278d99505fe0a_prof);

        
        $__internal_a6c1e0a8c1cd140c67240d6baa7f02a2a79c92d3f2e7d2740d0d9a68d27e15b0->leave($__internal_a6c1e0a8c1cd140c67240d6baa7f02a2a79c92d3f2e7d2740d0d9a68d27e15b0_prof);

    }

    public function getTemplateName()
    {
        return ":elevesViews:profileEleve.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 34,  156 => 32,  152 => 31,  145 => 26,  134 => 24,  130 => 23,  119 => 19,  111 => 18,  107 => 17,  103 => 16,  99 => 15,  95 => 14,  91 => 13,  87 => 12,  83 => 11,  77 => 10,  73 => 9,  69 => 8,  65 => 7,  57 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
<h1>Profile De {{eleve.nom}} {{eleve.prenom}}</h1>
\t<ul>
\t\t<li><b>photo :</b><img src=\"{% if eleve.photo %}{{ asset('uploads/photos/' ~ eleve.photo) }}{% else %}{{ asset('uploads/photos/avatar.png') }}{% endif %}\" alt=\"\"></li>
\t\t<li><b>nom :</b>{{eleve.nom}}</li>
\t\t<li><b>prenom :</b>{{eleve.prenom}}</li>
\t\t<li><b>genre :</b>{{eleve.genre}}</li>
\t\t<li><b>date et lieu de naissance :</b>{{eleve.dateDeNaissance|date('Y-m-d')}} à {{eleve.lieuDeNaissance}}</li>
\t\t<li><b>adresse :</b>{{eleve.adresse}}</li>
\t\t<li><b>code postal :</b>{{eleve.codePostal}}</li>
\t\t<li><b>telephone :</b>{{eleve.telephone}}</li>
\t\t<li><b>username :</b>{{eleve.username}}</li>
\t\t<li><b>email :</b>{{eleve.email}}</li>
\t\t<li><b>type :</b>{{eleve.typeUser|upper}}</li>
\t\t<li><b>derniere connexion :</b>{{eleve.lastLogin|date('Y-m-d')}}</li>
\t\t<li><b>parent :</b>{% if eleve.parent != null %}{{eleve.parent.nom}} {{eleve.parent.prenom}}{%endif%}</li>
\t\t<li><b>ecole :</b>{% if eleve.ecole != null %}{{eleve.ecole.nom}} {{eleve.ecole.ville}}{%endif%}</li>
\t\t<li>
\t\t\t<b>Liste des Absences</b>
\t\t\t<ul>
\t\t\t\t{% for abs in eleve.absences %}
\t\t\t\t\t<li>{{abs.date|date('Y-m-d H:i:s')}} {{abs.commentaire}}</li>
\t\t\t\t{% endfor %}
\t\t\t</ul>
\t\t</li>
\t\t<li>
\t\t\t<b>Liste des retard</b>
\t\t\t<ul>
\t\t\t\t{% for ret in eleve.retards %}
\t\t\t\t\t<li>{{ret.date|date('Y-m-d H:i:s')}} {{ret.commentaire}}</li>
\t\t\t\t{% endfor %}
\t\t\t</ul>
\t\t</li>
\t</ul>
\t
{% endblock %}", ":elevesViews:profileEleve.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/views/elevesViews/profileEleve.html.twig");
    }
}
