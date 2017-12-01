<?php

/* base.html.twig */
class __TwigTemplate_35a788ca461558bba9038e4c3f84ff08bc8c4a644fa3eb1893a42b9f45e0624c extends Twig_Template
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
        $__internal_7698725ff8f01e400498323519a8fc87c59aaaaab19c8a82d11657cfd9f8e1c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7698725ff8f01e400498323519a8fc87c59aaaaab19c8a82d11657cfd9f8e1c6->enter($__internal_7698725ff8f01e400498323519a8fc87c59aaaaab19c8a82d11657cfd9f8e1c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_01208ba53edfab754f9161f41f99d1a5278302ff42558856239afe2387da1287 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01208ba53edfab754f9161f41f99d1a5278302ff42558856239afe2387da1287->enter($__internal_01208ba53edfab754f9161f41f99d1a5278302ff42558856239afe2387da1287_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_7698725ff8f01e400498323519a8fc87c59aaaaab19c8a82d11657cfd9f8e1c6->leave($__internal_7698725ff8f01e400498323519a8fc87c59aaaaab19c8a82d11657cfd9f8e1c6_prof);

        
        $__internal_01208ba53edfab754f9161f41f99d1a5278302ff42558856239afe2387da1287->leave($__internal_01208ba53edfab754f9161f41f99d1a5278302ff42558856239afe2387da1287_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_82f3183ad8af90587710f9d3db437dc60bd38cd66c5bfdbdf0b68b76ed2e786f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82f3183ad8af90587710f9d3db437dc60bd38cd66c5bfdbdf0b68b76ed2e786f->enter($__internal_82f3183ad8af90587710f9d3db437dc60bd38cd66c5bfdbdf0b68b76ed2e786f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2ce692a65d4a0b002f7daf3f64355b8c16b88b78151a236edd6888c23057a08d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ce692a65d4a0b002f7daf3f64355b8c16b88b78151a236edd6888c23057a08d->enter($__internal_2ce692a65d4a0b002f7daf3f64355b8c16b88b78151a236edd6888c23057a08d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_2ce692a65d4a0b002f7daf3f64355b8c16b88b78151a236edd6888c23057a08d->leave($__internal_2ce692a65d4a0b002f7daf3f64355b8c16b88b78151a236edd6888c23057a08d_prof);

        
        $__internal_82f3183ad8af90587710f9d3db437dc60bd38cd66c5bfdbdf0b68b76ed2e786f->leave($__internal_82f3183ad8af90587710f9d3db437dc60bd38cd66c5bfdbdf0b68b76ed2e786f_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1b0a1495a7d84e2db2e62b6adc0b37afb5c9a1054cf4315fe3357592db2baa97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b0a1495a7d84e2db2e62b6adc0b37afb5c9a1054cf4315fe3357592db2baa97->enter($__internal_1b0a1495a7d84e2db2e62b6adc0b37afb5c9a1054cf4315fe3357592db2baa97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_7ae5ddccfe7bdd673df8cb6452c25253c6cd649580e0243654dd7c9fc282cfce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ae5ddccfe7bdd673df8cb6452c25253c6cd649580e0243654dd7c9fc282cfce->enter($__internal_7ae5ddccfe7bdd673df8cb6452c25253c6cd649580e0243654dd7c9fc282cfce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_7ae5ddccfe7bdd673df8cb6452c25253c6cd649580e0243654dd7c9fc282cfce->leave($__internal_7ae5ddccfe7bdd673df8cb6452c25253c6cd649580e0243654dd7c9fc282cfce_prof);

        
        $__internal_1b0a1495a7d84e2db2e62b6adc0b37afb5c9a1054cf4315fe3357592db2baa97->leave($__internal_1b0a1495a7d84e2db2e62b6adc0b37afb5c9a1054cf4315fe3357592db2baa97_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_0df7d5178370abc9d0c0b90b00ec7bc0cb0389b9ced7e57ac55e69fdd4912baa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0df7d5178370abc9d0c0b90b00ec7bc0cb0389b9ced7e57ac55e69fdd4912baa->enter($__internal_0df7d5178370abc9d0c0b90b00ec7bc0cb0389b9ced7e57ac55e69fdd4912baa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c26778d85e5dc9e5fe57d41872e53e99d0f6a290d5b0fd7b9f50e4a5fb4383fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c26778d85e5dc9e5fe57d41872e53e99d0f6a290d5b0fd7b9f50e4a5fb4383fb->enter($__internal_c26778d85e5dc9e5fe57d41872e53e99d0f6a290d5b0fd7b9f50e4a5fb4383fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c26778d85e5dc9e5fe57d41872e53e99d0f6a290d5b0fd7b9f50e4a5fb4383fb->leave($__internal_c26778d85e5dc9e5fe57d41872e53e99d0f6a290d5b0fd7b9f50e4a5fb4383fb_prof);

        
        $__internal_0df7d5178370abc9d0c0b90b00ec7bc0cb0389b9ced7e57ac55e69fdd4912baa->leave($__internal_0df7d5178370abc9d0c0b90b00ec7bc0cb0389b9ced7e57ac55e69fdd4912baa_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1a5b61bf8b9c97f39a70e6efd46d3c736b19df7005037945289b3d63cfb51cb8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a5b61bf8b9c97f39a70e6efd46d3c736b19df7005037945289b3d63cfb51cb8->enter($__internal_1a5b61bf8b9c97f39a70e6efd46d3c736b19df7005037945289b3d63cfb51cb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_e240ae634f1c5b5a43584b5daec597a40902cbefeb89cad3dafcd0822c2f0d5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e240ae634f1c5b5a43584b5daec597a40902cbefeb89cad3dafcd0822c2f0d5e->enter($__internal_e240ae634f1c5b5a43584b5daec597a40902cbefeb89cad3dafcd0822c2f0d5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 16
        echo "        ";
        
        $__internal_e240ae634f1c5b5a43584b5daec597a40902cbefeb89cad3dafcd0822c2f0d5e->leave($__internal_e240ae634f1c5b5a43584b5daec597a40902cbefeb89cad3dafcd0822c2f0d5e_prof);

        
        $__internal_1a5b61bf8b9c97f39a70e6efd46d3c736b19df7005037945289b3d63cfb51cb8->leave($__internal_1a5b61bf8b9c97f39a70e6efd46d3c736b19df7005037945289b3d63cfb51cb8_prof);

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
", "base.html.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\app\\Resources\\views\\base.html.twig");
    }
}
