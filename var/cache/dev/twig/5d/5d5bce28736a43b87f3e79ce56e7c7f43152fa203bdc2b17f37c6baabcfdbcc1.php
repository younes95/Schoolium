<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_3425f4f0f6d86161d75d5629198e0a31e20203a2b195dad2fe3d742b8cc175c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@FOSUser/layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_13e7275696b8fdb9c8f86d9500462bc2e5ba6beec516aa7056eb868fdf6c0a34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13e7275696b8fdb9c8f86d9500462bc2e5ba6beec516aa7056eb868fdf6c0a34->enter($__internal_13e7275696b8fdb9c8f86d9500462bc2e5ba6beec516aa7056eb868fdf6c0a34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_e098309562078e2dce70bf743ac27ae60affe94f86b147e5aa9fd337820e93a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e098309562078e2dce70bf743ac27ae60affe94f86b147e5aa9fd337820e93a4->enter($__internal_e098309562078e2dce70bf743ac27ae60affe94f86b147e5aa9fd337820e93a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_13e7275696b8fdb9c8f86d9500462bc2e5ba6beec516aa7056eb868fdf6c0a34->leave($__internal_13e7275696b8fdb9c8f86d9500462bc2e5ba6beec516aa7056eb868fdf6c0a34_prof);

        
        $__internal_e098309562078e2dce70bf743ac27ae60affe94f86b147e5aa9fd337820e93a4->leave($__internal_e098309562078e2dce70bf743ac27ae60affe94f86b147e5aa9fd337820e93a4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_70a2cf0c86238c6f2afb341321e454a1f5a797881803574bdbdcd636f1861bc6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70a2cf0c86238c6f2afb341321e454a1f5a797881803574bdbdcd636f1861bc6->enter($__internal_70a2cf0c86238c6f2afb341321e454a1f5a797881803574bdbdcd636f1861bc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_dbd7385fc17c07db2c6cf8098a5222fc06118bed479a0ee9d59d6d517a71b073 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbd7385fc17c07db2c6cf8098a5222fc06118bed479a0ee9d59d6d517a71b073->enter($__internal_dbd7385fc17c07db2c6cf8098a5222fc06118bed479a0ee9d59d6d517a71b073_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
        ";
        // line 5
        if ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 6
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 7
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 8
                    echo "                    <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                        ";
                    // line 9
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 12
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "        ";
        }
        // line 14
        echo "            ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_dbd7385fc17c07db2c6cf8098a5222fc06118bed479a0ee9d59d6d517a71b073->leave($__internal_dbd7385fc17c07db2c6cf8098a5222fc06118bed479a0ee9d59d6d517a71b073_prof);

        
        $__internal_70a2cf0c86238c6f2afb341321e454a1f5a797881803574bdbdcd636f1861bc6->leave($__internal_70a2cf0c86238c6f2afb341321e454a1f5a797881803574bdbdcd636f1861bc6_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d65a54111638df8a47bf307957c9563794209487aa70f0f660f89bc64af862fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d65a54111638df8a47bf307957c9563794209487aa70f0f660f89bc64af862fa->enter($__internal_d65a54111638df8a47bf307957c9563794209487aa70f0f660f89bc64af862fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_a747d34962f96f02e582ce475c9f4d44ccba9726919796aef31c31073805df53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a747d34962f96f02e582ce475c9f4d44ccba9726919796aef31c31073805df53->enter($__internal_a747d34962f96f02e582ce475c9f4d44ccba9726919796aef31c31073805df53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 15
        echo "            ";
        
        $__internal_a747d34962f96f02e582ce475c9f4d44ccba9726919796aef31c31073805df53->leave($__internal_a747d34962f96f02e582ce475c9f4d44ccba9726919796aef31c31073805df53_prof);

        
        $__internal_d65a54111638df8a47bf307957c9563794209487aa70f0f660f89bc64af862fa->leave($__internal_d65a54111638df8a47bf307957c9563794209487aa70f0f660f89bc64af862fa_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 15,  88 => 14,  85 => 13,  79 => 12,  70 => 9,  65 => 8,  60 => 7,  55 => 6,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
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

        {% if app.request.hasPreviousSession %}
            {% for type, messages in app.session.flashbag.all() %}
                {% for message in messages %}
                    <div class=\"flash-{{ type }}\">
                        {{ message }}
                    </div>
                {% endfor %}
            {% endfor %}
        {% endif %}
            {% block fos_user_content %}
            {% endblock fos_user_content %}
{% endblock %}", "@FOSUser/layout.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/FOSUserBundle/views/layout.html.twig");
    }
}
