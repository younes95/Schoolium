<?php

/* matieresViews/eleves.html.twig */
class __TwigTemplate_2b0fc9f38f97aea57f8d8e8ec38a40033c62886a788ac1da4c2af9228d33759a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseList.html.twig", "matieresViews/eleves.html.twig", 1);
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
        $__internal_5c00e9adb44b06f28f366d868cbe8dc898d0001cd04f8903954c9493224cb87b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c00e9adb44b06f28f366d868cbe8dc898d0001cd04f8903954c9493224cb87b->enter($__internal_5c00e9adb44b06f28f366d868cbe8dc898d0001cd04f8903954c9493224cb87b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "matieresViews/eleves.html.twig"));

        $__internal_d15bf202b3354333573404c1c663b13668fe3ffa6bc4a9b2d97c3c42032b5d66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d15bf202b3354333573404c1c663b13668fe3ffa6bc4a9b2d97c3c42032b5d66->enter($__internal_d15bf202b3354333573404c1c663b13668fe3ffa6bc4a9b2d97c3c42032b5d66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "matieresViews/eleves.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c00e9adb44b06f28f366d868cbe8dc898d0001cd04f8903954c9493224cb87b->leave($__internal_5c00e9adb44b06f28f366d868cbe8dc898d0001cd04f8903954c9493224cb87b_prof);

        
        $__internal_d15bf202b3354333573404c1c663b13668fe3ffa6bc4a9b2d97c3c42032b5d66->leave($__internal_d15bf202b3354333573404c1c663b13668fe3ffa6bc4a9b2d97c3c42032b5d66_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6789286adad14c6f39220562df644d24ac0b74953d96761fe85ef0ef17429bed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6789286adad14c6f39220562df644d24ac0b74953d96761fe85ef0ef17429bed->enter($__internal_6789286adad14c6f39220562df644d24ac0b74953d96761fe85ef0ef17429bed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_75a4aabf5976200450cd1e51140a8b8c6108b0a83fa8f05c4787b6f8ffb7dc33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75a4aabf5976200450cd1e51140a8b8c6108b0a83fa8f05c4787b6f8ffb7dc33->enter($__internal_75a4aabf5976200450cd1e51140a8b8c6108b0a83fa8f05c4787b6f8ffb7dc33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\t";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("students"), "html", null, true);
        echo "
";
        
        $__internal_75a4aabf5976200450cd1e51140a8b8c6108b0a83fa8f05c4787b6f8ffb7dc33->leave($__internal_75a4aabf5976200450cd1e51140a8b8c6108b0a83fa8f05c4787b6f8ffb7dc33_prof);

        
        $__internal_6789286adad14c6f39220562df644d24ac0b74953d96761fe85ef0ef17429bed->leave($__internal_6789286adad14c6f39220562df644d24ac0b74953d96761fe85ef0ef17429bed_prof);

    }

    // line 8
    public function block_bodyList($context, array $blocks = array())
    {
        $__internal_720653eee4edf87498ea00aacb6c1608c2b0c568151c35f18beeb6bd83b1f6a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_720653eee4edf87498ea00aacb6c1608c2b0c568151c35f18beeb6bd83b1f6a3->enter($__internal_720653eee4edf87498ea00aacb6c1608c2b0c568151c35f18beeb6bd83b1f6a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        $__internal_d99de89833128f8a1dc1eaa832cf8b593dc211e23cd30119a01b92a6ff4ba0c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d99de89833128f8a1dc1eaa832cf8b593dc211e23cd30119a01b92a6ff4ba0c4->enter($__internal_d99de89833128f8a1dc1eaa832cf8b593dc211e23cd30119a01b92a6ff4ba0c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

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
\t                    <th style=\"width:10%;\">";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("matiere"), "html", null, true);
        echo "</th>
\t                    <th style=\"width:10%;\">";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("eleve.nom_prenom"), "html", null, true);
        echo "</th>
\t                    <th style=\"width:10%;\">";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("evaluation.title"), "html", null, true);
        echo " </th>
\t                    <th style=\"width:20%;\">";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("note"), "html", null, true);
        echo "</th>
\t                    <th style=\"width:20%\">";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("global.remark"), "html", null, true);
        echo "</th>
\t                    <th style=\"width:20%;\">";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("global.date"), "html", null, true);
        echo "</th>
