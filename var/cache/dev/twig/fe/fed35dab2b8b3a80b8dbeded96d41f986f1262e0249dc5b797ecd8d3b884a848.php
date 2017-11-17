<?php

/* :matieresViews:listProgram.html.twig */
class __TwigTemplate_c822e91e26dbc55f535d843d60104d3397a13ed4cfabca7bcedce3452c933b5a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":matieresViews:listProgram.html.twig", 1);
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
        $__internal_02f622e666060f035e0882e7b1047ea69e8f450d10f415ea46bcc3409f3a7273 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02f622e666060f035e0882e7b1047ea69e8f450d10f415ea46bcc3409f3a7273->enter($__internal_02f622e666060f035e0882e7b1047ea69e8f450d10f415ea46bcc3409f3a7273_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":matieresViews:listProgram.html.twig"));

        $__internal_b85a1f0538fadaf87f763f6cace8812a2976a014a60a1fd589ec901a9a9356d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b85a1f0538fadaf87f763f6cace8812a2976a014a60a1fd589ec901a9a9356d9->enter($__internal_b85a1f0538fadaf87f763f6cace8812a2976a014a60a1fd589ec901a9a9356d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":matieresViews:listProgram.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_02f622e666060f035e0882e7b1047ea69e8f450d10f415ea46bcc3409f3a7273->leave($__internal_02f622e666060f035e0882e7b1047ea69e8f450d10f415ea46bcc3409f3a7273_prof);

        
        $__internal_b85a1f0538fadaf87f763f6cace8812a2976a014a60a1fd589ec901a9a9356d9->leave($__internal_b85a1f0538fadaf87f763f6cace8812a2976a014a60a1fd589ec901a9a9356d9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_92874026e9b272f1bc3fa22c310e6eb8c1b5d169d1d650d5c3d0717c6b89e1c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92874026e9b272f1bc3fa22c310e6eb8c1b5d169d1d650d5c3d0717c6b89e1c0->enter($__internal_92874026e9b272f1bc3fa22c310e6eb8c1b5d169d1d650d5c3d0717c6b89e1c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_318bed8336e0eb5cf7e0bb12a70c170725db43013751dd4ba499f54cfbd5a3e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_318bed8336e0eb5cf7e0bb12a70c170725db43013751dd4ba499f54cfbd5a3e6->enter($__internal_318bed8336e0eb5cf7e0bb12a70c170725db43013751dd4ba499f54cfbd5a3e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")));
        foreach ($context['_seq'] as $context["_key"] => $context["ensmat"]) {
            // line 8
            echo "\t\t";
            $context["formFile"] = $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "createView", array());
            // line 9
            echo "
\t    ";
            // line 10
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["formFile"]) ? $context["formFile"] : $this->getContext($context, "formFile")), 'form_start');
            echo "
\t    <label>";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ensmat"], "matiere", array()), "nom", array()), "html", null, true);
            echo "</label>
\t\t<label>";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ensmat"], "classe", array()), "nom", array()), "html", null, true);
            echo "</label>
\t\t<input hidden=\"hidden\" name=\"idEnsMat";
            // line 13
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ensmat"], "id", array()), "html", null, true);
            echo "\" />
\t\t<input hidden=\"hidden\" name=\"cpt\" value=\"";
            // line 14
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "\" />
\t\t<input hidden=\"hidden\" name=\"taille\" value=\"";
            // line 15
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $context["ensmat"]), "html", null, true);
            echo "\" />
\t\t";
            // line 16
            if ((twig_slice($this->env, $this->getAttribute($context["ensmat"], "programmeAnnuel", array()),  -4) != ".tmp")) {
                // line 17
                echo "\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((((isset($context["uploads_matiere_prog_annuel"]) ? $context["uploads_matiere_prog_annuel"] : $this->getContext($context, "uploads_matiere_prog_annuel")) . "/") . $this->getAttribute($context["ensmat"], "programmeAnnuel", array()))), "html", null, true);
                echo "\">PDF</a>
\t\t";
            }
            // line 19
            echo "\t\t";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["formFile"]) ? $context["formFile"] : $this->getContext($context, "formFile")), "programmeAnnuel", array()), 'widget');
            echo "
