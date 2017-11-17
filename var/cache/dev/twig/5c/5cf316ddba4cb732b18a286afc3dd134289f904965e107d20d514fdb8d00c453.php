<?php

/* :adminsViews:listAdmins.html.twig */
class __TwigTemplate_8065df4bdc50ab8b0377daa5e8ecd743d4cdf015592c81bdbf1a5e4d67fc567f extends Twig_Template
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
        $__internal_3eff7ad6fc28a29ee875955e81efa63c41d21139fd5b5a00a99ab6047b01d072 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3eff7ad6fc28a29ee875955e81efa63c41d21139fd5b5a00a99ab6047b01d072->enter($__internal_3eff7ad6fc28a29ee875955e81efa63c41d21139fd5b5a00a99ab6047b01d072_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":adminsViews:listAdmins.html.twig"));

        $__internal_78a23cd30399e344c4a418e2f04555c3c1e4278a8beb665eb3b2d7ed72957d34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78a23cd30399e344c4a418e2f04555c3c1e4278a8beb665eb3b2d7ed72957d34->enter($__internal_78a23cd30399e344c4a418e2f04555c3c1e4278a8beb665eb3b2d7ed72957d34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":adminsViews:listAdmins.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3eff7ad6fc28a29ee875955e81efa63c41d21139fd5b5a00a99ab6047b01d072->leave($__internal_3eff7ad6fc28a29ee875955e81efa63c41d21139fd5b5a00a99ab6047b01d072_prof);

        
        $__internal_78a23cd30399e344c4a418e2f04555c3c1e4278a8beb665eb3b2d7ed72957d34->leave($__internal_78a23cd30399e344c4a418e2f04555c3c1e4278a8beb665eb3b2d7ed72957d34_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b79ad853d3f8ffd1d90a3ab0f3417aae97020f01006d459adbd33b2b84e01e22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b79ad853d3f8ffd1d90a3ab0f3417aae97020f01006d459adbd33b2b84e01e22->enter($__internal_b79ad853d3f8ffd1d90a3ab0f3417aae97020f01006d459adbd33b2b84e01e22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5e4e16dbd0850e22f704472e98296159bde75e402c0cc66f6e224eada7d6f336 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e4e16dbd0850e22f704472e98296159bde75e402c0cc66f6e224eada7d6f336->enter($__internal_5e4e16dbd0850e22f704472e98296159bde75e402c0cc66f6e224eada7d6f336_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_5e4e16dbd0850e22f704472e98296159bde75e402c0cc66f6e224eada7d6f336->leave($__internal_5e4e16dbd0850e22f704472e98296159bde75e402c0cc66f6e224eada7d6f336_prof);

        
        $__internal_b79ad853d3f8ffd1d90a3ab0f3417aae97020f01006d459adbd33b2b84e01e22->leave($__internal_b79ad853d3f8ffd1d90a3ab0f3417aae97020f01006d459adbd33b2b84e01e22_prof);

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
{% endblock %}", ":adminsViews:listAdmins.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/views/adminsViews/listAdmins.html.twig");
    }
}
