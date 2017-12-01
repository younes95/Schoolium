<?php

/* parentsViews/listParents.html.twig */
class __TwigTemplate_05516d5e8b46c1319c56bf546d86eca6ee996a0b18160868a2f7fd827b83df00 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseList.html.twig", "parentsViews/listParents.html.twig", 1);
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
        $__internal_91ce011199851af0f7e0749d2a1d6dde4d4d95199bb40f2461c8e8c1fd440b5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91ce011199851af0f7e0749d2a1d6dde4d4d95199bb40f2461c8e8c1fd440b5a->enter($__internal_91ce011199851af0f7e0749d2a1d6dde4d4d95199bb40f2461c8e8c1fd440b5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "parentsViews/listParents.html.twig"));

        $__internal_69f0f5a0f23b791bb3abafb8dc45ce9a5cccd1c58b29eed1a38a9441cd5727cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69f0f5a0f23b791bb3abafb8dc45ce9a5cccd1c58b29eed1a38a9441cd5727cb->enter($__internal_69f0f5a0f23b791bb3abafb8dc45ce9a5cccd1c58b29eed1a38a9441cd5727cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "parentsViews/listParents.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_91ce011199851af0f7e0749d2a1d6dde4d4d95199bb40f2461c8e8c1fd440b5a->leave($__internal_91ce011199851af0f7e0749d2a1d6dde4d4d95199bb40f2461c8e8c1fd440b5a_prof);

        
        $__internal_69f0f5a0f23b791bb3abafb8dc45ce9a5cccd1c58b29eed1a38a9441cd5727cb->leave($__internal_69f0f5a0f23b791bb3abafb8dc45ce9a5cccd1c58b29eed1a38a9441cd5727cb_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_887ad4ff62cb6e4f2bdf7fc0217fbcac6f4e296c52dcf556f00c4e7ec425a202 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_887ad4ff62cb6e4f2bdf7fc0217fbcac6f4e296c52dcf556f00c4e7ec425a202->enter($__internal_887ad4ff62cb6e4f2bdf7fc0217fbcac6f4e296c52dcf556f00c4e7ec425a202_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c950190ccb0730eb259b6cd852dfe48e07b81fbfb64158a333cbb7f2c10a530d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c950190ccb0730eb259b6cd852dfe48e07b81fbfb64158a333cbb7f2c10a530d->enter($__internal_c950190ccb0730eb259b6cd852dfe48e07b81fbfb64158a333cbb7f2c10a530d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\t";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("parents"), "html", null, true);
        echo "
";
        
        $__internal_c950190ccb0730eb259b6cd852dfe48e07b81fbfb64158a333cbb7f2c10a530d->leave($__internal_c950190ccb0730eb259b6cd852dfe48e07b81fbfb64158a333cbb7f2c10a530d_prof);

        
        $__internal_887ad4ff62cb6e4f2bdf7fc0217fbcac6f4e296c52dcf556f00c4e7ec425a202->leave($__internal_887ad4ff62cb6e4f2bdf7fc0217fbcac6f4e296c52dcf556f00c4e7ec425a202_prof);

    }

    // line 7
    public function block_bodyList($context, array $blocks = array())
    {
        $__internal_a8bb4684a3b0a2ef90da3618ec6badd711c3addd4ae65d36bd8d12f3c381342d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8bb4684a3b0a2ef90da3618ec6badd711c3addd4ae65d36bd8d12f3c381342d->enter($__internal_a8bb4684a3b0a2ef90da3618ec6badd711c3addd4ae65d36bd8d12f3c381342d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        $__internal_e784fb11d3a802503669f1d72141f2c14786048520ef6a03f362540e60ab4fc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e784fb11d3a802503669f1d72141f2c14786048520ef6a03f362540e60ab4fc0->enter($__internal_e784fb11d3a802503669f1d72141f2c14786048520ef6a03f362540e60ab4fc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        // line 8
        echo "
\t
    <div class=\"table-responsive\">
        <table id=\"customers2\" class=\"table datatable\">
            <thead>
                <tr>
                    <th>Nom & Prenom</th>
                    <th>Enfants dans l'ecole</th>
                    <th>";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("edit"), "html", null, true);
        echo "</th>
                    <th>";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("delete"), "html", null, true);
        echo "</th>
                    <th>";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile"), "html", null, true);
        echo "</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "ecole", array()), "parents", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["parent"]) {
            // line 23
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
            // line 24
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["parent"], "nom", array())), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["parent"], "prenom", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<ol>
\t\t\t\t\t\t\t\t";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["parent"], "eleves", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
                // line 28
                echo "\t\t\t\t\t\t\t\t\t<li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profileEleve", array("id" => $this->getAttribute($context["e"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["e"], "nom", array())), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "prenom", array()), "html", null, true);
                echo "</a></li>\t
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "\t\t\t\t\t\t\t</ol>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editParental", array("id" => $this->getAttribute($context["parent"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-pencil-square-o\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("removeParental", array("id" => $this->getAttribute($context["parent"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-trash\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profileParental", array("id" => $this->getAttribute($context["parent"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-user\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['parent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "            </tbody>
        </table>                                    
    </div>
    
";
        
        $__internal_e784fb11d3a802503669f1d72141f2c14786048520ef6a03f362540e60ab4fc0->leave($__internal_e784fb11d3a802503669f1d72141f2c14786048520ef6a03f362540e60ab4fc0_prof);

        
        $__internal_a8bb4684a3b0a2ef90da3618ec6badd711c3addd4ae65d36bd8d12f3c381342d->leave($__internal_a8bb4684a3b0a2ef90da3618ec6badd711c3addd4ae65d36bd8d12f3c381342d_prof);

    }

    public function getTemplateName()
    {
        return "parentsViews/listParents.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 49,  152 => 43,  144 => 38,  136 => 33,  131 => 30,  118 => 28,  114 => 27,  106 => 24,  103 => 23,  99 => 22,  92 => 18,  88 => 17,  84 => 16,  74 => 8,  65 => 7,  50 => 4,  41 => 3,  11 => 1,);
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
\t{{'list'|trans}} {{'parents'|trans}}
{% endblock %}

{% block bodyList %}

\t
    <div class=\"table-responsive\">
        <table id=\"customers2\" class=\"table datatable\">
            <thead>
                <tr>
                    <th>Nom & Prenom</th>
                    <th>Enfants dans l'ecole</th>
                    <th>{{'edit'|trans}}</th>
                    <th>{{'delete'|trans}}</th>
                    <th>{{'profile'|trans}}</th>
                </tr>
            </thead>
            <tbody>
                {% for parent in app.user.ecole.parents %}
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>{{ parent.nom|upper}} {{ parent.prenom}}</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<ol>
\t\t\t\t\t\t\t\t{% for e in parent.eleves %}
\t\t\t\t\t\t\t\t\t<li><a href=\"{{ path('profileEleve',{'id':e.id})}}\">{{ e.nom|upper}} {{ e.prenom}}</a></li>\t
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</ol>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"{{ path('editParental',{'id':parent.id})}}\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-pencil-square-o\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"{{ path('removeParental',{'id':parent.id})}}\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-trash\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"{{ path('profileParental',{'id':parent.id})}}\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-user\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
                {% endfor %}
            </tbody>
        </table>                                    
    </div>
    
{% endblock %} ", "parentsViews/listParents.html.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\app\\Resources\\views\\parentsViews\\listParents.html.twig");
    }
}
