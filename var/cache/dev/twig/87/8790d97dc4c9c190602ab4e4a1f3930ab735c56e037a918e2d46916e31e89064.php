<?php

/* :elevesViews:parentEleve.html.twig */
class __TwigTemplate_622c7ff4c62d613cd954f8f3e4823140482df09078769303510ddf24a1d55111 extends Twig_Template
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
        $__internal_55385df51bf4d8e237acd5c52a0e097d786491ad247b4eaca584022b8bd5db66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55385df51bf4d8e237acd5c52a0e097d786491ad247b4eaca584022b8bd5db66->enter($__internal_55385df51bf4d8e237acd5c52a0e097d786491ad247b4eaca584022b8bd5db66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":elevesViews:parentEleve.html.twig"));

        $__internal_73bf2c1cc17f95f677c871ed7cb8b696a3235947ba81ee2bc0f551f94620dba5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73bf2c1cc17f95f677c871ed7cb8b696a3235947ba81ee2bc0f551f94620dba5->enter($__internal_73bf2c1cc17f95f677c871ed7cb8b696a3235947ba81ee2bc0f551f94620dba5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":elevesViews:parentEleve.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_55385df51bf4d8e237acd5c52a0e097d786491ad247b4eaca584022b8bd5db66->leave($__internal_55385df51bf4d8e237acd5c52a0e097d786491ad247b4eaca584022b8bd5db66_prof);

        
        $__internal_73bf2c1cc17f95f677c871ed7cb8b696a3235947ba81ee2bc0f551f94620dba5->leave($__internal_73bf2c1cc17f95f677c871ed7cb8b696a3235947ba81ee2bc0f551f94620dba5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7866d6e3a545999fbb23e04f77cc8a1aef8f63853b0de13738ac323815a70fc6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7866d6e3a545999fbb23e04f77cc8a1aef8f63853b0de13738ac323815a70fc6->enter($__internal_7866d6e3a545999fbb23e04f77cc8a1aef8f63853b0de13738ac323815a70fc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3fc6b3cfbff4f531585783f58a23b2da99b0bc6b3bfa17dcddd44c06f1281ac8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fc6b3cfbff4f531585783f58a23b2da99b0bc6b3bfa17dcddd44c06f1281ac8->enter($__internal_3fc6b3cfbff4f531585783f58a23b2da99b0bc6b3bfa17dcddd44c06f1281ac8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\t<h1>Pas de parent associé à ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["eleve"]) ? $context["eleve"] : $this->getContext($context, "eleve")), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["eleve"]) ? $context["eleve"] : $this->getContext($context, "eleve")), "prenom", array()), "html", null, true);
        echo " </h1>
\t<h2>Selectioner un parent</h2>\t
";
        
        $__internal_3fc6b3cfbff4f531585783f58a23b2da99b0bc6b3bfa17dcddd44c06f1281ac8->leave($__internal_3fc6b3cfbff4f531585783f58a23b2da99b0bc6b3bfa17dcddd44c06f1281ac8_prof);

        
        $__internal_7866d6e3a545999fbb23e04f77cc8a1aef8f63853b0de13738ac323815a70fc6->leave($__internal_7866d6e3a545999fbb23e04f77cc8a1aef8f63853b0de13738ac323815a70fc6_prof);

    }

    // line 8
    public function block_bodyList($context, array $blocks = array())
    {
        $__internal_ca48e1dc029c249477adf5342bee8a6df709782f40b3dc0dd88a660d28e052d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca48e1dc029c249477adf5342bee8a6df709782f40b3dc0dd88a660d28e052d1->enter($__internal_ca48e1dc029c249477adf5342bee8a6df709782f40b3dc0dd88a660d28e052d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        $__internal_5c65d206dcbd236f01cae0bfa41aeff082ec541f15a413263f128b4fa52f54ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c65d206dcbd236f01cae0bfa41aeff082ec541f15a413263f128b4fa52f54ad->enter($__internal_5c65d206dcbd236f01cae0bfa41aeff082ec541f15a413263f128b4fa52f54ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

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
        
        $__internal_5c65d206dcbd236f01cae0bfa41aeff082ec541f15a413263f128b4fa52f54ad->leave($__internal_5c65d206dcbd236f01cae0bfa41aeff082ec541f15a413263f128b4fa52f54ad_prof);

        
        $__internal_ca48e1dc029c249477adf5342bee8a6df709782f40b3dc0dd88a660d28e052d1->leave($__internal_ca48e1dc029c249477adf5342bee8a6df709782f40b3dc0dd88a660d28e052d1_prof);

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
", ":elevesViews:parentEleve.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/views/elevesViews/parentEleve.html.twig");
    }
}
