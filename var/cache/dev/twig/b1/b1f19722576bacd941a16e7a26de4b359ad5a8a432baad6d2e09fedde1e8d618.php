<?php

/* base.html.twig */
class __TwigTemplate_e7512925d8fb00307cc049a1006d437f3028b1723b810d6e2acede88a13e1891 extends Twig_Template
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
        $__internal_d0cc737189668d2ded83aa02dca99db214a28c0842ac54d935fa1297fde51e66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0cc737189668d2ded83aa02dca99db214a28c0842ac54d935fa1297fde51e66->enter($__internal_d0cc737189668d2ded83aa02dca99db214a28c0842ac54d935fa1297fde51e66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_fd69945ab9003926cf39a6e79a42124b7a2414d863078528b5964a02734fa37a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd69945ab9003926cf39a6e79a42124b7a2414d863078528b5964a02734fa37a->enter($__internal_fd69945ab9003926cf39a6e79a42124b7a2414d863078528b5964a02734fa37a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_d0cc737189668d2ded83aa02dca99db214a28c0842ac54d935fa1297fde51e66->leave($__internal_d0cc737189668d2ded83aa02dca99db214a28c0842ac54d935fa1297fde51e66_prof);

        
        $__internal_fd69945ab9003926cf39a6e79a42124b7a2414d863078528b5964a02734fa37a->leave($__internal_fd69945ab9003926cf39a6e79a42124b7a2414d863078528b5964a02734fa37a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_87823e9f9b03e45b24757fa76a1cce9e9b355305c8f0ee3a72f291c897021ef6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87823e9f9b03e45b24757fa76a1cce9e9b355305c8f0ee3a72f291c897021ef6->enter($__internal_87823e9f9b03e45b24757fa76a1cce9e9b355305c8f0ee3a72f291c897021ef6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_86e4f03a467e2aa6dff1650f636f3201894421b098bc62ddd27b228281e04ec8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86e4f03a467e2aa6dff1650f636f3201894421b098bc62ddd27b228281e04ec8->enter($__internal_86e4f03a467e2aa6dff1650f636f3201894421b098bc62ddd27b228281e04ec8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_86e4f03a467e2aa6dff1650f636f3201894421b098bc62ddd27b228281e04ec8->leave($__internal_86e4f03a467e2aa6dff1650f636f3201894421b098bc62ddd27b228281e04ec8_prof);

        
        $__internal_87823e9f9b03e45b24757fa76a1cce9e9b355305c8f0ee3a72f291c897021ef6->leave($__internal_87823e9f9b03e45b24757fa76a1cce9e9b355305c8f0ee3a72f291c897021ef6_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_87d39e89811d8a6d3add54672ba7e4c472647e6e2f9fbdb799c9d41bbbc01b9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87d39e89811d8a6d3add54672ba7e4c472647e6e2f9fbdb799c9d41bbbc01b9d->enter($__internal_87d39e89811d8a6d3add54672ba7e4c472647e6e2f9fbdb799c9d41bbbc01b9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_f98e08ddc796927c34c7ce9bfca823a4c2c0978ee7c3ef3c8c62591e2433dcf3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f98e08ddc796927c34c7ce9bfca823a4c2c0978ee7c3ef3c8c62591e2433dcf3->enter($__internal_f98e08ddc796927c34c7ce9bfca823a4c2c0978ee7c3ef3c8c62591e2433dcf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_f98e08ddc796927c34c7ce9bfca823a4c2c0978ee7c3ef3c8c62591e2433dcf3->leave($__internal_f98e08ddc796927c34c7ce9bfca823a4c2c0978ee7c3ef3c8c62591e2433dcf3_prof);

        
        $__internal_87d39e89811d8a6d3add54672ba7e4c472647e6e2f9fbdb799c9d41bbbc01b9d->leave($__internal_87d39e89811d8a6d3add54672ba7e4c472647e6e2f9fbdb799c9d41bbbc01b9d_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_00fedda71adae49654707b9aaa3382d3888f083c6e2fe9a65c95892d2c69ff74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00fedda71adae49654707b9aaa3382d3888f083c6e2fe9a65c95892d2c69ff74->enter($__internal_00fedda71adae49654707b9aaa3382d3888f083c6e2fe9a65c95892d2c69ff74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8f4d5b49eb84c5b26a7eef41397b0bc96a7cac23636efe6aa44dcaa4b81c2b60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f4d5b49eb84c5b26a7eef41397b0bc96a7cac23636efe6aa44dcaa4b81c2b60->enter($__internal_8f4d5b49eb84c5b26a7eef41397b0bc96a7cac23636efe6aa44dcaa4b81c2b60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8f4d5b49eb84c5b26a7eef41397b0bc96a7cac23636efe6aa44dcaa4b81c2b60->leave($__internal_8f4d5b49eb84c5b26a7eef41397b0bc96a7cac23636efe6aa44dcaa4b81c2b60_prof);

        
        $__internal_00fedda71adae49654707b9aaa3382d3888f083c6e2fe9a65c95892d2c69ff74->leave($__internal_00fedda71adae49654707b9aaa3382d3888f083c6e2fe9a65c95892d2c69ff74_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4dea0f7e8f91a5360cfa7ce202423e2e03738280a12234808bba0ed5c72eafd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4dea0f7e8f91a5360cfa7ce202423e2e03738280a12234808bba0ed5c72eafd3->enter($__internal_4dea0f7e8f91a5360cfa7ce202423e2e03738280a12234808bba0ed5c72eafd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_be295e68adda45e04c83ca3ac8a7844de009e28b6b1daabb2e69285132220f0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be295e68adda45e04c83ca3ac8a7844de009e28b6b1daabb2e69285132220f0c->enter($__internal_be295e68adda45e04c83ca3ac8a7844de009e28b6b1daabb2e69285132220f0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 16
        echo "        ";
        
        $__internal_be295e68adda45e04c83ca3ac8a7844de009e28b6b1daabb2e69285132220f0c->leave($__internal_be295e68adda45e04c83ca3ac8a7844de009e28b6b1daabb2e69285132220f0c_prof);

        
        $__internal_4dea0f7e8f91a5360cfa7ce202423e2e03738280a12234808bba0ed5c72eafd3->leave($__internal_4dea0f7e8f91a5360cfa7ce202423e2e03738280a12234808bba0ed5c72eafd3_prof);

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
