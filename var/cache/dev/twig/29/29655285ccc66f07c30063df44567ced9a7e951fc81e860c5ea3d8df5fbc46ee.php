<?php

/* :elevesViews:parentEleve.html.twig */
class __TwigTemplate_5bc18b4c60fea4c124cf0aef1e8319c8643eb8ba62382a6dd86158cb4ef3cb86 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseList.html.twig", ":elevesViews:parentEleve.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'bodyList' => array($this, 'block_bodyList'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "baseList.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7335364497391d5fd69442767aef4721e9803feb04a8f215b6a0fb8389628302 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7335364497391d5fd69442767aef4721e9803feb04a8f215b6a0fb8389628302->enter($__internal_7335364497391d5fd69442767aef4721e9803feb04a8f215b6a0fb8389628302_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":elevesViews:parentEleve.html.twig"));

        $__internal_d7b78c0d3b51ab66617342a3d13cf09d5ba7a832b3123d895058d83a0f013726 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7b78c0d3b51ab66617342a3d13cf09d5ba7a832b3123d895058d83a0f013726->enter($__internal_d7b78c0d3b51ab66617342a3d13cf09d5ba7a832b3123d895058d83a0f013726_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":elevesViews:parentEleve.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7335364497391d5fd69442767aef4721e9803feb04a8f215b6a0fb8389628302->leave($__internal_7335364497391d5fd69442767aef4721e9803feb04a8f215b6a0fb8389628302_prof);

        
        $__internal_d7b78c0d3b51ab66617342a3d13cf09d5ba7a832b3123d895058d83a0f013726->leave($__internal_d7b78c0d3b51ab66617342a3d13cf09d5ba7a832b3123d895058d83a0f013726_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a5d556f5e74ae6448835ed8e5f6a16fe4b4b5b8c8cf1f86f405ffecb5522a680 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5d556f5e74ae6448835ed8e5f6a16fe4b4b5b8c8cf1f86f405ffecb5522a680->enter($__internal_a5d556f5e74ae6448835ed8e5f6a16fe4b4b5b8c8cf1f86f405ffecb5522a680_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c0fd7a1bf89a1da9ec73f827719fb22304ee6deedcae093f2175f3bfd40a0f0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0fd7a1bf89a1da9ec73f827719fb22304ee6deedcae093f2175f3bfd40a0f0e->enter($__internal_c0fd7a1bf89a1da9ec73f827719fb22304ee6deedcae093f2175f3bfd40a0f0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\t<h1>Pas de parent associé à ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["eleve"]) ? $context["eleve"] : $this->getContext($context, "eleve")), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["eleve"]) ? $context["eleve"] : $this->getContext($context, "eleve")), "prenom", array()), "html", null, true);
        echo " </h1>
\t<h2>Selectioner un parent</h2>\t
";
        
        $__internal_c0fd7a1bf89a1da9ec73f827719fb22304ee6deedcae093f2175f3bfd40a0f0e->leave($__internal_c0fd7a1bf89a1da9ec73f827719fb22304ee6deedcae093f2175f3bfd40a0f0e_prof);

        
        $__internal_a5d556f5e74ae6448835ed8e5f6a16fe4b4b5b8c8cf1f86f405ffecb5522a680->leave($__internal_a5d556f5e74ae6448835ed8e5f6a16fe4b4b5b8c8cf1f86f405ffecb5522a680_prof);

    }

    // line 8
    public function block_bodyList($context, array $blocks = array())
    {
        $__internal_c4e61e786dbaeeadc1c41889365e44d50d3e6462206c5218b46e7d080b634f22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4e61e786dbaeeadc1c41889365e44d50d3e6462206c5218b46e7d080b634f22->enter($__internal_c4e61e786dbaeeadc1c41889365e44d50d3e6462206c5218b46e7d080b634f22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        $__internal_6ea2df4996f7a7514b987cae244c73495a46e4e5928ebf054626fbfbe0c46a8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ea2df4996f7a7514b987cae244c73495a46e4e5928ebf054626fbfbe0c46a8f->enter($__internal_6ea2df4996f7a7514b987cae244c73495a46e4e5928ebf054626fbfbe0c46a8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        // line 9
        echo "
    <div class=\"table-responsive\">
        <table id=\"customers2\" class=\"table datatable\">
            <thead>
                <tr>
                    <th>Nom & Prenom</th>
                    <th>Associer</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "ecole", array()), "parents", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["parant"]) {
            // line 20
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
            // line 21
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["parant"], "nom", array())), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["parant"], "prenom", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("assoParent", array("id" => $this->getAttribute((isset($context["eleve"]) ? $context["eleve"] : $this->getContext($context, "eleve")), "id", array()), "idp" => $this->getAttribute($context["parant"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-male\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['parant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "            </tbody>
        </table>                                    
    </div>
    
";
        
        $__internal_6ea2df4996f7a7514b987cae244c73495a46e4e5928ebf054626fbfbe0c46a8f->leave($__internal_6ea2df4996f7a7514b987cae244c73495a46e4e5928ebf054626fbfbe0c46a8f_prof);

        
        $__internal_c4e61e786dbaeeadc1c41889365e44d50d3e6462206c5218b46e7d080b634f22->leave($__internal_c4e61e786dbaeeadc1c41889365e44d50d3e6462206c5218b46e7d080b634f22_prof);

    }

    public function getTemplateName()
    {
        return ":elevesViews:parentEleve.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 29,  101 => 23,  94 => 21,  91 => 20,  87 => 19,  75 => 9,  66 => 8,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'baseList.html.twig' %}

{% block title %}
\t<h1>Pas de parent associé à {{eleve.nom}} {{eleve.prenom}} </h1>
\t<h2>Selectioner un parent</h2>\t
{% endblock %}

{% block bodyList %}

    <div class=\"table-responsive\">
        <table id=\"customers2\" class=\"table datatable\">
            <thead>
                <tr>
                    <th>Nom & Prenom</th>
                    <th>Associer</th>
                </tr>
            </thead>
            <tbody>
                {% for parant in app.user.ecole.parents %}
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>{{ parant.nom|upper}} {{ parant.prenom}}</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"{{ path('assoParent',{'id':eleve.id,'idp':parant.id})}}\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-male\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
                {% endfor %}
            </tbody>
        </table>                                    
    </div>
    
{% endblock %}  
", ":elevesViews:parentEleve.html.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\app/Resources\\views/elevesViews/parentEleve.html.twig");
    }
}
