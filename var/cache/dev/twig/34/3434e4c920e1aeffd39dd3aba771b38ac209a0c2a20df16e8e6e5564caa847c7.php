<?php

/* :matieresViews:eleves.html.twig */
class __TwigTemplate_c3c6fb1b657192e3bf53ef7c2e50db49231e38b817fe0be849d7eb6281a29f17 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseList.html.twig", ":matieresViews:eleves.html.twig", 1);
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
        $__internal_6d579358113b09d75c9225d51fc0654a54323e689f98784760a2d5d3c6534977 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d579358113b09d75c9225d51fc0654a54323e689f98784760a2d5d3c6534977->enter($__internal_6d579358113b09d75c9225d51fc0654a54323e689f98784760a2d5d3c6534977_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":matieresViews:eleves.html.twig"));

        $__internal_a9ff662c46843b71ee4fdd3178a51b581acc712ce1c5be4ccc76cd1b3fdc5954 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9ff662c46843b71ee4fdd3178a51b581acc712ce1c5be4ccc76cd1b3fdc5954->enter($__internal_a9ff662c46843b71ee4fdd3178a51b581acc712ce1c5be4ccc76cd1b3fdc5954_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":matieresViews:eleves.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d579358113b09d75c9225d51fc0654a54323e689f98784760a2d5d3c6534977->leave($__internal_6d579358113b09d75c9225d51fc0654a54323e689f98784760a2d5d3c6534977_prof);

        
        $__internal_a9ff662c46843b71ee4fdd3178a51b581acc712ce1c5be4ccc76cd1b3fdc5954->leave($__internal_a9ff662c46843b71ee4fdd3178a51b581acc712ce1c5be4ccc76cd1b3fdc5954_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_536229608c09ac8982359ac62069860270c649d17a2e1467f36e9329173982e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_536229608c09ac8982359ac62069860270c649d17a2e1467f36e9329173982e6->enter($__internal_536229608c09ac8982359ac62069860270c649d17a2e1467f36e9329173982e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_757f2548b0a7f0ce5ca9944864985c6e53bf63eb497d65c75e909425be75b39b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_757f2548b0a7f0ce5ca9944864985c6e53bf63eb497d65c75e909425be75b39b->enter($__internal_757f2548b0a7f0ce5ca9944864985c6e53bf63eb497d65c75e909425be75b39b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\t";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("students"), "html", null, true);
        echo "
";
        
        $__internal_757f2548b0a7f0ce5ca9944864985c6e53bf63eb497d65c75e909425be75b39b->leave($__internal_757f2548b0a7f0ce5ca9944864985c6e53bf63eb497d65c75e909425be75b39b_prof);

        
        $__internal_536229608c09ac8982359ac62069860270c649d17a2e1467f36e9329173982e6->leave($__internal_536229608c09ac8982359ac62069860270c649d17a2e1467f36e9329173982e6_prof);

    }

    // line 8
    public function block_bodyList($context, array $blocks = array())
    {
        $__internal_6d4db36f7b921ad3454a9505413add4f255ed810a31f68e5d90cb72732dc3551 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d4db36f7b921ad3454a9505413add4f255ed810a31f68e5d90cb72732dc3551->enter($__internal_6d4db36f7b921ad3454a9505413add4f255ed810a31f68e5d90cb72732dc3551_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        $__internal_93028fef706eaf1c75b84b8c13860ed2a8ed97e9b9d58d66f1bcfdd39db84fb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93028fef706eaf1c75b84b8c13860ed2a8ed97e9b9d58d66f1bcfdd39db84fb6->enter($__internal_93028fef706eaf1c75b84b8c13860ed2a8ed97e9b9d58d66f1bcfdd39db84fb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        // line 9
        echo "\t\t\t
\t<div class=\"page-tabs\">
\t\t<a href=\"#listEleve\" class=\"active\">Liste des eleves</a>
\t\t<a href=\"#listCours\"> Liste des cours</a>
\t</div>

\t    <div id=\"listEleve\" class=\"table-responsive page-content-wrap page-tabs-item active\">
\t    \t<table id=\"customers2\" class=\"table datatable\">
\t            <thead>
\t                <tr>
\t                    <th>";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("matiere"), "html", null, true);
        echo "</th>
\t                    <th>";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("student.lastname"), "html", null, true);
        echo "</th>
\t                    <th>";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("student.firstname"), "html", null, true);
        echo "</th>
\t                   \t<th>";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("evaluation.title"), "html", null, true);
        echo " </th>
\t                    <th style=\"width:25%;\">";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("note"), "html", null, true);
        echo "</th>
\t                    <th>";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("global.action"), "html", null, true);
        echo "</th>
\t                </tr>
\t            </thead>
\t            <tbody>
\t\t\t\t\t";
        // line 28
        $context["i"] = 0;
        // line 29
        echo "\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["datas"]) ? $context["datas"] : $this->getContext($context, "datas")), "data", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 30
            echo "\t\t\t\t\t\t<form name=\"addNote\" id=\"addNote\" action=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addNote");
            echo "\" method=\"post\">
\t\t\t\t\t\t\t";
            // line 31
            if (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) == 0)) {
                // line 32
                echo "\t\t\t\t\t\t\t<a style=\"margin-right:5%;\" class=\"btn btn-info\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addMatiereEvaluation", array("idClasse" => $this->getAttribute($this->getAttribute($this->getAttribute($context["data"], "eleve", array()), "classe", array()), "id", array()), "idMatiere" => $this->getAttribute($this->getAttribute((isset($context["datas"]) ? $context["datas"] : $this->getContext($context, "datas")), "matiere", array()), "id", array()))), "html", null, true);
                echo "\"><i class=\"fa fa-plus\"></i>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("evaluation.add"), "html", null, true);
                echo "</a>
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"idClasse\" value=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["data"], "eleve", array()), "classe", array()), "id", array()), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t";
            }
            // line 35
            echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["datas"]) ? $context["datas"] : $this->getContext($context, "datas")), "matiere", array()), "nom", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["data"], "eleve", array()), "nom", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["data"], "eleve", array()), "prenom", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
            // line 40
            $context["j"] = 0;
            // line 41
            echo "\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["datas"]) ? $context["datas"] : $this->getContext($context, "datas")), "evaluations", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["evaluation"]) {
                // line 42
                echo "\t\t\t\t\t\t\t\t\t";
                $context["bool"] = false;
                // line 43
                echo "
