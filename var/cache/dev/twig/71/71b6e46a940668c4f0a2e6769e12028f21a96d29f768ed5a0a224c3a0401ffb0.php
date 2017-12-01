<?php

/* :adminsViews:profileAdmin.html.twig */
class __TwigTemplate_4b62d49aa9f7b1a973780b09dca923f013956536cc62663c04ea7b86c0e64d32 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":adminsViews:profileAdmin.html.twig", 1);
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
        $__internal_69e89e6481b26f4235108126e934c579d2e72bcbea419ba55da729bf942962b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69e89e6481b26f4235108126e934c579d2e72bcbea419ba55da729bf942962b7->enter($__internal_69e89e6481b26f4235108126e934c579d2e72bcbea419ba55da729bf942962b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":adminsViews:profileAdmin.html.twig"));

        $__internal_377cff0b27d6c78b1efb5581118db9cea611f515a9b42a305a4dea23a862d9ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_377cff0b27d6c78b1efb5581118db9cea611f515a9b42a305a4dea23a862d9ff->enter($__internal_377cff0b27d6c78b1efb5581118db9cea611f515a9b42a305a4dea23a862d9ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":adminsViews:profileAdmin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_69e89e6481b26f4235108126e934c579d2e72bcbea419ba55da729bf942962b7->leave($__internal_69e89e6481b26f4235108126e934c579d2e72bcbea419ba55da729bf942962b7_prof);

        
        $__internal_377cff0b27d6c78b1efb5581118db9cea611f515a9b42a305a4dea23a862d9ff->leave($__internal_377cff0b27d6c78b1efb5581118db9cea611f515a9b42a305a4dea23a862d9ff_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d3d463836b5edc583c04e0e23fe385491f892ff610ad6bdf63bc2232e34d6a7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3d463836b5edc583c04e0e23fe385491f892ff610ad6bdf63bc2232e34d6a7d->enter($__internal_d3d463836b5edc583c04e0e23fe385491f892ff610ad6bdf63bc2232e34d6a7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e6ceb34a441c428e35ab4035ebfb9fcd7f0a495e28477a37d56caaa2574afbad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6ceb34a441c428e35ab4035ebfb9fcd7f0a495e28477a37d56caaa2574afbad->enter($__internal_e6ceb34a441c428e35ab4035ebfb9fcd7f0a495e28477a37d56caaa2574afbad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Profile De ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "prenom", array()), "html", null, true);
        echo "</h1>
\t<ul>
\t\t<li><b>photo :</b><img src=\"";
        // line 6
        if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "photo", array())) {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/photos/" . $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "photo", array()))), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/photos/avatar.png"), "html", null, true);
        }
        echo "\" alt=\"\"></li>
\t\t<li><b>nom :</b>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "nom", array()), "html", null, true);
        echo "</li>
\t\t<li><b>prenom :</b>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "prenom", array()), "html", null, true);
        echo "</li>
\t\t<li><b>genre :</b>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "genre", array()), "html", null, true);
        echo "</li>
\t\t<li><b>date et lieu de naissance :</b>";
        // line 10
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "dateDeNaissance", array()), "Y-m-d"), "html", null, true);
        echo " à ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "lieuDeNaissance", array()), "html", null, true);
        echo "</li>
\t\t<li><b>adresse :</b>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "adresse", array()), "html", null, true);
        echo "</li>
\t\t<li><b>code postal :</b>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "codePostal", array()), "html", null, true);
        echo "</li>
\t\t<li><b>telephone :</b>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "telephone", array()), "html", null, true);
        echo "</li>
\t\t<li><b>username :</b>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "username", array()), "html", null, true);
        echo "</li>
\t\t<li><b>email :</b>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "email", array()), "html", null, true);
        echo "</li>
\t\t<li><b>type :</b>";
        // line 16
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "typeUser", array())), "html", null, true);
        echo "</li>
\t\t<li><b>derniere connexion :</b>";
        // line 17
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "lastLogin", array()), "Y-m-d"), "html", null, true);
        echo "</li>
\t</ul>

\t
";
        
        $__internal_e6ceb34a441c428e35ab4035ebfb9fcd7f0a495e28477a37d56caaa2574afbad->leave($__internal_e6ceb34a441c428e35ab4035ebfb9fcd7f0a495e28477a37d56caaa2574afbad_prof);

        
        $__internal_d3d463836b5edc583c04e0e23fe385491f892ff610ad6bdf63bc2232e34d6a7d->leave($__internal_d3d463836b5edc583c04e0e23fe385491f892ff610ad6bdf63bc2232e34d6a7d_prof);

    }

    public function getTemplateName()
    {
        return ":adminsViews:profileAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 17,  103 => 16,  99 => 15,  95 => 14,  91 => 13,  87 => 12,  83 => 11,  77 => 10,  73 => 9,  69 => 8,  65 => 7,  57 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
<h1>Profile De {{admin.nom}} {{admin.prenom}}</h1>
\t<ul>
\t\t<li><b>photo :</b><img src=\"{% if admin.photo %}{{ asset('uploads/photos/' ~ admin.photo) }}{% else %}{{ asset('uploads/photos/avatar.png') }}{% endif %}\" alt=\"\"></li>
\t\t<li><b>nom :</b>{{admin.nom}}</li>
\t\t<li><b>prenom :</b>{{admin.prenom}}</li>
\t\t<li><b>genre :</b>{{admin.genre}}</li>
\t\t<li><b>date et lieu de naissance :</b>{{admin.dateDeNaissance|date('Y-m-d')}} à {{admin.lieuDeNaissance}}</li>
\t\t<li><b>adresse :</b>{{admin.adresse}}</li>
\t\t<li><b>code postal :</b>{{admin.codePostal}}</li>
\t\t<li><b>telephone :</b>{{admin.telephone}}</li>
\t\t<li><b>username :</b>{{admin.username}}</li>
\t\t<li><b>email :</b>{{admin.email}}</li>
\t\t<li><b>type :</b>{{admin.typeUser|upper}}</li>
\t\t<li><b>derniere connexion :</b>{{admin.lastLogin|date('Y-m-d')}}</li>
\t</ul>

\t
{% endblock %}", ":adminsViews:profileAdmin.html.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\app/Resources\\views/adminsViews/profileAdmin.html.twig");
    }
}
