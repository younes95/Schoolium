<?php

/* :schoolsViews:listSchools.html.twig */
class __TwigTemplate_f3a1cba502a1a8f486dd31403d1d9cfc30c8915676f5739b116fd6cadc7a3665 extends Twig_Template
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
        $__internal_97b80f7f5c4f0583edf83e22054ec87e5b084c78d5a0c751c4702e0d6d3f6289 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97b80f7f5c4f0583edf83e22054ec87e5b084c78d5a0c751c4702e0d6d3f6289->enter($__internal_97b80f7f5c4f0583edf83e22054ec87e5b084c78d5a0c751c4702e0d6d3f6289_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":schoolsViews:listSchools.html.twig"));

        $__internal_b1a10104bf34fa675168fe8b8c6bcdea8b511042747d9d221322614c5e908a20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1a10104bf34fa675168fe8b8c6bcdea8b511042747d9d221322614c5e908a20->enter($__internal_b1a10104bf34fa675168fe8b8c6bcdea8b511042747d9d221322614c5e908a20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":schoolsViews:listSchools.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_97b80f7f5c4f0583edf83e22054ec87e5b084c78d5a0c751c4702e0d6d3f6289->leave($__internal_97b80f7f5c4f0583edf83e22054ec87e5b084c78d5a0c751c4702e0d6d3f6289_prof);

        
        $__internal_b1a10104bf34fa675168fe8b8c6bcdea8b511042747d9d221322614c5e908a20->leave($__internal_b1a10104bf34fa675168fe8b8c6bcdea8b511042747d9d221322614c5e908a20_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a02090504b0f7abe7a835b32e59d9da83c14bf6c7bbb5c21749907ec3e0b1794 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a02090504b0f7abe7a835b32e59d9da83c14bf6c7bbb5c21749907ec3e0b1794->enter($__internal_a02090504b0f7abe7a835b32e59d9da83c14bf6c7bbb5c21749907ec3e0b1794_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b451628211897594e81005abfeacbc6a7f78a9f8d6c84e1f887f84524a2bec66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b451628211897594e81005abfeacbc6a7f78a9f8d6c84e1f887f84524a2bec66->enter($__internal_b451628211897594e81005abfeacbc6a7f78a9f8d6c84e1f887f84524a2bec66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b451628211897594e81005abfeacbc6a7f78a9f8d6c84e1f887f84524a2bec66->leave($__internal_b451628211897594e81005abfeacbc6a7f78a9f8d6c84e1f887f84524a2bec66_prof);

        
        $__internal_a02090504b0f7abe7a835b32e59d9da83c14bf6c7bbb5c21749907ec3e0b1794->leave($__internal_a02090504b0f7abe7a835b32e59d9da83c14bf6c7bbb5c21749907ec3e0b1794_prof);

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
{% endblock %}", ":schoolsViews:listSchools.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/views/schoolsViews/listSchools.html.twig");
    }
}