\t\t\t\t\t\t\t\t\t";
                // line 44
                if (((isset($context["j"]) ? $context["j"] : $this->getContext($context, "j")) != 0)) {
                    // line 45
                    echo "\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t";
                }
                // line 50
                echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
                // line 51
                if ( !(null === $this->getAttribute($context["data"], "note", array()))) {
                    // line 52
                    echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t";
                    // line 53
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["data"], "note", array()));
                    $context['loop'] = array(
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    );
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["_key"] => $context["notes"]) {
                        // line 54
                        echo "\t\t\t\t\t\t\t\t\t\t\t";
                        if ((((isset($context["bool"]) ? $context["bool"] : $this->getContext($context, "bool")) == false) && ($this->getAttribute($context["notes"], "evaluation_id", array()) == $this->getAttribute($context["evaluation"], "id", array())))) {
                            // line 55
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 57
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["evaluation"], "nom", array()), "html", null, true);
                            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t<input hidden=\"hidden\" type=\"text\" name=\"evaluation";
                            // line 58
                            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                            echo "\" value=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["evaluation"], "nom", array()), "html", null, true);
                            echo "\" disabled>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"numberInput form-control\" name=\"eleve";
                            // line 61
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["data"], "eleve", array()), "id", array()), "html", null, true);
                            echo "id";
                            echo twig_escape_filter($this->env, (isset($context["j"]) ? $context["j"] : $this->getContext($context, "j")), "html", null, true);
                            echo "note\" value=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["notes"], "note", array()), "html", null, true);
                            echo "\">
