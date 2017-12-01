<?php

/* :parentsViews:listParents.html.twig */
class __TwigTemplate_e02e4cf6111ee726497529271343eed8aaf37d3507922717c91f80a24b02491f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseList.html.twig", ":parentsViews:listParents.html.twig", 1);
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
        $__internal_737e75bcc6e0bbdfc71fc6e0af33240b622c0acf79e3bbfc86be907994a3b3c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_737e75bcc6e0bbdfc71fc6e0af33240b622c0acf79e3bbfc86be907994a3b3c5->enter($__internal_737e75bcc6e0bbdfc71fc6e0af33240b622c0acf79e3bbfc86be907994a3b3c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":parentsViews:listParents.html.twig"));

        $__internal_4a32f6c7d10b756a3e47bc69aa3517a97be9d2d8f858a490c4bd6222cedcc475 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a32f6c7d10b756a3e47bc69aa3517a97be9d2d8f858a490c4bd6222cedcc475->enter($__internal_4a32f6c7d10b756a3e47bc69aa3517a97be9d2d8f858a490c4bd6222cedcc475_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":parentsViews:listParents.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_737e75bcc6e0bbdfc71fc6e0af33240b622c0acf79e3bbfc86be907994a3b3c5->leave($__internal_737e75bcc6e0bbdfc71fc6e0af33240b622c0acf79e3bbfc86be907994a3b3c5_prof);

        
        $__internal_4a32f6c7d10b756a3e47bc69aa3517a97be9d2d8f858a490c4bd6222cedcc475->leave($__internal_4a32f6c7d10b756a3e47bc69aa3517a97be9d2d8f858a490c4bd6222cedcc475_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_25985dea29630ee3a852f328d2a4635e164e3540a849ee0a5d01e059c0779a76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25985dea29630ee3a852f328d2a4635e164e3540a849ee0a5d01e059c0779a76->enter($__internal_25985dea29630ee3a852f328d2a4635e164e3540a849ee0a5d01e059c0779a76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_85f4afd0b9ca532e39b876fb6651e5a8d59b2bd77c811ae3c13de023a0623703 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85f4afd0b9ca532e39b876fb6651e5a8d59b2bd77c811ae3c13de023a0623703->enter($__internal_85f4afd0b9ca532e39b876fb6651e5a8d59b2bd77c811ae3c13de023a0623703_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\t";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("parents"), "html", null, true);
        echo "
";
        
        $__internal_85f4afd0b9ca532e39b876fb6651e5a8d59b2bd77c811ae3c13de023a0623703->leave($__internal_85f4afd0b9ca532e39b876fb6651e5a8d59b2bd77c811ae3c13de023a0623703_prof);

        
        $__internal_25985dea29630ee3a852f328d2a4635e164e3540a849ee0a5d01e059c0779a76->leave($__internal_25985dea29630ee3a852f328d2a4635e164e3540a849ee0a5d01e059c0779a76_prof);

    }

    // line 7
    public function block_bodyList($context, array $blocks = array())
    {
        $__internal_4b5ea1141daf0821feffdc2b5b7306a0accbf88ef9d8992b9020505a40d344af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b5ea1141daf0821feffdc2b5b7306a0accbf88ef9d8992b9020505a40d344af->enter($__internal_4b5ea1141daf0821feffdc2b5b7306a0accbf88ef9d8992b9020505a40d344af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        $__internal_0ee7708e351e6df369f667d25a45cfc18931f7eef384e40fbd891a313e0c4678 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ee7708e351e6df369f667d25a45cfc18931f7eef384e40fbd891a313e0c4678->enter($__internal_0ee7708e351e6df369f667d25a45cfc18931f7eef384e40fbd891a313e0c4678_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

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
        
        $__internal_0ee7708e351e6df369f667d25a45cfc18931f7eef384e40fbd891a313e0c4678->leave($__internal_0ee7708e351e6df369f667d25a45cfc18931f7eef384e40fbd891a313e0c4678_prof);

        
        $__internal_4b5ea1141daf0821feffdc2b5b7306a0accbf88ef9d8992b9020505a40d344af->leave($__internal_4b5ea1141daf0821feffdc2b5b7306a0accbf88ef9d8992b9020505a40d344af_prof);

    }

    public function getTemplateName()
    {
        return ":parentsViews:listParents.html.twig";
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
    
{% endblock %} ", ":parentsViews:listParents.html.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\app/Resources\\views/parentsViews/listParents.html.twig");
    }
}
