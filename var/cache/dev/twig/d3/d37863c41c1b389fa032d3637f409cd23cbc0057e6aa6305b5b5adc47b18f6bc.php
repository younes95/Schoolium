<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_f9197e13acf76982a92eef7ea618648142d8b697b5f605c0f78f9e32f7b98c9f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_97a98fc6c22a0d2497e231c8fa422f093a6d74d62456ba62385e41c028ba7f26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97a98fc6c22a0d2497e231c8fa422f093a6d74d62456ba62385e41c028ba7f26->enter($__internal_97a98fc6c22a0d2497e231c8fa422f093a6d74d62456ba62385e41c028ba7f26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_01680f2bcbac1bf409987f0c5ec4742dcb4b434f209a0b5eb00920eaf4b65f3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01680f2bcbac1bf409987f0c5ec4742dcb4b434f209a0b5eb00920eaf4b65f3f->enter($__internal_01680f2bcbac1bf409987f0c5ec4742dcb4b434f209a0b5eb00920eaf4b65f3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_97a98fc6c22a0d2497e231c8fa422f093a6d74d62456ba62385e41c028ba7f26->leave($__internal_97a98fc6c22a0d2497e231c8fa422f093a6d74d62456ba62385e41c028ba7f26_prof);

        
        $__internal_01680f2bcbac1bf409987f0c5ec4742dcb4b434f209a0b5eb00920eaf4b65f3f->leave($__internal_01680f2bcbac1bf409987f0c5ec4742dcb4b434f209a0b5eb00920eaf4b65f3f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_54aa0a1d0bd02e48ca7655ce3a3539f793de2b835d2389a9dce969d82de3fc3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54aa0a1d0bd02e48ca7655ce3a3539f793de2b835d2389a9dce969d82de3fc3a->enter($__internal_54aa0a1d0bd02e48ca7655ce3a3539f793de2b835d2389a9dce969d82de3fc3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ed840e05c9ec792c46730bb959cf855ec9b22db7f009446b31e75a71c608396b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed840e05c9ec792c46730bb959cf855ec9b22db7f009446b31e75a71c608396b->enter($__internal_ed840e05c9ec792c46730bb959cf855ec9b22db7f009446b31e75a71c608396b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_ed840e05c9ec792c46730bb959cf855ec9b22db7f009446b31e75a71c608396b->leave($__internal_ed840e05c9ec792c46730bb959cf855ec9b22db7f009446b31e75a71c608396b_prof);

        
        $__internal_54aa0a1d0bd02e48ca7655ce3a3539f793de2b835d2389a9dce969d82de3fc3a->leave($__internal_54aa0a1d0bd02e48ca7655ce3a3539f793de2b835d2389a9dce969d82de3fc3a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\app/Resources/FOSUserBundle/views/Resetting/request.html.twig");
    }
}
