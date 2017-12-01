<?php

/* @FOSUser/Group/show_content.html.twig */
class __TwigTemplate_4fd659cba2b1a93ff6c3567956b7689a7669ce353ae021ac80f211ab6343916a extends Twig_Template
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
        $__internal_0ef8df6c4885d8c360b4f6753eab313cc0a1c09bb298dcd729419777ee93088f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ef8df6c4885d8c360b4f6753eab313cc0a1c09bb298dcd729419777ee93088f->enter($__internal_0ef8df6c4885d8c360b4f6753eab313cc0a1c09bb298dcd729419777ee93088f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

        $__internal_50b9eab847f6fa8717b0e001a4a12a212082251408d1f34e4c73c49ff1e7fa85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50b9eab847f6fa8717b0e001a4a12a212082251408d1f34e4c73c49ff1e7fa85->enter($__internal_50b9eab847f6fa8717b0e001a4a12a212082251408d1f34e4c73c49ff1e7fa85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

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
        
        $__internal_0ef8df6c4885d8c360b4f6753eab313cc0a1c09bb298dcd729419777ee93088f->leave($__internal_0ef8df6c4885d8c360b4f6753eab313cc0a1c09bb298dcd729419777ee93088f_prof);

        
        $__internal_50b9eab847f6fa8717b0e001a4a12a212082251408d1f34e4c73c49ff1e7fa85->leave($__internal_50b9eab847f6fa8717b0e001a4a12a212082251408d1f34e4c73c49ff1e7fa85_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show_content.html.twig";
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
", "@FOSUser/Group/show_content.html.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\app\\Resources\\FOSUserBundle\\views\\Group\\show_content.html.twig");
    }
}