\t                    <th style=\"width:10%;\">";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("global.action"), "html", null, true);
        echo "</th>
\t                </tr>
\t            </thead>
\t            <tbody>
\t\t\t\t\t";
        // line 29
        $context["i"] = 0;
        // line 30
        echo "\t\t\t\t\t\t<form name=\"addNote\" id=\"addNote\" action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addNote");
        echo "\" method=\"post\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["datas"] ?? $this->getContext($context, "datas")), "data", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 33
            echo "\t\t\t\t\t\t";
            if ((($context["i"] ?? $this->getContext($context, "i")) == 0)) {
                // line 34
                echo "\t\t\t\t\t\t\t<a style=\"margin-bottom:2%;\" class=\"btn btn-info\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addMatiereEvaluation", array("idClasse" => $this->getAttribute($this->getAttribute($this->getAttribute($context["data"], "eleve", array()), "classe", array()), "id", array()), "idMatiere" => $this->getAttribute($this->getAttribute(($context["datas"] ?? $this->getContext($context, "datas")), "matiere", array()), "id", array()))), "html", null, true);
                echo "\"><i class=\"fa fa-plus\"></i>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("evaluation.add"), "html", null, true);
                echo "</a>
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"idClasse\" value=\"";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["data"], "eleve", array()), "classe", array()), "id", array()), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t";
            }
            // line 37
            echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["datas"] ?? $this->getContext($context, "datas")), "matiere", array()), "nom", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 39
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($context["data"], "eleve", array()), "nom", array()) . " ") . $this->getAttribute($this->getAttribute($context["data"], "eleve", array()), "prenom", array())), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
            // line 41
            $context["j"] = 0;
            // line 42
            echo "
\t\t\t\t\t\t\t\t";
            // line 43
            if (twig_test_empty($this->getAttribute(($context["datas"] ?? $this->getContext($context, "datas")), "evaluations", array()))) {
                // line 44
                echo "\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t";
            }
            // line 50
            echo "\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["datas"] ?? $this->getContext($context, "datas")), "evaluations", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["evaluation"]) {
                // line 51
                echo "\t\t\t\t\t\t\t\t\t";
                $context["bool"] = false;
                // line 52
                echo "
\t\t\t\t\t\t\t\t\t";
                // line 53
                if ((($context["j"] ?? $this->getContext($context, "j")) != 0)) {
                    // line 54
                    echo "\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
                }
                // line 59
                echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
                // line 60
                if ( !(null === $this->getAttribute($context["data"], "note", array()))) {
                    // line 61
                    echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t";
                    // line 62
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
                        // line 63
                        echo "\t\t\t\t\t\t\t\t\t\t\t";
                        if (((($context["bool"] ?? $this->getContext($context, "bool")) == false) && ($this->getAttribute($context["notes"], "evaluation_id", array()) == $this->getAttribute($context["evaluation"], "id", array())))) {
                            // line 64
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 66
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["evaluation"], "nom", array()), "html", null, true);
                            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t<input hidden=\"hidden\" type=\"text\" name=\"evaluation";
                            // line 67
                            echo twig_escape_filter($this->env, ($context["i"] ?? $this->getContext($context, "i")), "html", null, true);
                            echo "\" value=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["evaluation"], "nom", array()), "html", null, true);
                            echo "\" disabled>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" name=\"eleve";
                            // line 70
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["data"], "eleve", array()), "id", array()), "html", null, true);
                            echo "id";
                            echo twig_escape_filter($this->env, ($context["j"] ?? $this->getContext($context, "j")), "html", null, true);
                            echo "note\" value=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["notes"], "note", array()), "html", null, true);
                            echo "\">
