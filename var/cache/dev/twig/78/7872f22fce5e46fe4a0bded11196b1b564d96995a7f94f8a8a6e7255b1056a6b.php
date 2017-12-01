<?php

/* elevesViews/parentEleve.html.twig */
class __TwigTemplate_33c34389c6e52d5b144c87b015675868d0f7bae96160f2e354d149aece1b2002 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseList.html.twig", "elevesViews/parentEleve.html.twig", 1);
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
        $__internal_a01695f57e2fd158cad7565bdda5c83b6a8b9b1d6db4b89ee23cf4c75a0273c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a01695f57e2fd158cad7565bdda5c83b6a8b9b1d6db4b89ee23cf4c75a0273c6->enter($__internal_a01695f57e2fd158cad7565bdda5c83b6a8b9b1d6db4b89ee23cf4c75a0273c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "elevesViews/parentEleve.html.twig"));

        $__internal_9a85e39fa5a3332b65bc7ee491686fa5ed8805f7bdc890a3de41123f0ddc59af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a85e39fa5a3332b65bc7ee491686fa5ed8805f7bdc890a3de41123f0ddc59af->enter($__internal_9a85e39fa5a3332b65bc7ee491686fa5ed8805f7bdc890a3de41123f0ddc59af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "elevesViews/parentEleve.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a01695f57e2fd158cad7565bdda5c83b6a8b9b1d6db4b89ee23cf4c75a0273c6->leave($__internal_a01695f57e2fd158cad7565bdda5c83b6a8b9b1d6db4b89ee23cf4c75a0273c6_prof);

        
        $__internal_9a85e39fa5a3332b65bc7ee491686fa5ed8805f7bdc890a3de41123f0ddc59af->leave($__internal_9a85e39fa5a3332b65bc7ee491686fa5ed8805f7bdc890a3de41123f0ddc59af_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c463ee9404ab6ba435b91263901e6cef2687d22c57f8902529363959cabdfabb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c463ee9404ab6ba435b91263901e6cef2687d22c57f8902529363959cabdfabb->enter($__internal_c463ee9404ab6ba435b91263901e6cef2687d22c57f8902529363959cabdfabb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_144a73363f47b706968d67f7b0f518d8c1b4a08cf3c1a603d13a87a3cf9dc9c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_144a73363f47b706968d67f7b0f518d8c1b4a08cf3c1a603d13a87a3cf9dc9c8->enter($__internal_144a73363f47b706968d67f7b0f518d8c1b4a08cf3c1a603d13a87a3cf9dc9c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\t<h1>Pas de parent associé à ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["eleve"]) ? $context["eleve"] : $this->getContext($context, "eleve")), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["eleve"]) ? $context["eleve"] : $this->getContext($context, "eleve")), "prenom", array()), "html", null, true);
        echo " </h1>
\t<h2>Selectioner un parent</h2>\t
";
        
        $__internal_144a73363f47b706968d67f7b0f518d8c1b4a08cf3c1a603d13a87a3cf9dc9c8->leave($__internal_144a73363f47b706968d67f7b0f518d8c1b4a08cf3c1a603d13a87a3cf9dc9c8_prof);

        
        $__internal_c463ee9404ab6ba435b91263901e6cef2687d22c57f8902529363959cabdfabb->leave($__internal_c463ee9404ab6ba435b91263901e6cef2687d22c57f8902529363959cabdfabb_prof);

    }

    // line 8
    public function block_bodyList($context, array $blocks = array())
    {
        $__internal_2d1b1646f0205ce2b25b58b5f96c43179637ddadad8b7889d4ca796dad291fdf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d1b1646f0205ce2b25b58b5f96c43179637ddadad8b7889d4ca796dad291fdf->enter($__internal_2d1b1646f0205ce2b25b58b5f96c43179637ddadad8b7889d4ca796dad291fdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        $__internal_abd8bd0046cccf9ecd7c5ff83f44c0d66c0addc6b771d67e2212ff38c88a1c41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abd8bd0046cccf9ecd7c5ff83f44c0d66c0addc6b771d67e2212ff38c88a1c41->enter($__internal_abd8bd0046cccf9ecd7c5ff83f44c0d66c0addc6b771d67e2212ff38c88a1c41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

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
        
        $__internal_abd8bd0046cccf9ecd7c5ff83f44c0d66c0addc6b771d67e2212ff38c88a1c41->leave($__internal_abd8bd0046cccf9ecd7c5ff83f44c0d66c0addc6b771d67e2212ff38c88a1c41_prof);

        
        $__internal_2d1b1646f0205ce2b25b58b5f96c43179637ddadad8b7889d4ca796dad291fdf->leave($__internal_2d1b1646f0205ce2b25b58b5f96c43179637ddadad8b7889d4ca796dad291fdf_prof);

    }

    public function getTemplateName()
    {
        return "elevesViews/parentEleve.html.twig";
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
", "elevesViews/parentEleve.html.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\app\\Resources\\views\\elevesViews\\parentEleve.html.twig");
    }
}
