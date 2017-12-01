<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_0d57c7b0c04715298bdac0bd530efa882ed5e3e0bc266971bc33a05da7c8ae20 extends Twig_Template
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
        $__internal_94f824ff0c96f1f31760a9c9388fbdf71e72cc4e851686643dca3e259984386a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94f824ff0c96f1f31760a9c9388fbdf71e72cc4e851686643dca3e259984386a->enter($__internal_94f824ff0c96f1f31760a9c9388fbdf71e72cc4e851686643dca3e259984386a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        $__internal_57a3e8559da44748b475244db3ee0728fdef5ed24954dc4cd6df8f75a213e634 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57a3e8559da44748b475244db3ee0728fdef5ed24954dc4cd6df8f75a213e634->enter($__internal_57a3e8559da44748b475244db3ee0728fdef5ed24954dc4cd6df8f75a213e634_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

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
        
        $__internal_94f824ff0c96f1f31760a9c9388fbdf71e72cc4e851686643dca3e259984386a->leave($__internal_94f824ff0c96f1f31760a9c9388fbdf71e72cc4e851686643dca3e259984386a_prof);

        
        $__internal_57a3e8559da44748b475244db3ee0728fdef5ed24954dc4cd6df8f75a213e634->leave($__internal_57a3e8559da44748b475244db3ee0728fdef5ed24954dc4cd6df8f75a213e634_prof);

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
", "FOSUserBundle:Group:show_content.html.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\app/Resources/FOSUserBundle/views/Group/show_content.html.twig");
    }
}