\t\t                                        </td>
\t\t                                        <td>
\t\t                                        \t<textarea rows=\"5\" cols=\"80\" class=\"form-control\" name=\"eleve";
                            // line 73
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["data"], "eleve", array()), "id", array()), "html", null, true);
                            echo "id";
                            echo twig_escape_filter($this->env, ($context["j"] ?? $this->getContext($context, "j")), "html", null, true);
                            echo "remarque\" >";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["notes"], "remarque", array()), "html", null, true);
                            echo "</textarea>
\t\t                                        </td>
\t\t                                        <td>
\t\t                                        \t<input value=\"";
                            // line 76
                            echo twig_escape_filter($this->env, $this->getAttribute($context["notes"], "date", array()), "html", null, true);
                            echo "\" type=\"date\" name=\"eleve";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["data"], "eleve", array()), "id", array()), "html", null, true);
                            echo "id";
                            echo twig_escape_filter($this->env, ($context["j"] ?? $this->getContext($context, "j")), "html", null, true);
                            echo "date\">
\t\t                                        </td>
\t\t                                        <td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"eleve";
                            // line 79
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["data"], "eleve", array()), "id", array()), "html", null, true);
                            echo "id";
                            echo twig_escape_filter($this->env, ($context["j"] ?? $this->getContext($context, "j")), "html", null, true);
                            echo "Evaluation\" value=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["evaluation"], "id", array()), "html", null, true);
                            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"eleve";
                            // line 80
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["data"], "eleve", array()), "id", array()), "html", null, true);
                            echo "id";
                            echo twig_escape_filter($this->env, ($context["j"] ?? $this->getContext($context, "j")), "html", null, true);
                            echo "MatiereEleve\" value=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["notes"], "id", array()), "html", null, true);
                            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-danger btn-condensed\" href=\"";
                            // line 81
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delete_note", array("id" => $this->getAttribute($context["notes"], "id", array()))), "html", null, true);
                            echo "\"> <i class=\"fa fa-trash\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 82
                            $context["bool"] = true;
                            // line 83
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            $context["j"] = (($context["j"] ?? $this->getContext($context, "j")) + 1);
                            // line 84
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 86
                        echo "\t\t\t\t\t\t\t\t\t\t\t";
                        if (($this->getAttribute($context["loop"], "last", array()) && (($context["bool"] ?? $this->getContext($context, "bool")) == false))) {
                            // line 87
                            echo "\t\t\t\t\t\t\t\t\t\t\t";
                            // line 88
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 89
                            echo twig_escape_filter($this->env, $this->getAttribute($context["evaluation"], "nom", array()), "html", null, true);
                            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t<input hidden=\"hidden\" type=\"text\" name=\"evaluation";
                            // line 90
                            echo twig_escape_filter($this->env, ($context["i"] ?? $this->getContext($context, "i")), "html", null, true);
                            echo "\" value=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["evaluation"], "nom", array()), "html", null, true);
                            echo "\" disabled>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" name=\"eleve";
                            // line 93
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["data"], "eleve", array()), "id", array()), "html", null, true);
                            echo "id";
                            echo twig_escape_filter($this->env, ($context["j"] ?? $this->getContext($context, "j")), "html", null, true);
                            echo "note\" value=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea rows=\"5\" cols=\"80\" class=\"form-control\" name=\"eleve";
                            // line 96
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["data"], "eleve", array()), "id", array()), "html", null, true);
                            echo "id";
                            echo twig_escape_filter($this->env, ($context["j"] ?? $this->getContext($context, "j")), "html", null, true);
                            echo "remarque\">";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["notes"], "remarque", array()), "html", null, true);
                            echo "</textarea>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"date\" class=\"form-control\" name=\"eleve";
                            // line 99
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["data"], "eleve", array()), "id", array()), "html", null, true);
                            echo "id";
                            echo twig_escape_filter($this->env, ($context["j"] ?? $this->getContext($context, "j")), "html", null, true);
                            echo "date\" value=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["notes"], "date", array()), "html", null, true);
                            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"eleve";
                            // line 102
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["data"], "eleve", array()), "id", array()), "html", null, true);
                            echo "id";
                            echo twig_escape_filter($this->env, ($context["j"] ?? $this->getContext($context, "j")), "html", null, true);
                            echo "Evaluation\" value=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["evaluation"], "id", array()), "html", null, true);
                            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"eleve";
                            // line 103
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["data"], "eleve", array()), "id", array()), "html", null, true);
                            echo "id";
                            echo twig_escape_filter($this->env, ($context["j"] ?? $this->getContext($context, "j")), "html", null, true);
                            echo "MatiereEleve\" value=\"-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 104
                            $context["j"] = (($context["j"] ?? $this->getContext($context, "j")) + 1);
                            // line 105
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 107
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
                    // line 108
                    echo "
