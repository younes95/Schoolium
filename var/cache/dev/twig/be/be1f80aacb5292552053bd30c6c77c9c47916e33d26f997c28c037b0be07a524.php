<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_3273aaa5fba3709efbc3bbbfa179535c3b704ff344e6ad59d9c75ae149616eed extends Twig_Template
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
        $__internal_ceaab460860f2505658a846c967d35319d4880b135820e4637d9f49c42cf7eb9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ceaab460860f2505658a846c967d35319d4880b135820e4637d9f49c42cf7eb9->enter($__internal_ceaab460860f2505658a846c967d35319d4880b135820e4637d9f49c42cf7eb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_f78e6ea76779de50105ed5fc0fa60487523a8956425c76f8bebaa99e4b2e11c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f78e6ea76779de50105ed5fc0fa60487523a8956425c76f8bebaa99e4b2e11c8->enter($__internal_f78e6ea76779de50105ed5fc0fa60487523a8956425c76f8bebaa99e4b2e11c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ceaab460860f2505658a846c967d35319d4880b135820e4637d9f49c42cf7eb9->leave($__internal_ceaab460860f2505658a846c967d35319d4880b135820e4637d9f49c42cf7eb9_prof);

        
        $__internal_f78e6ea76779de50105ed5fc0fa60487523a8956425c76f8bebaa99e4b2e11c8->leave($__internal_f78e6ea76779de50105ed5fc0fa60487523a8956425c76f8bebaa99e4b2e11c8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_11a23b9d6a94c507481a24722e113205a166ef080e8bb0d320725a134a9a80d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11a23b9d6a94c507481a24722e113205a166ef080e8bb0d320725a134a9a80d0->enter($__internal_11a23b9d6a94c507481a24722e113205a166ef080e8bb0d320725a134a9a80d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a28c6b83b86ce90d57d4dc7651364ce9283d7b8b2c04e757c74ffa10c98e7737 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a28c6b83b86ce90d57d4dc7651364ce9283d7b8b2c04e757c74ffa10c98e7737->enter($__internal_a28c6b83b86ce90d57d4dc7651364ce9283d7b8b2c04e757c74ffa10c98e7737_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a28c6b83b86ce90d57d4dc7651364ce9283d7b8b2c04e757c74ffa10c98e7737->leave($__internal_a28c6b83b86ce90d57d4dc7651364ce9283d7b8b2c04e757c74ffa10c98e7737_prof);

        
        $__internal_11a23b9d6a94c507481a24722e113205a166ef080e8bb0d320725a134a9a80d0->leave($__internal_11a23b9d6a94c507481a24722e113205a166ef080e8bb0d320725a134a9a80d0_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_82ed84281ecb6259fdc7b9c58729a6cfe5dcee397e9f34b20a7a2182c235c426 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82ed84281ecb6259fdc7b9c58729a6cfe5dcee397e9f34b20a7a2182c235c426->enter($__internal_82ed84281ecb6259fdc7b9c58729a6cfe5dcee397e9f34b20a7a2182c235c426_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4c1c19403691f41eb256826e0ca973a4b3bb5a5010470e8860ab43299b3307f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c1c19403691f41eb256826e0ca973a4b3bb5a5010470e8860ab43299b3307f5->enter($__internal_4c1c19403691f41eb256826e0ca973a4b3bb5a5010470e8860ab43299b3307f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 15
        echo "            ";
        
        $__internal_4c1c19403691f41eb256826e0ca973a4b3bb5a5010470e8860ab43299b3307f5->leave($__internal_4c1c19403691f41eb256826e0ca973a4b3bb5a5010470e8860ab43299b3307f5_prof);

        
        $__internal_82ed84281ecb6259fdc7b9c58729a6cfe5dcee397e9f34b20a7a2182c235c426->leave($__internal_82ed84281ecb6259fdc7b9c58729a6cfe5dcee397e9f34b20a7a2182c235c426_prof);

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
