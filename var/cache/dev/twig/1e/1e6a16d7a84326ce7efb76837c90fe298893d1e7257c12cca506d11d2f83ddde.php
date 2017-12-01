<?php

/* enseignantsViews/profileEnseignant.html.twig */
class __TwigTemplate_ba6471cd5c2e1e945432a96e4daf4ff36670c2c1b708b9a8aebacb4141f36367 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "enseignantsViews/profileEnseignant.html.twig", 1);
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
        $__internal_1eea18ae22488ff5f77c972757703d0a2776c7e93259cde14b9acc732f654f7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1eea18ae22488ff5f77c972757703d0a2776c7e93259cde14b9acc732f654f7d->enter($__internal_1eea18ae22488ff5f77c972757703d0a2776c7e93259cde14b9acc732f654f7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "enseignantsViews/profileEnseignant.html.twig"));

        $__internal_93374e3a999806ec4c2023e9e40db53239c46ed959e0abe2be63a725a1aedd24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93374e3a999806ec4c2023e9e40db53239c46ed959e0abe2be63a725a1aedd24->enter($__internal_93374e3a999806ec4c2023e9e40db53239c46ed959e0abe2be63a725a1aedd24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "enseignantsViews/profileEnseignant.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1eea18ae22488ff5f77c972757703d0a2776c7e93259cde14b9acc732f654f7d->leave($__internal_1eea18ae22488ff5f77c972757703d0a2776c7e93259cde14b9acc732f654f7d_prof);

        
        $__internal_93374e3a999806ec4c2023e9e40db53239c46ed959e0abe2be63a725a1aedd24->leave($__internal_93374e3a999806ec4c2023e9e40db53239c46ed959e0abe2be63a725a1aedd24_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8ab011032b2f94846ececf307340d1b8292a0d910f12683ee240239f2995648c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ab011032b2f94846ececf307340d1b8292a0d910f12683ee240239f2995648c->enter($__internal_8ab011032b2f94846ececf307340d1b8292a0d910f12683ee240239f2995648c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_341e488c44d435add33c2bc2a03c0e6be2f47acac164321cd10f73769ed916b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_341e488c44d435add33c2bc2a03c0e6be2f47acac164321cd10f73769ed916b1->enter($__internal_341e488c44d435add33c2bc2a03c0e6be2f47acac164321cd10f73769ed916b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Profile De ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["enseignant"]) ? $context["enseignant"] : $this->getContext($context, "enseignant")), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["enseignant"]) ? $context["enseignant"] : $this->getContext($context, "enseignant")), "prenom", array()), "html", null, true);
        echo "</h1>
\t<ul>
\t\t<li><b>photo :</b><img src=\"";
        // line 6
        if ($this->getAttribute((isset($context["enseignant"]) ? $context["enseignant"] : $this->getContext($context, "enseignant")), "photo", array())) {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/photos/" . $this->getAttribute((isset($context["enseignant"]) ? $context["enseignant"] : $this->getContext($context, "enseignant")), "photo", array()))), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/photos/avatar.png"), "html", null, true);
        }
        echo "\" alt=\"\"></li>
\t\t<li><b>nom :</b>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["enseignant"]) ? $context["enseignant"] : $this->getContext($context, "enseignant")), "nom", array()), "html", null, true);
        echo "</li>
\t\t<li><b>prenom :</b>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["enseignant"]) ? $context["enseignant"] : $this->getContext($context, "enseignant")), "prenom", array()), "html", null, true);
        echo "</li>
\t\t<li><b>genre :</b>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["enseignant"]) ? $context["enseignant"] : $this->getContext($context, "enseignant")), "genre", array()), "html", null, true);
        echo "</li>
\t\t<li><b>date et lieu de naissance :</b>";
        // line 10
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["enseignant"]) ? $context["enseignant"] : $this->getContext($context, "enseignant")), "dateDeNaissance", array()), "Y-m-d"), "html", null, true);
        echo " à ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["enseignant"]) ? $context["enseignant"] : $this->getContext($context, "enseignant")), "lieuDeNaissance", array()), "html", null, true);
        echo "</li>
\t\t<li><b>adresse :</b>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["enseignant"]) ? $context["enseignant"] : $this->getContext($context, "enseignant")), "adresse", array()), "html", null, true);
        echo "</li>
