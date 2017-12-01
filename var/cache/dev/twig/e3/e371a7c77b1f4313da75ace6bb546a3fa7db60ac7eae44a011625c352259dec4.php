<?php

/* absence/index.html.twig */
class __TwigTemplate_46ff01c38c8af23cb30a4c500fd99dc3429eba2b631a06826521b76ac8aa4418 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseList.html.twig", "absence/index.html.twig", 1);
        $this->blocks = array(
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
        $__internal_d24296fefbe4f860c68a1d4dc781059bec491c3cc2bee2fd7df53bc19e5e466b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d24296fefbe4f860c68a1d4dc781059bec491c3cc2bee2fd7df53bc19e5e466b->enter($__internal_d24296fefbe4f860c68a1d4dc781059bec491c3cc2bee2fd7df53bc19e5e466b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "absence/index.html.twig"));

        $__internal_892cd61c2e56b11696cc7ef571d377d9225c1204de703b602bda0879ef157125 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_892cd61c2e56b11696cc7ef571d377d9225c1204de703b602bda0879ef157125->enter($__internal_892cd61c2e56b11696cc7ef571d377d9225c1204de703b602bda0879ef157125_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "absence/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d24296fefbe4f860c68a1d4dc781059bec491c3cc2bee2fd7df53bc19e5e466b->leave($__internal_d24296fefbe4f860c68a1d4dc781059bec491c3cc2bee2fd7df53bc19e5e466b_prof);

        
        $__internal_892cd61c2e56b11696cc7ef571d377d9225c1204de703b602bda0879ef157125->leave($__internal_892cd61c2e56b11696cc7ef571d377d9225c1204de703b602bda0879ef157125_prof);

    }

    // line 3
    public function block_bodyList($context, array $blocks = array())
    {
        $__internal_a941ad71047940dff284b020cecc6d774b6991d683d9326ba27c8f15271578bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a941ad71047940dff284b020cecc6d774b6991d683d9326ba27c8f15271578bd->enter($__internal_a941ad71047940dff284b020cecc6d774b6991d683d9326ba27c8f15271578bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        $__internal_f00dbe59b962bc8bf71d407e1b84611ae15f73f2ba2239741cbabc78cee74f35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f00dbe59b962bc8bf71d407e1b84611ae15f73f2ba2239741cbabc78cee74f35->enter($__internal_f00dbe59b962bc8bf71d407e1b84611ae15f73f2ba2239741cbabc78cee74f35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        // line 4
        echo "<div class=\"page-content-wrap\">
    ";
        // line 6
        echo "         ";
        // line 7
        echo "           <!-- <a href=\"";
        echo "</a> -->
        ";
        // line 9
        echo "    ";
        echo "            
    <div class=\"row\">
        <div class=\"col-md-12\">
\t\t\t";
        // line 12
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
\t\t\t<div class=\"panel panel-default\">
\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t<h3 class=\"panel-title\">
\t\t\t\t\t\t";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("absence.manage"), "html", null, true);
        echo "
\t\t\t\t\t</h3>
\t\t\t\t</div>
\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t";
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "classe", array()), 'label', array("label_attr" => array("class" => "col-md-3 col-xs-12 control-label")));
        echo "
\t\t\t\t\t\t<div class=\"col-md-6 col-xs-12\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><span class=\"fa fa-pencil\"></span></span>
\t\t\t\t\t\t    \t";
        // line 25
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "classe", array()), 'widget', array("id" => "selectClasse", "attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t\t    </div>
\t\t\t\t\t    \t";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "classe", array()), 'errors');
        echo "
\t\t\t\t\t    </div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "annee", array()), 'label', array("label_attr" => array("class" => "col-md-3 col-xs-12 control-label")));
        echo "
\t\t\t\t\t\t<div class=\"col-md-6 col-xs-12\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><span class=\"fa fa-pencil\"></span></span>
\t\t\t\t\t\t    \t";
        // line 35
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "annee", array()), 'widget', array("id" => "selectYear", "attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        // line 37
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "annee", array()), 'errors');
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<button type=\"submit\" class=\"btn btn-primary pull-right\">Chercher</button>
\t\t\t";
        // line 43
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
\t\t</div>
\t</div>

";
        // line 47
        if ((twig_length_filter($this->env, ($context["absences"] ?? $this->getContext($context, "absences"))) != 0)) {
            // line 48
            echo "\t<div class=\"col-md-12\" style=\"margin-top: 5%;\">
\t\t<div class=\"table-responsive\">
\t\t   \t<table id=\"customers2\" class=\"table datatable\">
\t\t        <thead>
\t\t            <tr>
\t\t                <th>";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("eleve.nom"), "html", null, true);
            echo "</th>
\t\t                <th>";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("eleve.prenom"), "html", null, true);
            echo "</th>
\t\t                <th>";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("global.type"), "html", null, true);
            echo "</th>
\t\t                <th>";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("absence.date"), "html", null, true);
            echo "</th>
\t\t                <th>";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.comment"), "html", null, true);
            echo "</th>
