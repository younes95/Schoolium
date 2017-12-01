<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_194a7ce20f1827c413f8437d94e4c2b51af3952e18e6b1a3400384acd8ffe75c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_b27471c739a31eaf18df60b298013b1a332a6978f6869b249e242e852798cada = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b27471c739a31eaf18df60b298013b1a332a6978f6869b249e242e852798cada->enter($__internal_b27471c739a31eaf18df60b298013b1a332a6978f6869b249e242e852798cada_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_8587f4d7789d6333eb611d5120a3105cadf086ce3d43adf7255464d635a5a921 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8587f4d7789d6333eb611d5120a3105cadf086ce3d43adf7255464d635a5a921->enter($__internal_8587f4d7789d6333eb611d5120a3105cadf086ce3d43adf7255464d635a5a921_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b27471c739a31eaf18df60b298013b1a332a6978f6869b249e242e852798cada->leave($__internal_b27471c739a31eaf18df60b298013b1a332a6978f6869b249e242e852798cada_prof);

        
        $__internal_8587f4d7789d6333eb611d5120a3105cadf086ce3d43adf7255464d635a5a921->leave($__internal_8587f4d7789d6333eb611d5120a3105cadf086ce3d43adf7255464d635a5a921_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_45585e81efe3c6d46ee77c75efde2125f746a8579202714ce7ce3d7c57b384c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45585e81efe3c6d46ee77c75efde2125f746a8579202714ce7ce3d7c57b384c4->enter($__internal_45585e81efe3c6d46ee77c75efde2125f746a8579202714ce7ce3d7c57b384c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_0b7f5a4af00c27ceb4dee408d44d908dbeb9a7ec589bf38c36289398807dc623 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b7f5a4af00c27ceb4dee408d44d908dbeb9a7ec589bf38c36289398807dc623->enter($__internal_0b7f5a4af00c27ceb4dee408d44d908dbeb9a7ec589bf38c36289398807dc623_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_0b7f5a4af00c27ceb4dee408d44d908dbeb9a7ec589bf38c36289398807dc623->leave($__internal_0b7f5a4af00c27ceb4dee408d44d908dbeb9a7ec589bf38c36289398807dc623_prof);

        
        $__internal_45585e81efe3c6d46ee77c75efde2125f746a8579202714ce7ce3d7c57b384c4->leave($__internal_45585e81efe3c6d46ee77c75efde2125f746a8579202714ce7ce3d7c57b384c4_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\app/Resources/FOSUserBundle/views/Group/show.html.twig");
    }
}
