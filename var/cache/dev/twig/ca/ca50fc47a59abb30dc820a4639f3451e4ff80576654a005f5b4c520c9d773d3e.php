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
        $__internal_c1905207cde5fb5479de0e92bd7e91c9ceb088a25a4c4703d26c251f9e2d503c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1905207cde5fb5479de0e92bd7e91c9ceb088a25a4c4703d26c251f9e2d503c->enter($__internal_c1905207cde5fb5479de0e92bd7e91c9ceb088a25a4c4703d26c251f9e2d503c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_1ef4921201e3365a7727680819261bc5ef4ddc5128364d560eb64b8c8540a01d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ef4921201e3365a7727680819261bc5ef4ddc5128364d560eb64b8c8540a01d->enter($__internal_1ef4921201e3365a7727680819261bc5ef4ddc5128364d560eb64b8c8540a01d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c1905207cde5fb5479de0e92bd7e91c9ceb088a25a4c4703d26c251f9e2d503c->leave($__internal_c1905207cde5fb5479de0e92bd7e91c9ceb088a25a4c4703d26c251f9e2d503c_prof);

        
        $__internal_1ef4921201e3365a7727680819261bc5ef4ddc5128364d560eb64b8c8540a01d->leave($__internal_1ef4921201e3365a7727680819261bc5ef4ddc5128364d560eb64b8c8540a01d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9fc6b49fca7671f0c5117c92f3951ea81436dc3c5158c1e549757db2b9046c19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fc6b49fca7671f0c5117c92f3951ea81436dc3c5158c1e549757db2b9046c19->enter($__internal_9fc6b49fca7671f0c5117c92f3951ea81436dc3c5158c1e549757db2b9046c19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_edc1da044bc4858acfe300b07d2b45b2dcd0c091944473140c329864b65e6778 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edc1da044bc4858acfe300b07d2b45b2dcd0c091944473140c329864b65e6778->enter($__internal_edc1da044bc4858acfe300b07d2b45b2dcd0c091944473140c329864b65e6778_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_edc1da044bc4858acfe300b07d2b45b2dcd0c091944473140c329864b65e6778->leave($__internal_edc1da044bc4858acfe300b07d2b45b2dcd0c091944473140c329864b65e6778_prof);

        
        $__internal_9fc6b49fca7671f0c5117c92f3951ea81436dc3c5158c1e549757db2b9046c19->leave($__internal_9fc6b49fca7671f0c5117c92f3951ea81436dc3c5158c1e549757db2b9046c19_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f963a7c037606fe3d634b2c2c3a277169a0116ab34b58fceadd99e94256cf348 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f963a7c037606fe3d634b2c2c3a277169a0116ab34b58fceadd99e94256cf348->enter($__internal_f963a7c037606fe3d634b2c2c3a277169a0116ab34b58fceadd99e94256cf348_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d0a3dbdd6af28838f553c342b60bc2d7f42c52b88cea96d1c9975f46ef22aa8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0a3dbdd6af28838f553c342b60bc2d7f42c52b88cea96d1c9975f46ef22aa8f->enter($__internal_d0a3dbdd6af28838f553c342b60bc2d7f42c52b88cea96d1c9975f46ef22aa8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 15
        echo "            ";
        
        $__internal_d0a3dbdd6af28838f553c342b60bc2d7f42c52b88cea96d1c9975f46ef22aa8f->leave($__internal_d0a3dbdd6af28838f553c342b60bc2d7f42c52b88cea96d1c9975f46ef22aa8f_prof);

        
        $__internal_f963a7c037606fe3d634b2c2c3a277169a0116ab34b58fceadd99e94256cf348->leave($__internal_f963a7c037606fe3d634b2c2c3a277169a0116ab34b58fceadd99e94256cf348_prof);

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