\t\t                                        </td>
\t\t                                        <td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"eleve";
                            // line 64
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["data"], "eleve", array()), "id", array()), "html", null, true);
                            echo "id";
                            echo twig_escape_filter($this->env, (isset($context["j"]) ? $context["j"] : $this->getContext($context, "j")), "html", null, true);
                            echo "Evaluation\" value=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["evaluation"], "id", array()), "html", null, true);
                            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"eleve";
                            // line 65
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["data"], "eleve", array()), "id", array()), "html", null, true);
                            echo "id";
                            echo twig_escape_filter($this->env, (isset($context["j"]) ? $context["j"] : $this->getContext($context, "j")), "html", null, true);
                            echo "MatiereEleve\" value=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["notes"], "id", array()), "html", null, true);
                            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-danger btn-condensed\" href=\"";
                            // line 66
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delete_note", array("id" => $this->getAttribute($context["notes"], "id", array()))), "html", null, true);
                            echo "\"> <i class=\"fa fa-trash\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 67
                            $context["bool"] = true;
                            // line 68
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            $context["j"] = ((isset($context["j"]) ? $context["j"] : $this->getContext($context, "j")) + 1);
                            // line 69
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 71
                        echo "\t\t\t\t\t\t\t\t\t\t\t";
                        if (($this->getAttribute($context["loop"], "last", array()) && ((isset($context["bool"]) ? $context["bool"] : $this->getContext($context, "bool")) == false))) {
                            // line 72
                            echo "\t\t\t\t\t\t\t\t\t\t\t";
                            // line 73
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 74
                            echo twig_escape_filter($this->env, $this->getAttribute($context["evaluation"], "nom", array()), "html", null, true);
                            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t<input hidden=\"hidden\" type=\"text\" name=\"evaluation";
                            // line 75
                            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                            echo "\" value=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["evaluation"], "nom", array()), "html", null, true);
                            echo "\" disabled>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"numberInput  form-control\" name=\"eleve";
                            // line 78
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["data"], "eleve", array()), "id", array()), "html", null, true);
                            echo "id";
                            echo twig_escape_filter($this->env, (isset($context["j"]) ? $context["j"] : $this->getContext($context, "j")), "html", null, true);
                            echo "note\" value=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"eleve";
                            // line 81
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["data"], "eleve", array()), "id", array()), "html", null, true);
                            echo "id";
                            echo twig_escape_filter($this->env, (isset($context["j"]) ? $context["j"] : $this->getContext($context, "j")), "html", null, true);
                            echo "Evaluation\" value=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["evaluation"], "id", array()), "html", null, true);
                            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"eleve";
                            // line 82
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["data"], "eleve", array()), "id", array()), "html", null, true);
                            echo "id";
                            echo twig_escape_filter($this->env, (isset($context["j"]) ? $context["j"] : $this->getContext($context, "j")), "html", null, true);
                            echo "MatiereEleve\" value=\"-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 83
                            $context["j"] = ((isset($context["j"]) ? $context["j"] : $this->getContext($context, "j")) + 1);
                            // line 84
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 86
                        echo "\t\t\t\t\t\t\t\t\t\t";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['length'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notes'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 87
                    echo "
\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 88
                    echo "\t

\t\t\t\t\t\t\t\t\t\t";
                    // line 90
                    echo "\t
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 92
                    echo twig_escape_filter($this->env, $this->getAttribute($context["evaluation"], "nom", array()), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t\t\t\t<input hidden=\"hidden\" type=\"text\" name=\"evaluation";
                    // line 93
                    echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                    echo "\" value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["evaluation"], "nom", array()), "html", null, true);
                    echo "\" disabled>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<input class=\"numberInput form-control\" name=\"eleve";
                    // line 96
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["data"], "eleve", array()), "id", array()), "html", null, true);
                    echo "id";
                    echo twig_escape_filter($this->env, (isset($context["j"]) ? $context["j"] : $this->getContext($context, "j")), "html", null, true);
                    echo "note\" value=\"\">
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"eleve";
                    // line 99
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["data"], "eleve", array()), "id", array()), "html", null, true);
                    echo "id";
                    echo twig_escape_filter($this->env, (isset($context["j"]) ? $context["j"] : $this->getContext($context, "j")), "html", null, true);
                    echo "Evaluation\" value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["evaluation"], "id", array()), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"eleve";
                    // line 100
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["data"], "eleve", array()), "id", array()), "html", null, true);
                    echo "id";
                    echo twig_escape_filter($this->env, (isset($context["j"]) ? $context["j"] : $this->getContext($context, "j")), "html", null, true);
                    echo "MatiereEleve\" value=\"-1\">
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t";
                    // line 102
                    $context["j"] = ((isset($context["j"]) ? $context["j"] : $this->getContext($context, "j")) + 1);
                    // line 103
                    echo "\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
                    // line 104
                    if (((isset($context["j"]) ? $context["j"] : $this->getContext($context, "j")) != 0)) {
                        // line 105
                        echo "\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 107
                    echo "\t\t\t\t\t\t\t\t\t";
                }
                // line 108
                echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evaluation'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 110
            echo "\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"idmatiere";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["datas"]) ? $context["datas"] : $this->getContext($context, "datas")), "matiere", array()), "id", array()), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"ideleve";
            // line 111
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["data"], "eleve", array()), "id", array()), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"lengthEvaluation\" value=\"";
            // line 112
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["datas"]) ? $context["datas"] : $this->getContext($context, "datas")), "evaluations", array())), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t";
            // line 113
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
            // line 114
            echo "\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 116
        echo "\t\t\t\t\t\t<input type=\"hidden\" name=\"cpt\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
        echo "\">
