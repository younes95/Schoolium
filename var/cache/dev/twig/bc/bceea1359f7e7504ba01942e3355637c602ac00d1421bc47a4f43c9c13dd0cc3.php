<?php

/* matieresViews/listProgram.html.twig */
class __TwigTemplate_5975c67a78c44e8ee039b2151a179cff659a1627050676e79ab3a875906f79fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base2.html.twig", "matieresViews/listProgram.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5d2d28595ec833b81281efcb20c65aa4fa2f6f839882eed19d9505c1145211cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d2d28595ec833b81281efcb20c65aa4fa2f6f839882eed19d9505c1145211cc->enter($__internal_5d2d28595ec833b81281efcb20c65aa4fa2f6f839882eed19d9505c1145211cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "matieresViews/listProgram.html.twig"));

        $__internal_44077e4d50b0de19b453ba5199f14fe1c1ade29667174bead932894dd7885242 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44077e4d50b0de19b453ba5199f14fe1c1ade29667174bead932894dd7885242->enter($__internal_44077e4d50b0de19b453ba5199f14fe1c1ade29667174bead932894dd7885242_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "matieresViews/listProgram.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5d2d28595ec833b81281efcb20c65aa4fa2f6f839882eed19d9505c1145211cc->leave($__internal_5d2d28595ec833b81281efcb20c65aa4fa2f6f839882eed19d9505c1145211cc_prof);

        
        $__internal_44077e4d50b0de19b453ba5199f14fe1c1ade29667174bead932894dd7885242->leave($__internal_44077e4d50b0de19b453ba5199f14fe1c1ade29667174bead932894dd7885242_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_077654b03d6f6d5774f3367a965bdebf0a2acd07509ef885dcbdb9cb3ffeeed8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_077654b03d6f6d5774f3367a965bdebf0a2acd07509ef885dcbdb9cb3ffeeed8->enter($__internal_077654b03d6f6d5774f3367a965bdebf0a2acd07509ef885dcbdb9cb3ffeeed8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ca349fc79df86b086deaccd95fcb516799ffd8dc3d9c418f361bfbfa160f5b4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca349fc79df86b086deaccd95fcb516799ffd8dc3d9c418f361bfbfa160f5b4b->enter($__internal_ca349fc79df86b086deaccd95fcb516799ffd8dc3d9c418f361bfbfa160f5b4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("teachers"), "html", null, true);
        echo "</h1>
";
        if ($this->env->isDebug()) {
            // line 5
            \Symfony\Component\VarDumper\VarDumper::dump((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        }
        // line 6
        $context["i"] = 0;
        // line 7
        echo "<div class=\"page-content-wrap\">
    <div class=\"row\">
        <div class=\"col-md-12\">  
\t\t\t";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")));
        foreach ($context['_seq'] as $context["_key"] => $context["ensmat"]) {
            // line 11
            echo "\t\t\t\t";
            $context["formFile"] = $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "createView", array());
            // line 12
            echo "
\t\t\t    ";
            // line 13
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["formFile"]) ? $context["formFile"] : $this->getContext($context, "formFile")), 'form_start');
            echo "
\t\t\t    <div class=\"form-group\">
\t\t\t    \t<label>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ensmat"], "matiere", array()), "nom", array()), "html", null, true);
            echo "</label>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ensmat"], "classe", array()), "nom", array()), "html", null, true);
            echo "</label>
\t\t\t\t</div>

\t\t\t\t<input hidden=\"hidden\" name=\"idEnsMat";
            // line 21
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ensmat"], "id", array()), "html", null, true);
            echo "\" />
\t\t\t\t<input hidden=\"hidden\" name=\"cpt\" value=\"";
            // line 22
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "\" />
\t\t\t\t<input hidden=\"hidden\" name=\"taille\" value=\"";
            // line 23
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $context["ensmat"]), "html", null, true);
            echo "\" />
\t\t\t\t
\t\t\t\t";
            // line 25
            if ((twig_slice($this->env, $this->getAttribute($context["ensmat"], "programmeAnnuel", array()),  -4) != ".tmp")) {
                // line 26
                echo "\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((((isset($context["uploads_matiere_prog_annuel"]) ? $context["uploads_matiere_prog_annuel"] : $this->getContext($context, "uploads_matiere_prog_annuel")) . "/") . $this->getAttribute($context["ensmat"], "programmeAnnuel", array()))), "html", null, true);
                echo "\">PDF</a>
\t\t\t\t";
            }
            // line 28
            echo "\t\t\t\t";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["formFile"]) ? $context["formFile"] : $this->getContext($context, "formFile")), "programmeAnnuel", array()), 'widget');
            echo "
