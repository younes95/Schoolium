<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_a0825276d6881a422fc5aaa4b7ecfe4fb42e2e18963c952b4c34a0ddcf935e7c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f1b1ac8dcbe7f7be46a916e120cd2f7f0177bc057b9cd65af51d97a17e1cc5a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1b1ac8dcbe7f7be46a916e120cd2f7f0177bc057b9cd65af51d97a17e1cc5a6->enter($__internal_f1b1ac8dcbe7f7be46a916e120cd2f7f0177bc057b9cd65af51d97a17e1cc5a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        $__internal_7a83333ea2bed2a2ec0de81d85077875231a7d6717a17a02b77333f19b7a5e60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a83333ea2bed2a2ec0de81d85077875231a7d6717a17a02b77333f19b7a5e60->enter($__internal_7a83333ea2bed2a2ec0de81d85077875231a7d6717a17a02b77333f19b7a5e60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_f1b1ac8dcbe7f7be46a916e120cd2f7f0177bc057b9cd65af51d97a17e1cc5a6->leave($__internal_f1b1ac8dcbe7f7be46a916e120cd2f7f0177bc057b9cd65af51d97a17e1cc5a6_prof);

        
        $__internal_7a83333ea2bed2a2ec0de81d85077875231a7d6717a17a02b77333f19b7a5e60->leave($__internal_7a83333ea2bed2a2ec0de81d85077875231a7d6717a17a02b77333f19b7a5e60_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"fos_user_group_show\">
    <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>
</div>
", "FOSUserBundle:Group:show_content.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/FOSUserBundle/views/Group/show_content.html.twig");
    }
}
