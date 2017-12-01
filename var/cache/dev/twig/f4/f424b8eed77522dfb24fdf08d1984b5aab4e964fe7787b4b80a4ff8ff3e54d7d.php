<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_920404c576d1f727c9a0a3f0ddf0c105600378a39a6f43bd7de2357e6d660451 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_a0be43d46d0d8aaeb3f2bd59b775050dfdf2c08d50ee6a9ac8689928a87bad67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0be43d46d0d8aaeb3f2bd59b775050dfdf2c08d50ee6a9ac8689928a87bad67->enter($__internal_a0be43d46d0d8aaeb3f2bd59b775050dfdf2c08d50ee6a9ac8689928a87bad67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $__internal_f3425261af1c2c936bad7366a14e93ef30fa27fcb9e2739fc2fc9c597eee46dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3425261af1c2c936bad7366a14e93ef30fa27fcb9e2739fc2fc9c597eee46dd->enter($__internal_f3425261af1c2c936bad7366a14e93ef30fa27fcb9e2739fc2fc9c597eee46dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a0be43d46d0d8aaeb3f2bd59b775050dfdf2c08d50ee6a9ac8689928a87bad67->leave($__internal_a0be43d46d0d8aaeb3f2bd59b775050dfdf2c08d50ee6a9ac8689928a87bad67_prof);

        
        $__internal_f3425261af1c2c936bad7366a14e93ef30fa27fcb9e2739fc2fc9c597eee46dd->leave($__internal_f3425261af1c2c936bad7366a14e93ef30fa27fcb9e2739fc2fc9c597eee46dd_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_845dbef19e924e2dfc9ca54cad25d91ec740ec7c1cedd3619a71f70f39c922b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_845dbef19e924e2dfc9ca54cad25d91ec740ec7c1cedd3619a71f70f39c922b1->enter($__internal_845dbef19e924e2dfc9ca54cad25d91ec740ec7c1cedd3619a71f70f39c922b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_cb21e1d5d74ee6843f7a8ae9af0d656618e1359bf9c548d080d84dc4de2618af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb21e1d5d74ee6843f7a8ae9af0d656618e1359bf9c548d080d84dc4de2618af->enter($__internal_cb21e1d5d74ee6843f7a8ae9af0d656618e1359bf9c548d080d84dc4de2618af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_cb21e1d5d74ee6843f7a8ae9af0d656618e1359bf9c548d080d84dc4de2618af->leave($__internal_cb21e1d5d74ee6843f7a8ae9af0d656618e1359bf9c548d080d84dc4de2618af_prof);

        
        $__internal_845dbef19e924e2dfc9ca54cad25d91ec740ec7c1cedd3619a71f70f39c922b1->leave($__internal_845dbef19e924e2dfc9ca54cad25d91ec740ec7c1cedd3619a71f70f39c922b1_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/list.html.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\app\\Resources\\FOSUserBundle\\views\\Group\\list.html.twig");
    }
}
