<?php

/* ::base.html.twig */
class __TwigTemplate_f3ae93d649a041df6f1cca0d0c1b250b50fa8538ac0ed7553579070137b65974 extends Twig_Template
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
        $__internal_383808c5383c8d42846a330ffcaa5742f4f7b92ca26b7a4d6dd10a51da2ea0f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_383808c5383c8d42846a330ffcaa5742f4f7b92ca26b7a4d6dd10a51da2ea0f2->enter($__internal_383808c5383c8d42846a330ffcaa5742f4f7b92ca26b7a4d6dd10a51da2ea0f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_7314a8cf69fd0b4904eb1413251e357bc9e3da5d803e210fd1b3da18e2a429f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7314a8cf69fd0b4904eb1413251e357bc9e3da5d803e210fd1b3da18e2a429f8->enter($__internal_7314a8cf69fd0b4904eb1413251e357bc9e3da5d803e210fd1b3da18e2a429f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_383808c5383c8d42846a330ffcaa5742f4f7b92ca26b7a4d6dd10a51da2ea0f2->leave($__internal_383808c5383c8d42846a330ffcaa5742f4f7b92ca26b7a4d6dd10a51da2ea0f2_prof);

        
        $__internal_7314a8cf69fd0b4904eb1413251e357bc9e3da5d803e210fd1b3da18e2a429f8->leave($__internal_7314a8cf69fd0b4904eb1413251e357bc9e3da5d803e210fd1b3da18e2a429f8_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ba3ec1ea319e5f4cdfd73133559f91510e8af7f55de3843ba243e2db201d0e54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba3ec1ea319e5f4cdfd73133559f91510e8af7f55de3843ba243e2db201d0e54->enter($__internal_ba3ec1ea319e5f4cdfd73133559f91510e8af7f55de3843ba243e2db201d0e54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2711aa9527d73b807acec12b7bb4b7051e88058d1b87eb0754fb0ed9c2e273e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2711aa9527d73b807acec12b7bb4b7051e88058d1b87eb0754fb0ed9c2e273e1->enter($__internal_2711aa9527d73b807acec12b7bb4b7051e88058d1b87eb0754fb0ed9c2e273e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_2711aa9527d73b807acec12b7bb4b7051e88058d1b87eb0754fb0ed9c2e273e1->leave($__internal_2711aa9527d73b807acec12b7bb4b7051e88058d1b87eb0754fb0ed9c2e273e1_prof);

        
        $__internal_ba3ec1ea319e5f4cdfd73133559f91510e8af7f55de3843ba243e2db201d0e54->leave($__internal_ba3ec1ea319e5f4cdfd73133559f91510e8af7f55de3843ba243e2db201d0e54_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_57595f9c750b0f80e216682a6572a8ae87b9ff81ab202effe8c30b9e0ee350c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57595f9c750b0f80e216682a6572a8ae87b9ff81ab202effe8c30b9e0ee350c7->enter($__internal_57595f9c750b0f80e216682a6572a8ae87b9ff81ab202effe8c30b9e0ee350c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_17ce4fdae585ecedfff61bcd84cd0810b96332df7dd851b3f9dfd001f16df610 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17ce4fdae585ecedfff61bcd84cd0810b96332df7dd851b3f9dfd001f16df610->enter($__internal_17ce4fdae585ecedfff61bcd84cd0810b96332df7dd851b3f9dfd001f16df610_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_17ce4fdae585ecedfff61bcd84cd0810b96332df7dd851b3f9dfd001f16df610->leave($__internal_17ce4fdae585ecedfff61bcd84cd0810b96332df7dd851b3f9dfd001f16df610_prof);

        
        $__internal_57595f9c750b0f80e216682a6572a8ae87b9ff81ab202effe8c30b9e0ee350c7->leave($__internal_57595f9c750b0f80e216682a6572a8ae87b9ff81ab202effe8c30b9e0ee350c7_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_e2c08fa7893cf4bf5638b902f74c186af1f8cc797b6fba5afc54a041a0e0879f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2c08fa7893cf4bf5638b902f74c186af1f8cc797b6fba5afc54a041a0e0879f->enter($__internal_e2c08fa7893cf4bf5638b902f74c186af1f8cc797b6fba5afc54a041a0e0879f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_680a43b7c0c2146bba55eb4ed9984bfaccc85fff3ddd8ea24dab485be82a4a3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_680a43b7c0c2146bba55eb4ed9984bfaccc85fff3ddd8ea24dab485be82a4a3d->enter($__internal_680a43b7c0c2146bba55eb4ed9984bfaccc85fff3ddd8ea24dab485be82a4a3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_680a43b7c0c2146bba55eb4ed9984bfaccc85fff3ddd8ea24dab485be82a4a3d->leave($__internal_680a43b7c0c2146bba55eb4ed9984bfaccc85fff3ddd8ea24dab485be82a4a3d_prof);

        
        $__internal_e2c08fa7893cf4bf5638b902f74c186af1f8cc797b6fba5afc54a041a0e0879f->leave($__internal_e2c08fa7893cf4bf5638b902f74c186af1f8cc797b6fba5afc54a041a0e0879f_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e7228dee6a083cf771f1ce8d0dada40e2ada7d76345cc6c30ca0ad60e37ef5b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7228dee6a083cf771f1ce8d0dada40e2ada7d76345cc6c30ca0ad60e37ef5b2->enter($__internal_e7228dee6a083cf771f1ce8d0dada40e2ada7d76345cc6c30ca0ad60e37ef5b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_546ba5176ad4b4345173a80234470e1a121153d4a87a9245fb6a519b28d32379 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_546ba5176ad4b4345173a80234470e1a121153d4a87a9245fb6a519b28d32379->enter($__internal_546ba5176ad4b4345173a80234470e1a121153d4a87a9245fb6a519b28d32379_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 16
        echo "        ";
        
        $__internal_546ba5176ad4b4345173a80234470e1a121153d4a87a9245fb6a519b28d32379->leave($__internal_546ba5176ad4b4345173a80234470e1a121153d4a87a9245fb6a519b28d32379_prof);

        
        $__internal_e7228dee6a083cf771f1ce8d0dada40e2ada7d76345cc6c30ca0ad60e37ef5b2->leave($__internal_e7228dee6a083cf771f1ce8d0dada40e2ada7d76345cc6c30ca0ad60e37ef5b2_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
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
", "::base.html.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\app/Resources\\views/base.html.twig");
    }
}