\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 109
                    echo "\t

\t\t\t\t\t\t\t\t\t\t";
                    // line 111
                    echo "\t
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 113
                    echo twig_escape_filter($this->env, $this->getAttribute($context["evaluation"], "nom", array()), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t\t\t\t<input hidden=\"hidden\" type=\"text\" name=\"evaluation";
                    // line 114
                    echo twig_escape_filter($this->env, ($context["i"] ?? $this->getContext($context, "i")), "html", null, true);
                    echo "\" value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["evaluation"], "nom", array()), "html", null, true);
                    echo "\" disabled>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" name=\"eleve";
                    // line 117
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["data"], "eleve", array()), "id", array()), "html", null, true);
                    echo "id";
                    echo twig_escape_filter($this->env, ($context["j"] ?? $this->getContext($context, "j")), "html", null, true);
                    echo "note\" value=\"\">
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<textarea rows=\"5\" cols=\"80\" class=\"textArea form-control\" name=\"eleve";
                    // line 120
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["data"], "eleve", array()), "id", array()), "html", null, true);
                    echo "id";
                    echo twig_escape_filter($this->env, ($context["j"] ?? $this->getContext($context, "j")), "html", null, true);
                    echo "remarque\"></textarea>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"date\" class=\"form-control\" name=\"eleve";
                    // line 123
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["data"], "eleve", array()), "id", array()), "html", null, true);
                    echo "id";
                    echo twig_escape_filter($this->env, ($context["j"] ?? $this->getContext($context, "j")), "html", null, true);
                    echo "date\" value=\"\">
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"eleve";
                    // line 126
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["data"], "eleve", array()), "id", array()), "html", null, true);
                    echo "id";
                    echo twig_escape_filter($this->env, ($context["j"] ?? $this->getContext($context, "j")), "html", null, true);
                    echo "Evaluation\" value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["evaluation"], "id", array()), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"eleve";
                    // line 127
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["data"], "eleve", array()), "id", array()), "html", null, true);
                    echo "id";
                    echo twig_escape_filter($this->env, ($context["j"] ?? $this->getContext($context, "j")), "html", null, true);
                    echo "MatiereEleve\" value=\"-1\">
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t";
                    // line 129
                    $context["j"] = (($context["j"] ?? $this->getContext($context, "j")) + 1);
                    // line 130
                    echo "\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
                    // line 131
                    if ((($context["j"] ?? $this->getContext($context, "j")) != 0)) {
                        // line 132
                        echo "\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 134
                    echo "\t\t\t\t\t\t\t\t\t";
                }
                // line 135
                echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evaluation'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 137
            echo "\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"idmatiere";
            echo twig_escape_filter($this->env, ($context["i"] ?? $this->getContext($context, "i")), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["datas"] ?? $this->getContext($context, "datas")), "matiere", array()), "id", array()), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"ideleve";
            // line 138
            echo twig_escape_filter($this->env, ($context["i"] ?? $this->getContext($context, "i")), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["data"], "eleve", array()), "id", array()), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"lengthEvaluation\" value=\"";
            // line 139
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["datas"] ?? $this->getContext($context, "datas")), "evaluations", array())), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t";
            // line 140
            $context["i"] = (($context["i"] ?? $this->getContext($context, "i")) + 1);
            // line 141
            echo "\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 143
        echo "\t\t\t\t\t\t<input type=\"hidden\" name=\"cpt\" value=\"";
        echo twig_escape_filter($this->env, ($context["i"] ?? $this->getContext($context, "i")), "html", null, true);
        echo "\">
