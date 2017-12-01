<?php

/* base.html.twig */
class __TwigTemplate_740b20c196b34746a479cf25c06ce43ebcb1ad6c85615731c4beb8bca454675d extends Twig_Template
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
        $__internal_2664eb65d19e083bb6ac38f3d9bb052e4cbf30ed969fa3c495d744ce2eec04f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2664eb65d19e083bb6ac38f3d9bb052e4cbf30ed969fa3c495d744ce2eec04f2->enter($__internal_2664eb65d19e083bb6ac38f3d9bb052e4cbf30ed969fa3c495d744ce2eec04f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_addd7633f2795fd21af3a17d60c52b5ba0efcdde0d5c44f13eb04d8b5a272419 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_addd7633f2795fd21af3a17d60c52b5ba0efcdde0d5c44f13eb04d8b5a272419->enter($__internal_addd7633f2795fd21af3a17d60c52b5ba0efcdde0d5c44f13eb04d8b5a272419_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_2664eb65d19e083bb6ac38f3d9bb052e4cbf30ed969fa3c495d744ce2eec04f2->leave($__internal_2664eb65d19e083bb6ac38f3d9bb052e4cbf30ed969fa3c495d744ce2eec04f2_prof);

        
        $__internal_addd7633f2795fd21af3a17d60c52b5ba0efcdde0d5c44f13eb04d8b5a272419->leave($__internal_addd7633f2795fd21af3a17d60c52b5ba0efcdde0d5c44f13eb04d8b5a272419_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_10e2bf7d7f30fe017713d3242267ca94a1d7749b1b4517e59176b9a4eb856b23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10e2bf7d7f30fe017713d3242267ca94a1d7749b1b4517e59176b9a4eb856b23->enter($__internal_10e2bf7d7f30fe017713d3242267ca94a1d7749b1b4517e59176b9a4eb856b23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a3266b58723c6fa5149d2b33b42c5a27b28ab1d83d40ce57bfdef74b6a6b20fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3266b58723c6fa5149d2b33b42c5a27b28ab1d83d40ce57bfdef74b6a6b20fc->enter($__internal_a3266b58723c6fa5149d2b33b42c5a27b28ab1d83d40ce57bfdef74b6a6b20fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_a3266b58723c6fa5149d2b33b42c5a27b28ab1d83d40ce57bfdef74b6a6b20fc->leave($__internal_a3266b58723c6fa5149d2b33b42c5a27b28ab1d83d40ce57bfdef74b6a6b20fc_prof);

        
        $__internal_10e2bf7d7f30fe017713d3242267ca94a1d7749b1b4517e59176b9a4eb856b23->leave($__internal_10e2bf7d7f30fe017713d3242267ca94a1d7749b1b4517e59176b9a4eb856b23_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e9e42d1829629ffa7c6beaf1c1a1518192669f0f378501f1bee7651bd583ae7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9e42d1829629ffa7c6beaf1c1a1518192669f0f378501f1bee7651bd583ae7d->enter($__internal_e9e42d1829629ffa7c6beaf1c1a1518192669f0f378501f1bee7651bd583ae7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_9a910cb14dd3757c09f382ef6d4bb422d7bd9e466d09e480c042d504710fcafb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a910cb14dd3757c09f382ef6d4bb422d7bd9e466d09e480c042d504710fcafb->enter($__internal_9a910cb14dd3757c09f382ef6d4bb422d7bd9e466d09e480c042d504710fcafb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_9a910cb14dd3757c09f382ef6d4bb422d7bd9e466d09e480c042d504710fcafb->leave($__internal_9a910cb14dd3757c09f382ef6d4bb422d7bd9e466d09e480c042d504710fcafb_prof);

        
        $__internal_e9e42d1829629ffa7c6beaf1c1a1518192669f0f378501f1bee7651bd583ae7d->leave($__internal_e9e42d1829629ffa7c6beaf1c1a1518192669f0f378501f1bee7651bd583ae7d_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_b640284e1725647460b2c16fdb9aa7cfc4fa3a3d438de5f9f2edf72a51b63d6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b640284e1725647460b2c16fdb9aa7cfc4fa3a3d438de5f9f2edf72a51b63d6b->enter($__internal_b640284e1725647460b2c16fdb9aa7cfc4fa3a3d438de5f9f2edf72a51b63d6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2fd3008b9b41ead9fa10a106d455aba1a33e9c7f2a29b209b971920f1eeca356 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fd3008b9b41ead9fa10a106d455aba1a33e9c7f2a29b209b971920f1eeca356->enter($__internal_2fd3008b9b41ead9fa10a106d455aba1a33e9c7f2a29b209b971920f1eeca356_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2fd3008b9b41ead9fa10a106d455aba1a33e9c7f2a29b209b971920f1eeca356->leave($__internal_2fd3008b9b41ead9fa10a106d455aba1a33e9c7f2a29b209b971920f1eeca356_prof);

        
        $__internal_b640284e1725647460b2c16fdb9aa7cfc4fa3a3d438de5f9f2edf72a51b63d6b->leave($__internal_b640284e1725647460b2c16fdb9aa7cfc4fa3a3d438de5f9f2edf72a51b63d6b_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8a32a7bccb84fc21ec41d3305bbc1448a9a522dcc5a0251cc2d009fb6ff00a1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a32a7bccb84fc21ec41d3305bbc1448a9a522dcc5a0251cc2d009fb6ff00a1a->enter($__internal_8a32a7bccb84fc21ec41d3305bbc1448a9a522dcc5a0251cc2d009fb6ff00a1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_775ce2e9bdf0c9c9d9d7967dcd3b0c4b8dc4b38b07a23bcafa54ec539b865a62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_775ce2e9bdf0c9c9d9d7967dcd3b0c4b8dc4b38b07a23bcafa54ec539b865a62->enter($__internal_775ce2e9bdf0c9c9d9d7967dcd3b0c4b8dc4b38b07a23bcafa54ec539b865a62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 16
        echo "        ";
        
        $__internal_775ce2e9bdf0c9c9d9d7967dcd3b0c4b8dc4b38b07a23bcafa54ec539b865a62->leave($__internal_775ce2e9bdf0c9c9d9d7967dcd3b0c4b8dc4b38b07a23bcafa54ec539b865a62_prof);

        
        $__internal_8a32a7bccb84fc21ec41d3305bbc1448a9a522dcc5a0251cc2d009fb6ff00a1a->leave($__internal_8a32a7bccb84fc21ec41d3305bbc1448a9a522dcc5a0251cc2d009fb6ff00a1a_prof);

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
