<?php

/* base.html.twig */
class __TwigTemplate_0ece4e24c3c79246bde713514b3e0c5ef137f6f29c92a214a7c50585135842f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fc3d9321c35dbfa4ed00f2164f1348e10c8a64a0cf9443628b8b99d2e429eb98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc3d9321c35dbfa4ed00f2164f1348e10c8a64a0cf9443628b8b99d2e429eb98->enter($__internal_fc3d9321c35dbfa4ed00f2164f1348e10c8a64a0cf9443628b8b99d2e429eb98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_dd7d90298fc98f95b886abbd0e007f7791be4419008b50d7ef467b106cb43350 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd7d90298fc98f95b886abbd0e007f7791be4419008b50d7ef467b106cb43350->enter($__internal_dd7d90298fc98f95b886abbd0e007f7791be4419008b50d7ef467b106cb43350_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html style=\"height: 100%;\">
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
         <link rel=\"stylesheet\" type=\"text/css\" id=\"theme\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/theme-default.css"), "html", null, true);
        echo "\"/>
        
    </head>
    <body style=\"height: 100%;\">
        
        ";
        // line 13
        $this->displayBlock('body', $context, $blocks);
        // line 14
        echo "
        ";
        // line 15
        $this->displayBlock('javascripts', $context, $blocks);
        // line 17
        echo "
    </body>
</html>
";
        
        $__internal_fc3d9321c35dbfa4ed00f2164f1348e10c8a64a0cf9443628b8b99d2e429eb98->leave($__internal_fc3d9321c35dbfa4ed00f2164f1348e10c8a64a0cf9443628b8b99d2e429eb98_prof);

        
        $__internal_dd7d90298fc98f95b886abbd0e007f7791be4419008b50d7ef467b106cb43350->leave($__internal_dd7d90298fc98f95b886abbd0e007f7791be4419008b50d7ef467b106cb43350_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_92aeb8d306e00b3e7963964e6d6b1e82113499b60377299d684f07cabe57625a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92aeb8d306e00b3e7963964e6d6b1e82113499b60377299d684f07cabe57625a->enter($__internal_92aeb8d306e00b3e7963964e6d6b1e82113499b60377299d684f07cabe57625a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_100e6daa71c3cca75ee49aad20d8a4dfd7d386d535d7a34aa074ff26c042ad66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_100e6daa71c3cca75ee49aad20d8a4dfd7d386d535d7a34aa074ff26c042ad66->enter($__internal_100e6daa71c3cca75ee49aad20d8a4dfd7d386d535d7a34aa074ff26c042ad66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_100e6daa71c3cca75ee49aad20d8a4dfd7d386d535d7a34aa074ff26c042ad66->leave($__internal_100e6daa71c3cca75ee49aad20d8a4dfd7d386d535d7a34aa074ff26c042ad66_prof);

        
        $__internal_92aeb8d306e00b3e7963964e6d6b1e82113499b60377299d684f07cabe57625a->leave($__internal_92aeb8d306e00b3e7963964e6d6b1e82113499b60377299d684f07cabe57625a_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5bd1ff30e49346a941ecf531b4da90ef83538fea2bb0924ac90976a16b7ef6fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bd1ff30e49346a941ecf531b4da90ef83538fea2bb0924ac90976a16b7ef6fa->enter($__internal_5bd1ff30e49346a941ecf531b4da90ef83538fea2bb0924ac90976a16b7ef6fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_bb775793a699edb20624279554d503718301bc5571c31a245101caee56d1660f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb775793a699edb20624279554d503718301bc5571c31a245101caee56d1660f->enter($__internal_bb775793a699edb20624279554d503718301bc5571c31a245101caee56d1660f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_bb775793a699edb20624279554d503718301bc5571c31a245101caee56d1660f->leave($__internal_bb775793a699edb20624279554d503718301bc5571c31a245101caee56d1660f_prof);

        
        $__internal_5bd1ff30e49346a941ecf531b4da90ef83538fea2bb0924ac90976a16b7ef6fa->leave($__internal_5bd1ff30e49346a941ecf531b4da90ef83538fea2bb0924ac90976a16b7ef6fa_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_081a69a97d4d4a1363338ca5bc93ca1bdbfe87c07780b759f47c0470fff37f3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_081a69a97d4d4a1363338ca5bc93ca1bdbfe87c07780b759f47c0470fff37f3d->enter($__internal_081a69a97d4d4a1363338ca5bc93ca1bdbfe87c07780b759f47c0470fff37f3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f2492c67676d887e6a37fa5ca40d0230106d6383e682d99a00c666f421a4dc65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2492c67676d887e6a37fa5ca40d0230106d6383e682d99a00c666f421a4dc65->enter($__internal_f2492c67676d887e6a37fa5ca40d0230106d6383e682d99a00c666f421a4dc65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f2492c67676d887e6a37fa5ca40d0230106d6383e682d99a00c666f421a4dc65->leave($__internal_f2492c67676d887e6a37fa5ca40d0230106d6383e682d99a00c666f421a4dc65_prof);

        
        $__internal_081a69a97d4d4a1363338ca5bc93ca1bdbfe87c07780b759f47c0470fff37f3d->leave($__internal_081a69a97d4d4a1363338ca5bc93ca1bdbfe87c07780b759f47c0470fff37f3d_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d90f4689a3bdb71a3ce32f737734cba890b486a20cd2f967120ad6b439ef27be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d90f4689a3bdb71a3ce32f737734cba890b486a20cd2f967120ad6b439ef27be->enter($__internal_d90f4689a3bdb71a3ce32f737734cba890b486a20cd2f967120ad6b439ef27be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_7d6626d39b9d9ca08b21dc64b0e5f14f985bd0ccf0d79cda33b9546263d10600 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d6626d39b9d9ca08b21dc64b0e5f14f985bd0ccf0d79cda33b9546263d10600->enter($__internal_7d6626d39b9d9ca08b21dc64b0e5f14f985bd0ccf0d79cda33b9546263d10600_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 16
        echo "        ";
        
        $__internal_7d6626d39b9d9ca08b21dc64b0e5f14f985bd0ccf0d79cda33b9546263d10600->leave($__internal_7d6626d39b9d9ca08b21dc64b0e5f14f985bd0ccf0d79cda33b9546263d10600_prof);

        
        $__internal_d90f4689a3bdb71a3ce32f737734cba890b486a20cd2f967120ad6b439ef27be->leave($__internal_d90f4689a3bdb71a3ce32f737734cba890b486a20cd2f967120ad6b439ef27be_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 16,  126 => 15,  109 => 13,  92 => 6,  74 => 5,  61 => 17,  59 => 15,  56 => 14,  54 => 13,  46 => 8,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html style=\"height: 100%;\">
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
         <link rel=\"stylesheet\" type=\"text/css\" id=\"theme\" href=\"{{ asset('css/theme-default.css') }}\"/>
        
    </head>
    <body style=\"height: 100%;\">
        
        {% block body %}{% endblock %}

        {% block javascripts %}
        {% endblock %}

    </body>
</html>
", "base.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/views/base.html.twig");
    }
}
