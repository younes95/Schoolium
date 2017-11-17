<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_ae9525c68693141edbdff049b52d9acad7addebd735a3b7dc02a836ed31694e0 extends Twig_Template
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
        $__internal_8304bf32ceafb031e0d03658fe5b13e31afb35b32f4df8b143667bbccc87f2eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8304bf32ceafb031e0d03658fe5b13e31afb35b32f4df8b143667bbccc87f2eb->enter($__internal_8304bf32ceafb031e0d03658fe5b13e31afb35b32f4df8b143667bbccc87f2eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_51f2e9a8c3a016f9dc266481afca7aba6c5a895f1b6514735c65faa07e4e0f82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51f2e9a8c3a016f9dc266481afca7aba6c5a895f1b6514735c65faa07e4e0f82->enter($__internal_51f2e9a8c3a016f9dc266481afca7aba6c5a895f1b6514735c65faa07e4e0f82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8304bf32ceafb031e0d03658fe5b13e31afb35b32f4df8b143667bbccc87f2eb->leave($__internal_8304bf32ceafb031e0d03658fe5b13e31afb35b32f4df8b143667bbccc87f2eb_prof);

        
        $__internal_51f2e9a8c3a016f9dc266481afca7aba6c5a895f1b6514735c65faa07e4e0f82->leave($__internal_51f2e9a8c3a016f9dc266481afca7aba6c5a895f1b6514735c65faa07e4e0f82_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0478ded230859667a2c8839eabb2f8d0f08ee84e813595c56adf2ee6b85ad623 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0478ded230859667a2c8839eabb2f8d0f08ee84e813595c56adf2ee6b85ad623->enter($__internal_0478ded230859667a2c8839eabb2f8d0f08ee84e813595c56adf2ee6b85ad623_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4016b924a6a30bd75efe6ec4bd9b4851ae9a7c837e4e7ea0305756da93943fca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4016b924a6a30bd75efe6ec4bd9b4851ae9a7c837e4e7ea0305756da93943fca->enter($__internal_4016b924a6a30bd75efe6ec4bd9b4851ae9a7c837e4e7ea0305756da93943fca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_4016b924a6a30bd75efe6ec4bd9b4851ae9a7c837e4e7ea0305756da93943fca->leave($__internal_4016b924a6a30bd75efe6ec4bd9b4851ae9a7c837e4e7ea0305756da93943fca_prof);

        
        $__internal_0478ded230859667a2c8839eabb2f8d0f08ee84e813595c56adf2ee6b85ad623->leave($__internal_0478ded230859667a2c8839eabb2f8d0f08ee84e813595c56adf2ee6b85ad623_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_37b37680a0b56f846570dc1c21fdd7ab31d8e463f6a6b3a67086bd78ab580d4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37b37680a0b56f846570dc1c21fdd7ab31d8e463f6a6b3a67086bd78ab580d4a->enter($__internal_37b37680a0b56f846570dc1c21fdd7ab31d8e463f6a6b3a67086bd78ab580d4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b02cae95bf397c3741a781ee9fd9a6b2eb134065bf592e65f9f40f1c2d9fdc89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b02cae95bf397c3741a781ee9fd9a6b2eb134065bf592e65f9f40f1c2d9fdc89->enter($__internal_b02cae95bf397c3741a781ee9fd9a6b2eb134065bf592e65f9f40f1c2d9fdc89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 15
        echo "            ";
        
        $__internal_b02cae95bf397c3741a781ee9fd9a6b2eb134065bf592e65f9f40f1c2d9fdc89->leave($__internal_b02cae95bf397c3741a781ee9fd9a6b2eb134065bf592e65f9f40f1c2d9fdc89_prof);

        
        $__internal_37b37680a0b56f846570dc1c21fdd7ab31d8e463f6a6b3a67086bd78ab580d4a->leave($__internal_37b37680a0b56f846570dc1c21fdd7ab31d8e463f6a6b3a67086bd78ab580d4a_prof);

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