\t\t\t\t\t\t<input type=\"submit\" class=\"btn btn-primary pull-right\" value=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("global.update"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t</form>
\t\t\t\t</tbody>
\t\t\t</table>
\t\t</div>

\t<div id=\"listCours\" class=\"table-responsive page-content-wrap page-tabs-item\">
\t\t<table id=\"customers3\" class=\"table datatable\">
            <thead>
                <tr>
                \t<th class=\"text-center\">";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("cours.name"), "html", null, true);
        echo "</th>
                    <th class=\"text-center\">";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("cours.support.title"), "html", null, true);
        echo "</th>
                    <th class=\"text-center\">";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("devoir.maison.title"), "html", null, true);
        echo "</th>
                    <th class=\"text-center\">";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("cours.annexe.title"), "html", null, true);
        echo "</th>
                </tr>
            </thead>
            ";
        if ($this->env->isDebug()) {
            // line 134
            \Symfony\Component\VarDumper\VarDumper::dump((isset($context["datas"]) ? $context["datas"] : $this->getContext($context, "datas")));
        }
        // line 135
        echo "            <tbody>
\t\t\t\t";
        // line 136
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["datas"]) ? $context["datas"] : $this->getContext($context, "datas")), "cours", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["cours"]) {
            // line 137
            echo "\t\t\t\t\t<a class=\"btn btn-info\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("new_cours", array("idClasse" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["datas"]) ? $context["datas"] : $this->getContext($context, "datas")), "data", array()), 0, array(), "array"), "eleve", array()), "classe", array()), "id", array()), "idMatiere" => $this->getAttribute($this->getAttribute((isset($context["datas"]) ? $context["datas"] : $this->getContext($context, "datas")), "matiere", array()), "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-plus\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("cours.add"), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t
\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t";
            // line 140
            echo twig_escape_filter($this->env, $this->getAttribute($context["cours"], "titre", array()), "html", null, true);
            echo " 
\t\t\t\t\t</td>
\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t<a class=\"btn btn-info\" href=\"";
            // line 143
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((((isset($context["uploads_cours_support"]) ? $context["uploads_cours_support"] : $this->getContext($context, "uploads_cours_support")) . "/") . $this->getAttribute($context["cours"], "support", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t<i class=\"fa fa-file-text\"></i>
\t\t\t\t\t\t</a> 
\t\t\t\t\t</td>
\t\t\t\t\t<td class=\"text-center\">\t
\t\t\t\t\t\t<a class=\"btn btn-info\" href=\"";
            // line 148
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((((isset($context["uploads_cours_devoir"]) ? $context["uploads_cours_devoir"] : $this->getContext($context, "uploads_cours_devoir")) . "/") . $this->getAttribute($context["cours"], "devoir", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t<i class=\"fa fa-file-text\"></i>
\t\t\t\t\t\t</a> 
\t\t\t\t\t</td>
\t\t\t\t\t<td class=\"text-center\">\t
\t\t\t\t\t\t<a class=\"btn btn-info\" href=\"";
            // line 153
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((((isset($context["uploads_cours_annexe"]) ? $context["uploads_cours_annexe"] : $this->getContext($context, "uploads_cours_annexe")) . "/") . $this->getAttribute($context["cours"], "annexe", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t<i class=\"fa fa-file-text\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</td>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cours'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 158
        echo "\t\t\t</tbody>
\t\t</table>
\t</div>

\t<style type=\"text/css\">
\t.displayBlock{
\t\tdisplay: block;
\t}
\t</style>
";
        
        $__internal_93028fef706eaf1c75b84b8c13860ed2a8ed97e9b9d58d66f1bcfdd39db84fb6->leave($__internal_93028fef706eaf1c75b84b8c13860ed2a8ed97e9b9d58d66f1bcfdd39db84fb6_prof);

        
        $__internal_6d4db36f7b921ad3454a9505413add4f255ed810a31f68e5d90cb72732dc3551->leave($__internal_6d4db36f7b921ad3454a9505413add4f255ed810a31f68e5d90cb72732dc3551_prof);

    }

    // line 169
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_bfd99ee1e4bf4eb82d1d31ebcf03b7fc8f17107137666393dfa2c9fdb470b0b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfd99ee1e4bf4eb82d1d31ebcf03b7fc8f17107137666393dfa2c9fdb470b0b6->enter($__internal_bfd99ee1e4bf4eb82d1d31ebcf03b7fc8f17107137666393dfa2c9fdb470b0b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_2019976982f8b89aaf3f0aa3434608c05e08d203d076c6bf5136c6828cb7c6b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2019976982f8b89aaf3f0aa3434608c05e08d203d076c6bf5136c6828cb7c6b0->enter($__internal_2019976982f8b89aaf3f0aa3434608c05e08d203d076c6bf5136c6828cb7c6b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 170
        echo "\t<script type=\"text/javascript\">

     \$( document ).ready( function() {
     \t\t\t\$('.spinner_decimal').spinner();
     \t\t    \$(\".numberInput\").spinner();
            });
</script>

";
        
        $__internal_2019976982f8b89aaf3f0aa3434608c05e08d203d076c6bf5136c6828cb7c6b0->leave($__internal_2019976982f8b89aaf3f0aa3434608c05e08d203d076c6bf5136c6828cb7c6b0_prof);

        
        $__internal_bfd99ee1e4bf4eb82d1d31ebcf03b7fc8f17107137666393dfa2c9fdb470b0b6->leave($__internal_bfd99ee1e4bf4eb82d1d31ebcf03b7fc8f17107137666393dfa2c9fdb470b0b6_prof);

    }

    public function getTemplateName()
    {
        return ":matieresViews:eleves.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  535 => 170,  526 => 169,  507 => 158,  496 => 153,  488 => 148,  480 => 143,  474 => 140,  465 => 137,  461 => 136,  458 => 135,  455 => 134,  448 => 131,  444 => 130,  440 => 129,  436 => 128,  422 => 117,  417 => 116,  410 => 114,  408 => 113,  404 => 112,  398 => 111,  391 => 110,  384 => 108,  381 => 107,  377 => 105,  375 => 104,  372 => 103,  370 => 102,  363 => 100,  355 => 99,  347 => 96,  339 => 93,  335 => 92,  331 => 90,  327 => 88,  323 => 87,  309 => 86,  305 => 84,  303 => 83,  297 => 82,  289 => 81,  281 => 78,  273 => 75,  269 => 74,  266 => 73,  264 => 72,  261 => 71,  257 => 69,  254 => 68,  252 => 67,  248 => 66,  240 => 65,  232 => 64,  222 => 61,  214 => 58,  209 => 57,  206 => 55,  203 => 54,  186 => 53,  183 => 52,  181 => 51,  178 => 50,  171 => 45,  169 => 44,  166 => 43,  163 => 42,  158 => 41,  156 => 40,  151 => 38,  147 => 37,  143 => 36,  140 => 35,  135 => 33,  128 => 32,  126 => 31,  121 => 30,  116 => 29,  114 => 28,  107 => 24,  103 => 23,  99 => 22,  95 => 21,  91 => 20,  87 => 19,  75 => 9,  66 => 8,  51 => 4,  42 => 3,  11 => 1,);
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
\t{{'list'|trans}} {{'students'|trans}}
{% endblock %}


{% block bodyList %}
\t\t\t
\t<div class=\"page-tabs\">
\t\t<a href=\"#listEleve\" class=\"active\">Liste des eleves</a>
\t\t<a href=\"#listCours\"> Liste des cours</a>
\t</div>

\t    <div id=\"listEleve\" class=\"table-responsive page-content-wrap page-tabs-item active\">
\t    \t<table id=\"customers2\" class=\"table datatable\">
\t            <thead>
\t                <tr>
\t                    <th>{{'matiere'|trans}}</th>
\t                    <th>{{'student.lastname'|trans}}</th>
\t                    <th>{{'student.firstname'|trans}}</th>
\t                   \t<th>{{'evaluation.title'|trans}} </th>
\t                    <th style=\"width:25%;\">{{'note'|trans}}</th>
\t                    <th>{{'global.action'|trans}}</th>
\t                </tr>
\t            </thead>
\t            <tbody>
\t\t\t\t\t{% set i=0 %}
\t\t\t\t\t\t{% for data in datas.data %}
\t\t\t\t\t\t<form name=\"addNote\" id=\"addNote\" action=\"{{path('addNote')}}\" method=\"post\">
\t\t\t\t\t\t\t{% if i==0 %}
\t\t\t\t\t\t\t<a style=\"margin-right:5%;\" class=\"btn btn-info\" href=\"{{ path('addMatiereEvaluation', { 'idClasse': data.eleve.classe.id, 'idMatiere': datas.matiere.id}) }}\"><i class=\"fa fa-plus\"></i>{{'evaluation.add'|trans}}</a>
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"idClasse\" value=\"{{data.eleve.classe.id}}\">
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>{{datas.matiere.nom}}</td>
\t\t\t\t\t\t\t<td>{{data.eleve.nom}}</td>
\t\t\t\t\t\t\t<td>{{data.eleve.prenom}}</td>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t{% set j=0 %}
\t\t\t\t\t\t\t\t{% for evaluation in datas.evaluations %}
\t\t\t\t\t\t\t\t\t{% set bool=false %}

\t\t\t\t\t\t\t\t\t{% if j!=0 %}
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t{% if(data.note is not null) %}
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t{% for notes in data.note %}
\t\t\t\t\t\t\t\t\t\t\t{% if bool==false and notes.evaluation_id==evaluation.id %}
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t{# Cas où l'evaluation a été noté #}
\t\t\t\t\t\t\t\t\t\t\t\t\t{{evaluation.nom}}
\t\t\t\t\t\t\t\t\t\t\t\t\t<input hidden=\"hidden\" type=\"text\" name=\"evaluation{{i}}\" value=\"{{evaluation.nom}}\" disabled>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"numberInput form-control\" name=\"eleve{{data.eleve.id}}id{{j}}note\" value=\"{{notes.note}}\">
\t\t                                        </td>
\t\t                                        <td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"eleve{{data.eleve.id}}id{{j}}Evaluation\" value=\"{{evaluation.id}}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"eleve{{data.eleve.id}}id{{j}}MatiereEleve\" value=\"{{notes.id}}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-danger btn-condensed\" href=\"{{path('delete_note', { 'id': notes.id })}}\"> <i class=\"fa fa-trash\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t{% set bool=true %}
\t\t\t\t\t\t\t\t\t\t\t\t\t{% set j=j+1 %}
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t{% if loop.last and bool==false %}
\t\t\t\t\t\t\t\t\t\t\t{# Cas où l'evaluation n'a pas été noté #}
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t{{evaluation.nom}}
\t\t\t\t\t\t\t\t\t\t\t\t\t<input hidden=\"hidden\" type=\"text\" name=\"evaluation{{i}}\" value=\"{{evaluation.nom}}\" disabled>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"numberInput  form-control\" name=\"eleve{{data.eleve.id}}id{{j}}note\" value=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"eleve{{data.eleve.id}}id{{j}}Evaluation\" value=\"{{evaluation.id}}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"eleve{{data.eleve.id}}id{{j}}MatiereEleve\" value=\"-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t{% set j=j+1 %}
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t{% endfor %}

\t\t\t\t\t\t\t\t\t{% else %}\t

\t\t\t\t\t\t\t\t\t\t{# Cas où l'eleve n'a pas été noté #}\t
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t{{evaluation.nom}}
\t\t\t\t\t\t\t\t\t\t\t<input hidden=\"hidden\" type=\"text\" name=\"evaluation{{i}}\" value=\"{{evaluation.nom}}\" disabled>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<input class=\"numberInput form-control\" name=\"eleve{{data.eleve.id}}id{{j}}note\" value=\"\">
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"eleve{{data.eleve.id}}id{{j}}Evaluation\" value=\"{{evaluation.id}}\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"eleve{{data.eleve.id}}id{{j}}MatiereEleve\" value=\"-1\">
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t{% set j=j+1 %}
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t{% if j!=0 %}
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"idmatiere{{i}}\" value=\"{{datas.matiere.id}}\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"ideleve{{i}}\" value=\"{{data.eleve.id}}\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"lengthEvaluation\" value=\"{{datas.evaluations|length}}\">
\t\t\t\t\t\t\t{% set i=i+1 %}
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t<input type=\"hidden\" name=\"cpt\" value=\"{{i}}\">
\t\t\t\t\t\t<input type=\"submit\" class=\"btn btn-primary pull-right\" value=\"{{'global.update'|trans}}\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t</form>
\t\t\t\t</tbody>
\t\t\t</table>
\t\t</div>

\t<div id=\"listCours\" class=\"table-responsive page-content-wrap page-tabs-item\">
\t\t<table id=\"customers3\" class=\"table datatable\">
            <thead>
                <tr>
                \t<th class=\"text-center\">{{'cours.name'|trans}}</th>
                    <th class=\"text-center\">{{'cours.support.title'|trans}}</th>
                    <th class=\"text-center\">{{'devoir.maison.title'|trans}}</th>
                    <th class=\"text-center\">{{'cours.annexe.title'|trans}}</th>
                </tr>
            </thead>
            {% dump(datas) %}
            <tbody>
\t\t\t\t{% for cours in datas.cours %}
\t\t\t\t\t<a class=\"btn btn-info\" href=\"{{ path('new_cours', { 'idClasse': datas.data[0].eleve.classe.id, 'idMatiere': datas.matiere.id}) }}\"><i class=\"fa fa-plus\"></i>{{'cours.add'|trans}}</a>
\t\t\t\t\t\t\t
\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t{{cours.titre}} 
\t\t\t\t\t</td>
\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t<a class=\"btn btn-info\" href=\"{{asset(uploads_cours_support~'/'~cours.support)}}\">
\t\t\t\t\t\t\t<i class=\"fa fa-file-text\"></i>
\t\t\t\t\t\t</a> 
\t\t\t\t\t</td>
\t\t\t\t\t<td class=\"text-center\">\t
\t\t\t\t\t\t<a class=\"btn btn-info\" href=\"{{asset(uploads_cours_devoir~'/'~cours.devoir)}}\">
\t\t\t\t\t\t\t<i class=\"fa fa-file-text\"></i>
\t\t\t\t\t\t</a> 
\t\t\t\t\t</td>
\t\t\t\t\t<td class=\"text-center\">\t
\t\t\t\t\t\t<a class=\"btn btn-info\" href=\"{{asset(uploads_cours_annexe~'/'~cours.annexe)}}\">
\t\t\t\t\t\t\t<i class=\"fa fa-file-text\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</td>
\t\t\t\t{% endfor %}
\t\t\t</tbody>
\t\t</table>
\t</div>

\t<style type=\"text/css\">
\t.displayBlock{
\t\tdisplay: block;
\t}
\t</style>
{% endblock %}

{% block javascripts %}
\t<script type=\"text/javascript\">

     \$( document ).ready( function() {
     \t\t\t\$('.spinner_decimal').spinner();
     \t\t    \$(\".numberInput\").spinner();
            });
</script>

{% endblock %}", ":matieresViews:eleves.html.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\app/Resources\\views/matieresViews/eleves.html.twig");
    }
}
