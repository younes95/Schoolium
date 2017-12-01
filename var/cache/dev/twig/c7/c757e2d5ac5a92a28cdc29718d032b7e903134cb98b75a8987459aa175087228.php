<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_561961883cad3065a9158aabe6ced8871315f43b573bb44b9c3b2d3fe4f20ef0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c93194d242cf2a72a1fdccc2a755c755525a21ca1c3220298f59b4c4d79db669 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c93194d242cf2a72a1fdccc2a755c755525a21ca1c3220298f59b4c4d79db669->enter($__internal_c93194d242cf2a72a1fdccc2a755c755525a21ca1c3220298f59b4c4d79db669_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_2fe4642a15d0c339366b3c22ca4dc1a59143442946feb2fa396ecddbd729ee1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fe4642a15d0c339366b3c22ca4dc1a59143442946feb2fa396ecddbd729ee1f->enter($__internal_2fe4642a15d0c339366b3c22ca4dc1a59143442946feb2fa396ecddbd729ee1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c93194d242cf2a72a1fdccc2a755c755525a21ca1c3220298f59b4c4d79db669->leave($__internal_c93194d242cf2a72a1fdccc2a755c755525a21ca1c3220298f59b4c4d79db669_prof);

        
        $__internal_2fe4642a15d0c339366b3c22ca4dc1a59143442946feb2fa396ecddbd729ee1f->leave($__internal_2fe4642a15d0c339366b3c22ca4dc1a59143442946feb2fa396ecddbd729ee1f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_09c4c1aa6f8c2cc4d17faf2fe759ef613040a9b469a6fbc6e70fc100d5e3d4cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09c4c1aa6f8c2cc4d17faf2fe759ef613040a9b469a6fbc6e70fc100d5e3d4cc->enter($__internal_09c4c1aa6f8c2cc4d17faf2fe759ef613040a9b469a6fbc6e70fc100d5e3d4cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_81f390c414ce425940d2d87b633a222fc0600dd5990b4a0d733d4632ce749797 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81f390c414ce425940d2d87b633a222fc0600dd5990b4a0d733d4632ce749797->enter($__internal_81f390c414ce425940d2d87b633a222fc0600dd5990b4a0d733d4632ce749797_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_81f390c414ce425940d2d87b633a222fc0600dd5990b4a0d733d4632ce749797->leave($__internal_81f390c414ce425940d2d87b633a222fc0600dd5990b4a0d733d4632ce749797_prof);

        
        $__internal_09c4c1aa6f8c2cc4d17faf2fe759ef613040a9b469a6fbc6e70fc100d5e3d4cc->leave($__internal_09c4c1aa6f8c2cc4d17faf2fe759ef613040a9b469a6fbc6e70fc100d5e3d4cc_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\app/Resources/FOSUserBundle/views/Group/new.html.twig");
    }
}