\t\t\t   \t<button type=\"submit\">";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("global.edit"), "html", null, true);
            echo "</button>
\t\t\t    ";
            // line 30
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["formFile"]) ? $context["formFile"] : $this->getContext($context, "formFile")), 'form_end');
            echo "
\t\t\t\t";
            // line 31
            if ((twig_length_filter($this->env, $this->getAttribute($context["ensmat"], "programmeAnnuel", array())) == 0)) {
                // line 32
                echo "\t\t\t\t\t<a href=\"\" class=\"disabled\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("global.delete"), "html", null, true);
                echo "</a>
\t\t\t\t\t";
            } else {
                // line 34
                echo "\t\t\t\t\t<a href=\"\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("global.delete"), "html", null, true);
                echo "</a>
\t\t\t\t\t";
            }
            // line 36
            echo "\t\t\t\t";
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
            // line 37
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ensmat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "\t\t</div>
\t</div>
</div>
\t<style type=\"text/css\">

\t
.disabled {
   pointer-events: none;
   cursor: default;
}
\t</style>
";
        
        $__internal_ca349fc79df86b086deaccd95fcb516799ffd8dc3d9c418f361bfbfa160f5b4b->leave($__internal_ca349fc79df86b086deaccd95fcb516799ffd8dc3d9c418f361bfbfa160f5b4b_prof);

        
        $__internal_077654b03d6f6d5774f3367a965bdebf0a2acd07509ef885dcbdb9cb3ffeeed8->leave($__internal_077654b03d6f6d5774f3367a965bdebf0a2acd07509ef885dcbdb9cb3ffeeed8_prof);

    }

    public function getTemplateName()
    {
        return "matieresViews/listProgram.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 38,  147 => 37,  144 => 36,  138 => 34,  132 => 32,  130 => 31,  126 => 30,  122 => 29,  117 => 28,  111 => 26,  109 => 25,  104 => 23,  100 => 22,  94 => 21,  88 => 18,  82 => 15,  77 => 13,  74 => 12,  71 => 11,  67 => 10,  62 => 7,  60 => 6,  57 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base2.html.twig' %}

{% block body %}
<h1>{{'list'|trans}} {{'teachers'|trans}}</h1>
{% dump(form) %}
{% set i=0 %}
<div class=\"page-content-wrap\">
    <div class=\"row\">
        <div class=\"col-md-12\">  
\t\t\t{% for ensmat in data %}
\t\t\t\t{% set formFile =  form[i].createView %}

\t\t\t    {{ form_start(formFile) }}
\t\t\t    <div class=\"form-group\">
\t\t\t    \t<label>{{ensmat.matiere.nom}}</label>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label>{{ensmat.classe.nom}}</label>
\t\t\t\t</div>

\t\t\t\t<input hidden=\"hidden\" name=\"idEnsMat{{i}}\" value=\"{{ensmat.id}}\" />
\t\t\t\t<input hidden=\"hidden\" name=\"cpt\" value=\"{{i}}\" />
\t\t\t\t<input hidden=\"hidden\" name=\"taille\" value=\"{{ensmat|length}}\" />
\t\t\t\t
\t\t\t\t{% if ensmat.programmeAnnuel|slice(-4)!=\".tmp\" %}
\t\t\t\t\t<a href=\"{{asset(uploads_matiere_prog_annuel~'/'~ensmat.programmeAnnuel)}}\">PDF</a>
\t\t\t\t{% endif %}
\t\t\t\t{{ form_widget(formFile.programmeAnnuel) }}
\t\t\t   \t<button type=\"submit\">{{'global.edit'|trans}}</button>
\t\t\t    {{ form_end(formFile) }}
\t\t\t\t{% if ensmat.programmeAnnuel|length==0 %}
\t\t\t\t\t<a href=\"\" class=\"disabled\">{{'global.delete'|trans}}</a>
\t\t\t\t\t{% else %}
\t\t\t\t\t<a href=\"\">{{'global.delete'|trans}}</a>
\t\t\t\t\t{% endif %}
\t\t\t\t{% set i=i+1 %}
\t\t\t{% endfor %}
\t\t</div>
\t</div>
</div>
\t<style type=\"text/css\">

\t
.disabled {
   pointer-events: none;
   cursor: default;
}
\t</style>
{% endblock %}", "matieresViews/listProgram.html.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\app\\Resources\\views\\matieresViews\\listProgram.html.twig");
    }
}