\t   \t<button type=\"submit\">";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("global.edit"), "html", null, true);
            echo "</button>
\t    ";
            // line 21
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["formFile"]) ? $context["formFile"] : $this->getContext($context, "formFile")), 'form_end');
            echo "
\t\t";
            // line 22
            if ((twig_length_filter($this->env, $this->getAttribute($context["ensmat"], "programmeAnnuel", array())) == 0)) {
                // line 23
                echo "\t\t\t<a href=\"\" class=\"disabled\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("global.delete"), "html", null, true);
                echo "</a>
\t\t\t";
            } else {
                // line 25
                echo "\t\t\t<a href=\"\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("global.delete"), "html", null, true);
                echo "</a>
\t\t\t";
            }
            // line 27
            echo "\t\t";
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
            // line 28
            echo "\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ensmat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "\t<style type=\"text/css\">

\t
.disabled {
   pointer-events: none;
   cursor: default;
}
\t</style>
";
        
        $__internal_318bed8336e0eb5cf7e0bb12a70c170725db43013751dd4ba499f54cfbd5a3e6->leave($__internal_318bed8336e0eb5cf7e0bb12a70c170725db43013751dd4ba499f54cfbd5a3e6_prof);

        
        $__internal_92874026e9b272f1bc3fa22c310e6eb8c1b5d169d1d650d5c3d0717c6b89e1c0->leave($__internal_92874026e9b272f1bc3fa22c310e6eb8c1b5d169d1d650d5c3d0717c6b89e1c0_prof);

    }

    public function getTemplateName()
    {
        return ":matieresViews:listProgram.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 29,  137 => 28,  134 => 27,  128 => 25,  122 => 23,  120 => 22,  116 => 21,  112 => 20,  107 => 19,  101 => 17,  99 => 16,  95 => 15,  91 => 14,  85 => 13,  81 => 12,  77 => 11,  73 => 10,  70 => 9,  67 => 8,  62 => 7,  60 => 6,  57 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
<h1>{{'list'|trans}} {{'teachers'|trans}}</h1>
{% dump(form) %}
{% set i=0 %}
\t{% for ensmat in data %}
\t\t{% set formFile =  form[i].createView %}

\t    {{ form_start(formFile) }}
\t    <label>{{ensmat.matiere.nom}}</label>
\t\t<label>{{ensmat.classe.nom}}</label>
\t\t<input hidden=\"hidden\" name=\"idEnsMat{{i}}\" value=\"{{ensmat.id}}\" />
\t\t<input hidden=\"hidden\" name=\"cpt\" value=\"{{i}}\" />
\t\t<input hidden=\"hidden\" name=\"taille\" value=\"{{ensmat|length}}\" />
\t\t{% if ensmat.programmeAnnuel|slice(-4)!=\".tmp\" %}
\t\t\t<a href=\"{{asset(uploads_matiere_prog_annuel~'/'~ensmat.programmeAnnuel)}}\">PDF</a>
\t\t{% endif %}
\t\t{{ form_widget(formFile.programmeAnnuel) }}
\t   \t<button type=\"submit\">{{'global.edit'|trans}}</button>
\t    {{ form_end(formFile) }}
\t\t{% if ensmat.programmeAnnuel|length==0 %}
\t\t\t<a href=\"\" class=\"disabled\">{{'global.delete'|trans}}</a>
\t\t\t{% else %}
\t\t\t<a href=\"\">{{'global.delete'|trans}}</a>
\t\t\t{% endif %}
\t\t{% set i=i+1 %}
\t{% endfor %}
\t<style type=\"text/css\">

\t
.disabled {
   pointer-events: none;
   cursor: default;
}
\t</style>
{% endblock %}", ":matieresViews:listProgram.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/views/matieresViews/listProgram.html.twig");
    }
}
