<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_67ba3c72f6997b99038689b5b63531c749c36d34fd1e169d8f32364de90151d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "FOSUserBundle::layout.html.twig", 1);
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
        $__internal_bce164310a48c2bef55ca4fbaab99b576c4d375ede47ff70654c003a5e0c296a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bce164310a48c2bef55ca4fbaab99b576c4d375ede47ff70654c003a5e0c296a->enter($__internal_bce164310a48c2bef55ca4fbaab99b576c4d375ede47ff70654c003a5e0c296a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $__internal_3c5de12c3abf24602baa13e4ed35f9e5e0761e21f35198b64d13e53c47f65743 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c5de12c3abf24602baa13e4ed35f9e5e0761e21f35198b64d13e53c47f65743->enter($__internal_3c5de12c3abf24602baa13e4ed35f9e5e0761e21f35198b64d13e53c47f65743_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bce164310a48c2bef55ca4fbaab99b576c4d375ede47ff70654c003a5e0c296a->leave($__internal_bce164310a48c2bef55ca4fbaab99b576c4d375ede47ff70654c003a5e0c296a_prof);

        
        $__internal_3c5de12c3abf24602baa13e4ed35f9e5e0761e21f35198b64d13e53c47f65743->leave($__internal_3c5de12c3abf24602baa13e4ed35f9e5e0761e21f35198b64d13e53c47f65743_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2fade8ae4c41b6eb4fb5c03806758b496529b6ff293aab15dd8ed8d0ca5c9d5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fade8ae4c41b6eb4fb5c03806758b496529b6ff293aab15dd8ed8d0ca5c9d5b->enter($__internal_2fade8ae4c41b6eb4fb5c03806758b496529b6ff293aab15dd8ed8d0ca5c9d5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b984e6a2af60589e6fad4e081f38fbc0ddad7e14245dadcecb36e006e8f01d89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b984e6a2af60589e6fad4e081f38fbc0ddad7e14245dadcecb36e006e8f01d89->enter($__internal_b984e6a2af60589e6fad4e081f38fbc0ddad7e14245dadcecb36e006e8f01d89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
        ";
        // line 5
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 6
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
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
        
        $__internal_b984e6a2af60589e6fad4e081f38fbc0ddad7e14245dadcecb36e006e8f01d89->leave($__internal_b984e6a2af60589e6fad4e081f38fbc0ddad7e14245dadcecb36e006e8f01d89_prof);

        
        $__internal_2fade8ae4c41b6eb4fb5c03806758b496529b6ff293aab15dd8ed8d0ca5c9d5b->leave($__internal_2fade8ae4c41b6eb4fb5c03806758b496529b6ff293aab15dd8ed8d0ca5c9d5b_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c0eebcf1def1fa5b8d946f57a0f93863f500f00e04e5cfc9537dd4bc482fef58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0eebcf1def1fa5b8d946f57a0f93863f500f00e04e5cfc9537dd4bc482fef58->enter($__internal_c0eebcf1def1fa5b8d946f57a0f93863f500f00e04e5cfc9537dd4bc482fef58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_cf2c809893b0eedf7c244de0fc0f0eb1abc2b53524bb7dcfa11877131b7236ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf2c809893b0eedf7c244de0fc0f0eb1abc2b53524bb7dcfa11877131b7236ec->enter($__internal_cf2c809893b0eedf7c244de0fc0f0eb1abc2b53524bb7dcfa11877131b7236ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 15
        echo "            ";
        
        $__internal_cf2c809893b0eedf7c244de0fc0f0eb1abc2b53524bb7dcfa11877131b7236ec->leave($__internal_cf2c809893b0eedf7c244de0fc0f0eb1abc2b53524bb7dcfa11877131b7236ec_prof);

        
        $__internal_c0eebcf1def1fa5b8d946f57a0f93863f500f00e04e5cfc9537dd4bc482fef58->leave($__internal_c0eebcf1def1fa5b8d946f57a0f93863f500f00e04e5cfc9537dd4bc482fef58_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
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
{% endblock %}", "FOSUserBundle::layout.html.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\app/Resources/FOSUserBundle/views/layout.html.twig");
    }
}
