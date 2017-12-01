<?php

/* enseignantsViews/listClasses.html.twig */
class __TwigTemplate_c432690059a55c2267313b51ab63bea7a79c643d74dd0490e9d25fe1a4b2d8e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseList.html.twig", "enseignantsViews/listClasses.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'bodyList' => array($this, 'block_bodyList'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "baseList.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a1523c4c537af1b4a47201dc3ca65d42ba666f53810dacd96bf88dea560d0628 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1523c4c537af1b4a47201dc3ca65d42ba666f53810dacd96bf88dea560d0628->enter($__internal_a1523c4c537af1b4a47201dc3ca65d42ba666f53810dacd96bf88dea560d0628_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "enseignantsViews/listClasses.html.twig"));

        $__internal_a090ccf06e3e04b957fdfed003c74051b7d80f1dbdd8f8e689d76e87586136dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a090ccf06e3e04b957fdfed003c74051b7d80f1dbdd8f8e689d76e87586136dc->enter($__internal_a090ccf06e3e04b957fdfed003c74051b7d80f1dbdd8f8e689d76e87586136dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "enseignantsViews/listClasses.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a1523c4c537af1b4a47201dc3ca65d42ba666f53810dacd96bf88dea560d0628->leave($__internal_a1523c4c537af1b4a47201dc3ca65d42ba666f53810dacd96bf88dea560d0628_prof);

        
        $__internal_a090ccf06e3e04b957fdfed003c74051b7d80f1dbdd8f8e689d76e87586136dc->leave($__internal_a090ccf06e3e04b957fdfed003c74051b7d80f1dbdd8f8e689d76e87586136dc_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_03ded35c1f17b42edb50a885efb27a2ab0bf6fdda898d8924a49d655cf407962 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03ded35c1f17b42edb50a885efb27a2ab0bf6fdda898d8924a49d655cf407962->enter($__internal_03ded35c1f17b42edb50a885efb27a2ab0bf6fdda898d8924a49d655cf407962_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_dc3f31bf7e2704678fc58bb58f1c85cab445d025574192742db71d6964eee016 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc3f31bf7e2704678fc58bb58f1c85cab445d025574192742db71d6964eee016->enter($__internal_dc3f31bf7e2704678fc58bb58f1c85cab445d025574192742db71d6964eee016_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\t";
        echo twig_escape_filter($this->env, (((($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list") . " ") . $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("classes")) . "-") . $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("matieres")), "html", null, true);
        echo "
";
        
        $__internal_dc3f31bf7e2704678fc58bb58f1c85cab445d025574192742db71d6964eee016->leave($__internal_dc3f31bf7e2704678fc58bb58f1c85cab445d025574192742db71d6964eee016_prof);

        
        $__internal_03ded35c1f17b42edb50a885efb27a2ab0bf6fdda898d8924a49d655cf407962->leave($__internal_03ded35c1f17b42edb50a885efb27a2ab0bf6fdda898d8924a49d655cf407962_prof);

    }

    // line 8
    public function block_bodyList($context, array $blocks = array())
    {
        $__internal_44fb018f0eb74145ec2a4d6c11f2d0ac14d74c143f0b103858011bef9818d8b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44fb018f0eb74145ec2a4d6c11f2d0ac14d74c143f0b103858011bef9818d8b0->enter($__internal_44fb018f0eb74145ec2a4d6c11f2d0ac14d74c143f0b103858011bef9818d8b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        $__internal_d0c275a1262f8f8101ed96505b7425817b113efcb8c23c37f62b1523d2f747ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0c275a1262f8f8101ed96505b7425817b113efcb8c23c37f62b1523d2f747ef->enter($__internal_d0c275a1262f8f8101ed96505b7425817b113efcb8c23c37f62b1523d2f747ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        // line 9
        echo "\t\t\t
    <div class=\"table-responsive\">
        <table id=\"customers2\" class=\"table datatable\">
            <thead>
                <tr>
                    <th>";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("school"), "html", null, true);
        echo "</th>
                    <th>";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("classe"), "html", null, true);
        echo "</th>
                    <th>";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("annee"), "html", null, true);
        echo "</th>
                    <th>";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("niveau"), "html", null, true);
        echo "</th>
                    <th>";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("matiere"), "html", null, true);
        echo "</th>
                    <th>";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("eleve.title"), "html", null, true);
        echo "</th>
                    <th>";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("global.program"), "html", null, true);
        echo "</th>
                    <th>";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("global.annual.program"), "html", null, true);
        echo "</th>
                    <th>";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("absence.title"), "html", null, true);
        echo "</th>
                    <th>";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("message.title"), "html", null, true);
        echo "</th>
                </tr>
            </thead>
            ";
        if ($this->env->isDebug()) {
            // line 26
            \Symfony\Component\VarDumper\VarDumper::dump(($context["data"] ?? $this->getContext($context, "data")));
        }
        // line 27
        echo "            <tbody>
                ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "classes", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["classe"]) {
            // line 29
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["classe"], "classe", array()), "ecole", array()), "nom", array()), "html", null, true);
            echo " </td>
\t\t\t\t\t\t<td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["classe"], "classe", array()), "nom", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["classe"], "classe", array()), "annee", array()), "nom", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["classe"], "classe", array()), "annee", array()), "niveau", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["classe"], "matiere", array()), "nom", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t<a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showEleve", array("idClasse" => $this->getAttribute($this->getAttribute($context["classe"], "classe", array()), "id", array()), "idMatiere" => $this->getAttribute($this->getAttribute($context["classe"], "matiere", array()), "id", array()))), "html", null, true);
            echo "\"> <i class=\"fa fa-eye\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t<a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("program_show_class", array("id" => $this->getAttribute($this->getAttribute($context["classe"], "classe", array()), "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-tasks\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t";
            // line 45
            if ( !(null === $this->getAttribute($context["classe"], "programmeAnnuel", array()))) {
                // line 46
                echo "\t\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(((($context["uploads_matiere_prog_annuel"] ?? $this->getContext($context, "uploads_matiere_prog_annuel")) . "/") . $this->getAttribute($context["classe"], "programmeAnnuel", array()))), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-file\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
            }
            // line 50
            echo "\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t<a href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("absence_new", array("id" => $this->getAttribute($this->getAttribute($context["classe"], "classe", array()), "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-plus\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-envelope\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['classe'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "            </tbody>
        </table>                                    
    </div>
    
";
        
        $__internal_d0c275a1262f8f8101ed96505b7425817b113efcb8c23c37f62b1523d2f747ef->leave($__internal_d0c275a1262f8f8101ed96505b7425817b113efcb8c23c37f62b1523d2f747ef_prof);

        
        $__internal_44fb018f0eb74145ec2a4d6c11f2d0ac14d74c143f0b103858011bef9818d8b0->leave($__internal_44fb018f0eb74145ec2a4d6c11f2d0ac14d74c143f0b103858011bef9818d8b0_prof);

    }

    // line 69
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_81e9f1a2559cb54dda718ace0452ca50dd0a567a59d2c76277a1a38085fd62fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81e9f1a2559cb54dda718ace0452ca50dd0a567a59d2c76277a1a38085fd62fd->enter($__internal_81e9f1a2559cb54dda718ace0452ca50dd0a567a59d2c76277a1a38085fd62fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_a3aacd95ef7991ec1dc52b9800a049400cce5e99739eb9e3e7d6a057610e4d0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3aacd95ef7991ec1dc52b9800a049400cce5e99739eb9e3e7d6a057610e4d0a->enter($__internal_a3aacd95ef7991ec1dc52b9800a049400cce5e99739eb9e3e7d6a057610e4d0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 70
        echo "\t<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/datatables/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    
<script type=\"text/javascript\">
\t
     \$( document ).ready( function() {

                \$('#customers2').dataTable();
            });
</script>

";
        
        $__internal_a3aacd95ef7991ec1dc52b9800a049400cce5e99739eb9e3e7d6a057610e4d0a->leave($__internal_a3aacd95ef7991ec1dc52b9800a049400cce5e99739eb9e3e7d6a057610e4d0a_prof);

        
        $__internal_81e9f1a2559cb54dda718ace0452ca50dd0a567a59d2c76277a1a38085fd62fd->leave($__internal_81e9f1a2559cb54dda718ace0452ca50dd0a567a59d2c76277a1a38085fd62fd_prof);

    }

    public function getTemplateName()
    {
        return "enseignantsViews/listClasses.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 70,  217 => 69,  203 => 63,  186 => 52,  182 => 50,  174 => 46,  172 => 45,  164 => 40,  157 => 36,  152 => 34,  148 => 33,  144 => 32,  140 => 31,  136 => 30,  133 => 29,  129 => 28,  126 => 27,  123 => 26,  116 => 23,  112 => 22,  108 => 21,  104 => 20,  100 => 19,  96 => 18,  92 => 17,  88 => 16,  84 => 15,  80 => 14,  73 => 9,  64 => 8,  51 => 4,  42 => 3,  11 => 1,);
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
\t{{'list'|trans ~' '~ 'classes'|trans ~'-'~ 'matieres'|trans}}
{% endblock %}


{% block bodyList %}
\t\t\t
    <div class=\"table-responsive\">
        <table id=\"customers2\" class=\"table datatable\">
            <thead>
                <tr>
                    <th>{{'school'|trans}}</th>
                    <th>{{'classe'|trans}}</th>
                    <th>{{'annee'|trans}}</th>
                    <th>{{'niveau'|trans}}</th>
                    <th>{{'matiere'|trans}}</th>
                    <th>{{'eleve.title'|trans}}</th>
                    <th>{{'global.program'|trans}}</th>
                    <th>{{'global.annual.program'|trans}}</th>
                    <th>{{'absence.title'|trans}}</th>
                    <th>{{'message.title'|trans}}</th>
                </tr>
            </thead>
            {% dump(data) %}
            <tbody>
                {% for classe in data.classes %}
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>{{ classe.classe.ecole.nom}} </td>
\t\t\t\t\t\t<td>{{ classe.classe.nom }}</td>
\t\t\t\t\t\t<td>{{ classe.classe.annee.nom}}</td>
\t\t\t\t\t\t<td>{{ classe.classe.annee.niveau}}</td>
\t\t\t\t\t\t<td>{{classe.matiere.nom}}</td>
\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t<a href=\"{{ path('showEleve', { 'idClasse': classe.classe.id, 'idMatiere': classe.matiere.id}) }}\"> <i class=\"fa fa-eye\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t<a href=\"{{path('program_show_class',{ 'id': classe.classe.id})}}\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-tasks\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t{% if classe.programmeAnnuel is not null %}
\t\t\t\t\t\t\t<a href=\"{{asset(uploads_matiere_prog_annuel~'/'~classe.programmeAnnuel)}}\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-file\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t<a href=\"{{path('absence_new',{ 'id': classe.classe.id})}}\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-plus\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-envelope\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
                {% endfor %}
            </tbody>
        </table>                                    
    </div>
    
{% endblock %}  

{% block javascripts %}
\t<script type=\"text/javascript\" src=\"{{ asset('js/plugins/datatables/jquery.dataTables.min.js')}}\"></script>
    
<script type=\"text/javascript\">
\t
     \$( document ).ready( function() {

                \$('#customers2').dataTable();
            });
</script>

{% endblock %}", "enseignantsViews/listClasses.html.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\app\\Resources\\views\\enseignantsViews\\listClasses.html.twig");
    }
}
