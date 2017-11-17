<?php

/* :sallesViews:listSalles.html.twig */
class __TwigTemplate_3c4e86226ad522f5b132e28e6efdc36e83cb174a25c790db0e8ec670375a6324 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseList.html.twig", ":sallesViews:listSalles.html.twig", 1);
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
        $__internal_aef6ca979a17b5897b07f277824f84022233defdf05cc4ec1ff1440b641ff8c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aef6ca979a17b5897b07f277824f84022233defdf05cc4ec1ff1440b641ff8c5->enter($__internal_aef6ca979a17b5897b07f277824f84022233defdf05cc4ec1ff1440b641ff8c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":sallesViews:listSalles.html.twig"));

        $__internal_0dfebe813b076abffcd2fe3c5ea2204eb0dc45545978364b7eca6ff01c92825b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0dfebe813b076abffcd2fe3c5ea2204eb0dc45545978364b7eca6ff01c92825b->enter($__internal_0dfebe813b076abffcd2fe3c5ea2204eb0dc45545978364b7eca6ff01c92825b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":sallesViews:listSalles.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aef6ca979a17b5897b07f277824f84022233defdf05cc4ec1ff1440b641ff8c5->leave($__internal_aef6ca979a17b5897b07f277824f84022233defdf05cc4ec1ff1440b641ff8c5_prof);

        
        $__internal_0dfebe813b076abffcd2fe3c5ea2204eb0dc45545978364b7eca6ff01c92825b->leave($__internal_0dfebe813b076abffcd2fe3c5ea2204eb0dc45545978364b7eca6ff01c92825b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_166b89ac8cc56bc6bc98a4e7dc3558534dc493b6f0731ca8b24ca7202a3b1796 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_166b89ac8cc56bc6bc98a4e7dc3558534dc493b6f0731ca8b24ca7202a3b1796->enter($__internal_166b89ac8cc56bc6bc98a4e7dc3558534dc493b6f0731ca8b24ca7202a3b1796_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_87d83d4011c050e502ddfa832ed0d5763660d0d28763599766eb036a5155434b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87d83d4011c050e502ddfa832ed0d5763660d0d28763599766eb036a5155434b->enter($__internal_87d83d4011c050e502ddfa832ed0d5763660d0d28763599766eb036a5155434b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\t";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("salles"), "html", null, true);
        echo "
";
        
        $__internal_87d83d4011c050e502ddfa832ed0d5763660d0d28763599766eb036a5155434b->leave($__internal_87d83d4011c050e502ddfa832ed0d5763660d0d28763599766eb036a5155434b_prof);

        
        $__internal_166b89ac8cc56bc6bc98a4e7dc3558534dc493b6f0731ca8b24ca7202a3b1796->leave($__internal_166b89ac8cc56bc6bc98a4e7dc3558534dc493b6f0731ca8b24ca7202a3b1796_prof);

    }

    // line 8
    public function block_bodyList($context, array $blocks = array())
    {
        $__internal_818d75f11f038f041fc4dd85a722f9ff00ef7b0b25809cfe45a72b9ecf27f222 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_818d75f11f038f041fc4dd85a722f9ff00ef7b0b25809cfe45a72b9ecf27f222->enter($__internal_818d75f11f038f041fc4dd85a722f9ff00ef7b0b25809cfe45a72b9ecf27f222_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        $__internal_d1fe80bbf82c19f656b3f5589abfd624763b2dd2dc6f76c4c8c59449c6c6a67a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1fe80bbf82c19f656b3f5589abfd624763b2dd2dc6f76c4c8c59449c6c6a67a->enter($__internal_d1fe80bbf82c19f656b3f5589abfd624763b2dd2dc6f76c4c8c59449c6c6a67a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        // line 9
        echo "
    <div class=\"table-responsive\">
        <table id=\"customers2\" class=\"table datatable\">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Capacité</th>
                    <th>Equipements</th>
                    <th>";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("edit"), "html", null, true);
        echo "</th>
                    <th>";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("delete"), "html", null, true);
        echo "</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "ecole", array()), "salles", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["salle"]) {
            // line 23
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
            // line 24
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["salle"], "nom", array())), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["salle"], "capacite", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["salle"], "equipement", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editSalle", array("id" => $this->getAttribute($context["salle"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-pencil-square-o\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("removeSalle", array("id" => $this->getAttribute($context["salle"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-trash\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['salle'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "            </tbody>
        </table>                                    
    </div>
    
";
        
        $__internal_d1fe80bbf82c19f656b3f5589abfd624763b2dd2dc6f76c4c8c59449c6c6a67a->leave($__internal_d1fe80bbf82c19f656b3f5589abfd624763b2dd2dc6f76c4c8c59449c6c6a67a_prof);

        
        $__internal_818d75f11f038f041fc4dd85a722f9ff00ef7b0b25809cfe45a72b9ecf27f222->leave($__internal_818d75f11f038f041fc4dd85a722f9ff00ef7b0b25809cfe45a72b9ecf27f222_prof);

    }

    public function getTemplateName()
    {
        return ":sallesViews:listSalles.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 39,  123 => 33,  115 => 28,  110 => 26,  106 => 25,  102 => 24,  99 => 23,  95 => 22,  88 => 18,  84 => 17,  74 => 9,  65 => 8,  50 => 4,  41 => 3,  11 => 1,);
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
\t{{'list'|trans}} {{'salles'|trans}}
{% endblock %}


{% block bodyList %}

    <div class=\"table-responsive\">
        <table id=\"customers2\" class=\"table datatable\">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Capacité</th>
                    <th>Equipements</th>
                    <th>{{'edit'|trans}}</th>
                    <th>{{'delete'|trans}}</th>
                </tr>
            </thead>
            <tbody>
                {% for salle in app.user.ecole.salles%}
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>{{ salle.nom|upper}}</td>
\t\t\t\t\t\t<td>{{ salle.capacite}}</td>
\t\t\t\t\t\t<td>{{ salle.equipement}}</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"{{ path('editSalle',{'id':salle.id})}}\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-pencil-square-o\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"{{ path('removeSalle',{'id':salle.id})}}\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-trash\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
                {% endfor %}
            </tbody>
        </table>                                    
    </div>
    
{% endblock %}  ", ":sallesViews:listSalles.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/views/sallesViews/listSalles.html.twig");
    }
}
