<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_df2b720fdb02c544e7082d99731fd5535a53104bbfb24cfb053757048980720a extends Twig_Template
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
        $__internal_973e6b8af04f5a94df0b373e2d40de21b924059342593c60d50ef34685c41fbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_973e6b8af04f5a94df0b373e2d40de21b924059342593c60d50ef34685c41fbc->enter($__internal_973e6b8af04f5a94df0b373e2d40de21b924059342593c60d50ef34685c41fbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_c1a0bb3b4a3fef4ee5d1659052a41b1091df6fe7d59f2af1322a9ef0f2ccf873 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1a0bb3b4a3fef4ee5d1659052a41b1091df6fe7d59f2af1322a9ef0f2ccf873->enter($__internal_c1a0bb3b4a3fef4ee5d1659052a41b1091df6fe7d59f2af1322a9ef0f2ccf873_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_973e6b8af04f5a94df0b373e2d40de21b924059342593c60d50ef34685c41fbc->leave($__internal_973e6b8af04f5a94df0b373e2d40de21b924059342593c60d50ef34685c41fbc_prof);

        
        $__internal_c1a0bb3b4a3fef4ee5d1659052a41b1091df6fe7d59f2af1322a9ef0f2ccf873->leave($__internal_c1a0bb3b4a3fef4ee5d1659052a41b1091df6fe7d59f2af1322a9ef0f2ccf873_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a355d2f14d57023eba3975d6e612a5052c9f09c57578b0e97442e9f45355a3f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a355d2f14d57023eba3975d6e612a5052c9f09c57578b0e97442e9f45355a3f2->enter($__internal_a355d2f14d57023eba3975d6e612a5052c9f09c57578b0e97442e9f45355a3f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c74f9f7bea9ac40c4d09a92a49b7f6ff6c47d5991bf7359ca4f3fdd67aadfdf8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c74f9f7bea9ac40c4d09a92a49b7f6ff6c47d5991bf7359ca4f3fdd67aadfdf8->enter($__internal_c74f9f7bea9ac40c4d09a92a49b7f6ff6c47d5991bf7359ca4f3fdd67aadfdf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c74f9f7bea9ac40c4d09a92a49b7f6ff6c47d5991bf7359ca4f3fdd67aadfdf8->leave($__internal_c74f9f7bea9ac40c4d09a92a49b7f6ff6c47d5991bf7359ca4f3fdd67aadfdf8_prof);

        
        $__internal_a355d2f14d57023eba3975d6e612a5052c9f09c57578b0e97442e9f45355a3f2->leave($__internal_a355d2f14d57023eba3975d6e612a5052c9f09c57578b0e97442e9f45355a3f2_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_69cc557fa07fe6e9c2cc30c0a48cc60e7f75c7c8a7fb8e29ea37c21ae26d7e27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69cc557fa07fe6e9c2cc30c0a48cc60e7f75c7c8a7fb8e29ea37c21ae26d7e27->enter($__internal_69cc557fa07fe6e9c2cc30c0a48cc60e7f75c7c8a7fb8e29ea37c21ae26d7e27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_26b5bbc5b6661cb8b7edc27db8ee875c2407605a7dcae7747d5a3a6838031ff1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26b5bbc5b6661cb8b7edc27db8ee875c2407605a7dcae7747d5a3a6838031ff1->enter($__internal_26b5bbc5b6661cb8b7edc27db8ee875c2407605a7dcae7747d5a3a6838031ff1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 15
        echo "            ";
        
        $__internal_26b5bbc5b6661cb8b7edc27db8ee875c2407605a7dcae7747d5a3a6838031ff1->leave($__internal_26b5bbc5b6661cb8b7edc27db8ee875c2407605a7dcae7747d5a3a6838031ff1_prof);

        
        $__internal_69cc557fa07fe6e9c2cc30c0a48cc60e7f75c7c8a7fb8e29ea37c21ae26d7e27->leave($__internal_69cc557fa07fe6e9c2cc30c0a48cc60e7f75c7c8a7fb8e29ea37c21ae26d7e27_prof);

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
{% endblock %}", "@FOSUser/layout.html.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\app\\Resources\\FOSUserBundle\\views\\layout.html.twig");
    }
}