\t\t\t\t\t\t<input style=\"margin-bottom:2%;\" type=\"submit\" class=\"submitButton btn btn-primary pull-right\"  value=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("global.update"), "html", null, true);
        echo "\" />
\t\t\t\t\t\t\t
\t\t\t\t\t\t</form>
\t\t\t\t</tbody>
\t\t\t</table>
\t\t</div>

\t<div id=\"listCours\" class=\"table-responsive page-content-wrap page-tabs-item\">
\t\t<table id=\"customers3\" class=\"table datatable\">
            <thead>
                <tr>
                \t<th style=\"width:15%;\" class=\"text-center\">";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("cours.name"), "html", null, true);
        echo "</th>
                    <th class=\"text-center\">";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("cours.support.title"), "html", null, true);
        echo "</th>
                    <th class=\"text-center\">";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("devoir.maison.title"), "html", null, true);
        echo "</th>
                    <th class=\"text-center\">";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("cours.annexe.title"), "html", null, true);
        echo "</th>
                    <th class=\"text-center\">";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("global.action"), "html", null, true);
        echo "</th>
                </tr>
            </thead>
            <tbody>
            \t<a style=\"margin-bottom:2%;\" class=\"btn btn-condensed btn-info\" href=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("new_cours", array("idClasse" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["datas"] ?? $this->getContext($context, "datas")), "data", array()), 0, array(), "array"), "eleve", array()), "classe", array()), "id", array()), "idMatiere" => $this->getAttribute($this->getAttribute(($context["datas"] ?? $this->getContext($context, "datas")), "matiere", array()), "id", array()))), "html", null, true);
        echo "\"><i class=\"fa fa-plus\"></i>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("cours.add"), "html", null, true);
        echo "</a>