\t\t<li><b>code postal :</b>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["enseignant"]) ? $context["enseignant"] : $this->getContext($context, "enseignant")), "codePostal", array()), "html", null, true);
        echo "</li>
\t\t<li><b>telephone :</b>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["enseignant"]) ? $context["enseignant"] : $this->getContext($context, "enseignant")), "telephone", array()), "html", null, true);
        echo "</li>
\t\t<li><b>username :</b>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["enseignant"]) ? $context["enseignant"] : $this->getContext($context, "enseignant")), "username", array()), "html", null, true);
        echo "</li>
\t\t<li><b>email :</b>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["enseignant"]) ? $context["enseignant"] : $this->getContext($context, "enseignant")), "email", array()), "html", null, true);
        echo "</li>
\t\t<li><b>type :</b>";
        // line 16
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute((isset($context["enseignant"]) ? $context["enseignant"] : $this->getContext($context, "enseignant")), "typeUser", array())), "html", null, true);
        echo "</li>
\t\t<li><b>derniere connexion :</b>";
        // line 17
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["enseignant"]) ? $context["enseignant"] : $this->getContext($context, "enseignant")), "lastLogin", array()), "Y-m-d"), "html", null, true);
        echo "</li>
\t\t<li><b>Ecole :</b>";
        // line 18
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["enseignant"]) ? $context["enseignant"] : $this->getContext($context, "enseignant")), "ecole", array()), "nom", array())), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["enseignant"]) ? $context["enseignant"] : $this->getContext($context, "enseignant")), "ecole", array()), "ville", array())), "html", null, true);
        echo "</li>
\t</ul>

\t
";
        
        $__internal_341e488c44d435add33c2bc2a03c0e6be2f47acac164321cd10f73769ed916b1->leave($__internal_341e488c44d435add33c2bc2a03c0e6be2f47acac164321cd10f73769ed916b1_prof);

        
        $__internal_8ab011032b2f94846ececf307340d1b8292a0d910f12683ee240239f2995648c->leave($__internal_8ab011032b2f94846ececf307340d1b8292a0d910f12683ee240239f2995648c_prof);

    }

    public function getTemplateName()
    {
        return "enseignantsViews/profileEnseignant.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 18,  107 => 17,  103 => 16,  99 => 15,  95 => 14,  91 => 13,  87 => 12,  83 => 11,  77 => 10,  73 => 9,  69 => 8,  65 => 7,  57 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
<h1>Profile De {{enseignant.nom}} {{enseignant.prenom}}</h1>
\t<ul>
\t\t<li><b>photo :</b><img src=\"{% if enseignant.photo %}{{ asset('uploads/photos/' ~ enseignant.photo) }}{% else %}{{ asset('uploads/photos/avatar.png') }}{% endif %}\" alt=\"\"></li>
\t\t<li><b>nom :</b>{{enseignant.nom}}</li>
\t\t<li><b>prenom :</b>{{enseignant.prenom}}</li>
\t\t<li><b>genre :</b>{{enseignant.genre}}</li>
\t\t<li><b>date et lieu de naissance :</b>{{enseignant.dateDeNaissance|date('Y-m-d')}} à {{enseignant.lieuDeNaissance}}</li>
\t\t<li><b>adresse :</b>{{enseignant.adresse}}</li>
\t\t<li><b>code postal :</b>{{enseignant.codePostal}}</li>
\t\t<li><b>telephone :</b>{{enseignant.telephone}}</li>
\t\t<li><b>username :</b>{{enseignant.username}}</li>
\t\t<li><b>email :</b>{{enseignant.email}}</li>
\t\t<li><b>type :</b>{{enseignant.typeUser|upper}}</li>
\t\t<li><b>derniere connexion :</b>{{enseignant.lastLogin|date('Y-m-d')}}</li>
\t\t<li><b>Ecole :</b>{{enseignant.ecole.nom|upper}} {{enseignant.ecole.ville|upper}}</li>
\t</ul>

\t
{% endblock %}", "enseignantsViews/profileEnseignant.html.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\app\\Resources\\views\\enseignantsViews\\profileEnseignant.html.twig");
    }
}