\t\t                <th>";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("global.action"), "html", null, true);
            echo "</th>
\t\t            </tr>
\t\t\t    </thead>
\t\t        <tbody>
\t\t          \t";
            // line 62
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["absences"] ?? $this->getContext($context, "absences")));
            foreach ($context['_seq'] as $context["_key"] => $context["absence"]) {
                // line 63
                echo "\t\t           \t<tr>
\t\t    \t       \t<td>";
                // line 64
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($context["absence"], "eleve", array()), "nom", array())), "html", null, true);
                echo "</td>
\t\t            \t<td>";
                // line 65
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($context["absence"], "eleve", array()), "prenom", array())), "html", null, true);
                echo "</td>
\t\t            \t<td>";
                // line 66
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["absence"], "type", array())), "html", null, true);
                echo "</td>
\t\t            \t<td>";
                // line 67
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["absence"], "date", array()), "d/m/Y"), "html", null, true);
                echo "</td>
\t\t            \t<td>";
                // line 68
                echo twig_escape_filter($this->env, $this->getAttribute($context["absence"], "commentaire", array()), "html", null, true);
                echo "</td>
\t\t            \t<td>
\t\t            \t\t<a href=\"";
                // line 70
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("edit_absence", array("id" => $this->getAttribute($context["absence"], "id", array()), "idClasse" => $this->getAttribute($this->getAttribute($this->getAttribute($context["absence"], "eleve", array()), "classe", array()), "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-condensed btn-info\">
\t\t            \t\t\t<span class=\"fa fa-edit\"></span>
\t\t            \t\t</a>
\t\t            \t\t<a href=\"";
                // line 73
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delete_absence", array("id" => $this->getAttribute($context["absence"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-condensed btn-danger\">
\t\t            \t\t\t<span class=\"fa fa-trash\"></span>
\t\t            \t\t</a>
\t\t            \t</td>
\t\t            </tr>
\t\t            \t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['absence'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 79
            echo "\t\t        </tbody>
\t\t    </table>
\t\t</div>
\t</div>

";
        }
        // line 85
        echo "
</div>
";
        
        $__internal_f00dbe59b962bc8bf71d407e1b84611ae15f73f2ba2239741cbabc78cee74f35->leave($__internal_f00dbe59b962bc8bf71d407e1b84611ae15f73f2ba2239741cbabc78cee74f35_prof);

        
        $__internal_a941ad71047940dff284b020cecc6d774b6991d683d9326ba27c8f15271578bd->leave($__internal_a941ad71047940dff284b020cecc6d774b6991d683d9326ba27c8f15271578bd_prof);

    }

    // line 89
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a7b96f1aeabd5129eaa6b1913da1e1993df02e66422a42e439964d457ebc3bf5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7b96f1aeabd5129eaa6b1913da1e1993df02e66422a42e439964d457ebc3bf5->enter($__internal_a7b96f1aeabd5129eaa6b1913da1e1993df02e66422a42e439964d457ebc3bf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_2cb958bffe744fca69f98bac623ebdd53cc3fa58419abebd35f3ac5eee8f233e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cb958bffe744fca69f98bac623ebdd53cc3fa58419abebd35f3ac5eee8f233e->enter($__internal_2cb958bffe744fca69f98bac623ebdd53cc3fa58419abebd35f3ac5eee8f233e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 90
        echo "\t
<script type=\"text/javascript\">

     \$( document ).ready( function() {

                \$('#selectYear').selectpicker({
 \t\t\t\t\tstyle: 'btn-default',
  \t\t\t\t\tsize: 4
\t\t\t\t});
\t\t\t\t \$('#selectClasse').selectpicker({
 \t\t\t\t\tstyle: 'btn-default',
  \t\t\t\t\tsize: 4
\t\t\t\t});
            });
</script>

";
        
        $__internal_2cb958bffe744fca69f98bac623ebdd53cc3fa58419abebd35f3ac5eee8f233e->leave($__internal_2cb958bffe744fca69f98bac623ebdd53cc3fa58419abebd35f3ac5eee8f233e_prof);

        
        $__internal_a7b96f1aeabd5129eaa6b1913da1e1993df02e66422a42e439964d457ebc3bf5->leave($__internal_a7b96f1aeabd5129eaa6b1913da1e1993df02e66422a42e439964d457ebc3bf5_prof);

    }

    public function getTemplateName()
    {
        return "absence/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  238 => 90,  229 => 89,  217 => 85,  209 => 79,  197 => 73,  191 => 70,  186 => 68,  182 => 67,  178 => 66,  174 => 65,  170 => 64,  167 => 63,  163 => 62,  156 => 58,  152 => 57,  148 => 56,  144 => 55,  140 => 54,  136 => 53,  129 => 48,  127 => 47,  120 => 43,  111 => 37,  106 => 35,  99 => 31,  92 => 27,  87 => 25,  80 => 21,  72 => 16,  65 => 12,  59 => 9,  55 => 7,  53 => 6,  50 => 4,  41 => 3,  11 => 1,);
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

{% block bodyList %}
<div class=\"page-content-wrap\">
    {#% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %#}
         {#% # if 'ROLE_SUPER_ADMIN' in app.user.roles %#}
           <!-- <a href=\"{#{path('absence_new')}}\">{{'absence.add'|trans}#}</a> -->
        {#% # endif %#}
    {#% # endif %#}            
    <div class=\"row\">
        <div class=\"col-md-12\">
\t\t\t{{ form_start(form, { 'attr' : { 'class': 'form-horizontal' } }) }}
\t\t\t<div class=\"panel panel-default\">
\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t<h3 class=\"panel-title\">
\t\t\t\t\t\t{{'absence.manage'|trans}}
\t\t\t\t\t</h3>
\t\t\t\t</div>
\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t{{ form_label(form.classe, null ,{ 'label_attr': {'class': 'col-md-3 col-xs-12 control-label'} }) }}
\t\t\t\t\t\t<div class=\"col-md-6 col-xs-12\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><span class=\"fa fa-pencil\"></span></span>
\t\t\t\t\t\t    \t{{ form_widget(form.classe ,{'id':'selectClasse', 'attr': {'class': 'form-control'} }) }}
\t\t\t\t\t\t    </div>
\t\t\t\t\t    \t{{ form_errors(form.classe) }}
\t\t\t\t\t    </div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t{{ form_label(form.annee, null ,{ 'label_attr': {'class': 'col-md-3 col-xs-12 control-label'} }) }}
\t\t\t\t\t\t<div class=\"col-md-6 col-xs-12\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><span class=\"fa fa-pencil\"></span></span>
\t\t\t\t\t\t    \t{{ form_widget(form.annee ,{'id': 'selectYear', 'attr': {'class': 'form-control'} }) }}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{{ form_errors(form.annee) }}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<button type=\"submit\" class=\"btn btn-primary pull-right\">Chercher</button>
\t\t\t{{ form_end(form) }}
\t\t</div>
\t</div>

{% if absences|length != 0 %}
\t<div class=\"col-md-12\" style=\"margin-top: 5%;\">
\t\t<div class=\"table-responsive\">
\t\t   \t<table id=\"customers2\" class=\"table datatable\">
\t\t        <thead>
\t\t            <tr>
\t\t                <th>{{'eleve.nom'|trans}}</th>
\t\t                <th>{{'eleve.prenom'|trans}}</th>
\t\t                <th>{{'global.type'|trans}}</th>
\t\t                <th>{{'absence.date'|trans}}</th>
\t\t                <th>{{'form.comment'|trans}}</th>
\t\t                <th>{{'global.action'|trans}}</th>
\t\t            </tr>
\t\t\t    </thead>
\t\t        <tbody>
\t\t          \t{% for absence in absences %}
\t\t           \t<tr>
\t\t    \t       \t<td>{{absence.eleve.nom | upper}}</td>
\t\t            \t<td>{{absence.eleve.prenom | upper}}</td>
\t\t            \t<td>{{absence.type | upper}}</td>
\t\t            \t<td>{{absence.date|date('d/m/Y')}}</td>
\t\t            \t<td>{{absence.commentaire}}</td>
\t\t            \t<td>
\t\t            \t\t<a href=\"{{path('edit_absence',{'id': absence.id, 'idClasse': absence.eleve.classe.id})}}\" class=\"btn btn-condensed btn-info\">
\t\t            \t\t\t<span class=\"fa fa-edit\"></span>
\t\t            \t\t</a>
\t\t            \t\t<a href=\"{{path('delete_absence',{'id': absence.id})}}\" class=\"btn btn-condensed btn-danger\">
\t\t            \t\t\t<span class=\"fa fa-trash\"></span>
\t\t            \t\t</a>
\t\t            \t</td>
\t\t            </tr>
\t\t            \t{% endfor %}
\t\t        </tbody>
\t\t    </table>
\t\t</div>
\t</div>

{% endif %}

</div>
{% endblock %}

{% block javascripts %}
\t
<script type=\"text/javascript\">

     \$( document ).ready( function() {

                \$('#selectYear').selectpicker({
 \t\t\t\t\tstyle: 'btn-default',
  \t\t\t\t\tsize: 4
\t\t\t\t});
\t\t\t\t \$('#selectClasse').selectpicker({
 \t\t\t\t\tstyle: 'btn-default',
  \t\t\t\t\tsize: 4
\t\t\t\t});
            });
</script>

{% endblock %}", "absence/index.html.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\app\\Resources\\views\\absence\\index.html.twig");
    }
}