\t\t\t\t";
        // line 164
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["datas"] ?? $this->getContext($context, "datas")), "cours", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["cours"]) {
            // line 165
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t";
            // line 167
            echo twig_escape_filter($this->env, $this->getAttribute($context["cours"], "titre", array()), "html", null, true);
            echo " 
\t\t\t\t\t</td>
\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t<a class=\"btn btn-condensed btn-info\" href=\"";
            // line 170
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(((($context["uploads_cours_support"] ?? $this->getContext($context, "uploads_cours_support")) . "/") . $this->getAttribute($context["cours"], "support", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t<i class=\"fa fa-file-text\"></i>
\t\t\t\t\t\t</a> 
\t\t\t\t\t</td>
\t\t\t\t\t<td class=\"text-center\">\t
\t\t\t\t\t\t<a class=\"btn btn-condensed btn-info\" href=\"";
            // line 175
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(((($context["uploads_cours_devoir"] ?? $this->getContext($context, "uploads_cours_devoir")) . "/") . $this->getAttribute($context["cours"], "devoir", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t<i class=\"fa fa-file-text\"></i>
\t\t\t\t\t\t</a> 
\t\t\t\t\t</td>
\t\t\t\t\t<td class=\"text-center\">\t
\t\t\t\t\t\t<a class=\"btn btn-condensed btn-info\" href=\"";
            // line 180
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(((($context["uploads_cours_annexe"] ?? $this->getContext($context, "uploads_cours_annexe")) . "/") . $this->getAttribute($context["cours"], "annexe", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t<i class=\"fa fa-file-text\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</td>
\t\t\t\t\t<td class=\"text-center\">\t
\t\t\t\t\t\t<a class=\"btn btn-condensed btn-info\" href=\"";
            // line 185
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("edit_cours", array("id" => $this->getAttribute($context["cours"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t<i class=\"fa fa-edit\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a class=\"btn btn-condensed btn-danger\" href=\"";
            // line 188
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delete_cours", array("id" => $this->getAttribute($context["cours"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t<i class=\"fa fa-trash\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cours'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 194
        echo "\t\t\t</tbody>
\t\t</table>
\t</div>

\t<style type=\"text/css\">
\t.displayBlock{
\t\tdisplay: block;
\t}
\t</style>
";
        
        $__internal_d99de89833128f8a1dc1eaa832cf8b593dc211e23cd30119a01b92a6ff4ba0c4->leave($__internal_d99de89833128f8a1dc1eaa832cf8b593dc211e23cd30119a01b92a6ff4ba0c4_prof);

        
        $__internal_720653eee4edf87498ea00aacb6c1608c2b0c568151c35f18beeb6bd83b1f6a3->leave($__internal_720653eee4edf87498ea00aacb6c1608c2b0c568151c35f18beeb6bd83b1f6a3_prof);

    }

    // line 205
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c11d3011fd34e89a92b006661b0636655426e6a3bab2835b1e5e17790dde8324 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c11d3011fd34e89a92b006661b0636655426e6a3bab2835b1e5e17790dde8324->enter($__internal_c11d3011fd34e89a92b006661b0636655426e6a3bab2835b1e5e17790dde8324_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_ce5ebfc9b6e0e6c876efbea042e9de9dc3f1e59c4dc1d37af9789a0199e6b30a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce5ebfc9b6e0e6c876efbea042e9de9dc3f1e59c4dc1d37af9789a0199e6b30a->enter($__internal_ce5ebfc9b6e0e6c876efbea042e9de9dc3f1e59c4dc1d37af9789a0199e6b30a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 206
        echo "<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/datatables/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>

\t<script type=\"text/javascript\">

     \$( document ).ready( function() {
     \t\t
     \t\t\$('#customers2').dataTable({
\t\t\t\t\"aaSorting\": []
  \t\t\t});

     \t\t\$('#customers3').dataTable({
\t\t\t\t\"aaSorting\": []
  \t\t\t});


  \t\t\t

     \t\t\t\$('.spinner_decimal').spinner();
     \t\t    \$(\".numberInput\").spinner();
            });
</script>

";
        
        $__internal_ce5ebfc9b6e0e6c876efbea042e9de9dc3f1e59c4dc1d37af9789a0199e6b30a->leave($__internal_ce5ebfc9b6e0e6c876efbea042e9de9dc3f1e59c4dc1d37af9789a0199e6b30a_prof);

        
        $__internal_c11d3011fd34e89a92b006661b0636655426e6a3bab2835b1e5e17790dde8324->leave($__internal_c11d3011fd34e89a92b006661b0636655426e6a3bab2835b1e5e17790dde8324_prof);

    }

    public function getTemplateName()
    {
        return "matieresViews/eleves.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  619 => 206,  610 => 205,  591 => 194,  579 => 188,  573 => 185,  565 => 180,  557 => 175,  549 => 170,  543 => 167,  539 => 165,  535 => 164,  529 => 163,  522 => 159,  518 => 158,  514 => 157,  510 => 156,  506 => 155,  492 => 144,  487 => 143,  480 => 141,  478 => 140,  474 => 139,  468 => 138,  461 => 137,  454 => 135,  451 => 134,  447 => 132,  445 => 131,  442 => 130,  440 => 129,  433 => 127,  425 => 126,  417 => 123,  409 => 120,  401 => 117,  393 => 114,  389 => 113,  385 => 111,  381 => 109,  377 => 108,  363 => 107,  359 => 105,  357 => 104,  351 => 103,  343 => 102,  333 => 99,  323 => 96,  315 => 93,  307 => 90,  303 => 89,  300 => 88,  298 => 87,  295 => 86,  291 => 84,  288 => 83,  286 => 82,  282 => 81,  274 => 80,  266 => 79,  256 => 76,  246 => 73,  236 => 70,  228 => 67,  223 => 66,  220 => 64,  217 => 63,  200 => 62,  197 => 61,  195 => 60,  192 => 59,  185 => 54,  183 => 53,  180 => 52,  177 => 51,  172 => 50,  164 => 44,  162 => 43,  159 => 42,  157 => 41,  152 => 39,  148 => 38,  145 => 37,  140 => 35,  133 => 34,  130 => 33,  126 => 32,  120 => 30,  118 => 29,  111 => 25,  107 => 24,  103 => 23,  99 => 22,  95 => 21,  91 => 20,  87 => 19,  75 => 9,  66 => 8,  51 => 4,  42 => 3,  11 => 1,);
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
\t                    <th style=\"width:10%;\">{{'matiere'|trans}}</th>
\t                    <th style=\"width:10%;\">{{'eleve.nom_prenom'|trans}}</th>
\t                    <th style=\"width:10%;\">{{'evaluation.title'|trans}} </th>
\t                    <th style=\"width:20%;\">{{'note'|trans}}</th>
\t                    <th style=\"width:20%\">{{'global.remark'|trans}}</th>
\t                    <th style=\"width:20%;\">{{'global.date'|trans}}</th>
\t                    <th style=\"width:10%;\">{{'global.action'|trans}}</th>
\t                </tr>
\t            </thead>
\t            <tbody>
\t\t\t\t\t{% set i=0 %}
\t\t\t\t\t\t<form name=\"addNote\" id=\"addNote\" action=\"{{path('addNote')}}\" method=\"post\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t{% for data in datas.data %}
\t\t\t\t\t\t{% if i==0 %}
\t\t\t\t\t\t\t<a style=\"margin-bottom:2%;\" class=\"btn btn-info\" href=\"{{ path('addMatiereEvaluation', { 'idClasse': data.eleve.classe.id, 'idMatiere': datas.matiere.id}) }}\"><i class=\"fa fa-plus\"></i>{{'evaluation.add'|trans}}</a>
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"idClasse\" value=\"{{data.eleve.classe.id}}\">
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>{{datas.matiere.nom}}</td>
\t\t\t\t\t\t\t<td>{{data.eleve.nom~' '~data.eleve.prenom}}</td>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t{% set j=0 %}

\t\t\t\t\t\t\t\t{% if datas.evaluations is empty %}
\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t{% for evaluation in datas.evaluations %}
\t\t\t\t\t\t\t\t\t{% set bool=false %}

\t\t\t\t\t\t\t\t\t{% if j!=0 %}
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t
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
\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" name=\"eleve{{data.eleve.id}}id{{j}}note\" value=\"{{notes.note}}\">
\t\t                                        </td>
\t\t                                        <td>
\t\t                                        \t<textarea rows=\"5\" cols=\"80\" class=\"form-control\" name=\"eleve{{data.eleve.id}}id{{j}}remarque\" >{{notes.remarque}}</textarea>
\t\t                                        </td>
\t\t                                        <td>
\t\t                                        \t<input value=\"{{notes.date}}\" type=\"date\" name=\"eleve{{data.eleve.id}}id{{j}}date\">
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
\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" name=\"eleve{{data.eleve.id}}id{{j}}note\" value=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea rows=\"5\" cols=\"80\" class=\"form-control\" name=\"eleve{{data.eleve.id}}id{{j}}remarque\">{{notes.remarque}}</textarea>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"date\" class=\"form-control\" name=\"eleve{{data.eleve.id}}id{{j}}date\" value=\"{{notes.date}}\">
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
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" name=\"eleve{{data.eleve.id}}id{{j}}note\" value=\"\">
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<textarea rows=\"5\" cols=\"80\" class=\"textArea form-control\" name=\"eleve{{data.eleve.id}}id{{j}}remarque\"></textarea>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"date\" class=\"form-control\" name=\"eleve{{data.eleve.id}}id{{j}}date\" value=\"\">
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
\t\t\t\t\t\t<input style=\"margin-bottom:2%;\" type=\"submit\" class=\"submitButton btn btn-primary pull-right\"  value=\"{{'global.update'|trans}}\" />
\t\t\t\t\t\t\t
\t\t\t\t\t\t</form>
\t\t\t\t</tbody>
\t\t\t</table>
\t\t</div>

\t<div id=\"listCours\" class=\"table-responsive page-content-wrap page-tabs-item\">
\t\t<table id=\"customers3\" class=\"table datatable\">
            <thead>
                <tr>
                \t<th style=\"width:15%;\" class=\"text-center\">{{'cours.name'|trans}}</th>
                    <th class=\"text-center\">{{'cours.support.title'|trans}}</th>
                    <th class=\"text-center\">{{'devoir.maison.title'|trans}}</th>
                    <th class=\"text-center\">{{'cours.annexe.title'|trans}}</th>
                    <th class=\"text-center\">{{'global.action'|trans}}</th>
                </tr>
            </thead>
            <tbody>
            \t<a style=\"margin-bottom:2%;\" class=\"btn btn-condensed btn-info\" href=\"{{ path('new_cours', { 'idClasse': datas.data[0].eleve.classe.id, 'idMatiere': datas.matiere.id}) }}\"><i class=\"fa fa-plus\"></i>{{'cours.add'|trans}}</a>
\t\t\t\t{% for cours in datas.cours %}
\t\t\t\t\t<tr>
\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t{{cours.titre}} 
\t\t\t\t\t</td>
\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t<a class=\"btn btn-condensed btn-info\" href=\"{{asset(uploads_cours_support~'/'~cours.support)}}\">
\t\t\t\t\t\t\t<i class=\"fa fa-file-text\"></i>
\t\t\t\t\t\t</a> 
\t\t\t\t\t</td>
\t\t\t\t\t<td class=\"text-center\">\t
\t\t\t\t\t\t<a class=\"btn btn-condensed btn-info\" href=\"{{asset(uploads_cours_devoir~'/'~cours.devoir)}}\">
\t\t\t\t\t\t\t<i class=\"fa fa-file-text\"></i>
\t\t\t\t\t\t</a> 
\t\t\t\t\t</td>
\t\t\t\t\t<td class=\"text-center\">\t
\t\t\t\t\t\t<a class=\"btn btn-condensed btn-info\" href=\"{{asset(uploads_cours_annexe~'/'~cours.annexe)}}\">
\t\t\t\t\t\t\t<i class=\"fa fa-file-text\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</td>
\t\t\t\t\t<td class=\"text-center\">\t
\t\t\t\t\t\t<a class=\"btn btn-condensed btn-info\" href=\"{{path('edit_cours',{'id':cours.id})}}\">
\t\t\t\t\t\t\t<i class=\"fa fa-edit\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a class=\"btn btn-condensed btn-danger\" href=\"{{path('delete_cours',{'id':cours.id})}}\">
\t\t\t\t\t\t\t<i class=\"fa fa-trash\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</td>
\t\t\t\t\t</tr>
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
<script type=\"text/javascript\" src=\"{{ asset('js/plugins/datatables/jquery.dataTables.min.js')}}\"></script>

\t<script type=\"text/javascript\">

     \$( document ).ready( function() {
     \t\t
     \t\t\$('#customers2').dataTable({
\t\t\t\t\"aaSorting\": []
  \t\t\t});

     \t\t\$('#customers3').dataTable({
\t\t\t\t\"aaSorting\": []
  \t\t\t});


  \t\t\t

     \t\t\t\$('.spinner_decimal').spinner();
     \t\t    \$(\".numberInput\").spinner();
            });
</script>

{% endblock %}", "matieresViews/eleves.html.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\app\\Resources\\views\\matieresViews\\eleves.html.twig");
    }
}
