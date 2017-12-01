<?php

/* :adminsViews:listAdmins.html.twig */
class __TwigTemplate_57cb34cea6c697740c3a36ea27ece5b25db944efcaf3755df339b424f87a340f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":adminsViews:listAdmins.html.twig", 1);
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
        $__internal_074eaf2760d8adbff42e11fde9b80f4ce83301c98166139d630747d516104d3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_074eaf2760d8adbff42e11fde9b80f4ce83301c98166139d630747d516104d3a->enter($__internal_074eaf2760d8adbff42e11fde9b80f4ce83301c98166139d630747d516104d3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":adminsViews:listAdmins.html.twig"));

        $__internal_21f96a8670a5a3f0acf69ee4be6b62e485694598aabda3c3642b524066494660 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21f96a8670a5a3f0acf69ee4be6b62e485694598aabda3c3642b524066494660->enter($__internal_21f96a8670a5a3f0acf69ee4be6b62e485694598aabda3c3642b524066494660_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":adminsViews:listAdmins.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_074eaf2760d8adbff42e11fde9b80f4ce83301c98166139d630747d516104d3a->leave($__internal_074eaf2760d8adbff42e11fde9b80f4ce83301c98166139d630747d516104d3a_prof);

        
        $__internal_21f96a8670a5a3f0acf69ee4be6b62e485694598aabda3c3642b524066494660->leave($__internal_21f96a8670a5a3f0acf69ee4be6b62e485694598aabda3c3642b524066494660_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_07d328a2590d90b84568dc320214f354b35d1075e4b29d17b1d0412aa3e3f0a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07d328a2590d90b84568dc320214f354b35d1075e4b29d17b1d0412aa3e3f0a0->enter($__internal_07d328a2590d90b84568dc320214f354b35d1075e4b29d17b1d0412aa3e3f0a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_96338ac43ad785426e33a8c18bf8e6e3acf7016e20e903f561037da0490a0afc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96338ac43ad785426e33a8c18bf8e6e3acf7016e20e903f561037da0490a0afc->enter($__internal_96338ac43ad785426e33a8c18bf8e6e3acf7016e20e903f561037da0490a0afc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<h1>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admins"), "html", null, true);
        echo "</h1>
\t<ol>
\t\t";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["admins"]) ? $context["admins"] : $this->getContext($context, "admins")));
        foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
            // line 8
            echo "\t\t\t";
            if (!twig_in_filter("ROLE_SUPER_ADMIN", $this->getAttribute($context["admin"], "roles", array()))) {
                // line 9
                echo "\t\t\t\t<li>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["admin"], "nom", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["admin"], "prenom", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["admin"], "username", array()), "html", null, true);
                echo " 
\t\t\t\t\t<a href=\"";
                // line 10
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editAdmin", array("id" => $this->getAttribute($context["admin"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("edit"), "html", null, true);
                echo "</a>
\t\t\t\t\t<a href=\"";
                // line 11
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("removeAdmin", array("id" => $this->getAttribute($context["admin"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("delete"), "html", null, true);
                echo "</a>
\t\t\t\t\t<a href=\"";
                // line 12
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profileAdmin", array("id" => $this->getAttribute($context["admin"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile"), "html", null, true);
                echo "</a> 
\t\t\t\t\t<a href=\"";
                // line 13
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("schoolAdmin", array("id" => $this->getAttribute($context["admin"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("school"), "html", null, true);
                echo "</a> 
\t\t\t\t</li>
\t\t\t";
            }
            // line 16
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "\t</ol>
\t
";
        
        $__internal_96338ac43ad785426e33a8c18bf8e6e3acf7016e20e903f561037da0490a0afc->leave($__internal_96338ac43ad785426e33a8c18bf8e6e3acf7016e20e903f561037da0490a0afc_prof);

        
        $__internal_07d328a2590d90b84568dc320214f354b35d1075e4b29d17b1d0412aa3e3f0a0->leave($__internal_07d328a2590d90b84568dc320214f354b35d1075e4b29d17b1d0412aa3e3f0a0_prof);

    }

    public function getTemplateName()
    {
        return ":adminsViews:listAdmins.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 17,  101 => 16,  93 => 13,  87 => 12,  81 => 11,  75 => 10,  66 => 9,  63 => 8,  59 => 7,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

<h1>{{'list'|trans}} {{'admins'|trans}}</h1>
\t<ol>
\t\t{% for admin in admins %}
\t\t\t{% if 'ROLE_SUPER_ADMIN' not in admin.roles %}
\t\t\t\t<li>{{ admin.nom}} {{ admin.prenom}} {{ admin.username}} 
\t\t\t\t\t<a href=\"{{ path('editAdmin',{'id':admin.id})}}\">{{'edit'|trans}}</a>
\t\t\t\t\t<a href=\"{{ path('removeAdmin',{'id':admin.id})}}\">{{'delete'|trans}}</a>
\t\t\t\t\t<a href=\"{{ path('profileAdmin',{'id':admin.id})}}\">{{'profile'|trans}}</a> 
\t\t\t\t\t<a href=\"{{ path('schoolAdmin',{'id':admin.id})}}\">{{'school'|trans}}</a> 
\t\t\t\t</li>
\t\t\t{% endif %}
\t\t{% endfor %}
\t</ol>
\t
{% endblock %}", ":adminsViews:listAdmins.html.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\app/Resources\\views/adminsViews/listAdmins.html.twig");
    }
}
